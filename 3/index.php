<?
include "language.es.php";
include "time.php";

echo $day_a[$day] . ", " . date("d",time()) ." " . $month_a[$month] . " " . $year;
?>