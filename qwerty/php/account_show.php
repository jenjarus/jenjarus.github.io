<?php
    require 'database.php';

    $id = $_REQUEST['id'];
    $select_query = "SELECT * FROM users WHERE id = " . $id;
    $result = mysql_query($select_query);
    if ($result) {
        $row = mysql_fetch_array($result);
        $name       = $row['name'];
        $family     = $row['family'];
        $login      = $row['login'];
        $email      = $row['email'];
        $password   = $row['password'];
        $gender     = $row['radio'];
    } 
    else {
        die("Ошибка обнаружения пользователя с ID {$id}");
    }
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
    <link href="../css/back.css" rel="stylesheet">
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
            <h1>Ваш профиль</h1>
            <p>Ниже приведены ваши данные</p>
        </div>
      </div>
      <div class="container">
        <p>Имя: <?php echo "{$name}";?></p>
        <p>Фамилия: <?php echo "{$family}";?></p>
        <p>Логин: <?php echo "{$login}";?></p>
        <p>Электронная почта: <?php echo "{$email}";?></p>
         <p>Пол: <?php if($gender = 1){echo "мужской";} else {echo "женский";};?></p>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>