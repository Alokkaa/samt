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
 // delegate: 'a',
 type: 'image',
 tLoading: 'Loading image #%curr%...',
 mainClass: 'mfp-img-mobile',
 gallery: {
 enabled: true,
 navigateByImgClick: true,
 preload: [0,1] // Will preload 0 - before current, and 1 after the current image
 },
 image: {
 tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
 /*titleSrc: function(item) {
 return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
 }*/
 },
 callbacks: {
 elementParse: function(item) {
 // the class name
 if(item.el.context.className == 'video-link') {
 item.type = 'iframe';
 } else {
 item.type = 'image';
 }
 }
 },
});


});



