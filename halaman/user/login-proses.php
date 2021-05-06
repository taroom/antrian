<?php
//ambil post data
$postdata = $_POST;

$username = $postdata['usernameku'];
$password = md5($postdata['passwordku']); //di enkripsi

// lakukan query ke database untuk mendapatkan data user
$query = $db->query("SELECT * FROM user WHERE myusername = '" . $username . "' AND mypassword = '" . $password . "'");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}

if ($query->num_rows > 0) {
    echo 'ada';
    //mendapatkan data dari database
    $res = $query->fetch_object();


    // menambahkan session
    $_SESSION['status_login'] = [
        'status' => 1,
        'id' => $res->mylast_log,
        'username' => $res->myusername,
        'last_log' => $res->mylast_log,
    ];


    //update terakhir login
    $db->query("UPDATE user SET mylast_log = NOW() WHERE myid = " . $res->myid . "; ");
    header('Location: ?halaman=depan');
} else {
    header('Location: ?halaman=depan');
}
