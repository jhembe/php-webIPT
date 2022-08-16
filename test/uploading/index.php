<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <p>Create your post : </p>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>Select image to upload:</p>
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <input type="submit" value="Upload Image" name="submit"><br>
        <label for="caption">Place your caption</label><br>
        <input type="text" name="caption" id="caption">
    </form>
    </div>
</body>
</html>