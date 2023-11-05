<?php

include_once "Kendaraan.php";

class Motor implements Kendaraan{


    public function stratMesin(): void
    {
        echo"<br><br>Motor dinyalakan<br>";
    }

    public function melaju():void
    {
        echo "Motor melaju dengan kecepatan 70KM/Jam<br>";
    }

    public function mengerem():void
    {
        echo "Motor mengerem dikilometer 30";
    }
}