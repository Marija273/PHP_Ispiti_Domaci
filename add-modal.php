<div class="modal fade" id="modal-dodaj-ispit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novi ispit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <label>Naziv:</label>
                    <input type="text" class="form-control" id="naziv">
                </div>
                <div>
                    <label>ESPB: </label>
                    <input type="number" class="form-control" id="espb">
                </div>
                <div>
                    <label>Ocena: </label>
                    <input type="number" class="form-control" id="ocena">
                </div>
                <div>
                    <label>Semestar: </label>
                    <input type="text" class="form-control" id="semestar">
                </div>
                <div>
                    <label>Katedra: </label>
                    <select class="form-select" id="katedra">
                        <?php
                        require 'katedra.php';

                        $k = new Katedra();
                        $katedre = $k->vratiKatedre();
                        foreach ($katedre as $kat) {
                        ?>
                            <option value="<?php echo $kat['id']; ?>"><?php echo $kat['naziv'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="dodaj-btn">Dodaj</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
            </div>
        </div>
    </div>
</div>