let id = $('input[name=id]').val();
let type = $('input[name=type]').val();
var form = $('#form-utama');
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

// if (type == 'olim') {
$("#main-form").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    autoFocus: true,
    onStepChanging: function (event, currentIndex, newIndex) {
        if (currentIndex > newIndex) {
            return true;
        }
        else if (currentIndex != 2) {
            return testIndex();
        } else if (currentIndex == 2) {
            return fileUpload();
        }
        else {
            return true;
        }
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        testIndex();
        return form.valid();
    },
    onFinished: function ()
    {
        window.location.replace('/rekapOlim');
    }
});

function testIndex() {
    $('#form-utama').validate().settings.ignore = ":disabled, :hidden";
    let item = {};
    if ($('#form-utama').valid()){
        $('.form-control').each( function(i, obj) {
            item[$(obj).attr('name')] = $(obj).val().toUpperCase();
        })
        item.asal_info = $('select[name=asal_info').val();
        upload(item);
        return true;
    }
}

function fileUpload() {
    $('#form-utama').validate().settings.ignore = ":disabled, :hidden";

    if ($('#form-utama').valid()){
        var formdata = new FormData(); //init formData

        formdata.append('id', id);
        formdata.append('type', type);
        $('.form-control-file').each( function (i, obj) {
            formdata.append($(obj).attr('name'), $(obj).prop('files')[0]);
        }) 

        $.ajax({
            url: '/upload',
            type: 'POST',

            headers: {
            'X-CSRF-Token': CSRF_TOKEN,
            },
            processData: false,
            contentType:false,
            data:formdata,
            error: function (e) {
                console.log(e);
            }
        })
        return true;
    }
}

function upload(data) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    data._token = CSRF_TOKEN;
    data.id = id;
    data.type = type;
    console.log(data);
    if (id === undefined) {
        $.ajax({
            url: '/signup',
            type: 'POST',
            data,
            success: function (data) {
                id = data.id;
            },
            error: function (e) {
                console.log(e);
            }
        })
    } else {
        $.ajax({
            url: '/update',
            type: 'POST',
            data,
            error: function (e) {
                console.log(e);
            }
        })
    }
}

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
        $('#info').prop('value', "");
    }
})

$('#check').click(function () {
    if (this.checked) {
        $('#check').prop('checked',false);
        $('#snkModal').modal();
    } 
})

function agree() {
    $('#check').prop('checked', true);
}

$('#submitForm').submit(function (e) {
    e.preventDefault();
    $('#submitModal').modal();
})

function submit() {
    $.ajax({
        url:'/submit',
        method:'GET',
        data: {type: type},
        success: function () {
            window.location.replace('/home');
        },
        error: function (e) {
            console.log(e);
        }
    })
}
// }