<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title></head>

 <br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
   <br>&nbsp;</br>
<form id="form1" name="form1" method="post" action="simpanguru.php">
  
  <table width="375" border="1" align="center" bgcolor="#CCCCCC">
    <tr>
      <td colspan="2"><p align="center"><strong>FORMULIR DATA GURU</strong></p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td width="142">NIP</td>
      <td width="221"><label>
      <input type="text" name="tnip" id="tnip" placeholder="Masukkan NIP" required autocomplete"off" />
      </label></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><label>
      <input name="tnama" type="text" id="tnama" placeholder ="Masukkan nama" required  autocomplete"off" />
      </label></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td><input  name="ttgllahir" type="date" id="ttgllahir" value="<?=date("10-11-2021")?>") required></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><label>
        <select name="tjenkel" id="tjenkel" required>
          <option>Laki-laki</option>
          <option>Perempuan</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td><select name="tagama" id="tagama" required>
        <option>Islam</option>
        <option>Protestan</option>
        <option>Katholik</option>
        <option>Hindu</option>
        <option>Budha</option>
      </select></td>
    </tr>
    <tr>
      <td>Jabatan</td>
      <td><input type="text" name="tjabatan" id="tjabatan" placeholder="Masukkan jabatan" required autocomplete"off"/></td>
    </tr>
    <tr>
      <td>Jenjang Pendidikan</td>
      <td><input type="text" name="tjenpen" id="tjenpen" placeholder="Masuukkan jenjang pendidikan" required autocomplete"off"/></td>
    </tr>
    <tr>
      <td>Mata Pelajaran</td>
      <td><input type="text" name="tmapel" id="tmapel" placeholder="Masukkan Mata Pelajaran" required autocomplete"off"/></td>
    </tr>
    <tr>
      <td height="44" colspan="2"><div align="center">
      <label></label>
      <div align="center">
        <label>
        <input type="submit" name="button" id="button" value="Simpan" />
        </label>
        <label>
        <input type="reset" name="button2" id="button2" value="Batal" />
        </label>
         <label>
           <a href="tampilguru.php"><input type="button" name="button3" id="button3" value="tampil" />        
           </label></a>
      
</div></tr>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>

</body>
</html>
