$(function () {
    add();
    get();
    update();
});


function add() {

    $(document).on('click', '#dodaj-btn', function () {

        let naziv = $('#naziv').val();
        let espb = $('#espb').val();
        let ocena = $('#ocena').val();
        let semestar = $('#semestar').val();
        let katedra = $('#katedra').val();

        $.ajax(
            {
                url: 'add.php',
                method: 'post',
                data: { Naziv: naziv, Espb: espb, Ocena: ocena, Semestar: semestar, Katedra: katedra },

                success: function () {
                    {
                        alert('Ispit uspešno ubačen u bazu podataka!')
                    }
                }
            });
    })

}


function get() {

    $(document).on('click', '#izmena-btn', function () {

        let id = $(this).attr('value');

        $.ajax({
            url: 'get.php',
            method: 'post',
            data: { Id: id },
            dataType: 'JSON',

            success: function (data) {
                $('#modal-izmeni-ispit').modal('show');
                $('#e_naziv').val(data.naziv);
                $('#e_espb').val(data.espb);
                $('#e_ocena').val(data.ocena);
                $('#e_semestar').val(data.semestar);
                $('#e_katedra').val(data.katedra_id);
                $('#id_label').val(data.isid);
            }
        });
    })
}

function update() {

    $(document).on('click', '#e_izmeni-btn', function () {

        let id = $('#id_label').val();
        let naziv = $('#e_naziv').val();
        let espb = $('#e_espb').val();
        let ocena = $('#e_ocena').val();
        let semestar = $('#e_semestar').val();
        let katedra = $('#e_katedra').val();

        $.ajax({
            url: 'update.php',
            method: 'post',
            data: {
                Id: id,
                Naziv: naziv,
                Espb: espb,
                Ocena: ocena,
                Semestar: semestar,
                Katedra: katedra,
            },

            success: function () {
                alert('Ispit uspešno izmenjen u bazi podataka!')
            }
        })
    });
}