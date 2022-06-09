<?php

include('../db.php');

mysqli_query($koneksi,"update tb_demar3 set visibility = '2' where id_demar = '$_GET[id]'");



?>

<script>
    
    location = "index.php?p=rincian2&id=<?php echo $_GET['idc'] ?>";
</script>