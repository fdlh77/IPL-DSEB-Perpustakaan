<div id="page-wrapper">

<div class="row" id="contentInput" >
          <div class="col-lg-12">
            <h1>Peminjam</h1>
            <ol class="breadcrumb">
              <li class="active"> Master Data</li>
              <li class="active"> Peminjam</li>
              <li class="active"> Edit Data Penduduk</li>
            </ol>
          </div>
      </div>
<form  action="<?= BASE_URL ?>/peminjam/update/<?= $data['peminjam']['id_peminjam'] ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
                  <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $data['peminjam']['id_peminjam'];?>">
                  <div class="form-group form-group-sm">
                    <label class=" control-label col-sm-3" for="txtnik" control-label">NIK</label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" name="nik" id="txtnik" value="<?php echo $data['peminjam']['nik'];?>" required>
                </div>
              </div>
                 <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Nama Penduduk</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama" id="txtnama" value="<?php echo $data['peminjam']['nama'];?>" required >
                </div>
              </div>
              <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Tempat Lahir</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="tempatLahir" id="txttempat" value="<?php echo $data['peminjam']['tempatLahir'];?>"  required >
                </div>
              </div>
              <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Tanggal Lahir</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="tanggalLahir" id="txttanggal" placeholder="yyyy-mm-dd" value="<?php echo $data['peminjam']['tanggalLahir'];?>"  required >
                </div>
              </div>
               <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Jenis Kelamin</label>
                    <div class="col-sm-7">
                     <?php if($data['peminjam']['jenisKelamin']=="Laki-Laki"){
                    echo"<input type='radio'  name='jenisKelamin' class='form control' id='rbjk' value='Laki-Laki' checked='checked'>Laki-Laki";
                    echo"  <input type='radio'  name='jenisKelamin' class='form control' id='perempuan' value='Perempuan'>Perempuan";}
                    else{
                      echo"<input type='radio'  name='jenisKelamin' class='form control' id='rbjk' value='Laki-Laki'>Laki-Laki";
                    echo"  <input type='radio'  name='jenisKelamin' class='form control' id='rbjk' value='Perempuan' checked='checked'>Perempuan";
                    }
                    ?>
                </div>
              </div>
               <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Alamat</label>
                    <div class="col-sm-4">
                    <textarea class="form-control" name="alamat" id="txtalamat"  required><?php echo $data['peminjam']['alamat'];?></textarea>
                </div>
              </div>
               <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">RT</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="rt" id="txtrt" value="<?php echo $data['peminjam']['rt'];?>"  required >
                </div>
              </div>
               <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">RW</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="rw" id="txtrw" value="<?php echo $data['peminjam']['rw'];?>"  required >
                </div>
              </div>
                <div class="form-group form-group-sm">
                  <label class=" control-label col-sm-3" for="cbkelurahan">Kelurahaan</label>
                   <div class="col-sm-3">
                    <select name="kelurahan" class="form-control" id="jabatan"required>
                    <option value="">--Pilih--</option>
                    <option value="Burangrang" <?php if($data['peminjam']['kelurahan']=='Burangrang'){echo 'selected';}?>>Burangrang</option>
                    <option value="Cijagra" <?php if($data['peminjam']['kelurahan']=='Cijagra'){echo 'selected';}?>>Cijagra</option>
                    <option value="Cikawao" <?php if($data['peminjam']['kelurahan']=='Cikawao'){echo 'selected';}?>>Cikawao</option>
                    <option value="Lingkar Selatan" <?php if($data['peminjam']['kelurahan']=='Lingkar Selatan'){echo 'selected';}?>>Lingkar Selatan</option>
                    <option value="Malabar" <?php if($data['peminjam']['kelurahan']=='Malabar'){echo 'selected';}?>>Malabar</option>
                    <option value="Paledang" <?php if($data['peminjam']['kelurahan']=='Paledang'){echo 'selected';}?>>Paledang</option>
                    <option value="Turangga"<?php if($data['peminjam']['kelurahan']=='Turangga'){echo 'selected';}?>>Turangga</option>
                    </select >
                  </div>
                 </div>             
               <div class="form-group form-group-sm">
                  <label class=" control-label col-sm-3" for="cbagama">Agama</label>
                   <div class="col-sm-3">
                    <select name="agama" class="form-control" id="jabatan"required>
                    <option value="">--Pilih--</option>
                    <option value="Islam" <?php if($data['peminjam']['agama']=='Islam'){echo 'selected';}?>>Islam</option>
                    <option value="Protestan" <?php if($data['peminjam']['agama']=='Protestan'){echo 'selected';}?>>Protestan</option>
                    <option value="Katolik" <?php if($data['peminjam']['agama']=='Katolik'){echo 'selected';}?>>Katolik</option>
                    <option value="Hindu" <?php if($data['peminjam']['agama']=='Hindu'){echo 'selected';}?>>Hindu</option>
                    <option value="Buddha" <?php if($data['peminjam']['agama']=='Buddha'){echo 'selected';}?>>Buddha</option>
                    <option value="Khonghucu" <?php if($data['peminjam']['agama']=='Khonghucu'){echo 'selected';}?>>Khonghucu</option>
                    </select >
                  </div>
                 </div>
                 <div class="form-group form-group-sm">
                  <label class=" control-label col-sm-3" for="cbastatus">Status Perkawinan</label>
                   <div class="col-sm-3">
                    <select name="statusPerkawinan" class="form-control" id="jabatan"required>
                    <option value="">--Pilih--</option>
                    <option value="Belum Kawin" <?php if($data['peminjam']['statusPerkawinan']=='Belum Kawin'){echo 'selected';}?>>Belum Kawin</option>
                    <option value="Kawin"<?php if($data['peminjam']['statusPerkawinan']=='Kawin'){echo 'selected';}?>>Kawin</option>
                    <option value="Cerai Hidup" <?php if($data['peminjam']['statusPerkawinan']=='Cerai Hidup'){echo 'selected';}?>>Cerai Hidup</option>
                    <option value="Cerai Mati" <?php if($data['peminjam']['statusPerkawinan']=='Cerai Mati'){echo 'selected';}?>>Cerai Mati</option> 
                    </select>
                  </div>
                 </div>
                 <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Pekerjaan</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="pekerjaan" id="txtpekerjaan" value="<?php echo $data['peminjam']['pekerjaan'];?>" required >
                </div>
              </div>
              <div class="form-group form-group-sm">
               <label class=" control-label col-sm-3" for="cbgol">Golongan Darah</label>
                   <div class="col-sm-3">
                    <select name="golDarah" class="form-control" id="cbgol"required>
                    <option value="">--Pilih--</option>
                    <option value="A" <?php if($data['peminjam']['golDarah']=='A'){echo 'selected';}?>>A</option>
                    <option value="B" <?php if($data['peminjam']['golDarah']=='B'){echo 'selected';}?>>B</option>
                    <option value="AB" <?php if($data['peminjam']['golDarah']=='AB'){echo 'selected';}?>>AB</option>
                    <option value="O" <?php if($data['peminjam']['golDarah']=='O'){echo 'selected';}?>>O</option> 
                    </select>
                  </div>
                 </div>
              <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Nomor Telpon</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="nomorTlp" id="txtnotlp" value="<?php echo $data['peminjam']['nomorTlp'];?>"  required >
                </div>
              </div>
                  <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Foto</label>
                    <div class="col-sm-5">
                      <h5 class="text-danger"> <input type="checkbox" name="ubah_foto" value="true" >Ceklis jika ingin merubah Foto</h4>
                    <input type="file" class="form-control" name="fotopeminjam" id="fotopeminjam">
                </div>
              </div>
              
            <div class="form-group form-group=sm">
                    <center><button type="reset" align="right" class="btn btn-danger">Reset</button>
                    <input type="submit" align="right" class="btn btn-success"  value="Update" name="edit"></center>
                </div>
                
                </form>