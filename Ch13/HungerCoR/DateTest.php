<?php
//date_default_timezone_get();
$tz= 'America/New_York';
date_default_timezone_set($tz);
$now=getdate();
echo $now[month];
echo ", " . $now[mday] . "<br/>";
$ok=($now[mon] == 9 && $now[mday] >=16) && ($now[mon] >= 9 && $now[mday] <=22);
if($ok)
{
	echo "ok";
}else {
	echo "oh crap!";
}
?>