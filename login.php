<!DOCTYPE html>
<html lang="en-US">
<?php session_start(); ?>

<head>
  <link rel="stylesheet" href="login.css">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <title>Login</title>
  <!-- Bootstrap 5 CDN Links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Custom File's Link -->
  <link rel="stylesheet" href="style.css">
  <meta name="robots" content="max-image-preview:large" />
  <link rel="alternate" type="application/rss+xml" title="GetTrade &raquo; Feed" href="https://kitnew.moxcreative.com/gettrade/feed/" />
  <link rel="alternate" type="application/rss+xml" title="GetTrade &raquo; Comments Feed" href="https://kitnew.moxcreative.com/gettrade/comments/feed/" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script>
    window._wpemojiSettings = {
      baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
      ext: ".png",
      svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
      svgExt: ".svg",
      source: {
        concatemoji: "https:\/\/kitnew.moxcreative.com\/gettrade\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2.2",
      },
    };
    /*! This file is auto-generated */
    !(function(e, a, t) {
      var n,
        r,
        o,
        i = a.createElement("canvas"),
        p = i.getContext && i.getContext("2d");

      function s(e, t) {
        p.clearRect(0, 0, i.width, i.height), p.fillText(e, 0, 0);
        e = i.toDataURL();
        return (
          p.clearRect(0, 0, i.width, i.height),
          p.fillText(t, 0, 0),
          e === i.toDataURL()
        );
      }

      function c(e) {
        var t = a.createElement("script");
        (t.src = e),
        (t.defer = t.type = "text/javascript"),
        a.getElementsByTagName("head")[0].appendChild(t);
      }
      for (
        o = Array("flag", "emoji"),
        t.supports = {
          everything: !0,
          everythingExceptFlag: !0
        },
        r = 0; r < o.length; r++
      )
        (t.supports[o[r]] = (function(e) {
          if (p && p.fillText)
            switch (
              ((p.textBaseline = "top"), (p.font = "600 32px Arial"), e)
            ) {
              case "flag":
                return s(
                    "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                    "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
                  ) ?
                  !1 :
                  !s(
                    "\ud83c\uddfa\ud83c\uddf3",
                    "\ud83c\uddfa\u200b\ud83c\uddf3"
                  ) &&
                  !s(
                    "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                    "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                  );
              case "emoji":
                return !s(
                  "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                  "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
                );
            }
          return !1;
        })(o[r])),
        (t.supports.everything = t.supports.everything && t.supports[o[r]]),
        "flag" !== o[r] &&
        (t.supports.everythingExceptFlag =
          t.supports.everythingExceptFlag && t.supports[o[r]]);
      (t.supports.everythingExceptFlag =
        t.supports.everythingExceptFlag && !t.supports.flag),
      (t.DOMReady = !1),
      (t.readyCallback = function() {
        t.DOMReady = !0;
      }),
      t.supports.everything ||
        ((n = function() {
            t.readyCallback();
          }),
          a.addEventListener ?
          (a.addEventListener("DOMContentLoaded", n, !1),
            e.addEventListener("load", n, !1)) :
          (e.attachEvent("onload", n),
            a.attachEvent("onreadystatechange", function() {
              "complete" === a.readyState && t.readyCallback();
            })),
          (e = t.source || {}).concatemoji ?
          c(e.concatemoji) :
          e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)));
    })(window, document, window._wpemojiSettings);
  </script>
  <style>
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
  <link rel="stylesheet" id="wp-block-library-css" href="https://kitnew.moxcreative.com/gettrade/wp-includes/css/dist/block-library/style.min.css?ver=6.2.2" media="all" />
  <link rel="stylesheet" id="classic-theme-styles-css" href="https://kitnew.moxcreative.com/gettrade/wp-includes/css/classic-themes.min.css?ver=6.2.2" media="all" />
  <style id="global-styles-inline-css">
    body {
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
      --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
          rgba(6, 147, 227, 1) 0%,
          rgb(155, 81, 224) 100%);
      --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
          rgb(122, 220, 180) 0%,
          rgb(0, 208, 130) 100%);
      --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
          rgba(252, 185, 0, 1) 0%,
          rgba(255, 105, 0, 1) 100%);
      --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
          rgba(255, 105, 0, 1) 0%,
          rgb(207, 46, 46) 100%);
      --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
          rgb(238, 238, 238) 0%,
          rgb(169, 184, 195) 100%);
      --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
          rgb(74, 234, 220) 0%,
          rgb(151, 120, 209) 20%,
          rgb(207, 42, 186) 40%,
          rgb(238, 44, 130) 60%,
          rgb(251, 105, 98) 80%,
          rgb(254, 248, 76) 100%);
      --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
          rgb(255, 206, 236) 0%,
          rgb(152, 150, 240) 100%);
      --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
          rgb(254, 205, 165) 0%,
          rgb(254, 45, 45) 50%,
          rgb(107, 0, 62) 100%);
      --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
          rgb(255, 203, 112) 0%,
          rgb(199, 81, 192) 50%,
          rgb(65, 88, 208) 100%);
      --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
          rgb(255, 245, 203) 0%,
          rgb(182, 227, 212) 50%,
          rgb(51, 167, 181) 100%);
      --wp--preset--gradient--electric-grass: linear-gradient(135deg,
          rgb(202, 248, 128) 0%,
          rgb(113, 206, 126) 100%);
      --wp--preset--gradient--midnight: linear-gradient(135deg,
          rgb(2, 3, 129) 0%,
          rgb(40, 116, 252) 100%);
      --wp--preset--duotone--dark-grayscale: url("#wp-duotone-dark-grayscale");
      --wp--preset--duotone--grayscale: url("#wp-duotone-grayscale");
      --wp--preset--duotone--purple-yellow: url("#wp-duotone-purple-yellow");
      --wp--preset--duotone--blue-red: url("#wp-duotone-blue-red");
      --wp--preset--duotone--midnight: url("#wp-duotone-midnight");
      --wp--preset--duotone--magenta-yellow: url("#wp-duotone-magenta-yellow");
      --wp--preset--duotone--purple-green: url("#wp-duotone-purple-green");
      --wp--preset--duotone--blue-orange: url("#wp-duotone-blue-orange");
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
      --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
        6px 6px rgba(0, 0, 0, 1);
      --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
      gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
      max-width: var(--wp--style--global--content-size);
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
      max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
      display: flex;
    }

    body .is-layout-flex {
      flex-wrap: wrap;
      align-items: center;
    }

    body .is-layout-flex>* {
      margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
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

    .wp-block-navigation a:where(:not(.wp-element-button)) {
      color: inherit;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    .wp-block-pullquote {
      font-size: 1.5em;
      line-height: 1.6;
    }
  </style>
  <link rel="stylesheet" id="template-kit-export-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min.css?ver=1.0.21" media="all" />
  <link rel="stylesheet" id="hello-elementor-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/themes/hello-elementor/style.min.css?ver=2.6.1" media="all" />
  <link rel="stylesheet" id="hello-elementor-theme-style-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/themes/hello-elementor/theme.min.css?ver=2.6.1" media="all" />
  <link rel="stylesheet" id="elementor-frontend-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.13.4" media="all" />
  <link rel="stylesheet" id="elementor-post-20-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/uploads/sites/8/elementor/css/post-20.css?ver=1685360808" media="all" />
  <link rel="stylesheet" id="elementor-icons-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.20.0" media="all" />
  <link rel="stylesheet" id="swiper-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css?ver=5.3.6" media="all" />
  <link rel="stylesheet" id="elementor-pro-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.7.7" media="all" />
  <link rel="stylesheet" id="elementor-post-519-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/uploads/sites/8/elementor/css/post-519.css?ver=1685416359" media="all" />
  <link rel="stylesheet" id="elementor-post-39-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/uploads/sites/8/elementor/css/post-39.css?ver=1685360808" media="all" />
  <link rel="stylesheet" id="elementor-post-62-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/uploads/sites/8/elementor/css/post-62.css?ver=1685360808" media="all" />
  <link rel="stylesheet" id="elementor-icons-ekiticons-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css?ver=2.8.8" media="all" />
  <link rel="stylesheet" id="skb-cife-brands_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/icomoon_brands.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-devicons_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/devicons.min.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-elegant_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/elegant.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-elusive_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/elusive-icons.min.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-icofont_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/icofont.min.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-icomoon_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/icomoon.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-iconic_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/iconic.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-ion_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/ionicons.min.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-linearicons_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/linearicons.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-lineawesome_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/line-awesome.min.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-line_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/lineicons.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-materialdesign_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/materialdesignicons.min.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-open_iconic-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/open-iconic.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-simpleline_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/simple-line-icons.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="skb-cife-themify_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/themify.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="ekit-widget-styles-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=2.8.8" media="all" />
  <link rel="stylesheet" id="ekit-responsive-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=2.8.8" media="all" />
  <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Oxygen%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNoto+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHeebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.2.2" media="all" />
  <link rel="stylesheet" id="elementor-icons-skb_cife-materialdesign-icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/materialdesignicons.min.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="elementor-icons-skb_cife-icofont-icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/icofont.min.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="elementor-icons-shared-0-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" media="all" />
  <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" media="all" />
  <link rel="stylesheet" id="elementor-icons-skb_cife-open_iconic-icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/open-iconic.css?ver=1.0.6" media="all" />
  <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3" media="all" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <script src="https://kitnew.moxcreative.com/gettrade/wp-includes/js/jquery/jquery.min.js?ver=3.6.4" id="jquery-core-js"></script>
  <script src="https://kitnew.moxcreative.com/gettrade/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0" id="jquery-migrate-js"></script>
  <script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min.js?ver=1.0.21" id="template-kit-export-js"></script>
  <link rel="https://api.w.org/" href="https://kitnew.moxcreative.com/gettrade/wp-json/" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://kitnew.moxcreative.com/gettrade/xmlrpc.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://kitnew.moxcreative.com/gettrade/wp-includes/wlwmanifest.xml" />

  <link rel="canonical" href="https://kitnew.moxcreative.com/gettrade/template-kit/about-us/" />
  <link rel="shortlink" href="https://kitnew.moxcreative.com/gettrade/?p=519" />
  <link rel="alternate" type="application/json+oembed" href="https://kitnew.moxcreative.com/gettrade/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkitnew.moxcreative.com%2Fgettrade%2Ftemplate-kit%2Fabout-us%2F" />
  <link rel="alternate" type="text/xml+oembed" href="https://kitnew.moxcreative.com/gettrade/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkitnew.moxcreative.com%2Fgettrade%2Ftemplate-kit%2Fabout-us%2F&#038;format=xml" />
  <meta name="generator" content="Elementor 3.13.4; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto" />
  <link rel="stylesheet" href="style.css">
  <style>
    .login-form {
      width: 60%;
      margin: auto;
    }

    @media screen and (max-width:600px) {
      .login-form {
        width: 90%;
      }
    }
  </style>
</head>

<body class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-519 elementor-default elementor-template-full-width elementor-kit-20 elementor-page elementor-page-519">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-dark-grayscale">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 0.49803921568627" />
          <feFuncG type="table" tableValues="0 0.49803921568627" />
          <feFuncB type="table" tableValues="0 0.49803921568627" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-grayscale">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 1" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0 1" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-purple-yellow">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-blue-red">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 1" />
          <feFuncG type="table" tableValues="0 0.27843137254902" />
          <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-midnight">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 0" />
          <feFuncG type="table" tableValues="0 0.64705882352941" />
          <feFuncB type="table" tableValues="0 1" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-magenta-yellow">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.78039215686275 1" />
          <feFuncG type="table" tableValues="0 0.94901960784314" />
          <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-purple-green">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0.44705882352941 0.4" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-blue-orange">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.098039215686275 1" />
          <feFuncG type="table" tableValues="0 0.66274509803922" />
          <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg>
  <a class="skip-link screen-reader-text" href="#content"> Skip to content</a>

   <?php require_once './_partials/_nav.php' ?>

  <div data-elementor-type="wp-post" data-elementor-id="519" class="elementor elementor-519">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-292cd4b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="292cd4b" data-element_type="section" data-settings='{"background_background":"classic"}'>
      <div class="elementor-background-overlay"></div>
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9f4b4f2" data-id="9f4b4f2" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-a56d7e2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a56d7e2" data-element_type="section">
              <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-55a54cd" data-id="55a54cd" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-50a31f4 elementor-invisible elementor-widget elementor-widget-heading" data-id="50a31f4" data-element_type="widget" data-settings='{"_animation":"fadeInDown"}' data-widget_type="heading.default">
                      <div class="elementor-widget-container">
                        <style>
                          /*! elementor - v3.13.3 - 28-05-2023 */
                          .elementor-heading-title {
                            padding: 0;
                            margin: 0;
                            line-height: 1;
                          }

                          .elementor-widget-heading .elementor-heading-title[class*="elementor-size-"]>a {
                            color: inherit;
                            font-size: inherit;
                            line-height: inherit;
                          }

                          .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                            font-size: 15px;
                          }

                          .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                            font-size: 19px;
                          }

                          .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                            font-size: 29px;
                          }

                          .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                            font-size: 39px;
                          }

                          .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                            font-size: 59px;
                          }
                        </style>
                        <h2 class="elementor-heading-title elementor-size-default">
                          Admin Login
                        </h2>
                      </div>
                    </div>
                    <div class="elementor-element elementor-element-fa4c05f elementor-icon-list--layout-inline elementor-align-left elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list" data-id="fa4c05f" data-element_type="widget" data-settings='{"_animation":"fadeInRight"}' data-widget_type="icon-list.default">
                      <div class="elementor-widget-container">
                        <link rel="stylesheet" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css" />
                        <ul class="elementor-icon-list-items elementor-inline-items">
                          <li class="elementor-icon-list-item elementor-inline-item">
                            <a href="./index.php">
                              <span class="elementor-icon-list-text">Home</span>
                            </a>
                          </li>
                          <li class="elementor-icon-list-item elementor-inline-item">
                            <a href="#">
                              <span>
                                <i class="fa-solid fa-arrow-right-arrow-left" style="color: #ffc800;"></i>
                              </span>
                              <span class="elementor-icon-list-text">Login</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <h1>Login</h1>
      <form action="#" method="post" class="login-form">
        <div class="input-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="email" required>
        </div>
        <div class="input-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>

        <input class="curve-button" value="Login" type="submit" name="submit" />
      </form>
      <?php
      if (isset($_POST['submit'])) {
        require_once './backend/backend.php';
        $backend = new Backend();
        $status = $backend->login($_POST['email'], $_POST['password']);
        if ($status > 0) {
          $_SESSION['email'] = $_POST['email'];
          echo '<script>window.location.href="dashboard.php"</script>';
        } else {
          echo '<div class="alert alert-warning alert-dismissible fade show fixed-bottom" role="alert">
<strong>Sorry!</strong> Email or password is not correct ...
<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
        }
      }
      ?>
    </div>
    <div data-elementor-type="footer" data-elementor-id="62" class="elementor elementor-62 elementor-location-footer">

      <section class="elementor-section elementor-top-section elementor-element elementor-element-7609856 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7609856" data-element_type="section" data-settings='{"background_background":"classic"}'>
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4c17d30" data-id="4c17d30" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <section class="elementor-section elementor-inner-section elementor-element elementor-element-e49f2cd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e49f2cd" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">


                  <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-14dfb36" data-id="14dfb36" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-46bce71 elementor-widget elementor-widget-heading" data-id="46bce71" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                          <h2 class="elementor-heading-title elementor-size-default">
                            Company
                          </h2>
                        </div>
                      </div>
                      <div class="elementor-element elementor-element-53cca00 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="53cca00" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                          <ul class="elementor-icon-list-items">
                            <li class="elementor-icon-list-item">
                              <a href="./aboutus.php">
                                <span class="elementor-icon-list-text">About Us</span>
                              </a>
                            </li>
                            <li class="elementor-icon-list-item">
                              <a href="./userconsent.php">
                                <span class="elementor-icon-list-text">User Consent</span>
                              </a>
                            </li>
                            <li class="elementor-icon-list-item">
                              <a href="./packages.php">
                                <span class="elementor-icon-list-text">Packages</span>
                              </a>
                            </li>

                            <li class="elementor-icon-list-item">
                              <a href="./contactus.php">
                                <span class="elementor-icon-list-text">Contact Us</span>
                              </a>
                            </li>
                            <li class="elementor-icon-list-item">
                              <a href="./login.php">
                                <span class="elementor-icon-list-text">Admin Login</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2ca8251" data-id="2ca8251" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-818f664 elementor-widget elementor-widget-heading" data-id="818f664" data-element_type="widget" data-widget_type="heading.default">

                      </div>
                    </div>


                  </div>
              </section>
              <section class="elementor-section elementor-inner-section elementor-element elementor-element-c347bd0 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c347bd0" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-60e6197" data-id="60e6197" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-d06889f elementor-widget elementor-widget-heading" data-id="d06889f" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-heading-title elementor-size-default">
                            Copyright © 2023 SUPREMESTOX TRADING , All rights reserved.
                            Developed by Spiral info soft
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-363a472" data-id="363a472" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-c55959d elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="c55959d" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                          <style>
                            /*! elementor - v3.13.3 - 28-05-2023 */
                            .elementor-widget-divider {
                              --divider-border-style: none;
                              --divider-border-width: 1px;
                              --divider-color: #0c0d0e;
                              --divider-icon-size: 20px;
                              --divider-element-spacing: 10px;
                              --divider-pattern-height: 24px;
                              --divider-pattern-size: 20px;
                              --divider-pattern-url: none;
                              --divider-pattern-repeat: repeat-x;
                            }

                            .elementor-widget-divider .elementor-divider {
                              display: flex;
                            }

                            .elementor-widget-divider .elementor-divider__text {
                              font-size: 15px;
                              line-height: 1;
                              max-width: 95%;
                            }

                            .elementor-widget-divider .elementor-divider__element {
                              margin: 0 var(--divider-element-spacing);
                              flex-shrink: 0;
                            }

                            .elementor-widget-divider .elementor-icon {
                              font-size: var(--divider-icon-size);
                            }

                            .elementor-widget-divider .elementor-divider-separator {
                              display: flex;
                              margin: 0;
                              direction: ltr;
                            }

                            .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                            .elementor-widget-divider--view-line_text .elementor-divider-separator {
                              align-items: center;
                            }

                            .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                            .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                            .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                            .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                              display: block;
                              content: "";
                              border-bottom: 0;
                              flex-grow: 1;
                              border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color);
                            }

                            .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                              flex-grow: 0;
                              flex-shrink: 100;
                            }

                            .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                              content: none;
                            }

                            .elementor-widget-divider--element-align-left .elementor-divider__element {
                              margin-left: 0;
                            }

                            .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                              flex-grow: 0;
                              flex-shrink: 100;
                            }

                            .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                              content: none;
                            }

                            .elementor-widget-divider--element-align-right .elementor-divider__element {
                              margin-right: 0;
                            }

                            .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                              border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color);
                            }

                            .elementor-widget-divider--separator-type-pattern {
                              --divider-border-style: none;
                            }

                            .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                            .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                            .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                            .elementor-widget-divider--separator-type-pattern:not([class*="elementor-widget-divider--view"]) .elementor-divider-separator {
                              width: 100%;
                              min-height: var(--divider-pattern-height);
                              -webkit-mask-size: var(--divider-pattern-size) 100%;
                              mask-size: var(--divider-pattern-size) 100%;
                              -webkit-mask-repeat: var(--divider-pattern-repeat);
                              mask-repeat: var(--divider-pattern-repeat);
                              background-color: var(--divider-color);
                              -webkit-mask-image: var(--divider-pattern-url);
                              mask-image: var(--divider-pattern-url);
                            }

                            .elementor-widget-divider--no-spacing {
                              --divider-pattern-size: auto;
                            }

                            .elementor-widget-divider--bg-round {
                              --divider-pattern-repeat: round;
                            }

                            .rtl .elementor-widget-divider .elementor-divider__text {
                              direction: rtl;
                            }

                            .e-con-inner>.elementor-widget-divider,
                            .e-con>.elementor-widget-divider {
                              width: var(--container-widget-width, 100%);
                              --flex-grow: var(--container-widget-flex-grow);
                            }
                          </style>
                          <div class="elementor-divider">
                            <span class="elementor-divider-separator"> </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5c9e465" data-id="5c9e465" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-7c0a99d e-grid-align-right elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="7c0a99d" data-element_type="widget" data-widget_type="social-icons.default">
                        <div class="elementor-widget-container">
                          <style>
                            /*! elementor - v3.13.3 - 28-05-2023 */
                            .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                            .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                            .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                              line-height: 1;
                              font-size: 0;
                            }

                            .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                              display: inline-grid;
                            }

                            .elementor-widget-social-icons .elementor-grid {
                              grid-column-gap: var(--grid-column-gap, 5px);
                              grid-row-gap: var(--grid-row-gap, 5px);
                              grid-template-columns: var(--grid-template-columns);
                              justify-content: var(--justify-content, center);
                              justify-items: var(--justify-content, center);
                            }

                            .elementor-icon.elementor-social-icon {
                              font-size: var(--icon-size, 25px);
                              line-height: var(--icon-size, 25px);
                              width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, 0.5em)));
                              height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, 0.5em)));
                            }

                            .elementor-social-icon {
                              --e-social-icon-icon-color: #fff;
                              display: inline-flex;
                              background-color: #69727d;
                              align-items: center;
                              justify-content: center;
                              text-align: center;
                              cursor: pointer;
                            }

                            .elementor-social-icon i {
                              color: var(--e-social-icon-icon-color);
                            }

                            .elementor-social-icon svg {
                              fill: var(--e-social-icon-icon-color);
                            }

                            .elementor-social-icon:last-child {
                              margin: 0;
                            }

                            .elementor-social-icon:hover {
                              opacity: 0.9;
                              color: #fff;
                            }

                            .elementor-social-icon-android {
                              background-color: #a4c639;
                            }

                            .elementor-social-icon-apple {
                              background-color: #999;
                            }

                            .elementor-social-icon-behance {
                              background-color: #1769ff;
                            }

                            .elementor-social-icon-bitbucket {
                              background-color: #205081;
                            }

                            .elementor-social-icon-codepen {
                              background-color: #000;
                            }

                            .elementor-social-icon-delicious {
                              background-color: #39f;
                            }

                            .elementor-social-icon-deviantart {
                              background-color: #05cc47;
                            }

                            .elementor-social-icon-digg {
                              background-color: #005be2;
                            }

                            .elementor-social-icon-dribbble {
                              background-color: #ea4c89;
                            }

                            .elementor-social-icon-elementor {
                              background-color: #d30c5c;
                            }

                            .elementor-social-icon-envelope {
                              background-color: #ea4335;
                            }

                            .elementor-social-icon-facebook,
                            .elementor-social-icon-facebook-f {
                              background-color: #3b5998;
                            }

                            .elementor-social-icon-flickr {
                              background-color: #0063dc;
                            }

                            .elementor-social-icon-foursquare {
                              background-color: #2d5be3;
                            }

                            .elementor-social-icon-free-code-camp,
                            .elementor-social-icon-freecodecamp {
                              background-color: #006400;
                            }

                            .elementor-social-icon-github {
                              background-color: #333;
                            }

                            .elementor-social-icon-gitlab {
                              background-color: #e24329;
                            }

                            .elementor-social-icon-globe {
                              background-color: #69727d;
                            }

                            .elementor-social-icon-google-plus,
                            .elementor-social-icon-google-plus-g {
                              background-color: #dd4b39;
                            }

                            .elementor-social-icon-houzz {
                              background-color: #7ac142;
                            }

                            .elementor-social-icon-instagram {
                              background-color: #262626;
                            }

                            .elementor-social-icon-jsfiddle {
                              background-color: #487aa2;
                            }

                            .elementor-social-icon-link {
                              background-color: #818a91;
                            }

                            .elementor-social-icon-linkedin,
                            .elementor-social-icon-linkedin-in {
                              background-color: #0077b5;
                            }

                            .elementor-social-icon-medium {
                              background-color: #00ab6b;
                            }

                            .elementor-social-icon-meetup {
                              background-color: #ec1c40;
                            }

                            .elementor-social-icon-mixcloud {
                              background-color: #273a4b;
                            }

                            .elementor-social-icon-odnoklassniki {
                              background-color: #f4731c;
                            }

                            .elementor-social-icon-pinterest {
                              background-color: #bd081c;
                            }

                            .elementor-social-icon-product-hunt {
                              background-color: #da552f;
                            }

                            .elementor-social-icon-reddit {
                              background-color: #ff4500;
                            }

                            .elementor-social-icon-rss {
                              background-color: #f26522;
                            }

                            .elementor-social-icon-shopping-cart {
                              background-color: #4caf50;
                            }

                            .elementor-social-icon-skype {
                              background-color: #00aff0;
                            }

                            .elementor-social-icon-slideshare {
                              background-color: #0077b5;
                            }

                            .elementor-social-icon-snapchat {
                              background-color: #fffc00;
                            }

                            .elementor-social-icon-soundcloud {
                              background-color: #f80;
                            }

                            .elementor-social-icon-spotify {
                              background-color: #2ebd59;
                            }

                            .elementor-social-icon-stack-overflow {
                              background-color: #fe7a15;
                            }

                            .elementor-social-icon-steam {
                              background-color: #00adee;
                            }

                            .elementor-social-icon-stumbleupon {
                              background-color: #eb4924;
                            }

                            .elementor-social-icon-telegram {
                              background-color: #2ca5e0;
                            }

                            .elementor-social-icon-thumb-tack {
                              background-color: #1aa1d8;
                            }

                            .elementor-social-icon-tripadvisor {
                              background-color: #589442;
                            }

                            .elementor-social-icon-tumblr {
                              background-color: #35465c;
                            }

                            .elementor-social-icon-twitch {
                              background-color: #6441a5;
                            }

                            .elementor-social-icon-twitter {
                              background-color: #1da1f2;
                            }

                            .elementor-social-icon-viber {
                              background-color: #665cac;
                            }

                            .elementor-social-icon-vimeo {
                              background-color: #1ab7ea;
                            }

                            .elementor-social-icon-vk {
                              background-color: #45668e;
                            }

                            .elementor-social-icon-weibo {
                              background-color: #dd2430;
                            }

                            .elementor-social-icon-weixin {
                              background-color: #31a918;
                            }

                            .elementor-social-icon-whatsapp {
                              background-color: #25d366;
                            }

                            .elementor-social-icon-wordpress {
                              background-color: #21759b;
                            }

                            .elementor-social-icon-xing {
                              background-color: #026466;
                            }

                            .elementor-social-icon-yelp {
                              background-color: #af0606;
                            }

                            .elementor-social-icon-youtube {
                              background-color: #cd201f;
                            }

                            .elementor-social-icon-500px {
                              background-color: #0099e5;
                            }

                            .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                              border-radius: 10%;
                            }

                            .elementor-shape-circle .elementor-icon.elementor-social-icon {
                              border-radius: 50%;
                            }
                          </style>
                          <div class="elementor-social-icons-wrapper elementor-grid">
                            <span class="elementor-grid-item">
                              <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-animation-float elementor-repeater-item-1989fa1" href="#" target="_blank">
                                <span class="elementor-screen-only">Facebook-square</span>

                              </a>
                            </span>
                            <span class="elementor-grid-item">
                              <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-float elementor-repeater-item-57a6886" href="#" target="_blank">
                                <span class="elementor-screen-only">Twitter</span>

                              </a>
                            </span>
                            <span class="elementor-grid-item">
                              <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-float elementor-repeater-item-c7ff3d1" href="#" target="_blank">
                                <span class="elementor-screen-only">Youtube</span>

                              </a>
                            </span>
                            <span class="elementor-grid-item">
                              <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-float elementor-repeater-item-0d74d77" href="#" target="_blank">
                                <span class="elementor-screen-only">Instagram</span>

                              </a>
                            </span>
                            <span class="elementor-grid-item">
                              <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-animation-float elementor-repeater-item-46e6f72" href="#" target="_blank">
                                <span class="elementor-screen-only">Linkedin-in</span>

                              </a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="elementor-section elementor-inner-section elementor-element elementor-element-1f98092 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1f98092" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4016c34" data-id="4016c34" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-1dbb54c elementor-widget elementor-widget-text-editor" data-id="1dbb54c" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                          <p>
                            1) or fractional share<br />Investing in the stock
                            markets carries risk: the value of investments can
                            go up as well as down and you may receive back less
                            than your original investment. Individual investors
                            should make their own decisions or seek independent
                            advice.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
    </div>

    <link rel="stylesheet" id="e-animations-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.13.4" media="all" />
    <script src="https://kitnew.moxcreative.com/gettrade/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=1.0.0" id="hello-theme-frontend-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js?ver=2.8.8" id="elementskit-framework-js-frontend-js"></script>
    <script id="elementskit-framework-js-frontend-js-after">
      var elementskit = {
        resturl: "https://kitnew.moxcreative.com/gettrade/wp-json/elementskit/v1/",
      };
    </script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js?ver=2.8.8" id="ekit-widget-scripts-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1" id="smartmenus-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-includes/js/imagesloaded.min.js?ver=4.1.4" id="imagesloaded-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.7.7" id="elementor-pro-webpack-runtime-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.13.4" id="elementor-webpack-runtime-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.13.4" id="elementor-frontend-modules-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11" id="regenerator-runtime-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5" id="wp-hooks-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae" id="wp-i18n-js"></script>
    <script id="wp-i18n-js-after">
      wp.i18n.setLocaleData({
        "text direction\u0004ltr": ["ltr"]
      });
    </script>
    <script id="elementor-pro-frontend-js-before">
      var ElementorProFrontendConfig = {
        ajaxurl: "https:\/\/kitnew.moxcreative.com\/gettrade\/wp-admin\/admin-ajax.php",
        nonce: "39883bf6be",
        urls: {
          assets: "https:\/\/kitnew.moxcreative.com\/gettrade\/wp-content\/plugins\/elementor-pro\/assets\/",
          rest: "https:\/\/kitnew.moxcreative.com\/gettrade\/wp-json\/",
        },
        shareButtonsNetworks: {
          facebook: {
            title: "Facebook",
            has_counter: true
          },
          twitter: {
            title: "Twitter"
          },
          linkedin: {
            title: "LinkedIn",
            has_counter: true
          },
          pinterest: {
            title: "Pinterest",
            has_counter: true
          },
          reddit: {
            title: "Reddit",
            has_counter: true
          },
          vk: {
            title: "VK",
            has_counter: true
          },
          odnoklassniki: {
            title: "OK",
            has_counter: true
          },
          tumblr: {
            title: "Tumblr"
          },
          digg: {
            title: "Digg"
          },
          skype: {
            title: "Skype"
          },
          stumbleupon: {
            title: "StumbleUpon",
            has_counter: true
          },
          mix: {
            title: "Mix"
          },
          telegram: {
            title: "Telegram"
          },
          pocket: {
            title: "Pocket",
            has_counter: true
          },
          xing: {
            title: "XING",
            has_counter: true
          },
          whatsapp: {
            title: "WhatsApp"
          },
          email: {
            title: "Email"
          },
          print: {
            title: "Print"
          },
        },
        facebook_sdk: {
          lang: "en_US",
          app_id: ""
        },
        lottie: {
          defaultAnimationUrl: "https:\/\/kitnew.moxcreative.com\/gettrade\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json",
        },
      };
    </script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.7.7" id="elementor-pro-frontend-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
      var elementorFrontendConfig = {
        environmentMode: {
          edit: false,
          wpPreview: false,
          isScriptDebug: false,
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
        responsive: {
          breakpoints: {
            mobile: {
              label: "Mobile Portrait",
              value: 767,
              default_value: 767,
              direction: "max",
              is_enabled: true,
            },
            mobile_extra: {
              label: "Mobile Landscape",
              value: 880,
              default_value: 880,
              direction: "max",
              is_enabled: false,
            },
            tablet: {
              label: "Tablet Portrait",
              value: 1024,
              default_value: 1024,
              direction: "max",
              is_enabled: true,
            },
            tablet_extra: {
              label: "Tablet Landscape",
              value: 1200,
              default_value: 1200,
              direction: "max",
              is_enabled: false,
            },
            laptop: {
              label: "Laptop",
              value: 1366,
              default_value: 1366,
              direction: "max",
              is_enabled: false,
            },
            widescreen: {
              label: "Widescreen",
              value: 2400,
              default_value: 2400,
              direction: "min",
              is_enabled: false,
            },
          },
        },
        version: "3.13.4",
        is_static: false,
        experimentalFeatures: {
          e_dom_optimization: true,
          e_optimized_assets_loading: true,
          e_optimized_css_loading: true,
          a11y_improvements: true,
          additional_custom_breakpoints: true,
          theme_builder_v2: true,
          "hello-theme-header-footer": true,
          "landing-pages": true,
          "page-transitions": true,
          notes: true,
          "form-submissions": true,
          e_scroll_snap: true,
        },
        urls: {
          assets: "https:\/\/kitnew.moxcreative.com\/gettrade\/wp-content\/plugins\/elementor\/assets\/",
        },
        swiperClass: "swiper-container",
        settings: {
          page: [],
          editorPreferences: []
        },
        kit: {
          active_breakpoints: ["viewport_mobile", "viewport_tablet"],
          global_image_lightbox: "yes",
          lightbox_enable_counter: "yes",
          lightbox_enable_fullscreen: "yes",
          lightbox_enable_zoom: "yes",
          lightbox_enable_share: "yes",
          lightbox_title_src: "title",
          lightbox_description_src: "description",
          hello_header_logo_type: "title",
          hello_header_menu_layout: "horizontal",
          hello_footer_logo_type: "logo",
        },
        post: {
          id: 519,
          title: "About%20Us%20%E2%80%93%20GetTrade",
          excerpt: "",
          featuredImage: "https:\/\/kitnew.moxcreative.com\/gettrade\/wp-content\/uploads\/sites\/8\/2022\/11\/About-Us-371x1024.jpg",
        },
      };
    </script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.13.4" id="elementor-frontend-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.7.7" id="pro-elements-handlers-js"></script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.js?ver=2.8.8" id="animate-circle-js"></script>
    <script id="elementskit-elementor-js-extra">
      var ekit_config = {
        ajaxurl: "https:\/\/kitnew.moxcreative.com\/gettrade\/wp-admin\/admin-ajax.php",
        nonce: "90d7697801",
      };
    </script>
    <script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js?ver=2.8.8" id="elementskit-elementor-js"></script>
    <!-- !-- Bootstrap 5 JS CDN Links  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>