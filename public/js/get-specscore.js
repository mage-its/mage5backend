function getSpecScore() {
    var pos = $("input[name=pos]").val();

    $.ajax({
        url: `/score/${pos}`,
        success: function(data) {
            console.log(data);
        },
        error: function(error) {
            console.log(error);
        }
    });
}
