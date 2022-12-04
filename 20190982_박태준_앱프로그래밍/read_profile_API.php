<?php

    $host = 'localhost';
    $user = 'ptj';
    $pw = '1234';
    $dbName = 'test3';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM profile"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $name = $row['name'];
        $age = $row['age'];
        $sex = $row['sex'];
        $height = $row['height'];
        $acting = $row['acting'];
        
    }

    $myObj = new stdClass();

    
    $myObj->name = $name;
    $myObj->age = $age;
    $myObj->sex = $sex;
    $myObj->height = $height;
    $myObj->acting = $acting;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>