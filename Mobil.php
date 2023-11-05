<?php

include_once "Kendaraan.php";

class Mobil implements Kendaraan{


    public function stratMesin(): void
    {
        echo"Mobil dinyalakan<br>";
    }
    public function melaju():void
    {
        echo "Mobil melaju dengan kecepatan 100KM/Jam<br>";
    }

    public function mengerem():void
    {
        echo "Mobil mengerem dikilometer 50";
    }
}