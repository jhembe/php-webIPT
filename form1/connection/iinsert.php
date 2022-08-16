<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Status</title>
</head>
<body>
    <div class="container">
            <?php
            $conn = mysqli_connect("localhost","acacia","password","college");

            if($conn === false){    
                die("ERROR: could not connect.". mysqli_connect_error());
            }

            //taking all 5 values  from the form made and storing them in some global variables
            $first_name = $_REQUEST['first_name'];
            $last_name = $_REQUEST['last_name'];
            $gender = $_REQUEST['gender'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];

            // now for the insert statements
            $sql = "INSERT INTO usernew VALUES ('$first_name','$last_name','$gender','$address','$email')";

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
    </div>
</body>
</html>