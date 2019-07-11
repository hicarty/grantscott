<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"e460366a38","applicationID":"5866837","transactionName":"ewsMFxQJXg1TQR0XXEwBEUwRA1A+RlJVAUYXBw0NEgNcFWlHSxRQZxcBEQkKXghYVG0DVFQIBxEf","queueTime":0,"applicationTime":66,"agent":""}</script>
<!--<script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1123.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>-->
<script src="./js/js-agent-newrelic.min.js"></script>

<title><?php print $PAGE_TITLE;?></title>

<?php if ($CURRENT_PAGE == "Index") { ?>
  <meta property="og:title" content="Home" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.grantscott.com/" />
  <meta property="og:image" content="https://imageproxy.viewbook.com/23228/07c1e1bed678a3f71b6c1e4a4fd7950a_hd.jpg?fit=max&amp;h=1280&amp;w=1280" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="905" />
  <meta property="og:image:height" content="1358" />
  <meta property="og:image" content="https://imageproxy.viewbook.com/f49bc2233dcb90abe88732f43504dc5e_hd.jpg?fit=max&amp;h=1280&amp;w=1280" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="905" />
  <meta property="og:image:height" content="1358" />
  <meta property="og:image" content="https://imageproxy.viewbook.com/6233c6d78cb2f27124a864b53ff665bf_hd.jpg?fit=max&amp;h=1280&amp;w=1280" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="1000" />
  <meta property="og:image:height" content="750" />
  <meta property="og:image" content="https://imageproxy.viewbook.com/5142cba7f24ad51d8dd96fc424eea555_hd.jpg?fit=max&amp;h=1280&amp;w=1280" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="905" />
  <meta property="og:image:height" content="1358" />
<?php } ?>

<?php if ($CURRENT_PAGE == "People") { ?>
  <meta property="og:title" content="People" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.grantscott.com/people" />
  <meta property="og:image" content="https://imageproxy.viewbook.com/f2e49ca8221bb98661b77e51bea8e954_hd.jpg?fit=max&amp;h=1280&amp;w=1280" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="750" />
  <meta property="og:image:height" content="1125" />
  <meta property="og:image" content="https://imageproxy.viewbook.com/b0151e181a3b17f2fac057124c73f41f_hd.jpg?fit=max&amp;h=1280&amp;w=1280" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="1000" />
  <meta property="og:image:height" content="750" />
  <meta property="og:image" content="https://imageproxy.viewbook.com/23228/bdcb3b8f73d400996eaa7d6dc16472b5_hd.jpg?fit=max&amp;h=1280&amp;w=1280" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="905" />
  <meta property="og:image:height" content="1358" />
  <meta property="og:image" content="https://imageproxy.viewbook.com/62ac78071c8911c7f016a5a73bb6c059_hd.jpg?fit=max&amp;h=1280&amp;w=1280" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="905" />
  <meta property="og:image:height" content="1358" />
  <meta property="og:image" content="https://imageproxy.viewbook.com/23228/94e283ad2da93019b6439d22f0040731_hd.jpg?fit=max&amp;h=1280&amp;w=1280" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="905" />
  <meta property="og:image:height" content="1358" />
<?php } ?>

<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "Organization",
"url": "https://www.grantscott.com/",
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
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" media="screen" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css" />
<link rel="stylesheet" media="screen" href="./css/page_scrolling_gallery.css" />
<link rel="stylesheet" type='text/css' media="screen" href="./css/scrolling-gallery.php" />
<link rel="stylesheet" media="screen" href="./css/pages_aspect_ratio_scrolling_top.css" />
<link rel="stylesheet" media="screen" href="./css/site-classic-main.css" />
<link rel="stylesheet" media="screen" href="./css/social-icons.css" />
<meta property="og:title" content="<?php print $PAGE_TITLE;?>" />
<meta property="og:type" content="website" />
<!--<meta property="og:url" content="https://www.grantscott.com/" />
<meta property="og:image" content="https://imageproxy.viewbook.com/23228/07c1e1bed678a3f71b6c1e4a4fd7950a_hd.jpg?fit=max&amp;h=1280&amp;w=1280" />
<meta property="og:image" content="https://imageproxy.viewbook.com/f49bc2233dcb90abe88732f43504dc5e_hd.jpg?fit=max&amp;h=1280&amp;w=1280" />
<meta property="og:image" content="https://imageproxy.viewbook.com/6233c6d78cb2f27124a864b53ff665bf_hd.jpg?fit=max&amp;h=1280&amp;w=1280" />
<meta property="og:image" content="https://imageproxy.viewbook.com/5142cba7f24ad51d8dd96fc424eea555_hd.jpg?fit=max&amp;h=1280&amp;w=1280" />-->

<?php if ($CURRENT_PAGE == "Index") { ?>
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
      color: #0a000a;
    }
    #vb_page #vb_menu a{
      color: #111111;
    }
    #vb_page #vb_menu li a.active{
      color: #707070;
    }
    #vb_page{
      font-family: "Lucida Grande","Lucida Sans Unicode","Arial";
      margin-top: 50px;
    }
    #vb_title{
      font-family: Arial;
    }
    #vb_menu{
      font-family: Arial;
    }

  </style>
<?php } ?>

<?php if ($CURRENT_PAGE !== "Index") { ?>
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
        color: #000000;
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
        font-family: "Lucida Grande","Lucida Sans Unicode","Arial";
      }
      #vb_menu{
        font-family: "Lucida Grande","Lucida Sans Unicode","Arial";
      }
  </style>
<?php } ?>
