!function(e,t,n){function r(e,t){return typeof e===t}function s(e,t){return!!~(""+e).indexOf(t)}function o(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):S?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function a(){var e=t.body;return e||(e=o(S?"svg":"body"),e.fake=!0),e}function i(e,n,r,s){var i,d,l,c,u="modernizr",f=o("div"),p=a();if(parseInt(r,10))for(;r--;)l=o("div"),l.id=s?s[r]:u+(r+1),f.appendChild(l);return i=o("style"),i.type="text/css",i.id="s"+u,(p.fake?p:f).appendChild(i),p.appendChild(f),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(t.createTextNode(e)),f.id=u,p.fake&&(p.style.background="",p.style.overflow="hidden",c=x.style.overflow,x.style.overflow="hidden",x.appendChild(p)),d=n(f,e),p.fake?(p.parentNode.removeChild(p),x.style.overflow=c,x.offsetHeight):f.parentNode.removeChild(f),!!d}function d(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function l(t,n,r){var s;if("getComputedStyle"in e){s=getComputedStyle.call(e,t,n);var o=e.console;null!==s?r&&(s=s.getPropertyValue(r)):o&&o[o.error?"error":"log"].call(o,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}else s=!n&&t.currentStyle&&t.currentStyle[r];return s}function c(t,r){var s=t.length;if("CSS"in e&&"supports"in e.CSS){for(;s--;)if(e.CSS.supports(d(t[s]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var o=[];s--;)o.push("("+d(t[s])+":"+r+")");return o=o.join(" or "),i("@supports ("+o+") { #modernizr { position: absolute; } }",function(e){return"absolute"==l(e,null,"position")})}return n}function u(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function f(e,t,a,i){function d(){f&&(delete k.style,delete k.modElem)}if(i=!r(i,"undefined")&&i,!r(a,"undefined")){var l=c(e,a);if(!r(l,"undefined"))return l}for(var f,p,g,m,v,h=["modernizr","tspan","samp"];!k.style&&h.length;)f=!0,k.modElem=o(h.shift()),k.style=k.modElem.style;for(g=e.length,p=0;g>p;p++)if(m=e[p],v=k.style[m],s(m,"-")&&(m=u(m)),k.style[m]!==n){if(i||r(a,"undefined"))return d(),"pfx"!=t||m;try{k.style[m]=a}catch(e){}if(k.style[m]!=v)return d(),"pfx"!=t||m}return d(),!1}function p(e,t){return function(){return e.apply(t,arguments)}}function g(e,t,n){var s;for(var o in e)if(e[o]in t)return!1===n?e[o]:(s=t[e[o]],r(s,"function")?p(s,n||t):s);return!1}function m(e,t,n,s,o){var a=e.charAt(0).toUpperCase()+e.slice(1),i=(e+" "+C.join(a+" ")+a).split(" ");return r(t,"string")||r(t,"undefined")?f(i,t,s,o):(i=(e+" "+P.join(a+" ")+a).split(" "),g(i,t,n))}function v(e,t,r){return m(e,n,n,t,r)}var h=[],y={_version:"3.5.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){h.push({name:e,fn:t,options:n})},addAsyncTest:function(e){h.push({name:null,fn:e})}},w=function(){};w.prototype=y,w=new w;var b=[],x=t.documentElement,S="svg"===x.nodeName.toLowerCase(),T="Moz O ms Webkit",C=y._config.usePrefixes?T.split(" "):[];y._cssomPrefixes=C;var E={elem:o("modernizr")};w._q.push(function(){delete E.elem});var k={style:E.elem.style};w._q.unshift(function(){delete k.style});var P=y._config.usePrefixes?T.toLowerCase().split(" "):[];y._domPrefixes=P,y.testAllProps=m,y.testAllProps=v,w.addTest("backgroundsize",v("backgroundSize","100%",!0)),w.addTest("bgpositionshorthand",function(){var e=o("a").style,t="right 10px bottom 10px";return e.cssText="background-position: "+t+";",e.backgroundPosition===t}),w.addTest("bgpositionxy",function(){return v("backgroundPositionX","3px",!0)&&v("backgroundPositionY","5px",!0)}),w.addTest("bgrepeatround",v("backgroundRepeat","round")),w.addTest("bgrepeatspace",v("backgroundRepeat","space")),w.addTest("bgsizecover",v("backgroundSize","cover")),w.addTest("borderradius",v("borderRadius","0px",!0)),w.addTest("cssanimations",v("animationName","a",!0));var _=y._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];y._prefixes=_,w.addTest("csscalc",function(){var e="width:",t=o("a");return t.style.cssText=e+_.join("calc(10px);"+e),!!t.style.length}),w.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&v("transform","scale(1)",!0)});var z=y.testStyles=i,R="CSS"in e&&"supports"in e.CSS,N="supportsCSS"in e;w.addTest("supports",R||N),w.addTest("csstransforms3d",function(){var e=!!v("perspective","1px",!0),t=w._config.usePrefixes;if(e&&(!t||"webkitPerspective"in x.style)){var n;w.supports?n="@supports (perspective: 1px)":(n="@media (transform-3d)",t&&(n+=",(-webkit-transform-3d)")),z("#modernizr{width:0;height:0}"+(n+="{#modernizr{width:7px;height:18px;margin:0;padding:0;border:0}}"),function(t){e=7===t.offsetWidth&&18===t.offsetHeight})}return e}),w.addTest("csstransitions",v("transition","all",!0)),w.addTest("flexboxtweener",v("flexAlign","end",!0)),function(){var e=navigator.userAgent,t=e.match(/w(eb)?osbrowser/gi),n=e.match(/windows phone/gi)&&e.match(/iemobile\/([0-9])+/gi)&&parseFloat(RegExp.$1)>=9;return t||n}()?w.addTest("fontface",!1):z('@font-face {font-family:"font";src:url("https://")}',function(e,n){var r=t.getElementById("smodernizr"),s=r.sheet||r.styleSheet,o=s?s.cssRules&&s.cssRules[0]?s.cssRules[0].cssText:s.cssText||"":"",a=/src/i.test(o)&&0===o.indexOf(n.split(" ")[0]);w.addTest("fontface",a)}),w.addTest("inlinesvg",function(){var e=o("div");return e.innerHTML="<svg/>","http://www.w3.org/2000/svg"==("undefined"!=typeof SVGRect&&e.firstChild&&e.firstChild.namespaceURI)}),w.addTest("localstorage",function(){var e="modernizr";try{return localStorage.setItem(e,e),localStorage.removeItem(e),!0}catch(e){return!1}}),w.addTest("multiplebgs",function(){var e=o("a").style;return e.cssText="background:url(https://),url(https://),red url(https://)",/(url\s*\(.*?){3}/.test(e.background)}),w.addTest("preserve3d",function(){var t,n,r=e.CSS,s=!1;return!!(r&&r.supports&&r.supports("(transform-style: preserve-3d)"))||(t=o("a"),n=o("a"),t.style.cssText="display: block; transform-style: preserve-3d; transform-origin: right; transform: rotateY(40deg);",n.style.cssText="display: block; width: 9px; height: 1px; background: #000; transform-origin: right; transform: rotateY(40deg);",t.appendChild(n),x.appendChild(t),s=n.getBoundingClientRect(),x.removeChild(t),s=s.width&&s.width<4)}),w.addTest("sessionstorage",function(){var e="modernizr";try{return sessionStorage.setItem(e,e),sessionStorage.removeItem(e),!0}catch(e){return!1}});var j={}.toString;w.addTest("smil",function(){return!!t.createElementNS&&/SVGAnimate/.test(j.call(t.createElementNS("http://www.w3.org/2000/svg","animate")))}),w.addTest("svgclippaths",function(){return!!t.createElementNS&&/SVGClipPath/.test(j.call(t.createElementNS("http://www.w3.org/2000/svg","clipPath")))}),w.addTest("svgfilters",function(){var t=!1;try{t="SVGFEColorMatrixElement"in e&&2==SVGFEColorMatrixElement.SVG_FECOLORMATRIX_TYPE_SATURATE}catch(e){}return t}),w.addTest("svgforeignobject",function(){return!!t.createElementNS&&/SVGForeignObject/.test(j.call(t.createElementNS("http://www.w3.org/2000/svg","foreignObject")))}),w.addTest("canvas",function(){var e=o("canvas");return!(!e.getContext||!e.getContext("2d"))});var A=o("canvas");w.addTest("todataurljpeg",function(){return!!w.canvas&&0===A.toDataURL("image/jpeg").indexOf("data:image/jpeg")}),w.addTest("todataurlpng",function(){return!!w.canvas&&0===A.toDataURL("image/png").indexOf("data:image/png")}),w.addTest("todataurlwebp",function(){var e=!1;try{e=!!w.canvas&&0===A.toDataURL("image/webp").indexOf("data:image/webp")}catch(e){}return e}),function(){var e,t,n,s,o,a,i;for(var d in h)if(h.hasOwnProperty(d)){if(e=[],(t=h[d]).name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(s=r(t.fn,"function")?t.fn():t.fn,o=0;o<e.length;o++)a=e[o],1===(i=a.split(".")).length?w[i[0]]=s:(!w[i[0]]||w[i[0]]instanceof Boolean||(w[i[0]]=new Boolean(w[i[0]])),w[i[0]][i[1]]=s),b.push((s?"":"no-")+i.join("-"))}}(),function(e){var t=x.className,n=w._config.classPrefix||"";if(S&&(t=t.baseVal),w._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}w._config.enableClasses&&(t+=" "+n+e.join(" "+n),S?x.className.baseVal=t:x.className=t)}(b),delete y.addTest,delete y.addAsyncTest;for(var O=0;O<w._q.length;O++)w._q[O]();e.Modernizr=w}(window,document);