this.wp=this.wp||{},this.wp.tokenList=function(t){var e={};function n(r){if(e[r])return e[r].exports;var u=e[r]={i:r,l:!1,exports:{}};return t[r].call(u.exports,u,u.exports,n),u.l=!0,u.exports}return n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:r})},n.r=function(t){Object.defineProperty(t,"__esModule",{value:!0})},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=220)}({1:function(t,e){!function(){t.exports=this.lodash}()},15:function(t,e,n){"use strict";function r(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function u(t,e,n){return e&&r(t.prototype,e),n&&r(t,n),t}n.d(e,"a",function(){return u})},16:function(t,e,n){"use strict";function r(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}n.d(e,"a",function(){return r})},220:function(t,e,n){"use strict";n.r(e),n.d(e,"default",function(){return o});var r=n(16),u=n(15),i=n(1),o=function(){function t(){var e=this,n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";Object(r.a)(this,t),this.value=n,["entries","forEach","keys","values"].forEach(function(t){e[t]=function(){var e;return(e=this._valueAsArray)[t].apply(e,arguments)}.bind(e)})}return Object(u.a)(t,[{key:"item",value:function(t){return this._valueAsArray[t]}},{key:"contains",value:function(t){return-1!==this._valueAsArray.indexOf(t)}},{key:"add",value:function(){for(var t=arguments.length,e=new Array(t),n=0;n<t;n++)e[n]=arguments[n];this.value+=" "+e.join(" ")}},{key:"remove",value:function(){for(var t=arguments.length,e=new Array(t),n=0;n<t;n++)e[n]=arguments[n];this.value=i.without.apply(void 0,[this._valueAsArray].concat(e)).join(" ")}},{key:"toggle",value:function(t,e){return void 0===e&&(e=!this.contains(t)),e?this.add(t):this.remove(t),e}},{key:"replace",value:function(t,e){return!!this.contains(t)&&(this.remove(t),this.add(e),!0)}},{key:"supports",value:function(){return!0}},{key:"value",get:function(){return this._currentValue},set:function(t){t=String(t),this._valueAsArray=Object(i.uniq)(Object(i.compact)(t.split(/\s+/g))),this._currentValue=this._valueAsArray.join(" ")}},{key:"length",get:function(){return this._valueAsArray.length}}]),t}()}});