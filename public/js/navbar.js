$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#section2');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('.barAtas').css('background-color', 'black');
          $('.tengah').css('opacity', '1');
       } else {
          $('.barAtas').css('background-color', 'transparent');
          $('.tengah').css('opacity', '0');
       }
   });
});