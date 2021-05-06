<?php
function checkLogin()
{
    return isset($_SESSION['status_login']) && $_SESSION['status_login']['status'] == 1 ? true : false;
}
