<?php

class Mahasiswa
{
    private $NIM = 0;
    private $Nama = "Lorem Ipsum";
    private $JK = "Laki-Laki";
    private $ProgramStudi = "Ilmu Komputer";
    private $Semester = 1;

    public function __construct($NIM = 0, $Nama = "Lorem Ipsum", $JK = "Laki-Laki", $ProgramStudi = "Ilmu Komputer", $Semester = 1){
        $this->NIM = $NIM;
        $this->Nama = $Nama;
        $this->JK = $JK;
        $this->ProgramStudi = $ProgramStudi;
        $this->Semester = $Semester;
    }

    public function setNIM($NIM){
        $this->NIM = $NIM;
    }

    public function getNIM(){
        return $this->NIM;
    }

    public function setNama($Nama){
        $this->Nama = $Nama;
    }

    public function getNama(){
        return $this->Nama;
    }

    public function setJK($JK){
        $this->JK = $JK;
    }

    public function getJK(){
        return $this->JK;
    }

    public function setProgramStudi($ProgramStudi){
        $this->ProgramStudi = $ProgramStudi;
    }

    public function getProgramStudi(){
        return $this->ProgramStudi;
    }

    public function setSemester($Semester){
        $this->Semester = $Semester;
    }

    public function getSemester(){
        return $this->Semester;
    }

}

function tampilData($Mahasiswa){
    echo "Data mahasiswa" ."<br>";
    echo "NIM: " .$Mahasiswa->getNIM() ."<br>";
    echo "Nama: " .$Mahasiswa->getNama() ."<br>";
    echo "Jenis Kelamin: " .$Mahasiswa->getJK() ."<br>";
    echo "Program Studi: " .$Mahasiswa->getProgramStudi() ."<br>";
    echo "Semester: " .$Mahasiswa->getSemester() ."<br> ======== <br>";
}

?>
