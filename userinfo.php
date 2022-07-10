<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST["submit"])) {
        // Get Image Dimension
        $fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];

        $allowed_file_extension = array(
            "pdf",
            "doc",
            "docx"
        );

        // Get image file extension
        $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);

        // Validate file input to check if is not empty
        if (!file_exists($_FILES["file-input"]["tmp_name"])) {
            $response = array(
                "type" => "error",
                "message" => "Choose file to upload."
            );
        }    // Validate file input to check if is with valid extension
        else if (!in_array($file_extension, $allowed_file_extension)) {
            $response = array(
                "type" => "error",
                "message" => "Upload valid files. Only Pdf, doc and docx are allowed."
            );
        }    // Validate image file size
        else if (($_FILES["file-input"]["size"] > 2000000)) {
            $response = array(
                "type" => "error",
                "message" => "file size exceeds 2MB"
            );
        }    // Validate image file dimension

    } else {
        $target = "image/" . basename($_FILES["file-input"]["name"]);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
            $response = array(
                "type" => "success",
                "message" => "File uploaded successfully."
            );
        } else {
            $response = array(
                "type" => "error",
                "message" => "Problem in uploading files."
            );
        }
    }

    ?>

    <form action="" method="POST">
        <input type="file" name="file" required>
        <input type="submit" value="submit">
    </form>
</body>

</html>