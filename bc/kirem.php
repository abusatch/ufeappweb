<?php


include('db.php');

$randd = rand(1000,9999);



$kj = mysqli_query($koneksi,"select * from user where username = '$_GET[email]'  and verifikasi  = 'belum'");
$kj2 = mysqli_num_rows($kj);
$kj3 = mysqli_fetch_array($kj);


if($kj2 == 0){
?>    
    {
    "success" : 0,
    "message": "Akses di tolak"
    }
  
  <?php  
}else{


mysqli_query($koneksi,"update user set kode_verif = '$randd' where username = '$_GET[email]'");

$to = $_GET['email'].",abusatch@gmail.com";
$subject = "Code de Vérification";

$message = "
<html>
<head>
<title>UFE Indonésie</title>
</head>
<body>
<fieldset style='text-align:left;border:1px solid #D1D1D1;padding:10px;border-radius:3px;max-width:600px;'>
<table style='width:100%;'>
<tr style='padding:10px 10px 10px 10px;'>
<th style='width:100%;text-align:right;'><img src='http://ufe-section-indonesie.org/pages/wp-content/uploads/2017/11/Asset-2.png' style='width:150px;'/></th>
</tr>
</table>
<table style='width:100%;border-top:1px solid #D1D1D1;margin-top:5px;'>
    <tr>
        <th></th>
    </tr>
    </table>

<p>Voici le code de vérification</p>
<table>

<tr>
<td style='font-size:20px;font-weight:500;'><b>".$randd."</b></td>
</tr>
</table>



<table style='width:100%;margin-top:10px;'>
<tr><td style='font-size:15px;'>
Entrez le code ci-dessus pour vérifier votre e-mail</td></tr></table>
<table style='width:100%;border-top:1px solid #D1D1D1;margin-top:20px;'>
    <tr>
        <th></th>
    </tr>
    </table>

<table style='width:100%;margin-top:5px;'>
<tr><th style='font-size:20px;text-align:left;'>
UFE Section Indonésie</th></tr></table>

<table style='width:100%;'>
<tr><td style='font-size:15px;'>
Jakarta - Indonésie<br>
e-mail: indonesie@ufe.org<br>
site internet: ufe-section-indonesie.org
</td></tr></table>
</fieldset>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: UFE Indonésie<indonesie@ufe.org>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

}
?>


<script>
    location = "meluncur:";
</script>