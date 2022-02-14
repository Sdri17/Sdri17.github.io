

 <br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
   <br>&nbsp;</br>
 <form id="form1" name="form1" method="" action="">
  <table width="100%" align="center" bgcolor="#CCCCCC">
    </p>
  <tr>
      <th scope="col"><div align="center">DATA<strong> GURU/PEGAWAI </strong></div></th>
    </tr>
    <tr>
      <td><div align="center"><strong>SMK SWASTA HKBP AMBARITA</strong></div></td>
    </tr>
    <tr>
      <td>  
    <form method="get" action="">
  <input type="text" name="keyword" id="keyword" placeholder="masukkan kata kunci"  />
    <input type="submit" name="bcari" id="bcari" value="Cari" />
    </form>
    </td>
    </tr>
    <tr>
      <td><a href="formguru.php">+Tambah data</a></td>
    </tr>
  </table>
  <table border ="1"width ="100%" colspan="2" align="center" bgcolor="#CCCCCC">
  
    <tr bgcolor="cyan" /tr>
   
      <th> No</th>
      <th >NIP</th>
      <th >Nama</th>
      <th> Tanggal Lahir </th>
      <th>Jenis Kelamin </th>
      <th>Agama</th>
      <th>Jabatan</th>
      <th>Jenjang Pendididkan </th>
      <th>Mata Pelajaran</th>
      <th>aksi </th>
    </tr>
    <tr>
<?php
include"koneksi.php";
$no = 0;
$tampung=mysql_query("select*from guru");
if(isset($_GET ['bcari'])){
$cari=$_GET['keyword'];
$tampung=mysql_query("select * from guru where nip like '%".$cari."%' or nama  like '%".$cari."%'");}
while($data=mysql_fetch_array($tampung))
{
$no++;
?>
      <td><?php echo $no ?> </td>
      <td><?=$data[1]?>
      </td>
      <td><?=$data[2]?>
      </td>
      <td><?=$data[3]?>
      </td>
      <td><?=$data[4]?>
      </td>
      <td><?=$data[5]?>
      </td>
      <td><?=$data[6]?>
      </td>
      <td><?=$data[7]?>
      </td>
      <td><?=$data[8]?>
      </td>
      <td>
      <a href="formeditguru.php ? nip=<?php echo $data[1]?> &nama=<?php echo $data[2]?> &tgllahir=<?php echo $data[3]?> &jenkel=<?php echo $data[4]?> &agama=<?php echo $data [5] ?> &jabatan= <?php echo $data[6] ?> &jenpen=<?php echo $data[7]?> &mapel=<?php echo $data [8]?>"> edit</a> 
      <a href="simpanhapusguru.php ?nip=<?=$data[1]?>" onclick="return confirm('yakin data ini akan dihapus?')">hapus</a> </td>
    </tr>
    <?php
 };
?>
  </table>
  <p>&nbsp;</p>
</form>

</body>
