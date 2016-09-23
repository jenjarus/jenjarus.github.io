<?php
    require 'database.php';

    $name       = $_REQUEST['name'];
    $family     = $_REQUEST['family'];
    $login      = $_REQUEST['login'];
    $email      = $_REQUEST['email'];
    $password   = $_REQUEST['password'];
    $password2  = $_REQUEST['password2'];
    $gender     = $_REQUEST['radio'];

    if($password2 != $password)
    {
        echo "Ошибка";
    }

    $insert_sql = "INSERT INTO users (name, family, login, email, password, gender)" . "VALUES ('{$name}', '{$family}', '{$login}', '{$email}', '{$password}', '{$gender}');";

    mysql_query($insert_sql)
        or die(mysql_error());
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/books.ico" type="image/x-icon">
    <title>Сайт-викторина</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<!--    <link href="../jumbotron.css" rel="stylesheet">-->
    <script src="../bootstrap/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
      
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Панель навигации</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="../index.html">Главнвя страница</a>
            <a class="navbar-brand" href="../victorina.html">Викторина</a>
            <a class="navbar-brand" href="../lider.html">Таблица лидеров</a>
            <a class="navbar-brand" href="#">Галерея</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Login" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-defaut">Войти</button>
            <a class="btn btn-success" href="regist.html" role="button">Регистрация</a>
          </form>
        </div>
      </div>
    </nav>
      
      <div class="jumbotron">
        <div class="container">
            <h2 class="text-center">Регистрация пользователя</h2>
            <br>
            <p>Спасибо за регистрацию. Нажмите на кнопку главное меню для возвращения в глвное меню или на кнопку мой профиль для просмотра или редактирования профиля.</p>
            <br>
            <div class="col-md-offset-4">
                <a class="btn btn-primary btn-lg" href="../index.html" role="button">Главное меню &raquo;</a>
                <a class="btn btn-primary btn-lg" href="account_show.php" role="button">Мой профиль &raquo;</a>
            </div>
          </div>
      </div>
      

    <div class="container">    
    <br> 
    <hr>
        
    <footer>
        <div class="container">
        <div class="navbar-header">
            <p>&copy; 2016 JenjaRus, Co.</p>
        </div>
        </div>
    </footer>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>