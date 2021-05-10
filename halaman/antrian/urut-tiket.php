<?php
include 'halaman/_bagian/link.php';

//menyiapkan session untuk menyimpan angka order
if (!isset($_SESSION['URUTAN'])) $_SESSION['URUTAN'] = -1;

$_SESSION['URUTAN']++;
$urutan = $_SESSION['URUTAN'];

$tanggal = date("Y-m-d");
$query = $db->query("SELECT * FROM tiket_antrian WHERE hari = '{$tanggal}' AND status_tiket = 'MULAI';"); // mendapatkan total tiket hari ini yang masih belum terpanggil

if ($urutan >= $query->num_rows - 1) {
    $_SESSION['URUTAN'] = -1;
}

// mendapatkan data
$query = $db->query("SELECT * FROM tiket_antrian WHERE hari = '{$tanggal}' LIMIT {$urutan},1");
if ($db->error) {
    echo "Gagal eksekusi : ";
    var_dump($db->error);
    exit();
}

$res = $query->fetch_object();
?>
ambil tiket baru <a href="?halaman=ambil-tiket">disini</a>
<hr>
Urutan Tiket

No. Tiket : <?= $res->nomor ?> Silahkan menuju admin

<a href="?halaman=tiket-selesai&id=<?= $res->id ?>">Verifikasi sebagai selesai</a>


<hr>
Daftar Tiket Antrian :
<br>

<table>
    <tr>
        <th>Urutan</th>
        <th>Status</th>
        <th>Waktu Ambil</th>
        <th>Waktu Terpanggil</th>
    </tr>
    <?php
    $tanggal = date("Y-m-d");

    $query = $db->query("SELECT * FROM tiket_antrian WHERE hari = '{$tanggal}'");

    while ($data = $query->fetch_object()) {
    ?>
        <tr>
            <td><?= $data->nomor ?></td>
            <td><?= $data->status_tiket ?></td>
            <td><?= $data->tanggal_ambil ?></td>
            <td><?= $data->tanggal_terpanggil ?></td>
        </tr>
    <?php
    }
    ?>
</table>



<?php
include 'halaman/_bagian/footer.php';
