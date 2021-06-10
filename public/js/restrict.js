var ta = document.getElementById("restrict");
ta.addEventListener(
    'keypress',
    function (e)
    {
        var str = document.getElementById("restrict").value;
        if (str.length >= 20)
        {
            e.preventDefault();
        }
        if (e.keyCode==44)
        {
            document.getElementById("restrict").value += ".";
            e.preventDefault();
        }
        else if (e.keyCode==13)
        {
            getFeedback();
            e.preventDefault();
        }
        else if (!((e.keyCode>=48&&e.keyCode<=57)||(e.keyCode>=65&&e.keyCode<=90)||(e.keyCode>=97&&e.keyCode<=122)||(e.keyCode==32|| (e.keyCode==46) || (e.keyCode==45))))
        {
            alert("Input yang diperbolehkan hanya A-Z, 0-9, titik, spasi dan strip");
            e.preventDefault();
        }
    }
);

function showPassword(){
    var password = document.getElementById("showPass");
    if (password.type == "password"){
        password.type = "text";
    }
    else{
        password.type = "password";
    }
}