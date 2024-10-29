<?php
class Barang{

    private $id;
    private $nama;
    private $qty;

    public function __construct (){
        $this->id = "B01";
        $this->nama = "B01";
        $this->qty = "B01";

    }
    public function getData(){
        return "Data yang diminta dari model barang : $this->nama, $this->id, $this->qty";
    }
    
    }

