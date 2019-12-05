<section class="content">
	<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
                    <div class="panel-heading">
							<h1 class="panel-title">Data Donasi</h1>
						</div>
                        <div class="panel-body">
                        <a href="#tambah" class="btn btn-primary" data-toggle="modal" style="float: left;">Tambah</a><br>
                        <div class="panel-heading"></div>
                        <table class="table table-hover table-striped">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Id</th>
                      <th>Nama Donatur</th>
                      <th>No Telp</th>
                      <th>Email</th>
                      <th>tanggal</th>
                      <th>Nominal</th>
                      <th>Via</th>
                      <th colspan="2" style="text-align:center; left:10px;"></th>
                  </tr>
                  </thead>

                  <tbody>

           	<?php $no = 0; foreach($data_donasi as $dns): $no++;?>


               <tr>
       
                   <td><?=$no?></td>
                   <td><?=$dns->id_donasi?></td>
                   <td><?=$dns->nama?></td>
                   <td><?=$dns->no_telp?></td>
                   <td><?=$dns->email?></td>
                   <td><?=$dns->tanggal?></td>
                   <td><?=$dns->nominal?></td>
                   <td><?=$dns->alat_pembayaran?></td>
                   <td colspan><a href="#update_donasi" data-toggle="modal" onclick="tm_detail(<?=$dns->id_donasi?>)"  class="btn btn-info">Ubah</a>
                   <a href="<?=base_url('index.php/donasi/hapus_donasi/'.$dns->id_donasi)?>" onclick="return confirm('apakah anda yakin untuk menghapus?')" class="btn btn-danger">Hapus</a></td>
       
               </tr>

           <?php endforeach?>
            </tbody>
              </table>

              <div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah Donasi</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/donasi/simpan_donasi')?>" method="post">
        Nama Donatur
        <input type="text" name="nama" class="form-control"><br>
        No Telp
        <input type="number" name="no_telp" class="form-control"><br>
        Email
        <input type="text" name="email" class="form-control"><br>
        Tanggal
        <input type="date" name="tanggal" class="form-control"><br>
        Nominal
        <input type="text" name="nominal" class="form-control"><br>
        Pembayaran Via
        <input type="text" name="alat_pembayaran" class="form-control"><br>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="float: right;">
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="update_donasi">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Ubah Donasi</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/donasi/update_donasi')?>" method="post">
        <input type="hidden" name="id_donasi" id="id_donasi">
        Nama Donatur
        <input type="text" name="nama" class="form-control"><br>
        No Telp
        <input type="number" name="no_telp" class="form-control"><br>
        Email
        <input type="text" name="email" class="form-control"><br>
        Tanggal
        <input type="date" name="tanggal" class="form-control"><br>
        Nominal
        <input type="text" name="nominal" class="form-control"><br>
        Pembayaran Via
        <input type="text" name="alat_pembayaran" class="form-control"><br>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="float: right;">
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

              <?php if ($this->session->flashdata('pesan')!=null): ?>
                  <div class="alert alert-success"><?= $this->session->flashdata('pesan'); ?></div> 
              <?php endif ?>
                        </div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
</section>

<script>
  function tm_detail(id_donasi) {
    $.getJSON("<?=base_url()?>index.php/Donasi/get_detail_donasi/"+id_donasi,function(data){
      $('#id_donasi').val(data['id_donasi']);
      $('#nama').val(data['nama']);
      $("#no_telp").val(data['no_telp']);
      $("#email").val(data['email']);
      $("#tanggal").val(data['tanggal']);
      $("#nominal").val(data['nominal']);
      $("#alat_pembayaran").val(data['alat_pembayaran']);
    });
  }
</script>
