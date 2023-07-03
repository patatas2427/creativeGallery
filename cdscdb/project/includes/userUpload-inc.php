<?php

require_once 'dbh-inc.php';

if (isset($_POST['submit'])) {
    $name = $_POST['title'];
    $description = $_POST['desc'];

    if ($_FILES['image']['error'] === 4) {
        echo "<script> alert('Please upload a file first')</script>";
    } else {
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $tmpName = $_FILES['image']['tmp_name'];

        $validFileType = array('jpg', 'jpeg', 'png');
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        //validation
        if (!in_array($imageExtension, $validFileType)) {
            echo "<script> alert('Invalid file type')</script>";
        } else if ($fileSize > 1000000) {
            echo "<script> alert('Your file size is to large')</script>";
        } else {
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            session_start();
            $userName = $_SESSION['useruid'];
            $query = "INSERT INTO uploads (userId, title, description, image) 
            VALUES ('$userName', '$name', '$description', '$newImageName')";
            move_uploaded_file($tmpName, 'images/' . $newImageName);
            mysqli_query($conn, $query);
            echo "<script> alert('succesfully uploaded');
            document.location.href='/cdscdb/project/userProfile.php'; </script>";
        }
    }
}
