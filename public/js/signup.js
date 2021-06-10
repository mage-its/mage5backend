function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}    

$('select[name=asal_info]').change(function () {
    if ($(this).val() == 4) {
        $('#info').prop('disabled', false);
        $('#info').prop('required', true);
    } else {
        $('#info').prop('disabled', true);
        $('#info').prop('required', true);
    }
})

$('select[name=cabang_lomba]').change(function () {
    if ($(this).val() == 3) {
        $('#kat').prop('disabled', true);
        $('#kat').prop('required', false);
        $('#kat').prop('value', 1);
    } else {
        $('#kat').prop('disabled', false);
        $('#kat').prop('required', true);
    }
})

$('#check').click(function () {
    if (this.checked) {
        $('#check').prop('checked',false);
        $('#snkModal').modal();
    } 
})

function agree () {
    $('#check').prop('checked', true);
}

function showModal() {
    $('#submitModal').modal();
}