<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Strings</title>
  </head>
  <body>
    <?php
      $multi = "many";
      echo "<p>Complex projects can be carried out on $multi continents through project management tools.<br> The main floor exhibited three offices which we stocked with $multi secure computers.<br> After all, we were after a villain who had $multi killings to his credit.<br></p>";
      $multi = "multiple";
      echo "<h3>After a reassignment</h3>";
      echo "<p>Complex projects can be carried out on $multi continents through project management tools.<br> The main floor exhibited three offices which we stocked with $multi secure computers.<br> After all, we were after a villain who had $multi killings to his credit.<br></p>";

      // dataTypes
      $string = "A String!";
      $int = 3;
      $float = 3.3;
      $boolean = true;
      $fName = "Lindsay";
      $lName = "Chapin";
      echo $fName." ".$lName;
      echo "<br>";
      echo strtoupper($fName);
      echo "<br>";
      echo strtolower($fName);
      echo "<br>";
      echo strlen($fName);
      echo "<br>";
      echo $fName[0];
      $fName[0] = "Y";
      echo "<br>$fName<br>";
      $fullName = "Lindsay Chapin";
      echo str_replace("Lindsay", "Alex", $fullName);
      echo "<br>";
      echo str_replace("indsay", "N", $fullName);
      echo "<br>";
      echo substr($fullName, 4, 3)
    ?>
  </body>
</html>
