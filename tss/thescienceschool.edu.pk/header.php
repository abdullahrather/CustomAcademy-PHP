<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/use.fontawesome.com/releases/v5.7.0/css/all.css">
    <title>
        <?php echo $pageTitle; ?> || The Science School
    </title>
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/thescienceschool.edu.pk\/tsswp\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='pa-frontend-css' href='wp-content/uploads/premium-addons-elementor/pa-frontend-78d006582.minc28a.css?ver=1691696764' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.minf801.css?ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='pa-frontend-css' href='wp-content/uploads/premium-addons-elementor/pa-frontend-c968aad59.mine530.css?ver=1691696517' type='text/css' media='all' />
    <link rel='stylesheet' id='classic-theme-styles-inline-css' href='assets/css/classic-theme-styles-inline-css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='global-styles-inline-css' href='assets/css/global-styles-inline-css/style-inline.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wpos-magnific-style-css' href='wp-content/plugins/album-and-image-gallery-plus-lightbox/assets/css/magnific-popup1f22.css?ver=1.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='wpos-slick-style-css' href='wp-content/plugins/album-and-image-gallery-plus-lightbox/assets/css/slick1f22.css?ver=1.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='aigpl-public-css-css' href='wp-content/plugins/album-and-image-gallery-plus-lightbox/assets/css/aigpl-public1f22.css?ver=1.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='wpfront-scroll-top-css' href='wp-content/plugins/wpfront-scroll-top/css/wpfront-scroll-top.minb0d2.css?ver=2.0.4.04013' type='text/css' media='all' />
    <link rel='stylesheet' id='htbbootstrap-css' href='wp-content/plugins/ht-mega-for-elementor/assets/css/htbbootstrap001e.css?ver=2.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='htmega-animation-css' href='wp-content/plugins/ht-mega-for-elementor/assets/css/animation001e.css?ver=2.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='htmega-keyframes-css' href='wp-content/plugins/ht-mega-for-elementor/assets/css/htmega-keyframes001e.css?ver=2.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-style-css' href='wp-content/themes/education-insight/assets/css/bootstrapf801.css?ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='chld_thm_cfg_parent-css' href='wp-content/themes/education-insight/stylef801.css?ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='education-insight-fonts-css' href='http://fonts.googleapis.com/css?family=Roboto%20Slab%3Awght%40100%3B200%3B300%3B400%3B500%3B600%3B700%3B800%3B900%7CRoboto%3Aital%2Cwght%400%2C100%3B0%2C300%3B0%2C400%3B0%2C500%3B0%2C700%3B0%2C900%3B1%2C300%3B1%2C400%3B1%2C500%3B1%2C700%3B1%2C900' type='text/css' media='all' />
    <link rel='stylesheet' id='education-insight-style-css' href='wp-content/themes/education-insight-child03/style03a8.css?ver=0.2.6.1617949470' type='text/css' media='all' />
    <style id='education-insight-style-inline-css' type='text/css'>
        .wrap_figure.fixed {
            position: static;
        }
    </style>
    <link rel='stylesheet' id='font-awesome-style-css' href='wp-content/themes/education-insight/assets/css/fontawesome-allf801.css?ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='education-insight-block-style-css' href='wp-content/themes/education-insight/assets/css/blocksf801.css?ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min21f9.css?ver=5.11.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.minaeb9.css?ver=3.1.4' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.minaeb9.css?ver=3.1.4' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-160-css' href='wp-content/uploads/elementor/css/post-160b34f.css?ver=1672409768' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-45-css' href='wp-content/uploads/elementor/css/post-45f726.css?ver=1672420894' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-22-css' href='wp-content/uploads/elementor/css/post-2254cc.css?ver=1672414037' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-2827-css' href='wp-content/uploads/elementor/css/post-2827032f.css?ver=1672452762' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-2823-css' href='wp-content/uploads/elementor/css/post-2823e4b6.css?ver=1672575723' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-2903-css' href='wp-content/uploads/elementor/css/post-2903e858.css?ver=1672761583' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-3043-css' href='wp-content/uploads/elementor/css/post-30438394.css?ver=1672761566' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-1959-css' href='wp-content/uploads/elementor/css/post-195980df.css?ver=1672420881' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-8530-css' href='wp-content/uploads/elementor/css/post-85307546.css?ver=1672412311' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-8679-css' href='wp-content/uploads/elementor/css/post-8679ac15.css?ver=1672412461' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-5924-css' href='wp-content/uploads/elementor/css/post-5924927f.css?ver=1672413232' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-90-css' href='wp-content/uploads/elementor/css/post-90d10b.css?ver=1678802831' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-17-css' href='wp-content/uploads/elementor/css/post-17a82b.css?ver=1678870633' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-3971-css' href='wp-content/uploads/elementor/css/post-3971624c.css?ver=1672420801' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min9e0b.css?ver=5.15.1' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min9e0b.css?ver=5.15.1' type='text/css' media='all' />
    <script type='text/javascript' src='wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0' id='jquery-core-js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1' id='jquery-migrate-js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1' id='jquery-migrate-js'></script>
    <script type='text/javascript' src='wp-content/themes/education-insight/assets/js/education-insight-custom68b3.js?ver=1' id='education-insight-custom.js-js'></script>
    <script type='text/javascript' src='wp-content/themes/education-insight/assets/js/navigation-focus68b3.js?ver=1' id='education-insight-navigation-focus-js'></script>
    <script type='text/javascript' src='wp-content/themes/education-insight/assets/js/jquery.superfish68b3.js?ver=1' id='superfish-js-js'></script>
    <script type='text/javascript' src='wp-content/themes/education-insight/assets/js/bootstrap68b3.js?ver=1' id='bootstrap.js-js'></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/1959.json" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/8530.json" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/8679.json" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/5924.json" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/17.json" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/90.json" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/3971.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
    <meta name="generator" content="WordPress 6.3" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index1313.html?p=3043' />
    <link rel='shortlink' href='indexbe1b.html?p=1959' />
    <link rel='shortlink' href='index9226.html?p=8530' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed7a8f.json?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Feducation%2Fparents-and-students%2Funiform%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedd05b?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Feducation%2Fparents-and-students%2Funiform%2F&amp;format=xml" />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed7003.json?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Fcelebrating-23rd-march%2F" />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed7238.json?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Fresults%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed81db?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Fresults%2F&amp;format=xml" />
    <link rel='shortlink' href='indexe0ce.html?p=8679' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed1abc.json?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Fresults2021%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedf4d7?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Fresults2021%2F&amp;format=xml" />
    <link rel='shortlink' href='index41eb.html?p=5924' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedc26f.json?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Fresult2020%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed035f?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Fresult2020%2F&amp;format=xml" />
    <link rel='shortlink' href='indexd8eb.html?p=17' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed2460.json?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Fgoverning-body%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed2bca?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Fgoverning-body%2F&amp;format=xml" />
    <link rel='shortlink' href='index.html' />
    <link rel='shortlink' href='index1f7e.html?p=3971' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embeda127.json?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2F" />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed8271.json?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Fmission-statements%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed6795?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2F&amp;format=xml" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed0e97?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Fmission-statements%2F&amp;format=xml" />
    <style type="text/css" id="wp-custom-css">
        #how-it-work:before {
            background-color: #42661a !important;
        }

        .result_grid .box-grid {
            background-color: #2f4812 !important;
        }

        .result_grid .box-grid:hover {
            background-color: #395616 !important;
        }

        .heading {
            font-family: Sans-serif !important;
        }
    </style>

    <style type="text/css" id="parents-and-students">
        .heading-parents {
            font-family: 'Arial', 'sans-serif';
            color: #666c6e;

        }
    </style>
</head>

<body class=<?php echo $bodyClass ?>>

    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <!-- 	<div id="beaker_icon_bg"></div>
    <div id="scope_icon_bg"></div> -->
    <div id="page" class="site">
        <div class="top_header row">

            <!--p class="tempnotice">
                    <a href="#notice12" class="atempnotice"> In the memory of Uzair Ahmad... <em>The Great  loss to The Science School..!</em>
                    </a> 
            </p-->
            <!-- 	toogle bar for mob view		 -->
            <div class="toggle-menu gb_menu mobile_view_toggle col-md-4 col-sm-2">
                <button onclick="education_insight_gb_Menu_open()" class="gb_toggle"><i class="fas fa-bars"></i></button>

                <!-- 					<button onclick="education_insight_gb_Menu_open()" class="gb_toggle"><i class="fas fa-ellipsis-h"></i><p></p></button> -->

            </div>
            <!-- 	toogle bar for mob view	END	 -->
            <div class="container contact_cap col-xl-12 col-lg-12 col-md-8 col-sm-10">

                <span><i class="fa fa-envelope"></i>info@thescienceschool.edu.pk</span>
            </div>
        </div>
        <div id="header">
            <div class="wrap_figure">
                <div class="container">
                    <div class="row menus">
                        <div class="col-lg-6" id="left-menus">
                            <div class="menu_box">

                                <div id="gb_responsive" class="nav side_gb_nav">
                                    <nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="Left Side Menu">
                                        <div class="gb_navigation clearfix">
                                            <ul id="menu-left-menu" class="clearfix mobile_nav">
                                                <li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-23">
                                                    <a href="index.php" aria-current="page">Home</a>
                                                </li>
                                                <li id="menu-item-3979" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3979">
                                                    <a href="mission-statements.php">Mission Statement</a>
                                                </li>
                                                <li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36">
                                                    <a href="governing-body.php">Governing Body</a>
                                                </li>
                                                <li id="menu-item-8549" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8549">
                                                    <a href="results.php">Results 2022 <blink style="color:  red;">*</blink></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" id="right-menus">
                            <div class="row toggle_design">
                                <!-- 								<div class="col-lg-12 col-md-9 col-3"> -->
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="menu_box">

                                        <div id="gb_responsive" class="nav side_gb_nav">
                                            <nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="Right Side Menu">
                                                <div class="gb_navigation clearfix">
                                                    <ul id="menu-righ-menu" class="clearfix mobile_nav">
                                                        <li id="menu-item-1960" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1960">
                                                            <a href="celebrating-23rd-march.php">Celebrating 23rd March</a>
                                                        </li>
                                                        <li id="menu-item-4719" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4719">
                                                            <a href="#">Education</a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-2816" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2816">
                                                                    <a href="parents-and-students.php">Parents and Students</a>
                                                                </li>
                                                                <li id="menu-item-2820" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2820">
                                                                    <a href="teaching-and-learning.php">Teaching and Learning</a>
                                                                </li>
                                                                <li id="menu-item-2824" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2824">
                                                                    <a href="activities.php">Activities</a>
                                                                </li>
                                                                <li id="menu-item-2831" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2831">
                                                                    <a href="science-and-tech-at-tss.php">Science and Tech at TSS</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34">
                                                            <a href="why-tss.php">Why TSS</a>
                                                        </li>
                                                        <li id="menu-item-1963" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1963">
                                                            <a href="gallery.php">Gallery</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="toggle-menu gb_menu hidden_menu">
                                        <button onclick="education_insight_gb_Menu_open()" class="gb_toggle"><i class="fas fa-ellipsis-h"></i>
                                            <p>Menu</p>
                                        </button>
                                    </div>
                                    <!-- Menu items for Mobile View -->
                                    <div class="menu_box_mobile">
                                        <div id="gb_responsive" class="nav side_gb_nav mobile_menu_nav">
                                            <nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="Mobile Menu">
                                                <div class="gb_navigation clearfix">
                                                    <ul id="menu-mobile_menu" class="clearfix mobile_nav">
                                                        <li id="menu-item-1037" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-90 current_page_item menu-item-1037">
                                                            <a href="index.php" aria-current="page">Home</a>
                                                        </li>
                                                        <li id="menu-item-1034" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1034">
                                                            <a href="governing-body.php">Governing Body</a>
                                                        </li>
                                                        <li id="menu-item-8545" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8545">
                                                            <a href="results.php">Results 2022</a>
                                                        </li>
                                                        <li id="menu-item-1033" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1033">
                                                            <a href="admissions.php">admissions</a>
                                                        </li>
                                                        <li id="menu-item-6436" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6436">
                                                            <a href="mission-statements.php">Mission Statements</a>
                                                        </li>
                                                        <li id="menu-item-4958" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4958">
                                                            <a href="#">Education</a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-4955" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4955">
                                                                    <a href="parents-and-students.php">Parents and Students</a>
                                                                </li>
                                                                <li id="menu-item-4957" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4957">
                                                                    <a href="teaching-and-learning.php">Teaching and Learning</a>
                                                                </li>
                                                                <li id="menu-item-4954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4954">
                                                                    <a href="activities.php">Activities</a>
                                                                </li>
                                                                <li id="menu-item-4956" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4956">
                                                                    <a href="science-and-tech-at-tss.php">Science and Tech at TSS</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-1029" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1029">
                                                            <a href="why-tss.php">Why TSS</a>
                                                        </li>
                                                        <li id="menu-item-1027" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1027">
                                                            <a href="gallery.php">Gallery</a>
                                                        </li>
                                                    </ul>
                                                </div> <a href="javascript:void(0)" class="closebtn gb_menu" onclick="education_insight_gb_Menu_close()">x<span class="screen-reader-text">Close Menu</span></a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!-- 								<div class="col-lg-4 col-md-8 col-sm-9">
                                    <div class="links">
                                                                                    <a href="https://www.cloudways.com/blog/secure-wordpress-theme-plugin-code/"><i class="fab fa-facebook-f"></i></a>
                                                                                                                                                                                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="row desktop_header" id="head_down_content">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="menu_down_h"> <b>
                                    <h1>The Science School</h1>
                                </b> </div>
                            <div class="menu_down_p"><i>
                                    <p> &nbsp; Faith – Purpose – Action – Leadership </p>
                                </i></div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3">
                            <div class="logo1">
                                <a href="index.php" class="custom-logo-link" rel="home" aria-current="page"><img width="216" height="240" src="wp-content/uploads/2021/04/cropped-tss-logo-e1637560635321.jpg" class="custom-logo" alt="The Science School" decoding="async" fetchpriority="high" /></a>
                                <p class="site-title"><a href="index.php" rel="home">The Science School</a></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4 col-sm-4" style="text-align:right">
                            <img src="wp-content/uploads/2021/03/Arbi.png">
                            <i>
                                <p class="menu_down_p_right">“And give us (the grace) to lead the righteous.”(Al Quran)
                                </p>
                            </i>
                        </div>
                    </div>

                    <div class="mobile_header" id="head_down_content">
                        <div class="row">
                            <div class="logo col-3">
                                <a href="index.php" class="custom-logo-link" rel="home" aria-current="page"><img width="216" height="240" src="wp-content/uploads/2021/04/cropped-tss-logo-e1637560635321.jpg" class="custom-logo" alt="The Science School" decoding="async" /></a>
                                <p class="site-title"><a href="index.php" rel="home">The Science School</a></p>
                            </div>
                            <div class="col-9" style="text-align:left">
                                <div class="menu_down_h"> <b>
                                        <h1>The Science School</h1>
                                    </b> </div>
                                <div class="menu_down_p"><i>
                                        <p>Faith – Purpose – Action – Leadership </p>
                                    </i></div>
                            </div>
                        </div>
                        <div style="text-align:right">
                            <img src="wp-content/uploads/2021/03/Arbi.png">
                            <i>
                                <p class="menu_down_p_right">“And give us (the grace) to lead the righteous.”(Al Quran)
                                </p>
                            </i>
                        </div>
                    </div>

                    <!-- <marquee id="header-marquee" width="100%" direction="left">
                            <a href="https://thescienceschool.edu.pk/tsswp/#point_result" style="position: relative;width:100%;line-height:10px;">
                            <span style="color: red; font-size:12px !important;">The Science School AS and O Level Results</span>
                            </a>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <a href="https://thescienceschool.edu.pk/tsswp/#point_nustCompetition" style="position: relative;width:100%;line-height:10px;">
                            <span style="color: red; font-size:12px !important;">A science technology, mathematics competition organised by the NUST University.</span>
                            </a>
                        </marquee> -->

                </div>
            </div>

        </div>
    </div>