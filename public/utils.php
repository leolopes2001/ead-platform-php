<?php

// $nameErr = "Only letters and white space allowed";
function validate_word(string $word): bool
{
    if (!preg_match("/^[a-zA-Z-' ]*$/", $word)) {
        return false;
    }

    return true;
}

function validate_email($email): bool
{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return true;
}

function validate($value){
    if(!isset($_POST[$value]) || empty($_POST[$value])){
        return false;
    }

    return htmlspecialchars(trim($value));
}

