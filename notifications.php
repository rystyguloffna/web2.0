<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9044c49406.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Notifications</title>
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
            <a href="upload.php">
              <button class="upload-btn"><span>&#43;</span>Загрузить</button>
            </a>
            <a href="login.php">
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
                <p>Войдите, чтобы подписываться на авторов, ставить лайки видео и читать комментарии</p>
                <button>Войти</button>
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
        <div class="right right_notifications">
            <p class="notifications_title">Уведомления</p>
            <div class="notifications_options">
                <a href="notifications.php">Вся активность</a>
                <a href="notifications.php">Лайки</a>
                <a href="notifications.php">Комментарии</a>
                <a href="notifications.php">Упоминания</a>
                <a href="notifications.php">Отметки</a>
                <a href="notifications.php">Подписчики</a>
            </div>
            <div class="notifications_container">
                <div class="notifications_box">
                    <p class="notification_time_title">Вчера</p>
                    <div class="notification_box">
                      <div class="notification_box_content">
                        <img class="profile_img" src="https://64.media.tumblr.com/3c948972b7be8a79f1436393a3a26281/tumblr_ogw26dCy7A1smd799o1_1280.jpg" alt="image_account">
                        <p>zamira, damir и 213 другим понравился ваш комментарий.</p>
                        <p>nazym: for real...</p>
                      </div>
                        <img class="video_img" src="https://thumbs.dreamstime.com/b/%D0%B2%D0%B5%D1%80%D1%82%D0%B8%D0%BA%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F-%D0%BF%D0%B0%D0%BD%D0%BE%D1%80%D0%B0%D0%BC%D0%B0-%D1%81%D0%BE%D0%B1%D0%BE%D1%80-s-%D0%BE%D0%B1%D0%B8%D1%82%D0%B5%D0%BB%D0%B8-%D0%B8-st-%D0%B8%D1%81%D0%B0%D0%B0%D0%BA-%D0%B2%D0%BD%D1%83%D1%82%D1%80%D0%B8-125046452.jpg" alt="preview_video">
                    </div>
                </div>
                <div class="notifications_box">
                    <p class="notification_time_title">На этой неделе</p>
                    <div class="notification_box">
                      <div class="notification_box_content">
                        <img class="profile_img" src="https://64.media.tumblr.com/3c948972b7be8a79f1436393a3a26281/tumblr_ogw26dCy7A1smd799o1_1280.jpg" alt="image_account">
                        <p>zamira понравилось ваше видео.</p>
                      </div>
                        <img class="video_img" src="https://thumbs.dreamstime.com/b/%D0%B2%D0%B5%D1%80%D1%82%D0%B8%D0%BA%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F-%D0%BF%D0%B0%D0%BD%D0%BE%D1%80%D0%B0%D0%BC%D0%B0-%D1%81%D0%BE%D0%B1%D0%BE%D1%80-s-%D0%BE%D0%B1%D0%B8%D1%82%D0%B5%D0%BB%D0%B8-%D0%B8-st-%D0%B8%D1%81%D0%B0%D0%B0%D0%BA-%D0%B2%D0%BD%D1%83%D1%82%D1%80%D0%B8-125046452.jpg" alt="preview_video">
                    </div>
                    <div class="notification_box">
                      <div class="notification_box_content">
                        <img class="profile_img" src="https://64.media.tumblr.com/3c948972b7be8a79f1436393a3a26281/tumblr_ogw26dCy7A1smd799o1_1280.jpg" alt="image_account">
                        <p>damir понравилось ваше видео.</p>
                      </div>
                        <img class="video_img" src="https://thumbs.dreamstime.com/b/%D0%B2%D0%B5%D1%80%D1%82%D0%B8%D0%BA%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F-%D0%BF%D0%B0%D0%BD%D0%BE%D1%80%D0%B0%D0%BC%D0%B0-%D1%81%D0%BE%D0%B1%D0%BE%D1%80-s-%D0%BE%D0%B1%D0%B8%D1%82%D0%B5%D0%BB%D0%B8-%D0%B8-st-%D0%B8%D1%81%D0%B0%D0%B0%D0%BA-%D0%B2%D0%BD%D1%83%D1%82%D1%80%D0%B8-125046452.jpg" alt="preview_video">
                    </div>
                </div>
                <div class="notifications_box">
                    <p class="notification_time_title">Ранее</p>
                    <div class="notification_box">
                      <div class="notification_box_content">
                        <img class="profile_img" src="https://64.media.tumblr.com/3c948972b7be8a79f1436393a3a26281/tumblr_ogw26dCy7A1smd799o1_1280.jpg" alt="image_account">
                        <p>zamira подписывается на вас. </p>
                      </div>
                        <button>Добавить в ответ</button>
                    </div>
                    <div class="notification_box">
                      <div class="notification_box_content">
                        <img class="profile_img" src="https://64.media.tumblr.com/3c948972b7be8a79f1436393a3a26281/tumblr_ogw26dCy7A1smd799o1_1280.jpg" alt="image_account">
                        <p>damir подписывается на вас. </p>
                      </div>
                        <button>Добавить в ответ</button>
                    </div>
                    <div class="notification_box">
                      <div class="notification_box_content">
                        <img class="profile_img" src="https://64.media.tumblr.com/3c948972b7be8a79f1436393a3a26281/tumblr_ogw26dCy7A1smd799o1_1280.jpg" alt="image_account">
                        <p>damir ответил(-а) "хахахха ору" на ваш комментарий: колобок повесился </p>
                      </div>
                        <img class="video_img" src="https://thumbs.dreamstime.com/b/%D0%B2%D0%B5%D1%80%D1%82%D0%B8%D0%BA%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F-%D0%BF%D0%B0%D0%BD%D0%BE%D1%80%D0%B0%D0%BC%D0%B0-%D1%81%D0%BE%D0%B1%D0%BE%D1%80-s-%D0%BE%D0%B1%D0%B8%D1%82%D0%B5%D0%BB%D0%B8-%D0%B8-st-%D0%B8%D1%81%D0%B0%D0%B0%D0%BA-%D0%B2%D0%BD%D1%83%D1%82%D1%80%D0%B8-125046452.jpg" alt="preview_video">
                    </div>
                </div>
                
            </div>
        </div>
      </main>
</body>
</html>