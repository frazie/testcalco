<?php
if (isset($_GET["calc"])){
    $rate = $_GET["rate"];
    $principle = $_GET["princ"];
    $time = $_GET["time"];

    $SimpleInterest = ($rate * $time * $principle)/100;

    echo "your accumulated interest will be $SimpleInterest";
}