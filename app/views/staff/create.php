<div id="page-wrapper">

<div class="row" id="contentInput" >
          <div class="col-lg-12">
            <h1>Staff</h1>
            <ol class="breadcrumb">
              <li class="active"> Master Data</li>
              <li class="active">Staff</li>
              <li class="active">Tambah Data Staff</li>
            </ol>
          </div>
      </div>

<form  action="<?= BASE_URL ?>/staff/insert" class="form-horizontal" method="POST" enctype="multipart/form-data">
                  <div class="form-group form-group-sm">

                    <label class=" control-label col-sm-3" for="txtnip" control-label">NIP</label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" name="nip" id="txtnis" required>
                </div>
              </div>
                 <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Nama Staff</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama" id="txtnama" required >
                </div>
              </div>
              <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Jenis Kelamin</label>
                    <div class="col-sm-7">
                    <input type="radio"  name="jenis_kelamin" class="form control" id="laki" value="Laki-Laki">Laki-Laki
                    <input type="radio"  name="jenis_kelamin" class="form control" id="perempuan" value="Perempuan">Perempuan
                </div>
              </div>
              <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Tempat Lahir</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="tempat_lahir" id="txttempat"  required >
                </div>
              </div>
                 <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Tanggal Lahir</label>
                    <div class="col-sm-4">
                    <input type="date" class="form-control" name="tgl_lahir" id="txttanggal" placeholder="yyyy-mm-dd"  required >
                </div>
              </div>
               <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Alamat</label>
                    <div class="col-sm-4">
                    <textarea class="form-control" name="alamat" id="txtalamat" required></textarea>
                </div>
              </div>
                <div class="form-group form-group-sm">
                  <label class=" control-label col-sm-3" for="cbjabatan">Jabatan</label>
                   <div class="col-sm-3">
                    <select name="jabatan" class="form-control" id="jabatan"required>
                    <option value="">--Pilih--</option>
                    <option value="Bagian Pelayanan">Bagian Pelayanan</option>
                    <option value="Kasi Pelayanan">Kasi Pelayanan</option>
                    <option value="Camat">Camat</option>
                    </select>
                  </div>
                 </div>
                 <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Nomor Telpon</label>
                    <div class="col-sm-4">
                    <input type="number" class="form-control" name="no_tlp" id="txtnotlp"  required >
                </div>
              </div>
              	 <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Foto</label>
                    <div class="col-sm-4">
                    <input type="file" class="form-control" name="fotostaff" id="fotostaff" required>
                </div>
              </div>
              
                 <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Password</label>
                    <div class="col-sm-3">
                    <input type="text" class="form-control" name="password" id="txtpass" required >
                </div>
              </div>
              	<div class="form-group form-group=sm">
                    <center><button type="reset" align="right" class="btn btn-danger">Reset</button>
                    <input type="submit" align="right" class="btn btn-success"  value="Simpan" name="simpan"></center>
                </div>
                
                </form>