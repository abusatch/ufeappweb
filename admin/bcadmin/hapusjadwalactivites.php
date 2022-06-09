<?php
include('../db.php');
mysqli_query($koneksi,"delete from tb_jadwal_program where id_jadwal = '$_GET[id]'");

 ?>
 <script>
 location = "index.php?p=r_tb_ufe&id=<?php echo $_GET['idc'] ?>";
 </script>