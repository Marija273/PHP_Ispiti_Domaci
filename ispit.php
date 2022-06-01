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
    }
