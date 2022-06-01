<?php

require 'ispit.php';

$host = "localhost";
$username = "root";
$password = "";
$baza = "ispitiphp";
$conn = new mysqli($host, $username, $password, $baza);

$ispit = new Ispit($_POST['Naziv'], $_POST['Espb'], $_POST['Ocena'], $_POST['Semestar'], $_POST['Katedra']);
$id = $_POST['Id'];

$query = "update ispit set naziv='$ispit->naziv', espb='$ispit->espb', ocena='$ispit->ocena', semestar='$ispit->semestar', katedra_id='$ispit->katedra_id' where id=$id";
$conn->query($query);
