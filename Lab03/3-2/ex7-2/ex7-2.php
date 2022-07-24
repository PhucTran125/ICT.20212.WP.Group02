<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ex 7-2</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
      <?php 
        $name1 = $_POST["name1"];
        $day1 = $_POST["day1"];
        $month1 = $_POST["month1"];
        $year1 = $_POST["year1"];
        $name2 = $_POST["name2"];
        $day2 = $_POST["day2"];
        $month2 = $_POST["month2"];
        $year2 = $_POST["year2"];
        if (empty($name1) && empty($name2)) {
          $name1 = "";
          $day1 = 1;
          $month1 = 1;
          $year1 = 1980;
          $name2 = "";
          $day2 = 1;
          $month2 = 1;
          $year2 = 1980;
        }
       ?>
      <!-- First person -->
      <h3>First person</h3>

      <label>Name</label>
      <?php 
        if (isset($name1)) {
          print("<input type=\"text\" name=\"name1\" value=\"$name1\"/>");
        } else {
          print("<input type=\"text\" name=\"name1\" />");
        }
      ?>
      
      <br /><br />

      <label>Birthday</label>
      <select name="day1">
        <?php 
          for ($i=1; $i <= 31; $i++) { 
            if ($i == $day1) {
              print("<option selected value=\"$i\">$i</option>");
            } else {
              print("<option value=\"$i\">$i</option>");
            }
          }
        ?>
      </select>
      <select name="month1">
        <?php 
          for ($i=1; $i <= 12; $i++) { 
            if ($i == $month1) {
              print("<option selected value=\"$i\">$i</option>");
            } else {
              print("<option value=\"$i\">$i</option>");
            }
          }
        ?>
      </select>
      <select name="year1">
        <?php 
          for ($i=1980; $i <= 2022; $i++) { 
            if ($i == $year1) {
              print("<option selected value=\"$i\">$i</option>");
            } else {
              print("<option value=\"$i\">$i</option>");
            }
          }
        ?>
      </select>

      <br /><br />
      
      <!-- Second Person -->
      <h3>Second person</h3>

      <label>Name</label>
      <?php 
        if (isset($name2)) {
          print("<input type=\"text\" name=\"name2\" value=\"$name2\"/>");
        } else {
          print("<input type=\"text\" name=\"name2\" />");
        }
      ?>
      
      <br /><br />

      <label>Birthday</label>
      <select name="day2">
        <?php 
          for ($i=1; $i <= 31; $i++) { 
            if ($i == $day2) {
              print("<option selected value=\"$i\">$i</option>");
            } else {
              print("<option value=\"$i\">$i</option>");
            }
          }
        ?>
      </select>
      <select name="month2">
        <?php 
          for ($i=1; $i <= 12; $i++) { 
            if ($i == $month2) {
              print("<option selected value=\"$i\">$i</option>");
            } else {
              print("<option value=\"$i\">$i</option>");
            }
          }
        ?>
      </select>
      <select name="year2">
        <?php 
          for ($i=1980; $i <= 2022; $i++) { 
            if ($i == $year2) {
              print("<option selected value=\"$i\">$i</option>");
            } else {
              print("<option value=\"$i\">$i</option>");
            }
          }
        ?>
      </select>

      <br><br>
      <input type="submit" value="Submit">
      <input type="reset" value="Value">
      <br><br>
    </form>
    <?php 
      // Validate input
      if (empty($name1) || empty($name2)) {
        print "<h3>You must entered all fields</h3>";
      } else {
        print "<h3>Result</h3>";
        print "<ul>";
        // First person birthday
        $birthday1 = new DateTime();
        $birthday1->setDate($year1, $month1, $day1);
        print "<li>";
        print $name1. "'s birthday: ". $birthday1->format("l, F m, Y"). "<br>";

        // Second person birthday
        $birthday2 = new DateTime();
        $birthday2->setDate($year2, $month2, $day2);  
        print $name2. "'s birthday: ". $birthday2->format("l, F m, Y"). "<br>";
        print "</li>";

        // Calculate days
        print "<li>";
        $diff = $birthday1->diff($birthday2);
        print "Different between 2 birthdays: ". $diff->format("%a days<br>");
        print "</li>";

        // Calculate ages
        print "<li>";
        $now = new DateTime("now");
        $age1 = $now->diff($birthday1)->format("%y");
        $age2 = $now->diff($birthday2)->format("%y");
        $diffAge = $age1 - $age2 > 0 ? $age1 - $age2 : $age2 - $age1;
        print $name1. "'s age: $age1<br>";
        print $name2. "'s age: $age2<br>";
        print "Different between 2 ages: $diffAge years<br>";
        print "</li>";
        print "</ul>";
      }
     ?>
  </body>
</html>
