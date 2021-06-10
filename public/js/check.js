function Checking() {
    let promoCode = $('#promo_code').val();
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    console.log(promoCode);
    $.ajax({
        headers: {'X-CSRF-TOKEN' : CSRF_TOKEN},
        type: 'POST',
        url: '/checkCode',
        data: {promo_code: promoCode},
        dataType: 'json',
        success: function(data) {
            console.log(data.status);
            if (data.status) {
                $("#code_error")
                .replaceWith("<div id='code_error' class='text-success'>Sukses, Promo akan diberlakukan apabila anda mendaftar<div>");
            } else {
                $("#code_error")
                .replaceWith("<div id='code_error' class='text-danger'>Kode tidak ditemukan<div>");
            }
        },
        error: function(data) {
            $("#code_error").html(data);
        }
    });
}