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
            //for the sql query
            $sql = "SELECT * FROM `staff`";
            echo "selected the staff values <br>";
            // fetching data from the database
            $results = mysqli_query($conn,$sql);
            echo "saved the staff valuues <br>";

            if(mysqli_num_rows($results)>0){
                //output data from each row
                echo "if statement started <br>";
                while($row = mysqli_fetch_assoc($result)){

                    echo "First Name : ". $row['first_name']."<br>";
                }
            }
            else{
                echo "0 results found";
            }

            mysqli_close($conn);

        ?>
    </div>
</body>
</html>