<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coin Flip</title>
</head>

<body>
    <font size="4" style="color:blue;">Please Pick Heads or Tails</font>
    <form method="POST" action="GotFlip.php">
        <?php
        print("<input type=\"radio\" name=\"pick\" value=0 > Heads");
        print("<input type=\"radio\" name=\"pick\" value=1 > Tails");
        print("<br><br>");
        ?>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>

</html>