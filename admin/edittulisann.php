<?php 
include('../db.php');


$tulisan11 = str_replace("'","&petiksatu&",$_POST['tulisan1']);


if($_POST['tulisan'] == "tulisan1"){
    mysqli_query($koneksi,"update tb_tulisan set tulisan1 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan2"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan2 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan3"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan3 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan4"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan4 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan5"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan5 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan6"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan6 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan7"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan7 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan8"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan8 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan9"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan9 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan10"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan10 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan11"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan11 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan12"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan12 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan13"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan13 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan14"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan14 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan15"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan15 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan16"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan16 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan17"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan17 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan18"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan18 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan19"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan19 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan20"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan20 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan21"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan21 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}else if($_POST['tulisan'] == "tulisan22"){
     mysqli_query($koneksi,"update tb_tulisan set tulisan22 = '$tulisan11' where id_tulisan = '$_POST[id_tulisan]'");
}

?>
<script>
    location = "index.php?p=edit_tulisan&id=<?php echo $_POST['id_tulisan'] ?>";
</script>