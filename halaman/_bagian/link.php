<a href="?halaman=depan">Beranda</a> |

<?php if (checkLogin()) { ?>
    <a href="?halaman=logout">Logout</a>
<?php } else { ?>
    <a href="?halaman=login">Login</a> |
<?php } ?>
<hr>