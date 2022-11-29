<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>TikTok</title>
    <script
      src="https://kit.fontawesome.com/1a015cf62c.js"
      crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <a href="index.html"><img class="logo" src="assets/logo.png" alt="Tiktok" /></a>
        <a href="search.html">
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
          <a href="upload.html">
            <button class="upload-btn"><span>&#43;</span>Загрузить</button>
          </a>
          <a href="login.html">
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
                    ><i class="far fa-keyboard fa-lg"></i>Горячие клавиши</a>
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
                <a href="index.html"><i class="fas fa-home"></i> <span>Рекомендуем</span></a>
                <a href="following.html"><i class="fas fa-user-friends"></i> <span>Подписки</span></a>
                <a href="messages.html"><i class="fas fa-message"></i> <span>Сообщения</span></a>
                <a href="notifications.html"><i class="fas fa-message"></i> <span>Уведомления</span></a>
              </div>
            <div class="login">
                <p>Войдите, чтобы подписываться на авторов, ставить лайки видео и читать комментарии</p>
                <button>Войти</button>
            </div>
            <div class="accounts">
                <p>Рекомендуемые аккаунты</p>
                <div class="user">
                    <img src="assets/Homyak.jpeg" alt="avatar">
                    <h6 class="username"><a href="accounts/homyak.html">homm9k</a></h6>
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
            <div class="acc">
                <div class="acc-info">
                    <div class="user">
                        <img src="https://p16-sign-va.tiktokcdn.com/tos-maliva-avt-0068/7b9adeead6ed945ea604b8213010349d~c5_100x100.jpeg?x-expires=1666252800&x-signature=oJ2lFsqFUB3x1%2Bra1XPAuRmGxdg%3D" alt="avatar">
                        <div>
                            <h6><a href="#"><?php echo $_SESSION['username']; ?></a></h6>
                            <button class="edit-profile">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="1em" height="1em">
                                <path fill="currentColor" fill-rule="evenodd" d="M15.393 2.226a.842.842 0 00-1.17.02L8.142 8.33a.842.842 0 00-.247.595v2.34c0 .464.377.841.842.841h2.183a.842.842 0 00.596-.246l6.237-6.238a.843.843 0 00-.02-1.211l-2.34-2.184zM9.58 9.273l5.26-5.26 1.107 1.033-5.374 5.375h-.993V9.273zM9.58 2c.232 0 .42.189.42.421v.842a.421.421 0 01-.42.421H4.526a.842.842 0 00-.842.842v10.948c0 .465.377.842.842.842h10.947a.842.842 0 00.842-.842V10.42c0-.232.189-.421.421-.421h.842c.233 0 .422.188.422.421v5.053A2.526 2.526 0 0115.473 18H4.526A2.526 2.526 0 012 15.474V4.526A2.526 2.526 0 014.526 2H9.58z" clip-rule="evenodd"></path>
                              </svg>
                              <span>
                                Edit profile
                              </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="details">
                    <p>
                     <h7>0 Подписки</h7>
                     <h7>0 Подписчики</h7>
                     <h7>0 Лайки</h7>
                 </p> 
                 </div>
            </div>
            <div class="acc-content">
            </div>
          </div>
        </div>
    </main>
  </body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>