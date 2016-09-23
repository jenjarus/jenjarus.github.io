<?php

    function account_all($link){
        
        $query = "SELECT * FROM users ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqly_error($link));
        
        $n = mysqli_num_rows($result);
        $account = array();
        
        for ($i=0; $1<$n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $account[] = $row;
        }
        
        return $account;
    }

    function account_get($link, $id){
        
        $query = sprintf("SELECT * FROM users WHERE id=%d",
        (int)$id);
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqly_error($link));
        
        $account = mysqli_fetch_assoc($result);
        
        return $account;
    }

    function account_new($name, $family, $password, $email, $gender){

    }

    function account_edit($id, $name, $family, $password, $email, $gender){

    }

    function account_delete($id){

    }

?>