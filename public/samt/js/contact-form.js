var $ = jQuery.noConflict();

$(document).ready(function($) {
	"use strict";
	
    /* ---------------------------------------------------------------------- */
    /*  Contact Form
    /* ---------------------------------------------------------------------- */

    var submitContact = $('#submit_contact'),
        message = $('#msg');

    submitContact.on('click', function(e){
        e.preventDefault();

        var $this = $(this);
        
        $.ajax({
            type: "POST",
            url: 'contact.php',
            dataType: 'json',
            cache: false,
            data: $('#contact-form').serialize(),
            success: function(data) {

                if(data.info !== 'error'){
                    $this.parents('form').find('input[type=text],textarea,select').filter(':visible').val('');
                    message.hide().removeClass('success').removeClass('error').addClass('success').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
                } else {
                    message.hide().removeClass('success').removeClass('error').addClass('error').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
                }
            }
        });
    });

    // try {
    //     var ZoomImage = jQuery('.zoom, .zoom-image');
    //     ZoomImage.magnificPopup({
    //         type: 'iframe',
    //          gallery: {
    //             enabled: true
    //         }
    //     });
    // } catch (err){

    // }


    $('.zoom, .zoom-image').magnificPopup({
      type:'image',
      removalDelay: 300,
      mainClass: 'mfp-fade'
    });
     
    $('.youtube').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 300,
      preloader: false,
      fixedContentPos: false
    });

});



