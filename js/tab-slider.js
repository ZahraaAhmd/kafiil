! function(t) { "use strict";
    t.bootTabSlider = function(e, i) { var n = t(e),
            a = this,
            s = n.find(".nav-tabs > li").toArray(),
            r = t(e).find(".boot-tab-slider__wrapper"),
            o = t(e).find(".nav-tabs"),
            f = n.find(".boot-tab-slider__scroll-left"),
            l = n.find(".boot-tab-slider__scroll-right");
        a.DEFAULTS = { complete: null }, a.settings = {}, a.init = function() { a.settings = t.extend({}, a.DEFAULTS, i), d(), a.resetTabs(), t.isFunction(a.settings.complete) && a.settings.complete.call(this) }; var c = function() { var e = 0; return t.each(s, function(i, n) { var a = t(n).outerWidth();
                e += a }), e };
        a.resetTabs = function() { var t = r.outerWidth();
            o.css("left", 0), f.fadeOut(), t < c() ? l.fadeIn() : l.fadeOut() }, a.scrollTabs = function(t) { var e, i = r.outerWidth(),
                n = c(),
                a = o.position().left,
                s = u(t, i, n, a); if ("right" === t) { if (s >= 0) { var d = o.find("> li").eq(s);
                    e = d.position().left, e > Math.abs(n - i) ? (o.css("left", -Math.abs(n - i)), l.fadeOut()) : o.css("left", -e) } else o.css("left", -Math.abs(n - i)), l.fadeOut();
                f.fadeIn() } else if ("left" === t) { if (s >= 0) { var b = o.find("> li").eq(s);
                    e = b.position().left - i, 0 >= e ? (o.css("left", 0), f.fadeOut()) : o.css("left", -e) } else o.css("left", 0), f.fadeOut();
                l.fadeIn() } }; var u = function(e, i, n, a) { var r = -1; if ("right" === e) return i += Math.abs(a), t.each(s, function(e, n) { var a = t(n).outerWidth(); return i -= a, 0 >= i ? (r = e, !1) : void 0 }), r; if ("left" === e) { var o = s.reverse(),
                        f = n - Math.abs(a); return t.each(o, function(e, i) { var n = t(i).outerWidth(); return f -= n, 0 > f ? (r = Math.abs(e - o.length), !1) : void 0 }), r } },
            d = function() { f.on("click", function(t) { a.scrollTabs("left") }), l.on("click", function(t) { a.scrollTabs("right") }), t(window).resize(function() { a.resetTabs() }) };
        a.init() }, t.fn.bootTabSlider = function(e) { return this.each(function(i) { if (void 0 === t(this).data("bootTabSlider")) { var n = new t.bootTabSlider(this, e, i);
                t(this).data("bootTabSlider", n) } }) } }(jQuery);