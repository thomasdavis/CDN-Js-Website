<?php

if( $_SERVER["QUERY_STRING"] != "" ){
header("Location: /");
}
?>
<!doctype html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>cdn js - the missing cdn</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css?v=2">
  <link rel="stylesheet" href="css/BreadCrumb.css" type="text/css">
  <script src="js/libs/modernizr-1.6.min.js"></script>
  
</head>

<body style="background: #F2F2F2; font-family: Helvetica">

  <div id="container">
    <header style="width: 960px; margin: auto;">
	<h1 style="font-size: 3.4em; font-family: Ubuntu;margin-left: 20px; margin-top: 5px;margin-bottom: 10px;">cdnjs.com- The Missing CDN</h1>
    </header>

    <div id="main" style="width: 960px; margin: auto; background: #fff;">
		<!--<nav style="background: #E6E6E6; height: 45px;">
			<ul>
			<li>Menu</li>
			<li>Menu</li>
			<li>Menu</li>
			<li>Menu</li>
			</ul>
		
		</nav>-->
		<section style="background: #fff; min-height: 500px;">
		 <div id="breadCrumb0" class="breadCrumb module" style="margin-bottom: 15px;">
                    <ul>
                        <li>
                                   <a href="#top">Why</a>
                        </li>
                        <li>
                            <a href="#library">Libraries</a>
                        </li>
                        <li>
                            <a href="#plugins">Plugins</a>
                        </li>
                        <li>
                            <a href="#comments">Comments</a>
                        </li>
                    </ul>
                </div>
                <h2 style="margin-left: 15px; padding:0;font-size: 24px;">What is cdnjs.com?</h2>
              <p style="font-size: 15px;	margin-left: 34px; margin-top: 15px; margin-bottom: 15px;">
                Everyone loves the <a target="_blank" href="http://code.google.com/apis/libraries/devguide.html">Google CDN</a> right? Even <a href="http://www.asp.net/ajaxlibrary/cdn.ashx" target="_blank">Microsoft runs their own CDN</a>.<br /><br />The problem is, they only host the most popular libraries.
<br /><br />
We host the other stuff.</p>

<h2 style="margin-left: 15px; padding:0;font-size: 24px;">Why use cdnjs.com?</h2>
                       
                       <ul class='whyy' style="margin-left: 50px; margin-top: 15px; margin-bottom: 15px;">
                       <li>Free!</li>
                       <li>We use <a target="_blank" href="http://aws.amazon.com/cloudfront/ ">Amazon Cloudfront</a> (that means things load fast)</li>
                       <li>We follow <a target="_blank" href="http://developer.yahoo.com/performance/rules.html">best practices</a></li>
                       </ul>

<br /><p style="margin-left: 40px;">We are currently researching <strong>popular</strong> and <strong>quality</strong> plugins that fit the criteria to be added to the CDN. <br /><br /> If you have any <strong>suggestions</strong>, please post a <a href="#comments">comment</a>.</p>
<br /><a target="_blank" name="library"></a>
				<h2 style="margin-left: 15px; padding:0;font-size: 24px;">Libraries</h2>
                <ul class="plugins">
                <li>
                
                <h2><a target="_blank" href="http://documentcloud.github.com/backbone/">Backbone.js</a> (0.3.3)</h2><p>Backbone supplies structure to JavaScript-heavy applications by providing models with key-value binding and custom events, collections with a rich API of enumerable functions, views with declarative event handling, and connects it all to your existing application over a RESTful JSON interface.</p>
                <input value='<script src="http://ajax.cdnjs.com/ajax/libs/backbone.js/0.3.3/backbone-min.js"></script>' />
                </li>
                <li>
                <h2><a target="_blank" href="http://documentcloud.github.com/underscore/">Underscore.js</a> (1.1.4)</h2><p>Underscore is a utility-belt library for JavaScript that provides a lot of the functional programming support that you would expect in Prototype.js (or Ruby), but without extending any of the built-in JavaScript objects. It's the tie to go along with jQuery's tux.</p>
                <input value='<script src="http://ajax.cdnjs.com/ajax/libs/underscore.js/1.1.4/underscore-min.js"></script>' />
               </li>
                <li>
                <h2><a target="_blank" href="http://www.modernizr.com/">Modernizr</a> (1.6)</h2><p>Modernizr adds classes to the <html> element which allow you to target specific browser functionality in your stylesheet. You don't actually need to write any Javascript to use it.</p>
                <input value='<script src="http://ajax.cdnjs.com/ajax/libs/modernizr/1.6/modernizr-1.6.min.js"></script>' />
               </li>

                <li>
                <h2><a target="_blank" href="http://sizzlejs.com/">SizzleJs</a> (1.4.4)</h2><p>A pure-JavaScript CSS selector engine
designed to be easily dropped in to a host library.</p>
                <input value='<script src="http://ajax.cdnjs.com/ajax/libs/sizzle/1.4.4/sizzle.min.js"></script>' />
               </li>
                <li>
                <h2><a target="_blank" href="http://raphaeljs.com/">Raphaël</a> (1.5.2)</h2><p>Raphaël is a small JavaScript library that should simplify your work with vector graphics on the web. If you want to create your own specific chart or image crop and rotate widget, for example, you can achieve it simply and easily with this library.</p>
                <input value='<script src="http://ajax.cdnjs.com/ajax/libs/raphael/1.5.2/raphael-min.js"></script>' />
               </li>
                <li>
                <h2><a target="_blank" href="http://www.jquery.com/">jQuery</a> (1.4.4) - Hosted by Google</h2><p>A fast, concise, library that simplifies how to traverse HTML documents, handle events, perform animations, and add AJAX.</p>
                <input value='<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>' />
             
               </li>
                </ul><a target="_blank" name="plugins"></a>
                <h2 style="margin-left: 15px; padding:0;font-size: 24px; margin-top: 15px;">Plugins</h2>
                                <ul class="plugins">
                <li>
                
                <h2><a target="_blank" href="http://www.datatables.net/">jQuery Datatables</a> (1.7.5)</h2><p>DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, which will add advanced interaction controls to any HTML table. Key features:</p>
                <input value='<script src="http://ajax.cdnjs.com/ajax/plugins/jquery.datatables/1.7.5/jquery.dataTables.min.js"></script>' />
                </li>
                <li>
                <h2><a target="_blank" href="http://jquery.malsup.com/corner/ ">jQuery Corner</a> (2.11)</h2><p>jQuery corner is an unobstrusive way of adding corners to any HTML elements.</p>
                <input value='<script src="http://ajax.cdnjs.com/ajax/plugins/jquery.corner/2.11/jquery.corner.min.js"></script>' />
               </li>
        
                </ul>
                <br />
                <br />
		</section>
		<div id="breadCrumb1" class="breadCrumb module" style="margin-bottom: 15px;">
                    <ul>
                        <li>
                            <a href="#top">Why</a>
                        </li>
                        <li>
                            <a href="#library">Libraries</a>
                        </li>
                        <li>
                            <a href="#plugins">Plugins</a>
                        </li>
                        <li>
                            <a href="#comments">Comments</a>
                        </li>
                    </ul>
                </div>
                <div style="width: 760px; margin: auto; background: #fff;"> <br />
                <span class="st_twitter_vcount" displayText="Tweet"></span><span class="st_facebook_vcount" displayText="Share"></span><span class="st_email_vcount" displayText="Email"></span><span class="st_sharethis_vcount" displayText="Share"></span><script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'bdee6d8c-ed9a-4867-90f6-011704c29ee3'});</script>
                <script>
var idcomments_acct = 'ae4af217dc8172c1f582901efc199233';
var idcomments_post_id;
var idcomments_post_url;
</script>
<a target="_blank" name="comments"></a>
<span id="IDCommentsPostTitle" style="display:none" name="comments"></span>
<script type='text/javascript' src='http://www.intensedebate.com/js/genericCommentWrapperV2.js'></script>
</div>
    </div>
    <div style="clear: both;"></div>
    <footer style="width: 760px; margin: auto;">  </footer>
  </div> <!-- end of #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.4.2.js"%3E%3C/script%3E'))</script>
          <script src="js/jquery.easing.1.3.js" type="text/javascript" language="JavaScript">
        </script>
        <script src="js/jquery.jBreadCrumb.1.1.js" type="text/javascript" language="JavaScript"></script>
  
  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>

<script type="text/javascript">

	jQuery(document).ready(function()
	{
		jQuery("#breadCrumb0").jBreadCrumb();
		jQuery("#breadCrumb1").jBreadCrumb();
		jQuery("input, textarea").click(
		 function()
		 {
		  // only select if the text has not changed
		  if(this.value == this.defaultValue)
		  {
		   this.select();
		  }
		 }
		)
	});
</script>
  <!-- end concatenated and minified scripts-->
  
  
  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); </script>
  <![endif]-->

  <!-- yui profiler and profileviewer - remove for production -->
  <script src="js/profiling/yahoo-profiling.min.js"></script>
  <script src="js/profiling/config.js"></script>
  <!-- end profiling code -->
<script src="http://static.getclicky.com/js" type="text/javascript"></script> 
<script type="text/javascript">try{ clicky.init(66376315); }catch(err){}</script> 
<noscript><p><img alt="Clicky" width="1" height="1" src="http://in.getclicky.com/66376315ns.gif" /></p></noscript> 


  
</body>
</html>
