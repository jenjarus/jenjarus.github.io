<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="books.ico" type="image/x-icon">

    <title>Сайт-викторина</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <a class="navbar-brand" href="index.html">Главнвя страница</a>
            <a class="navbar-brand" href="victorina.html">Викторина</a>
            <a class="navbar-brand" href="#">Таблица лидеров</a>
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
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
      
    <div class="jumbotron">
        <div class="container">
            <h2 class="text-center">Регистрация пользователя</h2>
            <p>Заполните следующие поля:</p>
                <br>

                <form class="form-horizontal" role="form">

                <div class="form-group">
                        <label  class="col-sm-2 control-label">Имя</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="Имя">
                    </div>
                </div>

                    <br>
                    
                <div class="form-group">
                        <label  class="col-sm-2 control-label">Логин</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="Логин">
                    </div>
                </div>

                    <br>

                <div class="form-group">
                       <label class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-10">
                       <input type="email" class="form-control" placeholder="E-mail">
                    </div>
                </div>

                <br>

                <div class="form-group">
                        <label class="col-sm-2 control-label">Пароль</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="Пароль">
                    </div>
                </div>

                <br>

                <div class="form-group">
                        <label class="col-sm-2 control-label">Повторите пароль</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="Повторите пароль">
                    </div>
                </div> 
                
                <br>
                 
                <div class="form-group">
                    <label class="col-sm-2 control-label">Пол</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                             <input type="radio" name="inlineRadioOptions" value="1"> Мужской
                        </label>
                        <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" value="2"> Женский
                        </label>
                    </div>
                </div>
            </form>
            
            <br>
            
            <div class="col-md-offset-4">
                <a class="btn btn-primary btn-lg" href="index.html" role="button">Назад</a>
                <a class="btn btn-success btn-lg" href="#" role="button">Зарегистрироваться &raquo;</a>
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
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>