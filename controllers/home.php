<?php

class Home extends Controller{
	private $dt;
	private $df;
	public function __construct (){
		$this->dt = $this->loadmodel("barang");
		$this->df = $this->loadmodel("daftarBarang");
	}
	public function index (){
		echo "anda memanggil action index \n";
	}
	public function home ($data1,$data2){
		echo "anda memanggil action home ";
	}
	public function lihatdata(){
		echo $this->dt->getData();
	}
	public function listbarang() {
		 foreach ($this->df->getDataAll() as $item) {
        echo $item['id'] . " " . $item['nama'] . " " . $item['qty'];
        echo "<br>";
    }
    	$data = $this->df->getDataAll();
		$this->loadview('home/listbarang',$data);
   
    }
}

