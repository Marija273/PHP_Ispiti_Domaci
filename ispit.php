 <?php

    class Ispit
    {

        public $id;
        public $naziv;
        public $espb;
        public $ocena;
        public $semestar;
        public $katedra_id;

        function __construct($naziv, $espb, $ocena, $semestar, $katedra_id)
        {
            $this->naziv = $naziv;
            $this->espb = $espb;
            $this->ocena = $ocena;
            $this->semestar = $semestar;
            $this->katedra_id = $katedra_id;
        }

        function vratiIspite()
        {
            $host = "localhost";
            $username = "root";
            $password = "";
            $baza = "ispitiphp";
            $conn = new mysqli($host, $username, $password, $baza);

            $upit = "SELECT ispit.id as isid, ispit.naziv, ispit.espb, ispit.ocena, ispit.semestar, ispit.katedra_id, katedra.naziv as knaz FROM ispit join katedra on ispit.katedra_id=katedra.id";
            $rs = $conn->query($upit);
            $ispiti = array();
            while ($i = mysqli_fetch_array($rs)) {
                array_push($ispiti, $i);
            }

            return $ispiti;
        }
    }
