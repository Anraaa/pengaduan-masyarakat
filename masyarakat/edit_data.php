<?php 
include '../config/koneksi.php';
session_start();



if (isset($_POST['hapus_pengaduan'])) {
    $id_pengaduan = $_POST['id_pengaduan'];
    $query = mysqli_query($koneksi, "SELECT * FROM pengaduan");
    $data = mysqli_fetch_array($query);
    if (is_file('../assets/img/'.$data['foto'])) {
        unlink('../assets/img/'.$data['foto']);
        mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
        header('location:index.php');
    }
}


?>