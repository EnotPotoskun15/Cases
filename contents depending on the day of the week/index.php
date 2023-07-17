<div style="font-size:15px; display:inline;">
<?php
$n = date("w", mktime(0,0,0,date("m"),date("d"),date("Y")));

if (($n == '0') || ($n == '6')) {
  echo "9:00 - 23:00";
}else{
  echo "8:30 - 23:00";
}
?>
</div>
