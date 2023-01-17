<div id="page-wrapper">
<div class="row" id="contentInput" >
          <div class="col-lg-12">
            <h1>PEMINJAMAN BUKU</h1>
            <ol class="breadcrumb">
              <li class="active">Pelayanan</li>
              <li class="active"> PEMINJAMAN BUKU</li>
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

 <?php if(isset($_POST['nik'])): ?>
 <div class="row" id="contentJurusan">
                    <div class="col-lg-12">
       <form  action="<?= BASE_URL ?>/ktp/insert" class="form-horizontal" method="POST" enctype="multipart/form-data">
                  <div class="form-group form-group-sm">
                    <label class=" control-label col-sm-3" for="txtno" control-label">No Permohonan E-KTP</label>
                    <div class="col-sm-3">
                    <input type="text" class="form-control" name="no_permohonanKtp" id="txtno" value="<?php echo $data['kode']; ?>" readonly>
                </div>
              </div>
               <div class="form-group form-group-sm">
                    <label class=" control-label col-sm-3" for="txtnik" control-label">NIK</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="nik" id="txtnik" readonly value="<?php echo $data['ktp']['nik']; ?>">
                </div>
              </div>
              <div class="form-group form-group-sm">
                    <label class=" control-label col-sm-3" for="txtnama" control-label">Nama Penduduk</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama" id="txtnama" readonly value="<?php echo $data['ktp']['nama']; ?>">
                </div>
              </div>
              <div class="form-group form-group-sm">
                    <label class=" control-label col-sm-3" for="txt_ttl" control-label">Tempat, Tanggal Lahir</label>
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
                    <label class=" control-label col-sm-3" for="txt_tglpenyerahan" control-label">Tanggal Penyerahan Berkas</label>
                    <div class="col-sm-3">
                    <input type="date" class="form-control" name="tgl_penyerahanBerkas" id="txt_tglpenyerahan" placeholder="yyyy-mm-dd" required>
                </div>
              </div>
              <div class="form-group form-group-sm">
                    <label class=" control-label col-sm-3" for="txt_tglrekam" control-label">Tanggal Rekam</label>
                    <div class="col-sm-3">
                    <input type="date" class="form-control" name="tglrekam" id="txt_tglrekam" placeholder="yyyy-mm-dd" required>
                </div>
              </div>
               <div class="form-group form-group=sm">
                    <center><button type="reset" align="right" class="btn btn-danger">Reset</button>
                    <input type="submit" align="right" class="btn btn-success"  value="Simpan" name="simpan"></center>
                </div>
              <?php endif ?>