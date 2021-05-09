<?php
$dataget = $_GET;

$halaman = isset($dataget['halaman']) ? $dataget['halaman'] : 'depan';

switch ($halaman) {
    case 'antrian-tiket':
        checkLempar();
        include 'antrian/urut-tiket.php';
        break;
    case 'ambil-tiket':
        checkLempar();
        include 'antrian/ambil-tiket.php';
        break;

    case 'tiket-selesai':
        checkLempar();
        include 'antrian/tiket-selesai.php';
        break;

        //user
    case 'login':
        include 'user/login.php';
        break;
    case 'login-proses':
        include 'user/login-proses.php';
        break;
    case 'logout':
        checkLempar();
        include 'user/logout.php';
        break;

    default:
        include 'antrian/halaman-depan.php';
        break;
}
