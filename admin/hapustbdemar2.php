<?php

include('../db.php');

mysqli_query($koneksi,"update tb_demar2 set visibility = '2' where id_demar = '$_GET[id]'");



?>

<script>
    
    location = "index.php?p=rincian&id=<?php echo $_GET['idc'] ?>";
</script>