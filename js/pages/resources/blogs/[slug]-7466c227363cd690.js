(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
	[544], {
		6236: function(a, b, c) {
			(window.__NEXT_P = window.__NEXT_P || []).push(["blogs/[slug]", function() {
				return c(9141)
			}])
		},
		9141: function(d, b, a) {
			"use strict";
			a.r(b), a.d(b, {
				"__N_SSG": function() {
					return j
				},
				"default": function() {
					return i
				}
			});
			var e = a(5893),
				f = a(1089),
				g = a(8519);

			function h(a, b, c) {
				return b in a ? Object.defineProperty(a, b, {
					value: c,
					enumerable: !0,
					configurable: !0,
					writable: !0
				}) : a[b] = c, a
			}
			var c = function(a) {
				var b = a.errors,
					c = function(a, d) {
						if (null == a) return {};
						var b, c, e = function(c, f) {
							if (null == c) return {};
							var a, b, d = {},
								e = Object.keys(c);
							for (b = 0; b < e.length; b++) a = e[b], f.indexOf(a) >= 0 || (d[a] = c[a]);
							return d
						}(a, d);
						if (Object.getOwnPropertySymbols) {
							var f = Object.getOwnPropertySymbols(a);
							for (c = 0; c < f.length; c++) b = f[c], !(d.indexOf(b) >= 0) && Object.prototype.propertyIsEnumerable.call(a, b) && (e[b] = a[b])
						}
						return e
					}(a, ["errors"]);
				return b ? (0, e.jsx)(g.Z, {
					errors: b
				}) : (0, e.jsx)(f.Z, function(d) {
					for (var a = 1; a < arguments.length; a++) {
						var c = null != arguments[a] ? arguments[a] : {},
							b = Object.keys(c);
						"function" == typeof Object.getOwnPropertySymbols && (b = b.concat(Object.getOwnPropertySymbols(c).filter(function(a) {
							return Object.getOwnPropertyDescriptor(c, a).enumerable
						}))), b.forEach(function(a) {
							h(d, a, c[a])
						})
					}
					return d
				}({
					resourceName: "Blog"
				}, c))
			};
			c.propTypes = {};
			var i = c,
				j = !0
		}
	},
	function(a) {
		a.O(0, [680, 432, 484, 429, 599, 89, 774, 888, 179], function() {
			return a(a.s = 6236)
		}), _N_E = a.O()
	}
])
