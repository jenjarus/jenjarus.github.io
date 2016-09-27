<?php

    require_once("database.php");
    require_once("account.php");

    $link = db_connect();
    $account = account_get($link, $_GET['id']);

    include("")

?>