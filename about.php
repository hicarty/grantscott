<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"e460366a38","applicationID":"5866837","transactionName":"ewsMFxQJXg1TQR0XXEwBEUwRA1A+RlJVAUYXBw0NEgNcFWlHSxRQZxAHGxI=","queueTime":0,"applicationTime":90,"agent":""}</script>
<script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1123.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>

  <title>About</title>
  <meta property="og:title" content="About" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.grantscott.com/about" />


<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://www.grantscott.com/about",
  "logo": ""
}
</script>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
  <meta name="google-site-verification" content="" />

  <!--[if lt IE 9]>
   <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/4.0.3/es5-shim.min.js"></script>
  <![endif]-->
  <script type="text/javascript">
    var livePage = true;
  </script>
   <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic:latin|Gentium+Book+Basic:400,400italic,700,700italic:latin|Lato:400,700,400italic,700italic:latin|Merriweather:300italic,300,700,700italic:latin|Old+Standard+TT:400,400italic,700:latin|Open+Sans:300italic,600italic,300,600:latin|PT+Serif:400,700,400italic,700italic:latin|Roboto:700italic,300,700,300italic:latin|Source+Sans+Pro:400,700,400italic,700italic:latin|Vollkorn:400italic,700italic,400,700:latin">
        <link rel="stylesheet" media="screen" href="/assets/sites/site-classic-public-5d220c6db980c510ba5eabb28f444e2dd04e9c03eaa9fe5e6bff53df8d2bbae0.css" />

  <style>
    body{
  background-color: #FFFFFF;
  background-image: none;
  background-repeat: repeat;
  background-position: 0% 0%;
  background-size: auto;
  background-attachment: scroll;
}
#vb_page, #vb_page a{
  color: #555555;
}
#vb_page #vb_title h1{
  color: #555555;
}
#vb_page #vb_menu a{
  color: #111111;
}
#vb_page #vb_menu li a.active{
  color: #707070;
}
#vb_page{
  font-family: Arial;
  margin-top: 50px;
}
#vb_title{
  font-family: Arial;
}
#vb_menu{
  font-family: Arial;
}

  </style>
  

</head>
<body id="body" class="page-body">
 
  <div id="vb_page" class="/*background_cover:*/ background_cover_no /*background_position:*/ background_position_center /*font_size:*/ font_size_1 /*left_margin:*/ left_margin_no /*logo_retina:*/ logo_retina_yes /*logo_visibility:*/ logo_visibility_yes /*menu_font_size:*/ menu_font_size_2 /*menu_position:*/ menu_position_top /*page_align:*/ page_align_center /*page_fixed_header:*/ page_fixed_header_no /*page_full_width:*/ page_full_width_yes /*page_scaling:*/ page_scaling_no /*page_scaling_top:*/ page_scaling_top_yes /*text_full_width:*/ text_full_width_no /*theme:*/ theme_white /*thumbnails_hide_name:*/ thumbnails_hide_name_no /*thumbnails_size:*/ thumbnails_size_small /*title_font_size:*/ title_font_size_1 /*title_visibility:*/ title_visibility_yes /*top_margin:*/ top_margin_yes logo content_type_text"  data-env="production">
      

  <!-- TITLE -->
<div id="vb_title">
</div>


  <!-- LOGO -->
<div id="vb_logo">
</div>


  <!-- MENU -->

<ul id="vb_menu"><li><a  href="/" >Home</a></li><li><a  href="/people" >People</a></li><li><a  href="/places-and-spaces" >Places and Spaces</a></li><li><a  href="/projects" >Projects</a></li><li><a  href="/films" target="_blank">Films</a></li><li><a class='active' href="/about" >About</a></li><li><a  href="/contact" >Contact</a></li></ul>


  <!-- SIDE -->
<div id="vb_info_container">
  <!-- SIDE_TEXT_TITLE -->
    <h2>&nbsp;</h2>
  <!-- SIDE_TEXT -->
  <div id="vb_info_content">
    
  </div>
</div>


  <!-- BODY_TEXT -->
  <div class="main_content">

    <!-- TEXT CONTENT -->
    <div id="vb_text_content">
          <strong>Grant Scott</strong><br>After fifteen years art directing photography books and magazines such as Elle and Tatler, Grant began to work solely as a photographer for a number of commercial and editorial clients in 2000. His images bring together all of his experience working with some of the greatest photographers of the last century with his graphic and journalistic talents. His aim is to create engaging photographic narratives from every commission. Grant is currently based in the South West of England.<br><br>His work is held in the permanent collections of <span class="caps">MOMA</span>, New York, The Victoria &amp; Albert Museum, London, The Tate, London and The British Library.<br><br><strong>Clients</strong><br>Channel 4, Halpern pr, Aram, John Lewis Partnership, Young &amp; Rubicam, Living Etc, Elle Decoration, The Guardian Weekend Magazine, Blueprint Publicis, Dwell Magazine, Universal Records, Cassell Books, Redwood Publishing, Christies, Forward Publishing, The Observer Magazine, Cosmopolitan, Thames &amp; Hudson, <span class="caps">IKEA</span>, Bang &amp; Olufson, Ford Motor Group, Sotheby’s, Sony Ericsson, Phillips de Pury, Cath Kidson, The Sunday Times Style, Art Review, Christies, The English Home, The English Garden, Vogue (Russia), Tatler (Russia), Tatler (UK), Glamour (UK), Glamour (Russia), House &amp; Garden, Homes &amp; Garden, Homes &amp; Antiques, Easy Living, Instyle (UK), Instyle (US), Instyle (Russia), Telegraph on Saturday Magazine.<br><br><strong>Books</strong><br>At Home With The Makers Of Style: Thame &amp; Hudson (2006)<br>Crash Happy: Cafe Royal Books (2014)<br>Professional Photography: The New Global Landscape Explained: Focal Press (2014)<br>The Essential Student Guide to Professional Photography: Focal Press (2015)<br>New Ways of Seeing: The Democratic Language of Photography: Bloomsbury Academic (2019)<br><br><strong>Exhibitions</strong><br>2000 Kobal Photographic Portrait Awards: National Portrait Gallery London, UK<br>2002 Crash Happy: Browns London, UK<br>2005 Casa Molino: 1 Corso Como Milan, Italy<br>2005 At Home With The Makers Of Style: Aram London, UK<br>2007 The Dome Sessions: The Dome Brighton, UK<br>2018 Do Not Bend: The Photographic Life of Bill Jay: Oriel Colwyn Gallery, Wales<br><br><strong>Films</strong><br>2018 Do Not Bend: The Photographic Life of Bill Jay
    </div>

    <!-- FOOTER -->
<div class="push">&nbsp;</div>

<div id="vb_footer" class="">
      <span class='vb_footer_text'></span>
</div>


  </div>

  </div>



  <script type="text/javascript">
    var _gaq = _gaq || [];
    // user tracker
    _gaq.push(['_setAccount', '']);
    _gaq.push(['_anonymizeIp']);
    _gaq.push(['_trackPageview']);
    // Viewbook tracker
    _gaq.push(['viewbook._setAccount', 'UA-2500703-5']);
    _gaq.push(['viewbook._anonymizeIp']);
    _gaq.push(['viewbook._setDomainName', 'none']);
    _gaq.push(['viewbook._setAllowLinker', true]);
    _gaq.push(['viewbook._setAllowHash', false]);
    _gaq.push(['viewbook._trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <script id="user-info" type="text/json">
    {"web_page_id":68800,"user_id":23228,"username":"grantscottcom","album_id":null}
  </script>
</body>
</html>
