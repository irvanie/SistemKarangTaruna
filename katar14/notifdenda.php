<?php 
session_start();
include 'koneksi.php';

if (!isset($_SESSION['Admin']))
{
    echo "<script>alert('Anda harus login');</script";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 

require_once 'vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "ACe9843f5994ceda8f7e29c19032bfaa38"; 
$token  = "9bf85508d43815f52032f88735384e63"; 
$twilio = new Client($sid, $token); 

$sql = "SELECT nohp_pinjam,nama_pinjam,denda_telat FROM pinjam WHERE id = '$_GET[id]' ";
$query = mysqli_query($koneksi,$sql);
while ($nomor = mysqli_fetch_array($query))
{
    if(substr(trim($nomor['nohp_pinjam']), 0, 3)=='+62'){
$from = "whatsapp:"."+14155238886";
$to = "whatsapp:".$nomor['nohp_pinjam'];
$body = "Hi " . $nomor['nama_pinjam'] . " Kamu sudah meminjam barang melewati waktu yang ditentukan loh !! dan sekarang kamu harus membayar denda sebanyak *Rp." .$nomor['denda_telat'] ."*.";
$message = $twilio->messages 
                  ->create($to, // to 
                           array( 
                               "from" => $from,       
                               "body" => $body, 
                           )
                  ); 
}elseif(substr(trim($nomor['nohp_pinjam']), 0, 1)=='0'){
    $hp = '+62'.substr(trim($nomor['nohp_pinjam']), 1);
    $from = "whatsapp:"."+14155238886";
    $to = "whatsapp:".$hp;
    $body = "Hi " . $nomor['nama_pinjam'] . " Kamu sudah meminjam barang melewati waktu yang ditentukan loh !! dan sekarang kamu harus membayar denda sebanyak *Rp." .$nomor['denda_telat'] ."*.";
	$message = $twilio->messages 
                  ->create($to, // to 
                           array( 
                               "from" => $from,       
                               "body" => $body, 
                           )
                  );
}
}
// print "notifikasi telah berhasil dikirim";
echo '<script language="javascript" type="text/javascript">';
    echo'if(!alert("Notifikasi Berhasil dikirim")){';//msg
        echo 'location.href="admin/index.php"';
        echo '}';
        echo'</script>';

//header('location:admin/index.php');
