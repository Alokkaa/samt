@include('samt.header')

        <div class="container-wrapper">
            <div id="container">
                <!-- start container -->
                <div class="center">
                    <div class="page-wrapper">

                        <div id="post-79" class="post-79 page type-page status-publish hentry">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_content_element">
                                                <div id="map_canvas" class="mapStyleClass"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid boxed">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="vc_titles title_align_center">
                                                <h1 class="has_subtitle_bottom">Get in touch</h1>
                                                <div class="subtitle_bottom">leave your questions to barking dog team and we will bark in 24 hours</div>
                                            </div>
                                            <div role="form" class="wpcf7" id="wpcf7-f4-p79-o1" lang="en-US" dir="ltr">
                                                <div class="screen-reader-response"></div>
                                                <form id="contact-form" action="#">
                                                    <div class="contact-form-image"><img src="samt/images/coffee-cup.png" alt="" /></div>
                                                    <div class="pego-contact-form">
                                                        <p><span class="wpcf7-form-control-wrap your-name">
                                                            <input name="name" id="name" type="text" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" /></span></p>
                                                        <p><span class="wpcf7-form-control-wrap your-email">
                                                            <input name="mail" id="mail" type="text"  value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" /></span></p>
                                                        <p><span class="wpcf7-form-control-wrap your-subject">
                                                            <input name="subject" id="subject" type="text"  value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject" /></span> </p>
                                                        <p><span class="wpcf7-form-control-wrap your-message">
                                                            <textarea name="comment" id="comment" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span> </p>
                                                        <p>
                                                            <input type="submit" value="Send message"  id="submit_contact" class="wpcf7-form-control wpcf7-submit" />
                                                            <div id="msg" class="message"></div>
                                                        </p>
                                                    </div>
                                                    <div class="clear"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1428266679066 vc_row-has-fill">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_content_element vc_contact_info">
                                                <div class="vc_col-sm-3">
                                                    <div class="contact-info-single"><i class="contact-info-icon pe-7s-pin"></i>
                                                        <div class="contact-info-content">
                                                            <div class="contact-info-caption">Location</div>
                                                            <div class="contact-info-caption1">45 Street 21st StreetLos Angeles, California</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-3">
                                                    <div class="contact-info-single"><i class="contact-info-icon pe-7s-call"></i>
                                                        <div class="contact-info-content">
                                                            <div class="contact-info-caption">Phone</div>
                                                            <div class="contact-info-caption1">+88 (0) 112 74355 146</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearonsmall"></div>
                                                <div class="vc_col-sm-3">
                                                    <div class="contact-info-single"><i class="contact-info-icon pe-7s-print"></i>
                                                        <div class="contact-info-content">
                                                            <div class="contact-info-caption">Fax</div>
                                                            <div class="contact-info-caption1">+88 (0) 112 74355 147</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-3">
                                                    <div class="contact-info-single"><i class="fa contact-info-icon pe-7s-mail-open-file"></i>
                                                        <div class="contact-info-content">
                                                            <div class="contact-info-caption">Email</div>
                                                            <div class="contact-info-caption1">info@barkingdog.com</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container -->
            <div class="clear"></div>
        </div>
        <!-- end container-wrapper -->

@include('samt.footer')
      


    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">
        (function() {
            window.onload = function() {

                var pinkParksStyles = "";
                if (jQuery.browser.msie && parseInt(jQuery.browser.version, 10) === 8) {} else {
                    var pinkParksStyles = [{
                        stylers: [{
                            invert_lightness: false
                        }, {
                            hue: "#fff"
                        }, {
                            saturation: -100
                        }, {
                            lightness: 5
                        }]
                    }, {
                        featureType: "poi",
                        elementType: "labels",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "road",
                        elementType: "labels",
                        stylers: [{
                            visibility: "on"
                        }, {
                            lightness: 20
                        }]
                    }, {
                        featureType: "landscape",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "transit.station",
                        elementType: "labels",
                        stylers: [{
                            lightness: 100
                        }]
                    }, {
                        featureType: "road.arterial",
                        stylers: [{
                            visibility: "on"
                        }]
                    }, {}];
                }

                var pinkMapType = new google.maps.StyledMapType(pinkParksStyles, {
                    name: "Our Location"
                });
                var mapOptions = {
                    zoom: 12,
                    center: new google.maps.LatLng(34.020500, -118.300496),
                    mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.ROADMAP, "pink_parks"]
                    }
                };
                var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                map.mapTypes.set("pink_parks", pinkMapType);
                map.setMapTypeId("pink_parks");

                var image = "upload/map-pin.png";

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(34.020500, -118.300496),
                    map: map,
                    icon: image
                });
            }
        })();
    </script>

</body>
</html>