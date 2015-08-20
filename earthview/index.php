<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--  Mobile viewport scale | Disable user zooming as the layout is optimised -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Earthview Photo Downloader - Rick's Code</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <!-- Custom -->
    <link rel="stylesheet" href="css/styles.css" media="screen" charset="utf-8">
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper teal">
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <a href="#" class="brand-logo">Earthview Photo Downloader</a>
							<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                            <ul id="nav-mobile" class="right hide-on-med-and-down">
                                <li><a href="https://github.com/quicoto/ricks-code-examples/tree/master/earthview"><i class="mdi-content-link left"></i>Fork me on Github</a></li>
                            </ul>
							<ul class="side-nav" id="mobile-demo">
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
					<div class="progress">
						<div class="indeterminate"></div>
					</div>
					<!-- .progress -->
                </div>
				<!-- .row -->
			</article>
		</section>
	</main>

	<footer class="page-footer teal">
		<div class="footer-copyright">
			<div class="container">
				<a class="grey-text text-lighten-3" href="http://php.quicoto.com/" target="_blank">Ricard Torres</a>
			</div>
		</div> <!-- .footer-copyright -->
	</footer>

	<script src="js/scripts.js"></script>
</body>
</html>
