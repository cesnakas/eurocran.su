var tns=function(){var t=window,hi=t.requestAnimationFrame||t.webkitRequestAnimationFrame||t.mozRequestAnimationFrame||t.msRequestAnimationFrame||function(t){return setTimeout(t,16)},e=window,mi=e.cancelAnimationFrame||e.mozCancelAnimationFrame||function(t){clearTimeout(t)};function pi(){for(var t,e,n,i=arguments[0]||{},a=1,r=arguments.length;a<r;a++)if(null!==(t=arguments[a]))for(e in t)i!==(n=t[e])&&void 0!==n&&(i[e]=n);return i}function yi(){var t=document,e=t.body;return e||((e=t.createElement("body")).fake=!0),e}var n=document.documentElement;function gi(t){var e="";return t.fake&&(e=n.style.overflow,t.style.background="",t.style.overflow=n.style.overflow="hidden",n.appendChild(t)),e}function xi(t,e){t.fake&&(t.remove(),n.style.overflow=e,n.offsetHeight)}function bi(t,e,n,i){"insertRule"in t?t.insertRule(e+"{"+n+"}",i):t.addRule(e,n,i)}function wi(t){return("insertRule"in t?t.cssRules:t.rules).length}function Ci(t,e){return Math.atan2(t,e)*(180/Math.PI)}function Ai(t,e){var n=!1,i=Math.abs(90-Math.abs(t));return 90-e<=i?n="horizontal":i<=e&&(n="vertical"),n}function Mi(t,e,n){for(var i=0,a=t.length;i<a;i++)e.call(n,t[i],i)}var i="classList"in document.createElement("_"),ki=i?function(t,e){return t.classList.contains(e)}:function(t,e){return 0<=t.className.indexOf(e)},Ei=i?function(t,e){ki(t,e)||t.classList.add(e)}:function(t,e){ki(t,e)||(t.className+=" "+e)},Ti=i?function(t,e){ki(t,e)&&t.classList.remove(e)}:function(t,e){ki(t,e)&&(t.className=t.className.replace(e,""))};function Ni(t,e){return t.hasAttribute(e)}function r(t){return void 0!==t.item}function Oi(t,e){if(t=r(t)||t instanceof Array?t:[t],"[object Object]"===Object.prototype.toString.call(e))for(var n=t.length;n--;)for(var i in e)t[n].setAttribute(i,e[i])}function Bi(t,e){t=r(t)||t instanceof Array?t:[t];for(var n=(e=e instanceof Array?e:[e]).length,i=t.length;i--;)for(var a=n;a--;)t[i].removeAttribute(e[a])}function Ii(t){t.style.cssText=""}function Li(t){Ni(t,"hidden")||Oi(t,{hidden:""})}function Si(t){Ni(t,"hidden")&&Bi(t,"hidden")}function Di(t){return 0<t.offsetWidth&&0<t.offsetHeight}function Ri(e){if("string"==typeof e){var n=[e],i=e.charAt(0).toUpperCase()+e.substr(1);["Webkit","Moz","ms","O"].forEach(function(t){"ms"===t&&"transform"!==e||n.push(t+i)}),e=n}for(var t=document.createElement("fakeelement"),a=(e.length,0);a<e.length;a++){var r=e[a];if(void 0!==t.style[r])return r}return!1}function Pi(t,e){var n=!1;return/^Webkit/.test(t)?n="webkit"+e+"End":/^O/.test(t)?n="o"+e+"End":t&&(n=e.toLowerCase()+"end"),n}var a=!1;try{var o=Object.defineProperty({},"passive",{get:function(){a=!0}});window.addEventListener("test",null,o)}catch(t){}var s=!!a&&{passive:!0};function Wi(t,e){for(var n in e){var i=("touchstart"===n||"touchmove"===n)&&s;t.addEventListener(n,e[n],i)}}function Hi(t,e){for(var n in e){var i=0<=["touchstart","touchmove"].indexOf(n)&&s;t.removeEventListener(n,e[n],i)}}function zi(){return{topics:{},on:function(t,e){this.topics[t]=this.topics[t]||[],this.topics[t].push(e)},off:function(t,e){if(this.topics[t])for(var n=0;n<this.topics[t].length;n++)if(this.topics[t][n]===e){this.topics[t].splice(n,1);break}},emit:function(t,e){this.topics[t]&&this.topics[t].forEach(function(t){t(e)})}}}Object.keys||(Object.keys=function(t){var e=[];for(var n in t)Object.prototype.hasOwnProperty.call(t,n)&&e.push(n);return e}),"remove"in Element.prototype||(Element.prototype.remove=function(){this.parentNode&&this.parentNode.removeChild(this)});var qi=function(f){f=pi({container:".slider",mode:"carousel",axis:"horizontal",items:1,gutter:0,edgePadding:0,fixedWidth:!1,autoWidth:!1,viewportMax:!1,slideBy:1,controls:!0,controlsText:["prev","next"],controlsContainer:!1,prevButton:!1,nextButton:!1,nav:!0,navContainer:!1,navAsThumbnails:!1,arrowKeys:!1,speed:300,autoplay:!1,autoplayTimeout:5e3,autoplayDirection:"forward",autoplayText:["start","stop"],autoplayHoverPause:!1,autoplayButton:!1,autoplayButtonOutput:!0,autoplayResetOnVisibility:!0,animateIn:"tns-fadeIn",animateOut:"tns-fadeOut",animateNormal:"tns-normal",animateDelay:!1,loop:!0,rewind:!1,autoHeight:!1,responsive:!1,lazyload:!1,touch:!0,mouseDrag:!1,swipeAngle:15,nested:!1,freezable:!0,onInit:!1,useLocalStorage:!0},f||{});var T=document,d=window,s=13,l=32,u=33,c=34,v=35,h=36,m=37,p=38,y=39,g=40,o={},x=f.useLocalStorage;if(x){var t=navigator.userAgent,e=new Date;try{(o=d.localStorage)?(o.setItem(e,e),x=o.getItem(e)==e,o.removeItem(e)):x=!1,x||(o={})}catch(t){x=!1}x&&(o.tnsApp&&o.tnsApp!==t&&["tC","tPL","tMQ","tTf","t3D","tTDu","tTDe","tADu","tADe","tTE","tAE"].forEach(function(t){o.removeItem(t)}),localStorage.tnsApp=t)}function n(t,e){return o[t]?(r=o[t],0<=["true","false"].indexOf(r)?JSON.parse(r):r):(n=o,i=t,a=e,x&&n.setItem(i,a),a);var n,i,a,r}for(var i,a,r,b,w,C,A,M=n("tC",function(){var t=document,e=yi(),n=gi(e),i=t.createElement("div"),a=!1;e.appendChild(i);try{for(var r,o="(10px * 10)",s=["calc"+o,"-moz-calc"+o,"-webkit-calc"+o],l=0;l<3;l++)if(r=s[l],i.style.width=r,100===i.offsetWidth){a=r.replace(o,"");break}}catch(t){}return e.fake?xi(e,n):i.remove(),a}()),k=n("tPL",function(){var t,e=document,n=yi(),i=gi(n),a=e.createElement("div"),r=e.createElement("div"),o="";a.className="tns-t-subp2",r.className="tns-t-ct";for(var s=0;s<70;s++)o+="<div></div>";return r.innerHTML=o,a.appendChild(r),n.appendChild(a),t=Math.abs(a.getBoundingClientRect().left-r.children[67].getBoundingClientRect().left)<2,n.fake?xi(n,i):a.remove(),t}()),N=n("tMQ",(a=document,r=yi(),b=gi(r),w=a.createElement("div"),C=a.createElement("style"),A="@media all and (min-width:1px){.tns-mq-test{position:absolute}}",C.type="text/css",w.className="tns-mq-test",r.appendChild(C),r.appendChild(w),C.styleSheet?C.styleSheet.cssText=A:C.appendChild(a.createTextNode(A)),i=window.getComputedStyle?window.getComputedStyle(w).position:w.currentStyle.position,r.fake?xi(r,b):w.remove(),"absolute"===i)),E=n("tTf",Ri("transform")),O=n("t3D",function(t){if(!t)return!1;if(!window.getComputedStyle)return!1;var e,n=document,i=yi(),a=gi(i),r=n.createElement("p"),o=9<t.length?"-"+t.slice(0,-9).toLowerCase()+"-":"";return o+="transform",i.insertBefore(r,null),r.style[t]="translate3d(1px,1px,1px)",e=window.getComputedStyle(r).getPropertyValue(o),i.fake?xi(i,a):r.remove(),void 0!==e&&0<e.length&&"none"!==e}(E)),B=n("tTDu",Ri("transitionDuration")),I=n("tTDe",Ri("transitionDelay")),L=n("tADu",Ri("animationDuration")),S=n("tADe",Ri("animationDelay")),D=n("tTE",Pi(B,"Transition")),R=n("tAE",Pi(L,"Animation")),P=d.console&&"function"==typeof d.console.warn,W=["container","controlsContainer","prevButton","nextButton","navContainer","autoplayButton"],H=W.length;H--;){var z=W[H];if("string"==typeof f[z]){var q=T.querySelector(f[z]);if(!q||!q.nodeName)return void(P&&console.warn("Can't find",f[z]));f[z]=q}}if(!(f.container.children.length<1)){if(f.responsive){var j={},F=f.responsive;for(var V in F){var Q=F[V];j[V]="number"==typeof Q?{items:Q}:Q}f.responsive=j,j=null,0 in f.responsive&&delete(f=pi(f,f.responsive[0])).responsive[0]}var X="carousel"===f.mode;if(!X){f.axis="horizontal",f.edgePadding=!1;var Y=f.animateIn,K=f.animateOut,U=f.animateDelay,G=f.animateNormal}var J,_="horizontal"===f.axis,Z=T.createElement("div"),$=T.createElement("div"),tt=f.container,et=tt.parentNode,nt=tt.children,it=nt.length,at=f.responsive,rt=!1,ot=0,st=ln();at&&(rt=Object.keys(at).map(function(t){return parseInt(t)}).sort(function(t,e){return t-e}),An());var lt,ut,ct,ft,dt,vt,ht,mt,pt=f.nested,yt=f.autoWidth,gt=fn("fixedWidth"),xt=fn("edgePadding"),bt=fn("gutter"),wt=un(),Ct=yt?null:Math.floor(fn("items")),At="page"===fn("slideBy")?Ct:fn("slideBy"),Mt=f.viewportMax||f.fixedWidthViewportWidth,kt=fn("arrowKeys"),Et=fn("speed"),Tt=f.rewind,Nt=!Tt&&f.loop,Ot=fn("autoHeight"),Bt=(mt=document.createElement("style"),ht&&mt.setAttribute("media",ht),document.querySelector("head").appendChild(mt),mt.sheet?mt.sheet:mt.styleSheet),It=f.lazyload,Lt=[],St=cn("edgePadding"),Dt=Nt?(dt=function(){{if(yt||gt&&!Mt)return it-1;var n=gt?"fixedWidth":"items",i=[];return(gt||f[n]<it)&&i.push(f[n]),rt&&rt.forEach(function(t){var e=at[t][n];e&&(gt||e<it)&&i.push(e)}),i.length||i.push(0),Math.ceil(gt?Mt/Math.min.apply(null,i):Math.max.apply(null,i))}}(),vt=X?Math.ceil((5*dt-it)/2):4*dt-it,vt=Math.max(dt,vt),St?vt+1:vt):0,Rt=X?it+2*Dt:it+Dt,Pt=!(!gt&&!yt||Nt),Wt=gt?jn():null,Ht=!X||!Nt,zt=_?"left":"top",qt="",jt="",Ft=fn("startIndex"),Vt=Ft?function(t){(t%=it)<0&&(t+=it);return t=Math.min(t,Rt-Ct)}(Ft):X?Dt:0,Qt=Vt,Xt=0,Yt=yt?null:on(),Kt=f.swipeAngle,Ut=!Kt||"?",Gt=!1,Jt=f.onInit,_t=new zi,Zt=tt.id,$t=" tns-slider tns-"+f.mode,te=tt.id||(ft=window.tnsId,window.tnsId=ft?ft+1:1,"tns"+window.tnsId),ee=fn("disable"),ne=f.freezable,ie=yt?null:Cn(),ae={click:Jn,keydown:function(t){switch((t=ai(t)).keyCode){case m:case p:case u:ke.disabled||Jn(t,-1);break;case y:case g:case c:Ee.disabled||Jn(t,1);break;case h:Gn("first",t);break;case v:Gn("last",t)}}},re={click:function(t){Gt&&Un();var e=(t=ai(t)).target||t.srcElement;for(;e!==Oe&&!Ni(e,"data-nav");)e=e.parentNode;Ni(e,"data-nav")&&Gn(Le=[].indexOf.call(Te,e),t)},keydown:function(t){var e=T.activeElement;if(!Ni(e,"data-nav"))return;var n=(t=ai(t)).keyCode,i=[].indexOf.call(Te,e),a=Be.length,r=Be.indexOf(i);f.navContainer&&(a=it,r=i);function o(t){return f.navContainer?t:Be[t]}switch(n){case m:case u:0<r&&ii(Te[o(r-1)]);break;case p:case h:0<r&&ii(Te[o(0)]);break;case y:case c:r<a-1&&ii(Te[o(r+1)]);break;case g:case v:r<a-1&&ii(Te[o(a-1)]);break;case s:case l:Gn(Le=i,t)}}},oe={mouseover:function(){We&&(Zn(),He=!0)},mouseout:function(){He&&(_n(),He=!1)}},se={visibilitychange:function(){T.hidden?We&&(Zn(),qe=!0):qe&&(_n(),qe=!1)}},le={keydown:function(t){switch((t=ai(t)).keyCode){case m:Jn(t,-1);break;case y:Jn(t,1)}}},ue={touchstart:li,touchmove:ui,touchend:ci,touchcancel:ci},ce={mousedown:li,mousemove:ui,mouseup:ci,mouseleave:ci},fe=cn("controls"),de=cn("nav"),ve=!!yt||f.navAsThumbnails,he=cn("autoplay"),me=cn("touch"),pe=cn("mouseDrag"),ye="tns-slide-active",ge="tns-complete",xe={load:Tn,error:Tn};if(fe)var be,we,Ce=fn("controls"),Ae=fn("controlsText"),Me=f.controlsContainer,ke=f.prevButton,Ee=f.nextButton;if(de)var Te,Ne=fn("nav"),Oe=f.navContainer,Be=[],Ie=Be,Le=-1,Se=sn(),De=Se,Re="tns-nav-active";if(he)var Pe,We,He,ze,qe,je=fn("autoplay"),Fe=fn("autoplayTimeout"),Ve="forward"===f.autoplayDirection?1:-1,Qe=fn("autoplayText"),Xe=fn("autoplayHoverPause"),Ye=f.autoplayButton,Ke=fn("autoplayResetOnVisibility"),Ue=["<span class='tns-visually-hidden'>"," animation</span>"];if(me||pe)var Ge,Je={},_e={},Ze=!1,$e=0,tn=_?function(t,e){return t.x-e.x}:function(t,e){return t.y-e.y};if(me)var en=fn("touch");if(pe)var nn=fn("mouseDrag");ie&&(Ce=Ne=en=nn=kt=je=Xe=Ke=!1),E&&(zt=E,qt="translate",O?(qt+=_?"3d(":"3d(0px, ",jt=_?", 0px, 0px)":", 0px)"):(qt+=_?"X(":"Y(",jt=")")),function(){cn("gutter");Z.className="tns-outer",$.className="tns-inner",$.id=te+"-iw",Ot&&($.className+=" tns-ah");""===tt.id&&(tt.id=te);$t+=k||yt?" tns-subpixel":" tns-no-subpixel",$t+=M?" tns-calc":" tns-no-calc",X&&($t+=" tns-"+f.axis);if(tt.className+=$t,X){var t=T.createElement("div");t.className="tns-ovh",Z.appendChild(t),t.appendChild($)}else Z.appendChild($);if(et.insertBefore(Z,tt),$.appendChild(tt),X&&D){var e={};e[D]=Un,Wi(tt,e)}for(var n=0;n<it;n++){var i=nt[n];i.id||(i.id=te+"-item"+n),Ei(i,"tns-item"),!X&&G&&Ei(i,G),Oi(i,{"aria-hidden":"true",tabindex:"-1"})}if(Dt){for(var a=T.createDocumentFragment(),r=T.createDocumentFragment(),o=Dt;o--;){var s=o%it,l=nt[s].cloneNode(!0);if(Bi(l,"id"),r.insertBefore(l,r.firstChild),X){var u=nt[it-1-s].cloneNode(!0);Bi(u,"id"),a.appendChild(u)}}tt.insertBefore(a,tt.firstChild),tt.appendChild(r),nt=tt.children}if(cn("autoHeight")||!X||yt||!_){var c=tt.querySelectorAll("img");Mi(c,function(t){var e=t.src;e.indexOf("data:image")<0?(Wi(t,xe),t.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",t.src=e):Ei(t,ge)}),hi(function(){Bn(function(t){for(var e=[],n=0,i=t.length;n<i;n++)e.push(t[n]);return e}(c),function(){ct=!0,ee||(_&&!yt||(Dn(),En(),yt&&(Ct=fn("items"),Wt=jn(),ie=Cn(),Yt=on(),ie&&(Ce=Ne=en=nn=kt=je=Xe=Ke=!1),xn()),_||fi()),X&&Vn())})})}X&&_&&!yt&&Vn();(function(){for(var t=Vt,e=Vt+Math.min(it,Ct);t<e;t++){var n=nt[t];Oi(n,{"aria-hidden":"false"}),Bi(n,["tabindex"]),Ei(n,ye),X||(n.style.left=100*(t-Vt)/Ct+"%",Ei(n,Y),Ti(n,G))}if(X&&_&&(k||yt?(bi(Bt,"#"+te+" > .tns-item","font-size:"+d.getComputedStyle(nt[0]).fontSize+";",wi(Bt)),bi(Bt,"#"+te,"font-size:0;",wi(Bt))):Mi(nt,function(t,e){var n;t.style.marginLeft=(n=e,M?M+"("+100*n+"% / "+Rt+")":100*n/Rt+"%")})),N){var i=dn(f.edgePadding,f.gutter,f.fixedWidth,f.speed);bi(Bt,"#"+te+"-iw",i,wi(Bt)),X&&(i=_&&!yt?"width:"+vn(f.fixedWidth,f.gutter,f.items)+";":"",B&&(i+=yn(Et)),bi(Bt,"#"+te,i,wi(Bt))),i=_&&!yt?hn(f.fixedWidth,f.gutter,f.items):"",f.gutter&&(i+=mn(f.gutter)),X||(B&&(i+=yn(Et)),L&&(i+=gn(Et))),i&&bi(Bt,"#"+te+" > .tns-item",i,wi(Bt))}else{$.style.cssText=dn(xt,bt,gt),X&&_&&!yt&&(tt.style.width=vn(gt,bt,Ct));var i=_&&!yt?hn(gt,bt,Ct):"";bt&&(i+=mn(bt)),i&&bi(Bt,"#"+te+" > .tns-item",i,wi(Bt))}at&&N&&rt.forEach(function(t){var e=at[t],n="",i="",a="",r="",o=yt?null:fn("items",t),s=fn("fixedWidth",t),l=fn("speed",t),u=fn("edgePadding",t),c=fn("gutter",t);("edgePadding"in e||"gutter"in e)&&(i="#"+te+"-iw{"+dn(u,c,s,l)+"}"),X&&_&&!yt&&("fixedWidth"in e||"items"in e||gt&&"gutter"in e)&&(a="width:"+vn(s,c,o)+";"),B&&"speed"in e&&(a+=yn(l)),a&&(a="#"+te+"{"+a+"}"),("fixedWidth"in e||gt&&"gutter"in e||!X&&"items"in e)&&(r+=hn(s,c,o)),"gutter"in e&&(r+=mn(c)),!X&&"speed"in e&&(B&&(r+=yn(l)),L&&(r+=gn(l))),r&&(r="#"+te+" > .tns-item{"+r+"}"),(n=i+a+r)&&Bt.insertRule("@media (min-width: "+t/16+"em) {"+n+"}",Bt.cssRules.length)})})(),yt||xn()}();var an=Nt?X?function(){var t=Xt,e=Yt;t+=At,e-=At,xt?(t+=1,e-=1):gt&&wt%(gt+bt)&&(e-=1),Dt&&(e<Vt?Vt-=it:Vt<t&&(Vt+=it))}:function(){if(Yt<Vt)for(;Xt+it<=Vt;)Vt-=it;else if(Vt<Xt)for(;Vt<=Yt-it;)Vt+=it}:function(){Vt=Math.max(Xt,Math.min(Yt,Vt))},rn=X?function(){var e,n,i,a,t,r,o,s,l,u,c;B||!Et?(Qn(),Et&&Di(tt)||Un()):(e=tt,n=zt,i=qt,a=jt,t=Fn(),r=Et,o=Un,s=Math.min(r,10),l=0<=t.indexOf("%")?"%":"px",t=t.replace(l,""),u=Number(e.style[n].replace(i,"").replace(a,"").replace(l,"")),c=(t-u)/r*s,setTimeout(function t(){r-=s,u+=c,e.style[n]=i+u+l+a,0<r?setTimeout(t,s):o()},s)),_||fi()}:function(){Lt=[];var t={};t[D]=t[R]=Un,Hi(nt[Qt],t),Wi(nt[Vt],t),Xn(Qt,Y,K,!0),Xn(Vt,G,Y),D&&R&&Et&&Di(tt)||Un()};return{getInfo:vi,events:_t,goTo:Gn,play:function(){je&&!We&&(ti(),ze=!1)},pause:function(){We&&(ei(),ze=!0)},isOn:J,updateSliderHeight:Sn,rebuild:function(){return qi(f)},destroy:function(){if(Hi(d,{resize:bn}),Hi(T,le),Bt.disabled=!0,Nt)for(var t=Dt;t--;)X&&nt[0].remove(),nt[nt.length-1].remove();var e=["tns-item",ye];X||(e=e.concat("tns-normal",Y));for(var n=it;n--;){var i=nt[n];0<=i.id.indexOf(te+"-item")&&(i.id=""),e.forEach(function(t){Ti(i,t)})}if(Bi(nt,["style","aria-hidden","tabindex"]),nt=te=it=Rt=Dt=null,Ce&&(Hi(Me,ae),f.controlsContainer&&(Bi(Me,["aria-label","tabindex"]),Bi(Me.children,["aria-controls","aria-disabled","tabindex"])),Me=ke=Ee=null),Ne&&(Hi(Oe,re),f.navContainer&&(Bi(Oe,["aria-label"]),Bi(Te,["aria-selected","aria-controls","tabindex"])),Oe=Te=null),je&&(clearInterval(Pe),Ye&&Hi(Ye,{click:ni}),Hi(tt,oe),Hi(tt,se),f.autoplayButton&&Bi(Ye,["data-action"])),tt.id=Zt||"",tt.className=tt.className.replace($t,""),Ii(tt),X&&D){var a={};a[D]=Un,Hi(tt,a)}Hi(tt,ue),Hi(tt,ce),et.insertBefore(tt,Z),Z.remove(),Z=$=tt=Vt=Qt=Ct=At=Se=De=fe=Be=Ie=this.getInfo=this.events=this.goTo=this.play=this.pause=this.destroy=null,this.isOn=J=!1}}}function on(){if(gt||yt){if(gt)return Math.floor(-Wt/(gt+bt))+1;for(var t=Rt-1,e=t;lt[t]>-Wt;)e=--t;return e}return Nt||X?Math.max(0,Rt-Math.ceil(fn("items"))):Rt-1}function sn(t){for(null==t&&(t=Vt),X&&(t-=Dt);t<0;)t+=it;return Math.floor(t%it)}function ln(){return d.innerWidth||T.documentElement.clientWidth||T.body.clientWidth}function un(){var t=function t(e){return e.clientWidth||t(e.parentNode)}(et);return xt?t-(2*xt-bt):t}function cn(e){return!!f[e]||(rt&&rt.forEach(function(t){if(at[t][e])return!0}),!1)}function fn(e,n){n=n||st;var i,t={slideBy:"page",edgePadding:!1};return!X&&e in t?i=t[e]:"items"===e&&gt?i=Math.floor(n/(gt+bt)):"autoHeight"===e&&"outer"===pt?i=!0:(i=f[e],rt&&rt.forEach(function(t){t<=n&&e in at[t]&&(i=at[t][e])})),"slideBy"===e&&"page"===i&&(i=fn("items")),X||"slideBy"!==e&&"items"!==e||(i=Math.floor(i)),i}function dn(t,e,n,i){var a="";if(t){var r=t;e&&(r-=e),a=_?"margin: 0 "+r+"px 0 "+t+"px;":"margin: "+t+"px 0 "+r+"px 0;"}else if(e&&!n){var o="-"+e+"px";a="margin: 0 "+(_?o+" 0 0":"0 "+o+" 0")+";"}return B&&i&&(a+=yn(i)),a}function vn(t,e,n){return t?(t+e)*Rt+"px":M?M+"("+100*Rt+"% / "+n+")":100*Rt/n+"%"}function hn(t,e,n){var i;if(t)i=t+e+"px";else{X||(n=Math.floor(n));var a=X?Rt:n;i=M?M+"(100% / "+a+")":100/a+"%"}return i="width:"+i,"inner"!==pt?i+";":i+" !important;"}function mn(t){var e="";!1!==t&&(e=(_?"padding-":"margin-")+(_?"right":"bottom")+": "+t+"px;");return e}function pn(t,e){var n=t.substring(0,t.length-e).toLowerCase();return n&&(n="-"+n+"-"),n}function yn(t){return pn(B,18)+"transition-duration:"+t/1e3+"s;"}function gn(t){return pn(L,17)+"animation-duration:"+t/1e3+"s;"}function xn(){if(he){var t=je?"stop":"start";Ye?Oi(Ye,{"data-action":t}):f.autoplayButtonOutput&&(Z.insertAdjacentHTML("afterbegin",'<button data-action="'+t+'" type="button">'+Ue[0]+t+Ue[1]+Qe[0]+"</button>"),Ye=Z.querySelector("[data-action]")),Ye&&Wi(Ye,{click:ni}),je?(ti(),Xe&&Wi(tt,oe),Ke&&Wi(tt,se)):Ye&&Li(Ye)}if(de){var e=X?Dt:0;if(Oe){Oi(Oe,{"aria-label":"Carousel Pagination"}),Te=Oe.children;for(var n=0;n<it;n++){var i=Te[n];i&&Oi(i,{"data-nav":n,tabindex:"-1","aria-selected":"false","aria-controls":nt[e+n].id})}}else{var a="",r=ve?"":"hidden";for(n=0;n<it;n++)a+='<button data-nav="'+n+'" tabindex="-1" aria-selected="false" aria-controls="'+nt[e+n].id+'" '+r+' type="button"></button>';a='<div class="tns-nav" aria-label="Carousel Pagination">'+a+"</div>",Z.insertAdjacentHTML("afterbegin",a),Oe=Z.querySelector(".tns-nav"),Te=Oe.children}if(di(),B){var o=B.substring(0,B.length-18).toLowerCase(),s="transition: all "+Et/1e3+"s";o&&(s="-"+o+"-"+s),bi(Bt,"[aria-controls^="+te+"-item]",s,wi(Bt))}Oi(Te[Se],{tabindex:"0","aria-selected":"true"}),Ei(Te[Se],Re),Wi(Oe,re),Ne||Li(Oe)}fe&&(Me||ke&&Ee?(Me&&(ke=Me.children[0],Ee=Me.children[1],Oi(Me,{"aria-label":"Carousel Navigation",tabindex:"0"}),Oi(Me.children,{"aria-controls":te,tabindex:"-1"})),Oi(ke,{"data-controls":"prev"}),Oi(Ee,{"data-controls":"next"})):(Z.insertAdjacentHTML("afterbegin",'<div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button data-controls="prev" tabindex="-1" aria-controls="'+te+'" type="button">'+Ae[0]+'</button><button data-controls="next" tabindex="-1" aria-controls="'+te+'" type="button">'+Ae[1]+"</button></div>"),Me=Z.querySelector(".tns-controls"),ke=Me.children[0],Ee=Me.children[1]),be=Pn(ke),we=Pn(Ee),zn(),Me?Wi(Me,ae):(Wi(ke,ae),Wi(Ee,ae)),Ce||Li(Me)),en&&Wi(tt,ue),nn&&Wi(tt,ce),kt&&Wi(T,le),"inner"===pt?_t.on("outerResized",function(){wn(),_t.emit("innerLoaded",vi())}):Wi(d,{resize:bn}),"outer"===pt?_t.on("innerLoaded",On):!Ot&&X||ee||On(),yt||En(),Mn(),_t.on("indexChanged",In),"function"==typeof Jt&&Jt(vi()),"inner"===pt&&_t.emit("innerLoaded",vi()),ee&&kn(!0),J=!0}function bn(t){hi(function(){wn(ai(t))})}function wn(t){if(J){st=ln(),"outer"===pt&&_t.emit("outerResized",vi(t));var e,n,i=ot,a=xt,r=bt,o=Vt,s=Ct,l=ie,u=!1;if(xt=fn("edgePadding"),bt=fn("gutter"),wt=un(),rt&&An(),i!==ot&&_t.emit("newBreakpointStart",vi(t)),_&&!yt||ee||(Dn(),_||(fi(),u=!0)),(gt||yt)&&(Wt=jn(),Yt=on()),i!==ot||gt||yt){var c=kt,f=Ot,d=gt,v=ee;if(Ct=fn("items"),At=fn("slideBy"),ee=fn("disable"),Pt&&(u=!0),ie=Cn(),Ct!==s&&(gt||yt||(Yt=on()),an()),ee!==v&&kn(ee),ie!==l&&(ie?Qn(Fn(X?Dt:0)):u=!0,Mn()),i!==ot&&(Et=fn("speed"),gt=fn("fixedWidth"),ee||gt===d||(u=!0),(Ot=fn("autoHeight"))!==f&&(Ot||($.style.height=""))),(kt=!ie&&fn("arrowKeys"))!==c&&(kt?Wi(T,le):Hi(T,le)),fe){var h=Ce,m=Ae;Ce=!ie&&fn("controls"),Ae=fn("controlsText"),Ce!==h&&(Ce?Si(Me):Li(Me)),Ae!==m&&(ke.innerHTML=Ae[0],Ee.innerHTML=Ae[1])}if(de){var p=Ne;(Ne=!ie&&fn("nav"))!==p&&(Ne?(Si(Oe),di()):Li(Oe))}if(me){var y=en;(en=!ie&&fn("touch"))!==y&&X&&(en?Wi(tt,ue):Hi(tt,ue))}if(pe){var g=nn;(nn=!ie&&fn("mouseDrag"))!==g&&X&&(nn?Wi(tt,ce):Hi(tt,ce))}if(he){var x=je,b=Xe,w=Ke,C=Qe;if(ie?je=Xe=Ke=!1:(je=fn("autoplay"))?(Xe=fn("autoplayHoverPause"),Ke=fn("autoplayResetOnVisibility")):Xe=Ke=!1,Qe=fn("autoplayText"),Fe=fn("autoplayTimeout"),je!==x&&(je?(Ye&&Si(Ye),We||ze||ti()):(Ye&&Li(Ye),We&&ei())),Xe!==b&&(Xe?Wi(tt,oe):Hi(tt,oe)),Ke!==w&&(Ke?Wi(T,se):Hi(T,se)),Ye&&Qe!==C){var A=je?1:0,M=Ye.innerHTML,k=M.length-C[A].length;M.substring(k)===C[A]&&(Ye.innerHTML=M.substring(0,k)+Qe[A])}}if(!N){if(ie||xt===a&&bt===r||($.style.cssText=dn(xt,bt,gt)),_&&!gt){X&&(tt.style.width=vn(!1,null,Ct));var E=hn(gt,bt,Ct)+mn(bt);n=wi(e=Bt)-1,"deleteRule"in e?e.deleteRule(n):e.removeRule(n),bi(Bt,"#"+te+" > .tns-item",E,wi(Bt))}gt||(u=!0)}Vt!==o&&(_t.emit("indexChanged",vi()),u=!0),(Ct!==s||yt)&&(In(),function(){if(!X){for(var t=Vt+Math.min(it,Ct),e=Rt;e--;){var n=nt[e];Vt<=e&&e<t?(Ei(n,"tns-moving"),n.style.left=100*(e-Vt)/Ct+"%",Ei(n,Y),Ti(n,G)):n.style.left&&(n.style.left="",Ei(n,G),Ti(n,Y)),Ti(n,K)}setTimeout(function(){Mi(nt,function(t){Ti(t,"tns-moving")})},300)}}(),navigator.msMaxTouchPoints&&setSnapInterval())}u&&(Vn(),Qt=Vt),!Ot&&X||ee||On(),i!==ot&&_t.emit("newBreakpointEnd",vi(t))}}function Cn(){return!!ee||!!ne&&(gt||yt?Nt?(gt?(gt+bt)*it:lt[it])-bt<=wt:!Wt:it<=Ct)}function An(){ot=0,rt.forEach(function(t,e){t<=st&&(ot=e+1)})}function Mn(){var t="tns-transparent";if(ie){if(!ut){if(xt&&($.style.margin="0px"),Dt)for(var e=Dt;e--;)X&&Ei(nt[e],t),Ei(nt[Rt-e-1],t);ut=!0}}else if(ut){if(xt&&N&&($.style.margin=""),Dt)for(e=Dt;e--;)X&&Ti(nt[e],t),Ti(nt[Rt-e-1],t);ut=!1}}function kn(t){var e=nt.length;if(t){if(Bt.disabled=!0,tt.className=tt.className.replace($t.substring(1),""),Ii(tt),Nt)for(var n=Dt;n--;)X&&Li(nt[n]),Li(nt[e-n-1]);if(_&&X||Ii($),!X)for(var i=Vt,a=Vt+it;i<a;i++){Ii(r=nt[i]),Ti(r,Y),Ti(r,G)}}else{if(Bt.disabled=!1,tt.className+=$t,_&&!yt||(Dn(),yt&&(Wt=jn(),Yt=on())),Vn(),Nt)for(n=Dt;n--;)X&&Si(nt[n]),Si(nt[e-n-1]);if(!X)for(i=Vt,a=Vt+it;i<a;i++){var r=nt[i],o=i<Vt+Ct?Y:G;r.style.left=100*(i-Vt)/Ct+"%",Ei(r,o)}}}function En(){if(It&&!ee){var t=Vt;if(yt)for(var e=Vt+1,n=e,i=lt[Vt]+wt+xt-bt;lt[e]<i;)n=++e;else n=Vt+Ct;for(xt&&(t-=1,yt||(n+=1)),t=Math.floor(Math.max(t,0)),n=Math.ceil(Math.min(n,Rt));t<n;t++)Mi(nt[t].querySelectorAll(".tns-lazy-img"),function(t){var e,n={};n[D]=function(t){t.stopPropagation()},Wi(t,n),ki(t,"loaded")||(t.src=(e="data-src",t.getAttribute(e)),Ei(t,"loaded"))})}}function Tn(t){var e=ri(t);Ei(e,ge),Hi(e,xe)}function Nn(t,e){for(var n=[],i=t,a=Math.min(t+e,Rt);i<a;i++)Mi(nt[i].querySelectorAll("img"),function(t){n.push(t)});return n}function On(){var t=Ot?Nn(Vt,Ct):Nn(Dt,it);hi(function(){Bn(t,Sn)})}function Bn(n,t){return ct?t():(n.forEach(function(t,e){ki(t,ge)&&n.splice(e,1)}),n.length?void hi(function(){Bn(n,t)}):t())}function In(){En(),function(){for(var t=Vt+Math.min(it,Ct),e=Rt;e--;){var n=nt[e];Vt<=e&&e<t?Ni(n,"tabindex")&&(Oi(n,{"aria-hidden":"false"}),Bi(n,["tabindex"]),Ei(n,ye)):(Ni(n,"tabindex")||Oi(n,{"aria-hidden":"true",tabindex:"-1"}),ki(n,ye)&&Ti(n,ye))}}(),zn(),di(),function(){if(Ne&&(Se=-1!==Le?Le:sn(),Le=-1,Se!==De)){var t=Te[De],e=Te[Se];Oi(t,{tabindex:"-1","aria-selected":"false"}),Oi(e,{tabindex:"0","aria-selected":"true"}),Ti(t,Re),Ei(e,Re),De=Se}}()}function Ln(t,e){for(var n=[],i=t,a=Math.min(t+e,Rt);i<a;i++)n.push(nt[i].offsetHeight);return Math.max.apply(null,n)}function Sn(){var t=Ot?Ln(Vt,Ct):Ln(Dt,it);$.style.height!==t&&($.style.height=t+"px")}function Dn(){lt=[0];for(var t,e=_?"left":"top",n=nt[0].getBoundingClientRect()[e],i=1;i<Rt;i++)t=nt[i].getBoundingClientRect()[e],lt.push(t-n)}function Rn(t){return t.nodeName.toLowerCase()}function Pn(t){return"button"===Rn(t)}function Wn(t){return"true"===t.getAttribute("aria-disabled")}function Hn(t,e,n){t?e.disabled=n:e.setAttribute("aria-disabled",n.toString())}function zn(){if(Ce&&!Tt&&!Nt){var t=be?ke.disabled:Wn(ke),e=we?Ee.disabled:Wn(Ee),n=Vt===Xt,i=!Tt&&Vt===Yt;n&&!t&&Hn(be,ke,!0),!n&&t&&Hn(be,ke,!1),i&&!e&&Hn(we,Ee,!0),!i&&e&&Hn(we,Ee,!1)}}function qn(t,e){B&&(t.style[B]=e)}function jn(){var t=-((gt?(gt+bt)*Rt-bt:lt[Rt-1]+nt[Rt-1].getBoundingClientRect().width-bt)-wt);return 0<t&&(t=0),t}function Fn(t){var e;(null==t&&(t=Vt),_&&!yt)?e=gt?-(gt+bt)*t:100*-t/(E?Rt:Ct):e=-lt[t];return Pt&&(e=Math.max(e,Wt)),e+=!_||yt||gt?"px":"%"}function Vn(t){qn(tt,"0s"),Qn(t),setTimeout(function(){qn(tt,"")},10)}function Qn(t){null==t&&(t=Fn()),tt.style[zt]=qt+t+jt}function Xn(t,e,n,i){var a=t+Ct;Nt||(a=Math.min(a,Rt));for(var r=t;r<a;r++){var o=nt[r];i||(o.style.left=100*(r-Vt)/Ct+"%"),U&&I&&(o.style[I]=o.style[S]=U*(r-t)/1e3+"s"),Ti(o,e),Ei(o,n),i&&Lt.push(o)}}function Yn(t,e){Ht&&an(),(Vt!==Qt||e)&&(_t.emit("indexChanged",vi()),_t.emit("transitionStart",vi()),We&&t&&0<=["click","keydown"].indexOf(t.type)&&ei(),Gt=!0,rn())}function Kn(t){return t.toLowerCase().replace(/-/g,"")}function Un(t){if(X||Gt){if(_t.emit("transitionEnd",vi(t)),!X&&0<Lt.length)for(var e=0;e<Lt.length;e++){var n=Lt[e];n.style.left="",S&&I&&(n.style[S]="",n.style[I]=""),Ti(n,K),Ei(n,G)}if(!t||!X&&t.target.parentNode===tt||t.target===tt&&Kn(t.propertyName)===Kn(zt)){if(!Ht){var i=Vt;an(),Vt!==i&&(_t.emit("indexChanged",vi()),Vn())}Ot&&On(),"inner"===pt&&_t.emit("innerLoaded",vi()),Gt=!1,Qt=Vt}}}function Gn(t,e){if(!ie)if("prev"===t)Jn(e,-1);else if("next"===t)Jn(e,1);else{Gt&&Un();var n=sn(),i=0;if("first"===t?i=-n:"last"===t?i=X?it-Ct-n:it-1-n:("number"!=typeof t&&(t=parseInt(t)),isNaN(t)||(e||(t=Math.max(1,Math.min(it,t)),t-=1),i=t-n)),!X&&i&&Math.abs(i)<Ct){var a=0<i?1:-1;i+=Xt<=Vt+i-it?it*a:2*it*a*-1}Vt+=i,X&&Nt&&(Vt<Xt&&(Vt+=it),Yt<Vt&&(Vt-=it)),sn(Vt)!==sn(Qt)&&Yn(e)}}function Jn(t,e){var n;if(Gt&&Un(),!e){for(var i=(t=ai(t)).target||t.srcElement;i!==Me&&[ke,Ee].indexOf(i)<0;)i=i.parentNode;var a=[ke,Ee].indexOf(i);0<=a&&(n=!0,e=0===a?-1:1)}if(Tt){if(Vt===Xt&&-1===e)return void Gn("last",t);if(Vt===Yt&&1===e)return void Gn("first",t)}e&&(Vt+=At*e,yt&&(Vt=Math.floor(Vt)),Yn(n||t&&"keydown"===t.type?t:null))}function _n(){Pe=setInterval(function(){Jn(null,Ve)},Fe),We=!0}function Zn(){clearInterval(Pe),We=!1}function $n(t,e){Oi(Ye,{"data-action":t}),Ye.innerHTML=Ue[0]+t+Ue[1]+e}function ti(){_n(),Ye&&$n("stop",Qe[1])}function ei(){Zn(),Ye&&$n("start",Qe[0])}function ni(){We?(ei(),ze=!0):(ti(),ze=!1)}function ii(t){t.focus()}function ai(t){return oi(t=t||d.event)?t.changedTouches[0]:t}function ri(t){return t.target||d.event.srcElement}function oi(t){return 0<=t.type.indexOf("touch")}function si(t){t.preventDefault?t.preventDefault():t.returnValue=!1}function li(t){Gt&&Un(),Ze=!0,X&&(mi($e),$e=0);var e=ai(t);_t.emit(oi(t)?"touchStart":"dragStart",vi(t)),!oi(t)&&0<=["img","a"].indexOf(Rn(ri(t)))&&si(t),_e.x=Je.x=parseInt(e.clientX),_e.y=Je.y=parseInt(e.clientY),X&&(Ge=parseFloat(tt.style[zt].replace(qt,"").replace(jt,"")),qn(tt,"0s"))}function ui(t){if(Ze){var e=ai(t);_e.x=parseInt(e.clientX),_e.y=parseInt(e.clientY),X&&!$e&&($e=hi(function(){!function t(e){if(!Ut)return void(Ze=!1);mi($e);Ze&&($e=hi(function(){t(e)}));"?"===Ut&&_e.x!==Je.x&&_e.y!==Je.y&&(Ut=Ai(Ci(_e.y-Je.y,_e.x-Je.x),Kt)===f.axis);if(Ut){try{e.type&&_t.emit(oi(e)?"touchMove":"dragMove",vi(e))}catch(t){}var n=Ge,i=tn(_e,Je);if(!_||gt||yt)n+=i,n+="px";else{var a=E?i*Ct*100/(wt*Rt):100*i/wt;n+=a,n+="%"}tt.style[zt]=qt+n+jt}}(t)}))}}function ci(i){if(Kt&&(Ut="?"),Ze){X&&(mi($e),qn(tt,"")),Ze=!1;var t=ai(i);_e.x=parseInt(t.clientX),_e.y=parseInt(t.clientY);var a=tn(_e,Je);if(5<=Math.abs(a)){if(!oi(i)){var n=ri(i);Wi(n,{click:function t(e){si(e),Hi(n,{click:t})}})}X?$e=hi(function(){if(_&&!yt){var t=-a*Ct/wt;t=0<a?Math.floor(t):Math.ceil(t),Vt+=t}else{var e=-(Ge+a);if(e<=0)Vt=Xt;else if(e>=lt[lt.length-1])Vt=Yt;else for(var n=0;n<Rt&&e>=lt[n];)e>lt[Vt=n]&&a<0&&(Vt+=1),n++}Yn(i,a),_t.emit(oi(i)?"touchEnd":"dragEnd",vi(i))}):("?"===Ut&&_e.x!==Je.x&&_e.y!==Je.y&&(Ut=Ai(Ci(_e.y-Je.y,_e.x-Je.x),Kt)===f.axis),Ut&&Jn(i,0<a?-1:1))}}}function fi(){$.style.height=lt[Vt+Ct]-lt[Vt]+"px"}function di(){Ne&&!ve&&(!function(){Be=[];for(var t=sn()%Ct;t<it;)X&&!Nt&&it<t+Ct&&(t=it-Ct),Be.push(t),t+=Ct;(Nt&&Be.length*Ct<it||!Nt&&0<Be[0])&&Be.unshift(0)}(),Be!==Ie&&(Mi(Te,function(t,e){Be.indexOf(e)<0?Li(t):Si(t)}),Ie=Be))}function vi(t){return{container:tt,slideItems:nt,navContainer:Oe,navItems:Te,controlsContainer:Me,hasControls:fe,prevButton:ke,nextButton:Ee,items:Ct,slideBy:At,cloneCount:Dt,slideCount:it,slideCountNew:Rt,index:Vt,indexCached:Qt,navCurrentIndex:Se,navCurrentIndexCached:De,visibleNavIndexes:Be,visibleNavIndexesCached:Ie,sheet:Bt,event:t||{}}}P&&console.warn("No slides found in",f.container)};return qi}();
//# sourceMappingURL=../sourcemaps/tiny-slider.js.map
