<?php
	include "db.php";
	
if(!empty($_POST['username2'])){
  echo "[";
}

	class usr{}
    
  $oep = mysqli_query($koneksi,"select * from user where username = '$_POST[username2]' and password = '$_POST[pss2]'");
  $oep2 = mysqli_fetch_assoc($oep);
   


    if(!empty($_POST['username2'])){
      $pss = $_POST['pss2'];
      $dibaca = "-".$oep2['idUser']."-";
    }else{
    $pss = md5($_POST['pss']);
    $dibaca = "-".$_POST['username']."-";
    }

    if(!empty($_POST['username2'])){
    $query = mysqli_query($koneksi,"SELECT * FROM user where idUser = '$oep2[idUser]' and password = '$pss'");
    }else{
      $query = mysqli_query($koneksi,"SELECT * FROM user where idUser = '$_POST[username]' and password = '$pss'");
    }
    // $query2 = mysqli_query($koneksi,"select * from tb_notifikasi");
	
    $row = mysqli_fetch_array($query);
    $row2 = mysqli_num_rows($query);
	
	if ($row2 >= 1){

        $ku = mysqli_query($koneksi,"update tb_template set visibility = '0' where id_template = '$_POST[id_artikel]'");


?>

{
  "success": 1,
  "message": "Artikel berhasil di hapus",
  "id": "<?php echo $row2 ?>",
  "username": "<?php echo $row2 ?>"
}
	
<?php		
	// $response = new usr();
		// $response->success = 1;
		// $response->message = '"'.$row2.'"';
		// $response->id = '"'.$row2.'"';
		// $response->username = '"'.$row2.'"';
		// die(json_encode($response));
	} else { 

		// $response = new usr();
		// $response->success = 0;
		// $response->message = '"'.$row2.'"';
		// die(json_encode($response));
?>
{
  "success": 0,
  "message": "<?php echo $row2 ?> <?php echo mysqli_error($koneksi); ?>",
  "id": "<?php echo $row2 ?>",
  "username": "<?php echo $row2 ?>"
}

<?php
    }
    $username = $_POST["username"];

    if(!empty($_POST['username2'])){
      echo "]";
    }
?>