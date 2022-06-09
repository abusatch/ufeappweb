<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
<?php 
include('../db.php');
$qw = mysqli_query($koneksi,"select * from user where level = 'personal' and verifikasi_admin = 'belum'");
$qw2 = mysqli_fetch_array($qw);
?>


               <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="?p=tb_dm_1">Home</a></li>
    
              <li class="breadcrumb-item active">Block Need Confirm</li>
                            </ol>
            </div>
  
            
            
                                           
                   <?php 
                   include('../db.php');
                   $kj = mysqli_query($koneksi,"select * from tb_banding where status is null or status = '' order by tanggal desc");


                   ?>                            
     <?php 
if(isset($_POST['updatekategori'])){

    
if(($_POST['id_banding'])){





$maxDimW = 1000;
$maxDimH = 500;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image_link']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image_link']['tmp_name'];
    $fn = $_FILES['image_link']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    //if( $ratio > 1) {
        $width = $maxDimW;
        $height = ($maxDimW / $size[0]) * $size[1];
    // } else {
    //     $width = $maxDimW*$ratio;
    //     $height = $maxDimH;
    // }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

$namaa = $_FILES['image_link']['name'];

//move_uploaded_file($_FILES['image_link']['tmp_name'],"../images/menu/".$_FILES['image_link']['name']);






    
mysqli_query($koneksi,"update user set verifikasi_admin = 'sudah', device_id = ''
where idUser = '$_POST[idc]'
");   


$md = mysqli_query($koneksi,"select * from tb_banding where id_banding = '$_POST[id_banding]'");
$md2 = mysqli_fetch_assoc($md);


mysqli_query($koneksi,"update tb_banding set status = 'sudah'
where username = '$md2[username]'
");   
    
  


  
  
  
  
  $kg = mysqli_query($koneksi,"select * from user where idUser = '$_POST[idc]'");
  $kg2 = mysqli_fetch_array($kg);
  
  if(empty($kg2['first_name'])){
    $namanya = $kg2['username'];
}else{
        $namanya = $kg2['first_name']." ".$kg2['second_name'];
}



  if(empty($kg2['first_name'])){
    $namanya = $kg2['username'];
}else{
        $namanya = $kg2['first_name']." ".$kg2['second_name'];
}

  
  
    $to = "abusatch@gmail.com,".$kg2['username'];
$subject = "Compte a été confirmé";

$message = "
<html>
<head>
<title>UFE Indonésie</title>
</head>
<body>
    <fieldset style='text-align:left;border:1px solid #D1D1D1;padding:10px;border-radius:3px;max-width:600px;'>
<table style='width:100%;'>
<tr style='padding:10px 10px 10px 10px;'>
<th style='width:100%;text-align:right;'><img src='https://ufe-section-indonesie.org/pages/wp-content/uploads/2017/11/Asset-2.png' style='width:150px;'/></th>
</tr>
</table>
<table style='width:100%;border-top:1px solid #D1D1D1;margin-top:5px;'>
    <tr>
        <th></th>
    </tr>
    </table>

<p style='font-size:15px;'>Bonjour ".$namanya." <br><br>Votre compte a été approuvé par l’Administrateur
</p>
<table>

<tr>
<td style='font-size:20px;'><b>".$randd."</b></td>
</tr>
</table>
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
$headers .= 'Cc: abusatch@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

        
        
        
        
        
class startSendNotification
{
  
    function sendNoti($titleNoti, $bodyNoti,$gambarrr){

    define( 'API_ACCESS_KEY', 'AAAARVfjooY:APA91bEAKbWGNffjb80WnOsnE4U_iNWJOUhW1UqiMsnLiJXah2oFmEcn2Y5EcBvUeCWHWgAfBwmFZHhnCdKvyvrUf4m7okrNCICisXtzNyxfKu4F8FxfhXcnxPICACaUrLQJekNqYZPy');
        include('../db.php');

    $ewww = mysqli_query($koneksi,"select * from user where idUser = '$_POST[idc]'");
while ($tyu = mysqli_fetch_array($ewww)){
  
  
$qw[] = $tyu['token_push'];

}
    $fcmMsg = array(
      'title' => $titleNoti,
      'body' => $bodyNoti,
            'image' => $gambarrr,
                  'sound' => 'default',
            'icon' => 'image/look24-logo-s.png'
//      'click_action' => $actionNoti
    );
    
    $fcmFields = array(
    //  'to' => "e2Ns7U3A0GI:APA91bFVM1soWWG-MrQAsjkiuxgkMdnDdZY3jKzYnhzcx4bJFblyuAdBTkiocnrJNBOWCQuieQVNoOWIttpknML46HF-zgjeEHsm9iGvZ4wfyShCKVX-BO83yLSnq4AoVhIUvqXT2sYq",
    //  'registration_ids' => $registrationIDs,
      'registration_ids' => $qw,
      
      'priority' => 'high',
      'notification' => $fcmMsg
    );

    $headers = array(
      'Authorization: key=' . API_ACCESS_KEY,
      'Content-Type: application/json'
    );
    
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
    $result = curl_exec($ch );
    curl_close( $ch );
    echo $result . "\n\n".$qw;
  }

}
$bagian = $_GET['dsafds'];
$nama = $_GET['fdfvcx'];
$tujuan = $_GET['vsde'];


// include ('koneksi3.php');

// $iu = mysqli_query($con,"select * from temanuser where idtemanuser = '$_POST[dari]'");
// $iu2 = mysqli_fetch_array($iu);


include('../db.php');

$fro = mysqli_query($koneksi,"select * from tb_actualite order by id_actualite desc");
$fro2 = mysqli_fetch_array($fro);



// How to use
$titleNoti = "Bonjour ".$namanya;
$bodyNoti = "Votre compte a été reconfirmé par l'administrateur";
$actionNoti = "https://medium.com/@ptuckyeagle";
$gambarrr = "https://ufe-section-indonesie.org/ufeapp/confirmed.jpeg";
$callNoti = new startSendNotification();



//$callNoti->sendNoti($titleNoti, $bodyNoti, $actionNoti);
$callNoti->sendNoti($titleNoti, $bodyNoti,$gambarrr);

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
if($_FILES['image_link']['name'] == null){

?>

<script>
alert("Data berhasil di ubah <?php echo mysqli_error($koneksi); ?>");
location = "?p=block_need_confirm";

</script>

<?php }else{ ?>

<script>
alert("Data berhasil di ubah <?php echo mysqli_error($koneksi); ?>");
location = "?p=rincian&id=<?php echo $_POST['idc2'] ?>";

</script>


<?php } ?>

<?php 
 } 
}
 ?>
    <div class="table-responsive" style="padding:5px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Tanggal</th>
                    <th>Phone</th>
                    <th>Nama</th>
                    <th>Email</th>
       
          <th>Reason</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($kj2 = mysqli_fetch_array($kj)){

                   $cm = mysqli_query($koneksi,"select * from tb_banding_reject where id_banding = '$kj2[id_banding]'");

                $nkw = mysqli_query($koneksi,"select * from user where username = '$kj2[username]'");
                $nkw2 = mysqli_fetch_assoc($nkw);
            $idd = $kj2['id_banding'];
      $tanggal_awal = $kj2['tanggal2'];
      $tanggal_akhir = date('H:i Y-m-d', strtotime($tanggal_awal . ' +1 year'));
            ?>

                                              <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo substr($kj2['tanggal2'],0,16); ?>
                          <?php if(mysqli_num_rows($cm) >= 1){?>  <span style="color:red;">&nbsp;Rejected 
                            <?php //echo mysqli_num_rows($cm); ?></span>
                            <?php }else{ ?> 
                           
                            <?php } ?>
                          </td>
                             <td><?php echo $kj2['telp']; ?></td>
                            <td><?php echo $nkw2['first_name'] ?> <?php echo $nkw2['second_name'] ?></td>
                            <td><?php echo $kj2['username'] ?></td>
            
                <td><?php echo $kj2['alasan'] ?></td>
            
                            
              <td>


                                <a data-toggle="modal" data-target="#modal-lg_<?php echo $idd ?>" href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-eye"></i></a>

   <!--                             <a href="?p=rincian2&id=<?php //echo $idd ?>" class="btn btn-primary btn-circle btn-sm">Lebih lanjut
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-edit"></i></a>
    -->           
    <!--
                 <a href="kirimulangkode.php?id=<?php echo $idd ?>&p=<?php echo $_GET['p'] ?>" class="btn btn-danger btn-circle btn-sm">Kirim ulang kode
                                &nbsp;&nbsp;&nbsp;
                                <i class="far fa-paper-plane"></i></a>-->
  <!--              
                 <a href="hapustbdemar2.php?id=<?php //echo $idd ?>&idc=<?php //echo $_GET['id'] ?>" class="btn btn-danger btn-circle btn-sm">Hapus
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-trash"></i></a>
-->

                            </td>
                        </tr
                        >
            
            
        <div class="modal fade" id="modal-lg_<?php echo $idd; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
<?php 
$rt = mysqli_query($koneksi,"select * from user where idUser = '$idd'");
$rt2 = mysqli_fetch_array($rt);
?>

              <h4 class="modal-title">121. <?php echo $kj2['username'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            



      <form method="POST" enctype="multipart/form-data" >
            <div class="modal-body" style="overflow:scroll;height:70vh">

      
      
      
            
      <center>
              <img src="https://ufe-section-indonesie.org/ufeapp/images/propic/<?php echo $nkw2['propic'] ?>"  style="width:200px;" />
      </center> 
  
             <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Nama</span>
                  </div>
          
          
          <input type="hidden" name="unik" value="430992371602c6b5423c26.png" />
          <input type="hidden" name="idc2" value="<?php echo $nkw2['idUser'] ?>" />
                  <input type="hidden" name="idc" value="<?php echo $nkw2['idUser'] ?>" />
                  <input readonly type="text" name="nama" value="<?php echo $nkw2['first_name'] ?> <?php echo $nkw2['second_name'] ?>" class="form-control" placeholder="Nama" required>
                </div>
        


                <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Email</span>
                  </div>
          
          
                  <input type="text" name="nama2" value="<?php echo $kj2['username'] ?>" class="form-control" placeholder="" readonly required>
                </div>
                
                
                  <div class="input-group mb-3" style="margin-top:10px;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width:120px;">Phone</span>
                  </div>
          
          
                  <input type="text" name="telpp" value="<?php echo $kj2['telp'] ?>" class="form-control" placeholder="" readonly required>
                </div>

<input type="hidden" value="<?php echo $kj2['id_banding']; ?>" name="id_banding"/>



        <div style="margin-left:10px;">Reason:</div>
        <div>
            
            <textarea class="form-control" style="height:200px;" readonly><?php echo $kj2['alasan'] ?></textarea>
        </div>
        
        
          <div style="margin-left:10px;margin-top:20px;color:red;">Reject:</div>
        <div>
            <?php
  $cm = mysqli_query($koneksi,"select * from tb_banding_reject where id_banding = '$kj2[id_banding]'");
  $cm2 = mysqli_fetch_assoc($cm);

?>
            <textarea class="form-control" onkeyup="reaj<?php echo $idd ?>()" id="reareject<?php echo $idd ?>" style="height:200px;" ><?php echo $cm2['alasan'] ?></textarea>
        </div>
        
        <center>
        <div id="sendrej<?php echo $idd ?>" style="visibility:hidden;"><span class="btn btn-danger btn-sm" onclick="subrej<?php echo $idd; ?>()" style="cursor:pointer;">SEND EMAIL (REJECTED)</span></div>
        </center>
        <script>
            function reaj<?php echo $idd ?>(){
                if(document.getElementById("reareject<?php echo $idd ?>").value == ""){
                    
                      document.getElementById("sendrej<?php echo $idd ?>").style.visibility = "hidden";
                }else{
                      document.getElementById("sendrej<?php echo $idd ?>").style.visibility = "visible";
                }
              
            }
            
            
            
            function subrej<?php echo $idd; ?>(){
                if(document.getElementById("reareject<?php echo $idd ?>").value == ""){
                    alert("Reason cannot be empty");
                }else{
                    // alert(document.getElementById("reareject<?php echo $idd ?>").value);
                    
                               $.post("https://ufe-section-indonesie.org/ufeapp/admin/block_reject.php",
  {
    email: "<?php echo $kj2['username'] ?>",
    token: "<?php echo $nkw2['token_push'] ?>",
    id_banding:"<?php echo $kj2['id_banding'] ; ?>",
    
    text: document.getElementById("reareject<?php echo $idd ?>").value
  },
  function(data, status){
      if(data == "success"){
        location = "https://ufe-section-indonesie.org/ufeapp/admin/index.php?p=block_need_confirm";
      }else{
    alert("Error"+data+"-");
      }
  });
                }
            }
        </script>
        
      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>




              <button type="submit" name="updatekategori" class="btn btn-primary">Accept</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
            
            
             <?php $no++;} ?>          
            
            
                                           
                                                </tbody>
        </table>
    </div>
</div>
   </div>
</div>