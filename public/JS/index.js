// $('.carousel').carousel()
$(document).ready(function() {
    // lokasi
    $('#title-label').click(function() {
        $('#value-label').slideToggle(500);
    });

    // harga tiket
    $('#title-label-2').click(function() {
        $('#value-label-2').slideToggle(500);
    });

    //waktu operasional
    $('#title-label-3').click(function() {
        $('#value-label-3').slideToggle(500);
    });
});