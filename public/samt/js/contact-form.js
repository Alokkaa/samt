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
    //         type: 'inline',
    //          gallery: {
    //             enabled: true
    //         }
    //     });
    // } catch (err){

    // }


//
        jQuery('.zoom, .zoom-image').magnificPopup({
            delegate: 'a',
            type: 'image',
        callbacks: {
          elementParse: function(item) {
            
            if(item.el.context.className == 'video') {
              item.type = 'iframe',
              // item.iframe = {
              //    patterns: {
              //      youtube: {
              //        index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

              //        // id: 'v=', // String that splits URL in a two parts, second part should be %id%
              //         // Or null - full URL will be returned
              //         // Or a function that should return %id%, for example:
              //         // id: function(url) { return 'parsed id'; } 

              //        // src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
              //      },
              //      vimeo: {
              //        index: 'vimeo.com/',
              //        // id: '/',
              //        // src: '//player.vimeo.com/video/%id%?autoplay=1'
              //      }
              //    }
              // }
            } else {
               item.type = 'image',
               item.tLoading = 'Loading image #%curr%...',
               item.mainClass = 'mfp-img-mobile',
               item.image = {
                 tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
               }
            }

          }
        },
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            }
        
        });
  
  
//


});
