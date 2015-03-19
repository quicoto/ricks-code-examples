<!DOCTYPE html>
<html lang="en">
<head>
<title>Example 19 | Rick's code</title>
<link rel="author" href="http://google.com/+RicardTorres"/>
<meta charset="utf-8">
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
   <div style="padding-top:50px;"><a href="http://php.quicoto.com/php-random-password-generator/">Go back and leave a comment</a></div>
</body>
</html>

