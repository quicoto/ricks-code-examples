<?
function demo($value){
	return $value;
}

echo demo("Demo function in PHP");
echo "<br>";
function demo2($value,$color = "green"){
	
		$value = "<font color=".$color.">".$value."</font>";
	
	return $value;
}
echo demo2("Demo function in PHP");
?>