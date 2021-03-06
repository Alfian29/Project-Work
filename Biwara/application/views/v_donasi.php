<!DOCTYPE html>
<html>
  <head>
  <link href="<?php echo base_url(); ?>assets/images/icon.ico" rel="shortcut icon">
	<title>Donasi</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/donasi.css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/grid.css" media="screen">
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>

  <div class="menu">
		<div class="container clearfix">

			<div id="logo" class="grid_3">
				<img src="<?php echo base_url(); ?>assets/images/biwara.png">
			</div>
 
		</div>
	</div>
<br><br><br><br><br>
    <div class="testbox">
    <form action="<?=base_url('index.php/donasi/simpan_donasi')?>" method="post">
      <div class="banner">
    <h1>Donasi</h1>
      </div>
      <br/>
      <fieldset>
        <legend><b>Data Diri</b></legend>
        <div class="colums">
          <div class="item">
            <label for="fname"><b>Nama<span>*</span></b></label>
            <input type="text" name="nama" class="form-control" required placeholder="Nama Pelapor">
          </div>
          <div class="item">
            <label for="address"><b>Telepon<span>*</span></b></label>
            <input type="number" name="no_telp" class="form-control"  required placeholder="Nomor Pelapor">
          </div>
          <div class="item">
            <label for="phone"><b>Email</b></label>
            <input type="text" name="email" class="form-control"  required placeholder="Email Pelapor">
          </div>
          <div class="item">
            <label for="saddress"><b>Tanggal</b></label>
            <input type="date" name="tanggal" class="form-control">
          </div>
      </fieldset>
      <br/><br>
      <fieldset>
      <legend><b>Detail</b></legend>
      <div class="colums">
      </div>
      <div class="item">
      <label for="amount"><b>Nominal Donasi<span>*</span></b></label>
      <input type="text" name="nominal" class="form-control" required placeholder="Penulisan Salah(Rp 1.000,-) - Penulisan Benar(1000)">
      </div>
      <div class="item">
      <label for="donation"><b>Pembayaran Via</b></label>
      <input type="text" name="alat_pembayaran" class="form-control" required placeholder="Via Transfer Bank BCA/BNI/BRI Dsb.">
      </div>
      </fieldset>
      <div class="btn-block">
      <button type="order" href="/" onclick="return confirm('apakah anda yakin untuk donasi?')" class="btn btn-danger"><b>Donasikan</b></button>

      </div>
    </form>
    </div>
  </body>
</html>