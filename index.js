$(function () {
    add();
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