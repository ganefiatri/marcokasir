<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Struk Penjualan</title>
<link rel="icon" type="image/png" href="<?php echo base_url('assets/') ?>/img/favicon.png"/>
<style type="text/css">
body {
  font-family: Calibri;
  font-size: 11pt;
  color: #000;}
</style>
</head>

<body onload="print()">
<table style="margin-left: -11px" width="" border="0" align="center">
  <tr>
    <td colspan="3" align="center"><font color="#000000" size="+2" style="text-transform:uppercase"><?php echo $toko->nm_toko; ?></font></td>
  </tr>
  <tr>
    <td colspan="" align="center"><?php echo $faktur->no_faktur_penjualan; ?></td>
    <td colspan="" align="center"><?php echo $tgl . " " . $waktu ?></td>
  </tr>
  <tr>
    <td colspan="4"><hr /> </td>
  </tr>
  </table>
<table style="margin-left: -11px" width="" border="0" align="center">
  <?php foreach ($produk as $key): ?>
  <tr>
    <td>[<?php echo $key->kd_barang ?>]
      <?php if ($key->diskonpersen > 0): ?>
        <i> ~ Disc. <?php echo $key->diskonpersen ?> %</i>
       <?php endif?>
    <br>
    <div style="font-size: 10px;text-transform:uppercase;"><?php echo $key->nm_barang ?></div></td>
    <td valign="bottom"><?php echo $key->jumlah ?></td>
    <td valign="bottom"><div align="right"><?php echo number_format($key->harga, 0, ',', '.') ?></div> </td>
    <td valign="bottom"><div align="right"><?php echo number_format($key->sub_total_jual, 0, ',', '.') ?></div></td>
  </tr>
<?php

$total_item += $key->jumlah;
$subtotal += $key->sub_total_jual;
?>
 <?php endforeach?>
 <tr>
    <td colspan="4"><hr /> </td>
  </tr>
  <tr>
    <td>TOTAL</td>
    <td colspan="2"><?php echo $total_item ?> ITEM</td>
    <td><div align="right"><?php echo number_format($subtotal, 0, ',', '.') ?></div></td>
  </tr>
  <tr>
    <td align="right">TUNAI</td>
    <td></td>
    <td colspan="2"><div align="right"><?php echo number_format($bayar, 0, ',', '.') ?></div></td>
  </tr>
  <tr>
    <td align="right">KEMBALI</td>
    <td></td>
    <td colspan="2"><div align="right"><?php echo number_format($bayar - $subtotal, 0, ',', '.') ?></div></td>
  </tr>
  <tr>
    <td colspan="4" align="center"><hr />
    <p>TERIMA KASIH ATAS KUNJUNGAN ANDA</p></td>
  </tr>
</table>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</body>
</html>
