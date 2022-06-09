<?php 
include('../db.php');

if($_COOKIE['email'] == ""){
}else{
    


$bg = mysqli_query($koneksi,"select * from user where idUser = '$_GET[id]'");
$bg2 = mysqli_fetch_array($bg);

	$to = "indonesie@ufe.org,abusatch@gmail.com,".$bg2['username'];
$subject = "Kode Verifikasi";

$message = "
<html>
<head>
<title>UFE Indonesie</title>
</head>
<body>
<p>Hello ".$bg2['username']." Berikut ini kode Verifikasi Anda
</p>
<table>

<tr>
<td style='font-size:20px;'>".$bg2['kode_verif']."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <admin.ufe@ufe.com>' . "\r\n";
$headers .= 'Cc: abusatch@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
}
?>

<script>
    
    location = "index.php?p=<?php echo $_GET['p'] ?>";
</script>