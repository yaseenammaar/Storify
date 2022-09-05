(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [885],
  {
    5304: function (a, b, c) {
      (window.__NEXT_P = window.__NEXT_P || []).push([
        "/resources/glossary",
        function () {
          return c(7006);
        },
      ]);
    },
    6017: function (h, c, a) {
      "use strict";
      a.d(c, {
        Z: function () {
          return D;
        },
      });
      var i = a(5893),
        j = a(7294),
        d = a(4184),
        k = a.n(d),
        l = a(1163),
        m = a(558),
        n = a(6437),
        o = a(4129),
        p = a(8470),
        q = a(7393),
        r = a(6300),
        s = a(8519),
        t = a(4110),
        u = a(5162),
        v = a(3697),
        e = a(1664),
        w = a.n(e),
        f = a(4533),
        x = a.n(f),
        g = a(3323),
        y = a.n(g);
      function z(a, b, c) {
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
      function A(d) {
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
              z(d, a, c[a]);
            });
        }
        return d;
      }
      var B = "/resources/glossary",
        b = function (a) {
          var c,
            d,
            e,
            f = a.heroEyebrow,
            g = a.heroHeadline,
            h = a.heroCopy,
            D = a.sideNavEyebrow,
            N = a.sideNavPrimaryItems,
            E = a.sideNavSecondaryItems,
            b = a.items,
            F = a.slug,
            O = a.seo,
            P = a.seoDefaults,
            G = a.errors,
            V = function (c) {
              var a,
                b,
                d = new Map();
              return (
                null == c ||
                  null === (a = c.entries) ||
                  void 0 === a ||
                  null === (b = a.hyperlink) ||
                  void 0 === b ||
                  b.forEach(function (a) {
                    d.set(a.sys.id, a);
                  }),
                {
                  renderNode: z({}, n.INLINES.ENTRY_HYPERLINK, function (a, b) {
                    var c = d.get(a.data.target.sys.id),
                      e = "".concat(B, "/").concat(c.slug);
                    return (0,
                    i.jsx)(w(), { href: e, scroll: !1, children: (0, i.jsx)("a", { onClick: W, children: b }) });
                  }),
                }
              );
            },
            H = (0, l.useRouter)(),
            Q = (0, j.useRef)(null),
            I = (0, p.ZP)();
          if (G) return (0, i.jsx)(s.Z, { errors: G });
          var R = { title: "".concat(f, ": ").concat(g), description: h },
            J =
              (null === (c = H.query.searchIndex) || void 0 === c
                ? void 0
                : c.length) > 0,
            K =
              (null === (d = H.query.searchTerm) || void 0 === d
                ? void 0
                : d.length) > 0,
            L = (null == F ? void 0 : F.length) > 0,
            M = !J && !K && !L,
            W = function () {
              var a = Q.current,
                b = a.offsetTop + a.offsetHeight;
              window.scroll({ top: b, left: 0, behavior: "smooth" });
            },
            S = function (a) {
              return function () {
                H.push({ pathname: B, query: { searchIndex: a } }, B, {
                  scroll: !1,
                }),
                  W();
              };
            },
            T = function (a) {
              var b = a.target.elements.search.value;
              H.push({ pathname: B, query: { searchTerm: b } }, B, {
                scroll: !1,
              }),
                W(),
                a.preventDefault();
            },
            X = new Set();
          b.forEach(function (a) {
            var b = a.slug;
            return X.add(b.toLowerCase().charCodeAt(0) - 97);
          });
          var U = (0, m.F1)(26).map(function (a) {
            var b = String.fromCharCode(65 + a),
              c = H.query.searchIndex === b.toLowerCase(),
              d = !X.has(a) || c,
              e = k()(y().navButton, z({}, y().active, c));
            return (0,
            i.jsx)("button", { disabled: d, className: e, onClick: S(b.toLowerCase()), children: b }, a);
          });
          return (
            (e = J
              ? b.filter(function (a) {
                  return a.slug.charAt(0) === H.query.searchIndex;
                })
              : K
              ? b.filter(function (a) {
                  return a.name
                    .toLowerCase()
                    .includes(H.query.searchTerm.toLowerCase());
                })
              : L
              ? b.filter(function (a) {
                  return a.slug === F;
                })
              : b),
            (0, i.jsxs)("div", {
              className: k()(y().root, x().container),
              children: [
                (0, i.jsx)(q.Z, { seo: O, fallback: R, defaults: P }),
                (0, i.jsxs)("header", {
                  className: y().header,
                  ref: Q,
                  children: [
                    (0, i.jsx)(t.Z, {
                      color: "White",
                      theme: "Large",
                      label: f,
                    }),
                    (0, i.jsx)(v.Z, {
                      as: "h1",
                      theme: "smallHeroHeadline",
                      className: y().headline,
                      children: g,
                    }),
                    (0, i.jsx)(v.Z, {
                      as: "p",
                      theme: "bodyCopy",
                      children: h,
                    }),
                  ],
                }),
                (0, i.jsxs)("aside", {
                  className: k()(y().aside, z({}, y().hidden, I === p.gN)),
                  children: [
                    (0, i.jsx)(u.Z, { className: y().searchForm, onSubmit: T }),
                    (0, i.jsxs)("div", {
                      className: y().sidenav,
                      children: [
                        D &&
                          (0, i.jsx)(t.Z, {
                            theme: "Large",
                            color: "PinkLight",
                            label: D,
                          }),
                        (0, i.jsx)("ul", {
                          className: y().primaryItems,
                          children: N.map(function (a, b) {
                            return (0, i.jsx)(C, A({}, a), b);
                          }),
                        }),
                        E &&
                          (0, i.jsx)("ul", {
                            className: y().secondaryItems,
                            children: E.map(function (a, b) {
                              return (0, i.jsx)(C, A({}, a), b);
                            }),
                          }),
                      ],
                    }),
                  ],
                }),
                (0, i.jsx)("nav", {
                  className: y().navContainer,
                  children: (0, i.jsxs)(r.Z, {
                    snap: !0,
                    className: k()(y().nav, z({}, y().hidden, I === p.gN)),
                    children: [
                      (0, i.jsx)("button", {
                        disabled: M,
                        onClick: S(),
                        className: k()(y().navButton, z({}, y().active, M)),
                        children: "ALL",
                      }),
                      U,
                    ],
                  }),
                }),
                e.length > 0
                  ? (0, i.jsx)("ul", {
                      className: y().items,
                      children: e.map(function (a) {
                        return (0,
                        i.jsxs)("li", { className: y().item, children: [(0, i.jsx)(v.Z, { as: "h2", theme: "termsH3", className: y().itemheadline, children: a.name }), (0, i.jsx)("div", { className: y().description, children: (0, o.h)(a.description.json, V(a.description.links)) })] }, a.id);
                      }),
                    })
                  : (0, i.jsx)("div", {
                      className: k()(y().items, y().notFound),
                      children: "No glossary items found.",
                    }),
              ],
            })
          );
        };
      b.propTypes = {};
      var C = function (a) {
          var d = a.url,
            c = a.label,
            b = a.icon;
          return (0, i.jsx)("li", {
            className: y().sideNavItem,
            children: (0, i.jsx)(w(), {
              href: d,
              children: (0, i.jsxs)("a", {
                children: [
                  (0, i.jsx)("img", {
                    src: b.url,
                    width: b.width,
                    height: b.height,
                    alt: c,
                  }),
                  (0, i.jsx)(v.Z, {
                    theme: "headerPrimaryItemTitle",
                    children: c,
                  }),
                ],
              }),
            }),
          });
        },
        D = b;
    },
    5162: function (h, d, a) {
      "use strict";
      a.d(d, {
        Z: function () {
          return n;
        },
      });
      var i = a(5893),
        j = a(7294),
        e = a(5697),
        b = a.n(e),
        f = a(4184),
        k = a.n(f),
        l = a(3375),
        g = a(8166),
        m = a.n(g),
        c = function (a) {
          var d = a.className,
            b = a.value,
            e = a.onSubmit,
            c = (0, j.useState)(b),
            f = c[0],
            g = c[1];
          return (
            (0, j.useEffect)(
              function () {
                g(b);
              },
              [b]
            ),
            (0, i.jsxs)("form", {
              className: k()(m().root, d),
              onSubmit: e,
              children: [
                (0, i.jsx)("input", {
                  type: "text",
                  name: "search",
                  placeholder: "Search",
                  value: f,
                  onInput: function (a) {
                    g(a.target.value);
                  },
                }),
                (0, i.jsx)(l.ce, { type: "submit", theme: "secondary" }),
              ],
            })
          );
        };
      (c.propTypes = {
        className: b().string,
        value: b().string,
        onSubmit: b().func.isRequired,
      }),
        (c.defaultProps = { value: "" });
      var n = c;
    },
    7006: function (c, b, a) {
      "use strict";
      a.r(b),
        a.d(b, {
          __N_SSG: function () {
            return e;
          },
          default: function () {
            return d.Z;
          },
        });
      var d = a(6017),
        e = !0;
    },
    3323: function (a) {
      a.exports = {
        root: "Glossary_root__UUbYT",
        header: "Glossary_header__pNoxm",
        headline: "Glossary_headline__7N0Ha",
        aside: "Glossary_aside__Zeh2j",
        hidden: "Glossary_hidden__vAqel",
        searchForm: "Glossary_searchForm__xiRMp",
        sidenav: "Glossary_sidenav___MjW_",
        navContainer: "Glossary_navContainer__xBsur",
        nav: "Glossary_nav__1VkBS",
        navButton: "Glossary_navButton__U5GQ4",
        active: "Glossary_active__aVmVs",
        items: "Glossary_items__J6OO6",
        itemheadline: "Glossary_itemheadline__aQ1sg",
        item: "Glossary_item__ykn6t",
        description: "Glossary_description__wpgk_",
        secondaryItems: "Glossary_secondaryItems__arojA",
        navItem: "Glossary_navItem__ZPeLY",
        primaryItems: "Glossary_primaryItems__uibGP",
        sideNavItem: "Glossary_sideNavItem__uJvsf",
      };
    },
    8166: function (a) {
      a.exports = { root: "Search_root__Osoe6", icon: "Search_icon__RkFAD" };
    },
  },
  function (a) {
    a.O(0, [680, 484, 429, 774, 888, 179], function () {
      return a((a.s = 5304));
    }),
      (_N_E = a.O());
  },
]);
