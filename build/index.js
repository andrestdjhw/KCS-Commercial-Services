/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/ExampleReactComponent.js"
/*!**********************************************!*\
  !*** ./src/scripts/ExampleReactComponent.js ***!
  \**********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


function ExampleReactComponent() {
  const [clickCount, setClickCount] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(0);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-4 rounded-md",
    onClick: () => setClickCount(prev => prev + 1),
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h1", {
      className: "text-xl",
      children: "Hello from React!"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
      className: "text-sm",
      children: ["You have clicked on this component", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "text-yellow-200 font-bold",
        children: clickCount
      }), " times."]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ExampleReactComponent);

/***/ },

/***/ "./src/scripts/Footer.js"
/*!*******************************!*\
  !*** ./src/scripts/Footer.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Footer)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ─── KCS Brand Tokens ────────────────────────────────────────────────────────

const KCS = {
  navy: "#1B2B6B",
  navyDeep: "#13204F",
  navyLight: "#243580",
  gold: "#C9A84C",
  goldDark: "#A8882E",
  goldLight: "#E8D49A",
  white: "#ffffff",
  borderLight: "rgba(255, 255, 255, 0.08)",
  textMuted: "rgba(255, 255, 255, 0.72)",
  textBody: "rgba(255, 255, 255, 0.82)"
};

// ─── Footer Data (mirrors footer.php) ────────────────────────────────────────
const SERVICES = [{
  label: "Interior Painting",
  href: "/services/interior-painting"
}, {
  label: "Exterior Painting",
  href: "/services/exterior-painting"
}, {
  label: "Kitchen Remodeling",
  href: "/services/kitchen-remodeling"
}, {
  label: "Bathroom Remodeling",
  href: "/services/bathroom-remodeling"
}, {
  label: "Cabinet Refinishing",
  href: "/services/cabinet-refinishing-staining"
}, {
  label: "Surface Repair & Prep",
  href: "/services/surface-repair-preparation"
}, {
  label: "Pressure Washing",
  href: "/services/pressure-washing"
}, {
  label: "Commercial Painting",
  href: "/services/commercial-painting"
}];
const QUICK_LINKS = [{
  label: "Home",
  href: "/"
}, {
  label: "About Us",
  href: "/about-us"
}, {
  label: "Gallery",
  href: "/gallery"
}, {
  label: "Contact Us",
  href: "/contact-us"
}, {
  label: "Privacy Policy",
  href: "/privacy-policy"
}, {
  label: "Terms & Conditions",
  href: "/terms-conditions"
}];

// ─── Main Component ───────────────────────────────────────────────────────────
function Footer() {
  const currentYear = new Date().getFullYear();
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Barlow+Condensed:wght@700;800&display=swap');

        .kcs-footer-link {
          transition: color .2s ease, transform .2s ease;
        }
        .kcs-footer-link:hover {
          color: ${KCS.white} !important;
          transform: translateX(3px) !important;
        }

        .kcs-footer-social {
          transition: transform .2s ease, background-color .2s ease, border-color .2s ease;
        }
        .kcs-footer-social:hover {
          transform: translateY(-3px) !important;
          background: rgba(201,168,76,0.18) !important;
          border-color: rgba(201,168,76,0.45) !important;
        }

        .kcs-footer-badge {
          transition: border-color .2s ease, background-color .2s ease;
        }
        .kcs-footer-badge:hover {
          border-color: rgba(201,168,76,0.45) !important;
          background: rgba(201,168,76,0.12) !important;
        }

        @media (max-width: 1100px) {
          .kcs-footer-grid {
            grid-template-columns: 1.2fr 1fr 1fr !important;
          }
          .kcs-footer-brand-col {
            grid-column: 1 / -1 !important;
            max-width: none !important;
          }
        }

        @media (max-width: 780px) {
          .kcs-footer-grid {
            grid-template-columns: 1fr !important;
          }
          .kcs-footer-main {
            padding: 3.5rem 0 2.4rem !important;
          }
        }

        @media (prefers-reduced-motion: reduce) {
          .kcs-footer-link,
          .kcs-footer-social,
          .kcs-footer-badge {
            transition: none !important;
          }
        }
      `
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("footer", {
      style: {
        background: KCS.navyDeep,
        color: KCS.white,
        fontFamily: "'Manrope', 'Segoe UI', Arial, sans-serif"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "kcs-footer-main",
        style: {
          padding: "4.5rem 0 3rem",
          borderTop: `1px solid ${KCS.borderLight}`
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          style: {
            width: "min(100% - 2rem, 1280px)",
            margin: "0 auto"
          },
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "kcs-footer-grid",
            style: {
              display: "grid",
              gridTemplateColumns: "1.2fr 0.9fr 1fr 0.9fr",
              gap: "2rem"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: "kcs-footer-brand-col",
              style: {
                maxWidth: 420
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: "/",
                "aria-label": "KCS Commercial Services Home",
                style: {
                  display: "inline-flex",
                  alignItems: "center",
                  gap: "0.9rem",
                  textDecoration: "none",
                  color: KCS.white
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  style: {
                    position: "relative",
                    width: 18,
                    height: 42,
                    flexShrink: 0,
                    display: "block"
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    style: {
                      position: "absolute",
                      inset: 0,
                      background: `linear-gradient(180deg, ${KCS.gold}, ${KCS.goldDark})`,
                      clipPath: "polygon(18% 0, 100% 0, 82% 100%, 0 100%)",
                      display: "block"
                    }
                  })
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
                  style: {
                    display: "flex",
                    flexDirection: "column",
                    lineHeight: 1
                  },
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("strong", {
                    style: {
                      fontFamily: "'Barlow Condensed', 'Space Grotesk', 'Segoe UI', sans-serif",
                      fontSize: "1rem",
                      fontWeight: 800,
                      letterSpacing: "0.06em",
                      textTransform: "uppercase",
                      color: KCS.white
                    },
                    children: "KCS Commercial Services"
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("em", {
                    style: {
                      marginTop: "0.35rem",
                      fontStyle: "normal",
                      fontSize: "0.64rem",
                      fontWeight: 800,
                      textTransform: "uppercase",
                      letterSpacing: "0.22em",
                      color: KCS.gold
                    },
                    children: "LLC"
                  })]
                })]
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                style: {
                  marginTop: "1.2rem",
                  color: KCS.textBody,
                  fontSize: "0.95rem",
                  lineHeight: 1.9
                },
                children: "KCS Commercial Services is a full-service painting and remodeling company serving Southern California. Clean execution. Schedule discipline. Aesthetic certainty. Licensed, insured, and bonded \u2014 with 40+ years of combined experience."
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                style: {
                  display: "flex",
                  flexWrap: "wrap",
                  gap: "0.7rem",
                  marginTop: "1.4rem"
                },
                children: ["C-33 Licensed", "Insured", "Bonded", "Google Reviews"].map(badge => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "kcs-footer-badge",
                  style: {
                    display: "inline-flex",
                    alignItems: "center",
                    minHeight: 34,
                    paddingInline: "0.8rem",
                    border: `1px solid ${KCS.borderLight}`,
                    background: "rgba(255,255,255,0.06)",
                    fontSize: "0.68rem",
                    fontWeight: 800,
                    letterSpacing: "0.08em",
                    textTransform: "uppercase"
                  },
                  children: badge
                }, badge))
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                style: {
                  display: "flex",
                  gap: "0.5rem",
                  marginTop: "1.4rem"
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterSocial, {
                  href: "#",
                  label: "Google",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
                    viewBox: "0 0 24 24",
                    "aria-hidden": "true",
                    style: {
                      width: 16,
                      height: 16
                    },
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                      fill: "currentColor",
                      d: "M21.8 12.2c0-.7-.1-1.3-.2-1.9H12v3.6h5.5c-.2 1.2-.9 2.3-1.9 3v2.5h3.1c1.8-1.7 3.1-4.2 3.1-7.2Z"
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                      fill: "currentColor",
                      d: "M12 22c2.7 0 5-.9 6.7-2.5l-3.1-2.5c-.9.6-2 .9-3.6.9-2.8 0-5.2-1.9-6-4.5H2.8v2.6A10 10 0 0 0 12 22Z"
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                      fill: "currentColor",
                      d: "M6 13.4A6 6 0 0 1 5.7 12c0-.5.1-.9.2-1.4V8H2.8A10 10 0 0 0 2 12c0 1.4.3 2.8.8 4l3.2-2.6Z"
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                      fill: "currentColor",
                      d: "M12 6c1.5 0 2.8.5 3.9 1.5l2.9-2.9A10 10 0 0 0 2.8 8l3.1 2.6C6.8 7.9 9.2 6 12 6Z"
                    })]
                  })
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterSocial, {
                  href: "#",
                  label: "Facebook",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                    viewBox: "0 0 24 24",
                    "aria-hidden": "true",
                    style: {
                      width: 16,
                      height: 16
                    },
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                      fill: "currentColor",
                      d: "M13.5 22v-8.2h2.8l.4-3.2h-3.2V8.6c0-.9.3-1.6 1.7-1.6h1.8V4.1c-.3 0-1.4-.1-2.7-.1-2.7 0-4.5 1.6-4.5 4.6v2h-3v3.2h3V22h3.7Z"
                    })
                  })
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterSocial, {
                  href: "#",
                  label: "Instagram",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                    viewBox: "0 0 24 24",
                    "aria-hidden": "true",
                    style: {
                      width: 16,
                      height: 16
                    },
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                      fill: "currentColor",
                      d: "M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9a5.5 5.5 0 0 1-5.5 5.5h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 1.8A3.7 3.7 0 0 0 3.8 7.5v9a3.7 3.7 0 0 0 3.7 3.7h9a3.7 3.7 0 0 0 3.7-3.7v-9a3.7 3.7 0 0 0-3.7-3.7h-9Zm9.4 1.4a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.8A3.2 3.2 0 1 0 12 15.2 3.2 3.2 0 0 0 12 8.8Z"
                    })
                  })
                })]
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterHeading, {
                children: "Contact"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("ul", {
                style: {
                  listStyle: "none",
                  margin: 0,
                  padding: 0,
                  display: "grid",
                  gap: "0.7rem"
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                    href: "tel:+19092326602",
                    className: "kcs-footer-link",
                    style: footerLinkStyle,
                    children: "(909) 232-6602"
                  })
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                    href: "#",
                    className: "kcs-footer-link",
                    style: footerLinkStyle,
                    children: "[client email]"
                  })
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    style: {
                      color: KCS.textMuted,
                      fontSize: "0.92rem",
                      lineHeight: 1.7
                    },
                    children: "Serving OC \xB7 LA \xB7 Riverside \xB7 San Bernardino"
                  })
                })]
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterHeading, {
                children: "Services"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
                style: {
                  listStyle: "none",
                  margin: 0,
                  padding: 0,
                  display: "grid",
                  gap: "0.7rem"
                },
                children: SERVICES.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                    href: s.href,
                    className: "kcs-footer-link",
                    style: footerLinkStyle,
                    children: s.label
                  })
                }, s.href))
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterHeading, {
                children: "Quick Links"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
                style: {
                  listStyle: "none",
                  margin: 0,
                  padding: 0,
                  display: "grid",
                  gap: "0.7rem"
                },
                children: QUICK_LINKS.map(l => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                    href: l.href,
                    className: "kcs-footer-link",
                    style: footerLinkStyle,
                    children: l.label
                  })
                }, l.href))
              })]
            })]
          })
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          borderTop: `1px solid ${KCS.borderLight}`,
          background: "rgba(0,0,0,0.15)"
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          style: {
            width: "min(100% - 2rem, 1280px)",
            margin: "0 auto",
            minHeight: 64,
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
            textAlign: "center"
          },
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
            style: {
              margin: 0,
              color: KCS.textMuted,
              fontSize: "0.84rem",
              lineHeight: 1.6
            },
            children: ["\xA9 ", currentYear, " KCS Commercial Services LLC. All Rights Reserved."]
          })
        })
      })]
    })]
  });
}

// ─── Sub-components ───────────────────────────────────────────────────────────

function FooterHeading({
  children
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
    style: {
      margin: "0 0 1rem",
      fontFamily: "'Barlow Condensed', 'Space Grotesk', 'Segoe UI', sans-serif",
      fontSize: "0.88rem",
      fontWeight: 700,
      letterSpacing: "0.14em",
      textTransform: "uppercase",
      color: KCS.gold
    },
    children: children
  });
}
function FooterSocial({
  href,
  label,
  children
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
    href: href,
    "aria-label": label,
    className: "kcs-footer-social",
    style: {
      display: "inline-flex",
      alignItems: "center",
      justifyContent: "center",
      width: 36,
      height: 36,
      border: `1px solid ${KCS.borderLight}`,
      background: "rgba(255,255,255,0.06)",
      color: KCS.white,
      textDecoration: "none"
    },
    children: children
  });
}
const footerLinkStyle = {
  color: KCS.textMuted,
  textDecoration: "none",
  fontSize: "0.92rem",
  lineHeight: 1.7,
  display: "inline-block"
};

/***/ },

/***/ "./src/scripts/Navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/Navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Navbar)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ─── KCS Brand Tokens ────────────────────────────────────────────────────────

const KCS = {
  navy: "#1B3A6B",
  navyDeep: "#122649",
  navyLight: "#244580",
  gold: "#C9A84C",
  goldDark: "#A8882E",
  goldLight: "#E8D49A",
  cream: "#F5F4EF",
  white: "#ffffff",
  border: "rgba(27, 58, 107, 0.12)",
  borderLight: "rgba(255, 255, 255, 0.12)",
  shadow: "0 18px 40px rgba(27, 58, 107, 0.10)",
  shadowStrong: "0 18px 44px rgba(27, 58, 107, 0.16)"
};

// ─── Nav Data ─────────────────────────────────────────────────────────────────
const SERVICES = [{
  label: "Commercial Cleaning",
  href: "/services/commercial-cleaning"
}, {
  label: "Landscaping & Grounds",
  href: "/services/landscaping-grounds"
}, {
  label: "Drywall & Interior",
  href: "/services/drywall-interior"
}, {
  label: "Roofing & Siding",
  href: "/services/roofing-siding"
}];

// ─── Shared desktop link style ────────────────────────────────────────────────
const desktopLinkStyle = {
  display: "inline-flex",
  alignItems: "center",
  gap: "0.5rem",
  minHeight: 44,
  padding: 0,
  color: KCS.navy,
  textDecoration: "none",
  fontSize: "0.87rem",
  fontWeight: 700,
  letterSpacing: "0.02em"
};

// ─── Main Component ───────────────────────────────────────────────────────────
function Navbar() {
  const [scrolled, setScrolled] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [mobileOpen, setMobileOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [openDropdown, setOpenDropdown] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);
  const [openMobileGroup, setOpenMobileGroup] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);
  const headerRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const onScroll = () => setScrolled(window.scrollY > 16);
    window.addEventListener("scroll", onScroll, {
      passive: true
    });
    return () => window.removeEventListener("scroll", onScroll);
  }, []);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const onKey = e => {
      if (e.key === "Escape") {
        setOpenDropdown(null);
        setMobileOpen(false);
      }
    };
    const onOutsideClick = e => {
      if (headerRef.current && !headerRef.current.contains(e.target)) {
        setOpenDropdown(null);
        setMobileOpen(false);
      }
    };
    document.addEventListener("keydown", onKey);
    document.addEventListener("click", onOutsideClick);
    return () => {
      document.removeEventListener("keydown", onKey);
      document.removeEventListener("click", onOutsideClick);
    };
  }, []);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    document.body.classList.toggle("kcs-mobile-open", mobileOpen);
    return () => document.body.classList.remove("kcs-mobile-open");
  }, [mobileOpen]);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const onResize = () => {
      if (window.innerWidth > 980) setMobileOpen(false);
    };
    window.addEventListener("resize", onResize);
    return () => window.removeEventListener("resize", onResize);
  }, []);
  const toggleDropdown = name => setOpenDropdown(prev => prev === name ? null : name);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Montserrat:wght@700;800;900&display=swap');

        .kcs-mobile-open { overflow: hidden; }

        .kcs-topbar-link { transition: opacity .2s ease, transform .2s ease; }
        .kcs-topbar-link:hover { opacity: 0.82 !important; transform: translateY(-1px) !important; }

        .kcs-social-link {
          transition: transform .2s ease, background-color .2s ease, border-color .2s ease;
        }
        .kcs-social-link:hover {
          transform: translateY(-2px) !important;
          background: rgba(201,168,76,0.18) !important;
          border-color: rgba(201,168,76,0.45) !important;
        }

        .kcs-menu-link { position: relative; transition: color .2s ease; }
        .kcs-menu-link::after {
          content: "";
          position: absolute; left: 0; bottom: 5px;
          width: 0; height: 2px;
          background: linear-gradient(90deg, ${KCS.gold}, ${KCS.goldLight});
          transition: width .25s ease;
        }
        .kcs-menu-link:hover        { color: ${KCS.gold} !important; }
        .kcs-menu-link:hover::after { width: 100% !important; }
        .kcs-menu-link.is-open::after { width: 100% !important; }

        .kcs-dropdown-item {
          transition: background-color .18s ease, color .18s ease, padding-left .18s ease;
        }
        .kcs-dropdown-item:hover {
          background: ${KCS.goldLight} !important;
          color: ${KCS.navyDeep} !important;
          padding-left: 1.15rem !important;
        }

        .kcs-btn-primary {
          position: relative; overflow: hidden;
          transition: transform .22s ease, box-shadow .22s ease,
                      background .22s ease, border-color .22s ease, color .22s ease;
        }
        .kcs-btn-primary::after {
          content: "";
          position: absolute; inset: 0;
          transform: translateX(-115%);
          background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
          transition: transform .65s ease;
        }
        .kcs-btn-primary:hover::after   { transform: translateX(115%); }
        .kcs-btn-primary:hover {
          transform: translateY(-2px) !important;
          background: linear-gradient(135deg, ${KCS.goldDark}, ${KCS.navyDeep}) !important;
          border-color: ${KCS.goldDark} !important;
          box-shadow: 0 18px 34px rgba(201,168,76,0.24) !important;
          color: ${KCS.white} !important;
        }

        .kcs-nav-toggle { transition: background-color .2s ease, border-color .2s ease; }
        .kcs-nav-toggle:hover {
          background: ${KCS.white} !important;
          border-color: rgba(27,43,107,0.24) !important;
        }

        .kcs-brand-mark-outer {
          animation: kcsBrandDrift 5s ease-in-out infinite;
        }
        @keyframes kcsBrandDrift {
          0%, 100% { transform: rotate(8deg) scale(1); }
          50%       { transform: rotate(6deg) scale(1.04); }
        }

        .kcs-mobile-panel { animation: kcsFadeDown .24s ease; }
        @keyframes kcsFadeDown {
          from { opacity: 0; transform: translateY(-8px); }
          to   { opacity: 1; transform: translateY(0); }
        }

        .kcs-mobile-group__panel {
          overflow: hidden;
          transition: max-height .25s ease;
        }
        .kcs-mobile-group-item { transition: background-color .15s ease; }
        .kcs-mobile-group-item:hover { background: rgba(201,168,76,0.08) !important; }

        @media (max-width: 980px) {
          .kcs-desktop-nav,
          .kcs-nav-cta    { display: none !important; }
          .kcs-nav-toggle { display: inline-flex !important; }
        }

        @media (prefers-reduced-motion: reduce) {
          .kcs-topbar-link, .kcs-social-link, .kcs-menu-link,
          .kcs-btn-primary, .kcs-mobile-panel, .kcs-brand-mark-outer,
          .kcs-nav-toggle, .kcs-mobile-group__panel {
            transition: none !important; animation: none !important;
          }
        }
      `
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("header", {
      ref: headerRef,
      style: {
        position: "sticky",
        top: 0,
        zIndex: 1000,
        fontFamily: "'Manrope', 'Segoe UI', Arial, sans-serif"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          background: `linear-gradient(90deg, ${KCS.navyDeep} 0%, ${KCS.navy} 60%, ${KCS.navyLight} 100%)`,
          color: KCS.white,
          borderBottom: `1px solid ${KCS.borderLight}`
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            width: "min(100% - 2rem, 1280px)",
            margin: "0 auto",
            display: "flex",
            alignItems: "center",
            justifyContent: "space-between",
            flexWrap: "wrap",
            gap: "0.75rem",
            minHeight: 48,
            paddingBlock: "0.5rem"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              display: "flex",
              alignItems: "center",
              gap: "1.25rem",
              flexWrap: "wrap"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: "tel:#",
              className: "kcs-topbar-link",
              style: {
                display: "inline-flex",
                alignItems: "center",
                gap: "0.5rem",
                fontSize: "0.78rem",
                fontWeight: 700,
                color: KCS.white,
                textDecoration: "none"
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                style: {
                  display: "inline-flex",
                  width: 18,
                  height: 18,
                  color: "rgba(255,255,255,0.9)",
                  flexShrink: 0
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  viewBox: "0 0 24 24",
                  fill: "none",
                  stroke: "currentColor",
                  strokeWidth: "1.8",
                  strokeLinecap: "round",
                  strokeLinejoin: "round",
                  style: {
                    width: "100%",
                    height: "100%"
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    d: "M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.62a2 2 0 0 1-.45 2.11L8 9.91a16 16 0 0 0 6.09 6.09l1.46-1.28a2 2 0 0 1 2.11-.45c.84.29 1.72.5 2.62.62A2 2 0 0 1 22 16.92z"
                  })
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                style: {
                  fontSize: "0.64rem",
                  fontWeight: 800,
                  textTransform: "uppercase",
                  letterSpacing: "0.14em",
                  color: KCS.goldLight
                },
                children: "Phone"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                children: "[Phone Number]"
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: "#",
              className: "kcs-topbar-link",
              style: {
                display: "inline-flex",
                alignItems: "center",
                gap: "0.5rem",
                fontSize: "0.78rem",
                fontWeight: 700,
                color: "rgba(255,255,255,0.75)",
                textDecoration: "none"
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                style: {
                  display: "inline-flex",
                  width: 18,
                  height: 18,
                  color: "rgba(255,255,255,0.9)",
                  flexShrink: 0
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
                  viewBox: "0 0 24 24",
                  fill: "none",
                  stroke: "currentColor",
                  strokeWidth: "1.8",
                  strokeLinecap: "round",
                  strokeLinejoin: "round",
                  style: {
                    width: "100%",
                    height: "100%"
                  },
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    d: "M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    d: "m22 6-10 7L2 6"
                  })]
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                style: {
                  fontSize: "0.64rem",
                  fontWeight: 800,
                  textTransform: "uppercase",
                  letterSpacing: "0.14em",
                  color: KCS.goldLight
                },
                children: "Email"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                children: "[client email]"
              })]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              display: "flex",
              alignItems: "center",
              gap: "0.85rem",
              flexWrap: "wrap"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              style: {
                display: "inline-flex",
                alignItems: "center",
                minHeight: 30,
                paddingInline: "0.8rem",
                border: `1px solid ${KCS.borderLight}`,
                background: "rgba(255,255,255,0.07)",
                fontSize: "0.68rem",
                fontWeight: 800,
                letterSpacing: "0.08em",
                textTransform: "uppercase"
              },
              children: "Licensed \xB7 Insured \xB7 Bonded"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              "aria-label": "Social media",
              style: {
                display: "flex",
                alignItems: "center",
                gap: "0.4rem"
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: "#",
                "aria-label": "Google",
                className: "kcs-social-link",
                style: {
                  display: "inline-flex",
                  alignItems: "center",
                  justifyContent: "center",
                  width: 32,
                  height: 32,
                  border: `1px solid ${KCS.borderLight}`,
                  background: "rgba(255,255,255,0.07)",
                  color: KCS.white,
                  textDecoration: "none"
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
                  viewBox: "0 0 24 24",
                  "aria-hidden": "true",
                  style: {
                    width: 16,
                    height: 16
                  },
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    fill: "currentColor",
                    d: "M21.8 12.2c0-.7-.1-1.3-.2-1.9H12v3.6h5.5c-.2 1.2-.9 2.3-1.9 3v2.5h3.1c1.8-1.7 3.1-4.2 3.1-7.2Z"
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    fill: "currentColor",
                    d: "M12 22c2.7 0 5-.9 6.7-2.5l-3.1-2.5c-.9.6-2 .9-3.6.9-2.8 0-5.2-1.9-6-4.5H2.8v2.6A10 10 0 0 0 12 22Z"
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    fill: "currentColor",
                    d: "M6 13.4A6 6 0 0 1 5.7 12c0-.5.1-.9.2-1.4V8H2.8A10 10 0 0 0 2 12c0 1.4.3 2.8.8 4l3.2-2.6Z"
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    fill: "currentColor",
                    d: "M12 6c1.5 0 2.8.5 3.9 1.5l2.9-2.9A10 10 0 0 0 2.8 8l3.1 2.6C6.8 7.9 9.2 6 12 6Z"
                  })]
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: "#",
                "aria-label": "Facebook",
                className: "kcs-social-link",
                style: {
                  display: "inline-flex",
                  alignItems: "center",
                  justifyContent: "center",
                  width: 32,
                  height: 32,
                  border: `1px solid ${KCS.borderLight}`,
                  background: "rgba(255,255,255,0.07)",
                  color: KCS.white,
                  textDecoration: "none"
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  viewBox: "0 0 24 24",
                  "aria-hidden": "true",
                  style: {
                    width: 16,
                    height: 16
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    fill: "currentColor",
                    d: "M13.5 22v-8.2h2.8l.4-3.2h-3.2V8.6c0-.9.3-1.6 1.7-1.6h1.8V4.1c-.3 0-1.4-.1-2.7-.1-2.7 0-4.5 1.6-4.5 4.6v2h-3v3.2h3V22h3.7Z"
                  })
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: "#",
                "aria-label": "Instagram",
                className: "kcs-social-link",
                style: {
                  display: "inline-flex",
                  alignItems: "center",
                  justifyContent: "center",
                  width: 32,
                  height: 32,
                  border: `1px solid ${KCS.borderLight}`,
                  background: "rgba(255,255,255,0.07)",
                  color: KCS.white,
                  textDecoration: "none"
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  viewBox: "0 0 24 24",
                  "aria-hidden": "true",
                  style: {
                    width: 16,
                    height: 16
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    fill: "currentColor",
                    d: "M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9a5.5 5.5 0 0 1-5.5 5.5h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 1.8A3.7 3.7 0 0 0 3.8 7.5v9a3.7 3.7 0 0 0 3.7 3.7h9a3.7 3.7 0 0 0 3.7-3.7v-9a3.7 3.7 0 0 0-3.7-3.7h-9Zm9.4 1.4a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.8A3.2 3.2 0 1 0 12 15.2 3.2 3.2 0 0 0 12 8.8Z"
                  })
                })
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              style: {
                display: "inline-flex",
                alignItems: "center",
                minHeight: 30,
                paddingInline: "0.8rem",
                border: `1px solid rgba(201,168,76,0.35)`,
                background: "rgba(201,168,76,0.12)",
                fontSize: "0.68rem",
                fontWeight: 800,
                letterSpacing: "0.08em",
                textTransform: "uppercase",
                color: KCS.goldLight
              },
              children: "KC Metro Based"
            })]
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          position: "relative",
          background: scrolled ? "rgba(245,244,239,0.97)" : "rgba(245,244,239,0.94)",
          backdropFilter: "blur(10px)",
          borderBottom: `1px solid ${KCS.border}`,
          boxShadow: scrolled ? KCS.shadow : "none",
          transition: "box-shadow .25s ease, background-color .25s ease"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            width: "min(100% - 2rem, 1280px)",
            margin: "0 auto",
            display: "grid",
            gridTemplateColumns: "auto 1fr auto",
            alignItems: "center",
            gap: "1.25rem",
            minHeight: 84
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: "/",
              "aria-label": "KCS Commercial Services Home",
              style: {
                display: "inline-flex",
                alignItems: "center",
                gap: "0.9rem",
                textDecoration: "none",
                color: KCS.navy
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
                style: {
                  position: "relative",
                  width: 18,
                  height: 42,
                  flexShrink: 0,
                  display: "block"
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "kcs-brand-mark-outer",
                  style: {
                    position: "absolute",
                    inset: 0,
                    border: `2px solid ${KCS.gold}`,
                    clipPath: "polygon(18% 0, 100% 0, 82% 100%, 0 100%)",
                    display: "block"
                  }
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  style: {
                    position: "absolute",
                    inset: 3,
                    background: `linear-gradient(180deg, ${KCS.gold}, ${KCS.goldDark})`,
                    clipPath: "polygon(18% 0, 100% 0, 82% 100%, 0 100%)",
                    display: "block"
                  }
                })]
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
                style: {
                  display: "flex",
                  flexDirection: "column",
                  lineHeight: 1
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("strong", {
                  style: {
                    fontFamily: "'Montserrat', 'Segoe UI', sans-serif",
                    fontSize: "1rem",
                    fontWeight: 800,
                    letterSpacing: "0.06em",
                    textTransform: "uppercase",
                    color: KCS.navy
                  },
                  children: "KCS Commercial Services"
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("em", {
                  style: {
                    marginTop: "0.35rem",
                    fontStyle: "normal",
                    fontSize: "0.64rem",
                    fontWeight: 800,
                    textTransform: "uppercase",
                    letterSpacing: "0.22em",
                    color: KCS.gold
                  },
                  children: "LLC"
                })]
              })]
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("nav", {
            className: "kcs-desktop-nav",
            "aria-label": "Primary navigation",
            style: {
              justifySelf: "center",
              display: "flex"
            },
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("ul", {
              style: {
                display: "flex",
                alignItems: "center",
                gap: "1.5rem",
                listStyle: "none",
                margin: 0,
                padding: 0
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                  href: "/",
                  className: "kcs-menu-link",
                  style: desktopLinkStyle,
                  children: "Home"
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                  href: "/about-us",
                  className: "kcs-menu-link",
                  style: desktopLinkStyle,
                  children: "About Us"
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("li", {
                style: {
                  position: "relative"
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
                  type: "button",
                  className: `kcs-menu-link${openDropdown === "services" ? " is-open" : ""}`,
                  "aria-expanded": openDropdown === "services",
                  onClick: () => toggleDropdown("services"),
                  style: {
                    ...desktopLinkStyle,
                    border: 0,
                    background: "transparent",
                    cursor: "pointer",
                    fontFamily: "inherit"
                  },
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    children: "Services"
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Caret, {
                    open: openDropdown === "services"
                  })]
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Dropdown, {
                  items: SERVICES,
                  visible: openDropdown === "services"
                })]
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                  href: "/locations",
                  className: "kcs-menu-link",
                  style: desktopLinkStyle,
                  children: "Locations"
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                  href: "/contact-us",
                  className: "kcs-menu-link",
                  style: desktopLinkStyle,
                  children: "Contact Us"
                })
              })]
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              display: "flex",
              alignItems: "center",
              gap: "0.75rem"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "kcs-nav-cta",
              style: {
                display: "flex"
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: "/contact-us",
                className: "kcs-btn-primary",
                style: {
                  display: "inline-flex",
                  alignItems: "center",
                  justifyContent: "center",
                  minHeight: 50,
                  paddingInline: "1.25rem",
                  border: `1px solid transparent`,
                  background: `linear-gradient(135deg, ${KCS.navy}, ${KCS.navyLight})`,
                  boxShadow: `0 18px 34px rgba(27,58,107,0.18)`,
                  color: KCS.goldLight,
                  textDecoration: "none",
                  textTransform: "uppercase",
                  fontSize: "0.76rem",
                  fontWeight: 700,
                  letterSpacing: "0.14em",
                  fontFamily: "inherit"
                },
                children: "Request a Quote"
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
              className: "kcs-nav-toggle",
              type: "button",
              "aria-expanded": mobileOpen,
              "aria-controls": "kcs-mobile-nav",
              "aria-label": mobileOpen ? "Close menu" : "Open menu",
              onClick: () => setMobileOpen(p => !p),
              style: {
                display: "none",
                alignItems: "center",
                justifyContent: "center",
                flexDirection: "column",
                gap: 5,
                width: 50,
                height: 50,
                border: `1px solid ${KCS.border}`,
                background: "rgba(255,255,255,0.75)",
                cursor: "pointer"
              },
              children: [0, 1, 2].map(i => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                style: {
                  display: "block",
                  width: 20,
                  height: 2,
                  background: KCS.navy,
                  transition: "transform .22s ease, opacity .22s ease",
                  transform: mobileOpen ? i === 0 ? "translateY(7px) rotate(45deg)" : i === 2 ? "translateY(-7px) rotate(-45deg)" : "none" : "none",
                  opacity: mobileOpen && i === 1 ? 0 : 1
                }
              }, i))
            })]
          })]
        }), mobileOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          id: "kcs-mobile-nav",
          className: "kcs-mobile-panel",
          style: {
            borderTop: `1px solid ${KCS.border}`,
            background: "rgba(245,244,239,0.98)",
            backdropFilter: "blur(10px)"
          },
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            style: {
              width: "min(100% - 2rem, 1280px)",
              margin: "0 auto"
            },
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("nav", {
              "aria-label": "Mobile navigation",
              style: {
                display: "grid",
                gap: 0,
                paddingBlock: "1rem 1.25rem"
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(MobileLink, {
                href: "/",
                children: "Home"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(MobileLink, {
                href: "/about-us",
                children: "About Us"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(MobileGroup, {
                label: "Services",
                items: SERVICES,
                open: openMobileGroup === "services",
                onToggle: () => setOpenMobileGroup(p => p === "services" ? null : "services")
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(MobileLink, {
                href: "/locations",
                children: "Locations"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(MobileLink, {
                href: "/contact-us",
                children: "Contact Us"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: "/contact-us",
                className: "kcs-btn-primary",
                style: {
                  display: "inline-flex",
                  alignItems: "center",
                  justifyContent: "center",
                  marginTop: "1rem",
                  minHeight: 50,
                  paddingInline: "1.25rem",
                  border: `1px solid transparent`,
                  background: `linear-gradient(135deg, ${KCS.navy}, ${KCS.navyLight})`,
                  boxShadow: `0 18px 34px rgba(27,58,107,0.18)`,
                  color: KCS.goldLight,
                  textDecoration: "none",
                  textTransform: "uppercase",
                  fontSize: "0.76rem",
                  fontWeight: 700,
                  letterSpacing: "0.14em",
                  fontFamily: "inherit"
                },
                children: "Request a Quote"
              })]
            })
          })
        })]
      })]
    })]
  });
}

// ─── Dropdown ─────────────────────────────────────────────────────────────────
function Dropdown({
  items,
  visible
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    style: {
      position: "absolute",
      top: "calc(100% + 14px)",
      left: 0,
      minWidth: 290,
      padding: "0.55rem",
      border: `1px solid ${KCS.border}`,
      background: "rgba(255,255,255,0.97)",
      backdropFilter: "blur(10px)",
      boxShadow: KCS.shadowStrong,
      opacity: visible ? 1 : 0,
      visibility: visible ? "visible" : "hidden",
      transform: visible ? "translateY(0)" : "translateY(10px)",
      transition: "opacity .22s ease, transform .22s ease, visibility .22s ease",
      zIndex: 50
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        height: 3,
        background: `linear-gradient(90deg, ${KCS.navy}, ${KCS.gold})`,
        marginBottom: "0.4rem"
      }
    }), items.map(item => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
      href: item.href,
      className: "kcs-dropdown-item",
      style: {
        display: "block",
        padding: "0.9rem 0.95rem",
        color: KCS.navy,
        textDecoration: "none",
        fontSize: "0.82rem",
        fontWeight: 800,
        letterSpacing: "0.04em",
        textTransform: "uppercase",
        borderBottom: `1px solid rgba(27,43,107,0.06)`
      },
      children: item.label
    }, item.href))]
  });
}

// ─── Caret ────────────────────────────────────────────────────────────────────
function Caret({
  open
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
    style: {
      display: "inline-block",
      flexShrink: 0,
      width: 9,
      height: 9,
      borderRight: `2px solid currentColor`,
      borderBottom: `2px solid currentColor`,
      transform: open ? "rotate(-135deg) translateY(-1px)" : "rotate(45deg) translateY(-2px)",
      transition: "transform .22s ease"
    }
  });
}

// ─── Mobile Link ──────────────────────────────────────────────────────────────
function MobileLink({
  href,
  children
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
    href: href,
    style: {
      display: "flex",
      alignItems: "center",
      minHeight: 58,
      paddingInline: 0,
      borderBottom: `1px solid ${KCS.border}`,
      color: KCS.navy,
      textDecoration: "none",
      fontSize: "0.92rem",
      fontWeight: 700,
      fontFamily: "inherit"
    },
    children: children
  });
}

// ─── Mobile Group ─────────────────────────────────────────────────────────────
function MobileGroup({
  label,
  items,
  open,
  onToggle
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
      type: "button",
      "aria-expanded": open,
      onClick: onToggle,
      style: {
        display: "flex",
        alignItems: "center",
        justifyContent: "space-between",
        width: "100%",
        minHeight: 58,
        paddingInline: 0,
        border: 0,
        borderBottom: `1px solid ${KCS.border}`,
        background: "transparent",
        color: KCS.navy,
        fontSize: "0.92rem",
        fontWeight: 700,
        cursor: "pointer",
        fontFamily: "inherit"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        children: label
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Caret, {
        open: open
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "kcs-mobile-group__panel",
      style: {
        maxHeight: open ? 600 : 0
      },
      children: items.map(item => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
        href: item.href,
        className: "kcs-mobile-group-item",
        style: {
          display: "block",
          padding: "0.9rem 0 0.9rem 1rem",
          borderBottom: `1px solid rgba(27,43,107,0.08)`,
          color: KCS.gold,
          textDecoration: "none",
          fontSize: "0.8rem",
          fontWeight: 800,
          textTransform: "uppercase",
          letterSpacing: "0.08em",
          fontFamily: "inherit"
        },
        children: item.label
      }, item.href))
    })]
  });
}

/***/ },

/***/ "./src/scripts/Person.js"
/*!*******************************!*\
  !*** ./src/scripts/Person.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Person {
  constructor(name) {
    this.name = name;
    this.greet();
  }
  greet() {
    console.log(`Hello, my name is ${this.name}.`);
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Person);

/***/ },

/***/ "./node_modules/react-dom/client.js"
/*!******************************************!*\
  !*** ./node_modules/react-dom/client.js ***!
  \******************************************/
(__unused_webpack_module, exports, __webpack_require__) {



var m = __webpack_require__(/*! react-dom */ "react-dom");
if (false) // removed by dead control flow
{} else {
  var i = m.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED;
  exports.createRoot = function(c, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.createRoot(c, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
  exports.hydrateRoot = function(c, h, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.hydrateRoot(c, h, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
}


/***/ },

/***/ "react"
/*!************************!*\
  !*** external "React" ***!
  \************************/
(module) {

module.exports = window["React"];

/***/ },

/***/ "react-dom"
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
(module) {

module.exports = window["ReactDOM"];

/***/ },

/***/ "react/jsx-runtime"
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
(module) {

module.exports = window["ReactJSXRuntime"];

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scripts_Person__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scripts/Person */ "./src/scripts/Person.js");
/* harmony import */ var _scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/ExampleReactComponent */ "./src/scripts/ExampleReactComponent.js");
/* harmony import */ var _scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/Navbar */ "./src/scripts/Navbar.js");
/* harmony import */ var _scripts_Footer__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/Footer */ "./src/scripts/Footer.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__);







const person1 = new _scripts_Person__WEBPACK_IMPORTED_MODULE_0__["default"]("Brad");
if (document.querySelector("#render-react-example-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_5__.createRoot(document.querySelector("#render-react-example-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_1__["default"], {}));
}
if (document.querySelector("#kcs-navbar")) {
  const navRoot = react_dom_client__WEBPACK_IMPORTED_MODULE_5__.createRoot(document.querySelector("#kcs-navbar"));
  navRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__["default"], {}));
}
document.addEventListener("DOMContentLoaded", () => {
  // initNavbar() ya no es necesario si usas el React component
});
if (document.querySelector("#kcs-footer")) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_5__.createRoot(document.querySelector("#kcs-footer")).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_Footer__WEBPACK_IMPORTED_MODULE_3__["default"], {}));
}
})();

/******/ })()
;
//# sourceMappingURL=index.js.map