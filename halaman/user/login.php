<?php
include 'halaman/_bagian/link.php';
?>
Halaman Login <br>
<form action="?halaman=login-proses" method="POST">
    username : <br>
    <input type="text" name="usernameku" placeholder="masukkan username"><br>
    password : <br>
    <input type="password" name="passwordku" placeholder="masukkan password"><br>

    <input type="submit" name="login" value="Login">
</form>
<?php
include 'halaman/_bagian/footer.php';
