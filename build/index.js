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

/***/ "./src/scripts/navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ initNavbar)
/* harmony export */ });
function initNavbar() {
  const body = document.body;
  const header = document.querySelector(".js-rpc-header");
  const navToggle = document.querySelector(".js-rpc-nav-toggle");
  const mobilePanel = document.querySelector(".js-rpc-mobile-panel");
  const desktopDropdowns = document.querySelectorAll(".js-rpc-dropdown");
  const desktopDropdownToggles = document.querySelectorAll(".js-rpc-dropdown-toggle");
  const mobileGroups = document.querySelectorAll(".js-rpc-mobile-group");
  const mobileGroupToggles = document.querySelectorAll(".js-rpc-mobile-group-toggle");
  if (!header) return;
  const closeDesktopDropdowns = () => {
    desktopDropdowns.forEach(item => {
      item.classList.remove("is-open");
      const toggle = item.querySelector(".js-rpc-dropdown-toggle");
      if (toggle) {
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  };
  const closeMobileGroups = () => {
    mobileGroups.forEach(group => {
      group.classList.remove("is-open");
      const toggle = group.querySelector(".js-rpc-mobile-group-toggle");
      if (toggle) {
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  };
  const closeMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    mobilePanel.setAttribute("hidden", "");
    navToggle.setAttribute("aria-expanded", "false");
    body.classList.remove("rpc-mobile-open");
    closeMobileGroups();
  };
  const openMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    mobilePanel.removeAttribute("hidden");
    navToggle.setAttribute("aria-expanded", "true");
    body.classList.add("rpc-mobile-open");
  };
  const toggleMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    const isExpanded = navToggle.getAttribute("aria-expanded") === "true";
    if (isExpanded) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  };
  const handleHeaderState = () => {
    if (window.scrollY > 16) {
      header.classList.add("is-scrolled");
    } else {
      header.classList.remove("is-scrolled");
    }
  };
  if (navToggle && mobilePanel) {
    navToggle.addEventListener("click", toggleMobileMenu);
  }
  desktopDropdownToggles.forEach(toggle => {
    toggle.addEventListener("click", event => {
      event.preventDefault();
      const parent = toggle.closest(".js-rpc-dropdown");
      if (!parent) return;
      const isOpen = parent.classList.contains("is-open");
      closeDesktopDropdowns();
      if (!isOpen) {
        parent.classList.add("is-open");
        toggle.setAttribute("aria-expanded", "true");
      }
    });
  });
  mobileGroupToggles.forEach(toggle => {
    toggle.addEventListener("click", () => {
      const parent = toggle.closest(".js-rpc-mobile-group");
      if (!parent) return;
      const isOpen = parent.classList.contains("is-open");
      closeMobileGroups();
      if (!isOpen) {
        parent.classList.add("is-open");
        toggle.setAttribute("aria-expanded", "true");
      }
    });
  });
  document.addEventListener("click", event => {
    const clickedInsideDesktopDropdown = event.target.closest(".js-rpc-dropdown");
    if (!clickedInsideDesktopDropdown) {
      closeDesktopDropdowns();
    }
    const clickedInsideMobilePanel = event.target.closest(".js-rpc-mobile-panel");
    const clickedToggle = event.target.closest(".js-rpc-nav-toggle");
    if (mobilePanel && navToggle && !mobilePanel.hasAttribute("hidden") && !clickedInsideMobilePanel && !clickedToggle) {
      closeMobileMenu();
    }
  });
  document.addEventListener("keydown", event => {
    if (event.key === "Escape") {
      closeDesktopDropdowns();
      closeMobileMenu();
    }
  });
  handleHeaderState();
  window.addEventListener("scroll", handleHeaderState);
  window.addEventListener("resize", () => {
    if (window.innerWidth > 980) {
      closeMobileMenu();
    }
  });
}

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
/* harmony import */ var _scripts_navbar__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/navbar */ "./src/scripts/navbar.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__);






const person1 = new _scripts_Person__WEBPACK_IMPORTED_MODULE_0__["default"]("Brad");
if (document.querySelector("#render-react-example-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_4__.createRoot(document.querySelector("#render-react-example-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_1__["default"], {}));
}
document.addEventListener("DOMContentLoaded", () => {
  (0,_scripts_navbar__WEBPACK_IMPORTED_MODULE_2__["default"])();
});
})();

/******/ })()
;
//# sourceMappingURL=index.js.map