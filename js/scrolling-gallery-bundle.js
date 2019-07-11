!function(e) {
    function t(i) {
        if (n[i])
            return n[i].exports;
        var r = n[i] = {
            exports: {},
            id: i,
            loaded: !1
        };
        return e[i].call(r.exports, r, r.exports, t),
        r.loaded = !0,
        r.exports
    }
    var n = {};
    return t.m = e,
    t.c = n,
    t.p = "",
    t(0)
}({
    0: function(e, t, n) {
        "use strict";
        Function.prototype.bind = Function.prototype.bind || function(e) {
            var t = this
              , n = Array.prototype.slice.call(arguments, 1);
            return function() {
                return t.apply(e, n.concat(Array.prototype.slice.call(arguments)))
            }
        }
        ;
        var i = (n(208),
        n(212))
          , r = JSON.parse($("#scrolling-gallery-json").html());
        "album"in r && "images"in r.album && r.album.images.length && (i.prepareDOM(r, {
            $body: $("body"),
            $win: $(window),
            $page: $("#vb_page")
        }),
        i.bindEvents(r.settings),
        i.applySettings(r.settings),
        i.setAlbum(r.album))
    },
    1: function(e, t, n) {
        (function(t) {
            for (var i = n(2), r = "undefined" == typeof window ? t : window, o = ["moz", "webkit"], a = "AnimationFrame", s = r["request" + a], c = r["cancel" + a] || r["cancelRequest" + a], u = 0; !s && u < o.length; u++)
                s = r[o[u] + "Request" + a],
                c = r[o[u] + "Cancel" + a] || r[o[u] + "CancelRequest" + a];
            if (!s || !c) {
                var l = 0
                  , d = 0
                  , f = []
                  , h = 1e3 / 60;
                s = function(e) {
                    if (0 === f.length) {
                        var t = i()
                          , n = Math.max(0, h - (t - l));
                        l = n + t,
                        setTimeout(function() {
                            var e = f.slice(0);
                            f.length = 0;
                            for (var t = 0; t < e.length; t++)
                                if (!e[t].cancelled)
                                    try {
                                        e[t].callback(l)
                                    } catch (e) {
                                        setTimeout(function() {
                                            throw e
                                        }, 0)
                                    }
                        }, Math.round(n))
                    }
                    return f.push({
                        handle: ++d,
                        callback: e,
                        cancelled: !1
                    }),
                    d
                }
                ,
                c = function(e) {
                    for (var t = 0; t < f.length; t++)
                        f[t].handle === e && (f[t].cancelled = !0)
                }
            }
            e.exports = function(e) {
                return s.call(r, e)
            }
            ,
            e.exports.cancel = function() {
                c.apply(r, arguments)
            }
            ,
            e.exports.polyfill = function() {
                r.requestAnimationFrame = s,
                r.cancelAnimationFrame = c
            }
        }
        ).call(t, function() {
            return this
        }())
    },
    2: function(e, t, n) {
        (function(t) {
            (function() {
                var n, i, r;
                "undefined" != typeof performance && null !== performance && performance.now ? e.exports = function() {
                    return performance.now()
                }
                : "undefined" != typeof t && null !== t && t.hrtime ? (e.exports = function() {
                    return (n() - r) / 1e6
                }
                ,
                i = t.hrtime,
                n = function() {
                    var e;
                    return e = i(),
                    1e9 * e[0] + e[1]
                }
                ,
                r = n()) : Date.now ? (e.exports = function() {
                    return Date.now() - r
                }
                ,
                r = Date.now()) : (e.exports = function() {
                    return (new Date).getTime() - r
                }
                ,
                r = (new Date).getTime())
            }
            ).call(this)
        }
        ).call(t, n(3))
    },
    3: function(e) {
        function t() {
            throw new Error("setTimeout has not been defined")
        }
        function n() {
            throw new Error("clearTimeout has not been defined")
        }
        function i(e) {
            if (u === setTimeout)
                return setTimeout(e, 0);
            if ((u === t || !u) && setTimeout)
                return u = setTimeout,
                setTimeout(e, 0);
            try {
                return u(e, 0)
            } catch (t) {
                try {
                    return u.call(null, e, 0)
                } catch (t) {
                    return u.call(this, e, 0)
                }
            }
        }
        function r(e) {
            if (l === clearTimeout)
                return clearTimeout(e);
            if ((l === n || !l) && clearTimeout)
                return l = clearTimeout,
                clearTimeout(e);
            try {
                return l(e)
            } catch (t) {
                try {
                    return l.call(null, e)
                } catch (t) {
                    return l.call(this, e)
                }
            }
        }
        function o() {
            p && f && (p = !1,
            f.length ? h = f.concat(h) : m = -1,
            h.length && a())
        }
        function a() {
            if (!p) {
                var e = i(o);
                p = !0;
                for (var t = h.length; t; ) {
                    for (f = h,
                    h = []; ++m < t; )
                        f && f[m].run();
                    m = -1,
                    t = h.length
                }
                f = null,
                p = !1,
                r(e)
            }
        }
        function s(e, t) {
            this.fun = e,
            this.array = t
        }
        function c() {}
        var u, l, d = e.exports = {};
        !function() {
            try {
                u = "function" == typeof setTimeout ? setTimeout : t
            } catch (e) {
                u = t
            }
            try {
                l = "function" == typeof clearTimeout ? clearTimeout : n
            } catch (e) {
                l = n
            }
        }();
        var f, h = [], p = !1, m = -1;
        d.nextTick = function(e) {
            var t = new Array(arguments.length - 1);
            if (arguments.length > 1)
                for (var n = 1; n < arguments.length; n++)
                    t[n - 1] = arguments[n];
            h.push(new s(e,t)),
            1 !== h.length || p || i(a)
        }
        ,
        s.prototype.run = function() {
            this.fun.apply(null, this.array)
        }
        ,
        d.title = "browser",
        d.browser = !0,
        d.env = {},
        d.argv = [],
        d.version = "",
        d.versions = {},
        d.on = c,
        d.addListener = c,
        d.once = c,
        d.off = c,
        d.removeListener = c,
        d.removeAllListeners = c,
        d.emit = c,
        d.binding = function() {
            throw new Error("process.binding is not supported")
        }
        ,
        d.cwd = function() {
            return "/"
        }
        ,
        d.chdir = function() {
            throw new Error("process.chdir is not supported")
        }
        ,
        d.umask = function() {
            return 0
        }
    },
    7: function(e, t, n) {
        "use strict";
        function i(e) {
            return (0,
            a.each)(function(t) {
                (0,
                a.eachObj)(function(t, n) {
                    e[t] = n
                }, t)
            }, s.call(arguments, 1)),
            e
        }
        function r(e) {
            var t = {}
              , n = Array.prototype.concat.apply(Array.prototype, s.call(arguments, 1));
            return (0,
            a.each)(function(n) {
                n in e && (t[n] = e[n])
            }, n),
            t
        }
        function o(e) {
            var t, n = Object.keys(e), i = n.length;
            return function(r) {
                if (r === e)
                    return !0;
                for (var o = 0; o < i; o++)
                    if (t = n[o],
                    r[t] !== e[t])
                        return !1;
                return !0
            }
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
        t.extend = i,
        t.pick = r,
        t.where = o;
        var a = n(8)
          , s = Array.prototype.slice
    },
    8: function(e, t) {
        "use strict";
        function n(e, t) {
            for (var n = 0, i = t.length; n < i; n++)
                e(t[n], n)
        }
        function i(e, t) {
            return a(function(t, n) {
                return e(n) === !0 ? t.concat(n) : t
            }, [], t)
        }
        function r(e, t, n) {
            for (var i = 0, r = n.length; i < r; i++) {
                var o = n[i];
                if (t(o) === !0)
                    return e(o, i)
            }
            return e(void 0, -1)
        }
        function o(e, t) {
            n(function(n) {
                e(n, t[n], t)
            }, Object.keys(t))
        }
        function a(e, t, i) {
            return n(function(n, i) {
                t = e(t, n, i)
            }, i),
            t
        }
        function s(e, t) {
            return a(function(t, n, i) {
                return t.concat(e(n, i))
            }, [], t)
        }
        function c(e) {
            return e ? e[0] : void 0
        }
        function u(e) {
            var t = e ? e.length : 0;
            return t ? e[t - 1] : void 0
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
        t.each = n,
        t.filter = i,
        t.eachObj = o,
        t.reduce = a,
        t.map = s,
        t.first = c,
        t.last = u;
        t.find = r.bind(null, function(e) {
            return e
        }),
        t.findIndex = r.bind(null, function(e, t) {
            return t
        })
    },
    24: function(e) {
        "use strict";
        e.exports = function() {
            return window.matchMedia && (window.matchMedia("only screen and (min-resolution: 124dpi), only screen and (min-resolution: 1.3dppx), only screen and (min-resolution: 48.8dpcm)").matches || window.matchMedia("only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (min--moz-device-pixel-ratio: 1.3), only screen and (min-device-pixel-ratio: 1.3)").matches) || window.devicePixelRatio && window.devicePixelRatio > 1.3
        }
    },
    26: function(e, t, n) {
        "use strict";
        function i(e, t) {
            return t.call(this, e)
        }
        function r(e) {
            var t = a.call(arguments, 1);
            return function() {
                var n = e.apply(this, a.call(arguments));
                return (0,
                o.reduce)(i, n, t)
            }
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
        t["default"] = r;
        var o = n(8)
          , a = Array.prototype.slice;
        e.exports = t["default"]
    },
    208: function(e, t, n) {
        "use strict";
        function i(e, t, n) {
            return {
                facebook: "http://www.facebook.com/sharer.php?u=" + e,
                twitter: "http://twitter.com/intent/tweet?url=" + e + "&text=" + t,
                pinterest: "http://pinterest.com/pin/create/bookmarklet/?media=" + n + "&description=" + t + " - " + e
            }
        }
        function r(e) {
            return E.src(e.source, {
                width: 1024,
                height: 1024
            })
        }
        function o(e) {
            return I.hasOwnProperty(e) || (I[e] = {}),
            I[e]
        }
        function a(e) {
            var t = "$" + e.split("-").join("_");
            f.$body.find('[data-action="hide-' + e + '"]').attr("data-action", "show-" + e).removeClass("open"),
            L[t] && L[t].remove()
        }
        function s() {
            M.range && M.range.clear(),
            M = {}
        }
        function c() {
            return "LANDSCAPE"
        }
        function u() {
            return {
                start: 0,
                end: h.length - 1
            }
        }
        function l(e, t) {
            function n() {
                return e + ++a > t ? i() : e + a
            }
            function i() {
                return e - ++o < 0 ? n() : e - o
            }
            var r, o, a, s = [e];
            for (r = 1,
            o = a = 0; r < Math.min(10, t + 1); r++)
                r % 3 ? s.push(n()) : s.push(i());
            return s
        }
        function d(e) {
            A.load(l(e, h.length - 1).reduce(function(e, t) {
                var n = h[t];
                return "ready" !== n.source.status ? e : e.concat({
                    src: E.src(n.source, m.pick(n, ["width", "height"])),
                    onload: function(e, t) {
                        y.placeImage(n, t)
                    }
                })
            }, []))
        }
        var f, h, p, m = (n(209),
        n(7)), g = n(8), v = n(210), _ = n(211), y = n(212), b = n(213), w = n(221), x = n(222), A = n(228), E = n(225), C = n(229), T = n(230), k = n(233), S = g.last, N = g.find, O = {}, L = {}, I = {}, D = {}, R = [], M = {}, j = 5, H = a.bind(null, "share-image");
        O[_.ACTIONS.HIDE_ALL] = H,
        O[_.ACTIONS.HIDE_IMAGE_SHARE_BUTTONS] = function(e) {
            var t, n = e.$el.attr("data-cid");
            t = o(n),
            H(),
            t.state = "CLEARED",
            e.$el.removeClass("__h-gallery__images__list__item_js-with-options"),
            s()
        }
        ,
        O[_.ACTIONS.SHOW_IMAGE_SHARE_BUTTONS] = function(e) {
            var t, n = e.$el.attr("data-cid");
            t = o(n),
            t.state = "HOVERED",
            e.$el.addClass("__h-gallery__images__list__item_js-with-options")
        }
        ,
        O[_.ACTIONS.SHOW_SHARE_IMAGE] = function(e) {
            var t = e.$el;
            H();
            var n = p(r(N(m.where({
                cid: t.closest("[data-cid]").attr("data-cid")
            }), h)));
            L.$share_image = L.$share_image || $(b["panel-share-image"]({
                shares: [{
                    id: "facebook",
                    label: "Facebook",
                    link: n.facebook
                }, {
                    id: "twitter",
                    label: "Twitter",
                    link: n.twitter
                }, {
                    id: "pinterest",
                    label: "Pinterest",
                    link: n.pinterest
                }]
            })),
            t.append(L.$share_image).attr("data-action", "hide-share-image"),
            requestAnimationFrame(function() {
                t.addClass("open")
            })
        }
        ,
        O[_.ACTIONS.HIDE_SHARE_IMAGE] = H,
        O[_.ACTIONS.PREPARE_DOM] = function(e) {
            var t = e.data;
            t.album && t.album.images && t.album.images.length > j && (t = m.extend({}, e.data),
            t.album = m.extend({}, t.album, {
                images: []
            })),
            f = e.dom,
            f.$container = f.$body.find(_.CSS.GALLERY_CONTAINER),
            f.$container.append(b.gallery(t)),
            f.$fig_container = f.$container.find('[data-constant="GALLERY_FIGURE_CONTAINER"]'),
            x.orientation(c(f.$win[0].matchMedia)),
            p = i.bind(null, e.data.share_url, e.data.share_title)
        }
        ,
        O[_.ACTIONS.BIND_EVENTS] = function(e) {
            ["display_filenames", "download_enabled", "share_menu_enabled"].reduce(function(t, n) {
                return e.settings[n] === !0 ? "enabled" : t
            }, "disabled");
            f.$fig_container.attr("data-hover", "enabled"),
            w.bind(f, e.inManager)
        }
        ,
        O[_.ACTIONS.SET_ALBUM] = function(e) {
            h = x.enhance(e.album),
            y.resizeScrollingGallery()
        }
        ,
        O[_.ACTIONS.REMOVE_SCROLLING_GALLERY] = function() {
            f && x.remove(f)
        }
        ,
        O[_.ACTIONS.RESIZE_SCROLLING_GALLERY] = function() {
            x.resize(h, f)
        }
        ,
        O[_.ACTIONS.SET_CURRENT] = function(e) {
            var t = u(e.current);
            D.current = e.current,
            x.draw(h.slice(t.start, t.end + 1), f.$fig_container),
            x.offset(h[t.start].offset, f.$fig_container),
            d(e.current)
        }
        ,
        O[_.ACTIONS.UPDATE_CURRENT] = function(e) {
            var t, n;
            n = u(D.current),
            t = u(e.current),
            D.current = e.current,
            d(e.current)
        }
        ,
        O[_.ACTIONS.UPDATE_SCROLLING_GALLERY] = function() {
            x.update(D.current, h, f)
        }
        ,
        O[_.ACTIONS.GO_FORWARD] = function() {
            var e = x.next(h, f, S(R));
            e > 0 && R.push(e),
            R.length && C(f.$win, h[S(R)].offset, function() {
                R = []
            })
        }
        ,
        O[_.ACTIONS.GO_BACKWARD] = function() {
            var e = x.previous(h, f, S(R));
            e !== h.length - 1 && R.push(e),
            R.length && C(f.$win, h[S(R)].offset, function() {
                R = []
            })
        }
        ,
        O[_.ACTIONS.FOCUS] = function(e) {
            var t = h[x.current(h, f)];
            return t.cid === e.cid ? y.goForward() : void C(f.$win, N(m.where({
                cid: e.cid
            }), h).offset)
        }
        ,
        O[_.ACTIONS.LOAD_IMAGE] = function(e) {
            E.load(e.src, e.callback)
        }
        ,
        O[_.ACTIONS.PLACE_IMAGE] = function(e) {
            x.placeImage(f.$fig_container, e.item, e.img)
        }
        ,
        O[_.ACTIONS.APPLY_SETTINGS] = function(e) {
            T.render(e.settings)
        }
        ,
        O[_.ACTIONS.SELECT_TEXT] = function(e) {
            var t = e.$el[0];
            return M.el === t ? s() : (M.el = t,
            void (M.range = k(e.$el[0])))
        }
        ,
        v.register(O)
    },
    209: function(e, t, n) {
        "use strict";
        function r(e) {
            return e + 1
        }
        function o(e) {
            return e - 1
        }
        function a(e, t) {
            return {
                start: t.start > 0 ? t.start : 0,
                end: t.end < e ? t.end : e
            }
        }
        function s(e, t) {
            return {
                start: t.start - (t.end > e ? t.end - e : 0),
                end: t.end - (t.start < 0 ? t.start : 0)
            }
        }
        function c(e, t, n) {
            return a(e, s(e, {
                start: n.start - t.bwd,
                end: n.end + t.fwd
            }))
        }
        function u(e, t, n) {
            for (var i = [], r = n, o = t.end + 1; r < o; r++)
                i.push(r);
            var a = 0
              , s = e.fwd + 1;
            for (r = n - 1,
            o = t.start - 1; r > o; r--)
                a === e.bwd && (a = 0,
                s += e.fwd),
                i.splice(s, 0, r),
                s++,
                a++;
            return i
        }
        function l(e, t) {
            return (e + t) % e
        }
        var d = n(26);
        e.exports = {
            expand: c,
            prioritize: u,
            create: function(e) {
                var t = l.bind(null, e);
                return {
                    wrap: t,
                    inc: d(r, t),
                    dec: d(o, t),
                    slice: function(e, n, a) {
                        var s, c = [], u = 1;
                        for (i = r(a),
                        s = i + n; i < s; i += 1)
                            c.push(t(i));
                        for (i = o(a),
                        s = i + e; i > s; i -= 1)
                            c.splice(u, 0, t(i)),
                            u += 2;
                        return c
                    }
                }
            }
        }
    },
    210: function(e) {
        "use strict";
        function t(e, t) {
            n.forEach(function(n) {
                n.hasOwnProperty(e) && n[e](t)
            })
        }
        var n = [];
        t.register = function(e) {
            n.push(e)
        }
        ,
        e.exports = t
    },
    211: function(e) {
        "use strict";
        var t = {
            MINIMAL_GIF: "data:image/gif;base64,R0lGODlhAQABAHAAACH5BAUAAAAALAAAAAABAAEAAAICRAEAOw==",
            CSS: {
                TITLE_CONTAINER: "#vb_title > h1",
                GALLERY_CONTAINER: ".vb_album_container",
                GALLERY_FIGURE_BOX_IMAGE: ".__h-gallery__images__list__item__figure__image"
            },
            ACTIONS: ["GO_FORWARD", "GO_BACKWARD", "APPLY_SETTINGS", "BIND_EVENTS", "SET_ALBUM", "SET_CURRENT", "UPDATE_CURRENT", "SHOW_IMAGE", "SCROLL_TO", "PREPARE_DOM", "RESIZE_SCROLLING_GALLERY", "UPDATE_SCROLLING_GALLERY", "REMOVE_SCROLLING_GALLERY", "LOAD_IMAGE", "PLACE_IMAGE", "FOCUS", "HIDE_ALL", "SHOW_SHARE_ALBUM", "SHOW_IMAGE_SHARE_BUTTONS", "HIDE_IMAGE_SHARE_BUTTONS", "HIDE_SHARE_ALBUM", "SHOW_SHARE_IMAGE", "HIDE_SHARE_IMAGE", "SELECT_TEXT"].reduce(function(e, t) {
                return e[t] = t,
                e
            }, {})
        };
        e.exports = t
    },
    212: function(e, t, n) {
        "use strict";
        var i = n(210)
          , r = n(211);
        e.exports = {
            selectText: function(e) {
                i(r.ACTIONS.SELECT_TEXT, {
                    $el: e
                })
            },
            goForward: i.bind(null, r.ACTIONS.GO_FORWARD),
            goBackward: i.bind(null, r.ACTIONS.GO_BACKWARD),
            setAlbum: function(e) {
                i(r.ACTIONS.SET_ALBUM, {
                    album: e
                })
            },
            applySettings: function(e) {
                i(r.ACTIONS.APPLY_SETTINGS, {
                    settings: e
                })
            },
            prepareDOM: function(e, t) {
                i(r.ACTIONS.PREPARE_DOM, {
                    data: e,
                    dom: t
                })
            },
            bindEvents: function(e, t) {
                i(r.ACTIONS.BIND_EVENTS, {
                    settings: e,
                    inManager: t || !1
                })
            },
            focus: function(e) {
                i(r.ACTIONS.FOCUS, {
                    cid: e
                })
            },
            loadImage: function(e, t) {
                i(r.ACTIONS.LOAD_IMAGE, {
                    src: e,
                    callback: t
                })
            },
            placeImage: function(e, t) {
                i(r.ACTIONS.PLACE_IMAGE, {
                    item: e,
                    img: t
                })
            },
            resizeScrollingGallery: i.bind(null, r.ACTIONS.RESIZE_SCROLLING_GALLERY),
            updateScrollingGallery: i.bind(null, r.ACTIONS.UPDATE_SCROLLING_GALLERY),
            removeScrollingGallery: i.bind(null, r.ACTIONS.REMOVE_SCROLLING_GALLERY),
            showImage: function(e) {
                i(r.ACTIONS.SHOW_IMAGE, {
                    index: e
                })
            },
            setCurrent: function(e) {
                i(r.ACTIONS.SET_CURRENT, {
                    current: e
                })
            },
            updateCurrent: function(e) {
                i(r.ACTIONS.UPDATE_CURRENT, {
                    current: e
                })
            },
            scrollTo: function(e) {
                i(r.ACTIONS.SCROLL_TO, {
                    offset: e
                })
            },
            showShareAlbum: function(e) {
                i(r.ACTIONS.SHOW_SHARE_ALBUM, {
                    $el: e
                })
            },
            hideShareAlbum: i.bind(null, r.ACTIONS.HIDE_SHARE_ALBUM),
            showShareImage: function(e) {
                i(r.ACTIONS.SHOW_SHARE_IMAGE, {
                    $el: e
                })
            },
            showImageShareButtons: function(e) {
                i(r.ACTIONS.SHOW_IMAGE_SHARE_BUTTONS, {
                    $el: e
                })
            },
            hideImageShareButtons: function(e) {
                i(r.ACTIONS.HIDE_IMAGE_SHARE_BUTTONS, {
                    $el: e
                })
            },
            hideShareImage: i.bind(null, r.ACTIONS.HIDE_SHARE_IMAGE),
            closeAll: i.bind(null, r.ACTIONS.HIDE_ALL),
            downloadImage: function() {}
        }
    },
    213: function(e, t, n) {
        "use strict";
        var i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        }
        : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        }
          , r = window.Handlebars = n(214)["default"]
          , o = r.template;
        r.templates = r.templates || {};
        r.partials.gallery = o(function(e, t, n, i, r) {
            function o(e, t) {
                var r, o = "";
                return o += "\n\t\t\t\t",
                r = c.invokePartial(i.image, "image", e, n, i, t),
                (r || 0 === r) && (o += r),
                o += "\n\t\t\t"
            }
            this.compilerInfo = [4, ">= 1.0.0"],
            n = this.merge(n, e.helpers),
            i = this.merge(i, e.partials),
            r = r || {};
            var a, s = "", c = this;
            return s += "<article class='__h-gallery'>\n\n\t<div class='__h-gallery__images'>\n\t\t<div class='__h-gallery__images__list' data-constant='GALLERY_FIGURE_CONTAINER'>\n\t\t\t",
            a = n.each.call(t, (a = t && t.album,
            null == a || a === !1 ? a : a.images), {
                hash: {},
                inverse: c.noop,
                fn: c.program(1, o, r),
                data: r
            }),
            (a || 0 === a) && (s += a),
            s += "\n\t\t</div>\n\t</div>\n\n\t<div class='panels'>\n\t\t",
            a = c.invokePartial(i["panel-share-image"], "panel-share-image", t && t["share-image"], n, i, r),
            (a || 0 === a) && (s += a),
            s += "\n\t</div>\n\n</article>\n"
        }),
        r.partials.image = o(function(e, t, n, r, o) {
            function a(e, t) {
                var r, o, a = "";
                return a += '\n<section data-cid="',
                (o = n.cid) ? r = o.call(e, {
                    hash: {},
                    data: t
                }) : (o = e && e.cid,
                r = ("undefined" == typeof o ? "undefined" : i(o)) === v ? o.call(e, {
                    hash: {},
                    data: t
                }) : o),
                a += _(r) + "\" class='__h-gallery__images__list__item' style='width:",
                (o = n.width) ? r = o.call(e, {
                    hash: {},
                    data: t
                }) : (o = e && e.width,
                r = ("undefined" == typeof o ? "undefined" : i(o)) === v ? o.call(e, {
                    hash: {},
                    data: t
                }) : o),
                a += _(r) + "px; height:",
                (o = n.height) ? r = o.call(e, {
                    hash: {},
                    data: t
                }) : (o = e && e.height,
                r = ("undefined" == typeof o ? "undefined" : i(o)) === v ? o.call(e, {
                    hash: {},
                    data: t
                }) : o),
                a += _(r) + "px;'>\n\t<figure class='__h-gallery__images__list__item__figure' data-constant='GALLERY_FIGURE_BOX' style='width:",
                (o = n.width) ? r = o.call(e, {
                    hash: {},
                    data: t
                }) : (o = e && e.width,
                r = ("undefined" == typeof o ? "undefined" : i(o)) === v ? o.call(e, {
                    hash: {},
                    data: t
                }) : o),
                a += _(r) + "px; height:",
                (o = n.height) ? r = o.call(e, {
                    hash: {},
                    data: t
                }) : (o = e && e.height,
                r = ("undefined" == typeof o ? "undefined" : i(o)) === v ? o.call(e, {
                    hash: {},
                    data: t
                }) : o),
                a += _(r) + "px; background:#f9f9f9; display:inline-block'>\n"
            }
            function s(e, t) {
                var i, r = "";
                return r += "\n<section class='__h-gallery__images__list__item'>\n\n\t<figure class='__h-gallery__images__list__item__figure'>\n    <img class='__h-gallery__images__list__item__figure__image' alt='' src='' />",
                i = n["if"].call(e, e && e.name, {
                    hash: {},
                    inverse: y.program(6, u, t),
                    fn: y.program(4, c, t),
                    data: t
                }),
                (i || 0 === i) && (r += i),
                r
            }
            function c() {
                return "name"
            }
            function u() {
                return "filename"
            }
            function l(e, t) {
                var r, o;
                return (o = n.index) ? r = o.call(e, {
                    hash: {},
                    data: t
                }) : (o = e && e.index,
                r = ("undefined" == typeof o ? "undefined" : i(o)) === v ? o.call(e, {
                    hash: {},
                    data: t
                }) : o),
                _(r)
            }
            function d() {
                return "1"
            }
            function f(e, t) {
                var r, o, a = "";
                return a += "<div class='__h-gallery__images__list__item__figure__caption__info__title'>",
                (o = n.name) ? r = o.call(e, {
                    hash: {},
                    data: t
                }) : (o = e && e.name,
                r = ("undefined" == typeof o ? "undefined" : i(o)) === v ? o.call(e, {
                    hash: {},
                    data: t
                }) : o),
                a += _(r) + "</div>"
            }
            function h(e, t) {
                var r, o, a = "";
                return a += "<div class='__h-gallery__images__list__item__figure__caption__info__description'>",
                (o = n.description) ? r = o.call(e, {
                    hash: {},
                    data: t
                }) : (o = e && e.description,
                r = ("undefined" == typeof o ? "undefined" : i(o)) === v ? o.call(e, {
                    hash: {},
                    data: t
                }) : o),
                (r || 0 === r) && (a += r),
                a += "</div>"
            }
            this.compilerInfo = [4, ">= 1.0.0"],
            n = this.merge(n, e.helpers),
            o = o || {};
            var p, m, g = "", v = "function", _ = this.escapeExpression, y = this;
            return g += "\n",
            p = n["if"].call(t, t && t.cid, {
                hash: {},
                inverse: y.program(3, s, o),
                fn: y.program(1, a, o),
                data: o
            }),
            (p || 0 === p) && (g += p),
            g += "\n\n\t\t<figcaption class='__h-gallery__images__list__item__figure__caption'>\n\t\t\t<span class='__h-gallery__images__list__item__figure__caption__current'>",
            p = n["if"].call(t, t && t.cid, {
                hash: {},
                inverse: y.program(10, d, o),
                fn: y.program(8, l, o),
                data: o
            }),
            (p || 0 === p) && (g += p),
            g += "</span>\n\t\t\t<span class='__h-gallery__images__list__item__figure__caption__info'>\n\t\t\t\t",
            p = n["if"].call(t, t && t.name, {
                hash: {},
                inverse: y.noop,
                fn: y.program(12, f, o),
                data: o
            }),
            (p || 0 === p) && (g += p),
            g += "\n        ",
            p = n["if"].call(t, t && t.description, {
                hash: {},
                inverse: y.noop,
                fn: y.program(14, h, o),
                data: o
            }),
            (p || 0 === p) && (g += p),
            g += "\n\t\t\t</span>\n\t\t</figcaption>\n\n    <div class=\"__h-gallery__images__list__item__figure__right-click-blocker\"></div>\n\n\t</figure>\n\n\t<footer class='__h-gallery__images__list__item__footer'>\n\t\t<span class='__h-gallery__images__list__item__footer__filename' data-action=\"select-text\" data-constant='GALLERY_FIGURE_FILENAME'>",
            (m = n.filename) ? p = m.call(t, {
                hash: {},
                data: o
            }) : (m = t && t.filename,
            p = ("undefined" == typeof m ? "undefined" : i(m)) === v ? m.call(t, {
                hash: {},
                data: o
            }) : m),
            g += _(p) + "</span>\n\t\t<span class='__h-gallery__images__list__item__footer__options'>\n\t\t\t<span class='__h-gallery__images__list__item__footer__options__share' data-constant='GALLERY_FIGURE_SHARE' data-action='show-share-image'></span>\n\t    <span class='__h-gallery__images__list__item__footer__options__download' data-constant='GALLERY_FIGURE_DOWNLOAD'>\n\t      <a class='__h-gallery__images__list__item__footer__options__download__link' href=\"//download.viewbook.com/downloads/albums/",
            (m = n.album_id) ? p = m.call(t, {
                hash: {},
                data: o
            }) : (m = t && t.album_id,
            p = ("undefined" == typeof m ? "undefined" : i(m)) === v ? m.call(t, {
                hash: {},
                data: o
            }) : m),
            g += _(p) + "?image_id=",
            (m = n.id) ? p = m.call(t, {
                hash: {},
                data: o
            }) : (m = t && t.id,
            p = ("undefined" == typeof m ? "undefined" : i(m)) === v ? m.call(t, {
                hash: {},
                data: o
            }) : m),
            g += _(p) + "&public_key=",
            (m = n.public_key) ? p = m.call(t, {
                hash: {},
                data: o
            }) : (m = t && t.public_key,
            p = ("undefined" == typeof m ? "undefined" : i(m)) === v ? m.call(t, {
                hash: {},
                data: o
            }) : m),
            g += _(p) + '" target="_blank"></a>\n   \t\t</span>\n \t\t</span>\n\t</footer>\n\n</section>\n'
        }),
        r.partials["panel-share-image"] = o(function(e, t, n, r, o) {
            function a(e, t) {
                var r, o, a = "";
                return a += "\n\t\t<li class='__panel__share__list__item'><a class='__panel__share__list__item__link ",
                (o = n.id) ? r = o.call(e, {
                    hash: {},
                    data: t
                }) : (o = e && e.id,
                r = ("undefined" == typeof o ? "undefined" : i(o)) === l ? o.call(e, {
                    hash: {},
                    data: t
                }) : o),
                a += d(r) + "' href='",
                (o = n.link) ? r = o.call(e, {
                    hash: {},
                    data: t
                }) : (o = e && e.link,
                r = ("undefined" == typeof o ? "undefined" : i(o)) === l ? o.call(e, {
                    hash: {},
                    data: t
                }) : o),
                a += d(r) + '\' target="_blank"></a></li>\n\t'
            }
            this.compilerInfo = [4, ">= 1.0.0"],
            n = this.merge(n, e.helpers),
            o = o || {};
            var s, c, u = "", l = "function", d = this.escapeExpression, f = this;
            return u += "<span class='__panel__share __panel__share_top panel' data-type='",
            (c = n.id) ? s = c.call(t, {
                hash: {},
                data: o
            }) : (c = t && t.id,
            s = ("undefined" == typeof c ? "undefined" : i(c)) === l ? c.call(t, {
                hash: {},
                data: o
            }) : c),
            u += d(s) + "'>\n\t<ul class='__panel__share__list'>\n\t",
            s = n.each.call(t, t && t.shares, {
                hash: {},
                inverse: f.noop,
                fn: f.program(1, a, o),
                data: o
            }),
            (s || 0 === s) && (u += s),
            u += "\n\t</ul>\n</span>\n"
        }),
        e.exports = r.partials
    },
    214: function(e, t, n) {
        e.exports = n(215)
    },
    215: function(e, t, n) {
        "use strict";
        var i = n(216)
          , r = n(218)["default"]
          , o = n(219)["default"]
          , a = n(217)
          , s = n(220)
          , c = function() {
            var e = new i.HandlebarsEnvironment;
            return a.extend(e, i),
            e.SafeString = r,
            e.Exception = o,
            e.Utils = a,
            e.VM = s,
            e.template = function(t) {
                return s.template(t, e)
            }
            ,
            e
        }
          , u = c();
        u.create = c,
        t["default"] = u
    },
    216: function(e, t, n) {
        "use strict";
        function i(e, t) {
            this.helpers = e || {},
            this.partials = t || {},
            r(this)
        }
        function r(e) {
            e.registerHelper("helperMissing", function(e) {
                if (2 !== arguments.length)
                    throw new s("Missing helper: '" + e + "'")
            }),
            e.registerHelper("blockHelperMissing", function(t, n) {
                var i = n.inverse || function() {}
                  , r = n.fn;
                return f(t) && (t = t.call(this)),
                t === !0 ? r(this) : t === !1 || null == t ? i(this) : d(t) ? t.length > 0 ? e.helpers.each(t, n) : i(this) : r(t)
            }),
            e.registerHelper("each", function(e, t) {
                var n, i = t.fn, r = t.inverse, o = 0, a = "";
                if (f(e) && (e = e.call(this)),
                t.data && (n = g(t.data)),
                e && "object" == typeof e)
                    if (d(e))
                        for (var s = e.length; o < s; o++)
                            n && (n.index = o,
                            n.first = 0 === o,
                            n.last = o === e.length - 1),
                            a += i(e[o], {
                                data: n
                            });
                    else
                        for (var c in e)
                            e.hasOwnProperty(c) && (n && (n.key = c,
                            n.index = o,
                            n.first = 0 === o),
                            a += i(e[c], {
                                data: n
                            }),
                            o++);
                return 0 === o && (a = r(this)),
                a
            }),
            e.registerHelper("if", function(e, t) {
                return f(e) && (e = e.call(this)),
                !t.hash.includeZero && !e || a.isEmpty(e) ? t.inverse(this) : t.fn(this)
            }),
            e.registerHelper("unless", function(t, n) {
                return e.helpers["if"].call(this, t, {
                    fn: n.inverse,
                    inverse: n.fn,
                    hash: n.hash
                })
            }),
            e.registerHelper("with", function(e, t) {
                if (f(e) && (e = e.call(this)),
                !a.isEmpty(e))
                    return t.fn(e)
            }),
            e.registerHelper("log", function(t, n) {
                var i = n.data && null != n.data.level ? parseInt(n.data.level, 10) : 1;
                e.log(i, t)
            })
        }
        function o(e, t) {
            m.log(e, t)
        }
        var a = n(217)
          , s = n(219)["default"]
          , c = "1.3.0";
        t.VERSION = c;
        var u = 4;
        t.COMPILER_REVISION = u;
        var l = {
            1: "<= 1.0.rc.2",
            2: "== 1.0.0-rc.3",
            3: "== 1.0.0-rc.4",
            4: ">= 1.0.0"
        };
        t.REVISION_CHANGES = l;
        var d = a.isArray
          , f = a.isFunction
          , h = a.toString
          , p = "[object Object]";
        t.HandlebarsEnvironment = i,
        i.prototype = {
            constructor: i,
            logger: m,
            log: o,
            registerHelper: function(e, t, n) {
                if (h.call(e) === p) {
                    if (n || t)
                        throw new s("Arg not supported with multiple helpers");
                    a.extend(this.helpers, e)
                } else
                    n && (t.not = n),
                    this.helpers[e] = t
            },
            registerPartial: function(e, t) {
                h.call(e) === p ? a.extend(this.partials, e) : this.partials[e] = t
            }
        };
        var m = {
            methodMap: {
                0: "debug",
                1: "info",
                2: "warn",
                3: "error"
            },
            DEBUG: 0,
            INFO: 1,
            WARN: 2,
            ERROR: 3,
            level: 3,
            log: function(e, t) {
                if (m.level <= e) {
                    var n = m.methodMap[e];
                    "undefined" != typeof console && console[n] && console[n].call(console, t)
                }
            }
        };
        t.logger = m,
        t.log = o;
        var g = function(e) {
            var t = {};
            return a.extend(t, e),
            t
        };
        t.createFrame = g
    },
    217: function(e, t, n) {
        "use strict";
        function i(e) {
            return c[e] || "&amp;"
        }
        function r(e, t) {
            for (var n in t)
                Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n])
        }
        function o(e) {
            return e instanceof s ? e.toString() : e || 0 === e ? (e = "" + e,
            l.test(e) ? e.replace(u, i) : e) : ""
        }
        function a(e) {
            return !e && 0 !== e || !(!h(e) || 0 !== e.length)
        }
        var s = n(218)["default"]
          , c = {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#x27;",
            "`": "&#x60;"
        }
          , u = /[&<>"'`]/g
          , l = /[&<>"'`]/;
        t.extend = r;
        var d = Object.prototype.toString;
        t.toString = d;
        var f = function(e) {
            return "function" == typeof e
        };
        f(/x/) && (f = function(e) {
            return "function" == typeof e && "[object Function]" === d.call(e)
        }
        );
        var f;
        t.isFunction = f;
        var h = Array.isArray || function(e) {
            return !(!e || "object" != typeof e) && "[object Array]" === d.call(e)
        }
        ;
        t.isArray = h,
        t.escapeExpression = o,
        t.isEmpty = a
    },
    218: function(e, t) {
        "use strict";
        function n(e) {
            this.string = e
        }
        n.prototype.toString = function() {
            return "" + this.string
        }
        ,
        t["default"] = n
    },
    219: function(e, t) {
        "use strict";
        function n(e, t) {
            var n;
            t && t.firstLine && (n = t.firstLine,
            e += " - " + n + ":" + t.firstColumn);
            for (var r = Error.prototype.constructor.call(this, e), o = 0; o < i.length; o++)
                this[i[o]] = r[i[o]];
            n && (this.lineNumber = n,
            this.column = t.firstColumn)
        }
        var i = ["description", "fileName", "lineNumber", "message", "name", "number", "stack"];
        n.prototype = new Error,
        t["default"] = n
    },
    220: function(e, t, n) {
        "use strict";
        function i(e) {
            var t = e && e[0] || 1
              , n = d;
            if (t !== n) {
                if (t < n) {
                    var i = f[n]
                      , r = f[t];
                    throw new l("Template was precompiled with an older version of Handlebars than the current runtime. Please update your precompiler to a newer version (" + i + ") or downgrade your runtime to an older version (" + r + ").")
                }
                throw new l("Template was precompiled with a newer version of Handlebars than the current runtime. Please update your runtime to a newer version (" + e[1] + ").")
            }
        }
        function r(e, t) {
            if (!t)
                throw new l("No environment passed to template");
            var n = function(e, n, i, r, o, a) {
                var s = t.VM.invokePartial.apply(this, arguments);
                if (null != s)
                    return s;
                if (t.compile) {
                    var c = {
                        helpers: r,
                        partials: o,
                        data: a
                    };
                    return o[n] = t.compile(e, {
                        data: void 0 !== a
                    }, t),
                    o[n](i, c)
                }
                throw new l("The partial " + n + " could not be compiled when running in runtime-only mode")
            }
              , i = {
                escapeExpression: u.escapeExpression,
                invokePartial: n,
                programs: [],
                program: function(e, t, n) {
                    var i = this.programs[e];
                    return n ? i = a(e, t, n) : i || (i = this.programs[e] = a(e, t)),
                    i
                },
                merge: function(e, t) {
                    var n = e || t;
                    return e && t && e !== t && (n = {},
                    u.extend(n, t),
                    u.extend(n, e)),
                    n
                },
                programWithDepth: t.VM.programWithDepth,
                noop: t.VM.noop,
                compilerInfo: null
            };
            return function(n, r) {
                r = r || {};
                var o, a, s = r.partial ? r : t;
                r.partial || (o = r.helpers,
                a = r.partials);
                var c = e.call(i, s, n, o, a, r.data);
                return r.partial || t.VM.checkRevision(i.compilerInfo),
                c
            }
        }
        function o(e, t, n) {
            var i = Array.prototype.slice.call(arguments, 3)
              , r = function(e, r) {
                return r = r || {},
                t.apply(this, [e, r.data || n].concat(i))
            };
            return r.program = e,
            r.depth = i.length,
            r
        }
        function a(e, t, n) {
            var i = function(e, i) {
                return i = i || {},
                t(e, i.data || n)
            };
            return i.program = e,
            i.depth = 0,
            i
        }
        function s(e, t, n, i, r, o) {
            var a = {
                partial: !0,
                helpers: i,
                partials: r,
                data: o
            };
            if (void 0 === e)
                throw new l("The partial " + t + " could not be found");
            if (e instanceof Function)
                return e(n, a)
        }
        function c() {
            return ""
        }
        var u = n(217)
          , l = n(219)["default"]
          , d = n(216).COMPILER_REVISION
          , f = n(216).REVISION_CHANGES;
        t.checkRevision = i,
        t.template = r,
        t.programWithDepth = o,
        t.program = a,
        t.invokePartial = s,
        t.noop = c
    },
    221: function(e, t, n) {
        "use strict";
        function i(e) {
            return e.split("-").reduce(function(e, t) {
                return e + (t[0].toUpperCase() + t.substr(1))
            })
        }
        function r(e) {
            e.stopImmediatePropagation()
        }
        function o(e) {
            var t = f(this)
              , n = i(t.attr("data-action"));
            d.hasOwnProperty(n) && (e.stopImmediatePropagation(),
            e.preventDefault(),
            e.stopPropagation(),
            d[n](t))
        }
        function a() {
            d.focus(f(this).attr("data-cid"))
        }
        function s(e) {
            var t = e.which;
            37 !== t && 39 !== t || (e.preventDefault(),
            d[37 === t ? "goBackward" : "goForward"]())
        }
        function c() {
            d.showImageShareButtons(f(this).closest("[data-cid]"))
        }
        function u() {
            d.hideImageShareButtons(f(this))
        }
        function l(e) {
            f = e.$,
            e.$win.bind("scroll", d.updateScrollingGallery),
            e.$win.bind("resize", d.resizeScrollingGallery),
            e.$body.delegate('a[href][target="_blank"]', "click", r),
            e.$body.delegate("[data-action]", "click", o),
            e.$body.delegate("[data-cid]", "click", a),
            e.$body.bind("click", d.closeAll),
            e.$body.delegate('[data-hover="enabled"] [data-cid] > figure', "mouseenter", c),
            e.$body.delegate("[data-cid]", "mouseleave", u)
        }
        var d = n(212)
          , f = window.jQuery;
        e.exports = {
            bind: function(e, t) {
                return t ? l(e) : (e.$win.on("scroll", d.updateScrollingGallery),
                e.$win.on("resize", d.resizeScrollingGallery),
                e.$body.on("click", 'a[href][target="_blank"]', r),
                e.$body.on("click", "[data-action]", o),
                e.$body.on("click", "[data-cid]", a),
                e.$body.on("click", d.closeAll),
                e.$body.on("keydown", s),
                e.$body.on("mouseenter", "[data-cid] > figure", c),
                void e.$body.on("mouseleave", "[data-cid]", u))
            }
        }
    },
    222: function(e, t, n) {
        "use strict";
        function i(e) {
            return e.images.map(function(t, n) {
                var i = f.pick(t, ["src", "width", "height", "location", "hash", "created_at", "status"]);
                return {
                    source: i,
                    cid: p(),
                    id: t.id,
                    index: n + 1,
                    name: t.name,
                    album_id: e.id,
                    thumbnail: v.src(i, {
                        width: 70,
                        height: 70
                    }, !1, 1),
                    public_key: e.public_key,
                    description: t.description,
                    filename: t.filename
                }
            })
        }
        function r(e, t, n) {
            return e.slice(t, n + 1).map(function(e) {
                return e.src = v.src(e.source, f.pick(e, ["width", "height", "src"])),
                e
            }).filter(function(e) {
                return "processing" !== e.source.status
            })
        }
        function o(e, t) {
            for (var n = 0, i = t.offset + t.size, r = 0, o = e.length; r < o; r++) {
                var a = e[r];
                if (a.offset > i)
                    return {
                        start: n,
                        end: r
                    };
                a.offset < t.offset && (n = r)
            }
            return {
                start: n,
                end: e.length - 1
            }
        }
        function a(e, t) {
            var n, i = {
                prepend: [],
                append: [],
                remove: []
            };
            if (t.start < e.start)
                for (n = t.start; n < e.start; n++)
                    i.prepend.push(n);
            if (e.start < t.start)
                for (n = e.start; n < t.start; n++)
                    i.remove.push(n);
            if (e.end > t.end)
                for (n = e.end; n > t.end; n--)
                    i.remove.push(n);
            if (t.end > e.end)
                for (n = t.end; n > e.end; n--)
                    i.append.push(n);
            return i.append.reverse(),
            i
        }
        function s(e, t) {
            return ["append", "prepend", "remove"].reduce(function(n, i) {
                return n[i] = t[i].map(function(t) {
                    return e[t]
                }),
                n
            }, {})
        }
        function c(e, t) {
            var n;
            e.forEach(function(e, i) {
                var r = v.resize(e.source, t);
                e.width = r.width || r.height,
                e.height = r.height,
                e.offset = i ? v.offset(n, t) : 0,
                n = e
            })
        }
        function u(e, t) {
            for (var n, i = _.bounds(t.$win), r = 0, o = e.length - 1; r < o; r++)
                if (n = e[r],
                n.offset + .75 * n.width > i.offset)
                    return r;
            return r
        }
        function l(e) {
            return "[object Number]" === Object.prototype.toString.call(e)
        }
        function d(e, t, n, i) {
            return i = l(i) ? i : u(t, n),
            (t.length + i + e) % t.length
        }
        var f = n(7)
          , h = n(8).last
          , p = n(223)()
          , m = n(224)
          , g = n(212)
          , v = n(225)
          , _ = n(227)
          , y = m(function(e, t) {
            return g.updateCurrent(u(e, t))
        });
        e.exports = {
            enhance: i,
            current: u,
            next: d.bind(null, 1),
            previous: d.bind(null, -1),
            update: function(e, t, n) {
                u(t, n) !== e && y(t, n)
            },
            resize: function(e, t) {
                return t.$fig_container.empty(),
                c(e, {
                    orientation: "LANDSCAPE" === _.orientation() ? "horizontal" : "vertical",
                    spacing: _.spacing(t.$fig_container),
                    size: _.size(t.$fig_container)
                }),
                _.stretch(Math.round(h(e).offset + h(e).width), t.$page),
                g.setCurrent(u(e, t))
            },
            remove: function(e) {
                _.unstretch(e.$body),
                e.$container.empty()
            },
            patch: a,
            orientation: _.orientation,
            getVisibleSlice: o,
            extractImages: r,
            fillPatch: s,
            placeImage: _.placeImage,
            stretch: _.stretch,
            offset: _.offset,
            draw: _.draw,
            redraw: _.redraw
        }
    },
    223: function(e) {
        "use strict";
        e.exports = function() {
            var e = 0;
            return function(t) {
                return t = t || "c-",
                t + (e += 1)
            }
        }
    },
    224: function(e, t, n) {
        "use strict";
        var i = n(1);
        e.exports = function(e, t) {
            var n = 0
              , r = Array.prototype.slice;
            return function() {
                if (!n) {
                    var o = r.call(arguments);
                    n = 1,
                    i(function() {
                        e.apply(t, o),
                        n = 0
                    })
                }
            }
        }
    },
    225: function(e, t, n) {
        "use strict";
        function i(e, t) {
            var n = new Image;
            n.onload = function() {
                t(n)
            }
            ,
            n.src = e
        }
        function r(e, t, n) {
            return {
                height: e,
                width: Math.round(t * (e / n))
            }
        }
        function o(e, t, n) {
            return {
                width: e,
                height: Math.round(n * (e / t))
            }
        }
        function a(e, t) {
            var n = s.imageUrlAndSize(e, t);
            return e.src + "?" + ["w=" + n.image_width, "h=" + n.image_height].join("&")
        }
        var s = n(226);
        n(24)() ? 2 : 1;
        e.exports = {
            resize: function(e, t) {
                return "vertical" === t.orientation ? o(t.size, e.width, e.height) : r(t.size, e.width, e.height)
            },
            offset: function(e, t) {
                var n = "horizontal" === t.orientation ? "width" : "height";
                return t.spacing + (e.offset || 0) + e[n]
            },
            src: a,
            load: i
        }
    },
    226: function(e) {
        "use strict";
        var t = {
            imageUrlAndSize: function(e, t, n, i) {
                var r;
                i || (i = this.pixel_ratio),
                t = this.sizeCanvasWithFactor(t, i);
                var o = this.letterboxOrCrop(t, e, n);
                "surface"in t && (o.surface = t.surface);
                var a;
                e.width <= o.width ? (a = this.checkAllBounds(e, e),
                a.image_width = e.width,
                a.image_height = e.height) : a = this.checkAllBounds(e, o);
                var s = a.suffix
                  , c = ".jpg"
                  , u = Math.round(o.width / i)
                  , l = Math.round(o.height / i);
                return i * (a.image_width / u) >= 1.3 && a.suffix_more_compressed && (s = a.suffix_more_compressed),
                e.location || void 0 === e.url || (e = extractLocationAndHash(e)),
                r = "//" + e.location + "/" + e.hash + s + c,
                {
                    url: r,
                    width: u,
                    height: l,
                    image_width: a.image_width,
                    image_height: a.image_height
                }
            },
            letterboxOrCrop: function(e, t, n) {
                var i = e.width / e.height
                  , r = t.width / t.height;
                if (i > r && !n || i < r && n === !0) {
                    var o = Math.round(e.height * r);
                    return {
                        width: o,
                        height: e.height
                    }
                }
                var a = Math.round(e.width / r);
                return {
                    width: e.width,
                    height: a
                }
            },
            dimensionsBasedOnRatioAndSurface: function(e, t) {
                var n = e.width / e.height;
                return t.width = n * Math.sqrt(t.surface / n),
                t.height = Math.round(t.width / n),
                t.width = Math.round(t.width),
                t
            },
            whenThisImageIsBigEnough: function(e, t, n, i) {
                var r;
                r = "surface"in t ? t.surface : t.width * t.height;
                var o, a;
                return n.surface ? (a = this.dimensionsBasedOnRatioAndSurface(e, n),
                o = n.surface) : (a = this.letterboxOrCrop(n, e, !1),
                o = a.width * a.height),
                !!(r <= o || i) && (n.image_width = a.width,
                n.image_height = a.height,
                n)
            },
            whatBounds: function(e) {
                var t, n = {
                    width: 40,
                    height: 40,
                    suffix: "_mini"
                }, i = {
                    width: 70,
                    height: 70,
                    suffix: "_thumb"
                }, r = {
                    width: 160,
                    height: 160,
                    suffix: "_preview"
                }, o = {
                    width: 320,
                    height: 4e3,
                    suffix: "_small"
                }, a = {
                    width: 480,
                    height: 480,
                    suffix: "_medium_mobile"
                }, s = {
                    width: 640,
                    height: 4e3,
                    suffix: "_medium"
                }, c = {
                    width: 1024,
                    height: 1024,
                    suffix: "_large"
                }, u = {
                    width: 1024,
                    height: 1024,
                    suffix: "_large",
                    suffix_more_compressed: "_large_mobile"
                }, l = {
                    width: 1920,
                    height: 1080,
                    suffix: "_hd"
                }, d = {
                    surface: 1228800,
                    suffix: "_large",
                    suffix_more_compressed: "_large_mobile"
                }, f = {
                    surface: 3145728,
                    suffix: "_hd"
                }, h = [n, i, r, o, s, c], p = [n, i, r, o, a, s, u, l], m = [n, i, r, o, a, s, u, f], g = [n, i, r, o, a, s, d, f];
                return t = e >= 1397738027 ? g : e >= 1278892800 ? m : e >= 1261180800 ? p : h
            },
            checkAllBounds: function(e, t) {
                var n = !1
                  , i = this.whatBounds(e.created_at);
                for (var r in i) {
                    var o = i[r];
                    if (n = this.whenThisImageIsBigEnough(e, t, o, r == i.length - 1),
                    n !== !1)
                        break
                }
                return n
            },
            getDevicePixelRatio: function() {
                return window.devicePixelRatio ? window.devicePixelRatio : 1
            },
            getPixelRatio: function() {
                var e = this.getDevicePixelRatio()
                  , t = screen.width
                  , n = screen.height;
                return window.matchMedia && window.matchMedia("(orientation: landscape)").matches && t < n && (n = [t, t = n][0]),
                t < window.innerWidth && (e *= t / window.innerWidth),
                e = 1 + .75 * (e - 1)
            },
            sizeCanvasWithFactor: function(e, t) {
                return e.width = e.width * t,
                e.height = e.height * t,
                "surface"in e && (e.surface = e.surface * Math.pow(t, 2)),
                e
            },
            extractLocationAndHash: function(e) {
                var t = e.url.split("/")
                  , n = t[2]
                  , i = t[3].split("_")[0];
                return e.location = n,
                e.hash = i,
                e
            },
            pixel_ratio: 1
        };
        t.pixel_ratio = t.getPixelRatio(),
        e.exports = t
    },
    227: function(e, t, n) {
        "use strict";
        function i(e) {
            return '[data-cid="' + e + '"] [data-constant="GALLERY_FIGURE_BOX"]'
        }
        function r(e) {
            var t = e.find("[data-cid]").first();
            return t.length ? t : (e.append(c.image({
                cid: "c-0",
                width: 100,
                height: 100,
                index: -1
            }), c.image({
                cid: "c-0",
                width: 100,
                height: 100,
                index: -1
            })),
            e.find("[data-cid]").first())
        }
        function o(e, t, n) {
            n[t](e[t].map(function(e) {
                return c.image(e)
            }).join(""))
        }
        function a(e) {
            return l[s][e].apply(null, u.call(arguments, 1))
        }
        var s, c = (n(211),
        n(213)), u = Array.prototype.slice, l = {
            LANDSCAPE: {
                spacing: function(e) {
                    return e.outerWidth(!0) - e.width()
                },
                size: function(e) {
                    return e.height()
                },
                stretch: function(e, t) {
                    t.find('[data-scrolling-gallery="stretch"]').css({
                        height: 1,
                        width: e
                    })
                },
                offset: function() {},
                bounds: function(e) {
                    return {
                        offset: e.scrollLeft() || 0,
                        size: e.width()
                    }
                }
            },
            PORTRAIT: {
                spacing: function(e) {
                    return e.outerHeight(!0) - e.height()
                },
                size: function(e) {
                    return e.width()
                },
                stretch: function(e, t) {
                    t.css({
                        width: 1,
                        height: e
                    })
                },
                offset: function(e, t) {
                    t.find("[data-cid]").attr("style", null),
                    t.find("[data-cid]:first").css("margin-top", e)
                },
                bounds: function(e) {
                    return {
                        offset: e.scrollTop() || 0,
                        size: e.height()
                    }
                }
            }
        }, d = {
            placeImage: function(e, t, n) {
                var r = e.find(i(t.cid))
                  , o = r.find("img");
                n.alt = t.name || t.filename,
                o.length && o.attr("src") === n.src ? o.attr("width") === t.width && o.height === t.height || o.attr({
                    width: t.width,
                    height: t.height
                }) : (o.remove(),
                n.width = t.width,
                n.height = t.height,
                r.append(n))
            },
            draw: function(e, t) {
                t.html(e.map(function(e) {
                    return c.image(e)
                }).join(""))
            },
            redraw: function(e, t) {
                o(e, "append", t),
                o(e, "prepend", t),
                e.remove.forEach(function(e) {
                    var n = t.find('[data-cid="' + e.cid + '"]');
                    if (n.length)
                        return n.remove()
                })
            },
            orientation: function(e) {
                return e && (s = e),
                s
            },
            spacing: function(e) {
                return l[s].spacing(r(e))
            },
            stretch: function(e, t) {
                return t.find('[data-scrolling-gallery="stretch"]').length || t.append('<div data-scrolling-gallery="stretch" style="position:relative;display:block;"/>'),
                l[s].stretch(e, t)
            },
            unstretch: function(e) {
                e.find('[data-scrolling-gallery="stretch"]').remove()
            }
        };
        ["bounds", "size", "offset"].forEach(function(e) {
            d[e] = a.bind(null, e)
        }),
        e.exports = d
    },
    228: function(e, t, n) {
        "use strict";
        function i(e) {
            return e.reduce(function(e, t) {
                return e + t
            }, 0) / e.length
        }
        function r(e) {
            m.length < g && !h(y, m) && i(e) < 1e3 && m.push({
                state: "IDLE"
            })
        }
        function o(e, t, n) {
            void 0 !== n && (_.push(Date.now() - n),
            r(_)),
            this.state = "IDLE",
            this.src = null,
            clearTimeout(this.timeout),
            t(e)
        }
        function a(e, t, n) {
            e.state = "LOADING";
            var i = new Image;
            i.onload = o.bind(e, i, n, Date.now()),
            i.onerror = o.bind(e, null, n),
            e.timeout = setInterval(o.bind(e, null, n), v),
            i.src = e.src = t
        }
        function s(e) {
            if (p[e.src])
                return e.onload(e, p[e.src]),
                !0;
            if (h(l({
                src: e.src
            }), m))
                return !0;
            var t = h(l({
                state: "IDLE"
            }), m);
            return !!t && (a(t, e.src, function(t) {
                t && (p[e.src] = t),
                e.onload(e, t),
                c()
            }),
            !0)
        }
        function c() {
            u.length && s(f(u)) && (u.shift(),
            c())
        }
        var u, l = n(7).where, d = n(8), f = d.first, h = d.find, p = {}, m = [], g = 6, v = 1e4, _ = [], y = l({
            state: "IDLE"
        });
        m.push({
            state: "IDLE"
        }),
        e.exports = {
            load: function(e) {
                u = e.slice(),
                c()
            }
        }
    },
    229: function(e) {
        "use strict";
        function t(e) {
            return (e /= .5) < 1 ? .5 * Math.pow(e, 2) : -.5 * ((e -= 2) * e - 2)
        }
        function n(e, t, i) {
            var r = (new Date).getTime() - e;
            return r < a ? requestAnimationFrame(function() {
                t(r / a),
                n(e, t, i)
            }) : i()
        }
        function i() {
            return o
        }
        function r() {}
        var o, a = 500, s = 50, c = !1;
        e.exports = function(e, a, u) {
            if (o = a - s,
            u = u || r,
            !c) {
                c = !0;
                var l = e.scrollLeft();
                n((new Date).getTime(), function(n) {
                    var r = i() - l;
                    e.scrollLeft(Math.round(l + t(n) * r))
                }, function() {
                    e.scrollLeft(i()),
                    c = !1,
                    u()
                })
            }
        }
    },
    230: function(e, t, n) {
        "use strict";
        function i(e) {
            var t = c(window.document, !window.createPopup);
            return {
                setCSSRule: function(e) {
                    t.set(e)
                },
                DOM: function(t) {
                    return e.hasOwnProperty(t) ? e[t] : (e[t] = $(t),
                    e[t])
                }
            }
        }
        function r(e) {
            return function(t, n) {
                t.DOM(d.CSS.GALLERY_CONTAINER).toggleClass(e, !n.val)
            }
        }
        function o(e, t) {
            var n = t.compute(t.val) || t.val
              , i = t.selector || d.CSS.GALLERY_CONTAINER;
            e.DOM(i).addClass(n)
        }
        function a(e) {
            return function(t) {
                t.DOM(d.CSS.GALLERY_CONTAINER).toggleClass(e, !1)
            }
        }
        function s(e, t) {
            return t.actions.set && f[t.actions.set] ? f[t.actions.set](e, t) : t.actions.enable && t.val === !0 && f[t.actions.enable] ? f[t.actions.enable](e, t) : t.actions.disable && t.val === !1 && f[t.actions.disable] ? f[t.actions.disable](e, t) : void 0
        }
        var c = n(231)
          , u = n(8).eachObj
          , l = (n(26),
        n(232))
          , d = n(211)
          , f = {
            enableTitles: r("__h-gallery_js-no-title"),
            disableTitles: r("__h-gallery_js-no-title"),
            enableDescriptions: r("__h-gallery_js-no-description"),
            disableDescriptions: r("__h-gallery_js-no-description"),
            enableFilenames: a("__h-gallery_js-no-filename"),
            disableFilenames: r("__h-gallery_js-no-filename"),
            enableImageNumbers: r("__h-gallery_js-no-image-number"),
            disableImageNumbers: r("__h-gallery_js-no-image-number"),
            enableShareMenu: a("__h-gallery_js-no-share"),
            disableShareMenu: r("__h-gallery_js-no-share"),
            enableDownload: a("__h-gallery_js-no-download"),
            disableDownload: r("__h-gallery_js-no-download"),
            setSpacing: o,
            setSize: o
        };
        e.exports = {
            render: function(e) {
                var t = i({});
                u(function(e, n) {
                    var i = l[e];
                    i.val = n,
                    s(t, i)
                }, e)
            }
        }
    },
    231: function(e, t, n) {
        "use strict";
        function i(e) {
            return e.replace(/\"+/g, "'")
        }
        function r(e) {
            return e.replace(/(\-[a-z])/g, function(e) {
                return e.toUpperCase().replace("-", "")
            })
        }
        function o(e) {
            return e.cssRules || e.rules
        }
        function a(e, t) {
            return t = i(t),
            Array.prototype.find.call(e, function(e) {
                return i(e.selectorText) === t
            }) || null
        }
        function s(e, t) {
            return e.insertRule ? e.insertRule(d.toString(t), o(e).length) : e.addRule(t.selector, d.body(t), -1),
            o(e)[o(e).length - 1]
        }
        function c(e, t) {
            var n = e.createElement("style");
            n.setAttribute("type", "text/css"),
            e.getElementsByTagName("head")[0].appendChild(n),
            t && n.appendChild(e.createTextNode(""));
            for (var i = e.styleSheets.length; i > 0; i--) {
                var r = e.styleSheets[i - 1];
                if (0 === o(r).length)
                    return r
            }
        }
        function u(e, t) {
            var n = []
              , a = c(e, t);
            return {
                rules: o,
                escape_selector: i,
                escape_prop: r,
                set: function(e) {
                    e.value = e.unit ? e.value + e.unit : e.value;
                    var t = d.get(n, e.selector) || d.add(n, a, e);
                    t.style[r(e.property)] = e.value
                }
            }
        }
        var l = n(7).where
          , d = {
            add: function(e, t, n) {
                var i = a(o(t), n.selector) || s(t, n);
                return e.push({
                    selector: n.selector,
                    rule: i
                }),
                i
            },
            get: function(e, t) {
                return (e.find(l({
                    selector: t
                })) || {}).rule
            },
            body: function(e) {
                return e.property + ":" + e.value
            },
            toString: function(e) {
                return e.selector + " {" + d.body(e) + ";}"
            }
        };
        e.exports = u
    },
    232: function(e) {
        "use strict";
        var t = function(e, t) {
            var n = Math.pow(10, t || 2);
            return Math.round(e * n) / n
        };
        e.exports = {
            size: {
                bounds: {
                    min: 0,
                    max: 1
                },
                actions: {
                    set: "setSize",
                    setPercentage: "setSizePercentage"
                },
                compute: function(e) {
                    return "gallery_size_" + (Math.round(e / t(1 / 3)) + 1)
                },
                selector: "#vb_page"
            },
            spacing: {
                bounds: {
                    min: 0,
                    max: 1
                },
                actions: {
                    set: "setSpacing",
                    setPercentage: "setSpacingPercentage"
                },
                compute: function(e) {
                    return "__h-gallery_js-image-spacing-" + (Math.round(e / t(.25)) + 1)
                }
            },
            display_titles: {
                actions: {
                    enable: "enableTitles",
                    disable: "disableTitles"
                }
            },
            display_descriptions: {
                actions: {
                    enable: "enableDescriptions",
                    disable: "disableDescriptions"
                }
            },
            display_filenames: {
                actions: {
                    enable: "enableFilenames",
                    disable: "disableFilenames"
                }
            },
            display_image_numbers: {
                actions: {
                    enable: "enableImageNumbers",
                    disable: "disableImageNumbers"
                }
            },
            share_menu_enabled: {
                actions: {
                    enable: "enableShareMenu",
                    disable: "disableShareMenu"
                }
            },
            download_enabled: {
                actions: {
                    enable: "enableDownload",
                    disable: "disableDownload"
                }
            }
        }
    },
    233: function(e) {
        "use strict";
        function t(e) {
            var t = window.getSelection()
              , n = document.createRange();
            return n.selectNode(e),
            t.removeAllRanges(),
            t.addRange(n),
            {
                clear: t.removeAllRanges.bind(t)
            }
        }
        function n(e) {
            var t = document.body.createTextRange();
            return t.moveToElementText(e),
            t.select(),
            {
                clear: function() {
                    t.collapse(),
                    t.select()
                }
            }
        }
        e.exports = function(e) {
            return window.getSelection ? t(e) : document.body.createTextRange ? n(e) : {
                clear: function() {}
            }
        }
    }
});
