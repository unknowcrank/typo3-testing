var w=(t,i)=>()=>(i||t((i={exports:{}}).exports,i),i.exports);var N=w((y,k)=>{/* NProgress, (c) 2013, 2014 Rico Sta. Cruz - http://ricostacruz.com/nprogress
 * @license MIT */(function(t,i){typeof define=="function"&&define.amd?define(i):typeof y=="object"?k.exports=i():t.NProgress=i()})(y,function(){var t={};t.version="0.2.0";var i=t.settings={minimum:.08,easing:"ease",positionUsing:"",speed:200,trickle:!0,trickleRate:.02,trickleSpeed:800,showSpinner:!0,barSelector:'[role="bar"]',spinnerSelector:'[role="spinner"]',parent:"body",template:'<div class="bar" role="bar"><div class="peg"></div></div><div class="spinner" role="spinner"><div class="spinner-icon"></div></div>'};t.configure=function(e){var r,n;for(r in e)n=e[r],n!==void 0&&e.hasOwnProperty(r)&&(i[r]=n);return this},t.status=null,t.set=function(e){var r=t.isStarted();e=m(e,i.minimum,1),t.status=e===1?null:e;var n=t.render(!r),o=n.querySelector(i.barSelector),a=i.speed,f=i.easing;return n.offsetWidth,T(function(s){i.positionUsing===""&&(i.positionUsing=t.getPositioningCSS()),g(o,C(e,a,f)),e===1?(g(n,{transition:"none",opacity:1}),n.offsetWidth,setTimeout(function(){g(n,{transition:"all "+a+"ms linear",opacity:0}),setTimeout(function(){t.remove(),s()},a)},a)):setTimeout(s,a)}),this},t.isStarted=function(){return typeof t.status=="number"},t.start=function(){t.status||t.set(0);var e=function(){setTimeout(function(){t.status&&(t.trickle(),e())},i.trickleSpeed)};return i.trickle&&e(),this},t.done=function(e){return!e&&!t.status?this:t.inc(.3+.5*Math.random()).set(1)},t.inc=function(e){var r=t.status;return r?(typeof e!="number"&&(e=(1-r)*m(Math.random()*r,.1,.95)),r=m(r+e,0,.994),t.set(r)):t.start()},t.trickle=function(){return t.inc(Math.random()*i.trickleRate)},function(){var e=0,r=0;t.promise=function(n){return!n||n.state()==="resolved"?this:(r===0&&t.start(),e++,r++,n.always(function(){r--,r===0?(e=0,t.done()):t.set((e-r)/e)}),this)}}(),t.render=function(e){if(t.isRendered())return document.getElementById("nprogress");S(document.documentElement,"nprogress-busy");var r=document.createElement("div");r.id="nprogress",r.innerHTML=i.template;var n=r.querySelector(i.barSelector),o=e?"-100":p(t.status||0),a=document.querySelector(i.parent),f;return g(n,{transition:"all 0 linear",transform:"translate3d("+o+"%,0,0)"}),i.showSpinner||(f=r.querySelector(i.spinnerSelector),f&&P(f)),a!=document.body&&S(a,"nprogress-custom-parent"),a.appendChild(r),r},t.remove=function(){b(document.documentElement,"nprogress-busy"),b(document.querySelector(i.parent),"nprogress-custom-parent");var e=document.getElementById("nprogress");e&&P(e)},t.isRendered=function(){return!!document.getElementById("nprogress")},t.getPositioningCSS=function(){var e=document.body.style,r="WebkitTransform"in e?"Webkit":"MozTransform"in e?"Moz":"msTransform"in e?"ms":"OTransform"in e?"O":"";return r+"Perspective"in e?"translate3d":r+"Transform"in e?"translate":"margin"};function m(e,r,n){return e<r?r:e>n?n:e}function p(e){return(-1+e)*100}function C(e,r,n){var o;return i.positionUsing==="translate3d"?o={transform:"translate3d("+p(e)+"%,0,0)"}:i.positionUsing==="translate"?o={transform:"translate("+p(e)+"%,0)"}:o={"margin-left":p(e)+"%"},o.transition="all "+r+"ms "+n,o}var T=function(){var e=[];function r(){var n=e.shift();n&&n(r)}return function(n){e.push(n),e.length==1&&r()}}(),g=function(){var e=["Webkit","O","Moz","ms"],r={};function n(s){return s.replace(/^-ms-/,"ms-").replace(/-([\da-z])/gi,function(u,c){return c.toUpperCase()})}function o(s){var u=document.body.style;if(s in u)return s;for(var c=e.length,d=s.charAt(0).toUpperCase()+s.slice(1),l;c--;)if(l=e[c]+d,l in u)return l;return s}function a(s){return s=n(s),r[s]||(r[s]=o(s))}function f(s,u,c){u=a(u),s.style[u]=c}return function(s,u){var c=arguments,d,l;if(c.length==2)for(d in u)l=u[d],l!==void 0&&u.hasOwnProperty(d)&&f(s,d,l);else f(s,c[1],c[2])}}();function h(e,r){var n=typeof e=="string"?e:v(e);return n.indexOf(" "+r+" ")>=0}function S(e,r){var n=v(e),o=n+r;h(n,r)||(e.className=o.substring(1))}function b(e,r){var n=v(e),o;h(e,r)&&(o=n.replace(" "+r+" "," "),e.className=o.substring(1,o.length-1))}function v(e){return(" "+(e.className||"")+" ").replace(/\s+/gi," ")}function P(e){e&&e.parentNode&&e.parentNode.removeChild(e)}return t})});export default N();
