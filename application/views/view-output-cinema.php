<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <table align="center">
       <caption><h2>Pemesanan Tiket Cinema 99</h2></caption>
        <tr>
          <td>Nama Pemesan</td>
          <td>:</td>
          <td><?= $nama; ?></td>
        </tr>
        <tr>
          <td>Judul Film</td>
          <td>:</td>
          <td><?= $judul; ?></td>
        </tr>
        <tr>
          <td>Pukul </td>
          <td>:</td>
          <td><?= $pukul; ?> WIB
          </td>
        </tr>
        <tr>
          <td>Tipe Studio</td>
          <td>:</td>
          <td><?= $tipe; ?>
          </td>
        </tr>
        <tr>
          <td>Jumlah Pesan</td>
          <td>:</td>
          <td><?= $jumlah ?>
          </td>
        </tr>
        <?php if($tipe=="Reguler 2D")
        {$harga=40000;}
        elseif ($tipe=="3D") {
          $harga=80000;
          }
          else {$harga=100000;
          }
          $total=$jumlah*$harga;?>
        <tr>
          <td>Harga Tiket</td>
          <td>:</td>
          <td><?= $harga ?>

          </td>
        </tr>
        <tr>
          <td>Total</td>
          <td>:</td>
          <td><?= $total ?>
          </td>
        </tr>
        <tr>

          <th colspan="3"><a href="<?= base_url('cinema')?>">Input Data Lagi</a>
          </th>
        </tr>

      </table>
    </center>
  </body>
</html>
