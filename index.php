<?php
include 'utilitas/database.php';
include 'utilitas/fungsi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian</title>

    <link rel="stylesheet" type="text/css" href="lib/bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="card mt-5 mb-5">
            <div class="card-body">
                <?php
                include 'halaman/index-halaman.php';
                ?>
            </div>
        </div>
    </div>
</body>

</html>