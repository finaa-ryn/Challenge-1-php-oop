<?php

class Smartphone {
    public $merk = "merk";
    public $chipset = "chipset";
    public $ram = "ram";

    public function tampilSmartphone(){
        return "$this->merk, $this->chipset, $this->ram";
    }
}

$oppo = new Smartphone();
$oppo->merk = "Oppo a57";
$oppo->chipset = "Dimensi 810";
$oppo->ram = "8 gb";

$samsung = new Smartphone();
$samsung->merk = "Samsung a54";
$samsung->chipset = "Exynos 1380";
$samsung->ram = "6 gb";

$vivo = new Smartphone();
$vivo->merk = "Vivo x50";
$vivo->chipset = "Snapdragon 730";
$vivo->ram = "8 gb";

$iphone = new Smartphone();
$iphone->merk = "Iphone 12";
$iphone->chipset = "A14 Bionic";
$iphone->ram = "4 gb";


echo $oppo->tampilSmartphone();
echo "<br>";
echo $samsung->tampilSmartphone();
echo "<br>";
echo $vivo->tampilSmartphone();
echo "<br>";
echo $iphone->tampilSmartphone();

?>