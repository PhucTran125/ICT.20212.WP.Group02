<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form4Radio</title>
</head>
<body>
    <h2>Thank you : Got your result</h2>
    <?php
        $email = $_GET["email"];
        $contact = $_GET['contact'];
        print "<br>Your email address : $email";
        print "<br>Contact preference : $contact";
    ?>
</body>
</html>