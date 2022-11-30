<?php 
	include("../login/db_conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../1.css">
    <script
      src="https://kit.fontawesome.com/1a015cf62c.js"
      crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script>
    $(document).ready(function(){
      load_data();
      function load_data(query)
      {
        $.ajax({
        url:"livesearch.php",
        method:"POST",
        data:{query:query},
        success:function(data)
        {
          $('#result').html(data);
        }
        });
      }
      $('#search').keyup(function(){
      var search = $(this).val();
      if(search != '')
      {
        load_data(search);
      }
      else
      {
        load_data();
      }
      });
    });
    </script>
    <title>Search</title>
</head>
<body>
    <header>
        <nav class="navbar">
          <a href="../index.html">
            <img class="logo" src="../assets/logo.png" alt="Tiktok" />
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
            <a href="../upload.html">
              <button class="upload-btn"><span>&#43;</span>Загрузить</button>
            </a>
            <a href="../login.html">
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
                <a href="../index.html"><i class="fas fa-home"></i> <span>Рекомендуем</span></a>
                <a href="../following.html"><i class="fas fa-user-friends"></i> <span>Подписки</span></a>
                <a href="../messages.html"><i class="fas fa-message"></i> <span>Сообщения</span></a>
                <a href="../notifications.html"><i class="fas fa-message"></i> <span>Уведомления</span></a>
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
        
        <div class="container-fluid">       
          <div class="content-wrapper">
            <div class="container">
              <div class="row">
              <div class="col-xs-12">
                <input type="text" name="search" id="search" placeholder="Search" class="form-control" />
                <div id="result"></div>
              </div>
              </div>	
            </div>
          </div>
          </div>



    </main>
</body>
</html>