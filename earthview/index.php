<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--  Mobile viewport scale | Disable user zooming as the layout is optimised -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Earthview Photo Downloader - Rick's Code</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/materialize.min.css" media="screen">
    <!-- Custom -->
    <link rel="stylesheet" href="assets/css/styles.css" media="screen">
	<!-- Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<meta name="theme-color" content="#009688">
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper teal">
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <a href="." class="brand-logo hide-on-small-only">Earthview Photo Downloader</a>
							<a href="." class="brand-logo hide-on-med-and-up">Earthview</a>
							<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                            <ul id="nav-mobile" class="right hide-on-med-and-down">
                                <li><a href="https://github.com/quicoto/ricks-code-examples/tree/master/earthview"><i class="mdi-content-link left"></i>Fork me on Github</a></li>
                            </ul>
							<ul class="side-nav" id="mobile-demo">
								<li><a href="https://php.quicoto.com/google-earthview-photo-downloader/"><i class="mdi-navigation-arrow-back left"></i> Back to Article</a></li>
								<li><a href="https://github.com/quicoto/ricks-code-examples/tree/master/earthview"><i class="mdi-content-link left"></i>Fork me on Github</a></li>
							</ul>
                         </div> <!-- .col s12 -->
                    </div> <!-- .row -->
                 </div> <!-- .container -->
            </div> <!-- .nav-wrapper -->
        </nav>
	</header>

	<main>
		<section class="container">
			<article>
                <div class="row" id="mainrow">
					<!-- Ajax content will go here -->
                </div>
				<!-- .row -->
			</article>
		</section>

		<div class="fixed-action-btn" style="bottom: 45px; right: 45px;">
		   <a onclick="javascript: getPhotos();" class="btn-floating btn-large waves-effect waves-light right" title="More Photos"><i class="material-icons">replay</i></a>
		 </div>
	</main>

	<footer class="page-footer teal">
		<div class="footer-copyright">
			<div class="container">
				<a class="grey-text text-lighten-3" href="https://php.quicoto.com/" target="_blank">Ricard Torres</a>
				<span class="right">Images from <a href="https://earthview.withgoogle.com/" class="white-text" target="_blank">earthview.withgoogle.com</a></span>
			</div>
		</div> <!-- .footer-copyright -->
	</footer>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="assets/js/materialize.min.js"></script>

	<script src="assets/js/scripts.js"></script>
</body>
</html>
