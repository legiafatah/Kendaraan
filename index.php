<?php
include_once "Mobil.php";
include_once "Motor.php";
include_once "SepedaListrik.php";

$yotoya = new Mobil();
$yotoya->stratMesin();
$yotoya->melaju();
$yotoya->mengerem();

$sapru = new Motor();
$sapru->stratMesin();
$sapru->melaju();
$sapru->mengerem();

$goda = new SepedaListrik();
$goda->stratMesin();
$goda->melaju();
$goda->mengerem();