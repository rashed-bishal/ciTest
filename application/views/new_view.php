<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User View</title>
  </head>
  <body>

    <h2>
<?php

  foreach ($objects as $obj) {

    echo $obj->username."<br>";

  }

 ?>


    </h2>

  </body>
</html>
