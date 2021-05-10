<?php
// ambil data tanggal
$id_tiket = (int) $_GET['id'];
$hasil = $db->query("UPDATE `tiket_antrian` SET `status_tiket` = 'SELESAI', `tanggal_terpanggil` = NOW() WHERE id = {$id_tiket}; ");

if ($db->error) {
    echo "Gagal eksekusi : ";
    var_dump($db->error);
    exit();
}

if ($hasil) {
    header('Location: ?halaman=antrian-tiket&status=sukses');
} else {
    header('Location: ?halaman=antrian-tiket&status=gagal');
}
