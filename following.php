<?php

include "storevideo/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
</head>
<body>
    <div>
        <?php
        $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $name = $row['name'];
            $location = $row['location'];

            echo "<div style='float: left; margin-right: 5px;'>
                <video src='storevideo/".$location."' controls width= '320px' height='320px' ></video> <br>
                <span>".$name."</span> <br>
                <a href='".$location."' download='".$name."'>Download</a>
            </div>";
        }
        ?>
    </div>
</body>
</html>