<?php
include('../db.php');

if(!empty($_COOKIE['email'])){
    
    
    
    
    
    mysqli_query($koneksi,"delete from tb_menu where id_menu = '$_GET[id]'");
    
}


?>
<script>
location = "index.php?p=tb_dm_1";

</script>