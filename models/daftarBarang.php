<?php
class daftarBarang {
    private $daftar = [];

    public function __construct() {
        $this->daftar = [
            [
                'id'   => 'B02',
                'nama' => 'Minyak Goreng',
                'qty'  => '100'
            ],
            [
                'id'   => 'B03',
                'nama' => 'Gula',
                'qty'  => '50'
            ],
            [
                'id'   => 'B04',
                'nama' => 'Kopi',
                'qty'  => '500'
            ]
        ];
    }
    public function getDataAll (){
        return $this->daftar;
    }
}

    

