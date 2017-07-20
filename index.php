<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>File Upload Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <h1>Upload A File</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="filesource">File Name :</label>
            <input type="file" name="image" id="filesource">
            <input type="submit" name="submit" value="Upload">
            <P><strong>Note : </strong> Only .jpg, .JPG, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</P>
        </form>
    </body>
</html>