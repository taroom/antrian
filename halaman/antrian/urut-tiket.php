<?php
include 'halaman/_bagian/link.php';
?>
Ini adalah halaman urutan tiket. ambil tiket <a href="?halaman=ambil-tiket">disini</a>
<hr>
Urutan Tiket

No. Tiket :

<a href="?halaman"></a>



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
