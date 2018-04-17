<?php
$hour = date('H', time());

if( $hour > 6 && $hour <= 11) {
  $greeting = "Good Morning ";
}
else if($hour > 11 && $hour <= 16) {
  $greeting = "Good Afternoon ";
}
else if($hour > 16 && $hour <= 23) {
  $greeting = "Good Evening ";
}
else {
  $greeting = "Hello ";
}
?>
