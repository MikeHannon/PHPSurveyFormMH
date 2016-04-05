<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Result</title>
  </head>
  <body>
    <h3> name: <?= $_SESSION['myPost']['name']; ?> </h3>
    <h3> favorite language: <?= $_SESSION['myPost']['language']; ?> </h3>
    <h3> location: <?= $_SESSION['myPost']['location']; ?> </h3>
    <h3> comment: <?= $_SESSION['myPost']['comment']; ?> </h3>
  </body>
  <a href = 'start.php'>return home</a>
</html>
