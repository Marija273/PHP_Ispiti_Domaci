<table id="tabela-ispiti" class="table table-hover">
    <thead>
        <tr>
            <th>Naziv</th>
            <th>ESPB</th>
            <th>Ocena</th>
            <th>Semestar</th>
            <th>Katedra</th>
            <th>Izmena</th>
            <th>Obriši</th>
        </tr>
    </thead>
    <tbody>
        <?php

        require 'ispit.php';

        $ispit = new Ispit('', '', '', '', '');
        $ispiti = $ispit->vratiIspite();

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

    </tbody>
</table>