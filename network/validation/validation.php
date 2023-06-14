<?php


function usernameValidation($u, $c)
{
    
    $query = "SELECT `username` FROM `users` WHERE `username` = '". $u ."';";
    $result = $c->query($query);
    $row = $result -> num_rows;
    if(empty($u))
    {
        return "Username cannot be blank !";
    }
    elseif(preg_match("/\s/",$u))
    {
        return "Username cannot contain space ! ";
    }
    elseif(strlen($u)<5 || strlen($u) > 25)
    {
        return "Username must be betweein 5 and 25 characters";
    }
    elseif($row > 0)
    {
        return "Username is reserved, please choose another one.";
    }
    else
    {
        return "";
    }
}


function passwordValidation($u)
{
    
    if(empty($u))
    {
        return "Password cannot be blank !";
    }
    elseif(preg_match("/\s/",$u))
    {
        return "Password cannot contain space ! ";
    }
    elseif(strlen($u)<5 || strlen($u) > 50)
    {
        return "Password must be betweein 5 and 50 characters";
    }
    else
    {
        return "";
    }
}











?>