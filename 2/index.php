 <script src="http://static.ak.connect.facebook.com/connect.php/es_ES" type="text/javascript"></script>
 <script type="text/javascript">FB.init("422f5e9b62c226c9117cbec482741cf2");</script>
<div style="width: 100%" align="center"><?
include "api/facebook.php";
$facebook = new Facebook('422f5e9b62c226c9117cbec482741cf2','b275092c123d332acf87b4ffad7499a1');

$cont = 20; // show 10 message
$page_id = 101400334581; //ID Page fan
$stream = $facebook->api_client->stream_get('',$page_id,'0','0',$cont+1,'','','','','','');

	for($i=0; $i<=$cont;$i++){
	echo "<div style='border:1px solid #000000; width: 400px' align='left'>";
		echo '<fb:profile-pic uid="'.$stream[posts][$i][actor_id].'" size="thumb" facebook-logo="false"></fb:profile-pic>'; //picture
		echo '<fb:name uid="'.$stream[posts][$i][actor_id].'" useyou="false" linked="false" possessive="true" /></fb:name>'; //Name
		echo '<br>';
		echo utf8_decode($stream[posts][$i][message]); //message
		echo '<br>';
		echo date("d/m/y",$stream[posts][$i][created_time]); //time post
	echo "</div><br>";
	}

?>
</div>


<p>
	<a href="https://github.com/quicoto/ricks-code-examples/tree/master/2">Fork me on Github</a>
</p>
