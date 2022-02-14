<?php
include"koneksi.php";
$nip = $_GET["nip"];
$data=mysql_query("delete from guru where nip='$nip'");
echo "<script>alert ('data sudah dihapus')</script>";
?> 
<meta http-equiv="refresh" content="1,tampilguru.php" />