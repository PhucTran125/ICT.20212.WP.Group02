<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Sort</title>
</head>
<body>
<form action="UserSorting.php" method="post">
    <p>
        <input type="radio" name="sort_type" value="sort" checked="checked" />
        Standard sort<br />
        <input type="radio" name="sort_type" value="rsort" /> Reverse sort<br />
        <input type="radio" name="sort_type" value="usort" /> User-defined sort<br />
        <input type="radio" name="sort_type" value="ksort" /> Key sort<br />
        <input type="radio" name="sort_type" value="krsort" /> Reverse key sort<br />
        <input type="radio" name="sort_type" value="uksort" /> User-defined key sort<br
        />
        <input type="radio" name="sort_type" value="asort" /> Value sort<br />
        <input type="radio" name="sort_type" value="arsort" /> Reverse value sort<br />
        <input type="radio" name="sort_type" value="uasort" /> User-defined value
        sort<br />
    </p>
    <p align="center">
        <input type="submit" value="Sort" name="submitted" />
    </p>
</form>
    <?php
    $submitted = $_POST["submitted"];
    $sort_type = $_POST["sort_type"];
    ?>
    <p>
        Values <?= $submitted ? "sorted by $sort_type" : "unsorted"; ?>:
    </p>
    <?php
    function user_sort($a, $b) {
    // smarts is all-important, so sort it first
        if($b == 'smarts') {
            return 1;
        }
        else if($a == 'smarts') {
            return -1;
        }
        return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
    }
    $values = array('name' => 'Buzz Lightyear',
                    'email_address' => 'buzz@starcommand.gal',
                    'age' => 32,
                    'smarts' => 'some');
    if($submitted) {
        if($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
            $sort_type($values, 'user_sort');
        }
    else {
        $sort_type($values);
    }
    // foreach($values as $key=>$value) {
    //     echo "<li><b>$key</b>: $value</li>";
    // }
}
?>
    <ul>
    <?php
        foreach($values as $key=>$value) {
            echo "<li><b>$key</b>: $value</li>";
    }   
    ?>
</ul> 
</body>
</html>