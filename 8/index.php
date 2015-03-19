<html>
<head>
  <title>Metadata: EXIF</title>
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load("language", "1");
  </script>
</head>

<body onload="translate()"><?php

function extrae_exif($imagen) {


    if (empty($imagen) || !file_exists($imagen) || !($exif = exif_read_data($imagen, 0, true)))
     if(!$exif){
     	echo "Image no contains headers<br />\n";
     	return false;
     }
      $FL = explode("/",$exif['EXIF']['FocalLength']);
    $datos['Nombre']                         = $exif['FILE']['FileName'];
    $datos['Tipo']                           = $exif['FILE']['MimeType'];
    $datos['Resoluci�n']                     = $exif['COMPUTED']['Width'] . 'x' . $exif['COMPUTED']['Height'];
    $datos['Modelo de c�mara']          	 = $exif['IFD0']['Model'];
    $datos['Tiempo de exposici�n']     		 = $exif['EXIF']['ExposureTime'] . ' seg';
    $datos['Valor de apertura']           	 = $exif['COMPUTED']['ApertureFNumber'];
    $datos['Velocidad ISO']                	 = $exif['EXIF']['ISOSpeedRatings'];
    $datos['Longitud focal']                 = $FL[0]/$FL[1] . 'mm';
        foreach ($datos as $key => $value)
        $res[] = "<strong>{$key} :</strong> {$value}.<br />";
    return implode($res);
}
$file = "./img/imagen.jpg";
echo '<div id="text" style="visibility: hidden; position:absolute;">'.extrae_exif($file).'</div> <div id="result"></div>';
echo '<img src="'.$file.'">';
?>



<script type="text/javascript">
function translate()
{
  // obtenemos el texto y los idiomas origen y destino
  var text    = document.getElementById("text").innerHTML; // captura de texto
  var srcLang = "es"; //detecta idioma sino especificar que idioma hay que traducir
  var dstLang = "en"; //idioma al que sera traducido

  // llamada al traductor
  google.language.translate(text, srcLang, dstLang, function(result)
    {
      if (!result.error)
      {
        var resultado = document.getElementById("result");
        resultado.innerHTML = result.translation;
      }
      else alert(result.error.message);
    }
  );
}
</script>


<div>
	<a href="https://github.com/quicoto/ricks-code-examples/tree/master/8">Fork me on Github</a>
</div>

</body>

</html>
