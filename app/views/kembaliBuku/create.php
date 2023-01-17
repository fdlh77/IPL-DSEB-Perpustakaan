<div id="page-wrapper">
<div class="row" id="contentInput" >
          <div class="col-lg-12">
            <h2>Buat Permohonan Kartu Keluarga</h2>
            <ol class="breadcrumb">
              <li class="active">Pelayanan</li>
              <li class="active"> Buat Permohonan Kartu Keluarga </li>
            </ol>
          </div>
      </div>
<div class="container">
        <div class="row row-table">
          <div class="col-sm-9 col-table">
          <div class="panel panel-default">
            <div class="panel-heading" style="align:center;">
              <h5>Cari NIK Penduduk</h5>
            </div>
          <div class="panel-body">
          <form method="POST" action="" id="cariPenduduk">
                <div class="form-group form-group-sm">
                    <div class="col-sm-8">
                    <input type="text" class="form-control" name="nik" id="txtcari" placeholder=" Masukan NIK Penduduk">
                </div>
                    <input type="submit" align="right" class="btn btn-success"  value="Cari" name="cari" id="cari">
                    
                </div>
              </div>
</div>
</form>
 </div>

 <div class="row" id="contentJurusan">
                    <div class="col-lg-12">
                  <?php
             if(isset($_POST['nik'])){
                    
        ?>
 <form  action="<?=  BASE_URL?>/Kk/insert" class="form-horizontal" method="POST" enctype="multipart/form-data">
                  <div class="form-group form-group-sm">
                    <label class=" control-label col-sm-3" for="txtno" control-label">No Permohonan KK</label>
                    <div class="col-sm-3">
                    <input type="text" class="form-control" name="no_permohonanKk" id="txtno" value="<?php echo $data['kode']; ?>" readonly>
                </div>
              </div>
               <div class="form-group form-group-sm">
                    <label class=" control-label col-sm-3" for="txtnik" control-label">NIK Pemohon</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="nik" id="txtnik" readonly value="<?php echo $data['ktp']['nik']; ?>">
                </div>
              </div>
              <div class="form-group form-group-sm">
                    <label class=" control-label col-sm-3" for="txtnama" control-label">Nama Pemohon</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama" id="txtnama" readonly value="<?php echo $data['ktp']['nama']; ?>">
                </div>
              </div>
              <div class="form-group form-group-sm">
                    <input type="hidden" class="form-control" name="nik" id="txt_tglLahir"  value="<?php echo $data['ktp']['nik']; ?>">
                    <label class=" control-label col-sm-3" for="txtnama" control-label">Tempat, Tanggal Lahir</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="_ttl" id="txt_ttl" readonly value="<?php echo $data['ktp']['tempatLahir'].",". $data['ktp']['tanggalLahir'] ; ?>">
                </div>
              </div>

              <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Alamat</label>
                    <div class="col-sm-4">
                    <textarea class="form-control" name="alamat" cols="40" rows="5" id="txtalamat" readonly ><?php echo $data['ktp']['alamat']." RT.". $data['ktp']['rt']." RW.".$data['ktp']['rw']." Kelurahan ".$data['ktp']['kelurahan']." Kecamatan Lengkong Kota Bandung" ; ?></textarea>
                </div>
              </div>
               <div class="form-group form-group-sm">
                  <label class=" control-label col-sm-3" for="cbjenis">Jenis Permohonan</label>
                   <div class="col-sm-3">
                    <select name="jenisPermohonan" class="form-control" id="cbjenis"required>
                    <option value="">--Pilih--</option>
                    <option value="Permohonan Baru">Baru</option>
                    <option value="Pindah Datang">Pindah Datang</option>
                    <option value="Cetak Ulang">Cetak Ulang</option>
                    </select >
                  </div>
                 </div> 
              <div class="form-group form-group-sm">
                    <label class=" control-label col-sm-3" for="txt_tglrekam" control-label">Tanggal Permohonan</label>
                    <div class="col-sm-3">
                    <input type="date" class="form-control" name="tglPermohonan" id="txt_permo" placeholder="yyyy-mm-dd" required>
                </div>
              </div>
               <div class="form-group form-group=sm">
                    <center><button type="reset" align="right" class="btn btn-danger">Reset</button>
                    <input type="submit" align="right" class="btn btn-success"  value="Simpan" name="simpan"></center>
                </div>
 <?php
  } 
