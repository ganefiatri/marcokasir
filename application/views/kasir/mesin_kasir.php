  <div class="content-wrapper" style="margin-bottom: 20px;">
    <div style="margin-left: 20px;margin-right: 20px">
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">
              <table style="width: 100%;height: 120px;">
                <tr>
                  <td style="font-size: 18pt">TOTAL</td>
                  <?php if ($faktur->diskon > 0): ?>
                      <td align="right" style="font-size: 32pt"><strong><?php echo number_format($faktur->total_penjualan_sdiskon, 0, ',', '.') ?></strong></td>
                    <?php else: ?>
                      <td align="right" style="font-size: 32pt"><strong><?php echo $belanja->tot_bel?></strong></td>
                  <?php endif?>
                </tr>
                <tr>
                  <td style="font-size: 18pt;color: red;">DISKON</td>
                  <td align="right" style="font-size: 32pt;color: red;"><strong><?php echo number_format($faktur->diskon, 0, ',', '.') ?></strong></td>
                </tr>
              </table>
              <hr>
              <div>
               <div class="form-horizontal">
                       <div class="form-group">
                           <form class="form-inline" action="<?php echo base_url('kasir/input_meja/') ?>" method="post">
                           <label class="control-label col-sm-4" for="no_meja">No Meja</label>
                           <div class="col-sm-5">
                               <select class="form-control" name="no_meja" id="no_meja">
                                   <option value="0">-- Pilih Meja --</option>
                                   <option value="Meja U Outdoor 1">Meja U Outdoor 1</option>
                                   <option value="Meja L Outdoor 2">Meja L Outdoor 2</option>
                                   <option value="Meja Sudut Semen Outdoor 3">Meja Sudut Semen Outdoor 3</option>
                                   <option value="Meja Kaleng Outdoor 4">Meja Kaleng Outdoor 4</option>
                                   <option value="Meja Samping U Outdoor 5">Meja Samping U Outdoor 5</option>
                                   <option value="Meja Rumput Outdoor 6">Meja Rumput Outdoor 6</option>
                                   <option value="Meja Ban Outdoor 7">Meja Ban Outdoor 7</option>
                                   <option value="Meja Outdoor 8">Meja Outdoor 8</option>
                                   <option value="Meja Indoor 9">Meja Indoor 9</option>
                                   <option value="Meja Indoor 10">Meja Indoor 10</option>
                                   <option value="Meja Indoor 11">Meja Indoor 11</option>
                                   <option value="Meja Indoor Meja Panjang 12">Meja Indoor Meja Panjang 12</option>
                                   <option value="Meja Indoor Bawah Pohon 13">Meja Indoor Bawah Pohon 13</option>
                                   <option value="Meja Indoor Atas 14">Meja Indoor Atas 14</option>
                                   <option value="Meja Indoor Atas 15">Meja Indoor Atas 15</option>
                                   <option value="Meja Indoor 16">Meja Indoor 16</option>
                                   <option value="Meja Indoor 17">Meja Indoor 17</option>
                                   <option value="Meja Indoor 18">Meja Indoor 18</option>
                                   <option value="Meja Indoor 19">Meja Indoor 19</option>
                                   <option value="Meja bar">meja bar</option>
                               </select>
                           </div>
                               <div class="col-sm-3">
                                   <input type="hidden" name="nofak_meja" id="nofak_meja" value="<?php echo $faktur->no_faktur_penjualan ?>">
                                    <button type="submit" class="btn btn-danger pull-right">Pilih</button>
                               </div>
                           </form>
                       </div>
                <div class="form-group">
                  <label class="control-label col-sm-4" for="kd_barang">Kode Menu</label>
                  <div class="col-sm-8">
                    <input type="hidden" name="nofak" id="nofak" value="<?php echo $faktur->no_faktur_penjualan ?>">
                    <input type="text" class="form-control" id="kd_barang" name="kd_barang" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4" for="nm_barang">Nama Menu</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nm_barang" name="nm_barang" placeholder="Cari Nama Menu">
                  </div>
                </div>
              </div>
              </div>
              <hr>
              <div>
                <form class="form-inline" action="<?php echo base_url('kasir/hitung-diskon/') ?>" method="post">
                  <input type="hidden" name="nofak_dis" id="nofak_dis" value="<?php echo $faktur->no_faktur_penjualan ?>">
                  <input type="hidden" name="sum_belanja" id="sum_belanja" value="<?php echo $belanja->tot_bel ?>">
                  <input style="width: 40%;text-align: right;" type="text" class="form-control" id="diskon" placeholder="Diskon (Rp)" name="diskon" required="required">
                  <input  style="width: 55%" type="text" class="form-control pull-right" id="ket_dis" placeholder="KET" name="ket_dis">
                <br><br>
                <button type="submit" class="btn btn-success pull-right">Hitung Diskon</button>
                </form>
              </div>
              <br><hr>
                <div>
                <form class="form-inline" action="<?php echo base_url('kasir/go_to_bayar/') ?>" method="post">
                <input type="hidden" name="nofak_bayar" id="nofak_bayar" value="<?php echo $faktur->no_faktur_penjualan ?>">
                <input type="hidden" name="total_belanja" id="total_belanja" value="<?php echo $belanja->tot_bel ?>">
                <input type="hidden" name="diskon_belanja" id="diskon_belanja" value="<?php echo $faktur->diskon ?>">
                <input type="hidden" name="diskon_ket" id="diskon_ket" value="<?php echo $faktur->ket_diskon ?>">
                <button type="submit" class="btn btn-danger pull-right">Bayar</button>
                </form>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading">
                Faktur : <?php echo $faktur->no_faktur_penjualan ?><span class="pull-right"><?php echo date_indo($tgl) ?> <span id="waktu"></span></span>
            </div>
            <div class="panel-body">
            <table id="tbUser" class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <td align="center">Aksi</td>
                  <td>Kode</td>
                  <td>Nama Menu</td>
                  <td align="right">Harga</td>
                  <td align="center">Jumlah</td>
                  <td align="center">Diskon %</td>
                  <td align="right">Subtotal</td>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($list->result() as $key): ?>
                <tr>
                  <td align="center"><a onclick="return confirm('Yakin hapus data ini?');" href="<?php echo base_url('kasir/hapus-barang-beli/') . $key->no_faktur_penjualan . "/" . $key->kd_barang ?>">Hapus</a></td>
                  <td><?php echo $key->kd_barang ?></td>
                  <td><?php echo substr($key->nm_barang, 0, 40) ?></td>
                  <td align="right"><?php echo number_format($key->harga, 0, ',', '.') ?></td>
                  <td align="center">
                  <form action="<?php echo base_url('kasir/edit_jumlah_beli/') ?>" method="post">
                    <input name="kd_barang_e" type="hidden" id="kd_barang_e" value="<?php echo $key->kd_barang ?>"/>
                    <input name="nofak_e" type="hidden" id="nofak_e" value="<?php echo $key->no_faktur_penjualan ?>"/>
                    <input style="text-align: center;" name="jml" type="text" id="jml" size="3" onkeypress="return isNumber(event)" value="<?php echo $key->jumlah ?>" />
                  </form>
                  </td>
                  <td align="center">
                  <form action="<?php echo base_url('kasir/edit_diskon_beli/') ?>" method="post">
                    <input name="kd_barang_d" type="hidden" id="kd_barang_d" value="<?php echo $key->kd_barang ?>"/>
                    <input name="nofak_d" type="hidden" id="nofak_d" value="<?php echo $key->no_faktur_penjualan ?>"/>
                    <input name="dis_d" type="text" style="text-align: center;" id="dis_d" size="2" onkeypress="return isNumber(event)" value="<?php echo $key->diskonpersen ?>" />%
                  </form>
                  </td>
                  <td align="right"><?php echo number_format($key->sub_total_jual, 0, ',', '.') ?></td>
                </tr>
                <?php
                $tot_item += $key->jumlah;
                $tot_belanja += $key->sub_total_jual;
                ?>
                <?php endforeach?>
              </tbody>
              <tr>
                <td colspan="4" align="right"><strong>Total</strong></td>
                <td align="center"><strong><?php echo $tot_item ?> Items</strong></td>
                <td></td>
                <td align="right"><strong>Rp. <?php echo number_format($tot_belanja, 0, ',', '.') ?></strong></td>
              </tr>
            </table>
            <a class="btn btn-danger pull-right" href="<?php echo base_url('kasir/penjualan-pending/') ?>">Pending</a>
            </div>
          </div>
        </div>
    </div>
  </div>

    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <script src="<?php echo base_url() ?>/assets/js/jquery-3.3.1.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/custom.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/toastr.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.price_format.min.js"></script>
    <script>
      $('form').attr('autocomplete', 'off');
      $('input').attr('autocomplete', 'off');
      $("ul.nav li.dropdown").hover(function(){$(this).find(".dropdown-menu").stop(!0,!0).delay(100).fadeIn(500)},function(){$(this).find(".dropdown-menu").stop(!0,!0).delay(100).fadeOut(500)});
      var pesan="<?php echo $this->session->flashdata('msg'); ?>",error="<?php echo $this->session->flashdata('error'); ?>";pesan?(toastr.options={positionClass:"toast-top-right"},toastr.success(pesan)):error&&swal(error,"","error");

      function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('waktu').innerHTML = h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
      }

      function checkTime(i) {
          if (i < 10) {i = "0" + i};
          return i;
      }

    $(document).ready(function() {
        startTime();
        $('#kd_barang').focus();
        $('#nm_barang').autocomplete({
          source: "<?php echo base_url('kasir/get_autocomplete/?'); ?>",
          select: function (event, ui) {
            $('[name="nm_barang"]').val(ui.item.label);
            $('[name="kd_barang"]').val(ui.item.kode);
            $('#kd_barang').focus();
          }
        });
    });

    $("#kd_barang").keypress(function(e){
        var kd_barang= $('#kd_barang').val();
        var nofak = $('#nofak').val();
        if(e.which==13){
          if (kd_barang) {
            window.top.location.href = "<?php echo base_url('kasir/cekbarang/') ?>"+nofak+"/"+kd_barang;
          }
          return false;
        }
    });

    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
      return true;
    }

    $(function(){
        $('#diskon').priceFormat({
                prefix: '',
                centsLimit: 0,
                thousandsSeparator: '.'
        });
    });
    </script>

</body>
</html>