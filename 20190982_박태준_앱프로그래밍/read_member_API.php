<?php

    $host = 'localhost';
    $user = 'ptj';
    $pw = '1234';
    $dbName = 'test3';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM member"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $member_name = $row['member_name'];
        $member_email = $row['member_email'];
        $member_pw_1 = $row['member_pw_1'];
        
        
    }

    $myObj = new stdClass();

    
    $myObj->member_name = $member_name;
    $myObj->member_email = $member_email;
    $myObj->member_pw_1 = $member_pw_1;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>