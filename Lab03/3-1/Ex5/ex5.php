<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ex 5</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
      <?php 
        $name = $_POST["name"];
        $day = $_POST["date-day"];
        $month = $_POST["date-month"];
        $year = $_POST["date-year"];
        $hour = $_POST["time-hour"];
        $minute = $_POST["time-minute"];
        $second = $_POST["time-second"];
        if (empty($name)) {
          $name = "";
          $day = 1;
          $month = 1;
          $year = 1980;
          $hour = 0;
          $minute = 0;
          $second = 0;
        }
       ?>
      Enter your information for the appointent

      <br /><br />

      Your name:
      <?php 
        if (isset($name)) {
          print("<input type=\"text\" name=\"name\" value=\"$name\"/>");
        } else {
          print("<input type=\"text\" name=\"name\" />");
        }
      ?>
      
      <br /><br />

      Date:
      <select name="date-day">
        <?php 
          for ($i=1; $i <= 31; $i++) { 
            if ($i == $day) {
              print("<option selected value=\"$i\">$i</option>");
            } else {
              print("<option value=\"$i\">$i</option>");
            }
          }
        ?>
      </select>
      <select name="date-month">
        <?php 
          for ($i=1; $i <= 12; $i++) { 
            if ($i == $month) {
              print("<option selected value=\"$i\">$i</option>");
            } else {
              print("<option value=\"$i\">$i</option>");
            }
          }
        ?>
      </select>
      <select name="date-year">
        <?php 
          for ($i=1980; $i <= 2100; $i++) { 
            if ($i == $year) {
              print("<option selected value=\"$i\">$i</option>");
            } else {
              print("<option value=\"$i\">$i</option>");
            }
          }
        ?>
      </select>

      <br /><br />

      Time:
      <select name="time-hour">
        <?php 
          for ($i=0; $i <= 24; $i++) { 
            if ($i == $hour) {
              print("<option selected value=\"$i\">$i</option>");
            } else {
              print("<option value=\"$i\">$i</option>");
            }
          }
        ?>
      </select>
      <select name="time-minute">
        <?php 
          for ($i=0; $i < 60; $i++) { 
            if ($i == $minute) {
              print("<option selected value=\"$i\">$i</option>");
            } else {
              print("<option value=\"$i\">$i</option>");
            }
          }
        ?>
      </select>
      <select name="time-second">
        <?php 
          for ($i=0; $i < 60; $i++) { 
            if ($i == $second) {
              print("<option selected value=\"$i\">$i</option>");
            } else {
              print("<option value=\"$i\">$i</option>");
            }
          }
        ?>
      </select>

      <br><br>
      <input type="submit" value="Submit">
      <input type="reset">
    </form>
    <?php 
      if (!empty($name)) {
        print "<br>Hi $name!<br>";
        print "Your appoinment is on $hour:$minute:$second, $day/$month/$year<br><br>";

        print "More information<br>";
        $timeShortDes;
        if($hour == 12) {
          $timeShortDes = "PM";
        } else if ($hour == 24 || $hour == 0) {
          $timeShortDes = "AM";
          $hour = 12;
        } else if ($hour > 12 && $hour < 24) {
          $timeShortDes = "PM";
          $hour -= 12;
        } else {
          $timeShortDes = "AM";
        }
        print "In 12-hour format, the time and date is $hour:$minute:$second $timeShortDes, $day/$month/$year<br>";

        $numday = 0;
        switch ($month) {
          case 1:
          case 3:
          case 5:
          case 7:
          case 8:
          case 10:
          case 12:
            $numday = 31;
            break;
          case 2:
            if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
              $numday = 29;
            } else { 
              $numday = 28;
            }
            break;
          default: 
            $numday = 30;
        }
        print "This month has $numday days!";
      }
     ?>
  </body>
</html>
