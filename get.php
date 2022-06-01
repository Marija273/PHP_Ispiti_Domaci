<?php

require 'ispit.php';

$ispit = new Ispit('', '', '', '', '',);
$ispiti = $ispit->vratiIspite();

$trazeniIspit = null;
foreach ($ispiti as $i) {
    if ($i['isid'] == $_POST['Id']) {
        $trazeniIspit = $i;
    }
}


echo json_encode($trazeniIspit);
