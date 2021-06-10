<?php
    ini_set('date.timezone', 'Asia/Jakarta');
?>

<script>
    var endTime = $('meta[name="endTime"]').attr('content')
    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour *24;
    var timer;
    var end = new Date(endTime);


    function showRemaining()
    {
        var now = new Date()

        var distance = end - now;
        console.log(distance);
        console.log(`end: ${end}`);
        console.log(`now: ${now}`);

        if (distance <= 0 ) { 
            clearInterval( timer );
            window.location.replace("/waktuhabis");
        } 
        else {
            var days=Math.floor(distance / _day);
            var hours=Math.floor((distance % _day ) / _hour );
            var minutes=Math.floor( (distance % _hour) / _minute );
            var seconds=Math.floor((distance % _minute) / _second );
            document.getElementById("countdown").innerHTML="Waktu Tersisa" + hours + " : " + minutes + " : " + seconds + " " +"<br>";
        }

    }

    timer = setInterval(showRemaining, 1000);
</script>