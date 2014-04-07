<?php
define('DEMO', 'different-sizes');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Demo Different Size | BttrLazyLoading</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="BttrLazyLoading is a Jquery plugin that allows your web application to only load images within the viewport. It also allows you to have different version of an image for 4 differents screen sizes.">
		<meta name="keywords" content="JavaScript, Responsive, image, images, jQuery, coffeescript, lazy loading">
		<meta name="author" content="Julien Renaux">
		<meta property="og:title" content="Demo Different Size | BttrLazyLoading"/>
		<meta property="og:description" content="BttrLazyLoading is a Jquery plugin that allows your web application to only load images within the viewport. It also allows you to have different version of an image for 4 differents screen sizes."/>
		<meta property="og:url" content="http://bttrlazyloading.julienrenaux.fr/demo/different-sizes.php"/>
		<meta property="og:site_name" content="Julien Renaux Blog"/>
		<meta property="og:type" content="blog"/>
		<meta property="og:image" content="http://julienrenaux.fr/wp-content/uploads/2013/12/bttrlazyloading-300x181.png">
        <link rel="stylesheet" type="text/css" href="../bower_components/bootswatch/lumen/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../bower_components/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="../BttrLazyLoading/build/bttrlazyloading.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../bower_components/jquery.smooth-scroll/jquery.smooth-scroll.min.js"></script>
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../bower_components/highlight.js/src/styles/solarized_dark.css" />
        <script src="js/highlight.pack.js"></script>
        <script src="../BttrLazyLoading/build/jquery.bttrlazyloading.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Different sizes</h1>
                <p>BttrLazyLoading works even better when image sizes are defined. See for yourself!</p>
            </div>
			<div class="row">
                <div class="col-md-6">
                    <h2>HTML</h2>
                    <pre><code class="html">&lt;img id=&quot;yourImg&quot; class=&quot;bttrlazyloading&quot;
    data-bttrlazyloading-xs-src=&quot;img/800x300.jpg&quot;
    data-bttrlazyloading-xs-width=&quot;800&quot;
    data-bttrlazyloading-xs-height=&quot;300&quot;
    data-bttrlazyloading-sm-src=&quot;img/380x380.jpg&quot;
    data-bttrlazyloading-sm-width=&quot;380&quot;
    data-bttrlazyloading-sm-height=&quot;380&quot;
    data-bttrlazyloading-md-src=&quot;img/350x350.jpg&quot;
    data-bttrlazyloading-md-width=&quot;350&quot;
    data-bttrlazyloading-md-height=&quot;350&quot;
    data-bttrlazyloading-lg-src=&quot;img/300x300.jpg&quot;
    data-bttrlazyloading-lg-width=&quot;300&quot;
    data-bttrlazyloading-lg-height=&quot;300&quot;
/&gt;</pre></code>
                </div>
                <div class="col-md-6">
                    <h2>JavaScript</h2>
                    <pre><code class="javascript">$('#yourImg').bttrlazyloading();</pre></code>
                </div>
            </div>
            <div class="alert alert-info text-center"><b>OR</b></div>
            <div class="row">
                <div class="col-md-6">
                    <h2>HTML</h2>
                    <pre><code class="html">&lt;img id=&quot;yourImg&quot; class=&quot;bttrlazyloading&quot; /&gt;</pre></code>
                </div>
                <div class="col-md-6">
                    <h2>JavaScript</h2>
                    <pre><code class="javascript">$('#yourImg').bttrlazyloading({
	xs: {
		src: 'http://placekitten.com/800/300',
		width: 800,
		height: 300
	},
	sm: {
		src: 'http://placekitten.com/380/380',
		width: 380,
		height: 380
	},
	md: {
		src: 'http://placekitten.com/350/350',
		width: 350,
		height: 350
	},
	lg: {
		src: 'http://placekitten.com/300/300',
		width: 300,
		height: 300
	}
});</pre></code>
                </div>
            </div>

            <div class="page-header">
                <h2>Demo</h2>
            </div>
            <div class="row" id="loading-area"></div>
            <div class="page-header">
                <h2>Mode Demos</h2>
            </div>
			<?php include 'more-demo.php'; ?>
        </div>
		<?php include '../menu.php'; ?>
        <script type="text/javascript">
			$(function($, hljs) {
				$('#back-to-top').click(function(event) {
					$.smoothScroll({
						scrollTarget: 'body',
						offset: -60
					});
				});
				hljs.initHighlightingOnLoad();

				/* DEMO */
				$('.bttrlazyloading').bttrlazyloading()
				for (var i = 0; i < 32; i++)
				{
					var $wrapper = $('<div class=" col-sm-6 col-md-4 col-lg-3">');
					var $img = $('<img class="bttrlazyloading">');
					$wrapper.append($img);
					$('#loading-area').append($wrapper);
					$img.bttrlazyloading({
						delay: 1000,
						xs: {
							src: 'img/800x300.jpg',
							width: 800,
							height: 300
						},
						sm: {
							src: 'img/380x380.jpg',
							width: 380,
							height: 380
						},
						md: {
							src: 'img/350x350.jpg',
							width: 350,
							height: 350
						},
						lg: {
							src: 'img/300x300.jpg',
							width: 300,
							height: 300
						}
					});
				}
			}(jQuery, hljs));
        </script>
		<script src="js/analytics.js"></script>
    </body>
</html>