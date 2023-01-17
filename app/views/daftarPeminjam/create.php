<div id="page-wrapper">

<div class="row" id="contentInput" >
          <div class="col-lg-12">
            <h1>Peminjam</h1>
            <ol class="breadcrumb">
              <li class="active"> Master Data</li>
              <li class="active"> Peminjam</li>
              <li class="active"> Tambah Data Peminjam</li>
            </ol>
          </div>
      </div>

<form  action="<?= BASE_URL ?>/penduduk/insert" class="form-horizontal" method="POST" enctype="multipart/form-data">
                  <div class="form-group form-group-sm">

                    <label class=" control-label col-sm-3" for="txtnik" control-label">NIK</label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" name="nik" id="txtnik" required>
                </div>
              </div>
                 <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Nama Peminjam</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama" id="txtnama" required >
                </div>
              </div>
              <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Tempat Lahir</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="tempatLahir" id="txttempat"  required >
                </div>
              </div>
              <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Tanggal Lahir</label>
                    <div class="col-sm-4">
                    <input type="date" class="form-control" name="tanggalLahir" id="txttanggal" placeholder="yyyy-mm-dd"  required >
                </div>
              </div>
               <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Jenis Kelamin</label>
                    <div class="col-sm-7">
                    <input type="radio"  name="jenisKelamin" class="form control" id="laki" value="Laki-Laki">Laki-Laki
                    <input type="radio"  name="jenisKelamin" class="form control" id="perempuan" value="Perempuan">Perempuan
                </div>
              </div>
               <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Alamat</label>
                    <div class="col-sm-4">
                    <textarea class="form-control" name="alamat" id="txtalamat" required></textarea>
                </div>
              </div>
               <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">RT</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="rt" id="txtrt"  required >
                </div>
              </div>
               <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">RW</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="rw" id="txtrw"  required >
                </div>
              </div>
                <div class="form-group form-group-sm">
                  <label class=" control-label col-sm-3" for="cbkelurahan">Kelurahaan</label>
                   <div class="col-sm-3">
                    <select name="kelurahan" class="form-control" id="jabatan"required>
                    <option value="">--Pilih--</option>
                    <option value="Burangrang">Burangrang</option>
                    <option value="Cijagra">Cijagra</option>
                    <option value="Cikawao">Cikawao</option>
                    <option value="Lingkar Selatan">Lingkar Selatan</option>
                    <option value="Malabar">Malabar</option>
                    <option value="Paledang">Paledang</option>
                    <option value="Turangga">Turangga</option>
                    </select >
                  </div>
                 </div>             
               <div class="form-group form-group-sm">
                  <label class=" control-label col-sm-3" for="cbagama">Agama</label>
                   <div class="col-sm-3">
                    <select name="agama" class="form-control" id="jabatan"required>
                    <option value="">--Pilih--</option>
                    <option value="Islam">Islam</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Khonghucu">Khonghucu</option>
                    </select >
                  </div>
                 </div>
                 <div class="form-group form-group-sm">
                  <label class=" control-label col-sm-3" for="cbpendidikan">Pendidikan</label>
                   <div class="col-sm-3">
                    <select name="pendidikan" class="form-control" id="cbpendidikan"required>
                    <option value="">--Pilih--</option>
                    <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                    <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                    <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                    <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                    <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                    <option value="Diploma I/II">Diploma I/II</option>
                    <option value="Akademi/Diploma III/S.Muda">Akademi/Diploma III/S.Muda</option>
                    <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                    <option value="Strata II">Strata II</option>
                    <option value="Strata III">Strata III</option>
                    </select >
                  </div>
                 </div>
                 <div class="form-group form-group-sm">
                  <label class=" control-label col-sm-3" for="cbastatus">Status Perkawinan</label>
                   <div class="col-sm-3">
                    <select name="statusPerkawinan" class="form-control" id="jabatan"required>
                    <option value="">--Pilih--</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Cerai Hidup">Cerai Hidup</option>
                    <option value="Cerai Mati">Cerai Mati</option> 
                    </select>
                  </div>
                 </div>
                 <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Pekerjaan</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="pekerjaan" id="txtpekerjaan"  required >
                </div>
              </div>
              <div class="form-group form-group-sm">
               <label class=" control-label col-sm-3" for="cbgol">Golongan Darah</label>
                   <div class="col-sm-3">
                    <select name="golDarah" class="form-control" id="cbgol"required>
                    <option value="">--Pilih--</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option> 
                    </select>
                  </div>
                 </div>
              <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Nomor Telpon</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="nomorTlp" id="txtnotlp"  required >
                </div>
              </div>
              	 <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Foto</label>
                    <div class="col-sm-4">
                    <input type="file" class="form-control" name="fotopenduduk" id="fotopenduduk" required>
                </div>
              </div>
              
           	<div class="form-group form-group=sm">
                    <center><button type="reset" align="right" class="btn btn-danger">Reset</button>
                    <input type="submit" align="right" class="btn btn-success"  value="Simpan" name="simpan"></center>
                </div>
                
                </form>