$(document).ready(function() {
    var endTime = $('meta[name="endTime"]').attr("content");
    var currentTime = $('meta[name="currentTime"]').attr("content");
    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;
    var end = new Date(endTime);
    var current = new Date(currentTime);
    var distance = end - current;

    function showRemaining() {
        if (distance <= 0) {
            clearInterval(timer);
            window.location.replace("/intro");
        } else {
            var hours = ("0" + Math.floor((distance % _day) / _hour)).slice(-2);
            var minutes = ("0" + Math.floor((distance % _hour) / _minute)).slice(-2);
            var seconds = ("0" + Math.floor((distance % _minute) / _second)).slice(-2);
            document.getElementById("countdown").innerHTML =
                "" + hours + " : " + minutes + " : " + seconds + " " + "<br>";

            distance = distance - 1000;
        }
    }

    showRemaining();
    timer = setInterval(showRemaining, 1000);
});
