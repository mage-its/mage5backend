function submitScore() {
    var noPeserta = $("input[name=no_peserta]").val();
    var pos = $("input[name=pos]").val();
    var score = $("input[name=score]").val();
    var nyawa = $("input[name=nyawa]").val();
    var elapsedTime = $("input[name=elapsed_time]").val();

    var a = elapsedTime.split(':'); // split it at the colons

    // minutes are worth 60 seconds. Hours are worth 60 minutes.
    var seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]); 

    console.log(seconds);

    $.ajax({
        type: "POST",
        url: "/scoreInput",
        dataType: "json",
        data: {
            _token: $('meta[name="csrf-token"]').attr("content"),
            no_peserta: noPeserta,
            pos: pos,
            score: score,
            nyawa: nyawa,
            elapsed_time:seconds 
        },
        success: function(data) {
            console.log(data);
            if (data.status === "OK") {
                $("#status").html(
                    "<div class='alert alert-success'>Submit Berhasil</div>"
                );
                $("input[name=pos]").val("");
                $("input[name=score]").val("");
                $("input[name=nyawa]").val("");
                $("input[name=elapsed_time]").val("");
            }
        },
        error: function(error) {
            $("#status").html(
                "<div class='alert alert-danger'>Submit GAGAL, hubungi anak web</div>"
            );
            console.log(error);
        }
    });
}
