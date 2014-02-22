 <?php 

date_default_timezone_set("America/Chicago");

$b = time ();



print date("l, F jS Y",$b) . "\n"; 
echo(" Stardate: ") . date(" ym.d",$b);

?> 
