(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [888],
  {
    2924: function (o, i, f) {
      "use strict";
      var p =
        "undefined" != typeof globalThis
          ? globalThis
          : "undefined" != typeof window
          ? window
          : void 0 !== f.g
          ? f.g
          : "undefined" != typeof self
          ? self
          : {};
      function a(a) {
        return a &&
          a.__esModule &&
          Object.prototype.hasOwnProperty.call(a, "default")
          ? a.default
          : a;
      }
      function b(b, a) {
        return b((a = { exports: {} }), a.exports), a.exports;
      }
      var g = b(function (c, b) {
        var a;
        Object.defineProperty(b, "__esModule", { value: !0 }),
          (b.BLOCKS = void 0),
          ((a = b.BLOCKS || (b.BLOCKS = {})).DOCUMENT = "document"),
          (a.PARAGRAPH = "paragraph"),
          (a.HEADING_1 = "heading-1"),
          (a.HEADING_2 = "heading-2"),
          (a.HEADING_3 = "heading-3"),
          (a.HEADING_4 = "heading-4"),
          (a.HEADING_5 = "heading-5"),
          (a.HEADING_6 = "heading-6"),
          (a.OL_LIST = "ordered-list"),
          (a.UL_LIST = "unordered-list"),
          (a.LIST_ITEM = "list-item"),
          (a.HR = "hr"),
          (a.QUOTE = "blockquote"),
          (a.EMBEDDED_ENTRY = "embedded-entry-block"),
          (a.EMBEDDED_ASSET = "embedded-asset-block"),
          (a.TABLE = "table"),
          (a.TABLE_ROW = "table-row"),
          (a.TABLE_CELL = "table-cell"),
          (a.TABLE_HEADER_CELL = "table-header-cell");
      });
      a(g), g.BLOCKS;
      var h = b(function (c, a) {
        var b;
        Object.defineProperty(a, "__esModule", { value: !0 }),
          (a.INLINES = void 0),
          ((b = a.INLINES || (a.INLINES = {})).HYPERLINK = "hyperlink"),
          (b.ENTRY_HYPERLINK = "entry-hyperlink"),
          (b.ASSET_HYPERLINK = "asset-hyperlink"),
          (b.EMBEDDED_ENTRY = "embedded-entry-inline");
      });
      a(h), h.INLINES;
      var j = b(function (d, c) {
        var b, a;
        Object.defineProperty(c, "__esModule", { value: !0 }),
          ((a = b || (b = {})).BOLD = "bold"),
          (a.ITALIC = "italic"),
          (a.UNDERLINE = "underline"),
          (a.CODE = "code"),
          (c.default = b);
      });
      a(j);
      var c = b(function (d, a) {
        var b,
          c =
            (p && p.__spreadArray) ||
            function (d, b, e) {
              if (e || 2 === arguments.length)
                for (var c, a = 0, f = b.length; a < f; a++)
                  (!c && a in b) ||
                    (c || (c = Array.prototype.slice.call(b, 0, a)),
                    (c[a] = b[a]));
              return d.concat(c || Array.prototype.slice.call(b));
            };
        Object.defineProperty(a, "__esModule", { value: !0 }),
          (a.V1_NODE_TYPES =
            a.TEXT_CONTAINERS =
            a.HEADINGS =
            a.CONTAINERS =
            a.VOID_BLOCKS =
            a.TABLE_BLOCKS =
            a.LIST_ITEM_BLOCKS =
            a.TOP_LEVEL_BLOCKS =
              void 0),
          (a.TOP_LEVEL_BLOCKS = [
            g.BLOCKS.PARAGRAPH,
            g.BLOCKS.HEADING_1,
            g.BLOCKS.HEADING_2,
            g.BLOCKS.HEADING_3,
            g.BLOCKS.HEADING_4,
            g.BLOCKS.HEADING_5,
            g.BLOCKS.HEADING_6,
            g.BLOCKS.OL_LIST,
            g.BLOCKS.UL_LIST,
            g.BLOCKS.HR,
            g.BLOCKS.QUOTE,
            g.BLOCKS.EMBEDDED_ENTRY,
            g.BLOCKS.EMBEDDED_ASSET,
            g.BLOCKS.TABLE,
          ]),
          (a.LIST_ITEM_BLOCKS = [
            g.BLOCKS.PARAGRAPH,
            g.BLOCKS.HEADING_1,
            g.BLOCKS.HEADING_2,
            g.BLOCKS.HEADING_3,
            g.BLOCKS.HEADING_4,
            g.BLOCKS.HEADING_5,
            g.BLOCKS.HEADING_6,
            g.BLOCKS.OL_LIST,
            g.BLOCKS.UL_LIST,
            g.BLOCKS.HR,
            g.BLOCKS.QUOTE,
            g.BLOCKS.EMBEDDED_ENTRY,
            g.BLOCKS.EMBEDDED_ASSET,
          ]),
          (a.TABLE_BLOCKS = [
            g.BLOCKS.TABLE,
            g.BLOCKS.TABLE_ROW,
            g.BLOCKS.TABLE_CELL,
            g.BLOCKS.TABLE_HEADER_CELL,
          ]),
          (a.VOID_BLOCKS = [
            g.BLOCKS.HR,
            g.BLOCKS.EMBEDDED_ENTRY,
            g.BLOCKS.EMBEDDED_ASSET,
          ]),
          (a.CONTAINERS =
            (((b = {})[g.BLOCKS.OL_LIST] = [g.BLOCKS.LIST_ITEM]),
            (b[g.BLOCKS.UL_LIST] = [g.BLOCKS.LIST_ITEM]),
            (b[g.BLOCKS.LIST_ITEM] = a.LIST_ITEM_BLOCKS),
            (b[g.BLOCKS.QUOTE] = [g.BLOCKS.PARAGRAPH]),
            (b[g.BLOCKS.TABLE] = [g.BLOCKS.TABLE_ROW]),
            (b[g.BLOCKS.TABLE_ROW] = [
              g.BLOCKS.TABLE_CELL,
              g.BLOCKS.TABLE_HEADER_CELL,
            ]),
            (b[g.BLOCKS.TABLE_CELL] = [g.BLOCKS.PARAGRAPH]),
            (b[g.BLOCKS.TABLE_HEADER_CELL] = [g.BLOCKS.PARAGRAPH]),
            b)),
          (a.HEADINGS = [
            g.BLOCKS.HEADING_1,
            g.BLOCKS.HEADING_2,
            g.BLOCKS.HEADING_3,
            g.BLOCKS.HEADING_4,
            g.BLOCKS.HEADING_5,
            g.BLOCKS.HEADING_6,
          ]),
          (a.TEXT_CONTAINERS = c([g.BLOCKS.PARAGRAPH], a.HEADINGS, !0)),
          (a.V1_NODE_TYPES = [
            g.BLOCKS.DOCUMENT,
            g.BLOCKS.PARAGRAPH,
            g.BLOCKS.HEADING_1,
            g.BLOCKS.HEADING_2,
            g.BLOCKS.HEADING_3,
            g.BLOCKS.HEADING_4,
            g.BLOCKS.HEADING_5,
            g.BLOCKS.HEADING_6,
            g.BLOCKS.OL_LIST,
            g.BLOCKS.UL_LIST,
            g.BLOCKS.LIST_ITEM,
            g.BLOCKS.HR,
            g.BLOCKS.QUOTE,
            g.BLOCKS.EMBEDDED_ENTRY,
            g.BLOCKS.EMBEDDED_ASSET,
            h.INLINES.HYPERLINK,
            h.INLINES.ENTRY_HYPERLINK,
            h.INLINES.ASSET_HYPERLINK,
            h.INLINES.EMBEDDED_ENTRY,
            "text",
          ]);
      });
      a(c),
        c.V1_NODE_TYPES,
        c.TEXT_CONTAINERS,
        c.HEADINGS,
        c.CONTAINERS,
        c.VOID_BLOCKS,
        c.TABLE_BLOCKS,
        c.LIST_ITEM_BLOCKS,
        c.TOP_LEVEL_BLOCKS;
      var k = b(function (b, a) {
        Object.defineProperty(a, "__esModule", { value: !0 });
      });
      a(k);
      var l = b(function (b, a) {
        Object.defineProperty(a, "__esModule", { value: !0 });
      });
      a(l);
      var m = b(function (c, a) {
        Object.defineProperty(a, "__esModule", { value: !0 });
        var b = {
          nodeType: g.BLOCKS.DOCUMENT,
          data: {},
          content: [
            {
              nodeType: g.BLOCKS.PARAGRAPH,
              data: {},
              content: [{ nodeType: "text", value: "", marks: [], data: {} }],
            },
          ],
        };
        a.default = b;
      });
      a(m);
      var e = b(function (b, a) {
        function c(b, d) {
          for (var a = 0, c = Object.keys(b); a < c.length; a++)
            if (d === b[c[a]]) return !0;
          return !1;
        }
        Object.defineProperty(a, "__esModule", { value: !0 }),
          (a.isText = a.isBlock = a.isInline = void 0),
          (a.isInline = function (a) {
            return c(h.INLINES, a.nodeType);
          }),
          (a.isBlock = function (a) {
            return c(g.BLOCKS, a.nodeType);
          }),
          (a.isText = function (a) {
            return "text" === a.nodeType;
          });
      });
      a(e), e.isText, e.isBlock, e.isInline;
      var d = b(function (i, a) {
        var n =
            (p && p.__createBinding) ||
            (Object.create
              ? function (e, c, d, b) {
                  void 0 === b && (b = d);
                  var a = Object.getOwnPropertyDescriptor(c, d);
                  (!a ||
                    ("get" in a
                      ? !c.__esModule
                      : a.writable || a.configurable)) &&
                    (a = {
                      enumerable: !0,
                      get: function () {
                        return c[d];
                      },
                    }),
                    Object.defineProperty(e, b, a);
                }
              : function (c, d, b, a) {
                  void 0 === a && (a = b), (c[a] = d[b]);
                }),
          o =
            (p && p.__setModuleDefault) ||
            (Object.create
              ? function (a, b) {
                  Object.defineProperty(a, "default", {
                    enumerable: !0,
                    value: b,
                  });
                }
              : function (a, b) {
                  a.default = b;
                }),
          b =
            (p && p.__exportStar) ||
            function (b, c) {
              for (var a in b)
                "default" === a ||
                  Object.prototype.hasOwnProperty.call(c, a) ||
                  n(c, b, a);
            },
          d =
            (p && p.__importStar) ||
            function (a) {
              if (a && a.__esModule) return a;
              var b = {};
              if (null != a)
                for (var c in a)
                  "default" !== c &&
                    Object.prototype.hasOwnProperty.call(a, c) &&
                    n(b, a, c);
              return o(b, a), b;
            },
          q =
            (p && p.__importDefault) ||
            function (a) {
              return a && a.__esModule ? a : { default: a };
            };
        Object.defineProperty(a, "__esModule", { value: !0 }),
          (a.helpers =
            a.EMPTY_DOCUMENT =
            a.MARKS =
            a.INLINES =
            a.BLOCKS =
              void 0),
          Object.defineProperty(a, "BLOCKS", {
            enumerable: !0,
            get: function () {
              return g.BLOCKS;
            },
          }),
          Object.defineProperty(a, "INLINES", {
            enumerable: !0,
            get: function () {
              return h.INLINES;
            },
          }),
          Object.defineProperty(a, "MARKS", {
            enumerable: !0,
            get: function () {
              return q(j).default;
            },
          }),
          b(c, a),
          b(k, a),
          b(l, a),
          Object.defineProperty(a, "EMPTY_DOCUMENT", {
            enumerable: !0,
            get: function () {
              return q(m).default;
            },
          });
        var f = d(e);
        a.helpers = f;
      });
      a(d);
      var q = d.helpers;
      function n(a, b) {
        return (void 0 === b && (b = " "), a && a.content)
          ? a.content.reduce(function (d, c, f) {
              if (q.isText(c)) g = c.value;
              else if ((q.isBlock(c) || q.isInline(c)) && !(g = n(c, b)).length)
                return d;
              var g,
                e = a.content[f + 1];
              return d + g + (e && q.isBlock(e) ? b : "");
            }, "")
          : "";
      }
      d.EMPTY_DOCUMENT, d.MARKS, d.INLINES, d.BLOCKS, (i.a = n);
    },
    8509: function (e, b, c) {
      "use strict";
      c.d(b, {
        Qp: function () {
          return q;
        },
        tG: function () {
          return s;
        },
        tP: function () {
          return r;
        },
      });
      var d = !1;
      if ("undefined" != typeof window) {
        var a = {
          get passive() {
            d = !0;
            return;
          },
        };
        window.addEventListener("testPassive", null, a),
          window.removeEventListener("testPassive", null, a);
      }
      var f =
          "undefined" != typeof window &&
          window.navigator &&
          window.navigator.platform &&
          (/iP(ad|hone|od)/.test(window.navigator.platform) ||
            ("MacIntel" === window.navigator.platform &&
              window.navigator.maxTouchPoints > 1)),
        g = [],
        h = !1,
        i = -1,
        j = void 0,
        k = void 0,
        l = function (a) {
          return g.some(function (b) {
            return !!(b.options.allowTouchMove && b.options.allowTouchMove(a));
          });
        },
        m = function (b) {
          var a = b || window.event;
          return (
            !!l(a.target) ||
            a.touches.length > 1 ||
            (a.preventDefault && a.preventDefault(), !1)
          );
        },
        n = function (a) {
          if (void 0 === k) {
            var c = !!a && !0 === a.reserveScrollBarGap,
              b = window.innerWidth - document.documentElement.clientWidth;
            c &&
              b > 0 &&
              ((k = document.body.style.paddingRight),
              (document.body.style.paddingRight = b + "px"));
          }
          void 0 === j &&
            ((j = document.body.style.overflow),
            (document.body.style.overflow = "hidden"));
        },
        o = function () {
          void 0 !== k &&
            ((document.body.style.paddingRight = k), (k = void 0)),
            void 0 !== j && ((document.body.style.overflow = j), (j = void 0));
        },
        p = function (a, c) {
          var b,
            d = a.targetTouches[0].clientY - i;
          return (
            !l(a.target) &&
            (c && 0 === c.scrollTop && d > 0
              ? m(a)
              : (b = c) &&
                b.scrollHeight - b.scrollTop <= b.clientHeight &&
                d < 0
              ? m(a)
              : (a.stopPropagation(), !0))
          );
        },
        q = function (a, b) {
          if (!a) {
            console.error(
              "disableBodyScroll unsuccessful - targetElement must be provided when calling disableBodyScroll on IOS devices."
            );
            return;
          }
          !g.some(function (b) {
            return b.targetElement === a;
          }) &&
            ((g = [].concat(
              (function (a) {
                if (!Array.isArray(a)) return Array.from(a);
                for (var b = 0, c = Array(a.length); b < a.length; b++)
                  c[b] = a[b];
                return c;
              })(g),
              [{ targetElement: a, options: b || {} }]
            )),
            f
              ? ((a.ontouchstart = function (a) {
                  1 === a.targetTouches.length &&
                    (i = a.targetTouches[0].clientY);
                }),
                (a.ontouchmove = function (b) {
                  1 === b.targetTouches.length && p(b, a);
                }),
                h ||
                  (document.addEventListener(
                    "touchmove",
                    m,
                    d ? { passive: !1 } : void 0
                  ),
                  (h = !0)))
              : n(b));
        },
        r = function () {
          f
            ? (g.forEach(function (a) {
                (a.targetElement.ontouchstart = null),
                  (a.targetElement.ontouchmove = null);
              }),
              h &&
                (document.removeEventListener(
                  "touchmove",
                  m,
                  d ? { passive: !1 } : void 0
                ),
                (h = !1)),
              (i = -1))
            : o(),
            (g = []);
        },
        s = function (a) {
          if (!a) {
            console.error(
              "enableBodyScroll unsuccessful - targetElement must be provided when calling enableBodyScroll on IOS devices."
            );
            return;
          }
          (g = g.filter(function (b) {
            return b.targetElement !== a;
          })),
            f
              ? ((a.ontouchstart = null),
                (a.ontouchmove = null),
                h &&
                  0 === g.length &&
                  (document.removeEventListener(
                    "touchmove",
                    m,
                    d ? { passive: !1 } : void 0
                  ),
                  (h = !1)))
              : g.length || o();
        };
    },
    4184: function (a, b) {
      var c, d;
      !(function () {
        "use strict";
        var f = {}.hasOwnProperty;
        function e() {
          for (var b = [], c = 0; c < arguments.length; c++) {
            var a = arguments[c];
            if (a) {
              var d = typeof a;
              if ("string" === d || "number" === d) b.push(a);
              else if (Array.isArray(a)) {
                if (a.length) {
                  var h = e.apply(null, a);
                  h && b.push(h);
                }
              } else if ("object" === d) {
                if (a.toString === Object.prototype.toString)
                  for (var g in a) f.call(a, g) && a[g] && b.push(g);
                else b.push(a.toString());
              }
            }
          }
          return b.join(" ");
        }
        a.exports
          ? ((e.default = e), (a.exports = e))
          : ((c = []),
            void 0 !==
              (d = function () {
                return e;
              }.apply(b, c)) && (a.exports = d));
      })();
    },
    3454: function (d, e, a) {
      "use strict";
      var b, c;
      d.exports =
        (null === (b = a.g.process) || void 0 === b ? void 0 : b.env) &&
        "object" ==
          typeof (null === (c = a.g.process) || void 0 === c ? void 0 : c.env)
          ? a.g.process
          : a(7663);
    },
    1118: function (a, b, c) {
      (window.__NEXT_P = window.__NEXT_P || []).push([
        "/_app",
        function () {
          return c(3828);
        },
      ]);
    },
    3375: function (i, d, a) {
      "use strict";
      a.d(d, {
        P1: function () {
          return w;
        },
        lk: function () {
          return v;
        },
        ce: function () {
          return x;
        },
        ZP: function () {
          return y;
        },
      });
      var j = a(5893),
        k = a(7294),
        e = a(5697),
        b = a.n(e),
        f = a(4184),
        l = a.n(f),
        m = a(558),
        g = a(1664),
        n = a.n(g),
        o = a(3697),
        p = a(2167),
        h = a(9536),
        q = a.n(h);
      function r(a, b, c) {
        return (
          b in a
            ? Object.defineProperty(a, b, {
                value: c,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (a[b] = c),
          a
        );
      }
      function s(d) {
        for (var a = 1; a < arguments.length; a++) {
          var c = null != arguments[a] ? arguments[a] : {},
            b = Object.keys(c);
          "function" == typeof Object.getOwnPropertySymbols &&
            (b = b.concat(
              Object.getOwnPropertySymbols(c).filter(function (a) {
                return Object.getOwnPropertyDescriptor(c, a).enumerable;
              })
            )),
            b.forEach(function (a) {
              r(d, a, c[a]);
            });
        }
        return d;
      }
      function t(a, d) {
        if (null == a) return {};
        var b,
          c,
          e = u(a, d);
        if (Object.getOwnPropertySymbols) {
          var f = Object.getOwnPropertySymbols(a);
          for (c = 0; c < f.length; c++)
            (b = f[c]),
              !(d.indexOf(b) >= 0) &&
                Object.prototype.propertyIsEnumerable.call(a, b) &&
                (e[b] = a[b]);
        }
        return e;
      }
      function u(c, f) {
        if (null == c) return {};
        var a,
          b,
          d = {},
          e = Object.keys(c);
        for (b = 0; b < e.length; b++)
          (a = e[b]), f.indexOf(a) >= 0 || (d[a] = c[a]);
        return d;
      }
      var c = function (a) {
        var h = a.className,
          i = a.children,
          b = a.href,
          p = a.onClick,
          u = a.theme,
          v = a.disabled,
          w = a.ariaLabel,
          c = (0, k.useState)(!1),
          x = c[0],
          A = c[1],
          d = function () {
            A(!0);
          },
          e = (0, j.jsx)(o.Z, {
            as: "span",
            theme: "buttonLabel",
            children: i,
          }),
          f = l()(q().root, h, q()["theme-".concat(u)], r({}, q().animated, x));
        if (b) {
          var g = (0, m.gO)(b),
            y = g.href,
            z = t(g, ["href"]);
          return (0, j.jsx)(n(), {
            href: y,
            children: (0, j.jsx)(
              "a",
              s({ className: f, onMouseEnter: d }, z, { children: e })
            ),
          });
        }
        return (0, j.jsx)("button", {
          className: f,
          onClick: p,
          onMouseEnter: d,
          disabled: v,
          "aria-label": w,
          children: e,
        });
      };
      (c.propTypes = {
        className: b().string,
        children: b().node,
        href: b().string,
        onClick: b().func,
        icon: b().string,
        disabled: b().bool,
        theme: b().oneOf(["primary", "secondary", "tertiary"]),
      }),
        (c.defaultProps = { theme: "primary", disabled: !1 });
      var v = function (a) {
          var b = a.className,
            d = t(a, ["className"]);
          return (0, j.jsx)(
            c,
            s({ className: l()(q().iconButton, b), ariaLabel: "Previous" }, d, {
              children: (0, j.jsx)(p.JO, {
                className: q().iconButtonIcon,
                type: "arrowLeft",
              }),
            })
          );
        },
        w = function (a) {
          var b = a.className,
            d = t(a, ["className"]);
          return (0, j.jsx)(
            c,
            s({ className: l()(q().iconButton, b), ariaLabel: "Next" }, d, {
              children: (0, j.jsx)(p.JO, {
                className: q().iconButtonIcon,
                type: "arrowRight",
              }),
            })
          );
        },
        x = function (a) {
          var b = a.className,
            d = t(a, ["className"]);
          return (0, j.jsx)(
            c,
            s({ className: l()(q().iconButton, b), ariaLabel: "Search" }, d, {
              children: (0, j.jsx)(p.JO, {
                className: q().iconButtonIcon,
                type: "search",
              }),
            })
          );
        },
        y = c;
    },
    7768: function (i, d, a) {
      "use strict";
      a.d(d, {
        Z: function () {
          return p;
        },
      });
      var j = a(5893),
        k = a(7294),
        e = a(5697),
        b = a.n(e),
        f = a(4184),
        l = a.n(f),
        g = a(4298),
        m = a.n(g),
        n = a(3034),
        h = a(3332),
        o = a.n(h),
        c = function (a) {
          var e = a.className,
            f = a.region,
            g = a.portalId,
            b = a.formId,
            h = a.sfdcCampaignId,
            i = a.onReady,
            q = (0, k.useRef)(null),
            c = (0, n.oR)(function (a) {
              var b = a.hubSpotScriptLoaded,
                c = a.setHubSpotScriptLoaded;
              return { hubSpotScriptLoaded: b, setHubSpotScriptLoaded: c };
            }),
            d = c.hubSpotScriptLoaded,
            r = c.setHubSpotScriptLoaded,
            p = (0, k.useCallback)(
              function (a) {
                console.info("HubSpot Form ".concat(a, " is ready")),
                  "function" == typeof i && i(q);
              },
              [i]
            );
          return (
            (0, k.useEffect)(
              function () {
                !d ||
                  (null == q ? void 0 : q.current) ||
                  ((q.current = window.hbspt.forms.create({
                    target: "#id-".concat(b),
                    region: f,
                    portalId: g,
                    formId: b,
                    sfdcCampaignId: h,
                  })),
                  q.current.onReady(function () {
                    return p(b);
                  }));
              },
              [d, b, f, g, h, p]
            ),
            (0, j.jsxs)("div", {
              className: l()(o().root, e),
              children: [
                !d &&
                  (0, j.jsx)(m(), {
                    src: "//js.hsforms.net/forms/v2.js",
                    strategy: "afterInteractive",
                    onLoad: function () {
                      d || r();
                    },
                  }),
                (0, j.jsx)("div", { id: "id-".concat(b) }),
              ],
            })
          );
        };
      c.propTypes = {
        className: b().string,
        region: b().string.isRequired,
        portalId: b().string.isRequired,
        formId: b().string.isRequired,
        sfdcCampaignId: b().string,
        onReady: b().func,
      };
      var p = c;
    },
    2167: function (n, h, b) {
      "use strict";
      b.d(h, {
        JO: function () {
          return f;
        },
        $x: function () {
          return w;
        },
        Dz: function () {
          return g;
        },
      });
      var a = b(5893),
        i = b(5697),
        o = b.n(i),
        j = b(4184),
        p = b.n(j),
        k = b(481),
        q = b.n(k);
      function r(c, a) {
        (null == a || a > c.length) && (a = c.length);
        for (var b = 0, d = new Array(a); b < a; b++) d[b] = c[b];
        return d;
      }
      function s(a, b) {
        return (
          (function (a) {
            if (Array.isArray(a)) return a;
          })(a) ||
          (function (b, e) {
            var f,
              g,
              a =
                null == b
                  ? null
                  : ("undefined" != typeof Symbol && b[Symbol.iterator]) ||
                    b["@@iterator"];
            if (null != a) {
              var c = [],
                d = !0,
                h = !1;
              try {
                for (
                  a = a.call(b);
                  !(d = (f = a.next()).done) &&
                  (c.push(f.value), !e || c.length !== e);
                  d = !0
                );
              } catch (i) {
                (h = !0), (g = i);
              } finally {
                try {
                  d || null == a.return || a.return();
                } finally {
                  if (h) throw g;
                }
              }
              return c;
            }
          })(a, b) ||
          t(a, b) ||
          (function () {
            throw new TypeError(
              "Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
            );
          })()
        );
      }
      function t(a, c) {
        if (a) {
          if ("string" == typeof a) return r(a, c);
          var b = Object.prototype.toString.call(a).slice(8, -1);
          if (
            ("Object" === b && a.constructor && (b = a.constructor.name),
            "Map" === b || "Set" === b)
          )
            return Array.from(b);
          if (
            "Arguments" === b ||
            /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(b)
          )
            return r(a, c);
        }
      }
      var l = {
          arrowLeft: {
            viewBox: { width: 24, height: 24 },
            shape: (0, a.jsx)("g", {
              fill: "currentColor",
              children: (0, a.jsx)("polygon", {
                points:
                  "20.5 10.657 6.914 10.657 10.864 6.707 9.45 5.293 3.086 11.657 9.45 18.021 10.864 16.606 6.914 12.657 20.5 12.657 20.5 10.657",
              }),
            }),
          },
          arrowRight: {
            viewBox: { width: 24, height: 24 },
            shape: (0, a.jsx)("g", {
              fill: "currentColor",
              children: (0, a.jsx)("polygon", {
                points:
                  "15.551 5.293 14.137 6.707 18.086 10.657 4.5 10.657 4.5 12.657 18.086 12.657 14.137 16.606 15.551 18.021 21.914 11.657 15.551 5.293",
              }),
            }),
          },
          chevronDown: {
            viewBox: { width: 24, height: 24 },
            shape: (0, a.jsx)("g", {
              fill: "currentColor",
              children: (0, a.jsx)("polygon", {
                points:
                  "11.657 16.228 5.293 9.864 6.707 8.45 11.657 13.399 16.606 8.45 18.021 9.864 11.657 16.228",
              }),
            }),
          },
          filter: {
            viewBox: { width: 24, height: 24 },
            shape: (0, a.jsx)("path", {
              d: "M22 6H2M18 12H6M14 18h-4",
              stroke: "currentColor",
              strokeWidth: "1.5",
            }),
          },
          search: {
            viewBox: { width: 24, height: 24 },
            shape: (0, a.jsxs)("g", {
              fill: "none",
              children: [
                (0, a.jsx)("circle", {
                  cx: "11.2197",
                  cy: "11.2275",
                  r: "5.25",
                  transform: "rotate(45 11.2197 11.2275)",
                  strokeWidth: "1.5",
                  stroke: "currentColor",
                }),
                (0, a.jsx)("path", {
                  d: "M14.7656 14.7734L19.0083 19.0161",
                  strokeWidth: "1.5",
                  stroke: "currentColor",
                }),
              ],
            }),
          },
          facebook: {
            viewBox: { width: 24, height: 24 },
            shape: (0, a.jsx)("g", {
              fill: "currentColor",
              children: (0, a.jsx)("path", {
                d: "M16.2792,13.165l.57-3.5922H13.2831v-2.33A1.8282,1.8282,0,0,1,15.3786,5.301H17V2.2427A20.4387,20.4387,0,0,0,14.1217,2C11.1846,2,9.2648,3.72,9.2648,6.8349V9.5728H6V13.165H9.2648v8.684a13.4442,13.4442,0,0,0,4.0183,0V13.165Z",
              }),
            }),
          },
          linkedin: {
            viewBox: { width: 24, height: 24 },
            shape: (0, a.jsx)("g", {
              fill: "currentColor",
              children: (0, a.jsx)("path", {
                d: "M7.1562,20V8.32H3.5234V20ZM5.32,6.7578A2.1341,2.1341,0,0,0,7.43,4.6094a2.09,2.09,0,0,0-4.18,0A2.1269,2.1269,0,0,0,5.32,6.7578ZM20.7109,20H20.75V13.5938c0-3.125-.7031-5.5469-4.375-5.5469a3.8918,3.8918,0,0,0-3.4375,1.875h-.0391V8.32H9.4219V20h3.6328V14.2188c0-1.5235.2734-2.9688,2.1484-2.9688s1.9141,1.7188,1.9141,3.0859V20Z",
              }),
            }),
          },
          twitter: {
            viewBox: { width: 24, height: 24 },
            shape: (0, a.jsx)("g", {
              fill: "currentColor",
              children: (0, a.jsx)("path", {
                d: "M19.93,7.9375a8.6866,8.6866,0,0,0,2.0312-2.1094,7.6866,7.6866,0,0,1-2.3437.625,4.007,4.007,0,0,0,1.7969-2.2656,8.664,8.664,0,0,1-2.5782,1.0156,4.1172,4.1172,0,0,0-7.1093,2.8125,3.8489,3.8489,0,0,0,.1172.9375A11.9,11.9,0,0,1,3.3672,4.6562a3.99,3.99,0,0,0-.5469,2.07A4.0356,4.0356,0,0,0,4.6562,10.125a4.3251,4.3251,0,0,1-1.875-.5078v.039A4.1067,4.1067,0,0,0,6.0625,13.68a4.58,4.58,0,0,1-1.0547.1562,5.2881,5.2881,0,0,1-.7812-.0781,4.0818,4.0818,0,0,0,3.8281,2.8516,8.2467,8.2467,0,0,1-5.0781,1.7578A7.6213,7.6213,0,0,1,2,18.2891,11.4287,11.4287,0,0,0,8.2891,20.125,11.5385,11.5385,0,0,0,19.93,8.4844Z",
              }),
            }),
          },
          email: {
            viewBox: { width: 24, height: 24 },
            shape: (0, a.jsx)("g", {
              fill: "currentColor",
              children: (0, a.jsx)("path", {
                fillRule: "evenodd",
                d: "M1.0008,5.9416,12,11.8642,22.9992,5.9416A2,2,0,0,0,21,4H3A2,2,0,0,0,1.0008,5.9416ZM23,8.2127,12.9482,13.6252a2,2,0,0,1-1.8964,0L1,8.2127V18a2,2,0,0,0,2,2H21a2,2,0,0,0,2-2Z",
              }),
            }),
          },
          mapPin: {
            viewBox: { width: 40, height: 40 },
            shape: (0, a.jsx)("g", {
              fill: "currentColor",
              children: (0, a.jsx)("path", {
                fillRule: "evenodd",
                clipRule: "evenodd",
                d: "M20 36C23.1274 36 32 22.6274 32 16C32 9.37258 26.6274 4 20 4C13.3726 4 8 9.37258 8 16C8 22.6274 16.8726 36 20 36ZM20 20C22.2091 20 24 18.2091 24 16C24 13.7909 22.2091 12 20 12C17.7909 12 16 13.7909 16 16C16 18.2091 17.7909 20 20 20Z",
              }),
            }),
          },
          quotationMark: {
            viewBox: { width: 28, height: 24 },
            shape: (0, a.jsx)("g", {
              fill: "currentColor",
              children: (0, a.jsx)("path", {
                d: "M12.552 18.447c0-3.388-2.414-5.459-5.407-5.459-.966 0-1.642.283-1.931.47 0-4.234 2.703-8.47 7.338-9.317V0C6.855.753 0 5.553 0 16.188 0 21.365 3.09 24 6.566 24c3.475 0 5.986-2.541 5.986-5.553Zm15.448 0c0-3.388-2.414-5.459-5.407-5.459-.965 0-1.641.283-1.931.47 0-4.234 2.704-8.47 7.338-9.317V0c-5.697.753-12.552 5.553-12.552 16.188 0 5.177 3.09 7.812 6.566 7.812S28 21.459 28 18.447Z",
              }),
            }),
          },
        },
        m = {
          code: {
            viewBox: { width: 40, height: 40 },
            shape: (0, a.jsx)("g", {
              fill: "currentColor",
              children: (0, a.jsx)("path", {
                d: "M11.197,20.95a1.7474,1.7474,0,0,1,1.995,1.843v2.641c0,2.432,1.311,3.61,3.553,3.61h.437V27.353h-.418c-1.14,0-1.71-.513-1.71-1.824V22.375A2.3194,2.3194,0,0,0,13.116,20a2.2868,2.2868,0,0,0,1.938-2.356V14.49c0-1.311.57-1.843,1.71-1.843h.418V10.956h-.437c-2.242,0-3.553,1.178-3.553,3.61v2.66c0,1.33-.912,1.824-1.995,1.824Zm17.606-1.9c-1.083,0-1.995-.494-1.995-1.824v-2.66c0-2.432-1.311-3.61-3.553-3.61h-.437v1.691h.418c1.14,0,1.71.532,1.71,1.843v3.154A2.2868,2.2868,0,0,0,26.884,20a2.3194,2.3194,0,0,0-1.938,2.375v3.154c0,1.311-.57,1.824-1.71,1.824h-.418v1.691h.437c2.242,0,3.553-1.178,3.553-3.61V22.793a1.7474,1.7474,0,0,1,1.995-1.843Z",
              }),
            }),
          },
          events: {
            viewBox: { width: 40, height: 40 },
            shape: (0, a.jsx)("g", {
              fill: "currentColor",
              children: (0, a.jsx)("path", {
                d: "M30,12H24.75V9.5h-1.5V12h-6.5V9.5h-1.5V12H10a2,2,0,0,0-2,2V28a2,2,0,0,0,2,2H30a2,2,0,0,0,2-2V14A2,2,0,0,0,30,12ZM13.5,27A1.5,1.5,0,1,1,15,25.5,1.5,1.5,0,0,1,13.5,27Zm0-5A1.5,1.5,0,1,1,15,20.5,1.5,1.5,0,0,1,13.5,22ZM20,27a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,20,27Zm0-5a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,20,22Zm4-5.75H16v-1.5h8ZM26.5,27A1.5,1.5,0,1,1,28,25.5,1.5,1.5,0,0,1,26.5,27Zm0-5A1.5,1.5,0,1,1,28,20.5,1.5,1.5,0,0,1,26.5,22Z",
              }),
            }),
          },
          webinars: {
            viewBox: { width: 40, height: 40 },
            shape: (0, a.jsxs)("g", {
              fill: "currentColor",
              children: [
                (0, a.jsx)("rect", {
                  x: "19.5",
                  y: "15",
                  width: "8",
                  height: "6",
                  rx: "0.5",
                }),
                (0, a.jsx)("path", {
                  d: "M30,10H10a2,2,0,0,0-2,2V24a2,2,0,0,0,2,2h9.25v2.75H16v1.5h8v-1.5H20.75V26H30a2,2,0,0,0,2-2V12A2,2,0,0,0,30,10ZM14.5,22.25h-3v-1.5h3Zm0-3.5h-3v-1.5h3Zm0-3.5h-3v-1.5h3ZM29,20.5a2.0027,2.0027,0,0,1-2,2H20a2.0023,2.0023,0,0,1-2-2v-5a2.0023,2.0023,0,0,1,2-2h7a2.0027,2.0027,0,0,1,2,2Z",
                }),
              ],
            }),
          },
        },
        u = function (a, b) {
          return "__icon_".concat(b, "_").concat(a, "__");
        },
        v = { icon: l, navIcon: m },
        w = function () {
          var b = Object.entries(v).map(function (c) {
            var b = s(c, 2),
              e = b[0],
              d = b[1];
            return Object.entries(d).map(function (d) {
              var b = s(d, 2),
                c = b[0],
                f = b[1].shape;
              return (0, a.jsx)("g", { id: u(c, e), children: f }, c);
            });
          });
          return (0, a.jsx)("svg", {
            xmlns: "http://www.w3.org/2000/svg",
            style: { display: "none" },
            children: (0, a.jsx)("defs", { children: b }),
          });
        },
        c = function (b, c, d) {
          return function (e) {
            var g = e.type,
              f = e.alt,
              i = e.ariaId,
              l = e.className,
              m = e.style,
              n = v[b],
              j = n[g] || {
                viewBox: { width: c, height: d },
                shape: (0, a.jsx)("circle", {
                  cx: c / 2,
                  cy: d / 2,
                  r: Math.min(c, d) / 2,
                  fill: "currentColor",
                }),
              },
              h = u(g, b),
              k = i ? "".concat(i, "_").concat(h) : h,
              o = "0 0 ".concat(j.viewBox.width, " ").concat(j.viewBox.height),
              r = p()(q()[b], q()[g], l);
            return (0, a.jsx)("span", {
              className: r,
              style: m,
              children: (0, a.jsxs)("svg", {
                viewBox: o,
                role: "img",
                "aria-describedby": f ? k : null,
                "aria-hidden": !f,
                className: q().svg,
                xmlns: "http://www.w3.org/2000/svg",
                children: [
                  f && (0, a.jsx)("title", { id: k, children: f }),
                  (0, a.jsx)("use", { xlinkHref: "#".concat(h) }),
                ],
              }),
            });
          };
        },
        d = function (a) {
          var b = v[a];
          return {
            type: o().oneOf(Object.keys(b)),
            alt: o().string,
            ariaId: o().string,
            className: o().string,
            style: o().object,
          };
        },
        e = { alt: "" },
        f = c("icon", 24, 24);
      (f.propTypes = d("icon")), (f.defaultProps = e);
      var g = c("navIcon", 40, 40);
      (g.propTypes = d("navIcon")), (g.defaultProps = e);
    },
    4110: function (h, d, a) {
      "use strict";
      a.d(d, {
        Z: function () {
          return m;
        },
      });
      var i = a(5893),
        e = a(5697),
        b = a.n(e),
        f = a(4184),
        j = a.n(f),
        k = a(3697),
        g = a(1691),
        l = a.n(g),
        c = function (a) {
          var c = a.className,
            d = a.label,
            e = a.color,
            b = a.theme;
          return (0, i.jsx)(k.Z, {
            as: "div",
            theme: "pillTag".concat(b),
            className: j()(l().root, c, [l()[e]], [l()[b]]),
            children: d,
          });
        };
      (c.propTypes = {
        className: b().string,
        label: b().string,
        color: b().oneOf(["Yellow", "White", "PinkLight", "BlueLight"]),
        theme: b().oneOf(["", "Large"]),
      }),
        (c.defaultProps = { theme: "", color: "PinkLight" });
      var m = c;
    },
    3697: function (i, d, a) {
      "use strict";
      a.d(d, {
        Z: function () {
          return m;
        },
      });
      var e = a(7294),
        f = a(5697),
        b = a.n(f),
        g = a(4184),
        j = a.n(g),
        h = a(5452),
        k = a.n(h);
      function l(a, b, c) {
        return (
          b in a
            ? Object.defineProperty(a, b, {
                value: c,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (a[b] = c),
          a
        );
      }
      var c = e.forwardRef(function (a, d) {
        var c,
          f = a.as,
          b = a.theme,
          g = a.className,
          h = a.children,
          i = (function (a, d) {
            if (null == a) return {};
            var b,
              c,
              e = (function (c, f) {
                if (null == c) return {};
                var a,
                  b,
                  d = {},
                  e = Object.keys(c);
                for (b = 0; b < e.length; b++)
                  (a = e[b]), f.indexOf(a) >= 0 || (d[a] = c[a]);
                return d;
              })(a, d);
            if (Object.getOwnPropertySymbols) {
              var f = Object.getOwnPropertySymbols(a);
              for (c = 0; c < f.length; c++)
                (b = f[c]),
                  !(d.indexOf(b) >= 0) &&
                    Object.prototype.propertyIsEnumerable.call(a, b) &&
                    (e[b] = a[b]);
            }
            return e;
          })(a, ["as", "theme", "className", "children"]);
        return e.createElement(
          f,
          (function (d) {
            for (var a = 1; a < arguments.length; a++) {
              var c = null != arguments[a] ? arguments[a] : {},
                b = Object.keys(c);
              "function" == typeof Object.getOwnPropertySymbols &&
                (b = b.concat(
                  Object.getOwnPropertySymbols(c).filter(function (a) {
                    return Object.getOwnPropertyDescriptor(c, a).enumerable;
                  })
                )),
                b.forEach(function (a) {
                  l(d, a, c[a]);
                });
            }
            return d;
          })(
            {
              ref: d,
              className:
                (void 0 === b ||
                  ((c = b) && "undefined" != typeof Symbol && c.constructor),
                j()(k()[b], g)),
            },
            i
          ),
          h
        );
      });
      (c.propTypes = {
        as: b().string,
        theme: b().string,
        className: b().string,
        children: b().node,
      }),
        (c.defaultProps = { as: "p" });
      var m = c;
    },
    8470: function (c, a, b) {
      "use strict";
      b.d(a, {
        gN: function () {
          return e;
        },
      });
      var d = b(7294),
        e = "down";
      a.ZP = function () {
        var a =
            arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
          b = a.initialDirection,
          c = void 0 === b ? "up" : b,
          f = a.thresholdPixels,
          h = void 0 === f ? 64 : f,
          g = (0, d.useState)(c),
          i = g[0],
          j = g[1];
        return (
          (0, d.useEffect)(
            function () {
              var b = h || 0,
                c = window.pageYOffset,
                d = !1,
                f = function () {
                  var a = window.pageYOffset;
                  Math.abs(a - c) >= b &&
                    (j(a > c ? e : "up"), (c = a > 0 ? a : 0)),
                    (d = !1);
                },
                a = function () {
                  d || (window.requestAnimationFrame(f), (d = !0));
                };
              return (
                window.addEventListener("scroll", a),
                function () {
                  return window.removeEventListener("scroll", a);
                }
              );
            },
            [c, h]
          ),
          i
        );
      };
    },
    1551: function (d, a, b) {
      "use strict";
      function g(c, a) {
        (null == a || a > c.length) && (a = c.length);
        for (var b = 0, d = new Array(a); b < a; b++) d[b] = c[b];
        return d;
      }
      function h(a, b) {
        return (
          (function (a) {
            if (Array.isArray(a)) return a;
          })(a) ||
          (function (b, e) {
            var f,
              g,
              a =
                null == b
                  ? null
                  : ("undefined" != typeof Symbol && b[Symbol.iterator]) ||
                    b["@@iterator"];
            if (null != a) {
              var c = [],
                d = !0,
                h = !1;
              try {
                for (
                  a = a.call(b);
                  !(d = (f = a.next()).done) &&
                  (c.push(f.value), !e || c.length !== e);
                  d = !0
                );
              } catch (i) {
                (h = !0), (g = i);
              } finally {
                try {
                  d || null == a.return || a.return();
                } finally {
                  if (h) throw g;
                }
              }
              return c;
            }
          })(a, b) ||
          i(a, b) ||
          (function () {
            throw new TypeError(
              "Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
            );
          })()
        );
      }
      function i(a, c) {
        if (a) {
          if ("string" == typeof a) return g(a, c);
          var b = Object.prototype.toString.call(a).slice(8, -1);
          if (
            ("Object" === b && a.constructor && (b = a.constructor.name),
            "Map" === b || "Set" === b)
          )
            return Array.from(b);
          if (
            "Arguments" === b ||
            /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(b)
          )
            return g(a, c);
        }
      }
      Object.defineProperty(a, "__esModule", { value: !0 }),
        (a.default = void 0);
      var c,
        e = (c = b(7294)) && c.__esModule ? c : { default: c },
        j = b(1003),
        k = b(880),
        l = b(9246),
        m = {};
      function n(a, c, d, b) {
        if (a && j.isLocalURL(c)) {
          a.prefetch(c, d, b).catch(function (a) {});
          var e = b && void 0 !== b.locale ? b.locale : a && a.locale;
          m[c + "%" + d + (e ? "%" + e : "")] = !0;
        }
      }
      var f = e.default.forwardRef(function (a, u) {
        var d,
          c,
          r = a.legacyBehavior,
          f = void 0 === r ? !0 !== Boolean(!1) : r,
          v = a.href,
          w = a.as,
          x = a.children,
          y = a.prefetch,
          z = a.passHref,
          I = a.replace,
          J = a.shallow,
          K = a.scroll,
          i = a.locale,
          L = a.onClick,
          M = a.onMouseEnter,
          A = (function (a, d) {
            if (null == a) return {};
            var b,
              c,
              e = (function (c, f) {
                if (null == c) return {};
                var a,
                  b,
                  d = {},
                  e = Object.keys(c);
                for (b = 0; b < e.length; b++)
                  (a = e[b]), f.indexOf(a) >= 0 || (d[a] = c[a]);
                return d;
              })(a, d);
            if (Object.getOwnPropertySymbols) {
              var f = Object.getOwnPropertySymbols(a);
              for (c = 0; c < f.length; c++)
                (b = f[c]),
                  !(d.indexOf(b) >= 0) &&
                    Object.prototype.propertyIsEnumerable.call(a, b) &&
                    (e[b] = a[b]);
            }
            return e;
          })(a, [
            "href",
            "as",
            "children",
            "prefetch",
            "passHref",
            "replace",
            "shallow",
            "scroll",
            "locale",
            "onClick",
            "onMouseEnter",
          ]);
        (d = x),
          f &&
            "string" == typeof d &&
            (d = e.default.createElement("a", null, d));
        var B = !1 !== y,
          b = k.useRouter(),
          s = e.default.useMemo(
            function () {
              var a = h(j.resolveHref(b, v, !0), 2),
                c = a[0],
                d = a[1];
              return { href: c, as: w ? j.resolveHref(b, w) : d || c };
            },
            [b, v, w]
          ),
          o = s.href,
          g = s.as,
          N = e.default.useRef(o),
          O = e.default.useRef(g);
        f && (c = e.default.Children.only(d));
        var C = f ? c && "object" == typeof c && c.ref : u,
          p = h(l.useIntersection({ rootMargin: "200px" }), 3),
          D = p[0],
          E = p[1],
          F = p[2],
          G = e.default.useCallback(
            function (a) {
              (O.current !== g || N.current !== o) &&
                (F(), (O.current = g), (N.current = o)),
                D(a),
                C &&
                  ("function" == typeof C
                    ? C(a)
                    : "object" == typeof C && (C.current = a));
            },
            [g, C, o, F, D]
          );
        e.default.useEffect(
          function () {
            var c = E && B && j.isLocalURL(o),
              a = void 0 !== i ? i : b && b.locale,
              d = m[o + "%" + g + (a ? "%" + a : "")];
            c && !d && n(b, o, g, { locale: a });
          },
          [g, o, E, i, B, b]
        );
        var q = {
          ref: G,
          onClick: function (d) {
            var e, k, h, l, m, n, p, q, a, r;
            f || "function" != typeof L || L(d),
              f &&
                c.props &&
                "function" == typeof c.props.onClick &&
                c.props.onClick(d),
              d.defaultPrevented ||
                ((e = d),
                (k = b),
                (h = o),
                (l = g),
                (m = I),
                (n = J),
                (p = K),
                (q = i),
                ("A" === e.currentTarget.nodeName.toUpperCase() &&
                  (((r = (a = e).currentTarget.target) && "_self" !== r) ||
                    a.metaKey ||
                    a.ctrlKey ||
                    a.shiftKey ||
                    a.altKey ||
                    (a.nativeEvent && 2 === a.nativeEvent.which) ||
                    !j.isLocalURL(h))) ||
                  (e.preventDefault(),
                  k[m ? "replace" : "push"](h, l, {
                    shallow: n,
                    locale: q,
                    scroll: p,
                  })));
          },
          onMouseEnter: function (a) {
            f || "function" != typeof M || M(a),
              f &&
                c.props &&
                "function" == typeof c.props.onMouseEnter &&
                c.props.onMouseEnter(a),
              j.isLocalURL(o) && n(b, o, g, { priority: !0 });
          },
        };
        if (!f || z || ("a" === c.type && !("href" in c.props))) {
          var t = void 0 !== i ? i : b && b.locale,
            H =
              b &&
              b.isLocaleDomain &&
              j.getDomainLocale(g, t, b && b.locales, b && b.domainLocales);
          q.href = H || j.addBasePath(j.addLocale(g, t, b && b.defaultLocale));
        }
        return f
          ? e.default.cloneElement(c, q)
          : e.default.createElement("a", Object.assign({}, A, q), d);
      });
      (a.default = f),
        ("function" == typeof a.default ||
          ("object" == typeof a.default && null !== a.default)) &&
          (Object.assign(a.default, a), (d.exports = a.default));
    },
    9246: function (c, a, b) {
      "use strict";
      function d(c, a) {
        (null == a || a > c.length) && (a = c.length);
        for (var b = 0, d = new Array(a); b < a; b++) d[b] = c[b];
        return d;
      }
      function e(a, b) {
        return (
          (function (a) {
            if (Array.isArray(a)) return a;
          })(a) ||
          (function (b, e) {
            var f,
              g,
              a =
                null == b
                  ? null
                  : ("undefined" != typeof Symbol && b[Symbol.iterator]) ||
                    b["@@iterator"];
            if (null != a) {
              var c = [],
                d = !0,
                h = !1;
              try {
                for (
                  a = a.call(b);
                  !(d = (f = a.next()).done) &&
                  (c.push(f.value), !e || c.length !== e);
                  d = !0
                );
              } catch (i) {
                (h = !0), (g = i);
              } finally {
                try {
                  d || null == a.return || a.return();
                } finally {
                  if (h) throw g;
                }
              }
              return c;
            }
          })(a, b) ||
          f(a, b) ||
          (function () {
            throw new TypeError(
              "Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
            );
          })()
        );
      }
      function f(a, c) {
        if (a) {
          if ("string" == typeof a) return d(a, c);
          var b = Object.prototype.toString.call(a).slice(8, -1);
          if (
            ("Object" === b && a.constructor && (b = a.constructor.name),
            "Map" === b || "Set" === b)
          )
            return Array.from(b);
          if (
            "Arguments" === b ||
            /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(b)
          )
            return d(a, c);
        }
      }
      Object.defineProperty(a, "__esModule", { value: !0 }),
        (a.useIntersection = function (a) {
          var b = a.rootRef,
            k = a.rootMargin,
            l = a.disabled || !i,
            p = g.useRef(),
            d = e(g.useState(!1), 2),
            c = d[0],
            q = d[1],
            f = e(g.useState(b ? b.current : null), 2),
            m = f[0],
            r = f[1],
            n = g.useCallback(
              function (a) {
                p.current && (p.current(), (p.current = void 0)),
                  !l &&
                    !c &&
                    a &&
                    a.tagName &&
                    (p.current = j(
                      a,
                      function (a) {
                        return a && q(a);
                      },
                      { root: m, rootMargin: k }
                    ));
              },
              [l, m, k, c]
            ),
            o = g.useCallback(function () {
              q(!1);
            }, []);
          return (
            g.useEffect(
              function () {
                if (!i && !c) {
                  var a = h.requestIdleCallback(function () {
                    return q(!0);
                  });
                  return function () {
                    return h.cancelIdleCallback(a);
                  };
                }
              },
              [c]
            ),
            g.useEffect(
              function () {
                b && r(b.current);
              },
              [b]
            ),
            [n, c, o]
          );
        });
      var g = b(7294),
        h = b(4686),
        i = "undefined" != typeof IntersectionObserver;
      function j(b, c, d) {
        var a = m(d),
          g = a.id,
          e = a.observer,
          f = a.elements;
        return (
          f.set(b, c),
          e.observe(b),
          function () {
            if ((f.delete(b), e.unobserve(b), 0 === f.size)) {
              e.disconnect(), k.delete(g);
              var a = l.findIndex(function (a) {
                return a.root === g.root && a.margin === g.margin;
              });
              a > -1 && l.splice(a, 1);
            }
          }
        );
      }
      var k = new Map(),
        l = [];
      function m(c) {
        var a,
          b = { root: c.root || null, margin: c.rootMargin || "" },
          d = l.find(function (a) {
            return a.root === b.root && a.margin === b.margin;
          });
        if ((d ? (a = k.get(d)) : ((a = k.get(b)), l.push(b)), a)) return a;
        var e = new Map(),
          f = new IntersectionObserver(function (a) {
            a.forEach(function (a) {
              var b = e.get(a.target),
                c = a.isIntersecting || a.intersectionRatio > 0;
              b && c && b(c);
            });
          }, c);
        return k.set(b, (a = { id: b, observer: f, elements: e })), a;
      }
      ("function" == typeof a.default ||
        ("object" == typeof a.default && null !== a.default)) &&
        (Object.assign(a.default, a), (c.exports = a.default));
    },
    3828: function (z, e, a) {
      "use strict";
      a.r(e),
        a.d(e, {
          default: function () {
            return aN;
          },
        });
      var A = a(5893),
        k = a(7294);
      a(716), a(7116), a(553), a(7091), a(584), a(330), a(7541);
      var B = a(1163),
        C = function () {
          var a = (0, B.useRouter)();
          return (
            (0, k.useEffect)(
              function () {
                var c = document.documentElement,
                  a = function () {
                    c.style.setProperty("--winheight", window.innerHeight);
                  };
                window.addEventListener("resize", a), a();
                var b = new ResizeObserver(function () {
                  var a = document.body.getBoundingClientRect();
                  c.style.setProperty("--doctop", a.top);
                });
                return (
                  b.observe(document.body),
                  function () {
                    window.removeEventListener("resize", a), b.disconnect();
                  }
                );
              },
              [a.asPath]
            ),
            null
          );
        },
        D = a(3034),
        l = a(9008),
        E = a.n(l),
        m = a(4298),
        F = a.n(m);
      function G(a, b, c) {
        return (
          b in a
            ? Object.defineProperty(a, b, {
                value: c,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (a[b] = c),
          a
        );
      }
      var H = function (a) {
          var b =
            arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
          window.dataLayer &&
            window.dataLayer.push(
              (function (d) {
                for (var a = 1; a < arguments.length; a++) {
                  var c = null != arguments[a] ? arguments[a] : {},
                    b = Object.keys(c);
                  "function" == typeof Object.getOwnPropertySymbols &&
                    (b = b.concat(
                      Object.getOwnPropertySymbols(c).filter(function (a) {
                        return Object.getOwnPropertyDescriptor(c, a).enumerable;
                      })
                    )),
                    b.forEach(function (a) {
                      G(d, a, c[a]);
                    });
                }
                return d;
              })({ event: a }, b)
            );
        },
        I = function (a, b) {
          H("pageview", { page: { path: a, title: b } });
        },
        J =
          "\n    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':\n    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],\n    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=\n    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);\n    })(window,document,'script','dataLayer','".concat(
            "GTM-NL4KXHD",
            "');\n"
          ),
        K = function () {
          var a = (0, B.useRouter)();
          return (
            (0, k.useEffect)(
              function () {
                var b = function (a) {
                  I(a, document.title);
                };
                return (
                  a.events.on("routeChangeComplete", b),
                  function () {
                    a.events.off("routeChangeComplete", b);
                  }
                );
              },
              [a.events]
            ),
            (0, A.jsx)(F(), {
              id: "google-tag-manager",
              strategy: "afterInteractive",
              children: J,
            })
          );
        },
        n = a(2594),
        L = a.n(n);
      function M(a, b, c) {
        return (
          b in a
            ? Object.defineProperty(a, b, {
                value: c,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (a[b] = c),
          a
        );
      }
      var N = function () {
          var a = "iviyvyfhm9ww",
            b = (0, D.oR)(function (a) {
              return (function (d) {
                for (var a = 1; a < arguments.length; a++) {
                  var c = null != arguments[a] ? arguments[a] : {},
                    b = Object.keys(c);
                  "function" == typeof Object.getOwnPropertySymbols &&
                    (b = b.concat(
                      Object.getOwnPropertySymbols(c).filter(function (a) {
                        return Object.getOwnPropertyDescriptor(c, a).enumerable;
                      })
                    )),
                    b.forEach(function (a) {
                      M(d, a, c[a]);
                    });
                }
                return d;
              })({}, a.oneTrustState);
            }).alertBox;
          return a && "closed" === b ? (0, A.jsx)(L(), { appId: a }) : null;
        },
        O = a(3454),
        P = function () {
          var a = O.env.ONE_TRUST_ID,
            b = (0, D.oR)(function (a) {
              return { setOneTrustState: a.setOneTrustState };
            }).setOneTrustState;
          return ((0, k.useEffect)(
            function () {
              var c,
                d = Date.now(),
                e = function () {
                  b(
                    window.OneTrust.IsAlertBoxClosed() ? "closed" : "open",
                    window.OnetrustActiveGroups.split(",").filter(function (a) {
                      return !!a;
                    })
                  );
                },
                a = function () {
                  void 0 === window.OneTrust
                    ? Date.now() - d < 1e4 && (c = requestAnimationFrame(a))
                    : ((c = void 0),
                      e(),
                      window.OneTrust.OnConsentChanged(function () {
                        return e();
                      }));
                };
              return (
                a(),
                function () {
                  cancelAnimationFrame(c);
                }
              );
            },
            [b]
          ),
          a)
            ? (0, A.jsxs)(A.Fragment, {
                children: [
                  (0, A.jsx)(F(), {
                    strategy: "beforeInteractive",
                    src: "https://cdn.cookielaw.org/consent/".concat(
                      a,
                      "/OtAutoBlock.js"
                    ),
                  }),
                  (0, A.jsx)(F(), {
                    strategy: "beforeInteractive",
                    src: "https://cdn.cookielaw.org/scripttemplates/otSDKStub.js",
                    type: "text/javascript",
                    charSet: "UTF-8",
                    "data-domain-script": a,
                  }),
                  (0, A.jsx)(F(), {
                    id: "oneTrust",
                    strategy: "beforeInteractive",
                    children: "function OptanonWrapper() { }",
                  }),
                ],
              })
            : null;
        },
        o = a(5697),
        b = a.n(o),
        p = a(4184),
        Q = a.n(p),
        q = a(1664),
        R = a.n(q),
        r = a(4933),
        S = a.n(r),
        c = function (a) {
          var c = a.className,
            d = a.registered,
            e = a.alt,
            b = a.ariaId;
          return (0, A.jsxs)("svg", {
            viewBox: "0 0 109 33",
            role: "img",
            "aria-describedby": b,
            xmlns: "http://www.w3.org/2000/svg",
            className: Q()(S().root, c),
            children: [
              (0, A.jsx)("title", { id: b, children: e }),
              (0, A.jsxs)("g", {
                fill: "currentColor",
                children: [
                  (0, A.jsx)("path", {
                    d: "M95.075 26.277H100l-6.575-9.974L100 6.33h-4.938l-4.106 6.225-4.107-6.225h-4.938l6.576 9.973-6.576 9.974h4.938l4.107-6.239 4.119 6.239ZM79.719 6.342h-4.12v19.922h4.12V6.342ZM52.27 6.342h-4.119v19.947h4.12V6.342ZM63.885 10.467a4.284 4.284 0 0 1 4.283 4.276v11.559H72.3V14.743c0-4.64-3.779-8.401-8.415-8.401-4.648 0-8.414 3.773-8.414 8.401v11.559h4.132V14.743a4.284 4.284 0 0 1 4.282-4.276ZM44.902 14.73H36.31v-.616a3.658 3.658 0 0 1 3.665-3.66h4.913V6.342h-4.913c-4.308 0-7.785 3.484-7.785 7.772v12.162h4.12v-7.433h8.59v-4.112ZM18.575 5.449l-6.677 6.666a3.204 3.204 0 0 1-4.522 0 3.192 3.192 0 0 1 0-4.515L14.052.934a3.204 3.204 0 0 1 4.523 0c1.247 1.232 1.247 3.27 0 4.515ZM18.512 18.617l-6.488 6.477a3.204 3.204 0 0 1-4.522 0 3.192 3.192 0 0 1 0-4.515l6.487-6.477a3.204 3.204 0 0 1 4.523 0 3.192 3.192 0 0 1 0 4.515ZM5.46 18.526c1.259-1.258 1.27-3.284.026-4.527-1.244-1.243-3.274-1.23-4.534.027-1.259 1.257-1.27 3.284-.026 4.526 1.244 1.243 3.274 1.231 4.533-.026ZM18.608 31.66c1.26-1.257 1.272-3.283.027-4.526-1.245-1.243-3.274-1.23-4.534.027-1.259 1.257-1.27 3.284-.026 4.526 1.244 1.243 3.274 1.23 4.533-.026Z",
                  }),
                  d &&
                    (0, A.jsxs)("g", {
                      children: [
                        (0, A.jsx)("path", {
                          fillRule: "evenodd",
                          clipRule: "evenodd",
                          d: "M103.652 3.642h-.383v1.359h-.579V1.464h1.202c.686 0 1.185.476 1.185 1.085 0 .503-.33.908-.811 1.04l.829 1.412h-.668l-.775-1.359Zm-.383-1.675V3.14h.543c.428 0 .677-.22.677-.582 0-.37-.249-.591-.677-.591h-.543Z",
                        }),
                        (0, A.jsx)("path", {
                          fillRule: "evenodd",
                          clipRule: "evenodd",
                          d: "M103.75 0A3.248 3.248 0 0 1 107 3.254a3.24 3.24 0 0 1-3.25 3.246 3.24 3.24 0 0 1-3.25-3.246A3.248 3.248 0 0 1 103.75 0Zm0 5.97c1.505 0 2.662-1.225 2.662-2.716 0-1.49-1.157-2.725-2.662-2.725s-2.662 1.235-2.662 2.725 1.157 2.717 2.662 2.717Z",
                        }),
                      ],
                    }),
                ],
              }),
            ],
          });
        };
      (c.propTypes = {
        className: b().string,
        trademark: b().bool,
        registered: b().bool,
        alt: b().string,
        ariaId: b().string,
      }),
        (c.defaultProps = {
          trademark: !1,
          registered: !1,
          alt: "Finix Homepage",
          ariaId: "finix-logo-title",
        });
      var T = c,
        U = a(7768),
        V = a(3697),
        W = a(2167),
        X = a(558),
        Y = a(3047),
        Z = a(4110),
        s = a(6674),
        $ = a.n(s);
      function _(c, a) {
        (null == a || a > c.length) && (a = c.length);
        for (var b = 0, d = new Array(a); b < a; b++) d[b] = c[b];
        return d;
      }
      function aa(a, b, c) {
        return (
          b in a
            ? Object.defineProperty(a, b, {
                value: c,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (a[b] = c),
          a
        );
      }
      function ab(d) {
        for (var a = 1; a < arguments.length; a++) {
          var c = null != arguments[a] ? arguments[a] : {},
            b = Object.keys(c);
          "function" == typeof Object.getOwnPropertySymbols &&
            (b = b.concat(
              Object.getOwnPropertySymbols(c).filter(function (a) {
                return Object.getOwnPropertyDescriptor(c, a).enumerable;
              })
            )),
            b.forEach(function (a) {
              aa(d, a, c[a]);
            });
        }
        return d;
      }
      var f = function (c) {
        var a,
          b,
          h = c.title,
          i = c.links,
          d = (0, k.useRef)(null),
          e =
            ((a = (0, Y.Z)()),
            (b = 2),
            (function (a) {
              if (Array.isArray(a)) return a;
            })(a) ||
              (function (b, e) {
                var f,
                  g,
                  a =
                    null == b
                      ? null
                      : ("undefined" != typeof Symbol && b[Symbol.iterator]) ||
                        b["@@iterator"];
                if (null != a) {
                  var c = [],
                    d = !0,
                    h = !1;
                  try {
                    for (
                      a = a.call(b);
                      !(d = (f = a.next()).done) &&
                      (c.push(f.value), !e || c.length !== e);
                      d = !0
                    );
                  } catch (i) {
                    (h = !0), (g = i);
                  } finally {
                    try {
                      d || null == a.return || a.return();
                    } finally {
                      if (h) throw g;
                    }
                  }
                  return c;
                }
              })(a, b) ||
              (function (a, c) {
                if (a) {
                  if ("string" == typeof a) return _(a, c);
                  var b = Object.prototype.toString.call(a).slice(8, -1);
                  if (
                    ("Object" === b &&
                      a.constructor &&
                      (b = a.constructor.name),
                    "Map" === b || "Set" === b)
                  )
                    return Array.from(b);
                  if (
                    "Arguments" === b ||
                    /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(b)
                  )
                    return _(a, c);
                }
              })(a, b) ||
              (function () {
                throw new TypeError(
                  "Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
                );
              })()),
          j = e[0],
          l = e[1].height,
          f = (0, k.useState)(!1),
          g = f[0],
          o = f[1],
          m = (0, k.useCallback)(function () {
            o(!0);
          }, []),
          n = (0, k.useCallback)(function () {
            o(!1);
          }, []);
        return (
          (0, k.useEffect)(
            function () {
              var a = d.current;
              return (
                a &&
                  (a.addEventListener("focusin", m),
                  a.addEventListener("focusout", n)),
                function () {
                  a &&
                    (a.removeEventListener("focusin", m),
                    a.removeEventListener("focusout", n));
                }
              );
            },
            [d, m, n]
          ),
          (0, A.jsxs)("section", {
            ref: d,
            className: $().root,
            children: [
              (0, A.jsxs)(V.Z, {
                className: $().title,
                as: "h1",
                theme: "footerNavTitle",
                onClick: function () {
                  o(!g);
                },
                children: [
                  h,
                  (0, A.jsxs)("div", {
                    className: Q()($().icon, aa({}, $().isOpen, g)),
                    children: [(0, A.jsx)("span", {}), (0, A.jsx)("span", {})],
                  }),
                ],
              }),
              (0, A.jsx)("nav", {
                className: Q()($().nav, aa({}, $().isOpen, g)),
                style: { "--panel-height": "".concat(l, "px") },
                children: (0, A.jsx)("ul", {
                  ref: j,
                  children: i.map(function (a, b) {
                    return (0,
                    A.jsx)(ac, ab({}, a), "".concat(h, "-").concat(b));
                  }),
                }),
              }),
            ],
          })
        );
      };
      f.propTypes = { title: b().string, items: b().array };
      var ac = function (a) {
          var c = a.label,
            d = a.url,
            e = a.hint,
            f = a.hintColor,
            b = (0, X.gO)(d),
            g = b.href,
            h = (function (a, d) {
              if (null == a) return {};
              var b,
                c,
                e = (function (c, f) {
                  if (null == c) return {};
                  var a,
                    b,
                    d = {},
                    e = Object.keys(c);
                  for (b = 0; b < e.length; b++)
                    (a = e[b]), f.indexOf(a) >= 0 || (d[a] = c[a]);
                  return d;
                })(a, d);
              if (Object.getOwnPropertySymbols) {
                var f = Object.getOwnPropertySymbols(a);
                for (c = 0; c < f.length; c++)
                  (b = f[c]),
                    !(d.indexOf(b) >= 0) &&
                      Object.prototype.propertyIsEnumerable.call(a, b) &&
                      (e[b] = a[b]);
              }
              return e;
            })(b, ["href"]);
          return (0, A.jsx)("li", {
            children: (0, A.jsx)(R(), {
              href: g,
              children: (0, A.jsxs)(
                "a",
                ab({}, h, {
                  children: [
                    c,
                    (0, A.jsx)(Z.Z, {
                      className: $().hint,
                      label: e,
                      color: f,
                    }),
                  ],
                })
              ),
            }),
          });
        },
        ad = f,
        t = a(6675),
        ae = a.n(t),
        u = a(4533),
        af = a.n(u);
      function ag(a, b, c) {
        return (
          b in a
            ? Object.defineProperty(a, b, {
                value: c,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (a[b] = c),
          a
        );
      }
      function ah(d) {
        for (var a = 1; a < arguments.length; a++) {
          var c = null != arguments[a] ? arguments[a] : {},
            b = Object.keys(c);
          "function" == typeof Object.getOwnPropertySymbols &&
            (b = b.concat(
              Object.getOwnPropertySymbols(c).filter(function (a) {
                return Object.getOwnPropertyDescriptor(c, a).enumerable;
              })
            )),
            b.forEach(function (a) {
              ag(d, a, c[a]);
            });
        }
        return d;
      }
      function ai(a, d) {
        if (null == a) return {};
        var b,
          c,
          e = aj(a, d);
        if (Object.getOwnPropertySymbols) {
          var f = Object.getOwnPropertySymbols(a);
          for (c = 0; c < f.length; c++)
            (b = f[c]),
              !(d.indexOf(b) >= 0) &&
                Object.prototype.propertyIsEnumerable.call(a, b) &&
                (e[b] = a[b]);
        }
        return e;
      }
      function aj(c, f) {
        if (null == c) return {};
        var a,
          b,
          d = {},
          e = Object.keys(c);
        for (b = 0; b < e.length; b++)
          (a = e[b]), f.indexOf(a) >= 0 || (d[a] = c[a]);
        return d;
      }
      var g = function (a) {
        var b = a.sections,
          c = a.legalLinks,
          d = a.socialLinks,
          e = a.copyright,
          f = a.signupForm;
        return (0, A.jsxs)("footer", {
          className: ae().root,
          children: [
            (0, A.jsxs)("div", {
              className: Q()(af().container, ae().upper),
              children: [
                (0, A.jsxs)("div", {
                  className: ae().colWrapper,
                  children: [
                    (0, A.jsx)("div", {
                      className: ae().logo,
                      children: (0, A.jsx)(R(), {
                        href: "/",
                        children: (0, A.jsx)("a", {
                          children: (0, A.jsx)(T, {
                            registered: !0,
                            ariaId: "finix-logo-footer",
                          }),
                        }),
                      }),
                    }),
                    (0, A.jsxs)("div", {
                      className: ae().newsletter,
                      children: [
                        (0, A.jsx)(V.Z, {
                          className: ae().newsletterTitle,
                          children: "Sign up for the Finix Newsletter",
                        }),
                        (0, A.jsx)("div", {
                          className: ae().newsletterForm,
                          children: (0, A.jsx)(U.Z, ah({}, f)),
                        }),
                      ],
                    }),
                  ],
                }),
                b.map(function (a, b) {
                  return (0, A.jsx)(ad, ah({}, a), b);
                }),
              ],
            }),
            (0, A.jsxs)("div", {
              className: ae().lower,
              children: [
                (0, A.jsx)("ul", {
                  children: c.map(function (a, c) {
                    var d = a.url,
                      e = a.label,
                      b = (0, X.gO)(d),
                      f = b.href,
                      g = ai(b, ["href"]);
                    return (0,
                    A.jsx)("li", { children: (0, A.jsx)(R(), { href: f, children: (0, A.jsx)("a", ah({}, g, { children: e })) }) }, c);
                  }),
                }),
                (0, A.jsx)("div", {
                  className: ae().social,
                  children: d.map(function (a, d) {
                    var b = a.label,
                      e = a.url,
                      c = (0, X.gO)(e),
                      f = c.href,
                      g = ai(c, ["href"]);
                    return (0,
                    A.jsx)(R(), { href: f, children: (0, A.jsx)("a", ah({}, g, { children: (0, A.jsx)(W.JO, { alt: b, ariaId: "footer", className: ae().icon, type: b.toLowerCase() }) })) }, d);
                  }),
                }),
                (0, A.jsx)(V.Z, {
                  as: "div",
                  className: ae().copyright,
                  children: e,
                }),
              ],
            }),
          ],
        });
      };
      g.propTypes = {
        sections: b().array,
        legalLinks: b().array,
        socialLinks: b().array,
        copyright: b().string,
        signupForm: b().object,
      };
      var ak = g,
        al = a(8509),
        am = a(8470),
        an = a(3375),
        ao = a(4829),
        v = a(4267),
        ap = a.n(v);
      function aq(c, a) {
        (null == a || a > c.length) && (a = c.length);
        for (var b = 0, d = new Array(a); b < a; b++) d[b] = c[b];
        return d;
      }
      function ar(a, b, c) {
        return (
          b in a
            ? Object.defineProperty(a, b, {
                value: c,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (a[b] = c),
          a
        );
      }
      function as(d) {
        for (var a = 1; a < arguments.length; a++) {
          var c = null != arguments[a] ? arguments[a] : {},
            b = Object.keys(c);
          "function" == typeof Object.getOwnPropertySymbols &&
            (b = b.concat(
              Object.getOwnPropertySymbols(c).filter(function (a) {
                return Object.getOwnPropertyDescriptor(c, a).enumerable;
              })
            )),
            b.forEach(function (a) {
              ar(d, a, c[a]);
            });
        }
        return d;
      }
      function at(a, d) {
        if (null == a) return {};
        var b,
          c,
          e = au(a, d);
        if (Object.getOwnPropertySymbols) {
          var f = Object.getOwnPropertySymbols(a);
          for (c = 0; c < f.length; c++)
            (b = f[c]),
              !(d.indexOf(b) >= 0) &&
                Object.prototype.propertyIsEnumerable.call(a, b) &&
                (e[b] = a[b]);
        }
        return e;
      }
      function au(c, f) {
        if (null == c) return {};
        var a,
          b,
          d = {},
          e = Object.keys(c);
        for (b = 0; b < e.length; b++)
          (a = e[b]), f.indexOf(a) >= 0 || (d[a] = c[a]);
        return d;
      }
      var d = function (a) {
        var b,
          d,
          n = a.label,
          o = a.url,
          p = a.primaryNavItems,
          q = a.primaryNavLabel,
          r = a.secondaryNavItems,
          s = a.secondaryNavLabel,
          e = a.primaryNavAdditionalLink,
          g = a.setIsPanelOpen,
          t = a.setPanelHeight,
          u = a.as,
          v = a.className,
          w = a.anchorClassName,
          x = (0, k.useRef)(null),
          h = (0, k.useState)(!1),
          f = h[0],
          H = h[1],
          i = (0, k.useState)(!1),
          y = i[0],
          I = i[1],
          j =
            ((b = (0, Y.Z)()),
            (d = 2),
            (function (a) {
              if (Array.isArray(a)) return a;
            })(b) ||
              (function (b, e) {
                var f,
                  g,
                  a =
                    null == b
                      ? null
                      : ("undefined" != typeof Symbol && b[Symbol.iterator]) ||
                        b["@@iterator"];
                if (null != a) {
                  var c = [],
                    d = !0,
                    h = !1;
                  try {
                    for (
                      a = a.call(b);
                      !(d = (f = a.next()).done) &&
                      (c.push(f.value), !e || c.length !== e);
                      d = !0
                    );
                  } catch (i) {
                    (h = !0), (g = i);
                  } finally {
                    try {
                      d || null == a.return || a.return();
                    } finally {
                      if (h) throw g;
                    }
                  }
                  return c;
                }
              })(b, d) ||
              (function (a, c) {
                if (a) {
                  if ("string" == typeof a) return aq(a, c);
                  var b = Object.prototype.toString.call(a).slice(8, -1);
                  if (
                    ("Object" === b &&
                      a.constructor &&
                      (b = a.constructor.name),
                    "Map" === b || "Set" === b)
                  )
                    return Array.from(b);
                  if (
                    "Arguments" === b ||
                    /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(b)
                  )
                    return aq(a, c);
                }
              })(b, d) ||
              (function () {
                throw new TypeError(
                  "Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
                );
              })()),
          z = j[0],
          l = j[1].height,
          c = (0, ao.Z)("(hover:hover)", !1),
          C = (0, B.useRouter)(),
          D = (0, k.useCallback)(
            function (a) {
              window.innerWidth < 1024 && a.preventDefault(), c || y || H(!f);
            },
            [c, y, f]
          );
        (0, k.useEffect)(
          function () {
            var a = x.current,
              b = function () {
                I(!0),
                  H(!0),
                  g(!0),
                  t(l),
                  setTimeout(function () {
                    I(!1);
                  }, 200);
              },
              d = function () {
                H(!1), g(!1), t(188);
              },
              e = function () {
                document.activeElement.blur();
              };
            return (
              a &&
                (a.addEventListener("focusin", b),
                a.addEventListener("focusout", d),
                c &&
                  (a.addEventListener("mouseenter", b),
                  a.addEventListener("mouseleave", d))),
              C.events.on("routeChangeStart", e),
              function () {
                a &&
                  (a.removeEventListener("mouseenter", b),
                  a.removeEventListener("mouseleave", d),
                  a.removeEventListener("focusin", b),
                  a.removeEventListener("focusout", d)),
                  C.events.off("routeChangeStart", e);
              }
            );
          },
          [C.events, c, l, g, t]
        );
        var E = (0, k.useCallback)(
          function () {
            f && c && (H(!1), g(!1));
          },
          [c, f, g]
        );
        (0, k.useEffect)(
          function () {
            return (
              window.addEventListener("scroll", E),
              function () {
                return window.removeEventListener("scroll", E);
              }
            );
          },
          [E]
        );
        var m = (0, X.gO)(o),
          F = m.href,
          G = at(m, ["href"]);
        return (0, A.jsxs)(u, {
          ref: x,
          className: Q()(ap().root, v, ar({}, ap().open, f)),
          children: [
            (0, A.jsx)(R(), {
              href: F,
              passHref: !0,
              children: (0, A.jsxs)(
                V.Z,
                as(
                  {
                    as: "a",
                    theme: "headerMainNavItem",
                    className: Q()(ap().title, w),
                    onClick: D,
                    tabIndex: c ? 0 : -1,
                  },
                  G,
                  {
                    children: [
                      n,
                      (0, A.jsxs)("div", {
                        className: ap().icon,
                        children: [
                          (0, A.jsx)("span", {}),
                          (0, A.jsx)("span", {}),
                        ],
                      }),
                    ],
                  }
                )
              ),
            }),
            (0, A.jsx)("div", {
              className: ap().nav,
              style: { "--panel-height": "".concat(l, "px") },
              children: (0, A.jsxs)("div", {
                ref: z,
                className: Q()(af().container, ap().navWrapper),
                children: [
                  (0, A.jsxs)("div", {
                    className: ap().primaryNav,
                    children: [
                      (0, A.jsx)(Z.Z, {
                        className: ap().label,
                        label: q,
                        color: "PinkLight",
                        theme: "Large",
                      }),
                      e &&
                        (0, A.jsx)(R(), {
                          href: e.url,
                          passHref: !0,
                          children: (0, A.jsx)(V.Z, {
                            className: ap().additionalLink,
                            theme: "buttonLabel",
                            as: "a",
                            children: e.label,
                          }),
                        }),
                      (0, A.jsx)("ul", {
                        children: p.map(function (a, b) {
                          return (0, A.jsx)(av, as({}, a), b);
                        }),
                      }),
                    ],
                  }),
                  (0, A.jsxs)("div", {
                    className: ap().secondaryNav,
                    children: [
                      (0, A.jsx)(Z.Z, {
                        className: ap().label,
                        label: s,
                        color: "PinkLight",
                        theme: "Large",
                      }),
                      (0, A.jsx)("ul", {
                        children: r.map(function (a, b) {
                          return (0, A.jsx)(aw, as({}, a), b);
                        }),
                      }),
                    ],
                  }),
                ],
              }),
            }),
          ],
        });
      };
      (d.propTypes = {
        label: b().string,
        primaryNavItems: b().array,
        primaryNavLabel: b().string,
        secondaryNavItems: b().array,
        secondaryNavLabel: b().string,
        primaryNavAdditionalLink: b().object,
        setIsPanelOpen: b().func.isRequired,
        setPanelHeight: b().func.isRequired,
        as: b().string,
        className: b().string,
        anchorClassName: b().string,
      }),
        (d.defaultProps = { as: "div" });
      var av = function (a) {
          var c = a.label,
            d = a.url,
            e = a.icon,
            f = a.description,
            b = (0, X.gO)(d),
            g = b.href,
            h = at(b, ["href"]);
          return (0, A.jsx)("li", {
            className: Q()(ap().primaryItem, ap().panelNavItem),
            children: (0, A.jsx)(R(), {
              href: g,
              children: (0, A.jsxs)(
                "a",
                as({}, h, {
                  className: ap().panelNavItemAnchor,
                  children: [
                    (0, A.jsx)("img", {
                      className: ap().panelNavItemIcon,
                      src: e.url,
                      alt: "",
                    }),
                    (0, A.jsxs)("div", {
                      className: ap().textWrapper,
                      children: [
                        (0, A.jsx)(V.Z, {
                          theme: "headerPrimaryItemTitle",
                          children: c,
                        }),
                        (0, A.jsx)(V.Z, {
                          theme: "headerItemDescription",
                          children: f,
                        }),
                      ],
                    }),
                  ],
                })
              ),
            }),
          });
        },
        aw = function (a) {
          var c = a.label,
            d = a.url,
            e = a.icon,
            b = (0, X.gO)(d),
            f = b.href,
            g = at(b, ["href"]);
          return (0, A.jsx)("li", {
            className: Q()(ap().secondaryItem, ap().panelNavItem),
            children: (0, A.jsx)(R(), {
              href: f,
              children: (0, A.jsxs)(
                "a",
                as({}, g, {
                  className: ap().panelNavItemAnchor,
                  children: [
                    (0, A.jsx)("img", {
                      className: ap().panelNavItemIcon,
                      src: e.url,
                      alt: "",
                    }),
                    (0, A.jsx)(V.Z, {
                      theme: "headerSecondaryItemTitle",
                      children: c,
                    }),
                  ],
                })
              ),
            }),
          });
        },
        ax = (0, k.memo)(d),
        w = a(4752),
        ay = a.n(w),
        h = function (c) {
          var a,
            b,
            d,
            i = c.className,
            e = c.onClick,
            f = c.isOpen,
            g = (0, k.useRef)(null),
            h = (0, k.useState)(!1),
            j = h[0],
            m = h[1],
            n = function () {
              m(!0);
            },
            o = function () {
              m(!1);
            },
            l = (0, k.useCallback)(
              function (a) {
                j && 27 === a.keyCode && e();
              },
              [j, e]
            );
          return (
            (0, k.useEffect)(
              function () {
                var a = g.current;
                return (
                  window.addEventListener("keyup", l),
                  a &&
                    (a.addEventListener("focusin", n),
                    a.addEventListener("focusout", o)),
                  function () {
                    window.removeEventListener("keyup", l),
                      a.removeEventListener("focusin", n),
                      a.removeEventListener("focusout", o);
                  }
                );
              },
              [g, l]
            ),
            (0, A.jsxs)("button", {
              ref: g,
              className: Q()(
                ay().root,
                i,
                ((a = {}),
                (b = ay().isOpen),
                (d = f),
                b in a
                  ? Object.defineProperty(a, b, {
                      value: d,
                      enumerable: !0,
                      configurable: !0,
                      writable: !0,
                    })
                  : (a[b] = d),
                a)
              ),
              onClick: e,
              "aria-label": f ? "Close navigation" : "Open navigation",
              children: [(0, A.jsx)("span", {}), (0, A.jsx)("span", {})],
            })
          );
        };
      h.propTypes = {
        className: b().string,
        onClick: b().func,
        isOpen: b().bool,
      };
      var az = h,
        x = a(7656),
        aA = a.n(x);
      function aB(a, b, c) {
        return (
          b in a
            ? Object.defineProperty(a, b, {
                value: c,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (a[b] = c),
          a
        );
      }
      function aC(d) {
        for (var a = 1; a < arguments.length; a++) {
          var c = null != arguments[a] ? arguments[a] : {},
            b = Object.keys(c);
          "function" == typeof Object.getOwnPropertySymbols &&
            (b = b.concat(
              Object.getOwnPropertySymbols(c).filter(function (a) {
                return Object.getOwnPropertyDescriptor(c, a).enumerable;
              })
            )),
            b.forEach(function (a) {
              aB(d, a, c[a]);
            });
        }
        return d;
      }
      var i = function (c) {
        var a,
          h = c.navItems,
          d = c.cta,
          i = (0, k.useRef)(null),
          e = (0, k.useState)(!1),
          b = e[0],
          o = e[1],
          f = (0, k.useState)(!1),
          j = f[0],
          p = f[1],
          g = (0, k.useState)(0),
          l = g[0],
          q = g[1],
          m = (0, B.useRouter)(),
          n = (0, am.ZP)(),
          r = function () {
            o(!1);
          };
        return (
          (0, k.useEffect)(
            function () {
              return (
                m.events.on("routeChangeStart", r),
                function () {
                  m.events.off("routeChangeStart", r);
                }
              );
            },
            [m.events]
          ),
          (0, k.useEffect)(
            function () {
              return (
                b ? (0, al.Qp)(i.current) : (0, al.tG)(i.current),
                function () {
                  (0, al.tP)();
                }
              );
            },
            [b]
          ),
          (0, A.jsxs)("header", {
            className: Q()(
              aA().root,
              (aB((a = {}), aA().isOpen, b),
              aB(a, aA().isHidden, n === am.gN),
              a)
            ),
            children: [
              (0, A.jsx)(R(), {
                href: "/",
                children: (0, A.jsx)("a", {
                  className: aA().logo,
                  children: (0, A.jsx)(T, { ariaId: "finix-logo-header" }),
                }),
              }),
              (0, A.jsx)(az, {
                className: aA().toggle,
                onClick: function () {
                  o(!b);
                },
                isOpen: b,
              }),
              (0, A.jsx)("nav", {
                ref: i,
                className: aA().navContainer,
                children: (0, A.jsxs)("div", {
                  className: aA().list,
                  children: [
                    (0, A.jsxs)("ul", {
                      className: aA().listItem,
                      children: [
                        h.map(function (a, b) {
                          var d = a.__typename,
                            c = (function (a, d) {
                              if (null == a) return {};
                              var b,
                                c,
                                e = (function (c, f) {
                                  if (null == c) return {};
                                  var a,
                                    b,
                                    d = {},
                                    e = Object.keys(c);
                                  for (b = 0; b < e.length; b++)
                                    (a = e[b]),
                                      f.indexOf(a) >= 0 || (d[a] = c[a]);
                                  return d;
                                })(a, d);
                              if (Object.getOwnPropertySymbols) {
                                var f = Object.getOwnPropertySymbols(a);
                                for (c = 0; c < f.length; c++)
                                  (b = f[c]),
                                    !(d.indexOf(b) >= 0) &&
                                      Object.prototype.propertyIsEnumerable.call(
                                        a,
                                        b
                                      ) &&
                                      (e[b] = a[b]);
                              }
                              return e;
                            })(a, ["__typename"]);
                          return "HeaderNavItemLink" == d
                            ? (0, k.createElement)(
                                aD,
                                aC({}, c, {
                                  key: b,
                                  className: aA().navItem,
                                  anchorClassName: aA().navItemAnchor,
                                })
                              )
                            : (0, k.createElement)(
                                ax,
                                aC({}, c, {
                                  key: b,
                                  as: "li",
                                  setIsPanelOpen: p,
                                  setPanelHeight: q,
                                  className: aA().navItem,
                                  anchorClassName: aA().navItemAnchor,
                                })
                              );
                        }),
                        (0, A.jsx)("li", {
                          "aria-hidden": !0,
                          style: { "--panel-height": "".concat(l, "px") },
                          className: Q()(
                            aA().panelBackground,
                            aB({}, aA().isOpen, j)
                          ),
                        }),
                      ],
                    }),
                    (0, A.jsx)("div", {
                      className: aA().buttonWrapper,
                      children: (0, A.jsx)(an.ZP, {
                        className: Q()(aA().button, "get-started-button"),
                        href: d.url,
                        theme: "secondary",
                        children: d.label,
                      }),
                    }),
                  ],
                }),
              }),
            ],
          })
        );
      };
      i.propTypes = {
        navItems: b().array.isRequired,
        cta: b().object.isRequired,
      };
      var aD = function (a) {
          var b = a.label,
            c = a.url,
            d = a.className,
            e = a.anchorClassName;
          return (0, A.jsx)("li", {
            className: d,
            children: (0, A.jsx)(R(), {
              href: c,
              children: (0, A.jsx)("a", { className: e, children: b }),
            }),
          });
        },
        aE = i,
        aF = a(3935),
        j = function (a) {
          var d = a.selector,
            e = a.children,
            b = (0, k.useState)(null),
            c = b[0],
            f = b[1];
          return ((0, k.useEffect)(
            function () {
              f(document.querySelector(d));
            },
            [d]
          ),
          c)
            ? aF.createPortal(e, c)
            : null;
        };
      (j.propTypes = { selector: b().string, children: b().node }),
        (j.defaultProps = { selector: "#__portal__" });
      var aG = a(2860),
        aH = function () {
          var a = (0, k.useState)(!1);
          return (
            a[0],
            a[1],
            (0, k.useEffect)(function () {
              var a = function (a) {};
              return (
                document.addEventListener("keypress", a),
                function () {
                  return document.removeEventListener("keypress", a);
                }
              );
            }),
            null
          );
        },
        y = a(8921),
        aI = a.n(y),
        aJ = { i8: "1.0.79" };
      function aK(a, b, c) {
        return (
          b in a
            ? Object.defineProperty(a, b, {
                value: c,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (a[b] = c),
          a
        );
      }
      function aL(d) {
        for (var a = 1; a < arguments.length; a++) {
          var c = null != arguments[a] ? arguments[a] : {},
            b = Object.keys(c);
          "function" == typeof Object.getOwnPropertySymbols &&
            (b = b.concat(
              Object.getOwnPropertySymbols(c).filter(function (a) {
                return Object.getOwnPropertyDescriptor(c, a).enumerable;
              })
            )),
            b.forEach(function (a) {
              aK(d, a, c[a]);
            });
        }
        return d;
      }
      var aM = function () {
          return (0, A.jsxs)(E(), {
            children: [
              (0, A.jsx)("meta", {
                name: "viewport",
                content:
                  "width=device-width, initial-scale=1, viewport-fit=cover",
              }),
              (0, A.jsx)("meta", {
                name: "theme-color",
                media: "(prefers-color-scheme: light)",
                content: "#9e9e9e",
              }),
              (0, A.jsx)("meta", {
                name: "theme-color",
                media: "(prefers-color-scheme: dark)",
                content: "#454545",
              }),
              (0, A.jsx)("link", {
                rel: "preload",
                href: "/assets/fonts/CircularXX-Regular.woff2",
                as: "font",
                type: "font/woff2",
                crossOrigin: "true",
              }),
              (0, A.jsx)("link", {
                rel: "preload",
                href: "/assets/fonts/CircularXX-Book.woff2",
                as: "font",
                type: "font/woff2",
                crossOrigin: "true",
              }),
              (0, A.jsx)("link", {
                rel: "icon",
                href: "/favicon.ico",
                sizes: "any",
              }),
              (0, A.jsx)("link", {
                rel: "icon",
                href: "/favicon.svg",
                type: "image/svg+xml",
              }),
              (0, A.jsx)("link", {
                rel: "apple-touch-icon",
                href: "/apple-touch-icon.png",
              }),
              (0, A.jsx)("link", {
                rel: "manifest",
                href: "/manifest.webmanifest",
              }),
            ],
          });
        },
        aN = function (b) {
          var f = b.Component,
            a = b.pageProps,
            c = a.header,
            d = a.footer,
            e = (function (a, d) {
              if (null == a) return {};
              var b,
                c,
                e = (function (c, f) {
                  if (null == c) return {};
                  var a,
                    b,
                    d = {},
                    e = Object.keys(c);
                  for (b = 0; b < e.length; b++)
                    (a = e[b]), f.indexOf(a) >= 0 || (d[a] = c[a]);
                  return d;
                })(a, d);
              if (Object.getOwnPropertySymbols) {
                var f = Object.getOwnPropertySymbols(a);
                for (c = 0; c < f.length; c++)
                  (b = f[c]),
                    !(d.indexOf(b) >= 0) &&
                      Object.prototype.propertyIsEnumerable.call(a, b) &&
                      (e[b] = a[b]);
              }
              return e;
            })(a, ["header", "footer"]),
            g = (0, B.useRouter)();
          return (
            (0, k.useEffect)(function () {
              console.info(
                "%c \uD83D\uDCB3 finix.com | v".concat(aJ.i8),
                "font: bold 12px sans-serif; color: #0052e5; display: block; width: 100%;"
              );
            }, []),
            C(),
            (0, A.jsxs)(D.zt, {
              createStore: (0, D.ZP)(e),
              children: [
                (0, A.jsx)(aM, {}),
                (0, A.jsx)(K, {}),
                (0, A.jsx)(N, {}),
                (0, A.jsx)(P, {}),
                c && (0, A.jsx)(aE, aL({}, c)),
                (0, A.jsxs)("div", {
                  className: aI().wrapper,
                  children: [
                    (0, A.jsx)("main", {
                      className: aI().main,
                      children: (0, k.createElement)(
                        f,
                        aL({}, e, { key: g.asPath })
                      ),
                    }),
                    d && (0, A.jsx)(ak, aL({}, d)),
                  ],
                }),
                (0, A.jsx)(W.$x, {}),
                (0, A.jsx)(aH, {}),
              ],
            })
          );
        };
    },
    558: function (c, b, a) {
      "use strict";
      a.d(b, {
        $h: function () {
          return t;
        },
        BK: function () {
          return m;
        },
        Dc: function () {
          return f;
        },
        F1: function () {
          return e;
        },
        Yw: function () {
          return j;
        },
        gO: function () {
          return l;
        },
        gt: function () {
          return i;
        },
        k2: function () {
          return h;
        },
        p6: function () {
          return g;
        },
      });
      var d = a(2924);
      function e(a) {
        return new Array(a).fill(0).map(function (b, a) {
          return a;
        });
      }
      function f(a) {
        return new Promise(function (b) {
          setTimeout(b, a);
        });
      }
      function g(a) {
        var b =
          !(arguments.length > 1) || void 0 === arguments[1] || arguments[1];
        return new Date(a).toLocaleDateString("en-US", {
          day: "2-digit",
          month: "2-digit",
          year: "2-digit",
          timeZone: b ? "UTC" : void 0,
        });
      }
      function h(b) {
        var a =
          !(arguments.length > 1) || void 0 === arguments[1] || arguments[1];
        return new Date(b).toLocaleDateString("en-US", {
          day: "2-digit",
          month: "2-digit",
          year: "2-digit",
          hour: "numeric",
          minute: "2-digit",
          timeZone: a ? "UTC" : void 0,
          timeZoneName: a ? void 0 : "short",
        });
      }
      function i(a) {
        return new Date(a).toLocaleDateString("en-US", {
          day: "numeric",
          month: "long",
          year: "numeric",
          timeZone: "UTC",
        });
      }
      function j(a) {
        return new Date(a).toLocaleDateString("en-US", {
          weekday: "short",
          day: "numeric",
          month: "short",
          timeZone: "UTC",
        });
      }
      var k = function (a) {
          return a.match(/^(mailto:)?\S+@\S+\.\S+/);
        },
        l = function (a) {
          if (!a) return { href: null };
          var c,
            e = k(a),
            d = (c = a).match(/^https?\:\/\//) || k(c),
            b = d
              ? { href: a, rel: "noopener", target: "_blank" }
              : { href: a };
          return (
            d || "/" === a.charAt(0) || (b.href = "/" + a),
            e && !a.startsWith("mailto:") && (b.href = "mailto:" + a),
            b
          );
        };
      function m(a) {
        var b,
          c,
          e = (
            null == a
              ? void 0
              : null === (b = a.headline) || void 0 === b
              ? void 0
              : b.json
          )
            ? (0, d.a)(a.headline.json)
            : null,
          f = (
            null == a
              ? void 0
              : null === (c = a.description) || void 0 === c
              ? void 0
              : c.json
          )
            ? (0, d.a)(a.description.json)
            : null,
          g =
            (null == a ? void 0 : a.image) &&
            !(
              (null == a ? void 0 : a.webmVideo) ||
              (null == a ? void 0 : a.mp4Video)
            )
              ? a.image
              : null;
        return { title: e, description: f, image: g };
      }
      var n = /^\/.?/,
        o = /^((https?:)?\/\/|mailto:)/,
        p = /^(https?:)?\/\/((www.)?finix.com)(\/?.*)/,
        q = /^((www.)?finix.com)(\/?.*)/,
        r =
          /^(((?!\-))(xn\-\-)?[a-z0-9\-_]{0,61}[a-z0-9]{1,1}\.)*(xn\-\-)?([a-z0-9\-]{1,61}|[a-z0-9\-]{1,30})\.[a-z]{2,}(\/?.*)/,
        s = ["docs"];
      function t(d) {
        var a = (function (a) {
          if (a.match(o)) return { type: "external", url: a };
          if (a.match(n))
            return s.includes(a.slice(1))
              ? { type: "external", url: "https://finix.com".concat(a) }
              : { type: "internal", url: a };
          if (a.toLowerCase().match(r)) {
            var b = a.match(q);
            return b
              ? {
                  type: "external",
                  url: "https://finix.com".concat(b[3] || "/"),
                }
              : { type: "external", url: "https://".concat(a) };
          }
          return { type: "error", url: a };
        })(d.trim());
        if ("external" === a.type) {
          var c = a.url.match(p);
          if (c) {
            var b = c[4] || "/";
            return s.includes(b.slice(1))
              ? { type: "external", url: "https://finix.com".concat(b) }
              : { type: "internal", url: b };
          }
        }
        return a;
      }
    },
    3034: function (f, d, a) {
      "use strict";
      a.d(d, {
        zt: function () {
          return h;
        },
        ZP: function () {
          return j;
        },
        oR: function () {
          return i;
        },
      });
      var b = a(7294);
      let e =
          "undefined" == typeof window ||
          !window.navigator ||
          /ServerSideRendering|^Deno\//.test(window.navigator.userAgent),
        g = e ? b.useEffect : b.useLayoutEffect;
      var c = (function () {
          let a = (0, b.createContext)(void 0);
          return {
            Provider({ initialStore: e, createStore: c, children: f }) {
              let d = (0, b.useRef)();
              return (
                d.current ||
                  (e &&
                    (console.warn(
                      "Provider initialStore is deprecated and will be removed in the next version."
                    ),
                    c || (c = () => e)),
                  (d.current = c())),
                (0, b.createElement)(a.Provider, { value: d.current }, f)
              );
            },
            useStore(d, e = Object.is) {
              let c = (0, b.useContext)(a);
              if (!c)
                throw new Error(
                  "Seems like you have not used zustand provider as an ancestor."
                );
              return c(d, e);
            },
            useStoreApi() {
              let c = (0, b.useContext)(a);
              if (!c)
                throw new Error(
                  "Seems like you have not used zustand provider as an ancestor."
                );
              return (0, b.useMemo)(
                () => ({
                  getState: c.getState,
                  setState: c.setState,
                  subscribe: c.subscribe,
                  destroy: c.destroy,
                }),
                [c]
              );
            },
          };
        })(),
        h = c.Provider,
        i = c.useStore,
        j = function (a) {
          return function () {
            var c = a.allStoryIndustries,
              d = a.allResourceTags,
              e = a.allResourceTypes;
            return (function (a) {
              let d =
                  "function" == typeof a
                    ? (function (d) {
                        let e,
                          h = new Set(),
                          a = (a, c) => {
                            let b = "function" == typeof a ? a(e) : a;
                            if (b !== e) {
                              let d = e;
                              (e = c ? b : Object.assign({}, e, b)),
                                h.forEach((a) => a(e, d));
                            }
                          },
                          b = () => e,
                          i = (d, a = b, f = Object.is) => {
                            console.warn(
                              "[DEPRECATED] Please use `subscribeWithSelector` middleware"
                            );
                            let g = a(e);
                            function c() {
                              let b = a(e);
                              if (!f(g, b)) {
                                let c = g;
                                d((g = b), c);
                              }
                            }
                            return h.add(c), () => h.delete(c);
                          },
                          f = (a, b, c) =>
                            b || c ? i(a, b, c) : (h.add(a), () => h.delete(a)),
                          g = () => h.clear(),
                          c = {
                            setState: a,
                            getState: b,
                            subscribe: f,
                            destroy: g,
                          };
                        return (e = d(a, b, c)), c;
                      })(a)
                    : a,
                c = (c = d.getState, f = Object.is) => {
                  let [, o] = (0, b.useReducer)((a) => a + 1, 0),
                    a = d.getState(),
                    k = (0, b.useRef)(a),
                    l = (0, b.useRef)(c),
                    m = (0, b.useRef)(f),
                    n = (0, b.useRef)(!1),
                    e = (0, b.useRef)();
                  void 0 === e.current && (e.current = c(a));
                  let h,
                    i = !1;
                  (k.current !== a ||
                    l.current !== c ||
                    m.current !== f ||
                    n.current) &&
                    ((h = c(a)), (i = !f(e.current, h))),
                    g(() => {
                      i && (e.current = h),
                        (k.current = a),
                        (l.current = c),
                        (m.current = f),
                        (n.current = !1);
                    });
                  let p = (0, b.useRef)(a);
                  g(() => {
                    let a = () => {
                        try {
                          let a = d.getState(),
                            b = l.current(a);
                          m.current(e.current, b) ||
                            ((k.current = a), (e.current = b), o());
                        } catch (c) {
                          (n.current = !0), o();
                        }
                      },
                      b = d.subscribe(a);
                    return d.getState() !== p.current && a(), b;
                  }, []);
                  let j = i ? h : e.current;
                  return (0, b.useDebugValue)(j), j;
                };
              return (
                Object.assign(c, d),
                (c[Symbol.iterator] = function () {
                  console.warn(
                    "[useStore, api] = create() is deprecated and will be removed in v4"
                  );
                  let a = [c, d];
                  return {
                    next() {
                      let b = a.length <= 0;
                      return { value: a.shift(), done: b };
                    },
                  };
                }),
                c
              );
            })(function (a) {
              return {
                allResourceTags: d,
                allResourceTypes: e,
                allStoryIndustries: c,
                hubSpotScriptLoaded: !1,
                chiliPiperScriptLoaded: !1,
                oneTrustState: { alertBox: "unknown", groups: [] },
                setResourceTags: function (b) {
                  return a({ allResourceTags: b });
                },
                setResourceTypes: function (b) {
                  return a({ allResourceTypes: b });
                },
                setStoryIndustries: function (b) {
                  return a({ allStoryIndustries: b });
                },
                setHubSpotScriptLoaded: function () {
                  return a({ hubSpotScriptLoaded: !0 });
                },
                setChiliPiperScriptLoaded: function () {
                  return a({ chiliPiperScriptLoaded: !0 });
                },
                setOneTrustState: function (b, c) {
                  return a({ oneTrustState: { alertBox: b, groups: c } });
                },
              };
            });
          };
        };
    },
    6675: function (a) {
      a.exports = {
        root: "Footer_root__xKJ1m",
        colWrapper: "Footer_colWrapper___gOAZ",
        logo: "Footer_logo__oZB3s",
        upper: "Footer_upper__W5Uqa",
        lower: "Footer_lower__RFLgS",
        copyright: "Footer_copyright__IjS6l",
        social: "Footer_social__fZI0A",
        icon: "Footer_icon__whEAa",
        newsletter: "Footer_newsletter__qmjMJ",
        newsletterTitle: "Footer_newsletterTitle__DAXY_",
        newsletterForm: "Footer_newsletterForm__mIqNg",
      };
    },
    6674: function (a) {
      a.exports = {
        root: "Panel_root__5JO3O",
        title: "Panel_title__1jgFD",
        icon: "Panel_icon__rW_kQ",
        isOpen: "Panel_isOpen__kC5vN",
        hint: "Panel_hint__k3Aif",
        nav: "Panel_nav__xmCQm",
      };
    },
    7656: function (a) {
      a.exports = {
        root: "Header_root__Dzxij",
        isOpen: "Header_isOpen__Uasca",
        isHidden: "Header_isHidden__zM_Xu",
        navContainer: "Header_navContainer__s2I8B",
        logo: "Header_logo__x2t32",
        list: "Header_list__gyTGC",
        navItemAnchor: "Header_navItemAnchor__3H1DB",
        buttonWrapper: "Header_buttonWrapper__eQg9_",
        panelBackground: "Header_panelBackground__FG_VT",
        toggle: "Header_toggle___gFkz",
        navItem: "Header_navItem__nC2ZL",
        listItem: "Header_listItem___mALH",
        button: "Header_button__32cFb",
      };
    },
    4267: function (a) {
      a.exports = {
        title: "Panel_title__cimqe",
        open: "Panel_open__l2ON4",
        icon: "Panel_icon___Zx5s",
        primaryNav: "Panel_primaryNav__bUkk2",
        secondaryNav: "Panel_secondaryNav__7Rjul",
        label: "Panel_label__I1_JT",
        additionalLink: "Panel_additionalLink__Emriy",
        panelNavItem: "Panel_panelNavItem__74HeN",
        panelNavItemAnchor: "Panel_panelNavItemAnchor__MWlQ9",
        panelNavItemIcon: "Panel_panelNavItemIcon__Ht9Y7",
        primaryItem: "Panel_primaryItem__upy7b",
        textWrapper: "Panel_textWrapper__q7Suw",
        secondaryItem: "Panel_secondaryItem__pfc3Q",
        nav: "Panel_nav__M2BnI",
        navWrapper: "Panel_navWrapper__t8GCi",
      };
    },
    4752: function (a) {
      a.exports = {
        root: "Toggle_root__az7eL",
        isOpen: "Toggle_isOpen__Tz5fE",
      };
    },
    9536: function (a) {
      a.exports = {
        root: "Button_root__NANMs",
        animated: "Button_animated__hzNtA",
        leave: "Button_leave__o6a9v",
        hover: "Button_hover__3BHW_",
        icon: "Button_icon__Nwf_h",
        "theme-primary": "Button_theme-primary__iF7ln",
        "theme-secondary": "Button_theme-secondary__ZRCqL",
        "theme-tertiary": "Button_theme-tertiary__kyiCf",
        iconButton: "Button_iconButton__kWSdD",
        iconButtonIcon: "Button_iconButtonIcon__MKuoD",
      };
    },
    2860: function (a) {
      a.exports = {
        gridOverlay: "GridOverlay_gridOverlay__Mtkrr",
        visible: "GridOverlay_visible__oJZd_",
        col: "GridOverlay_col__dqVn6",
        col1: "GridOverlay_col1__oAj9L",
        col2: "GridOverlay_col2__P06P3",
        col3: "GridOverlay_col3__iZfqH",
        col4: "GridOverlay_col4__FaYDU",
        col5: "GridOverlay_col5__WK0Zt",
        col6: "GridOverlay_col6__vnyy6",
        col7: "GridOverlay_col7__jBePP",
        col8: "GridOverlay_col8__xezcE",
        col9: "GridOverlay_col9__A1Ov6",
        col10: "GridOverlay_col10__3TgJn",
        col11: "GridOverlay_col11__tyjTi",
        col12: "GridOverlay_col12___bmfa",
      };
    },
    3332: function () {},
    481: function (a) {
      a.exports = {
        icon: "Icon_icon__KhI0x",
        svg: "Icon_svg__nbQlG",
        navIcon: "Icon_navIcon__KR8p5",
        aboutFinix: "Icon_aboutFinix__axkOZ",
        blog: "Icon_blog__J2xsh",
        careers: "Icon_careers__FlehL",
        clientLibraries: "Icon_clientLibraries___bB9G",
        customerStories: "Icon_customerStories__BrhWa",
        documentation: "Icon_documentation__NSYJR",
        events: "Icon_events__dfSlq",
        guides: "Icon_guides___Is_p",
        press: "Icon_press__6_Qus",
        sdk: "Icon_sdk__Rg_2j",
        webinars: "Icon_webinars__fK5rj",
        code: "Icon_code__yIVa7",
        apiStatus: "Icon_apiStatus__hAWIO",
        brand: "Icon_brand__rO3UG",
        changelog: "Icon_changelog__FABAq",
        releaseNotes: "Icon_releaseNotes__C090N",
        glossary: "Icon_glossary__hG3B0",
        support: "Icon_support__tBR8F",
      };
    },
    4933: function (a) {
      a.exports = { root: "Logo_root__jKiJC" };
    },
    1691: function (a) {
      a.exports = {
        root: "PillTag_root__u7ji6",
        Yellow: "PillTag_Yellow__19KME",
        White: "PillTag_White__TzFpq",
        PinkLight: "PillTag_PinkLight__56XOe",
        BlueLight: "PillTag_BlueLight__RdZNB",
        Large: "PillTag_Large__7qmdH",
      };
    },
    5452: function (a) {
      a.exports = {
        largeHeroHeadline: "Text_largeHeroHeadline__rCU_H",
        mediumHeroHeadline: "Text_mediumHeroHeadline__26wkg",
        smallHeroHeadline: "Text_smallHeroHeadline__Td0f8",
        xSmallHeroHeadline: "Text_xSmallHeroHeadline__Fz_WE",
        resourceRichTextModuleHeadline:
          "Text_resourceRichTextModuleHeadline__7dbTu",
        termsH1: "Text_termsH1__Shx4_",
        termsH2: "Text_termsH2__UfcLz",
        termsH3: "Text_termsH3__Us16Y",
        termsH4: "Text_termsH4__q729c",
        termsSubhead: "Text_termsSubhead__no4yw",
        termsBody: "Text_termsBody__oL27S",
        termsNavItem: "Text_termsNavItem__gY5rP",
        buttonLabel: "Text_buttonLabel__2r7JL",
        headerMainNavItem: "Text_headerMainNavItem__JlKj9",
        headerPrimaryItemTitle: "Text_headerPrimaryItemTitle__2d8WO",
        headerSecondaryItemTitle: "Text_headerSecondaryItemTitle__D2BOB",
        headerItemDescription: "Text_headerItemDescription__CLTpY",
        footerNavTitle: "Text_footerNavTitle__BRAoW",
        pillTag: "Text_pillTag__SL12n",
        pillTagLarge: "Text_pillTagLarge__IOO_A",
        bodyCopy: "Text_bodyCopy__C5Kh3",
        smallBodyCopy: "Text_smallBodyCopy__zBf_I",
        storiesHeadline: "Text_storiesHeadline__47KSc",
        cardTitle: "Text_cardTitle__a_AvQ",
        cardTitleMedium: "Text_cardTitleMedium___cVwc",
        cardTitleSmall: "Text_cardTitleSmall__VbUNP",
        cardBody: "Text_cardBody__N_1zo",
        quote: "Text_quote__5UOCG",
        resourceNumbersDescription: "Text_resourceNumbersDescription__fvIy8",
        resourceNumbersHeadline: "Text_resourceNumbersHeadline__eeTNa",
      };
    },
    8921: function (a) {
      a.exports = { wrapper: "app_wrapper__TPBf3", main: "app_main__R8ziC" };
    },
    4533: function (a) {
      a.exports = { container: "grid_container__ZwXiO" };
    },
    584: function () {},
    7091: function () {},
    553: function () {},
    330: function () {},
    7541: function () {},
    716: function () {},
    7116: function () {},
    7663: function (a) {
      !(function () {
        var d = {
            162: function (c) {
              var e,
                f,
                g,
                a = (c.exports = {});
              function h() {
                throw new Error("setTimeout has not been defined");
              }
              function i() {
                throw new Error("clearTimeout has not been defined");
              }
              function j(a) {
                if (e === setTimeout) return setTimeout(a, 0);
                if ((e === h || !e) && setTimeout)
                  return (e = setTimeout), setTimeout(a, 0);
                try {
                  return e(a, 0);
                } catch (b) {
                  try {
                    return e.call(null, a, 0);
                  } catch (c) {
                    return e.call(this, a, 0);
                  }
                }
              }
              !(function () {
                try {
                  e = "function" == typeof setTimeout ? setTimeout : h;
                } catch (a) {
                  e = h;
                }
                try {
                  f = "function" == typeof clearTimeout ? clearTimeout : i;
                } catch (b) {
                  f = i;
                }
              })();
              var k = [],
                l = !1,
                m = -1;
              function n() {
                l &&
                  g &&
                  ((l = !1),
                  g.length ? (k = g.concat(k)) : (m = -1),
                  k.length && o());
              }
              function o() {
                if (!l) {
                  var b = j(n);
                  l = !0;
                  for (var a = k.length; a; ) {
                    for (g = k, k = []; ++m < a; ) g && g[m].run();
                    (m = -1), (a = k.length);
                  }
                  (g = null),
                    (l = !1),
                    (function (a) {
                      if (f === clearTimeout) return clearTimeout(a);
                      if ((f === i || !f) && clearTimeout)
                        return (f = clearTimeout), clearTimeout(a);
                      try {
                        f(a);
                      } catch (b) {
                        try {
                          return f.call(null, a);
                        } catch (c) {
                          return f.call(this, a);
                        }
                      }
                    })(b);
                }
              }
              function d(a, b) {
                (this.fun = a), (this.array = b);
              }
              function b() {}
              (a.nextTick = function (c) {
                var b = new Array(arguments.length - 1);
                if (arguments.length > 1)
                  for (var a = 1; a < arguments.length; a++)
                    b[a - 1] = arguments[a];
                k.push(new d(c, b)), 1 !== k.length || l || j(o);
              }),
                (d.prototype.run = function () {
                  this.fun.apply(null, this.array);
                }),
                (a.title = "browser"),
                (a.browser = !0),
                (a.env = {}),
                (a.argv = []),
                (a.version = ""),
                (a.versions = {}),
                (a.on = b),
                (a.addListener = b),
                (a.once = b),
                (a.off = b),
                (a.removeListener = b),
                (a.removeAllListeners = b),
                (a.emit = b),
                (a.prependListener = b),
                (a.prependOnceListener = b),
                (a.listeners = function (a) {
                  return [];
                }),
                (a.binding = function (a) {
                  throw new Error("process.binding is not supported");
                }),
                (a.cwd = function () {
                  return "/";
                }),
                (a.chdir = function (a) {
                  throw new Error("process.chdir is not supported");
                }),
                (a.umask = function () {
                  return 0;
                });
            },
          },
          e = {};
        function b(a) {
          var f = e[a];
          if (void 0 !== f) return f.exports;
          var c = (e[a] = { exports: {} }),
            g = !0;
          try {
            d[a](c, c.exports, b), (g = !1);
          } finally {
            g && delete e[a];
          }
          return c.exports;
        }
        b.ab = "//";
        var c = b(162);
        a.exports = c;
      })();
    },
    9008: function (a, c, b) {
      a.exports = b(3121);
    },
    1664: function (a, c, b) {
      a.exports = b(1551);
    },
    1163: function (a, c, b) {
      a.exports = b(880);
    },
    4298: function (a, c, b) {
      a.exports = b(3573);
    },
    2703: function (a, e, b) {
      "use strict";
      var f = b(414);
      function c() {}
      function d() {}
      (d.resetWarningCache = c),
        (a.exports = function () {
          function a(c, d, e, g, h, b) {
            if (b !== f) {
              var a = new Error(
                "Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types"
              );
              throw ((a.name = "Invariant Violation"), a);
            }
          }
          function b() {
            return a;
          }
          a.isRequired = a;
          var e = {
            array: a,
            bigint: a,
            bool: a,
            func: a,
            number: a,
            object: a,
            string: a,
            symbol: a,
            any: a,
            arrayOf: b,
            element: a,
            elementType: a,
            instanceOf: b,
            node: a,
            objectOf: b,
            oneOf: b,
            oneOfType: b,
            shape: b,
            exact: b,
            checkPropTypes: d,
            resetWarningCache: c,
          };
          return (e.PropTypes = e), e;
        });
    },
    5697: function (a, c, b) {
      a.exports = b(2703)();
    },
    414: function (a) {
      "use strict";
      a.exports = "SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED";
    },
    2594: function (a) {
      a.exports = (function (b) {
        var c = {};
        function a(d) {
          if (c[d]) return c[d].exports;
          var e = (c[d] = { i: d, l: !1, exports: {} });
          return b[d].call(e.exports, e, e.exports, a), (e.l = !0), e.exports;
        }
        return (
          (a.m = b),
          (a.c = c),
          (a.d = function (b, c, d) {
            a.o(b, c) ||
              Object.defineProperty(b, c, { enumerable: !0, get: d });
          }),
          (a.r = function (a) {
            "undefined" != typeof Symbol &&
              Symbol.toStringTag &&
              Object.defineProperty(a, Symbol.toStringTag, { value: "Module" }),
              Object.defineProperty(a, "__esModule", { value: !0 });
          }),
          (a.t = function (b, c) {
            if ((1 & c && (b = a(b)), 8 & c)) return b;
            if (4 & c && "object" == typeof b && b && b.__esModule) return b;
            var d = Object.create(null);
            if (
              (a.r(d),
              Object.defineProperty(d, "default", { enumerable: !0, value: b }),
              2 & c && "string" != typeof b)
            )
              for (var e in b)
                a.d(
                  d,
                  e,
                  function (a) {
                    return b[a];
                  }.bind(null, e)
                );
            return d;
          }),
          (a.n = function (c) {
            var b =
              c && c.__esModule
                ? function () {
                    return c.default;
                  }
                : function () {
                    return c;
                  };
            return a.d(b, "a", b), b;
          }),
          (a.o = function (a, b) {
            return Object.prototype.hasOwnProperty.call(a, b);
          }),
          (a.p = ""),
          a((a.s = 0))
        );
      })([
        function (h, b, c) {
          "use strict";
          Object.defineProperty(b, "__esModule", { value: !0 });
          var i = (function () {
              function a(d, c) {
                for (var b = 0; b < c.length; b++) {
                  var a = c[b];
                  (a.enumerable = a.enumerable || !1),
                    (a.configurable = !0),
                    "value" in a && (a.writable = !0),
                    Object.defineProperty(d, a.key, a);
                }
              }
              return function (b, c, d) {
                return c && a(b.prototype, c), d && a(b, d), b;
              };
            })(),
            e = c(1),
            f = j(e),
            a = j(c(4));
          function j(a) {
            return a && a.__esModule ? a : { default: a };
          }
          var d = (function (b) {
              function a(c) {
                !(function (a, b) {
                  if (!(a instanceof b))
                    throw new TypeError("Cannot call a class as a function");
                })(this, a);
                var b = (function (b, a) {
                  if (!b)
                    throw new ReferenceError(
                      "this hasn't been initialised - super() hasn't been called"
                    );
                  return a && ("object" == typeof a || "function" == typeof a)
                    ? a
                    : b;
                })(
                  this,
                  (a.__proto__ || Object.getPrototypeOf(a)).call(this, c)
                );
                return (
                  (b.addMainScript = b.addMainScript.bind(b)),
                  (b.addAttributes = b.addAttributes.bind(b)),
                  (b.addEventHandlers = b.addEventHandlers.bind(b)),
                  (b.insertScript = b.insertScript.bind(b)),
                  (b.createStyleString = b.createStyleString.bind(b)),
                  (b.addCustomStyle = b.addCustomStyle.bind(b)),
                  b
                );
              }
              return (
                (function (b, a) {
                  if ("function" != typeof a && null !== a)
                    throw new TypeError(
                      "Super expression must either be null or a function, not " +
                        typeof a
                    );
                  (b.prototype = Object.create(a && a.prototype, {
                    constructor: {
                      value: b,
                      enumerable: !1,
                      writable: !0,
                      configurable: !0,
                    },
                  })),
                    a &&
                      (Object.setPrototypeOf
                        ? Object.setPrototypeOf(b, a)
                        : (b.__proto__ = a));
                })(a, b),
                i(a, [
                  {
                    key: "insertScript",
                    value: function (b) {
                      var a = document.createElement("script");
                      (a.innerText = b),
                        (a.async = !0),
                        document.body.appendChild(a);
                    },
                  },
                  {
                    key: "addMainScript",
                    value: function () {
                      var a =
                        '!function() {\n        var t = window.driftt = window.drift = window.driftt || [];\n        if (!t.init) {\n          if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));\n          t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on", "setUserAttributes" ],\n          t.factory = function(e) {\n            return function() {\n              var n = Array.prototype.slice.call(arguments);\n              return n.unshift(e), t.push(n), t;\n            };\n          }, t.methods.forEach(function(e) {\n            t[e] = t.factory(e);\n          }), t.load = function(t) {\n            var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");\n            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";\n            var i = document.getElementsByTagName("script")[0];\n            i.parentNode.insertBefore(o, i);\n          };\n        }\n      }();\n      drift.SNIPPET_VERSION = \'0.3.1\';\n      drift.load(\'' +
                        this.props.appId +
                        "');";
                      this.insertScript(a);
                    },
                  },
                  {
                    key: "addAttributes",
                    value: function () {
                      var a = "";
                      void 0 !== this.props.userId
                        ? ((a =
                            "\n        var t = window.driftt = window.drift = window.driftt || [];\n        drift.identify('" +
                            this.props.userId +
                            "', " +
                            JSON.stringify(this.props.attributes) +
                            ")\n      "),
                          this.insertScript(a))
                        : this.props.attributes &&
                          ((a =
                            "\n        drift.on('ready', function() {\n          drift.api.setUserAttributes(" +
                            JSON.stringify(this.props.attributes) +
                            ")\n        })\n      "),
                          this.insertScript(a));
                    },
                  },
                  {
                    key: "addEventHandlers",
                    value: function () {
                      var a = this;
                      this.props.eventHandlers &&
                        Array.isArray(this.props.eventHandlers) &&
                        this.props.eventHandlers.forEach(function (b) {
                          var c =
                            "\n        drift.on('" +
                            b.event +
                            "', " +
                            b.function +
                            ");\n        ";
                          a.insertScript(c);
                        });
                    },
                  },
                  {
                    key: "createStyleString",
                    value: function () {
                      var a = this;
                      return Object.keys(this.props.style).reduce(function (
                        c,
                        b
                      ) {
                        var d = a.props.style[b];
                        return (
                          "" +
                          c +
                          (b = b.replace(/[A-Z]/g, function (a) {
                            return "-" + a.toLowerCase();
                          })) +
                          ": " +
                          d +
                          " !important;"
                        );
                      },
                      "");
                    },
                  },
                  {
                    key: "addCustomStyle",
                    value: function () {
                      if (this.props.style) {
                        var a = document.createElement("style");
                        document.head.appendChild(a),
                          (a.innerText =
                            "\n        iframe#drift-widget {\n          " +
                            this.createStyleString() +
                            "\n        }\n      ");
                      }
                    },
                  },
                  {
                    key: "componentDidMount",
                    value: function () {
                      "undefined" == typeof window ||
                        window.drift ||
                        (this.addMainScript(),
                        this.addAttributes(),
                        this.addEventHandlers(),
                        this.addCustomStyle());
                    },
                  },
                  {
                    key: "render",
                    value: function () {
                      return f.default.createElement(e.Fragment, null);
                    },
                  },
                ]),
                a
              );
            })(f.default.Component),
            g = {
              appId: a.default.string.isRequired,
              userId: a.default.string,
              attributes: a.default.object,
              eventHandlers: a.default.array,
              style: a.default.object,
            };
          (d.propTypes = g), (b.default = d);
        },
        function (a, c, b) {
          "use strict";
          a.exports = b(2);
        },
        function (q, a, h) {
          "use strict";
          var f = h(3),
            b = "function" == typeof Symbol && Symbol.for,
            r = b ? Symbol.for("react.element") : 60103,
            s = b ? Symbol.for("react.portal") : 60106,
            i = b ? Symbol.for("react.fragment") : 60107,
            j = b ? Symbol.for("react.strict_mode") : 60108,
            k = b ? Symbol.for("react.profiler") : 60114,
            t = b ? Symbol.for("react.provider") : 60109,
            u = b ? Symbol.for("react.context") : 60110,
            v = b ? Symbol.for("react.forward_ref") : 60112,
            l = b ? Symbol.for("react.suspense") : 60113,
            w = b ? Symbol.for("react.memo") : 60115,
            x = b ? Symbol.for("react.lazy") : 60116,
            y = "function" == typeof Symbol && Symbol.iterator;
          function z(b) {
            for (
              var c =
                  "https://reactjs.org/docs/error-decoder.html?invariant=" + b,
                a = 1;
              a < arguments.length;
              a++
            )
              c += "&args[]=" + encodeURIComponent(arguments[a]);
            return (
              "Minified React error #" +
              b +
              "; visit " +
              c +
              " for the full message or use the non-minified dev environment for full errors and additional helpful warnings."
            );
          }
          var A = {
              isMounted: function () {
                return !1;
              },
              enqueueForceUpdate: function () {},
              enqueueReplaceState: function () {},
              enqueueSetState: function () {},
            },
            B = {};
          function c(a, b, c) {
            (this.props = a),
              (this.context = b),
              (this.refs = B),
              (this.updater = c || A);
          }
          function g() {}
          function d(a, b, c) {
            (this.props = a),
              (this.context = b),
              (this.refs = B),
              (this.updater = c || A);
          }
          (c.prototype.isReactComponent = {}),
            (c.prototype.setState = function (a, b) {
              if ("object" != typeof a && "function" != typeof a && null != a)
                throw Error(z(85));
              this.updater.enqueueSetState(this, a, b, "setState");
            }),
            (c.prototype.forceUpdate = function (a) {
              this.updater.enqueueForceUpdate(this, a, "forceUpdate");
            }),
            (g.prototype = c.prototype);
          var e = (d.prototype = new g());
          (e.constructor = d), f(e, c.prototype), (e.isPureReactComponent = !0);
          var m = { current: null },
            C = Object.prototype.hasOwnProperty,
            D = { key: !0, ref: !0, __self: !0, __source: !0 };
          function n(e, b, j) {
            var a,
              c = {},
              g = null,
              h = null;
            if (null != b)
              for (a in (void 0 !== b.ref && (h = b.ref),
              void 0 !== b.key && (g = "" + b.key),
              b))
                C.call(b, a) && !D.hasOwnProperty(a) && (c[a] = b[a]);
            var d = arguments.length - 2;
            if (1 === d) c.children = j;
            else if (1 < d) {
              for (var i = Array(d), f = 0; f < d; f++) i[f] = arguments[f + 2];
              c.children = i;
            }
            if (e && e.defaultProps)
              for (a in (d = e.defaultProps)) void 0 === c[a] && (c[a] = d[a]);
            return {
              $$typeof: r,
              type: e,
              key: g,
              ref: h,
              props: c,
              _owner: m.current,
            };
          }
          function o(a) {
            return "object" == typeof a && null !== a && a.$$typeof === r;
          }
          var E = /\/+/g,
            F = [];
          function G(b, c, d, e) {
            if (F.length) {
              var a = F.pop();
              return (
                (a.result = b),
                (a.keyPrefix = c),
                (a.func = d),
                (a.context = e),
                (a.count = 0),
                a
              );
            }
            return { result: b, keyPrefix: c, func: d, context: e, count: 0 };
          }
          function H(a) {
            (a.result = null),
              (a.keyPrefix = null),
              (a.func = null),
              (a.context = null),
              (a.count = 0),
              10 > F.length && F.push(a);
          }
          function I(a, b, c) {
            return null == a
              ? 0
              : (function i(a, d, g, h) {
                  var b = typeof a;
                  ("undefined" !== b && "boolean" !== b) || (a = null);
                  var c = !1;
                  if (null === a) c = !0;
                  else
                    switch (b) {
                      case "string":
                      case "number":
                        c = !0;
                        break;
                      case "object":
                        switch (a.$$typeof) {
                          case r:
                          case s:
                            c = !0;
                        }
                    }
                  if (c) return g(h, a, "" === d ? "." + J(a, 0) : d), 1;
                  if (
                    ((c = 0), (d = "" === d ? "." : d + ":"), Array.isArray(a))
                  )
                    for (var e = 0; e < a.length; e++) {
                      var f = d + J((b = a[e]), e);
                      c += i(b, f, g, h);
                    }
                  else if (
                    "function" ==
                    typeof (f =
                      null === a || "object" != typeof a
                        ? null
                        : "function" ==
                          typeof (f = (y && a[y]) || a["@@iterator"])
                        ? f
                        : null)
                  )
                    for (a = f.call(a), e = 0; !(b = a.next()).done; )
                      c += i((b = b.value), (f = d + J(b, e++)), g, h);
                  else if ("object" === b)
                    throw Error(
                      z(
                        31,
                        "[object Object]" == (g = "" + a)
                          ? "object with keys {" +
                              Object.keys(a).join(", ") +
                              "}"
                          : g,
                        ""
                      )
                    );
                  return c;
                })(a, "", b, c);
          }
          function J(a, c) {
            var b, d;
            return "object" == typeof a && null !== a && null != a.key
              ? ((b = a.key),
                (d = { "=": "=0", ":": "=2" }),
                "$" +
                  ("" + b).replace(/[=:]/g, function (a) {
                    return d[a];
                  }))
              : c.toString(36);
          }
          function K(a, b) {
            a.func.call(a.context, b, a.count++);
          }
          function L(a, c, d) {
            var b,
              e,
              f = a.result,
              g = a.keyPrefix;
            (a = a.func.call(a.context, c, a.count++)),
              Array.isArray(a)
                ? M(a, f, d, function (a) {
                    return a;
                  })
                : null != a &&
                  (o(a) &&
                    (a =
                      ((b = a),
                      (e =
                        g +
                        (!a.key || (c && c.key === a.key)
                          ? ""
                          : ("" + a.key).replace(E, "$&/") + "/") +
                        d),
                      {
                        $$typeof: r,
                        type: b.type,
                        key: e,
                        ref: b.ref,
                        props: b.props,
                        _owner: b._owner,
                      })),
                  f.push(a));
          }
          function M(d, a, b, e, f) {
            var c = "";
            null != b && (c = ("" + b).replace(E, "$&/") + "/"),
              I(d, L, (a = G(a, c, e, f))),
              H(a);
          }
          var p = { current: null };
          function N() {
            var a = p.current;
            if (null === a) throw Error(z(321));
            return a;
          }
          (a.Children = {
            map: function (a, c, d) {
              if (null == a) return a;
              var b = [];
              return M(a, b, null, c, d), b;
            },
            forEach: function (a, b, c) {
              if (null == a) return a;
              I(a, K, (b = G(null, null, b, c))), H(b);
            },
            count: function (a) {
              return I(
                a,
                function () {
                  return null;
                },
                null
              );
            },
            toArray: function (b) {
              var a = [];
              return (
                M(b, a, null, function (a) {
                  return a;
                }),
                a
              );
            },
            only: function (a) {
              if (!o(a)) throw Error(z(143));
              return a;
            },
          }),
            (a.Component = c),
            (a.Fragment = i),
            (a.Profiler = k),
            (a.PureComponent = d),
            (a.StrictMode = j),
            (a.Suspense = l),
            (a.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED = {
              ReactCurrentDispatcher: p,
              ReactCurrentBatchConfig: { suspense: null },
              ReactCurrentOwner: m,
              IsSomeRendererActing: { current: !1 },
              assign: f,
            }),
            (a.cloneElement = function (a, b, k) {
              if (null == a) throw Error(z(267, a));
              var d = f({}, a.props),
                h = a.key,
                i = a.ref,
                j = a._owner;
              if (null != b) {
                if (
                  (void 0 !== b.ref && ((i = b.ref), (j = m.current)),
                  void 0 !== b.key && (h = "" + b.key),
                  a.type && a.type.defaultProps)
                )
                  var c = a.type.defaultProps;
                for (e in b)
                  C.call(b, e) &&
                    !D.hasOwnProperty(e) &&
                    (d[e] = void 0 === b[e] && void 0 !== c ? c[e] : b[e]);
              }
              var e = arguments.length - 2;
              if (1 === e) d.children = k;
              else if (1 < e) {
                c = Array(e);
                for (var g = 0; g < e; g++) c[g] = arguments[g + 2];
                d.children = c;
              }
              return {
                $$typeof: r,
                type: a.type,
                key: h,
                ref: i,
                props: d,
                _owner: j,
              };
            }),
            (a.createContext = function (a, b) {
              return (
                void 0 === b && (b = null),
                ((a = {
                  $$typeof: u,
                  _calculateChangedBits: b,
                  _currentValue: a,
                  _currentValue2: a,
                  _threadCount: 0,
                  Provider: null,
                  Consumer: null,
                }).Provider = { $$typeof: t, _context: a }),
                (a.Consumer = a)
              );
            }),
            (a.createElement = n),
            (a.createFactory = function (a) {
              var b = n.bind(null, a);
              return (b.type = a), b;
            }),
            (a.createRef = function () {
              return { current: null };
            }),
            (a.forwardRef = function (a) {
              return { $$typeof: v, render: a };
            }),
            (a.isValidElement = o),
            (a.lazy = function (a) {
              return { $$typeof: x, _ctor: a, _status: -1, _result: null };
            }),
            (a.memo = function (b, a) {
              return { $$typeof: w, type: b, compare: void 0 === a ? null : a };
            }),
            (a.useCallback = function (a, b) {
              return N().useCallback(a, b);
            }),
            (a.useContext = function (a, b) {
              return N().useContext(a, b);
            }),
            (a.useDebugValue = function () {}),
            (a.useEffect = function (a, b) {
              return N().useEffect(a, b);
            }),
            (a.useImperativeHandle = function (a, b, c) {
              return N().useImperativeHandle(a, b, c);
            }),
            (a.useLayoutEffect = function (a, b) {
              return N().useLayoutEffect(a, b);
            }),
            (a.useMemo = function (a, b) {
              return N().useMemo(a, b);
            }),
            (a.useReducer = function (a, b, c) {
              return N().useReducer(a, b, c);
            }),
            (a.useRef = function (a) {
              return N().useRef(a);
            }),
            (a.useState = function (a) {
              return N().useState(a);
            }),
            (a.version = "16.14.0");
        },
        function (a, b, c) {
          "use strict";
          var d = Object.getOwnPropertySymbols,
            e = Object.prototype.hasOwnProperty,
            f = Object.prototype.propertyIsEnumerable;
          a.exports = !(function () {
            try {
              if (!Object.assign) return !1;
              var b = new String("abc");
              if (((b[5] = "de"), "5" === Object.getOwnPropertyNames(b)[0]))
                return !1;
              for (var c = {}, a = 0; a < 10; a++)
                c["_" + String.fromCharCode(a)] = a;
              if (
                "0123456789" !==
                Object.getOwnPropertyNames(c)
                  .map(function (a) {
                    return c[a];
                  })
                  .join("")
              )
                return !1;
              var d = {};
              return (
                "abcdefghijklmnopqrst".split("").forEach(function (a) {
                  d[a] = a;
                }),
                "abcdefghijklmnopqrst" ===
                  Object.keys(Object.assign({}, d)).join("")
              );
            } catch (e) {
              return !1;
            }
          })()
            ? function (j, k) {
                for (
                  var a,
                    b,
                    g = (function (a) {
                      if (null == a)
                        throw new TypeError(
                          "Object.assign cannot be called with null or undefined"
                        );
                      return Object(a);
                    })(j),
                    h = 1;
                  h < arguments.length;
                  h++
                ) {
                  for (var i in (a = Object(arguments[h])))
                    e.call(a, i) && (g[i] = a[i]);
                  if (d) {
                    b = d(a);
                    for (var c = 0; c < b.length; c++)
                      f.call(a, b[c]) && (g[b[c]] = a[b[c]]);
                  }
                }
                return g;
              }
            : Object.assign;
        },
        function (a, c, b) {
          a.exports = b(5)();
        },
        function (a, e, b) {
          "use strict";
          var f = b(6);
          function c() {}
          function d() {}
          (d.resetWarningCache = c),
            (a.exports = function () {
              function a(c, d, e, g, h, b) {
                if (b !== f) {
                  var a = new Error(
                    "Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types"
                  );
                  throw ((a.name = "Invariant Violation"), a);
                }
              }
              function b() {
                return a;
              }
              a.isRequired = a;
              var e = {
                array: a,
                bool: a,
                func: a,
                number: a,
                object: a,
                string: a,
                symbol: a,
                any: a,
                arrayOf: b,
                element: a,
                elementType: a,
                instanceOf: b,
                node: a,
                objectOf: b,
                oneOf: b,
                oneOfType: b,
                shape: b,
                exact: b,
                checkPropTypes: d,
                resetWarningCache: c,
              };
              return (e.PropTypes = e), e;
            });
        },
        function (a, b, c) {
          "use strict";
          a.exports = "SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED";
        },
      ]);
    },
    6362: function (c, a, b) {
      "use strict";
      b.d(a, {
        S1: function () {
          return f;
        },
        ZT: function () {
          return d;
        },
        jU: function () {
          return g;
        },
        on: function () {
          return e;
        },
      });
      var d = function () {};
      function e(a) {
        for (var c = [], b = 1; b < arguments.length; b++)
          c[b - 1] = arguments[b];
        a && a.addEventListener && a.addEventListener.apply(a, c);
      }
      function f(a) {
        for (var c = [], b = 1; b < arguments.length; b++)
          c[b - 1] = arguments[b];
        a && a.removeEventListener && a.removeEventListener.apply(a, c);
      }
      var g = "undefined" != typeof window;
    },
    3047: function (e, d, a) {
      "use strict";
      a.d(d, {
        Z: function () {
          return h;
        },
      });
      var b = a(7294),
        c = a(6362),
        f = c.jU ? b.useLayoutEffect : b.useEffect,
        g = {
          x: 0,
          y: 0,
          width: 0,
          height: 0,
          top: 0,
          left: 0,
          bottom: 0,
          right: 0,
        },
        h =
          c.jU && void 0 !== window.ResizeObserver
            ? function () {
                var a = (0, b.useState)(null),
                  d = a[0],
                  e = a[1],
                  c = (0, b.useState)(g),
                  h = c[0],
                  i = c[1],
                  j = (0, b.useMemo)(function () {
                    return new window.ResizeObserver(function (b) {
                      if (b[0]) {
                        var a = b[0].contentRect,
                          c = a.x,
                          d = a.y,
                          e = a.width,
                          f = a.height,
                          g = a.top,
                          h = a.left,
                          j = a.bottom,
                          k = a.right;
                        i({
                          x: c,
                          y: d,
                          width: e,
                          height: f,
                          top: g,
                          left: h,
                          bottom: j,
                          right: k,
                        });
                      }
                    });
                  }, []);
                return (
                  f(
                    function () {
                      if (d)
                        return (
                          j.observe(d),
                          function () {
                            j.disconnect();
                          }
                        );
                    },
                    [d]
                  ),
                  [e, h]
                );
              }
            : function () {
                return [c.ZT, g];
              };
    },
    4829: function (c, b, a) {
      "use strict";
      var d = a(7294),
        e = a(6362);
      b.Z = function (a, g) {
        var b,
          c,
          f = (0, d.useState)(
            ((b = a),
            void 0 !== (c = g) ? c : !!e.jU && window.matchMedia(b).matches)
          ),
          h = f[0],
          i = f[1];
        return (
          (0, d.useEffect)(
            function () {
              var d = !0,
                b = window.matchMedia(a),
                c = function () {
                  d && i(!!b.matches);
                };
              return (
                b.addListener(c),
                i(b.matches),
                function () {
                  (d = !1), b.removeListener(c);
                }
              );
            },
            [a]
          ),
          h
        );
      };
    },
  },
  function (a) {
    var b = function (b) {
      return a((a.s = b));
    };
    a.O(0, [774, 179], function () {
      return b(1118), b(880);
    }),
      (_N_E = a.O());
  },
]);
