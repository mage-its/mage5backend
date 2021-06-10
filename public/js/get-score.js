$(document).ready(function() {
    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;

    function getScore() {
        $.ajax({
            type: "GET",
            url: "/getscore",
            success: function(data) {
                resetTable();
                parseScore(data.score);
                if (data.status === 'FREEZE') {
                    $("#status").css("color", "red");
                    $("#status").html("FREEZE");
                    clearInterval();
                }
            },
            error: function(err) {
                console.warn(err);
            }
        });
    }

    function resetTable() {
        $("#tableBody").html("");
    }

    function parseScore(data) {
        for (var i = 0; i != data.length; i++) {
            var nyawa = 100 + (parseInt(data[i].nyawa) | 0); //convert from string to int
            var score = parseInt(data[i].score) | 0;
            var time = parseInt(data[i].time) | 0;

            var hours = Math.floor(time / 3600);
            time = time - hours * 3600;
            var minutes = Math.floor(time / 60);
            var seconds = time - minutes * 60;

            if (nyawa <= 50) {
                $("#tableBody").append(`
                <tr style="background-color:pink">
                    <td>${data[i].nama_tim}</td>
                    <td>${data[i].no_peserta}</td>
                    <td>${score}</td>
                    <td>${nyawa}</td>
                    <td>${score * nyawa / 100}</td>
                    <td>${hours}:${minutes}:${seconds}</td>
                </tr>`);
            } else {
                $("#tableBody").append(`
                <tr style="background-color:limegreen">
                    <td>${data[i].nama_tim}</td>
                    <td>${data[i].no_peserta}</td>
                    <td>${score}</td>
                    <td>${nyawa}</td>
                    <td>${score * nyawa/100}</td>
                    <td>${hours}:${minutes}:${seconds}</td>
                </tr>`);
            }
        }
    }

    setInterval(getScore, 1000);
});
