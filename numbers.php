<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Numbers</title>
  </head>
  <body>
    <h3>Basic Number Types</h3>
    <?php
      echo 30;
      echo "<br>";
      echo 30.9;
      echo "<br>";
      echo 5+9;
      echo "<br>";
      echo 5.5+9;
      echo "<br>";
      echo 10%3;
      echo "<br>";
      $num = 9;
      echo $num;
      echo "<br>";
      $num++;
      echo $num;
      echo "<br>";
      echo $num+=5;
    ?>
    <h3>Functions</h3>
    <?php
      echo abs(-30);
      echo "<br>";
      echo pow(30, 9);
      echo "<br>";
      echo sqrt(64);
      echo "<br>";
      echo max(2, 10, 13, 6);
      echo "<br>";
      echo min(2, 10, 13, 6);
      echo "<br>";
      echo round(4.6);
      echo "<br>";
      echo ceil(2.6);
      echo "<br>";
      echo floor(2.6);
    ?>
  </body>
</html>
