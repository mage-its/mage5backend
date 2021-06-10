function copyStringToClipboard (str) {
    // Create new element
    var el = document.createElement('textarea');
    // Set value (string to be copied)
    el.value = str;
    // Set non-editable to avoid focus and move outside of view
    el.setAttribute('readonly', '');
    el.style = {position: 'absolute', left: '-9999px'};
    document.body.appendChild(el);
    // Select text inside element
    el.select();
    // Copy text to clipboard
    document.execCommand('copy');
    // Remove temporary element
    document.body.removeChild(el);
 }

 const sleep = (milliseconds) => {
    return new Promise(resolve => setTimeout(resolve, milliseconds))
  }

$(document).ready(function() {
    $('#overlay').fadeIn(300);
   //  $('.popke2').fadeOut(300);
 });

 $('#close').click(function() {
    $('#overlay').fadeOut(300);
 });

//  $('#copy').click(function() {
   
//     copyStringToClipboard("OLIMAGESERU");
//  });

//  $('.btn-syarat').click(function() {
   
//     $('.popke1').fadeOut(300);
//     sleep(500).then(() => {
//         $('.popke2').fadeIn(300);
//       })
//  });

//  $('.btn-kembali').click(function() {
//     $('.popke2').fadeOut(300);
//     sleep(500).then(() => {
//         $('.popke1').fadeIn(300);//do stuff
//       })
//  });