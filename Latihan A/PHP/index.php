<?php
include "Mahasiswa.php";

$Mahasiswa1 = new Mahasiswa();
$Mahasiswa1->setNIM(2199999);
$Mahasiswa1->setNama("Fulan");
$Mahasiswa1->setJK("Laki-Laki");
$Mahasiswa1->setProgramStudi("Ilmu Komputer");
$Mahasiswa1->setSemester(2);

$Mahasiswa2 = new Mahasiswa(2011111, "Fulanah", "Perempuan", "Ilmu Komputer", 4);
$Mahasiswa3 = new Mahasiswa(1601021, "Ujang", "Laki-Laki", "Teknik Ninjutsu", 12);
$Mahasiswa4 = new Mahasiswa(1934123, "City", "Perempuan", "Sastra Mesin", 6);

tampilData($Mahasiswa1);
tampilData($Mahasiswa2);
tampilData($Mahasiswa3);
tampilData($Mahasiswa4);

?>
