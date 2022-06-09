<?php
include('../db.php');
mysqli_query($koneksi,"delete from tb_harga_program where id_harga = '$_GET[id]'");

 ?>
 <script>
 location = "index.php?p=r_tb_ufe&id=<?php echo $_GET['idc'] ?>";
 </script>