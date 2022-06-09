<?php 

include('../db.php');

// $tu = str_replace("'"," ",$_POST['tulisan']);
$tu = $_POST['tulisan'];
// $tu2 = str_replace($tu;

if($_POST['ket_tulisan'] == "tulisan1"){
	
	mysqli_query($koneksi,"update tb_halaman_depan set tulisan1 = '$tu'");
}else if($_POST['ket_tulisan'] == "tulisan2"){
	
	mysqli_query($koneksi,"update tb_halaman_depan set tulisan2 = '$tu'");
}else if($_POST['ket_tulisan'] == "tulisan3"){
	
	mysqli_query($koneksi,"update tb_halaman_depan set tulisan3 = '$tu'");
}else if($_POST['ket_tulisan'] == "tulisan4"){
	
	mysqli_query($koneksi,"update tb_halaman_depan set tulisan4 = '$tu'");
}else if($_POST['ket_tulisan'] == "tulisan5"){
	
	mysqli_query($koneksi,"update tb_halaman_depan set tulisan5 = '$tu'");
}else if($_POST['ket_tulisan'] == "tulisan6"){
	
	mysqli_query($koneksi,"update tb_halaman_depan set tulisan6 = '$tu'");
}else if($_POST['ket_tulisan'] == "tulisan7"){
	
	mysqli_query($koneksi,"update tb_halaman_depan set tulisan7 = '$tu'");
}else if($_POST['ket_tulisan'] == "tulisan8"){
	
	mysqli_query($koneksi,"update tb_halaman_depan set tulisan8 = '$tu'");
}else if($_POST['ket_tulisan'] == "tulisan9"){
	
	mysqli_query($koneksi,"update tb_halaman_depan set tulisan9 = '$tu'");
}else if($_POST['ket_tulisan'] == "tulisan10"){
	
	mysqli_query($koneksi,"update tb_halaman_depan set tulisan10 = '$tu'");
}else if($_POST['ket_tulisan'] == "tulisan11"){
	
	mysqli_query($koneksi,"update tb_halaman_depan set tulisan11 = '$tu'");
}


?>
<script>
 alert("<?php echo mysqli_error($koneksi); ?>");
location = "index.php?p=home";
</script>