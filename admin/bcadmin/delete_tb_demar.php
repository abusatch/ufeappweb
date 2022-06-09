<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include('../db.php');

$qu = mysqli_query($koneksi,"delete from tb_demar3 where id_kategori = '1' and judul = ''");



if($qu){
    echo "berhasil";
}else{
    echo "gagal".$mysqli_error($koneksi);
}


?>