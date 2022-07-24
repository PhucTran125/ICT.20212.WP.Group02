<?php
    $sure = $_POST['sure'];
    if($sure =='no'){
        echo 'Warning : You don\'t sure about your answer';
    }else{
        echo '<h2>Information</h2>';
        $name = $_POST['name'];
        echo "Name : $name"."<br>";
        $id = $_POST['id'];
        echo "ID : $id"."<br>";
        $class = $_POST['class'];
        echo "Class : $class"."<br>";
        $university = $_POST['university'];
        echo "University : $university"."<br>";
        $hobby = $_POST['hobby'];
        echo "Hobby : ";
        foreach($hobby as $value){
            echo "$value ";
        }
    }
?>