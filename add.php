<?php

require 'ispit.php';

$host = "localhost";
$username = "root";
$password = "";
$baza = "ispitiphp";
$conn = new mysqli($host, $username, $password, $baza);

$ispit = new Ispit($_POST['Naziv'], $_POST['Espb'], $_POST['Ocena'], $_POST['Semestar'], $_POST['Katedra']);


$upit = "INSERT INTO ispit (naziv, espb, ocena, semestar, katedra_id) 
    VALUES ('$ispit->naziv', '$ispit->espb', '$ispit->ocena', '$ispit->semestar', '$ispit->katedra_id')";

$conn->query($upit);
