<?php
include 'halaman/_bagian/link.php';
?>

<form action="?halaman=login-proses" method="POST">
    username : <br>
    <input type="text" name="usernameku" class="form-control" placeholder="masukkan username"><br>
    password : <br>
    <input type="password" name="passwordku" class="form-control" placeholder="masukkan password"><br>

    <input type="submit" class="btn btn-primary btn-block btn-lg" name="login" value="Login">
</form>

<?php
include 'halaman/_bagian/footer.php';
