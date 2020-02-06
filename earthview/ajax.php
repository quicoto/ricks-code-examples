<?php

/*
==========================================================================
Configuration
==========================================================================
*/

include('simple_html_dom.php');
$number_of_wallpapers = 4;


/*
==========================================================================
    Where the magic happens
==========================================================================
*/


    // I want 4 wallpapers
    for ($i = 0; $i < $number_of_wallpapers; $i++) {

        // Create DOM from URL or file
        $url = 'https://earthview.withgoogle.com';
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
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img src="<?=$result->thumbUrl?>" alt="<?=$name?>" title="<?=$name?>" />
                </div>
                <div class="card-content">
                    <span class="card-title black-text"><?=$name?></span>
                    <p><a href="<?=$result->mapsLink?>" target="_blank"><?=$result->mapsLink?></a></p>
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
