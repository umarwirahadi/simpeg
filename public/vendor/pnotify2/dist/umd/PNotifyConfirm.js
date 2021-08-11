var _extends=Object.assign||function(t){for(var n=1;n<arguments.length;n++){var e=arguments[n];for(var i in e)Object.prototype.hasOwnProperty.call(e,i)&&(t[i]=e[i])}return t},_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t};!function(t,n){"object"===("undefined"==typeof exports?"undefined":_typeof(exports))&&"undefined"!=typeof module?module.exports=n(require("./PNotify")):"function"==typeof define&&define.amd?define("PNotifyConfirm",["./PNotify"],n):t.PNotifyConfirm=n(PNotify)}(this,function(r){"use strict";r=r&&r.__esModule?r.default:r;var t;function n(t){var n=this._svelte,e=n.component,i=n.ctx;e.handleClick(i.button,t)}function p(t,n,e){var i=Object.create(t);return i.button=n[e],i}function s(e,t){var i,o=(t.confirm||t.prompt)&&u(e,t);return{c:function(){o&&o.c(),i=document.createComment("")},m:function(t,n){o&&o.m(t,n),h(t,i,n)},p:function(t,n){n.confirm||n.prompt?o?o.p(t,n):((o=u(e,n)).c(),o.m(i.parentNode,i)):o&&(o.d(1),o=null)},d:function(t){o&&o.d(t),t&&g(i)}}}function u(o,n){for(var r,s,u,c,a=n.prompt&&m(o,n),l=n.buttons,f=[],t=0;t<l.length;t+=1)f[t]=y(o,p(n,l,t));return{c:function(){r=_("div"),a&&a.c(),s=b("\n    "),u=_("div");for(var t=0;t<f.length;t+=1)f[t].c();u.className=c="\n          ui-pnotify-action-bar\n          "+(n._notice.get()._styles.actionBar?n._notice.get()._styles.actionBar:"")+"\n          "+(n._notice.get()._styles.text?n._notice.get()._styles.text:"")+"\n         svelte-1y9suua",v(u,"justify-content",n.align),r.className="ui-pnotify-confirm"},m:function(t,n){h(t,r,n),a&&a.m(r,null),d(r,s),d(r,u);for(var e=0;e<f.length;e+=1)f[e].m(u,null);o.refs.buttons=u},p:function(t,n){if(n.prompt?a?a.p(t,n):((a=m(o,n)).c(),a.m(r,s)):a&&(a.d(1),a=null),t.buttons||t._notice){l=n.buttons;for(var e=0;e<l.length;e+=1){var i=p(n,l,e);f[e]?f[e].p(t,i):(f[e]=y(o,i),f[e].c(),f[e].m(u,null))}for(;e<f.length;e+=1)f[e].d(1);f.length=l.length}t._notice&&c!==(c="\n          ui-pnotify-action-bar\n          "+(n._notice.get()._styles.actionBar?n._notice.get()._styles.actionBar:"")+"\n          "+(n._notice.get()._styles.text?n._notice.get()._styles.text:"")+"\n         svelte-1y9suua")&&(u.className=c),t.align&&v(u,"justify-content",n.align)},d:function(t){t&&g(r),a&&a.d(),function(t,n){for(var e=0;e<t.length;e+=1)t[e]&&t[e].d(n)}(f,t),o.refs.buttons===u&&(o.refs.buttons=null)}}}function m(e,t){var i,o;function r(t){return t.promptMultiLine?a:c}var s=r(t),u=s(e,t);return{c:function(){i=_("div"),u.c(),i.className=o="\n            ui-pnotify-prompt-bar\n            "+(t._notice.get()._styles.promptBar?t._notice.get()._styles.promptBar:"")+"\n            "+(t._notice.get()._styles.text?t._notice.get()._styles.text:"")+"\n           svelte-1y9suua"},m:function(t,n){h(t,i,n),u.m(i,null)},p:function(t,n){s===(s=r(n))&&u?u.p(t,n):(u.d(1),(u=s(e,n)).c(),u.m(i,null)),t._notice&&o!==(o="\n            ui-pnotify-prompt-bar\n            "+(n._notice.get()._styles.promptBar?n._notice.get()._styles.promptBar:"")+"\n            "+(n._notice.get()._styles.text?n._notice.get()._styles.text:"")+"\n           svelte-1y9suua")&&(i.className=o)},d:function(t){t&&g(i),u.d()}}}function c(e,i){var o,r,s=!1;function u(){s=!0,e.set({promptValue:o.value}),s=!1}function c(t){e.handleKeyPress(t)}return{c:function(){var t,n,e;x(o=_("input"),"input",u),x(o,"keypress",c),t=o,n="type",null==(e="text")?t.removeAttribute(n):t.setAttribute(n,e),o.className=r="\n                ui-pnotify-prompt-input\n                "+(i._notice.get()._styles.input?i._notice.get()._styles.input:"")+"\n                "+i.promptClass+"\n               svelte-1y9suua"},m:function(t,n){h(t,o,n),(e.refs.promptSingle=o).value=i.promptValue},p:function(t,n){!s&&t.promptValue&&(o.value=n.promptValue),(t._notice||t.promptClass)&&r!==(r="\n                ui-pnotify-prompt-input\n                "+(n._notice.get()._styles.input?n._notice.get()._styles.input:"")+"\n                "+n.promptClass+"\n               svelte-1y9suua")&&(o.className=r)},d:function(t){t&&g(o),C(o,"input",u),C(o,"keypress",c),e.refs.promptSingle===o&&(e.refs.promptSingle=null)}}}function a(e,i){var o,r,s=!1;function n(){s=!0,e.set({promptValue:o.value}),s=!1}function u(t){e.handleKeyPress(t)}return{c:function(){x(o=_("textarea"),"input",n),x(o,"keypress",u),o.rows="5",o.className=r="\n                ui-pnotify-prompt-input\n                "+(i._notice.get()._styles.input?i._notice.get()._styles.input:"")+"\n                "+i.promptClass+"\n               svelte-1y9suua"},m:function(t,n){h(t,o,n),(e.refs.promptMulti=o).value=i.promptValue},p:function(t,n){!s&&t.promptValue&&(o.value=n.promptValue),(t._notice||t.promptClass)&&r!==(r="\n                ui-pnotify-prompt-input\n                "+(n._notice.get()._styles.input?n._notice.get()._styles.input:"")+"\n                "+n.promptClass+"\n               svelte-1y9suua")&&(o.className=r)},d:function(t){t&&g(o),C(o,"input",n),C(o,"keypress",u),e.refs.promptMulti===o&&(e.refs.promptMulti=null)}}}function l(t,n){var i,o=n.button.text;return{c:function(){i=b(o)},m:function(t,n){h(t,i,n)},p:function(t,n){var e;t.buttons&&o!==(o=n.button.text)&&(e=o,i.data=""+e)},d:function(t){t&&g(i)}}}function f(t,n){var e,i,o=n.button.text;return{c:function(){e=_("noscript"),i=_("noscript")},m:function(t,n){h(t,e,n),e.insertAdjacentHTML("afterend",o),h(t,i,n)},p:function(t,n){t.buttons&&o!==(o=n.button.text)&&(k(e,i),e.insertAdjacentHTML("afterend",o))},d:function(t){t&&(k(e,i),g(e),g(i))}}}function y(e,i){var o,r;function s(t){return t.button.textTrusted?f:l}var u=s(i),c=u(e,i);return{c:function(){o=_("button"),c.c(),o._svelte={component:e,ctx:i},x(o,"click",n),o.type="button",o.className=r="\n              ui-pnotify-action-button\n              "+(i.button.primary?i._notice.get()._styles.btnPrimary?i._notice.get()._styles.btnPrimary:"":i._notice.get()._styles.btn?i._notice.get()._styles.btn:"")+"\n              "+(i.button.addClass?i.button.addClass:"")+"\n             svelte-1y9suua"},m:function(t,n){h(t,o,n),c.m(o,null)},p:function(t,n){u===(u=s(i=n))&&c?c.p(t,i):(c.d(1),(c=u(e,i)).c(),c.m(o,null)),o._svelte.ctx=i,(t.buttons||t._notice)&&r!==(r="\n              ui-pnotify-action-button\n              "+(i.button.primary?i._notice.get()._styles.btnPrimary?i._notice.get()._styles.btnPrimary:"":i._notice.get()._styles.btn?i._notice.get()._styles.btn:"")+"\n              "+(i.button.addClass?i.button.addClass:"")+"\n             svelte-1y9suua")&&(o.className=r)},d:function(t){t&&g(o),c.d(),C(o,"click",n)}}}function e(t){var n,e,i,o=this;e=t,(n=this)._handlers=P(),n._slots=P(),n._bind=e._bind,n._staged={},n.options=e,n.root=e.root||n,n.store=e.store||n.root.store,e.root||(n._beforecreate=[],n._oncreate=[],n._aftercreate=[]),this.refs={},this._state=N(_extends({_notice:null,_options:{}},r.modules.Confirm.defaults),t.data),this._intro=!0,document.getElementById("svelte-1y9suua-style")||((i=_("style")).id="svelte-1y9suua-style",i.textContent=".ui-pnotify-action-bar.svelte-1y9suua,.ui-pnotify-prompt-bar.svelte-1y9suua{margin-top:5px;clear:both}.ui-pnotify-action-bar.svelte-1y9suua{display:flex;flex-wrap:wrap;justify-content:flex-end}.ui-pnotify-prompt-input.svelte-1y9suua{margin-bottom:5px;display:block;width:100%}.ui-pnotify-confirm-mx-1.svelte-1y9suua{margin:0 5px}.ui-pnotify.ui-pnotify-with-icon .ui-pnotify-confirm-ml.svelte-1y9suua{margin-left:24px}[dir=rtl] .ui-pnotify.ui-pnotify-with-icon .ui-pnotify-confirm-ml.svelte-1y9suua{margin-right:24px;margin-left:0}",d(document.head,i)),this._fragment=s(this,this._state),this.root._oncreate.push(function(){(function(){this.fire("init",{module:this})}).call(o),o.fire("update",{changed:function(t,n){for(var e in n)t[e]=1;return t}({},o._state),current:o._state})}),t.target&&(this._fragment.c(),this._mount(t.target,t.anchor),B(this))}function _(t){return document.createElement(t)}function d(t,n){t.appendChild(n)}function h(t,n,e){t.insertBefore(n,e)}function g(t){t.parentNode.removeChild(t)}function b(t){return document.createTextNode(t)}function v(t,n,e){t.style.setProperty(n,e)}function x(t,n,e,i){t.addEventListener(n,e,i)}function C(t,n,e,i){t.removeEventListener(n,e,i)}function k(t,n){for(;t.nextSibling&&t.nextSibling!==n;)t.parentNode.removeChild(t.nextSibling)}function N(t,n){for(var e in n)t[e]=n[e];return t}function B(t){t._lock=!0,o(t._beforecreate),o(t._oncreate),o(t._aftercreate),t._lock=!1}function i(){}function P(){return Object.create(null)}function o(t){for(;t&&t.length;)t.shift()()}return N(e.prototype,{destroy:function(t){this.destroy=i,this.fire("destroy"),this.set=i,this._fragment.d(!1!==t),this._fragment=null,this._state={}},get:function(){return this._state},fire:function(t,n){var e=t in this._handlers&&this._handlers[t].slice();if(!e)return;for(var i=0;i<e.length;i+=1){var o=e[i];if(!o.__calling)try{o.__calling=!0,o.call(this,n)}finally{o.__calling=!1}}},on:function(t,n){var e=this._handlers[t]||(this._handlers[t]=[]);return e.push(n),{cancel:function(){var t=e.indexOf(n);~t&&e.splice(t,1)}}},set:function(t){if(this._set(N({},t)),this.root._lock)return;B(this.root)},_set:function(t){var n=this._state,e={},i=!1;for(var o in t=N(this._staged,t),this._staged={},t)this._differs(t[o],n[o])&&(e[o]=i=!0);if(!i)return;this._state=N(N({},n),t),this._recompute(e,this._state),this._bind&&this._bind(e,this._state);this._fragment&&(this.fire("state",{changed:e,current:this._state,previous:n}),this._fragment.p(e,this._state),this.fire("update",{changed:e,current:this._state,previous:n}))},_stage:function(t){N(this._staged,t)},_mount:function(t,n){this._fragment[this._fragment.i?"i":"m"](t,n||null)},_differs:function(t,n){return t!=t?n==n:t!==n||t&&"object"===(void 0===t?"undefined":_typeof(t))||"function"==typeof t}}),N(e.prototype,{initModule:function(t){this.set(t)},afterOpen:function(){if(this.get().prompt&&!1!==this.get().focus)this.get().promptMultiLine?this.refs.promptMulti.focus():this.refs.promptSingle.focus();else if(this.get().confirm&&(!0===this.get().focus||null===this.get().focus&&this.get()._options.stack.modal)){var t=this.get().buttons;if(t.length){for(var n=t.length-1;0<=n&&!t[n].promptTrigger;)n--;this.refs.buttons.children[n].focus()}}},handleClick:function(t,n){t.click&&t.click(this.get()._notice,this.get().prompt?this.get().promptValue:null,n)},handleKeyPress:function(t){if(13===t.keyCode&&!t.shiftKey){t.preventDefault();for(var n=this.get().buttons,e=0;e<n.length;e++)n[e].promptTrigger&&n[e].click&&n[e].click(this.get()._notice,this.get().prompt?this.get().promptValue:null,t)}}}),e.prototype._recompute=i,(t=e).key="Confirm",t.defaults={confirm:!1,prompt:!1,promptClass:"",promptValue:"",promptMultiLine:!1,focus:null,align:"flex-end",buttons:[{text:"Ok",textTrusted:!1,addClass:"",primary:!0,promptTrigger:!0,click:function(t,n){t.close(),t.fire("pnotify.confirm",{notice:t,value:n})}},{text:"Cancel",textTrusted:!1,addClass:"",click:function(t){t.close(),t.fire("pnotify.cancel",{notice:t})}}]},r.modules.Confirm=t,r.modulesAppendContainer.push(t),_extends(r.styling.brighttheme,{actionBar:"",promptBar:"",btn:"",btnPrimary:"brighttheme-primary",input:""}),_extends(r.styling.bootstrap3,{actionBar:"ui-pnotify-confirm-ml",promptBar:"ui-pnotify-confirm-ml",btn:"btn btn-default ui-pnotify-confirm-mx-1",btnPrimary:"btn btn-default ui-pnotify-confirm-mx-1 btn-primary",input:"form-control"}),_extends(r.styling.bootstrap4,{actionBar:"ui-pnotify-confirm-ml",promptBar:"ui-pnotify-confirm-ml",btn:"btn btn-secondary mx-1",btnPrimary:"btn btn-primary mx-1",input:"form-control"}),r.styling.material||(r.styling.material={}),_extends(r.styling.material,{actionBar:"",promptBar:"",btn:"",btnPrimary:"ui-pnotify-material-primary",input:""}),e});
//# sourceMappingURL=PNotifyConfirm.js.map