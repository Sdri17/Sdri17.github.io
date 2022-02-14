<?php
include"koneksi.php";
// $conn=mysql_connect("localhost:3307","root","");
// mysql_select_db("git");
$nip = $_POST["tnip"];
$nama= $_POST["tnama"];
$tanggal = $_POST["ttgllahir"];
$jenkel = $_POST['tjenkel'];
$agama = $_POST['tagama'];
$jabatan = $_POST['tjabatan'];
$jenpen = $_POST['tjenpen'];
$mapel = $_POST['tmapel'];

// $cek=mysql_query("SELECT*from guru WhERE nip='$nip'");
// $ada=mysql_num_rows($cek);
// if ($ada >=1)
//  {
//     echo "data sudah ada";
// }
// else{
//    $simpan= mysql_query("insert into guru values('$nip','$nama','$tanggal','$jenkel','$agama','$jabatan','$jenpen','$mapel')");
// }
$cek=mysql_query("select * from guru where nip='$nip'");
$jumlah = mysql_num_rows ($cek);
if ($jumlah > 0)
{
echo "<script>alert ('data sudah ada')</script>";
}
else {
$simpan=mysql_query ("insert into guru values('', 'nip' ,'$nama' ,'$tanggal', '$jenkel','$agama','$jabatan','$jenpen','$mapel')");
echo "<script> alert ('data sudah disimpan') </script>";
 }
?>

<meta http-equiv="refresh" content="1,formguru.php" />