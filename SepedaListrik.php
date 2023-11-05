<?php

include_once "Kendaraan.php";

class SepedaListrik implements Kendaraan{


    public function stratMesin(): void
    {
        echo"<br><br>Sepeda listrik dinyalakan<br>";
    }

    public function melaju():void
    {
        echo "Sepeda listrik melaju dengan kecepatan 40KM/Jam<br>";
    }

    public function mengerem():void
    {
        echo "Sepeda listrik mengerem dikilometer 10";
    }
}