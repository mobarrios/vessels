<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/" lang="es">
    <head>
        <link rel="preconnect" href="https://d2r9epyceweg5n.cloudfront.net" />
        <link rel="dns-prefetch" href="https://d2r9epyceweg5n.cloudfront.net" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VwYDWFBADwoCVFBQ",licenseKey:"266b2626e3",applicationID:"792012"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var i,o=t("ee"),a=t(24),c={};try{i=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,i.indexOf("dev")!==-1&&(c.dev=!0),i.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&o.on("internal-error",function(t){r(t.stack)}),c.dev&&o.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,c){try{p?p-=1:i(c||new UncaughtException(t,e,n),!0)}catch(f){try{o("ierr",[f,s.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function i(t,e){var n=e?null:s.now();o("err",[t,n])}var o=t("handle"),a=t(25),c=t("ee"),s=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(9),t(8),"addEventListener"in window&&t(5),s.xhrWrappable&&t(10),d=!0)}c.on("fn-start",function(t,e,n){d&&(p+=1)}),c.on("fn-err",function(t,e,n){d&&!n[l]&&(f(n,l,function(){return!0}),this.thrown=!0,i(n))}),c.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),c.on("internal-error",function(t){o("ierr",[t,s.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var i=t("ee"),o=t("handle"),a=t(9),c=t(8),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",g="pushState",y=t("loader");y.features.stn=!0,t(7),"addEventListener"in window&&t(5);var x=NREUM.o.EV;i.on(m,function(t,e){var n=t[0];n instanceof x&&(this.bstStart=y.now())}),i.on(w,function(t,e){var n=t[0];n instanceof x&&o("bst",[n,e,this.bstStart,y.now()])}),a.on(m,function(t,e,n){this.bstStart=y.now(),this.bstType=n}),a.on(w,function(t,e){o(v,[e,this.bstStart,y.now(),this.bstType])}),c.on(m,function(){this.bstStart=y.now()}),c.on(w,function(t,e){o(v,[e,this.bstStart,y.now(),"requestAnimationFrame"])}),i.on(g+p,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),i.on(g+h,function(t){o("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){o(d,[window.performance.getEntriesByType(l)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){o(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&i(e)}function i(t){c.inPlace(t,[u,d],"-",o)}function o(t,e){return t[1]}var a=t("ee").get("events"),c=t("wrap-function")(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(i(window),i(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=o(arguments),e={};i.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var c=r.apply(this,t);return i.emit(n+"start",[t,a],c),c.then(function(t){return i.emit(n+"end",[null,t],c),t},function(t){throw i.emit(n+"end",[t],c),t})})}var i=t("ee").get("fetch"),o=t(25),a=t(24);e.exports=i;var c=window,s="fetch-",f=s+"body-",u=["arrayBuffer","blob","json","text","formData"],d=c.Request,l=c.Response,p=c.fetch,h="prototype",m="nr@context";d&&l&&p&&(a(u,function(t,e){r(d[h],e,f),r(l[h],e,f)}),r(c,"fetch",s),i.on(s+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),i.emit(s+"done",[null,e],n)}else i.emit(s+"done",[t],n)}))},{}],7:[function(t,e,n){var r=t("ee").get("history"),i=t("wrap-function")(r);e.exports=r;var o=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;o&&o.pushState&&o.replaceState&&(a=o),i.inPlace(a,["pushState","replaceState"],"-")},{}],8:[function(t,e,n){var r=t("ee").get("raf"),i=t("wrap-function")(r),o="equestAnimationFrame";e.exports=r,i.inPlace(window,["r"+o,"mozR"+o,"webkitR"+o,"msR"+o],"raf-"),r.on("raf-start",function(t){t[0]=i(t[0],"fn-")})},{}],9:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function i(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var o=t("ee").get("timer"),a=t("wrap-function")(o),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=o,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),o.on(s+u,r),o.on(c+u,i)},{}],10:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function i(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",c)}function o(t){y.push(t),h&&(b?b.then(a):w?w(a):(E=-E,R.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];e.exports=u;var x=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(v,i,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(p,x),x.prototype=p.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),o(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!w&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],11:[function(t,e,n){function r(t){if(!c(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,f=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=p.generateSpanId(),m=p.generateTraceId(),w=Date.now(),v={spanId:h,traceId:m,timestamp:w};return(t.sameOrigin||s(t)&&l())&&(v.traceContextParentHeader=i(h,m),v.traceContextStateHeader=o(h,w,n,r,f)),(t.sameOrigin&&!u()||!t.sameOrigin&&s(t)&&d())&&(v.newrelicHeader=a(h,m,w,n,r,f)),v}function i(t,e){return"00-"+e+"-"+t+"-01"}function o(t,e,n,r,i){var o=0,a="",c=1,s="",f="";return i+"@nr="+o+"-"+c+"-"+n+"-"+r+"-"+t+"-"+a+"-"+s+"-"+f+"-"+e}function a(t,e,n,r,i,o){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var c={v:[0,1],d:{ty:"Browser",ac:r,ap:i,id:t,tr:e,ti:n}};return o&&r!==o&&(c.d.tk=o),btoa(JSON.stringify(c))}function c(t){return f()&&s(t)}function s(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var i=h(n.allowed_origins[r]);if(t.hostname===i.hostname&&t.protocol===i.protocol&&t.port===i.port){e=!0;break}}return e}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function l(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var p=t(21),h=t(13);e.exports={generateTracePayload:r,shouldGenerateTrace:c}},{}],12:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<l;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):o(this,t),n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime]))}}function i(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=s(e),t.sameOrigin=t.parsedOrigin.sameOrigin}function o(t,e){t.params.status=e.status;var n=w(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(13),f=t(11).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(17),m=t(16),w=t(14),v=window.XMLHttpRequest;a.features.xhr=!0,t(10),t(6),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,t.addEventListener("load",function(n){o(e,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],i=this;if(n&&r){var o=m(r);o&&(n.txSize=o)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||i.loadCaptureCalled||(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof e.onload))&&i.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var c=0;c<l;c++)e.addEventListener(d[c],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof v&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof v&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof v&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url?n=t[0].url:window.URL&&t[0]&&t[0]instanceof URL&&(n=t[0].href),n&&(this.parsedOrigin=s(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var i=f(this.parsedOrigin);if(i&&(i.newrelicHeader||i.traceContextParentHeader))if("string"==typeof t[0]||window.URL&&t[0]&&t[0]instanceof URL){var o={};for(var a in r)o[a]=r[a];o.headers=new Headers(r.headers||{}),e(o.headers,i)&&(this.dt=i),t.length>1?t[1]=o:t.push(o)}else t[0]&&t[0].headers&&e(t[0].headers,i)&&(this.dt=i)})}},{}],13:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,i={};e.href=t,i.port=e.port;var o=e.href.split("://");!i.port&&o[1]&&(i.port=o[1].split("/")[0].split("@").pop().split(":")[1]),i.port&&"0"!==i.port||(i.port="https"===o[0]?"443":"80"),i.hostname=e.hostname||n.hostname,i.pathname=e.pathname,i.protocol=o[0],"/"!==i.pathname.charAt(0)&&(i.pathname="/"+i.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,c=e.hostname===document.domain&&e.port===n.port;return i.sameOrigin=a&&(!e.hostname||c),"/"===i.pathname&&(r[t]=i),i}},{}],14:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?i(t.response):"text"===n||""===n||void 0===n?i(t.responseText):void 0}var i=t(16);e.exports=r},{}],15:[function(t,e,n){function r(){}function i(t,e,n){return function(){return o(t,[f.now()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var o=t("handle"),a=t(24),c=t(25),s=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,e){u[e]=i(l+e,!0,"api")}),u.addPageAction=i(l+"addPageAction",!0),u.setCurrentRouteName=i(l+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(p+"tracer",[f.now(),t,n],r),function(){if(s.emit((i?"":"no-")+"fn-start",[f.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw s.emit("fn-err",[arguments,this,t],n),t}finally{s.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=i(p+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),o("err",[t,f.now(),!1,e])}},{}],16:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],17:[function(t,e,n){var r=0,i=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);i&&(r=+i[1]),e.exports=r},{}],18:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=t(26);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],19:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],20:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?d("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&d("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||d("cls",[t])})}function a(t){if(t instanceof h&&!w){var e=Math.round(t.timeStamp),n={type:t.type};e<=l.now()?n.fid=l.now()-e:e>l.offset&&e<=Date.now()?(e-=l.offset,n.fid=l.now()-e):e=l.now(),w=!0,d("timing",["fi",e,n])}}function c(t){d("pageHide",[l.now(),t])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var s,f,u,d=t("handle"),l=t("loader"),p=t(23),h=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(m){}f=new PerformanceObserver(i);try{f.observe({entryTypes:["largest-contentful-paint"]})}catch(m){}u=new PerformanceObserver(o);try{u.observe({type:"layout-shift",buffered:!0})}catch(m){}}if("addEventListener"in document){var w=!1,v=["click","keydown","mousedown","pointerdown","touchstart"];v.forEach(function(t){document.addEventListener(t,a,!1)})}p(c)}},{}],21:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var i,o="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",c=0;c<o.length;c++)i=o[c],"x"===i?a+=t().toString(16):"y"===i?(i=3&t()|8,a+=i.toString(16)):a+=i;return a}function i(){return a(16)}function o(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,i=window.crypto||window.msCrypto;i&&i.getRandomValues&&Uint8Array&&(n=i.getRandomValues(new Uint8Array(31)));for(var o=[],a=0;a<t;a++)o.push(e().toString(16));return o.join("")}e.exports={generateUuid:r,generateSpanId:i,generateTraceId:o}},{}],22:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,s=c.match(a);s&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=s[1])}e.exports={agent:i,version:o,match:r}},{}],23:[function(t,e,n){function r(t){function e(){t(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,e,!1)}e.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],24:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],25:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],26:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?f(t,s,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!p.aborted||o){t&&a&&t(n,r,i);for(var c=e(i),s=m(n),f=s.length,u=0;u<f;u++)s[u].apply(c,r);var l=d[y[n]];return l&&l.push([x,n,r,c]),c}}function o(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function w(t){return l[t]=l[t]||i(n)}function v(t,e){u(t,function(t,n){e=e||"feature",y[n]=e,e in d||(d[e]=[])})}var g={},y={},x={on:o,addEventListener:o,removeEventListener:h,emit:n,get:w,listeners:m,context:e,buffer:v,abort:c,aborted:!1};return x}function o(t){return f(t,s,a)}function a(){return new r}function c(){(d.api||d.feature)&&(p.aborted=!0,d=p.backlog={})}var s="nr@context",f=t("gos"),u=t(24),d={},l={},p=e.exports=i();e.exports.getOrSetContext=o,p.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!E++){var t=b.info=NREUM.info,e=p.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();s(y,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+b.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===p.readyState&&o()}function o(){c("mark",["domContent",a()+b.offset],null,"api")}var a=t(18),c=t("handle"),s=t(24),f=t("ee"),u=t(22),d=t(19),l=window,p=l.document,h="addEventListener",m="attachEvent",w=l.XMLHttpRequest,v=w&&w.prototype;if(d(l.location)){NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:w,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var g=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1208.min.js"},x=w&&v&&v[h]&&!/CriOS/.test(navigator.userAgent),b=e.exports={offset:a.getLastTimestamp(),now:a,origin:g,features:{},xhrWrappable:x,userAgent:u};t(15),t(20),p[h]?(p[h]("DOMContentLoaded",o,!1),l[h]("load",r,!1)):(p[m]("onreadystatechange",i),l[m]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,s,f){function nrWrapper(){var o,a,u,l;try{a=this,o=d(arguments),u="function"==typeof r?r(o,a):r||{}}catch(p){i([p,"",[o,a,s],u],t)}c(n+"start",[o,a,s],u,f);try{return l=e.apply(a,o)}catch(h){throw c(n+"err",[o,a,h],u,f),h}finally{c(n+"end",[o,a,l],u,f)}}return a(e)?e:(n||(n=""),nrWrapper[l]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var c,s,f,u="-"===r.charAt(0);for(f=0;f<e.length;f++)s=e[f],c=t[s],a(c)||(t[s]=n(c,u?s+r:r,i,s,o))}function c(n,r,o,a){if(!h||e){var c=h;h=!0;try{t.emit(n,r,o,e,a)}catch(s){i([s,n,r,o],t)}h=c}}return t||(t=u),n.inPlace=r,n.flag=l,n}function i(t,e){e||(e=u);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)p.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[l])}function c(t,e){var n=e(t);return n[l]=t,o(t,n,u),n}function s(t,e,n){var r=t[e];t[e]=c(r,n)}function f(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var u=t("ee"),d=t(25),l="nr@original",p=Object.prototype.hasOwnProperty,h=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=s,e.exports.argsToArray=f},{}]},{},["loader",2,12,4,3]);</script>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Contacto - Swop Tech</title>
        <meta name="description" content="" />
                
                
                <meta property="og:site_name" content="Swop Tech" />

                
        
        
        <style>
            
            
                
                
                @import url('//fonts.googleapis.com/css?family=Raleway:300,400,700|Open+Sans:300,400,700&display=swap');

            

            @charset "UTF-8":

/*============================================================================
critical-css.tpl

    -This file contains all the theme critical styles wich will be loaded inline before the rest of the site
    -Rest of styling can be found in:
    	--static/css/style-async.css.tpl --> For non critical styles witch will be loaded asynchronously
      --static/css/style-colors.scss.tpl --> For color and font styles related to config/settings.txt

==============================================================================*/

/*============================================================================
  Table of Contents

  #External CSS libraries and plugins
    // Bootstrap Grid v4.1.3
    // Swiper 4.4.2
    // Font Awesome 5.5.0
  #Critical path helpers
  #Components
    // Wrappers
    // Placeholders and preloaders
    // Buttons
    // Links
    // Titles and breadcrumbs
    // Texts
    // Icons
    // Sliders
    // Lists
    // Boxes
    // Notifications
    // Images
    // Forms
    // Video 
  #Header and nav
    // Ad Bar
    // Logo
    // Cart widget and search
  #Home page
    // Welcome message
  #Banners
    // Home banners
    // Informative banners
  #Product grid
    // Category header
    // Grid item
    // Labels
  #Product detail
  	// Image
    // Form and info
  #Cart detail
    // Shipping Calculator
    // Table
    // Totals
  #Contact page
    // Data contact
  #Media queries
    // Min width 768px
      //// Banners
      //// Home
      //// Cart Page
  
  #Helper classes
    // Margin and padding
    // Text
    // Align
    // Position
    // Image
    // Visibility
    // Float
    // Width
    // Opacity

==============================================================================*/

/*============================================================================
  #External CSS libraries and plugins
==============================================================================*/
  
{# /* // Bootstrap Grid v4.1.3 */ #}

@-ms-viewport{width:device-width}html{box-sizing:border-box;-ms-overflow-style:scrollbar}*,::after,::before{box-sizing:inherit}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.no-gutters{margin-right:0;margin-left:0}.no-gutters>.col,.no-gutters>[class*=col-]{padding-right:0;padding-left:0}.col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-first{-ms-flex-order:-1;order:-1}.order-last{-ms-flex-order:13;order:13}.order-0{-ms-flex-order:0;order:0}.order-1{-ms-flex-order:1;order:1}.order-2{-ms-flex-order:2;order:2}.order-3{-ms-flex-order:3;order:3}.order-4{-ms-flex-order:4;order:4}.order-5{-ms-flex-order:5;order:5}.order-6{-ms-flex-order:6;order:6}.order-7{-ms-flex-order:7;order:7}.order-8{-ms-flex-order:8;order:8}.order-9{-ms-flex-order:9;order:9}.order-10{-ms-flex-order:10;order:10}.order-11{-ms-flex-order:11;order:11}.order-12{-ms-flex-order:12;order:12}.offset-1{margin-left:8.333333%}.offset-2{margin-left:16.666667%}.offset-3{margin-left:25%}.offset-4{margin-left:33.333333%}.offset-5{margin-left:41.666667%}.offset-6{margin-left:50%}.offset-7{margin-left:58.333333%}.offset-8{margin-left:66.666667%}.offset-9{margin-left:75%}.offset-10{margin-left:83.333333%}.offset-11{margin-left:91.666667%}@media (min-width:576px){.col-sm{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-sm-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-sm-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-sm-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-sm-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-sm-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-sm-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-sm-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-sm-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-sm-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-sm-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-sm-first{-ms-flex-order:-1;order:-1}.order-sm-last{-ms-flex-order:13;order:13}.order-sm-0{-ms-flex-order:0;order:0}.order-sm-1{-ms-flex-order:1;order:1}.order-sm-2{-ms-flex-order:2;order:2}.order-sm-3{-ms-flex-order:3;order:3}.order-sm-4{-ms-flex-order:4;order:4}.order-sm-5{-ms-flex-order:5;order:5}.order-sm-6{-ms-flex-order:6;order:6}.order-sm-7{-ms-flex-order:7;order:7}.order-sm-8{-ms-flex-order:8;order:8}.order-sm-9{-ms-flex-order:9;order:9}.order-sm-10{-ms-flex-order:10;order:10}.order-sm-11{-ms-flex-order:11;order:11}.order-sm-12{-ms-flex-order:12;order:12}.offset-sm-0{margin-left:0}.offset-sm-1{margin-left:8.333333%}.offset-sm-2{margin-left:16.666667%}.offset-sm-3{margin-left:25%}.offset-sm-4{margin-left:33.333333%}.offset-sm-5{margin-left:41.666667%}.offset-sm-6{margin-left:50%}.offset-sm-7{margin-left:58.333333%}.offset-sm-8{margin-left:66.666667%}.offset-sm-9{margin-left:75%}.offset-sm-10{margin-left:83.333333%}.offset-sm-11{margin-left:91.666667%}}@media (min-width:768px){.col-md{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-md-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-md-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-md-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-md-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-md-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-md-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-md-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-md-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-md-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-md-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-md-first{-ms-flex-order:-1;order:-1}.order-md-last{-ms-flex-order:13;order:13}.order-md-0{-ms-flex-order:0;order:0}.order-md-1{-ms-flex-order:1;order:1}.order-md-2{-ms-flex-order:2;order:2}.order-md-3{-ms-flex-order:3;order:3}.order-md-4{-ms-flex-order:4;order:4}.order-md-5{-ms-flex-order:5;order:5}.order-md-6{-ms-flex-order:6;order:6}.order-md-7{-ms-flex-order:7;order:7}.order-md-8{-ms-flex-order:8;order:8}.order-md-9{-ms-flex-order:9;order:9}.order-md-10{-ms-flex-order:10;order:10}.order-md-11{-ms-flex-order:11;order:11}.order-md-12{-ms-flex-order:12;order:12}.offset-md-0{margin-left:0}.offset-md-1{margin-left:8.333333%}.offset-md-2{margin-left:16.666667%}.offset-md-3{margin-left:25%}.offset-md-4{margin-left:33.333333%}.offset-md-5{margin-left:41.666667%}.offset-md-6{margin-left:50%}.offset-md-7{margin-left:58.333333%}.offset-md-8{margin-left:66.666667%}.offset-md-9{margin-left:75%}.offset-md-10{margin-left:83.333333%}.offset-md-11{margin-left:91.666667%}}@media (min-width:992px){.col-lg{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-lg-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-lg-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-lg-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-lg-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-lg-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-lg-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-lg-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-lg-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-lg-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-lg-first{-ms-flex-order:-1;order:-1}.order-lg-last{-ms-flex-order:13;order:13}.order-lg-0{-ms-flex-order:0;order:0}.order-lg-1{-ms-flex-order:1;order:1}.order-lg-2{-ms-flex-order:2;order:2}.order-lg-3{-ms-flex-order:3;order:3}.order-lg-4{-ms-flex-order:4;order:4}.order-lg-5{-ms-flex-order:5;order:5}.order-lg-6{-ms-flex-order:6;order:6}.order-lg-7{-ms-flex-order:7;order:7}.order-lg-8{-ms-flex-order:8;order:8}.order-lg-9{-ms-flex-order:9;order:9}.order-lg-10{-ms-flex-order:10;order:10}.order-lg-11{-ms-flex-order:11;order:11}.order-lg-12{-ms-flex-order:12;order:12}.offset-lg-0{margin-left:0}.offset-lg-1{margin-left:8.333333%}.offset-lg-2{margin-left:16.666667%}.offset-lg-3{margin-left:25%}.offset-lg-4{margin-left:33.333333%}.offset-lg-5{margin-left:41.666667%}.offset-lg-6{margin-left:50%}.offset-lg-7{margin-left:58.333333%}.offset-lg-8{margin-left:66.666667%}.offset-lg-9{margin-left:75%}.offset-lg-10{margin-left:83.333333%}.offset-lg-11{margin-left:91.666667%}}@media (min-width:1200px){.col-xl{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-xl-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-xl-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-xl-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-xl-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-xl-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-xl-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-xl-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-xl-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-xl-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-xl-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-xl-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-xl-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-xl-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-xl-first{-ms-flex-order:-1;order:-1}.order-xl-last{-ms-flex-order:13;order:13}.order-xl-0{-ms-flex-order:0;order:0}.order-xl-1{-ms-flex-order:1;order:1}.order-xl-2{-ms-flex-order:2;order:2}.order-xl-3{-ms-flex-order:3;order:3}.order-xl-4{-ms-flex-order:4;order:4}.order-xl-5{-ms-flex-order:5;order:5}.order-xl-6{-ms-flex-order:6;order:6}.order-xl-7{-ms-flex-order:7;order:7}.order-xl-8{-ms-flex-order:8;order:8}.order-xl-9{-ms-flex-order:9;order:9}.order-xl-10{-ms-flex-order:10;order:10}.order-xl-11{-ms-flex-order:11;order:11}.order-xl-12{-ms-flex-order:12;order:12}.offset-xl-0{margin-left:0}.offset-xl-1{margin-left:8.333333%}.offset-xl-2{margin-left:16.666667%}.offset-xl-3{margin-left:25%}.offset-xl-4{margin-left:33.333333%}.offset-xl-5{margin-left:41.666667%}.offset-xl-6{margin-left:50%}.offset-xl-7{margin-left:58.333333%}.offset-xl-8{margin-left:66.666667%}.offset-xl-9{margin-left:75%}.offset-xl-10{margin-left:83.333333%}.offset-xl-11{margin-left:91.666667%}}.d-none{display:none!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-table{display:table!important}.d-table-row{display:table-row!important}.d-table-cell{display:table-cell!important}.d-flex{display:-ms-flexbox!important;display:flex!important}.d-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}@media (min-width:576px){.d-sm-none{display:none!important}.d-sm-inline{display:inline!important}.d-sm-inline-block{display:inline-block!important}.d-sm-block{display:block!important}.d-sm-table{display:table!important}.d-sm-table-row{display:table-row!important}.d-sm-table-cell{display:table-cell!important}.d-sm-flex{display:-ms-flexbox!important;display:flex!important}.d-sm-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:768px){.d-md-none{display:none!important}.d-md-inline{display:inline!important}.d-md-inline-block{display:inline-block!important}.d-md-block{display:block!important}.d-md-table{display:table!important}.d-md-table-row{display:table-row!important}.d-md-table-cell{display:table-cell!important}.d-md-flex{display:-ms-flexbox!important;display:flex!important}.d-md-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:992px){.d-lg-none{display:none!important}.d-lg-inline{display:inline!important}.d-lg-inline-block{display:inline-block!important}.d-lg-block{display:block!important}.d-lg-table{display:table!important}.d-lg-table-row{display:table-row!important}.d-lg-table-cell{display:table-cell!important}.d-lg-flex{display:-ms-flexbox!important;display:flex!important}.d-lg-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:1200px){.d-xl-none{display:none!important}.d-xl-inline{display:inline!important}.d-xl-inline-block{display:inline-block!important}.d-xl-block{display:block!important}.d-xl-table{display:table!important}.d-xl-table-row{display:table-row!important}.d-xl-table-cell{display:table-cell!important}.d-xl-flex{display:-ms-flexbox!important;display:flex!important}.d-xl-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media print{.d-print-none{display:none!important}.d-print-inline{display:inline!important}.d-print-inline-block{display:inline-block!important}.d-print-block{display:block!important}.d-print-table{display:table!important}.d-print-table-row{display:table-row!important}.d-print-table-cell{display:table-cell!important}.d-print-flex{display:-ms-flexbox!important;display:flex!important}.d-print-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}.flex-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-center{-ms-flex-align:center!important;align-items:center!important}.align-items-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}@media (min-width:576px){.flex-sm-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-sm-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-sm-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-sm-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-sm-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-sm-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-sm-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-sm-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-sm-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-sm-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-sm-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-sm-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-sm-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-sm-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-sm-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-sm-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-sm-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-sm-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-sm-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-sm-center{-ms-flex-align:center!important;align-items:center!important}.align-items-sm-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-sm-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-sm-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-sm-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-sm-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-sm-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-sm-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-sm-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-sm-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-sm-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-sm-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-sm-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-sm-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-sm-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:768px){.flex-md-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-md-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-md-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-md-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-md-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-md-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-md-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-md-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-md-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-md-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-md-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-md-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-md-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-md-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-md-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-md-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-md-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-md-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-md-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-md-center{-ms-flex-align:center!important;align-items:center!important}.align-items-md-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-md-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-md-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-md-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-md-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-md-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-md-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-md-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-md-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-md-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-md-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-md-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-md-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-md-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:992px){.flex-lg-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-lg-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-lg-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-lg-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-lg-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-lg-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-lg-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-lg-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-lg-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-lg-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-lg-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-lg-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-lg-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-lg-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-lg-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-lg-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-lg-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-lg-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-lg-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-lg-center{-ms-flex-align:center!important;align-items:center!important}.align-items-lg-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-lg-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-lg-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-lg-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-lg-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-lg-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-lg-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-lg-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-lg-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-lg-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-lg-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-lg-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-lg-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-lg-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:1200px){.flex-xl-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-xl-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-xl-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-xl-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-xl-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-xl-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-xl-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-xl-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-xl-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-xl-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-xl-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-xl-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-xl-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-xl-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-xl-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-xl-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-xl-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-xl-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-xl-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-xl-center{-ms-flex-align:center!important;align-items:center!important}.align-items-xl-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-xl-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-xl-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-xl-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-xl-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-xl-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-xl-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-xl-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-xl-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-xl-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-xl-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-xl-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-xl-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-xl-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}

{# /* // Swiper 4.4.2 */ #}

.swiper-container{width:100%;margin:0 auto;position:relative;overflow:hidden;list-style:none;padding:0;z-index:1}.swiper-container-no-flexbox .swiper-slide{float:left}.swiper-container-vertical>.swiper-wrapper{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-transition-property:-webkit-transform;transition-property:-webkit-transform;-o-transition-property:transform;transition-property:transform;transition-property:transform,-webkit-transform}.swiper-container-android .swiper-slide,.swiper-wrapper{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.swiper-container-multirow>.swiper-wrapper{-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}.swiper-container-free-mode>.swiper-wrapper{-webkit-transition-timing-function:ease-out;-o-transition-timing-function:ease-out;transition-timing-function:ease-out;margin:0 auto}.swiper-slide{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;width:100%;height:100%;position:relative;-webkit-transition-property:-webkit-transform;transition-property:-webkit-transform;-o-transition-property:transform;transition-property:transform;transition-property:transform,-webkit-transform}.swiper-slide-invisible-blank{visibility:hidden}.swiper-container-autoheight,.swiper-container-autoheight .swiper-slide{height:auto}.swiper-container-autoheight .swiper-wrapper{-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;-webkit-transition-property:height,-webkit-transform;transition-property:height,-webkit-transform;-o-transition-property:transform,height;transition-property:transform,height;transition-property:transform,height,-webkit-transform}.swiper-container-3d{-webkit-perspective:1200px;perspective:1200px}.swiper-container-3d .swiper-cube-shadow,.swiper-container-3d .swiper-slide,.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top,.swiper-container-3d .swiper-wrapper{-webkit-transform-style:preserve-3d;transform-style:preserve-3d}.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top{position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:none;z-index:10}.swiper-container-3d .swiper-slide-shadow-left{background-image:-webkit-gradient(linear,right top,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to left,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-right{background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to right,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-top{background-image:-webkit-gradient(linear,left bottom,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to top,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-bottom{background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to bottom,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-wp8-horizontal,.swiper-container-wp8-horizontal>.swiper-wrapper{-ms-touch-action:pan-y;touch-action:pan-y}.swiper-container-wp8-vertical,.swiper-container-wp8-vertical>.swiper-wrapper{-ms-touch-action:pan-x;touch-action:pan-x}.swiper-button-next,.swiper-button-prev{position:absolute;top:50%;z-index:10;width:30px;height:50px;margin-top:-25px;line-height:50px;color:#fff;text-align:center;cursor:pointer}.swiper-button-next.swiper-button-disabled,.swiper-button-prev.swiper-button-disabled{opacity:0;cursor:auto;visibility:hidden}.swiper-button-prev,.swiper-container-rtl .swiper-button-next{left:-30px;right:auto}.swiper-button-prev-inside{left:10px}.swiper-button-next,.swiper-container-rtl .swiper-button-prev{right:-30px;left:auto}.swiper-button-next-inside{right:10px}.swiper-button-lock{display:none}.swiper-pagination{position:absolute;text-align:center;-webkit-transition:.3s opacity;-o-transition:.3s opacity;transition:.3s opacity;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);z-index:10}.swiper-pagination.swiper-pagination-hidden{opacity:0}.swiper-container-horizontal>.swiper-pagination-bullets,.swiper-pagination-custom,.swiper-pagination-fraction{bottom:20px;left:0;width:100%}.swiper-pagination-bullets-dynamic{overflow:hidden;font-size:0}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{-webkit-transform:scale(.33);-ms-transform:scale(.33);transform:scale(.33);position:relative}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev{-webkit-transform:scale(.66);-ms-transform:scale(.66);transform:scale(.66)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev{-webkit-transform:scale(.33);-ms-transform:scale(.33);transform:scale(.33)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next{-webkit-transform:scale(.66);-ms-transform:scale(.66);transform:scale(.66)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next{-webkit-transform:scale(.33);-ms-transform:scale(.33);transform:scale(.33)}.swiper-pagination-bullet{width:18px;height:18px;display:inline-block;border-radius:100%;border:2px solid transparent;opacity:.2}button.swiper-pagination-bullet{border:none;margin:0;padding:0;-webkit-box-shadow:none;box-shadow:none;-webkit-appearance:none;-moz-appearance:none;appearance:none}.swiper-pagination-clickable .swiper-pagination-bullet{cursor:pointer}.swiper-pagination-bullet-active{border:2px solid #000;opacity:.8}.swiper-pagination-bullet:before{width:10px;height:10px;display:block;margin:2px;border-radius:100%;content:''}.swiper-container-vertical>.swiper-pagination-bullets{right:10px;top:50%;-webkit-transform:translate3d(0,-50%,0);transform:translate3d(0,-50%,0)}.swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet{margin:6px 0;display:block}.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic{top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);width:8px}.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{display:inline-block;-webkit-transition:.2s top,.2s -webkit-transform;transition:.2s top,.2s -webkit-transform;-o-transition:.2s transform,.2s top;transition:.2s transform,.2s top;transition:.2s transform,.2s top,.2s -webkit-transform}.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet{margin:0 4px}.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic{left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);white-space:nowrap}.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{-webkit-transition:.2s left,.2s -webkit-transform;transition:.2s left,.2s -webkit-transform;-o-transition:.2s transform,.2s left;transition:.2s transform,.2s left;transition:.2s transform,.2s left,.2s -webkit-transform}.swiper-container-horizontal.swiper-container-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{-webkit-transition:.2s right,.2s -webkit-transform;transition:.2s right,.2s -webkit-transform;-o-transition:.2s transform,.2s right;transition:.2s transform,.2s right;transition:.2s transform,.2s right,.2s -webkit-transform}.swiper-pagination-progressbar{background:rgba(0,0,0,.25);position:absolute}.swiper-pagination-progressbar .swiper-pagination-progressbar-fill{background:#007aff;position:absolute;left:0;top:0;width:100%;height:100%;-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);-webkit-transform-origin:left top;-ms-transform-origin:left top;transform-origin:left top}.swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill{-webkit-transform-origin:right top;-ms-transform-origin:right top;transform-origin:right top}.swiper-container-horizontal>.swiper-pagination-progressbar,.swiper-container-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite{width:100%;height:4px;left:0;top:0}.swiper-container-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite,.swiper-container-vertical>.swiper-pagination-progressbar{width:4px;height:100%;left:0;top:0}.swiper-pagination-white .swiper-pagination-bullet{border:2px solid transparent;opacity:.2}.swiper-pagination-white .swiper-pagination-bullet-active{border:2px solid #fff;opacity:.8}.swiper-pagination-white .swiper-pagination-bullet:before{background:#fff}.swiper-pagination-progressbar.swiper-pagination-white{background:rgba(255,255,255,.25)}.swiper-pagination-progressbar.swiper-pagination-white .swiper-pagination-progressbar-fill{background:#fff}.swiper-pagination-black .swiper-pagination-bullet:before{background:#000}.swiper-pagination-progressbar.swiper-pagination-black{background:rgba(0,0,0,.25)}.swiper-pagination-progressbar.swiper-pagination-black .swiper-pagination-progressbar-fill{background:#000}.swiper-pagination-lock{display:none}.swiper-lazy-preloader{width:42px;height:42px;position:absolute;left:50%;top:50%;margin-left:-21px;margin-top:-21px;z-index:10;-webkit-transform-origin:50%;-ms-transform-origin:50%;transform-origin:50%;-webkit-animation:swiper-preloader-spin 1s steps(12,end) infinite;animation:swiper-preloader-spin 1s steps(12,end) infinite}.swiper-lazy-preloader:after{display:block;content:'';width:100%;height:100%;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");background-position:50%;background-size:100%;background-repeat:no-repeat}.swiper-lazy-preloader-white:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E")}@-webkit-keyframes swiper-preloader-spin{100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes swiper-preloader-spin{100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.swiper-container-fade.swiper-container-free-mode .swiper-slide{-webkit-transition-timing-function:ease-out;-o-transition-timing-function:ease-out;transition-timing-function:ease-out}.swiper-container-fade .swiper-slide{pointer-events:none;-webkit-transition-property:opacity;-o-transition-property:opacity;transition-property:opacity}.swiper-container-fade .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-fade .swiper-slide-active,.swiper-container-fade .swiper-slide-active .swiper-slide-active{pointer-events:auto}

/*============================================================================
  #Critical path helpers
==============================================================================*/

/* Hidden general content until rest of styling loads */
.visible-when-content-ready{
	visibility: hidden!important;
}
.display-when-content-ready{
	display: none!important;
}

/*============================================================================
  #Components
==============================================================================*/

{# /* // Wrappers */ #}

body{
  position: relative;
  margin: 0;
  right: 0;
  font-size: 12px;
}

{# /* // Placeholders and preloaders */ #}

.placeholder-line-medium{
  height: 25px;
}
.placeholder-icon{
  position: absolute;
  top: 50%;
  left: 50%;
  width: 20%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
} 
.placeholder-full-height{
  position: relative;
  height: 100%;
}
.home-placeholder-icons{
  position: absolute;
  top: calc(50% - 75px);
}
.product-placeholder-container{
  position: relative;
  max-height: 900px;
  margin-bottom: 20px;
  overflow: hidden;
}
.placeholder-shine{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.5;
  -moz-animation: placeholder-shine 1.5s infinite;
  -webkit-animation: placeholder-shine 1.5s infinite;
  animation: placeholder-shine 1.5s infinite;
}
@keyframes placeholder-shine {
  0%{
    opacity: 0.1;
  }
  50% {
    opacity: 0.5;
  }
  100% {
    opacity: 0.1;
  }
}
.placeholder-fade{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.1;
  -moz-animation: placeholder-fade 1.5s infinite;
  -webkit-animation: placeholder-fade 1.5s infinite;
  animation: placeholder-fade 1.5s infinite;
}
@keyframes placeholder-fade {
  0%{
    opacity: 0.1;
  }
  50% {
    opacity: 0.2;
  }
  100% {
    opacity: 0.1;
  }
}
.blur-up {
  -webkit-filter: blur(4px);
  filter: blur(4px);
  -moz-filter: blur(4px);
  -ms-filter: blur(4px);
  -o-filter: blur(4px);
  transition: opacity .2s, -webkit-filter .2s;
}
.blur-up-big {
  -webkit-filter: blur(8px);
  filter: blur(8px);
  -moz-filter: blur(8px);
  -ms-filter: blur(8px);
  -o-filter: blur(8px);
  transition: opacity .2s, -webkit-filter .2s;
}
.blur-up.lazyloaded,
.blur-up-big.lazyloaded,
.blur-up-big.swiper-lazy-loaded {
  -webkit-filter: blur(0);
  filter: blur(0);
  -moz-filter: blur(0);
  -ms-filter: blur(0);
  -o-filter: blur(0);
}
.preloader-bg-img,
.product-slider-image.blur-up{
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  -webkit-filter: blur(4px);
  filter: blur(4px);
  -moz-filter: blur(4px);
  -ms-filter: blur(4px);
  -o-filter: blur(4px);
  transition: filter .2s, -webkit-filter .2s, opacity .2s;
  /* Avoid strange image behaviour on filters in IOS */
  -webkit-perspective: 1000;
  -webkit-backface-visibility: hidden;
}
.product-slider-image.blur-up{
  left: 50%;
  width: auto;
}
.swiper-lazy-loaded + .preloader-bg-img,
.lazyloaded + .blur-up{
  opacity: 0;
  -webkit-filter: blur(0);
  filter: blur(0);
  -moz-filter: blur(0);
  -ms-filter: blur(0);
  -o-filter: blur(0);
}

.lazyloaded + .blur-up {
  opacity: 0;
  pointer-events: none;
}

.lazyloaded + .placeholder-fade{
  display: none;
}

.fade-in {
  opacity: 0;
  transition: opacity .2s;
}
.fade-in.lazyloaded {
  opacity: 1;
}

{# /* // Animations*/ #}

.transition-up {
  opacity: 0;
}

{# /* // Buttons */ #}

.btn-whatsapp {
  position: fixed;
  bottom: 10px;
  right: 10px;
  z-index: 100;
  color: white;
  background-color:#4dc247;
  box-shadow: 2px 2px 6px rgba(0,0,0,0.4);
  border-radius: 50%;
}

.btn-whatsapp svg{
  width: 45px;
  height: 45px;
  padding: 10px;
  fill: white;
  vertical-align:middle;
}

{# /* // Links */ #}

a {
  text-decoration: none;
}


{# /* // Titles and breadcrumbs */ #}

h1,
.h1 {
  font-size: 43px;
  font-weight: 700;
}

h2,
.h2 {
  font-size: 34px;
  font-weight: 700;
}

h3,
.h3 {
  font-size: 20px;
  font-weight: 700;
}

h4,
.h4 {
  font-size: 18px;
  font-weight: 700;
}

h5,
.h5 {
  font-size: 16px;
  font-weight: 700;
}

h6,
.h6 {
  font-size: 14px;
  font-weight: 700;
}

.breadcrumbs {
  margin-top: 15px;
}

{# /* // Texts */ #}

.font-body{
  font-size: 14px;
}

.font-small{
  font-size: 12px;
}

.font-smallest{
  font-size: 10px!important;
}

p{
  margin-top: 0;
  line-height: 22px;
}

.user-content ul {
  padding-left: 20px;
}

.user-content ul li {
  margin-bottom: 10px;
  line-height: 22px;
}

.user-content table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 10px;
  line-height: 22px;
}

.price-compare {
  font-weight: 400;
  text-decoration: line-through;
  margin-right: 5px;
  opacity: 0.5;
}

{# /* // Icons */ #}

.icon-inline {
  display: inline-block;
  font-size: inherit;
  height: 1em;
  overflow: visible;
  vertical-align: -.125em;
}

.icon-xs {
  font-size: .75em;
}
.icon-md {
  font-size: .875em; 
}
.icon-lg {
  font-size: 1.33333em;
  line-height: .75em;
  
}
.icon-1x {
  font-size: 1.6em; 
  vertical-align: -.32em;  
}
.icon-2x {
  font-size: 2em;  
}
.icon-3x {
  font-size: 3em; 
}
.icon-4x {
  font-size: 4em;  
}
.icon-5x {
  font-size: 5em;  
}
.icon-6x {
  font-size: 6em;  
}
.icon-7x {
  font-size: 7em; 
}
.icon-8x {
  font-size: 8em;  
}
.icon-9x {
  font-size: 9em;  
}

.icon-inline.icon-lg{
  vertical-align: -.225em
}
.icon-inline.icon-w {
  text-align: center;
  width: 1.25em
}
.icon-inline.icon-w-1{
  width:.0625em
}
.icon-inline.icon-w-2{
  width:.125em
}
.icon-inline.icon-w-3{
  width:.1875em
}
.icon-inline.icon-w-4{
  width:.25em
}
.icon-inline.icon-w-5{
  width:.3125em
}
.icon-inline.icon-w-6{
  width:.375em
}
.icon-inline.icon-w-7{
  width:.4375em
}
.icon-inline.icon-w-8{
  width:.5em
}
.icon-inline.icon-w-9{
  width:.5625em
}
.icon-inline.icon-w-10{
  width:.625em
}
.icon-inline.icon-w-11{
  width:.6875em
}
.icon-inline.icon-w-12{
  width:.75em
}
.icon-inline.icon-w-13{
  width:.8125em
}
.icon-inline.icon-w-14{
  width:.875em
}
.icon-inline.icon-w-15{
  width:.9375em
}
.icon-inline.icon-w-16{
  width:1em
}
.icon-inline.icon-w-17{
  width:1.0625em
}
.icon-inline.icon-w-18{
  width:1.125em
}
.icon-inline.icon-w-19{
  width:1.1875em
}
.icon-inline.icon-w-20{
  width:1.25em
}
.icon-spin{
  -webkit-animation:icon-spin 2s infinite linear;
  animation:icon-spin 2s infinite linear
}
@-webkit-keyframes icon-spin {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0)
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg)
  }
}

@keyframes icon-spin {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0)
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg)
  }
}

.social-icon {
  display: inline-block;
  padding: 8px;
}

{# /* // Sliders */ #}

.section-full {
  height: calc(100vh - 180px);
}
.nube-slider-home {
  height: 100%;
}
.swiper-wrapper.disabled {
  transform: translate3d(0px, 0, 0) !important;
}
.slide-container{
  overflow: hidden;
}
.slider-slide {
  height: 100%;
  background-position: center;
  background-size: cover; 
  overflow: hidden;
}
.swiper-pagination-fraction{
  position: absolute;
  left: 50%;
  width: auto;
  padding: 5px;
  transform: translateX(-50%);
  font-size: 18px;
  background: #00000045;
  color: #ffffff85;
}

.swiper-text {
  position: absolute;
  width: 60%;
  top: 50%;
  bottom: auto;
  left: 0;
  padding: 0 25px;
  text-align: left;
  transform: translate(0%,-60%);
}
.swiper-description {
  width: 70%;
  line-height: 20px;
  letter-spacing: 0.5px;
}
.swiper-title {
  font-size: 18px;
  line-height: 20px;
  font-weight: 900;
}


.slider-container-full {
  position: relative;
  height: 60vh;
}
.slider-img-full {
  height: 100%;
  width: auto;
  position: absolute;
  left: 50%;
  transform: translate(-50%,0%);
}


.slider-container-full .swiper-text {
  width: 100%;
  transform: translate(0%,-70%);
}

.slider-container-full .swiper-title {
  font-size: 32px;
  line-height: 38px;
  font-weight: 900;
}


{# /* // Lists */ #}

.list {
  padding: 0;
  margin: 0;
  list-style-type: none;
}
.list .list-item{
  position: relative;
  margin-bottom: 20px;
  cursor: default;
}

.list-unstyled{
  padding: 0;
  margin: 0;
  list-style-type: none;
}

.list-inline li{
  display: inline-flex;
}

.list-item-box{
  display: flex;
  padding: 8px 0 12px 0;
  align-items: center;
  flex-wrap: wrap;
}

{# /* // Boxes */ #}

.box {
  margin: 0 0 15px 0;
  padding: 20px 0 10px 0;
}

{# /* // Notifications */ #}

.notification{
  padding: 10px;
  text-align: center;
}
.notification-left{
  display: flex;
  margin-top: 8px;
  padding: 0px;
  text-align: left;
}
.notification-floating {
  position: fixed;
  right: 0;
  width: 100%;
  z-index: 2000;
}
.notification-floating .notification {
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, .1), 0 2px 3px 0 rgba(0, 0, 0, .06);
}
.notification-close {
  padding: 0 5px;
}
.notification-fixed-bottom {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  z-index: 999;
}

{# /* // Images */ #}

/* Used for images that have a placeholder before it loads. The image container should have a padding-bottom inline with the result of (image height/ image width) * 100 */
.img-absolute {
  position: absolute;
  left: 0;
  width: 100%;
  height: auto;
  vertical-align: middle;
  text-indent: -9999px;
  z-index: 1;
}

.img-absolute-centered{
  left: 50%;
  transform: translateX(-50%)!important;
  -webkit-transform: translateX(-50%)!important;
  -ms-transform: translateX(-50%)!important;
}

.card-img{
  margin: 0 5px 5px 0;
  border: 1px solid #00000012;
}
.card-img-small{
  height: 25px;
}
.card-img-medium{
  height: 35px;
}
.card-img-big{
  height: 50px;
}

{# /* // Forms */ #}

.form-group {
  position: relative;
  width: 100%;
}
.form-group .form-select-icon{
  position: absolute;
  bottom: 15%;
  right: 10px;
  pointer-events: none;
}
.form-row {
  width: auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
  clear: both;
}

.form-row > .col,
.form-row > [class*=col-]{
  padding-right: 5px;
  padding-left: 5px;
}

.form-label {
  display: block;
  font-size: 10px;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 1px;
  opacity: .5;
}

.checkbox-text{
  margin-top: 6px;
  margin-left: 5px;
}

.g-recaptcha > div {
  margin: 0 auto;
}

.form-toggle-eye {
  position: absolute;
  top: 24px;
  right: 2px;
  display: inline-block;
  padding: 10px;
  background: none;
  border: 0;
}

{# /* // Video */ #}

.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive .embed-responsive-item,
.embed-responsive embed,
.embed-responsive iframe,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.video-player {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100%;
  height: 100%;    
  cursor: pointer;
}
.video-player-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 50px;
  height: 50px;
  margin: -25px 0 0 -25px;
  /* Important to overide btn primary class */
  padding: 0 16px!important;
  line-height: 50px!important;
  pointer-events: none;
}
.video-image {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  height: auto;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
/*============================================================================
  #Header and nav
==============================================================================*/

.head-main {
  position: relative;
  z-index: 1040;  
  -webkit-backface-visibility: hidden;
  -webkit-transform: scale(1);
}

.head-fix {
  position: sticky;
  top:0;
  width: 100%;
}

.nav-primary {
  padding: 0 0 10px;
}
.nav-primary .nav-list {
  padding: 10px 0 10px;
  list-style: none;
}
.nav-primary .nav-list .item-with-subitems {
  position: relative;
}
.nav-primary .nav-list .nav-list-link {
  display: block;
  padding: 12px 15px;
  font-size: 15px;
  font-weight: 700;
  border-bottom: 0;
}
.nav-primary .nav-list-arrow {
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 14px;
  cursor: pointer;
}
.nav-primary .nav-list .active .nav-list-arrow {
  transform: rotate(90deg);
}
.nav-primary .nav-list .list-subitems {
  padding: 0;
  list-style: none;
}
.nav-primary .nav-list .list-subitems .nav-list-link {
  padding: 8px 15px;
  font-weight: 400;
}
.nav-primary .nav-list .list-subitems .nav-list-link .nav-list-arrow {
  top: 10px;
  opacity: 0.6;
}

{# /* // Nav */ #}

.nav-desktop {
  width: 100%;
  display: inline-block;
  position: relative;
}

.nav-desktop-list {
  margin: 0;
  padding: 0 5px;
  list-style: none;
  font-size: 0;
  white-space: nowrap!important;
}
.nav-desktop-list::-webkit-scrollbar {
  height: 0;
}
.with-scroll {
  padding: 0 30px;
  overflow: scroll;
}

.nav-desktop-list > .nav-item {
  display: inline-block;
  font-size: 16px;
  white-space: normal;
}

.nav-desktop-list > .nav-item > .nav-list-link,
.nav-desktop-list > .nav-item > .nav-item-container > .nav-list-link {
  display: block;
  padding: 0 15px;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 1px;
  line-height: 44px;
}

.nav-categories-icon {
  height: 16px;
  right: 5px;
  top: 3px;
}

.desktop-dropdown {
  display: none;
  position: absolute;
  width: 100%; 
  top: 100%;
  left: 0;
  z-index: 9999;
  overflow-y: auto;
}

.nav-categories {
  overflow-x: scroll;
}
.nav-list-mobile-categories {
  margin: 4px 0;
  padding: 0 15px;
  white-space: nowrap!important;
}

.nav-tabs-mobile-item {
  font-size: 13px;
  padding: 12px 10px;
}

{# /* // Logo */ #}

.logo-text-container {
  max-width: 450px;
  padding: 5px;
}

.logo-img-container {
  max-width: 450px;
}
.logo-img{
  margin: 15px 0;
  vertical-align: middle;
  max-width: 40vw;
  max-height: 80px;
}

{# /* // Cart widget and search */ #}

.utilities-item {
  display: inline-block;
  padding: 10px 22px;
  font-size: 11px;
}    

.cart-widget-amount,
.cart-widget-total {
  font-size: 13px;
}
    
.search-input {
  height: 48px;
}

.search-input-submit {
  position: absolute;
  top: 5px;
  right: 0;
  background: none;
  border: 0;
}
   

/*============================================================================
  #Home Page
==============================================================================*/

{# /* // Home sidebar categories */ #}

.home-sidebar-categories {
  height: 100%;
  max-height: 100%;
  overflow-y: auto;
  overflow-x: hidden;
}
.home-sidebar-categories::-webkit-scrollbar {
  width: 10px;
}
.home-sidebar-categories-title {
  margin: 0;
  padding: 25px 15px 15px 15px;
  font-size: 12px;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 1px;
}

{# /* // Welcome message */ #}

.section-welcome-home {
  padding: 70px 0;
  text-align: center;
}


/*============================================================================
  #Banners
==============================================================================*/

{# /* // Home banners */ #}

.textbanner {
  position: relative;
  margin-bottom: 20px;
  overflow: hidden;
}
.textbanner-link {
  display: block;
  width: 100%;
  height: 100%;
}
.textbanner-link:hover,
.textbanner-link:focus {
  opacity: 1;
}
.textbanner-image {
  position: relative;
  padding-top: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.textbanner-image-background {
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.textbanner-image-opacity {
  opacity: 0.7;
}
.textbanner-image-horizontal {
  padding-top: 38%;
}

.textbanner-image-horizontal-plus {
  padding-top: 65%;
}

.textbanner-text {  
  position: relative;
  padding: 30px 20px 20px 20px;
}
.textbanner-text.over-image {
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: 9;
  width: 50%;
  background: none;
  border: 0;
}
.textbanner-text.over-image-center {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 9;
  width: 100%;
  background: none;
  border: 0;
  transform: translate(-50%, -50%);
}
.textbanner-paragraph {
  display: -webkit-box;
  line-height: 18px;
  overflow: hidden;
  text-overflow: ellipsis;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
}

.textbanner .textbanner-image.overlay.textbanner-image-empty {
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 600 600'><defs><radialGradient id='a' cx='3838.3' cy='307.72' r='546.36' gradientTransform='translate(-1350.47 15.97) scale(0.43 0.92)' gradientUnits='userSpaceOnUse'><stop offset='0' stop-color='%23f9f9f9'/><stop offset='0.5' stop-color='%23f9f9f9'/><stop offset='1' stop-color='%23f9f9f9'/></radialGradient></defs><rect width='600' height='600' style='fill:url(%23a)'/><path d='M452.32,455,565.13,569.87Z' style='fill:none;stroke:%23ddd;stroke-linecap:square;stroke-miterlimit:10'/><path d='M404.18,194l161-163.82Z' style='fill:none;stroke:%23ddd;stroke-linecap:square;stroke-miterlimit:10'/><polyline points='34.87 569.89 148.53 454.18 186.37 415.66' style='fill:none;stroke:%23ddd;stroke-linecap:square;stroke-miterlimit:10'/><line x1='34.87' y1='30.11' x2='160.09' y2='157.58' style='fill:none;stroke:%23ddd;stroke-linecap:square;stroke-miterlimit:10'/><path d='M239.27,393.46l-39.35,8.9A19.24,19.24,0,0,1,177,388L134,199.9A19.16,19.16,0,0,1,148.46,177l180.48-40.84a19.24,19.24,0,0,1,23,14.4l12.63,55.32' style='fill:none;stroke:%23ccc;stroke-linecap:round;stroke-linejoin:round'/><line x1='168.9' y1='351.54' x2='244.84' y2='334.25' style='fill:none;stroke:%23ccc;stroke-linecap:round;stroke-linejoin:round'/><line x1='218.43' y1='213.55' x2='254' y2='236.93' style='fill:none;stroke:%23ccc;stroke-linecap:round;stroke-linejoin:round'/><line x1='184.82' y1='248.93' x2='211.36' y2='266.62' style='fill:none;stroke:%23ccc;stroke-linecap:round;stroke-linejoin:round'/><path d='M439.42,445.21,255.28,428A19.19,19.19,0,0,1,238,407.15L256.07,215A19.2,19.2,0,0,1,277,197.72L461.09,215a19.2,19.2,0,0,1,17.31,20.82L460.3,428A19.21,19.21,0,0,1,439.42,445.21Z' style='fill:none;stroke:%23ccc;stroke-linecap:round;stroke-linejoin:round'/><line x1='241.43' y1='369.23' x2='464.33' y2='392.22' style='fill:none;stroke:%23ccc;stroke-linecap:round;stroke-linejoin:round'/><polyline points='248.51 310.65 329.76 256.01 391.8 323.23' style='fill:none;stroke:%23ccc;stroke-linecap:round;stroke-linejoin:round'/><polyline points='467.87 338 425.5 298.47 340.5 363.92' style='fill:none;stroke:%23ccc;stroke-linecap:round;stroke-linejoin:round'/><path d='M411.2,263.44a13.27,13.27,0,1,1-12-14.45,13.27,13.27,0,0,1,12,14.45Z' style='fill:none;stroke:%23ccc;stroke-linecap:round;stroke-linejoin:round'/></svg>");
}

{# /* // Informative banners */ #}

.section-informative-banners {
  padding-bottom: 50px;
  text-align: center;
}

.service-icon {
  margin: 10px 0;
}

.service-item .service-icon-big {
  font-size: 30px;
}

.service-pagination {
  position: relative;
  margin-top: 5px;
}

/*============================================================================
  #Product grid
==============================================================================*/

{# /* // Category controls */ #}

.category-controls {
  position: sticky;
  z-index: 10;
  padding: 15px 0;
}

{# /* // Category header */ #}

.filter-link {
  display: inline-block;
  width: 100%;
  padding: 10px 0;
}

{# /* // Grid item */ #}

.item {
  margin-bottom: 30px;
}
.item-image {
  position: relative;
  overflow: hidden;
  max-height: 400px;
}
.item-image img{
  height: 100%;
  width: auto;
  max-height: 400px;
}
.item-image-big,
.item-image-big img {
  max-height: 470px;
}
.item-colors {
  position: absolute;
  z-index: 99;
  padding-top: 15px;
}
.item-colors-bullet {
  display: inline-block;
  min-width: 14px;
  height: 14px;
  margin-right: 5px;
  font-size: 10px;
  line-height: 12px;
  vertical-align: top;
  border-radius: 14px;
  cursor: pointer;
  opacity: 0.8;
  text-transform: uppercase;
  -webkit-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.item-colors-bullet:last-child {
  margin: 0;
}
.item-colors-bullet:hover,
.item-colors-bullet.selected {
  opacity: 1;
}
.item-thumbnail {
  display: block;
  width: 100%;
}
.item-description {
  min-height: 130px;
}
.item-description-large {
  min-height: 170px;
}
.item-description-huge {
  min-height: 200px;
}
.item-description-container {
  bottom: 46px;
  z-index: 9;
}
.item-link {
  height: calc(100% - 50px);
  top: 0;
  display: block;
  padding: 20px;
  z-index: 9;
}
.item-name {
  min-height: 30px;
  font-size: 15px;
  line-height: 15px;
  text-overflow: ellipsis;
  overflow: hidden;
  -webkit-line-clamp: 2;
  display: -webkit-box;
  -webkit-box-orient: vertical;
}
.item-price-container { 
  font-size: 15px;
}
.item-installments {
  margin-bottom: 5px;
  font-size: 12px;
}
.item-actions {
  bottom: 0;
}
.item-buy {
  display: block;
  position: absolute;
  bottom: 0;
  width: 100%;
  align-items: center;
  text-align: center;
  z-index: 10;
}
.item-buy-open {
  display: inline-block;
  text-align: center;
  padding: 4px 8px 0 8px;
  font-size: 20px; 
}
.item-buy-variants {
  overflow: hidden;
}
.item-cart-absolute {
  position: absolute;
  top: 14px;
  left: calc(50% - 50px);
}

{# /* // Labels */ #}

.labels {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 9;
}

.label {
  margin-bottom: 10px;
  padding: 10px 20px; 
  font-size: 12px;
  text-align: center;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.label-inline {
  padding: 3px 5px 3px 7px;
  font-size: 11px;
}

/*============================================================================
  #Product detail
==============================================================================*/

{# /* // Image */ #}

.nube-slider-product {
  max-height: 900px;
  overflow: hidden;
}

.product-slider-image {
  width: auto;
  height: 100%;
  max-width: 100%;
  max-height: 900px;
}

.product-thumb.selected {
  opacity: .5;
}

.product-video-container {
  width: 100%;
  height: 100%;
}
.product-video {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.product-video .embed-responsive {
  width: 100%;
  height: 100%;
}
.product-video .video-image{
  width: auto;
  height: 100%;
}

{# /* // Form and info */ #}

.form-quantity-up {
  position: absolute;
  top: 5px;
  right: 10px;
}

.form-quantity-down {
  position: absolute;
  right: 10px;
  bottom: 5px;
}

/*============================================================================
  #Cart detail
==============================================================================*/

{# /* // Shipping Calculator */ #}

.free-shipping-title {
  position: relative;
  width: 100%;
  height: 55px;
}
.shipping-calculator-head.with-zip {
  height: 35px;
}
.shipping-calculator-head.with-zip.with-free-shipping {
  height: 90px;
}
.shipping-calculator-head.with-form {
  height: 105px;
}
.shipping-calculator-head.with-error {
  height: 185px;
}

{# /* // Table */ #}

.cart-table-row {
  padding: 10px 0;
}

.cart-item {
  position: relative;
  margin-bottom: 12px;
  padding-bottom: 10px;
}
.cart-item-detail {
  display: block;
  padding-bottom: 20px;
}
.cart-item-name{
  width: 100%;
  padding: 0 10px 0;
  font-size: 15px;
  font-weight: 600;
}
.cart-item-quantity {
    width: 45%;
    margin-top: 15px;
    display: inline-block;
  }
.cart-item-subtotal{
    display: inline-block;
    width: 50%;
    margin: 0;
    padding: 0 0 0 10px;
    text-align: right;
    font-size: 15px;
    font-weight: normal;
}
.cart-item-subtotal-short {
  width: 19%;
  text-align: center;
  width: 50%;
  display: inline-block;
  text-align: right;
}
.cart-item-btn{
  padding: 6px;
  display: inline-block;
  background: transparent;
  font-size: 16px;
  opacity: 0.8;
}
.cart-item-btn:hover{
  opacity: 0.6;
}
.cart-item input{
  display: inline-block;
  width: 40px;
  height: 30px;
  font-size: 16px;
  text-align: center;
  -moz-appearance:textfield;
}
.cart-item-input::-webkit-outer-spin-button,
.cart-item-input::-webkit-inner-spin-button{
  -webkit-appearance: none;
}
.fa-cog{
  display: none;
}
.cart-item-input-spinner{
  display: inline-block;
  width: 40px;
  text-align: center;
}
.cart-item-input-delete{
  display: inline-block;
  right: 0;
  padding-bottom: 20px;
}
.cart-item-input-delete .btn{
  padding-right:0; 
}

.cart-quantity-input-container svg{
  padding: 6px 14px;
}

.cart-unit-price{
  float: left;
  width: 100%;
  margin: 5px 0 2px 0;
}

.cart-promotion-detail{
  float: left;
  width: 65%;
  text-align: left;
} 
.cart-promotion-number{
  position: absolute;
  right: 0;
  bottom: 0;
  float: right;
  text-align: right;
  font-weight: bold;
} 


{# /* // Totals */ #}

.cart-subtotal{
  float: right;
  clear: both;
  margin: 0 0 10px 0;
}
.total-promotions-row{
  float: right;
  width: 100%;
  margin-bottom: 5px;
  position: relative;
  .cart-promotion-number{
    margin-left: 5px;
  }
}
.cart-total{
  clear: both;
  margin: 10px 0;
  font-weight: bold;
}

{# /* Totals */ #}

.cart-promotion-detail{
  width: 65%;
  float: left;
}
.cart-promotion-number{
  position: absolute;
  right: 0;
  bottom: 0;
  width: 35%;
  float: right;
  margin: 0;
  text-align: right;
}

/*============================================================================
  #Contact page
==============================================================================*/

{# /* // Data contact */ #}

.contact-info {
  margin-top: 0;
  padding-left: 0;
}

.contact-icon {
  display: block;
  margin: 0 auto 10px auto;
}

.contact-item {
  list-style: none;
}

.contact-link {
  list-style: none;
}

.map {
  width: 100%;
  height: 400px;
  margin: 10px 0 20px 0;
}

/*============================================================================
  #Media queries
==============================================================================*/

{# /* // Min width 768px */ #}

@media (min-width: 768px) { 

  {# /* // Titles and breadcrumbs */ #}

  .h1-md {
    font-size: 43px;
    font-weight: 700;
  }

  .h2-md {
    font-size: 34px;
    font-weight: 700;
  }

  .h3-md {
    font-size: 20px;
    font-weight: 700;
  }

  .h4-md {
    font-size: 18px;
    font-weight: 700;
  }

  .h5-md {
    font-size: 16px;
    font-weight: 700;
  }

  .h6-md {
    font-size: 14px;
    font-weight: 700;
  }

  {# /* //// Sliders */ #}

  .nube-slider-home {
    height: auto;
  }

  {# /* //// Header and nav */ #}

  .head-fix {
    position: fixed;
  }

  {# /* //// Banners */ #}

  .textbanner-image-horizontal-plus {
    padding-top: 25%;
  }
  .textbanner-text.over-image-center {
    padding: 30px 70px;
  }

  {# /* //// Components */ #}

  .font-md-normal {
    font-size: 14px;
  }

  {# /* Notifications */ #}

  .notification-floating {
    right: 15px;
    left: initial;
    width: 380px;
  }
  
  {# /* Forms */ #}

  .checkbox-text{
    margin-top: 2px;
    margin-left: 0;
  }

  {# /* //// Home */ #}
  .slider-container-full {
    position: relative;
    height: auto;
  }
  .slider-img-full {
    position: relative;
    width: 100%;
    height: auto;
  }
  .swiper-text,
  .slider-container-full .swiper-text {
    width: 50%;
    transform: translate(10%,-50%);
  }
  .swiper-description,
  .slider-container-full .swiper-description {
    width: 70%;
    line-height: 20px;
    letter-spacing: 0.5px;
  }
  .swiper-title,
  .slider-container-full .swiper-title {
    font-size: 42px;
    line-height: 48px;
  }

  {# /* Video */ #}

  .video-player-icon-small {
    width: 45px;
    height: 40px;
    margin: -22px 0 0 -22px;
    line-height: 40px!important;
  }

  {# /* //// Product grid */ #}

  .category-controls {
    position: relative;
    padding: 0;
  }

  {# /* //// Product detail */ #}

  .product-video .video-image,
  .product-video .embed-responsive {
    width: 100%;
    height: auto;
  }

  {# /* //// Cart Page */ #}

  .cart-item-detail,
  .cart-item-delete {
    display: flex;
    padding-bottom: 20px;
  }
  .cart-item-name {
    width: 48%;
  }
  .cart-item-quantity {
    width: 24%;
  }
  .cart-item-subtotal {
    width: 25%;
  }
  .cart-item-subtotal-short {
    width: 19%;
    text-align: center;
  }

}

/*============================================================================
  #Helper classes
==============================================================================*/

/*CSS properties helpers minified, to unminify it you have to copy the code and paste it here http://unminify.com/, after that paste the unminified code here */

{# /* // Container */ #}
@media (min-width: 1380px){
  .container {
    max-width: 1300px;
  }
}

{# /* // Margin and padding */ #}
.m-0{margin:0!important}.mt-0,.my-0{margin-top:0!important}.mr-0,.mx-0{margin-right:0!important}.mb-0,.my-0{margin-bottom:0!important}.ml-0,.mx-0{margin-left:0!important}.m-1{margin:.25rem!important}.mt-1,.my-1{margin-top:.25rem!important}.mr-1,.mx-1{margin-right:.25rem!important}.mb-1,.my-1{margin-bottom:.25rem!important}.ml-1,.mx-1{margin-left:.25rem!important}.m-2{margin:.5rem!important}.mt-2,.my-2{margin-top:.5rem!important}.mr-2,.mx-2{margin-right:.5rem!important}.mb-2,.my-2{margin-bottom:.5rem!important}.ml-2,.mx-2{margin-left:.5rem!important}.m-3{margin:1rem!important}.mt-3,.my-3{margin-top:1rem!important}.mr-3,.mx-3{margin-right:1rem!important}.mb-3,.my-3{margin-bottom:1rem!important}.ml-3,.mx-3{margin-left:1rem!important}.m-4{margin:1.5rem!important}.mt-4,.my-4{margin-top:1.5rem!important}.mr-4,.mx-4{margin-right:1.5rem!important}.mb-4,.my-4{margin-bottom:1.5rem!important}.ml-4,.mx-4{margin-left:1.5rem!important}.m-5{margin:3rem!important}.mt-5,.my-5{margin-top:3rem!important}.mr-5,.mx-5{margin-right:3rem!important}.mb-5,.my-5{margin-bottom:3rem!important}.ml-5,.mx-5{margin-left:3rem!important}.p-0{padding:0!important}.pt-0,.py-0{padding-top:0!important}.pr-0,.px-0{padding-right:0!important}.pb-0,.py-0{padding-bottom:0!important}.pl-0,.px-0{padding-left:0!important}.p-1{padding:.25rem!important}.pt-1,.py-1{padding-top:.25rem!important}.pr-1,.px-1{padding-right:.25rem!important}.pb-1,.py-1{padding-bottom:.25rem!important}.pl-1,.px-1{padding-left:.25rem!important}.p-2{padding:.5rem!important}.pt-2,.py-2{padding-top:.5rem!important}.pr-2,.px-2{padding-right:.5rem!important}.pb-2,.py-2{padding-bottom:.5rem!important}.pl-2,.px-2{padding-left:.5rem!important}.p-3{padding:1rem!important}.pt-3,.py-3{padding-top:1rem!important}.pr-3,.px-3{padding-right:1rem!important}.pb-3,.py-3{padding-bottom:1rem!important}.pl-3,.px-3{padding-left:1rem!important}.p-4{padding:1.5rem!important}.pt-4,.py-4{padding-top:1.5rem!important}.pr-4,.px-4{padding-right:1.5rem!important}.pb-4,.py-4{padding-bottom:1.5rem!important}.pl-4,.px-4{padding-left:1.5rem!important}.p-5{padding:3rem!important}.pt-5,.py-5{padding-top:3rem!important}.pr-5,.px-5{padding-right:3rem!important}.pb-5,.py-5{padding-bottom:3rem!important}.pl-5,.px-5{padding-left:3rem!important}.m-auto{margin:auto!important}.mt-auto,.my-auto{margin-top:auto!important}.mr-auto,.mx-auto{margin-right:auto!important}.mb-auto,.my-auto{margin-bottom:auto!important}.ml-auto,.mx-auto{margin-left:auto!important}@media (min-width:576px){.m-sm-0{margin:0!important}.mt-sm-0,.my-sm-0{margin-top:0!important}.mr-sm-0,.mx-sm-0{margin-right:0!important}.mb-sm-0,.my-sm-0{margin-bottom:0!important}.ml-sm-0,.mx-sm-0{margin-left:0!important}.m-sm-1{margin:.25rem!important}.mt-sm-1,.my-sm-1{margin-top:.25rem!important}.mr-sm-1,.mx-sm-1{margin-right:.25rem!important}.mb-sm-1,.my-sm-1{margin-bottom:.25rem!important}.ml-sm-1,.mx-sm-1{margin-left:.25rem!important}.m-sm-2{margin:.5rem!important}.mt-sm-2,.my-sm-2{margin-top:.5rem!important}.mr-sm-2,.mx-sm-2{margin-right:.5rem!important}.mb-sm-2,.my-sm-2{margin-bottom:.5rem!important}.ml-sm-2,.mx-sm-2{margin-left:.5rem!important}.m-sm-3{margin:1rem!important}.mt-sm-3,.my-sm-3{margin-top:1rem!important}.mr-sm-3,.mx-sm-3{margin-right:1rem!important}.mb-sm-3,.my-sm-3{margin-bottom:1rem!important}.ml-sm-3,.mx-sm-3{margin-left:1rem!important}.m-sm-4{margin:1.5rem!important}.mt-sm-4,.my-sm-4{margin-top:1.5rem!important}.mr-sm-4,.mx-sm-4{margin-right:1.5rem!important}.mb-sm-4,.my-sm-4{margin-bottom:1.5rem!important}.ml-sm-4,.mx-sm-4{margin-left:1.5rem!important}.m-sm-5{margin:3rem!important}.mt-sm-5,.my-sm-5{margin-top:3rem!important}.mr-sm-5,.mx-sm-5{margin-right:3rem!important}.mb-sm-5,.my-sm-5{margin-bottom:3rem!important}.ml-sm-5,.mx-sm-5{margin-left:3rem!important}.p-sm-0{padding:0!important}.pt-sm-0,.py-sm-0{padding-top:0!important}.pr-sm-0,.px-sm-0{padding-right:0!important}.pb-sm-0,.py-sm-0{padding-bottom:0!important}.pl-sm-0,.px-sm-0{padding-left:0!important}.p-sm-1{padding:.25rem!important}.pt-sm-1,.py-sm-1{padding-top:.25rem!important}.pr-sm-1,.px-sm-1{padding-right:.25rem!important}.pb-sm-1,.py-sm-1{padding-bottom:.25rem!important}.pl-sm-1,.px-sm-1{padding-left:.25rem!important}.p-sm-2{padding:.5rem!important}.pt-sm-2,.py-sm-2{padding-top:.5rem!important}.pr-sm-2,.px-sm-2{padding-right:.5rem!important}.pb-sm-2,.py-sm-2{padding-bottom:.5rem!important}.pl-sm-2,.px-sm-2{padding-left:.5rem!important}.p-sm-3{padding:1rem!important}.pt-sm-3,.py-sm-3{padding-top:1rem!important}.pr-sm-3,.px-sm-3{padding-right:1rem!important}.pb-sm-3,.py-sm-3{padding-bottom:1rem!important}.pl-sm-3,.px-sm-3{padding-left:1rem!important}.p-sm-4{padding:1.5rem!important}.pt-sm-4,.py-sm-4{padding-top:1.5rem!important}.pr-sm-4,.px-sm-4{padding-right:1.5rem!important}.pb-sm-4,.py-sm-4{padding-bottom:1.5rem!important}.pl-sm-4,.px-sm-4{padding-left:1.5rem!important}.p-sm-5{padding:3rem!important}.pt-sm-5,.py-sm-5{padding-top:3rem!important}.pr-sm-5,.px-sm-5{padding-right:3rem!important}.pb-sm-5,.py-sm-5{padding-bottom:3rem!important}.pl-sm-5,.px-sm-5{padding-left:3rem!important}.m-sm-auto{margin:auto!important}.mt-sm-auto,.my-sm-auto{margin-top:auto!important}.mr-sm-auto,.mx-sm-auto{margin-right:auto!important}.mb-sm-auto,.my-sm-auto{margin-bottom:auto!important}.ml-sm-auto,.mx-sm-auto{margin-left:auto!important}}@media (min-width:768px){.m-md-0{margin:0!important}.mt-md-0,.my-md-0{margin-top:0!important}.mr-md-0,.mx-md-0{margin-right:0!important}.mb-md-0,.my-md-0{margin-bottom:0!important}.ml-md-0,.mx-md-0{margin-left:0!important}.m-md-1{margin:.25rem!important}.mt-md-1,.my-md-1{margin-top:.25rem!important}.mr-md-1,.mx-md-1{margin-right:.25rem!important}.mb-md-1,.my-md-1{margin-bottom:.25rem!important}.ml-md-1,.mx-md-1{margin-left:.25rem!important}.m-md-2{margin:.5rem!important}.mt-md-2,.my-md-2{margin-top:.5rem!important}.mr-md-2,.mx-md-2{margin-right:.5rem!important}.mb-md-2,.my-md-2{margin-bottom:.5rem!important}.ml-md-2,.mx-md-2{margin-left:.5rem!important}.m-md-3{margin:1rem!important}.mt-md-3,.my-md-3{margin-top:1rem!important}.mr-md-3,.mx-md-3{margin-right:1rem!important}.mb-md-3,.my-md-3{margin-bottom:1rem!important}.ml-md-3,.mx-md-3{margin-left:1rem!important}.m-md-4{margin:1.5rem!important}.mt-md-4,.my-md-4{margin-top:1.5rem!important}.mr-md-4,.mx-md-4{margin-right:1.5rem!important}.mb-md-4,.my-md-4{margin-bottom:1.5rem!important}.ml-md-4,.mx-md-4{margin-left:1.5rem!important}.m-md-5{margin:3rem!important}.mt-md-5,.my-md-5{margin-top:3rem!important}.mr-md-5,.mx-md-5{margin-right:3rem!important}.mb-md-5,.my-md-5{margin-bottom:3rem!important}.ml-md-5,.mx-md-5{margin-left:3rem!important}.p-md-0{padding:0!important}.pt-md-0,.py-md-0{padding-top:0!important}.pr-md-0,.px-md-0{padding-right:0!important}.pb-md-0,.py-md-0{padding-bottom:0!important}.pl-md-0,.px-md-0{padding-left:0!important}.p-md-1{padding:.25rem!important}.pt-md-1,.py-md-1{padding-top:.25rem!important}.pr-md-1,.px-md-1{padding-right:.25rem!important}.pb-md-1,.py-md-1{padding-bottom:.25rem!important}.pl-md-1,.px-md-1{padding-left:.25rem!important}.p-md-2{padding:.5rem!important}.pt-md-2,.py-md-2{padding-top:.5rem!important}.pr-md-2,.px-md-2{padding-right:.5rem!important}.pb-md-2,.py-md-2{padding-bottom:.5rem!important}.pl-md-2,.px-md-2{padding-left:.5rem!important}.p-md-3{padding:1rem!important}.pt-md-3,.py-md-3{padding-top:1rem!important}.pr-md-3,.px-md-3{padding-right:1rem!important}.pb-md-3,.py-md-3{padding-bottom:1rem!important}.pl-md-3,.px-md-3{padding-left:1rem!important}.p-md-4{padding:1.5rem!important}.pt-md-4,.py-md-4{padding-top:1.5rem!important}.pr-md-4,.px-md-4{padding-right:1.5rem!important}.pb-md-4,.py-md-4{padding-bottom:1.5rem!important}.pl-md-4,.px-md-4{padding-left:1.5rem!important}.p-md-5{padding:3rem!important}.pt-md-5,.py-md-5{padding-top:3rem!important}.pr-md-5,.px-md-5{padding-right:3rem!important}.pb-md-5,.py-md-5{padding-bottom:3rem!important}.pl-md-5,.px-md-5{padding-left:3rem!important}.m-md-auto{margin:auto!important}.mt-md-auto,.my-md-auto{margin-top:auto!important}.mr-md-auto,.mx-md-auto{margin-right:auto!important}.mb-md-auto,.my-md-auto{margin-bottom:auto!important}.ml-md-auto,.mx-md-auto{margin-left:auto!important}}@media (min-width:992px){.m-lg-0{margin:0!important}.mt-lg-0,.my-lg-0{margin-top:0!important}.mr-lg-0,.mx-lg-0{margin-right:0!important}.mb-lg-0,.my-lg-0{margin-bottom:0!important}.ml-lg-0,.mx-lg-0{margin-left:0!important}.m-lg-1{margin:.25rem!important}.mt-lg-1,.my-lg-1{margin-top:.25rem!important}.mr-lg-1,.mx-lg-1{margin-right:.25rem!important}.mb-lg-1,.my-lg-1{margin-bottom:.25rem!important}.ml-lg-1,.mx-lg-1{margin-left:.25rem!important}.m-lg-2{margin:.5rem!important}.mt-lg-2,.my-lg-2{margin-top:.5rem!important}.mr-lg-2,.mx-lg-2{margin-right:.5rem!important}.mb-lg-2,.my-lg-2{margin-bottom:.5rem!important}.ml-lg-2,.mx-lg-2{margin-left:.5rem!important}.m-lg-3{margin:1rem!important}.mt-lg-3,.my-lg-3{margin-top:1rem!important}.mr-lg-3,.mx-lg-3{margin-right:1rem!important}.mb-lg-3,.my-lg-3{margin-bottom:1rem!important}.ml-lg-3,.mx-lg-3{margin-left:1rem!important}.m-lg-4{margin:1.5rem!important}.mt-lg-4,.my-lg-4{margin-top:1.5rem!important}.mr-lg-4,.mx-lg-4{margin-right:1.5rem!important}.mb-lg-4,.my-lg-4{margin-bottom:1.5rem!important}.ml-lg-4,.mx-lg-4{margin-left:1.5rem!important}.m-lg-5{margin:3rem!important}.mt-lg-5,.my-lg-5{margin-top:3rem!important}.mr-lg-5,.mx-lg-5{margin-right:3rem!important}.mb-lg-5,.my-lg-5{margin-bottom:3rem!important}.ml-lg-5,.mx-lg-5{margin-left:3rem!important}.p-lg-0{padding:0!important}.pt-lg-0,.py-lg-0{padding-top:0!important}.pr-lg-0,.px-lg-0{padding-right:0!important}.pb-lg-0,.py-lg-0{padding-bottom:0!important}.pl-lg-0,.px-lg-0{padding-left:0!important}.p-lg-1{padding:.25rem!important}.pt-lg-1,.py-lg-1{padding-top:.25rem!important}.pr-lg-1,.px-lg-1{padding-right:.25rem!important}.pb-lg-1,.py-lg-1{padding-bottom:.25rem!important}.pl-lg-1,.px-lg-1{padding-left:.25rem!important}.p-lg-2{padding:.5rem!important}.pt-lg-2,.py-lg-2{padding-top:.5rem!important}.pr-lg-2,.px-lg-2{padding-right:.5rem!important}.pb-lg-2,.py-lg-2{padding-bottom:.5rem!important}.pl-lg-2,.px-lg-2{padding-left:.5rem!important}.p-lg-3{padding:1rem!important}.pt-lg-3,.py-lg-3{padding-top:1rem!important}.pr-lg-3,.px-lg-3{padding-right:1rem!important}.pb-lg-3,.py-lg-3{padding-bottom:1rem!important}.pl-lg-3,.px-lg-3{padding-left:1rem!important}.p-lg-4{padding:1.5rem!important}.pt-lg-4,.py-lg-4{padding-top:1.5rem!important}.pr-lg-4,.px-lg-4{padding-right:1.5rem!important}.pb-lg-4,.py-lg-4{padding-bottom:1.5rem!important}.pl-lg-4,.px-lg-4{padding-left:1.5rem!important}.p-lg-5{padding:3rem!important}.pt-lg-5,.py-lg-5{padding-top:3rem!important}.pr-lg-5,.px-lg-5{padding-right:3rem!important}.pb-lg-5,.py-lg-5{padding-bottom:3rem!important}.pl-lg-5,.px-lg-5{padding-left:3rem!important}.m-lg-auto{margin:auto!important}.mt-lg-auto,.my-lg-auto{margin-top:auto!important}.mr-lg-auto,.mx-lg-auto{margin-right:auto!important}.mb-lg-auto,.my-lg-auto{margin-bottom:auto!important}.ml-lg-auto,.mx-lg-auto{margin-left:auto!important}}@media (min-width:1200px){.m-xl-0{margin:0!important}.mt-xl-0,.my-xl-0{margin-top:0!important}.mr-xl-0,.mx-xl-0{margin-right:0!important}.mb-xl-0,.my-xl-0{margin-bottom:0!important}.ml-xl-0,.mx-xl-0{margin-left:0!important}.m-xl-1{margin:.25rem!important}.mt-xl-1,.my-xl-1{margin-top:.25rem!important}.mr-xl-1,.mx-xl-1{margin-right:.25rem!important}.mb-xl-1,.my-xl-1{margin-bottom:.25rem!important}.ml-xl-1,.mx-xl-1{margin-left:.25rem!important}.m-xl-2{margin:.5rem!important}.mt-xl-2,.my-xl-2{margin-top:.5rem!important}.mr-xl-2,.mx-xl-2{margin-right:.5rem!important}.mb-xl-2,.my-xl-2{margin-bottom:.5rem!important}.ml-xl-2,.mx-xl-2{margin-left:.5rem!important}.m-xl-3{margin:1rem!important}.mt-xl-3,.my-xl-3{margin-top:1rem!important}.mr-xl-3,.mx-xl-3{margin-right:1rem!important}.mb-xl-3,.my-xl-3{margin-bottom:1rem!important}.ml-xl-3,.mx-xl-3{margin-left:1rem!important}.m-xl-4{margin:1.5rem!important}.mt-xl-4,.my-xl-4{margin-top:1.5rem!important}.mr-xl-4,.mx-xl-4{margin-right:1.5rem!important}.mb-xl-4,.my-xl-4{margin-bottom:1.5rem!important}.ml-xl-4,.mx-xl-4{margin-left:1.5rem!important}.m-xl-5{margin:3rem!important}.mt-xl-5,.my-xl-5{margin-top:3rem!important}.mr-xl-5,.mx-xl-5{margin-right:3rem!important}.mb-xl-5,.my-xl-5{margin-bottom:3rem!important}.ml-xl-5,.mx-xl-5{margin-left:3rem!important}.p-xl-0{padding:0!important}.pt-xl-0,.py-xl-0{padding-top:0!important}.pr-xl-0,.px-xl-0{padding-right:0!important}.pb-xl-0,.py-xl-0{padding-bottom:0!important}.pl-xl-0,.px-xl-0{padding-left:0!important}.p-xl-1{padding:.25rem!important}.pt-xl-1,.py-xl-1{padding-top:.25rem!important}.pr-xl-1,.px-xl-1{padding-right:.25rem!important}.pb-xl-1,.py-xl-1{padding-bottom:.25rem!important}.pl-xl-1,.px-xl-1{padding-left:.25rem!important}.p-xl-2{padding:.5rem!important}.pt-xl-2,.py-xl-2{padding-top:.5rem!important}.pr-xl-2,.px-xl-2{padding-right:.5rem!important}.pb-xl-2,.py-xl-2{padding-bottom:.5rem!important}.pl-xl-2,.px-xl-2{padding-left:.5rem!important}.p-xl-3{padding:1rem!important}.pt-xl-3,.py-xl-3{padding-top:1rem!important}.pr-xl-3,.px-xl-3{padding-right:1rem!important}.pb-xl-3,.py-xl-3{padding-bottom:1rem!important}.pl-xl-3,.px-xl-3{padding-left:1rem!important}.p-xl-4{padding:1.5rem!important}.pt-xl-4,.py-xl-4{padding-top:1.5rem!important}.pr-xl-4,.px-xl-4{padding-right:1.5rem!important}.pb-xl-4,.py-xl-4{padding-bottom:1.5rem!important}.pl-xl-4,.px-xl-4{padding-left:1.5rem!important}.p-xl-5{padding:3rem!important}.pt-xl-5,.py-xl-5{padding-top:3rem!important}.pr-xl-5,.px-xl-5{padding-right:3rem!important}.pb-xl-5,.py-xl-5{padding-bottom:3rem!important}.pl-xl-5,.px-xl-5{padding-left:3rem!important}.m-xl-auto{margin:auto!important}.mt-xl-auto,.my-xl-auto{margin-top:auto!important}.mr-xl-auto,.mx-xl-auto{margin-right:auto!important}.mb-xl-auto,.my-xl-auto{margin-bottom:auto!important}.ml-xl-auto,.mx-xl-auto{margin-left:auto!important}}

{# /* // Text */ #}
.text-left{text-align:left!important}.text-right{text-align:right!important}.text-center{text-align:center!important}@media (min-width:576px){.text-sm-left{text-align:left!important}.text-sm-right{text-align:right!important}.text-sm-center{text-align:center!important}}@media (min-width:768px){.text-md-left{text-align:left!important}.text-md-right{text-align:right!important}.text-md-center{text-align:center!important}}@media (min-width:992px){.text-lg-left{text-align:left!important}.text-lg-right{text-align:right!important}.text-lg-center{text-align:center!important}}@media (min-width:1200px){.text-xl-left{text-align:left!important}.text-xl-right{text-align:right!important}.text-xl-center{text-align:center!important}}.text-lowercase{text-transform:lowercase!important}.text-uppercase{text-transform:uppercase!important}.text-capitalize{text-transform:capitalize!important}.font-weight-light{font-weight:300!important}.font-weight-normal{font-weight:400!important}.font-weight-bold{font-weight:700!important}.font-italic{font-style:italic!important}

{# /* // Align */ #}
.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-middle{vertical-align:middle!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}

{# /* // Position */ #}
.position-relative{position:relative!important}.position-absolute{position:absolute!important;}.position-fixed{position:fixed!important}

{# /* // Image */ #}
.img-fluid {max-width:100%;height:auto}

{# /* // Visibility */ #}
.hidden{display:none}

{# /* // Float */ #}
.float-left{float:left!important}.float-right{float:right!important}.float-none{float:none!important}

{# /* // Width */ #}
.w-100{width:100%!important}.w-auto{width:auto!important}.full-width-container{width: 100%; float: left; clear: both;}

{# /* // Opacity */ #}
.opacity-50{opacity:0.5!important}


/* The container */
.containerCheckbox {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 14px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.containerCheckbox input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.containerCheckbox:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.containerCheckbox input:checked ~ .checkmark {
  background-color: #06cbba;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.containerCheckbox input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.containerCheckbox .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

        </style>

        
        <link rel="stylesheet" type="text/css" href="//d2r9epyceweg5n.cloudfront.net/stores/001/363/975/themes/cubo/style-colors-b4d026f396e5e27460f178d52832b088.css?1731067097" media="all" />

        
        
<script>
    !function(a){"use strict";var b=function(b,c,d){function j(a){return e.body?a():void setTimeout(function(){j(a)})}function l(){f.addEventListener&&f.removeEventListener("load",l),f.media=d||"all"}var g,e=a.document,f=e.createElement("link");if(c)g=c;else{var h=(e.body||e.getElementsByTagName("head")[0]).childNodes;g=h[h.length-1]}var i=e.styleSheets;f.rel="stylesheet",f.href=b,f.media="only x",j(function(){g.parentNode.insertBefore(f,c?g:g.nextSibling)});var k=function(a){for(var b=f.href,c=i.length;c--;)if(i[c].href===b)return a();setTimeout(function(){k(a)})};return f.addEventListener&&f.addEventListener("load",l),f.onloadcssdefined=k,k(l),f};"undefined"!=typeof exports?exports.loadCSS=b:a.loadCSS=b}("undefined"!=typeof global?global:this);
</script>
<script id="style-css">
    loadCSS( '//d2r9epyceweg5n.cloudfront.net/stores/001/363/975/themes/cubo/style-async-50650ae47fecaddbf4215887be7f9455.css?1731067097', document.getElementById("style-css"));
</script>

        
        <style>
            
        </style>

        
        
        
        
        
        
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" async="true"></script>

        
            <link href="//d2r9epyceweg5n.cloudfront.net/stores/001/363/975/themes/common/logo-1812616029-1603117513-7d53e49f1385e5dbefcbf7ba10abafbf1603117514.ico?0" rel="icon" type="image/x-icon" />
    <link href="//d2r9epyceweg5n.cloudfront.net/stores/001/363/975/themes/common/logo-1812616029-1603117513-7d53e49f1385e5dbefcbf7ba10abafbf1603117514.ico?0" rel="shortcut icon" type="image/x-icon" />
<link rel="canonical" href="https://www.swoptech.com.ar/contacto/" />


    <meta name="facebook-domain-verification" content="hy8qgh15wnhimygr7lrjy2463e8qxn" />
<script type="text/javascript">
    var LS = LS || {};
    LS.store = {
        id : 1363975,
        url : "swoptech.mitiendanube.com",
        custom_url : "www.swoptech.com.ar"
    };
    LS.whiteLabel = {
        storesDomain: "mitiendanube.com"
    };
    LS.cart = {
        id : null,
        subtotal : 0,
        has_non_shippable_products: false,
        has_shippable_products: false,
        items : [
                    ]
    };
    LS.lang = "es_AR";
    LS.langCode = "es";
    LS.currency = {
        code : "ARS",
        display_short: "\x24",
        display_long: "\x24\x20ARS",
        cents_separator : ",",
        thousands_separator : ""
    };
    LS.country = "AR";
                LS.customer = null;
    LS.template= "contact";
    LS.theme = {
        code: "cubo",
        name: "Cubo"
    };

    LS.socialScripts = [];
    LS.DOMReady = function(fn) {
        if (document.addEventListener) {
            document.addEventListener('DOMContentLoaded', fn);
        } else {
            document.attachEvent('onreadystatechange', function() {
                if (document.readyState === 'interactive')
                    fn();
            });
        }
    };

    // Making it a thenable so it can be made into a full fledged Promise later
    LS._readyCallbacks = [];
    LS.ready = {
        then: function(callback){
            LS._readyCallbacks.push(callback);
        }
    };

</script>



<script type="text/javascript" src="//d2r9epyceweg5n.cloudfront.net/assets/stores/js/linkedstore-b88fde2ab85affa9a04dc285f32d78d830.js?v=88006814" async="true"></script>

<script type="text/javascript">
    if(window.top != window) {
        LS.ready.then(function(){
            (function(scriptsInstatheme) {
                scriptsInstatheme.forEach(function(aScriptSrc) {
                    var script = document.createElement('script');
                    script.src = aScriptSrc;
                    document.head.appendChild(script);
                });
            })(['//d2r9epyceweg5n.cloudfront.net/assets/themes/cubo/static/js/instatheme-e0cbbf2f8c0f15bad64e4e377eae782530.js?1731067097', '//d2r9epyceweg5n.cloudfront.net/assets/stores/js/instatheme/bundle-2bb65220867535097f1454ca2746186430.js?v=88006814']);
        });
    }
</script>


    
<script type="text/javascript">
    function ga_send_event(category, action, label, value) {
        var params = {
            hitType : 'event',
            eventCategory : category,
            eventAction : action
        };

        var value_int = parseInt(value,10);
        var maybe_params = {
            eventLabel : label,
            eventValue : isNaN(value_int) ? undefined : value_int
        };
        for(var k in maybe_params) {
            if(maybe_params[k]) {
                params[k] = maybe_params[k];
            }
        }
                                                                ga('tiendanube_on_steroids.send', params);
                        }

        (function(i,s,o,g,r,a,m){
    i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
            ga('create', 'UA-25195849-3', {
        'name': 'tiendanube',
                'sampleRate' : 5, <!-- Enabled hits sampling of 5% for Storefronts Analytics -->
        'cookieDomain' : 'none',
        'siteSpeedSampleRate': 20
        });
        ga('tiendanube.require', 'displayfeatures');
                            ga('tiendanube.send', 'pageview', '\x2Fcontact\x2F');
                    ga('create', 'UA-25195849-20', {
        'name': 'tiendanube_on_steroids',
                'sampleRate' : 5, <!-- Enabled hits sampling of 5% for Storefronts Analytics -->
        'cookieDomain' : 'none',
        'siteSpeedSampleRate': 20
        });
        ga('tiendanube_on_steroids.require', 'displayfeatures');
                                ga('tiendanube_on_steroids.set', 'dimension1', 'paying');
                        ga('tiendanube_on_steroids.set', 'dimension2', 'AR');
                        ga('tiendanube_on_steroids.set', 'dimension3', 'cubo');
                                                ga('tiendanube_on_steroids.set', 'dimension5', 'desktop');
                        ga('tiendanube_on_steroids.set', 'dimension7', 'installments_on_steroids,');
                        ga('tiendanube_on_steroids.set', 'dimension8', '2');
                        ga('tiendanube_on_steroids.set', 'dimension10', 'no');
                        ga('tiendanube_on_steroids.set', 'contentGroup1', 'contact');
            ga('tiendanube_on_steroids.require', 'ec');


LS.ready.then(function(){
    LS.on(LS.events.productAddedToCart, function(event, data){
        var isAdd = data.quantity_added > 0;
        ga('tiendanube_on_steroids.ec:addProduct', {
            'id': data.cart_item.product.id,
            'name': data.cart_item.product.name,
            'price': data.cart_item.unit_price / 100,
            'quantity': data.quantity_added
        });
        ga('tiendanube_on_steroids.ec:setAction', isAdd ? 'add' : 'remove');
        ga('tiendanube_on_steroids.send', 'event', 'UX', 'cart.ajax', isAdd ? 'Added item to cart' : 'Removed item from cart');
    });
});                            ga('tiendanube_on_steroids.send', 'pageview', '\x2Fcontact\x2F');
            </script>        <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '324407645619012',
            {}, // Empty contact data.
                        {
                agent: 'tiendanube-core_v1.0-v1.0'
            });
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=324407645619012&ev=PageView&noscript=1"/>
    </noscript>
    <script>
        var fb_params = {
            referrer: document.referrer,
            userAgent: navigator.userAgent,
            language: 'es-AR'
        };
                var pixelFunction = 'track';
        var pixelEvent = null;
                if(pixelEvent) {
            fbq(pixelFunction, pixelEvent, fb_params);
        }
        
                LS.ready.then(function () {
            LS.on(LS.events.productAddedToCart, function (event, data) {
                var addedValue = data.cart_item.unit_price / 100 * data.quantity_added;
                // Facebook Pixel does not have an event to remove products from the cart.
                var pixelEvent = 'AddToCart';
                if (addedValue > 0) {
                    fbq('track', pixelEvent, {
                        referrer: document.referrer,
                        userAgent: navigator.userAgent,
                        language: 'es-AR',
                        content_ids: [data.cart_item.variant_id],
                        content_type: 'product',
                        value: addedValue,
                        currency: LS.currency.code
                    });
                }
            });
        });
    </script>
    <script type="text/javascript">
    function amplitude_log_event(event, properties) {
        // dummy function
        return true;
    }
</script>





        
        <script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "WebPage",
    "name": "Contacto - Swop Tech",
            "description": "",
        "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Inicio",
            "item": "http://www.swoptech.com.ar"
        },                                    {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Contacto",
                    "item": "http://www.swoptech.com.ar/contacto"
                }                            ]
    }}
</script>

    </head>
    <body class=" template-contact js-head-offset head-offset transition-long">
        
        
        
        
        
        

        
        <div class="js-menu-overlay menu-overlay" style="display: none;"></div>



<header class="js-head-main head-main head-dark head-fix" data-store="head">

                    <div class="js-nav-tabs-mobile nav-tabs-mobile container-fluid d-block d-md-none">
    <div class="row">
        <a href="http://www.swoptech.com.ar" class="nav-tabs-mobile-item py-3 col btn btn-small ">
            <svg class="icon-inline icon-lg mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M541 229.16l-61-49.83v-77.4a6 6 0 0 0-6-6h-20a6 6 0 0 0-6 6v51.33L308.19 39.14a32.16 32.16 0 0 0-40.38 0L35 229.16a8 8 0 0 0-1.16 11.24l10.1 12.41a8 8 0 0 0 11.2 1.19L96 220.62v243a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16v-128l64 .3V464a16 16 0 0 0 16 16l128-.33a16 16 0 0 0 16-16V220.62L520.86 254a8 8 0 0 0 11.25-1.16l10.1-12.41a8 8 0 0 0-1.21-11.27zm-93.11 218.59h.1l-96 .3V319.88a16.05 16.05 0 0 0-15.95-16l-96-.27a16 16 0 0 0-16.05 16v128.14H128V194.51L288 63.94l160 130.57z"/></svg>            <span class="mobile-nav-tab-text">Inicio</span>
        </a>
        <a href="#" data-toggle="#nav-categories" class="nav-tabs-mobile-item nav-tabs-mobile-line py-3 col btn btn-small js-modal-open  ">
            <svg class="icon-inline icon-lg mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M88 56H40a16 16 0 0 0-16 16v48a16 16 0 0 0 16 16h48a16 16 0 0 0 16-16V72a16 16 0 0 0-16-16zm0 160H40a16 16 0 0 0-16 16v48a16 16 0 0 0 16 16h48a16 16 0 0 0 16-16v-48a16 16 0 0 0-16-16zm0 160H40a16 16 0 0 0-16 16v48a16 16 0 0 0 16 16h48a16 16 0 0 0 16-16v-48a16 16 0 0 0-16-16zm416 24H168a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h336a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8zm0-320H168a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h336a8 8 0 0 0 8-8V88a8 8 0 0 0-8-8zm0 160H168a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h336a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8z"/></svg>            <span class="mobile-nav-tab-text small">Productos</span>
        </a>
                                    <div class="js-cart-link nav-tabs-mobile-item py-3 col btn btn-small  ">
                <a href="/comprar/">
                    <svg class="icon-inline icon-lg mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M551.991 64H129.28l-8.329-44.423C118.822 8.226 108.911 0 97.362 0H12C5.373 0 0 5.373 0 12v8c0 6.627 5.373 12 12 12h78.72l69.927 372.946C150.305 416.314 144 431.42 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-17.993-7.435-34.24-19.388-45.868C506.022 391.891 496.76 384 485.328 384H189.28l-12-64h331.381c11.368 0 21.177-7.976 23.496-19.105l43.331-208C578.592 77.991 567.215 64 551.991 64zM240 448c0 17.645-14.355 32-32 32s-32-14.355-32-32 14.355-32 32-32 32 14.355 32 32zm224 32c-17.645 0-32-14.355-32-32s14.355-32 32-32 32 14.355 32 32-14.355 32-32 32zm38.156-192H171.28l-36-192h406.876l-40 192z"/></svg>                    <span class="mobile-nav-tab-text">Carrito</span>
                                           <span id="mobile-cart-amount" class="js-cart-widget-amount text-brand ml-1 font-body">0</span>
                                    </a>
                </div>
                        </div>
</div>




<div id="nav-categories" class="js-modal  modal modal-nav-categories head-dark modal-right transition-fade modal-docked-md transition-long " style="display: none;">
        <div class="js-modal-close  modal-header ">
        <span class="modal-close ">
            <svg class="icon-inline svg-icon-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"/></svg>        </span>
                Productos        </div>
    <div class="modal-body">
                <div class="nav-primary">
            <ul class="nav-list">
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/equipos-en-venta/">IPHONE EN VENTA</a>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Colección
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/coleccion/">
                        Ver todo en Colección
                    </a>
                </li>
                                <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Fundas
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/coleccion/fundas2/">
                        Ver todo en Fundas
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/coleccion/fundas2/iphone-12-pro-max-iph-12-pro-iph-12-iph-12-mini/">iPhone 12 Pro Max/ iPh 12 Pro/ iPh 12/ iPh 12 Mini</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/coleccion/fundas2/iphone-11-pro-max-iph-11-pro-iph-11/">iPhone 11 Pro Max / iPh 11 Pro/ iPh 11</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/coleccion/fundas2/iphone-6-6s-plus/">iPhone 6/6s Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/coleccion/fundas2/samsung-s20-s20-plus-s20-ultra/">Samsung S20/ S20 Plus/ S20 Ultra</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/coleccion/fundas2/samsung-s10-s10e-s10-plus/">Samsung S10/ S10e / S10 Plus</a>
        </li>
    
            </ul>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Accesorios
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/">
                        Ver todo en Accesorios
                    </a>
                </li>
                                <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Cables
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/cables/">
                        Ver todo en Cables
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/cables/iphone/">iPhone</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/cables/tipo-c/">Tipo C</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/cables/micro-usb/">Micro USB</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/auriculares/">Auriculares</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/jbl/">JBL</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/parlantes/">Parlantes</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/cargadores/">Cargadores</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/fundas-cargadoras/">Fundas Cargadoras</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/power-banks/">Power Banks</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/protector-camara-trasera/">Protector Cámara Trasera</a>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Soportes
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/soportes/">
                        Ver todo en Soportes
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/soportes/para-auto/">Para Auto</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/soportes/anillos/">Anillos</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/tripodes/">Trípodes</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/aros-de-luz/">Aros de Luz</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/pendrives/">Pendrives</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/smartwatch/">SmartWatch</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/accesorios/gaming/">GAMING</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Fundas
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/">
                        Ver todo en Fundas
                    </a>
                </li>
                                <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Samsung
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/">
                        Ver todo en Samsung
                    </a>
                </li>
                                <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Galaxy Note
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/">
                        Ver todo en Serie Galaxy Note
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-20-ultra/">Samsung Note 20 Ultra</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-20/">Samsung Note 20</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-10-plus/">Samsung Note 10 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-10/">Samsung Note 10</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-9/">Samsung Note 9</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-8/">Samsung Note 8</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Galaxy S
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/">
                        Ver todo en Serie Galaxy S
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s21-ultra/">Samsung S21 Ultra</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s21-plus/">Samsung S21 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s21/">Samsung S21</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s20-fe/">Samsung S20 FE</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s20-ultra/">Samsung S20 Ultra</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s20-plus/">Samsung S20 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s20/">Samsung S20</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s10-plus/">Samsung S10 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s10e-lite/">Samsung S10e /  Lite</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s10/">Samsung S10</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s9-plus/">Samsung S9 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s9/">Samsung S9</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s8-plus/">Samsung S8 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s8/">Samsung S8</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s7-edge/">Samsung S7 Edge</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s6-edge-plus/">Samsung S6 Edge Plus </a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s6-edge/">Samsung S6 Edge</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s6/">Samsung S6</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s7/">Samsung S7</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Galaxy A
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/">
                        Ver todo en Serie Galaxy A
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a01-core/">Samsung A01 Core</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a71/">Samsung A71</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a51/">Samsung A51</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a311/">Samsung A31</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a21s2/">Samsung A21s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a11/">Samsung A11</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/galaxy-a01/">Samsung A01</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/galaxy-a20s/">Samsung A20s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a10s1/">Samsung A10s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a702/">Samsung A70</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a5-2016/">Samsung A5 2016</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a5-2017/">Samsung A5 2017</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a8-2018/">Samsung A8 2018</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a7-2018/">Samsung A7 2018</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a9-2018/">Samsung A9 2018</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a30s/">Samsung A30s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a501/">Samsung A50</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a80/">Samsung A80</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a30/">Samsung A30</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a20/">Samsung A20</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Galaxy J
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/">
                        Ver todo en Serie Galaxy J
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j8/">Samsung J8</a>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Samsung J7
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/">
                        Ver todo en Samsung J7
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-2016/">Samsung J7 2016</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-prime/">Samsung J7 Prime</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-j7-neo/">Samsung J7 J7 Neo</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-max/">Samsung J7 Max</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-duo/">Samsung J7 Duo</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Samsung J4
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j41/">
                        Ver todo en Samsung J4
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j41/samsung-j4/">Samsung J4 2018</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j41/samsung-j4-core/">Samsung J4 Core</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j41/samsung-j4-plus/">Samsung J4 Plus</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Samsung J2
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j2/">
                        Ver todo en Samsung J2
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j2/samsung-j2-prime/">Samsung J2 Prime</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j2/samsung-j2-core/">Samsung J2 Core</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j5-prime/">Samsung J5 Prime</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Galaxy M
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-m/">
                        Ver todo en Serie Galaxy M
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-m/samsung-m30/">Samsung M30</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-m/samsung-m20/">Samsung M20</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-m/samsung-m10/">Samsung M10</a>
        </li>
    
            </ul>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    iPhone
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/">
                        Ver todo en iPhone
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-12-pro-max/">iPhone 12 Pro Max</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-12-pro/">iPhone 12 Pro</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-12/">iPhone 12</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-12-mini/">iPhone 12 Mini</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-11-pro-max/">iPhone 11 Pro Max</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-11-pro/">iPhone 11 Pro</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-11/">iPhone 11</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-xs-max1/">iPhone Xs Max</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-xr/">iPhone Xr</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-x-xs/">iPhone X/Xs</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-7-plus-8-plus/">iPhone 7 Plus/ 8 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-7-8/">iPhone 7/8</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-6-plus-6s-plus1/">iPhone 6 Plus / 6s Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-6-6s1/">iPhone 6 6s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/iphone1/iphone-se-2020/">iPhone SE 2020</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Xiaomi
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/">
                        Ver todo en Xiaomi
                    </a>
                </li>
                                <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Mi
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi/">
                        Ver todo en Serie Mi
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi/mi-10-pro/">Mi 10 Pro</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi/mi-10/">Mi 10</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Mi Note
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi-note/">
                        Ver todo en Serie Mi Note
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi-note/mi-note-10/">Mi Note 10</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Redmi Note
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/">
                        Ver todo en Serie Redmi Note
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-9-pro/">Redmi Note 9 Pro</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-9s/">Redmi Note 9s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-9/">Redmi Note 9</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-8-pro/">Redmi Note 8 Pro</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-8/">Redmi Note 8</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-7/">Redmi Note 7</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Redmi
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi/">
                        Ver todo en Serie Redmi
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi/redmi-9/">Redmi 9</a>
        </li>
    
            </ul>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Motorola 
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/">
                        Ver todo en Motorola 
                    </a>
                </li>
                                <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Moto One
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/">
                        Ver todo en Serie Moto One
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one-fusion/">Motorola One Fusion</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one-hyper/">Motorola One Hyper</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one-zoom/">Motorola One Zoom</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one-vision/">Motorola One Vision</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one/">Motorola One</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Moto E
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/">
                        Ver todo en Serie Moto E
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/motorola-e7-plus/">Motorola E7 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/motorola-e6s/">Motorola E6s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/motorola-e6-plus/">Motorola E6 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/motorola-e6-play/">Motorola E6 Play</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie G
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-g/">
                        Ver todo en Serie G
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-g/motorola-g9-plus/">Motorola G9 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-g/motorola-g9-g9-play/">Motorola G9/ G9 Play</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-g/motorola-g4-g4-plus/">Motorola G4 G4 Plus</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Z
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/seria-z/">
                        Ver todo en Serie Z
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/seria-z/motorola-z3-play/">Motorola Z3 Play</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/seria-z/motorola-z2-play/">Motorola Z2 Play</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Moto C
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-c/">
                        Ver todo en Serie Moto C
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-c/motorola-c/">Motorola C</a>
        </li>
    
            </ul>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/ipad/">iPad</a>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Huawei
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/huawei1/">
                        Ver todo en Huawei
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/fundas/huawei1/mate-9/">Mate 9</a>
        </li>
    
            </ul>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Vidrios Templados
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/">
                        Ver todo en Vidrios Templados
                    </a>
                </li>
                                <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    iPhone
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/iphone2/">
                        Ver todo en iPhone
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/iphone2/iphone-12-pro-max1/">iPhone 12 Pro Max</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/iphone2/iphone-12-pro1/">iPhone 12 Pro</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/iphone2/iphone-121/">iPhone 12</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/iphone2/iphone-11-pro-max1/">iPhone 11 Pro Max</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/iphone2/iphone-111/">iPhone 11</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/iphone2/iphone-xr2/">iPhone Xr</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/iphone2/iphone-7-81/">iPhone 7/8</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Samsung
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/">
                        Ver todo en Samsung
                    </a>
                </li>
                                <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Samsung Serie Note
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-note/">
                        Ver todo en Samsung Serie Note
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-note/samsung-note-201/">Samsung Note 20</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Samsung Serie S
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-s/">
                        Ver todo en Samsung Serie S
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-s/samsung-s10-plus2/">Samsung S10 Plus</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Samsung Serie A 
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-a/">
                        Ver todo en Samsung Serie A 
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-a/samsung-a712/">Samsung A71</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-a/samsung-a512/">Samsung A51</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-a/samsung-a31/">Samsung A31</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-a/samsung-a21s/">Samsung A21s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-a/samsung-a111/">Samsung A11</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-a/samsung-a30s1/">Samsung A30s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-a/samsung-a20s/">Samsung A20s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-a/samsung-a10s/">Samsung A10s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-a/samsung-a70/">Samsung A70</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/samsung3/samsung-serie-a/samsung-a502/">Samsung A50</a>
        </li>
    
            </ul>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Motorola
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/">
                        Ver todo en Motorola
                    </a>
                </li>
                                <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Motorola Serie G
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-g/">
                        Ver todo en Motorola Serie G
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-g/motorola-g9-plus1/">Motorola G9 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-g/motorola-g8-power/">Motorola G8 Power</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-g/motorola-g8-plus/">Motorola G8 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-g/motorola-g8-play/">Motorola G8 Play</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-g/motorola-g6-plus/">Motorola G6 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-g/motorola-g6/">Motorola G6</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-g/motorola-g7-power/">Motorola G7 Power</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-g/motorola-g7-plus/">Motorola G7 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-g/motorola-g7/">Motorola G7</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Motorola Serie E
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-e/">
                        Ver todo en Motorola Serie E
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-e/motorola-e6-plus1/">Motorola E6 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-e/motorola-e6-play1/">Motorola E6 Play</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Motorola Serie One
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-one/">
                        Ver todo en Motorola Serie One
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-one/motorola-one-zoom1/">Motorola One Zoom</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-one/motorola-one-hyper1/">Motorola One Hyper</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-one/motorola-one-vision1/">Motorola One Vision</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/motorola1/motorola-serie-one/motorola-one1/">Motorola One</a>
        </li>
    
            </ul>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Xiaomi
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/">
                        Ver todo en Xiaomi
                    </a>
                </li>
                                <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Mi
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/serie-mi1/">
                        Ver todo en Serie Mi
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/serie-mi1/xiaomi-mi-10-pro/">Xiaomi Mi 10 Pro</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/serie-mi1/xiaomi-mi-10/">Xiaomi Mi 10</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Mi Note
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/serie-mi-note1/">
                        Ver todo en Serie Mi Note
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/serie-mi-note1/xiaomi-mi-note-10-lite/">Xiaomi Mi Note 10 Lite</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Redmi Note
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/serie-redmi-note1/">
                        Ver todo en Serie Redmi Note
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/serie-redmi-note1/xiaomi-redmi-note-9-pro/">Xiaomi Redmi Note 9 Pro</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/serie-redmi-note1/xiaomi-redmi-note-9/">Xiaomi Redmi Note 9</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/serie-redmi-note1/xiaomi-redmi-note-8-pro/">Xiaomi Redmi Note 8 Pro</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/serie-redmi-note1/xiaomi-redmi-note-8/">Xiaomi Redmi Note 8</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Redmi
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/serie-redmi1/">
                        Ver todo en Serie Redmi
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/serie-redmi1/redmi-9c/">Redmi 9C</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/xiaomi1/serie-redmi1/redmi-9a/">Redmi 9A</a>
        </li>
    
            </ul>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Huawei
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/huawei/">
                        Ver todo en Huawei
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/vidrios-templados/huawei/huawei-mate-10-lite/">Huawei Mate 10 Lite</a>
        </li>
    
            </ul>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Servicio Técnico
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/">
                        Ver todo en Servicio Técnico
                    </a>
                </li>
                                <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    iPhone
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/">
                        Ver todo en iPhone
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-xs-max/">iPhone Xs Max</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-xr1/">iPhone Xr</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-xs/">iPhone Xs</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-x/">iPhone X</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-11-pro1/">iPhone 11 Pro</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-112/">iPhone 11</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-8-plus/">iPhone 8 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-8/">iPhone 8</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-7-plus/">iPhone 7 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-7/">iPhone 7</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-6s-plus/">iPhone 6s Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-6-plus/">iPhone 6 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-6s/">iPhone 6s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-6/">iPhone 6</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-5-se/">iPhone 5 SE</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-5s/">iPhone 5s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-5c/">iPhone 5c</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-5/">iPhone 5</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Samsung
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/">
                        Ver todo en Samsung
                    </a>
                </li>
                                <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie S
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/">
                        Ver todo en Serie S
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s20-ultra1/">Samsung S20 Ultra</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s20-plus1/">Samsung S20 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s201/">Samsung S20</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s10-plus1/">Samsung S10 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s101/">Samsung S10</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s9-plus1/">Samsung S9 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s91/">Samsung S9</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s8-plus1/">Samsung S8 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s81/">Samsung S8</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie Note
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/">
                        Ver todo en Serie Note
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-20-ultra/">Samsung Note 20 Ultra</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-20/">Samsung Note 20</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-10-plus/">Samsung Note 10 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-10/">Samsung Note 10</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-9/">Samsung Note 9</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie A
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/">
                        Ver todo en Serie A
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a01-core1/">Samsung A01 Core</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a711/">Samsung A71</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a701/">Samsung A70</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a511/">Samsung A51</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a50s/">Samsung A50s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a50/">Samsung A50</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a312/">Samsung A31</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a21s1/">Samsung A21s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a21/">Samsung A21</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a112/">Samsung A11</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a20s1/">Samsung A20s</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/galaxy-a20/">Samsung A20</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a10/">Samsung A10</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a8-plus/">Samsung A8 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a6-plus/">Samsung A6 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a6-2018/">Samsung A6 2018</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Serie J
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/">
                        Ver todo en Serie J
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j8-2018/">Samsung J8 2018</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j7-neo/">Samsung J7 Neo</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j7-pro/">Samsung J7 Pro</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j7-prime1/">Samsung J7 Prime</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j6-plus/">Samsung J6 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j5-prime1/">Samsung J5 Prime</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j4-plus1/">Samsung J4 Plus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j4-2018/">Samsung J4 2018</a>
        </li>
    
            </ul>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Baterías
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/baterias/">
                        Ver todo en Baterías
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/baterias/baterias-iphone/">Baterías iPhone</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/baterias/baterias-samsung/">Baterías Samsung</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Pin de Carga
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/pin-de-carga/">
                        Ver todo en Pin de Carga
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/pin-de-carga/reparacion-pin-de-carga-iphone/">Reparación Pin de Carga iPhone</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/ipads/">iPads</a>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Cámara Selfie + Flex de Proximidad
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/camara-selfie-flex-de-proximidad/">
                        Ver todo en Cámara Selfie + Flex de Proximidad
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/servicio-tecnico/camara-selfie-flex-de-proximidad/iphone4/">iPhone</a>
        </li>
    
            </ul>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/tablets/">Tablets</a>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Premium
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/premium/">
                        Ver todo en Premium
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/premium/itrend/">iTrend</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/premium/samsung2/">Samsung</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/premium/baseus/">Baseus</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/premium/icase-pro/">iCase Pro</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    Sale
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/sale/">
                        Ver todo en Sale
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/sale/iphone5/">iPhone</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/sale/samsung1/">Samsung</a>
        </li>
    
            </ul>
        </li>
                    <li class="nav-item item-with-subitems">
            <div class="js-nav-list-toggle-accordion">
                <a class="js-toggle-page-accordion nav-list-link" href="#">
                    BLACK WEEK
                    <span class="nav-list-arrow transition-soft">
                        <svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>                    </span>
                </a>
            </div>
            <ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
                <li class="nav-item item-with-subitems">
                    <a class="nav-list-link" href="https://www.swoptech.com.ar/black-week/">
                        Ver todo en BLACK WEEK
                    </a>
                </li>
                                <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/black-week/fundas1/">Fundas</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/black-week/cables-cargadores/">Cables &amp; Cargadores</a>
        </li>
                    <li class="nav-item">
            <a class="nav-list-link" href="https://www.swoptech.com.ar/black-week/auriculares-parlantes/">Auriculares &amp; Parlantes</a>
        </li>
    
            </ul>
        </li>
    
            </ul>
        </div>
        </div>
        </div>
<div class="js-modal-overlay modal-overlay " data-modal-id="#nav-categories" style="display: none;"></div>    
        
            <section class="js-section-advertising section-advertising">
	<div class="container">
		<div class="row-fluid py-2">
			<div class="col text-center text-primary">
																						🔥 Hasta 18 cuotas sin interés en Reparaciones - Exclusivo Venta Telefónica 🔥 Asesoramiento por WhatsApp 11 7362-5083
																		</div>
		</div>
	</div>
</section>    
	<div class="container-fluid">
		<div class="js-head-logo row align-items-center">
			<div class="col-12 col-md-6 text-center text-md-left"><div id="logo" class="logo-img-container ">
    <a href="http://www.swoptech.com.ar" title="" ><img src="//d2r9epyceweg5n.cloudfront.net/stores/001/363/975/themes/common/logo-335238994-1603117513-ccb683551f8d8afc45bebdeaa38d59be1603117513-320-0.png?0" alt="Swop Tech"  class="logo-img  transition-soft-slow" /></a>
</div>
<div id="no-logo" class="logo-text-container  hidden">
    <a class="logo-text h2" href="http://www.swoptech.com.ar">Swop Tech</a>
</div>
 </div>
			<div class="col-6 col-md-6 text-right">
                <div class="utilities-container">
	<div class="row d-none d-md-block">
		<div class="col text-right align-items-right">
			<div class="utilities-item">
							</div>
													<div class="utilities-item pr-1">
					                <a class="social-icon" href="http://instagram.com/swoptech" target="_blank" aria-label="instagram Swop Tech">
                                                    <svg class="icon-inline icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>

        </a>
                    <a class="social-icon" href="https://facebook.com/swoptech" target="_blank" aria-label="facebook Swop Tech">
                                                    <svg class="icon-inline icon-lg" viewBox="0 0 320 512"><path d="M279.1 288l14.3-92.7h-89v-60c0-25.4 12.5-50.2 52.3-50.2H297V6.4S260.4 0 225.4 0C152 0 104.3 44.4 104.3 124.7v70.6H22.9V288h81.4v224h100.2V288z"/></svg>        </a>
                                    				</div>
					</div>
	</div>
	<div class="row">
		<div class="col text-right align-items-right">
			<div class="utilities-item p-0 text-right d-none d-md-inline-block">
				<ul class="nav-account p-0" data-store="account-links">
																	<li class="nav-accounts-item d-inline-block pr-4 text-uppercase"><svg class="icon-inline icon-1x pr-1 svg-icon-secondary" viewBox="0 0 512 512"><path d="M384 250v12c0 6.6-5.4 12-12 12h-98v98c0 6.6-5.4 12-12 12h-12c-6.6 0-12-5.4-12-12v-98h-98c-6.6 0-12-5.4-12-12v-12c0-6.6 5.4-12 12-12h98v-98c0-6.6 5.4-12 12-12h12c6.6 0 12 5.4 12 12v98h98c6.6 0 12 5.4 12 12zm120 6c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-32 0c0-119.9-97.3-216-216-216-119.9 0-216 97.3-216 216 0 119.9 97.3 216 216 216 119.9 0 216-97.3 216-216z"/></svg> <a href="/account/register" title="" class="nav-accounts-link">Crear cuenta</a></li>
												<li class="nav-accounts-item d-inline-block pr-4 text-uppercase"><svg class="icon-inline icon-1x pr-1 svg-icon-secondary" viewBox="0 0 496 512"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z"/></svg> <a href="/account/login/" title="" class="nav-accounts-link">Iniciar sesión</a></li>
									</ul>
			</div>
						<div class="utilities-item p-0 pr-1 text-right d-none d-md-inline-block">
				<div id="ajax-cart" class="js-cart-summary cart-summary pt-2 pb-2 pb-md-4">
					<a href="/comprar/" class="  js-cart-link" >
						<svg class="icon-inline icon-1x svg-icon-secondary pr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M551.991 64H129.28l-8.329-44.423C118.822 8.226 108.911 0 97.362 0H12C5.373 0 0 5.373 0 12v8c0 6.627 5.373 12 12 12h78.72l69.927 372.946C150.305 416.314 144 431.42 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-17.993-7.435-34.24-19.388-45.868C506.022 391.891 496.76 384 485.328 384H189.28l-12-64h331.381c11.368 0 21.177-7.976 23.496-19.105l43.331-208C578.592 77.991 567.215 64 551.991 64zM240 448c0 17.645-14.355 32-32 32s-32-14.355-32-32 14.355-32 32-32 32 14.355 32 32zm224 32c-17.645 0-32-14.355-32-32s14.355-32 32-32 32 14.355 32 32-14.355 32-32 32zm38.156-192H171.28l-36-192h406.876l-40 192z"/></svg>						<span class="js-cart-widget-amount cart-widget-amount">0</span> - <span class="js-cart-widget-total cart-widget-total" data-priceraw="0">$0,00</span>
					</a>
					<div class="js-cart-summary-detail cart-summary-detail cart-dark shadow-soft" style="display: none;">
  <form action="/comprar/" method="post" class="js-ajax-cart-panel">
    <div class="js-ajax-cart-list cart-row">
                    </div>
    <div class="js-empty-ajax-cart cart-row" >
     	        <div class="alert alert-info h5">El carrito de compras está vacío.</div>
    </div>
    <div id="error-ajax-stock" style="display: none;">
    	<div class="alert alert-warning">
         	¡Uy! No tenemos más stock de este producto para agregarlo al carrito. Si querés podés<a href="/productos/" class="btn-link ml-1">ver otros acá</a>
        </div>
    </div>
    <div class="cart-row cart-summary-total pt-2 pb-3">
        <div class="subtotal-price hidden" data-priceraw="0"></div>
        <h5 class="js-visible-on-cart-filled row no-gutters mb-1 " style="display:none;">
        <span class="col text-left">
          Subtotal
        </span>
        <strong class="js-ajax-cart-total js-cart-subtotal col text-right" data-priceraw="0">$0,00</strong>
      </h5>
    </div>
    <div class="row pt-2">

      <div class="col-6 my-2">
        <a href="/comprar/" class=" btn btn-primary btn-medium w-100 px-1 d-block"  style="display:none;">
          <svg class="icon-inline icon-md svg-icon-secondary pr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M551.991 64H129.28l-8.329-44.423C118.822 8.226 108.911 0 97.362 0H12C5.373 0 0 5.373 0 12v8c0 6.627 5.373 12 12 12h78.72l69.927 372.946C150.305 416.314 144 431.42 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-17.993-7.435-34.24-19.388-45.868C506.022 391.891 496.76 384 485.328 384H189.28l-12-64h331.381c11.368 0 21.177-7.976 23.496-19.105l43.331-208C578.592 77.991 567.215 64 551.991 64zM240 448c0 17.645-14.355 32-32 32s-32-14.355-32-32 14.355-32 32-32 32 14.355 32 32zm224 32c-17.645 0-32-14.355-32-32s14.355-32 32-32 32 14.355 32 32-14.355 32-32 32zm38.156-192H171.28l-36-192h406.876l-40 192z"/></svg> Ver carrito
        </a>
      </div>

      
      <div class="js-ajax-cart-submit col-6 my-2"  style="display:none;" id="ajax-cart-submit-div">
        <input class="btn btn-secondary btn-background btn-medium btn-bold w-100 d-block" type="submit" name="go_to_checkout" value="Iniciar Compra"/>
      </div>
        
    </div>
  </form>
</div>				</div>
			</div>
					</div>
	</div>
</div>            </div>
		</div>
        <div class="row">
            <div class="col-auto col-md-8 p-0">
                                <div class="nav-desktop d-none d-md-block">
    <ul class="js-nav-desktop-list nav-desktop-list" data-store="navigation">
    	<span class="js-nav-desktop-list-arrow js-nav-desktop-list-arrow-left nav-desktop-list-arrow nav-desktop-list-arrow-left disable" style="display: none"><svg class="icon-inline icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"/></svg></span>
        
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/equipos-en-venta/">iPhone en Venta</a>
        </li>
		    	<li class="nav-item js-item-subitems-desktop nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/">Servicio Técnico
		            	        	</a>
	        </div>
	        <div class="js-desktop-dropdown desktop-dropdown shadow-soft">				<ul class="desktop-list-subitems list-subitems nav-list-accordion" >
								        						
	    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/">iPhone
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-xs-max/">iPhone Xs Max</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-xr1/">iPhone Xr</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-xs/">iPhone Xs</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-x/">iPhone X</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-11-pro1/">iPhone 11 Pro</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-112/">iPhone 11</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-8-plus/">iPhone 8 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-8/">iPhone 8</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-7-plus/">iPhone 7 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-7/">iPhone 7</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-6s-plus/">iPhone 6s Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-6-plus/">iPhone 6 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-6s/">iPhone 6s</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-6/">iPhone 6</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-5-se/">iPhone 5 SE</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-5s/">iPhone 5s</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-5c/">iPhone 5c</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-5/">iPhone 5</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/">Samsung
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
	    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/">Serie S
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s20-ultra1/">Samsung S20 Ultra</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s20-plus1/">Samsung S20 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s201/">Samsung S20</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s10-plus1/">Samsung S10 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s101/">Samsung S10</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s9-plus1/">Samsung S9 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s91/">Samsung S9</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s8-plus1/">Samsung S8 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s81/">Samsung S8</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/">Serie Note
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-20-ultra/">Samsung Note 20 Ultra</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-20/">Samsung Note 20</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-10-plus/">Samsung Note 10 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-10/">Samsung Note 10</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-9/">Samsung Note 9</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/">Serie A
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a01-core1/">Samsung A01 Core</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a711/">Samsung A71</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a701/">Samsung A70</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a511/">Samsung A51</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a50s/">Samsung A50s</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a50/">Samsung A50</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a312/">Samsung A31</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a21s1/">Samsung A21s</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a21/">Samsung A21</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a112/">Samsung A11</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a20s1/">Samsung A20s</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/galaxy-a20/">Samsung A20</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a10/">Samsung A10</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a8-plus/">Samsung A8 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a6-plus/">Samsung A6 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a6-2018/">Samsung A6 2018</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/">Serie J
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j8-2018/">Samsung J8 2018</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j7-neo/">Samsung J7 Neo</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j7-pro/">Samsung J7 Pro</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j7-prime1/">Samsung J7 Prime</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j6-plus/">Samsung J6 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j5-prime1/">Samsung J5 Prime</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j4-plus1/">Samsung J4 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j4-2018/">Samsung J4 2018</a>
        </li>
				        					
				</ul>
					</li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/baterias/">Baterías
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/baterias/baterias-iphone/">Baterías iPhone</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/baterias/baterias-samsung/">Baterías Samsung</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/pin-de-carga/">Pin de Carga
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/pin-de-carga/reparacion-pin-de-carga-iphone/">Reparación Pin de Carga iPhone</a>
        </li>
				        					
				</ul>
					</li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/ipads/">iPads</a>
        </li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/camara-selfie-flex-de-proximidad/">Cámara Selfie + Flex de Proximidad
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/camara-selfie-flex-de-proximidad/iphone4/">iPhone</a>
        </li>
				        					
				</ul>
					</li>
				        					
				</ul>
			</div>		</li>
		    	<li class="nav-item js-item-subitems-desktop nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/">Fundas
		            	        	</a>
	        </div>
	        <div class="js-desktop-dropdown desktop-dropdown shadow-soft">				<ul class="desktop-list-subitems list-subitems nav-list-accordion" >
								        						
	    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/">Samsung
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
	    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/">Serie Galaxy Note
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-20-ultra/">Samsung Note 20 Ultra</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-20/">Samsung Note 20</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-10-plus/">Samsung Note 10 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-10/">Samsung Note 10</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-9/">Samsung Note 9</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-8/">Samsung Note 8</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/">Serie Galaxy S
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s21-ultra/">Samsung S21 Ultra</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s21-plus/">Samsung S21 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s21/">Samsung S21</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s20-fe/">Samsung S20 FE</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s20-ultra/">Samsung S20 Ultra</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s20-plus/">Samsung S20 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s20/">Samsung S20</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s10-plus/">Samsung S10 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s10e-lite/">Samsung S10e /  Lite</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s10/">Samsung S10</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s9-plus/">Samsung S9 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s9/">Samsung S9</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s8-plus/">Samsung S8 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s8/">Samsung S8</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s7-edge/">Samsung S7 Edge</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s6-edge-plus/">Samsung S6 Edge Plus </a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s6-edge/">Samsung S6 Edge</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s6/">Samsung S6</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s7/">Samsung S7</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/">Serie Galaxy A
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a01-core/">Samsung A01 Core</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a71/">Samsung A71</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a51/">Samsung A51</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a311/">Samsung A31</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a21s2/">Samsung A21s</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a11/">Samsung A11</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/galaxy-a01/">Samsung A01</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/galaxy-a20s/">Samsung A20s</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a10s1/">Samsung A10s</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a702/">Samsung A70</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a5-2016/">Samsung A5 2016</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a5-2017/">Samsung A5 2017</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a8-2018/">Samsung A8 2018</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a7-2018/">Samsung A7 2018</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a9-2018/">Samsung A9 2018</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a30s/">Samsung A30s</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a501/">Samsung A50</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a80/">Samsung A80</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a30/">Samsung A30</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a20/">Samsung A20</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/">Serie Galaxy J
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j8/">Samsung J8</a>
        </li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/">Samsung J7
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-2016/">Samsung J7 2016</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-prime/">Samsung J7 Prime</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-j7-neo/">Samsung J7 J7 Neo</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-max/">Samsung J7 Max</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-duo/">Samsung J7 Duo</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j41/">Samsung J4
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j41/samsung-j4/">Samsung J4 2018</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j41/samsung-j4-core/">Samsung J4 Core</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j41/samsung-j4-plus/">Samsung J4 Plus</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j2/">Samsung J2
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j2/samsung-j2-prime/">Samsung J2 Prime</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j2/samsung-j2-core/">Samsung J2 Core</a>
        </li>
				        					
				</ul>
					</li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j5-prime/">Samsung J5 Prime</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-m/">Serie Galaxy M
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-m/samsung-m30/">Samsung M30</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-m/samsung-m20/">Samsung M20</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-m/samsung-m10/">Samsung M10</a>
        </li>
				        					
				</ul>
					</li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/">iPhone
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-12-pro-max/">iPhone 12 Pro Max</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-12-pro/">iPhone 12 Pro</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-12/">iPhone 12</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-12-mini/">iPhone 12 Mini</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-11-pro-max/">iPhone 11 Pro Max</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-11-pro/">iPhone 11 Pro</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-11/">iPhone 11</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-xs-max1/">iPhone Xs Max</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-xr/">iPhone Xr</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-x-xs/">iPhone X/Xs</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-7-plus-8-plus/">iPhone 7 Plus/ 8 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-7-8/">iPhone 7/8</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-6-plus-6s-plus1/">iPhone 6 Plus / 6s Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-6-6s1/">iPhone 6 6s</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-se-2020/">iPhone SE 2020</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/">Xiaomi
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
	    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi/">Serie Mi
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi/mi-10-pro/">Mi 10 Pro</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi/mi-10/">Mi 10</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi-note/">Serie Mi Note
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi-note/mi-note-10/">Mi Note 10</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/">Serie Redmi Note
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-9-pro/">Redmi Note 9 Pro</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-9s/">Redmi Note 9s</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-9/">Redmi Note 9</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-8-pro/">Redmi Note 8 Pro</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-8/">Redmi Note 8</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-7/">Redmi Note 7</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi/">Serie Redmi
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi/redmi-9/">Redmi 9</a>
        </li>
				        					
				</ul>
					</li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/">Motorola 
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
	    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/">Serie Moto One
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one-fusion/">Motorola One Fusion</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one-hyper/">Motorola One Hyper</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one-zoom/">Motorola One Zoom</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one-vision/">Motorola One Vision</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one/">Motorola One</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/">Serie Moto E
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/motorola-e7-plus/">Motorola E7 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/motorola-e6s/">Motorola E6s</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/motorola-e6-plus/">Motorola E6 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/motorola-e6-play/">Motorola E6 Play</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-g/">Serie G
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-g/motorola-g9-plus/">Motorola G9 Plus</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-g/motorola-g9-g9-play/">Motorola G9/ G9 Play</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-g/motorola-g4-g4-plus/">Motorola G4 G4 Plus</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/seria-z/">Serie Z
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/seria-z/motorola-z3-play/">Motorola Z3 Play</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/seria-z/motorola-z2-play/">Motorola Z2 Play</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-c/">Serie Moto C
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-c/motorola-c/">Motorola C</a>
        </li>
				        					
				</ul>
					</li>
				        					
				</ul>
					</li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/ipad/">iPad</a>
        </li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/fundas/huawei1/">Huawei
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/huawei1/mate-9/">Mate 9</a>
        </li>
				        					
				</ul>
					</li>
				        					
				</ul>
			</div>		</li>
		    	<li class="nav-item js-item-subitems-desktop nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/accesorios/">Accesorios
		            	        	</a>
	        </div>
	        <div class="js-desktop-dropdown desktop-dropdown shadow-soft">				<ul class="desktop-list-subitems list-subitems nav-list-accordion" >
								        						
	    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/accesorios/cables/">Cables
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/cables/iphone/">iPhone</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/cables/tipo-c/">Tipo C</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/cables/micro-usb/">Micro USB</a>
        </li>
				        					
				</ul>
					</li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/auriculares/">Auriculares</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/jbl/">JBL</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/parlantes/">Parlantes</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/cargadores/">Cargadores</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/fundas-cargadoras/">Fundas Cargadoras</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/power-banks/">Power Banks</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/protector-camara-trasera/">Protector Cámara Trasera</a>
        </li>
		    	<li class="nav-item  nav-item-desktop item-with-subitems">
    		<div class="nav-item-container ">
	            <a class=" nav-list-link " href="https://www.swoptech.com.ar/accesorios/soportes/">Soportes
		            	        	</a>
	        </div>
	        				<ul class=" list-subitems nav-list-accordion" >
								        						
			<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/soportes/para-auto/">Para Auto</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/soportes/anillos/">Anillos</a>
        </li>
				        					
				</ul>
					</li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/tripodes/">Trípodes</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/aros-de-luz/">Aros de Luz</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/pendrives/">Pendrives</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/smartwatch/">SmartWatch</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/gaming/">GAMING</a>
        </li>
				        					
				</ul>
			</div>		</li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/tiendas/">Tiendas</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link selected" href="https://www.swoptech.com.ar/contacto/">Contacto</a>
        </li>
				<li class="nav-item nav-item-desktop">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/about-us/">¿Quiénes Somos?</a>
        </li>
	        <span class="js-nav-desktop-list-arrow js-nav-desktop-list-arrow-right nav-desktop-list-arrow nav-desktop-list-arrow-right" style="display: none"><svg class="icon-inline icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"/></svg></span>
    </ul>
</div>
                                <a href="#" class="js-modal-open utilities-link utilities-item btn btn-primary btn-hamburger d-md-none" data-toggle="#nav-hamburger" aria-label="Menú">
                    <svg class="icon-inline icon-1x" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"/></svg>                </a>
            </div>
            <div class="col col-md-4 p-0">
                <form class="js-search-container js-search-form" action="/search/" method="get">
	<div class="form-group m-0">
        <input class="js-search-input form-control form-control-invert p-3 pr-5 search-input" autocomplete="off" type="search" name="q" placeholder="Buscar" aria-label="Buscador"/>
        <button type="submit" class="btn search-input-submit p-2 mr-2" value="Buscar" aria-label="Buscar">
            <svg class="icon-inline icon-lg svg-icon-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"/></svg>        </button>
	</div>
</form>
<div class="js-search-suggest search-suggest">
    </div>
            </div>
        </div>

	</div>    
    






</header>








    <div class="js-alert-added-to-cart notification-floating notification-hidden " style="display: none;">
        <div class="notification notification notification-primary">
            <div class="js-cart-notification-arrow-up notification-arrow-up"></div>
            <div class="notification-header">
                <div class="text-left mb-3 pr-3">
                    <strong>¡Ya agregamos tu producto al carrito!</strong>
                </div>
                <div class="js-cart-notification-close notification-close">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"/></svg>                </div>
            </div>
            <div class="js-cart-notification-item row">
                <div class="col-3 pr-0 notification-img">
                    <img src="" class="js-cart-notification-item-img img-fluid" />
                </div>
                <div class="col-9 text-left">
                    <div class="mb-1">
                        <span class="js-cart-notification-item-name"></span>
                        <span class="js-cart-notification-item-variant-container" style="display: none;">
                            (<span class="js-cart-notification-item-variant"></span>)
                        </span>
                    </div>
                    <div class="mb-1">
                        <span class="js-cart-notification-item-quantity"></span>
                        <span> x </span>
                        <strong class="js-cart-notification-item-price"></strong>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row h5 font-weight-normal mt-2 mb-3">
                <span class="col-auto text-left">
                    <strong>Total</strong> 
                    (<span class="js-cart-widget-amount">
                        0 
                    </span>
                    <span class="js-cart-counts-plural" style="display: none;">
                        productos):
                    </span>
                    <span class="js-cart-counts-singular" style="display: none;">
                        producto):
                    </span>
                </span>
                <strong class="js-cart-total col text-right">$0,00</strong>
            </div>
            <a href="/comprar/" class="btn btn-primary btn-medium w-100 d-inline-block ">
                <svg class="icon-inline icon-md svg-icon-secondary pr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M551.991 64H129.28l-8.329-44.423C118.822 8.226 108.911 0 97.362 0H12C5.373 0 0 5.373 0 12v8c0 6.627 5.373 12 12 12h78.72l69.927 372.946C150.305 416.314 144 431.42 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-17.993-7.435-34.24-19.388-45.868C506.022 391.891 496.76 384 485.328 384H189.28l-12-64h331.381c11.368 0 21.177-7.976 23.496-19.105l43.331-208C578.592 77.991 567.215 64 551.991 64zM240 448c0 17.645-14.355 32-32 32s-32-14.355-32-32 14.355-32 32-32 32 14.355 32 32zm224 32c-17.645 0-32-14.355-32-32s14.355-32 32-32 32 14.355 32 32-14.355 32-32 32zm38.156-192H171.28l-36-192h406.876l-40 192z"/></svg> Ver carrito
            </a>
        </div>
    </div>















<div id="nav-hamburger" class="js-modal  modal modal-nav-hamburger modal-docked-small head-dark modal-left transition-fade modal-full transition-long " style="display: none;">
        <div class="js-modal-close  modal-header ">
        <span class="modal-close ">
            <svg class="icon-inline svg-icon-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"/></svg>        </span>
            </div>
    <div class="modal-body">
                
<div class="nav-primary">
    <ul class="nav-list mt-4" data-store="navigation">
        
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/equipos-en-venta/">iPhone en Venta</a>
        </li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Servicio Técnico
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/">	<strong>
																			Ver todo en Servicio Técnico
																	</strong>
				        	</a>
				        </li>
			        			        			        	
	    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">iPhone
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/">	<strong>
																			Ver todo en iPhone
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-xs-max/">iPhone Xs Max</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-xr1/">iPhone Xr</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-xs/">iPhone Xs</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-x/">iPhone X</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-11-pro1/">iPhone 11 Pro</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-112/">iPhone 11</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-8-plus/">iPhone 8 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-8/">iPhone 8</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-7-plus/">iPhone 7 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-7/">iPhone 7</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-6s-plus/">iPhone 6s Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-6-plus/">iPhone 6 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-6s/">iPhone 6s</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-6/">iPhone 6</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-5-se/">iPhone 5 SE</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-5s/">iPhone 5s</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-5c/">iPhone 5c</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/iphone3/iphone-5/">iPhone 5</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Samsung
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/">	<strong>
																			Ver todo en Samsung
																	</strong>
				        	</a>
				        </li>
			        			        			        	
	    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie S
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/">	<strong>
																			Ver todo en Serie S
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s20-ultra1/">Samsung S20 Ultra</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s20-plus1/">Samsung S20 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s201/">Samsung S20</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s10-plus1/">Samsung S10 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s101/">Samsung S10</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s9-plus1/">Samsung S9 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s91/">Samsung S9</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s8-plus1/">Samsung S8 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-s/samsung-s81/">Samsung S8</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Note
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/">	<strong>
																			Ver todo en Serie Note
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-20-ultra/">Samsung Note 20 Ultra</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-20/">Samsung Note 20</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-10-plus/">Samsung Note 10 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-10/">Samsung Note 10</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-note/samsung-note-9/">Samsung Note 9</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie A
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/">	<strong>
																			Ver todo en Serie A
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a01-core1/">Samsung A01 Core</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a711/">Samsung A71</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a701/">Samsung A70</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a511/">Samsung A51</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a50s/">Samsung A50s</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a50/">Samsung A50</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a312/">Samsung A31</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a21s1/">Samsung A21s</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a21/">Samsung A21</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a112/">Samsung A11</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a20s1/">Samsung A20s</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/galaxy-a20/">Samsung A20</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a10/">Samsung A10</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a8-plus/">Samsung A8 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a6-plus/">Samsung A6 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-a/samsung-a6-2018/">Samsung A6 2018</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie J
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/">	<strong>
																			Ver todo en Serie J
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j8-2018/">Samsung J8 2018</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j7-neo/">Samsung J7 Neo</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j7-pro/">Samsung J7 Pro</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j7-prime1/">Samsung J7 Prime</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j6-plus/">Samsung J6 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j5-prime1/">Samsung J5 Prime</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j4-plus1/">Samsung J4 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/samsung4/serie-j/samsung-j4-2018/">Samsung J4 2018</a>
        </li>
				        					
				</ul>
					</li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Baterías
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/baterias/">	<strong>
																			Ver todo en Baterías
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/baterias/baterias-iphone/">Baterías iPhone</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/baterias/baterias-samsung/">Baterías Samsung</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Pin de Carga
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/pin-de-carga/">	<strong>
																			Ver todo en Pin de Carga
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/pin-de-carga/reparacion-pin-de-carga-iphone/">Reparación Pin de Carga iPhone</a>
        </li>
				        					
				</ul>
					</li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/ipads/">iPads</a>
        </li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Cámara Selfie + Flex de Proximidad
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/camara-selfie-flex-de-proximidad/">	<strong>
																			Ver todo en Cámara Selfie + Flex de Proximidad
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/servicio-tecnico/camara-selfie-flex-de-proximidad/iphone4/">iPhone</a>
        </li>
				        					
				</ul>
					</li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Fundas
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/">	<strong>
																			Ver todo en Fundas
																	</strong>
				        	</a>
				        </li>
			        			        			        	
	    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Samsung
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/">	<strong>
																			Ver todo en Samsung
																	</strong>
				        	</a>
				        </li>
			        			        			        	
	    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Galaxy Note
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/">	<strong>
																			Ver todo en Serie Galaxy Note
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-20-ultra/">Samsung Note 20 Ultra</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-20/">Samsung Note 20</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-10-plus/">Samsung Note 10 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-10/">Samsung Note 10</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-9/">Samsung Note 9</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-note/galaxy-note-8/">Samsung Note 8</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Galaxy S
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/">	<strong>
																			Ver todo en Serie Galaxy S
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s21-ultra/">Samsung S21 Ultra</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s21-plus/">Samsung S21 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s21/">Samsung S21</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s20-fe/">Samsung S20 FE</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s20-ultra/">Samsung S20 Ultra</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s20-plus/">Samsung S20 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s20/">Samsung S20</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s10-plus/">Samsung S10 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s10e-lite/">Samsung S10e /  Lite</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s10/">Samsung S10</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s9-plus/">Samsung S9 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s9/">Samsung S9</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s8-plus/">Samsung S8 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s8/">Samsung S8</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s7-edge/">Samsung S7 Edge</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s6-edge-plus/">Samsung S6 Edge Plus </a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s6-edge/">Samsung S6 Edge</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s6/">Samsung S6</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-s/samsung-s7/">Samsung S7</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Galaxy A
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/">	<strong>
																			Ver todo en Serie Galaxy A
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a01-core/">Samsung A01 Core</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a71/">Samsung A71</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a51/">Samsung A51</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a311/">Samsung A31</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a21s2/">Samsung A21s</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a11/">Samsung A11</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/galaxy-a01/">Samsung A01</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/galaxy-a20s/">Samsung A20s</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a10s1/">Samsung A10s</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a702/">Samsung A70</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a5-2016/">Samsung A5 2016</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a5-2017/">Samsung A5 2017</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a8-2018/">Samsung A8 2018</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a7-2018/">Samsung A7 2018</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a9-2018/">Samsung A9 2018</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a30s/">Samsung A30s</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a501/">Samsung A50</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a80/">Samsung A80</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a30/">Samsung A30</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-a/samsung-a20/">Samsung A20</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Galaxy J
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/">	<strong>
																			Ver todo en Serie Galaxy J
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j8/">Samsung J8</a>
        </li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Samsung J7
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/">	<strong>
																			Ver todo en Samsung J7
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-2016/">Samsung J7 2016</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-prime/">Samsung J7 Prime</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-j7-neo/">Samsung J7 J7 Neo</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-max/">Samsung J7 Max</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j7/samsung-j7-duo/">Samsung J7 Duo</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Samsung J4
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j41/">	<strong>
																			Ver todo en Samsung J4
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j41/samsung-j4/">Samsung J4 2018</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j41/samsung-j4-core/">Samsung J4 Core</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j41/samsung-j4-plus/">Samsung J4 Plus</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Samsung J2
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j2/">	<strong>
																			Ver todo en Samsung J2
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j2/samsung-j2-prime/">Samsung J2 Prime</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j2/samsung-j2-core/">Samsung J2 Core</a>
        </li>
				        					
				</ul>
					</li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-j/samsung-j5-prime/">Samsung J5 Prime</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Galaxy M
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-m/">	<strong>
																			Ver todo en Serie Galaxy M
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-m/samsung-m30/">Samsung M30</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-m/samsung-m20/">Samsung M20</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/samsung/serie-galaxy-m/samsung-m10/">Samsung M10</a>
        </li>
				        					
				</ul>
					</li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">iPhone
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/">	<strong>
																			Ver todo en iPhone
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-12-pro-max/">iPhone 12 Pro Max</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-12-pro/">iPhone 12 Pro</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-12/">iPhone 12</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-12-mini/">iPhone 12 Mini</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-11-pro-max/">iPhone 11 Pro Max</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-11-pro/">iPhone 11 Pro</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-11/">iPhone 11</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-xs-max1/">iPhone Xs Max</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-xr/">iPhone Xr</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-x-xs/">iPhone X/Xs</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-7-plus-8-plus/">iPhone 7 Plus/ 8 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-7-8/">iPhone 7/8</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-6-plus-6s-plus1/">iPhone 6 Plus / 6s Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-6-6s1/">iPhone 6 6s</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/iphone1/iphone-se-2020/">iPhone SE 2020</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Xiaomi
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/">	<strong>
																			Ver todo en Xiaomi
																	</strong>
				        	</a>
				        </li>
			        			        			        	
	    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Mi
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi/">	<strong>
																			Ver todo en Serie Mi
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi/mi-10-pro/">Mi 10 Pro</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi/mi-10/">Mi 10</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Mi Note
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi-note/">	<strong>
																			Ver todo en Serie Mi Note
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-mi-note/mi-note-10/">Mi Note 10</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Redmi Note
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/">	<strong>
																			Ver todo en Serie Redmi Note
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-9-pro/">Redmi Note 9 Pro</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-9s/">Redmi Note 9s</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-9/">Redmi Note 9</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-8-pro/">Redmi Note 8 Pro</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-8/">Redmi Note 8</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi-note/redmi-note-7/">Redmi Note 7</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Redmi
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi/">	<strong>
																			Ver todo en Serie Redmi
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/xiaomi/serie-redmi/redmi-9/">Redmi 9</a>
        </li>
				        					
				</ul>
					</li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Motorola 
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/">	<strong>
																			Ver todo en Motorola 
																	</strong>
				        	</a>
				        </li>
			        			        			        	
	    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Moto One
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/">	<strong>
																			Ver todo en Serie Moto One
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one-fusion/">Motorola One Fusion</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one-hyper/">Motorola One Hyper</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one-zoom/">Motorola One Zoom</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one-vision/">Motorola One Vision</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-one/motorola-one/">Motorola One</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Moto E
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/">	<strong>
																			Ver todo en Serie Moto E
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/motorola-e7-plus/">Motorola E7 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/motorola-e6s/">Motorola E6s</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/motorola-e6-plus/">Motorola E6 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-e/motorola-e6-play/">Motorola E6 Play</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie G
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-g/">	<strong>
																			Ver todo en Serie G
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-g/motorola-g9-plus/">Motorola G9 Plus</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-g/motorola-g9-g9-play/">Motorola G9/ G9 Play</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-g/motorola-g4-g4-plus/">Motorola G4 G4 Plus</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Z
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/seria-z/">	<strong>
																			Ver todo en Serie Z
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/seria-z/motorola-z3-play/">Motorola Z3 Play</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/seria-z/motorola-z2-play/">Motorola Z2 Play</a>
        </li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Serie Moto C
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-c/">	<strong>
																			Ver todo en Serie Moto C
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/motorola/serie-moto-c/motorola-c/">Motorola C</a>
        </li>
				        					
				</ul>
					</li>
				        					
				</ul>
					</li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/ipad/">iPad</a>
        </li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Huawei
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/huawei1/">	<strong>
																			Ver todo en Huawei
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/fundas/huawei1/mate-9/">Mate 9</a>
        </li>
				        					
				</ul>
					</li>
				        					
				</ul>
					</li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Accesorios
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/">	<strong>
																			Ver todo en Accesorios
																	</strong>
				        	</a>
				        </li>
			        			        			        	
	    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Cables
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/cables/">	<strong>
																			Ver todo en Cables
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/cables/iphone/">iPhone</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/cables/tipo-c/">Tipo C</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/cables/micro-usb/">Micro USB</a>
        </li>
				        					
				</ul>
					</li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/auriculares/">Auriculares</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/jbl/">JBL</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/parlantes/">Parlantes</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/cargadores/">Cargadores</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/fundas-cargadoras/">Fundas Cargadoras</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/power-banks/">Power Banks</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/protector-camara-trasera/">Protector Cámara Trasera</a>
        </li>
		    	<li class="nav-item   item-with-subitems">
    		<div class="nav-item-container js-nav-list-toggle-accordion">
	            <a class="js-toggle-page-accordion nav-list-link " href="#">Soportes
		            			            <span class="nav-list-arrow transition-soft">
			            	<svg class="icon-inline icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"/></svg>			            </span>
			        	        	</a>
	        </div>
	        				<ul class="js-pages-accordion list-subitems nav-list-accordion" style="display:none;">
											<li class="nav-item nav-item-desktop">
				        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/soportes/">	<strong>
																			Ver todo en Soportes
																	</strong>
				        	</a>
				        </li>
			        			        			        	
			<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/soportes/para-auto/">Para Auto</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/soportes/anillos/">Anillos</a>
        </li>
				        					
				</ul>
					</li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/tripodes/">Trípodes</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/aros-de-luz/">Aros de Luz</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/pendrives/">Pendrives</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/smartwatch/">SmartWatch</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/accesorios/gaming/">GAMING</a>
        </li>
				        					
				</ul>
					</li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/tiendas/">Tiendas</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link selected" href="/contacto/">Contacto</a>
        </li>
				<li class="nav-item ">
        	<a class="nav-list-link " href="https://www.swoptech.com.ar/about-us/">¿Quiénes Somos?</a>
        </li>
	    </ul>
</div>

<div class="nav-secondary">
    <ul class="nav-account" data-store="account-links">
                                <li class="nav-account-item"><svg class="icon-inline icon-1x pr-1 svg-icon-secondary" viewBox="0 0 512 512"><path d="M384 250v12c0 6.6-5.4 12-12 12h-98v98c0 6.6-5.4 12-12 12h-12c-6.6 0-12-5.4-12-12v-98h-98c-6.6 0-12-5.4-12-12v-12c0-6.6 5.4-12 12-12h98v-98c0-6.6 5.4-12 12-12h12c6.6 0 12 5.4 12 12v98h98c6.6 0 12 5.4 12 12zm120 6c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-32 0c0-119.9-97.3-216-216-216-119.9 0-216 97.3-216 216 0 119.9 97.3 216 216 216 119.9 0 216-97.3 216-216z"/></svg> <a href="/account/register" title="" class="nav-accounts-link">Crear cuenta</a></li>
                        <li class="nav-account-item"><svg class="icon-inline icon-1x pr-1 svg-icon-secondary" viewBox="0 0 496 512"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z"/></svg> <a href="/account/login/" title="" class="nav-accounts-link">Iniciar sesión</a></li>
            </ul>
</div>        </div>
        </div>
<div class="js-modal-overlay modal-overlay " data-modal-id="#nav-hamburger" style="display: none;"></div>



<div id="nav-search" class="js-modal  modal modal- modal-right transition-slide modal-docked-md transition-long " style="display: none;">
        <div class="js-modal-close  modal-header ">
        <span class="modal-close ">
            <svg class="icon-inline svg-icon-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"/></svg>        </span>
            </div>
    <div class="modal-body">
                <form class="js-search-container js-search-form" action="/search/" method="get">
	<div class="form-group m-0">
        <input class="js-search-input form-control form-control-invert p-3 pr-5 search-input" autocomplete="off" type="search" name="q" placeholder="Buscar" aria-label="Buscador"/>
        <button type="submit" class="btn search-input-submit p-2 mr-2" value="Buscar" aria-label="Buscar">
            <svg class="icon-inline icon-lg svg-icon-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"/></svg>        </button>
	</div>
</form>
<div class="js-search-suggest search-suggest">
    </div>
        </div>
        </div>
<div class="js-modal-overlay modal-overlay " data-modal-id="#nav-search" style="display: none;"></div>

        
        

	<div class="contenedor" style="position: relative;  height: 500px; width: 100%; background: url('{{ asset('/images/tecnica/radovan-eMyJQVS1a3I-unsplash.jpg') }}') ">

	<div class="texto-encima" style="position: absolute; top: 65%; left: 35%; color: #fff; font-weight: bold; font-size: 40px" >Vendé tu Celu</div>
	<div class="centrado" style="position: absolute; top: 77%; left: 35%; color: #fff; font-size: 18px;">Sencillo, Rápido & Seguro</div>
	</div>



 
<section class="contact-page">
	<div class="container">
		<div class="row align-items-center m-5" >
            <div class="col-md-9">
                <h1  class="h2 title-line mb-2">Presupuesto</h1>
             </div>
             <div class="col-md-3 text-md-right text-left">
             </div>
        </div>
		<div class="row justify-content-md-center">
			
			<div class="col-md-6">
			

				@if(!isset($cotizar))
					@include('admin.swoptech.partials.presupuestoForm')
				@else	
					@include('admin.swoptech.partials.respuestaPresupuesto')
				@endif



			</div>
			<div class="col-md-12">
																		
				<ul class="contact-info text-center row my-5">
					<li class="contact-item col-md mb-5">
						<svg class="icon-inline icon-2x icon-w svg-icon-brand" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>                    <span class="d-block my-3 text-uppercase font-weight-bold">WhatsApp</span>
				        		<a href="https://wa.me/541126435466" class="contact-link">541126435466</a>
					</li>
				    <li class="contact-item col-md mb-5">
						<svg class="icon-inline icon-2x icon-w svg-icon-brand" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"/></svg>                    <span class="d-block my-3 text-uppercase font-weight-bold">Email</span>
				            	<a href="mailto:online@swoptech.com.ar" class="contact-link">online@swoptech.com.ar</a>
				    </li>
				    <li class="contact-item col-md mb-5">
						<svg class="icon-inline icon-2x icon-w  svg-icon-brand" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M560 160c-2 0-4 .4-6 1.2L384 224l-10.3-3.6C397 185.5 416 149.2 416 123 416 55 358.7 0 288 0S160 55.1 160 123c0 11.8 4 25.8 10.4 40.6L20.1 216C8 220.8 0 232.6 0 245.7V496c0 9.2 7.5 16 16 16 2 0 4-.4 6-1.2L192 448l172 60.7c13 4.3 27 4.4 40 .2L555.9 456c12.2-4.9 20.1-16.6 20.1-29.7V176c0-9.2-7.5-16-16-16zM176 419.8L31.9 473l-1.3-226.9L176 195.6zM288 32c52.9 0 96 40.8 96 91 0 27-38.1 88.9-96 156.8-57.9-67.9-96-129.8-96-156.8 0-50.2 43.1-91 96-91zm80 444.2l-160-56.5V228.8c24.4 35.3 52.1 68 67.7 85.7 3.2 3.7 7.8 5.5 12.3 5.5s9-1.8 12.3-5.5c12.8-14.5 33.7-39.1 54.3-66.9l13.4 4.7zm32 .2V252.2L544.1 199l1.3 226.9zM312 128c0-13.3-10.8-24-24-24s-24 10.7-24 24c0 13.2 10.8 24 24 24s24-10.7 24-24z"/></svg>                    <span class="d-block my-3 text-uppercase font-weight-bold">Dirección</span>
				            	Av Cabildo 2190, Esq. Mendoza. CABA
				    </li>
				</ul>						
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">

(function() {
	var referrer = (window.decodeURI) ? window.decodeURI(document.referrer) : document.referrer;
    var url = (window.decodeURI) ? window.decodeURI(document.URL) : document.URL;
	
	setTimeout(function() {
        ;
            var tracking_url = '/stats/record_visit/?' +
                      'referrer=' + encodeURIComponent(referrer) +
                      '&url=' + encodeURIComponent(url)
                                                            ;
            new Image().src = tracking_url;
        	  }, 500);
})();
</script>
<script type="text/javascript">
    function onload_func(script_source) {
        return function() {
            var scr = document.createElement('script'); scr.type = 'text/javascript';
            scr.src = script_source;
            scr.async = true;
            var script_tags = document.getElementsByTagName('script');
            var s = script_tags[script_tags.length - 1]; s.parentNode.insertBefore(scr, null);
        }
    }
    
    LS.ready.then(function(){
        var scripts = [];
                    scripts.push("https\x3A\x2F\x2Fjs.myperfit.net\x2Ftiendanube\x2Ftrack.js\x3Fa\x3Dswoptech\x26r\x3D0511aeff\x26h\x3D0971dfc6\x26store\x3D1363975");
                scripts = scripts.concat(LS.socialScripts);
        
        var scripts_to_add = [];
        for (idx in scripts){
            scripts_to_add.push(onload_func(scripts[idx]));
        }
        
                if (window.addEventListener)
        {
            for (idx in scripts_to_add) {
                window.addEventListener('load', scripts_to_add[idx], false);
            }
        }
        else if (window.attachEvent)
        {
            for (idx in scripts_to_add) {
                window.attachEvent('onload', scripts_to_add[idx]);
            }
        }
    });
    
    
</script>

        
            <a href="https://wa.me/541126435466" target="_blank" class="js-btn-fixed-bottom btn-whatsapp" aria-label="Comunicate por WhatsApp">
        <svg class="icon-inline icon-2x" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>    </a>

        
                  

<footer class="js-hide-footer-while-scrolling display-when-content-ready" data-store="footer">
	<div class="container">
		<div class="row element-footer">

			
				<div class="col-md mb-5">
																						
																                <a class="social-icon" href="http://instagram.com/swoptech" target="_blank" aria-label="instagram Swop Tech">
                                                    <svg class="icon-inline icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>

        </a>
                    <a class="social-icon" href="https://facebook.com/swoptech" target="_blank" aria-label="facebook Swop Tech">
                                                    <svg class="icon-inline icon-lg" viewBox="0 0 320 512"><path d="M279.1 288l14.3-92.7h-89v-60c0-25.4 12.5-50.2 52.3-50.2H297V6.4S260.4 0 225.4 0C152 0 104.3 44.4 104.3 124.7v70.6H22.9V288h81.4v224h100.2V288z"/></svg>        </a>
                                    									</div>

			
			
													<div class="col-md mb-5">
													<h4 class="h3">Navegación</h4>
												<ul class="footer-menu row p-0">
			<li class="footer-menu-item col-6 col-md-12">
	        <a class="footer-menu-link" href="https://www.swoptech.com.ar/equipos-en-venta/" >iPhone en Venta</a>
		</li>
			<li class="footer-menu-item col-6 col-md-12">
	        <a class="footer-menu-link" href="https://www.swoptech.com.ar/servicio-tecnico/" >Servicio Técnico</a>
		</li>
			<li class="footer-menu-item col-6 col-md-12">
	        <a class="footer-menu-link" href="https://www.swoptech.com.ar/fundas/" >Fundas</a>
		</li>
			<li class="footer-menu-item col-6 col-md-12">
	        <a class="footer-menu-link" href="https://www.swoptech.com.ar/accesorios/" >Accesorios</a>
		</li>
			<li class="footer-menu-item col-6 col-md-12">
	        <a class="footer-menu-link" href="https://www.swoptech.com.ar/tiendas/" >Tiendas</a>
		</li>
			<li class="footer-menu-item col-6 col-md-12">
	        <a class="footer-menu-link" href="/contacto/" >Contacto</a>
		</li>
			<li class="footer-menu-item col-6 col-md-12">
	        <a class="footer-menu-link" href="https://www.swoptech.com.ar/about-us/" >¿Quiénes Somos?</a>
		</li>
	</ul>					</div>
				
								
									<div class="col-md">

																			
<div class="js-newsletter newsletter mb-5">
            <h3>Newsletter</h3>
        
    
    <form method="post" action="/winnie-pooh" onsubmit="$(this).attr('action', '');" data-store="newsletter-form">
        
        
<div class="form-group ">
                            <input 
            type="text"
            id="name"            class=" form-control form-control-invert " 
            autocorrect="off" 
            autocapitalize="off" 
                        name="name"                                    placeholder="Nombre"                        aria-label="Nombre"/>
                                        </div>



        
        
<div class="form-group ">
                            <input 
            type=""
            id="email"            class=" form-control form-control-invert " 
            autocorrect="off" 
            autocapitalize="off" 
                        name="email"                                    placeholder="Email"                        aria-label="Email"/>
                                        </div>



        <div class="winnie-pooh" style="display: none;">
            <label for="winnie-pooh-newsletter">No completar este campo</label>
            <input id="winnie-pooh-newsletter" type="text" name="winnie-pooh"/>
        </div>
        <input type="hidden" name="message" value="Pedido de inscripción a newsletter" />
        <input type="hidden" name="type" value="newsletter" />
        <input type="submit" name="contact" class="btn btn-primary btn-medium" value='Enviar'>    
    </form>
</div>
						
																			<h4 class="h3">Contacto</h4>
							
<ul class="contact-info ">
	<li class="contact-item">
		        		<a href="https://wa.me/541126435466" class="contact-link">541126435466</a>
	</li>
    <li class="contact-item">
		            	<a href="mailto:online@swoptech.com.ar" class="contact-link">online@swoptech.com.ar</a>
    </li>
    <li class="contact-item">
		            	Av Cabildo 2190, Esq. Mendoza. CABA
    </li>
</ul>						
					</div>
									</div>
	</div>
	<div class="footer-legal">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-9 text-center text-md-left font-small">
					Copyright Swop Tech - 2021. Todos los derechos reservados.
				</div>
												<div class="col-md-3 copyright text-center text-md-right pt-4 pt-md-0">
										<div class="powered-by-logo">
                    <a target="_blank" title="Tiendanube" rel="nofollow" href="https://www.tiendanube.com?utm_source=store&utm_medium=referral&utm_campaign=footerSlogan">
                        <svg title="Tiendanube" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1080 120" id="svg_brand"><path d="M37.2 42.8c4.6 0 8.8 1.3 12.5 3.8v7.9c-3.9-3-7.9-4.4-12.2-4.4-9 0-15.5 6.9-15.5 15.8 0 8.8 6.5 15.8 15.5 15.8 4.6 0 8.9-2.1 12.4-4.4v7.9c-3.9 2.5-8.1 3.7-12.7 3.7-13.8 0-23.1-10.1-23.1-23.1 0-12.9 9.5-23 23.1-23zM80.5 51c-.1 0-.3 0-.5-.1-.4 0-1-.1-1.6-.1-8.3 0-13.2 6.5-13.2 16.1v21h-7.7V43.8H65v7.8c1.9-5.1 7.8-8.5 13.5-8.5.6 0 1 .1 1.4.1.3.1.5.1.5.1l.1 7.7zm1 14.8c0-13.1 9.4-23.1 22-23.1 12.4 0 21.4 10.1 21.4 22.7 0 1-.1 1.6-.1 2.1v.7H89.3c.5 7.7 7.2 13.6 14.8 13.6 6.6 0 10-3.2 12.8-7.5l6.4 3.3c-3.6 6.6-10.3 11.3-19.2 11.3-13.2 0-22.6-9.7-22.6-23.1zm35.4-4c-.7-6.9-6.5-12.3-13.7-12.3s-13.1 6.3-13.8 12.3h27.5zm27.9.3l13.2-1.6v-2.3c0-5.4-3.5-8.5-9.3-8.5-5.3 0-8.7 2.6-10.3 7.8l-7.4-2.1c2.2-7.7 8.9-12.6 17.5-12.6 10.8 0 17 6.1 17 16v29.1h-7.4v-5.8c-3.5 4.4-8.9 6.8-14.8 6.8-8.3 0-13.9-5.4-13.9-12.6.2-7.9 5.2-12.8 15.4-14.2zm.1 19.9c7.6 0 13.2-4.9 13.2-11.7v-3.2l-12 1.5c-5.5.7-8.6 3.4-8.6 7.2 0 3.7 3 6.2 7.4 6.2zm73.3-57.7v63.5h-7.7v-7c-3.2 4.8-9.1 8-15.6 8-12.6 0-22.2-10-22.2-23.1 0-13 9.5-23.1 22.2-23.1 6.5 0 12.3 2.8 15.6 7.6V24.3h7.7zm-22.5 25.6c-8.7 0-15.2 6.9-15.2 15.9s6.4 15.9 15.2 15.9 15.2-6.9 15.2-15.9-6.5-15.9-15.2-15.9zM272 65.8c0 12.7-9.7 23.1-23.1 23.1-13.3 0-23.1-10.3-23.1-23.1s9.7-23.1 23.1-23.1c13.4.1 23.1 10.4 23.1 23.1zm-38.2 0c0 8.8 6.4 15.9 15.2 15.9 8.8 0 15.2-7.1 15.2-15.9s-6.4-15.9-15.2-15.9-15.2 7.1-15.2 15.9zm77.7-23c4.6 0 8.8 1.3 12.5 3.8v7.9c-3.9-3-7.9-4.4-12.2-4.4-9 0-15.5 6.9-15.5 15.8 0 8.8 6.5 15.8 15.5 15.8 4.6 0 8.9-2.1 12.4-4.4v7.9c-3.9 2.5-8.1 3.7-12.7 3.7-13.8 0-23.1-10.1-23.1-23.1 0-12.9 9.6-23 23.1-23zm63.2 23c0 12.7-9.7 23.1-23.1 23.1-13.3 0-23.1-10.3-23.1-23.1s9.7-23.1 23.1-23.1c13.4.1 23.1 10.4 23.1 23.1zm-38.2 0c0 8.8 6.4 15.9 15.2 15.9s15.2-7.1 15.2-15.9-6.4-15.9-15.2-15.9-15.2 7.1-15.2 15.9zm53.7 22.1h-7.8V43.8h7.8v6.4c2.8-4.4 7.4-7.4 14.1-7.4 11.3 0 17.8 7.5 17.8 19.2v25.9h-7.8v-25c0-8-4-12.9-11.6-12.9s-12.4 5.7-12.4 14.8v23.1h-.1zM541.3 10s-.1 0 0 0c-13.1 0-25.6 5.1-34.9 14.2-4.7-2-9.9-3.1-15.2-3.1-21.4 0-38.9 17.4-38.9 38.9s17.4 38.9 38.9 38.9c5.2 0 10.4-1.1 15.1-3.1 9 8.8 21.3 14.2 34.8 14.2 27.6 0 50-22.4 50-50 .1-27.5-22.3-50-49.8-50zm-.1 88.9c-21.4 0-38.9-17.4-38.9-38.9h-11.1c0 9.8 2.8 19 7.7 26.7-2.5.7-5.1 1.1-7.7 1.1-15.3 0-27.8-12.5-27.8-27.8s12.5-27.8 27.8-27.8c6.1 0 11.8 1.9 16.7 5.6C515 43.1 519 51.2 519 60h11.1c0-11.6-5-22.4-13.9-29.8 7-5.8 15.8-9.1 25-9.1 21.4 0 38.9 17.5 38.9 38.9s-17.5 38.9-38.9 38.9zm78.2-11V52.3h-7.5v-8.9h7.5V30.2h10.5v13.2h7.5v8.9h-7.5v35.6h-10.5zm28.9-51c-3.5 0-6.4-2.9-6.4-6.4 0-3.6 2.9-6.5 6.4-6.5 3.7 0 6.5 3 6.5 6.5s-2.8 6.4-6.5 6.4zm-5.2 51V43.4h10.5v44.5h-10.5zm59.8-10.5c-3.7 7-10.6 11.5-20.1 11.5-13.5 0-23.1-9.6-23.1-23.3 0-13.3 9.8-23.3 22.6-23.3 13 0 22.1 10 22.1 23.3 0 .8 0 1.9-.1 3.2h-34.2c.5 6.4 6.2 11.3 12.8 11.3 5.8 0 8.8-2.8 11.3-6.7l8.7 4zm-8.8-16.2c-.7-5.9-5.4-10.3-11.9-10.3-6.3 0-11.2 5.2-11.9 10.3h23.8zm26.5 26.7h-10.5V43.4h10.5v5.9c2.8-4.3 7.4-7 13.6-7 10.9 0 17.2 7.2 17.2 18.8v26.8H741V63.1c0-6.9-3.4-11.1-9.9-11.1-6.3 0-10.4 4.8-10.4 12.4l-.1 23.5zm73.2 0v-6.4c-3.3 4.6-8.9 7.4-15.1 7.4C766.5 89 757 79 757 65.6c0-13.1 9.4-23.3 21.7-23.3 6.2 0 11.8 2.5 15.1 7.2V26.7h10.4v61.2h-10.4zm-12.9-8.5c7.5 0 13.3-6.2 13.3-13.8 0-7.6-5.8-13.8-13.3-13.8s-13.3 6.2-13.3 13.8c-.1 7.7 5.8 13.8 13.3 13.8zm45.3-17.8l12.1-1.5v-1.9c0-4.4-3.1-7.3-7.9-7.3-4.5 0-7.4 2.3-8.8 6.7l-9.6-2.5c2.2-8 9.3-12.9 18.4-12.9 11.6 0 18.1 6.1 18.1 16.6v28.9h-9.8l-.1-5.4c-3 4.3-8.1 6.5-13.9 6.5-8.4 0-14.3-5.4-14.3-12.9 0-7.9 5.2-12.7 15.8-14.3zm1 18.9c6.5 0 11.2-4.2 11.2-10.1v-2.5l-10.1 1.4c-5 .6-7.4 2.9-7.4 6.1s2.5 5.1 6.3 5.1zm40.2 7.4h-10.5V43.4h10.5v5.9c2.8-4.3 7.4-7 13.6-7 10.9 0 17.2 7.2 17.2 18.8v26.8h-10.5V63.1c0-6.9-3.4-11.1-9.9-11.1-6.3 0-10.4 4.8-10.4 12.4v23.5zm38.5-19.2V43.4h10.5v24.7c0 7 3.4 11.2 9.3 11.2s9.3-4.2 9.3-11.2V43.4h10.5v25.3c0 12.8-7.4 20.2-19.8 20.2-12.3.1-19.8-7.4-19.8-20.2zm48 19.2V26.7h10.4v23.1c3.3-4.6 8.9-7.4 15.1-7.4 12.3 0 21.7 10 21.7 23.3 0 13.1-9.4 23.3-21.7 23.3-6.2 0-11.8-2.5-15.1-7.2v6.1h-10.4zm23.3-36.1c-7.5 0-13.3 6.2-13.3 13.8s5.8 13.8 13.3 13.8 13.3-6.2 13.3-13.8c.1-7.6-5.7-13.8-13.3-13.8zm70.6 25.6c-3.7 7-10.6 11.5-20.1 11.5-13.5 0-23.1-9.6-23.1-23.3 0-13.3 9.8-23.3 22.6-23.3 13 0 22.1 10 22.1 23.3 0 .8 0 1.9-.1 3.2H1015c.5 6.4 6.2 11.3 12.8 11.3 5.8 0 8.8-2.8 11.3-6.7l8.7 4zm-8.9-16.2c-.7-5.9-5.4-10.3-11.9-10.3-6.3 0-11.2 5.2-11.9 10.3h23.8z"/></svg>
                    </a>
                </div>
				</div>
			</div>
		</div>
	</div>
</footer>
        
        
        <script type="text/javascript">

            
            

!function(e){var t=function(u,D,f){"use strict";var k,H;if(function(){var e;var t={lazyClass:"lazyload",loadedClass:"lazyloaded",loadingClass:"lazyloading",preloadClass:"lazypreload",errorClass:"lazyerror",autosizesClass:"lazyautosizes",srcAttr:"data-src",srcsetAttr:"data-srcset",sizesAttr:"data-sizes",minSize:40,customMedia:{},init:true,expFactor:1.5,hFac:.8,loadMode:2,loadHidden:true,ricTimeout:0,throttleDelay:125};H=u.lazySizesConfig||u.lazysizesConfig||{};for(e in t){if(!(e in H)){H[e]=t[e]}}}(),!D||!D.getElementsByClassName){return{init:function(){},cfg:H,noSupport:true}}var O=D.documentElement,a=u.HTMLPictureElement,P="addEventListener",$="getAttribute",q=u[P].bind(u),I=u.setTimeout,U=u.requestAnimationFrame||I,l=u.requestIdleCallback,j=/^picture$/i,r=["load","error","lazyincluded","_lazyloaded"],i={},G=Array.prototype.forEach,J=function(e,t){if(!i[t]){i[t]=new RegExp("(\\s|^)"+t+"(\\s|$)")}return i[t].test(e[$]("class")||"")&&i[t]},K=function(e,t){if(!J(e,t)){e.setAttribute("class",(e[$]("class")||"").trim()+" "+t)}},Q=function(e,t){var i;if(i=J(e,t)){e.setAttribute("class",(e[$]("class")||"").replace(i," "))}},V=function(t,i,e){var a=e?P:"removeEventListener";if(e){V(t,i)}r.forEach(function(e){t[a](e,i)})},X=function(e,t,i,a,r){var n=D.createEvent("Event");if(!i){i={}}i.instance=k;n.initEvent(t,!a,!r);n.detail=i;e.dispatchEvent(n);return n},Y=function(e,t){var i;if(!a&&(i=u.picturefill||H.pf)){if(t&&t.src&&!e[$]("srcset")){e.setAttribute("srcset",t.src)}i({reevaluate:true,elements:[e]})}else if(t&&t.src){e.src=t.src}},Z=function(e,t){return(getComputedStyle(e,null)||{})[t]},s=function(e,t,i){i=i||e.offsetWidth;while(i<H.minSize&&t&&!e._lazysizesWidth){i=t.offsetWidth;t=t.parentNode}return i},ee=function(){var i,a;var t=[];var r=[];var n=t;var s=function(){var e=n;n=t.length?r:t;i=true;a=false;while(e.length){e.shift()()}i=false};var e=function(e,t){if(i&&!t){e.apply(this,arguments)}else{n.push(e);if(!a){a=true;(D.hidden?I:U)(s)}}};e._lsFlush=s;return e}(),te=function(i,e){return e?function(){ee(i)}:function(){var e=this;var t=arguments;ee(function(){i.apply(e,t)})}},ie=function(e){var i;var a=0;var r=H.throttleDelay;var n=H.ricTimeout;var t=function(){i=false;a=f.now();e()};var s=l&&n>49?function(){l(t,{timeout:n});if(n!==H.ricTimeout){n=H.ricTimeout}}:te(function(){I(t)},true);return function(e){var t;if(e=e===true){n=33}if(i){return}i=true;t=r-(f.now()-a);if(t<0){t=0}if(e||t<9){s()}else{I(s,t)}}},ae=function(e){var t,i;var a=99;var r=function(){t=null;e()};var n=function(){var e=f.now()-i;if(e<a){I(n,a-e)}else{(l||r)(r)}};return function(){i=f.now();if(!t){t=I(n,a)}}},e=function(){var v,m,c,h,e;var y,z,g,p,C,b,A;var n=/^img$/i;var d=/^iframe$/i;var E="onscroll"in u&&!/(gle|ing)bot/.test(navigator.userAgent);var _=0;var w=0;var N=0;var M=-1;var x=function(e){N--;if(!e||N<0||!e.target){N=0}};var W=function(e){if(A==null){A=Z(D.body,"visibility")=="hidden"}return A||!(Z(e.parentNode,"visibility")=="hidden"&&Z(e,"visibility")=="hidden")};var S=function(e,t){var i;var a=e;var r=W(e);g-=t;b+=t;p-=t;C+=t;while(r&&(a=a.offsetParent)&&a!=D.body&&a!=O){r=(Z(a,"opacity")||1)>0;if(r&&Z(a,"overflow")!="visible"){i=a.getBoundingClientRect();r=C>i.left&&p<i.right&&b>i.top-1&&g<i.bottom+1}}return r};var t=function(){var e,t,i,a,r,n,s,l,o,u,f,c;var d=k.elements;if((h=H.loadMode)&&N<8&&(e=d.length)){t=0;M++;for(;t<e;t++){if(!d[t]||d[t]._lazyRace){continue}if(!E||k.prematureUnveil&&k.prematureUnveil(d[t])){R(d[t]);continue}if(!(l=d[t][$]("data-expand"))||!(n=l*1)){n=w}if(!u){u=!H.expand||H.expand<1?O.clientHeight>500&&O.clientWidth>500?500:370:H.expand;k._defEx=u;f=u*H.expFactor;c=H.hFac;A=null;if(w<f&&N<1&&M>2&&h>2&&!D.hidden){w=f;M=0}else if(h>1&&M>1&&N<6){w=u}else{w=_}}if(o!==n){y=innerWidth+n*c;z=innerHeight+n;s=n*-1;o=n}i=d[t].getBoundingClientRect();if((b=i.bottom)>=s&&(g=i.top)<=z&&(C=i.right)>=s*c&&(p=i.left)<=y&&(b||C||p||g)&&(H.loadHidden||W(d[t]))&&(m&&N<3&&!l&&(h<3||M<4)||S(d[t],n))){R(d[t]);r=true;if(N>9){break}}else if(!r&&m&&!a&&N<4&&M<4&&h>2&&(v[0]||H.preloadAfterLoad)&&(v[0]||!l&&(b||C||p||g||d[t][$](H.sizesAttr)!="auto"))){a=v[0]||d[t]}}if(a&&!r){R(a)}}};var i=ie(t);var B=function(e){var t=e.target;if(t._lazyCache){delete t._lazyCache;return}x(e);K(t,H.loadedClass);Q(t,H.loadingClass);V(t,L);X(t,"lazyloaded")};var a=te(B);var L=function(e){a({target:e.target})};var T=function(t,i){try{t.contentWindow.location.replace(i)}catch(e){t.src=i}};var F=function(e){var t;var i=e[$](H.srcsetAttr);if(t=H.customMedia[e[$]("data-media")||e[$]("media")]){e.setAttribute("media",t)}if(i){e.setAttribute("srcset",i)}};var s=te(function(t,e,i,a,r){var n,s,l,o,u,f;if(!(u=X(t,"lazybeforeunveil",e)).defaultPrevented){if(a){if(i){K(t,H.autosizesClass)}else{t.setAttribute("sizes",a)}}s=t[$](H.srcsetAttr);n=t[$](H.srcAttr);if(r){l=t.parentNode;o=l&&j.test(l.nodeName||"")}f=e.firesLoad||"src"in t&&(s||n||o);u={target:t};K(t,H.loadingClass);if(f){clearTimeout(c);c=I(x,2500);V(t,L,true)}if(o){G.call(l.getElementsByTagName("source"),F)}if(s){t.setAttribute("srcset",s)}else if(n&&!o){if(d.test(t.nodeName)){T(t,n)}else{t.src=n}}if(r&&(s||o)){Y(t,{src:n})}}if(t._lazyRace){delete t._lazyRace}Q(t,H.lazyClass);ee(function(){var e=t.complete&&t.naturalWidth>1;if(!f||e){if(e){K(t,"ls-is-cached")}B(u);t._lazyCache=true;I(function(){if("_lazyCache"in t){delete t._lazyCache}},9)}if(t.loading=="lazy"){N--}},true)});var R=function(e){if(e._lazyRace){return}var t;var i=n.test(e.nodeName);var a=i&&(e[$](H.sizesAttr)||e[$]("sizes"));var r=a=="auto";if((r||!m)&&i&&(e[$]("src")||e.srcset)&&!e.complete&&!J(e,H.errorClass)&&J(e,H.lazyClass)){return}t=X(e,"lazyunveilread").detail;if(r){re.updateElem(e,true,e.offsetWidth)}e._lazyRace=true;N++;s(e,t,r,a,i)};var r=ae(function(){H.loadMode=3;i()});var l=function(){if(H.loadMode==3){H.loadMode=2}r()};var o=function(){if(m){return}if(f.now()-e<999){I(o,999);return}m=true;H.loadMode=3;i();q("scroll",l,true)};return{_:function(){e=f.now();k.elements=D.getElementsByClassName(H.lazyClass);v=D.getElementsByClassName(H.lazyClass+" "+H.preloadClass);q("scroll",i,true);q("resize",i,true);q("pageshow",function(e){if(e.persisted){var t=D.querySelectorAll("."+H.loadingClass);if(t.length&&t.forEach){U(function(){t.forEach(function(e){if(e.complete){R(e)}})})}}});if(u.MutationObserver){new MutationObserver(i).observe(O,{childList:true,subtree:true,attributes:true})}else{O[P]("DOMNodeInserted",i,true);O[P]("DOMAttrModified",i,true);setInterval(i,999)}q("hashchange",i,true);["focus","mouseover","click","load","transitionend","animationend"].forEach(function(e){D[P](e,i,true)});if(/d$|^c/.test(D.readyState)){o()}else{q("load",o);D[P]("DOMContentLoaded",i);I(o,2e4)}if(k.elements.length){t();ee._lsFlush()}else{i()}},checkElems:i,unveil:R,_aLSL:l}}(),re=function(){var i;var n=te(function(e,t,i,a){var r,n,s;e._lazysizesWidth=a;a+="px";e.setAttribute("sizes",a);if(j.test(t.nodeName||"")){r=t.getElementsByTagName("source");for(n=0,s=r.length;n<s;n++){r[n].setAttribute("sizes",a)}}if(!i.detail.dataAttr){Y(e,i.detail)}});var a=function(e,t,i){var a;var r=e.parentNode;if(r){i=s(e,r,i);a=X(e,"lazybeforesizes",{width:i,dataAttr:!!t});if(!a.defaultPrevented){i=a.detail.width;if(i&&i!==e._lazysizesWidth){n(e,r,a,i)}}}};var e=function(){var e;var t=i.length;if(t){e=0;for(;e<t;e++){a(i[e])}}};var t=ae(e);return{_:function(){i=D.getElementsByClassName(H.autosizesClass);q("resize",t)},checkElems:t,updateElem:a}}(),t=function(){if(!t.i&&D.getElementsByClassName){t.i=true;re._();e._()}};return I(function(){H.init&&t()}),k={cfg:H,autoSizer:re,loader:e,init:t,uP:Y,aC:K,rC:Q,hC:J,fire:X,gW:s,rAF:ee}}(e,e.document,Date);e.lazySizes=t,"object"==typeof module&&module.exports&&(module.exports=t)}("undefined"!=typeof window?window:{});

!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self).Swiper=t()}(this,(function(){"use strict";function e(e,t){for(var i=0;i<t.length;i++){var s=t[i];s.enumerable=s.enumerable||!1,s.configurable=!0,"value"in s&&(s.writable=!0),Object.defineProperty(e,s.key,s)}}function t(){return(t=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var i=arguments[t];for(var s in i)Object.prototype.hasOwnProperty.call(i,s)&&(e[s]=i[s])}return e}).apply(this,arguments)}function i(e){return null!==e&&"object"==typeof e&&"constructor"in e&&e.constructor===Object}function s(e,t){void 0===e&&(e={}),void 0===t&&(t={}),Object.keys(t).forEach((function(a){void 0===e[a]?e[a]=t[a]:i(t[a])&&i(e[a])&&Object.keys(t[a]).length>0&&s(e[a],t[a])}))}var a={body:{},addEventListener:function(){},removeEventListener:function(){},activeElement:{blur:function(){},nodeName:""},querySelector:function(){return null},querySelectorAll:function(){return[]},getElementById:function(){return null},createEvent:function(){return{initEvent:function(){}}},createElement:function(){return{children:[],childNodes:[],style:{},setAttribute:function(){},getElementsByTagName:function(){return[]}}},createElementNS:function(){return{}},importNode:function(){return null},location:{hash:"",host:"",hostname:"",href:"",origin:"",pathname:"",protocol:"",search:""}};function r(){var e="undefined"!=typeof document?document:{};return s(e,a),e}var n={document:a,navigator:{userAgent:""},location:{hash:"",host:"",hostname:"",href:"",origin:"",pathname:"",protocol:"",search:""},history:{replaceState:function(){},pushState:function(){},go:function(){},back:function(){}},CustomEvent:function(){return this},addEventListener:function(){},removeEventListener:function(){},getComputedStyle:function(){return{getPropertyValue:function(){return""}}},Image:function(){},Date:function(){},screen:{},setTimeout:function(){},clearTimeout:function(){},matchMedia:function(){return{}},requestAnimationFrame:function(e){return"undefined"==typeof setTimeout?(e(),null):setTimeout(e,0)},cancelAnimationFrame:function(e){"undefined"!=typeof setTimeout&&clearTimeout(e)}};function o(){var e="undefined"!=typeof window?window:{};return s(e,n),e}function l(e){return(l=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function d(e,t){return(d=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}function h(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(e){return!1}}function p(e,t,i){return(p=h()?Reflect.construct:function(e,t,i){var s=[null];s.push.apply(s,t);var a=new(Function.bind.apply(e,s));return i&&d(a,i.prototype),a}).apply(null,arguments)}function u(e){var t="function"==typeof Map?new Map:void 0;return(u=function(e){if(null===e||(i=e,-1===Function.toString.call(i).indexOf("[native code]")))return e;var i;if("function"!=typeof e)throw new TypeError("Super expression must either be null or a function");if(void 0!==t){if(t.has(e))return t.get(e);t.set(e,s)}function s(){return p(e,arguments,l(this).constructor)}return s.prototype=Object.create(e.prototype,{constructor:{value:s,enumerable:!1,writable:!0,configurable:!0}}),d(s,e)})(e)}var c=function(e){var t,i;function s(t){var i,s,a;return i=e.call.apply(e,[this].concat(t))||this,s=function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(i),a=s.__proto__,Object.defineProperty(s,"__proto__",{get:function(){return a},set:function(e){a.__proto__=e}}),i}return i=e,(t=s).prototype=Object.create(i.prototype),t.prototype.constructor=t,t.__proto__=i,s}(u(Array));function v(e){void 0===e&&(e=[]);var t=[];return e.forEach((function(e){Array.isArray(e)?t.push.apply(t,v(e)):t.push(e)})),t}function f(e,t){return Array.prototype.filter.call(e,t)}function m(e,t){var i=o(),s=r(),a=[];if(!t&&e instanceof c)return e;if(!e)return new c(a);if("string"==typeof e){var n=e.trim();if(n.indexOf("<")>=0&&n.indexOf(">")>=0){var l="div";0===n.indexOf("<li")&&(l="ul"),0===n.indexOf("<tr")&&(l="tbody"),0!==n.indexOf("<td")&&0!==n.indexOf("<th")||(l="tr"),0===n.indexOf("<tbody")&&(l="table"),0===n.indexOf("<option")&&(l="select");var d=s.createElement(l);d.innerHTML=n;for(var h=0;h<d.childNodes.length;h+=1)a.push(d.childNodes[h])}else a=function(e,t){if("string"!=typeof e)return[e];for(var i=[],s=t.querySelectorAll(e),a=0;a<s.length;a+=1)i.push(s[a]);return i}(e.trim(),t||s)}else if(e.nodeType||e===i||e===s)a.push(e);else if(Array.isArray(e)){if(e instanceof c)return e;a=e}return new c(function(e){for(var t=[],i=0;i<e.length;i+=1)-1===t.indexOf(e[i])&&t.push(e[i]);return t}(a))}m.fn=c.prototype;var g,y,C,w={addClass:function(){for(var e=arguments.length,t=new Array(e),i=0;i<e;i++)t[i]=arguments[i];var s=v(t.map((function(e){return e.split(" ")})));return this.forEach((function(e){var t;(t=e.classList).add.apply(t,s)})),this},removeClass:function(){for(var e=arguments.length,t=new Array(e),i=0;i<e;i++)t[i]=arguments[i];var s=v(t.map((function(e){return e.split(" ")})));return this.forEach((function(e){var t;(t=e.classList).remove.apply(t,s)})),this},hasClass:function(){for(var e=arguments.length,t=new Array(e),i=0;i<e;i++)t[i]=arguments[i];var s=v(t.map((function(e){return e.split(" ")})));return f(this,(function(e){return s.filter((function(t){return e.classList.contains(t)})).length>0})).length>0},toggleClass:function(){for(var e=arguments.length,t=new Array(e),i=0;i<e;i++)t[i]=arguments[i];var s=v(t.map((function(e){return e.split(" ")})));this.forEach((function(e){s.forEach((function(t){e.classList.toggle(t)}))}))},attr:function(e,t){if(1===arguments.length&&"string"==typeof e)return this[0]?this[0].getAttribute(e):void 0;for(var i=0;i<this.length;i+=1)if(2===arguments.length)this[i].setAttribute(e,t);else for(var s in e)this[i][s]=e[s],this[i].setAttribute(s,e[s]);return this},removeAttr:function(e){for(var t=0;t<this.length;t+=1)this[t].removeAttribute(e);return this},transform:function(e){for(var t=0;t<this.length;t+=1)this[t].style.transform=e;return this},transition:function(e){for(var t=0;t<this.length;t+=1)this[t].style.transition="string"!=typeof e?e+"ms":e;return this},on:function(){for(var e=arguments.length,t=new Array(e),i=0;i<e;i++)t[i]=arguments[i];var s=t[0],a=t[1],r=t[2],n=t[3];function o(e){var t=e.target;if(t){var i=e.target.dom7EventData||[];if(i.indexOf(e)<0&&i.unshift(e),m(t).is(a))r.apply(t,i);else for(var s=m(t).parents(),n=0;n<s.length;n+=1)m(s[n]).is(a)&&r.apply(s[n],i)}}function l(e){var t=e&&e.target&&e.target.dom7EventData||[];t.indexOf(e)<0&&t.unshift(e),r.apply(this,t)}"function"==typeof t[1]&&(s=t[0],r=t[1],n=t[2],a=void 0),n||(n=!1);for(var d,h=s.split(" "),p=0;p<this.length;p+=1){var u=this[p];if(a)for(d=0;d<h.length;d+=1){var c=h[d];u.dom7LiveListeners||(u.dom7LiveListeners={}),u.dom7LiveListeners[c]||(u.dom7LiveListeners[c]=[]),u.dom7LiveListeners[c].push({listener:r,proxyListener:o}),u.addEventListener(c,o,n)}else for(d=0;d<h.length;d+=1){var v=h[d];u.dom7Listeners||(u.dom7Listeners={}),u.dom7Listeners[v]||(u.dom7Listeners[v]=[]),u.dom7Listeners[v].push({listener:r,proxyListener:l}),u.addEventListener(v,l,n)}}return this},off:function(){for(var e=arguments.length,t=new Array(e),i=0;i<e;i++)t[i]=arguments[i];var s=t[0],a=t[1],r=t[2],n=t[3];"function"==typeof t[1]&&(s=t[0],r=t[1],n=t[2],a=void 0),n||(n=!1);for(var o=s.split(" "),l=0;l<o.length;l+=1)for(var d=o[l],h=0;h<this.length;h+=1){var p=this[h],u=void 0;if(!a&&p.dom7Listeners?u=p.dom7Listeners[d]:a&&p.dom7LiveListeners&&(u=p.dom7LiveListeners[d]),u&&u.length)for(var c=u.length-1;c>=0;c-=1){var v=u[c];r&&v.listener===r||r&&v.listener&&v.listener.dom7proxy&&v.listener.dom7proxy===r?(p.removeEventListener(d,v.proxyListener,n),u.splice(c,1)):r||(p.removeEventListener(d,v.proxyListener,n),u.splice(c,1))}}return this},trigger:function(){for(var e=o(),t=arguments.length,i=new Array(t),s=0;s<t;s++)i[s]=arguments[s];for(var a=i[0].split(" "),r=i[1],n=0;n<a.length;n+=1)for(var l=a[n],d=0;d<this.length;d+=1){var h=this[d];if(e.CustomEvent){var p=new e.CustomEvent(l,{detail:r,bubbles:!0,cancelable:!0});h.dom7EventData=i.filter((function(e,t){return t>0})),h.dispatchEvent(p),h.dom7EventData=[],delete h.dom7EventData}}return this},transitionEnd:function(e){var t=this;return e&&t.on("transitionend",(function i(s){s.target===this&&(e.call(this,s),t.off("transitionend",i))})),this},outerWidth:function(e){if(this.length>0){if(e){var t=this.styles();return this[0].offsetWidth+parseFloat(t.getPropertyValue("margin-right"))+parseFloat(t.getPropertyValue("margin-left"))}return this[0].offsetWidth}return null},outerHeight:function(e){if(this.length>0){if(e){var t=this.styles();return this[0].offsetHeight+parseFloat(t.getPropertyValue("margin-top"))+parseFloat(t.getPropertyValue("margin-bottom"))}return this[0].offsetHeight}return null},styles:function(){var e=o();return this[0]?e.getComputedStyle(this[0],null):{}},offset:function(){if(this.length>0){var e=o(),t=r(),i=this[0],s=i.getBoundingClientRect(),a=t.body,n=i.clientTop||a.clientTop||0,l=i.clientLeft||a.clientLeft||0,d=i===e?e.scrollY:i.scrollTop,h=i===e?e.scrollX:i.scrollLeft;return{top:s.top+d-n,left:s.left+h-l}}return null},css:function(e,t){var i,s=o();if(1===arguments.length){if("string"!=typeof e){for(i=0;i<this.length;i+=1)for(var a in e)this[i].style[a]=e[a];return this}if(this[0])return s.getComputedStyle(this[0],null).getPropertyValue(e)}if(2===arguments.length&&"string"==typeof e){for(i=0;i<this.length;i+=1)this[i].style[e]=t;return this}return this},each:function(e){return e?(this.forEach((function(t,i){e.apply(t,[t,i])})),this):this},html:function(e){if(void 0===e)return this[0]?this[0].innerHTML:null;for(var t=0;t<this.length;t+=1)this[t].innerHTML=e;return this},text:function(e){if(void 0===e)return this[0]?this[0].textContent.trim():null;for(var t=0;t<this.length;t+=1)this[t].textContent=e;return this},is:function(e){var t,i,s=o(),a=r(),n=this[0];if(!n||void 0===e)return!1;if("string"==typeof e){if(n.matches)return n.matches(e);if(n.webkitMatchesSelector)return n.webkitMatchesSelector(e);if(n.msMatchesSelector)return n.msMatchesSelector(e);for(t=m(e),i=0;i<t.length;i+=1)if(t[i]===n)return!0;return!1}if(e===a)return n===a;if(e===s)return n===s;if(e.nodeType||e instanceof c){for(t=e.nodeType?[e]:e,i=0;i<t.length;i+=1)if(t[i]===n)return!0;return!1}return!1},index:function(){var e,t=this[0];if(t){for(e=0;null!==(t=t.previousSibling);)1===t.nodeType&&(e+=1);return e}},eq:function(e){if(void 0===e)return this;var t=this.length;if(e>t-1)return m([]);if(e<0){var i=t+e;return m(i<0?[]:[this[i]])}return m([this[e]])},append:function(){for(var e,t=r(),i=0;i<arguments.length;i+=1){e=i<0||arguments.length<=i?void 0:arguments[i];for(var s=0;s<this.length;s+=1)if("string"==typeof e){var a=t.createElement("div");for(a.innerHTML=e;a.firstChild;)this[s].appendChild(a.firstChild)}else if(e instanceof c)for(var n=0;n<e.length;n+=1)this[s].appendChild(e[n]);else this[s].appendChild(e)}return this},prepend:function(e){var t,i,s=r();for(t=0;t<this.length;t+=1)if("string"==typeof e){var a=s.createElement("div");for(a.innerHTML=e,i=a.childNodes.length-1;i>=0;i-=1)this[t].insertBefore(a.childNodes[i],this[t].childNodes[0])}else if(e instanceof c)for(i=0;i<e.length;i+=1)this[t].insertBefore(e[i],this[t].childNodes[0]);else this[t].insertBefore(e,this[t].childNodes[0]);return this},next:function(e){return this.length>0?e?this[0].nextElementSibling&&m(this[0].nextElementSibling).is(e)?m([this[0].nextElementSibling]):m([]):this[0].nextElementSibling?m([this[0].nextElementSibling]):m([]):m([])},nextAll:function(e){var t=[],i=this[0];if(!i)return m([]);for(;i.nextElementSibling;){var s=i.nextElementSibling;e?m(s).is(e)&&t.push(s):t.push(s),i=s}return m(t)},prev:function(e){if(this.length>0){var t=this[0];return e?t.previousElementSibling&&m(t.previousElementSibling).is(e)?m([t.previousElementSibling]):m([]):t.previousElementSibling?m([t.previousElementSibling]):m([])}return m([])},prevAll:function(e){var t=[],i=this[0];if(!i)return m([]);for(;i.previousElementSibling;){var s=i.previousElementSibling;e?m(s).is(e)&&t.push(s):t.push(s),i=s}return m(t)},parent:function(e){for(var t=[],i=0;i<this.length;i+=1)null!==this[i].parentNode&&(e?m(this[i].parentNode).is(e)&&t.push(this[i].parentNode):t.push(this[i].parentNode));return m(t)},parents:function(e){for(var t=[],i=0;i<this.length;i+=1)for(var s=this[i].parentNode;s;)e?m(s).is(e)&&t.push(s):t.push(s),s=s.parentNode;return m(t)},closest:function(e){var t=this;return void 0===e?m([]):(t.is(e)||(t=t.parents(e).eq(0)),t)},find:function(e){for(var t=[],i=0;i<this.length;i+=1)for(var s=this[i].querySelectorAll(e),a=0;a<s.length;a+=1)t.push(s[a]);return m(t)},children:function(e){for(var t=[],i=0;i<this.length;i+=1)for(var s=this[i].children,a=0;a<s.length;a+=1)e&&!m(s[a]).is(e)||t.push(s[a]);return m(t)},filter:function(e){return m(f(this,e))},remove:function(){for(var e=0;e<this.length;e+=1)this[e].parentNode&&this[e].parentNode.removeChild(this[e]);return this}};function b(e,t){return void 0===t&&(t=0),setTimeout(e,t)}function T(){return Date.now()}function S(e){return"object"==typeof e&&null!==e&&e.constructor&&e.constructor===Object}function x(){for(var e=Object(arguments.length<=0?void 0:arguments[0]),t=1;t<arguments.length;t+=1){var i=t<0||arguments.length<=t?void 0:arguments[t];if(null!=i)for(var s=Object.keys(Object(i)),a=0,r=s.length;a<r;a+=1){var n=s[a],o=Object.getOwnPropertyDescriptor(i,n);void 0!==o&&o.enumerable&&(S(e[n])&&S(i[n])?x(e[n],i[n]):!S(e[n])&&S(i[n])?(e[n]={},x(e[n],i[n])):e[n]=i[n])}}return e}function E(e,t){Object.keys(t).forEach((function(i){S(t[i])&&Object.keys(t[i]).forEach((function(s){"function"==typeof t[i][s]&&(t[i][s]=t[i][s].bind(e))})),e[i]=t[i]}))}function M(){return g||(g=function(){var e=o(),t=r();return{touch:!!("ontouchstart"in e||e.DocumentTouch&&t instanceof e.DocumentTouch),pointerEvents:!!e.PointerEvent&&"maxTouchPoints"in e.navigator&&e.navigator.maxTouchPoints>=0,observer:"MutationObserver"in e||"WebkitMutationObserver"in e,passiveListener:function(){var t=!1;try{var i=Object.defineProperty({},"passive",{get:function(){t=!0}});e.addEventListener("testPassiveListener",null,i)}catch(e){}return t}(),gestures:"ongesturestart"in e}}()),g}function P(e){return void 0===e&&(e={}),y||(y=function(e){var t=(void 0===e?{}:e).userAgent,i=M(),s=o(),a=s.navigator.platform,r=t||s.navigator.userAgent,n={ios:!1,android:!1},l=s.screen.width,d=s.screen.height,h=r.match(/(Android);?[\s\/]+([\d.]+)?/),p=r.match(/(iPad).*OS\s([\d_]+)/),u=r.match(/(iPod)(.*OS\s([\d_]+))?/),c=!p&&r.match(/(iPhone\sOS|iOS)\s([\d_]+)/),v="Win32"===a,f="MacIntel"===a;return!p&&f&&i.touch&&["1024x1366","1366x1024","834x1194","1194x834","834x1112","1112x834","768x1024","1024x768"].indexOf(l+"x"+d)>=0&&((p=r.match(/(Version)\/([\d.]+)/))||(p=[0,1,"13_0_0"]),f=!1),h&&!v&&(n.os="android",n.android=!0),(p||c||u)&&(n.os="ios",n.ios=!0),n}(e)),y}function k(){return C||(C=function(){var e,t=o();return{isEdge:!!t.navigator.userAgent.match(/Edge/g),isSafari:(e=t.navigator.userAgent.toLowerCase(),e.indexOf("safari")>=0&&e.indexOf("chrome")<0&&e.indexOf("android")<0),isWebView:/(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(t.navigator.userAgent)}}()),C}Object.keys(w).forEach((function(e){m.fn[e]=w[e]}));var L={name:"resize",create:function(){var e=this;x(e,{resize:{resizeHandler:function(){e&&!e.destroyed&&e.initialized&&(e.emit("beforeResize"),e.emit("resize"))},orientationChangeHandler:function(){e&&!e.destroyed&&e.initialized&&e.emit("orientationchange")}}})},on:{init:function(e){var t=o();t.addEventListener("resize",e.resize.resizeHandler),t.addEventListener("orientationchange",e.resize.orientationChangeHandler)},destroy:function(e){var t=o();t.removeEventListener("resize",e.resize.resizeHandler),t.removeEventListener("orientationchange",e.resize.orientationChangeHandler)}}},z={attach:function(e,t){void 0===t&&(t={});var i=o(),s=this,a=new(i.MutationObserver||i.WebkitMutationObserver)((function(e){if(1!==e.length){var t=function(){s.emit("observerUpdate",e[0])};i.requestAnimationFrame?i.requestAnimationFrame(t):i.setTimeout(t,0)}else s.emit("observerUpdate",e[0])}));a.observe(e,{attributes:void 0===t.attributes||t.attributes,childList:void 0===t.childList||t.childList,characterData:void 0===t.characterData||t.characterData}),s.observer.observers.push(a)},init:function(){if(this.support.observer&&this.params.observer){if(this.params.observeParents)for(var e=this.$el.parents(),t=0;t<e.length;t+=1)this.observer.attach(e[t]);this.observer.attach(this.$el[0],{childList:this.params.observeSlideChildren}),this.observer.attach(this.$wrapperEl[0],{attributes:!1})}},destroy:function(){this.observer.observers.forEach((function(e){e.disconnect()})),this.observer.observers=[]}},O={name:"observer",params:{observer:!1,observeParents:!1,observeSlideChildren:!1},create:function(){E(this,{observer:t(t({},z),{},{observers:[]})})},on:{init:function(e){e.observer.init()},destroy:function(e){e.observer.destroy()}}};function I(e){var t=r(),i=o(),s=this.touchEventsData,a=this.params,n=this.touches;if(!this.animating||!a.preventInteractionOnTransition){var l=e;l.originalEvent&&(l=l.originalEvent);var d=m(l.target);if(("wrapper"!==a.touchEventsTarget||d.closest(this.wrapperEl).length)&&(s.isTouchEvent="touchstart"===l.type,(s.isTouchEvent||!("which"in l)||3!==l.which)&&!(!s.isTouchEvent&&"button"in l&&l.button>0||s.isTouched&&s.isMoved)))if(a.noSwiping&&d.closest(a.noSwipingSelector?a.noSwipingSelector:"."+a.noSwipingClass)[0])this.allowClick=!0;else if(!a.swipeHandler||d.closest(a.swipeHandler)[0]){n.currentX="touchstart"===l.type?l.targetTouches[0].pageX:l.pageX,n.currentY="touchstart"===l.type?l.targetTouches[0].pageY:l.pageY;var h=n.currentX,p=n.currentY,u=a.edgeSwipeDetection||a.iOSEdgeSwipeDetection,c=a.edgeSwipeThreshold||a.iOSEdgeSwipeThreshold;if(!u||!(h<=c||h>=i.screen.width-c)){if(x(s,{isTouched:!0,isMoved:!1,allowTouchCallbacks:!0,isScrolling:void 0,startMoving:void 0}),n.startX=h,n.startY=p,s.touchStartTime=T(),this.allowClick=!0,this.updateSize(),this.swipeDirection=void 0,a.threshold>0&&(s.allowThresholdMove=!1),"touchstart"!==l.type){var v=!0;d.is(s.formElements)&&(v=!1),t.activeElement&&m(t.activeElement).is(s.formElements)&&t.activeElement!==d[0]&&t.activeElement.blur();var f=v&&this.allowTouchMove&&a.touchStartPreventDefault;(a.touchStartForcePreventDefault||f)&&l.preventDefault()}this.emit("touchStart",l)}}}}function A(e){var t=r(),i=this.touchEventsData,s=this.params,a=this.touches,n=this.rtlTranslate,o=e;if(o.originalEvent&&(o=o.originalEvent),i.isTouched){if(!i.isTouchEvent||"touchmove"===o.type){var l="touchmove"===o.type&&o.targetTouches&&(o.targetTouches[0]||o.changedTouches[0]),d="touchmove"===o.type?l.pageX:o.pageX,h="touchmove"===o.type?l.pageY:o.pageY;if(o.preventedByNestedSwiper)return a.startX=d,void(a.startY=h);if(!this.allowTouchMove)return this.allowClick=!1,void(i.isTouched&&(x(a,{startX:d,startY:h,currentX:d,currentY:h}),i.touchStartTime=T()));if(i.isTouchEvent&&s.touchReleaseOnEdges&&!s.loop)if(this.isVertical()){if(h<a.startY&&this.translate<=this.maxTranslate()||h>a.startY&&this.translate>=this.minTranslate())return i.isTouched=!1,void(i.isMoved=!1)}else if(d<a.startX&&this.translate<=this.maxTranslate()||d>a.startX&&this.translate>=this.minTranslate())return;if(i.isTouchEvent&&t.activeElement&&o.target===t.activeElement&&m(o.target).is(i.formElements))return i.isMoved=!0,void(this.allowClick=!1);if(i.allowTouchCallbacks&&this.emit("touchMove",o),!(o.targetTouches&&o.targetTouches.length>1)){a.currentX=d,a.currentY=h;var p=a.currentX-a.startX,u=a.currentY-a.startY;if(!(this.params.threshold&&Math.sqrt(Math.pow(p,2)+Math.pow(u,2))<this.params.threshold)){var c;if(void 0===i.isScrolling)this.isHorizontal()&&a.currentY===a.startY||this.isVertical()&&a.currentX===a.startX?i.isScrolling=!1:p*p+u*u>=25&&(c=180*Math.atan2(Math.abs(u),Math.abs(p))/Math.PI,i.isScrolling=this.isHorizontal()?c>s.touchAngle:90-c>s.touchAngle);if(i.isScrolling&&this.emit("touchMoveOpposite",o),void 0===i.startMoving&&(a.currentX===a.startX&&a.currentY===a.startY||(i.startMoving=!0)),i.isScrolling)i.isTouched=!1;else if(i.startMoving){this.allowClick=!1,!s.cssMode&&o.cancelable&&o.preventDefault(),s.touchMoveStopPropagation&&!s.nested&&o.stopPropagation(),i.isMoved||(s.loop&&this.loopFix(),i.startTranslate=this.getTranslate(),this.setTransition(0),this.animating&&this.$wrapperEl.trigger("webkitTransitionEnd transitionend"),i.allowMomentumBounce=!1,!s.grabCursor||!0!==this.allowSlideNext&&!0!==this.allowSlidePrev||this.setGrabCursor(!0),this.emit("sliderFirstMove",o)),this.emit("sliderMove",o),i.isMoved=!0;var v=this.isHorizontal()?p:u;a.diff=v,v*=s.touchRatio,n&&(v=-v),this.swipeDirection=v>0?"prev":"next",i.currentTranslate=v+i.startTranslate;var f=!0,g=s.resistanceRatio;if(s.touchReleaseOnEdges&&(g=0),v>0&&i.currentTranslate>this.minTranslate()?(f=!1,s.resistance&&(i.currentTranslate=this.minTranslate()-1+Math.pow(-this.minTranslate()+i.startTranslate+v,g))):v<0&&i.currentTranslate<this.maxTranslate()&&(f=!1,s.resistance&&(i.currentTranslate=this.maxTranslate()+1-Math.pow(this.maxTranslate()-i.startTranslate-v,g))),f&&(o.preventedByNestedSwiper=!0),!this.allowSlideNext&&"next"===this.swipeDirection&&i.currentTranslate<i.startTranslate&&(i.currentTranslate=i.startTranslate),!this.allowSlidePrev&&"prev"===this.swipeDirection&&i.currentTranslate>i.startTranslate&&(i.currentTranslate=i.startTranslate),s.threshold>0){if(!(Math.abs(v)>s.threshold||i.allowThresholdMove))return void(i.currentTranslate=i.startTranslate);if(!i.allowThresholdMove)return i.allowThresholdMove=!0,a.startX=a.currentX,a.startY=a.currentY,i.currentTranslate=i.startTranslate,void(a.diff=this.isHorizontal()?a.currentX-a.startX:a.currentY-a.startY)}s.followFinger&&!s.cssMode&&((s.freeMode||s.watchSlidesProgress||s.watchSlidesVisibility)&&(this.updateActiveIndex(),this.updateSlidesClasses()),s.freeMode&&(0===i.velocities.length&&i.velocities.push({position:a[this.isHorizontal()?"startX":"startY"],time:i.touchStartTime}),i.velocities.push({position:a[this.isHorizontal()?"currentX":"currentY"],time:T()})),this.updateProgress(i.currentTranslate),this.setTranslate(i.currentTranslate))}}}}}else i.startMoving&&i.isScrolling&&this.emit("touchMoveOpposite",o)}function B(e){var t=this,i=t.touchEventsData,s=t.params,a=t.touches,r=t.rtlTranslate,n=t.$wrapperEl,o=t.slidesGrid,l=t.snapGrid,d=e;if(d.originalEvent&&(d=d.originalEvent),i.allowTouchCallbacks&&t.emit("touchEnd",d),i.allowTouchCallbacks=!1,!i.isTouched)return i.isMoved&&s.grabCursor&&t.setGrabCursor(!1),i.isMoved=!1,void(i.startMoving=!1);s.grabCursor&&i.isMoved&&i.isTouched&&(!0===t.allowSlideNext||!0===t.allowSlidePrev)&&t.setGrabCursor(!1);var h,p=T(),u=p-i.touchStartTime;if(t.allowClick&&(t.updateClickedSlide(d),t.emit("tap click",d),u<300&&p-i.lastClickTime<300&&t.emit("doubleTap doubleClick",d)),i.lastClickTime=T(),b((function(){t.destroyed||(t.allowClick=!0)})),!i.isTouched||!i.isMoved||!t.swipeDirection||0===a.diff||i.currentTranslate===i.startTranslate)return i.isTouched=!1,i.isMoved=!1,void(i.startMoving=!1);if(i.isTouched=!1,i.isMoved=!1,i.startMoving=!1,h=s.followFinger?r?t.translate:-t.translate:-i.currentTranslate,!s.cssMode)if(s.freeMode){if(h<-t.minTranslate())return void t.slideTo(t.activeIndex);if(h>-t.maxTranslate())return void(t.slides.length<l.length?t.slideTo(l.length-1):t.slideTo(t.slides.length-1));if(s.freeModeMomentum){if(i.velocities.length>1){var c=i.velocities.pop(),v=i.velocities.pop(),f=c.position-v.position,m=c.time-v.time;t.velocity=f/m,t.velocity/=2,Math.abs(t.velocity)<s.freeModeMinimumVelocity&&(t.velocity=0),(m>150||T()-c.time>300)&&(t.velocity=0)}else t.velocity=0;t.velocity*=s.freeModeMomentumVelocityRatio,i.velocities.length=0;var g=1e3*s.freeModeMomentumRatio,y=t.velocity*g,C=t.translate+y;r&&(C=-C);var w,S,x=!1,E=20*Math.abs(t.velocity)*s.freeModeMomentumBounceRatio;if(C<t.maxTranslate())s.freeModeMomentumBounce?(C+t.maxTranslate()<-E&&(C=t.maxTranslate()-E),w=t.maxTranslate(),x=!0,i.allowMomentumBounce=!0):C=t.maxTranslate(),s.loop&&s.centeredSlides&&(S=!0);else if(C>t.minTranslate())s.freeModeMomentumBounce?(C-t.minTranslate()>E&&(C=t.minTranslate()+E),w=t.minTranslate(),x=!0,i.allowMomentumBounce=!0):C=t.minTranslate(),s.loop&&s.centeredSlides&&(S=!0);else if(s.freeModeSticky){for(var M,P=0;P<l.length;P+=1)if(l[P]>-C){M=P;break}C=-(C=Math.abs(l[M]-C)<Math.abs(l[M-1]-C)||"next"===t.swipeDirection?l[M]:l[M-1])}if(S&&t.once("transitionEnd",(function(){t.loopFix()})),0!==t.velocity){if(g=r?Math.abs((-C-t.translate)/t.velocity):Math.abs((C-t.translate)/t.velocity),s.freeModeSticky){var k=Math.abs((r?-C:C)-t.translate),L=t.slidesSizesGrid[t.activeIndex];g=k<L?s.speed:k<2*L?1.5*s.speed:2.5*s.speed}}else if(s.freeModeSticky)return void t.slideToClosest();s.freeModeMomentumBounce&&x?(t.updateProgress(w),t.setTransition(g),t.setTranslate(C),t.transitionStart(!0,t.swipeDirection),t.animating=!0,n.transitionEnd((function(){t&&!t.destroyed&&i.allowMomentumBounce&&(t.emit("momentumBounce"),t.setTransition(s.speed),setTimeout((function(){t.setTranslate(w),n.transitionEnd((function(){t&&!t.destroyed&&t.transitionEnd()}))}),0))}))):t.velocity?(t.updateProgress(C),t.setTransition(g),t.setTranslate(C),t.transitionStart(!0,t.swipeDirection),t.animating||(t.animating=!0,n.transitionEnd((function(){t&&!t.destroyed&&t.transitionEnd()})))):t.updateProgress(C),t.updateActiveIndex(),t.updateSlidesClasses()}else if(s.freeModeSticky)return void t.slideToClosest();(!s.freeModeMomentum||u>=s.longSwipesMs)&&(t.updateProgress(),t.updateActiveIndex(),t.updateSlidesClasses())}else{for(var z=0,O=t.slidesSizesGrid[0],I=0;I<o.length;I+=I<s.slidesPerGroupSkip?1:s.slidesPerGroup){var A=I<s.slidesPerGroupSkip-1?1:s.slidesPerGroup;void 0!==o[I+A]?h>=o[I]&&h<o[I+A]&&(z=I,O=o[I+A]-o[I]):h>=o[I]&&(z=I,O=o[o.length-1]-o[o.length-2])}var B=(h-o[z])/O,D=z<s.slidesPerGroupSkip-1?1:s.slidesPerGroup;if(u>s.longSwipesMs){if(!s.longSwipes)return void t.slideTo(t.activeIndex);"next"===t.swipeDirection&&(B>=s.longSwipesRatio?t.slideTo(z+D):t.slideTo(z)),"prev"===t.swipeDirection&&(B>1-s.longSwipesRatio?t.slideTo(z+D):t.slideTo(z))}else{if(!s.shortSwipes)return void t.slideTo(t.activeIndex);t.navigation&&(d.target===t.navigation.nextEl||d.target===t.navigation.prevEl)?d.target===t.navigation.nextEl?t.slideTo(z+D):t.slideTo(z):("next"===t.swipeDirection&&t.slideTo(z+D),"prev"===t.swipeDirection&&t.slideTo(z))}}}function D(){var e=this.params,t=this.el;if(!t||0!==t.offsetWidth){e.breakpoints&&this.setBreakpoint();var i=this.allowSlideNext,s=this.allowSlidePrev,a=this.snapGrid;this.allowSlideNext=!0,this.allowSlidePrev=!0,this.updateSize(),this.updateSlides(),this.updateSlidesClasses(),("auto"===e.slidesPerView||e.slidesPerView>1)&&this.isEnd&&!this.isBeginning&&!this.params.centeredSlides?this.slideTo(this.slides.length-1,0,!1,!0):this.slideTo(this.activeIndex,0,!1,!0),this.autoplay&&this.autoplay.running&&this.autoplay.paused&&this.autoplay.run(),this.allowSlidePrev=s,this.allowSlideNext=i,this.params.watchOverflow&&a!==this.snapGrid&&this.checkOverflow()}}function G(e){this.allowClick||(this.params.preventClicks&&e.preventDefault(),this.params.preventClicksPropagation&&this.animating&&(e.stopPropagation(),e.stopImmediatePropagation()))}function N(){var e=this.wrapperEl,t=this.rtlTranslate;this.previousTranslate=this.translate,this.isHorizontal()?this.translate=t?e.scrollWidth-e.offsetWidth-e.scrollLeft:-e.scrollLeft:this.translate=-e.scrollTop,-0===this.translate&&(this.translate=0),this.updateActiveIndex(),this.updateSlidesClasses();var i=this.maxTranslate()-this.minTranslate();(0===i?0:(this.translate-this.minTranslate())/i)!==this.progress&&this.updateProgress(t?-this.translate:this.translate),this.emit("setTranslate",this.translate,!1)}var $=!1;function F(){}var V={init:!0,direction:"horizontal",touchEventsTarget:"container",initialSlide:0,speed:300,cssMode:!1,updateOnWindowResize:!0,width:null,height:null,preventInteractionOnTransition:!1,userAgent:null,url:null,edgeSwipeDetection:!1,edgeSwipeThreshold:20,freeMode:!1,freeModeMomentum:!0,freeModeMomentumRatio:1,freeModeMomentumBounce:!0,freeModeMomentumBounceRatio:1,freeModeMomentumVelocityRatio:1,freeModeSticky:!1,freeModeMinimumVelocity:.02,autoHeight:!1,setWrapperSize:!1,virtualTranslate:!1,effect:"slide",breakpoints:void 0,spaceBetween:0,slidesPerView:1,slidesPerColumn:1,slidesPerColumnFill:"column",slidesPerGroup:1,slidesPerGroupSkip:0,centeredSlides:!1,centeredSlidesBounds:!1,slidesOffsetBefore:0,slidesOffsetAfter:0,normalizeSlideIndex:!0,centerInsufficientSlides:!1,watchOverflow:!1,roundLengths:!1,touchRatio:1,touchAngle:45,simulateTouch:!0,shortSwipes:!0,longSwipes:!0,longSwipesRatio:.5,longSwipesMs:300,followFinger:!0,allowTouchMove:!0,threshold:0,touchMoveStopPropagation:!1,touchStartPreventDefault:!0,touchStartForcePreventDefault:!1,touchReleaseOnEdges:!1,uniqueNavElements:!0,resistance:!0,resistanceRatio:.85,watchSlidesProgress:!1,watchSlidesVisibility:!1,grabCursor:!1,preventClicks:!0,preventClicksPropagation:!0,slideToClickedSlide:!1,preloadImages:!0,updateOnImagesReady:!0,loop:!1,loopAdditionalSlides:0,loopedSlides:null,loopFillGroupWithBlank:!1,loopPreventsSlide:!0,allowSlidePrev:!0,allowSlideNext:!0,swipeHandler:null,noSwiping:!0,noSwipingClass:"swiper-no-swiping",noSwipingSelector:null,passiveListeners:!0,containerModifierClass:"swiper-container-",slideClass:"swiper-slide",slideBlankClass:"swiper-slide-invisible-blank",slideActiveClass:"swiper-slide-active",slideDuplicateActiveClass:"swiper-slide-duplicate-active",slideVisibleClass:"swiper-slide-visible",slideDuplicateClass:"swiper-slide-duplicate",slideNextClass:"swiper-slide-next",slideDuplicateNextClass:"swiper-slide-duplicate-next",slidePrevClass:"swiper-slide-prev",slideDuplicatePrevClass:"swiper-slide-duplicate-prev",wrapperClass:"swiper-wrapper",runCallbacksOnInit:!0,_emitClasses:!1},H={modular:{useParams:function(e){var t=this;t.modules&&Object.keys(t.modules).forEach((function(i){var s=t.modules[i];s.params&&x(e,s.params)}))},useModules:function(e){void 0===e&&(e={});var t=this;t.modules&&Object.keys(t.modules).forEach((function(i){var s=t.modules[i],a=e[i]||{};s.on&&t.on&&Object.keys(s.on).forEach((function(e){t.on(e,s.on[e])})),s.create&&s.create.bind(t)(a)}))}},eventsEmitter:{on:function(e,t,i){var s=this;if("function"!=typeof t)return s;var a=i?"unshift":"push";return e.split(" ").forEach((function(e){s.eventsListeners[e]||(s.eventsListeners[e]=[]),s.eventsListeners[e][a](t)})),s},once:function(e,t,i){var s=this;if("function"!=typeof t)return s;function a(){s.off(e,a),a.__emitterProxy&&delete a.__emitterProxy;for(var i=arguments.length,r=new Array(i),n=0;n<i;n++)r[n]=arguments[n];t.apply(s,r)}return a.__emitterProxy=t,s.on(e,a,i)},onAny:function(e,t){if("function"!=typeof e)return this;var i=t?"unshift":"push";return this.eventsAnyListeners.indexOf(e)<0&&this.eventsAnyListeners[i](e),this},offAny:function(e){if(!this.eventsAnyListeners)return this;var t=this.eventsAnyListeners.indexOf(e);return t>=0&&this.eventsAnyListeners.splice(t,1),this},off:function(e,t){var i=this;return i.eventsListeners?(e.split(" ").forEach((function(e){void 0===t?i.eventsListeners[e]=[]:i.eventsListeners[e]&&i.eventsListeners[e].forEach((function(s,a){(s===t||s.__emitterProxy&&s.__emitterProxy===t)&&i.eventsListeners[e].splice(a,1)}))})),i):i},emit:function(){var e,t,i,s=this;if(!s.eventsListeners)return s;for(var a=arguments.length,r=new Array(a),n=0;n<a;n++)r[n]=arguments[n];"string"==typeof r[0]||Array.isArray(r[0])?(e=r[0],t=r.slice(1,r.length),i=s):(e=r[0].events,t=r[0].data,i=r[0].context||s),t.unshift(i);var o=Array.isArray(e)?e:e.split(" ");return o.forEach((function(e){if(s.eventsAnyListeners&&s.eventsAnyListeners.length&&s.eventsAnyListeners.forEach((function(s){s.apply(i,[e].concat(t))})),s.eventsListeners&&s.eventsListeners[e]){var a=[];s.eventsListeners[e].forEach((function(e){a.push(e)})),a.forEach((function(e){e.apply(i,t)}))}})),s}},update:{updateSize:function(){var e,t,i=this.$el;e=void 0!==this.params.width&&null!==this.params.width?this.params.width:i[0].clientWidth,t=void 0!==this.params.height&&null!==this.params.width?this.params.height:i[0].clientHeight,0===e&&this.isHorizontal()||0===t&&this.isVertical()||(e=e-parseInt(i.css("padding-left")||0,10)-parseInt(i.css("padding-right")||0,10),t=t-parseInt(i.css("padding-top")||0,10)-parseInt(i.css("padding-bottom")||0,10),Number.isNaN(e)&&(e=0),Number.isNaN(t)&&(t=0),x(this,{width:e,height:t,size:this.isHorizontal()?e:t}))},updateSlides:function(){var e=o(),t=this.params,i=this.$wrapperEl,s=this.size,a=this.rtlTranslate,r=this.wrongRTL,n=this.virtual&&t.virtual.enabled,l=n?this.virtual.slides.length:this.slides.length,d=i.children("."+this.params.slideClass),h=n?this.virtual.slides.length:d.length,p=[],u=[],c=[];function v(e,i){return!t.cssMode||i!==d.length-1}var f=t.slidesOffsetBefore;"function"==typeof f&&(f=t.slidesOffsetBefore.call(this));var m=t.slidesOffsetAfter;"function"==typeof m&&(m=t.slidesOffsetAfter.call(this));var g=this.snapGrid.length,y=this.snapGrid.length,C=t.spaceBetween,w=-f,b=0,T=0;if(void 0!==s){var S,E;"string"==typeof C&&C.indexOf("%")>=0&&(C=parseFloat(C.replace("%",""))/100*s),this.virtualSize=-C,a?d.css({marginLeft:"",marginTop:""}):d.css({marginRight:"",marginBottom:""}),t.slidesPerColumn>1&&(S=Math.floor(h/t.slidesPerColumn)===h/this.params.slidesPerColumn?h:Math.ceil(h/t.slidesPerColumn)*t.slidesPerColumn,"auto"!==t.slidesPerView&&"row"===t.slidesPerColumnFill&&(S=Math.max(S,t.slidesPerView*t.slidesPerColumn)));for(var M,P=t.slidesPerColumn,k=S/P,L=Math.floor(h/t.slidesPerColumn),z=0;z<h;z+=1){E=0;var O=d.eq(z);if(t.slidesPerColumn>1){var I=void 0,A=void 0,B=void 0;if("row"===t.slidesPerColumnFill&&t.slidesPerGroup>1){var D=Math.floor(z/(t.slidesPerGroup*t.slidesPerColumn)),G=z-t.slidesPerColumn*t.slidesPerGroup*D,N=0===D?t.slidesPerGroup:Math.min(Math.ceil((h-D*P*t.slidesPerGroup)/P),t.slidesPerGroup);I=(A=G-(B=Math.floor(G/N))*N+D*t.slidesPerGroup)+B*S/P,O.css({"-webkit-box-ordinal-group":I,"-moz-box-ordinal-group":I,"-ms-flex-order":I,"-webkit-order":I,order:I})}else"column"===t.slidesPerColumnFill?(B=z-(A=Math.floor(z/P))*P,(A>L||A===L&&B===P-1)&&(B+=1)>=P&&(B=0,A+=1)):A=z-(B=Math.floor(z/k))*k;O.css("margin-"+(this.isHorizontal()?"top":"left"),0!==B&&t.spaceBetween&&t.spaceBetween+"px")}if("none"!==O.css("display")){if("auto"===t.slidesPerView){var $=e.getComputedStyle(O[0],null),F=O[0].style.transform,V=O[0].style.webkitTransform;if(F&&(O[0].style.transform="none"),V&&(O[0].style.webkitTransform="none"),t.roundLengths)E=this.isHorizontal()?O.outerWidth(!0):O.outerHeight(!0);else if(this.isHorizontal()){var H=parseFloat($.getPropertyValue("width")||0),j=parseFloat($.getPropertyValue("padding-left")||0),_=parseFloat($.getPropertyValue("padding-right")||0),W=parseFloat($.getPropertyValue("margin-left")||0),R=parseFloat($.getPropertyValue("margin-right")||0),q=$.getPropertyValue("box-sizing");E=q&&"border-box"===q?H+W+R:H+j+_+W+R}else{var X=parseFloat($.getPropertyValue("height")||0),Y=parseFloat($.getPropertyValue("padding-top")||0),U=parseFloat($.getPropertyValue("padding-bottom")||0),K=parseFloat($.getPropertyValue("margin-top")||0),J=parseFloat($.getPropertyValue("margin-bottom")||0),Q=$.getPropertyValue("box-sizing");E=Q&&"border-box"===Q?X+K+J:X+Y+U+K+J}F&&(O[0].style.transform=F),V&&(O[0].style.webkitTransform=V),t.roundLengths&&(E=Math.floor(E))}else E=(s-(t.slidesPerView-1)*C)/t.slidesPerView,t.roundLengths&&(E=Math.floor(E)),d[z]&&(this.isHorizontal()?d[z].style.width=E+"px":d[z].style.height=E+"px");d[z]&&(d[z].swiperSlideSize=E),c.push(E),t.centeredSlides?(w=w+E/2+b/2+C,0===b&&0!==z&&(w=w-s/2-C),0===z&&(w=w-s/2-C),Math.abs(w)<.001&&(w=0),t.roundLengths&&(w=Math.floor(w)),T%t.slidesPerGroup==0&&p.push(w),u.push(w)):(t.roundLengths&&(w=Math.floor(w)),(T-Math.min(this.params.slidesPerGroupSkip,T))%this.params.slidesPerGroup==0&&p.push(w),u.push(w),w=w+E+C),this.virtualSize+=E+C,b=E,T+=1}}if(this.virtualSize=Math.max(this.virtualSize,s)+m,a&&r&&("slide"===t.effect||"coverflow"===t.effect)&&i.css({width:this.virtualSize+t.spaceBetween+"px"}),t.setWrapperSize&&(this.isHorizontal()?i.css({width:this.virtualSize+t.spaceBetween+"px"}):i.css({height:this.virtualSize+t.spaceBetween+"px"})),t.slidesPerColumn>1&&(this.virtualSize=(E+t.spaceBetween)*S,this.virtualSize=Math.ceil(this.virtualSize/t.slidesPerColumn)-t.spaceBetween,this.isHorizontal()?i.css({width:this.virtualSize+t.spaceBetween+"px"}):i.css({height:this.virtualSize+t.spaceBetween+"px"}),t.centeredSlides)){M=[];for(var Z=0;Z<p.length;Z+=1){var ee=p[Z];t.roundLengths&&(ee=Math.floor(ee)),p[Z]<this.virtualSize+p[0]&&M.push(ee)}p=M}if(!t.centeredSlides){M=[];for(var te=0;te<p.length;te+=1){var ie=p[te];t.roundLengths&&(ie=Math.floor(ie)),p[te]<=this.virtualSize-s&&M.push(ie)}p=M,Math.floor(this.virtualSize-s)-Math.floor(p[p.length-1])>1&&p.push(this.virtualSize-s)}if(0===p.length&&(p=[0]),0!==t.spaceBetween&&(this.isHorizontal()?a?d.filter(v).css({marginLeft:C+"px"}):d.filter(v).css({marginRight:C+"px"}):d.filter(v).css({marginBottom:C+"px"})),t.centeredSlides&&t.centeredSlidesBounds){var se=0;c.forEach((function(e){se+=e+(t.spaceBetween?t.spaceBetween:0)}));var ae=(se-=t.spaceBetween)-s;p=p.map((function(e){return e<0?-f:e>ae?ae+m:e}))}if(t.centerInsufficientSlides){var re=0;if(c.forEach((function(e){re+=e+(t.spaceBetween?t.spaceBetween:0)})),(re-=t.spaceBetween)<s){var ne=(s-re)/2;p.forEach((function(e,t){p[t]=e-ne})),u.forEach((function(e,t){u[t]=e+ne}))}}x(this,{slides:d,snapGrid:p,slidesGrid:u,slidesSizesGrid:c}),h!==l&&this.emit("slidesLengthChange"),p.length!==g&&(this.params.watchOverflow&&this.checkOverflow(),this.emit("snapGridLengthChange")),u.length!==y&&this.emit("slidesGridLengthChange"),(t.watchSlidesProgress||t.watchSlidesVisibility)&&this.updateSlidesOffset()}},updateAutoHeight:function(e){var t,i=[],s=0;if("number"==typeof e?this.setTransition(e):!0===e&&this.setTransition(this.params.speed),"auto"!==this.params.slidesPerView&&this.params.slidesPerView>1)if(this.params.centeredSlides)this.visibleSlides.each((function(e){i.push(e)}));else for(t=0;t<Math.ceil(this.params.slidesPerView);t+=1){var a=this.activeIndex+t;if(a>this.slides.length)break;i.push(this.slides.eq(a)[0])}else i.push(this.slides.eq(this.activeIndex)[0]);for(t=0;t<i.length;t+=1)if(void 0!==i[t]){var r=i[t].offsetHeight;s=r>s?r:s}s&&this.$wrapperEl.css("height",s+"px")},updateSlidesOffset:function(){for(var e=this.slides,t=0;t<e.length;t+=1)e[t].swiperSlideOffset=this.isHorizontal()?e[t].offsetLeft:e[t].offsetTop},updateSlidesProgress:function(e){void 0===e&&(e=this&&this.translate||0);var t=this.params,i=this.slides,s=this.rtlTranslate;if(0!==i.length){void 0===i[0].swiperSlideOffset&&this.updateSlidesOffset();var a=-e;s&&(a=e),i.removeClass(t.slideVisibleClass),this.visibleSlidesIndexes=[],this.visibleSlides=[];for(var r=0;r<i.length;r+=1){var n=i[r],o=(a+(t.centeredSlides?this.minTranslate():0)-n.swiperSlideOffset)/(n.swiperSlideSize+t.spaceBetween);if(t.watchSlidesVisibility||t.centeredSlides&&t.autoHeight){var l=-(a-n.swiperSlideOffset),d=l+this.slidesSizesGrid[r];(l>=0&&l<this.size-1||d>1&&d<=this.size||l<=0&&d>=this.size)&&(this.visibleSlides.push(n),this.visibleSlidesIndexes.push(r),i.eq(r).addClass(t.slideVisibleClass))}n.progress=s?-o:o}this.visibleSlides=m(this.visibleSlides)}},updateProgress:function(e){if(void 0===e){var t=this.rtlTranslate?-1:1;e=this&&this.translate&&this.translate*t||0}var i=this.params,s=this.maxTranslate()-this.minTranslate(),a=this.progress,r=this.isBeginning,n=this.isEnd,o=r,l=n;0===s?(a=0,r=!0,n=!0):(r=(a=(e-this.minTranslate())/s)<=0,n=a>=1),x(this,{progress:a,isBeginning:r,isEnd:n}),(i.watchSlidesProgress||i.watchSlidesVisibility||i.centeredSlides&&i.autoHeight)&&this.updateSlidesProgress(e),r&&!o&&this.emit("reachBeginning toEdge"),n&&!l&&this.emit("reachEnd toEdge"),(o&&!r||l&&!n)&&this.emit("fromEdge"),this.emit("progress",a)},updateSlidesClasses:function(){var e,t=this.slides,i=this.params,s=this.$wrapperEl,a=this.activeIndex,r=this.realIndex,n=this.virtual&&i.virtual.enabled;t.removeClass(i.slideActiveClass+" "+i.slideNextClass+" "+i.slidePrevClass+" "+i.slideDuplicateActiveClass+" "+i.slideDuplicateNextClass+" "+i.slideDuplicatePrevClass),(e=n?this.$wrapperEl.find("."+i.slideClass+'[data-swiper-slide-index="'+a+'"]'):t.eq(a)).addClass(i.slideActiveClass),i.loop&&(e.hasClass(i.slideDuplicateClass)?s.children("."+i.slideClass+":not(."+i.slideDuplicateClass+')[data-swiper-slide-index="'+r+'"]').addClass(i.slideDuplicateActiveClass):s.children("."+i.slideClass+"."+i.slideDuplicateClass+'[data-swiper-slide-index="'+r+'"]').addClass(i.slideDuplicateActiveClass));var o=e.nextAll("."+i.slideClass).eq(0).addClass(i.slideNextClass);i.loop&&0===o.length&&(o=t.eq(0)).addClass(i.slideNextClass);var l=e.prevAll("."+i.slideClass).eq(0).addClass(i.slidePrevClass);i.loop&&0===l.length&&(l=t.eq(-1)).addClass(i.slidePrevClass),i.loop&&(o.hasClass(i.slideDuplicateClass)?s.children("."+i.slideClass+":not(."+i.slideDuplicateClass+')[data-swiper-slide-index="'+o.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicateNextClass):s.children("."+i.slideClass+"."+i.slideDuplicateClass+'[data-swiper-slide-index="'+o.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicateNextClass),l.hasClass(i.slideDuplicateClass)?s.children("."+i.slideClass+":not(."+i.slideDuplicateClass+')[data-swiper-slide-index="'+l.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicatePrevClass):s.children("."+i.slideClass+"."+i.slideDuplicateClass+'[data-swiper-slide-index="'+l.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicatePrevClass)),this.emitSlidesClasses()},updateActiveIndex:function(e){var t,i=this.rtlTranslate?this.translate:-this.translate,s=this.slidesGrid,a=this.snapGrid,r=this.params,n=this.activeIndex,o=this.realIndex,l=this.snapIndex,d=e;if(void 0===d){for(var h=0;h<s.length;h+=1)void 0!==s[h+1]?i>=s[h]&&i<s[h+1]-(s[h+1]-s[h])/2?d=h:i>=s[h]&&i<s[h+1]&&(d=h+1):i>=s[h]&&(d=h);r.normalizeSlideIndex&&(d<0||void 0===d)&&(d=0)}if(a.indexOf(i)>=0)t=a.indexOf(i);else{var p=Math.min(r.slidesPerGroupSkip,d);t=p+Math.floor((d-p)/r.slidesPerGroup)}if(t>=a.length&&(t=a.length-1),d!==n){var u=parseInt(this.slides.eq(d).attr("data-swiper-slide-index")||d,10);x(this,{snapIndex:t,realIndex:u,previousIndex:n,activeIndex:d}),this.emit("activeIndexChange"),this.emit("snapIndexChange"),o!==u&&this.emit("realIndexChange"),(this.initialized||this.params.runCallbacksOnInit)&&this.emit("slideChange")}else t!==l&&(this.snapIndex=t,this.emit("snapIndexChange"))},updateClickedSlide:function(e){var t=this.params,i=m(e.target).closest("."+t.slideClass)[0],s=!1;if(i)for(var a=0;a<this.slides.length;a+=1)this.slides[a]===i&&(s=!0);if(!i||!s)return this.clickedSlide=void 0,void(this.clickedIndex=void 0);this.clickedSlide=i,this.virtual&&this.params.virtual.enabled?this.clickedIndex=parseInt(m(i).attr("data-swiper-slide-index"),10):this.clickedIndex=m(i).index(),t.slideToClickedSlide&&void 0!==this.clickedIndex&&this.clickedIndex!==this.activeIndex&&this.slideToClickedSlide()}},translate:{getTranslate:function(e){void 0===e&&(e=this.isHorizontal()?"x":"y");var t=this.params,i=this.rtlTranslate,s=this.translate,a=this.$wrapperEl;if(t.virtualTranslate)return i?-s:s;if(t.cssMode)return s;var r=function(e,t){void 0===t&&(t="x");var i,s,a,r=o(),n=r.getComputedStyle(e,null);return r.WebKitCSSMatrix?((s=n.transform||n.webkitTransform).split(",").length>6&&(s=s.split(", ").map((function(e){return e.replace(",",".")})).join(", ")),a=new r.WebKitCSSMatrix("none"===s?"":s)):i=(a=n.MozTransform||n.OTransform||n.MsTransform||n.msTransform||n.transform||n.getPropertyValue("transform").replace("translate(","matrix(1, 0, 0, 1,")).toString().split(","),"x"===t&&(s=r.WebKitCSSMatrix?a.m41:16===i.length?parseFloat(i[12]):parseFloat(i[4])),"y"===t&&(s=r.WebKitCSSMatrix?a.m42:16===i.length?parseFloat(i[13]):parseFloat(i[5])),s||0}(a[0],e);return i&&(r=-r),r||0},setTranslate:function(e,t){var i=this.rtlTranslate,s=this.params,a=this.$wrapperEl,r=this.wrapperEl,n=this.progress,o=0,l=0;this.isHorizontal()?o=i?-e:e:l=e,s.roundLengths&&(o=Math.floor(o),l=Math.floor(l)),s.cssMode?r[this.isHorizontal()?"scrollLeft":"scrollTop"]=this.isHorizontal()?-o:-l:s.virtualTranslate||a.transform("translate3d("+o+"px, "+l+"px, 0px)"),this.previousTranslate=this.translate,this.translate=this.isHorizontal()?o:l;var d=this.maxTranslate()-this.minTranslate();(0===d?0:(e-this.minTranslate())/d)!==n&&this.updateProgress(e),this.emit("setTranslate",this.translate,t)},minTranslate:function(){return-this.snapGrid[0]},maxTranslate:function(){return-this.snapGrid[this.snapGrid.length-1]},translateTo:function(e,t,i,s,a){void 0===e&&(e=0),void 0===t&&(t=this.params.speed),void 0===i&&(i=!0),void 0===s&&(s=!0);var r=this,n=r.params,o=r.wrapperEl;if(r.animating&&n.preventInteractionOnTransition)return!1;var l,d=r.minTranslate(),h=r.maxTranslate();if(l=s&&e>d?d:s&&e<h?h:e,r.updateProgress(l),n.cssMode){var p,u=r.isHorizontal();if(0===t)o[u?"scrollLeft":"scrollTop"]=-l;else if(o.scrollTo)o.scrollTo(((p={})[u?"left":"top"]=-l,p.behavior="smooth",p));else o[u?"scrollLeft":"scrollTop"]=-l;return!0}return 0===t?(r.setTransition(0),r.setTranslate(l),i&&(r.emit("beforeTransitionStart",t,a),r.emit("transitionEnd"))):(r.setTransition(t),r.setTranslate(l),i&&(r.emit("beforeTransitionStart",t,a),r.emit("transitionStart")),r.animating||(r.animating=!0,r.onTranslateToWrapperTransitionEnd||(r.onTranslateToWrapperTransitionEnd=function(e){r&&!r.destroyed&&e.target===this&&(r.$wrapperEl[0].removeEventListener("transitionend",r.onTranslateToWrapperTransitionEnd),r.$wrapperEl[0].removeEventListener("webkitTransitionEnd",r.onTranslateToWrapperTransitionEnd),r.onTranslateToWrapperTransitionEnd=null,delete r.onTranslateToWrapperTransitionEnd,i&&r.emit("transitionEnd"))}),r.$wrapperEl[0].addEventListener("transitionend",r.onTranslateToWrapperTransitionEnd),r.$wrapperEl[0].addEventListener("webkitTransitionEnd",r.onTranslateToWrapperTransitionEnd))),!0}},transition:{setTransition:function(e,t){this.params.cssMode||this.$wrapperEl.transition(e),this.emit("setTransition",e,t)},transitionStart:function(e,t){void 0===e&&(e=!0);var i=this.activeIndex,s=this.params,a=this.previousIndex;if(!s.cssMode){s.autoHeight&&this.updateAutoHeight();var r=t;if(r||(r=i>a?"next":i<a?"prev":"reset"),this.emit("transitionStart"),e&&i!==a){if("reset"===r)return void this.emit("slideResetTransitionStart");this.emit("slideChangeTransitionStart"),"next"===r?this.emit("slideNextTransitionStart"):this.emit("slidePrevTransitionStart")}}},transitionEnd:function(e,t){void 0===e&&(e=!0);var i=this.activeIndex,s=this.previousIndex,a=this.params;if(this.animating=!1,!a.cssMode){this.setTransition(0);var r=t;if(r||(r=i>s?"next":i<s?"prev":"reset"),this.emit("transitionEnd"),e&&i!==s){if("reset"===r)return void this.emit("slideResetTransitionEnd");this.emit("slideChangeTransitionEnd"),"next"===r?this.emit("slideNextTransitionEnd"):this.emit("slidePrevTransitionEnd")}}}},slide:{slideTo:function(e,t,i,s){void 0===e&&(e=0),void 0===t&&(t=this.params.speed),void 0===i&&(i=!0);var a=this,r=e;r<0&&(r=0);var n=a.params,o=a.snapGrid,l=a.slidesGrid,d=a.previousIndex,h=a.activeIndex,p=a.rtlTranslate,u=a.wrapperEl;if(a.animating&&n.preventInteractionOnTransition)return!1;var c=Math.min(a.params.slidesPerGroupSkip,r),v=c+Math.floor((r-c)/a.params.slidesPerGroup);v>=o.length&&(v=o.length-1),(h||n.initialSlide||0)===(d||0)&&i&&a.emit("beforeSlideChangeStart");var f,m=-o[v];if(a.updateProgress(m),n.normalizeSlideIndex)for(var g=0;g<l.length;g+=1)-Math.floor(100*m)>=Math.floor(100*l[g])&&(r=g);if(a.initialized&&r!==h){if(!a.allowSlideNext&&m<a.translate&&m<a.minTranslate())return!1;if(!a.allowSlidePrev&&m>a.translate&&m>a.maxTranslate()&&(h||0)!==r)return!1}if(f=r>h?"next":r<h?"prev":"reset",p&&-m===a.translate||!p&&m===a.translate)return a.updateActiveIndex(r),n.autoHeight&&a.updateAutoHeight(),a.updateSlidesClasses(),"slide"!==n.effect&&a.setTranslate(m),"reset"!==f&&(a.transitionStart(i,f),a.transitionEnd(i,f)),!1;if(n.cssMode){var y,C=a.isHorizontal(),w=-m;if(p&&(w=u.scrollWidth-u.offsetWidth-w),0===t)u[C?"scrollLeft":"scrollTop"]=w;else if(u.scrollTo)u.scrollTo(((y={})[C?"left":"top"]=w,y.behavior="smooth",y));else u[C?"scrollLeft":"scrollTop"]=w;return!0}return 0===t?(a.setTransition(0),a.setTranslate(m),a.updateActiveIndex(r),a.updateSlidesClasses(),a.emit("beforeTransitionStart",t,s),a.transitionStart(i,f),a.transitionEnd(i,f)):(a.setTransition(t),a.setTranslate(m),a.updateActiveIndex(r),a.updateSlidesClasses(),a.emit("beforeTransitionStart",t,s),a.transitionStart(i,f),a.animating||(a.animating=!0,a.onSlideToWrapperTransitionEnd||(a.onSlideToWrapperTransitionEnd=function(e){a&&!a.destroyed&&e.target===this&&(a.$wrapperEl[0].removeEventListener("transitionend",a.onSlideToWrapperTransitionEnd),a.$wrapperEl[0].removeEventListener("webkitTransitionEnd",a.onSlideToWrapperTransitionEnd),a.onSlideToWrapperTransitionEnd=null,delete a.onSlideToWrapperTransitionEnd,a.transitionEnd(i,f))}),a.$wrapperEl[0].addEventListener("transitionend",a.onSlideToWrapperTransitionEnd),a.$wrapperEl[0].addEventListener("webkitTransitionEnd",a.onSlideToWrapperTransitionEnd))),!0},slideToLoop:function(e,t,i,s){void 0===e&&(e=0),void 0===t&&(t=this.params.speed),void 0===i&&(i=!0);var a=e;return this.params.loop&&(a+=this.loopedSlides),this.slideTo(a,t,i,s)},slideNext:function(e,t,i){void 0===e&&(e=this.params.speed),void 0===t&&(t=!0);var s=this.params,a=this.animating,r=this.activeIndex<s.slidesPerGroupSkip?1:s.slidesPerGroup;if(s.loop){if(a&&s.loopPreventsSlide)return!1;this.loopFix(),this._clientLeft=this.$wrapperEl[0].clientLeft}return this.slideTo(this.activeIndex+r,e,t,i)},slidePrev:function(e,t,i){void 0===e&&(e=this.params.speed),void 0===t&&(t=!0);var s=this.params,a=this.animating,r=this.snapGrid,n=this.slidesGrid,o=this.rtlTranslate;if(s.loop){if(a&&s.loopPreventsSlide)return!1;this.loopFix(),this._clientLeft=this.$wrapperEl[0].clientLeft}function l(e){return e<0?-Math.floor(Math.abs(e)):Math.floor(e)}var d,h=l(o?this.translate:-this.translate),p=r.map((function(e){return l(e)})),u=(r[p.indexOf(h)],r[p.indexOf(h)-1]);return void 0===u&&s.cssMode&&r.forEach((function(e){!u&&h>=e&&(u=e)})),void 0!==u&&(d=n.indexOf(u))<0&&(d=this.activeIndex-1),this.slideTo(d,e,t,i)},slideReset:function(e,t,i){return void 0===e&&(e=this.params.speed),void 0===t&&(t=!0),this.slideTo(this.activeIndex,e,t,i)},slideToClosest:function(e,t,i,s){void 0===e&&(e=this.params.speed),void 0===t&&(t=!0),void 0===s&&(s=.5);var a=this.activeIndex,r=Math.min(this.params.slidesPerGroupSkip,a),n=r+Math.floor((a-r)/this.params.slidesPerGroup),o=this.rtlTranslate?this.translate:-this.translate;if(o>=this.snapGrid[n]){var l=this.snapGrid[n];o-l>(this.snapGrid[n+1]-l)*s&&(a+=this.params.slidesPerGroup)}else{var d=this.snapGrid[n-1];o-d<=(this.snapGrid[n]-d)*s&&(a-=this.params.slidesPerGroup)}return a=Math.max(a,0),a=Math.min(a,this.slidesGrid.length-1),this.slideTo(a,e,t,i)},slideToClickedSlide:function(){var e,t=this,i=t.params,s=t.$wrapperEl,a="auto"===i.slidesPerView?t.slidesPerViewDynamic():i.slidesPerView,r=t.clickedIndex;if(i.loop){if(t.animating)return;e=parseInt(m(t.clickedSlide).attr("data-swiper-slide-index"),10),i.centeredSlides?r<t.loopedSlides-a/2||r>t.slides.length-t.loopedSlides+a/2?(t.loopFix(),r=s.children("."+i.slideClass+'[data-swiper-slide-index="'+e+'"]:not(.'+i.slideDuplicateClass+")").eq(0).index(),b((function(){t.slideTo(r)}))):t.slideTo(r):r>t.slides.length-a?(t.loopFix(),r=s.children("."+i.slideClass+'[data-swiper-slide-index="'+e+'"]:not(.'+i.slideDuplicateClass+")").eq(0).index(),b((function(){t.slideTo(r)}))):t.slideTo(r)}else t.slideTo(r)}},loop:{loopCreate:function(){var e=this,t=r(),i=e.params,s=e.$wrapperEl;s.children("."+i.slideClass+"."+i.slideDuplicateClass).remove();var a=s.children("."+i.slideClass);if(i.loopFillGroupWithBlank){var n=i.slidesPerGroup-a.length%i.slidesPerGroup;if(n!==i.slidesPerGroup){for(var o=0;o<n;o+=1){var l=m(t.createElement("div")).addClass(i.slideClass+" "+i.slideBlankClass);s.append(l)}a=s.children("."+i.slideClass)}}"auto"!==i.slidesPerView||i.loopedSlides||(i.loopedSlides=a.length),e.loopedSlides=Math.ceil(parseFloat(i.loopedSlides||i.slidesPerView,10)),e.loopedSlides+=i.loopAdditionalSlides,e.loopedSlides>a.length&&(e.loopedSlides=a.length);var d=[],h=[];a.each((function(t,i){var s=m(t);i<e.loopedSlides&&h.push(t),i<a.length&&i>=a.length-e.loopedSlides&&d.push(t),s.attr("data-swiper-slide-index",i)}));for(var p=0;p<h.length;p+=1)s.append(m(h[p].cloneNode(!0)).addClass(i.slideDuplicateClass));for(var u=d.length-1;u>=0;u-=1)s.prepend(m(d[u].cloneNode(!0)).addClass(i.slideDuplicateClass))},loopFix:function(){this.emit("beforeLoopFix");var e,t=this.activeIndex,i=this.slides,s=this.loopedSlides,a=this.allowSlidePrev,r=this.allowSlideNext,n=this.snapGrid,o=this.rtlTranslate;this.allowSlidePrev=!0,this.allowSlideNext=!0;var l=-n[t]-this.getTranslate();if(t<s)e=i.length-3*s+t,e+=s,this.slideTo(e,0,!1,!0)&&0!==l&&this.setTranslate((o?-this.translate:this.translate)-l);else if(t>=i.length-s){e=-i.length+t+s,e+=s,this.slideTo(e,0,!1,!0)&&0!==l&&this.setTranslate((o?-this.translate:this.translate)-l)}this.allowSlidePrev=a,this.allowSlideNext=r,this.emit("loopFix")},loopDestroy:function(){var e=this.$wrapperEl,t=this.params,i=this.slides;e.children("."+t.slideClass+"."+t.slideDuplicateClass+",."+t.slideClass+"."+t.slideBlankClass).remove(),i.removeAttr("data-swiper-slide-index")}},grabCursor:{setGrabCursor:function(e){if(!(this.support.touch||!this.params.simulateTouch||this.params.watchOverflow&&this.isLocked||this.params.cssMode)){var t=this.el;t.style.cursor="move",t.style.cursor=e?"-webkit-grabbing":"-webkit-grab",t.style.cursor=e?"-moz-grabbin":"-moz-grab",t.style.cursor=e?"grabbing":"grab"}},unsetGrabCursor:function(){this.support.touch||this.params.watchOverflow&&this.isLocked||this.params.cssMode||(this.el.style.cursor="")}},manipulation:{appendSlide:function(e){var t=this.$wrapperEl,i=this.params;if(i.loop&&this.loopDestroy(),"object"==typeof e&&"length"in e)for(var s=0;s<e.length;s+=1)e[s]&&t.append(e[s]);else t.append(e);i.loop&&this.loopCreate(),i.observer&&this.support.observer||this.update()},prependSlide:function(e){var t=this.params,i=this.$wrapperEl,s=this.activeIndex;t.loop&&this.loopDestroy();var a=s+1;if("object"==typeof e&&"length"in e){for(var r=0;r<e.length;r+=1)e[r]&&i.prepend(e[r]);a=s+e.length}else i.prepend(e);t.loop&&this.loopCreate(),t.observer&&this.support.observer||this.update(),this.slideTo(a,0,!1)},addSlide:function(e,t){var i=this.$wrapperEl,s=this.params,a=this.activeIndex;s.loop&&(a-=this.loopedSlides,this.loopDestroy(),this.slides=i.children("."+s.slideClass));var r=this.slides.length;if(e<=0)this.prependSlide(t);else if(e>=r)this.appendSlide(t);else{for(var n=a>e?a+1:a,o=[],l=r-1;l>=e;l-=1){var d=this.slides.eq(l);d.remove(),o.unshift(d)}if("object"==typeof t&&"length"in t){for(var h=0;h<t.length;h+=1)t[h]&&i.append(t[h]);n=a>e?a+t.length:a}else i.append(t);for(var p=0;p<o.length;p+=1)i.append(o[p]);s.loop&&this.loopCreate(),s.observer&&this.support.observer||this.update(),s.loop?this.slideTo(n+this.loopedSlides,0,!1):this.slideTo(n,0,!1)}},removeSlide:function(e){var t=this.params,i=this.$wrapperEl,s=this.activeIndex;t.loop&&(s-=this.loopedSlides,this.loopDestroy(),this.slides=i.children("."+t.slideClass));var a,r=s;if("object"==typeof e&&"length"in e){for(var n=0;n<e.length;n+=1)a=e[n],this.slides[a]&&this.slides.eq(a).remove(),a<r&&(r-=1);r=Math.max(r,0)}else a=e,this.slides[a]&&this.slides.eq(a).remove(),a<r&&(r-=1),r=Math.max(r,0);t.loop&&this.loopCreate(),t.observer&&this.support.observer||this.update(),t.loop?this.slideTo(r+this.loopedSlides,0,!1):this.slideTo(r,0,!1)},removeAllSlides:function(){for(var e=[],t=0;t<this.slides.length;t+=1)e.push(t);this.removeSlide(e)}},events:{attachEvents:function(){var e=r(),t=this.params,i=this.touchEvents,s=this.el,a=this.wrapperEl,n=this.device,o=this.support;this.onTouchStart=I.bind(this),this.onTouchMove=A.bind(this),this.onTouchEnd=B.bind(this),t.cssMode&&(this.onScroll=N.bind(this)),this.onClick=G.bind(this);var l=!!t.nested;if(!o.touch&&o.pointerEvents)s.addEventListener(i.start,this.onTouchStart,!1),e.addEventListener(i.move,this.onTouchMove,l),e.addEventListener(i.end,this.onTouchEnd,!1);else{if(o.touch){var d=!("touchstart"!==i.start||!o.passiveListener||!t.passiveListeners)&&{passive:!0,capture:!1};s.addEventListener(i.start,this.onTouchStart,d),s.addEventListener(i.move,this.onTouchMove,o.passiveListener?{passive:!1,capture:l}:l),s.addEventListener(i.end,this.onTouchEnd,d),i.cancel&&s.addEventListener(i.cancel,this.onTouchEnd,d),$||(e.addEventListener("touchstart",F),$=!0)}(t.simulateTouch&&!n.ios&&!n.android||t.simulateTouch&&!o.touch&&n.ios)&&(s.addEventListener("mousedown",this.onTouchStart,!1),e.addEventListener("mousemove",this.onTouchMove,l),e.addEventListener("mouseup",this.onTouchEnd,!1))}(t.preventClicks||t.preventClicksPropagation)&&s.addEventListener("click",this.onClick,!0),t.cssMode&&a.addEventListener("scroll",this.onScroll),t.updateOnWindowResize?this.on(n.ios||n.android?"resize orientationchange observerUpdate":"resize observerUpdate",D,!0):this.on("observerUpdate",D,!0)},detachEvents:function(){var e=r(),t=this.params,i=this.touchEvents,s=this.el,a=this.wrapperEl,n=this.device,o=this.support,l=!!t.nested;if(!o.touch&&o.pointerEvents)s.removeEventListener(i.start,this.onTouchStart,!1),e.removeEventListener(i.move,this.onTouchMove,l),e.removeEventListener(i.end,this.onTouchEnd,!1);else{if(o.touch){var d=!("onTouchStart"!==i.start||!o.passiveListener||!t.passiveListeners)&&{passive:!0,capture:!1};s.removeEventListener(i.start,this.onTouchStart,d),s.removeEventListener(i.move,this.onTouchMove,l),s.removeEventListener(i.end,this.onTouchEnd,d),i.cancel&&s.removeEventListener(i.cancel,this.onTouchEnd,d)}(t.simulateTouch&&!n.ios&&!n.android||t.simulateTouch&&!o.touch&&n.ios)&&(s.removeEventListener("mousedown",this.onTouchStart,!1),e.removeEventListener("mousemove",this.onTouchMove,l),e.removeEventListener("mouseup",this.onTouchEnd,!1))}(t.preventClicks||t.preventClicksPropagation)&&s.removeEventListener("click",this.onClick,!0),t.cssMode&&a.removeEventListener("scroll",this.onScroll),this.off(n.ios||n.android?"resize orientationchange observerUpdate":"resize observerUpdate",D)}},breakpoints:{setBreakpoint:function(){var e=this.activeIndex,t=this.initialized,i=this.loopedSlides,s=void 0===i?0:i,a=this.params,r=this.$el,n=a.breakpoints;if(n&&(!n||0!==Object.keys(n).length)){var o=this.getBreakpoint(n);if(o&&this.currentBreakpoint!==o){var l=o in n?n[o]:void 0;l&&["slidesPerView","spaceBetween","slidesPerGroup","slidesPerGroupSkip","slidesPerColumn"].forEach((function(e){var t=l[e];void 0!==t&&(l[e]="slidesPerView"!==e||"AUTO"!==t&&"auto"!==t?"slidesPerView"===e?parseFloat(t):parseInt(t,10):"auto")}));var d=l||this.originalParams,h=a.slidesPerColumn>1,p=d.slidesPerColumn>1;h&&!p?(r.removeClass(a.containerModifierClass+"multirow "+a.containerModifierClass+"multirow-column"),this.emitContainerClasses()):!h&&p&&(r.addClass(a.containerModifierClass+"multirow"),"column"===d.slidesPerColumnFill&&r.addClass(a.containerModifierClass+"multirow-column"),this.emitContainerClasses());var u=d.direction&&d.direction!==a.direction,c=a.loop&&(d.slidesPerView!==a.slidesPerView||u);u&&t&&this.changeDirection(),x(this.params,d),x(this,{allowTouchMove:this.params.allowTouchMove,allowSlideNext:this.params.allowSlideNext,allowSlidePrev:this.params.allowSlidePrev}),this.currentBreakpoint=o,this.emit("_beforeBreakpoint",d),c&&t&&(this.loopDestroy(),this.loopCreate(),this.updateSlides(),this.slideTo(e-s+this.loopedSlides,0,!1)),this.emit("breakpoint",d)}}},getBreakpoint:function(e){var t=o();if(e){var i=!1,s=Object.keys(e).map((function(e){if("string"==typeof e&&0===e.indexOf("@")){var i=parseFloat(e.substr(1));return{value:t.innerHeight*i,point:e}}return{value:e,point:e}}));s.sort((function(e,t){return parseInt(e.value,10)-parseInt(t.value,10)}));for(var a=0;a<s.length;a+=1){var r=s[a],n=r.point;r.value<=t.innerWidth&&(i=n)}return i||"max"}}},checkOverflow:{checkOverflow:function(){var e=this.params,t=this.isLocked,i=this.slides.length>0&&e.slidesOffsetBefore+e.spaceBetween*(this.slides.length-1)+this.slides[0].offsetWidth*this.slides.length;e.slidesOffsetBefore&&e.slidesOffsetAfter&&i?this.isLocked=i<=this.size:this.isLocked=1===this.snapGrid.length,this.allowSlideNext=!this.isLocked,this.allowSlidePrev=!this.isLocked,t!==this.isLocked&&this.emit(this.isLocked?"lock":"unlock"),t&&t!==this.isLocked&&(this.isEnd=!1,this.navigation&&this.navigation.update())}},classes:{addClasses:function(){var e=this.classNames,t=this.params,i=this.rtl,s=this.$el,a=this.device,r=[];r.push("initialized"),r.push(t.direction),t.freeMode&&r.push("free-mode"),t.autoHeight&&r.push("autoheight"),i&&r.push("rtl"),t.slidesPerColumn>1&&(r.push("multirow"),"column"===t.slidesPerColumnFill&&r.push("multirow-column")),a.android&&r.push("android"),a.ios&&r.push("ios"),t.cssMode&&r.push("css-mode"),r.forEach((function(i){e.push(t.containerModifierClass+i)})),s.addClass(e.join(" ")),this.emitContainerClasses()},removeClasses:function(){var e=this.$el,t=this.classNames;e.removeClass(t.join(" ")),this.emitContainerClasses()}},images:{loadImage:function(e,t,i,s,a,r){var n,l=o();function d(){r&&r()}m(e).parent("picture")[0]||e.complete&&a?d():t?((n=new l.Image).onload=d,n.onerror=d,s&&(n.sizes=s),i&&(n.srcset=i),t&&(n.src=t)):d()},preloadImages:function(){var e=this;function t(){null!=e&&e&&!e.destroyed&&(void 0!==e.imagesLoaded&&(e.imagesLoaded+=1),e.imagesLoaded===e.imagesToLoad.length&&(e.params.updateOnImagesReady&&e.update(),e.emit("imagesReady")))}e.imagesToLoad=e.$el.find("img");for(var i=0;i<e.imagesToLoad.length;i+=1){var s=e.imagesToLoad[i];e.loadImage(s,s.currentSrc||s.getAttribute("src"),s.srcset||s.getAttribute("srcset"),s.sizes||s.getAttribute("sizes"),!0,t)}}}},j={},_=function(){function t(){for(var e,i,s=arguments.length,a=new Array(s),r=0;r<s;r++)a[r]=arguments[r];1===a.length&&a[0].constructor&&a[0].constructor===Object?i=a[0]:(e=a[0],i=a[1]),i||(i={}),i=x({},i),e&&!i.el&&(i.el=e);var n=this;n.support=M(),n.device=P({userAgent:i.userAgent}),n.browser=k(),n.eventsListeners={},n.eventsAnyListeners=[],void 0===n.modules&&(n.modules={}),Object.keys(n.modules).forEach((function(e){var t=n.modules[e];if(t.params){var s=Object.keys(t.params)[0],a=t.params[s];if("object"!=typeof a||null===a)return;if(!(s in i)||!("enabled"in a))return;!0===i[s]&&(i[s]={enabled:!0}),"object"!=typeof i[s]||"enabled"in i[s]||(i[s].enabled=!0),i[s]||(i[s]={enabled:!1})}}));var o=x({},V);n.useParams(o),n.params=x({},o,j,i),n.originalParams=x({},n.params),n.passedParams=x({},i),n.params&&n.params.on&&Object.keys(n.params.on).forEach((function(e){n.on(e,n.params.on[e])})),n.params&&n.params.onAny&&n.onAny(n.params.onAny),n.$=m;var l=m(n.params.el);if(e=l[0]){if(l.length>1){var d=[];return l.each((function(e){var s=x({},i,{el:e});d.push(new t(s))})),d}var h,p,u;return e.swiper=n,e&&e.shadowRoot&&e.shadowRoot.querySelector?(h=m(e.shadowRoot.querySelector("."+n.params.wrapperClass))).children=function(e){return l.children(e)}:h=l.children("."+n.params.wrapperClass),x(n,{$el:l,el:e,$wrapperEl:h,wrapperEl:h[0],classNames:[],slides:m(),slidesGrid:[],snapGrid:[],slidesSizesGrid:[],isHorizontal:function(){return"horizontal"===n.params.direction},isVertical:function(){return"vertical"===n.params.direction},rtl:"rtl"===e.dir.toLowerCase()||"rtl"===l.css("direction"),rtlTranslate:"horizontal"===n.params.direction&&("rtl"===e.dir.toLowerCase()||"rtl"===l.css("direction")),wrongRTL:"-webkit-box"===h.css("display"),activeIndex:0,realIndex:0,isBeginning:!0,isEnd:!1,translate:0,previousTranslate:0,progress:0,velocity:0,animating:!1,allowSlideNext:n.params.allowSlideNext,allowSlidePrev:n.params.allowSlidePrev,touchEvents:(p=["touchstart","touchmove","touchend","touchcancel"],u=["mousedown","mousemove","mouseup"],n.support.pointerEvents&&(u=["pointerdown","pointermove","pointerup"]),n.touchEventsTouch={start:p[0],move:p[1],end:p[2],cancel:p[3]},n.touchEventsDesktop={start:u[0],move:u[1],end:u[2]},n.support.touch||!n.params.simulateTouch?n.touchEventsTouch:n.touchEventsDesktop),touchEventsData:{isTouched:void 0,isMoved:void 0,allowTouchCallbacks:void 0,touchStartTime:void 0,isScrolling:void 0,currentTranslate:void 0,startTranslate:void 0,allowThresholdMove:void 0,formElements:"input, select, option, textarea, button, video, label",lastClickTime:T(),clickTimeout:void 0,velocities:[],allowMomentumBounce:void 0,isTouchEvent:void 0,startMoving:void 0},allowClick:!0,allowTouchMove:n.params.allowTouchMove,touches:{startX:0,startY:0,currentX:0,currentY:0,diff:0},imagesToLoad:[],imagesLoaded:0}),n.useModules(),n.emit("_swiper"),n.params.init&&n.init(),n}}var i,s,a,r=t.prototype;return r.emitContainerClasses=function(){var e=this;if(e.params._emitClasses&&e.el){var t=e.el.className.split(" ").filter((function(t){return 0===t.indexOf("swiper-container")||0===t.indexOf(e.params.containerModifierClass)}));e.emit("_containerClasses",t.join(" "))}},r.emitSlidesClasses=function(){var e=this;e.params._emitClasses&&e.el&&e.slides.each((function(t){var i=t.className.split(" ").filter((function(t){return 0===t.indexOf("swiper-slide")||0===t.indexOf(e.params.slideClass)}));e.emit("_slideClass",t,i.join(" "))}))},r.slidesPerViewDynamic=function(){var e=this.params,t=this.slides,i=this.slidesGrid,s=this.size,a=this.activeIndex,r=1;if(e.centeredSlides){for(var n,o=t[a].swiperSlideSize,l=a+1;l<t.length;l+=1)t[l]&&!n&&(r+=1,(o+=t[l].swiperSlideSize)>s&&(n=!0));for(var d=a-1;d>=0;d-=1)t[d]&&!n&&(r+=1,(o+=t[d].swiperSlideSize)>s&&(n=!0))}else for(var h=a+1;h<t.length;h+=1)i[h]-i[a]<s&&(r+=1);return r},r.update=function(){var e=this;if(e&&!e.destroyed){var t=e.snapGrid,i=e.params;i.breakpoints&&e.setBreakpoint(),e.updateSize(),e.updateSlides(),e.updateProgress(),e.updateSlidesClasses(),e.params.freeMode?(s(),e.params.autoHeight&&e.updateAutoHeight()):(("auto"===e.params.slidesPerView||e.params.slidesPerView>1)&&e.isEnd&&!e.params.centeredSlides?e.slideTo(e.slides.length-1,0,!1,!0):e.slideTo(e.activeIndex,0,!1,!0))||s(),i.watchOverflow&&t!==e.snapGrid&&e.checkOverflow(),e.emit("update")}function s(){var t=e.rtlTranslate?-1*e.translate:e.translate,i=Math.min(Math.max(t,e.maxTranslate()),e.minTranslate());e.setTranslate(i),e.updateActiveIndex(),e.updateSlidesClasses()}},r.changeDirection=function(e,t){void 0===t&&(t=!0);var i=this.params.direction;return e||(e="horizontal"===i?"vertical":"horizontal"),e===i||"horizontal"!==e&&"vertical"!==e||(this.$el.removeClass(""+this.params.containerModifierClass+i).addClass(""+this.params.containerModifierClass+e),this.emitContainerClasses(),this.params.direction=e,this.slides.each((function(t){"vertical"===e?t.style.width="":t.style.height=""})),this.emit("changeDirection"),t&&this.update()),this},r.init=function(){this.initialized||(this.emit("beforeInit"),this.params.breakpoints&&this.setBreakpoint(),this.addClasses(),this.params.loop&&this.loopCreate(),this.updateSize(),this.updateSlides(),this.params.watchOverflow&&this.checkOverflow(),this.params.grabCursor&&this.setGrabCursor(),this.params.preloadImages&&this.preloadImages(),this.params.loop?this.slideTo(this.params.initialSlide+this.loopedSlides,0,this.params.runCallbacksOnInit):this.slideTo(this.params.initialSlide,0,this.params.runCallbacksOnInit),this.attachEvents(),this.initialized=!0,this.emit("init"),this.emit("afterInit"))},r.destroy=function(e,t){void 0===e&&(e=!0),void 0===t&&(t=!0);var i,s=this,a=s.params,r=s.$el,n=s.$wrapperEl,o=s.slides;return void 0===s.params||s.destroyed||(s.emit("beforeDestroy"),s.initialized=!1,s.detachEvents(),a.loop&&s.loopDestroy(),t&&(s.removeClasses(),r.removeAttr("style"),n.removeAttr("style"),o&&o.length&&o.removeClass([a.slideVisibleClass,a.slideActiveClass,a.slideNextClass,a.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-slide-index")),s.emit("destroy"),Object.keys(s.eventsListeners).forEach((function(e){s.off(e)})),!1!==e&&(s.$el[0].swiper=null,i=s,Object.keys(i).forEach((function(e){try{i[e]=null}catch(e){}try{delete i[e]}catch(e){}}))),s.destroyed=!0),null},t.extendDefaults=function(e){x(j,e)},t.installModule=function(e){t.prototype.modules||(t.prototype.modules={});var i=e.name||Object.keys(t.prototype.modules).length+"_"+T();t.prototype.modules[i]=e},t.use=function(e){return Array.isArray(e)?(e.forEach((function(e){return t.installModule(e)})),t):(t.installModule(e),t)},i=t,a=[{key:"extendedDefaults",get:function(){return j}},{key:"defaults",get:function(){return V}}],(s=null)&&e(i.prototype,s),a&&e(i,a),t}();Object.keys(H).forEach((function(e){Object.keys(H[e]).forEach((function(t){_.prototype[t]=H[e][t]}))})),_.use([L,O]);var W={update:function(){var e=this.params.navigation;if(!this.params.loop){var t=this.navigation,i=t.$nextEl,s=t.$prevEl;s&&s.length>0&&(this.isBeginning?s.addClass(e.disabledClass):s.removeClass(e.disabledClass),s[this.params.watchOverflow&&this.isLocked?"addClass":"removeClass"](e.lockClass)),i&&i.length>0&&(this.isEnd?i.addClass(e.disabledClass):i.removeClass(e.disabledClass),i[this.params.watchOverflow&&this.isLocked?"addClass":"removeClass"](e.lockClass))}},onPrevClick:function(e){e.preventDefault(),this.isBeginning&&!this.params.loop||this.slidePrev()},onNextClick:function(e){e.preventDefault(),this.isEnd&&!this.params.loop||this.slideNext()},init:function(){var e,t,i=this.params.navigation;(i.nextEl||i.prevEl)&&(i.nextEl&&(e=m(i.nextEl),this.params.uniqueNavElements&&"string"==typeof i.nextEl&&e.length>1&&1===this.$el.find(i.nextEl).length&&(e=this.$el.find(i.nextEl))),i.prevEl&&(t=m(i.prevEl),this.params.uniqueNavElements&&"string"==typeof i.prevEl&&t.length>1&&1===this.$el.find(i.prevEl).length&&(t=this.$el.find(i.prevEl))),e&&e.length>0&&e.on("click",this.navigation.onNextClick),t&&t.length>0&&t.on("click",this.navigation.onPrevClick),x(this.navigation,{$nextEl:e,nextEl:e&&e[0],$prevEl:t,prevEl:t&&t[0]}))},destroy:function(){var e=this.navigation,t=e.$nextEl,i=e.$prevEl;t&&t.length&&(t.off("click",this.navigation.onNextClick),t.removeClass(this.params.navigation.disabledClass)),i&&i.length&&(i.off("click",this.navigation.onPrevClick),i.removeClass(this.params.navigation.disabledClass))}},R={update:function(){var e=this.rtl,t=this.params.pagination;if(t.el&&this.pagination.el&&this.pagination.$el&&0!==this.pagination.$el.length){var i,s=this.virtual&&this.params.virtual.enabled?this.virtual.slides.length:this.slides.length,a=this.pagination.$el,r=this.params.loop?Math.ceil((s-2*this.loopedSlides)/this.params.slidesPerGroup):this.snapGrid.length;if(this.params.loop?((i=Math.ceil((this.activeIndex-this.loopedSlides)/this.params.slidesPerGroup))>s-1-2*this.loopedSlides&&(i-=s-2*this.loopedSlides),i>r-1&&(i-=r),i<0&&"bullets"!==this.params.paginationType&&(i=r+i)):i=void 0!==this.snapIndex?this.snapIndex:this.activeIndex||0,"bullets"===t.type&&this.pagination.bullets&&this.pagination.bullets.length>0){var n,o,l,d=this.pagination.bullets;if(t.dynamicBullets&&(this.pagination.bulletSize=d.eq(0)[this.isHorizontal()?"outerWidth":"outerHeight"](!0),a.css(this.isHorizontal()?"width":"height",this.pagination.bulletSize*(t.dynamicMainBullets+4)+"px"),t.dynamicMainBullets>1&&void 0!==this.previousIndex&&(this.pagination.dynamicBulletIndex+=i-this.previousIndex,this.pagination.dynamicBulletIndex>t.dynamicMainBullets-1?this.pagination.dynamicBulletIndex=t.dynamicMainBullets-1:this.pagination.dynamicBulletIndex<0&&(this.pagination.dynamicBulletIndex=0)),n=i-this.pagination.dynamicBulletIndex,l=((o=n+(Math.min(d.length,t.dynamicMainBullets)-1))+n)/2),d.removeClass(t.bulletActiveClass+" "+t.bulletActiveClass+"-next "+t.bulletActiveClass+"-next-next "+t.bulletActiveClass+"-prev "+t.bulletActiveClass+"-prev-prev "+t.bulletActiveClass+"-main"),a.length>1)d.each((function(e){var s=m(e),a=s.index();a===i&&s.addClass(t.bulletActiveClass),t.dynamicBullets&&(a>=n&&a<=o&&s.addClass(t.bulletActiveClass+"-main"),a===n&&s.prev().addClass(t.bulletActiveClass+"-prev").prev().addClass(t.bulletActiveClass+"-prev-prev"),a===o&&s.next().addClass(t.bulletActiveClass+"-next").next().addClass(t.bulletActiveClass+"-next-next"))}));else{var h=d.eq(i),p=h.index();if(h.addClass(t.bulletActiveClass),t.dynamicBullets){for(var u=d.eq(n),c=d.eq(o),v=n;v<=o;v+=1)d.eq(v).addClass(t.bulletActiveClass+"-main");if(this.params.loop)if(p>=d.length-t.dynamicMainBullets){for(var f=t.dynamicMainBullets;f>=0;f-=1)d.eq(d.length-f).addClass(t.bulletActiveClass+"-main");d.eq(d.length-t.dynamicMainBullets-1).addClass(t.bulletActiveClass+"-prev")}else u.prev().addClass(t.bulletActiveClass+"-prev").prev().addClass(t.bulletActiveClass+"-prev-prev"),c.next().addClass(t.bulletActiveClass+"-next").next().addClass(t.bulletActiveClass+"-next-next");else u.prev().addClass(t.bulletActiveClass+"-prev").prev().addClass(t.bulletActiveClass+"-prev-prev"),c.next().addClass(t.bulletActiveClass+"-next").next().addClass(t.bulletActiveClass+"-next-next")}}if(t.dynamicBullets){var g=Math.min(d.length,t.dynamicMainBullets+4),y=(this.pagination.bulletSize*g-this.pagination.bulletSize)/2-l*this.pagination.bulletSize,C=e?"right":"left";d.css(this.isHorizontal()?C:"top",y+"px")}}if("fraction"===t.type&&(a.find("."+t.currentClass).text(t.formatFractionCurrent(i+1)),a.find("."+t.totalClass).text(t.formatFractionTotal(r))),"progressbar"===t.type){var w;w=t.progressbarOpposite?this.isHorizontal()?"vertical":"horizontal":this.isHorizontal()?"horizontal":"vertical";var b=(i+1)/r,T=1,S=1;"horizontal"===w?T=b:S=b,a.find("."+t.progressbarFillClass).transform("translate3d(0,0,0) scaleX("+T+") scaleY("+S+")").transition(this.params.speed)}"custom"===t.type&&t.renderCustom?(a.html(t.renderCustom(this,i+1,r)),this.emit("paginationRender",a[0])):this.emit("paginationUpdate",a[0]),a[this.params.watchOverflow&&this.isLocked?"addClass":"removeClass"](t.lockClass)}},render:function(){var e=this.params.pagination;if(e.el&&this.pagination.el&&this.pagination.$el&&0!==this.pagination.$el.length){var t=this.virtual&&this.params.virtual.enabled?this.virtual.slides.length:this.slides.length,i=this.pagination.$el,s="";if("bullets"===e.type){for(var a=this.params.loop?Math.ceil((t-2*this.loopedSlides)/this.params.slidesPerGroup):this.snapGrid.length,r=0;r<a;r+=1)e.renderBullet?s+=e.renderBullet.call(this,r,e.bulletClass):s+="<"+e.bulletElement+' class="'+e.bulletClass+'"></'+e.bulletElement+">";i.html(s),this.pagination.bullets=i.find("."+e.bulletClass)}"fraction"===e.type&&(s=e.renderFraction?e.renderFraction.call(this,e.currentClass,e.totalClass):'<span class="'+e.currentClass+'"></span> / <span class="'+e.totalClass+'"></span>',i.html(s)),"progressbar"===e.type&&(s=e.renderProgressbar?e.renderProgressbar.call(this,e.progressbarFillClass):'<span class="'+e.progressbarFillClass+'"></span>',i.html(s)),"custom"!==e.type&&this.emit("paginationRender",this.pagination.$el[0])}},init:function(){var e=this,t=e.params.pagination;if(t.el){var i=m(t.el);0!==i.length&&(e.params.uniqueNavElements&&"string"==typeof t.el&&i.length>1&&(i=e.$el.find(t.el)),"bullets"===t.type&&t.clickable&&i.addClass(t.clickableClass),i.addClass(t.modifierClass+t.type),"bullets"===t.type&&t.dynamicBullets&&(i.addClass(""+t.modifierClass+t.type+"-dynamic"),e.pagination.dynamicBulletIndex=0,t.dynamicMainBullets<1&&(t.dynamicMainBullets=1)),"progressbar"===t.type&&t.progressbarOpposite&&i.addClass(t.progressbarOppositeClass),t.clickable&&i.on("click","."+t.bulletClass,(function(t){t.preventDefault();var i=m(this).index()*e.params.slidesPerGroup;e.params.loop&&(i+=e.loopedSlides),e.slideTo(i)})),x(e.pagination,{$el:i,el:i[0]}))}},destroy:function(){var e=this.params.pagination;if(e.el&&this.pagination.el&&this.pagination.$el&&0!==this.pagination.$el.length){var t=this.pagination.$el;t.removeClass(e.hiddenClass),t.removeClass(e.modifierClass+e.type),this.pagination.bullets&&this.pagination.bullets.removeClass(e.bulletActiveClass),e.clickable&&t.off("click","."+e.bulletClass)}}},q={loadInSlide:function(e,t){void 0===t&&(t=!0);var i=this,s=i.params.lazy;if(void 0!==e&&0!==i.slides.length){var a=i.virtual&&i.params.virtual.enabled?i.$wrapperEl.children("."+i.params.slideClass+'[data-swiper-slide-index="'+e+'"]'):i.slides.eq(e),r=a.find("."+s.elementClass+":not(."+s.loadedClass+"):not(."+s.loadingClass+")");!a.hasClass(s.elementClass)||a.hasClass(s.loadedClass)||a.hasClass(s.loadingClass)||r.push(a[0]),0!==r.length&&r.each((function(e){var r=m(e);r.addClass(s.loadingClass);var n=r.attr("data-background"),o=r.attr("data-src"),l=r.attr("data-srcset"),d=r.attr("data-sizes"),h=r.parent("picture");i.loadImage(r[0],o||n,l,d,!1,(function(){if(null!=i&&i&&(!i||i.params)&&!i.destroyed){if(n?(r.css("background-image",'url("'+n+'")'),r.removeAttr("data-background")):(l&&(r.attr("srcset",l),r.removeAttr("data-srcset")),d&&(r.attr("sizes",d),r.removeAttr("data-sizes")),h.length&&h.children("source").each((function(e){var t=m(e);t.attr("data-srcset")&&(t.attr("srcset",t.attr("data-srcset")),t.removeAttr("data-srcset"))})),o&&(r.attr("src",o),r.removeAttr("data-src"))),r.addClass(s.loadedClass).removeClass(s.loadingClass),a.find("."+s.preloaderClass).remove(),i.params.loop&&t){var e=a.attr("data-swiper-slide-index");if(a.hasClass(i.params.slideDuplicateClass)){var p=i.$wrapperEl.children('[data-swiper-slide-index="'+e+'"]:not(.'+i.params.slideDuplicateClass+")");i.lazy.loadInSlide(p.index(),!1)}else{var u=i.$wrapperEl.children("."+i.params.slideDuplicateClass+'[data-swiper-slide-index="'+e+'"]');i.lazy.loadInSlide(u.index(),!1)}}i.emit("lazyImageReady",a[0],r[0]),i.params.autoHeight&&i.updateAutoHeight()}})),i.emit("lazyImageLoad",a[0],r[0])}))}},load:function(){var e=this,t=e.$wrapperEl,i=e.params,s=e.slides,a=e.activeIndex,r=e.virtual&&i.virtual.enabled,n=i.lazy,o=i.slidesPerView;function l(e){if(r){if(t.children("."+i.slideClass+'[data-swiper-slide-index="'+e+'"]').length)return!0}else if(s[e])return!0;return!1}function d(e){return r?m(e).attr("data-swiper-slide-index"):m(e).index()}if("auto"===o&&(o=0),e.lazy.initialImageLoaded||(e.lazy.initialImageLoaded=!0),e.params.watchSlidesVisibility)t.children("."+i.slideVisibleClass).each((function(t){var i=r?m(t).attr("data-swiper-slide-index"):m(t).index();e.lazy.loadInSlide(i)}));else if(o>1)for(var h=a;h<a+o;h+=1)l(h)&&e.lazy.loadInSlide(h);else e.lazy.loadInSlide(a);if(n.loadPrevNext)if(o>1||n.loadPrevNextAmount&&n.loadPrevNextAmount>1){for(var p=n.loadPrevNextAmount,u=o,c=Math.min(a+u+Math.max(p,u),s.length),v=Math.max(a-Math.max(u,p),0),f=a+o;f<c;f+=1)l(f)&&e.lazy.loadInSlide(f);for(var g=v;g<a;g+=1)l(g)&&e.lazy.loadInSlide(g)}else{var y=t.children("."+i.slideNextClass);y.length>0&&e.lazy.loadInSlide(d(y));var C=t.children("."+i.slidePrevClass);C.length>0&&e.lazy.loadInSlide(d(C))}}},X={run:function(){var e=this,t=e.slides.eq(e.activeIndex),i=e.params.autoplay.delay;t.attr("data-swiper-autoplay")&&(i=t.attr("data-swiper-autoplay")||e.params.autoplay.delay),clearTimeout(e.autoplay.timeout),e.autoplay.timeout=b((function(){e.params.autoplay.reverseDirection?e.params.loop?(e.loopFix(),e.slidePrev(e.params.speed,!0,!0),e.emit("autoplay")):e.isBeginning?e.params.autoplay.stopOnLastSlide?e.autoplay.stop():(e.slideTo(e.slides.length-1,e.params.speed,!0,!0),e.emit("autoplay")):(e.slidePrev(e.params.speed,!0,!0),e.emit("autoplay")):e.params.loop?(e.loopFix(),e.slideNext(e.params.speed,!0,!0),e.emit("autoplay")):e.isEnd?e.params.autoplay.stopOnLastSlide?e.autoplay.stop():(e.slideTo(0,e.params.speed,!0,!0),e.emit("autoplay")):(e.slideNext(e.params.speed,!0,!0),e.emit("autoplay")),e.params.cssMode&&e.autoplay.running&&e.autoplay.run()}),i)},start:function(){return void 0===this.autoplay.timeout&&(!this.autoplay.running&&(this.autoplay.running=!0,this.emit("autoplayStart"),this.autoplay.run(),!0))},stop:function(){return!!this.autoplay.running&&(void 0!==this.autoplay.timeout&&(this.autoplay.timeout&&(clearTimeout(this.autoplay.timeout),this.autoplay.timeout=void 0),this.autoplay.running=!1,this.emit("autoplayStop"),!0))},pause:function(e){this.autoplay.running&&(this.autoplay.paused||(this.autoplay.timeout&&clearTimeout(this.autoplay.timeout),this.autoplay.paused=!0,0!==e&&this.params.autoplay.waitForTransition?(this.$wrapperEl[0].addEventListener("transitionend",this.autoplay.onTransitionEnd),this.$wrapperEl[0].addEventListener("webkitTransitionEnd",this.autoplay.onTransitionEnd)):(this.autoplay.paused=!1,this.autoplay.run())))},onVisibilityChange:function(){var e=r();"hidden"===e.visibilityState&&this.autoplay.running&&this.autoplay.pause(),"visible"===e.visibilityState&&this.autoplay.paused&&(this.autoplay.run(),this.autoplay.paused=!1)},onTransitionEnd:function(e){this&&!this.destroyed&&this.$wrapperEl&&e.target===this.$wrapperEl[0]&&(this.$wrapperEl[0].removeEventListener("transitionend",this.autoplay.onTransitionEnd),this.$wrapperEl[0].removeEventListener("webkitTransitionEnd",this.autoplay.onTransitionEnd),this.autoplay.paused=!1,this.autoplay.running?this.autoplay.run():this.autoplay.stop())}},Y={setTranslate:function(){for(var e=this.slides,t=0;t<e.length;t+=1){var i=this.slides.eq(t),s=-i[0].swiperSlideOffset;this.params.virtualTranslate||(s-=this.translate);var a=0;this.isHorizontal()||(a=s,s=0);var r=this.params.fadeEffect.crossFade?Math.max(1-Math.abs(i[0].progress),0):1+Math.min(Math.max(i[0].progress,-1),0);i.css({opacity:r}).transform("translate3d("+s+"px, "+a+"px, 0px)")}},setTransition:function(e){var t=this,i=t.slides,s=t.$wrapperEl;if(i.transition(e),t.params.virtualTranslate&&0!==e){var a=!1;i.transitionEnd((function(){if(!a&&t&&!t.destroyed){a=!0,t.animating=!1;for(var e=["webkitTransitionEnd","transitionend"],i=0;i<e.length;i+=1)s.trigger(e[i])}}))}}},U=[{name:"navigation",params:{navigation:{nextEl:null,prevEl:null,hideOnClick:!1,disabledClass:"swiper-button-disabled",hiddenClass:"swiper-button-hidden",lockClass:"swiper-button-lock"}},create:function(){E(this,{navigation:t({},W)})},on:{init:function(e){e.navigation.init(),e.navigation.update()},toEdge:function(e){e.navigation.update()},fromEdge:function(e){e.navigation.update()},destroy:function(e){e.navigation.destroy()},click:function(e,t){var i,s=e.navigation,a=s.$nextEl,r=s.$prevEl;!e.params.navigation.hideOnClick||m(t.target).is(r)||m(t.target).is(a)||(a?i=a.hasClass(e.params.navigation.hiddenClass):r&&(i=r.hasClass(e.params.navigation.hiddenClass)),!0===i?e.emit("navigationShow"):e.emit("navigationHide"),a&&a.toggleClass(e.params.navigation.hiddenClass),r&&r.toggleClass(e.params.navigation.hiddenClass))}}},{name:"pagination",params:{pagination:{el:null,bulletElement:"span",clickable:!1,hideOnClick:!1,renderBullet:null,renderProgressbar:null,renderFraction:null,renderCustom:null,progressbarOpposite:!1,type:"bullets",dynamicBullets:!1,dynamicMainBullets:1,formatFractionCurrent:function(e){return e},formatFractionTotal:function(e){return e},bulletClass:"swiper-pagination-bullet",bulletActiveClass:"swiper-pagination-bullet-active",modifierClass:"swiper-pagination-",currentClass:"swiper-pagination-current",totalClass:"swiper-pagination-total",hiddenClass:"swiper-pagination-hidden",progressbarFillClass:"swiper-pagination-progressbar-fill",progressbarOppositeClass:"swiper-pagination-progressbar-opposite",clickableClass:"swiper-pagination-clickable",lockClass:"swiper-pagination-lock"}},create:function(){E(this,{pagination:t({dynamicBulletIndex:0},R)})},on:{init:function(e){e.pagination.init(),e.pagination.render(),e.pagination.update()},activeIndexChange:function(e){(e.params.loop||void 0===e.snapIndex)&&e.pagination.update()},snapIndexChange:function(e){e.params.loop||e.pagination.update()},slidesLengthChange:function(e){e.params.loop&&(e.pagination.render(),e.pagination.update())},snapGridLengthChange:function(e){e.params.loop||(e.pagination.render(),e.pagination.update())},destroy:function(e){e.pagination.destroy()},click:function(e,t){e.params.pagination.el&&e.params.pagination.hideOnClick&&e.pagination.$el.length>0&&!m(t.target).hasClass(e.params.pagination.bulletClass)&&(!0===e.pagination.$el.hasClass(e.params.pagination.hiddenClass)?e.emit("paginationShow"):e.emit("paginationHide"),e.pagination.$el.toggleClass(e.params.pagination.hiddenClass))}}},{name:"lazy",params:{lazy:{enabled:!1,loadPrevNext:!1,loadPrevNextAmount:1,loadOnTransitionStart:!1,elementClass:"swiper-lazy",loadingClass:"swiper-lazy-loading",loadedClass:"swiper-lazy-loaded",preloaderClass:"swiper-lazy-preloader"}},create:function(){E(this,{lazy:t({initialImageLoaded:!1},q)})},on:{beforeInit:function(e){e.params.lazy.enabled&&e.params.preloadImages&&(e.params.preloadImages=!1)},init:function(e){e.params.lazy.enabled&&!e.params.loop&&0===e.params.initialSlide&&e.lazy.load()},scroll:function(e){e.params.freeMode&&!e.params.freeModeSticky&&e.lazy.load()},resize:function(e){e.params.lazy.enabled&&e.lazy.load()},scrollbarDragMove:function(e){e.params.lazy.enabled&&e.lazy.load()},transitionStart:function(e){e.params.lazy.enabled&&(e.params.lazy.loadOnTransitionStart||!e.params.lazy.loadOnTransitionStart&&!e.lazy.initialImageLoaded)&&e.lazy.load()},transitionEnd:function(e){e.params.lazy.enabled&&!e.params.lazy.loadOnTransitionStart&&e.lazy.load()},slideChange:function(e){e.params.lazy.enabled&&e.params.cssMode&&e.lazy.load()}}},{name:"autoplay",params:{autoplay:{enabled:!1,delay:3e3,waitForTransition:!0,disableOnInteraction:!0,stopOnLastSlide:!1,reverseDirection:!1}},create:function(){E(this,{autoplay:t(t({},X),{},{running:!1,paused:!1})})},on:{init:function(e){e.params.autoplay.enabled&&(e.autoplay.start(),r().addEventListener("visibilitychange",e.autoplay.onVisibilityChange))},beforeTransitionStart:function(e,t,i){e.autoplay.running&&(i||!e.params.autoplay.disableOnInteraction?e.autoplay.pause(t):e.autoplay.stop())},sliderFirstMove:function(e){e.autoplay.running&&(e.params.autoplay.disableOnInteraction?e.autoplay.stop():e.autoplay.pause())},touchEnd:function(e){e.params.cssMode&&e.autoplay.paused&&!e.params.autoplay.disableOnInteraction&&e.autoplay.run()},destroy:function(e){e.autoplay.running&&e.autoplay.stop(),r().removeEventListener("visibilitychange",e.autoplay.onVisibilityChange)}}},{name:"effect-fade",params:{fadeEffect:{crossFade:!1}},create:function(){E(this,{fadeEffect:t({},Y)})},on:{beforeInit:function(e){if("fade"===e.params.effect){e.classNames.push(e.params.containerModifierClass+"fade");var t={slidesPerView:1,slidesPerColumn:1,slidesPerGroup:1,watchSlidesProgress:!0,spaceBetween:0,virtualTranslate:!0};x(e.params,t),x(e.originalParams,t)}},setTranslate:function(e){"fade"===e.params.effect&&e.fadeEffect.setTranslate()},setTransition:function(e,t){"fade"===e.params.effect&&e.fadeEffect.setTransition(t)}}}];return _.use(U),_}));
            
            LS.ready.then(function(){

                
                


!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?a(require("jquery")):a(jQuery)}(function(a){function b(a){return h.raw?a:encodeURIComponent(a)}function c(a){return h.raw?a:decodeURIComponent(a)}function d(a){return b(h.json?JSON.stringify(a):String(a))}function e(a){0===a.indexOf('"')&&(a=a.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\"));try{return a=decodeURIComponent(a.replace(g," ")),h.json?JSON.parse(a):a}catch(b){}}function f(b,c){var d=h.raw?b:e(b);return a.isFunction(c)?c(d):d}var g=/\+/g,h=a.cookie=function(e,g,i){if(void 0!==g&&!a.isFunction(g)){if(i=a.extend({},h.defaults,i),"number"==typeof i.expires){var j=i.expires,k=i.expires=new Date;k.setTime(+k+864e5*j)}return document.cookie=[b(e),"=",d(g),i.expires?"; expires="+i.expires.toUTCString():"",i.path?"; path="+i.path:"",i.domain?"; domain="+i.domain:"",i.secure?"; secure":""].join("")}for(var l=e?void 0:{},m=document.cookie?document.cookie.split("; "):[],n=0,o=m.length;o>n;n++){var p=m[n].split("="),q=c(p.shift()),r=p.join("=");if(e&&e===q){l=f(r,g);break}e||void 0===(r=f(r))||(l[q]=r)}return l};h.defaults={},a.removeCookie=function(b,c){return void 0===a.cookie(b)?!1:(a.cookie(b,"",a.extend({},c,{expires:-1})),!a.cookie(b))}});



!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?a(require("jquery")):a(jQuery)}(function(a,b){function c(a,b,c,d){return!(a.selector!=b.selector||a.context!=b.context||c&&c.$lqguid!=b.fn.$lqguid||d&&d.$lqguid!=b.fn2.$lqguid)}a.extend(a.fn,{livequery:function(b,e){var f,g=this;return a.each(d.queries,function(a,d){return c(g,d,b,e)?(f=d)&&!1:void 0}),f=f||new d(g.selector,g.context,b,e),f.stopped=!1,f.run(),g},expire:function(b,e){var f=this;return a.each(d.queries,function(a,g){c(f,g,b,e)&&!f.stopped&&d.stop(g.id)}),f}});var d=a.livequery=function(b,c,e,f){var g=this;return g.selector=b,g.context=c,g.fn=e,g.fn2=f,g.elements=a([]),g.stopped=!1,g.id=d.queries.push(g)-1,e.$lqguid=e.$lqguid||d.guid++,f&&(f.$lqguid=f.$lqguid||d.guid++),g};d.prototype={stop:function(){var b=this;b.stopped||(b.fn2&&b.elements.each(b.fn2),b.elements=a([]),b.stopped=!0)},run:function(){var b=this;if(!b.stopped){var c=b.elements,d=a(b.selector,b.context),e=d.not(c),f=c.not(d);b.elements=d,e.each(b.fn),b.fn2&&f.each(b.fn2)}}},a.extend(d,{guid:0,queries:[],queue:[],running:!1,timeout:null,registered:[],checkQueue:function(){if(d.running&&d.queue.length)for(var a=d.queue.length;a--;)d.queries[d.queue.shift()].run()},pause:function(){d.running=!1},play:function(){d.running=!0,d.run()},registerPlugin:function(){a.each(arguments,function(b,c){if(a.fn[c]&&!(a.inArray(c,d.registered)>0)){var e=a.fn[c];a.fn[c]=function(){var a=e.apply(this,arguments);return d.run(),a},d.registered.push(c)}})},run:function(c){c!==b?a.inArray(c,d.queue)<0&&d.queue.push(c):a.each(d.queries,function(b){a.inArray(b,d.queue)<0&&d.queue.push(b)}),d.timeout&&clearTimeout(d.timeout),d.timeout=setTimeout(d.checkQueue,20)},stop:function(c){c!==b?d.queries[c].stop():a.each(d.queries,d.prototype.stop)}}),d.registerPlugin("append","prepend","after","before","wrap","attr","removeAttr","addClass","removeClass","toggleClass","empty","remove","html","prop","removeProp"),a(function(){d.play()})});




                
                


document.addEventListener('lazybeforeunveil', function(e){
    if ((e.target.parentElement) && (e.target.nextElementSibling)) {
        var parent = e.target.parentElement;
        var sibling = e.target.nextElementSibling;
        if (sibling.classList.contains('js-lazy-loading-preloader')) {
            sibling.style.display = 'none';
            parent.style.display = 'block';
        }
    }
});


window.lazySizesConfig = window.lazySizesConfig || {};
lazySizesConfig.hFac = 0.4;


$(document).ready(function(){

	
    
    var $notification_status_page = $(".js-notification-status-page");
    var $notification_order_cancellation = $(".js-notification-order-cancellation");
    var $fixed_bottom_button = $(".js-btn-fixed-bottom");

    
	
    $(".js-notification-close").on( "click", function(e) {
        e.preventDefault();
        $(this).closest(".js-notification").hide();
    });

    
    if ($notification_status_page.size() > 0){
        if (LS.shouldShowOrderStatusNotification($notification_status_page.data('url'))){
            $notification_status_page.show();
        };
        $(".js-notification-status-page-close").on( "click", function(e) {
            e.preventDefault();
            LS.dontShowOrderStatusNotificationAgain($notification_status_page.data('url'));
        });
    }

    
    if ($notification_order_cancellation.size() > 0){
        if (LS.shouldShowOrderCancellationNotification($notification_order_cancellation.data('url'))){
                                $notification_order_cancellation.show();
                        $fixed_bottom_button.css({"margin-bottom": "40px"});
        };
        $(".js-notification-order-cancellation-close").on( "click", function(e) {
            e.preventDefault();
            LS.dontShowOrderCancellationNotification($notification_order_cancellation.data('url'));
        });
    }

    
    $(".js-cart-notification-close").click(function(){
        $(".js-alert-added-to-cart").removeClass("notification-visible").addClass("notification-hidden");
        setTimeout(function(){
            $('.js-cart-notification-item-img').attr('src', '');
            $(".js-alert-added-to-cart").hide();
        },2000);
    });

    
    var headLogo = $(".js-head-logo").outerHeight();
    var headTabs = $(".js-nav-tabs-mobile").outerHeight();
    var headTopBar = $(".js-section-advertising").outerHeight();
    var $addedToCartNotification = $(".js-alert-added-to-cart");
    var notificationOffset = headLogo + headTopBar + 15;

    
    if ($(window).width() < 768) {
                	var notificationOffset = headTabs + 20;
            }

    $addedToCartNotification.css("top" , notificationOffset);

    
        
    
    
    if ($(window).width() < 768) {

        
        cleanURLHash = function(){
            const uri = window.location.toString();
            const clean_uri = uri.substring(0, uri.indexOf("#"));
            window.history.replaceState({}, document.title, clean_uri);
        };

        
        goBackBrowser = function(){
            cleanURLHash();
            history.back();
        };

        
        if(window.location.href.indexOf("modal-fullscreen") > -1) {
            cleanURLHash();
        }

        
        $(document).on("click", ".js-fullscreen-modal-open", function(e) {
            e.preventDefault();
            var modal_url_hash = $(this).data("modal-url");            
            window.location.hash = modal_url_hash;
        });

        
        $(document).on("click", ".js-fullscreen-modal-close", function(e) {
            e.preventDefault();
            goBackBrowser();
        });

        
        window.onhashchange = function() {
            if(window.location.href.indexOf("modal-fullscreen") <= -1) {

                
                if($(".js-fullscreen-modal").hasClass("modal-show")){
                    var $opened_modal = $(".js-fullscreen-modal.modal-show");
                    var $opened_modal_overlay = $opened_modal.prev();

                    $opened_modal.removeClass("modal-show").delay(500).hide(0);
                    $opened_modal_overlay.fadeOut(500);
                }
            }
        }

    }

    $(document).on("click", ".js-modal-open", function(e) {
        e.preventDefault(); 
        var modal_id = $(this).data('toggle');
        var $overlay_id = $('.js-modal-overlay[data-modal-id="' + modal_id + '"]');
        if ($(modal_id).hasClass("modal-show")) {
            $(modal_id).removeClass("modal-show").delay(500).hide(0);
        } else {
            $overlay_id.fadeIn(400);
            $(modal_id).detach().appendTo("body");
            $overlay_id.detach().insertBefore(modal_id);
            $(modal_id).show(0).addClass("modal-show");
        }
        if ($(modal_id).hasClass("modal-cart-big")) {
            $('body').addClass("modal-active");
        }               
    });

    $(document).on("click", ".js-modal-close", function(e) {
        e.preventDefault();  
        var $modal = $(this).closest(".js-modal");
        var modal_id = $modal.attr('id');
        var $overlay_id = $('.js-modal-overlay[data-modal-id="#' + modal_id + '"]');
        $modal.removeClass("modal-show").delay(500).hide(0); 
        $overlay_id.fadeOut(500);     
        $('body').removeClass("modal-active");

        
        if (($(window).width() < 768) && ($(this).hasClass(".js-fullscreen-modal-close"))) {
            goBackBrowser();
        } 
    });

    $(document).on("click", ".js-modal-overlay", function(e) {
        e.preventDefault();  
        var modal_id = $(this).data('modal-id');
        $(modal_id).removeClass("modal-show").delay(500).hide(0);   
        $(this).fadeOut(500);   
        $('body').removeClass("modal-active"); 
    });

    
    
    var $tab_open = $('.js-tab');

    $tab_open.click(function (e) {
        e.preventDefault(); 
        var $tab_container = $(this).closest(".js-tab-container");
        $tab_container.find(".js-tab, .js-tab-panel").removeClass("active");
        $(this).addClass("active");
        var tab_to_show = $(this).find(".js-tab-link").attr("href");
        $tab_container.find(tab_to_show).addClass("active");    
    });

	
    
        
        function applyOffset(selector){

            // Get nav height on load
            if ($(window).width() > 768) {
                var head_height = $(".js-head-main").height();
                $(selector).css("padding-top", head_height); 
            }else{

                                var head_height = 0;
            }

            // Apply offset nav height on load
            
            $(window).resize(function() {

                // Get nav height on resize
                var head_height = $(".js-head-main").height();

                // Apply offset on resize
                if ($(window).width() > 768) {
                    $(selector).css("padding-top", head_height);
                }else{

                                        $(selector).css("padding-top", 0);
                }
            });
        }

                    applyOffset(".js-head-offset", false);

            var lastScrollTop = 0;
            $(window).scroll(function(event){
               var head_tabs_height = $(".js-nav-tabs-mobile").height();
               var head_logo_height = $(".js-head-logo").height();
               var head_ad_height = $(".js-section-advertising").height();
               var scrollPosition = $(this).scrollTop();
               if (scrollPosition > lastScrollTop && scrollPosition > (head_ad_height+head_logo_height+head_tabs_height)){
                  $(".js-head-main").addClass('scroll-down').removeClass('scroll-up');
                  $(".js-head-main").css('top','-' + (head_ad_height+head_logo_height+head_tabs_height) + 'px');
                  if ($(window).width() < 768) {
                    $(".js-alert-added-to-cart").css("top" , 30);
                    $category_controls.css("top" , 48);
                  } else {
                    $(".js-alert-added-to-cart").css("top" , 45);
                  }
                  
                  $(".js-cart-notification-arrow-up").fadeOut();
                  $category_controls.addClass("scroll-down").removeClass("scroll-up");

               } else {
                  $(".js-head-main").addClass('scroll-up').removeClass('scroll-down');
                  $(".js-head-main").css({ top: '0px' });
                  $(".js-alert-added-to-cart").css("top" , head_logo_height + head_ad_height + 15);
                  $(".js-cart-notification-arrow-up").fadeIn();

                  if ($(window).width() < 768) {
                                            $(".js-alert-added-to-cart").css("top" , head_tabs_height + 20);
                                        $category_controls.css('top', mobile_nav_height );
                  }
               }
               lastScrollTop = scrollPosition;
            });
        
    
        var $top_nav = $(".js-mobile-nav");
        var $page_main_content = $(".js-main-content");
        var $search_backdrop = $(".js-search-backdrop");

        $top_nav.addClass("move-down").removeClass("move-up");


        
        $(".js-toggle-page-accordion").click(function (e) {
            e.preventDefault();
            $(this).toggleClass("active").closest(".js-nav-list-toggle-accordion").next(".js-pages-accordion").slideToggle(300);
        });

        var win_height = window.innerHeight;
        var head_height = $(".js-head-main").height();

        $(".js-desktop-dropdown").css('max-height', win_height - head_height - 50);

        $(".js-item-subitems-desktop").hover(function (e) {
            $(this).addClass("active").children(".js-desktop-dropdown").stop(true, true).fadeIn(300);
            $(".js-menu-overlay").stop(false, false).fadeIn();
        }, function() {
            $(this).removeClass("active").children(".js-desktop-dropdown").stop(true, true).fadeOut(300);
            $(".js-menu-overlay").stop(false, false).fadeOut();
        });

        
        var menuContainer = $('.js-nav-desktop-list').outerWidth();
        var menulis = 0;

        $('ul.js-nav-desktop-list > li').each(function() {
            menulis +=  $(this).outerWidth(true);
        });

        $(".js-nav-desktop-list").scroll(function() {
            var position = $('.js-nav-desktop-list').scrollLeft();
            if(position == 0) {
                $(".js-nav-desktop-list-arrow-left").addClass('disable');
            } else {
                $(".js-nav-desktop-list-arrow-left").removeClass('disable');
            }
            if(position == ( menulis - menuContainer + 75 )) {
                $(".js-nav-desktop-list-arrow-right").addClass('disable');
            } else {
                $(".js-nav-desktop-list-arrow-right").removeClass('disable');
            }
        });    
        
        if (menuContainer < menulis) {
            $('ul.js-nav-desktop-list').addClass('with-scroll');
            $('.js-nav-desktop-list-arrow').show();
        }

        $('.js-nav-desktop-list-arrow-right').click(function() {
            var posL = $('.js-nav-desktop-list').scrollLeft() + 400;
            $('.js-nav-desktop-list').animate({ 
                scrollLeft: posL 
            },400 );
        });
        $('.js-nav-desktop-list-arrow-left').click(function() {
            var posR = $('.js-nav-desktop-list').scrollLeft() - 400;
            $('.js-nav-desktop-list').animate({ 
                scrollLeft: posR 
            },400 );
        });

        

        
        $(".js-toggle-search").click(function (e) {
            e.preventDefault;
            $(".js-search-input").focus();
        });


    
        LS.search($(".js-search-input"), function (html, count) {
            $search_suggests = $(this).closest(".js-search-container").next(".js-search-suggest");
            if (count > 0) {
                $search_suggests.html(html).show();
            } else {
                $search_suggests.hide();
            }
            if ($(this).val().length == 0) {
                $search_suggests.hide();
            }
        }, {
            snipplet: 'header/header-search-results.tpl'
        });

        if ($(window).width() > 768) {

            
            $("body").click(function () {
                $(".js-search-suggest").hide();
            });

            
            $(document).on("click", ".js-search-suggest a", function () {
                $(".js-search-suggest").show();
            });
        }

        $(".js-search-suggest").on("click", ".js-search-suggest-all-link", function (e) {
            e.preventDefault();
            $this_closest_form = $(this).closest(".js-search-suggest").prev(".js-search-form");
            $this_closest_form.submit();
        });


	
	
    


	
	
		
        var width = window.innerWidth;
        if (width < 767) {   
            var swiperInformative = new Swiper ('.js-informative-banners', {
                pagination: {
                    el: '.js-informative-banners-pagination',
                    clickable: true,
                },
            });
        }

    
	
    
    
	
	
    var $category_controls = $(".js-category-controls");
    var mobile_nav_height = $(".js-head-main").outerHeight();

	
    
    
        
        $(document).on("click", ".js-item-buy-open", function(e) {
            e.preventDefault();
            $(this).toggleClass("btn-default");
            $(this).find(".js-btn-text").text(function(i, text){
                return text === "Cerrar" ? "Comprar" : "Cerrar";
            });
            $(this).closest(".js-item-description").find(".js-item-quick-element").slideToggle(300).toggleClass("active-element");
            $(this).closest(".js-product-container").find(".js-item-link").fadeToggle();
            $(this).closest(".js-item-description").find(".js-item-description-container").toggleClass('shadow-shorter');
            $(this).closest(".js-item-description").find(".js-item-name").toggleClass('pr-md-4');
            $(this).closest(".js-product-container").find(".js-color-variant-active").fadeToggle();

            var elementTop = $(this).closest(".js-product-container").offset().top;
            var viewportTop = $(window).scrollTop();

            if(elementTop < viewportTop){
                $([document.documentElement, document.body]).animate({
                    scrollTop: $(this).closest(".js-product-container").offset().top - 100
                }, 400);
            } 
        });

        $(document).on("click", ".js-item-buy-close", function(e) {
            e.preventDefault();
            $(this).closest(".js-item-description-container").removeClass('shadow-shorter');
            $(this).closest(".js-item-description").find(".js-item-buy-open").toggleClass("btn-default");
            $(this).closest(".js-item-description").find(".js-item-quick-element").slideToggle(300).toggleClass("active-element");
            $(this).closest(".js-product-container").find(".js-item-link").fadeToggle();
            $(this).closest(".js-product-container").find(".js-btn-text").text("Comprar");
            $(this).closest(".js-item-description").find(".js-item-name").toggleClass('pr-md-4');
            $(this).closest(".js-product-container").find(".js-color-variant-active").fadeToggle();
        });

    
    
    
        LS.registerOnChangeVariant(function(variant){
                        var current_image = $('.js-item-image', '.js-item-product[data-product-id="'+variant.product_id+'"]');
            current_image.attr('srcset', variant.image_url);
        });

    
    
	
	
	function get_max_installments_without_interests(number_of_installment, installment_data, max_installments_without_interests) {
	    if (parseInt(number_of_installment) > parseInt(max_installments_without_interests[0])) {
	        if (installment_data.without_interests) {
	            return [number_of_installment, installment_data.installment_value.toFixed(2)];
	        }
	    }
	    return max_installments_without_interests;
	}

	
	function get_max_installments_with_interests(number_of_installment, installment_data, max_installments_with_interests) {
	    if (parseInt(number_of_installment) > parseInt(max_installments_with_interests[0])) {
	        if (installment_data.without_interests == false) {
	            return [number_of_installment, installment_data.installment_value.toFixed(2)];
	        }
	    }
	    return max_installments_with_interests;
	}

	
	function refreshInstallmentv2(price){
	    $(".js-modal-installment-price" ).each(function( index ) {
	        const installment = Number($(this).data('installment'));
	        $(this).text(LS.currency.display_short + (price/installment).toLocaleString('de-DE', {maximumFractionDigits: 2, minimumFractionDigits: 2}));
	    });
	}

	
	
	function changeVariant(variant){
	    $(".js-product-detail .js-shipping-calculator-response").hide();
	    $("#shipping-variant-id").val(variant.id);

	    var parent = $("body");
	    if (variant.element){
	        parent = $(variant.element);
	    }

	    var sku = parent.find('#sku');
	    if(sku.length) {
	        sku.text(variant.sku).show();
	    }

	    var installment_helper = function($element, amount, price){
	        $element.find('.js-installment-amount').text(amount);
	        $element.find('.js-installment-price').attr("data-value", price);
	        $element.find('.js-installment-price').text(LS.currency.display_short + parseFloat(price).toLocaleString('de-DE', { minimumFractionDigits: 2 }));
	        if(variant.price_short && Math.abs(variant.price_number - price * amount) < 1) {
	            $element.find('.js-installment-total-price').text((variant.price_short).toLocaleString('de-DE', { minimumFractionDigits: 2 }));
	        } else {
	            $element.find('.js-installment-total-price').text(LS.currency.display_short + (price * amount).toLocaleString('de-DE', { minimumFractionDigits: 2 }));
	        }
	    };

	    if (variant.installments_data) {
	        var variant_installments = JSON.parse(variant.installments_data);
	        var max_installments_without_interests = [0,0];
	        var max_installments_with_interests = [0,0];
	        $.each(variant_installments, function(payment_method, installments) {
	            $.each(installments, function(number_of_installment, installment_data) {
	                max_installments_without_interests = get_max_installments_without_interests(number_of_installment, installment_data, max_installments_without_interests);
	                max_installments_with_interests = get_max_installments_with_interests(number_of_installment, installment_data, max_installments_with_interests);
	                var installment_container_selector = '#installment_' + payment_method + '_' + number_of_installment;

	                if(!parent.hasClass("js-quickshop-container")){
	                    installment_helper($(installment_container_selector), number_of_installment, installment_data.installment_value.toFixed(2));
	                }
	            });
	        });
	        var $installments_container = $(variant.element + ' .js-max-installments-container .js-max-installments');
	        var $installments_modal_link = $(variant.element + ' #btn-installments');
	        var $payments_module = $(variant.element + ' .js-product-payments-container');
	        var $installmens_card_icon = $(variant.element + ' .js-installments-credit-card-icon');

	        	        var installments_to_use = max_installments_without_interests[0] > 1 ? max_installments_without_interests : max_installments_with_interests;

	        if(installments_to_use[0] <= 1 ) {
	        	            $installments_container.hide();
	            $installments_modal_link.hide();
	            $payments_module.hide();
	            $installmens_card_icon.hide();
	        } else {
	            $installments_container.show();
	            $installments_modal_link.show();
	            $payments_module.show();
	            $installmens_card_icon.show();
	            installment_helper($installments_container, installments_to_use[0], installments_to_use[1]);
	        }
	    }

	    if(!parent.hasClass("js-quickshop-container")){
	    	$('#installments-modal .js-installments-one-payment').text(variant.price_short).attr("data-value", variant.price_number);
		}
	    
	    if (variant.price_short){
	        parent.find('.js-price-display').text(variant.price_short).show();
	        parent.find('.js-price-display').attr("content", variant.price_number);
	    } else {
	        parent.find('.js-price-display').hide();
	    }

	    if ((variant.compare_at_price_short) && !(parent.find(".js-price-display").css("display") == "none")) {
	        parent.find('.js-compare-price-display').text(variant.compare_at_price_short).show();
	    } else {
	        parent.find('.js-compare-price-display').hide();
	    }

	    var button = parent.find('.js-addtocart');
	    button.removeClass('cart').removeClass('contact').removeClass('nostock');
	    var $product_shipping_calculator = parent.find("#product-shipping-container");
	    	    if (!variant.available){
	        button.val('Sin stock');
	        button.addClass('nostock');
	        button.attr('disabled', 'disabled');
	        $product_shipping_calculator.hide();
	    } else if (variant.contact) {
	        button.val('Consultar precio');
	        button.addClass('contact');
	        button.removeAttr('disabled');
	        $product_shipping_calculator.hide();
	    } else {
	        button.val('Agregar al carrito');
	        button.addClass('cart');
	        button.removeAttr('disabled');
	        $product_shipping_calculator.show();
	    }

	    
	            
        
        LS.updateShippingProduct();

        zipcode_on_changevariant = $("#product-shipping-container .js-shipping-input").val();
        $("#product-shipping-container .js-shipping-calculator-current-zip").text(zipcode_on_changevariant);
	}

	
	
	$(document).on("change", ".js-variation-option", function(e) {
        var $parent = $(this).closest(".js-product-variants");
        var $variants_group = $(this).closest(".js-product-variants-group");
        var quick_id = $(this).closest(".js-quickshop-container").attr("id");
        if ($parent.hasClass("js-product-quickshop-variants")) {
            var hasSlider = $('.js-swiper-slide-visible #' + quick_id).length;
            LS.changeVariant(changeVariant, (hasSlider ? '.js-swiper-slide-visible' : '') + ' #' + quick_id);

             
        } else {
            LS.changeVariant(changeVariant, '#single-product');
        }
	    var $this_compare_price =  $(this).closest(".js-product-container").find(".js-compare-price-display");

	    var $this_price = $(this).closest(".js-product-container").find(".js-price-display");
	    var $installment_container = $(this).closest(".js-product-container").find(".js-product-payments-container");
	    var $installment_text = $(this).closest(".js-product-container").find(".js-max-installments-container");
	    var $this_product_container = $(this).closest(".js-product-container");
	    var $this_add_to_cart =  $(this).closest(".js-product-container").find(".js-prod-submit-form");
	    // Get the current product discount percentage value
	    var current_percentage_value = $this_product_container.find(".js-offer-percentage");
	    // Get the current product price and promotional price
	    var compare_price_value = $this_compare_price.html();
	    var price_value = $this_price.html();
	    // Filter prices to only have numbers
	    old_price_value_filtered = parseInt(compare_price_value.replace(/[^0-9]/gi, ''), 10)/100;
	    current_price_value_filtered = parseInt(price_value.replace(/[^0-9]/gi, ''), 10)/100;
	    // Calculate new discount percentage based on difference between filtered old and new prices
	    price_difference = (old_price_value_filtered-current_price_value_filtered);
	    updated_discount_percentage = Math.round(((price_difference*100)/old_price_value_filtered));
	    $this_product_container.find(".js-offer-percentage").html(updated_discount_percentage);
	    if ($this_compare_price.css("display") == "none") {
	        $this_product_container.find(".js-offer-label").hide();
	    }
	    else {
	        $this_product_container.find(".js-offer-label").css("display" , "block");
	    }
	    if ($this_add_to_cart.hasClass("nostock")) {
	        $this_product_container.find(".js-stock-label").show();
	    }
	    else {
	        $this_product_container.find(".js-stock-label").hide();
	    }
	    if ($this_price.css('display') == 'none'){
	        $installment_container.hide();
	        $installment_text.hide();
	    }else{
	        $installment_text.show();
	    }
	});

	
	
	$(".js-product-form").submit(function (e) {
	    var button = $(this).find(':submit');
	    button.attr('disabled', 'disabled');
	    if ((button.hasClass('contact')) || (button.hasClass('catalog'))) {
	        e.preventDefault();
	        var product_id = $(this).find("input[name='add_to_cart']").val();
	        window.location = "\x2Fcontacto\x2F?product=" + product_id;
	    } else if (button.hasClass('cart')) {
	        button.val('Agregando...');
	    }
	});

	
    
    $('.js-quantity .js-quantity-up').on('click', function() {
        $quantity_input = $(this).closest(".js-quantity").find(".js-quantity-input");
        $quantity_input.val( parseInt($quantity_input.val(), 10) + 1);
    });

    $('.js-quantity .js-quantity-down').on('click', function() {
        $quantity_input = $(this).closest(".js-quantity").find(".js-quantity-input");
        quantity_input_val = $quantity_input.val();
        if (quantity_input_val>1) { 
            $quantity_input.val( parseInt($quantity_input.val(), 10) - 1);
        }
    });

	   
    
    var head_add_height = $(".js-section-advertising").outerHeight();
    var head_logo_height = $(".js-head-logo").outerHeight();
    var viewport_height = $(window).outerHeight();
    var cart_summary_max_height = viewport_height - (head_add_height + head_logo_height); 

    $(".js-cart-summary-detail").css("max-height" , cart_summary_max_height);

    $(".js-cart-summary").hover(function (e) {
        e.preventDefault();
        $(this).children(".js-cart-summary-detail").toggleClass("active").stop(true, true).fadeToggle(300);
    });
    

    
	$(document).on("click", ".js-addtocart:not(.js-addtocart-placeholder)", function (e) {
        
        
        var $productContainer = $(this).closest('.js-product-container');
        var $productVariants = $productContainer.find(".js-variation-option");
        var $productButton = $productContainer.find("input[type='submit'].js-addtocart");
        var $productButtonPlaceholder = $productContainer.find(".js-addtocart-placeholder");
        var $productButtonText = $productButtonPlaceholder.find(".js-addtocart-text");
        var $productButtonAdding = $productButtonPlaceholder.find(".js-addtocart-adding");
        var $productButtonSuccess = $productButtonPlaceholder.find(".js-addtocart-success");
        var productButttonHeight = $productButton.height();

        
        var isQuickShop = $productContainer.hasClass('js-quickshop-container');

        if (!isQuickShop) {
            if($(".js-product-slide-img.js-active-variant").length) {
                var imageSrc = $($productContainer.find('.js-product-slide-img.js-active-variant')[0]).attr('srcset').split(' ')[0];
            } else {
                var imageSrc = $($productContainer.find('.js-product-slide-img')[0]).attr('srcset').split(' ')[0];
            }
            var quantity = $productContainer.find('.js-quantity-input').val();
            var name = $('#product-name').text();
            var price = $productContainer.find('.js-price-display').text();
            var addedToCartCopy = "Agregar al carrito";
        } else {
            var imageSrc = $(this).closest('.js-quickshop-container').find('img').attr('srcset').split(' ')[0];
            var quantity = 1;
            var name = $productContainer.find('.js-item-name').text();
            var price = $productContainer.find('.js-price-display').text().trim();
            var addedToCartCopy = "Comprar";
            if ($productContainer.hasClass("js-quickshop-has-variants")) {
                var addedToCartCopy = "Agregar al carrito";
            }else{
                var addedToCartCopy = "Comprar";
            }
        }

        if (!$(this).hasClass('contact')) {
            e.preventDefault();

            
            $productButton.hide();
            $productButtonPlaceholder.show();
            $productButtonPlaceholder.height(productButttonHeight);

            $productButtonText.removeClass("active");
            $productButtonAdding.addClass("active");

            var callback_add_to_cart = function(){

                
                $('.js-cart-notification-item-img').attr('src', imageSrc);
                $('.js-cart-notification-item-name').text(name);
                $('.js-cart-notification-item-quantity').text(quantity);
                $('.js-cart-notification-item-price').text(price);

                if($productVariants.length){
                    var output = [];

                    $productVariants.each( function(){  
                        var variants = $(this);
                        output.push(variants.val());
                    });
                    $(".js-cart-notification-item-variant-container").show();
                    $(".js-cart-notification-item-variant").text(output.join(', '))
                }else{
                    $(".js-cart-notification-item-variant-container").hide();
                }

                $productContainer.find(".js-added-to-cart-product-message").fadeIn();

                
                $(".js-cart-link").addClass("active");

                var cartItemsAmount = $(".js-cart-widget-amount").first().text();

                if(cartItemsAmount > 1){
                    $(".js-cart-counts-plural").show();
                    $(".js-cart-counts-singular").hide();
                }else{
                    $(".js-cart-counts-singular").show();
                    $(".js-cart-counts-plural").hide();
                }

                
                $productButtonAdding.removeClass("active");

                setTimeout(function(){
                    $productButtonSuccess.addClass("active");
                },200);
                setTimeout(function(){
                    $productButtonSuccess.removeClass("active");
                    setTimeout(function(){
                        $productButtonText.addClass("active");
                        $productButtonPlaceholder.removeClass("active");
                    },200);
                    
                },3000);

                setTimeout(function(){
                    $productButtonPlaceholder.removeAttr("style").hide();
                    $productButton.show();
                    if (!isQuickShop) {
                        $productButton.removeClass("mb-5").addClass("mb-2");
                    }
                },5000);

               
                setTimeout(function(){
                    $(".js-alert-added-to-cart").show().addClass("notification-visible").removeClass("notification-hidden");
                },500);

                if (typeof $.cookie('first_product_added_successfully') === 'undefined') {
                    $.cookie('first_product_added_successfully', true, { path: '/', expires: 7 }); 
                } else{
                    setTimeout(function(){
                        $(".js-alert-added-to-cart").removeClass("notification-visible").addClass("notification-hidden");
                        setTimeout(function(){
                            $('.js-cart-notification-item-img').attr('src', '');
                            $(".js-alert-added-to-cart").hide();
                        },2000);
                    },8000);
                }

                
                
                if ($("#product-shipping-container .js-shipping-input").val()) {
                    zipcode_on_addtocart = $("#product-shipping-container .js-shipping-input").val();
                    $("#cart-shipping-container .js-shipping-input").val(zipcode_on_addtocart);
                    $(".js-shipping-calculator-current-zip").text(zipcode_on_addtocart);
                } else if (!!$.cookie('calculator_zipcode')){
                    var zipcode_from_cookie = $.cookie("calculator_zipcode");
                    $('.js-shipping-input').val(zipcode_from_cookie);
                    $(".js-shipping-calculator-current-zip").text(zipcode_from_cookie);
                }

                // set Add to Cart notification content

                $('.js-notification-item-img').attr('src', imageSrc);
                $('.js-notification-item-name').text(name);
                $('.js-notification-item-quantity').text(quantity);
                $('.js-notification-item-price').text(price);

            }
            var callback_error = function(){

                
                $productButtonPlaceholder.removeClass("active");
                $productButtonText.addClass("active");
                $productButtonAdding.removeClass("active");
                $productButtonPlaceholder.hide();
                $productButton.show();

            }
            $prod_form = $(this).closest("form");
            LS.addToCartEnhanced(
                $prod_form,
                addedToCartCopy,
                'Agregando...',
                '¡Uy! No tenemos más stock de este producto para agregarlo al carrito.',
                false,
                    callback_add_to_cart,
                    callback_error
            );
        }
    });


    
    $(document).on("keypress", ".js-cart-quantity-input", function (e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    });

    $(document).on("focusout", ".js-cart-quantity-input", function (e) {
        $(".js-shipping-calculator-response").hide().empty();
        $(".js-go-checkout-btn").prop("disabled", true);
        var itemID = $(this).attr("data-item-id");
        var itemVAL = $(this).val();
        if (itemVAL == 0) {
            var r = confirm("¿Seguro que quieres borrar este artículo?");
            if (r == true) {
                LS.removeItem(itemID, true);
            } else {
                $(this).val(1);
            }
        } else {
            LS.changeQuantity(itemID, itemVAL, true);
        }
    });

    
    $(".js-trigger-empty-cart-alert").click(function (e) {
        e.preventDefault();
        $(".js-mobile-nav-empty-cart-alert").fadeIn(100).delay(1500).fadeOut(500);
    });

    
    
    $('form[action="\x2Fcomprar\x2F"]').submit(function() {
        $.removeCookie('first_product_added_successfully', { path: '/' });
    }); 

	
	
    selectShippingOption = function(elem, save_option) {
        $(".js-shipping-method, .js-branch-method").removeClass('js-selected-shipping-method');
        $(elem).addClass('js-selected-shipping-method');
        if (save_option) {
            LS.saveCalculatedShipping(true);
        }
        if($(elem).hasClass("js-shipping-method-hidden")){

            
            if($(elem).hasClass("js-pickup-option")){
                $(".js-other-pickup-options, .js-show-other-pickup-options .js-shipping-see-less").show();
                $(".js-show-other-pickup-options .js-shipping-see-more").hide();

            }else{
                $(".js-other-shipping-options, .js-show-more-shipping-options .js-shipping-see-less").show();
                $(".js-show-more-shipping-options .js-shipping-see-more").hide()
            }          
        }
    };

    
    
        if (!!$.cookie('calculator_zipcode')) {

            
            var zipcode_from_cookie = $.cookie("calculator_zipcode");

            
                
                $('.js-shipping-input').val(zipcode_from_cookie);
                
            
            
            $(".js-shipping-calculator-current-zip").text(zipcode_from_cookie);

            
            $(".js-shipping-calculator-head").addClass("with-zip").removeClass("with-form");
            $(".js-shipping-calculator-with-zipcode").addClass("transition-up-active");
            $(".js-shipping-calculator-spinner").show();
        } else {

            
            $(".js-shipping-calculator-form").addClass("transition-up-active");
        }
    
    
    removeShippingSuboptions = function(){
        var shipping_suboptions_id = $(".js-modal-shipping-suboptions").attr("id");
        $("#" + shipping_suboptions_id).remove();
        $('.js-modal-overlay[data-modal-id="#' + shipping_suboptions_id + '"').remove();
    };  

    
    $(".js-calculate-shipping").click(function (e) {
        e.preventDefault();

                
        let shipping_input_val = $(this).closest(".js-shipping-calculator-form").find(".js-shipping-input").val();

        $(".js-shipping-input").val(shipping_input_val);

        
        
        if ($(".js-cart-item").length) {
            LS.calculateShippingAjax(
                $('#cart-shipping-container').find(".js-shipping-input").val(), 
                '\x2Fenvio\x2F',
                $("#cart-shipping-container").closest(".js-shipping-calculator-container") );
        }

        $(".js-shipping-calculator-current-zip").html(shipping_input_val);
        removeShippingSuboptions();

    });

	
	$(".js-shipping-input").keydown(function (e) {
	    var key = e.which ? e.which : e.keyCode;
	    var enterKey = 13;
	    if (key === enterKey) {
	        e.preventDefault();
	        $(this).closest(".js-shipping-calculator-form").find(".js-calculate-shipping").click();
	        if ($(window).width() < 768) {
	            $(this).blur();
	        }
	    }
	});

    
    $(document).on("change", ".js-shipping-method, .js-branch-method", function () {
        selectShippingOption(this, true);
        $(".js-shipping-method-unavailable").hide();
    });

    
    $('.js-shipping-method:checked').livequery(function () {
        let shippingPrice = $(this).attr("data-price");
        LS.addToTotal(shippingPrice);

        let total = (LS.data.cart.total / 100) + parseFloat(shippingPrice);
        $(".js-cart-widget-total").html(LS.formatToCurrency(total));

        selectShippingOption(this, false);
    });

    
    $(document).on("click", ".js-toggle-branches", function (e) {
        e.preventDefault();
        $(".js-store-branches-container").slideToggle("fast");
        $(".js-see-branches, .js-hide-branches").toggle();
    });

    
    $(document).on("click", ".js-toggle-more-shipping-options", function(e) {
        e.preventDefault();

        
        if($(this).hasClass("js-show-other-pickup-options")){
            $(".js-other-pickup-options").slideToggle(600);
            $(".js-show-other-pickup-options .js-shipping-see-less, .js-show-other-pickup-options .js-shipping-see-more").toggle();
        }else{
            $(".js-other-shipping-options").slideToggle(600);
            $(".js-show-more-shipping-options .js-shipping-see-less, .js-show-more-shipping-options .js-shipping-see-more").toggle();
        }
    });

    
    
    calculateCartShippingOnLoad = function(){

        
        if($("#cart-shipping-container .js-shipping-input").val()){
       
            // If user already had calculated shipping: recalculate shipping

            setTimeout(function() { 
                LS.calculateShippingAjax(
                    $('#cart-shipping-container').find(".js-shipping-input").val(), 
                    '\x2Fenvio\x2F',
                    $("#cart-shipping-container").closest(".js-shipping-calculator-container") );
                    removeShippingSuboptions();
            }, 100);
        } 

        if($(".js-branch-method").hasClass('js-selected-shipping-method')){
                    }
    };

    
    
    
    
    $(document).on("click", ".js-shipping-calculator-change-zipcode", function(e) {
        e.preventDefault();
        $(".js-shipping-calculator-response").fadeOut(100);
        $(".js-shipping-calculator-head").addClass("with-form").removeClass("with-zip");
        $(".js-shipping-calculator-with-zipcode").removeClass("transition-up-active");
        $(".js-shipping-calculator-form").addClass("transition-up-active");
    }); 

	
	
    
    $(document).on("click", ".js-save-shipping-country", function(e) {
        e.preventDefault();
        
        var selected_country_url = $(this).closest(".js-modal-shipping-country").find(".js-shipping-country-select option:selected").attr("data-country-url");
        location.href = selected_country_url; 

        $(this).text('Aplicando...').addClass("disabled");
    });

    
    $(".js-winnie-pooh-form").submit(function (e) {
        $(this).attr('action', '');
    });

    
    
    
    $('.js-password-view').click(function () {
        $(this).toggleClass('password-view');

        if($(this).hasClass('password-view')){
           $(this).parent().find(".js-password-input").attr('type', '');
           $(this).find(".js-eye-open, .js-eye-closed").toggle();
        } else {
           $(this).parent().find(".js-password-input").attr('type', 'password');
           $(this).find(".js-eye-open, .js-eye-closed").toggle();
        }
    });

    
    
    
    
    
    
});
            });
        </script>

        
        
        
        <script>
            LS.ready.then(function() {
                var trackingCode = $.parseHTML('', document, true);
                $('body').append(trackingCode);
            });
        </script>

    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","licenseKey":"266b2626e3","applicationID":"792012","transactionName":"MVcDbBAEWkFRVEBdCwgdIk0REVtfH1RBRxAJX05bDQtAU1NDa1ILFF8+TRAJGw==","queueTime":3,"applicationTime":774,"atts":"HRAUGlgeSR4SVhYOHxtP","errorBeacon":"bam-cell.nr-data.net","agent":""}</script>
    <script type="text/javascript" src="{{asset('js/formPublic.js')}}"></script>
</body>
</html>