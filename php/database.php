<?php
    require 'app_config.php';

    mysql_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        or die("Error: ".mysqli_error());

    mysql_select_db("site")
        or die("<p>Ошибка при выборе базы данных " . MYSQL_DB .
               mysql_error() . "</p>");
?>