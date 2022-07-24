<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square and Cube</title>
    <style>
        td {
            padding: 8px;
        }
    </style>
</head>

<body>
    <font size="4" style="color: blue;">Generate Square and Cube value : </font>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <?php
        if (array_key_exists("start", $_GET)) {
            $start = $_GET["start"];
            $end = $_GET["end"];
        } else {
            $start = 1;
            $end = 1;
        }
        ?>
        <table>
            <tr>
                <td><label for="start">Select Start Number : </label></td>
                <td><select name="start" id="start">
                        <?php
                        for ($i = 0; $i <= 10; $i++) {
                            if($i == $start){
                                print("<option selected>$i</option>");
                            }else{
                                print("<option>$i</option>");
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="end">Select Start Number : </label></td>
                <td><select name="end" id="end">
                        <?php
                        for ($i = 0; $i <= 20; $i++) {
                            if($i == $end){
                                print("<option selected>$i</option>");
                            }else{
                                print("<option>$i</option>");
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><input type="submit" value="Submit"></td>
                <td align="left"><input type="reset" value="Reset"></td>
            </tr>
        </table>
        <hr>
        <h2>Result</h2>
        <table>
            <?php
            if (array_key_exists("start", $_GET)) {
                print("<tr>
                        <th>Number</th>
                        <th>Square</th>
                        <th>Cube</th>
                    </tr>");
                $i = $start;
                while ($i <= $end) {
                    $sqr = $i * $i;
                    $cubed = $i * $i * $i;
                    print("
                        <tr>
                            <td>$i</td>
                            <td>$sqr</td>
                            <td>$cubed</td>
                        </tr>
                    ");
                    $i++;
                }
            }
            ?>
        </table>
    </form>
</body>

</html>