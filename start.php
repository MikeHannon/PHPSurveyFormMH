<?php
session_start();
?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <title>Main Form Page</title>
  </head>

  <body>
    <main>
      <fieldset>
      <legend>
        My Survey form
      </legend>
      <form class="" action="process.php" method="post">
        <label>
          Name:
        </label>
        <input type="text" name="name">
        </br>
        <label>
          Favorite Language:
        </label>
        <select class="" name="language">
          <option value="javascript">JavaScript</option>
          <option value="PHP">PHP</option>
          <option value="ruby">Ruby</option>
          <option value="python">Python</option>
          <option value="swift">Swift</option>
        </select>
        </br>
        <label>
          Dojo Location:
        </label>
        <select class="" name="location">
          <option value="Bellevue">Bellevue</option>
          <option value="SanJose">San Jose</option>
          <option value="Burbank">Burbank</option>
          <option value="Dallas">Dallas</option>
          <option value="DC">Washington DC</option>
        </select>
        </br>
        <label>
          Comment:
        </label>
        <textarea name="comment" rows="8" cols="40"></textarea>
        </br>
        <label>
          You Ready For This:
        </label>
        <input type="submit" value="Submit">
      </form>
      </fieldset>
    </main>
  </body>


  </html>
