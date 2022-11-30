<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <script src="https://kit.fontawesome.com/9044c49406.js" crossorigin="anonymous"></script>
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
        <div class="settings_main_container">
            <div class="settings_list">
                <div>
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <a href="#account" class="setting_link">Управление аккаунтом</a>
                </div>
                <div>
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <a href="#privacy" class="setting_link">Конфиденциальность</a>
                </div>
                <div>
                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                    <a href="#notifications" class="setting_link">Push-уведомления</a>
                </div>
            </div>
            <div class="settings_containers">
                <div class="settings_container">
                    
                    <p class="setting_title" id="account">Управление аккаунтом</p>

                    <div class="setting_options">
                        <div class="setting_option">
                            <!-- <p>Удалить аккаунт</p> -->
                            <button>Удалить</button>
                        </div>
                        <div class="setting_option">
                            <!-- <p>Заморозить аккаунт</p> -->
                            <button>Заморозить</button>
                        </div>
                    </div>
                
                </div>
                <div class="settings_container">

                    <p class="setting_title" id="privacy">Конфиденциальность</p>
                    
                    <div class="setting_options">
                        <div class="setting_option">
                            <p class="setting_option">Приватный аккаунт</p>
                            <p class="setting_description">Только одобренные подписчики видят видео в приватном аккаунте. <br>Это не скажется на ваших текущих подписчиках.</p>
                            <!-- <i class="fa-solid fa-toggle-on"></i>                         -->
                        </div>
                        <div class="setting_option">
                            <a class="setting_option blocked_option" href="">Заблокированные аккаунты</a>
                        </div>
                        <div class="setting_option">
                            <p class="setting_option">Загрузка данных пользователя</p>
                            <p class="setting_description">Получить копию ваших данных.</p>
                        </div>
                    </div>

                </div>
                <div class="settings_container">

                    <p class="setting_title" id="notifications">Push-уведомления</p>
                    
                    <div class="setting_options">
                        <div class="setting_option">
                            <p class="setting_option">Разрешить в браузере</p>
                            <p class="setting_description">Мгновенно узнавайте о новых лайках, комментариях и видео при помощи уведомлений на компьютере. <br>Их можно отключить в любой момент.</p>
                            <!-- <i class="fa-solid fa-toggle-on"></i>                         -->
                        </div>
                        <div class="setting_option_interactions">
                            <p class="setting_option">Взаимодействия</p>
                            <p class="setting_description">Настройте уведомления так, как вам удобно.</p>
                            <div>
                                <p>Лайки</p>
                                <input type="checkbox" id="pill-input1" name="check">
                                <label for="pill-input1"></label>
                            </div>
                            <div>
                                <p>Комментарии</p>
                                <input type="checkbox" id="pill-input2" name="check">
                                <label for="pill-input2"></label>
                            </div>
                            <div>
                                <p>Новые подписчики</p>
                                <input type="checkbox" id="pill-input3" name="check">
                                <label for="pill-input3"></label>
                            </div>
                            <div>
                                <p>Упоминания</p>
                                <input type="checkbox" id="pill-input4" name="check">
                                <label for="pill-input4"></label>
                            </div>
                            <div>
                                <p>Отметки</p>
                                <input type="checkbox" id="pill-input5" name="check">
                                <label for="pill-input5"></label>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
</body>
</html>