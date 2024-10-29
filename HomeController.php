<?php
require_once '../app/core/Controller.php';
require_once '../app/models/Item.php';

class HomeController extends Controller
{
    public function index()
    {
        $items = Item::getAll();
        $this->view('home', ['items' => $items]);
    }

    public function create()
    {
        $this->view('create');
    }

    public function store()
    {
        Item::create($_POST);
        header('Location: /home/index');
    }

    public function edit($id)
    {
        $item = Item::getById($id);
        $this->view('edit', ['item' => $item]);
    }

    public function update($id)
    {
        Item::update($id, $_POST);
        header('Location: /home/index');
    }

    public function delete($id)
    {
        Item::delete($id);
        header('Location: /home/index');
    }
}
