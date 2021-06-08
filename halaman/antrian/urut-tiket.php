<?php
include 'halaman/_bagian/link.php';

//menyiapkan session untuk menyimpan angka order
if (!isset($_SESSION['URUTAN'])) $_SESSION['URUTAN'] = 0;

$tanggal = date("Y-m-d");//mendapatkan tanggal hari ini format 2021-06-09
$query = $db->query("SELECT * FROM tiket_antrian WHERE hari = '{$tanggal}' AND status_tiket = 'MULAI';"); // mendapatkan total tiket hari ini yang masih belum terpanggil

$total_rows = $query->num_rows;

if ($_SESSION['URUTAN'] >= $total_rows) {
    $_SESSION['URUTAN'] = 0;
}

$urutan = $_SESSION['URUTAN'];
// mendapatkan data
$query = $db->query("SELECT * FROM tiket_antrian WHERE hari = '{$tanggal}' AND status_tiket = 'MULAI' ORDER BY id LIMIT {$urutan},1");
if ($db->error) {
    echo "Gagal eksekusi : ";
    var_dump($db->error);
    exit();
}

$res = $query->fetch_object();
?>
ambil tiket baru <a href="?halaman=ambil-tiket">disini</a>
<hr>

<?php
// echo 'Urutan : ' . $urutan . '<br>';
// echo 'total row : ' . $total_rows . '<br>';
if ($urutan == 0 && $total_rows == 0) {
    echo 'Selesai! Anda bisa mencetak tiket baru ';
    $_SESSION['URUTAN'] = 0;
} else {
?>
    Urutan Tiket

    No. Tiket : <?= $res->nomor ?> Silahkan menuju admin

    <a href="?halaman=tiket-selesai&id=<?= $res->id ?>">Verifikasi sebagai selesai</a> |
    <a href="?halaman=tiket-selanjutnya">Selanjutnya</a>
<?php } ?>

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
// echo 'final urutan : ' . $_SESSION['URUTAN'];
include 'halaman/_bagian/footer.php';
