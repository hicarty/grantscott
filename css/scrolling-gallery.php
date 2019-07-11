<?php
    header("Content-type: text/css; charset: UTF-8");

   $brandColor = "#990000";
   $linkColor = "#555555";
   $CDNURL = "http://cdn.blahblah.net";
?>

/*! horizontal-scrolling-gallery-scaffold - v0.0.48 - 2015-03-22
* https://github.com/viewbook/module-gallery-scrolling-scaffold
* Copyright (c) 2015 ; Licensed  */
.__h-gallery {
    padding: 0;
    position: relative;
    height: 100%
}

.__h-gallery>.panels {
    display: none
}

.__h-gallery_vertical-scroll .__h-gallery__header {
    position: relative
}

.__h-gallery_vertical-scroll .__h-gallery__header .__h-gallery__header__back {
    float: none
}

.__h-gallery_vertical-scroll .__h-gallery__images__list {
    white-space: normal;
    width: 100% !important;
    height: auto !important
}

.__h-gallery_vertical-scroll .__h-gallery__images__list .__h-gallery__images__list__item {
    max-width: 100%
}

.__h-gallery_vertical-scroll .__h-gallery__images__list .__h-gallery__images__list__item .__h-gallery__images__list__item__figure {
    display: inline-block
}

.__h-gallery_vertical-scroll .__h-gallery__images__list .__h-gallery__images__list__item .__h-gallery__images__list__item__figure>img {
    max-width: 100%;
    height: auto;
    display: inline-block
}

.__h-gallery_vertical-scroll .__h-gallery__images__list .__h-gallery__images__list__item {
    display: block;
    padding-right: 0 !important;
    text-align: center;
    height: auto;
    margin-bottom: 2em
}

.__h-gallery_vertical-scroll .__h-gallery__images__list .__h-gallery__images__list__item .__h-gallery__images__list__item__figure {
    width: 100%;
    height: auto
}

.__h-gallery_vertical-scroll .__h-gallery__images__list .__h-gallery__images__list__item .__h-gallery__images__list__item__figure>img {
    max-height: none;
    width: 100% !important
}

.__h-gallery_vertical-scroll .__h-gallery__images__list .__h-gallery__images__list__item .__h-gallery__images__list__item__figure .__h-gallery__images__list__item__figure__caption {
    position: relative;
    top: auto;
    left: auto;
    right: auto
}

.__h-gallery_js-image-spacing-1 .__h-gallery__images__list__item {
    padding: 0;
    padding: 0
}

.__h-gallery_js-image-spacing-1 .__h-gallery__images__list__item:not(:last-child) .__h-gallery__images__list__item__footer {
    margin-right: 0
}

.__h-gallery_js-image-spacing-2 .__h-gallery__images__list__item {
    padding: 0 10px 10px 0;
    padding: 0 1vh 1vh 0
}

.__h-gallery_js-image-spacing-2 .__h-gallery__images__list__item:not(:last-child) .__h-gallery__images__list__item__footer {
    margin-right: 1vh
}

.__h-gallery_js-image-spacing-3 .__h-gallery__images__list__item {
    padding: 0 20px 20px 0;
    padding: 0 2vh 2vh 0
}

.__h-gallery_js-image-spacing-3 .__h-gallery__images__list__item:not(:last-child) .__h-gallery__images__list__item__footer {
    margin-right: 2vh
}

.__h-gallery_js-image-spacing-4 .__h-gallery__images__list__item {
    padding: 0 40px 40px 0;
    padding: 0 4vh 4vh 0
}

.__h-gallery_js-image-spacing-4 .__h-gallery__images__list__item:not(:last-child) .__h-gallery__images__list__item__footer {
    margin-right: 4vh
}

.__h-gallery_js-image-spacing-5 .__h-gallery__images__list__item {
    padding: 0 100px 100px 0;
    padding: 0 10vh 10vh 0
}

.__h-gallery_js-image-spacing-5 .__h-gallery__images__list__item:not(:last-child) .__h-gallery__images__list__item__footer {
    margin-right: 10vh
}

.__h-gallery_js-fixed-scrolling {
    overflow: hidden
}

.__h-gallery__images {
    position: absolute;
    top: 0;
    bottom: 0;
    width: auto;
    z-index: 100
}

.__h-gallery .__h-gallery__images,.__h-gallery_js-no-header .__h-gallery__images {
    top: 0
}

.__h-gallery__images__list {
    white-space: nowrap;
    height: 100% !important
}

.__h-gallery__images__list_vertical-align {
    min-height: 75vh
}

.__h-gallery__images__list_vertical-align .__h-gallery__images__list__item {
    display: inline-block;
    max-width: 66vh
}

.__h-gallery__images__list_vertical-align .__h-gallery__images__list__item .__h-gallery__images__list__item__figure {
    display: inline-block
}

.__h-gallery__images__list_vertical-align .__h-gallery__images__list__item .__h-gallery__images__list__item__figure:before {
    content: '';
    display: inline-block;
    height: 100%
}

.__h-gallery__images__list_vertical-align .__h-gallery__images__list__item .__h-gallery__images__list__item__figure>img {
    max-width: 100%;
    width: auto;
    height: auto;
    display: inline-block
}

.__h-gallery__images__list_vertical-align .__h-gallery__images__list__item .__h-gallery__images__list__item__figure:before,.__h-gallery__images__list_vertical-align .__h-gallery__images__list__item .__h-gallery__images__list__item__figure>img,.__h-gallery__images__list_vertical-align-baseline .__h-gallery__images__list__item .__h-gallery__images__list__item__figure:before,.__h-gallery__images__list_vertical-align-baseline .__h-gallery__images__list__item .__h-gallery__images__list__item__figure>img {
    vertical-align: baseline
}

.__h-gallery__images__list_vertical-align-top .__h-gallery__images__list__item .__h-gallery__images__list__item__figure:before,.__h-gallery__images__list_vertical-align-top .__h-gallery__images__list__item .__h-gallery__images__list__item__figure>img {
    vertical-align: top
}

.__h-gallery__images__list_vertical-align-middle .__h-gallery__images__list__item .__h-gallery__images__list__item__figure:before,.__h-gallery__images__list_vertical-align-middle .__h-gallery__images__list__item .__h-gallery__images__list__item__figure>img {
    vertical-align: middle
}

.__h-gallery__images__list__item__figure__caption__current {
    margin-right: .8em;
    opacity: .5
}

.__h-gallery__images__list__item__figure__caption__current_hide,.__h-gallery_js-no-image-number .__h-gallery__images__list__item__figure__caption__current {
    display: none !important
}

.__h-gallery__images__list__item__figure__caption {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    margin-top: 0;
    padding-top: .75em;
    text-align: left
}

.__h-gallery__images__list__item__figure__caption>span {
    display: inline-block;
    vertical-align: top;
    height: auto
}

.__h-gallery__images__list__item__figure__caption__info__description_hide,.__h-gallery_js-no-description .__h-gallery__images__list__item__figure__caption__info__description {
    display: none !important
}

.__h-gallery__images__list__item__figure__caption__info {
    width: 80%;
    max-width: 404px;
    max-height: 5em;
    white-space: normal
}

.__h-gallery__images__list__item__figure__caption__info__title {
    font-weight: 800;
    margin-bottom: .75em
}

.__h-gallery__images__list__item__figure__caption__info__title_hide,.__h-gallery_js-no-title .__h-gallery__images__list__item__figure__caption__info__title {
    display: none !important
}

.__h-gallery__images__list__item__figure {
    margin: 0;
    display: inline-block;
    height: 100%;
    width: auto;
    position: relative
}

.__h-gallery__images__list__item__figure__image {
    width: auto;
    height: 100%;
    max-height: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0
}

.__h-gallery__images__list__item__figure__right-click-blocker {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    display: block;
    cursor: pointer;
    /*background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7);
    https://css-tricks.com/data-uris/
    http://jpillora.com/base64-encoder/
    https://css-tricks.com/css-variables-with-php/*/
    background-image: url("<?php
  echo base64_encode(file_get_contents("../images/IMG_0328.jpeg"))
?>");
    background-repeat: no-repeat
}

.__h-gallery__images__list__item__footer__filename {
    float: left
}

.__h-gallery__images__list__item__footer__filename_hide,.__h-gallery_js-no-filename .__h-gallery__images__list__item__footer__filename {
    display: none !important
}

.__h-gallery__images__list__item__footer {
    position: absolute;
    left: 10px;
    right: 4px;
    bottom: 0;
    height: 20px;
    color: #fff;
    font-family: HelveticaNeue,"Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
    font-size: 10px;
    line-height: 10px;
    opacity: .9;
    display: none
}

.__h-gallery__images__list__item__footer>span {
    display: inline-block;
    vertical-align: middle
}

.__h-gallery__images__list__item__footer_show,.__h-gallery__images__list__item_js-with-options .__h-gallery__images__list__item__footer {
    display: block
}

.__h-gallery__images__list__item__footer__options__download {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.__h-gallery__images__list__item__footer__options__download:before {
    font-family: icons-viewbook;
    content: "\E849"
}

.__h-gallery__images__list__item__footer__options__download_hide,.__h-gallery_js-no-download .__h-gallery__images__list__item__footer__options__download {
    display: none !important
}

.__h-gallery__images__list__item__footer__options__download__link {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block
}

.__h-gallery__images__list__item__footer__options {
    float: right
}

.__h-gallery__images__list__item__footer__options>span {
    margin-right: 6px;
    display: inline-block;
    position: relative;
    cursor: pointer
}

.__h-gallery__images__list__item__footer__options>span:before {
    opacity: .8;
    -webkit-transition: opacity .5s;
    transition: opacity .5s
}

.__h-gallery__images__list__item__footer__options>span:hover:before {
    opacity: 1
}

.__h-gallery__images__list__item__footer__options>span:before {
    font-size: 16px
}

.__h-gallery__images__list__item__footer__options__share {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.__h-gallery__images__list__item__footer__options__share:before {
    font-family: icons-viewbook;
    content: "\E843"
}

.__h-gallery__images__list__item__footer__options__share_hide,.__h-gallery_js-no-share .__h-gallery__images__list__item__footer__options__share {
    display: none !important
}

.__h-gallery__images__list__item {
    display: inline-block;
    position: relative;
    padding-bottom: 0 !important;
    margin-left: -3.5px
}

.__h-gallery__images__list__item:first-child {
    margin-left: 0
}

.__h-gallery__images__list__item:last-child {
    padding-right: 0 !important
}

.__h-gallery__images__list__item>span {
    display: inline-block;
    vertical-align: baseline
}

.__panel__share__list__item__link {
    text-decoration: none;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    width: 100%;
    height: 100%;
    color: #aaa !important
}

.__panel__share__list__item__link:hover {
    color: #222 !important
}

.__panel__share__list__item__link:before {
    display: inline-block;
    vertical-align: middle;
    font-size: 18px
}

.__panel__share__list__item__link.facebook {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.__panel__share__list__item__link.facebook:before {
    font-family: icons-viewbook;
    content: "\EF00"
}

.__panel__share__list__item__link.twitter {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.__panel__share__list__item__link.twitter:before {
    font-family: icons-viewbook;
    content: "\EF01"
}

.__panel__share__list__item__link.google {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.__panel__share__list__item__link.google:before {
    font-family: icons-viewbook;
    content: "\EF03"
}

.__panel__share__list__item__link.mail {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.__panel__share__list__item__link.mail:before {
    font-family: icons-viewbook;
    content: "\E847"
}

.__panel__share__list__item__link.pinterest {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.__panel__share__list__item__link.pinterest:before {
    font-family: icons-viewbook;
    content: "\EF02"
}

.__panel__share__list__item__link.download {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.__panel__share__list__item__link.download:before {
    font-family: icons-viewbook;
    content: "\E849"
}

.__panel__share__list__item {
    float: left;
    display: inline-block;
    width: 28px;
    height: 28px;
    line-height: 28px;
    margin-top: 1px;
    margin-right: 0;
    background-color: #f2f2eb
}

.__panel__share__list__item:nth-child(1n+1) {
    margin-left: 0
}

.__panel__share__list__item:nth-child(1n) {
    margin-right: 0
}

.__panel__share__list__item:nth-child(1) {
    margin-top: 0
}

.__panel__share__list__item:nth-last-child(1) {
    margin-bottom: 0
}

.__panel__share__list {
    padding: 0;
    margin: 0;
    list-style: none;
    overflow: hidden
}

.__panel__share {
    background-color: #ddd;
    position: absolute;
    z-index: 10;
    margin-left: -14px;
    left: 50%;
    color: #000;
    width: 28px;
    top: 100%
}

.__panel__share .__panel__share__list__item__link:before {
    opacity: 0;
    -webkit-transition: opacity .6s;
    transition: opacity .6s;
    -webkit-transition-delay: .1s;
    transition-delay: .1s
}

.open>.__panel__share .__panel__share__list__item__link:before {
    opacity: 1
}

.__panel__share,.__panel__share .__panel__share__list {
    border-radius: 4px
}

.__panel__share_top {
    top: auto;
    bottom: 100%;
    margin-bottom: 5px
}

@font-face {
    font-family: icons-viewbook;
    src: url(/sites/fonts/viewbook_set/icons-16-24.eot);
    src: url(/sites/fonts/viewbook_set/icons-16-24.eot?#iefix) format("embedded-opentype"),url(/sites/fonts/viewbook_set/icons-16-24.woff) format("woff"),url(/sites/fonts/viewbook_set/icons-16-24.ttf) format("truetype"),url(/sites/fonts/viewbook_set/icons-16-24.svg#icons-viewbook) format("svg");
    font-style: normal;
    font-weight: 400
}
