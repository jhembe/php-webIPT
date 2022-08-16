<?php

    $conn = mysqli_connect("localhost","acacia","password","college");

    if($conn === false){
        die("ERROR: could not connect.". mysqli_connect_error());
    }
    else{
        echo "connection successfull";
    }

    mysqli_close($conn);


?>