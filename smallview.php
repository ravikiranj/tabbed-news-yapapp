<?php
    $html = <<<HTML
<head>
<!-- <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/combo?2.8.0/build/tabview/assets/skins/sam/tabview.css">  -->
<style type="text/css">
.yui-navset .yui-nav li,.yui-navset .yui-navset-top .yui-nav li,.yui-navset .yui-navset-bottom .yui-nav li{margin:0 .5em 0 0;}.yui-navset-left .yui-nav li,.yui-navset-right .yui-nav li{margin:0 0 .5em;}.yui-navset .yui-content .yui-hidden{border:0;height:0;width:0;padding:0;position:absolute;left:-999999px;overflow:hidden;visibility:hidden;}.yui-navset .yui-navset-left .yui-nav,.yui-navset .yui-navset-right .yui-nav,.yui-navset-left .yui-nav,.yui-navset-right .yui-nav{width:6em;}.yui-navset-top .yui-nav,.yui-navset-bottom .yui-nav{width:auto;}.yui-navset .yui-navset-left,.yui-navset-left{padding:0 0 0 6em;}.yui-navset-right{padding:0 6em 0 0;}.yui-navset-top,.yui-navset-bottom{}.yui-nav,.yui-nav li{margin:0;padding:0;list-style:none;}.yui-navset li em{font-style:normal;}.yui-navset{position:relative;zoom:1;}.yui-navset .yui-content,.yui-navset .yui-content div{zoom:1;}.yui-navset .yui-content:after{content:'';display:block;clear:both;}.yui-navset .yui-nav li,.yui-navset .yui-navset-top .yui-nav li,.yui-navset .yui-navset-bottom .yui-nav li{display:inline-block;display:-moz-inline-stack;*display:inline;vertical-align:bottom;cursor:pointer;zoom:1;}.yui-navset-left .yui-nav li,.yui-navset-right .yui-nav li{display:block;}.yui-navset .yui-nav a{position:relative;}.yui-navset .yui-nav li a,.yui-navset-top .yui-nav li a,.yui-navset-bottom .yui-nav li a{display:block;display:inline-block;vertical-align:bottom;zoom:1;}.yui-navset-left .yui-nav li a,.yui-navset-right .yui-nav li a{display:block;}.yui-navset-bottom .yui-nav li a{vertical-align:text-top;}.yui-navset .yui-nav li a em,.yui-navset-top .yui-nav li a em,.yui-navset-bottom .yui-nav li a em{display:block;}.yui-navset .yui-navset-left .yui-nav,.yui-navset .yui-navset-right .yui-nav,.yui-navset-left .yui-nav,.yui-navset-right .yui-nav{position:absolute;z-index:1;}.yui-navset-top .yui-nav,.yui-navset-bottom .yui-nav{position:static;}.yui-navset .yui-navset-left .yui-nav,.yui-navset-left .yui-nav{left:0;right:auto;}.yui-navset .yui-navset-right .yui-nav,.yui-navset-right .yui-nav{right:0;left:auto;}.yui-skin-sam .yui-navset .yui-nav,.yui-skin-sam .yui-navset .yui-navset-top .yui-nav{border:solid #2647a0;border-width:0 0 5px;zoom:1;}.yui-skin-sam .yui-navset .yui-nav li,.yui-skin-sam .yui-navset .yui-navset-top .yui-nav li{margin:0 .16em 0 0;padding:1px 0 0;zoom:1;}.yui-skin-sam .yui-navset .yui-nav .selected,.yui-skin-sam .yui-navset .yui-navset-top .yui-nav .selected{margin:0 .16em -1px 0;}.yui-skin-sam .yui-navset .yui-nav a,.yui-skin-sam .yui-navset .yui-navset-top .yui-nav a{background:#d8d8d8 url(http://yui.yahooapis.com/2.8.0r4/build/assets/skins/sam/sprite.png) repeat-x;border:solid #a3a3a3;border-width:0 1px;color:#000;position:relative;text-decoration:none;}.yui-skin-sam .yui-navset .yui-nav a em,.yui-skin-sam .yui-navset .yui-navset-top .yui-nav a em{border:solid #a3a3a3;border-width:1px 0 0;cursor:hand;padding:.25em .75em;left:0;right:0;bottom:0;top:-1px;position:relative;}.yui-skin-sam .yui-navset .yui-nav .selected a,.yui-skin-sam .yui-navset .yui-nav .selected a:focus,.yui-skin-sam .yui-navset .yui-nav .selected a:hover{background:#2647a0 url(http://yui.yahooapis.com/2.8.0r4/build/assets/skins/sam/sprite.png) repeat-x left -1400px;color:#fff;}.yui-skin-sam .yui-navset .yui-nav a:hover,.yui-skin-sam .yui-navset .yui-nav a:focus{background:#bfdaff url(http://yui.yahooapis.com/2.8.0r4/build/assets/skins/sam/sprite.png) repeat-x left -1300px;outline:0;}.yui-skin-sam .yui-navset .yui-nav .selected a em{padding:.35em .75em;}.yui-skin-sam .yui-navset .yui-nav .selected a,.yui-skin-sam .yui-navset .yui-nav .selected a em{border-color:#243356;}.yui-skin-sam .yui-navset .yui-content{background:#edf5ff;}.yui-skin-sam .yui-navset .yui-content,.yui-skin-sam .yui-navset .yui-navset-top .yui-content{border:1px solid #808080;border-top-color:#243356;padding:.25em .5em;}.yui-skin-sam .yui-navset-left .yui-nav,.yui-skin-sam .yui-navset .yui-navset-left .yui-nav,.yui-skin-sam .yui-navset .yui-navset-right .yui-nav,.yui-skin-sam .yui-navset-right .yui-nav{border-width:0 5px 0 0;position:absolute;top:0;bottom:0;}.yui-skin-sam .yui-navset .yui-navset-right .yui-nav,.yui-skin-sam .yui-navset-right .yui-nav{border-width:0 0 0 5px;}.yui-skin-sam .yui-navset-left .yui-nav li,.yui-skin-sam .yui-navset .yui-navset-left .yui-nav li,.yui-skin-sam .yui-navset-right .yui-nav li{margin:0 0 .16em;padding:0 0 0 1px;}.yui-skin-sam .yui-navset-right .yui-nav li{padding:0 1px 0 0;}.yui-skin-sam .yui-navset-left .yui-nav .selected,.yui-skin-sam .yui-navset .yui-navset-left .yui-nav .selected{margin:0 -1px .16em 0;}.yui-skin-sam .yui-navset-right .yui-nav .selected{margin:0 0 .16em -1px;}.yui-skin-sam .yui-navset-left .yui-nav a,.yui-skin-sam .yui-navset-right .yui-nav a{border-width:1px 0;}.yui-skin-sam .yui-navset-left .yui-nav a em,.yui-skin-sam .yui-navset .yui-navset-left .yui-nav a em,.yui-skin-sam .yui-navset-right .yui-nav a em{border-width:0 0 0 1px;padding:.2em .75em;top:auto;left:-1px;}.yui-skin-sam .yui-navset-right .yui-nav a em{border-width:0 1px 0 0;left:auto;right:-1px;}.yui-skin-sam .yui-navset-left .yui-nav a,.yui-skin-sam .yui-navset-left .yui-nav .selected a,.yui-skin-sam .yui-navset-left .yui-nav a:hover,.yui-skin-sam .yui-navset-right .yui-nav a,.yui-skin-sam .yui-navset-right .yui-nav .selected a,.yui-skin-sam .yui-navset-right .yui-nav a:hover,.yui-skin-sam .yui-navset-bottom .yui-nav a,.yui-skin-sam .yui-navset-bottom .yui-nav .selected a,.yui-skin-sam .yui-navset-bottom .yui-nav a:hover{background-image:none;}.yui-skin-sam .yui-navset-left .yui-content{border:1px solid #808080;border-left-color:#243356;}.yui-skin-sam .yui-navset-bottom .yui-nav,.yui-skin-sam .yui-navset .yui-navset-bottom .yui-nav{border-width:5px 0 0;}.yui-skin-sam .yui-navset .yui-navset-bottom .yui-nav .selected,.yui-skin-sam .yui-navset-bottom .yui-nav .selected{margin:-1px .16em 0 0;}.yui-skin-sam .yui-navset .yui-navset-bottom .yui-nav li,.yui-skin-sam .yui-navset-bottom .yui-nav li{padding:0 0 1px 0;vertical-align:top;}.yui-skin-sam .yui-navset .yui-navset-bottom .yui-nav a em,.yui-skin-sam .yui-navset-bottom .yui-nav a em{border-width:0 0 1px;top:auto;bottom:-1px;}
.yui-skin-sam .yui-navset-bottom .yui-content,.yui-skin-sam .yui-navset .yui-navset-bottom .yui-content{border:1px solid #808080;border-bottom-color:#243356;}
</style>
</head>    
<body>
<div class="yui-skin-sam">
<div id="demo" class="yui-navset">
    <ul class="yui-nav">
        <li><a href="#tab1"><em>Tab One Label</em></a></li>
        <li class="selected"><a href="#tab2"><em>Tab Two Label</em></a></li>
        <li><a href="#tab3"><em>Tab Three Label</em></a></li>
    </ul>            
    <div class="yui-content">
        <div id="tab1"><p>Tab One Content</p></div>
        <div id="tab2"><p>Tab Two Content</p></div>
        <div id="tab3"><p>Tab Three Content</p></div>
    </div>
</div>
</div>
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.0/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.0/build/element/element.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.0/build/tabview/tabview.js"></script>
<script type="text/javascript">
YAHOO.namespace("myapp");
YAHOO.myapp = function() {
   var tabView = new YAHOO.widget.TabView('demo');
}();
</script>
</body>    
HTML;

    echo $html;
    
    
?>