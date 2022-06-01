<?php

$host = "localhost";
$username = "root";
$password = "";
$baza = "ispitiphp";
$conn = new mysqli($host, $username, $password, $baza);

$query = "DELETE FROM ispit WHERE id=" . $_POST['Id'];
$conn->query($query);
