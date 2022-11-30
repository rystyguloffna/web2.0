<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9044c49406.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Upload video</title>
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
      <main class="main_download_container">
        <div class="download_box">
          <p>Загрузка видео</p>
          <p>Опубликовать видео</p>
          <div class="browse_video_container">
              <i class="fa-solid fa-download"></i>
              <p class="download_header">Выберите видео для загрузки</p>
              <p>Или перетащите файл</p>
              <p>MP4 или WebM</p>
              <p>Разрешение 1280x720 или выше</p>
              <p>До 5 минут</p>
              <p>Менее 2 ГБ</p>
              <button type="submit">Выберите файл</button>
          </div>
          <div class="right_download_containers">
              <div class="download_container">
                  <p class="download_header">Заголовок</p>
                  <input type="text" name="" id="">
              </div>
              <div class="download_container">
                  <p class="download_header">Кто может просматривать это видео</p>
                  <select name="" id="">
                      <option value="">Все</option>
                      <option value="">Друзья</option>
                      <option value="">Только я</option>
                  </select>
              </div>
              <div class="download_container">
                  <p class="download_header">Позволить людям:</p>
                  <div><input type="checkbox">Комментарий</div>
                  <div><input type="checkbox">Дуэт</div>
                  <div><input type="checkbox">Сшивание</div>
              </div>
              <div class="download_container">
                <div>
                  <p class="download_header">Запустить проверку авторских прав</p>
                  <i class="fa-solid fa-toggle-on"></i>      
                </div>
                  <p>Мы проверим ваше видео на предмет нарушения авторских прав в отношении используемых звуков. Если мы обнаружим наружения вы сможете отредактировать видео перед публикацией. <a href="">Подробнее</a></p>
              </div>
              <div class="download_container">
                  <button>Удалить</button>
                  <button>Опубликовать</button>
              </div>
          </div>
        </div>
      </main>
        
</body>
</html>