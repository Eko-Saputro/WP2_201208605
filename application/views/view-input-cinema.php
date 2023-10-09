<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <form action="<?= base_url('cinema/cetak')?>" method="post">
        <table align="center">
         <caption><h2>Pemesanan Tiket Cinema 99</h2></caption>
          <tr>
            <td>Nama Pemesan</td>
            <td>:</td>
            <td><input type="text" name="nama" size="30"></td>
          </tr>
          <tr>
            <td>Judul Film</td>
            <td>:</td>
            <td><select name="judul">
              <option value="">~Pilih~</option>
              <option value="Parasite">Parasite</option>
              <option value="Hereditary">Hereditary</option>
              <option value="The Closet">The Closet</option>
              <option value="Kamen Rider Reiwa">Kamen Rider Reiwa</option>
            </select></td>
          </tr>
          <tr>
            <td>Pukul </td>
            <td>:</td>
            <td><input type="radio" name="pukul" value="14.20"> 14.20
              <input type="radio" name="pukul" value="15.40"> 15.40
              <input type="radio" name="pukul" value="16.40"> 16.40
            </td>
          </tr>
          <tr>
            <td>Tipe Studio</td>
            <td>:</td>
            <td><input type="radio" name="tipe" value="Reguler 2D"> Reguler 2D
              <input type="radio" name="tipe" value="3D"> 3D
              <input type="radio" name="tipe" value="Velvet"> Velvet
            </td>
          </tr>
          <tr>
            <td>Jumlah Pesan</td>
            <td>:</td>
            <td><input type="text" name="jumlah" size="5">
            </td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="Hitung">
              <input type="reset" name="reset" value="Batal">
            </td>
          </tr>

        </table>

      </form>
   </center>
  </body>
</html>
