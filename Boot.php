<?php

class Boot
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : 'home/index';
        $url = $this->parseUrl($url);
        
        $controllerName = ucfirst($url[0]) . 'Controller';
        $controllerPath = '../app/controllers/' . $controllerName . '.php';

        if (file_exists($controllerPath)) {
            require_once $controllerPath;
            $controller = new $controllerName;
            $method = isset($url[1]) ? $url[1] : 'index';
            if (method_exists($controller, $method)) {
                unset($url[0], $url[1]);
                call_user_func_array([$controller, $method], $url ? array_values($url) : []);
            }
        } else {
            echo "Controller not found!";
        }
    }

    public function parseUrl($url)
    {
        return explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));
    }
}
