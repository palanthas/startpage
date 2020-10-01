<?php

include 'scripts/time.php';
include 'scripts/weather.php';

$name = "Michael";

$out = '
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base target="_blank" />
</head>

<body>

<center><div class="title">Start Page</div>

<br>
<div class="container">
  <form method="get" action="https://google.com/search" target="_blank">
    <div class="row">
      <div class="search-75">
        <input type="text" id="search" name="q" autofocus autocomplete="off" placeholder="Search...">
      </div>
    </div>

    <div class="row">
      <input type="submit" value="Search">
    </div>
  </form>
</div>
<br><br>

<div class="parent">
  <div class="child">
  <br>'.$greeting.$name.'.
  The current temperature is '.$temp.' degrees fahrenheit.
  </div>
</div>

<div class="icon_tray">
  <a href="https://www.reddit.com"><img class="icon" src="./images/reddit.svg"></a>
  <a href="https://www.facebook.com"><img class="icon" src="./images/facebook.svg"></a>
  <a href="https://www.youtube.com"><img class="icon" src="./images/youtube.svg"></a>
  <a href="https://www.amazon.com"><img class="icon" src="./images/amazon.svg"></a>
  <a href="https://play.spotify.com"><img class="icon" src="./images/spotify.svg"></a>
  <a href="https://www.github.com"><img class="icon" src="./images/github.svg"></a>
  <a href="https://www.wunderground.com"><img class="icon" src="./images/wunderground.svg"></a>
</div>

</center>

<div class="bottom_gradient">
  <div class="quote">
Isiah 40:31b<br />
but those who hope in the Lord<br />
will renew their strength.<br />
They will soar on wings like eagles;<br />
they will run and not grow weary,<br />
they will walk and not be faint.
  </div>

  <div class="unsplash">
  Backgrounds from <a href="https://unsplash.com">Unsplash.com</a>
  </div>
</div>

</body>
</html>
';

echo $out;

?>
