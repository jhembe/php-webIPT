<?php
    $conn = mysqli_connect("localhost","acacia","password","college");


    if(mysqli_connect_errno()){
        die("connection error: ". mysqli_connect_error());
    }

    echo "connection succesfull";

    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $gender = $_REQUEST['gender'];
    $useraddress = $_REQUEST['useraddress'];
    $email = $_REQUEST['email'];


    $sql = "INSERT INTO user (first_name,last_name,gender,useraddress,email)
            VALUES ($first_name,$last_name,$gender,$useraddress,$email)";

    if(mysqli_query($conn,$sql)){
        echo "<h3>Data stored in the database succesfully 👍</h3><br>".
            "Please navigate into your localhost and make sure all data is stored <br><br>";
        
        echo nl2br("\n$first_name\n$last_name\n$gender\n$address\n$email");
    }
    else{
        echo "ERROR: Hush! sorry $sql. ". mysqli_error($conn);
    }


    //close connection
    mysqli_close($conn)


?>