<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="insert.php" method="post">
            <table>
                <tr>
                    <td><label for="firstName">First Name</label></td>
                    <td><input type="text" name="first_name" id="firstName"></td>
                </tr>
                <tr>
                    <td><label for="lastName">Last Name</label></td>
                    <td><input type="text" name="last_name" id="lastName"></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender</label></td>
                    <td><input type="text" name="gender" id="gender"></td>
                </tr>
                <tr>
                    <td><label for="address">Address</label></td>
                    <td><input type="text" name="useraddress" id="useraddress"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="text" name="email" id="email">
                <tr>
            </table>
            
            <button type="submit" value="submit" id="submit-btn">Submit</button>

        </form>
    </div>
</body>
</html>