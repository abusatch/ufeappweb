<?php

require_once('db.php');

$result = array();
date_default_timezone_set('Asia/Jakarta');
$tanggal_today = date('d');


$nj = mysqli_query($koneksi,"select * from user where idUser = '$_GET[idmember]'");
$nj2 = mysqli_fetch_array($nj);

if($nj2['member_dari'] == ""){
$idmemberr = $_GET['idmember'];
}else{
  $idmemberr = $nj2['member_dari'];
}

$sql_get_data = "SELECT * FROM tb_creche where id_tarif between 4 and 6    ORDER BY id_tarif ASC";
$koneksi->set_charset("utf8");
$query = $koneksi->query($sql_get_data);

echo"{";
 echo  '"result": [';

$no = 1;
while($row = mysqli_fetch_assoc($query)){


    $kj1 = $row['harga']*5/100;
    $kj2 = $row['harga']-$kj1;


    $nb1 = $row['harga']*8;
    $nb2 = $nb1*10.5/100;
    $nb3 = $nb1 - $nb2;
//   $nh = mysqli_query($koneksi,"select * from user where idUser = '$row[id_member_vip]'");
//   $nh2 = mysqli_fetch_array($nh);
  //$result[] = $row;
  if($no == 1){}else{echo ",";}
?>
{
      "id_actualite": "<?php echo $row['id_tarif']; ?>",
      "id_member": "<?php echo $row['paket'] ?>",
      "hargaaslia": "<?php echo $row['harga']."---".$nb3; ?>",
      "hargaaslib": "<?php echo $nb3 ?>",
      
      "judul": "<?php echo $row['periode'] ?>",
      "deskripsi": "<?php echo "IDR ".number_format($row['harga'],0,',','.')."/mois" ?>",
      "gambar": "<?php echo "IDR ".number_format($kj2,0,',','.')."/ mois"; ?>",
      "tanggal": "<?php echo $row['ket4'] ?>",
      "tanggal2": "<?php echo $row['ket3'] ?>",
      "url": "<?php echo "IDR ".number_format($row['harga'],0,',','.')."/mois"; ?>",
      "email": "<?php echo $row['paket'] ?>",
    "tanggal_today":"<?php echo $tanggal_today; ?>",
      "ket1": "<?php echo $row['ket1'] ?>",
      "ket2": "<?php echo $row['ket2'] ?>",
      "ket3": "<?php echo "IDR ".number_format($row['harga'],0,',','.')."/mois" ?>",
      "ket5": "<?php echo "IDR ".number_format($nb3,0,',','.')."/ an"; ?>",
      "ket4": "<?php echo "".$kj2.""; ?>",

      "keterangan": "<?php echo $row['harga']."---".$nb3; ?>"
    }
<?php
$no++;}
echo "]}";
//echo json_encode(array('result'=>$result));

?>