<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coin Flip Results</title>
</head>
<body>
    <?php 
        srand((double) microtime() * 10000000);
        $flip = rand(0,1);
        $pick = $_POST["pick"];
        if($flip == 0 && $pick == 0){
            print("The flip = $flip , which is heads <br> ");
            print('<font color="blue">You got it right !</font>');
        }elseif($flip == 0 && $pick == 1){
            print("The flip = $flip , which is heads <br> ");
            print('<font color="red">You got it wrong !</font>');
        }elseif($flip == 1 && $pick == 1){
            print("The flip = $flip , which is tails <br> ");
            print('<font color="blue">You got it right !</font>');
        }elseif($flip == 1 && $pick == 0){
            print("The flip = $flip , which is tails <br> ");
            print('<font color="red">You got it wrong !</font>');
        }else{
            print("Illegal state error.");
        }
    ?>
</body>
</html>