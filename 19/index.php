<!DOCTYPE html>
<html lang="en">
<head>
<title>Example 19 | Ricard Torres Code</title>
<link rel="author" href="https://google.com/+RicardTorres"/>
<meta charset="utf-8">

<!--  Mobile viewport scale | Disable user zooming as the layout is optimised -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<style>

   *{
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	::selection {
		background: #3498db;
		color: white;
		text-shadow: none;
	}


	html{
		font-size:16px;
	}
	body{
		font-size: 1rem;
		font-weight: 300;
		font-family: 'Open Sans', sans-serif;
	    background: #3498db;
	    color: white;
        overflow-y: scroll;
	}

     h1, h2, h3, h4, h5{
           font-weight: 300;
     }

     a{
	    color: #2c3e50;
     }

</style>

</head>

  <body>
<?php

function generatePassword($length=9, $strength=0) {
	$vowels = 'aeuy';
	$consonants = 'bdghjmnpqrstvz';
	if ($strength & 1) {
		$consonants .= 'BDGHJLMNPQRSTVWXZ';
	}
	if ($strength & 2) {
		$vowels .= "AEUY";
	}
	if ($strength & 4) {
		$consonants .= '23456789';
	}
	if ($strength & 8) {
		$consonants .= '@#$%';
	}

	$password = '';
	$alt = time() % 2;
	for ($i = 0; $i < $length; $i++) {
		if ($alt == 1) {
			$password .= $consonants[(rand() % strlen($consonants))];
			$alt = 0;
		} else {
			$password .= $vowels[(rand() % strlen($vowels))];
			$alt = 1;
		}
	}
	return $password;
}

?>

<h1 style="padding:20px;"><?=generatePassword(9,8)?></h1>

   <p>
   	<a href="https://ricard.dev/php-random-password-generator/">Back to the Article</a> | <a href="https://github.com/quicoto/ricks-code-examples/tree/master/19">Fork me on Github</a>
   </p>
</body>
</html>
