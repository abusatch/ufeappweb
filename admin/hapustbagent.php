<?php

include('../db.php');

// mysqli_query($koneksi,"update tb_agent set visibility = '2' where id_agent = '$_GET[id]'");

mysqli_query($koneksi,"delete from tb_agent  where id_agent = '$_GET[id]'");

?>

<script>
    
    location = "index.php?p=rincian2&id=<?php echo $_GET['idc'] ?>";
</script>