<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess Number</title>
</head>

<body>
    <?php
    if (array_key_exists("number", $_GET) && is_numeric($_GET["number"])) {
        $number = $_GET["number"];
    }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="number">Please enter a number : </label><br>
        <input type="text" name="number" id="number" value="<?php echo $number ?>">
        <input type="submit" value="Submit">
    </form>
    <?php
    print("<br>");
    print("<h2>Result : </h2>");
    if (array_key_exists("number", $_GET)) {
        $randomNumber = rand(0,5);
        $number = $_GET["number"];
        if (!is_numeric($number)) {
            print("You must enter a number . Try again");
        }else{
            print("$randomNumber");
            print("<br>");
            if ($number < $randomNumber) {
                print("Wrong ! Please a higher number ! You have guessed 1 time!");
            } elseif ($number > $randomNumber) {
                print("Wrong ! Please a lower number ! You have guessed 1 time!");
            } else {
                print("Congratulaion!");
            }
        }
    }

    ?>
</body>

</html>