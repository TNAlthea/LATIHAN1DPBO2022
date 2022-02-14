<?php

class TimSepakBola
{
    //atribut privat
    private $NamaTim = "Lorem Ipsum";
    private $AsalNegaraTim = "Indonesia";
    private $NamaPemain = "Ipsum Lorem";
    private $TahunBerdiri = 1;
    
    //construct
    public function __construct($NamaTim = "Lorem Ipsum", $AsalNegaraTim = "Indonesia", $NamaPemain = "Ipsum Lorem", $TahunBerdiri = 2000){
        $this->NamaTim = $NamaTim;
        $this->AsalNegaraTim = $AsalNegaraTim;
        $this->NamaPemain = $NamaPemain;
        $this->TahunBerdiri = $TahunBerdiri;
    }
    
    /*get set*/
    public function setNamaTim($NamaTim){
        $this->NamaTim = $NamaTim;
    }

    public function getNamaTim(){
        return $this->NamaTim;
    }

    public function setAsalNegara($AsalNegaraTim){
        $this->AsalNegaraTim = $AsalNegaraTim;
    }

    public function getAsalNegara(){
        return $this->AsalNegaraTim;
    }

    public function setNamaPemain($NamaPemain){
        $this->NamaPemain = $NamaPemain;
    }

    public function getNamaPemain(){
        return $this->NamaPemain;
    }

    public function setTahunBerdiri($TahunBerdiri){
        $this->TahunBerdiri = $TahunBerdiri;
    }

    public function getTahunBerdiri(){
        return $this->TahunBerdiri;
    }

}

//fungsi untuk menampilkan data
function tampilData($TimSepakBola){
    echo "Data Tim Sepak Bola" ."<br>";
    echo "Nama Tim: " .$TimSepakBola->getNamaTim() ."<br>";
    echo "Asal Negara Tim: " .$TimSepakBola->getAsalNegara() ."<br>";
    echo "Nama Pemain: " .$TimSepakBola->getNamaPemain() ."<br>";
    echo "Tahun Tim Didirikan: " .$TimSepakBola->getTahunBerdiri() ."<br> ======== <br>";
}

?>
