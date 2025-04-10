<?php 

$id_=$_GET['id'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "DELETE FROM parkir WHERE id_jenis='$id' ");

if($query){
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Data gagal dihapus')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}