/*------------------------------------*\
     Plugins - Table of contents
 \*------------------------------------*/
/*
 - date-time-picker
 - Isotope
 - Chocolat
*/

/*!
 * Isotope PACKAGED v3.0.6
 *
 * Licensed GPLv3 for open source use
 * or Isotope Commercial License for commercial use
 *
 * https://isotope.metafizzy.co
 * Copyright 2010-2018 Metafizzy
 */

!(function (t, e) {
    "function" == typeof define && define.amd
        ? define("jquery-bridget/jquery-bridget", ["jquery"], function (i) {
              return e(t, i);
          })
        : "object" == typeof module && module.exports
        ? (module.exports = e(t, require("jquery")))
        : (t.jQueryBridget = e(t, t.jQuery));
})(window, function (t, e) {
    "use strict";
    function i(i, s, a) {
        function u(t, e, o) {
            var n,
                s = "$()." + i + '("' + e + '")';
            return (
                t.each(function (t, u) {
                    var h = a.data(u, i);
                    if (!h)
                        return void r(
                            i +
                                " not initialized. Cannot call methods, i.e. " +
                                s
                        );
                    var d = h[e];
                    if (!d || "_" == e.charAt(0))
                        return void r(s + " is not a valid method");
                    var l = d.apply(h, o);
                    n = void 0 === n ? l : n;
                }),
                void 0 !== n ? n : t
            );
        }
        function h(t, e) {
            t.each(function (t, o) {
                var n = a.data(o, i);
                n
                    ? (n.option(e), n._init())
                    : ((n = new s(o, e)), a.data(o, i, n));
            });
        }
        (a = a || e || t.jQuery),
            a &&
                (s.prototype.option ||
                    (s.prototype.option = function (t) {
                        a.isPlainObject(t) &&
                            (this.options = a.extend(!0, this.options, t));
                    }),
                (a.fn[i] = function (t) {
                    if ("string" == typeof t) {
                        var e = n.call(arguments, 1);
                        return u(this, t, e);
                    }
                    return h(this, t), this;
                }),
                o(a));
    }
    function o(t) {
        !t || (t && t.bridget) || (t.bridget = i);
    }
    var n = Array.prototype.slice,
        s = t.console,
        r =
            "undefined" == typeof s
                ? function () {}
                : function (t) {
                      s.error(t);
                  };
    return o(e || t.jQuery), i;
}),
    (function (t, e) {
        "function" == typeof define && define.amd
            ? define("ev-emitter/ev-emitter", e)
            : "object" == typeof module && module.exports
            ? (module.exports = e())
            : (t.EvEmitter = e());
    })("undefined" != typeof window ? window : this, function () {
        function t() {}
        var e = t.prototype;
        return (
            (e.on = function (t, e) {
                if (t && e) {
                    var i = (this._events = this._events || {}),
                        o = (i[t] = i[t] || []);
                    return o.indexOf(e) == -1 && o.push(e), this;
                }
            }),
            (e.once = function (t, e) {
                if (t && e) {
                    this.on(t, e);
                    var i = (this._onceEvents = this._onceEvents || {}),
                        o = (i[t] = i[t] || {});
                    return (o[e] = !0), this;
                }
            }),
            (e.off = function (t, e) {
                var i = this._events && this._events[t];
                if (i && i.length) {
                    var o = i.indexOf(e);
                    return o != -1 && i.splice(o, 1), this;
                }
            }),
            (e.emitEvent = function (t, e) {
                var i = this._events && this._events[t];
                if (i && i.length) {
                    (i = i.slice(0)), (e = e || []);
                    for (
                        var o = this._onceEvents && this._onceEvents[t], n = 0;
                        n < i.length;
                        n++
                    ) {
                        var s = i[n],
                            r = o && o[s];
                        r && (this.off(t, s), delete o[s]), s.apply(this, e);
                    }
                    return this;
                }
            }),
            (e.allOff = function () {
                delete this._events, delete this._onceEvents;
            }),
            t
        );
    }),
    (function (t, e) {
        "function" == typeof define && define.amd
            ? define("get-size/get-size", e)
            : "object" == typeof module && module.exports
            ? (module.exports = e())
            : (t.getSize = e());
    })(window, function () {
        "use strict";
        function t(t) {
            var e = parseFloat(t),
                i = t.indexOf("%") == -1 && !isNaN(e);
            return i && e;
        }
        function e() {}
        function i() {
            for (
                var t = {
                        width: 0,
                        height: 0,
                        innerWidth: 0,
                        innerHeight: 0,
                        outerWidth: 0,
                        outerHeight: 0,
                    },
                    e = 0;
                e < h;
                e++
            ) {
                var i = u[e];
                t[i] = 0;
            }
            return t;
        }
        function o(t) {
            var e = getComputedStyle(t);
            return (
                e ||
                    a(
                        "Style returned " +
                            e +
                            ". Are you running this code in a hidden iframe on Firefox? See https://bit.ly/getsizebug1"
                    ),
                e
            );
        }
        function n() {
            if (!d) {
                d = !0;
                var e = document.createElement("div");
                (e.style.width = "200px"),
                    (e.style.padding = "1px 2px 3px 4px"),
                    (e.style.borderStyle = "solid"),
                    (e.style.borderWidth = "1px 2px 3px 4px"),
                    (e.style.boxSizing = "border-box");
                var i = document.body || document.documentElement;
                i.appendChild(e);
                var n = o(e);
                (r = 200 == Math.round(t(n.width))),
                    (s.isBoxSizeOuter = r),
                    i.removeChild(e);
            }
        }
        function s(e) {
            if (
                (n(),
                "string" == typeof e && (e = document.querySelector(e)),
                e && "object" == typeof e && e.nodeType)
            ) {
                var s = o(e);
                if ("none" == s.display) return i();
                var a = {};
                (a.width = e.offsetWidth), (a.height = e.offsetHeight);
                for (
                    var d = (a.isBorderBox = "border-box" == s.boxSizing),
                        l = 0;
                    l < h;
                    l++
                ) {
                    var f = u[l],
                        c = s[f],
                        m = parseFloat(c);
                    a[f] = isNaN(m) ? 0 : m;
                }
                var p = a.paddingLeft + a.paddingRight,
                    y = a.paddingTop + a.paddingBottom,
                    g = a.marginLeft + a.marginRight,
                    v = a.marginTop + a.marginBottom,
                    _ = a.borderLeftWidth + a.borderRightWidth,
                    z = a.borderTopWidth + a.borderBottomWidth,
                    I = d && r,
                    x = t(s.width);
                x !== !1 && (a.width = x + (I ? 0 : p + _));
                var S = t(s.height);
                return (
                    S !== !1 && (a.height = S + (I ? 0 : y + z)),
                    (a.innerWidth = a.width - (p + _)),
                    (a.innerHeight = a.height - (y + z)),
                    (a.outerWidth = a.width + g),
                    (a.outerHeight = a.height + v),
                    a
                );
            }
        }
        var r,
            a =
                "undefined" == typeof console
                    ? e
                    : function (t) {
                          console.error(t);
                      },
            u = [
                "paddingLeft",
                "paddingRight",
                "paddingTop",
                "paddingBottom",
                "marginLeft",
                "marginRight",
                "marginTop",
                "marginBottom",
                "borderLeftWidth",
                "borderRightWidth",
                "borderTopWidth",
                "borderBottomWidth",
            ],
            h = u.length,
            d = !1;
        return s;
    }),
    (function (t, e) {
        "use strict";
        "function" == typeof define && define.amd
            ? define("desandro-matches-selector/matches-selector", e)
            : "object" == typeof module && module.exports
            ? (module.exports = e())
            : (t.matchesSelector = e());
    })(window, function () {
        "use strict";
        var t = (function () {
            var t = window.Element.prototype;
            if (t.matches) return "matches";
            if (t.matchesSelector) return "matchesSelector";
            for (
                var e = ["webkit", "moz", "ms", "o"], i = 0;
                i < e.length;
                i++
            ) {
                var o = e[i],
                    n = o + "MatchesSelector";
                if (t[n]) return n;
            }
        })();
        return function (e, i) {
            return e[t](i);
        };
    }),
    (function (t, e) {
        "function" == typeof define && define.amd
            ? define(
                  "fizzy-ui-utils/utils",
                  ["desandro-matches-selector/matches-selector"],
                  function (i) {
                      return e(t, i);
                  }
              )
            : "object" == typeof module && module.exports
            ? (module.exports = e(t, require("desandro-matches-selector")))
            : (t.fizzyUIUtils = e(t, t.matchesSelector));
    })(window, function (t, e) {
        var i = {};
        (i.extend = function (t, e) {
            for (var i in e) t[i] = e[i];
            return t;
        }),
            (i.modulo = function (t, e) {
                return ((t % e) + e) % e;
            });
        var o = Array.prototype.slice;
        (i.makeArray = function (t) {
            if (Array.isArray(t)) return t;
            if (null === t || void 0 === t) return [];
            var e = "object" == typeof t && "number" == typeof t.length;
            return e ? o.call(t) : [t];
        }),
            (i.removeFrom = function (t, e) {
                var i = t.indexOf(e);
                i != -1 && t.splice(i, 1);
            }),
            (i.getParent = function (t, i) {
                for (; t.parentNode && t != document.body; )
                    if (((t = t.parentNode), e(t, i))) return t;
            }),
            (i.getQueryElement = function (t) {
                return "string" == typeof t ? document.querySelector(t) : t;
            }),
            (i.handleEvent = function (t) {
                var e = "on" + t.type;
                this[e] && this[e](t);
            }),
            (i.filterFindElements = function (t, o) {
                t = i.makeArray(t);
                var n = [];
                return (
                    t.forEach(function (t) {
                        if (t instanceof HTMLElement) {
                            if (!o) return void n.push(t);
                            e(t, o) && n.push(t);
                            for (
                                var i = t.querySelectorAll(o), s = 0;
                                s < i.length;
                                s++
                            )
                                n.push(i[s]);
                        }
                    }),
                    n
                );
            }),
            (i.debounceMethod = function (t, e, i) {
                i = i || 100;
                var o = t.prototype[e],
                    n = e + "Timeout";
                t.prototype[e] = function () {
                    var t = this[n];
                    clearTimeout(t);
                    var e = arguments,
                        s = this;
                    this[n] = setTimeout(function () {
                        o.apply(s, e), delete s[n];
                    }, i);
                };
            }),
            (i.docReady = function (t) {
                var e = document.readyState;
                "complete" == e || "interactive" == e
                    ? setTimeout(t)
                    : document.addEventListener("DOMContentLoaded", t);
            }),
            (i.toDashed = function (t) {
                return t
                    .replace(/(.)([A-Z])/g, function (t, e, i) {
                        return e + "-" + i;
                    })
                    .toLowerCase();
            });
        var n = t.console;
        return (
            (i.htmlInit = function (e, o) {
                i.docReady(function () {
                    var s = i.toDashed(o),
                        r = "data-" + s,
                        a = document.querySelectorAll("[" + r + "]"),
                        u = document.querySelectorAll(".js-" + s),
                        h = i.makeArray(a).concat(i.makeArray(u)),
                        d = r + "-options",
                        l = t.jQuery;
                    h.forEach(function (t) {
                        var i,
                            s = t.getAttribute(r) || t.getAttribute(d);
                        try {
                            i = s && JSON.parse(s);
                        } catch (a) {
                            return void (
                                n &&
                                n.error(
                                    "Error parsing " +
                                        r +
                                        " on " +
                                        t.className +
                                        ": " +
                                        a
                                )
                            );
                        }
                        var u = new e(t, i);
                        l && l.data(t, o, u);
                    });
                });
            }),
            i
        );
    }),
    (function (t, e) {
        "function" == typeof define && define.amd
            ? define(
                  "outlayer/item",
                  ["ev-emitter/ev-emitter", "get-size/get-size"],
                  e
              )
            : "object" == typeof module && module.exports
            ? (module.exports = e(require("ev-emitter"), require("get-size")))
            : ((t.Outlayer = {}),
              (t.Outlayer.Item = e(t.EvEmitter, t.getSize)));
    })(window, function (t, e) {
        "use strict";
        function i(t) {
            for (var e in t) return !1;
            return (e = null), !0;
        }
        function o(t, e) {
            t &&
                ((this.element = t),
                (this.layout = e),
                (this.position = { x: 0, y: 0 }),
                this._create());
        }
        function n(t) {
            return t.replace(/([A-Z])/g, function (t) {
                return "-" + t.toLowerCase();
            });
        }
        var s = document.documentElement.style,
            r =
                "string" == typeof s.transition
                    ? "transition"
                    : "WebkitTransition",
            a =
                "string" == typeof s.transform
                    ? "transform"
                    : "WebkitTransform",
            u = {
                WebkitTransition: "webkitTransitionEnd",
                transition: "transitionend",
            }[r],
            h = {
                transform: a,
                transition: r,
                transitionDuration: r + "Duration",
                transitionProperty: r + "Property",
                transitionDelay: r + "Delay",
            },
            d = (o.prototype = Object.create(t.prototype));
        (d.constructor = o),
            (d._create = function () {
                (this._transn = { ingProperties: {}, clean: {}, onEnd: {} }),
                    this.css({ position: "absolute" });
            }),
            (d.handleEvent = function (t) {
                var e = "on" + t.type;
                this[e] && this[e](t);
            }),
            (d.getSize = function () {
                this.size = e(this.element);
            }),
            (d.css = function (t) {
                var e = this.element.style;
                for (var i in t) {
                    var o = h[i] || i;
                    e[o] = t[i];
                }
            }),
            (d.getPosition = function () {
                var t = getComputedStyle(this.element),
                    e = this.layout._getOption("originLeft"),
                    i = this.layout._getOption("originTop"),
                    o = t[e ? "left" : "right"],
                    n = t[i ? "top" : "bottom"],
                    s = parseFloat(o),
                    r = parseFloat(n),
                    a = this.layout.size;
                o.indexOf("%") != -1 && (s = (s / 100) * a.width),
                    n.indexOf("%") != -1 && (r = (r / 100) * a.height),
                    (s = isNaN(s) ? 0 : s),
                    (r = isNaN(r) ? 0 : r),
                    (s -= e ? a.paddingLeft : a.paddingRight),
                    (r -= i ? a.paddingTop : a.paddingBottom),
                    (this.position.x = s),
                    (this.position.y = r);
            }),
            (d.layoutPosition = function () {
                var t = this.layout.size,
                    e = {},
                    i = this.layout._getOption("originLeft"),
                    o = this.layout._getOption("originTop"),
                    n = i ? "paddingLeft" : "paddingRight",
                    s = i ? "left" : "right",
                    r = i ? "right" : "left",
                    a = this.position.x + t[n];
                (e[s] = this.getXValue(a)), (e[r] = "");
                var u = o ? "paddingTop" : "paddingBottom",
                    h = o ? "top" : "bottom",
                    d = o ? "bottom" : "top",
                    l = this.position.y + t[u];
                (e[h] = this.getYValue(l)),
                    (e[d] = ""),
                    this.css(e),
                    this.emitEvent("layout", [this]);
            }),
            (d.getXValue = function (t) {
                var e = this.layout._getOption("horizontal");
                return this.layout.options.percentPosition && !e
                    ? (t / this.layout.size.width) * 100 + "%"
                    : t + "px";
            }),
            (d.getYValue = function (t) {
                var e = this.layout._getOption("horizontal");
                return this.layout.options.percentPosition && e
                    ? (t / this.layout.size.height) * 100 + "%"
                    : t + "px";
            }),
            (d._transitionTo = function (t, e) {
                this.getPosition();
                var i = this.position.x,
                    o = this.position.y,
                    n = t == this.position.x && e == this.position.y;
                if ((this.setPosition(t, e), n && !this.isTransitioning))
                    return void this.layoutPosition();
                var s = t - i,
                    r = e - o,
                    a = {};
                (a.transform = this.getTranslate(s, r)),
                    this.transition({
                        to: a,
                        onTransitionEnd: { transform: this.layoutPosition },
                        isCleaning: !0,
                    });
            }),
            (d.getTranslate = function (t, e) {
                var i = this.layout._getOption("originLeft"),
                    o = this.layout._getOption("originTop");
                return (
                    (t = i ? t : -t),
                    (e = o ? e : -e),
                    "translate3d(" + t + "px, " + e + "px, 0)"
                );
            }),
            (d.goTo = function (t, e) {
                this.setPosition(t, e), this.layoutPosition();
            }),
            (d.moveTo = d._transitionTo),
            (d.setPosition = function (t, e) {
                (this.position.x = parseFloat(t)),
                    (this.position.y = parseFloat(e));
            }),
            (d._nonTransition = function (t) {
                this.css(t.to), t.isCleaning && this._removeStyles(t.to);
                for (var e in t.onTransitionEnd)
                    t.onTransitionEnd[e].call(this);
            }),
            (d.transition = function (t) {
                if (!parseFloat(this.layout.options.transitionDuration))
                    return void this._nonTransition(t);
                var e = this._transn;
                for (var i in t.onTransitionEnd)
                    e.onEnd[i] = t.onTransitionEnd[i];
                for (i in t.to)
                    (e.ingProperties[i] = !0),
                        t.isCleaning && (e.clean[i] = !0);
                if (t.from) {
                    this.css(t.from);
                    var o = this.element.offsetHeight;
                    o = null;
                }
                this.enableTransition(t.to),
                    this.css(t.to),
                    (this.isTransitioning = !0);
            });
        var l = "opacity," + n(a);
        (d.enableTransition = function () {
            if (!this.isTransitioning) {
                var t = this.layout.options.transitionDuration;
                (t = "number" == typeof t ? t + "ms" : t),
                    this.css({
                        transitionProperty: l,
                        transitionDuration: t,
                        transitionDelay: this.staggerDelay || 0,
                    }),
                    this.element.addEventListener(u, this, !1);
            }
        }),
            (d.onwebkitTransitionEnd = function (t) {
                this.ontransitionend(t);
            }),
            (d.onotransitionend = function (t) {
                this.ontransitionend(t);
            });
        var f = { "-webkit-transform": "transform" };
        (d.ontransitionend = function (t) {
            if (t.target === this.element) {
                var e = this._transn,
                    o = f[t.propertyName] || t.propertyName;
                if (
                    (delete e.ingProperties[o],
                    i(e.ingProperties) && this.disableTransition(),
                    o in e.clean &&
                        ((this.element.style[t.propertyName] = ""),
                        delete e.clean[o]),
                    o in e.onEnd)
                ) {
                    var n = e.onEnd[o];
                    n.call(this), delete e.onEnd[o];
                }
                this.emitEvent("transitionEnd", [this]);
            }
        }),
            (d.disableTransition = function () {
                this.removeTransitionStyles(),
                    this.element.removeEventListener(u, this, !1),
                    (this.isTransitioning = !1);
            }),
            (d._removeStyles = function (t) {
                var e = {};
                for (var i in t) e[i] = "";
                this.css(e);
            });
        var c = {
            transitionProperty: "",
            transitionDuration: "",
            transitionDelay: "",
        };
        return (
            (d.removeTransitionStyles = function () {
                this.css(c);
            }),
            (d.stagger = function (t) {
                (t = isNaN(t) ? 0 : t), (this.staggerDelay = t + "ms");
            }),
            (d.removeElem = function () {
                this.element.parentNode.removeChild(this.element),
                    this.css({ display: "" }),
                    this.emitEvent("remove", [this]);
            }),
            (d.remove = function () {
                return r && parseFloat(this.layout.options.transitionDuration)
                    ? (this.once("transitionEnd", function () {
                          this.removeElem();
                      }),
                      void this.hide())
                    : void this.removeElem();
            }),
            (d.reveal = function () {
                delete this.isHidden, this.css({ display: "" });
                var t = this.layout.options,
                    e = {},
                    i = this.getHideRevealTransitionEndProperty("visibleStyle");
                (e[i] = this.onRevealTransitionEnd),
                    this.transition({
                        from: t.hiddenStyle,
                        to: t.visibleStyle,
                        isCleaning: !0,
                        onTransitionEnd: e,
                    });
            }),
            (d.onRevealTransitionEnd = function () {
                this.isHidden || this.emitEvent("reveal");
            }),
            (d.getHideRevealTransitionEndProperty = function (t) {
                var e = this.layout.options[t];
                if (e.opacity) return "opacity";
                for (var i in e) return i;
            }),
            (d.hide = function () {
                (this.isHidden = !0), this.css({ display: "" });
                var t = this.layout.options,
                    e = {},
                    i = this.getHideRevealTransitionEndProperty("hiddenStyle");
                (e[i] = this.onHideTransitionEnd),
                    this.transition({
                        from: t.visibleStyle,
                        to: t.hiddenStyle,
                        isCleaning: !0,
                        onTransitionEnd: e,
                    });
            }),
            (d.onHideTransitionEnd = function () {
                this.isHidden &&
                    (this.css({ display: "none" }), this.emitEvent("hide"));
            }),
            (d.destroy = function () {
                this.css({
                    position: "",
                    left: "",
                    right: "",
                    top: "",
                    bottom: "",
                    transition: "",
                    transform: "",
                });
            }),
            o
        );
    }),
    (function (t, e) {
        "use strict";
        "function" == typeof define && define.amd
            ? define(
                  "outlayer/outlayer",
                  [
                      "ev-emitter/ev-emitter",
                      "get-size/get-size",
                      "fizzy-ui-utils/utils",
                      "./item",
                  ],
                  function (i, o, n, s) {
                      return e(t, i, o, n, s);
                  }
              )
            : "object" == typeof module && module.exports
            ? (module.exports = e(
                  t,
                  require("ev-emitter"),
                  require("get-size"),
                  require("fizzy-ui-utils"),
                  require("./item")
              ))
            : (t.Outlayer = e(
                  t,
                  t.EvEmitter,
                  t.getSize,
                  t.fizzyUIUtils,
                  t.Outlayer.Item
              ));
    })(window, function (t, e, i, o, n) {
        "use strict";
        function s(t, e) {
            var i = o.getQueryElement(t);
            if (!i)
                return void (
                    u &&
                    u.error(
                        "Bad element for " +
                            this.constructor.namespace +
                            ": " +
                            (i || t)
                    )
                );
            (this.element = i),
                h && (this.$element = h(this.element)),
                (this.options = o.extend({}, this.constructor.defaults)),
                this.option(e);
            var n = ++l;
            (this.element.outlayerGUID = n), (f[n] = this), this._create();
            var s = this._getOption("initLayout");
            s && this.layout();
        }
        function r(t) {
            function e() {
                t.apply(this, arguments);
            }
            return (
                (e.prototype = Object.create(t.prototype)),
                (e.prototype.constructor = e),
                e
            );
        }
        function a(t) {
            if ("number" == typeof t) return t;
            var e = t.match(/(^\d*\.?\d*)(\w*)/),
                i = e && e[1],
                o = e && e[2];
            if (!i.length) return 0;
            i = parseFloat(i);
            var n = m[o] || 1;
            return i * n;
        }
        var u = t.console,
            h = t.jQuery,
            d = function () {},
            l = 0,
            f = {};
        (s.namespace = "outlayer"),
            (s.Item = n),
            (s.defaults = {
                containerStyle: { position: "relative" },
                initLayout: !0,
                originLeft: !0,
                originTop: !0,
                resize: !0,
                resizeContainer: !0,
                transitionDuration: "0.4s",
                hiddenStyle: { opacity: 0, transform: "scale(0.001)" },
                visibleStyle: { opacity: 1, transform: "scale(1)" },
            });
        var c = s.prototype;
        o.extend(c, e.prototype),
            (c.option = function (t) {
                o.extend(this.options, t);
            }),
            (c._getOption = function (t) {
                var e = this.constructor.compatOptions[t];
                return e && void 0 !== this.options[e]
                    ? this.options[e]
                    : this.options[t];
            }),
            (s.compatOptions = {
                initLayout: "isInitLayout",
                horizontal: "isHorizontal",
                layoutInstant: "isLayoutInstant",
                originLeft: "isOriginLeft",
                originTop: "isOriginTop",
                resize: "isResizeBound",
                resizeContainer: "isResizingContainer",
            }),
            (c._create = function () {
                this.reloadItems(),
                    (this.stamps = []),
                    this.stamp(this.options.stamp),
                    o.extend(this.element.style, this.options.containerStyle);
                var t = this._getOption("resize");
                t && this.bindResize();
            }),
            (c.reloadItems = function () {
                this.items = this._itemize(this.element.children);
            }),
            (c._itemize = function (t) {
                for (
                    var e = this._filterFindItemElements(t),
                        i = this.constructor.Item,
                        o = [],
                        n = 0;
                    n < e.length;
                    n++
                ) {
                    var s = e[n],
                        r = new i(s, this);
                    o.push(r);
                }
                return o;
            }),
            (c._filterFindItemElements = function (t) {
                return o.filterFindElements(t, this.options.itemSelector);
            }),
            (c.getItemElements = function () {
                return this.items.map(function (t) {
                    return t.element;
                });
            }),
            (c.layout = function () {
                this._resetLayout(), this._manageStamps();
                var t = this._getOption("layoutInstant"),
                    e = void 0 !== t ? t : !this._isLayoutInited;
                this.layoutItems(this.items, e), (this._isLayoutInited = !0);
            }),
            (c._init = c.layout),
            (c._resetLayout = function () {
                this.getSize();
            }),
            (c.getSize = function () {
                this.size = i(this.element);
            }),
            (c._getMeasurement = function (t, e) {
                var o,
                    n = this.options[t];
                n
                    ? ("string" == typeof n
                          ? (o = this.element.querySelector(n))
                          : n instanceof HTMLElement && (o = n),
                      (this[t] = o ? i(o)[e] : n))
                    : (this[t] = 0);
            }),
            (c.layoutItems = function (t, e) {
                (t = this._getItemsForLayout(t)),
                    this._layoutItems(t, e),
                    this._postLayout();
            }),
            (c._getItemsForLayout = function (t) {
                return t.filter(function (t) {
                    return !t.isIgnored;
                });
            }),
            (c._layoutItems = function (t, e) {
                if ((this._emitCompleteOnItems("layout", t), t && t.length)) {
                    var i = [];
                    t.forEach(function (t) {
                        var o = this._getItemLayoutPosition(t);
                        (o.item = t),
                            (o.isInstant = e || t.isLayoutInstant),
                            i.push(o);
                    }, this),
                        this._processLayoutQueue(i);
                }
            }),
            (c._getItemLayoutPosition = function () {
                return { x: 0, y: 0 };
            }),
            (c._processLayoutQueue = function (t) {
                this.updateStagger(),
                    t.forEach(function (t, e) {
                        this._positionItem(t.item, t.x, t.y, t.isInstant, e);
                    }, this);
            }),
            (c.updateStagger = function () {
                var t = this.options.stagger;
                return null === t || void 0 === t
                    ? void (this.stagger = 0)
                    : ((this.stagger = a(t)), this.stagger);
            }),
            (c._positionItem = function (t, e, i, o, n) {
                o
                    ? t.goTo(e, i)
                    : (t.stagger(n * this.stagger), t.moveTo(e, i));
            }),
            (c._postLayout = function () {
                this.resizeContainer();
            }),
            (c.resizeContainer = function () {
                var t = this._getOption("resizeContainer");
                if (t) {
                    var e = this._getContainerSize();
                    e &&
                        (this._setContainerMeasure(e.width, !0),
                        this._setContainerMeasure(e.height, !1));
                }
            }),
            (c._getContainerSize = d),
            (c._setContainerMeasure = function (t, e) {
                if (void 0 !== t) {
                    var i = this.size;
                    i.isBorderBox &&
                        (t += e
                            ? i.paddingLeft +
                              i.paddingRight +
                              i.borderLeftWidth +
                              i.borderRightWidth
                            : i.paddingBottom +
                              i.paddingTop +
                              i.borderTopWidth +
                              i.borderBottomWidth),
                        (t = Math.max(t, 0)),
                        (this.element.style[e ? "width" : "height"] = t + "px");
                }
            }),
            (c._emitCompleteOnItems = function (t, e) {
                function i() {
                    n.dispatchEvent(t + "Complete", null, [e]);
                }
                function o() {
                    r++, r == s && i();
                }
                var n = this,
                    s = e.length;
                if (!e || !s) return void i();
                var r = 0;
                e.forEach(function (e) {
                    e.once(t, o);
                });
            }),
            (c.dispatchEvent = function (t, e, i) {
                var o = e ? [e].concat(i) : i;
                if ((this.emitEvent(t, o), h))
                    if (
                        ((this.$element = this.$element || h(this.element)), e)
                    ) {
                        var n = h.Event(e);
                        (n.type = t), this.$element.trigger(n, i);
                    } else this.$element.trigger(t, i);
            }),
            (c.ignore = function (t) {
                var e = this.getItem(t);
                e && (e.isIgnored = !0);
            }),
            (c.unignore = function (t) {
                var e = this.getItem(t);
                e && delete e.isIgnored;
            }),
            (c.stamp = function (t) {
                (t = this._find(t)),
                    t &&
                        ((this.stamps = this.stamps.concat(t)),
                        t.forEach(this.ignore, this));
            }),
            (c.unstamp = function (t) {
                (t = this._find(t)),
                    t &&
                        t.forEach(function (t) {
                            o.removeFrom(this.stamps, t), this.unignore(t);
                        }, this);
            }),
            (c._find = function (t) {
                if (t)
                    return (
                        "string" == typeof t &&
                            (t = this.element.querySelectorAll(t)),
                        (t = o.makeArray(t))
                    );
            }),
            (c._manageStamps = function () {
                this.stamps &&
                    this.stamps.length &&
                    (this._getBoundingRect(),
                    this.stamps.forEach(this._manageStamp, this));
            }),
            (c._getBoundingRect = function () {
                var t = this.element.getBoundingClientRect(),
                    e = this.size;
                this._boundingRect = {
                    left: t.left + e.paddingLeft + e.borderLeftWidth,
                    top: t.top + e.paddingTop + e.borderTopWidth,
                    right: t.right - (e.paddingRight + e.borderRightWidth),
                    bottom: t.bottom - (e.paddingBottom + e.borderBottomWidth),
                };
            }),
            (c._manageStamp = d),
            (c._getElementOffset = function (t) {
                var e = t.getBoundingClientRect(),
                    o = this._boundingRect,
                    n = i(t),
                    s = {
                        left: e.left - o.left - n.marginLeft,
                        top: e.top - o.top - n.marginTop,
                        right: o.right - e.right - n.marginRight,
                        bottom: o.bottom - e.bottom - n.marginBottom,
                    };
                return s;
            }),
            (c.handleEvent = o.handleEvent),
            (c.bindResize = function () {
                t.addEventListener("resize", this), (this.isResizeBound = !0);
            }),
            (c.unbindResize = function () {
                t.removeEventListener("resize", this),
                    (this.isResizeBound = !1);
            }),
            (c.onresize = function () {
                this.resize();
            }),
            o.debounceMethod(s, "onresize", 100),
            (c.resize = function () {
                this.isResizeBound && this.needsResizeLayout() && this.layout();
            }),
            (c.needsResizeLayout = function () {
                var t = i(this.element),
                    e = this.size && t;
                return e && t.innerWidth !== this.size.innerWidth;
            }),
            (c.addItems = function (t) {
                var e = this._itemize(t);
                return e.length && (this.items = this.items.concat(e)), e;
            }),
            (c.appended = function (t) {
                var e = this.addItems(t);
                e.length && (this.layoutItems(e, !0), this.reveal(e));
            }),
            (c.prepended = function (t) {
                var e = this._itemize(t);
                if (e.length) {
                    var i = this.items.slice(0);
                    (this.items = e.concat(i)),
                        this._resetLayout(),
                        this._manageStamps(),
                        this.layoutItems(e, !0),
                        this.reveal(e),
                        this.layoutItems(i);
                }
            }),
            (c.reveal = function (t) {
                if ((this._emitCompleteOnItems("reveal", t), t && t.length)) {
                    var e = this.updateStagger();
                    t.forEach(function (t, i) {
                        t.stagger(i * e), t.reveal();
                    });
                }
            }),
            (c.hide = function (t) {
                if ((this._emitCompleteOnItems("hide", t), t && t.length)) {
                    var e = this.updateStagger();
                    t.forEach(function (t, i) {
                        t.stagger(i * e), t.hide();
                    });
                }
            }),
            (c.revealItemElements = function (t) {
                var e = this.getItems(t);
                this.reveal(e);
            }),
            (c.hideItemElements = function (t) {
                var e = this.getItems(t);
                this.hide(e);
            }),
            (c.getItem = function (t) {
                for (var e = 0; e < this.items.length; e++) {
                    var i = this.items[e];
                    if (i.element == t) return i;
                }
            }),
            (c.getItems = function (t) {
                t = o.makeArray(t);
                var e = [];
                return (
                    t.forEach(function (t) {
                        var i = this.getItem(t);
                        i && e.push(i);
                    }, this),
                    e
                );
            }),
            (c.remove = function (t) {
                var e = this.getItems(t);
                this._emitCompleteOnItems("remove", e),
                    e &&
                        e.length &&
                        e.forEach(function (t) {
                            t.remove(), o.removeFrom(this.items, t);
                        }, this);
            }),
            (c.destroy = function () {
                var t = this.element.style;
                (t.height = ""),
                    (t.position = ""),
                    (t.width = ""),
                    this.items.forEach(function (t) {
                        t.destroy();
                    }),
                    this.unbindResize();
                var e = this.element.outlayerGUID;
                delete f[e],
                    delete this.element.outlayerGUID,
                    h && h.removeData(this.element, this.constructor.namespace);
            }),
            (s.data = function (t) {
                t = o.getQueryElement(t);
                var e = t && t.outlayerGUID;
                return e && f[e];
            }),
            (s.create = function (t, e) {
                var i = r(s);
                return (
                    (i.defaults = o.extend({}, s.defaults)),
                    o.extend(i.defaults, e),
                    (i.compatOptions = o.extend({}, s.compatOptions)),
                    (i.namespace = t),
                    (i.data = s.data),
                    (i.Item = r(n)),
                    o.htmlInit(i, t),
                    h && h.bridget && h.bridget(t, i),
                    i
                );
            });
        var m = { ms: 1, s: 1e3 };
        return (s.Item = n), s;
    }),
    (function (t, e) {
        "function" == typeof define && define.amd
            ? define("isotope-layout/js/item", ["outlayer/outlayer"], e)
            : "object" == typeof module && module.exports
            ? (module.exports = e(require("outlayer")))
            : ((t.Isotope = t.Isotope || {}), (t.Isotope.Item = e(t.Outlayer)));
    })(window, function (t) {
        "use strict";
        function e() {
            t.Item.apply(this, arguments);
        }
        var i = (e.prototype = Object.create(t.Item.prototype)),
            o = i._create;
        (i._create = function () {
            (this.id = this.layout.itemGUID++),
                o.call(this),
                (this.sortData = {});
        }),
            (i.updateSortData = function () {
                if (!this.isIgnored) {
                    (this.sortData.id = this.id),
                        (this.sortData["original-order"] = this.id),
                        (this.sortData.random = Math.random());
                    var t = this.layout.options.getSortData,
                        e = this.layout._sorters;
                    for (var i in t) {
                        var o = e[i];
                        this.sortData[i] = o(this.element, this);
                    }
                }
            });
        var n = i.destroy;
        return (
            (i.destroy = function () {
                n.apply(this, arguments), this.css({ display: "" });
            }),
            e
        );
    }),
    (function (t, e) {
        "function" == typeof define && define.amd
            ? define(
                  "isotope-layout/js/layout-mode",
                  ["get-size/get-size", "outlayer/outlayer"],
                  e
              )
            : "object" == typeof module && module.exports
            ? (module.exports = e(require("get-size"), require("outlayer")))
            : ((t.Isotope = t.Isotope || {}),
              (t.Isotope.LayoutMode = e(t.getSize, t.Outlayer)));
    })(window, function (t, e) {
        "use strict";
        function i(t) {
            (this.isotope = t),
                t &&
                    ((this.options = t.options[this.namespace]),
                    (this.element = t.element),
                    (this.items = t.filteredItems),
                    (this.size = t.size));
        }
        var o = i.prototype,
            n = [
                "_resetLayout",
                "_getItemLayoutPosition",
                "_manageStamp",
                "_getContainerSize",
                "_getElementOffset",
                "needsResizeLayout",
                "_getOption",
            ];
        return (
            n.forEach(function (t) {
                o[t] = function () {
                    return e.prototype[t].apply(this.isotope, arguments);
                };
            }),
            (o.needsVerticalResizeLayout = function () {
                var e = t(this.isotope.element),
                    i = this.isotope.size && e;
                return i && e.innerHeight != this.isotope.size.innerHeight;
            }),
            (o._getMeasurement = function () {
                this.isotope._getMeasurement.apply(this, arguments);
            }),
            (o.getColumnWidth = function () {
                this.getSegmentSize("column", "Width");
            }),
            (o.getRowHeight = function () {
                this.getSegmentSize("row", "Height");
            }),
            (o.getSegmentSize = function (t, e) {
                var i = t + e,
                    o = "outer" + e;
                if ((this._getMeasurement(i, o), !this[i])) {
                    var n = this.getFirstItemSize();
                    this[i] = (n && n[o]) || this.isotope.size["inner" + e];
                }
            }),
            (o.getFirstItemSize = function () {
                var e = this.isotope.filteredItems[0];
                return e && e.element && t(e.element);
            }),
            (o.layout = function () {
                this.isotope.layout.apply(this.isotope, arguments);
            }),
            (o.getSize = function () {
                this.isotope.getSize(), (this.size = this.isotope.size);
            }),
            (i.modes = {}),
            (i.create = function (t, e) {
                function n() {
                    i.apply(this, arguments);
                }
                return (
                    (n.prototype = Object.create(o)),
                    (n.prototype.constructor = n),
                    e && (n.options = e),
                    (n.prototype.namespace = t),
                    (i.modes[t] = n),
                    n
                );
            }),
            i
        );
    }),
    (function (t, e) {
        "function" == typeof define && define.amd
            ? define(
                  "masonry-layout/masonry",
                  ["outlayer/outlayer", "get-size/get-size"],
                  e
              )
            : "object" == typeof module && module.exports
            ? (module.exports = e(require("outlayer"), require("get-size")))
            : (t.Masonry = e(t.Outlayer, t.getSize));
    })(window, function (t, e) {
        var i = t.create("masonry");
        i.compatOptions.fitWidth = "isFitWidth";
        var o = i.prototype;
        return (
            (o._resetLayout = function () {
                this.getSize(),
                    this._getMeasurement("columnWidth", "outerWidth"),
                    this._getMeasurement("gutter", "outerWidth"),
                    this.measureColumns(),
                    (this.colYs = []);
                for (var t = 0; t < this.cols; t++) this.colYs.push(0);
                (this.maxY = 0), (this.horizontalColIndex = 0);
            }),
            (o.measureColumns = function () {
                if ((this.getContainerWidth(), !this.columnWidth)) {
                    var t = this.items[0],
                        i = t && t.element;
                    this.columnWidth =
                        (i && e(i).outerWidth) || this.containerWidth;
                }
                var o = (this.columnWidth += this.gutter),
                    n = this.containerWidth + this.gutter,
                    s = n / o,
                    r = o - (n % o),
                    a = r && r < 1 ? "round" : "floor";
                (s = Math[a](s)), (this.cols = Math.max(s, 1));
            }),
            (o.getContainerWidth = function () {
                var t = this._getOption("fitWidth"),
                    i = t ? this.element.parentNode : this.element,
                    o = e(i);
                this.containerWidth = o && o.innerWidth;
            }),
            (o._getItemLayoutPosition = function (t) {
                t.getSize();
                var e = t.size.outerWidth % this.columnWidth,
                    i = e && e < 1 ? "round" : "ceil",
                    o = Math[i](t.size.outerWidth / this.columnWidth);
                o = Math.min(o, this.cols);
                for (
                    var n = this.options.horizontalOrder
                            ? "_getHorizontalColPosition"
                            : "_getTopColPosition",
                        s = this[n](o, t),
                        r = { x: this.columnWidth * s.col, y: s.y },
                        a = s.y + t.size.outerHeight,
                        u = o + s.col,
                        h = s.col;
                    h < u;
                    h++
                )
                    this.colYs[h] = a;
                return r;
            }),
            (o._getTopColPosition = function (t) {
                var e = this._getTopColGroup(t),
                    i = Math.min.apply(Math, e);
                return { col: e.indexOf(i), y: i };
            }),
            (o._getTopColGroup = function (t) {
                if (t < 2) return this.colYs;
                for (var e = [], i = this.cols + 1 - t, o = 0; o < i; o++)
                    e[o] = this._getColGroupY(o, t);
                return e;
            }),
            (o._getColGroupY = function (t, e) {
                if (e < 2) return this.colYs[t];
                var i = this.colYs.slice(t, t + e);
                return Math.max.apply(Math, i);
            }),
            (o._getHorizontalColPosition = function (t, e) {
                var i = this.horizontalColIndex % this.cols,
                    o = t > 1 && i + t > this.cols;
                i = o ? 0 : i;
                var n = e.size.outerWidth && e.size.outerHeight;
                return (
                    (this.horizontalColIndex = n
                        ? i + t
                        : this.horizontalColIndex),
                    { col: i, y: this._getColGroupY(i, t) }
                );
            }),
            (o._manageStamp = function (t) {
                var i = e(t),
                    o = this._getElementOffset(t),
                    n = this._getOption("originLeft"),
                    s = n ? o.left : o.right,
                    r = s + i.outerWidth,
                    a = Math.floor(s / this.columnWidth);
                a = Math.max(0, a);
                var u = Math.floor(r / this.columnWidth);
                (u -= r % this.columnWidth ? 0 : 1),
                    (u = Math.min(this.cols - 1, u));
                for (
                    var h = this._getOption("originTop"),
                        d = (h ? o.top : o.bottom) + i.outerHeight,
                        l = a;
                    l <= u;
                    l++
                )
                    this.colYs[l] = Math.max(d, this.colYs[l]);
            }),
            (o._getContainerSize = function () {
                this.maxY = Math.max.apply(Math, this.colYs);
                var t = { height: this.maxY };
                return (
                    this._getOption("fitWidth") &&
                        (t.width = this._getContainerFitWidth()),
                    t
                );
            }),
            (o._getContainerFitWidth = function () {
                for (var t = 0, e = this.cols; --e && 0 === this.colYs[e]; )
                    t++;
                return (this.cols - t) * this.columnWidth - this.gutter;
            }),
            (o.needsResizeLayout = function () {
                var t = this.containerWidth;
                return this.getContainerWidth(), t != this.containerWidth;
            }),
            i
        );
    }),
    (function (t, e) {
        "function" == typeof define && define.amd
            ? define(
                  "isotope-layout/js/layout-modes/masonry",
                  ["../layout-mode", "masonry-layout/masonry"],
                  e
              )
            : "object" == typeof module && module.exports
            ? (module.exports = e(
                  require("../layout-mode"),
                  require("masonry-layout")
              ))
            : e(t.Isotope.LayoutMode, t.Masonry);
    })(window, function (t, e) {
        "use strict";
        var i = t.create("masonry"),
            o = i.prototype,
            n = { _getElementOffset: !0, layout: !0, _getMeasurement: !0 };
        for (var s in e.prototype) n[s] || (o[s] = e.prototype[s]);
        var r = o.measureColumns;
        o.measureColumns = function () {
            (this.items = this.isotope.filteredItems), r.call(this);
        };
        var a = o._getOption;
        return (
            (o._getOption = function (t) {
                return "fitWidth" == t
                    ? void 0 !== this.options.isFitWidth
                        ? this.options.isFitWidth
                        : this.options.fitWidth
                    : a.apply(this.isotope, arguments);
            }),
            i
        );
    }),
    (function (t, e) {
        "function" == typeof define && define.amd
            ? define(
                  "isotope-layout/js/layout-modes/fit-rows",
                  ["../layout-mode"],
                  e
              )
            : "object" == typeof exports
            ? (module.exports = e(require("../layout-mode")))
            : e(t.Isotope.LayoutMode);
    })(window, function (t) {
        "use strict";
        var e = t.create("fitRows"),
            i = e.prototype;
        return (
            (i._resetLayout = function () {
                (this.x = 0),
                    (this.y = 0),
                    (this.maxY = 0),
                    this._getMeasurement("gutter", "outerWidth");
            }),
            (i._getItemLayoutPosition = function (t) {
                t.getSize();
                var e = t.size.outerWidth + this.gutter,
                    i = this.isotope.size.innerWidth + this.gutter;
                0 !== this.x &&
                    e + this.x > i &&
                    ((this.x = 0), (this.y = this.maxY));
                var o = { x: this.x, y: this.y };
                return (
                    (this.maxY = Math.max(
                        this.maxY,
                        this.y + t.size.outerHeight
                    )),
                    (this.x += e),
                    o
                );
            }),
            (i._getContainerSize = function () {
                return { height: this.maxY };
            }),
            e
        );
    }),
    (function (t, e) {
        "function" == typeof define && define.amd
            ? define(
                  "isotope-layout/js/layout-modes/vertical",
                  ["../layout-mode"],
                  e
              )
            : "object" == typeof module && module.exports
            ? (module.exports = e(require("../layout-mode")))
            : e(t.Isotope.LayoutMode);
    })(window, function (t) {
        "use strict";
        var e = t.create("vertical", { horizontalAlignment: 0 }),
            i = e.prototype;
        return (
            (i._resetLayout = function () {
                this.y = 0;
            }),
            (i._getItemLayoutPosition = function (t) {
                t.getSize();
                var e =
                        (this.isotope.size.innerWidth - t.size.outerWidth) *
                        this.options.horizontalAlignment,
                    i = this.y;
                return (this.y += t.size.outerHeight), { x: e, y: i };
            }),
            (i._getContainerSize = function () {
                return { height: this.y };
            }),
            e
        );
    }),
    (function (t, e) {
        "function" == typeof define && define.amd
            ? define(
                  [
                      "outlayer/outlayer",
                      "get-size/get-size",
                      "desandro-matches-selector/matches-selector",
                      "fizzy-ui-utils/utils",
                      "isotope-layout/js/item",
                      "isotope-layout/js/layout-mode",
                      "isotope-layout/js/layout-modes/masonry",
                      "isotope-layout/js/layout-modes/fit-rows",
                      "isotope-layout/js/layout-modes/vertical",
                  ],
                  function (i, o, n, s, r, a) {
                      return e(t, i, o, n, s, r, a);
                  }
              )
            : "object" == typeof module && module.exports
            ? (module.exports = e(
                  t,
                  require("outlayer"),
                  require("get-size"),
                  require("desandro-matches-selector"),
                  require("fizzy-ui-utils"),
                  require("isotope-layout/js/item"),
                  require("isotope-layout/js/layout-mode"),
                  require("isotope-layout/js/layout-modes/masonry"),
                  require("isotope-layout/js/layout-modes/fit-rows"),
                  require("isotope-layout/js/layout-modes/vertical")
              ))
            : (t.Isotope = e(
                  t,
                  t.Outlayer,
                  t.getSize,
                  t.matchesSelector,
                  t.fizzyUIUtils,
                  t.Isotope.Item,
                  t.Isotope.LayoutMode
              ));
    })(window, function (t, e, i, o, n, s, r) {
        function a(t, e) {
            return function (i, o) {
                for (var n = 0; n < t.length; n++) {
                    var s = t[n],
                        r = i.sortData[s],
                        a = o.sortData[s];
                    if (r > a || r < a) {
                        var u = void 0 !== e[s] ? e[s] : e,
                            h = u ? 1 : -1;
                        return (r > a ? 1 : -1) * h;
                    }
                }
                return 0;
            };
        }
        var u = t.jQuery,
            h = String.prototype.trim
                ? function (t) {
                      return t.trim();
                  }
                : function (t) {
                      return t.replace(/^\s+|\s+$/g, "");
                  },
            d = e.create("isotope", {
                layoutMode: "masonry",
                isJQueryFiltering: !0,
                sortAscending: !0,
            });
        (d.Item = s), (d.LayoutMode = r);
        var l = d.prototype;
        (l._create = function () {
            (this.itemGUID = 0),
                (this._sorters = {}),
                this._getSorters(),
                e.prototype._create.call(this),
                (this.modes = {}),
                (this.filteredItems = this.items),
                (this.sortHistory = ["original-order"]);
            for (var t in r.modes) this._initLayoutMode(t);
        }),
            (l.reloadItems = function () {
                (this.itemGUID = 0), e.prototype.reloadItems.call(this);
            }),
            (l._itemize = function () {
                for (
                    var t = e.prototype._itemize.apply(this, arguments), i = 0;
                    i < t.length;
                    i++
                ) {
                    var o = t[i];
                    o.id = this.itemGUID++;
                }
                return this._updateItemsSortData(t), t;
            }),
            (l._initLayoutMode = function (t) {
                var e = r.modes[t],
                    i = this.options[t] || {};
                (this.options[t] = e.options ? n.extend(e.options, i) : i),
                    (this.modes[t] = new e(this));
            }),
            (l.layout = function () {
                return !this._isLayoutInited && this._getOption("initLayout")
                    ? void this.arrange()
                    : void this._layout();
            }),
            (l._layout = function () {
                var t = this._getIsInstant();
                this._resetLayout(),
                    this._manageStamps(),
                    this.layoutItems(this.filteredItems, t),
                    (this._isLayoutInited = !0);
            }),
            (l.arrange = function (t) {
                this.option(t), this._getIsInstant();
                var e = this._filter(this.items);
                (this.filteredItems = e.matches),
                    this._bindArrangeComplete(),
                    this._isInstant
                        ? this._noTransition(this._hideReveal, [e])
                        : this._hideReveal(e),
                    this._sort(),
                    this._layout();
            }),
            (l._init = l.arrange),
            (l._hideReveal = function (t) {
                this.reveal(t.needReveal), this.hide(t.needHide);
            }),
            (l._getIsInstant = function () {
                var t = this._getOption("layoutInstant"),
                    e = void 0 !== t ? t : !this._isLayoutInited;
                return (this._isInstant = e), e;
            }),
            (l._bindArrangeComplete = function () {
                function t() {
                    e &&
                        i &&
                        o &&
                        n.dispatchEvent("arrangeComplete", null, [
                            n.filteredItems,
                        ]);
                }
                var e,
                    i,
                    o,
                    n = this;
                this.once("layoutComplete", function () {
                    (e = !0), t();
                }),
                    this.once("hideComplete", function () {
                        (i = !0), t();
                    }),
                    this.once("revealComplete", function () {
                        (o = !0), t();
                    });
            }),
            (l._filter = function (t) {
                var e = this.options.filter;
                e = e || "*";
                for (
                    var i = [],
                        o = [],
                        n = [],
                        s = this._getFilterTest(e),
                        r = 0;
                    r < t.length;
                    r++
                ) {
                    var a = t[r];
                    if (!a.isIgnored) {
                        var u = s(a);
                        u && i.push(a),
                            u && a.isHidden
                                ? o.push(a)
                                : u || a.isHidden || n.push(a);
                    }
                }
                return { matches: i, needReveal: o, needHide: n };
            }),
            (l._getFilterTest = function (t) {
                return u && this.options.isJQueryFiltering
                    ? function (e) {
                          return u(e.element).is(t);
                      }
                    : "function" == typeof t
                    ? function (e) {
                          return t(e.element);
                      }
                    : function (e) {
                          return o(e.element, t);
                      };
            }),
            (l.updateSortData = function (t) {
                var e;
                t
                    ? ((t = n.makeArray(t)), (e = this.getItems(t)))
                    : (e = this.items),
                    this._getSorters(),
                    this._updateItemsSortData(e);
            }),
            (l._getSorters = function () {
                var t = this.options.getSortData;
                for (var e in t) {
                    var i = t[e];
                    this._sorters[e] = f(i);
                }
            }),
            (l._updateItemsSortData = function (t) {
                for (var e = t && t.length, i = 0; e && i < e; i++) {
                    var o = t[i];
                    o.updateSortData();
                }
            });
        var f = (function () {
            function t(t) {
                if ("string" != typeof t) return t;
                var i = h(t).split(" "),
                    o = i[0],
                    n = o.match(/^\[(.+)\]$/),
                    s = n && n[1],
                    r = e(s, o),
                    a = d.sortDataParsers[i[1]];
                return (t = a
                    ? function (t) {
                          return t && a(r(t));
                      }
                    : function (t) {
                          return t && r(t);
                      });
            }
            function e(t, e) {
                return t
                    ? function (e) {
                          return e.getAttribute(t);
                      }
                    : function (t) {
                          var i = t.querySelector(e);
                          return i && i.textContent;
                      };
            }
            return t;
        })();
        (d.sortDataParsers = {
            parseInt: function (t) {
                return parseInt(t, 10);
            },
            parseFloat: function (t) {
                return parseFloat(t);
            },
        }),
            (l._sort = function () {
                if (this.options.sortBy) {
                    var t = n.makeArray(this.options.sortBy);
                    this._getIsSameSortBy(t) ||
                        (this.sortHistory = t.concat(this.sortHistory));
                    var e = a(this.sortHistory, this.options.sortAscending);
                    this.filteredItems.sort(e);
                }
            }),
            (l._getIsSameSortBy = function (t) {
                for (var e = 0; e < t.length; e++)
                    if (t[e] != this.sortHistory[e]) return !1;
                return !0;
            }),
            (l._mode = function () {
                var t = this.options.layoutMode,
                    e = this.modes[t];
                if (!e) throw new Error("No layout mode: " + t);
                return (e.options = this.options[t]), e;
            }),
            (l._resetLayout = function () {
                e.prototype._resetLayout.call(this),
                    this._mode()._resetLayout();
            }),
            (l._getItemLayoutPosition = function (t) {
                return this._mode()._getItemLayoutPosition(t);
            }),
            (l._manageStamp = function (t) {
                this._mode()._manageStamp(t);
            }),
            (l._getContainerSize = function () {
                return this._mode()._getContainerSize();
            }),
            (l.needsResizeLayout = function () {
                return this._mode().needsResizeLayout();
            }),
            (l.appended = function (t) {
                var e = this.addItems(t);
                if (e.length) {
                    var i = this._filterRevealAdded(e);
                    this.filteredItems = this.filteredItems.concat(i);
                }
            }),
            (l.prepended = function (t) {
                var e = this._itemize(t);
                if (e.length) {
                    this._resetLayout(), this._manageStamps();
                    var i = this._filterRevealAdded(e);
                    this.layoutItems(this.filteredItems),
                        (this.filteredItems = i.concat(this.filteredItems)),
                        (this.items = e.concat(this.items));
                }
            }),
            (l._filterRevealAdded = function (t) {
                var e = this._filter(t);
                return (
                    this.hide(e.needHide),
                    this.reveal(e.matches),
                    this.layoutItems(e.matches, !0),
                    e.matches
                );
            }),
            (l.insert = function (t) {
                var e = this.addItems(t);
                if (e.length) {
                    var i,
                        o,
                        n = e.length;
                    for (i = 0; i < n; i++)
                        (o = e[i]), this.element.appendChild(o.element);
                    var s = this._filter(e).matches;
                    for (i = 0; i < n; i++) e[i].isLayoutInstant = !0;
                    for (this.arrange(), i = 0; i < n; i++)
                        delete e[i].isLayoutInstant;
                    this.reveal(s);
                }
            });
        var c = l.remove;
        return (
            (l.remove = function (t) {
                t = n.makeArray(t);
                var e = this.getItems(t);
                c.call(this, t);
                for (var i = e && e.length, o = 0; i && o < i; o++) {
                    var s = e[o];
                    n.removeFrom(this.filteredItems, s);
                }
            }),
            (l.shuffle = function () {
                for (var t = 0; t < this.items.length; t++) {
                    var e = this.items[t];
                    e.sortData.random = Math.random();
                }
                (this.options.sortBy = "random"), this._sort(), this._layout();
            }),
            (l._noTransition = function (t, e) {
                var i = this.options.transitionDuration;
                this.options.transitionDuration = 0;
                var o = t.apply(this, e);
                return (this.options.transitionDuration = i), o;
            }),
            (l.getFilteredItemElements = function () {
                return this.filteredItems.map(function (t) {
                    return t.element;
                });
            }),
            d
        );
    });

// // date-time-picker
// !(function (t, e) {
//     "object" == typeof exports && "object" == typeof module
//         ? (module.exports = e())
//         : "function" == typeof define && define.amd
//         ? define([], e)
//         : "object" == typeof exports
//         ? (exports.DateTimePickerComponent = e())
//         : (t.DateTimePickerComponent = e());
// })(self, function () {
//     return (function () {
//         "use strict";
//         var t = {
//                 d: function (e, n) {
//                     for (var a in n)
//                         t.o(n, a) &&
//                             !t.o(e, a) &&
//                             Object.defineProperty(e, a, {
//                                 enumerable: !0,
//                                 get: n[a],
//                             });
//                 },
//                 o: function (t, e) {
//                     return Object.prototype.hasOwnProperty.call(t, e);
//                 },
//                 r: function (t) {
//                     "undefined" != typeof Symbol &&
//                         Symbol.toStringTag &&
//                         Object.defineProperty(t, Symbol.toStringTag, {
//                             value: "Module",
//                         }),
//                         Object.defineProperty(t, "__esModule", { value: !0 });
//                 },
//             },
//             e = {};
//         function n() {
//             var t = this;
//             this.i18n = {
//                 jan: "Jan",
//                 feb: "Feb",
//                 mar: "Mar",
//                 apr: "Apr",
//                 may: "May",
//                 jun: "Jun",
//                 jul: "Jul",
//                 aug: "Aug",
//                 sep: "Sep",
//                 oct: "Oct",
//                 nov: "Nov",
//                 dec: "Dec",
//                 jan_: "January",
//                 feb_: "February",
//                 mar_: "March",
//                 apr_: "April",
//                 may_: "May",
//                 jun_: "June",
//                 jul_: "July",
//                 aug_: "August",
//                 sep_: "September",
//                 oct_: "October",
//                 nov_: "November",
//                 dec_: "December",
//                 mon: "Mon",
//                 tue: "Tue",
//                 wed: "Wed",
//                 thu: "Thu",
//                 fri: "Fri",
//                 sat: "Sat",
//                 sun: "Sun",
//                 mon_: "Monday",
//                 tue_: "Tuesday",
//                 wed_: "Wednesday",
//                 thu_: "Thursday",
//                 fri_: "Friday",
//                 sat_: "Saturday",
//                 sun_: "Sunday",
//                 done: "Done",
//             };
//             var e,
//                 n,
//                 a = 864e5,
//                 i = ["sun", "mon", "tue", "wed", "thu", "fri", "sat"],
//                 s = [
//                     "jan",
//                     "feb",
//                     "mar",
//                     "apr",
//                     "may",
//                     "jun",
//                     "jul",
//                     "aug",
//                     "sep",
//                     "oct",
//                     "nov",
//                     "dec",
//                 ],
//                 r = navigator.userAgent.match(/(iPad|iPhone|iPod)/g)
//                     ? "touchstart"
//                     : "click",
//                 o = "start";
//             function c(t, e) {
//                 var n,
//                     a =
//                         arguments.length > 2 && void 0 !== arguments[2]
//                             ? arguments[2]
//                             : null,
//                     i = null == a ? void 0 : a.value;
//                 if (i && (n = l(i))) return n;
//                 if (e) {
//                     if (e instanceof Date) return e;
//                     if ("string" == typeof e && (n = l(e))) return n;
//                 }
//                 return t;
//             }
//             function d(t) {
//                 var n = t.getDay();
//                 return e && (n = e.indexOf(i[n])), n;
//             }
//             function l(t) {
//                 var e = null,
//                     n = t.match(
//                         /^(\d{4})-(\d{2})-(\d{2})(T(\d{2}):(\d{2}):(\d{2}))?$/
//                     );
//                 if (n && +new Date(n[0])) {
//                     var a = n[1],
//                         i = n[2] - 1,
//                         s = n[3];
//                     if (n[4]) {
//                         var r = n[5],
//                             o = n[6],
//                             c = n[7];
//                         e = new Date(a, i, s, r, o, c);
//                     } else e = new Date(a, i, s);
//                 }
//                 return e || null;
//             }
//             (this.addOnSelectEvent = function (t) {
//                 for (
//                     var e = t.querySelectorAll("td.selectable"),
//                         n = 0,
//                         a = e.length;
//                     n < a;
//                     n++
//                 )
//                     e[n].addEventListener("click", this.onSelectDayOrHour);
//             }),
//                 (this.checkDateTimeConsistency = function () {
//                     var t = this.first_date.getTime(),
//                         e = this.start_date.getTime(),
//                         n = this.last_date.getTime();
//                     if (
//                         (e <= t &&
//                             this.start_date.setHours(
//                                 this.first_date.getHours(),
//                                 this.first_date.getMinutes(),
//                                 0,
//                                 0
//                             ),
//                         e >= n &&
//                             this.start_date.setHours(
//                                 this.last_date.getHours(),
//                                 this.last_date.getMinutes(),
//                                 0,
//                                 0
//                             ),
//                         this.end_date)
//                     ) {
//                         var a = this.end_date.getTime();
//                         "start" == o
//                             ? e + this.min_range >= a &&
//                               (e + this.min_range >= n &&
//                                   this.start_date.setTime(n - this.min_range),
//                               this.end_date.setTime(
//                                   this.start_date.getTime() + this.min_range
//                               ),
//                               this.printDateAndTime(
//                                   this.end_container,
//                                   this.end_date
//                               ))
//                             : (a - this.min_range <= e &&
//                                   (a - this.min_range <= t &&
//                                       this.end_date.setTime(t + this.min_range),
//                                   this.start_date.setTime(
//                                       this.end_date.getTime() - this.min_range
//                                   ),
//                                   this.printDateAndTime(
//                                       this.start_container,
//                                       this.start_date
//                                   )),
//                               a >= n &&
//                                   this.end_date.setHours(
//                                       this.last_date.getHours(),
//                                       this.last_date.getMinutes(),
//                                       0,
//                                       0
//                                   ));
//                     }
//                 }),
//                 (this.closePicker = function (t, e) {
//                     var n = this,
//                         a =
//                             arguments.length > 2 && void 0 !== arguments[2]
//                                 ? arguments[2]
//                                 : 0;
//                     setTimeout(function () {
//                         e.classList.remove("active"),
//                             (t.style.display = "none"),
//                             document.removeEventListener(r, n.onClickOutside);
//                     }, a);
//                 }),
//                 (this.get_Dates = function () {
//                     var t = new Date().setHours(0, 0, 0, 0),
//                         e = new Date(this.start_date).setHours(0, 0, 0, 0),
//                         n = new Date(this.first_date).setHours(0, 0, 0, 0),
//                         a = new Date(this.last_date).setHours(0, 0, 0, 0),
//                         i = null;
//                     return (
//                         this.end_date &&
//                             (i = new Date(this.end_date).setHours(0, 0, 0, 0)),
//                         {
//                             _today: t,
//                             _start_date: e,
//                             _first_date: n,
//                             _last_date: a,
//                             _end_date: i,
//                         }
//                     );
//                 }),
//                 (this.getDayClassName = function (t, e, n) {
//                     var a = new Date(
//                             e.getFullYear(),
//                             e.getMonth(),
//                             t
//                         ).getTime(),
//                         i = "day ";
//                     return (
//                         a < n._first_date || a > n._last_date
//                             ? (i += "disabled ")
//                             : (i += "selectable "),
//                         a == n._today && (i += "today "),
//                         a == n._start_date &&
//                             ((i += "start-day "),
//                             (i += "start" == o ? "active " : "inactive ")),
//                         this.end_date &&
//                             (a > n._start_date &&
//                                 a < n._end_date &&
//                                 (i += " range"),
//                             a == n._end_date &&
//                                 ((i += " end-day "),
//                                 (i += "end" == o ? "active " : "inactive "))),
//                         i
//                     );
//                 }),
//                 (this.getHourClassName = function (t, e) {
//                     var n =
//                             ("0" + e.getHours()).slice(-2) +
//                             ":" +
//                             ("0" + e.getMinutes()).slice(-2),
//                         a = t.split(":"),
//                         i = a[0],
//                         s = a[1],
//                         r = new Date(e);
//                     r.setHours(i, s, 0, 0);
//                     var c = "hour ";
//                     return (
//                         r < this.first_date || r > this.last_date
//                             ? (c += "disabled")
//                             : ((c += "selectable"),
//                               (c += n == t ? " time-selected " + o : "")),
//                         c
//                     );
//                 }),
//                 (this.getHTML = function (t, e, n) {
//                     var a,
//                         i = "",
//                         s = this[t + "_container"].id;
//                     if (n) {
//                         var r = "div#"
//                                 .concat(s, " button.active, div#")
//                                 .concat(s, " table td.active, div#")
//                                 .concat(s, " table td.time-selected"),
//                             o = "div#".concat(s, " table td.inactive");
//                         if (this.end_container) {
//                             var c = this.end_container.id;
//                             (r += ", div#"
//                                 .concat(c, " button.active, div#")
//                                 .concat(c, " table td.active, div#")
//                                 .concat(c, " table td.time-selected")),
//                                 (o += ", div#".concat(c, " table td.inactive"));
//                         }
//                         n.active_background &&
//                             n.active_color &&
//                             (i += ""
//                                 .concat(r, " {\n          background-color: ")
//                                 .concat(n.active_background, "; color: ")
//                                 .concat(n.active_color, ";\n        }")),
//                             n.inactive_background &&
//                                 n.inactive_color &&
//                                 (i += ""
//                                     .concat(
//                                         o,
//                                         " {\n          background-color: "
//                                     )
//                                     .concat(n.inactive_background, "; color: ")
//                                     .concat(n.inactive_color, ";\n        }")),
//                             i && (i = "<style>".concat(i, "</style>"));
//                     }
//                     var d = this[t + "_container"].querySelector(
//                         "input.date_output"
//                     )
//                         ? ""
//                         : '<input type="hidden" name="'.concat(
//                               s,
//                               '_value" class="date_output" value="">'
//                           );
//                     if ("datetime" === e)
//                         a =
//                             '<div class="button-container fix-float">\n          <button type="button" class="date '
//                                 .concat(
//                                     t,
//                                     ' w-50">\n                        <span class="month-day">00</span>\n                      </button>\n          <button type="button" class="time '
//                                 )
//                                 .concat(
//                                     t,
//                                     ' w-50">\n            <span class="hours">00</span>\n            <span class="minutes">:00</span>\n          </button>\n        </div>\n        <div class="picker"></div>\n        '
//                                 )
//                                 .concat(d);
//                     else
//                         a =
//                             '<div class="button-container">\n          <button type="button" class="date '
//                                 .concat(
//                                     t,
//                                     '">\n            <span class="week-day"></span>\n            <span class="month-day">00</span>\n            <span class="month">jan</span>\n          </button>\n        </div>\n        <div class="picker"></div>\n        '
//                                 )
//                                 .concat(d);
//                     return i + a;
//                 }),
//                 (this.onClickOutside = function (e) {
//                     var n = "start" == o ? t.start_picker : t.end_picker,
//                         a = e.target,
//                         i = !1;
//                     do {
//                         if (
//                             a.matches(
//                                 "#".concat(
//                                     n.parentElement.id,
//                                     ".datetime-container"
//                                 )
//                             ) ||
//                             a.classList.contains("prev-month") ||
//                             a.classList.contains("next-month")
//                         ) {
//                             i = !0;
//                             break;
//                         }
//                         a = a.parentElement;
//                     } while (null !== a && 1 === a.nodeType);
//                     i ||
//                         t.closePicker(
//                             n,
//                             n.previousElementSibling.querySelector(".active")
//                         );
//                 }),
//                 (this.onOpenPicker = function (e) {
//                     var n,
//                         a,
//                         i,
//                         s,
//                         c = e.currentTarget;
//                     c.classList.toggle("active");
//                     var d = "div#".concat(t.start_container.id, " button");
//                     if (
//                         ((d +=
//                             null !== (n = t.end_container) &&
//                             void 0 !== n &&
//                             n.id
//                                 ? ", div#".concat(t.end_container.id, " button")
//                                 : ""),
//                         [].slice
//                             .call(document.querySelectorAll(d))
//                             .forEach(function (t) {
//                                 t != c && t.classList.remove("active");
//                             }),
//                         c.classList.contains("start")
//                             ? ((a = t.start_picker),
//                               (i = t.end_picker),
//                               (s = t.start_date),
//                               (o = "start"))
//                             : ((a = t.end_picker),
//                               (i = t.start_picker),
//                               (s = t.end_date),
//                               (o = "end")),
//                         c.classList.contains("active"))
//                     ) {
//                         (a.style.display = "block"),
//                             i && (i.style.display = "none"),
//                             document.addEventListener(r, t.onClickOutside);
//                         var l = c.classList.contains("date") ? "Date" : "Time";
//                         "Time" == l && t.round_to && (l = "Alternative" + l),
//                             t["show" + l + "Picker"](a, s),
//                             (function (t) {
//                                 var e =
//                                     t.getBoundingClientRect().top +
//                                     t.offsetHeight -
//                                     document.documentElement.clientHeight;
//                                 e > 0 &&
//                                     ("scrollBehavior" in
//                                     document.documentElement.style
//                                         ? window.scrollBy({
//                                               top: e,
//                                               left: 0,
//                                               behavior: "smooth",
//                                           })
//                                         : window.scrollBy(0, e));
//                             })(a);
//                     } else
//                         (a.style.display = "none"),
//                             document.removeEventListener(r, t.onClickOutside);
//                 }),
//                 (this.onSelectDayOrHour = function (e) {
//                     var n = {},
//                         a = e.target;
//                     n.text = a.textContent;
//                     var i = -1 != n.text.indexOf(":");
//                     if (
//                         ("start" == o
//                             ? ((n.date = t.start_date),
//                               (n.container = t.start_container),
//                               (n.btn = i ? t.start_time_btn : t.start_date_btn),
//                               (n.picker = t.start_picker))
//                             : ((n.date = t.end_date),
//                               (n.container = t.end_container),
//                               (n.btn = i ? t.end_time_btn : t.end_date_btn),
//                               (n.picker = t.end_picker)),
//                         i)
//                     ) {
//                         var s = n.text.split(":");
//                         (n.hour = s[0]), (n.minute = s[1]);
//                     } else
//                         (n.prev_month = a.classList.contains("prev-month")),
//                             (n.next_month = a.classList.contains("next-month"));
//                     var r = a.classList.contains("day") ? "Day" : "Hour";
//                     t["select" + r](n);
//                 }),
//                 (this.printDateAndTime = function (t, e) {
//                     var a = t.querySelectorAll("button.date > *"),
//                         i = a[0],
//                         r = a[1],
//                         o = a[2],
//                         c = d(e);
//                     (i.textContent = this.i18n[n[c]]),
//                         (r.textContent = ("0" + e.getDate()).slice(-2)),
//                         (o.innerHTML = '<span data-i18n="'
//                             .concat(s[e.getMonth()], '">')
//                             .concat(this.i18n[s[e.getMonth()]], "</span><br>")
//                             .concat(e.getFullYear()));
//                     var l,
//                         h = t.querySelector("button.time");
//                     if (h) {
//                         var u = h.querySelectorAll("span"),
//                             _ = u[0],
//                             p = u[1];
//                         (_.textContent = ("0" + e.getHours()).slice(-2)),
//                             (p.textContent = ":".concat(
//                                 ("0" + e.getMinutes()).slice(-2)
//                             ));
//                     }
//                     var m,
//                         v,
//                         f,
//                         y,
//                         g,
//                         b,
//                         k =
//                             ((v = (m = e).getFullYear()),
//                             (f = ("0" + (m.getMonth() + 1)).slice(-2)),
//                             (y = ("0" + m.getDate()).slice(-2)),
//                             (g = ("0" + m.getHours()).slice(-2)),
//                             (b = ("0" + m.getMinutes()).slice(-2)),
//                             ""
//                                 .concat(v, "-")
//                                 .concat(f, "-")
//                                 .concat(y, "T")
//                                 .concat(g, ":")
//                                 .concat(b, ":00"));
//                     switch (this.date_output) {
//                         case "full_ISO":
//                             l = k;
//                             break;
//                         case "short_ISO":
//                             l = k.split("T")[0];
//                             break;
//                         default:
//                             l = (function (t) {
//                                 var e = Date.UTC(
//                                     t.getFullYear(),
//                                     t.getMonth(),
//                                     t.getDate(),
//                                     t.getHours(),
//                                     t.getMinutes(),
//                                     0,
//                                     0
//                                 );
//                                 return Math.floor(e / 1e3);
//                             })(e);
//                     }
//                     t.querySelector("input.date_output").value = l;
//                 }),
//                 (this.roundMinutes = function (t) {
//                     var e = this;
//                     t.forEach(function (t) {
//                         t.setSeconds(0, 0);
//                         var n = t.getMinutes(),
//                             a = t.getHours(),
//                             i = e.round_to ? e.round_to : 30;
//                         if (n % i != 0)
//                             for (var s = n; s <= n + i; s++)
//                                 if (s % i == 0) {
//                                     n = s;
//                                     break;
//                                 }
//                         60 == n &&
//                             ((n = 0),
//                             24 == (a += 1) &&
//                                 ((a = 0), t.setDate(t.getDate() + 1))),
//                             t.setHours(a, n);
//                     });
//                 }),
//                 (this.selectDay = function (t) {
//                     t.prev_month
//                         ? t.date.setFullYear(
//                               this.prev_month.getFullYear(),
//                               this.prev_month.getMonth(),
//                               t.text
//                           )
//                         : t.next_month
//                         ? t.date.setFullYear(
//                               this.next_month.getFullYear(),
//                               this.next_month.getMonth(),
//                               t.text
//                           )
//                         : t.date.setFullYear(
//                               this.current_month.getFullYear(),
//                               this.current_month.getMonth(),
//                               t.text
//                           ),
//                         this.checkDateTimeConsistency();
//                     for (
//                         var e = this.get_Dates(),
//                             n = document.querySelectorAll("td.selectable"),
//                             a = 0,
//                             i = n.length;
//                         a < i;
//                         a++
//                     ) {
//                         var s = void 0,
//                             r = "";
//                         n[a].classList.contains("prev-month")
//                             ? ((s = this.prev_month), (r += "prev-month "))
//                             : n[a].classList.contains("next-month")
//                             ? ((s = this.next_month), (r += "next-month "))
//                             : (s = this.current_month),
//                             (r += this.getDayClassName(n[a].textContent, s, e)),
//                             (n[a].className = r);
//                     }
//                     this.printDateAndTime(t.container, t.date),
//                         this.closePicker(t.picker, t.btn, 500);
//                 }),
//                 (this.selectHour = function (t) {
//                     t.date.setHours(t.hour, t.minute, 0, 0),
//                         this.checkDateTimeConsistency();
//                     for (
//                         var e = document.querySelectorAll("td.selectable"),
//                             n = 0,
//                             a = e.length;
//                         n < a;
//                         n++
//                     )
//                         e[n].className = this.getHourClassName(
//                             e[n].textContent,
//                             t.date
//                         );
//                     this.printDateAndTime(t.container, t.date),
//                         this.closePicker(t.picker, t.btn, 500);
//                 }),
//                 (this.setEndPickerProps = function (t, e) {
//                     var n = document.getElementById(t);
//                     if (null == n || "DIV" != n.nodeName)
//                         throw new Error(
//                             "Does div#".concat(
//                                 t,
//                                 " exist? Please, check your HTML code"
//                             )
//                         );
//                     var a = new Date(
//                             this.start_date.getTime() + this.min_range
//                         ),
//                         i = c(a, e, n.querySelector("input.date_output"));
//                     i < this.start_date && (i = a),
//                         this.roundMinutes([i]),
//                         i > this.last_date && (this.last_date = i),
//                         (this.end_container = n),
//                         (this.end_date = i);
//                 }),
//                 (this.setStartPickerProps = function (t, s, r, o, d) {
//                     var l = document.getElementById(t);
//                     if (null == l || "DIV" != l.nodeName)
//                         throw new Error(
//                             "Does div#".concat(
//                                 t,
//                                 " exist? Please, check your HTML code"
//                             )
//                         );
//                     var h = c(
//                             new Date(Date.now() + a),
//                             s,
//                             l.querySelector("input.date_output")
//                         ),
//                         u = c(new Date(), r);
//                     h < u && (u = h);
//                     var _ = new Date(h.getTime() + 31536e6),
//                         p = c(_, o);
//                     p < h && (p = _),
//                         this.round_to &&
//                             [1, 5, 10, 15, 20, 30].indexOf(this.round_to) < 0 &&
//                             (this.round_to = 1),
//                         this.roundMinutes([h, u, p]),
//                         (function (t) {
//                             (t = +t) > 6 && (t = 6);
//                             if (t > 0) {
//                                 var a = i.slice(0, t),
//                                     s = i.slice(t, i.length);
//                                 e = s.concat(a);
//                             }
//                             n = e || i;
//                         })(d),
//                         (this.start_container = l),
//                         (this.start_date = h),
//                         (this.first_date = u),
//                         (this.last_date = p);
//                 }),
//                 (this.showAlternativeTimePicker = function (t, e) {
//                     for (
//                         var a,
//                             i = this,
//                             r = new Date(e),
//                             c = function () {
//                                 for (var t = "", n = 0; n <= 59; n++)
//                                     if (n % i.round_to == 0) {
//                                         if (
//                                             (r.setHours(a, n),
//                                             r < i.first_date || r > i.last_date)
//                                         )
//                                             continue;
//                                         var s = ("0" + n).slice(-2),
//                                             o =
//                                                 n == e.getMinutes()
//                                                     ? "selected"
//                                                     : "";
//                                         t += '<option value="'
//                                             .concat(s, '" ')
//                                             .concat(o, ">")
//                                             .concat(s, "</option>");
//                                     }
//                                 return t;
//                             },
//                             l = '<select class="select-hours">',
//                             h = 0;
//                         h <= 23;
//                         h++
//                     )
//                         if (
//                             (r.setHours(h),
//                             !(r < this.first_date || r > this.last_date))
//                         ) {
//                             var u = ("0" + h).slice(-2),
//                                 _ = h == e.getHours() ? "selected" : "";
//                             _ && (a = h),
//                                 (l += '<option value="'
//                                     .concat(u, '" ')
//                                     .concat(_, ">")
//                                     .concat(u, "</option>"));
//                         }
//                     l += "</select>";
//                     var p,
//                         m,
//                         v = '<select class="select-minutes">';
//                     (v += c()),
//                         (v += "</select>"),
//                         (t.innerHTML =
//                             '<table class="time">\n      <tr>\n        <th>\n          '
//                                 .concat(
//                                     this.i18n[n[d(e)] + "_"],
//                                     "\n          "
//                                 )
//                                 .concat(
//                                     e.getDate(),
//                                     '\n          <span class="month" data-i18n="'
//                                 )
//                                 .concat(s[e.getMonth()] + "_", '">')
//                                 .concat(
//                                     this.i18n[s[e.getMonth()] + "_"],
//                                     "</span>\n        </th>\n      </tr>\n      <tr>\n        <td>\n          "
//                                 )
//                                 .concat(l, "\n          ")
//                                 .concat(
//                                     v,
//                                     '\n          <button type="button" class="confirm">'
//                                 )
//                                 .concat(
//                                     this.i18n.done,
//                                     "</button>\n        </td>\n      </tr>\n    </table>"
//                                 )),
//                         "start" == o
//                             ? ((p = this.start_container),
//                               (m = this.start_time_btn))
//                             : ((p = this.end_container),
//                               (m = this.end_time_btn));
//                     var f = p.querySelector("select.select-hours"),
//                         y = p.querySelector("select.select-minutes"),
//                         g = p.querySelector("button.confirm");
//                     (f.onchange = function (t) {
//                         a = f.options[f.selectedIndex].value;
//                         var e = c();
//                         y.innerHTML = e;
//                     }),
//                         (g.onclick = function (n) {
//                             n.preventDefault();
//                             var a = f.options[f.selectedIndex].value,
//                                 s = y.options[y.selectedIndex].value;
//                             e.setHours(a, s, 0, 0),
//                                 i.checkDateTimeConsistency(),
//                                 i.printDateAndTime(p, e),
//                                 i.closePicker(t, m, 500),
//                                 (g.disabled = !0);
//                         });
//                 }),
//                 (this.showDatePicker = function (t, e) {
//                     for (
//                         var a,
//                             i = this,
//                             r = "",
//                             o = e.getMonth(),
//                             c = e.getFullYear(),
//                             l = [
//                                 "31",
//                                 (c % 100 != 0 && c % 4 == 0) || c % 400 == 0
//                                     ? 29
//                                     : 28,
//                                 "31",
//                                 "30",
//                                 "31",
//                                 "30",
//                                 "31",
//                                 "31",
//                                 "30",
//                                 "31",
//                                 "30",
//                                 "31",
//                             ],
//                             h = new Date(c, o, 1),
//                             u = d(h),
//                             _ = new Date(c, o - 1, 1),
//                             p = new Date(c, o + 1, 1),
//                             m = this.get_Dates(),
//                             v = 0,
//                             f = u,
//                             y = l[_.getMonth()];
//                         f > 0;

//                     )
//                         (v = y - (f - 1)),
//                             (a = this.getDayClassName(v, _, m)),
//                             (r += '<td class="prev-month '
//                                 .concat(a, '">')
//                                 .concat(v, "</td>")),
//                             f--;
//                     for (v = 1; v <= l[o]; )
//                         u > 6 && ((u = 0), (r += "</tr><tr>")),
//                             (a = this.getDayClassName(v, h, m)),
//                             (r += '<td class="'
//                                 .concat(a, '">')
//                                 .concat(v, "</td>")),
//                             u++,
//                             v++;
//                     for (v = 1; u <= 6; u++, v++)
//                         (a = this.getDayClassName(v, p, m)),
//                             (r += '<td class="next-month '
//                                 .concat(a, '">')
//                                 .concat(v, "</td>"));
//                     (t.innerHTML =
//                         '<table class="date">\n      <tr>\n        <th><a href="javascript:void(0);" class="prev-month">&laquo;</a></th>\n        <th colspan="5">\n          <span class="month" data-i18n="'
//                             .concat(s[o] + "_", '">')
//                             .concat(
//                                 this.i18n[s[o] + "_"],
//                                 "</span>\n          "
//                             )
//                             .concat(
//                                 c,
//                                 '\n        </th>\n        <th><a href="javascript:void(0);" class="next-month">&raquo;</a></th>\n      </tr>\n      <tr>\n        <td class="day-label" data-i18n="'
//                             )
//                             .concat(n[0], '">')
//                             .concat(
//                                 this.i18n[n[0]],
//                                 '</td>\n        <td class="day-label" data-i18n="'
//                             )
//                             .concat(n[1], '">')
//                             .concat(
//                                 this.i18n[n[1]],
//                                 '</td>\n        <td class="day-label" data-i18n="'
//                             )
//                             .concat(n[2], '">')
//                             .concat(
//                                 this.i18n[n[2]],
//                                 '</td>\n        <td class="day-label" data-i18n="'
//                             )
//                             .concat(n[3], '">')
//                             .concat(
//                                 this.i18n[n[3]],
//                                 '</td>\n        <td class="day-label" data-i18n="'
//                             )
//                             .concat(n[4], '">')
//                             .concat(
//                                 this.i18n[n[4]],
//                                 '</td>\n        <td class="day-label" data-i18n="'
//                             )
//                             .concat(n[5], '">')
//                             .concat(
//                                 this.i18n[n[5]],
//                                 '</td>\n        <td class="day-label" data-i18n="'
//                             )
//                             .concat(n[6], '">')
//                             .concat(
//                                 this.i18n[n[6]],
//                                 "</td>\n      </tr>\n      <tr>\n        "
//                             )
//                             .concat(r, "\n      </tr>\n    </table>")),
//                         _.setDate(y);
//                     var g = t.querySelector(".prev-month");
//                     _ > this.first_date
//                         ? g.addEventListener("click", function () {
//                               return i.showDatePicker(t, _);
//                           })
//                         : g.classList.add("disabled");
//                     var b = t.querySelector(".next-month");
//                     this.last_date > p
//                         ? b.addEventListener("click", function () {
//                               return i.showDatePicker(t, p);
//                           })
//                         : b.classList.add("disabled"),
//                         this.addOnSelectEvent(t),
//                         (this.current_month = h),
//                         (this.prev_month = _),
//                         (this.next_month = p);
//                 }),
//                 (this.showTimePicker = function (t, e) {
//                     for (
//                         var a,
//                             i = [
//                                 "00:00",
//                                 "00:30",
//                                 "01:00",
//                                 "01:30",
//                                 "02:00",
//                                 "02:30",
//                                 "03:00",
//                                 "03:30",
//                                 "04:00",
//                                 "04:30",
//                                 "05:00",
//                                 "05:30",
//                                 "06:00",
//                                 "06:30",
//                                 "07:00",
//                                 "07:30",
//                                 "08:00",
//                                 "08:30",
//                                 "09:00",
//                                 "09:30",
//                                 "10:00",
//                                 "10:30",
//                                 "11:00",
//                                 "11:30",
//                                 "12:00",
//                                 "12:30",
//                                 "13:00",
//                                 "13:30",
//                                 "14:00",
//                                 "14:30",
//                                 "15:00",
//                                 "15:30",
//                                 "16:00",
//                                 "16:30",
//                                 "17:00",
//                                 "17:30",
//                                 "18:00",
//                                 "18:30",
//                                 "19:00",
//                                 "19:30",
//                                 "20:00",
//                                 "20:30",
//                                 "21:00",
//                                 "21:30",
//                                 "22:00",
//                                 "22:30",
//                                 "23:00",
//                                 "23:30",
//                             ],
//                             r = 0,
//                             o = "",
//                             c = 1;
//                         c < 9;
//                         c++
//                     ) {
//                         for (o += "<tr>", r *= 1; r < 6 * c; r++)
//                             i[r]
//                                 ? ("",
//                                   (a = this.getHourClassName(i[r], e)),
//                                   (o += '<td class="'
//                                       .concat(a, '">')
//                                       .concat(i[r], "</td>")))
//                                 : (o +=
//                                       '<td class="white-background disabled"></td>');
//                         o += "</tr>";
//                     }
//                     (t.innerHTML =
//                         '<table class="time">\n      <tr>\n        <th colspan="7">\n          '
//                             .concat(this.i18n[n[d(e)] + "_"], "\n          ")
//                             .concat(
//                                 e.getDate(),
//                                 '\n          <span class="month" data-i18n="'
//                             )
//                             .concat(s[e.getMonth()] + "_", '">')
//                             .concat(
//                                 this.i18n[s[e.getMonth()] + "_"],
//                                 "</span>\n        </th>\n      </tr>\n      "
//                             )
//                             .concat(o, "\n    </table>")),
//                         this.addOnSelectEvent(t);
//                 });
//         }
//         function a(t) {
//             var e =
//                 arguments.length > 1 && void 0 !== arguments[1]
//                     ? arguments[1]
//                     : {};
//             n.call(this),
//                 (this.i18n = e.l10n ? e.l10n : this.i18n),
//                 (this.date_output = e.date_output
//                     ? e.date_output
//                     : "short_ISO");
//             var a = e.start_date ? e.start_date : null,
//                 i = e.first_date ? e.first_date : null,
//                 s = e.last_date ? e.last_date : null,
//                 r = void 0 !== e.first_day_no ? e.first_day_no : 0,
//                 o = e.styles ? e.styles : {};
//             this.setStartPickerProps(t, a, i, s, r),
//                 this.start_container.classList.add("datetime-container"),
//                 this.start_container.insertAdjacentHTML(
//                     "afterbegin",
//                     this.getHTML("start", "date", o)
//                 ),
//                 this.printDateAndTime(this.start_container, this.start_date),
//                 (this.start_date_btn =
//                     this.start_container.querySelector("button.date.start")),
//                 (this.start_picker =
//                     this.start_container.querySelector("div.picker")),
//                 this.start_date_btn.addEventListener(
//                     "click",
//                     this.onOpenPicker
//                 );
//         }
//         function i(t) {
//             var e =
//                 arguments.length > 1 && void 0 !== arguments[1]
//                     ? arguments[1]
//                     : {};
//             n.call(this),
//                 (this.i18n = e.l10n ? e.l10n : this.i18n),
//                 (this.round_to = !!e.round_to && e.round_to),
//                 (this.date_output = e.date_output ? e.date_output : "full_ISO");
//             var a = e.start_date ? e.start_date : null,
//                 i = e.first_date ? e.first_date : null,
//                 s = e.last_date ? e.last_date : null,
//                 r = void 0 !== e.first_day_no ? e.first_day_no : 0,
//                 o = e.styles ? e.styles : {};
//             this.setStartPickerProps(t, a, i, s, r),
//                 this.start_container.classList.add(
//                     "datetime-container",
//                     "fix-float"
//                 ),
//                 this.start_container.insertAdjacentHTML(
//                     "afterbegin",
//                     this.getHTML("start", "datetime", o)
//                 ),
//                 this.printDateAndTime(this.start_container, this.start_date),
//                 (this.start_date_btn =
//                     this.start_container.querySelector("button.date.start")),
//                 (this.start_time_btn =
//                     this.start_container.querySelector("button.time.start")),
//                 (this.start_picker =
//                     this.start_container.querySelector("div.picker")),
//                 this.start_date_btn.addEventListener(
//                     "click",
//                     this.onOpenPicker
//                 ),
//                 this.start_time_btn.addEventListener(
//                     "click",
//                     this.onOpenPicker
//                 );
//         }
//         function s(t, e) {
//             var a =
//                 arguments.length > 2 && void 0 !== arguments[2]
//                     ? arguments[2]
//                     : {};
//             n.call(this),
//                 (this.i18n = a.l10n ? a.l10n : this.i18n),
//                 (this.date_output = a.date_output
//                     ? a.date_output
//                     : "short_ISO"),
//                 (this.min_range = a.min_range_hours
//                     ? 60 * a.min_range_hours * 60 * 1e3
//                     : 36e5);
//             var i = a.start_date ? a.start_date : null,
//                 s = a.first_date ? a.first_date : null,
//                 r = a.last_date ? a.last_date : null,
//                 o = void 0 !== a.first_day_no ? a.first_day_no : 0,
//                 c = a.styles ? a.styles : {};
//             this.setStartPickerProps(t, i, s, r, o);
//             var d = a.end_date ? a.end_date : null;
//             this.setEndPickerProps(e, d),
//                 this.start_container.classList.add("datetime-container"),
//                 this.start_container.insertAdjacentHTML(
//                     "afterbegin",
//                     this.getHTML("start", "date", c)
//                 ),
//                 this.printDateAndTime(this.start_container, this.start_date),
//                 (this.start_date_btn =
//                     this.start_container.querySelector("button.date.start")),
//                 (this.start_picker =
//                     this.start_container.querySelector("div.picker")),
//                 this.start_date_btn.addEventListener(
//                     "click",
//                     this.onOpenPicker
//                 ),
//                 this.end_container.classList.add("datetime-container"),
//                 this.end_container.insertAdjacentHTML(
//                     "afterbegin",
//                     this.getHTML("end", "date")
//                 ),
//                 this.printDateAndTime(this.end_container, this.end_date),
//                 (this.end_date_btn =
//                     this.end_container.querySelector("button.date.end")),
//                 (this.end_picker =
//                     this.end_container.querySelector("div.picker")),
//                 this.end_date_btn.addEventListener("click", this.onOpenPicker);
//         }
//         function r(t, e) {
//             var a =
//                 arguments.length > 2 && void 0 !== arguments[2]
//                     ? arguments[2]
//                     : {};
//             n.call(this),
//                 (this.i18n = a.l10n ? a.l10n : this.i18n),
//                 (this.round_to = !!a.round_to && a.round_to),
//                 (this.date_output = a.date_output ? a.date_output : "full_ISO"),
//                 (this.min_range = a.min_range_hours
//                     ? 60 * a.min_range_hours * 60 * 1e3
//                     : 36e5);
//             var i = a.start_date ? a.start_date : null,
//                 s = a.first_date ? a.first_date : null,
//                 r = a.last_date ? a.last_date : null,
//                 o = void 0 !== a.first_day_no ? a.first_day_no : 0,
//                 c = a.styles ? a.styles : {};
//             this.setStartPickerProps(t, i, s, r, o);
//             var d = a.end_date ? a.end_date : null;
//             this.setEndPickerProps(e, d),
//                 this.start_container.classList.add(
//                     "datetime-container",
//                     "fix-float"
//                 ),
//                 this.start_container.insertAdjacentHTML(
//                     "afterbegin",
//                     this.getHTML("start", "datetime", c)
//                 ),
//                 this.printDateAndTime(this.start_container, this.start_date),
//                 (this.start_date_btn =
//                     this.start_container.querySelector("button.date.start")),
//                 (this.start_time_btn =
//                     this.start_container.querySelector("button.time.start")),
//                 (this.start_picker =
//                     this.start_container.querySelector("div.picker")),
//                 this.start_date_btn.addEventListener(
//                     "click",
//                     this.onOpenPicker
//                 ),
//                 this.start_time_btn.addEventListener(
//                     "click",
//                     this.onOpenPicker
//                 ),
//                 this.end_container.classList.add(
//                     "datetime-container",
//                     "fix-float"
//                 ),
//                 this.end_container.insertAdjacentHTML(
//                     "afterbegin",
//                     this.getHTML("end", "datetime")
//                 ),
//                 this.printDateAndTime(this.end_container, this.end_date),
//                 (this.end_date_btn =
//                     this.end_container.querySelector("button.date.end")),
//                 (this.end_time_btn =
//                     this.end_container.querySelector("button.time.end")),
//                 (this.end_picker =
//                     this.end_container.querySelector("div.picker")),
//                 this.end_date_btn.addEventListener("click", this.onOpenPicker),
//                 this.end_time_btn.addEventListener("click", this.onOpenPicker);
//         }
//         return (
//             t.r(e),
//             t.d(e, {
//                 DatePicker: function () {
//                     return a;
//                 },
//                 DateTimePicker: function () {
//                     return i;
//                 },
//             }),
//             Element.prototype.matches ||
//                 (Element.prototype.matches =
//                     Element.prototype.matchesSelector ||
//                     Element.prototype.mozMatchesSelector ||
//                     Element.prototype.msMatchesSelector ||
//                     Element.prototype.oMatchesSelector ||
//                     Element.prototype.webkitMatchesSelector),
//             (a.prototype = Object.create(n.prototype)),
//             (a.prototype.constructor = a),
//             (i.prototype = Object.create(n.prototype)),
//             (i.prototype.constructor = i),
//             (s.prototype = Object.create(n.prototype)),
//             (s.prototype.constructor = s),
//             (r.prototype = Object.create(n.prototype)),
//             (r.prototype.constructor = r),
//             e
//         );
//     })();
// });

/* Chocolat-1.0.4 */
/* jQuery plugin for lightbox */
!(function () {
    "use strict";
    let e = void 0;
    function t(e, t) {
        return new Promise((s) => {
            const i = () => {
                t.removeEventListener("transitionend", i), s();
            };
            t.addEventListener("transitionend", i);
            const l = t.getAttribute("class"),
                n = t.getAttribute("style");
            e(),
                l === t.getAttribute("class") &&
                    n === t.getAttribute("style") &&
                    i(),
                0 === parseFloat(getComputedStyle(t).transitionDuration) && i();
        });
    }
    function s({ src: e, srcset: t, sizes: s }) {
        const i = new Image();
        return (
            (i.src = e),
            t && (i.srcset = t),
            s && (i.sizes = s),
            "decode" in i
                ? new Promise((e, t) => {
                      i.decode()
                          .then(() => {
                              e(i);
                          })
                          .catch(() => {
                              t(i);
                          });
                  })
                : new Promise((e, t) => {
                      (i.onload = e(i)), (i.onerror = t(i));
                  })
        );
    }
    function i(e) {
        let t, s;
        const {
                imgHeight: i,
                imgWidth: l,
                containerHeight: n,
                containerWidth: a,
                canvasWidth: o,
                canvasHeight: c,
                imageSize: h,
            } = e,
            r = i / l;
        return (
            "cover" == h
                ? r < n / a
                    ? (s = (t = n) / r)
                    : (t = (s = a) * r)
                : "native" == h
                ? ((t = i), (s = l))
                : (r > c / o ? (s = (t = c) / r) : (t = (s = o) * r),
                  "scale-down" === h &&
                      (s >= l || t >= i) &&
                      ((s = l), (t = i))),
            { height: t, width: s }
        );
    }
    function l(e) {
        return e.requestFullscreen
            ? e.requestFullscreen()
            : e.webkitRequestFullscreen
            ? e.webkitRequestFullscreen()
            : e.msRequestFullscreen
            ? e.msRequestFullscreen()
            : Promise.reject();
    }
    function n() {
        return document.exitFullscreen
            ? document.exitFullscreen()
            : document.webkitExitFullscreen
            ? document.webkitExitFullscreen()
            : document.msExitFullscreen
            ? document.msExitFullscreen()
            : Promise.reject();
    }
    const a = {
        container: document.body,
        className: void 0,
        imageSize: "scale-down",
        fullScreen: !1,
        loop: !1,
        linkImages: !0,
        setIndex: 0,
        firstImageIndex: 0,
        lastImageIndex: !1,
        currentImageIndex: void 0,
        allowZoom: !0,
        closeOnBackgroundClick: !0,
        setTitle: function () {
            return "";
        },
        description: function () {
            return this.images[this.settings.currentImageIndex].title;
        },
        pagination: function () {
            const e = this.settings.lastImageIndex + 1;
            return this.settings.currentImageIndex + 1 + "/" + e;
        },
        afterInitialize() {},
        afterMarkup() {},
        afterImageLoad() {},
        afterClose() {},
        zoomedPaddingX: function (e, t) {
            return 0;
        },
        zoomedPaddingY: function (e, t) {
            return 0;
        },
    };
    class o {
        constructor(e, t) {
            (this.settings = t),
                (this.elems = {}),
                (this.images = []),
                (this.events = []),
                (this.state = {
                    fullScreenOpen: !1,
                    initialZoomState: null,
                    initialized: !1,
                    timer: !1,
                    visible: !1,
                }),
                (this._cssClasses = [
                    "chocolat-open",
                    "chocolat-in-container",
                    "chocolat-cover",
                    "chocolat-zoomable",
                    "chocolat-zoomed",
                    "chocolat-zooming-in",
                    "chocolat-zooming-out",
                ]),
                NodeList.prototype.isPrototypeOf(e) ||
                HTMLCollection.prototype.isPrototypeOf(e)
                    ? e.forEach((e, t) => {
                          this.images.push({
                              title: e.getAttribute("title"),
                              src: e.getAttribute("href"),
                              srcset: e.getAttribute("data-srcset"),
                              sizes: e.getAttribute("data-sizes"),
                          }),
                              this.off(e, "click.chocolat"),
                              this.on(e, "click.chocolat", (e) => {
                                  this.init(t), e.preventDefault();
                              });
                      })
                    : (this.images = e),
                this.settings.container instanceof Element ||
                this.settings.container instanceof HTMLElement
                    ? (this.elems.container = this.settings.container)
                    : (this.elems.container = document.body),
                (this.api = {
                    open: (e) => ((e = parseInt(e) || 0), this.init(e)),
                    close: () => this.close(),
                    next: () => this.change(1),
                    prev: () => this.change(-1),
                    goto: (e) => this.open(e),
                    current: () => this.settings.currentImageIndex,
                    position: () => this.position(this.elems.img),
                    destroy: () => this.destroy(),
                    set: (e, t) => ((this.settings[e] = t), t),
                    get: (e) => this.settings[e],
                    getElem: (e) => this.elems[e],
                });
        }
        init(e) {
            return (
                this.state.initialized ||
                    (this.markup(),
                    this.attachListeners(),
                    (this.settings.lastImageIndex = this.images.length - 1),
                    (this.state.initialized = !0)),
                this.settings.afterInitialize.call(this),
                this.load(e)
            );
        }
        load(e) {
            if (
                (this.state.visible ||
                    ((this.state.visible = !0),
                    setTimeout(() => {
                        this.elems.overlay.classList.add("chocolat-visible"),
                            this.elems.wrapper.classList.add(
                                "chocolat-visible"
                            );
                    }, 0),
                    this.elems.container.classList.add("chocolat-open")),
                this.settings.fullScreen && l(this.elems.wrapper),
                this.settings.currentImageIndex === e)
            )
                return Promise.resolve();
            let i,
                n,
                a = setTimeout(() => {
                    this.elems.loader.classList.add("chocolat-visible");
                }, 1e3),
                o = setTimeout(() => {
                    (o = void 0),
                        (i = t(() => {
                            this.elems.imageCanvas.classList.remove(
                                "chocolat-visible"
                            );
                        }, this.elems.imageCanvas));
                }, 80);
            return s(this.images[e])
                .then(
                    (e) => (
                        (n = e), o ? (clearTimeout(o), Promise.resolve()) : i
                    )
                )
                .then(() => {
                    const t = e + 1;
                    return (
                        null != this.images[t] && s(this.images[t]),
                        (this.settings.currentImageIndex = e),
                        (this.elems.description.textContent =
                            this.settings.description.call(this)),
                        (this.elems.pagination.textContent =
                            this.settings.pagination.call(this)),
                        this.arrows(),
                        this.position(n).then(
                            () => (
                                this.elems.loader.classList.remove(
                                    "chocolat-visible"
                                ),
                                clearTimeout(a),
                                this.appear(n)
                            )
                        )
                    );
                })
                .then(() => {
                    this.elems.container.classList.toggle(
                        "chocolat-zoomable",
                        this.zoomable(n, this.elems.wrapper)
                    ),
                        this.settings.afterImageLoad.call(this);
                });
        }
        position({ naturalHeight: e, naturalWidth: s }) {
            const l = {
                    imgHeight: e,
                    imgWidth: s,
                    containerHeight: this.elems.container.clientHeight,
                    containerWidth: this.elems.container.clientWidth,
                    canvasWidth: this.elems.imageCanvas.clientWidth,
                    canvasHeight: this.elems.imageCanvas.clientHeight,
                    imageSize: this.settings.imageSize,
                },
                { width: n, height: a } = i(l);
            return t(() => {
                Object.assign(this.elems.imageWrapper.style, {
                    width: n + "px",
                    height: a + "px",
                });
            }, this.elems.imageWrapper);
        }
        appear(e) {
            return (
                this.elems.imageWrapper.removeChild(this.elems.img),
                (this.elems.img = e),
                this.elems.img.setAttribute("class", "chocolat-img"),
                this.elems.imageWrapper.appendChild(this.elems.img),
                t(() => {
                    this.elems.imageCanvas.classList.add("chocolat-visible");
                }, this.elems.imageCanvas)
            );
        }
        change(e) {
            if (!this.state.visible) return;
            if (!this.settings.linkImages) return;
            this.zoomOut();
            const t = this.settings.currentImageIndex + parseInt(e);
            if (t > this.settings.lastImageIndex) {
                if (this.settings.loop)
                    return this.load(this.settings.firstImageIndex);
            } else {
                if (!(t < this.settings.firstImageIndex)) return this.load(t);
                if (this.settings.loop)
                    return this.load(this.settings.lastImageIndex);
            }
        }
        arrows() {
            this.settings.loop
                ? (this.elems.left.classList.add("active"),
                  this.elems.right.classList.add("active"))
                : this.settings.linkImages
                ? (this.elems.right.classList.toggle(
                      "active",
                      this.settings.currentImageIndex !==
                          this.settings.lastImageIndex
                  ),
                  this.elems.left.classList.toggle(
                      "active",
                      this.settings.currentImageIndex !==
                          this.settings.firstImageIndex
                  ))
                : (this.elems.left.classList.remove("active"),
                  this.elems.right.classList.remove("active"));
        }
        close() {
            if (this.state.fullScreenOpen) return void n();
            this.state.visible = !1;
            const e = t(() => {
                    this.elems.overlay.classList.remove("chocolat-visible");
                }, this.elems.overlay),
                s = t(() => {
                    this.elems.wrapper.classList.remove("chocolat-visible");
                }, this.elems.wrapper);
            return Promise.all([e, s]).then(() => {
                this.elems.container.classList.remove("chocolat-open"),
                    this.settings.afterClose.call(this);
            });
        }
        destroy() {
            for (let e = this.events.length - 1; e >= 0; e--) {
                const { element: t, eventName: s } = this.events[e];
                this.off(t, s);
            }
            this.state.initialized &&
                (this.state.fullScreenOpen && n(),
                (this.settings.currentImageIndex = void 0),
                (this.state.visible = !1),
                (this.state.initialized = !1),
                this.elems.container.classList.remove(...this._cssClasses),
                this.elems.wrapper.parentNode.removeChild(this.elems.wrapper));
        }
        markup() {
            this.elems.container.classList.add(
                "chocolat-open",
                this.settings.className
            ),
                "cover" == this.settings.imageSize &&
                    this.elems.container.classList.add("chocolat-cover"),
                this.elems.container !== document.body &&
                    this.elems.container.classList.add("chocolat-in-container"),
                (this.elems.wrapper = document.createElement("div")),
                this.elems.wrapper.setAttribute(
                    "id",
                    "chocolat-content-" + this.settings.setIndex
                ),
                this.elems.wrapper.setAttribute("class", "chocolat-wrapper"),
                this.elems.container.appendChild(this.elems.wrapper),
                (this.elems.overlay = document.createElement("div")),
                this.elems.overlay.setAttribute("class", "chocolat-overlay"),
                this.elems.wrapper.appendChild(this.elems.overlay),
                (this.elems.loader = document.createElement("div")),
                this.elems.loader.setAttribute("class", "chocolat-loader"),
                this.elems.wrapper.appendChild(this.elems.loader),
                (this.elems.layout = document.createElement("div")),
                this.elems.layout.setAttribute("class", "chocolat-layout"),
                this.elems.wrapper.appendChild(this.elems.layout),
                (this.elems.top = document.createElement("div")),
                this.elems.top.setAttribute("class", "chocolat-top"),
                this.elems.layout.appendChild(this.elems.top),
                (this.elems.center = document.createElement("div")),
                this.elems.center.setAttribute("class", "chocolat-center"),
                this.elems.layout.appendChild(this.elems.center),
                (this.elems.left = document.createElement("div")),
                this.elems.left.setAttribute("class", "chocolat-left"),
                this.elems.center.appendChild(this.elems.left),
                (this.elems.imageCanvas = document.createElement("div")),
                this.elems.imageCanvas.setAttribute(
                    "class",
                    "chocolat-image-canvas"
                ),
                this.elems.center.appendChild(this.elems.imageCanvas),
                (this.elems.imageWrapper = document.createElement("div")),
                this.elems.imageWrapper.setAttribute(
                    "class",
                    "chocolat-image-wrapper"
                ),
                this.elems.imageCanvas.appendChild(this.elems.imageWrapper),
                (this.elems.img = document.createElement("img")),
                this.elems.img.setAttribute("class", "chocolat-img"),
                this.elems.imageWrapper.appendChild(this.elems.img),
                (this.elems.right = document.createElement("div")),
                this.elems.right.setAttribute("class", "chocolat-right"),
                this.elems.center.appendChild(this.elems.right),
                (this.elems.bottom = document.createElement("div")),
                this.elems.bottom.setAttribute("class", "chocolat-bottom"),
                this.elems.layout.appendChild(this.elems.bottom),
                (this.elems.close = document.createElement("span")),
                this.elems.close.setAttribute("class", "chocolat-close"),
                this.elems.top.appendChild(this.elems.close),
                (this.elems.description = document.createElement("span")),
                this.elems.description.setAttribute(
                    "class",
                    "chocolat-description"
                ),
                this.elems.bottom.appendChild(this.elems.description),
                (this.elems.pagination = document.createElement("span")),
                this.elems.pagination.setAttribute(
                    "class",
                    "chocolat-pagination"
                ),
                this.elems.bottom.appendChild(this.elems.pagination),
                (this.elems.setTitle = document.createElement("span")),
                this.elems.setTitle.setAttribute("class", "chocolat-set-title"),
                (this.elems.setTitle.textContent = this.settings.setTitle()),
                this.elems.bottom.appendChild(this.elems.setTitle),
                (this.elems.fullscreen = document.createElement("span")),
                this.elems.fullscreen.setAttribute(
                    "class",
                    "chocolat-fullscreen"
                ),
                this.elems.bottom.appendChild(this.elems.fullscreen),
                this.settings.afterMarkup.call(this);
        }
        attachListeners() {
            this.off(document, "keydown.chocolat"),
                this.on(document, "keydown.chocolat", (e) => {
                    this.state.initialized &&
                        (37 == e.keyCode
                            ? this.change(-1)
                            : 39 == e.keyCode
                            ? this.change(1)
                            : 27 == e.keyCode && this.close());
                });
            const t = this.elems.wrapper.querySelector(".chocolat-right");
            this.off(t, "click.chocolat"),
                this.on(t, "click.chocolat", () => {
                    this.change(1);
                });
            const s = this.elems.wrapper.querySelector(".chocolat-left");
            this.off(s, "click.chocolat"),
                this.on(s, "click.chocolat", () => {
                    this.change(-1);
                }),
                this.off(this.elems.close, "click.chocolat"),
                this.on(
                    this.elems.close,
                    "click.chocolat",
                    this.close.bind(this)
                ),
                this.off(this.elems.fullscreen, "click.chocolat"),
                this.on(this.elems.fullscreen, "click.chocolat", () => {
                    this.state.fullScreenOpen ? n() : l(this.elems.wrapper);
                }),
                this.off(document, "fullscreenchange.chocolat"),
                this.on(document, "fullscreenchange.chocolat", () => {
                    document.fullscreenElement ||
                    document.webkitCurrentFullScreenElement ||
                    document.webkitFullscreenElement
                        ? (this.state.fullScreenOpen = !0)
                        : (this.state.fullScreenOpen = !1);
                }),
                this.off(document, "webkitfullscreenchange.chocolat"),
                this.on(document, "webkitfullscreenchange.chocolat", () => {
                    document.fullscreenElement ||
                    document.webkitCurrentFullScreenElement ||
                    document.webkitFullscreenElement
                        ? (this.state.fullScreenOpen = !0)
                        : (this.state.fullScreenOpen = !1);
                }),
                this.settings.closeOnBackgroundClick &&
                    (this.off(this.elems.overlay, "click.chocolat"),
                    this.on(
                        this.elems.overlay,
                        "click.chocolat",
                        this.close.bind(this)
                    )),
                this.off(this.elems.wrapper, "click.chocolat"),
                this.on(this.elems.wrapper, "click.chocolat", () => {
                    null !== this.state.initialZoomState &&
                        this.state.visible &&
                        (this.elems.container.classList.add(
                            "chocolat-zooming-out"
                        ),
                        this.zoomOut().then(() => {
                            this.elems.container.classList.remove(
                                "chocolat-zoomed"
                            ),
                                this.elems.container.classList.remove(
                                    "chocolat-zooming-out"
                                );
                        }));
                }),
                this.off(this.elems.imageWrapper, "click.chocolat"),
                this.on(this.elems.imageWrapper, "click.chocolat", (e) => {
                    null === this.state.initialZoomState &&
                        this.elems.container.classList.contains(
                            "chocolat-zoomable"
                        ) &&
                        (e.stopPropagation(),
                        this.elems.container.classList.add(
                            "chocolat-zooming-in"
                        ),
                        this.zoomIn(e).then(() => {
                            this.elems.container.classList.add(
                                "chocolat-zoomed"
                            ),
                                this.elems.container.classList.remove(
                                    "chocolat-zooming-in"
                                );
                        }));
                }),
                this.on(this.elems.wrapper, "mousemove.chocolat", (e) => {
                    if (
                        null === this.state.initialZoomState ||
                        !this.state.visible
                    )
                        return;
                    const t = this.elems.wrapper.getBoundingClientRect(),
                        s = t.top + window.scrollY,
                        i = t.left + window.scrollX,
                        l = this.elems.wrapper.clientHeight,
                        n = this.elems.wrapper.clientWidth,
                        a = this.elems.img.width,
                        o = this.elems.img.height,
                        c = [e.pageX - n / 2 - i, e.pageY - l / 2 - s];
                    let h = 0;
                    if (a > n) {
                        const e = this.settings.zoomedPaddingX(a, n);
                        (h = c[0] / (n / 2)), (h *= (a - n) / 2 + e);
                    }
                    let r = 0;
                    if (o > l) {
                        const e = this.settings.zoomedPaddingY(o, l);
                        (r = c[1] / (l / 2)), (r *= (o - l) / 2 + e);
                    }
                    (this.elems.img.style.marginLeft = -h + "px"),
                        (this.elems.img.style.marginTop = -r + "px");
                }),
                this.on(window, "resize.chocolat", (t) => {
                    this.state.initialized &&
                        this.state.visible &&
                        (function (t, s) {
                            clearTimeout(e),
                                (e = setTimeout(function () {
                                    s();
                                }, t));
                        })(50, () => {
                            const e = {
                                    imgHeight: this.elems.img.naturalHeight,
                                    imgWidth: this.elems.img.naturalWidth,
                                    containerHeight:
                                        this.elems.wrapper.clientHeight,
                                    containerWidth:
                                        this.elems.wrapper.clientWidth,
                                    canvasWidth:
                                        this.elems.imageCanvas.clientWidth,
                                    canvasHeight:
                                        this.elems.imageCanvas.clientHeight,
                                    imageSize: this.settings.imageSize,
                                },
                                { width: t, height: s } = i(e);
                            this.position(this.elems.img).then(() => {
                                this.elems.container.classList.toggle(
                                    "chocolat-zoomable",
                                    this.zoomable(
                                        this.elems.img,
                                        this.elems.wrapper
                                    )
                                );
                            });
                        });
                });
        }
        zoomable(e, t) {
            const s = t.clientWidth,
                i = t.clientHeight,
                l = !(
                    !this.settings.allowZoom ||
                    !(e.naturalWidth > s || e.naturalHeight > i)
                ),
                n =
                    e.clientWidth > e.naturalWidth ||
                    e.clientHeight > e.naturalHeight;
            return l && !n;
        }
        zoomIn(e) {
            return (
                (this.state.initialZoomState = this.settings.imageSize),
                (this.settings.imageSize = "native"),
                this.position(this.elems.img)
            );
        }
        zoomOut(e) {
            return (
                (this.settings.imageSize =
                    this.state.initialZoomState || this.settings.imageSize),
                (this.state.initialZoomState = null),
                (this.elems.img.style.margin = 0),
                this.position(this.elems.img)
            );
        }
        on(e, t, s) {
            const i = this.events.push({ element: e, eventName: t, cb: s });
            e.addEventListener(t.split(".")[0], this.events[i - 1].cb);
        }
        off(e, t) {
            const s = this.events.findIndex(
                (s) => s.element === e && s.eventName === t
            );
            this.events[s] &&
                (e.removeEventListener(t.split(".")[0], this.events[s].cb),
                this.events.splice(s, 1));
        }
    }
    const c = [];
    window.Chocolat = function (e, t) {
        const s = Object.assign({}, a, { images: [] }, t, {
                setIndex: c.length,
            }),
            i = new o(e, s);
        return c.push(i), i;
    };
})();
