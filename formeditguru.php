<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>


<?php
include"koneksi.php";
$nip= $_GET["nip"];

 
 $sql2 = ("SELECT * FROM guru WHERE nip='$nip'");
  $query = mysql_query($sql2);
  $data = mysql_fetch_array ($query);
  ?>
   <br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
   <br>&nbsp;</br>
<form id="form1" name="form1" method="post" action="simpaneditguru.php ?nip= <?php echo $data['nip'];?> ">
  <table width="412" border="1" align="center" bgcolor="#CCCCCC">
    <tr>
    <td colspan="2"><p align="center"><strong>FORMULIR DATA GURU</strong></p>    </tr>

    <tr>
      <td width="142">NIP</td>
      <td width="258"><label>
        <input name="tnip" type="text" id="tnip" readonly value="<?php echo $_GET['nip'] ?>" />
      </label></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><label>
        <input name="tnama" type="text" id="tnama" value="<?php echo $_GET['nama'] ?>" />
      </label></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td><input  name="ttgllahir" type="text" id="ttgllahir" value="<?php echo $_GET['tgllahir'] ?>" /></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><input name="tjenkel" type="text"id="tjenkel" value= "<?php echo $_GET['jenkel'] ?>" />
     
      </label></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td><input name="tagama" id="tagama" value= "<?php echo $_GET['agama'] ?>" > </td>
    </tr>
    <tr>
      <td>Jabatan</td>
      <td><input name="tjabatan" type="text"id="tjabatan" value="<?php echo $_GET['jabatan'] ?>" /></td>
    </tr>
    <tr>
      <td>Jenjang Pendidikan</td>
      <td><input name="tjenpen" type="text" id="tjenpen" value="<?php echo $_GET['jenpen'] ?>" /></td>
    </tr>

     <tr>
      <td>mata pelajaran</td>
      <td><input name="tmapel" type="text" id="tmapel" value="<?php echo $_GET['mapel']?>"/> </td>
    </tr>
   
    <tr>
      <td height="44" colspan="2"><div align="center">
          <label>
          <input type="submit" name="button" id="button" value="Update" />
          </label>
          <label>
          <a href="tampilguru.php"> <input type="button" name="button3" id="button3" value="Batal" /></a>         
           </label>
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</div>
</div>
</body>
</html>
