<?php

  if ($content = @fopen('http://192.168.1.3/', 'r')) {
    @fpassthru($content);
    return;
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Hackafe</title>
  <style>
    /** {
      width: 100%;
      height: 100%;
      overflow: hidden;
    }
    form, form * { display: none; }
    iframe {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      height: 0;
      width: 100%;
      height: 100%;
    }*/
  </style>
</head>
<body>
  <h1>Welcome to Hackafe <small>Plovdiv's hackerspace</small></h1>

  <form method="post" action="$PORTAL_ACTION$">
     <input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$">
     <input name="accept" type="submit" value="Continue">
  </form>

</body>
</html>
