<?php
include "storevideo/config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TikTok</title>
    <script
      src="https://kit.fontawesome.com/1a015cf62c.js"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <a href="index.php">
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
          <a href="storevideo/index.php">
            <button class="upload-btn"><span>&#43;</span>Загрузить</button>
          </a>
          <a href="login/index.php">
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
                  <a href="#"
                    ><i class="far fa-keyboard fa-lg"></i>Горячие клавиши</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
        <div class="left">
          <div class="fix">

            <div class="btns">
                <a href="index.php"><i class="fas fa-home"></i> <span>Рекомендуем</span></a>
                <a href="following.php"><i class="fas fa-user-friends"></i> <span>Подписки</span></a>
                <a href="messages.php"><i class="fas fa-message"></i> <span>Сообщения</span></a>
                <a href="notifications.php"><i class="fas fa-message"></i> <span>Уведомления</span></a>
              </div>
            <div class="login">
                <p>Войдите, чтобы подписываться на авторов, ставить лайки видео и читать комментарии.</p>
                <button>Войти</button>
            </div>
            <div class="accounts">
                <p>Рекомендуемые аккаунты</p>
                <div class="user">
                  <img src="assets/Homyak.jpeg" alt="avatar">
                    <h6 class="username"><a href="accounts/homyak.php">homm9k</a></h6>
                </div>
                <div class="user">
                    <img src="assets/oksukpaeva_k.jpeg" alt="avatar">
                    <h6 class="username">oksukpaeva_k</h6>
                </div>
                <div class="user">
                    <img src="assets/zhekafatbelly01.jpeg" alt="avatar">
                    <h6 class="username">zheka_fatbellyy</h6>
                </div>
                <div class="user">
                    <img src="assets/justking_real.jpeg" alt="avatar">
                    <h6 class="username">justking_real</h6>
                </div>
            </div>
            <div class="tags">
                <p>Хэштеги</p>
                <div>
                  <a href="#">dance</a>
                  <a href="#">atp500</a>
                  <a href="#">k-pop</a>
                  <a href="#">bmw</a>
                  <a href="#">tayota</a>
                  <a href="#">zheka</a>
                  <a href="#">mukbang</a>
                  <a href="#">csgo</a>
                  <a href="#">BlackLivesMatter</a>
                </div>
            </div>
            <div class="links">
              <div>
                  <div class="link">
                      <a href="#">Информация</a>
                      <a href="#">Новости</a>
                      <a href="#">Контакт</a>
                      <a href="#">Род занятий</a>
                      <a href="#">ByteDance</a>
                      <a href="#">Реклама</a>
                      <a href="#">Помощь</a>
                      <a href="#">Безопасность</a>
                      <a href="#">Условия</a>
                      <a href="#">Конфиденциальность</a>
                  </div>
                  <div class="copyright">
                      <h6>&copy; 2022 TikTok</h6>
                  </div>
              </div>
          </div>
          </div>
        </div>

        <div class="right">
        <?php
        $username = $_SESSION['username'];
        $fetchVideos = mysqli_query($con, "SELECT * FROM videos WHERE username != '".$username."' ORDER BY id DESC ");
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $name = $row['name'];
            $location = $row['location'];

            echo "<div style='float: left; margin-right: 5px;'>
                <video src='storevideo/".$location."' controls width= '320px' height='320px' ></video> <br>
                <span>".$name."</span> <br>
                <a href='storevideo/".$location."' download='".$name."'>Download</a>
            </div>";
        }
        ?>
            
        </div>
    </main>
  </body>
</html>
