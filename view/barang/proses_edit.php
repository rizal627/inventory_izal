<?php
$id_barang = $_GET['id_barang'];

$nama_barang = $_POST['nama_barang'];
$id_jenis = $_POST['warna'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE barang SET
    '$id',
    '$nama_barang',
    '$id_jenis',
    '$harga',
    '$stok'
    
    
WHERE id_barang='$id'");

// Javascript
if ($query) {
    echo "<script>alert('Data berhasil diedit');</script>";
    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
    echo "<script>window.location.href='view_tambah.php';</script>";
}
?>