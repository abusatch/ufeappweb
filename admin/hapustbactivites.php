<?php

include('../db.php');

// mysqli_query($koneksi,"update tb_demar2 set visibility = '2' where id_demar = '$_GET[id]'");
mysqli_query($koneksi,"delete from tb_activites where id_activites = '$_GET[id]'");


?>

<script>
    
    location = "index.php?p=r_tb_ufe&id=<?php echo $_GET['idc'] ?>";
</script>