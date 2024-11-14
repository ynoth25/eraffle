<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <script>
        (function(html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);
    </script>
    <title>PureBloom.ph</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="alternate" type="application/rss+xml" title="PureBloom.ph &raquo; Feed"
        href="https://purebloom.ph/feed/" />
    <link rel="alternate" type="application/rss+xml" title="PureBloom.ph &raquo; Comments Feed"
        href="https://purebloom.ph/comments/feed/" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/purebloom.ph\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.2"
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
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
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
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
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
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <style id='wp-emoji-styles-inline-css'>
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
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='twentyseventeen-fonts-css'
        href='https://purebloom.ph/wp-content/themes/twentyseventeen/assets/fonts/font-libre-franklin.css?ver=20230328'
        media='all' />
    <link rel='stylesheet' id='twentyseventeen-style-css'
        href='https://purebloom.ph/wp-content/themes/twentyseventeen/style.css?ver=20240716' media='all' />
    <link rel='stylesheet' id='twentyseventeen-block-style-css'
        href='https://purebloom.ph/wp-content/themes/twentyseventeen/assets/css/blocks.css?ver=20240624'
        media='all' />
    <link rel='stylesheet' id='simple-social-icons-font-css'
        href='https://purebloom.ph/wp-content/plugins/simple-social-icons/css/style.css?ver=3.0.2' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://purebloom.ph/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.24.4'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='https://purebloom.ph/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5'
        media='all' />
    <link rel='stylesheet' id='e-swiper-css'
        href='https://purebloom.ph/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=3.24.4'
        media='all' />
    <link rel='stylesheet' id='elementor-post-60-css'
        href='https://purebloom.ph/wp-content/uploads/elementor/css/post-60.css?ver=1727196070' media='all' />
    <link rel='stylesheet' id='widget-heading-css'
        href='https://purebloom.ph/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=3.24.4'
        media='all' />
    <link rel='stylesheet' id='widget-text-editor-css'
        href='https://purebloom.ph/wp-content/plugins/elementor/assets/css/widget-text-editor.min.css?ver=3.24.4'
        media='all' />
    <link rel='stylesheet' id='widget-image-css'
        href='https://purebloom.ph/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=3.24.4'
        media='all' />
    <link rel='stylesheet' id='elementor-post-118-css'
        href='https://purebloom.ph/wp-content/uploads/elementor/css/post-118.css?ver=1727196070' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.6.2'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="https://purebloom.ph/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="https://purebloom.ph/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js">
    </script>
    <script id="twentyseventeen-global-js-extra">
        var twentyseventeenScreenReaderText = {
            "quote": "<svg class=\"icon icon-quote-right\" aria-hidden=\"true\" role=\"img\"> <use href=\"#icon-quote-right\" xlink:href=\"#icon-quote-right\"><\/use> <\/svg>",
            "expand": "Expand child menu",
            "collapse": "Collapse child menu",
            "icon": "<svg class=\"icon icon-angle-down\" aria-hidden=\"true\" role=\"img\"> <use href=\"#icon-angle-down\" xlink:href=\"#icon-angle-down\"><\/use> <span class=\"svg-fallback icon-angle-down\"><\/span><\/svg>"
        };
    </script>
    <script src="https://purebloom.ph/wp-content/themes/twentyseventeen/assets/js/global.js?ver=20211130"
        id="twentyseventeen-global-js" defer data-wp-strategy="defer"></script>
    <script src="https://purebloom.ph/wp-content/themes/twentyseventeen/assets/js/navigation.js?ver=20210122"
        id="twentyseventeen-navigation-js" defer data-wp-strategy="defer"></script>
    <link rel="https://api.w.org/" href="https://purebloom.ph/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json" href="https://purebloom.ph/wp-json/wp/v2/pages/118" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://purebloom.ph/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.6.2" />
    <link rel="canonical" href="https://purebloom.ph/about-us/" />
    <link rel='shortlink' href='https://purebloom.ph/?p=118' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://purebloom.ph/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpurebloom.ph%2Fabout-us%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://purebloom.ph/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpurebloom.ph%2Fabout-us%2F&#038;format=xml" />
    <style type="text/css" id="custom-theme-colors">
        /**
 * Twenty Seventeen: Color Patterns
 *
 * Colors are ordered from dark to light.
 */

        .colors-custom a:hover,
        .colors-custom a:active,
        .colors-custom .entry-content a:focus,
        .colors-custom .entry-content a:hover,
        .colors-custom .entry-summary a:focus,
        .colors-custom .entry-summary a:hover,
        .colors-custom .comment-content a:focus,
        .colors-custom .comment-content a:hover,
        .colors-custom .widget a:focus,
        .colors-custom .widget a:hover,
        .colors-custom .site-footer .widget-area a:focus,
        .colors-custom .site-footer .widget-area a:hover,
        .colors-custom .posts-navigation a:focus,
        .colors-custom .posts-navigation a:hover,
        .colors-custom .comment-metadata a:focus,
        .colors-custom .comment-metadata a:hover,
        .colors-custom .comment-metadata a.comment-edit-link:focus,
        .colors-custom .comment-metadata a.comment-edit-link:hover,
        .colors-custom .comment-reply-link:focus,
        .colors-custom .comment-reply-link:hover,
        .colors-custom .widget_authors a:focus strong,
        .colors-custom .widget_authors a:hover strong,
        .colors-custom .entry-title a:focus,
        .colors-custom .entry-title a:hover,
        .colors-custom .entry-meta a:focus,
        .colors-custom .entry-meta a:hover,
        .colors-custom.blog .entry-meta a.post-edit-link:focus,
        .colors-custom.blog .entry-meta a.post-edit-link:hover,
        .colors-custom.archive .entry-meta a.post-edit-link:focus,
        .colors-custom.archive .entry-meta a.post-edit-link:hover,
        .colors-custom.search .entry-meta a.post-edit-link:focus,
        .colors-custom.search .entry-meta a.post-edit-link:hover,
        .colors-custom .page-links a:focus .page-number,
        .colors-custom .page-links a:hover .page-number,
        .colors-custom .entry-footer a:focus,
        .colors-custom .entry-footer a:hover,
        .colors-custom .entry-footer .cat-links a:focus,
        .colors-custom .entry-footer .cat-links a:hover,
        .colors-custom .entry-footer .tags-links a:focus,
        .colors-custom .entry-footer .tags-links a:hover,
        .colors-custom .post-navigation a:focus,
        .colors-custom .post-navigation a:hover,
        .colors-custom .pagination a:not(.prev):not(.next):focus,
        .colors-custom .pagination a:not(.prev):not(.next):hover,
        .colors-custom .comments-pagination a:not(.prev):not(.next):focus,
        .colors-custom .comments-pagination a:not(.prev):not(.next):hover,
        .colors-custom .logged-in-as a:focus,
        .colors-custom .logged-in-as a:hover,
        .colors-custom a:focus .nav-title,
        .colors-custom a:hover .nav-title,
        .colors-custom .edit-link a:focus,
        .colors-custom .edit-link a:hover,
        .colors-custom .site-info a:focus,
        .colors-custom .site-info a:hover,
        .colors-custom .widget .widget-title a:focus,
        .colors-custom .widget .widget-title a:hover,
        .colors-custom .widget ul li a:focus,
        .colors-custom .widget ul li a:hover {
            color: hsl(136, 50%, 0%);
            /* base: #000; */
        }

        .colors-custom .entry-content a,
        .colors-custom .entry-summary a,
        .colors-custom .comment-content a,
        .colors-custom .widget a,
        .colors-custom .site-footer .widget-area a,
        .colors-custom .posts-navigation a,
        .colors-custom .widget_authors a strong {
            -webkit-box-shadow: inset 0 -1px 0 hsl(136, 50%, 6%);
            /* base: rgba(15, 15, 15, 1); */
            box-shadow: inset 0 -1px 0 hsl(136, 50%, 6%);
            /* base: rgba(15, 15, 15, 1); */
        }

        .colors-custom button,
        .colors-custom input[type="button"],
        .colors-custom input[type="submit"],
        .colors-custom .entry-footer .edit-link a.post-edit-link {
            background-color: hsl(136, 50%, 13%);
            /* base: #222; */
        }

        .colors-custom input[type="text"]:focus,
        .colors-custom input[type="email"]:focus,
        .colors-custom input[type="url"]:focus,
        .colors-custom input[type="password"]:focus,
        .colors-custom input[type="search"]:focus,
        .colors-custom input[type="number"]:focus,
        .colors-custom input[type="tel"]:focus,
        .colors-custom input[type="range"]:focus,
        .colors-custom input[type="date"]:focus,
        .colors-custom input[type="month"]:focus,
        .colors-custom input[type="week"]:focus,
        .colors-custom input[type="time"]:focus,
        .colors-custom input[type="datetime"]:focus,
        .colors-custom .colors-custom input[type="datetime-local"]:focus,
        .colors-custom input[type="color"]:focus,
        .colors-custom textarea:focus,
        .colors-custom button.secondary,
        .colors-custom input[type="reset"],
        .colors-custom input[type="button"].secondary,
        .colors-custom input[type="reset"].secondary,
        .colors-custom input[type="submit"].secondary,
        .colors-custom a,
        .colors-custom .site-title,
        .colors-custom .site-title a,
        .colors-custom .navigation-top a,
        .colors-custom .dropdown-toggle,
        .colors-custom .menu-toggle,
        .colors-custom .page .panel-content .entry-title,
        .colors-custom .page-title,
        .colors-custom.page:not(.twentyseventeen-front-page) .entry-title,
        .colors-custom .page-links a .page-number,
        .colors-custom .comment-metadata a.comment-edit-link,
        .colors-custom .comment-reply-link .icon,
        .colors-custom h2.widget-title,
        .colors-custom mark,
        .colors-custom .post-navigation a:focus .icon,
        .colors-custom .post-navigation a:hover .icon,
        .colors-custom .site-content .site-content-light,
        .colors-custom .twentyseventeen-panel .recent-posts .entry-header .edit-link {
            color: hsl(136, 50%, 13%);
            /* base: #222; */
        }

        .colors-custom .entry-content a:focus,
        .colors-custom .entry-content a:hover,
        .colors-custom .entry-summary a:focus,
        .colors-custom .entry-summary a:hover,
        .colors-custom .comment-content a:focus,
        .colors-custom .comment-content a:hover,
        .colors-custom .widget a:focus,
        .colors-custom .widget a:hover,
        .colors-custom .site-footer .widget-area a:focus,
        .colors-custom .site-footer .widget-area a:hover,
        .colors-custom .posts-navigation a:focus,
        .colors-custom .posts-navigation a:hover,
        .colors-custom .comment-metadata a:focus,
        .colors-custom .comment-metadata a:hover,
        .colors-custom .comment-metadata a.comment-edit-link:focus,
        .colors-custom .comment-metadata a.comment-edit-link:hover,
        .colors-custom .comment-reply-link:focus,
        .colors-custom .comment-reply-link:hover,
        .colors-custom .widget_authors a:focus strong,
        .colors-custom .widget_authors a:hover strong,
        .colors-custom .entry-title a:focus,
        .colors-custom .entry-title a:hover,
        .colors-custom .entry-meta a:focus,
        .colors-custom .entry-meta a:hover,
        .colors-custom.blog .entry-meta a.post-edit-link:focus,
        .colors-custom.blog .entry-meta a.post-edit-link:hover,
        .colors-custom.archive .entry-meta a.post-edit-link:focus,
        .colors-custom.archive .entry-meta a.post-edit-link:hover,
        .colors-custom.search .entry-meta a.post-edit-link:focus,
        .colors-custom.search .entry-meta a.post-edit-link:hover,
        .colors-custom .page-links a:focus .page-number,
        .colors-custom .page-links a:hover .page-number,
        .colors-custom .entry-footer .cat-links a:focus,
        .colors-custom .entry-footer .cat-links a:hover,
        .colors-custom .entry-footer .tags-links a:focus,
        .colors-custom .entry-footer .tags-links a:hover,
        .colors-custom .post-navigation a:focus,
        .colors-custom .post-navigation a:hover,
        .colors-custom .pagination a:not(.prev):not(.next):focus,
        .colors-custom .pagination a:not(.prev):not(.next):hover,
        .colors-custom .comments-pagination a:not(.prev):not(.next):focus,
        .colors-custom .comments-pagination a:not(.prev):not(.next):hover,
        .colors-custom .logged-in-as a:focus,
        .colors-custom .logged-in-as a:hover,
        .colors-custom a:focus .nav-title,
        .colors-custom a:hover .nav-title,
        .colors-custom .edit-link a:focus,
        .colors-custom .edit-link a:hover,
        .colors-custom .site-info a:focus,
        .colors-custom .site-info a:hover,
        .colors-custom .widget .widget-title a:focus,
        .colors-custom .widget .widget-title a:hover,
        .colors-custom .widget ul li a:focus,
        .colors-custom .widget ul li a:hover {
            -webkit-box-shadow: inset 0 0 0 hsl(136, 50%, 13%), 0 3px 0 hsl(136, 50%, 13%);
            box-shadow: inset 0 0 0 hsl(136, 50%, 13%), 0 3px 0 hsl(136, 50%, 13%);
        }

        body.colors-custom,
        .colors-custom button,
        .colors-custom input,
        .colors-custom select,
        .colors-custom textarea,
        .colors-custom h3,
        .colors-custom h4,
        .colors-custom h6,
        .colors-custom label,
        .colors-custom .entry-title a,
        .colors-custom.twentyseventeen-front-page .panel-content .recent-posts article,
        .colors-custom .entry-footer .cat-links a,
        .colors-custom .entry-footer .tags-links a,
        .colors-custom .format-quote blockquote,
        .colors-custom .nav-title,
        .colors-custom .comment-body,
        .colors-custom .site-content .wp-playlist-light .wp-playlist-current-item .wp-playlist-item-album {
            color: hsl(136, 40%, 20%);
            /* base: #333; */
        }

        .colors-custom .social-navigation a:hover,
        .colors-custom .social-navigation a:focus {
            background: hsl(136, 40%, 20%);
            /* base: #333; */
        }

        .colors-custom input[type="text"]:focus,
        .colors-custom input[type="email"]:focus,
        .colors-custom input[type="url"]:focus,
        .colors-custom input[type="password"]:focus,
        .colors-custom input[type="search"]:focus,
        .colors-custom input[type="number"]:focus,
        .colors-custom input[type="tel"]:focus,
        .colors-custom input[type="range"]:focus,
        .colors-custom input[type="date"]:focus,
        .colors-custom input[type="month"]:focus,
        .colors-custom input[type="week"]:focus,
        .colors-custom input[type="time"]:focus,
        .colors-custom input[type="datetime"]:focus,
        .colors-custom input[type="datetime-local"]:focus,
        .colors-custom input[type="color"]:focus,
        .colors-custom textarea:focus,
        .bypostauthor>.comment-body>.comment-meta>.comment-author .avatar {
            border-color: hsl(136, 40%, 20%);
            /* base: #333; */
        }

        .colors-custom h2,
        .colors-custom blockquote,
        .colors-custom input[type="text"],
        .colors-custom input[type="email"],
        .colors-custom input[type="url"],
        .colors-custom input[type="password"],
        .colors-custom input[type="search"],
        .colors-custom input[type="number"],
        .colors-custom input[type="tel"],
        .colors-custom input[type="range"],
        .colors-custom input[type="date"],
        .colors-custom input[type="month"],
        .colors-custom input[type="week"],
        .colors-custom input[type="time"],
        .colors-custom input[type="datetime"],
        .colors-custom input[type="datetime-local"],
        .colors-custom input[type="color"],
        .colors-custom textarea,
        .colors-custom .site-description,
        .colors-custom .entry-content blockquote.alignleft,
        .colors-custom .entry-content blockquote.alignright,
        .colors-custom .colors-custom .taxonomy-description,
        .colors-custom .site-info a,
        .colors-custom .wp-caption,
        .colors-custom .gallery-caption {
            color: hsl(136, 50%, 40%);
            /* base: #666; */
        }

        .colors-custom abbr,
        .colors-custom acronym {
            border-bottom-color: hsl(136, 50%, 40%);
            /* base: #666; */
        }

        .colors-custom h5,
        .colors-custom .entry-meta,
        .colors-custom .entry-meta a,
        .colors-custom.blog .entry-meta a.post-edit-link,
        .colors-custom.archive .entry-meta a.post-edit-link,
        .colors-custom.search .entry-meta a.post-edit-link,
        .colors-custom .nav-subtitle,
        .colors-custom .comment-metadata,
        .colors-custom .comment-metadata a,
        .colors-custom .no-comments,
        .colors-custom .comment-awaiting-moderation,
        .colors-custom .page-numbers.current,
        .colors-custom .page-links .page-number,
        .colors-custom .navigation-top .current-menu-item>a,
        .colors-custom .navigation-top .current_page_item>a,
        .colors-custom .main-navigation a:hover,
        .colors-custom .site-content .wp-playlist-light .wp-playlist-current-item .wp-playlist-item-artist {
            color: hsl(136, 50%, 46%);
            /* base: #767676; */
        }

        .colors-custom :not(.mejs-button)>button:hover,
        .colors-custom :not(.mejs-button)>button:focus,
        .colors-custom input[type="button"]:hover,
        .colors-custom input[type="button"]:focus,
        .colors-custom input[type="submit"]:hover,
        .colors-custom input[type="submit"]:focus,
        .colors-custom .entry-footer .edit-link a.post-edit-link:hover,
        .colors-custom .entry-footer .edit-link a.post-edit-link:focus,
        .colors-custom .social-navigation a,
        .colors-custom .prev.page-numbers:focus,
        .colors-custom .prev.page-numbers:hover,
        .colors-custom .next.page-numbers:focus,
        .colors-custom .next.page-numbers:hover,
        .colors-custom .site-content .wp-playlist-light .wp-playlist-item:hover,
        .colors-custom .site-content .wp-playlist-light .wp-playlist-item:focus {
            background: hsl(136, 50%, 46%);
            /* base: #767676; */
        }

        .colors-custom button.secondary:hover,
        .colors-custom button.secondary:focus,
        .colors-custom input[type="reset"]:hover,
        .colors-custom input[type="reset"]:focus,
        .colors-custom input[type="button"].secondary:hover,
        .colors-custom input[type="button"].secondary:focus,
        .colors-custom input[type="reset"].secondary:hover,
        .colors-custom input[type="reset"].secondary:focus,
        .colors-custom input[type="submit"].secondary:hover,
        .colors-custom input[type="submit"].secondary:focus,
        .colors-custom hr {
            background: hsl(136, 50%, 73%);
            /* base: #bbb; */
        }

        .colors-custom input[type="text"],
        .colors-custom input[type="email"],
        .colors-custom input[type="url"],
        .colors-custom input[type="password"],
        .colors-custom input[type="search"],
        .colors-custom input[type="number"],
        .colors-custom input[type="tel"],
        .colors-custom input[type="range"],
        .colors-custom input[type="date"],
        .colors-custom input[type="month"],
        .colors-custom input[type="week"],
        .colors-custom input[type="time"],
        .colors-custom input[type="datetime"],
        .colors-custom input[type="datetime-local"],
        .colors-custom input[type="color"],
        .colors-custom textarea,
        .colors-custom select,
        .colors-custom fieldset,
        .colors-custom .widget .tagcloud a:hover,
        .colors-custom .widget .tagcloud a:focus,
        .colors-custom .widget.widget_tag_cloud a:hover,
        .colors-custom .widget.widget_tag_cloud a:focus,
        .colors-custom .wp_widget_tag_cloud a:hover,
        .colors-custom .wp_widget_tag_cloud a:focus {
            border-color: hsl(136, 50%, 73%);
            /* base: #bbb; */
        }

        .colors-custom thead th {
            border-bottom-color: hsl(136, 50%, 73%);
            /* base: #bbb; */
        }

        .colors-custom .entry-footer .cat-links .icon,
        .colors-custom .entry-footer .tags-links .icon {
            color: hsl(136, 50%, 73%);
            /* base: #bbb; */
        }

        .colors-custom button.secondary,
        .colors-custom input[type="reset"],
        .colors-custom input[type="button"].secondary,
        .colors-custom input[type="reset"].secondary,
        .colors-custom input[type="submit"].secondary,
        .colors-custom .prev.page-numbers,
        .colors-custom .next.page-numbers {
            background-color: hsl(136, 50%, 87%);
            /* base: #ddd; */
        }

        .colors-custom .widget .tagcloud a,
        .colors-custom .widget.widget_tag_cloud a,
        .colors-custom .wp_widget_tag_cloud a {
            border-color: hsl(136, 50%, 87%);
            /* base: #ddd; */
        }

        .colors-custom.twentyseventeen-front-page article:not(.has-post-thumbnail):not(:first-child),
        .colors-custom .widget ul li {
            border-top-color: hsl(136, 50%, 87%);
            /* base: #ddd; */
        }

        .colors-custom .widget ul li {
            border-bottom-color: hsl(136, 50%, 87%);
            /* base: #ddd; */
        }

        .colors-custom pre,
        .colors-custom mark,
        .colors-custom ins {
            background: hsl(136, 50%, 93%);
            /* base: #eee; */
        }

        .colors-custom .navigation-top,
        .colors-custom .main-navigation>div>ul,
        .colors-custom .pagination,
        .colors-custom .comments-pagination,
        .colors-custom .entry-footer,
        .colors-custom .site-footer {
            border-top-color: hsl(136, 50%, 93%);
            /* base: #eee; */
        }

        .colors-custom .navigation-top,
        .colors-custom .main-navigation li,
        .colors-custom .entry-footer,
        .colors-custom .single-featured-image-header,
        .colors-custom .site-content .wp-playlist-light .wp-playlist-item,
        .colors-custom tr {
            border-bottom-color: hsl(136, 50%, 93%);
            /* base: #eee; */
        }

        .colors-custom .site-content .wp-playlist-light {
            border-color: hsl(136, 50%, 93%);
            /* base: #eee; */
        }

        .colors-custom .site-header,
        .colors-custom .single-featured-image-header {
            background-color: hsl(136, 50%, 98%);
            /* base: #fafafa; */
        }

        .colors-custom button,
        .colors-custom input[type="button"],
        .colors-custom input[type="submit"],
        .colors-custom .entry-footer .edit-link a.post-edit-link,
        .colors-custom .social-navigation a,
        .colors-custom .site-content .wp-playlist-light a.wp-playlist-caption:hover,
        .colors-custom .site-content .wp-playlist-light .wp-playlist-item:hover a,
        .colors-custom .site-content .wp-playlist-light .wp-playlist-item:focus a,
        .colors-custom .site-content .wp-playlist-light .wp-playlist-item:hover,
        .colors-custom .site-content .wp-playlist-light .wp-playlist-item:focus,
        .colors-custom .prev.page-numbers:focus,
        .colors-custom .prev.page-numbers:hover,
        .colors-custom .next.page-numbers:focus,
        .colors-custom .next.page-numbers:hover,
        .colors-custom.has-header-image .site-title,
        .colors-custom.has-header-video .site-title,
        .colors-custom.has-header-image .site-title a,
        .colors-custom.has-header-video .site-title a,
        .colors-custom.has-header-image .site-description,
        .colors-custom.has-header-video .site-description {
            color: hsl(136, 50%, 100%);
            /* base: #fff; */
        }

        body.colors-custom,
        .colors-custom .navigation-top,
        .colors-custom .main-navigation ul {
            background: hsl(136, 50%, 100%);
            /* base: #fff; */
        }

        .colors-custom .widget ul li a,
        .colors-custom .site-footer .widget-area ul li a {
            -webkit-box-shadow: inset 0 -1px 0 hsl(136, 50%, 100%);
            /* base: rgba(255, 255, 255, 1); */
            box-shadow: inset 0 -1px 0 hsl(136, 50%, 100%);
            /* base: rgba(255, 255, 255, 1); */
        }

        .colors-custom .menu-toggle,
        .colors-custom .menu-toggle:hover,
        .colors-custom .menu-toggle:focus,
        .colors-custom .menu .dropdown-toggle,
        .colors-custom .menu-scroll-down,
        .colors-custom .menu-scroll-down:hover,
        .colors-custom .menu-scroll-down:focus {
            background-color: transparent;
        }

        .colors-custom .widget .tagcloud a,
        .colors-custom .widget .tagcloud a:focus,
        .colors-custom .widget .tagcloud a:hover,
        .colors-custom .widget.widget_tag_cloud a,
        .colors-custom .widget.widget_tag_cloud a:focus,
        .colors-custom .widget.widget_tag_cloud a:hover,
        .colors-custom .wp_widget_tag_cloud a,
        .colors-custom .wp_widget_tag_cloud a:focus,
        .colors-custom .wp_widget_tag_cloud a:hover,
        .colors-custom .entry-footer .edit-link a.post-edit-link:focus,
        .colors-custom .entry-footer .edit-link a.post-edit-link:hover {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        /* Reset non-customizable hover styling for links */
        .colors-custom .entry-content a:hover,
        .colors-custom .entry-content a:focus,
        .colors-custom .entry-summary a:hover,
        .colors-custom .entry-summary a:focus,
        .colors-custom .comment-content a:focus,
        .colors-custom .comment-content a:hover,
        .colors-custom .widget a:hover,
        .colors-custom .widget a:focus,
        .colors-custom .site-footer .widget-area a:hover,
        .colors-custom .site-footer .widget-area a:focus,
        .colors-custom .posts-navigation a:hover,
        .colors-custom .posts-navigation a:focus,
        .colors-custom .widget_authors a:hover strong,
        .colors-custom .widget_authors a:focus strong {
            -webkit-box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
            box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
        }

        .colors-custom .gallery-item a,
        .colors-custom .gallery-item a:hover,
        .colors-custom .gallery-item a:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        @media screen and (min-width: 48em) {

            .colors-custom .nav-links .nav-previous .nav-title .icon,
            .colors-custom .nav-links .nav-next .nav-title .icon {
                color: hsl(136, 50%, 20%);
                /* base: #222; */
            }

            .colors-custom .main-navigation li li:hover,
            .colors-custom .main-navigation li li.focus {
                background: hsl(136, 50%, 46%);
                /* base: #767676; */
            }

            .colors-custom .navigation-top .menu-scroll-down {
                color: hsl(136, 50%, 46%);
                /* base: #767676; */
                ;
            }

            .colors-custom abbr[title] {
                border-bottom-color: hsl(136, 50%, 46%);
                /* base: #767676; */
                ;
            }

            .colors-custom .main-navigation ul ul {
                border-color: hsl(136, 50%, 73%);
                /* base: #bbb; */
                background: hsl(136, 50%, 100%);
                /* base: #fff; */
            }

            .colors-custom .main-navigation ul li.menu-item-has-children:before,
            .colors-custom .main-navigation ul li.page_item_has_children:before {
                border-bottom-color: hsl(136, 50%, 73%);
                /* base: #bbb; */
            }

            .colors-custom .main-navigation ul li.menu-item-has-children:after,
            .colors-custom .main-navigation ul li.page_item_has_children:after {
                border-bottom-color: hsl(136, 50%, 100%);
                /* base: #fff; */
            }

            .colors-custom .main-navigation li li.focus>a,
            .colors-custom .main-navigation li li:focus>a,
            .colors-custom .main-navigation li li:hover>a,
            .colors-custom .main-navigation li li a:hover,
            .colors-custom .main-navigation li li a:focus,
            .colors-custom .main-navigation li li.current_page_item a:hover,
            .colors-custom .main-navigation li li.current-menu-item a:hover,
            .colors-custom .main-navigation li li.current_page_item a:focus,
            .colors-custom .main-navigation li li.current-menu-item a:focus {
                color: hsl(136, 50%, 100%);
                /* base: #fff; */
            }
        }
    </style>
    <meta name="generator"
        content="Elementor 3.24.4; features: e_font_icon_svg, additional_custom_breakpoints, e_optimized_control_loading, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        /* custom css */
        .container {
            display: flex;
            flex-wrap: wrap;
            max-width: 1400px;
            margin: 20px auto;
            padding: 10px;
            /* border: 1px solid #ccc; */
            background-color: #ffffff;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #ffffff;
        }

        .sidebar {
            flex: 0 0 600px;
            padding: 20px;
            background-color: #ffffff;
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                flex: 1;
            }
        }

        .card {
            /* width: 400px; */
            width: 100%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .card-text {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
            color: #555;
        }

        .card-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .card-btn:hover {
            background-color: #0056b3;
        }

        /* form styles */

        .horizontal-form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .form-group {
            flex: 1 1 calc(50% - 20px);
            /* Two items per row */
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .submit {
            flex: 1 1 100%;
            display: flex;
            justify-content: center;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .form-group {
                flex: 1 1 100%;
                /* Stack the items on smaller screens */
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .card {
                width: 100%;
                /* margin: 20px; */
            }
        }

        /* Add your alert styles here */
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
            opacity: 1;
            transition: opacity 0.6s;
            margin-bottom: 15px;
        }

        .alert.success {
            background-color: #04AA6D;
        }

        .alert.info {
            background-color: #2196F3;
        }

        .alert.warning {
            background-color: #ff9800;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>
    <link rel="icon"
        href="https://purebloom.ph/wp-content/uploads/2024/09/cropped-cropped-Vector-Smart-Object-32x32.png"
        sizes="32x32" />
    <link rel="icon"
        href="https://purebloom.ph/wp-content/uploads/2024/09/cropped-cropped-Vector-Smart-Object-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://purebloom.ph/wp-content/uploads/2024/09/cropped-cropped-Vector-Smart-Object-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://purebloom.ph/wp-content/uploads/2024/09/cropped-cropped-Vector-Smart-Object-270x270.png" />
</head>

<body
    class="page-template-default page page-id-118 wp-custom-logo wp-embed-responsive has-header-image page-one-column colors-custom elementor-default elementor-kit-60 elementor-page elementor-page-118">
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            Skip to content </a>

        <header id="masthead" class="site-header">

            <div class="custom-header">

                <div class="custom-header-media">
                    <div id="wp-custom-header" class="wp-custom-header"><img fetchpriority="high"
                            src="https://purebloom.ph/wp-content/uploads/2024/09/Screenshot-2024-09-24-at-9.50.36 PM.png"
                            width="1440" height="834" alt=""
                            srcset="https://purebloom.ph/wp-content/uploads/2024/09/Screenshot-2024-09-24-at-9.50.36 PM.png 1440w, https://purebloom.ph/wp-content/uploads/2024/09/Screenshot-2024-09-24-at-9.50.36 PM-300x174.png 300w, https://purebloom.ph/wp-content/uploads/2024/09/Screenshot-2024-09-24-at-9.50.36 PM-1024x593.png 1024w, https://purebloom.ph/wp-content/uploads/2024/09/Screenshot-2024-09-24-at-9.50.36 PM-768x445.png 768w"
                            sizes="(max-width: 767px) 200vw, 100vw" decoding="async" /></div>
                </div>

                <div class="site-branding">
                    <div class="wrap">

                        <a href="https://purebloom.ph/" class="custom-logo-link" rel="home"><img width="250"
                                height="250"
                                src="https://purebloom.ph/wp-content/uploads/2024/09/cropped-cropped-cropped-Vector-Smart-Object.png"
                                class="custom-logo" alt="PureBloom.ph" decoding="async"
                                srcset="https://purebloom.ph/wp-content/uploads/2024/09/cropped-cropped-cropped-Vector-Smart-Object.png 250w, https://purebloom.ph/wp-content/uploads/2024/09/cropped-cropped-cropped-Vector-Smart-Object-150x150.png 150w, https://purebloom.ph/wp-content/uploads/2024/09/cropped-cropped-cropped-Vector-Smart-Object-100x100.png 100w"
                                sizes="100vw" /></a>
                        <div class="site-branding-text">
                            <p class="site-title"><a href="https://purebloom.ph/" rel="home">PureBloom.ph</a></p>

                            <p class="site-description">Blossoming Wellness. Unmatched Quality.</p>
                        </div><!-- .site-branding-text -->


                    </div><!-- .wrap -->
                </div><!-- .site-branding -->

            </div><!-- .custom-header -->

            <div class="navigation-top">
                <div class="wrap">
                    <nav id="site-navigation" class="main-navigation" aria-label="Top Menu">
                        <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
                            <svg class="icon icon-bars" aria-hidden="true" role="img">
                                <use href="#icon-bars" xlink:href="#icon-bars"></use>
                            </svg><svg class="icon icon-close" aria-hidden="true" role="img">
                                <use href="#icon-close" xlink:href="#icon-close"></use>
                            </svg>Menu </button>

                        <div class="menu-top-menu-container">
                            <ul id="top-menu" class="menu">
                                <li id="menu-item-38"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-38">
                                    <a href="https://purebloom.ph/">Home</a>
                                </li>
                                <li id="menu-item-124"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41">
                                    <a href="https://purebloom.ph/about-us/" aria-current="page">About Us</a>
                                </li>
                                <li id="menu-item-41"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41"><a
                                        href="https://purebloom.ph/contact/">Contact Us</a></li>
                                <li id="menu-item-40"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a
                                        href="https://purebloom.ph/blog/">Activities</a></li>
                            </ul>
                        </div>
                    </nav><!-- #site-navigation -->
                </div><!-- .wrap -->
            </div><!-- .navigation-top -->

        </header><!-- #masthead -->

        {{-- <div class="single-featured-image-header"><img width="2000" height="1200"
                src="https://purebloom.ph/wp-content/uploads/2024/09/lotus-2000x1200.jpg"
                class="attachment-twentyseventeen-featured-image size-twentyseventeen-featured-image wp-post-image"
                alt="" decoding="async" sizes="100vw" /></div> --}}
        <!-- .single-featured-image-header -->
        <div class="site-content-contain">
            <div id="content" class="site-content">
                <div class="container">
                    <div class="main-content">
                        @if (session('success'))
                            <div class="alert success">
                                <span class="closebtn">&times;</span>
                                <strong>Success!</strong> {{ session('success') }}
                            </div>
                        @endif
                        <div class="card">
                            {{-- <img src="https://via.placeholder.com/400x200" alt="Card Image"> --}}
                            <div class="card-content">
                                <h2 class="card-title">Entry Registration</h2>
                                <form class="horizontal-form" method="POST" action="{{ route('entries.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name"
                                            style="@error('name') border-color: red;  @enderror"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <small style="color: red">{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email"
                                            style="@error('email') border-color: red;  @enderror"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <small style="color: red">{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone:</label>
                                        <input type="tel" id="phone" name="phone"
                                            style="@error('phone') border-color: red;  @enderror"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <small style="color: red">{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Address:</label>
                                        <input type="text" id="address" name="address"
                                            style="@error('address') border-color: red;  @enderror"
                                            value="{{ old('address') }}">
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <small style="color: red">{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="serial_number">Sachet Number:</label>
                                        <input type="text" id="serial_number" name="serial_number"
                                            style="@error('serial_number') border-color: red;  @enderror"
                                            value="{{ old('serial_number') }}">
                                        @error('serial_number')
                                            <span class="invalid-feedback" role="alert">
                                                <small style="color: red">{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>
                                    <br>
                                    <br>
                                    <div>

                                        <input type="hidden" id="promo_id" name="promo_id"
                                            value="{{ $promo?->id }}">
                                    </div>

                                    {{-- @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif --}}

                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    <div class="form-group submit">
                                        <button type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar">
                        <img src="{{ asset('img/chage_raffle.png') }}" alt="" style="border-radius: 5px;">
                        <br>
                        <br>
                        <div class="card">
                            <div class="card-content">
                                <h2 class="card-title">Promo Mechanics</h2>
                                <div style="margin: 15px;">
                                    <ol type="1">
                                        <li>Every purchase of one (1) Chaga Coffee sachet at 25.00 Pesos entitles the
                                            consumer
                                            to
                                            one (1)
                                            raffle entry.</li>
                                        <li>There is no limit to the number of entries per person. The more Chaga Coffee
                                            sachets
                                            purchased, the more chances of winning.</li>
                                        <li>Scan the QR Code at the back of the Chaga sachet to register your entry on
                                            or before December 19, 2024, at 11:59 PM to be eligible for the draw. Actual
                                            sachet must be kept as proof for claiming prizes.</li>
                                        <li>Winners will be electronically drawn at PureBloom Office on December 20,
                                            2024 under the supervision of an authorized Representative.</li>
                                    </ol>
                                </div>

                                {{-- <a href="#" class="card-btn">Learn More</a> --}}
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-content">
                                <h2 class="card-title">General Terms</h2>
                                <div style="margin: 15px;">
                                    <ol type="1">
                                        <li>A consumer can only win once. Should he be drawn more than once, the item of
                                            higher
                                            value
                                            will be awarded to him.</li>
                                        <li>Winners will be notified thru the contact information provided upon his
                                            registration.
                                        </li>
                                        <li>
                                            For validation, the following must be presented by the winners upon claiming
                                            of
                                            prizes:
                                             1 Valid ID
                                             Actual Chaga Coffee Winning Sachet
                                        </li>
                                        <li>Cash Prizes are non-transferable. Prizes are subject to 20% tax.</li>
                                        <li>Consolation Prizes are non-convertible to cash.</li>
                                        <li>Prizes must be claimed at PureBloom’s Office.</li>
                                        <li>Prizes not claimed within the redemption period of sixty (60 days) will be
                                            forfeited.</li>
                                    </ol>
                                </div>
                                {{-- <a href="#" class="card-btn">Learn More</a> --}}
                            </div>
                        </div>

                    </div>
                </div>
                <div class="wrap">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <!-- #post-118 -->
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .wrap -->


            </div><!-- #content -->

            <footer id="colophon" class="site-footer">
                <div class="wrap">


                    <aside class="widget-area" aria-label="Footer">
                        <div class="widget-column footer-widget-1">
                            <section id="text-8" class="widget widget_text">
                                <h2 class="widget-title">Find Us</h2>
                                <div class="textwidget">
                                    <p><strong>Address</strong><br />
                                        3rd Flr., WDG Marketing Center, South Triangle, Quezon Ave., Quezon City</p>
                                    <p><strong>Hours</strong><br />
                                        Monday–Friday: 9:00AM–5:00PM</p>
                                    <p><strong>Email</strong></p>
                                    <p>purebloom24@gmail.com</p>
                                </div>
                            </section>
                            <section id="simple-social-icons-3" class="widget simple-social-icons">
                                <h2 class="widget-title">Social Media</h2>
                                <ul class="alignleft">
                                    <li class="ssi-email"><a
                                            href="mailto:&#112;&#117;r&#101;&#098;&#108;&#111;&#111;m&#050;4&#064;gmai&#108;.c&#111;&#109;"><svg
                                                role="img" class="social-email" aria-labelledby="social-email-3">
                                                <title id="social-email-3">Email</title>
                                                <use
                                                    xlink:href="https://purebloom.ph/wp-content/plugins/simple-social-icons/symbol-defs.svg#social-email">
                                                </use>
                                            </svg></a></li>
                                    <li class="ssi-facebook"><a href="https://www.facebook.com/purebloom24"><svg
                                                role="img" class="social-facebook"
                                                aria-labelledby="social-facebook-3">
                                                <title id="social-facebook-3">Facebook</title>
                                                <use
                                                    xlink:href="https://purebloom.ph/wp-content/plugins/simple-social-icons/symbol-defs.svg#social-facebook">
                                                </use>
                                            </svg></a></li>
                                    <li class="ssi-tiktok"><a
                                            href="https://www.tiktok.com/@purebloomcorp?fbclid=IwY2xjawFfxoxleHRuA2FlbQIxMAABHRQhtYxsn_HfZ_J5NoJNKR0FBW3t0d1RQuPKJFCp6kh0od-2zRhhdYfpnQ_aem_d8eyRvTSpAlii_DXF2fcVQ"><svg
                                                role="img" class="social-tiktok"
                                                aria-labelledby="social-tiktok-3">
                                                <title id="social-tiktok-3">TikTok</title>
                                                <use
                                                    xlink:href="https://purebloom.ph/wp-content/plugins/simple-social-icons/symbol-defs.svg#social-tiktok">
                                                </use>
                                            </svg></a></li>
                                </ul>
                            </section>
                        </div>
                        <div class="widget-column footer-widget-2">
                            <section id="block-11" class="widget widget_block"><iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.2826135547184!2d121.02873197544184!3d14.639892276112777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b645b380e535%3A0x81247eccd6f695e!2sWDG%20Marketing%20Center!5e0!3m2!1sen!2sph!4v1727188369822!5m2!1sen!2sph"
                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></section>
                        </div>
                    </aside><!-- .widget-area -->

                    <div class="site-info">

                        <!--	<a href="https://wordpress.org/" class="imprint">
  Proudly powered by WordPress	</a>
-->
                    </div><!-- .site-info -->
                </div><!-- .wrap -->
            </footer><!-- #colophon -->
        </div><!-- .site-content-contain -->
    </div><!-- #page -->
    <style type="text/css" media="screen">
        #simple-social-icons-3 ul li a,
        #simple-social-icons-3 ul li a:hover,
        #simple-social-icons-3 ul li a:focus {
            background-color: #1adb60 !important;
            border-radius: 3px;
            color: #ffffff !important;
            border: 0px #ffffff solid !important;
            font-size: 18px;
            padding: 9px;
        }

        #simple-social-icons-3 ul li a:hover,
        #simple-social-icons-3 ul li a:focus {
            background-color: #7adb9e !important;
            border-color: #ffffff !important;
            color: #ffffff !important;
        }

        #simple-social-icons-3 ul li a:focus {
            outline: 1px dotted #7adb9e !important;
        }
    </style>
    <script type='text/javascript'>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeBtns = document.querySelectorAll('.close-btn');
            closeBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    this.parentElement.style.display = 'none';
                });
            });
        });
    </script>
    <script src="https://purebloom.ph/wp-content/themes/twentyseventeen/assets/js/jquery.scrollTo.js?ver=2.1.3"
        id="jquery-scrollto-js" defer data-wp-strategy="defer"></script>
    <script src="https://purebloom.ph/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.24.4"
        id="elementor-webpack-runtime-js"></script>
    <script src="https://purebloom.ph/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.24.4"
        id="elementor-frontend-modules-js"></script>
    <script src="https://purebloom.ph/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.24.4",
            "is_static": false,
            "experimentalFeatures": {
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "container_grid": true,
                "e_swiper_latest": true,
                "e_nested_atomic_repeaters": true,
                "e_optimized_control_loading": true,
                "e_onboarding": true,
                "home_screen": true,
                "ai-layout": true,
                "landing-pages": true,
                "nested-elements": true,
                "editor_v2": true,
                "e_element_cache": true,
                "link-in-bio": true,
                "floating-buttons": true
            },
            "urls": {
                "assets": "https:\/\/purebloom.ph\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/purebloom.ph\/wp-admin\/admin-ajax.php"
            },
            "nonces": {
                "floatingButtonsClickTracking": "83b9d12dac"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 118,
                "title": "About%20Us%20%E2%80%93%20PureBloom.ph",
                "excerpt": "",
                "featuredImage": "https:\/\/purebloom.ph\/wp-content\/uploads\/2024\/09\/lotus-1024x1024.jpg"
            }
        };
    </script>
    <script src="https://purebloom.ph/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.24.4"
        id="elementor-frontend-js"></script>
    <svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1"
        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="icon-behance" viewBox="0 0 37 32">
                <path class="path1"
                    d="M33 6.054h-9.125v2.214h9.125v-2.214zM28.5 13.661q-1.607 0-2.607 0.938t-1.107 2.545h7.286q-0.321-3.482-3.571-3.482zM28.786 24.107q1.125 0 2.179-0.571t1.357-1.554h3.946q-1.786 5.482-7.625 5.482-3.821 0-6.080-2.357t-2.259-6.196q0-3.714 2.33-6.17t6.009-2.455q2.464 0 4.295 1.214t2.732 3.196 0.902 4.429q0 0.304-0.036 0.839h-11.75q0 1.982 1.027 3.063t2.973 1.080zM4.946 23.214h5.286q3.661 0 3.661-2.982 0-3.214-3.554-3.214h-5.393v6.196zM4.946 13.625h5.018q1.393 0 2.205-0.652t0.813-2.027q0-2.571-3.393-2.571h-4.643v5.25zM0 4.536h10.607q1.554 0 2.768 0.25t2.259 0.848 1.607 1.723 0.563 2.75q0 3.232-3.071 4.696 2.036 0.571 3.071 2.054t1.036 3.643q0 1.339-0.438 2.438t-1.179 1.848-1.759 1.268-2.161 0.75-2.393 0.232h-10.911v-22.5z">
                </path>
            </symbol>
            <symbol id="icon-deviantart" viewBox="0 0 18 32">
                <path class="path1"
                    d="M18.286 5.411l-5.411 10.393 0.429 0.554h4.982v7.411h-9.054l-0.786 0.536-2.536 4.875-0.536 0.536h-5.375v-5.411l5.411-10.411-0.429-0.536h-4.982v-7.411h9.054l0.786-0.536 2.536-4.875 0.536-0.536h5.375v5.411z">
                </path>
            </symbol>
            <symbol id="icon-medium" viewBox="0 0 32 32">
                <path class="path1"
                    d="M10.661 7.518v20.946q0 0.446-0.223 0.759t-0.652 0.313q-0.304 0-0.589-0.143l-8.304-4.161q-0.375-0.179-0.634-0.598t-0.259-0.83v-20.357q0-0.357 0.179-0.607t0.518-0.25q0.25 0 0.786 0.268l9.125 4.571q0.054 0.054 0.054 0.089zM11.804 9.321l9.536 15.464-9.536-4.75v-10.714zM32 9.643v18.821q0 0.446-0.25 0.723t-0.679 0.277-0.839-0.232l-7.875-3.929zM31.946 7.5q0 0.054-4.58 7.491t-5.366 8.705l-6.964-11.321 5.786-9.411q0.304-0.5 0.929-0.5 0.25 0 0.464 0.107l9.661 4.821q0.071 0.036 0.071 0.107z">
                </path>
            </symbol>
            <symbol id="icon-slideshare" viewBox="0 0 32 32">
                <path class="path1"
                    d="M15.589 13.214q0 1.482-1.134 2.545t-2.723 1.063-2.723-1.063-1.134-2.545q0-1.5 1.134-2.554t2.723-1.054 2.723 1.054 1.134 2.554zM24.554 13.214q0 1.482-1.125 2.545t-2.732 1.063q-1.589 0-2.723-1.063t-1.134-2.545q0-1.5 1.134-2.554t2.723-1.054q1.607 0 2.732 1.054t1.125 2.554zM28.571 16.429v-11.911q0-1.554-0.571-2.205t-1.982-0.652h-19.857q-1.482 0-2.009 0.607t-0.527 2.25v12.018q0.768 0.411 1.58 0.714t1.446 0.5 1.446 0.33 1.268 0.196 1.25 0.071 1.045 0.009 1.009-0.036 0.795-0.036q1.214-0.018 1.696 0.482 0.107 0.107 0.179 0.161 0.464 0.446 1.089 0.911 0.125-1.625 2.107-1.554 0.089 0 0.652 0.027t0.768 0.036 0.813 0.018 0.946-0.018 0.973-0.080 1.089-0.152 1.107-0.241 1.196-0.348 1.205-0.482 1.286-0.616zM31.482 16.339q-2.161 2.661-6.643 4.5 1.5 5.089-0.411 8.304-1.179 2.018-3.268 2.643-1.857 0.571-3.25-0.268-1.536-0.911-1.464-2.929l-0.018-5.821v-0.018q-0.143-0.036-0.438-0.107t-0.42-0.089l-0.018 6.036q0.071 2.036-1.482 2.929-1.411 0.839-3.268 0.268-2.089-0.643-3.25-2.679-1.875-3.214-0.393-8.268-4.482-1.839-6.643-4.5-0.446-0.661-0.071-1.125t1.071 0.018q0.054 0.036 0.196 0.125t0.196 0.143v-12.393q0-1.286 0.839-2.196t2.036-0.911h22.446q1.196 0 2.036 0.911t0.839 2.196v12.393l0.375-0.268q0.696-0.482 1.071-0.018t-0.071 1.125z">
                </path>
            </symbol>
            <symbol id="icon-snapchat-ghost" viewBox="0 0 30 32">
                <path class="path1"
                    d="M15.143 2.286q2.393-0.018 4.295 1.223t2.92 3.438q0.482 1.036 0.482 3.196 0 0.839-0.161 3.411 0.25 0.125 0.5 0.125 0.321 0 0.911-0.241t0.911-0.241q0.518 0 1 0.321t0.482 0.821q0 0.571-0.563 0.964t-1.232 0.563-1.232 0.518-0.563 0.848q0 0.268 0.214 0.768 0.661 1.464 1.83 2.679t2.58 1.804q0.5 0.214 1.429 0.411 0.5 0.107 0.5 0.625 0 1.25-3.911 1.839-0.125 0.196-0.196 0.696t-0.25 0.83-0.589 0.33q-0.357 0-1.107-0.116t-1.143-0.116q-0.661 0-1.107 0.089-0.571 0.089-1.125 0.402t-1.036 0.679-1.036 0.723-1.357 0.598-1.768 0.241q-0.929 0-1.723-0.241t-1.339-0.598-1.027-0.723-1.036-0.679-1.107-0.402q-0.464-0.089-1.125-0.089-0.429 0-1.17 0.134t-1.045 0.134q-0.446 0-0.625-0.33t-0.25-0.848-0.196-0.714q-3.911-0.589-3.911-1.839 0-0.518 0.5-0.625 0.929-0.196 1.429-0.411 1.393-0.571 2.58-1.804t1.83-2.679q0.214-0.5 0.214-0.768 0-0.5-0.563-0.848t-1.241-0.527-1.241-0.563-0.563-0.938q0-0.482 0.464-0.813t0.982-0.33q0.268 0 0.857 0.232t0.946 0.232q0.321 0 0.571-0.125-0.161-2.536-0.161-3.393 0-2.179 0.482-3.214 1.143-2.446 3.071-3.536t4.714-1.125z">
                </path>
            </symbol>
            <symbol id="icon-yelp" viewBox="0 0 27 32">
                <path class="path1"
                    d="M13.804 23.554v2.268q-0.018 5.214-0.107 5.446-0.214 0.571-0.911 0.714-0.964 0.161-3.241-0.679t-2.902-1.589q-0.232-0.268-0.304-0.643-0.018-0.214 0.071-0.464 0.071-0.179 0.607-0.839t3.232-3.857q0.018 0 1.071-1.25 0.268-0.339 0.705-0.438t0.884 0.063q0.429 0.179 0.67 0.518t0.223 0.75zM11.143 19.071q-0.054 0.982-0.929 1.25l-2.143 0.696q-4.911 1.571-5.214 1.571-0.625-0.036-0.964-0.643-0.214-0.446-0.304-1.339-0.143-1.357 0.018-2.973t0.536-2.223 1-0.571q0.232 0 3.607 1.375 1.25 0.518 2.054 0.839l1.5 0.607q0.411 0.161 0.634 0.545t0.205 0.866zM25.893 24.375q-0.125 0.964-1.634 2.875t-2.42 2.268q-0.661 0.25-1.125-0.125-0.25-0.179-3.286-5.125l-0.839-1.375q-0.25-0.375-0.205-0.821t0.348-0.821q0.625-0.768 1.482-0.464 0.018 0.018 2.125 0.714 3.625 1.179 4.321 1.42t0.839 0.366q0.5 0.393 0.393 1.089zM13.893 13.089q0.089 1.821-0.964 2.179-1.036 0.304-2.036-1.268l-6.75-10.679q-0.143-0.625 0.339-1.107 0.732-0.768 3.705-1.598t4.009-0.563q0.714 0.179 0.875 0.804 0.054 0.321 0.393 5.455t0.429 6.777zM25.714 15.018q0.054 0.696-0.464 1.054-0.268 0.179-5.875 1.536-1.196 0.268-1.625 0.411l0.018-0.036q-0.411 0.107-0.821-0.071t-0.661-0.571q-0.536-0.839 0-1.554 0.018-0.018 1.339-1.821 2.232-3.054 2.679-3.643t0.607-0.696q0.5-0.339 1.161-0.036 0.857 0.411 2.196 2.384t1.446 2.991v0.054z">
                </path>
            </symbol>
            <symbol id="icon-vine" viewBox="0 0 27 32">
                <path class="path1"
                    d="M26.732 14.768v3.536q-1.804 0.411-3.536 0.411-1.161 2.429-2.955 4.839t-3.241 3.848-2.286 1.902q-1.429 0.804-2.893-0.054-0.5-0.304-1.080-0.777t-1.518-1.491-1.83-2.295-1.92-3.286-1.884-4.357-1.634-5.616-1.259-6.964h5.054q0.464 3.893 1.25 7.116t1.866 5.661 2.17 4.205 2.5 3.482q3.018-3.018 5.125-7.25-2.536-1.286-3.982-3.929t-1.446-5.946q0-3.429 1.857-5.616t5.071-2.188q3.179 0 4.875 1.884t1.696 5.313q0 2.839-1.036 5.107-0.125 0.018-0.348 0.054t-0.821 0.036-1.125-0.107-1.107-0.455-0.902-0.92q0.554-1.839 0.554-3.286 0-1.554-0.518-2.357t-1.411-0.804q-0.946 0-1.518 0.884t-0.571 2.509q0 3.321 1.875 5.241t4.768 1.92q1.107 0 2.161-0.25z">
                </path>
            </symbol>
            <symbol id="icon-vk" viewBox="0 0 35 32">
                <path class="path1"
                    d="M34.232 9.286q0.411 1.143-2.679 5.25-0.429 0.571-1.161 1.518-1.393 1.786-1.607 2.339-0.304 0.732 0.25 1.446 0.304 0.375 1.446 1.464h0.018l0.071 0.071q2.518 2.339 3.411 3.946 0.054 0.089 0.116 0.223t0.125 0.473-0.009 0.607-0.446 0.491-1.054 0.223l-4.571 0.071q-0.429 0.089-1-0.089t-0.929-0.393l-0.357-0.214q-0.536-0.375-1.25-1.143t-1.223-1.384-1.089-1.036-1.009-0.277q-0.054 0.018-0.143 0.063t-0.304 0.259-0.384 0.527-0.304 0.929-0.116 1.384q0 0.268-0.063 0.491t-0.134 0.33l-0.071 0.089q-0.321 0.339-0.946 0.393h-2.054q-1.268 0.071-2.607-0.295t-2.348-0.946-1.839-1.179-1.259-1.027l-0.446-0.429q-0.179-0.179-0.491-0.536t-1.277-1.625-1.893-2.696-2.188-3.768-2.33-4.857q-0.107-0.286-0.107-0.482t0.054-0.286l0.071-0.107q0.268-0.339 1.018-0.339l4.893-0.036q0.214 0.036 0.411 0.116t0.286 0.152l0.089 0.054q0.286 0.196 0.429 0.571 0.357 0.893 0.821 1.848t0.732 1.455l0.286 0.518q0.518 1.071 1 1.857t0.866 1.223 0.741 0.688 0.607 0.25 0.482-0.089q0.036-0.018 0.089-0.089t0.214-0.393 0.241-0.839 0.17-1.446 0-2.232q-0.036-0.714-0.161-1.304t-0.25-0.821l-0.107-0.214q-0.446-0.607-1.518-0.768-0.232-0.036 0.089-0.429 0.304-0.339 0.679-0.536 0.946-0.464 4.268-0.429 1.464 0.018 2.411 0.232 0.357 0.089 0.598 0.241t0.366 0.429 0.188 0.571 0.063 0.813-0.018 0.982-0.045 1.259-0.027 1.473q0 0.196-0.018 0.75t-0.009 0.857 0.063 0.723 0.205 0.696 0.402 0.438q0.143 0.036 0.304 0.071t0.464-0.196 0.679-0.616 0.929-1.196 1.214-1.92q1.071-1.857 1.911-4.018 0.071-0.179 0.179-0.313t0.196-0.188l0.071-0.054 0.089-0.045t0.232-0.054 0.357-0.009l5.143-0.036q0.696-0.089 1.143 0.045t0.554 0.295z">
                </path>
            </symbol>
            <symbol id="icon-search" viewBox="0 0 30 32">
                <path class="path1"
                    d="M20.571 14.857q0-3.304-2.348-5.652t-5.652-2.348-5.652 2.348-2.348 5.652 2.348 5.652 5.652 2.348 5.652-2.348 2.348-5.652zM29.714 29.714q0 0.929-0.679 1.607t-1.607 0.679q-0.964 0-1.607-0.679l-6.125-6.107q-3.196 2.214-7.125 2.214-2.554 0-4.884-0.991t-4.018-2.679-2.679-4.018-0.991-4.884 0.991-4.884 2.679-4.018 4.018-2.679 4.884-0.991 4.884 0.991 4.018 2.679 2.679 4.018 0.991 4.884q0 3.929-2.214 7.125l6.125 6.125q0.661 0.661 0.661 1.607z">
                </path>
            </symbol>
            <symbol id="icon-envelope-o" viewBox="0 0 32 32">
                <path class="path1"
                    d="M29.714 26.857v-13.714q-0.571 0.643-1.232 1.179-4.786 3.679-7.607 6.036-0.911 0.768-1.482 1.196t-1.545 0.866-1.83 0.438h-0.036q-0.857 0-1.83-0.438t-1.545-0.866-1.482-1.196q-2.821-2.357-7.607-6.036-0.661-0.536-1.232-1.179v13.714q0 0.232 0.17 0.402t0.402 0.17h26.286q0.232 0 0.402-0.17t0.17-0.402zM29.714 8.089v-0.438t-0.009-0.232-0.054-0.223-0.098-0.161-0.161-0.134-0.25-0.045h-26.286q-0.232 0-0.402 0.17t-0.17 0.402q0 3 2.625 5.071 3.446 2.714 7.161 5.661 0.107 0.089 0.625 0.527t0.821 0.67 0.795 0.563 0.902 0.491 0.768 0.161h0.036q0.357 0 0.768-0.161t0.902-0.491 0.795-0.563 0.821-0.67 0.625-0.527q3.714-2.946 7.161-5.661 0.964-0.768 1.795-2.063t0.83-2.348zM32 7.429v19.429q0 1.179-0.839 2.018t-2.018 0.839h-26.286q-1.179 0-2.018-0.839t-0.839-2.018v-19.429q0-1.179 0.839-2.018t2.018-0.839h26.286q1.179 0 2.018 0.839t0.839 2.018z">
                </path>
            </symbol>
            <symbol id="icon-close" viewBox="0 0 25 32">
                <path class="path1"
                    d="M23.179 23.607q0 0.714-0.5 1.214l-2.429 2.429q-0.5 0.5-1.214 0.5t-1.214-0.5l-5.25-5.25-5.25 5.25q-0.5 0.5-1.214 0.5t-1.214-0.5l-2.429-2.429q-0.5-0.5-0.5-1.214t0.5-1.214l5.25-5.25-5.25-5.25q-0.5-0.5-0.5-1.214t0.5-1.214l2.429-2.429q0.5-0.5 1.214-0.5t1.214 0.5l5.25 5.25 5.25-5.25q0.5-0.5 1.214-0.5t1.214 0.5l2.429 2.429q0.5 0.5 0.5 1.214t-0.5 1.214l-5.25 5.25 5.25 5.25q0.5 0.5 0.5 1.214z">
                </path>
            </symbol>
            <symbol id="icon-angle-down" viewBox="0 0 21 32">
                <path class="path1"
                    d="M19.196 13.143q0 0.232-0.179 0.411l-8.321 8.321q-0.179 0.179-0.411 0.179t-0.411-0.179l-8.321-8.321q-0.179-0.179-0.179-0.411t0.179-0.411l0.893-0.893q0.179-0.179 0.411-0.179t0.411 0.179l7.018 7.018 7.018-7.018q0.179-0.179 0.411-0.179t0.411 0.179l0.893 0.893q0.179 0.179 0.179 0.411z">
                </path>
            </symbol>
            <symbol id="icon-folder-open" viewBox="0 0 34 32">
                <path class="path1"
                    d="M33.554 17q0 0.554-0.554 1.179l-6 7.071q-0.768 0.911-2.152 1.545t-2.563 0.634h-19.429q-0.607 0-1.080-0.232t-0.473-0.768q0-0.554 0.554-1.179l6-7.071q0.768-0.911 2.152-1.545t2.563-0.634h19.429q0.607 0 1.080 0.232t0.473 0.768zM27.429 10.857v2.857h-14.857q-1.679 0-3.518 0.848t-2.929 2.134l-6.107 7.179q0-0.071-0.009-0.223t-0.009-0.223v-17.143q0-1.643 1.179-2.821t2.821-1.179h5.714q1.643 0 2.821 1.179t1.179 2.821v0.571h9.714q1.643 0 2.821 1.179t1.179 2.821z">
                </path>
            </symbol>
            <symbol id="icon-twitter" viewBox="0 0 30 32">
                <path class="path1"
                    d="M28.929 7.286q-1.196 1.75-2.893 2.982 0.018 0.25 0.018 0.75 0 2.321-0.679 4.634t-2.063 4.437-3.295 3.759-4.607 2.607-5.768 0.973q-4.839 0-8.857-2.589 0.625 0.071 1.393 0.071 4.018 0 7.161-2.464-1.875-0.036-3.357-1.152t-2.036-2.848q0.589 0.089 1.089 0.089 0.768 0 1.518-0.196-2-0.411-3.313-1.991t-1.313-3.67v-0.071q1.214 0.679 2.607 0.732-1.179-0.786-1.875-2.054t-0.696-2.75q0-1.571 0.786-2.911 2.161 2.661 5.259 4.259t6.634 1.777q-0.143-0.679-0.143-1.321 0-2.393 1.688-4.080t4.080-1.688q2.5 0 4.214 1.821 1.946-0.375 3.661-1.393-0.661 2.054-2.536 3.179 1.661-0.179 3.321-0.893z">
                </path>
            </symbol>
            <symbol id="icon-facebook" viewBox="0 0 19 32">
                <path class="path1"
                    d="M17.125 0.214v4.714h-2.804q-1.536 0-2.071 0.643t-0.536 1.929v3.375h5.232l-0.696 5.286h-4.536v13.554h-5.464v-13.554h-4.554v-5.286h4.554v-3.893q0-3.321 1.857-5.152t4.946-1.83q2.625 0 4.071 0.214z">
                </path>
            </symbol>
            <symbol id="icon-github" viewBox="0 0 27 32">
                <path class="path1"
                    d="M13.714 2.286q3.732 0 6.884 1.839t4.991 4.991 1.839 6.884q0 4.482-2.616 8.063t-6.759 4.955q-0.482 0.089-0.714-0.125t-0.232-0.536q0-0.054 0.009-1.366t0.009-2.402q0-1.732-0.929-2.536 1.018-0.107 1.83-0.321t1.679-0.696 1.446-1.188 0.946-1.875 0.366-2.688q0-2.125-1.411-3.679 0.661-1.625-0.143-3.643-0.5-0.161-1.446 0.196t-1.643 0.786l-0.679 0.429q-1.661-0.464-3.429-0.464t-3.429 0.464q-0.286-0.196-0.759-0.482t-1.491-0.688-1.518-0.241q-0.804 2.018-0.143 3.643-1.411 1.554-1.411 3.679 0 1.518 0.366 2.679t0.938 1.875 1.438 1.196 1.679 0.696 1.83 0.321q-0.696 0.643-0.875 1.839-0.375 0.179-0.804 0.268t-1.018 0.089-1.17-0.384-0.991-1.116q-0.339-0.571-0.866-0.929t-0.884-0.429l-0.357-0.054q-0.375 0-0.518 0.080t-0.089 0.205 0.161 0.25 0.232 0.214l0.125 0.089q0.393 0.179 0.777 0.679t0.563 0.911l0.179 0.411q0.232 0.679 0.786 1.098t1.196 0.536 1.241 0.125 0.991-0.063l0.411-0.071q0 0.679 0.009 1.58t0.009 0.973q0 0.321-0.232 0.536t-0.714 0.125q-4.143-1.375-6.759-4.955t-2.616-8.063q0-3.732 1.839-6.884t4.991-4.991 6.884-1.839zM5.196 21.982q0.054-0.125-0.125-0.214-0.179-0.054-0.232 0.036-0.054 0.125 0.125 0.214 0.161 0.107 0.232-0.036zM5.75 22.589q0.125-0.089-0.036-0.286-0.179-0.161-0.286-0.054-0.125 0.089 0.036 0.286 0.179 0.179 0.286 0.054zM6.286 23.393q0.161-0.125 0-0.339-0.143-0.232-0.304-0.107-0.161 0.089 0 0.321t0.304 0.125zM7.036 24.143q0.143-0.143-0.071-0.339-0.214-0.214-0.357-0.054-0.161 0.143 0.071 0.339 0.214 0.214 0.357 0.054zM8.054 24.589q0.054-0.196-0.232-0.286-0.268-0.071-0.339 0.125t0.232 0.268q0.268 0.107 0.339-0.107zM9.179 24.679q0-0.232-0.304-0.196-0.286 0-0.286 0.196 0 0.232 0.304 0.196 0.286 0 0.286-0.196zM10.214 24.5q-0.036-0.196-0.321-0.161-0.286 0.054-0.25 0.268t0.321 0.143 0.25-0.25z">
                </path>
            </symbol>
            <symbol id="icon-bars" viewBox="0 0 27 32">
                <path class="path1"
                    d="M27.429 24v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804zM27.429 14.857v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804zM27.429 5.714v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804z">
                </path>
            </symbol>
            <symbol id="icon-google-plus" viewBox="0 0 41 32">
                <path class="path1"
                    d="M25.661 16.304q0 3.714-1.554 6.616t-4.429 4.536-6.589 1.634q-2.661 0-5.089-1.036t-4.179-2.786-2.786-4.179-1.036-5.089 1.036-5.089 2.786-4.179 4.179-2.786 5.089-1.036q5.107 0 8.768 3.429l-3.554 3.411q-2.089-2.018-5.214-2.018-2.196 0-4.063 1.107t-2.955 3.009-1.089 4.152 1.089 4.152 2.955 3.009 4.063 1.107q1.482 0 2.723-0.411t2.045-1.027 1.402-1.402 0.875-1.482 0.384-1.321h-7.429v-4.5h12.357q0.214 1.125 0.214 2.179zM41.143 14.125v3.75h-3.732v3.732h-3.75v-3.732h-3.732v-3.75h3.732v-3.732h3.75v3.732h3.732z">
                </path>
            </symbol>
            <symbol id="icon-linkedin" viewBox="0 0 27 32">
                <path class="path1"
                    d="M6.232 11.161v17.696h-5.893v-17.696h5.893zM6.607 5.696q0.018 1.304-0.902 2.179t-2.42 0.875h-0.036q-1.464 0-2.357-0.875t-0.893-2.179q0-1.321 0.92-2.188t2.402-0.866 2.375 0.866 0.911 2.188zM27.429 18.714v10.143h-5.875v-9.464q0-1.875-0.723-2.938t-2.259-1.063q-1.125 0-1.884 0.616t-1.134 1.527q-0.196 0.536-0.196 1.446v9.875h-5.875q0.036-7.125 0.036-11.554t-0.018-5.286l-0.018-0.857h5.875v2.571h-0.036q0.357-0.571 0.732-1t1.009-0.929 1.554-0.777 2.045-0.277q3.054 0 4.911 2.027t1.857 5.938z">
                </path>
            </symbol>
            <symbol id="icon-quote-right" viewBox="0 0 30 32">
                <path class="path1"
                    d="M13.714 5.714v12.571q0 1.857-0.723 3.545t-1.955 2.92-2.92 1.955-3.545 0.723h-1.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h1.143q1.893 0 3.232-1.339t1.339-3.232v-0.571q0-0.714-0.5-1.214t-1.214-0.5h-4q-1.429 0-2.429-1t-1-2.429v-6.857q0-1.429 1-2.429t2.429-1h6.857q1.429 0 2.429 1t1 2.429zM29.714 5.714v12.571q0 1.857-0.723 3.545t-1.955 2.92-2.92 1.955-3.545 0.723h-1.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h1.143q1.893 0 3.232-1.339t1.339-3.232v-0.571q0-0.714-0.5-1.214t-1.214-0.5h-4q-1.429 0-2.429-1t-1-2.429v-6.857q0-1.429 1-2.429t2.429-1h6.857q1.429 0 2.429 1t1 2.429z">
                </path>
            </symbol>
            <symbol id="icon-mail-reply" viewBox="0 0 32 32">
                <path class="path1"
                    d="M32 20q0 2.964-2.268 8.054-0.054 0.125-0.188 0.429t-0.241 0.536-0.232 0.393q-0.214 0.304-0.5 0.304-0.268 0-0.42-0.179t-0.152-0.446q0-0.161 0.045-0.473t0.045-0.42q0.089-1.214 0.089-2.196 0-1.804-0.313-3.232t-0.866-2.473-1.429-1.804-1.884-1.241-2.375-0.759-2.75-0.384-3.134-0.107h-4v4.571q0 0.464-0.339 0.804t-0.804 0.339-0.804-0.339l-9.143-9.143q-0.339-0.339-0.339-0.804t0.339-0.804l9.143-9.143q0.339-0.339 0.804-0.339t0.804 0.339 0.339 0.804v4.571h4q12.732 0 15.625 7.196 0.946 2.393 0.946 5.946z">
                </path>
            </symbol>
            <symbol id="icon-youtube" viewBox="0 0 27 32">
                <path class="path1"
                    d="M17.339 22.214v3.768q0 1.196-0.696 1.196-0.411 0-0.804-0.393v-5.375q0.393-0.393 0.804-0.393 0.696 0 0.696 1.196zM23.375 22.232v0.821h-1.607v-0.821q0-1.214 0.804-1.214t0.804 1.214zM6.125 18.339h1.911v-1.679h-5.571v1.679h1.875v10.161h1.786v-10.161zM11.268 28.5h1.589v-8.821h-1.589v6.75q-0.536 0.75-1.018 0.75-0.321 0-0.375-0.375-0.018-0.054-0.018-0.625v-6.5h-1.589v6.982q0 0.875 0.143 1.304 0.214 0.661 1.036 0.661 0.857 0 1.821-1.089v0.964zM18.929 25.857v-3.518q0-1.304-0.161-1.768-0.304-1-1.268-1-0.893 0-1.661 0.964v-3.875h-1.589v11.839h1.589v-0.857q0.804 0.982 1.661 0.982 0.964 0 1.268-0.982 0.161-0.482 0.161-1.786zM24.964 25.679v-0.232h-1.625q0 0.911-0.036 1.089-0.125 0.643-0.714 0.643-0.821 0-0.821-1.232v-1.554h3.196v-1.839q0-1.411-0.482-2.071-0.696-0.911-1.893-0.911-1.214 0-1.911 0.911-0.5 0.661-0.5 2.071v3.089q0 1.411 0.518 2.071 0.696 0.911 1.929 0.911 1.286 0 1.929-0.946 0.321-0.482 0.375-0.964 0.036-0.161 0.036-1.036zM14.107 9.375v-3.75q0-1.232-0.768-1.232t-0.768 1.232v3.75q0 1.25 0.768 1.25t0.768-1.25zM26.946 22.786q0 4.179-0.464 6.25-0.25 1.054-1.036 1.768t-1.821 0.821q-3.286 0.375-9.911 0.375t-9.911-0.375q-1.036-0.107-1.83-0.821t-1.027-1.768q-0.464-2-0.464-6.25 0-4.179 0.464-6.25 0.25-1.054 1.036-1.768t1.839-0.839q3.268-0.357 9.893-0.357t9.911 0.357q1.036 0.125 1.83 0.839t1.027 1.768q0.464 2 0.464 6.25zM9.125 0h1.821l-2.161 7.125v4.839h-1.786v-4.839q-0.25-1.321-1.089-3.786-0.661-1.839-1.161-3.339h1.893l1.268 4.696zM15.732 5.946v3.125q0 1.446-0.5 2.107-0.661 0.911-1.893 0.911-1.196 0-1.875-0.911-0.5-0.679-0.5-2.107v-3.125q0-1.429 0.5-2.089 0.679-0.911 1.875-0.911 1.232 0 1.893 0.911 0.5 0.661 0.5 2.089zM21.714 3.054v8.911h-1.625v-0.982q-0.946 1.107-1.839 1.107-0.821 0-1.054-0.661-0.143-0.429-0.143-1.339v-7.036h1.625v6.554q0 0.589 0.018 0.625 0.054 0.393 0.375 0.393 0.482 0 1.018-0.768v-6.804h1.625z">
                </path>
            </symbol>
            <symbol id="icon-dropbox" viewBox="0 0 32 32">
                <path class="path1"
                    d="M7.179 12.625l8.821 5.446-6.107 5.089-8.75-5.696zM24.786 22.536v1.929l-8.75 5.232v0.018l-0.018-0.018-0.018 0.018v-0.018l-8.732-5.232v-1.929l2.625 1.714 6.107-5.071v-0.036l0.018 0.018 0.018-0.018v0.036l6.125 5.071zM9.893 2.107l6.107 5.089-8.821 5.429-6.036-4.821zM24.821 12.625l6.036 4.839-8.732 5.696-6.125-5.089zM22.125 2.107l8.732 5.696-6.036 4.821-8.821-5.429z">
                </path>
            </symbol>
            <symbol id="icon-instagram" viewBox="0 0 27 32">
                <path class="path1"
                    d="M18.286 16q0-1.893-1.339-3.232t-3.232-1.339-3.232 1.339-1.339 3.232 1.339 3.232 3.232 1.339 3.232-1.339 1.339-3.232zM20.75 16q0 2.929-2.054 4.982t-4.982 2.054-4.982-2.054-2.054-4.982 2.054-4.982 4.982-2.054 4.982 2.054 2.054 4.982zM22.679 8.679q0 0.679-0.482 1.161t-1.161 0.482-1.161-0.482-0.482-1.161 0.482-1.161 1.161-0.482 1.161 0.482 0.482 1.161zM13.714 4.75q-0.125 0-1.366-0.009t-1.884 0-1.723 0.054-1.839 0.179-1.277 0.33q-0.893 0.357-1.571 1.036t-1.036 1.571q-0.196 0.518-0.33 1.277t-0.179 1.839-0.054 1.723 0 1.884 0.009 1.366-0.009 1.366 0 1.884 0.054 1.723 0.179 1.839 0.33 1.277q0.357 0.893 1.036 1.571t1.571 1.036q0.518 0.196 1.277 0.33t1.839 0.179 1.723 0.054 1.884 0 1.366-0.009 1.366 0.009 1.884 0 1.723-0.054 1.839-0.179 1.277-0.33q0.893-0.357 1.571-1.036t1.036-1.571q0.196-0.518 0.33-1.277t0.179-1.839 0.054-1.723 0-1.884-0.009-1.366 0.009-1.366 0-1.884-0.054-1.723-0.179-1.839-0.33-1.277q-0.357-0.893-1.036-1.571t-1.571-1.036q-0.518-0.196-1.277-0.33t-1.839-0.179-1.723-0.054-1.884 0-1.366 0.009zM27.429 16q0 4.089-0.089 5.661-0.179 3.714-2.214 5.75t-5.75 2.214q-1.571 0.089-5.661 0.089t-5.661-0.089q-3.714-0.179-5.75-2.214t-2.214-5.75q-0.089-1.571-0.089-5.661t0.089-5.661q0.179-3.714 2.214-5.75t5.75-2.214q1.571-0.089 5.661-0.089t5.661 0.089q3.714 0.179 5.75 2.214t2.214 5.75q0.089 1.571 0.089 5.661z">
                </path>
            </symbol>
            <symbol id="icon-flickr" viewBox="0 0 27 32">
                <path class="path1"
                    d="M22.286 2.286q2.125 0 3.634 1.509t1.509 3.634v17.143q0 2.125-1.509 3.634t-3.634 1.509h-17.143q-2.125 0-3.634-1.509t-1.509-3.634v-17.143q0-2.125 1.509-3.634t3.634-1.509h17.143zM12.464 16q0-1.571-1.107-2.679t-2.679-1.107-2.679 1.107-1.107 2.679 1.107 2.679 2.679 1.107 2.679-1.107 1.107-2.679zM22.536 16q0-1.571-1.107-2.679t-2.679-1.107-2.679 1.107-1.107 2.679 1.107 2.679 2.679 1.107 2.679-1.107 1.107-2.679z">
                </path>
            </symbol>
            <symbol id="icon-tumblr" viewBox="0 0 19 32">
                <path class="path1"
                    d="M16.857 23.732l1.429 4.232q-0.411 0.625-1.982 1.179t-3.161 0.571q-1.857 0.036-3.402-0.464t-2.545-1.321-1.696-1.893-0.991-2.143-0.295-2.107v-9.714h-3v-3.839q1.286-0.464 2.304-1.241t1.625-1.607 1.036-1.821 0.607-1.768 0.268-1.58q0.018-0.089 0.080-0.152t0.134-0.063h4.357v7.571h5.946v4.5h-5.964v9.25q0 0.536 0.116 1t0.402 0.938 0.884 0.741 1.455 0.25q1.393-0.036 2.393-0.518z">
                </path>
            </symbol>
            <symbol id="icon-dockerhub" viewBox="0 0 24 28">
                <path class="path1"
                    d="M1.597 10.257h2.911v2.83H1.597v-2.83zm3.573 0h2.91v2.83H5.17v-2.83zm0-3.627h2.91v2.829H5.17V6.63zm3.57 3.627h2.912v2.83H8.74v-2.83zm0-3.627h2.912v2.829H8.74V6.63zm3.573 3.627h2.911v2.83h-2.911v-2.83zm0-3.627h2.911v2.829h-2.911V6.63zm3.572 3.627h2.911v2.83h-2.911v-2.83zM12.313 3h2.911v2.83h-2.911V3zm-6.65 14.173c-.449 0-.812.354-.812.788 0 .435.364.788.812.788.447 0 .811-.353.811-.788 0-.434-.363-.788-.811-.788">
                </path>
                <path class="path2"
                    d="M28.172 11.721c-.978-.549-2.278-.624-3.388-.306-.136-1.146-.91-2.149-1.83-2.869l-.366-.286-.307.345c-.618.692-.8 1.845-.718 2.73.063.651.273 1.312.685 1.834-.313.183-.668.328-.985.434-.646.212-1.347.33-2.028.33H.083l-.042.429c-.137 1.432.065 2.866.674 4.173l.262.519.03.048c1.8 2.973 4.963 4.225 8.41 4.225 6.672 0 12.174-2.896 14.702-9.015 1.689.085 3.417-.4 4.243-1.968l.211-.4-.401-.223zM5.664 19.458c-.85 0-1.542-.671-1.542-1.497 0-.825.691-1.498 1.541-1.498.849 0 1.54.672 1.54 1.497s-.69 1.498-1.539 1.498z">
                </path>
            </symbol>
            <symbol id="icon-dribbble" viewBox="0 0 27 32">
                <path class="path1"
                    d="M18.286 26.786q-0.75-4.304-2.5-8.893h-0.036l-0.036 0.018q-0.286 0.107-0.768 0.295t-1.804 0.875-2.446 1.464-2.339 2.045-1.839 2.643l-0.268-0.196q3.286 2.679 7.464 2.679 2.357 0 4.571-0.929zM14.982 15.946q-0.375-0.875-0.946-1.982-5.554 1.661-12.018 1.661-0.018 0.125-0.018 0.375 0 2.214 0.786 4.223t2.214 3.598q0.893-1.589 2.205-2.973t2.545-2.223 2.33-1.446 1.777-0.857l0.661-0.232q0.071-0.018 0.232-0.063t0.232-0.080zM13.071 12.161q-2.143-3.804-4.357-6.75-2.464 1.161-4.179 3.321t-2.286 4.857q5.393 0 10.821-1.429zM25.286 17.857q-3.75-1.071-7.304-0.518 1.554 4.268 2.286 8.375 1.982-1.339 3.304-3.384t1.714-4.473zM10.911 4.625q-0.018 0-0.036 0.018 0.018-0.018 0.036-0.018zM21.446 7.214q-3.304-2.929-7.732-2.929-1.357 0-2.768 0.339 2.339 3.036 4.393 6.821 1.232-0.464 2.321-1.080t1.723-1.098 1.17-1.018 0.67-0.723zM25.429 15.875q-0.054-4.143-2.661-7.321l-0.018 0.018q-0.161 0.214-0.339 0.438t-0.777 0.795-1.268 1.080-1.786 1.161-2.348 1.152q0.446 0.946 0.786 1.696 0.036 0.107 0.116 0.313t0.134 0.295q0.643-0.089 1.33-0.125t1.313-0.036 1.232 0.027 1.143 0.071 1.009 0.098 0.857 0.116 0.652 0.107 0.446 0.080zM27.429 16q0 3.732-1.839 6.884t-4.991 4.991-6.884 1.839-6.884-1.839-4.991-4.991-1.839-6.884 1.839-6.884 4.991-4.991 6.884-1.839 6.884 1.839 4.991 4.991 1.839 6.884z">
                </path>
            </symbol>
            <symbol id="icon-skype" viewBox="0 0 27 32">
                <path class="path1"
                    d="M20.946 18.982q0-0.893-0.348-1.634t-0.866-1.223-1.304-0.875-1.473-0.607-1.563-0.411l-1.857-0.429q-0.536-0.125-0.786-0.188t-0.625-0.205-0.536-0.286-0.295-0.375-0.134-0.536q0-1.375 2.571-1.375 0.768 0 1.375 0.214t0.964 0.509 0.679 0.598 0.714 0.518 0.857 0.214q0.839 0 1.348-0.571t0.509-1.375q0-0.982-1-1.777t-2.536-1.205-3.25-0.411q-1.214 0-2.357 0.277t-2.134 0.839-1.589 1.554-0.598 2.295q0 1.089 0.339 1.902t1 1.348 1.429 0.866 1.839 0.58l2.607 0.643q1.607 0.393 2 0.643 0.571 0.357 0.571 1.071 0 0.696-0.714 1.152t-1.875 0.455q-0.911 0-1.634-0.286t-1.161-0.688-0.813-0.804-0.821-0.688-0.964-0.286q-0.893 0-1.348 0.536t-0.455 1.339q0 1.643 2.179 2.813t5.196 1.17q1.304 0 2.5-0.33t2.188-0.955 1.58-1.67 0.589-2.348zM27.429 22.857q0 2.839-2.009 4.848t-4.848 2.009q-2.321 0-4.179-1.429-1.375 0.286-2.679 0.286-2.554 0-4.884-0.991t-4.018-2.679-2.679-4.018-0.991-4.884q0-1.304 0.286-2.679-1.429-1.857-1.429-4.179 0-2.839 2.009-4.848t4.848-2.009q2.321 0 4.179 1.429 1.375-0.286 2.679-0.286 2.554 0 4.884 0.991t4.018 2.679 2.679 4.018 0.991 4.884q0 1.304-0.286 2.679 1.429 1.857 1.429 4.179z">
                </path>
            </symbol>
            <symbol id="icon-foursquare" viewBox="0 0 23 32">
                <path class="path1"
                    d="M17.857 7.75l0.661-3.464q0.089-0.411-0.161-0.714t-0.625-0.304h-12.714q-0.411 0-0.688 0.304t-0.277 0.661v19.661q0 0.125 0.107 0.018l5.196-6.286q0.411-0.464 0.679-0.598t0.857-0.134h4.268q0.393 0 0.661-0.259t0.321-0.527q0.429-2.321 0.661-3.411 0.071-0.375-0.205-0.714t-0.652-0.339h-5.25q-0.518 0-0.857-0.339t-0.339-0.857v-0.75q0-0.518 0.339-0.848t0.857-0.33h6.179q0.321 0 0.625-0.241t0.357-0.527zM21.911 3.786q-0.268 1.304-0.955 4.759t-1.241 6.25-0.625 3.098q-0.107 0.393-0.161 0.58t-0.25 0.58-0.438 0.589-0.688 0.375-1.036 0.179h-4.839q-0.232 0-0.393 0.179-0.143 0.161-7.607 8.821-0.393 0.446-1.045 0.509t-0.866-0.098q-0.982-0.393-0.982-1.75v-25.179q0-0.982 0.679-1.83t2.143-0.848h15.857q1.696 0 2.268 0.946t0.179 2.839zM21.911 3.786l-2.821 14.107q0.071-0.304 0.625-3.098t1.241-6.25 0.955-4.759z">
                </path>
            </symbol>
            <symbol id="icon-wordpress" viewBox="0 0 32 32">
                <path class="path1"
                    d="M2.268 16q0-2.911 1.196-5.589l6.554 17.946q-3.5-1.696-5.625-5.018t-2.125-7.339zM25.268 15.304q0 0.339-0.045 0.688t-0.179 0.884-0.205 0.786-0.313 1.054-0.313 1.036l-1.357 4.571-4.964-14.75q0.821-0.054 1.571-0.143 0.339-0.036 0.464-0.33t-0.045-0.554-0.509-0.241l-3.661 0.179q-1.339-0.018-3.607-0.179-0.214-0.018-0.366 0.089t-0.205 0.268-0.027 0.33 0.161 0.295 0.348 0.143l1.429 0.143 2.143 5.857-3 9-5-14.857q0.821-0.054 1.571-0.143 0.339-0.036 0.464-0.33t-0.045-0.554-0.509-0.241l-3.661 0.179q-0.125 0-0.411-0.009t-0.464-0.009q1.875-2.857 4.902-4.527t6.563-1.67q2.625 0 5.009 0.946t4.259 2.661h-0.179q-0.982 0-1.643 0.723t-0.661 1.705q0 0.214 0.036 0.429t0.071 0.384 0.143 0.411 0.161 0.375 0.214 0.402 0.223 0.375 0.259 0.429 0.25 0.411q1.125 1.911 1.125 3.786zM16.232 17.196l4.232 11.554q0.018 0.107 0.089 0.196-2.25 0.786-4.554 0.786-2 0-3.875-0.571zM28.036 9.411q1.696 3.107 1.696 6.589 0 3.732-1.857 6.884t-4.982 4.973l4.196-12.107q1.054-3.018 1.054-4.929 0-0.75-0.107-1.411zM16 0q3.25 0 6.214 1.268t5.107 3.411 3.411 5.107 1.268 6.214-1.268 6.214-3.411 5.107-5.107 3.411-6.214 1.268-6.214-1.268-5.107-3.411-3.411-5.107-1.268-6.214 1.268-6.214 3.411-5.107 5.107-3.411 6.214-1.268zM16 31.268q3.089 0 5.92-1.214t4.875-3.259 3.259-4.875 1.214-5.92-1.214-5.92-3.259-4.875-4.875-3.259-5.92-1.214-5.92 1.214-4.875 3.259-3.259 4.875-1.214 5.92 1.214 5.92 3.259 4.875 4.875 3.259 5.92 1.214z">
                </path>
            </symbol>
            <symbol id="icon-stumbleupon" viewBox="0 0 34 32">
                <path class="path1"
                    d="M18.964 12.714v-2.107q0-0.75-0.536-1.286t-1.286-0.536-1.286 0.536-0.536 1.286v10.929q0 3.125-2.25 5.339t-5.411 2.214q-3.179 0-5.42-2.241t-2.241-5.42v-4.75h5.857v4.679q0 0.768 0.536 1.295t1.286 0.527 1.286-0.527 0.536-1.295v-11.071q0-3.054 2.259-5.214t5.384-2.161q3.143 0 5.393 2.179t2.25 5.25v2.429l-3.482 1.036zM28.429 16.679h5.857v4.75q0 3.179-2.241 5.42t-5.42 2.241q-3.161 0-5.411-2.223t-2.25-5.366v-4.786l2.339 1.089 3.482-1.036v4.821q0 0.75 0.536 1.277t1.286 0.527 1.286-0.527 0.536-1.277v-4.911z">
                </path>
            </symbol>
            <symbol id="icon-digg" viewBox="0 0 37 32">
                <path class="path1"
                    d="M5.857 5.036h3.643v17.554h-9.5v-12.446h5.857v-5.107zM5.857 19.661v-6.589h-2.196v6.589h2.196zM10.964 10.143v12.446h3.661v-12.446h-3.661zM10.964 5.036v3.643h3.661v-3.643h-3.661zM16.089 10.143h9.518v16.821h-9.518v-2.911h5.857v-1.464h-5.857v-12.446zM21.946 19.661v-6.589h-2.196v6.589h2.196zM27.071 10.143h9.5v16.821h-9.5v-2.911h5.839v-1.464h-5.839v-12.446zM32.911 19.661v-6.589h-2.196v6.589h2.196z">
                </path>
            </symbol>
            <symbol id="icon-spotify" viewBox="0 0 27 32">
                <path class="path1"
                    d="M20.125 21.607q0-0.571-0.536-0.911-3.446-2.054-7.982-2.054-2.375 0-5.125 0.607-0.75 0.161-0.75 0.929 0 0.357 0.241 0.616t0.634 0.259q0.089 0 0.661-0.143 2.357-0.482 4.339-0.482 4.036 0 7.089 1.839 0.339 0.196 0.589 0.196 0.339 0 0.589-0.241t0.25-0.616zM21.839 17.768q0-0.714-0.625-1.089-4.232-2.518-9.786-2.518-2.732 0-5.411 0.75-0.857 0.232-0.857 1.143 0 0.446 0.313 0.759t0.759 0.313q0.125 0 0.661-0.143 2.179-0.589 4.482-0.589 4.982 0 8.714 2.214 0.429 0.232 0.679 0.232 0.446 0 0.759-0.313t0.313-0.759zM23.768 13.339q0-0.839-0.714-1.25-2.25-1.304-5.232-1.973t-6.125-0.67q-3.643 0-6.5 0.839-0.411 0.125-0.688 0.455t-0.277 0.866q0 0.554 0.366 0.929t0.92 0.375q0.196 0 0.714-0.143 2.375-0.661 5.482-0.661 2.839 0 5.527 0.607t4.527 1.696q0.375 0.214 0.714 0.214 0.518 0 0.902-0.366t0.384-0.92zM27.429 16q0 3.732-1.839 6.884t-4.991 4.991-6.884 1.839-6.884-1.839-4.991-4.991-1.839-6.884 1.839-6.884 4.991-4.991 6.884-1.839 6.884 1.839 4.991 4.991 1.839 6.884z">
                </path>
            </symbol>
            <symbol id="icon-soundcloud" viewBox="0 0 41 32">
                <path class="path1"
                    d="M14 24.5l0.286-4.304-0.286-9.339q-0.018-0.179-0.134-0.304t-0.295-0.125q-0.161 0-0.286 0.125t-0.125 0.304l-0.25 9.339 0.25 4.304q0.018 0.179 0.134 0.295t0.277 0.116q0.393 0 0.429-0.411zM19.286 23.982l0.196-3.768-0.214-10.464q0-0.286-0.232-0.429-0.143-0.089-0.286-0.089t-0.286 0.089q-0.232 0.143-0.232 0.429l-0.018 0.107-0.179 10.339q0 0.018 0.196 4.214v0.018q0 0.179 0.107 0.304 0.161 0.196 0.411 0.196 0.196 0 0.357-0.161 0.161-0.125 0.161-0.357zM0.625 17.911l0.357 2.286-0.357 2.25q-0.036 0.161-0.161 0.161t-0.161-0.161l-0.304-2.25 0.304-2.286q0.036-0.161 0.161-0.161t0.161 0.161zM2.161 16.5l0.464 3.696-0.464 3.625q-0.036 0.161-0.179 0.161-0.161 0-0.161-0.179l-0.411-3.607 0.411-3.696q0-0.161 0.161-0.161 0.143 0 0.179 0.161zM3.804 15.821l0.446 4.375-0.446 4.232q0 0.196-0.196 0.196-0.179 0-0.214-0.196l-0.375-4.232 0.375-4.375q0.036-0.214 0.214-0.214 0.196 0 0.196 0.214zM5.482 15.696l0.411 4.5-0.411 4.357q-0.036 0.232-0.25 0.232-0.232 0-0.232-0.232l-0.375-4.357 0.375-4.5q0-0.232 0.232-0.232 0.214 0 0.25 0.232zM7.161 16.018l0.375 4.179-0.375 4.393q-0.036 0.286-0.286 0.286-0.107 0-0.188-0.080t-0.080-0.205l-0.357-4.393 0.357-4.179q0-0.107 0.080-0.188t0.188-0.080q0.25 0 0.286 0.268zM8.839 13.411l0.375 6.786-0.375 4.393q0 0.125-0.089 0.223t-0.214 0.098q-0.286 0-0.321-0.321l-0.321-4.393 0.321-6.786q0.036-0.321 0.321-0.321 0.125 0 0.214 0.098t0.089 0.223zM10.518 11.875l0.339 8.357-0.339 4.357q0 0.143-0.098 0.241t-0.241 0.098q-0.321 0-0.357-0.339l-0.286-4.357 0.286-8.357q0.036-0.339 0.357-0.339 0.143 0 0.241 0.098t0.098 0.241zM12.268 11.161l0.321 9.036-0.321 4.321q-0.036 0.375-0.393 0.375-0.339 0-0.375-0.375l-0.286-4.321 0.286-9.036q0-0.161 0.116-0.277t0.259-0.116q0.161 0 0.268 0.116t0.125 0.277zM19.268 24.411v0 0zM15.732 11.089l0.268 9.107-0.268 4.268q0 0.179-0.134 0.313t-0.313 0.134-0.304-0.125-0.143-0.321l-0.25-4.268 0.25-9.107q0-0.196 0.134-0.321t0.313-0.125 0.313 0.125 0.134 0.321zM17.5 11.429l0.25 8.786-0.25 4.214q0 0.196-0.143 0.339t-0.339 0.143-0.339-0.143-0.161-0.339l-0.214-4.214 0.214-8.786q0.018-0.214 0.161-0.357t0.339-0.143 0.33 0.143 0.152 0.357zM21.286 20.214l-0.25 4.125q0 0.232-0.161 0.393t-0.393 0.161-0.393-0.161-0.179-0.393l-0.107-2.036-0.107-2.089 0.214-11.357v-0.054q0.036-0.268 0.214-0.429 0.161-0.125 0.357-0.125 0.143 0 0.268 0.089 0.25 0.143 0.286 0.464zM41.143 19.875q0 2.089-1.482 3.563t-3.571 1.473h-14.036q-0.232-0.036-0.393-0.196t-0.161-0.393v-16.054q0-0.411 0.5-0.589 1.518-0.607 3.232-0.607 3.482 0 6.036 2.348t2.857 5.777q0.946-0.393 1.964-0.393 2.089 0 3.571 1.482t1.482 3.589z">
                </path>
            </symbol>
            <symbol id="icon-codepen" viewBox="0 0 32 32">
                <path class="path1"
                    d="M3.857 20.875l10.768 7.179v-6.411l-5.964-3.982zM2.75 18.304l3.446-2.304-3.446-2.304v4.607zM17.375 28.054l10.768-7.179-4.804-3.214-5.964 3.982v6.411zM16 19.25l4.857-3.25-4.857-3.25-4.857 3.25zM8.661 14.339l5.964-3.982v-6.411l-10.768 7.179zM25.804 16l3.446 2.304v-4.607zM23.339 14.339l4.804-3.214-10.768-7.179v6.411zM32 11.125v9.75q0 0.732-0.607 1.143l-14.625 9.75q-0.375 0.232-0.768 0.232t-0.768-0.232l-14.625-9.75q-0.607-0.411-0.607-1.143v-9.75q0-0.732 0.607-1.143l14.625-9.75q0.375-0.232 0.768-0.232t0.768 0.232l14.625 9.75q0.607 0.411 0.607 1.143z">
                </path>
            </symbol>
            <symbol id="icon-twitch" viewBox="0 0 32 32">
                <path class="path1"
                    d="M16 7.75v7.75h-2.589v-7.75h2.589zM23.107 7.75v7.75h-2.589v-7.75h2.589zM23.107 21.321l4.518-4.536v-14.196h-21.321v18.732h5.821v3.875l3.875-3.875h7.107zM30.214 0v18.089l-7.75 7.75h-5.821l-3.875 3.875h-3.875v-3.875h-7.107v-20.679l1.946-5.161h26.482z">
                </path>
            </symbol>
            <symbol id="icon-meanpath" viewBox="0 0 27 32">
                <path class="path1"
                    d="M23.411 15.036v2.036q0 0.429-0.241 0.679t-0.67 0.25h-3.607q-0.429 0-0.679-0.25t-0.25-0.679v-2.036q0-0.429 0.25-0.679t0.679-0.25h3.607q0.429 0 0.67 0.25t0.241 0.679zM14.661 19.143v-4.464q0-0.946-0.58-1.527t-1.527-0.58h-2.375q-1.214 0-1.714 0.929-0.5-0.929-1.714-0.929h-2.321q-0.946 0-1.527 0.58t-0.58 1.527v4.464q0 0.393 0.375 0.393h0.982q0.393 0 0.393-0.393v-4.107q0-0.429 0.241-0.679t0.688-0.25h1.679q0.429 0 0.679 0.25t0.25 0.679v4.107q0 0.393 0.375 0.393h0.964q0.393 0 0.393-0.393v-4.107q0-0.429 0.25-0.679t0.679-0.25h1.732q0.429 0 0.67 0.25t0.241 0.679v4.107q0 0.393 0.393 0.393h0.982q0.375 0 0.375-0.393zM25.179 17.429v-2.75q0-0.946-0.589-1.527t-1.536-0.58h-4.714q-0.946 0-1.536 0.58t-0.589 1.527v7.321q0 0.375 0.393 0.375h0.982q0.375 0 0.375-0.375v-3.214q0.554 0.75 1.679 0.75h3.411q0.946 0 1.536-0.58t0.589-1.527zM27.429 6.429v19.143q0 1.714-1.214 2.929t-2.929 1.214h-19.143q-1.714 0-2.929-1.214t-1.214-2.929v-19.143q0-1.714 1.214-2.929t2.929-1.214h19.143q1.714 0 2.929 1.214t1.214 2.929z">
                </path>
            </symbol>
            <symbol id="icon-pinterest-p" viewBox="0 0 23 32">
                <path class="path1"
                    d="M0 10.661q0-1.929 0.67-3.634t1.848-2.973 2.714-2.196 3.304-1.393 3.607-0.464q2.821 0 5.25 1.188t3.946 3.455 1.518 5.125q0 1.714-0.339 3.357t-1.071 3.161-1.786 2.67-2.589 1.839-3.375 0.688q-1.214 0-2.411-0.571t-1.714-1.571q-0.179 0.696-0.5 2.009t-0.42 1.696-0.366 1.268-0.464 1.268-0.571 1.116-0.821 1.384-1.107 1.545l-0.25 0.089-0.161-0.179q-0.268-2.804-0.268-3.357 0-1.643 0.384-3.688t1.188-5.134 0.929-3.625q-0.571-1.161-0.571-3.018 0-1.482 0.929-2.786t2.357-1.304q1.089 0 1.696 0.723t0.607 1.83q0 1.179-0.786 3.411t-0.786 3.339q0 1.125 0.804 1.866t1.946 0.741q0.982 0 1.821-0.446t1.402-1.214 1-1.696 0.679-1.973 0.357-1.982 0.116-1.777q0-3.089-1.955-4.813t-5.098-1.723q-3.571 0-5.964 2.313t-2.393 5.866q0 0.786 0.223 1.518t0.482 1.161 0.482 0.813 0.223 0.545q0 0.5-0.268 1.304t-0.661 0.804q-0.036 0-0.304-0.054-0.911-0.268-1.616-1t-1.089-1.688-0.58-1.929-0.196-1.902z">
                </path>
            </symbol>
            <symbol id="icon-periscope" viewBox="0 0 24 28">
                <path class="path1"
                    d="M12.285,1C6.696,1,2.277,5.643,2.277,11.243c0,5.851,7.77,14.578,10.007,14.578c1.959,0,9.729-8.728,9.729-14.578 C22.015,5.643,17.596,1,12.285,1z M12.317,16.551c-3.473,0-6.152-2.611-6.152-5.664c0-1.292,0.39-2.472,1.065-3.438 c0.206,1.084,1.18,1.906,2.352,1.906c1.322,0,2.393-1.043,2.393-2.333c0-0.832-0.447-1.561-1.119-1.975 c0.467-0.105,0.955-0.161,1.46-0.161c3.133,0,5.81,2.611,5.81,5.998C18.126,13.94,15.449,16.551,12.317,16.551z">
                </path>
            </symbol>
            <symbol id="icon-get-pocket" viewBox="0 0 31 32">
                <path class="path1"
                    d="M27.946 2.286q1.161 0 1.964 0.813t0.804 1.973v9.268q0 3.143-1.214 6t-3.259 4.911-4.893 3.259-5.973 1.205q-3.143 0-5.991-1.205t-4.902-3.259-3.268-4.911-1.214-6v-9.268q0-1.143 0.821-1.964t1.964-0.821h25.161zM15.375 21.286q0.839 0 1.464-0.589l7.214-6.929q0.661-0.625 0.661-1.518 0-0.875-0.616-1.491t-1.491-0.616q-0.839 0-1.464 0.589l-5.768 5.536-5.768-5.536q-0.625-0.589-1.446-0.589-0.875 0-1.491 0.616t-0.616 1.491q0 0.911 0.643 1.518l7.232 6.929q0.589 0.589 1.446 0.589z">
                </path>
            </symbol>
            <symbol id="icon-vimeo" viewBox="0 0 32 32">
                <path class="path1"
                    d="M30.518 9.25q-0.179 4.214-5.929 11.625-5.946 7.696-10.036 7.696-2.536 0-4.286-4.696-0.786-2.857-2.357-8.607-1.286-4.679-2.804-4.679-0.321 0-2.268 1.357l-1.375-1.75q0.429-0.375 1.929-1.723t2.321-2.063q2.786-2.464 4.304-2.607 1.696-0.161 2.732 0.991t1.446 3.634q0.786 5.125 1.179 6.661 0.982 4.446 2.143 4.446 0.911 0 2.75-2.875 1.804-2.875 1.946-4.393 0.232-2.482-1.946-2.482-1.018 0-2.161 0.464 2.143-7.018 8.196-6.821 4.482 0.143 4.214 5.821z">
                </path>
            </symbol>
            <symbol id="icon-reddit-alien" viewBox="0 0 32 32">
                <path class="path1"
                    d="M32 15.107q0 1.036-0.527 1.884t-1.42 1.295q0.214 0.821 0.214 1.714 0 2.768-1.902 5.125t-5.188 3.723-7.143 1.366-7.134-1.366-5.179-3.723-1.902-5.125q0-0.839 0.196-1.679-0.911-0.446-1.464-1.313t-0.554-1.902q0-1.464 1.036-2.509t2.518-1.045q1.518 0 2.589 1.125 3.893-2.714 9.196-2.893l2.071-9.304q0.054-0.232 0.268-0.375t0.464-0.089l6.589 1.446q0.321-0.661 0.964-1.063t1.411-0.402q1.107 0 1.893 0.777t0.786 1.884-0.786 1.893-1.893 0.786-1.884-0.777-0.777-1.884l-5.964-1.321-1.857 8.429q5.357 0.161 9.268 2.857 1.036-1.089 2.554-1.089 1.482 0 2.518 1.045t1.036 2.509zM7.464 18.661q0 1.107 0.777 1.893t1.884 0.786 1.893-0.786 0.786-1.893-0.786-1.884-1.893-0.777q-1.089 0-1.875 0.786t-0.786 1.875zM21.929 25q0.196-0.196 0.196-0.464t-0.196-0.464q-0.179-0.179-0.446-0.179t-0.464 0.179q-0.732 0.75-2.161 1.107t-2.857 0.357-2.857-0.357-2.161-1.107q-0.196-0.179-0.464-0.179t-0.446 0.179q-0.196 0.179-0.196 0.455t0.196 0.473q0.768 0.768 2.116 1.214t2.188 0.527 1.625 0.080 1.625-0.080 2.188-0.527 2.116-1.214zM21.875 21.339q1.107 0 1.884-0.786t0.777-1.893q0-1.089-0.786-1.875t-1.875-0.786q-1.107 0-1.893 0.777t-0.786 1.884 0.786 1.893 1.893 0.786z">
                </path>
            </symbol>
            <symbol id="icon-whatsapp" viewBox="0 0 32 32">
                <path
                    d="M15.968 2.003a14.03 13.978 0 0 0-14.03 13.978 14.03 13.978 0 0 0 2.132 7.391L1.938 29.96l6.745-2.052a14.03 13.978 0 0 0 7.285 2.052 14.03 13.978 0 0 0 14.03-13.978 14.03 13.978 0 0 0-14.03-13.978z"
                    stroke-width=".2000562" />
                <path
                    d="M10.454 8.236a2.57 3.401 51.533 0 0-1.475 3.184v.015c.01 2.04 4.045 10.076 10.017 12.688l.017-.013a2.57 3.401 51.533 0 0 3.454-.706 2.57 3.401 51.533 0 0 1.064-4.129 2.57 3.401 51.533 0 0-4.262.103 2.57 3.401 51.533 0 0-.505.473c-1.346-.639-2.952-1.463-4.168-2.98-.771-.962-1.257-2.732-1.549-4.206a2.57 3.401 51.533 0 0 .605-.403 2.57 3.401 51.533 0 0 1.064-4.129 2.57 3.401 51.533 0 0-4.262.103z"
                    stroke-width=".372" />
            </symbol>
            <symbol id="icon-telegram" viewBox="0 0 32 32">
                <path
                    d="M30.8,2.2L0.6,13.9c-0.8,0.3-0.7,1.3,0,1.6l7.4,2.8l2.9,9.2c0.2,0.6,0.9,0.8,1.4,0.4l4.1-3.4 c0.4-0.4,1-0.4,1.5,0l7.4,5.4c0.5,0.4,1.2,0.1,1.4-0.5L32,3.2C32.1,2.5,31.4,1.9,30.8,2.2z M25,8.3l-11.9,11 c-0.4,0.4-0.7,0.9-0.8,1.5l-0.4,3c-0.1,0.4-0.6,0.4-0.7,0.1l-1.6-5.5c-0.2-0.6,0.1-1.3,0.6-1.6l14.4-8.9C25,7.7,25.3,8.1,25,8.3z" />
            </symbol>
            <symbol id="icon-hashtag" viewBox="0 0 32 32">
                <path class="path1"
                    d="M17.696 18.286l1.143-4.571h-4.536l-1.143 4.571h4.536zM31.411 9.286l-1 4q-0.125 0.429-0.554 0.429h-5.839l-1.143 4.571h5.554q0.268 0 0.446 0.214 0.179 0.25 0.107 0.5l-1 4q-0.089 0.429-0.554 0.429h-5.839l-1.446 5.857q-0.125 0.429-0.554 0.429h-4q-0.286 0-0.464-0.214-0.161-0.214-0.107-0.5l1.393-5.571h-4.536l-1.446 5.857q-0.125 0.429-0.554 0.429h-4.018q-0.268 0-0.446-0.214-0.161-0.214-0.107-0.5l1.393-5.571h-5.554q-0.268 0-0.446-0.214-0.161-0.214-0.107-0.5l1-4q0.125-0.429 0.554-0.429h5.839l1.143-4.571h-5.554q-0.268 0-0.446-0.214-0.179-0.25-0.107-0.5l1-4q0.089-0.429 0.554-0.429h5.839l1.446-5.857q0.125-0.429 0.571-0.429h4q0.268 0 0.446 0.214 0.161 0.214 0.107 0.5l-1.393 5.571h4.536l1.446-5.857q0.125-0.429 0.571-0.429h4q0.268 0 0.446 0.214 0.161 0.214 0.107 0.5l-1.393 5.571h5.554q0.268 0 0.446 0.214 0.161 0.214 0.107 0.5z">
                </path>
            </symbol>
            <symbol id="icon-chain" viewBox="0 0 30 32">
                <path class="path1"
                    d="M26 21.714q0-0.714-0.5-1.214l-3.714-3.714q-0.5-0.5-1.214-0.5-0.75 0-1.286 0.571 0.054 0.054 0.339 0.33t0.384 0.384 0.268 0.339 0.232 0.455 0.063 0.491q0 0.714-0.5 1.214t-1.214 0.5q-0.268 0-0.491-0.063t-0.455-0.232-0.339-0.268-0.384-0.384-0.33-0.339q-0.589 0.554-0.589 1.304 0 0.714 0.5 1.214l3.679 3.696q0.482 0.482 1.214 0.482 0.714 0 1.214-0.464l2.625-2.607q0.5-0.5 0.5-1.196zM13.446 9.125q0-0.714-0.5-1.214l-3.679-3.696q-0.5-0.5-1.214-0.5-0.696 0-1.214 0.482l-2.625 2.607q-0.5 0.5-0.5 1.196 0 0.714 0.5 1.214l3.714 3.714q0.482 0.482 1.214 0.482 0.75 0 1.286-0.554-0.054-0.054-0.339-0.33t-0.384-0.384-0.268-0.339-0.232-0.455-0.063-0.491q0-0.714 0.5-1.214t1.214-0.5q0.268 0 0.491 0.063t0.455 0.232 0.339 0.268 0.384 0.384 0.33 0.339q0.589-0.554 0.589-1.304zM29.429 21.714q0 2.143-1.518 3.625l-2.625 2.607q-1.482 1.482-3.625 1.482-2.161 0-3.643-1.518l-3.679-3.696q-1.482-1.482-1.482-3.625 0-2.196 1.571-3.732l-1.571-1.571q-1.536 1.571-3.714 1.571-2.143 0-3.643-1.5l-3.714-3.714q-1.5-1.5-1.5-3.643t1.518-3.625l2.625-2.607q1.482-1.482 3.625-1.482 2.161 0 3.643 1.518l3.679 3.696q1.482 1.482 1.482 3.625 0 2.196-1.571 3.732l1.571 1.571q1.536-1.571 3.714-1.571 2.143 0 3.643 1.5l3.714 3.714q1.5 1.5 1.5 3.643z">
                </path>
            </symbol>
            <symbol id="icon-thumb-tack" viewBox="0 0 21 32">
                <path class="path1"
                    d="M8.571 15.429v-8q0-0.25-0.161-0.411t-0.411-0.161-0.411 0.161-0.161 0.411v8q0 0.25 0.161 0.411t0.411 0.161 0.411-0.161 0.161-0.411zM20.571 21.714q0 0.464-0.339 0.804t-0.804 0.339h-7.661l-0.911 8.625q-0.036 0.214-0.188 0.366t-0.366 0.152h-0.018q-0.482 0-0.571-0.482l-1.357-8.661h-7.214q-0.464 0-0.804-0.339t-0.339-0.804q0-2.196 1.402-3.955t3.17-1.759v-9.143q-0.929 0-1.607-0.679t-0.679-1.607 0.679-1.607 1.607-0.679h11.429q0.929 0 1.607 0.679t0.679 1.607-0.679 1.607-1.607 0.679v9.143q1.768 0 3.17 1.759t1.402 3.955z">
                </path>
            </symbol>
            <symbol id="icon-arrow-left" viewBox="0 0 43 32">
                <path class="path1"
                    d="M42.311 14.044c-0.178-0.178-0.533-0.356-0.711-0.356h-33.778l10.311-10.489c0.178-0.178 0.356-0.533 0.356-0.711 0-0.356-0.178-0.533-0.356-0.711l-1.6-1.422c-0.356-0.178-0.533-0.356-0.889-0.356s-0.533 0.178-0.711 0.356l-14.578 14.933c-0.178 0.178-0.356 0.533-0.356 0.711s0.178 0.533 0.356 0.711l14.756 14.933c0 0.178 0.356 0.356 0.533 0.356s0.533-0.178 0.711-0.356l1.6-1.6c0.178-0.178 0.356-0.533 0.356-0.711s-0.178-0.533-0.356-0.711l-10.311-10.489h33.778c0.178 0 0.533-0.178 0.711-0.356 0.356-0.178 0.533-0.356 0.533-0.711v-2.133c0-0.356-0.178-0.711-0.356-0.889z">
                </path>
            </symbol>
            <symbol id="icon-arrow-right" viewBox="0 0 43 32">
                <path class="path1"
                    d="M0.356 17.956c0.178 0.178 0.533 0.356 0.711 0.356h33.778l-10.311 10.489c-0.178 0.178-0.356 0.533-0.356 0.711 0 0.356 0.178 0.533 0.356 0.711l1.6 1.6c0.178 0.178 0.533 0.356 0.711 0.356s0.533-0.178 0.711-0.356l14.756-14.933c0.178-0.356 0.356-0.711 0.356-0.889s-0.178-0.533-0.356-0.711l-14.756-14.933c0-0.178-0.356-0.356-0.533-0.356s-0.533 0.178-0.711 0.356l-1.6 1.6c-0.178 0.178-0.356 0.533-0.356 0.711s0.178 0.533 0.356 0.711l10.311 10.489h-33.778c-0.178 0-0.533 0.178-0.711 0.356-0.356 0.178-0.533 0.356-0.533 0.711v2.311c0 0.178 0.178 0.533 0.356 0.711z">
                </path>
            </symbol>
            <symbol id="icon-play" viewBox="0 0 22 28">
                <path
                    d="M21.625 14.484l-20.75 11.531c-0.484 0.266-0.875 0.031-0.875-0.516v-23c0-0.547 0.391-0.781 0.875-0.516l20.75 11.531c0.484 0.266 0.484 0.703 0 0.969z">
                </path>
            </symbol>
            <symbol id="icon-pause" viewBox="0 0 24 28">
                <path
                    d="M24 3v22c0 0.547-0.453 1-1 1h-8c-0.547 0-1-0.453-1-1v-22c0-0.547 0.453-1 1-1h8c0.547 0 1 0.453 1 1zM10 3v22c0 0.547-0.453 1-1 1h-8c-0.547 0-1-0.453-1-1v-22c0-0.547 0.453-1 1-1h8c0.547 0 1 0.453 1 1z">
                </path>
            </symbol>
        </defs>
    </svg>

</body>
<script>
    'undefined' === typeof _trfq || (window._trfq = []);
    'undefined' === typeof _trfd && (window._trfd = []), _trfd.push({
        'tccl.baseHost': 'secureserver.net'
    }, {
        'ap': 'cpsh-oh'
    }, {
        'server': 'sg2plzcpnl506746'
    }, {
        'dcenter': 'sg2'
    }, {
        'cp_id': '10058330'
    }, {
        'cp_cl': '8'
    }) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.
</script>
<script src='https://img1.wsimg.com/traffic-assets/js/tccl.min.js'></script>

</html>
