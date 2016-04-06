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
  <?php
  //Formatting wasn't aligned, redid it w/ function to look a bit nicer.  Also added ucwords to fix some words that weren't capitalized for some reason.
  function formatter($newstring)
  {
    $i = strlen($newstring);
    $returnstring = $newstring;
    while($i < 25)
    {
      $returnstring .= "&nbsp";
      ++$i;
    }
    $returnstring = "<h3 style='font-family:monospace;'>" . $returnstring;
    return $returnstring;
  }
  echo (formatter(' Name: ') . ucwords($_SESSION['myPost']['name']) . '</h3>');
  echo (formatter(' Favorite Language: ') . ucwords($_SESSION['myPost']['language']) . '</h3>');
  echo (formatter(' Location: ') . ucwords($_SESSION['myPost']['location']) . '</h3>');
  echo (formatter(' Comment: ') . ucwords($_SESSION['myPost']['comment']) . '</h3>');
  ?>
<!--     <h3> name: <?= $_SESSION['myPost']['name']; ?> </h3>
    <h3> favorite language: <?= $_SESSION['myPost']['language']; ?> </h3>
    <h3> location: <?= $_SESSION['myPost']['location']; ?> </h3>
    <h3> comment: <?= $_SESSION['myPost']['comment']; ?> </h3> -->
  </body>
  <a href = 'start.php'>Return Home</a>
</html>
