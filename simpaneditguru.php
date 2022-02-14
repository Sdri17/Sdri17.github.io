<?php
include"koneksi.php";
$nip = $_POST["tnip"];
$nama= $_POST["tnama"];
$tanggal = $_POST["ttgllahir"];
$jenkel = $_POST['tjenkel'];
$agama = $_POST['tagama'];
$jabatan = $_POST['tjabatan']; 
$jenpen = $_POST['tjenpen'];
$mapel = $_POST['tmapel'];

mysql_query("update guru set  nip='$nip' ,nama='$nama', tgl_lahir='$tanggal', jenkel='$jenkel', agama='$agama',jabatan='$jabatan',jenpen='$jenpen', mapel='$mapel' where nip='$nip'");
?>
<meta http-equiv="refresh" content="1,tampilguru.php" />