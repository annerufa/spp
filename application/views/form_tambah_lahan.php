<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/slider.css') ?>">
  <script type="text/javascript" src="<?php echo base_url('assets/js/slider.js') ?>"></script>
</head>
<body>

	<h2><strong><p align="center">Form Tambah Lahan</p></strong></h2>
  <br>

  <div class="col-md-8 col-md-offset-2 ">
    <form method="POST" action="proses tambah.php"> 
      <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control border-input" name="Alamat"> </textarea>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Desa</label>
            <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Kecamatan</label>
            <input type="text" class="form-control border-input" name="Nama">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Kota/Kab</label>
            <input type="text" class="form-control border-input" name="TglLahir">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Harga</label>
            <div class="input-group">
              <input type="text" class="form-control border-input">
              <span class="input-group-addon">.00.000</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Luas</label>
            <div class="input-group">
              <input type="text" class="form-control border-input">
              <span class="input-group-addon">/m<sup>2</sup></span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Ketinggian</label>
            <div class="input-group">
              <input type="text" class="form-control border-input">
              <span class="input-group-addon">mdpl</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Curah Hujan</label>
            <div class="input-group">
              <input type="text" class="form-control border-input">
              <span class="input-group-addon">mm/th</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Akses Jalan</label>
              <input type="text" class="form-control border-input">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Suhu</label>
            <div class="input-group">
              <input type="text" class="form-control border-input">
              <span class="input-group-addon"><sup>o</sup>C</span>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <input type="submit" class="form-control btn-confirm-d btn-info btn-fill" value="Tambah" name="">
          </div>
        </div>
      </div>
    </form>
  </div>

</body>
</html>