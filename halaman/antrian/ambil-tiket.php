<?php
// ambil data tanggal
$tanggal = date("Y-m-d");//mendapatkan tanggal hari ini

// mendapatkan nomor paling tinggi di hari ini
$query = $db->query("SELECT MAX(nomor) maximal FROM tiket_antrian WHERE hari = '{$tanggal}' ");

$datamax = $query->fetch_object();

if ($datamax->maximal == NULL) {
    //belum ada data maka angka yang akan dimasukkan adalah 1
    $hasil = $db->query("INSERT INTO `tiket_antrian`(`nomor`, `hari`, `status_tiket`, `tanggal_ambil`, `tanggal_terpanggil`) VALUES (1, '" . $tanggal . "', 'MULAI', NOW(), NULL); ");
} else {
    // mendapatkan angka maximal + 1
    $angka = (int) $datamax->maximal + 1;
    $hasil = $db->query("INSERT INTO `tiket_antrian`(`nomor`, `hari`, `status_tiket`, `tanggal_ambil`, `tanggal_terpanggil`) VALUES (" . $angka . ", '" . $tanggal . "', 'MULAI', NOW(), NULL); ");
}

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
