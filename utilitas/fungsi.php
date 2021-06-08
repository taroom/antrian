<?php
function checkLogin()
{
    return isset($_SESSION['status_login']) && $_SESSION['status_login']['status'] == 1 ? true : false;//mengembalikan true jika telah login dan mengembalikan false jika belum login
}

function checkLempar()
{
    if (checkLogin() == false) { //jika kondisi login == false, maka
        header('Location: ?halaman=login');//lemparkan ke halaman login
        exit();
    }
}

