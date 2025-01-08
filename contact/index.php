<!DOCTYPE html>
<html lang="en-US">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

	<head>
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<link rel="pingback" href="../xmlrpc.html" />
		<link
			rel="apple-touch-icon"
			sizes="200"
			href="../wp-content/uploads/ipl/favicon.png" />
		<link
			rel="icon"
			type="image/svg+xml"
			href="../wp-content/uploads/ipl/favicon.png"
			id="favicon-svg" />
		<link
			rel="alternate icon"
			href="../wp-content/uploads/ipl/favicon.png"
			id="favicon-png"
			sizes="any" />
		<link
			rel="mask-icon"
			href="../wp-content/uploads/ipl/favicon.png"
			color="#f78d20" />
		<link
			rel="manifest"
			href="../wp-content/uploads/ipl/favicon.png"
			crossorigin="anonymous" />
		<title>IPL - Investimentos Planeta Limitada</title>
		<meta name="robots" content="max-image-preview:large" />
		<link
			rel="alternate"
			type="application/rss+xml"
			title="Petrol &raquo; Feed"
			href="../feed/index.html" />
		<link
			rel="alternate"
			type="application/rss+xml"
			title="Petrol &raquo; Comments Feed"
			href="../comments/feed/index.html" />
		<script>
      window._wpemojiSettings = {
        baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        ext: ".png",
        svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        svgExt: ".svg",
        source: {
          concatemoji:
            "https:\/\/templatekit.jegtheme.com\/petrol\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.1",
        },
      };
      /*! This file is auto-generated */
      !(function (i, n) {
        var o, s, e;

        function c(e) {
          try {
            var t = {
              supportTests: e,
              timestamp: new Date().valueOf(),
            };
            sessionStorage.setItem(o, JSON.stringify(t));
          } catch (e) {}
        }

        function p(e, t, n) {
          e.clearRect(0, 0, e.canvas.width, e.canvas.height),
            e.fillText(t, 0, 0);
          var t = new Uint32Array(
              e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
            ),
            r =
              (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
              e.fillText(n, 0, 0),
              new Uint32Array(
                e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
              ));
          return t.every(function (e, t) {
            return e === r[t];
          });
        }

        function u(e, t, n) {
          switch (t) {
            case "flag":
              return n(
                e,
                "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
              )
                ? !1
                : !n(
                    e,
                    "\ud83c\uddfa\ud83c\uddf3",
                    "\ud83c\uddfa\u200b\ud83c\uddf3"
                  ) &&
                    !n(
                      e,
                      "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                      "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                    );
            case "emoji":
              return !n(
                e,
                "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
              );
          }
          return !1;
        }

        function f(e, t, n) {
          var r =
              "undefined" != typeof WorkerGlobalScope &&
              self instanceof WorkerGlobalScope
                ? new OffscreenCanvas(300, 150)
                : i.createElement("canvas"),
            a = r.getContext("2d", {
              willReadFrequently: !0,
            }),
            o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
          return (
            e.forEach(function (e) {
              o[e] = t(a, e, n);
            }),
            o
          );
        }

        function t(e) {
          var t = i.createElement("script");
          (t.src = e), (t.defer = !0), i.head.appendChild(t);
        }
        "undefined" != typeof Promise &&
          ((o = "wpEmojiSettingsSupports"),
          (s = ["flag", "emoji"]),
          (n.supports = {
            everything: !0,
            everythingExceptFlag: !0,
          }),
          (e = new Promise(function (e) {
            i.addEventListener("DOMContentLoaded", e, {
              once: !0,
            });
          })),
          new Promise(function (t) {
            var n = (function () {
              try {
                var e = JSON.parse(sessionStorage.getItem(o));
                if (
                  "object" == typeof e &&
                  "number" == typeof e.timestamp &&
                  new Date().valueOf() < e.timestamp + 604800 &&
                  "object" == typeof e.supportTests
                )
                  return e.supportTests;
              } catch (e) {}
              return null;
            })();
            if (!n) {
              if (
                "undefined" != typeof Worker &&
                "undefined" != typeof OffscreenCanvas &&
                "undefined" != typeof URL &&
                URL.createObjectURL &&
                "undefined" != typeof Blob
              )
                try {
                  var e =
                      "postMessage(" +
                      f.toString() +
                      "(" +
                      [JSON.stringify(s), u.toString(), p.toString()].join(
                        ","
                      ) +
                      "));",
                    r = new Blob([e], {
                      type: "text/javascript",
                    }),
                    a = new Worker(URL.createObjectURL(r), {
                      name: "wpTestEmojiSupports",
                    });
                  return void (a.onmessage = function (e) {
                    c((n = e.data)), a.terminate(), t(n);
                  });
                } catch (e) {}
              c((n = f(s, u, p)));
            }
            t(n);
          })
            .then(function (e) {
              for (var t in e)
                (n.supports[t] = e[t]),
                  (n.supports.everything =
                    n.supports.everything && n.supports[t]),
                  "flag" !== t &&
                    (n.supports.everythingExceptFlag =
                      n.supports.everythingExceptFlag && n.supports[t]);
              (n.supports.everythingExceptFlag =
                n.supports.everythingExceptFlag && !n.supports.flag),
                (n.DOMReady = !1),
                (n.readyCallback = function () {
                  n.DOMReady = !0;
                });
            })
            .then(function () {
              return e;
            })
            .then(function () {
              var e;
              n.supports.everything ||
                (n.readyCallback(),
                (e = n.source || {}).concatemoji
                  ? t(e.concatemoji)
                  : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
            }));
      })((window, document), window._wpemojiSettings);
    </script>
		<link
			rel="stylesheet"
			id="jkit-elements-main-css"
			href="../wp-content/plugins/jeg-elementor-kit/assets/css/elements/main61da.css?ver=2.6.2"
			media="all" />
		<style id="wp-emoji-styles-inline-css">
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
		<link
			rel="stylesheet"
			id="wp-block-library-css"
			href="../wp-includes/css/dist/block-library/style.minaec2.css?ver=6.4.1"
			media="all" />
		<style id="classic-theme-styles-inline-css">
      /*! This file is auto-generated */
      .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(0.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em;
      }

      .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none;
      }
    </style>
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
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(
          135deg,
          rgba(6, 147, 227, 1) 0%,
          rgb(155, 81, 224) 100%
        );
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(
          135deg,
          rgb(122, 220, 180) 0%,
          rgb(0, 208, 130) 100%
        );
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(
          135deg,
          rgba(252, 185, 0, 1) 0%,
          rgba(255, 105, 0, 1) 100%
        );
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(
          135deg,
          rgba(255, 105, 0, 1) 0%,
          rgb(207, 46, 46) 100%
        );
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(
          135deg,
          rgb(238, 238, 238) 0%,
          rgb(169, 184, 195) 100%
        );
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(
          135deg,
          rgb(74, 234, 220) 0%,
          rgb(151, 120, 209) 20%,
          rgb(207, 42, 186) 40%,
          rgb(238, 44, 130) 60%,
          rgb(251, 105, 98) 80%,
          rgb(254, 248, 76) 100%
        );
        --wp--preset--gradient--blush-light-purple: linear-gradient(
          135deg,
          rgb(255, 206, 236) 0%,
          rgb(152, 150, 240) 100%
        );
        --wp--preset--gradient--blush-bordeaux: linear-gradient(
          135deg,
          rgb(254, 205, 165) 0%,
          rgb(254, 45, 45) 50%,
          rgb(107, 0, 62) 100%
        );
        --wp--preset--gradient--luminous-dusk: linear-gradient(
          135deg,
          rgb(255, 203, 112) 0%,
          rgb(199, 81, 192) 50%,
          rgb(65, 88, 208) 100%
        );
        --wp--preset--gradient--pale-ocean: linear-gradient(
          135deg,
          rgb(255, 245, 203) 0%,
          rgb(182, 227, 212) 50%,
          rgb(51, 167, 181) 100%
        );
        --wp--preset--gradient--electric-grass: linear-gradient(
          135deg,
          rgb(202, 248, 128) 0%,
          rgb(113, 206, 126) 100%
        );
        --wp--preset--gradient--midnight: linear-gradient(
          135deg,
          rgb(2, 3, 129) 0%,
          rgb(40, 116, 252) 100%
        );
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

      :where(.is-layout-grid) {
        gap: 0.5em;
      }

      body .is-layout-flow > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
      }

      body .is-layout-flow > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
      }

      body .is-layout-flow > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
      }

      body .is-layout-constrained > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
      }

      body .is-layout-constrained > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
      }

      body .is-layout-constrained > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
      }

      body
        .is-layout-constrained
        > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
      }

      body .is-layout-constrained > .alignwide {
        max-width: var(--wp--style--global--wide-size);
      }

      body .is-layout-flex {
        display: flex;
      }

      body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
      }

      body .is-layout-flex > * {
        margin: 0;
      }

      body .is-layout-grid {
        display: grid;
      }

      body .is-layout-grid > * {
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
        background-color: var(
          --wp--preset--color--luminous-vivid-orange
        ) !important;
      }

      .has-luminous-vivid-amber-background-color {
        background-color: var(
          --wp--preset--color--luminous-vivid-amber
        ) !important;
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
        border-color: var(
          --wp--preset--color--luminous-vivid-orange
        ) !important;
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
        background: var(
          --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple
        ) !important;
      }

      .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(
          --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan
        ) !important;
      }

      .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(
          --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange
        ) !important;
      }

      .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(
          --wp--preset--gradient--luminous-vivid-orange-to-vivid-red
        ) !important;
      }

      .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(
          --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray
        ) !important;
      }

      .has-cool-to-warm-spectrum-gradient-background {
        background: var(
          --wp--preset--gradient--cool-to-warm-spectrum
        ) !important;
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

      .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
      }
    </style>
		<link
			rel="stylesheet"
			id="allow-webp-image-css"
			href="../wp-content/plugins/allow-webp-image/public/css/allow-webp-image-publicf269.css?ver=1.0.1"
			media="all" />
		<link
			rel="stylesheet"
			id="template-kit-export-css"
			href="../wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min365c.css?ver=1.0.21"
			media="all" />
		<link
			rel="stylesheet"
			id="elementor-icons-css"
			href="../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min192d.css?ver=5.23.0"
			media="all" />
		<link
			rel="stylesheet"
			id="elementor-frontend-css"
			href="../wp-content/plugins/elementor/assets/css/frontend-lite.min8864.css?ver=3.17.3"
			media="all" />
		<link
			rel="stylesheet"
			id="swiper-css"
			href="../wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6"
			media="all" />
		<link
			rel="stylesheet"
			id="elementor-post-3-css"
			href="../wp-content/uploads/sites/323/elementor/css/geral.css?ver=1700560873"
			media="all" />
		<link
			rel="stylesheet"
			id="elementor-global-css"
			href="../wp-content/uploads/sites/323/elementor/css/global544e.css?ver=1700559811"
			media="all" />
		<link
			rel="stylesheet"
			id="elementor-post-811-css"
			href="../wp-content/uploads/sites/323/elementor/css/post-811b5c1.css?ver=1700570066"
			media="all" />
		<link
			rel="stylesheet"
			id="font-awesome-5-all-css"
			href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min8864.css?ver=3.17.3"
			media="all" />
		<link
			rel="stylesheet"
			id="font-awesome-4-shim-css"
			href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min8864.css?ver=3.17.3"
			media="all" />
		<link
			rel="stylesheet"
			id="text-editor-style-css"
			href="../wp-content/plugins/metform/public/assets/css/text-editor9e95.css?ver=3.8.0"
			media="all" />
		<link
			rel="stylesheet"
			id="hello-elementor-css"
			href="../wp-content/themes/hello-elementor/style.minc141.css?ver=2.6.1"
			media="all" />
		<link
			rel="stylesheet"
			id="hello-elementor-theme-style-css"
			href="../wp-content/themes/hello-elementor/theme.minc141.css?ver=2.6.1"
			media="all" />
		<link
			rel="stylesheet"
			id="google-fonts-1-css"
			href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CTeko%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.1"
			media="all" />
		<link
			rel="stylesheet"
			id="elementor-icons-shared-0-css"
			href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3"
			media="all" />
		<link
			rel="stylesheet"
			id="elementor-icons-fa-solid-css"
			href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3"
			media="all" />
		<link
			rel="stylesheet"
			id="elementor-icons-jkiticon-css"
			href="../wp-content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticon61da.css?ver=2.6.2"
			media="all" />
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
		<script
			src="../wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1"
			id="jquery-core-js"></script>
		<script
			src="../wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1"
			id="jquery-migrate-js"></script>
		<script
			src="../wp-content/plugins/allow-webp-image/public/js/allow-webp-image-publicf269.js?ver=1.0.1"
			id="allow-webp-image-js"></script>
		<script
			src="../wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min365c.js?ver=1.0.21"
			id="template-kit-export-js"></script>
		<script
			src="../wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min8864.js?ver=3.17.3"
			id="font-awesome-4-shim-js"></script>
		<link rel="https://api.w.org/" href="../wp-json/index.html" />
		<link
			rel="alternate"
			type="application/json"
			href="../wp-json/wp/v2/pages/811.json" />
		<link
			rel="EditURI"
			type="application/rsd+xml"
			title="RSD"
			href="../xmlrpc0db0.html?rsd" />
		<meta name="generator" content="WordPress 6.4.1" />
		<link rel="canonical" href="index.html" />
		<link rel="shortlink" href="../index2ec5.html?p=811" />
		<link
			rel="alternate"
			type="application/json+oembed"
			href="../wp-json/oembed/1.0/embedf0d4.json?url=https%3A%2F%2Ftemplatekit.jegtheme.com%2Fpetrol%2Fcontact%2F" />
		<link
			rel="alternate"
			type="text/xml+oembed"
			href="../wp-json/oembed/1.0/embed30fe?url=https%3A%2F%2Ftemplatekit.jegtheme.com%2Fpetrol%2Fcontact%2F&amp;format=xml" />
		<meta
			name="generator"
			content="Elementor 3.17.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto" />
	</head>

	<body
		class="page-template page-template-elementor_header_footer page page-id-811 jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-811">
		<div id="page" class="jkit-template site">
			<header
				id="masthead"
				itemscope="itemscope"
				itemtype="https://schema.org/WPHeader">
				<style>
          body {
            zoom: 90% !important;
          }

          .elementor-661
            .elementor-element.elementor-element-41215c6
            > .elementor-container {
            max-width: 1200px;
          }

          .elementor-661
            .elementor-element.elementor-element-41215c6
            > .elementor-container
            > .elementor-column
            > .elementor-widget-wrap {
            align-content: center;
            align-items: center;
          }

          .elementor-661
            .elementor-element.elementor-element-41215c6:not(
              .elementor-motion-effects-element-type-background
            ),
          .elementor-661
            .elementor-element.elementor-element-41215c6
            > .elementor-motion-effects-container
            > .elementor-motion-effects-layer {
            background-color: var(--e-global-color-primary);
          }

          .elementor-661 .elementor-element.elementor-element-41215c6 {
            border-style: solid;
            border-width: 0px 0px 1px 0px;
            border-color: #f3f3f3;
            transition: background 0.3s, border 0.3s, border-radius 0.3s,
              box-shadow 0.3s;
            z-index: 1;
          }

          .elementor-661
            .elementor-element.elementor-element-41215c6
            > .elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
          }

          .elementor-661
            .elementor-element.elementor-element-f39683c
            .jeg-elementor-kit.jkit-heading {
            text-align: left;
          }

          .elementor-661
            .elementor-element.elementor-element-f39683c
            .jeg-elementor-kit.jkit-heading
            .heading-title {
            -webkit-box-decoration-break: clone;
            box-decoration-break: clone;
            display: inline;
            font-family: var(--e-global-typography-933f479-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-933f479-font-size);
            font-weight: var(--e-global-typography-933f479-font-weight);
            line-height: var(--e-global-typography-933f479-line-height);
            letter-spacing: var(--e-global-typography-933f479-letter-spacing);
            word-spacing: var(--e-global-typography-933f479-word-spacing);
            color: var(--e-global-color-secondary);
          }

          .elementor-661
            .elementor-element.elementor-element-f39683c
            .jeg-elementor-kit.jkit-heading
            .heading-section-title {
            margin: 0px 0px 0px 0px;
          }

          .elementor-661
            .elementor-element.elementor-element-f39683c
            .jeg-elementor-kit.jkit-heading
            .heading-title
            > span {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-43e7290-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-43e7290-font-size);
            font-weight: var(--e-global-typography-43e7290-font-weight);
            line-height: var(--e-global-typography-43e7290-line-height);
            letter-spacing: var(--e-global-typography-43e7290-letter-spacing);
            word-spacing: var(--e-global-typography-43e7290-word-spacing);
          }

          .elementor-661
            .elementor-element.elementor-element-f39683c
            > .elementor-widget-container {
            margin: -2px 0px 0px 0px;
          }

          .elementor-661 .elementor-element.elementor-element-25f90af {
            --grid-template-columns: repeat(0, auto);
            --icon-size: 12px;
            --grid-column-gap: 15px;
            --grid-row-gap: 0px;
          }

          .elementor-661
            .elementor-element.elementor-element-25f90af
            .elementor-widget-container {
            text-align: right;
          }

          .elementor-661
            .elementor-element.elementor-element-25f90af
            .elementor-social-icon {
            background-color: #ffbf4400;
            --icon-padding: 1em;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #ffffff2b;
          }

          .elementor-661
            .elementor-element.elementor-element-25f90af
            .elementor-social-icon
            i {
            color: var(--e-global-color-secondary);
          }

          .elementor-661
            .elementor-element.elementor-element-25f90af
            .elementor-social-icon
            svg {
            fill: var(--e-global-color-secondary);
          }

          .elementor-661
            .elementor-element.elementor-element-25f90af
            .elementor-icon {
            border-radius: 0px 0px 0px 0px;
          }

          .elementor-661
            .elementor-element.elementor-element-25f90af
            .elementor-social-icon:hover {
            background-color: var(--e-global-color-accent);
            border-color: var(--e-global-color-accent);
          }

          .elementor-661
            .elementor-element.elementor-element-25f90af
            .elementor-social-icon:hover
            i {
            color: var(--e-global-color-secondary);
          }

          .elementor-661
            .elementor-element.elementor-element-25f90af
            .elementor-social-icon:hover
            svg {
            fill: var(--e-global-color-secondary);
          }

          .elementor-661
            .elementor-element.elementor-element-c7e1fd5
            > .elementor-container {
            max-width: 1200px;
          }

          .elementor-661
            .elementor-element.elementor-element-c7e1fd5
            > .elementor-container
            > .elementor-column
            > .elementor-widget-wrap {
            align-content: center;
            align-items: center;
          }

          .elementor-661 .elementor-element.elementor-element-c7e1fd5 {
            box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.15);
            transition: background 0.3s, border 0.3s, border-radius 0.3s,
              box-shadow 0.3s;
            padding: 10px 0px 10px 0px;
            z-index: 2;
          }

          .elementor-661
            .elementor-element.elementor-element-c7e1fd5
            > .elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
          }

          .elementor-661 .elementor-element.elementor-element-bb39069 {
            text-align: left;
          }

          .elementor-661 .elementor-element.elementor-element-bb39069 img {
            width: 100% !important;
          }

          .elementor-661
            .elementor-element.elementor-element-4c598d8
            > .elementor-element-populated {
            padding: 0px 0px 0px 0px;
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu
            > ul,
          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper:not(.active)
            .jkit-menu,
          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper:not(.active)
            .jkit-menu
            > li
            > a {
            display: flex;
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu {
            justify-content: center;
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            .menu-item
            .sub-menu {
            left: unset;
            top: 100%;
            right: unset;
            bottom: unset;
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            .menu-item
            .sub-menu
            .menu-item
            .sub-menu {
            left: 100%;
            top: unset;
            right: unset;
            bottom: unset;
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper {
            height: 50px;
            padding: 0px 0px 0px 0px;
            margin: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            > li
            > a {
            font-family: var(--e-global-typography-f57671c-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-f57671c-font-size);
            font-weight: var(--e-global-typography-f57671c-font-weight);
            text-transform: var(--e-global-typography-f57671c-text-transform);
            line-height: var(--e-global-typography-f57671c-line-height);
            letter-spacing: var(--e-global-typography-f57671c-letter-spacing);
            word-spacing: var(--e-global-typography-f57671c-word-spacing);
            margin: 0px 18px 0px 18px;
            padding: 0px 0px 0px 0px;
            color: var(--e-global-color-primary);
            border-style: solid;
            border-width: 0px 0px 2px 0px;
            border-color: #02010100;
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            > li
            > a
            svg {
            fill: var(--e-global-color-primary);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            > li:hover
            > a {
            color: var(--e-global-color-text);
            border-style: solid;
            border-width: 0px 0px 2px 0px;
            border-color: var(--e-global-color-accent);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            > li:hover
            > a
            svg {
            fill: var(--e-global-color-text);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            > li.current-menu-item
            > a,
          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            > li.current-menu-ancestor
            > a {
            color: var(--e-global-color-primary);
            border-style: solid;
            border-width: 0px 0px 2px 0px;
            border-color: var(--e-global-color-accent);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            > li.current-menu-item
            > a
            svg,
          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            > li.current-menu-ancestor
            > a
            svg {
            fill: var(--e-global-color-primary);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            li.menu-item-has-children
            > a
            i,
          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            li.menu-item-has-children
            > a
            svg {
            margin: 0px 0px 0px 10px;
            border-style: solid;
            border-width: 0px 0px 0px 0px;
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            .sub-menu
            li
            a {
            font-family: var(--e-global-typography-f57671c-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-f57671c-font-size);
            font-weight: var(--e-global-typography-f57671c-font-weight);
            text-transform: var(--e-global-typography-f57671c-text-transform);
            line-height: var(--e-global-typography-f57671c-line-height);
            letter-spacing: var(--e-global-typography-f57671c-letter-spacing);
            word-spacing: var(--e-global-typography-f57671c-word-spacing);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            .sub-menu
            li
            > a {
            color: var(--e-global-color-primary);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            .sub-menu
            li
            > a
            svg {
            fill: var(--e-global-color-primary);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            li.menu-item-has-children
            .sub-menu
            > .menu-item
            > a {
            border-radius: 0px 0px 0px 0px;
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            .sub-menu
            li:hover
            > a {
            color: var(--e-global-color-secondary);
            background-color: var(--e-global-color-primary);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            .sub-menu
            li:hover
            > a
            svg {
            fill: var(--e-global-color-secondary);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            .sub-menu
            li.current-menu-item
            > a {
            color: var(--e-global-color-secondary);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            .sub-menu
            li.current-menu-item
            > a
            svg {
            fill: var(--e-global-color-secondary);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            .sub-menu
            > li.current-menu-item
            > a {
            background-color: var(--e-global-color-accent);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-menu
            li.menu-item-has-children
            .sub-menu {
            padding: 10px 10px 10px 10px;
            border-radius: 0px 0px 0px 0px;
            min-width: 220px;
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-hamburger-menu {
            float: right;
            background-color: #ffffff00;
            border-style: solid;
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-nav-identity-panel
            .jkit-close-menu {
            background-color: var(--e-global-color-primary);
            border-style: solid;
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-nav-identity-panel
            .jkit-close-menu:hover {
            background-color: var(--e-global-color-accent);
          }

          .elementor-661
            .elementor-element.elementor-element-ba0a629
            .jeg-elementor-kit.jkit-nav-menu
            .jkit-menu-wrapper
            .jkit-nav-identity-panel
            .jkit-nav-site-title
            .jkit-nav-logo
            img {
            object-fit: cover;
          }

          .elementor-661 .elementor-element.elementor-element-ba0a629 {
            z-index: 2;
          }

          .elementor-bc-flex-widget
            .elementor-661
            .elementor-element.elementor-element-ac16e6b.elementor-column
            .elementor-widget-wrap {
            align-items: center;
          }

          .elementor-661
            .elementor-element.elementor-element-ac16e6b.elementor-column.elementor-element[data-element_type="column"]
            > .elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
          }

          .elementor-661
            .elementor-element.elementor-element-ac16e6b.elementor-column
            > .elementor-widget-wrap {
            justify-content: flex-end;
          }

          .elementor-661
            .elementor-element.elementor-element-ac16e6b
            > .elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s,
              box-shadow 0.3s;
            padding: 0px 10px 0px 10px;
          }

          .elementor-661
            .elementor-element.elementor-element-ac16e6b
            > .elementor-element-populated
            > .elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
          }

          .elementor-661
            .elementor-element.elementor-element-d9f1b19
            .elementor-icon-box-wrapper {
            text-align: left;
          }

          .elementor-661
            .elementor-element.elementor-element-d9f1b19.elementor-view-stacked
            .elementor-icon {
            background-color: var(--e-global-color-accent);
            fill: var(--e-global-color-secondary);
            color: var(--e-global-color-secondary);
          }

          .elementor-661
            .elementor-element.elementor-element-d9f1b19.elementor-view-framed
            .elementor-icon,
          .elementor-661
            .elementor-element.elementor-element-d9f1b19.elementor-view-default
            .elementor-icon {
            fill: var(--e-global-color-accent);
            color: var(--e-global-color-accent);
            border-color: var(--e-global-color-accent);
          }

          .elementor-661
            .elementor-element.elementor-element-d9f1b19.elementor-view-framed
            .elementor-icon {
            background-color: var(--e-global-color-secondary);
          }

          .elementor-661 .elementor-element.elementor-element-d9f1b19 {
            --icon-box-icon-margin: 15px;
            width: auto;
            max-width: auto;
          }

          .elementor-661
            .elementor-element.elementor-element-d9f1b19
            .elementor-icon {
            font-size: 25px;
            padding: 15px;
            border-radius: 0px 0px 0px 0px;
          }

          .elementor-661
            .elementor-element.elementor-element-d9f1b19
            .elementor-icon-box-title {
            margin-bottom: -5px;
            color: var(--e-global-color-primary);
          }

          .elementor-661
            .elementor-element.elementor-element-d9f1b19
            .elementor-icon-box-title,
          .elementor-661
            .elementor-element.elementor-element-d9f1b19
            .elementor-icon-box-title
            a {
            font-family: var(--e-global-typography-dd35ce7-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-dd35ce7-font-size);
            font-weight: var(--e-global-typography-dd35ce7-font-weight);
            text-transform: var(--e-global-typography-dd35ce7-text-transform);
            line-height: var(--e-global-typography-dd35ce7-line-height);
            letter-spacing: var(--e-global-typography-dd35ce7-letter-spacing);
            word-spacing: var(--e-global-typography-dd35ce7-word-spacing);
          }

          .elementor-661
            .elementor-element.elementor-element-d9f1b19
            .elementor-icon-box-description {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-9419a47-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-9419a47-font-size);
            font-weight: var(--e-global-typography-9419a47-font-weight);
            line-height: var(--e-global-typography-9419a47-line-height);
            letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
            word-spacing: var(--e-global-typography-9419a47-word-spacing);
          }

          .elementor-661
            .elementor-element.elementor-element-d9f1b19
            > .elementor-widget-container {
            margin: -2px 0px 0px 0px;
          }

          @media (max-width: 1024px) {
            .elementor-661 .elementor-element.elementor-element-41215c6 {
              padding: 0px 10px 0px 10px;
            }

            .elementor-661
              .elementor-element.elementor-element-f39683c
              .jeg-elementor-kit.jkit-heading
              .heading-title {
              font-size: var(--e-global-typography-933f479-font-size);
              line-height: var(--e-global-typography-933f479-line-height);
              letter-spacing: var(--e-global-typography-933f479-letter-spacing);
              word-spacing: var(--e-global-typography-933f479-word-spacing);
            }

            .elementor-661
              .elementor-element.elementor-element-f39683c
              .jeg-elementor-kit.jkit-heading
              .heading-title
              > span {
              font-size: var(--e-global-typography-43e7290-font-size);
              line-height: var(--e-global-typography-43e7290-line-height);
              letter-spacing: var(--e-global-typography-43e7290-letter-spacing);
              word-spacing: var(--e-global-typography-43e7290-word-spacing);
            }

            .elementor-661 .elementor-element.elementor-element-c7e1fd5 {
              padding: 15px 20px 15px 20px;
            }

            .elementor-661
              .elementor-element.elementor-element-361a66a
              > .elementor-element-populated {
              margin: 0px 0px 0px 0px;
              --e-column-margin-right: 0px;
              --e-column-margin-left: 0px;
              padding: 0px 0px 0px 0px;
            }

            .elementor-661 .elementor-element.elementor-element-bb39069 {
              text-align: left;
            }

            .elementor-661 .elementor-element.elementor-element-bb39069 img {
              width: 180px;
            }

            .elementor-661
              .elementor-element.elementor-element-4c598d8.elementor-column
              > .elementor-widget-wrap {
              justify-content: flex-end;
            }

            .elementor-661
              .elementor-element.elementor-element-4c598d8
              > .elementor-element-populated {
              margin: 0px 0px 0px 0px;
              --e-column-margin-right: 0px;
              --e-column-margin-left: 0px;
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu {
              justify-content: flex-end;
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu.break-point-mobile
              .jkit-menu-wrapper {
              background-color: var(--e-global-color-1feb05a);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu.break-point-tablet
              .jkit-menu-wrapper {
              background-color: var(--e-global-color-1feb05a);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper {
              padding: 20px 20px 0px 20px;
              margin: 0px 0px 0px 0px;
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              > li
              > a {
              font-size: var(--e-global-typography-f57671c-font-size);
              line-height: var(--e-global-typography-f57671c-line-height);
              letter-spacing: var(--e-global-typography-f57671c-letter-spacing);
              word-spacing: var(--e-global-typography-f57671c-word-spacing);
              margin: 0px 15px 0px 10px;
              padding: 12px 0px 12px 0px;
              color: var(--e-global-color-primary);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              > li
              > a
              svg {
              fill: var(--e-global-color-primary);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              > li:hover
              > a {
              color: var(--e-global-color-primary);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              > li:hover
              > a
              svg {
              fill: var(--e-global-color-primary);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              > li.current-menu-item
              > a,
            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              > li.current-menu-ancestor
              > a {
              color: var(--e-global-color-primary);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              > li.current-menu-item
              > a
              svg,
            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              > li.current-menu-ancestor
              > a
              svg {
              fill: var(--e-global-color-primary);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              li.menu-item-has-children
              > a
              i,
            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              li.menu-item-has-children
              > a
              svg {
              border-radius: 10px 10px 10px 10px;
              border-width: 0px 0px 0px 0px;
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              .sub-menu
              li
              a {
              font-size: var(--e-global-typography-f57671c-font-size);
              line-height: var(--e-global-typography-f57671c-line-height);
              letter-spacing: var(--e-global-typography-f57671c-letter-spacing);
              word-spacing: var(--e-global-typography-f57671c-word-spacing);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              li.menu-item-has-children
              .sub-menu {
              padding: 10px 10px 10px 5px;
              border-radius: 0px 0px 0px 0px;
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-hamburger-menu {
              float: left;
              width: 22px;
              border-width: 0px 0px 0px 0px;
              border-radius: 10px 10px 10px 10px;
              color: var(--e-global-color-primary);
              padding: 20px 22px 20px 20px;
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-hamburger-menu
              i {
              font-size: 26px;
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-hamburger-menu
              svg {
              width: 26px;
              fill: var(--e-global-color-primary);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-hamburger-menu:hover {
              color: var(--e-global-color-accent);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-hamburger-menu:hover
              svg {
              fill: var(--e-global-color-accent);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-nav-identity-panel
              .jkit-close-menu {
              border-width: 0px 0px 0px 0px;
              border-radius: 0px 0px 0px 0px;
              color: var(--e-global-color-secondary);
              margin: 15px 20px 0px 0px;
              padding: 13px 0px 11px 0px;
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-nav-identity-panel
              .jkit-close-menu
              svg {
              fill: var(--e-global-color-secondary);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-nav-identity-panel
              .jkit-close-menu:hover {
              color: var(--e-global-color-secondary);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-nav-identity-panel
              .jkit-close-menu:hover
              svg {
              fill: var(--e-global-color-secondary);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-nav-identity-panel
              .jkit-nav-site-title
              .jkit-nav-logo
              img {
              max-width: 175px;
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-nav-identity-panel
              .jkit-nav-site-title
              .jkit-nav-logo {
              margin: 6px 0px 10px 0px;
            }

            .elementor-661 .elementor-element.elementor-element-ba0a629 {
              width: auto;
              max-width: auto;
            }

            .elementor-661
              .elementor-element.elementor-element-ac16e6b.elementor-column
              > .elementor-widget-wrap {
              justify-content: flex-end;
            }

            .elementor-661
              .elementor-element.elementor-element-ac16e6b
              > .elementor-element-populated {
              margin: 5px 10px 0px 0px;
              --e-column-margin-right: 10px;
              --e-column-margin-left: 0px;
              padding: 10px 0px 10px 0px;
            }

            .elementor-661
              .elementor-element.elementor-element-d9f1b19
              .elementor-icon-box-wrapper {
              text-align: left;
            }

            .elementor-661
              .elementor-element.elementor-element-d9f1b19
              .elementor-icon-box-title,
            .elementor-661
              .elementor-element.elementor-element-d9f1b19
              .elementor-icon-box-title
              a {
              font-size: var(--e-global-typography-dd35ce7-font-size);
              line-height: var(--e-global-typography-dd35ce7-line-height);
              letter-spacing: var(--e-global-typography-dd35ce7-letter-spacing);
              word-spacing: var(--e-global-typography-dd35ce7-word-spacing);
            }

            .elementor-661
              .elementor-element.elementor-element-d9f1b19
              .elementor-icon-box-description {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }

            .elementor-661
              .elementor-element.elementor-element-d9f1b19
              > .elementor-widget-container {
              margin: 0px 0px 0px 10px;
            }
          }

          @media (max-width: 767px) {
            .elementor-661 .elementor-element.elementor-element-41215c6 {
              padding: 5px 5px 5px 5px;
            }

            .elementor-661
              .elementor-element.elementor-element-f39683c
              .jeg-elementor-kit.jkit-heading {
              text-align: center;
            }

            .elementor-661
              .elementor-element.elementor-element-f39683c
              .jeg-elementor-kit.jkit-heading
              .heading-title {
              font-size: var(--e-global-typography-933f479-font-size);
              line-height: var(--e-global-typography-933f479-line-height);
              letter-spacing: var(--e-global-typography-933f479-letter-spacing);
              word-spacing: var(--e-global-typography-933f479-word-spacing);
            }

            .elementor-661
              .elementor-element.elementor-element-f39683c
              .jeg-elementor-kit.jkit-heading
              .heading-title
              > span {
              font-size: var(--e-global-typography-43e7290-font-size);
              line-height: var(--e-global-typography-43e7290-line-height);
              letter-spacing: var(--e-global-typography-43e7290-letter-spacing);
              word-spacing: var(--e-global-typography-43e7290-word-spacing);
            }

            .elementor-661 .elementor-element.elementor-element-c7e1fd5 {
              padding: 15px 15px 15px 15px;
            }

            .elementor-661 .elementor-element.elementor-element-361a66a {
              width: 50%;
            }

            .elementor-661
              .elementor-element.elementor-element-361a66a
              > .elementor-element-populated {
              margin: 0px 0px 0px 0px;
              --e-column-margin-right: 0px;
              --e-column-margin-left: 0px;
              padding: 0px 0px 0px 0px;
            }

            .elementor-661 .elementor-element.elementor-element-bb39069 {
              text-align: left;
            }

            .elementor-661 .elementor-element.elementor-element-bb39069 img {
              width: 150px;
            }

            .elementor-661 .elementor-element.elementor-element-4c598d8 {
              width: 50%;
            }

            .elementor-661
              .elementor-element.elementor-element-4c598d8
              > .elementor-element-populated {
              margin: 0px 0px 0px 0px;
              --e-column-margin-right: 0px;
              --e-column-margin-left: 0px;
              padding: 0px 0px 0px 0px;
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              > li
              > a {
              font-size: var(--e-global-typography-f57671c-font-size);
              line-height: var(--e-global-typography-f57671c-line-height);
              letter-spacing: var(--e-global-typography-f57671c-letter-spacing);
              word-spacing: var(--e-global-typography-f57671c-word-spacing);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              .sub-menu
              li
              a {
              font-size: var(--e-global-typography-f57671c-font-size);
              line-height: var(--e-global-typography-f57671c-line-height);
              letter-spacing: var(--e-global-typography-f57671c-letter-spacing);
              word-spacing: var(--e-global-typography-f57671c-word-spacing);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-hamburger-menu {
              float: right;
              color: var(--e-global-color-primary);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-hamburger-menu
              svg {
              fill: var(--e-global-color-primary);
            }

            .elementor-661
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-nav-identity-panel
              .jkit-close-menu {
              padding: 14px 0px 11px 0px;
            }

            .elementor-661 .elementor-element.elementor-element-ac16e6b {
              width: 50%;
            }

            .elementor-661
              .elementor-element.elementor-element-d9f1b19
              .elementor-icon-box-wrapper {
              text-align: center;
            }

            .elementor-661 .elementor-element.elementor-element-d9f1b19 {
              --icon-box-icon-margin: 0px;
            }

            .elementor-661
              .elementor-element.elementor-element-d9f1b19
              .elementor-icon {
              font-size: 15px;
            }

            .elementor-661
              .elementor-element.elementor-element-d9f1b19
              .elementor-icon-box-title,
            .elementor-661
              .elementor-element.elementor-element-d9f1b19
              .elementor-icon-box-title
              a {
              font-size: var(--e-global-typography-dd35ce7-font-size);
              line-height: var(--e-global-typography-dd35ce7-line-height);
              letter-spacing: var(--e-global-typography-dd35ce7-letter-spacing);
              word-spacing: var(--e-global-typography-dd35ce7-word-spacing);
            }

            .elementor-661
              .elementor-element.elementor-element-d9f1b19
              .elementor-icon-box-description {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }
          }

          @media (min-width: 768px) {
            .elementor-661 .elementor-element.elementor-element-361a66a {
              width: 20%;
            }

            .elementor-661 .elementor-element.elementor-element-4c598d8 {
              width: 56.987%;
            }

            .elementor-661 .elementor-element.elementor-element-ac16e6b {
              width: 22.677%;
            }
          }

          @media (max-width: 1024px) and (min-width: 768px) {
            .elementor-661 .elementor-element.elementor-element-361a66a {
              width: 50%;
            }

            .elementor-661 .elementor-element.elementor-element-4c598d8 {
              width: 50%;
            }

            .elementor-661 .elementor-element.elementor-element-ac16e6b {
              width: 100%;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-hamburger-menu {
              display: block;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper {
              width: 100%;
              max-width: 360px;
              border-radius: 0;
              background-color: #f7f7f7;
              width: 100%;
              position: fixed;
              top: 0;
              left: -110%;
              height: 100% !important;
              box-shadow: 0 10px 30px 0 rgba(255, 165, 0, 0);
              overflow-y: auto;
              overflow-x: hidden;
              padding-top: 0;
              padding-left: 0;
              padding-right: 0;
              display: flex;
              flex-direction: column-reverse;
              justify-content: flex-end;
              -moz-transition: left 0.6s cubic-bezier(0.6, 0.1, 0.68, 0.53),
                width 0.6s;
              -webkit-transition: left 0.6s cubic-bezier(0.6, 0.1, 0.68, 0.53),
                width 0.6s;
              -o-transition: left 0.6s cubic-bezier(0.6, 0.1, 0.68, 0.53),
                width 0.6s;
              -ms-transition: left 0.6s cubic-bezier(0.6, 0.1, 0.68, 0.53),
                width 0.6s;
              transition: left 0.6s cubic-bezier(0.6, 0.1, 0.68, 0.53),
                width 0.6s;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper.active {
              left: 0;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu-container {
              overflow-y: hidden;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-nav-identity-panel {
              padding: 10px 0px 10px 0px;
              display: block;
              position: relative;
              z-index: 5;
              width: 100%;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-nav-identity-panel
              .jkit-nav-site-title {
              display: inline-block;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-nav-identity-panel
              .jkit-close-menu {
              display: block;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu {
              display: block;
              height: 100%;
              overflow-y: auto;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              li.menu-item-has-children
              > a
              i {
              margin-left: auto;
              border: 1px solid var(--jkit-border-color);
              border-radius: 3px;
              padding: 4px 15px;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              li.menu-item-has-children
              > a
              svg {
              margin-left: auto;
              border: 1px solid var(--jkit-border-color);
              border-radius: 3px;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              li.menu-item-has-children
              .sub-menu {
              position: inherit;
              box-shadow: none;
              background: none;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              li {
              display: block;
              width: 100%;
              position: inherit;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              li
              .sub-menu {
              display: none;
              max-height: 2500px;
              opacity: 0;
              visibility: hidden;
              transition: max-height 5s ease-out;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              li
              .sub-menu.dropdown-open {
              display: block;
              opacity: 1;
              visibility: visible;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              li
              a {
              display: block;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              li
              a
              i {
              float: right;
            }
          }

          @media (max-width: 1024px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu
              li
              a
              svg {
              float: right;
            }
          }

          @media (min-width: 1025px) {
            .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper
              .jkit-menu-container {
              height: 100%;
            }
          }

          @media (max-width: 1024px) {
            .admin-bar
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper {
              top: 32px;
            }
          }

          @media (max-width: 782px) {
            .admin-bar
              .elementor-element.elementor-element-ba0a629
              .jeg-elementor-kit.jkit-nav-menu
              .jkit-menu-wrapper {
              top: 46px;
            }
          }
        </style>
				<div
					data-elementor-type="page"
					data-elementor-id="661"
					class="elementor elementor-661">
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-41215c6 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="41215c6"
						data-element_type="section"
						id="header"
						data-settings='{"background_background":"classic"}'>
						<div class="elementor-container elementor-column-gap-default">
							<div
								class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-54c35c3"
								data-id="54c35c3"
								data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div
										class="elementor-element elementor-element-f39683c elementor-widget elementor-widget-jkit_heading"
										data-id="f39683c"
										data-element_type="widget"
										data-widget_type="jkit_heading.default">
										<div class="elementor-widget-container">
											<div
												class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile-center jeg_module_675__6756cc4d38bbe">
												<div class="heading-section-title display-inline-block">
													<div class="heading-title">
														Oferecemos a Revolução de Engenharia Industrial
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div
								class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a9ee861 elementor-hidden-mobile"
								data-id="a9ee861"
								data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div
										class="elementor-element elementor-element-25f90af elementor-shape-square e-grid-align-right elementor-grid-0 elementor-widget elementor-widget-social-icons"
										data-id="25f90af"
										data-element_type="widget"
										data-widget_type="social-icons.default">
										<div class="elementor-widget-container">
											<style>
                        /*! elementor - v3.17.0 - 08-11-2023 */
                        .elementor-widget-social-icons.elementor-grid-0
                          .elementor-widget-container,
                        .elementor-widget-social-icons.elementor-grid-mobile-0
                          .elementor-widget-container,
                        .elementor-widget-social-icons.elementor-grid-tablet-0
                          .elementor-widget-container {
                          line-height: 1;
                          font-size: 0;
                        }

                        .elementor-widget-social-icons:not(
                            .elementor-grid-0
                          ):not(.elementor-grid-tablet-0):not(
                            .elementor-grid-mobile-0
                          )
                          .elementor-grid {
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
                          width: calc(
                            var(--icon-size, 25px) +
                              (2 * var(--icon-padding, 0.5em))
                          );
                          height: calc(
                            var(--icon-size, 25px) +
                              (2 * var(--icon-padding, 0.5em))
                          );
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

                        .elementor-shape-rounded
                          .elementor-icon.elementor-social-icon {
                          border-radius: 10%;
                        }

                        .elementor-shape-circle
                          .elementor-icon.elementor-social-icon {
                          border-radius: 50%;
                        }
                      </style>
											<div
												class="elementor-social-icons-wrapper elementor-grid">
												<span class="elementor-grid-item">
													<a
														class="elementor-icon elementor-social-icon elementor-social-icon-jki-facebook-light elementor-repeater-item-03903b1"
														target="_blank">
														<span class="elementor-screen-only">Jki-facebook-light</span>
														<i class="jki jki-facebook-light"></i>
													</a>
												</span>
												<span class="elementor-grid-item">
													<a
														class="elementor-icon elementor-social-icon elementor-social-icon-jki-twitter-light elementor-repeater-item-e7a79ae"
														target="_blank">
														<span class="elementor-screen-only">Jki-twitter-light</span>
														<i class="jki jki-twitter-light"></i>
													</a>
												</span>
												<span class="elementor-grid-item">
													<a
														class="elementor-icon elementor-social-icon elementor-social-icon-jki-instagram-1-light elementor-repeater-item-0fa537d"
														target="_blank">
														<span class="elementor-screen-only">Jki-instagram-1-light</span>
														<i class="jki jki-instagram-1-light"></i>
													</a>
												</span>
												<span class="elementor-grid-item">
													<a
														class="elementor-icon elementor-social-icon elementor-social-icon-jki-linkedin-light elementor-repeater-item-123eb88"
														target="_blank">
														<span class="elementor-screen-only">Jki-linkedin-light</span>
														<i class="jki jki-linkedin-light"></i>
													</a>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-c7e1fd5 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="c7e1fd5"
						data-element_type="section"
						data-settings='{"background_background":"classic"}'>
						<div class="elementor-container elementor-column-gap-default">
							<div
								class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-361a66a"
								data-id="361a66a"
								data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div
										class="elementor-element elementor-element-bb39069 elementor-widget elementor-widget-image"
										data-id="bb39069"
										data-element_type="widget"
										data-widget_type="image.default">
										<div class="elementor-widget-container">
											<style>
                        /*! elementor - v3.17.0 - 08-11-2023 */
                        .elementor-widget-image {
                          text-align: center;
                        }

                        .elementor-widget-image a {
                          display: inline-block;
                        }

                        .elementor-widget-image a img[src$=".svg"] {
                          width: 48px;
                        }

                        .elementor-widget-image img {
                          vertical-align: middle;
                          display: inline-block;
                        }
                      </style>
											<a href="index.html" style="width: 100%">
												<img
													width="800"
													height="267"
													src="../wp-content/uploads/sites/323/2023/01/petrol-logo1-e1672720046215.svg"
													class="attachment-full size-full wp-image-261"
													alt
													decoding="async"
													sizes="(max-width: 9
											00px) 100vw, 800px" /></a>
										</div>
									</div>
								</div>
							</div>
							<div
								class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4c598d8"
								data-id="4c598d8"
								data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div
										class="elementor-element elementor-element-ba0a629 elementor-widget-tablet__width-auto elementor-widget elementor-widget-jkit_nav_menu"
										data-id="ba0a629"
										data-element_type="widget"
										data-widget_type="jkit_nav_menu.default">
										<div class="elementor-widget-container">
											<div
												class="jeg-elementor-kit jkit-nav-menu break-point-tablet submenu-click-title jeg_module_675_1_6756cc4d3d9f3"
												data-item-indicator='&lt;i aria-hidden="true" class="jki jki-chevron-down-light"&gt;&lt;/i&gt;'>
												<button class="jkit-hamburger-menu">
													<i aria-hidden="true" class="jki jki-bars-solid"></i>
												</button>
												<div class="jkit-menu-wrapper">
													<div class="jkit-menu-container">
														<ul
															id="menu-menu"
															class="jkit-menu jkit-menu-direction-flex jkit-submenu-position-top">
															<li
																id="menu-item-1089"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1089">
																<a href="../index.html">Inicio</a>
															</li>
															<li
																id="menu-item-1081"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1081">
																<a href="../about/index.html">Sobre nós</a>
															</li>
															<li
																id="menu-item-1088"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1081">
																<a
																	href="../services/index.html"
																	aria-current="page">Serviços</a>
															</li>
															<li
																id="menu-item-1081"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1081">
																<a href="../carreira/index.html">Carreira</a>
															</li>
															<li
																id="menu-item-1081"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1081">
																<a href="../blog/index.html">Nóticias</a>
															</li>
															<li
																id="menu-item-1081"
																class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-675 current_page_item menu-item-1088">
																<a href="../contact/index.html">Contacto</a>
															</li>
														</ul>
													</div>
													<div class="jkit-nav-identity-panel">
														<div class="jkit-nav-site-title">
															<a href="#" class="jkit-nav-logo"><img
																	src="../wp-content/uploads/sites/323/2023/01/petrol-logo1-e1672720046215.png" /></a>
														</div>
														<button class="jkit-close-menu">
															<i
																aria-hidden="true"
																class="jki jki-times-solid"></i>
														</button>
													</div>
												</div>
												<div class="jkit-overlay"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div
								class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ac16e6b elementor-hidden-mobile elementor-hidden-tablet"
								data-id="ac16e6b"
								data-element_type="column"
								data-settings='{"background_background":"classic"}'>
								<div class="elementor-widget-wrap elementor-element-populated">
									<div
										class="elementor-element elementor-element-d9f1b19 elementor-position-left elementor-vertical-align-bottom elementor-widget__width-auto elementor-view-stacked elementor-shape-square elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
										data-id="d9f1b19"
										data-element_type="widget"
										data-widget_type="icon-box.default">
										<div class="elementor-widget-container">
											<link
												rel="stylesheet"
												href="../wp-content/plugins/elementor/assets/css/widget-icon-box.min.css" />
											<div class="elementor-icon-box-wrapper">
												<div class="elementor-icon-box-icon">
													<span class="elementor-icon elementor-animation-">
														<i
															aria-hidden="true"
															class="jki jki-phone-call-line"></i>
													</span>
												</div>
												<div class="elementor-icon-box-content">
													<h3 class="elementor-icon-box-title">
														<span> Mais informações </span>
													</h3>
													<p class="elementor-icon-box-description">
														924 716 762 / 921 700 818
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</header>
			<div
				data-elementor-type="wp-page"
				data-elementor-id="811"
				class="elementor elementor-811">
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-d77a8d0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
					data-id="d77a8d0"
					data-element_type="section"
					data-settings='{"background_background":"classic"}'>
					<div class="elementor-background-overlay"></div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-144d413d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
					data-id="144d413d"
					data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div
							class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-68e88af5"
							data-id="68e88af5"
							data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div
									class="elementor-element elementor-element-ce29b62 elementor-widget elementor-widget-heading"
									data-id="ce29b62"
									data-element_type="widget"
									data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h5 class="elementor-heading-title elementor-size-default">
											Entre em contato
										</h5>
									</div>
								</div>
								<div
									class="elementor-element elementor-element-14a82d63 elementor-widget elementor-widget-heading"
									data-id="14a82d63"
									data-element_type="widget"
									data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h2 class="elementor-heading-title elementor-size-default">
											Não hesite em nos contatar
										</h2>
									</div>
								</div>
								<div
									class="elementor-element elementor-element-055ae7b elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
									data-id="055ae7b"
									data-element_type="widget"
									data-widget_type="divider.default">
									<div class="elementor-widget-container">
										<div class="elementor-divider">
											<span class="elementor-divider-separator"> </span>
										</div>
									</div>
								</div>
								<div
									class="elementor-element elementor-element-58edc1f0 elementor-widget elementor-widget-text-editor"
									data-id="58edc1f0"
									data-element_type="widget"
									data-widget_type="text-editor.default">
									<div class="elementor-widget-container">
										<style>
                      /*! elementor - v3.17.0 - 08-11-2023 */
                      .elementor-widget-text-editor.elementor-drop-cap-view-stacked
                        .elementor-drop-cap {
                        background-color: #69727d;
                        color: #fff;
                      }

                      .elementor-widget-text-editor.elementor-drop-cap-view-framed
                        .elementor-drop-cap {
                        color: #69727d;
                        border: 3px solid;
                        background-color: transparent;
                      }

                      .elementor-widget-text-editor:not(
                          .elementor-drop-cap-view-default
                        )
                        .elementor-drop-cap {
                        margin-top: 8px;
                      }

                      .elementor-widget-text-editor:not(
                          .elementor-drop-cap-view-default
                        )
                        .elementor-drop-cap-letter {
                        width: 1em;
                        height: 1em;
                      }

                      .elementor-widget-text-editor .elementor-drop-cap {
                        float: left;
                        text-align: center;
                        line-height: 1;
                        font-size: 50px;
                      }

                      .elementor-widget-text-editor .elementor-drop-cap-letter {
                        display: inline-block;
                      }
                    </style>
										<p>
											Somos uma empresa angolana dedicada à excelência em
											serviços de apoio ao setor de petróleo e gás, operando com
											responsabilidade, inovação e compromisso com a segurança.
										</p>
									</div>
								</div>
								<section
									class="elementor-section elementor-inner-section elementor-element elementor-element-aedd42c elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default"
									data-id="aedd42c"
									data-element_type="section">
									<div class="elementor-container elementor-column-gap-no">
										<div
											class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5bd1c13a"
											data-id="5bd1c13a"
											data-element_type="column"
											data-settings='{"background_background":"classic"}'>
											<div
												class="elementor-widget-wrap elementor-element-populated">
												<div
													class="elementor-element elementor-element-ef62a9d jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
													data-id="ef62a9d"
													data-element_type="widget"
													data-widget_type="jkit_icon_box.default">
													<div class="elementor-widget-container">
														<div
															class="jeg-elementor-kit jkit-icon-box icon-position-top elementor-animation-float jeg_module_811_2_6756cc53c7400">
															<div
																class="jkit-icon-box-wrapper hover-from-left">
																<div
																	class="icon-box icon-box-header elementor-animation-">
																	<div class="icon style-color">
																		<i
																			aria-hidden="true"
																			class="jki jki-placeholder2-light"></i>
																	</div>
																</div>
																<div class="icon-box icon-box-body">
																	<h2 class="title">Nosso Escritório</h2>
																	<p class="icon-box-description">
																		Jl. Raya Puputan No 142, Denpasar
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div
											class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-64b8ac89"
											data-id="64b8ac89"
											data-element_type="column"
											data-settings='{"background_background":"classic"}'>
											<div
												class="elementor-widget-wrap elementor-element-populated">
												<div
													class="elementor-element elementor-element-805e547 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
													data-id="805e547"
													data-element_type="widget"
													data-widget_type="jkit_icon_box.default">
													<div class="elementor-widget-container">
														<div
															class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation-float jeg_module_811_3_6756cc53c87dd">
															<div
																class="jkit-icon-box-wrapper hover-from-left">
																<div
																	class="icon-box icon-box-header elementor-animation-">
																	<div class="icon style-color">
																		<i
																			aria-hidden="true"
																			class="jki jki-phone-line"></i>
																	</div>
																</div>
																<div class="icon-box icon-box-body">
																	<h2 class="title">Nosso telefone</h2>
																	<p class="icon-box-description">
																		924 716 762 / 921 700 818 | Hotline
																		112-110-5
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div
											class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-23c35bba"
											data-id="23c35bba"
											data-element_type="column"
											data-settings='{"background_background":"classic"}'>
											<div
												class="elementor-widget-wrap elementor-element-populated">
												<div
													class="elementor-element elementor-element-c41a52b jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
													data-id="c41a52b"
													data-element_type="widget"
													data-widget_type="jkit_icon_box.default">
													<div class="elementor-widget-container">
														<div
															class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation-float jeg_module_811_4_6756cc53c9c04">
															<div
																class="jkit-icon-box-wrapper hover-from-left">
																<div
																	class="icon-box icon-box-header elementor-animation-">
																	<div class="icon style-color">
																		<i
																			aria-hidden="true"
																			class="jki jki-email-light"></i>
																	</div>
																</div>
																<div class="icon-box icon-box-body">
																	<h2 class="title">Nosso Email</h2>
																	<p class="icon-box-description">
																		support@ipl.ao
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<section
									class="elementor-section elementor-inner-section elementor-element elementor-element-608f415f elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
									data-id="608f415f"
									data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div
											class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-238be6c3"
											data-id="238be6c3"
											data-element_type="column">
											<div
												class="elementor-widget-wrap elementor-element-populated">
												<div
													class="elementor-element elementor-element-6b4d2dc9 elementor-widget elementor-widget-google_maps"
													data-id="6b4d2dc9"
													data-element_type="widget"
													data-widget_type="google_maps.default">
													<div class="elementor-widget-container">
														<style>
                              /*! elementor - v3.17.0 - 08-11-2023 */
                              .elementor-widget-google_maps
                                .elementor-widget-container {
                                overflow: hidden;
                              }

                              .elementor-widget-google_maps
                                .elementor-custom-embed {
                                line-height: 0;
                              }

                              .elementor-widget-google_maps iframe {
                                height: 300px;
                              }
                            </style>
														<div class="elementor-custom-embed">
															<iframe
																loading="lazy"
																src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.7065672301046!2d13.229412175262999!3d-8.813612991239395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f24f053244ef%3A0xbfab0649db17f037!2sR.%20Rainha%20Ginga%2C%20Luanda!5e0!3m2!1sen!2sao!4v1734530120582!5m2!1sen!2sao"
																title="jl. Raya puputan"
																aria-label="jl. Raya puputan"></iframe>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div
											class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4c12a10f"
											data-id="4c12a10f"
											data-element_type="column"
											data-settings='{"background_background":"classic"}'>
											<div
												class="elementor-widget-wrap elementor-element-populated">
												<div
													class="elementor-element elementor-element-0aef2df elementor-widget elementor-widget-heading"
													data-id="0aef2df"
													data-element_type="widget"
													data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2
															class="elementor-heading-title elementor-size-default">
															Vamos conversar
														</h2>
													</div>
												</div>
												<div
													class="elementor-element elementor-element-0989636 elementor-widget elementor-widget-heading"
													data-id="0989636"
													data-element_type="widget"
													data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2
															class="elementor-heading-title elementor-size-default">
															Deixe um recado
														</h2>
													</div>
												</div>
												<div
													class="elementor-element elementor-element-66b86b4 elementor-widget elementor-widget-metform"
													data-id="66b86b4"
													data-element_type="widget"
													data-widget_type="metform.default">
													<div class="elementor-widget-container">
														<div
															id="mf-response-props-id-1014"
															data-previous-steps-style
															data-editswitchopen
															data-response_type="alert"
															data-erroricon="fas fa-exclamation-triangle"
															data-successicon="fas fa-check"
															data-messageposition="top"
															class="mf-scroll-top-no">
															<div
																class="formpicker_warper formpicker_warper_editable"
																data-metform-formpicker-key="1014">
																<div class="elementor-widget-container">
																	<div
																		id="metform-wrap-66b86b4-1014"
																		class="mf-form-wrapper"
																		data-form-id="1014"
																		data-action="https://templatekit.jegtheme.com/petrol/wp-json/metform/v1/entries/insert/1014"
																		data-wp-nonce="9d94a00f50"
																		data-form-nonce="9d5b5d607d"
																		data-quiz-summery="false"
																		data-save-progress="false"
																		data-form-type="general-form"
																		data-stop-vertical-effect></div>
																	<script>
																		document.querySelector("form").addEventListener("submit", function (e) {
																			const email = document.querySelector('[name="mf-email"]').value;
																			const mensagem = document.querySelector('[name="mf-textarea"]').value;
																	
																			if (!email || !mensagem) {
																					e.preventDefault();
																					alert("Por favor, preencha os campos obrigatórios.");
																			}
																	});
																	</script>
																	<div class="mf-template">
																		<form class="metform-form-content" method="POST"
																			action="process_form.php">
																			<div
																				class="mf-main-response-wrap mf-response-msg-wrap"
																				data-show="0">
																				<div class="mf-response-msg">
																					<i
																						class="mf-success-icon fas fa-check"></i>
																					<p></p>
																				</div>
																			</div>
																			<div class="metform-form-main-wrapper">
																				<div
																					data-elementor-type="wp-post"
																					data-elementor-id="1014"
																					class="elementor elementor-1014">
																					<section
																						class="elementor-section elementor-top-section elementor-element elementor-element-37f14ae elementor-section-boxed elementor-section-height-default elementor-section-height-default"
																						data-id="37f14ae"
																						data-element_type="section"
																						data-settings='{"background_background":"classic"}'>
																						<div
																							class="elementor-container elementor-column-gap-no">
																							<div
																								class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c78a4fd"
																								data-id="c78a4fd"
																								data-element_type="column">
																								<div
																									class="elementor-widget-wrap elementor-element-populated">
																									<section
																										class="elementor-section elementor-inner-section elementor-element elementor-element-226a2b0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
																										data-id="226a2b0"
																										data-element_type="section">
																										<div
																											class="elementor-container elementor-column-gap-default">
																											<div
																												class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a5394dd"
																												data-id="a5394dd"
																												data-element_type="column">
																												<div
																													class="elementor-widget-wrap elementor-element-populated">
																													<div
																														class="elementor-element elementor-element-e50a02c elementor-widget elementor-widget-mf-text"
																														data-id="e50a02c"
																														data-element_type="widget"
																														data-settings='{"mf_input_name":"mf-first-name"}'
																														data-widget_type="mf-text.default">
																														<div
																															class="elementor-widget-container">
																															<div
																																class="mf-input-wrapper">
																																<label
																																	class="mf-input-label"
																																	for="mf-input-text-e50a02c">Nome
																																	<span
																																		class="mf-input-required-indicator"></span></label><input
																																	type="text"
																																	class="mf-input"
																																	id="mf-input-text-e50a02c"
																																	name="mf-first-name"
																																	placeholder="Sobrenome "
																																	aria-invalid="false" />
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f68ff56"
																												data-id="f68ff56"
																												data-element_type="column">
																												<div
																													class="elementor-widget-wrap elementor-element-populated">
																													<div
																														class="elementor-element elementor-element-5b27689 elementor-widget elementor-widget-mf-text"
																														data-id="5b27689"
																														data-element_type="widget"
																														data-settings='{"mf_input_name":"mf-text"}'
																														data-widget_type="mf-text.default">
																														<div
																															class="elementor-widget-container">
																															<div
																																class="mf-input-wrapper">
																																<label
																																	class="mf-input-label"
																																	for="mf-input-text-5b27689">Assunto
																																	<span
																																		class="mf-input-required-indicator"></span></label><input
																																	type="text"
																																	class="mf-input"
																																	id="mf-input-text-5b27689"
																																	name="mf-text"
																																	placeholder="Assunto "
																																	aria-invalid="false" />
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</section>
																									<section
																										class="elementor-section elementor-inner-section elementor-element elementor-element-221d251 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
																										data-id="221d251"
																										data-element_type="section">
																										<div
																											class="elementor-container elementor-column-gap-default">
																											<div
																												class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a4366bb"
																												data-id="a4366bb"
																												data-element_type="column">
																												<div
																													class="elementor-widget-wrap elementor-element-populated">
																													<div
																														class="elementor-element elementor-element-8e58521 elementor-widget elementor-widget-mf-email"
																														data-id="8e58521"
																														data-element_type="widget"
																														data-settings='{"mf_input_name":"mf-email"}'
																														data-widget_type="mf-email.default">
																														<div
																															class="elementor-widget-container">
																															<div
																																class="mf-input-wrapper">
																																<label
																																	class="mf-input-label"
																																	for="mf-input-email-8e58521">Email
																																	<span
																																		class="mf-input-required-indicator"></span></label><input
																																	type="email"
																																	class="mf-input"
																																	id="mf-input-email-8e58521"
																																	name="mf-email"
																																	placeholder="Seu Email "
																																	aria-invalid="false"
																																	value />
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0fcc8c4"
																												data-id="0fcc8c4"
																												data-element_type="column">
																												<div
																													class="elementor-widget-wrap elementor-element-populated">
																													<div
																														class="elementor-element elementor-element-f1cf54e elementor-widget elementor-widget-mf-telephone"
																														data-id="f1cf54e"
																														data-element_type="widget"
																														data-settings='{"mf_input_name":"mf-telephone"}'
																														data-widget_type="mf-telephone.default">
																														<div
																															class="elementor-widget-container">
																															<div
																																class="mf-input-wrapper">
																																<label
																																	class="mf-input-label"
																																	for="mf-input-telephone-f1cf54e">Telefone
																																	<span
																																		class="mf-input-required-indicator"></span></label><input
																																	type="tel"
																																	class="mf-input"
																																	id="mf-input-telephone-f1cf54e"
																																	name="mf-telephone"
																																	placeholder="Telefone "
																																	aria-invalid="false" />
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</section>
																									<div
																										class="elementor-element elementor-element-f2b1021 elementor-widget elementor-widget-mf-textarea"
																										data-id="f2b1021"
																										data-element_type="widget"
																										data-settings='{"mf_input_name":"mf-textarea"}'
																										data-widget_type="mf-textarea.default">
																										<div
																											class="elementor-widget-container">
																											<div
																												class="mf-input-wrapper">
																												<label
																													class="mf-input-label"
																													for="mf-input-text-area-f2b1021">MEnsagem
																													<span
																														class="mf-input-required-indicator"></span></label><textarea
																													class="mf-input mf-textarea"
																													id="mf-input-text-area-f2b1021"
																													name="mf-textarea"
																													placeholder="Mensagem... "
																													cols="30"
																													rows="10"
																													aria-invalid="false"></textarea>
																											</div>
																										</div>
																									</div>
																									<div
																										class="elementor-element elementor-element-2ba9065 mf-btn--justify mf-btn--tablet-justify mf-btn--mobile-justify elementor-widget elementor-widget-mf-button"
																										data-id="2ba9065"
																										data-element_type="widget"
																										data-widget_type="mf-button.default">
																										<div
																											class="elementor-widget-container">
																											<div
																												class="mf-btn-wraper"
																												data-mf-form-conditional-logic-requirement>
																												<button
																													type="submit"
																													class="metform-btn metform-submit-btn"
																													id>
																													<span>Enviar </span>
																												</button>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</section>
																				</div>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
														</div>
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
			<footer itemscope="itemscope" itemtype="https://schema.org/WPFooter">
				<style>
          .elementor-664
            .elementor-element.elementor-element-fc9ec3e
            > .elementor-container {
            max-width: 1200px;
          }

          .elementor-664
            .elementor-element.elementor-element-fc9ec3e:not(
              .elementor-motion-effects-element-type-background
            ),
          .elementor-664
            .elementor-element.elementor-element-fc9ec3e
            > .elementor-motion-effects-container
            > .elementor-motion-effects-layer {
            background-color: var(--e-global-color-1feb05a);
          }

          .elementor-664
            .elementor-element.elementor-element-fc9ec3e
            > .elementor-background-overlay {
            background-image: url("../wp-content/uploads/sites/323/2023/01/oil-and-gas-industry-e1673760447203.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.05;
            mix-blend-mode: darken;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
          }

          .elementor-664
            .elementor-element.elementor-element-fc9ec3e
            .elementor-background-overlay {
            filter: brightness(100%) contrast(100%) saturate(0%) blur(0px)
              hue-rotate(0deg);
          }

          .elementor-664 .elementor-element.elementor-element-fc9ec3e {
            transition: background 0.3s, border 0.3s, border-radius 0.3s,
              box-shadow 0.3s;
            margin-top: 80px;
            margin-bottom: 0px;
            padding: 0px 0px 10px 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-52a93bb.elementor-column
            > .elementor-widget-wrap {
            justify-content: center;
          }

          .elementor-664
            .elementor-element.elementor-element-52a93bb
            > .elementor-element-populated {
            margin: -100px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-d042169
            .elementor-icon-wrapper {
            text-align: center;
          }

          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-stacked
            .elementor-icon {
            background-color: var(--e-global-color-accent);
            color: var(--e-global-color-secondary);
          }

          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-framed
            .elementor-icon,
          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-default
            .elementor-icon {
            color: var(--e-global-color-accent);
            border-color: var(--e-global-color-accent);
          }

          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-framed
            .elementor-icon,
          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-default
            .elementor-icon
            svg {
            fill: var(--e-global-color-accent);
          }

          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-framed
            .elementor-icon {
            background-color: var(--e-global-color-secondary);
          }

          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-stacked
            .elementor-icon
            svg {
            fill: var(--e-global-color-secondary);
          }

          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-stacked
            .elementor-icon:hover {
            background-color: var(--e-global-color-33b01ef);
            color: var(--e-global-color-secondary);
          }

          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-framed
            .elementor-icon:hover,
          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-default
            .elementor-icon:hover {
            color: var(--e-global-color-33b01ef);
            border-color: var(--e-global-color-33b01ef);
          }

          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-framed
            .elementor-icon:hover,
          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-default
            .elementor-icon:hover
            svg {
            fill: var(--e-global-color-33b01ef);
          }

          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-framed
            .elementor-icon:hover {
            background-color: var(--e-global-color-secondary);
          }

          .elementor-664
            .elementor-element.elementor-element-d042169.elementor-view-stacked
            .elementor-icon:hover
            svg {
            fill: var(--e-global-color-secondary);
          }

          .elementor-664
            .elementor-element.elementor-element-d042169
            .elementor-icon {
            font-size: 24px;
            padding: 15px;
            border-radius: 0px 0px 0px 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-d042169
            .elementor-icon
            svg {
            height: 24px;
          }

          .elementor-664
            .elementor-element.elementor-element-d042169
            > .elementor-widget-container {
            margin: 0px 0px -6px 0px;
          }

          .elementor-664 .elementor-element.elementor-element-d042169 {
            width: auto;
            max-width: auto;
            z-index: 1;
          }

          .elementor-664
            .elementor-element.elementor-element-a46aed8
            > .elementor-container {
            max-width: 1200px;
          }

          .elementor-664
            .elementor-element.elementor-element-a46aed8:not(
              .elementor-motion-effects-element-type-background
            ),
          .elementor-664
            .elementor-element.elementor-element-a46aed8
            > .elementor-motion-effects-container
            > .elementor-motion-effects-layer {
            background-color: var(--e-global-color-primary);
          }

          .elementor-664 .elementor-element.elementor-element-a46aed8 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s,
              box-shadow 0.3s;
            margin-top: -30px;
            margin-bottom: 20px;
            padding: 80px 60px 80px 60px;
          }

          .elementor-664
            .elementor-element.elementor-element-a46aed8
            > .elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
          }

          .elementor-664
            .elementor-element.elementor-element-b7dc838
            > .elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s,
              box-shadow 0.3s;
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-b7dc838
            > .elementor-element-populated
            > .elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
          }

          .elementor-664 .elementor-element.elementor-element-6eea84f {
            text-align: left;
          }

          .elementor-664 .elementor-element.elementor-element-6eea84f img {
            width: 200px;
          }

          .elementor-664
            .elementor-element.elementor-element-6eea84f
            > .elementor-widget-container {
            margin: 0px 0px 10px 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-040b25b
            .jeg-elementor-kit.jkit-heading {
            text-align: left;
          }

          .elementor-664
            .elementor-element.elementor-element-040b25b
            .jeg-elementor-kit.jkit-heading
            .heading-title {
            -webkit-box-decoration-break: clone;
            box-decoration-break: clone;
            display: inline;
            font-family: var(--e-global-typography-cf4ee9a-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-cf4ee9a-font-size);
            font-weight: var(--e-global-typography-cf4ee9a-font-weight);
            text-transform: var(--e-global-typography-cf4ee9a-text-transform);
            line-height: var(--e-global-typography-cf4ee9a-line-height);
            letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
            word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            color: var(--e-global-color-secondary);
          }

          .elementor-664
            .elementor-element.elementor-element-040b25b
            .jeg-elementor-kit.jkit-heading
            .heading-section-title {
            margin: 0px 0px 0px 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-040b25b
            .jeg-elementor-kit.jkit-heading
            .heading-section-description {
            color: var(--e-global-color-026a526);
            font-family: var(--e-global-typography-9419a47-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-9419a47-font-size);
            font-weight: var(--e-global-typography-9419a47-font-weight);
            line-height: var(--e-global-typography-9419a47-line-height);
            letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
            word-spacing: var(--e-global-typography-9419a47-word-spacing);
          }

          .elementor-664
            .elementor-element.elementor-element-040b25b
            > .elementor-widget-container {
            margin: 0px 50px 0px 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-a850d18
            .jeg-elementor-kit.jkit-heading {
            text-align: left;
          }

          .elementor-664
            .elementor-element.elementor-element-a850d18
            .jeg-elementor-kit.jkit-heading
            .heading-title {
            -webkit-box-decoration-break: clone;
            box-decoration-break: clone;
            display: inline;
            font-family: var(--e-global-typography-cf4ee9a-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-cf4ee9a-font-size);
            font-weight: var(--e-global-typography-cf4ee9a-font-weight);
            text-transform: var(--e-global-typography-cf4ee9a-text-transform);
            line-height: var(--e-global-typography-cf4ee9a-line-height);
            letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
            word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            color: var(--e-global-color-secondary);
          }

          .elementor-664
            .elementor-element.elementor-element-a850d18
            .jeg-elementor-kit.jkit-heading
            .heading-section-title {
            margin: 0px 0px 0px 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-a850d18
            .jeg-elementor-kit.jkit-heading
            .heading-section-description {
            color: var(--e-global-color-026a526);
            font-family: var(--e-global-typography-9419a47-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-9419a47-font-size);
            font-weight: var(--e-global-typography-9419a47-font-weight);
            line-height: var(--e-global-typography-9419a47-line-height);
            letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
            word-spacing: var(--e-global-typography-9419a47-word-spacing);
          }

          .elementor-664
            .elementor-element.elementor-element-a850d18
            > .elementor-widget-container {
            margin: 0px 50px 0px 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-4a223dc
            > .elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-e544980
            .elementor-heading-title {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-cf4ee9a-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-cf4ee9a-font-size);
            font-weight: var(--e-global-typography-cf4ee9a-font-weight);
            text-transform: var(--e-global-typography-cf4ee9a-text-transform);
            line-height: var(--e-global-typography-cf4ee9a-line-height);
            letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
            word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
          }

          .elementor-664
            .elementor-element.elementor-element-e544980
            > .elementor-widget-container {
            margin: 0px 0px -15px 0px;
          }

          .elementor-664 .elementor-element.elementor-element-5137a9f {
            --divider-border-style: solid;
            --divider-color: var(--e-global-color-accent);
            --divider-border-width: 2px;
          }

          .elementor-664
            .elementor-element.elementor-element-5137a9f
            .elementor-divider-separator {
            width: 40px;
            margin: 0 auto;
            margin-left: 0;
          }

          .elementor-664
            .elementor-element.elementor-element-5137a9f
            .elementor-divider {
            text-align: left;
            padding-top: 5px;
            padding-bottom: 5px;
          }

          .elementor-664
            .elementor-element.elementor-element-4ee237f
            .elementor-icon-list-items:not(.elementor-inline-items)
            .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(12px / 2);
          }

          .elementor-664
            .elementor-element.elementor-element-4ee237f
            .elementor-icon-list-items:not(.elementor-inline-items)
            .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(12px / 2);
          }

          .elementor-664
            .elementor-element.elementor-element-4ee237f
            .elementor-icon-list-items.elementor-inline-items
            .elementor-icon-list-item {
            margin-right: calc(12px / 2);
            margin-left: calc(12px / 2);
          }

          .elementor-664
            .elementor-element.elementor-element-4ee237f
            .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-12px / 2);
            margin-left: calc(-12px / 2);
          }

          body.rtl
            .elementor-664
            .elementor-element.elementor-element-4ee237f
            .elementor-icon-list-items.elementor-inline-items
            .elementor-icon-list-item:after {
            left: calc(-12px / 2);
          }

          body:not(.rtl)
            .elementor-664
            .elementor-element.elementor-element-4ee237f
            .elementor-icon-list-items.elementor-inline-items
            .elementor-icon-list-item:after {
            right: calc(-12px / 2);
          }

          .elementor-664
            .elementor-element.elementor-element-4ee237f
            .elementor-icon-list-icon
            i {
            color: var(--e-global-color-accent);
            transition: color 0.3s;
          }

          .elementor-664
            .elementor-element.elementor-element-4ee237f
            .elementor-icon-list-icon
            svg {
            fill: var(--e-global-color-accent);
            transition: fill 0.3s;
          }

          .elementor-664 .elementor-element.elementor-element-4ee237f {
            --e-icon-list-icon-size: 0px;
            --e-icon-list-icon-align: left;
            --e-icon-list-icon-margin: 0
              calc(var(--e-icon-list-icon-size, 1em) * 0.25) 0 0;
            --icon-vertical-offset: 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-4ee237f
            .elementor-icon-list-icon {
            padding-right: 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-4ee237f
            .elementor-icon-list-item
            > .elementor-icon-list-text,
          .elementor-664
            .elementor-element.elementor-element-4ee237f
            .elementor-icon-list-item
            > a {
            font-family: var(--e-global-typography-9419a47-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-9419a47-font-size);
            font-weight: var(--e-global-typography-9419a47-font-weight);
            line-height: var(--e-global-typography-9419a47-line-height);
            letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
            word-spacing: var(--e-global-typography-9419a47-word-spacing);
          }

          .elementor-664
            .elementor-element.elementor-element-4ee237f
            .elementor-icon-list-text {
            color: var(--e-global-color-026a526);
            transition: color 0.3s;
          }

          .elementor-664
            .elementor-element.elementor-element-4ee237f
            .elementor-icon-list-item:hover
            .elementor-icon-list-text {
            color: var(--e-global-color-secondary);
          }

          .elementor-664
            .elementor-element.elementor-element-49f02ca
            > .elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-54b8cca
            .elementor-heading-title {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-cf4ee9a-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-cf4ee9a-font-size);
            font-weight: var(--e-global-typography-cf4ee9a-font-weight);
            text-transform: var(--e-global-typography-cf4ee9a-text-transform);
            line-height: var(--e-global-typography-cf4ee9a-line-height);
            letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
            word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
          }

          .elementor-664
            .elementor-element.elementor-element-54b8cca
            > .elementor-widget-container {
            margin: 0px 0px -15px 0px;
          }

          .elementor-664 .elementor-element.elementor-element-5e12708 {
            --divider-border-style: solid;
            --divider-color: var(--e-global-color-accent);
            --divider-border-width: 2px;
          }

          .elementor-664
            .elementor-element.elementor-element-5e12708
            .elementor-divider-separator {
            width: 40px;
            margin: 0 auto;
            margin-left: 0;
          }

          .elementor-664
            .elementor-element.elementor-element-5e12708
            .elementor-divider {
            text-align: left;
            padding-top: 5px;
            padding-bottom: 5px;
          }

          .elementor-664
            .elementor-element.elementor-element-f895e5e
            .elementor-icon-list-items:not(.elementor-inline-items)
            .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(12px / 2);
          }

          .elementor-664
            .elementor-element.elementor-element-f895e5e
            .elementor-icon-list-items:not(.elementor-inline-items)
            .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(12px / 2);
          }

          .elementor-664
            .elementor-element.elementor-element-f895e5e
            .elementor-icon-list-items.elementor-inline-items
            .elementor-icon-list-item {
            margin-right: calc(12px / 2);
            margin-left: calc(12px / 2);
          }

          .elementor-664
            .elementor-element.elementor-element-f895e5e
            .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-12px / 2);
            margin-left: calc(-12px / 2);
          }

          body.rtl
            .elementor-664
            .elementor-element.elementor-element-f895e5e
            .elementor-icon-list-items.elementor-inline-items
            .elementor-icon-list-item:after {
            left: calc(-12px / 2);
          }

          body:not(.rtl)
            .elementor-664
            .elementor-element.elementor-element-f895e5e
            .elementor-icon-list-items.elementor-inline-items
            .elementor-icon-list-item:after {
            right: calc(-12px / 2);
          }

          .elementor-664
            .elementor-element.elementor-element-f895e5e
            .elementor-icon-list-icon
            i {
            color: var(--e-global-color-accent);
            transition: color 0.3s;
          }

          .elementor-664
            .elementor-element.elementor-element-f895e5e
            .elementor-icon-list-icon
            svg {
            fill: var(--e-global-color-accent);
            transition: fill 0.3s;
          }

          .elementor-664 .elementor-element.elementor-element-f895e5e {
            --e-icon-list-icon-size: 0px;
            --e-icon-list-icon-align: left;
            --e-icon-list-icon-margin: 0
              calc(var(--e-icon-list-icon-size, 1em) * 0.25) 0 0;
            --icon-vertical-offset: 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-f895e5e
            .elementor-icon-list-icon {
            padding-right: 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-f895e5e
            .elementor-icon-list-item
            > .elementor-icon-list-text,
          .elementor-664
            .elementor-element.elementor-element-f895e5e
            .elementor-icon-list-item
            > a {
            font-family: var(--e-global-typography-9419a47-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-9419a47-font-size);
            font-weight: var(--e-global-typography-9419a47-font-weight);
            line-height: var(--e-global-typography-9419a47-line-height);
            letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
            word-spacing: var(--e-global-typography-9419a47-word-spacing);
          }

          .elementor-664
            .elementor-element.elementor-element-f895e5e
            .elementor-icon-list-text {
            color: var(--e-global-color-026a526);
            transition: color 0.3s;
          }

          .elementor-664
            .elementor-element.elementor-element-f895e5e
            .elementor-icon-list-item:hover
            .elementor-icon-list-text {
            color: var(--e-global-color-secondary);
          }

          .elementor-664
            .elementor-element.elementor-element-4b22ffd
            > .elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-df1c04d
            .elementor-heading-title {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-cf4ee9a-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-cf4ee9a-font-size);
            font-weight: var(--e-global-typography-cf4ee9a-font-weight);
            text-transform: var(--e-global-typography-cf4ee9a-text-transform);
            line-height: var(--e-global-typography-cf4ee9a-line-height);
            letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
            word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
          }

          .elementor-664
            .elementor-element.elementor-element-df1c04d
            > .elementor-widget-container {
            margin: 0px 0px -15px 0px;
          }

          .elementor-664 .elementor-element.elementor-element-692105f {
            --divider-border-style: solid;
            --divider-color: var(--e-global-color-accent);
            --divider-border-width: 2px;
          }

          .elementor-664
            .elementor-element.elementor-element-692105f
            .elementor-divider-separator {
            width: 40px;
            margin: 0 auto;
            margin-left: 0;
          }

          .elementor-664
            .elementor-element.elementor-element-692105f
            .elementor-divider {
            text-align: left;
            padding-top: 5px;
            padding-bottom: 5px;
          }

          .elementor-664 .elementor-element.elementor-element-f415c08 {
            color: var(--e-global-color-026a526);
            font-family: var(--e-global-typography-9419a47-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-9419a47-font-size);
            font-weight: var(--e-global-typography-9419a47-font-weight);
            line-height: var(--e-global-typography-9419a47-line-height);
            letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
            word-spacing: var(--e-global-typography-9419a47-word-spacing);
          }

          .elementor-664
            .elementor-element.elementor-element-658e2bf
            .elementor-icon-box-wrapper {
            text-align: left;
          }

          .elementor-664
            .elementor-element.elementor-element-658e2bf.elementor-view-stacked
            .elementor-icon {
            background-color: var(--e-global-color-accent);
            fill: var(--e-global-color-secondary);
            color: var(--e-global-color-secondary);
          }

          .elementor-664
            .elementor-element.elementor-element-658e2bf.elementor-view-framed
            .elementor-icon,
          .elementor-664
            .elementor-element.elementor-element-658e2bf.elementor-view-default
            .elementor-icon {
            fill: var(--e-global-color-accent);
            color: var(--e-global-color-accent);
            border-color: var(--e-global-color-accent);
          }

          .elementor-664
            .elementor-element.elementor-element-658e2bf.elementor-view-framed
            .elementor-icon {
            background-color: var(--e-global-color-secondary);
          }

          .elementor-664 .elementor-element.elementor-element-658e2bf {
            --icon-box-icon-margin: 15px;
            width: auto;
            max-width: auto;
          }

          .elementor-664
            .elementor-element.elementor-element-658e2bf
            .elementor-icon {
            font-size: 25px;
            padding: 15px;
            border-radius: 0px 0px 0px 0px;
          }

          .elementor-664
            .elementor-element.elementor-element-658e2bf
            .elementor-icon-box-title {
            margin-bottom: -5px;
            color: var(--e-global-color-secondary);
          }

          .elementor-664
            .elementor-element.elementor-element-658e2bf
            .elementor-icon-box-title,
          .elementor-664
            .elementor-element.elementor-element-658e2bf
            .elementor-icon-box-title
            a {
            font-family: var(--e-global-typography-cf4ee9a-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-cf4ee9a-font-size);
            font-weight: var(--e-global-typography-cf4ee9a-font-weight);
            text-transform: var(--e-global-typography-cf4ee9a-text-transform);
            line-height: var(--e-global-typography-cf4ee9a-line-height);
            letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
            word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
          }

          .elementor-664
            .elementor-element.elementor-element-658e2bf
            .elementor-icon-box-description {
            color: var(--e-global-color-026a526);
            font-family: var(--e-global-typography-9419a47-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-9419a47-font-size);
            font-weight: var(--e-global-typography-9419a47-font-weight);
            line-height: var(--e-global-typography-9419a47-line-height);
            letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
            word-spacing: var(--e-global-typography-9419a47-word-spacing);
          }

          .elementor-664 .elementor-element.elementor-element-8941343 {
            text-align: center;
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-9419a47-font-family),
              Sans-serif;
            font-size: var(--e-global-typography-9419a47-font-size);
            font-weight: var(--e-global-typography-9419a47-font-weight);
            line-height: var(--e-global-typography-9419a47-line-height);
            letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
            word-spacing: var(--e-global-typography-9419a47-word-spacing);
          }

          @media (max-width: 1024px) {
            .elementor-664 .elementor-element.elementor-element-fc9ec3e {
              padding: 0px 10px 10px 10px;
            }

            .elementor-664 .elementor-element.elementor-element-a46aed8 {
              padding: 80px 40px 80px 40px;
            }

            .elementor-664
              .elementor-element.elementor-element-b7dc838
              > .elementor-element-populated {
              margin: 0px 50px 0px 0px;
              --e-column-margin-right: 50px;
              --e-column-margin-left: 0px;
            }

            .elementor-664 .elementor-element.elementor-element-6eea84f {
              text-align: left;
            }

            .elementor-664 .elementor-element.elementor-element-6eea84f img {
              width: 180px;
            }

            .elementor-664
              .elementor-element.elementor-element-6eea84f
              > .elementor-widget-container {
              margin: 0px 0px 0px 0px;
            }

            .elementor-664
              .elementor-element.elementor-element-040b25b
              .jeg-elementor-kit.jkit-heading
              .heading-title {
              font-size: var(--e-global-typography-cf4ee9a-font-size);
              line-height: var(--e-global-typography-cf4ee9a-line-height);
              letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
              word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-040b25b
              .jeg-elementor-kit.jkit-heading
              .heading-section-description {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-a850d18
              .jeg-elementor-kit.jkit-heading
              .heading-title {
              font-size: var(--e-global-typography-cf4ee9a-font-size);
              line-height: var(--e-global-typography-cf4ee9a-line-height);
              letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
              word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-a850d18
              .jeg-elementor-kit.jkit-heading
              .heading-section-description {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-4a223dc
              > .elementor-element-populated {
              margin: 0px 0px 0px 40px;
              --e-column-margin-right: 0px;
              --e-column-margin-left: 40px;
            }

            .elementor-664
              .elementor-element.elementor-element-e544980
              .elementor-heading-title {
              font-size: var(--e-global-typography-cf4ee9a-font-size);
              line-height: var(--e-global-typography-cf4ee9a-line-height);
              letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
              word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-4ee237f
              .elementor-icon-list-item
              > .elementor-icon-list-text,
            .elementor-664
              .elementor-element.elementor-element-4ee237f
              .elementor-icon-list-item
              > a {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-49f02ca
              > .elementor-element-populated {
              margin: 40px 0px 0px 0px;
              --e-column-margin-right: 0px;
              --e-column-margin-left: 0px;
            }

            .elementor-664
              .elementor-element.elementor-element-54b8cca
              .elementor-heading-title {
              font-size: var(--e-global-typography-cf4ee9a-font-size);
              line-height: var(--e-global-typography-cf4ee9a-line-height);
              letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
              word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-f895e5e
              .elementor-icon-list-item
              > .elementor-icon-list-text,
            .elementor-664
              .elementor-element.elementor-element-f895e5e
              .elementor-icon-list-item
              > a {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-4b22ffd
              > .elementor-element-populated {
              margin: 40px 0px 0px 40px;
              --e-column-margin-right: 0px;
              --e-column-margin-left: 40px;
            }

            .elementor-664
              .elementor-element.elementor-element-df1c04d
              .elementor-heading-title {
              font-size: var(--e-global-typography-cf4ee9a-font-size);
              line-height: var(--e-global-typography-cf4ee9a-line-height);
              letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
              word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            }

            .elementor-664 .elementor-element.elementor-element-f415c08 {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-658e2bf
              .elementor-icon-box-wrapper {
              text-align: left;
            }

            .elementor-664
              .elementor-element.elementor-element-658e2bf
              .elementor-icon-box-title,
            .elementor-664
              .elementor-element.elementor-element-658e2bf
              .elementor-icon-box-title
              a {
              font-size: var(--e-global-typography-cf4ee9a-font-size);
              line-height: var(--e-global-typography-cf4ee9a-line-height);
              letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
              word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-658e2bf
              .elementor-icon-box-description {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-658e2bf
              > .elementor-widget-container {
              margin: 0px 0px 0px 0px;
            }

            .elementor-664 .elementor-element.elementor-element-8941343 {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }
          }

          @media (max-width: 767px) {
            .elementor-664 .elementor-element.elementor-element-fc9ec3e {
              padding: 0px 5px 15px 5px;
            }

            .elementor-664
              .elementor-element.elementor-element-52a93bb.elementor-column
              > .elementor-widget-wrap {
              justify-content: flex-end;
            }

            .elementor-664
              .elementor-element.elementor-element-d042169
              > .elementor-widget-container {
              margin: 0px 30px -5px 0px;
            }

            .elementor-664 .elementor-element.elementor-element-a46aed8 {
              padding: 50px 25px 50px 25px;
            }

            .elementor-664
              .elementor-element.elementor-element-b7dc838
              > .elementor-element-populated {
              margin: 0px 0px 0px 0px;
              --e-column-margin-right: 0px;
              --e-column-margin-left: 0px;
              padding: 0px 0px 0px 0px;
            }

            .elementor-664 .elementor-element.elementor-element-6eea84f {
              text-align: left;
            }

            .elementor-664 .elementor-element.elementor-element-6eea84f img {
              width: 60%;
            }

            .elementor-664
              .elementor-element.elementor-element-040b25b
              .jeg-elementor-kit.jkit-heading
              .heading-title {
              font-size: var(--e-global-typography-cf4ee9a-font-size);
              line-height: var(--e-global-typography-cf4ee9a-line-height);
              letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
              word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-040b25b
              .jeg-elementor-kit.jkit-heading
              .heading-section-description {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-a850d18
              .jeg-elementor-kit.jkit-heading
              .heading-title {
              font-size: var(--e-global-typography-cf4ee9a-font-size);
              line-height: var(--e-global-typography-cf4ee9a-line-height);
              letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
              word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-a850d18
              .jeg-elementor-kit.jkit-heading
              .heading-section-description {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-4a223dc
              > .elementor-element-populated {
              margin: 40px 0px 0px 0px;
              --e-column-margin-right: 0px;
              --e-column-margin-left: 0px;
              padding: 0px 0px 0px 0px;
            }

            .elementor-664
              .elementor-element.elementor-element-e544980
              .elementor-heading-title {
              font-size: var(--e-global-typography-cf4ee9a-font-size);
              line-height: var(--e-global-typography-cf4ee9a-line-height);
              letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
              word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-4ee237f
              .elementor-icon-list-item
              > .elementor-icon-list-text,
            .elementor-664
              .elementor-element.elementor-element-4ee237f
              .elementor-icon-list-item
              > a {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-49f02ca
              > .elementor-element-populated {
              margin: 40px 0px 0px 0px;
              --e-column-margin-right: 0px;
              --e-column-margin-left: 0px;
            }

            .elementor-664
              .elementor-element.elementor-element-54b8cca
              .elementor-heading-title {
              font-size: var(--e-global-typography-cf4ee9a-font-size);
              line-height: var(--e-global-typography-cf4ee9a-line-height);
              letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
              word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-f895e5e
              .elementor-icon-list-item
              > .elementor-icon-list-text,
            .elementor-664
              .elementor-element.elementor-element-f895e5e
              .elementor-icon-list-item
              > a {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-4b22ffd
              > .elementor-element-populated {
              margin: 40px 0px 0px 0px;
              --e-column-margin-right: 0px;
              --e-column-margin-left: 0px;
              padding: 0px 0px 0px 0px;
            }

            .elementor-664
              .elementor-element.elementor-element-df1c04d
              .elementor-heading-title {
              font-size: var(--e-global-typography-cf4ee9a-font-size);
              line-height: var(--e-global-typography-cf4ee9a-line-height);
              letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
              word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            }

            .elementor-664 .elementor-element.elementor-element-f415c08 {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-658e2bf
              .elementor-icon-box-wrapper {
              text-align: left;
            }

            .elementor-664
              .elementor-element.elementor-element-658e2bf
              .elementor-icon {
              font-size: 25px;
              padding: 18px;
            }

            .elementor-664
              .elementor-element.elementor-element-658e2bf
              .elementor-icon-box-title {
              margin-bottom: 0px;
            }

            .elementor-664
              .elementor-element.elementor-element-658e2bf
              .elementor-icon-box-title,
            .elementor-664
              .elementor-element.elementor-element-658e2bf
              .elementor-icon-box-title
              a {
              font-size: var(--e-global-typography-cf4ee9a-font-size);
              line-height: var(--e-global-typography-cf4ee9a-line-height);
              letter-spacing: var(--e-global-typography-cf4ee9a-letter-spacing);
              word-spacing: var(--e-global-typography-cf4ee9a-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-658e2bf
              .elementor-icon-box-description {
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }

            .elementor-664
              .elementor-element.elementor-element-658e2bf
              > .elementor-widget-container {
              margin: 0px 0px 0px 0px;
            }

            .elementor-664 .elementor-element.elementor-element-658e2bf {
              width: 100%;
              max-width: 100%;
            }

            .elementor-664 .elementor-element.elementor-element-8941343 {
              text-align: center;
              font-size: var(--e-global-typography-9419a47-font-size);
              line-height: var(--e-global-typography-9419a47-line-height);
              letter-spacing: var(--e-global-typography-9419a47-letter-spacing);
              word-spacing: var(--e-global-typography-9419a47-word-spacing);
            }
          }

          @media (min-width: 768px) {
            .elementor-664 .elementor-element.elementor-element-b7dc838 {
              width: 33%;
            }

            .elementor-664 .elementor-element.elementor-element-4a223dc {
              width: 22.584%;
            }

            .elementor-664 .elementor-element.elementor-element-49f02ca {
              width: 21.755%;
            }

            .elementor-664 .elementor-element.elementor-element-4b22ffd {
              width: 22.639%;
            }
          }

          @media (max-width: 1024px) and (min-width: 768px) {
            .elementor-664 .elementor-element.elementor-element-b7dc838 {
              width: 50%;
            }

            .elementor-664 .elementor-element.elementor-element-4a223dc {
              width: 50%;
            }

            .elementor-664 .elementor-element.elementor-element-49f02ca {
              width: 50%;
            }

            .elementor-664 .elementor-element.elementor-element-4b22ffd {
              width: 50%;
            }
          }
        </style>
				<div
					data-elementor-type="page"
					data-elementor-id="664"
					class="elementor elementor-664">
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-fc9ec3e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="fc9ec3e"
						data-element_type="section"
						data-settings='{"background_background":"classic"}'>
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div
								class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-52a93bb"
								data-id="52a93bb"
								data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div
										class="elementor-element elementor-element-d042169 elementor-view-stacked elementor-widget__width-auto elementor-shape-circle elementor-widget elementor-widget-icon"
										data-id="d042169"
										data-element_type="widget"
										id="header"
										data-widget_type="icon.default">
										<div class="elementor-widget-container">
											<div class="elementor-icon-wrapper">
												<a class="elementor-icon" href="#header">
													<i
														aria-hidden="true"
														class="jki jki-up-arrow-light"></i>
												</a>
											</div>
										</div>
									</div>
									<section
										class="elementor-section elementor-inner-section elementor-element elementor-element-a46aed8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="a46aed8"
										data-element_type="section"
										data-settings='{"background_background":"classic"}'>
										<div class="elementor-container elementor-column-gap-no">
											<div
												class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-b7dc838"
												data-id="b7dc838"
												data-element_type="column"
												data-settings='{"background_background":"classic"}'>
												<div
													class="elementor-widget-wrap elementor-element-populated">
													<div
														class="elementor-element elementor-element-6eea84f elementor-widget elementor-widget-image"
														data-id="6eea84f"
														data-element_type="widget"
														data-widget_type="image.default">
														<a
															href="index.html"
															class="elementor-widget-container">
															<img
																width="800"
																height="267"
																src="../wp-content/uploads/sites/323/2023/01/petrol-logo2-e1672720054223.svg"
																class="attachment-full size-full wp-image-260"
																alt
																decoding="async"
																loading="lazy"
																sizes="(max-width: 900px) 100vw, 900px" />
														</a>
													</div>
													<div
														class="elementor-element elementor-element-040b25b elementor-widget elementor-widget-jkit_heading"
														data-id="040b25b"
														data-element_type="widget"
														data-widget_type="jkit_heading.default">
														<div class="elementor-widget-container">
															<div
																class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_159_32_6756cb6e76cc1">
																<div
																	class="heading-section-title display-inline-block">
																	<h2 class="heading-title">Escritório</h2>
																</div>
																<div class="heading-section-description">
																	Luanda, Cabinda, Soyo e Lobito. Expandindo em
																	toda Angola.
																</div>
															</div>
														</div>
													</div>
													<div
														class="elementor-element elementor-element-a850d18 elementor-widget elementor-widget-jkit_heading"
														data-id="a850d18"
														data-element_type="widget"
														data-widget_type="jkit_heading.default">
														<div class="elementor-widget-container">
															<div
																class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_159_33_6756cb6e782b3">
																<div
																	class="heading-section-title display-inline-block">
																	<h2 class="heading-title">Apoiar</h2>
																</div>
																<div class="heading-section-description">
																	oil.gas-services@ipl.ao
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div
												class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4a223dc"
												data-id="4a223dc"
												data-element_type="column">
												<div
													class="elementor-widget-wrap elementor-element-populated">
													<div
														class="elementor-element elementor-element-e544980 elementor-widget elementor-widget-heading"
														data-id="e544980"
														data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h4
																class="elementor-heading-title elementor-size-default">
																Nossos Serviços
															</h4>
														</div>
													</div>
													<div
														class="elementor-element elementor-element-5137a9f elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
														data-id="5137a9f"
														data-element_type="widget"
														data-widget_type="divider.default">
														<div class="elementor-widget-container">
															<div class="elementor-divider">
																<span class="elementor-divider-separator">
																</span>
															</div>
														</div>
													</div>
													<div
														class="elementor-element elementor-element-4ee237f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
														data-id="4ee237f"
														data-element_type="widget"
														data-widget_type="icon-list.default">
														<div class="elementor-widget-container">
															<ul class="elementor-icon-list-items">
																<li class="elementor-icon-list-item">
																	<a
																		href="../service-details/gruas-e-geradores.html">
																		<span class="elementor-icon-list-icon">
																			<i
																				aria-hidden="true"
																				class="fas fa-chevron-right"></i>
																		</span>
																		<span class="elementor-icon-list-text">Gruas - Gruas
																			geradores</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="../service-details/andaimes.html">
																		<span class="elementor-icon-list-icon">
																			<i
																				aria-hidden="true"
																				class="fas fa-chevron-right"></i>
																		</span>
																		<span class="elementor-icon-list-text">⁠Andaimes</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a
																		href="../service-details/limpeza-geral-e-desinfestacao.html">
																		<span class="elementor-icon-list-icon">
																			<i
																				aria-hidden="true"
																				class="fas fa-chevron-right"></i>
																		</span>
																		<span class="elementor-icon-list-text">Limpeza geral e
																			desinfestação</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a
																		href="../service-details/pintura-industrial.html">
																		<span class="elementor-icon-list-icon">
																			<i
																				aria-hidden="true"
																				class="fas fa-chevron-right"></i>
																		</span>
																		<span class="elementor-icon-list-text">Pintura
																		</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a
																		href="../service-details/soldadura-industrial.html">
																		<span class="elementor-icon-list-icon">
																			<i
																				aria-hidden="true"
																				class="fas fa-chevron-right"></i>
																		</span>
																		<span class="elementor-icon-list-text">Soldadura
																			Industrial</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div
												class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-49f02ca"
												data-id="49f02ca"
												data-element_type="column">
												<div
													class="elementor-widget-wrap elementor-element-populated">
													<div
														class="elementor-element elementor-element-54b8cca elementor-widget elementor-widget-heading"
														data-id="54b8cca"
														data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h4
																class="elementor-heading-title elementor-size-default">
																Links rápidos
															</h4>
														</div>
													</div>
													<div
														class="elementor-element elementor-element-5e12708 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
														data-id="5e12708"
														data-element_type="widget"
														data-widget_type="divider.default">
														<div class="elementor-widget-container">
															<div class="elementor-divider">
																<span class="elementor-divider-separator">
																</span>
															</div>
														</div>
													</div>
													<div
														class="elementor-element elementor-element-f895e5e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
														data-id="f895e5e"
														data-element_type="widget"
														data-widget_type="icon-list.default">
														<div class="elementor-widget-container">
															<ul class="elementor-icon-list-items">
																<li class="elementor-icon-list-item">
																	<a href="contact/index.html">
																		<span class="elementor-icon-list-icon">
																			<i
																				aria-hidden="true"
																				class="fas fa-chevron-right"></i>
																		</span>
																		<span class="elementor-icon-list-text">Apoiar</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="contact/index.html">
																		<span class="elementor-icon-list-icon">
																			<i
																				aria-hidden="true"
																				class="fas fa-chevron-right"></i>
																		</span>
																		<span class="elementor-icon-list-text">Contato</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div
												class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4b22ffd"
												data-id="4b22ffd"
												data-element_type="column">
												<div
													class="elementor-widget-wrap elementor-element-populated">
													<div
														class="elementor-element elementor-element-df1c04d elementor-widget elementor-widget-heading"
														data-id="df1c04d"
														data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h4
																class="elementor-heading-title elementor-size-default">
																Entre em contacto
															</h4>
														</div>
													</div>
													<div
														class="elementor-element elementor-element-692105f elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
														data-id="692105f"
														data-element_type="widget"
														data-widget_type="divider.default">
														<div class="elementor-widget-container">
															<div class="elementor-divider">
																<span class="elementor-divider-separator">
																</span>
															</div>
														</div>
													</div>
													<div
														class="elementor-element elementor-element-f415c08 elementor-widget elementor-widget-text-editor"
														data-id="f415c08"
														data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															Obter um diagnóstico preciso pode ser uma das
															experiências mais impactantes que você pode ter.
														</div>
													</div>
													<div
														class="elementor-element elementor-element-658e2bf elementor-position-left elementor-vertical-align-bottom elementor-widget__width-auto elementor-view-stacked elementor-shape-square elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-widget elementor-widget-icon-box"
														data-id="658e2bf"
														data-element_type="widget"
														data-widget_type="icon-box.default">
														<div class="elementor-widget-container">
															<div class="elementor-icon-box-wrapper">
																<div class="elementor-icon-box-icon">
																	<span
																		class="elementor-icon elementor-animation-">
																		<i
																			aria-hidden="true"
																			class="jki jki-phone-call-line"></i>
																	</span>
																</div>
																<div class="elementor-icon-box-content">
																	<h3 class="elementor-icon-box-title">
																		<span> Mais informações </span>
																	</h3>
																	<p class="elementor-icon-box-description">
																		924 716 762 / 921 700 818
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<div
										class="elementor-element elementor-element-8941343 elementor-widget elementor-widget-text-editor"
										data-id="8941343"
										data-element_type="widget"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											Copyright © 2024 Nest Angola
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</footer>
		</div>
		<!-- #page -->
		<link
			rel="stylesheet"
			id="jeg-dynamic-style-css"
			href="../wp-content/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles6f3e.css?ver=1.3.0"
			media="all" />
		<link
			rel="stylesheet"
			id="elementor-post-661-css"
			href="../wp-content/uploads/sites/323/elementor/css/post-6619264.css?ver=1700559812"
			media="all" />
		<link
			rel="stylesheet"
			id="elementor-post-1014-css"
			href="../wp-content/uploads/sites/323/elementor/css/post-1014b5c1.css?ver=1700570066"
			media="all" />
		<link
			rel="stylesheet"
			id="metform-ui-css"
			href="../wp-content/plugins/metform/public/assets/css/metform-ui9e95.css?ver=3.8.0"
			media="all" />
		<link
			rel="stylesheet"
			id="metform-style-css"
			href="../wp-content/plugins/metform/public/assets/css/style9e95.css?ver=3.8.0"
			media="all" />
		<link
			rel="stylesheet"
			id="elementor-post-664-css"
			href="../wp-content/uploads/sites/323/elementor/css/post-6649264.css?ver=1700559812"
			media="all" />
		<link
			rel="stylesheet"
			id="e-animations-css"
			href="../wp-content/plugins/elementor/assets/lib/animations/animations.min8864.css?ver=3.17.3"
			media="all" />
		<script
			src="../wp-content/themes/hello-elementor/assets/js/hello-frontend.min8a54.js?ver=1.0.0"
			id="hello-theme-frontend-js"></script>
		<script
			src="../wp-content/plugins/elementor/assets/js/webpack.runtime.min8864.js?ver=3.17.3"
			id="elementor-webpack-runtime-js"></script>
		<script
			src="../wp-content/plugins/elementor/assets/js/frontend-modules.min8864.js?ver=3.17.3"
			id="elementor-frontend-modules-js"></script>
		<script
			src="../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2"
			id="elementor-waypoints-js"></script>
		<script
			src="../wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2"
			id="jquery-ui-core-js"></script>
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
          a11yCarouselWrapperAriaLabel:
            "Carousel | Horizontal scrolling: Arrow Left & Right",
          a11yCarouselPrevSlideMessage: "Previous slide",
          a11yCarouselNextSlideMessage: "Next slide",
          a11yCarouselFirstSlideMessage: "This is the first slide",
          a11yCarouselLastSlideMessage: "This is the last slide",
          a11yCarouselPaginationBulletMessage: "Go to slide",
        },
        is_rtl: false,
        breakpoints: {
          xs: 0,
          sm: 480,
          md: 768,
          lg: 1025,
          xl: 1440,
          xxl: 1600,
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
        version: "3.17.3",
        is_static: false,
        experimentalFeatures: {
          e_dom_optimization: true,
          e_optimized_assets_loading: true,
          e_optimized_css_loading: true,
          additional_custom_breakpoints: true,
          "hello-theme-header-footer": true,
          "landing-pages": true,
        },
        urls: {
          assets:
            "https:\/\/templatekit.jegtheme.com\/petrol\/wp-content\/plugins\/elementor\/assets\/",
        },
        swiperClass: "swiper-container",
        settings: {
          page: [],
          editorPreferences: [],
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
          id: 811,
          title: "Contact%20%E2%80%93%20Petrol",
          excerpt: "",
          featuredImage: false,
        },
      };
    </script>
		<script
			src="../wp-content/plugins/elementor/assets/js/frontend.min8864.js?ver=3.17.3"
			id="elementor-frontend-js"></script>
		<script id="elementor-frontend-js-after">
      var jkit_ajax_url = "../indexe2f2.html?jkit-ajax-request=jkit_elements",
        jkit_nonce = "9bfe41aaa2";
    </script>
		<script
			src="../wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-element61da.js?ver=2.6.2"
			id="jkit-sticky-element-js"></script>
		<script
			src="../wp-content/plugins/jeg-elementor-kit/assets/js/elements/nav-menu61da.js?ver=2.6.2"
			id="jkit-element-navmenu-js"></script>
		<script
			src="../wp-content/plugins/metform/public/assets/js/htm9e95.js?ver=3.8.0"
			id="htm-js"></script>
		<script
			src="../wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2"
			id="wp-polyfill-inert-js"></script>
		<script
			src="../wp-includes/js/dist/vendor/regenerator-runtime.min6c85.js?ver=0.14.0"
			id="regenerator-runtime-js"></script>
		<script
			src="../wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0"
			id="wp-polyfill-js"></script>
		<script
			src="../wp-includes/js/dist/vendor/react.min7a3b.js?ver=18.2.0"
			id="react-js"></script>
		<script
			src="../wp-includes/js/dist/vendor/react-dom.min7a3b.js?ver=18.2.0"
			id="react-dom-js"></script>
		<script
			src="../wp-includes/js/dist/escape-html.min0311.js?ver=03e27a7b6ae14f7afaa6"
			id="wp-escape-html-js"></script>
		<script
			src="../wp-includes/js/dist/element.min0eb1.js?ver=ed1c7604880e8b574b40"
			id="wp-element-js"></script>
		<script id="metform-app-js-extra">
      var mf = {
        postType: "page",
        restURI:
          "https:\/\/templatekit.jegtheme.com\/petrol\/wp-json\/metform\/v1\/forms\/views\/",
        minMsg1: "Minimum length should be ",
        Msg2: " character long.",
        maxMsg1: "Maximum length should be ",
        maxNum: "Maximum number should be ",
        minNum: "Minimum number should be ",
      };
    </script>
		<script
			src="../wp-content/plugins/metform/public/assets/js/app9e95.js?ver=3.8.0"
			id="metform-app-js"></script>
	</body>
</html>
