<?php
	/*
	==========================================================================
	Configuration
	==========================================================================
	*/

	include('simple_html_dom.php');
	$number_of_wallpapers = 4;

?>
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
                <div class="row">
					<?php

						// I want 4 wallpapers
						for ($i = 0; $i < $number_of_wallpapers; $i++) {

							// Create DOM from URL or file
							$url = 'http://earthview.withgoogle.com';
							if(isset($next_url)){
								$url .= $next_url;
							}

						    $html = file_get_html($url);

						    $data_photo = strval($html->find('body')[0]->attr['data-photo']);

						    $data_photo = html_entity_decode($data_photo);

						    $result = json_decode( trim($data_photo) );
						    //
						    // switch (json_last_error()) {
						    //     case JSON_ERROR_NONE:
						    //         echo ' - No errors';
						    //     break;
						    //     case JSON_ERROR_DEPTH:
						    //         echo ' - Maximum stack depth exceeded';
						    //     break;
						    //     case JSON_ERROR_STATE_MISMATCH:
						    //         echo ' - Underflow or the modes mismatch';
						    //     break;
						    //     case JSON_ERROR_CTRL_CHAR:
						    //         echo ' - Unexpected control character found';
						    //     break;
						    //     case JSON_ERROR_SYNTAX:
						    //         echo ' - Syntax error, malformed JSON';
						    //     break;
						    //     case JSON_ERROR_UTF8:
						    //         echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
						    //     break;
						    //     default:
						    //         echo ' - Unknown error';
						    //     break;
						    // }

						    //var_dump( $result );

							if (!isset($result->region)) {
								$name = $result->country;
							}else{
								$name = $result->region . ", " .$result->country;
							}

							?>
							<div class="col s6">
								<div class="card">
								    <div class="card-image">
								        <img src="<?=$result->thumbUrl?>" alt="<?=$name?>" title="<?=$name?>" />
								    </div>
								    <div class="card-content">
										<span class="card-title black-text"><?=$name?></span>
								        <p><?=$name?> <?=$result->mapsLink?></p>
								    </div>
								    <div class="card-action">
										<a download href="<?=$result->photoUrl?>" class="waves-effect waves-light btn white-text">Download Photo</a>
								    </div>
								</div>
								<!-- .card -->
							</div>
							<!-- .s6 -->
					<?php

						// Check if we want more than 1
						if($number_of_wallpapers > 1){
							$next_url = $result->nextUrl;
						}

						}  // END for
					?>

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
</body>
</html>
