<?php

class Katedra
{
    public $id;
    public $naziv;
    public $broj_clanova;
    public $sef;
    public $katedre;

    function vratiKatedre()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $baza = "ispitiphp";
        $conn = new mysqli($host, $username, $password, $baza);

        $upit = "SELECT * FROM katedra";
        $rs = $conn->query($upit);
        $katedre = array();
        while ($k = mysqli_fetch_array($rs)) {
            array_push($katedre, $k);
        }

        return $katedre;
    }
}
