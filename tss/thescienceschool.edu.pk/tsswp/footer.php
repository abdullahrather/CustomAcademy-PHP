<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="copyright">
        <div class="container footer-content">
            <aside class="widget-area" role="complementary">
                <div class="row">
                    <div class="widget-column footer-widget-1 col-lg-6 col-md-6">
                        <section id="custom_html-8" class="widget_text widget widget_custom_html">
                            <h3 class="widget-title">H9 Campus</h3>
                            <div class="textwidget custom-html-widget">
                                <div>
                                    <div class="row">
                                        <div class="col-lg-1 col-sm-1 col-12">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="col-lg-10 col-sm-10 col-12">
                                            <p>
                                                Plot No. 26, Street No. 6, H - 9/1 Islamabad
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-sm-1 col-12">
                                            <i class="fas fa-phone-volume"></i>
                                        </div>
                                        <div class="col-lg-10 col-sm-10 col-12">
                                            <p>
                                                051 - 4865465 & 67
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-sm-1 col-12">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="col-lg-10 col-sm-10 col-12">
                                            <p>
                                                03205005561 , 03205005539
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-sm-1 col-12">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="col-lg-10 col-sm-10 col-12">
                                            <p>
                                                info@thescienceschool.edu.pk
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="widget-column footer-widget-2 col-lg-6 col-md-6">
                        <section id="custom_html-7" class="widget_text widget widget_custom_html">
                            <h3 class="widget-title">DHA Campus</h3>
                            <div class="textwidget custom-html-widget">
                                <div>
                                    <div class="row">
                                        <div class="col-lg-1 col-sm-1 col-12">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="col-lg-11 col-sm-10 col-12">
                                            <p>
                                                T Chowk, GT Road, Rawat (1 Km East of Gate 4, DHA Phase-2)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-sm-1 col-12">
                                            <i class="fas fa-phone-volume"></i>
                                        </div>
                                        <div class="col-lg-10 col-sm-10 col-12">
                                            <p>
                                                051 - 8738494 , 051 - 8314782
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-sm-1 col-12">
                                            <i class="fas fas fa-phone"></i>
                                        </div>
                                        <div class="col-lg-10 col-sm-10 col-12">
                                            <p>
                                                03205005562 , 03205004497
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-sm-1 col-12">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="col-lg-10 col-sm-10 col-12">
                                            <p>
                                                info@thescienceschool.edu.pk
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- 		<div class="widget-column footer-widget-3 col-lg-3 col-md-3">
			<//?php dynamic_sidebar( 'footer-3' ); ?>
		</div>
		<div class="widget-column footer-widget-4 col-lg-3 col-md-3">
			<//?php dynamic_sidebar( 'footer-4' ); ?>
		</div> -->
                </div>
            </aside>
        </div>
    </div>

    <div class="site-info">
        <i class="fa fa-copyright" aria-hidden="true"></i> 2013 - <?php echo date('Y'); ?> The Science School
    </div>
</footer>
<script type="text/javascript">
    function showhide_toggle(e, t, r, g) {
        var a = jQuery("#" + e + "-link-" + t),
            s = jQuery("a", a),
            i = jQuery("#" + e + "-content-" + t),
            l = jQuery("#" + e + "-toggle-" + t);
        a.toggleClass("sh-show sh-hide"),
            i.toggleClass("sh-show sh-hide").toggle(),
            "true" === s.attr("aria-expanded") ?
            s.attr("aria-expanded", "false") :
            s.attr("aria-expanded", "true"),
            l.text() === r ?
            (l.text(g), a.trigger("sh-link:more")) :
            (l.text(r), a.trigger("sh-link:less")),
            a.trigger("sh-link:toggle");
    }
</script>
<div id="wpfront-scroll-top-container">
    <img src="wp-content/uploads/2021/11/up-arrow-3.png" alt="" />
</div>
<script type="text/javascript">
    function wpfront_scroll_top_init() {
        if (
            typeof wpfront_scroll_top === "function" &&
            typeof jQuery !== "undefined"
        ) {
            wpfront_scroll_top({
                scroll_offset: 100,
                button_width: 0,
                button_height: 0,
                button_opacity: 0.90000000000000002220446049250313080847263336181640625,
                button_fade_duration: 200,
                scroll_duration: 1000,
                location: 1,
                marginX: 20,
                marginY: 20,
                hide_iframe: false,
                auto_hide: false,
                auto_hide_after: 2,
                button_action: "top",
                button_action_element_selector: "",
                button_action_container_selector: "html, body",
                button_action_element_offset: 0,
            });
        } else {
            setTimeout(wpfront_scroll_top_init, 100);
        }
    }
    wpfront_scroll_top_init();
</script>
<link rel="stylesheet" id="htmega-widgets-css" href="wp-content/plugins/ht-mega-for-elementor/assets/css/htmega-widgets001e.css?ver=2.0.0" type="text/css" media="all" />
<link rel="stylesheet" id="slick-css" href="wp-content/plugins/ht-mega-for-elementor/assets/css/slick.min001e.css?ver=2.0.0" type="text/css" media="all" />
<script type="text/javascript" src="wp-content/plugins/wpfront-scroll-top/js/wpfront-scroll-top.minb0d2.js?ver=2.0.4.04013" id="wpfront-scroll-top-js" async="async" defer="defer"></script>
<script type="text/javascript" src="wp-content/plugins/ht-mega-for-elementor/assets/js/popper.min001e.js?ver=2.0.0" id="htmega-popper-js"></script>
<script type="text/javascript" src="wp-content/plugins/ht-mega-for-elementor/assets/js/htbbootstrap001e.js?ver=2.0.0" id="htbbootstrap-js"></script>
<script type="text/javascript" src="wp-content/plugins/ht-mega-for-elementor/assets/js/waypoints001e.js?ver=2.0.0" id="waypoints-js"></script>
<script type="text/javascript" src="wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/universal-tilt.min8e83.js?ver=4.9.10" id="tilt-js-js"></script>
<script type="text/javascript" src="wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/typed.min8e83.js?ver=4.9.10" id="pa-typed-js"></script>
<script type="text/javascript" src="wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/vticker.min8e83.js?ver=4.9.10" id="pa-vticker-js"></script>
<script type="text/javascript" id="premium-addons-js-extra">
    /* <![CDATA[ */
    var PremiumSettings = {
        "ajaxurl": "https:\/\/thescienceschool.edu.pk\/tsswp\/wp-admin\/admin-ajax.php",
        "nonce": "925a204c33"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/premium-addons.min8e83.js?ver=4.9.10" id="premium-addons-js"></script>
<script type="text/javascript" src="wp-content/plugins/ht-mega-for-elementor/assets/js/slick.min001e.js?ver=2.0.0" id="slick-js"></script>
<script type="text/javascript" src="wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/lottie.min8e83.js?ver=4.9.10" id="lottie-js-js"></script>
<script type="text/javascript" id="htmega-widgets-scripts-js-extra">
    /* <![CDATA[ */
    var HTMEGAF = {
        "elementorpro": ""
    };
    /* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/ht-mega-for-elementor/assets/js/htmega-widgets-active001e.js?ver=2.0.0" id="htmega-widgets-scripts-js"></script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/js/webpack.runtime.minaeb9.js?ver=3.1.4" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend-modules.minaeb9.js?ver=3.1.4" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1" id="elementor-dialog-js"></script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2" id="elementor-waypoints-js"></script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/lib/share-link/share-link.minaeb9.js?ver=3.1.4" id="share-link-js"></script>
<script type="text/javascript" src="wp-content/plugins/ht-mega-for-elementor/assets/js/swiper.min001e.js?ver=2.0.0" id="swiper-js"></script>
<script id="elementor-frontend-js-before" type="text/javascript">
    var elementorFrontendConfig = {
        environmentMode: {
            edit: false,
            wpPreview: false,
            isScriptDebug: false,
            isImprovedAssetsLoading: false,
        },
        i18n: {
            shareOnFacebook: "Share on Facebook",
            shareOnTwitter: "Share on Twitter",
            pinIt: "Pin it",
            download: "Download",
            downloadImage: "Download image",
            fullscreen: "Fullscreen",
            zoom: "Zoom",
            share: "Share",
            playVideo: "Play Video",
            previous: "Previous",
            next: "Next",
            close: "Close",
        },
        is_rtl: false,
        breakpoints: {
            xs: 0,
            sm: 480,
            md: 768,
            lg: 1025,
            xl: 1440,
            xxl: 1600
        },
        version: "3.1.4",
        is_static: false,
        experimentalFeatures: {
            e_dom_optimization: true,
            a11y_improvements: true,
            "landing-pages": true,
        },
        urls: {
            assets: "https:\/\/thescienceschool.edu.pk\/tsswp\/wp-content\/plugins\/elementor\/assets\/",
        },
        settings: {
            page: [],
            editorPreferences: []
        },
        kit: {
            global_image_lightbox: "yes",
            lightbox_enable_counter: "yes",
            lightbox_enable_fullscreen: "yes",
            lightbox_enable_zoom: "yes",
            lightbox_enable_share: "yes",
            lightbox_title_src: "title",
            lightbox_description_src: "description",
        },
        post: {
            id: 90,
            title: "The%20Science%20School",
            excerpt: "",
            featuredImage: false,
        },
    };
</script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend.minaeb9.js?ver=3.1.4" id="elementor-frontend-js"></script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/js/preloaded-elements-handlers.minaeb9.js?ver=3.1.4" id="preloaded-elements-handlers-js"></script>

<!-- <script>
window.onload = function() {
    alert('Page is loaded');
	element.classList.remove("BOARD_MESSAGE");
};
document.getElementById("BOARD-MEMBER-MESSAGE").onclick = function() {myFunction2()};

function myFunction2() {
  var element = document.getElementById("BOARD_MESSAGE");
  element.classList.add("BOARD_MESSAGE");
}
</script> -->

<!-- For registration form submission -->
<!--  <script>
	 $('#registrationForm').on('click', function() {
		 var name = document.getElementById("123qwe").value;
		 
	 });
 </script> -->

<script>
    // $(".result_2020").click(function(){
    // 	$(".result2021").hide();
    //     $(".result2020").show();
    // });

    // $(".result_2021").click(function(){
    //     $(".result2020").hide();
    // 	$(".result2021").show();
    // });
</script>

<script>
    // jQuery(function($) {
    // 		$('#registrationForm').on('submit', function (e) {
    // 			e.preventDefault();
    // 			 var formData = {
    // 				  email: "test@gmail.com",//$("#email").val(),
    // // 				  campus: "h9",//$("#campus").val(),
    // // 				  class: "8",//$("#class").val(),
    // // 				  phone: "123",//$("#phone").val(),
    // 				  password: "123",//$("#password").val(),
    // 				};
    // 			$.ajax({
    // 				type: 'POST',
    // 				  url: 'http://192.168.1.203/emis/workplace/RegistrationAPISS/api/UserLoginApi.php',
    // 				  data: {
    // 				  email: "test@gmail.com",
    // 				  password: "123",
    // 				},
    // // 			    dataType: "json",
    // // 				encode: true,
    // 				success: function (data) {
    // 					console.log(data);
    // // 					var jsonResponse= JSON.parse(data);
    // //                     alert(jsonResponse.message);
    // 				},
    // 				error: function(data) { 
    // 					console.log(data);

    // // 					var jsonResponse= JSON.parse(data);
    // //                        alert(jsonResponse.message);
    //                 }
    // 			});

    // 		});

    // 	});
</script>

<!-- <script>
	 $("#registrationForm").on("submit", function(event){
        event.preventDefault();
        var formValues= $(this).serialize();
		 alert(formValues);
//         $.post("RegisterUserTest.php", formValues, function(data){
//             // Display the returned data in browser
//              alert(data);
//             $("#result").html(data);
//         });
    });
</script> -->

<!-- Acces form value data in RegisterUserTest.php file using  echo $_POST["name"] ?? ''; -->

<!-- Submit Admission Form   -->
<script type="text/javascript">
    //alert('a1');
    jQuery(document).ready(function($) {
        //alert('a2');
        // hide messages 
        $("#error").hide();
        $("#show_message").hide();
        // on submit...
        $("#registrationForm").submit(function(e) {
            //alert('a3');
            e.preventDefault();
            $("#error").hide();
            //name required
            var name = $("input#name").val();
            if (name == "") {
                $("#error").fadeIn().text("Name required.");
                $("input#name").focus();
                return false;
            }
            // email required
            var email = $("input#email").val();
            if (email == "") {
                $("#error").fadeIn().text("Email required");
                $("input#email").focus();
                return false;
            }
            // email required
            var campus = $("input#email").val();
            if (campus == "") {
                $("#error").fadeIn().text("Campus required");
                $("input#campus").focus();
                return false;
            }
            // email required
            var clas = $("input#email").val();
            if (clas == "") {
                $("#error").fadeIn().text("Class required");
                $("input#class").focus();
                return false;
            }
            // phone number required
            var phone = $("input#phone").val();
            if (phone == "") {
                $("#error").fadeIn().text("Mobile number required");
                $("input#phone").focus();
                return false;
            }
            // password number required
            var password = $("input#password").val();
            if (password == "") {
                $("#error").fadeIn().text("Password number required");
                $("input#password").focus();
                return false;
            }
            // password number required
            var re_password = $("input#re-password").val();
            if (re_password == "") {
                $("#error").fadeIn().text("Re-Password number required");
                $("input#re-password").focus();
                return false;
            }
            if (re_password != password) {
                $("#error")
                    .fadeIn()
                    .text("Password and re-password should be same");
                $("input#re-password").focus();
                return false;
            }
            // ajax
            $.ajax({
                type: "POST",
                url: "https://emis.thescienceschool.edu.pk/RegistrationAPI/api/UserRegistrationApi.php",
                data: $(this).serialize(), // get all form field value in serialize form
                success: function() {
                    $("#show_message").fadeIn();
                    //$("#ajax-form").fadeOut();
                },
            });
        });
        return false;
    });
</script>

<!-- Results menu item set current_page_item -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuItems = document.querySelectorAll('#menu-results .menu-item');
        
        // Get the result year from the URL query string
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const selectedResult = urlParams.get('result');

        if (selectedResult) {
            // Remove 'current' class from all menu items
            menuItems.forEach(item => {
                item.classList.remove('current-menu-item', 'current_page_item');
            });

            // Find the corresponding menu item and add 'current' class
            const selectedItem = document.querySelector(`#menu-results .menu-item a[href*="result=${selectedResult}"]`);
            if (selectedItem) {
                selectedItem.parentNode.classList.add('current-menu-item', 'current_page_item');
            }
        }
    });
</script>




</body>

</html>