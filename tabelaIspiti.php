<table id="tabela-ispiti" class="table table-hover">
    <thead>
        <tr>
            <th>Naziv</th>
            <th>ESPB</th>
            <th>Ocena</th>
            <th>Semestar</th>
            <th>Katedra</th>
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
            <tr>
            <?php
        }
            ?>

    </tbody>
</table>