<?php
$dataget = $_GET;

$halaman = isset($dataget['halaman']) ? $dataget['halaman'] : 'depan';

switch ($halaman) {
    case 'antrian-tiket':
        include 'antrian/urut-tiket.php';
        break;
    case 'ambil-tiket':
        include 'antrian/ambil-tiket.php';
        break;

    case 'tiket-selesai':
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
        include 'user/logout.php';
        break;

    default:
        include 'antrian/halaman-depan.php';
        break;
}
