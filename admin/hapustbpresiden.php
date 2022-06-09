<?php

include('../db.php');

// mysqli_query($koneksi,"update tb_demar2 set visibility = '2' where id_demar = '$_GET[id]'");
mysqli_query($koneksi,"delete from tb_president where id_presiden = '$_GET[id]'");


?>

<script>
    
    location = "index.php?p=data_presiden";
</script>