<?php
include "config.php";

//File upload
if((isset($_POST['submit']))){
    $maxsize = 20971520; //20mb in bytes

    if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ""){
        $name = $_FILES['file']['name'];
        $target_dir = "videos/";
        $target_file = $target_dir.$name;

        //file extension
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        //valid file extensions
        $extensions_arr = array("mp4", "avi", "3gp", "mov", "mpeg");

        //check extension
        if(in_array($extension, $extensions_arr)){
            // check file size
            if($_FILES['file']['size'] >= $maxsize){
                $_SESSION['message'] = "File too large. Maximum size is ".$maxsize/(1024**2)." Mb";
            }
            else{
                // Upload video file
                if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
                    //insert record
                    $sql = "INSERT INTO videos(name, location) VALUES ('".$name."', '".$target_file."')";
                    mysqli_query($con, $sql);

                    $_SESSION['message'] = "Video uploaded successfully";
                }
            }
        }
        else{
            $_SESSION['message'] = "Invaid file extension";
        }
    }
    else{
        $_SESSION['message'] = "Please select a file...";
    }

    header("Location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload video</title>
</head>
<body>
    <?php
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>

    <form method="POST" action="" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>