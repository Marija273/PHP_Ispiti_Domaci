<?php

require 'ispit.php';

$host = "localhost";
$username = "root";
$password = "";
$baza = "ispitiphp";
$conn = new mysqli($host, $username, $password, $baza);

$upit = '';
if ($_POST['Poredak'] === 'rastuce') {
    $upit = "SELECT ispit.id as isid, ispit.naziv, ispit.espb, ispit.ocena, ispit.semestar, ispit.katedra_id, katedra.naziv as knaz FROM ispit join katedra on ispit.katedra_id=katedra.id ORDER BY ispit.ocena ASC";
} else {
    $upit = "SELECT ispit.id as isid, ispit.naziv, ispit.espb, ispit.ocena, ispit.semestar, ispit.katedra_id, katedra.naziv as knaz FROM ispit join katedra on ispit.katedra_id=katedra.id ORDER BY ispit.ocena DESC";
}
$rs = $conn->query($upit);
$ispiti = array();
while ($i = mysqli_fetch_array($rs)) {
    array_push($ispiti, $i);
}

foreach ($ispiti as $ispit) {
?>
    <tr>
        <td><?php echo $ispit['naziv'];  ?></td>
        <td><?php echo $ispit['espb']  ?></td>
        <td><?php echo $ispit['ocena'];  ?></td>
        <td><?php echo $ispit['semestar'];  ?></td>
        <td><?php echo $ispit['knaz'] ?></td>
        <td>
            <button class="btn btn-danger" id="izmena-btn" value="<?php echo $ispit['isid']; ?>">Izmeni</button>
        </td>
        <td>
            <button class="btn btn-danger" id="brisanje-btn" value="<?php echo $ispit['isid']; ?>">Obriši</button>
        </td>
    <tr>
    <?php
}
    ?>