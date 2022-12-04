<?php

    $host = 'localhost';
    $user = 'ptj';
    $pw = '1234';
    $dbName = 'test3';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM tb1"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $country = $row['country'];
        $zip = $row['zip'];
        $status = $row['status'];
        $password = $row['password'];
        
        
    }

    $myObj = new stdClass();

    $myObj->firstname = $firstname;
    $myObj->lastname = $lastname;
    $myObj->email = $email;
    $myObj->country = $country;
    $myObj->zip = $zip;
    $myObj->status = $status;
    $myObj->password = $password;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>