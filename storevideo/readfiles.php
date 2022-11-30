<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
        $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $name = $row['name'];
            $location = $row['location'];
            $filter = $row['class'];

            echo "<div style='float: left; margin-right: 5px;'>
                <video src='".$location."' controls width= '336px' height='600px' style='filter:".$filter."' ></video> <br>
                <span>".$name."</span> <br>
                <a href='".$location."' download='".$name."'>Download</a>
            </div>";
        }
        ?>
    </div>
</body>
</html>