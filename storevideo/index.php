

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload video</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body class="upload">
    <?php
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    <header>
        <nav class="navbar">
          <a href="../index.php">
            <img class="logo" src="assets/logo.png" alt="Tiktok" />
          </a>
          <a href="search.php">
            <div class="search-bar">
              <input
                type="text"
                class="search-input"
                placeholder="Поиск аккаунтов и видео"/>
              <button class="search-btn">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </a>
  
          <div class="nav-right">
            <a href="index.php">
              <button class="upload-btn"><span>&#43;</span>Загрузить</button>
            </a>
            <a href="../login/index.php">
              <button class="login-btn">Войти</button>
            </a>
            <div class="drop-down">
              <i class="fas fa-ellipsis-v fa-lg"></i>
              <div class="menu hidden">
                <ul>
                  <li>
                    <a href="#"><i class="fas fa-font fa-lg"></i> Русский</a>
                  </li>
                  <li>
                    <a href="#"><i class="far fa-question-circle fa-lg"></i>Обратная связь и помощь</a>
                  </li>
                  <li>
                    <a href="#">
                        <i class="far fa-keyboard fa-lg"></i>Горячие клавиши
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </header>

    <div class="upload-main">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class=upload-video>
                <div class="upload-video-left">
                    <div class="select-video">
                        <input class="upload" type="file" id="file" name="file" onchange="previewVideo();">
                    </div>
                    <div class="information-video">
                        <input class="upload" type="text" name="name" placeholder="File name">
                        <select class="upload" name="filter" id="filter" onchange="addFilter();">
                            <option value="none">none</option>
                            <option value="grayscale()">Gray</option>
                            <option value="sepia()">Sepia</option>
                            <option value="invert()">Invert</option>
                        </select>
                    </div>
                </div>
                <div class="preview-send">
                    <video id="preview" width= '336px' height='600px'></video>
                </div>
            </div>
            <input class="upload" type="submit" name="submit" value="Upload">
        </form>
    </div>
    
</body>
<script src="script.js"></script>
</html>

<?php
include "config.php";

//File upload
if((isset($_POST['submit']))){

    $maxsize = 20971520; //20mb in bytes

    if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ""){

        $name = $_POST['name'];
        $target_dir = "videos/";
        $target_file = $target_dir.$name;
        $uname = $_SESSION['username'];
        $file_type = $_FILES['file']['type'];
        $class = $_POST['filter'];

        //file extension
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        //valid file extensions
        $extensions_arr = array("video/mp4", "video/avi", "video/3gp", "video/mov", "video/mpeg");

        //check extension
        if(in_array($file_type, $extensions_arr)){
            // check file size
            if($_FILES['file']['size'] >= $maxsize){
                $_SESSION['message'] = "File too large. Maximum size is ".$maxsize/(1024**2)." Mb";
            }
            else{
                // Upload video file
                if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
                    //insert record
                    $sql = "INSERT INTO videos(name, username, location, class) VALUES ('".$name."', '".$uname."', '".$target_file."', '".$class."')";
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