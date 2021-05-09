<?php
function checkLogin()
{
    return isset($_SESSION['status_login']) && $_SESSION['status_login']['status'] == 1 ? true : false;
}

function checkLempar()
{
    if (checkLogin() == false) { //jika kondisi login == false, maka
        header('Location: ?halaman=login');
        exit();
    }
}
