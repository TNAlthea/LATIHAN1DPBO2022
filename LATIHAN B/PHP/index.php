<?php
include "TimSepakBola.php";

$TimSepakBola1 = new TimSepakBola();
$TimSepakBola1->setNamaTim("Chelsea");
$TimSepakBola1->setAsalNegara("Inggris");
$TimSepakBola1->setNamaPemain("Lukaku");
$TimSepakBola1->setTahunBerdiri(1905);

$TimSepakBola2 = new TimSepakBola("Liverpool", "Inggris", "Fabinho", 1892);
$TimSepakBola3 = new TimSepakBola("Bayern", "Jerman", "Manuel", 1900);
$TimSepakBola4 = new TimSepakBola("Persib", "Indonesia", "Beckham", 1933);

tampilData($TimSepakBola1);
tampilData($TimSepakBola2);
tampilData($TimSepakBola3);
tampilData($TimSepakBola4);

?>
