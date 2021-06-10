$(document).ready(function(){

	$image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:300,
      height:300,
      type:'square' //circle
    },
    boundary:{
      width:350,
      height:350
    }
  });

  $('#gambar').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'base64',
      size: {width:700, height:700},
    }).then(function(response){
        $('#image').val(response);
    })
  });

});  
