<pre><?

set_time_limit(0);

//for ($i = 1; $i <= 2; $i++) {
    //printf("%2s", (string)$i);
    if ($pf = fopen("http://steamcommunity.com/id/will-smith", "r")) {
        while (!feof($pf)) {
            $get = fgets($pf);
			 if (preg_match('/class="avatarIcon"><a href="http://store.steampowered.com/app/10>(.*)<.div>/', $get, $match, PREG_OFFSET_CAPTURE)) {
			 //$match[] = $match; 
			 print_r($match);
			 //print($match[0]);
			 }
            //if (preg_match('/class="mostPlayedSmallText">(.*)<.span>/', $get, $match, PREG_OFFSET_CAPTURE))   print($match[1]."<br>");  //printf(" %s", $match[1]);
            //if (preg_match('/class="fcccccc">(.*)&#169;(.*)<.font><.td>/', $get, $match))    printf(" - %s", $match[1]);
        }
        fclose($pf);
    }
    else printf(" Error...!");

    printf("\n");
    flush();
//}

?></pre>