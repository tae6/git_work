<?php

    $host = 'localhost';
    $user = 'ptj';
    $pw = '1234';
    $dbName = 'test3';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM board"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

       
        $title = $row['title'];
        $script = $row['script'];
        
        
    }

    $myObj = new stdClass();

    
    
    $myObj->title = $title;
    $myObj->script = $script;

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>