$(function () {
    add();
    get();
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
            }
        });
    })
}