this.wp=this.wp||{},this.wp.viewport=function(t){var e={};function r(n){if(e[n])return e[n].exports;var i=e[n]={i:n,l:!1,exports:{}};return t[n].call(i.exports,i,i.exports,r),i.l=!0,i.exports}return r.m=t,r.c=e,r.d=function(t,e,n){r.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:n})},r.r=function(t){Object.defineProperty(t,"__esModule",{value:!0})},r.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="",r(r.s=206)}({1:function(t,e){!function(){t.exports=this.lodash}()},206:function(t,e,r){"use strict";r.r(e);var n={};r.d(n,"setIsMatching",function(){return a});var i={};r.d(i,"isViewportMatch",function(){return f});var o=r(1),c=r(4);var u=function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},e=arguments.length>1?arguments[1]:void 0;switch(e.type){case"SET_IS_MATCHING":return e.values}return t};function a(t){return{type:"SET_IS_MATCHING",values:t}}var s=r(25);function f(t,e){return!!t[Object(o.takeRight)([">="].concat(Object(s.a)(e.split(" "))),2).join(" ")]}Object(c.registerStore)("core/viewport",{reducer:u,actions:n,selectors:i});var p=r(6),d=function(t){return Object(p.createHigherOrderComponent)(Object(c.withSelect)(function(e){return Object(o.mapValues)(t,function(t){return e("core/viewport").isViewportMatch(t)})}),"withViewportMatch")},h=function(t){return Object(p.createHigherOrderComponent)(Object(p.compose)([d({isViewportMatch:t}),Object(p.ifCondition)(function(t){return t.isViewportMatch})]),"ifViewportMatches")};r.d(e,"ifViewportMatches",function(){return h}),r.d(e,"withViewportMatch",function(){return d});var l={"<":"max-width",">=":"min-width"},w=Object(o.debounce)(function(){var t=Object(o.mapValues)(b,Object(o.property)("matches"));Object(c.dispatch)("core/viewport").setIsMatching(t)},{leading:!0}),b=Object(o.reduce)({huge:1440,wide:1280,large:960,medium:782,small:600,mobile:480},function(t,e,r){return Object(o.forEach)(l,function(n,i){var o=window.matchMedia("(".concat(n,": ").concat(e,"px)"));o.addListener(w);var c=[i,r].join(" ");t[c]=o}),t},{});window.addEventListener("orientationchange",w),w()},25:function(t,e,r){"use strict";var n=r(46);function i(t){return function(t){if(Array.isArray(t)){for(var e=0,r=new Array(t.length);e<t.length;e++)r[e]=t[e];return r}}(t)||Object(n.a)(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance")}()}r.d(e,"a",function(){return i})},4:function(t,e){!function(){t.exports=this.wp.data}()},46:function(t,e,r){"use strict";function n(t){if(Symbol.iterator in Object(t)||"[object Arguments]"===Object.prototype.toString.call(t))return Array.from(t)}r.d(e,"a",function(){return n})},6:function(t,e){!function(){t.exports=this.wp.compose}()}});