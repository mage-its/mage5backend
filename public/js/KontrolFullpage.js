$(document).ready(function() {
    //section 1
    var $gambar1 = $('#logoMage');
    //section 2
    var $judul2 = $('#section2 .judulSection');
    var $gambar2 = $('#logoMage-section1');
    var $penjelasan2 = $('#section2 .penjelasanSection');
    //section 3 slide 1
    var $judul3_1 = $('#section3 #slide1-section3 .judulSection');
    var $gambar3_1 = $('#logoApp-section2');
    var $penjelasan3_1 = $('#section3 #slide1-section3 .penjelasanSection');
    //section 3 slide 2
    var $judul3_2 = $('#section3 #slide2-section3 .judulSection');
    var $gambar3_2 = $('#logoGame-section2');
    var $penjelasan3_2 = $('#section3 #slide2-section3 .penjelasanSection');
    //section 3 slide 3
    var $judul3_3 = $('#section3 #slide3-section3 .judulSection');
    var $gambar3_3 = $('#logoIOT-section2');
    var $penjelasan3_3 = $('#section3 #slide3-section3 .penjelasanSection');
    //section 3 slide 4
    var $judul3_4 = $('#section3 #slide4-section3 .judulSection');
    var $gambar3_4 = $('#logoOlimpiade-section2');
    var $penjelasan3_4 = $('#section3 #slide4-section3 .penjelasanSection');
    //section 3 slide 5
    var $judul3_5 = $('#section3 #slide5-section3 .judulSection');
    var $gambar3_5 = $('#logoESport-section2');
    var $penjelasan3_5 = $('#section3 #slide5-section3 .penjelasanSection');
    //section 4 slide 1
    var $judul4_1 = $('#section4 #slide1-section4 .judulSection');
    var $gambar4_1 = $('#section4 #slide1-section4 .pemateri');
    var $penjelasan4_1 = $('#section4 #slide1-section4 .penjelasanSection');
    //section 4 slide 2
    var $judul4_2 = $('#section4 #slide2-section4 .judulSection');
    var $gambar4_2 = $('#section4 #slide2-section4 .pemateri');
    var $penjelasan4_2 = $('#section4 #slide2-section4 .penjelasanSection');
    //section 5
    var $judul5 = $('#section5 .judulSection');
    var $penjelasan5 = $('#section5 .cd-h-timeline');
    //section 6 slide 1
    var $judul6_1 = $('#section6 #slide1-section6 .judulSection');
    var $gambar6_1 = $('#section6 #slide1-section6 .foto-gallery');
    //section 6 slide 2
    var $judul6_2 = $('#section6 #slide2-section6 .judulSection');
    var $gambar6_2 = $('#section6 #slide2-section6 .foto-gallery');
    //section 6 slide 3
    var $judul6_3 = $('#section6 #slide3-section6 .judulSection');
    var $gambar6_3 = $('#section6 #slide3-section6 .foto-gallery');
    //section 6 slide 4
    var $judul6_4 = $('#section6 #slide4-section6 .judulSection');
    var $gambar6_4 = $('#section6 #slide4-section6 .foto-gallery');
    //section 6 slide 5
    var $judul6_5 = $('#section6 #slide5-section6 .judulSection');
    var $gambar6_5 = $('#section6 #slide5-section6 .foto-gallery');
    //section 6 slide 6
    var $judul6_6 = $('#section6 #slide6-section6 .judulSection');
    var $gambar6_6 = $('#section6 #slide6-section6 .foto-gallery');
    //section 6 slide 7
    var $judul6_7 = $('#section6 #slide7-section6 .judulSection');
    var $gambar6_7 = $('#section6 #slide7-section6 .foto-gallery');
    //section 6 slide 8
    var $judul6_8 = $('#section6 #slide8-section6 .judulSection');
    var $gambar6_8 = $('#section6 #slide8-section6 .foto-gallery');
    //section 6 slide 9
    var $judul6_9 = $('#section6 #slide9-section6 .judulSection');
    var $gambar6_9 = $('#section6 #slide9-section6 .foto-gallery');
    //section 7
    var $gambar7 = $('#section7 .foto-footer');
    var $penjelasan7 = $('#section7 #alamat-footer');

    $('#fullpage').fullpage({
        //sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', 'red'],
        css3: true,
        navigation: true,
        navigationPosition: 'right',
        slidesNavigation: true,
        keyboardScrolling: true,
        controlArrows: true,
        scrollHorizontally: true,
        scrollOverflow: true,
        
        onLeave: function(origin, destination, direction) {
            //section 1
            if((origin.index == 1 || origin.index == 2 || origin.index == 3 || origin.index == 4 || origin.index == 5 || origin.index == 6) && destination.index == 0) { 
                $gambar1.addClass('animated zoomIn'); 
            }
            //section 2
            else if((origin.index == 0 || origin.index == 2 || origin.index == 3 || origin.index == 4 || origin.index == 5 || origin.index == 6) && destination.index == 1) { 
                $judul2.addClass('animated zoomIn');
                $gambar2.addClass('animated zoomIn');
                $penjelasan2.addClass('animated zoomIn');
            }
            //section 3 slide 1
            else if((origin.index == 0 || origin.index == 1 || origin.index == 3 || origin.index == 4 || origin.index == 5 || origin.index == 6) && destination.index == 2) { 
                $judul3_1.addClass('animated zoomIn');
                $gambar3_1.addClass('animated zoomIn');
                $penjelasan3_1.addClass('animated zoomIn');
            }
            //section 4 slide 1
            else if((origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 4 || origin.index == 5 || origin.index == 6) && destination.index == 3) { 
                $judul4_1.addClass('animated zoomIn');
                $gambar4_1.addClass('animated zoomIn');
                $penjelasan4_1.addClass('animated zoomIn');
            }
            //section 5
            else if((origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 3 || origin.index == 5 || origin.index == 6) && destination.index == 4) { 
                $judul5.addClass('animated zoomIn');
                $penjelasan5.addClass('animated zoomIn');
            }
            //section 6 slide 1
            else if((origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 3 || origin.index == 4 || origin.index == 6) && destination.index == 5) { 
                $judul6_1.addClass('animated zoomIn');
                $gambar6_1.addClass('animated zoomIn');
            }
            //section 7
            else if((origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 3 || origin.index == 4 || origin.index == 5) && destination.index == 6) { 
                $gambar7.addClass('animated zoomIn');
                $penjelasan7.addClass('animated zoomIn');
            }

            //HAPUS ANIMASI

            //section 1
            if(origin.index == 0){
                $gambar1.removeClass('animated zoomIn');
            }
            //section 2
            else if(origin.index == 1){
                $judul2.removeClass('animated zoomIn');
                $gambar2.removeClass('animated zoomIn');
                $penjelasan2.removeClass('animated zoomIn');
            }
        },
        afterLoad: function(origin, destination, direction){

        },
        onSlideLeave: function(section, origin, destination, direction){
            //section 3 slide 2
            if(section.index == 2 && (origin.index == 0 || origin.index == 2 || origin.index == 3 || origin.index == 4) && destination.index == 1)
            {
                $judul3_2.addClass('animated zoomIn');
                $gambar3_2.addClass('animated zoomIn');
                $penjelasan3_2.addClass('animated zoomIn');
            }
            //section 3 slide 3
            if(section.index == 2 && (origin.index == 0 || origin.index == 1 || origin.index == 3 || origin.index == 4) && destination.index == 2)
            {
                $judul3_3.addClass('animated zoomIn');
                $gambar3_3.addClass('animated zoomIn');
                $penjelasan3_3.addClass('animated zoomIn');
            }
            //section 3 slide 4
            if(section.index == 2 && (origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 4) && destination.index == 3)
            {
                $judul3_4.addClass('animated zoomIn');
                $gambar3_4.addClass('animated zoomIn');
                $penjelasan3_4.addClass('animated zoomIn');
            }
            //section 3 slide 5
            if(section.index == 2 && (origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 3) && destination.index == 4)
            {
                $judul3_5.addClass('animated zoomIn');
                $gambar3_5.addClass('animated zoomIn');
                $penjelasan3_5.addClass('animated zoomIn');
            }
            //section 4 slide 2
            if(section.index == 3 && (origin.index == 0) && destination.index == 1)
            {
                $judul4_2.addClass('animated zoomIn');
                $gambar4_2.addClass('animated zoomIn');
                $penjelasan4_2.addClass('animated zoomIn');
            }
            //section 6 slide 2
            if(section.index == 5 && (origin.index == 0 || origin.index == 2 || origin.index == 3 || origin.index == 4 || origin.index == 5 || origin.index == 6 || origin.index == 7 || origin.index == 8) && destination.index == 1)
            {
                $judul6_2.addClass('animated zoomIn');
                $gambar6_2.addClass('animated zoomIn');
            }
            //section 6 slide 3
            if(section.index == 5 && (origin.index == 0 || origin.index == 1 || origin.index == 3 || origin.index == 4 || origin.index == 5 || origin.index == 6 || origin.index == 7 || origin.index == 8) && destination.index == 2)
            {
                $judul6_3.addClass('animated zoomIn');
                $gambar6_3.addClass('animated zoomIn');
            }
            //section 6 slide 4
            if(section.index == 5 && (origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 4 || origin.index == 5 || origin.index == 6 || origin.index == 7 || origin.index == 8) && destination.index == 3)
            {
                $judul6_4.addClass('animated zoomIn');
                $gambar6_4.addClass('animated zoomIn');
            }
            //section 6 slide 5
            if(section.index == 5 && (origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 3 || origin.index == 5 || origin.index == 6 || origin.index == 7 || origin.index == 8) && destination.index == 4)
            {
                $judul6_5.addClass('animated zoomIn');
                $gambar6_5.addClass('animated zoomIn');
            }
            //section 6 slide 6
            if(section.index == 5 && (origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 3 || origin.index == 4 || origin.index == 6 || origin.index == 7 || origin.index == 8) && destination.index == 5)
            {
                $judul6_6.addClass('animated zoomIn');
                $gambar6_6.addClass('animated zoomIn');
            }
            //section 6 slide 7
            if(section.index == 5 && (origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 3 || origin.index == 4 || origin.index == 5 || origin.index == 7 || origin.index == 8) && destination.index == 6)
            {
                $judul6_7.addClass('animated zoomIn');
                $gambar6_7.addClass('animated zoomIn');
            }
            //section 6 slide 8
            if(section.index == 5 && (origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 3 || origin.index == 4 || origin.index == 5 || origin.index == 6 || origin.index == 8) && destination.index == 7)
            {
                $judul6_8.addClass('animated zoomIn');
                $gambar6_8.addClass('animated zoomIn');
            }
            //section 6 slide 9
            if(section.index == 5 && (origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 3 || origin.index == 4 || origin.index == 5 || origin.index == 6 || origin.index == 7) && destination.index == 8)
            {
                $judul6_9.addClass('animated zoomIn');
                $gambar6_9.addClass('animated zoomIn');
            }
        },
        afterSlideLoad: function( section, origin, destination, direction){
        
        }
    });
});