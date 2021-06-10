function getFeedback() {
    var id = $('input[name="soal_id"]').val();
    var jawaban = $('textarea[name="jawaban-olim"]')
        .val()
        .toUpperCase();

    $.ajax({
        type: "POST",
        url: "/check",
        dataType: "json",
        data: {
            _token: $('meta[name="csrf-token"]').attr("content"),
            id: id,
            "jawaban-olim": jawaban
        },

        success: function(data) {
            console.log(data.feedback_redirect);
            $("#konten").html(data.feedback);
            $(".jawabansalah").html(data.jawaban_salah);
            // location.replace("/rasi/"+data.feedback_redirect);
        },

        error: function(error) {
            console.log(error);
        }
    });
}
