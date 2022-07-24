<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Degree Radian Converter</title>
</head>
<body>
  <form action="degreeRadianConverter.php" method="post">
    <h1>Converter</h1>
    <label>Amount</label>
    <br>
    <input type="text" name="amount">
    <br>
    <label>Type</label>
    <br>
    <select name="type">
      ftp_mlsd
      <option value="deg-to-rad">Degree to Radian</option>
      <option value="rad-to-deg">Radian to Degree</option>
    </select>
    <br><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
    <br> <br>
  </form>
  <?php 
    $amount = $_POST["amount"];
    $type = $_POST["type"];
    if (is_numeric($amount)) {
      if ($type == "deg-to-rad") {
        $converted = $amount * 3.14 / 180;
        print "$amount degrees = $converted radians";
      } else if ($type == "rad-to-deg") {
        $converted = $amount / 3.14 * 180;
        print "$amount radians = $converted degrees";
      } else {
        print "<h3>Cannot get the type of conversion!</h3>";
      }
    } else if (!empty($amount)) {
      print "<h3>Invalid Input</h3>";
    }
  ?>
</body>
</html>