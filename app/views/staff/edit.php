<div id="page-wrapper">

<div class="row" id="contentInput" >
          <div class="col-lg-12">
            <h1>Staff</h1>
            <ol class="breadcrumb">
              <li class="active"> Master Data</li>
              <li class="active">Staff</li>
              <li class="active">Edit Data Staff</li>
            </ol>
          </div>
      </div>
<form  action="<?= BASE_URL ?>/staff/update/<?= $data['staff']['id'] ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
                  <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $data['staff']['id'];?>">
                  <div class="form-group form-group-sm">

                    <label class=" control-label col-sm-3" for="txtnip" control-label">NIP</label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" name="nip" id="txtnip" value="<?php echo $data['staff']['nip'];?>" required >
                </div>
              </div>
                 <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Nama Staff</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama" id="txtnama" value="<?php echo $data['staff']['nama'];?>" required >
                </div>
              </div>
               <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Jenis Kelamin</label>
                    <div class="col-sm-7">
                     <?php if($data['staff']['jenis_kelamin']=="Laki-Laki"){
                    echo"<input type='radio'  name='jenis_kelamin' class='form control' id='rbjk' value='Laki-Laki' checked='checked'>Laki-Laki";
                    echo"  <input type='radio'  name='jenis_kelamin' class='form control' id='perempuan' value='Perempuan'>Perempuan";}
                    else{
                      echo"<input type='radio'  name='jenis_kelamin' class='form control' id='rbjk' value='Laki-Laki'>Laki-Laki";
                    echo"  <input type='radio'  name='jenis_kelamin' class='form control' id='rbjk' value='Perempuan' checked='checked'>Perempuan";
                    }
                    ?>
                </div>
              </div>
              <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Tempat Lahir</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="tempat_lahir" id="txttempat"   value="<?php echo $data['staff']['tempat_lahir'];?>" required>
                </div>
              </div>
                <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Tanggal Lahir</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="tgl_lahir" id="txttanggal" placeholder="yyyy-mm-dd" value="<?php echo $data['staff']['tgl_lahir'];?>"  required >
                </div>
              </div>
                <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Alamat</label>
                    <div class="col-sm-4">
                    <textarea class="form-control" name="alamat" id="txtalamat"  required><?php echo $data['staff']['alamat'];?></textarea>
                </div>
              </div>
                <div class="form-group form-group-sm">
                  <label class=" control-label col-sm-3" for="cbjabatan">Jabatan</label>
                   <div class="col-sm-3">
                    <select name="jabatan" class="form-control" id="jabatan"required>
                     <option value="">Pilih</option>
                    <option value="Bagian Pelayanan"<?php if($data['staff']['jabatan']=='Bagian Pelayanan'){echo 'selected';}?>>Bagian Pelayanan</option>
                    <option value="Kasi Pelayanan"<?php if($data['staff']['jabatan']=='Kasi Pelayanan'){echo 'selected';}?>>Kasi Pelayanan</option>
                    <option value="Camat"<?php if($data['staff']['jabatan']=='Camat'){echo 'selected';}?>>Camat</option>
                    </select>
                  </div>
                 </div>
                  <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Nomor Telpon</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="no_tlp" id="txtnotlp" value="<?php echo $data['staff']['no_tlp'];?>"  required >
                </div>
              </div>
                 
              <div class="form-group form-group-sm">
                    <label class="control-label col-sm-3">Foto</label>
                    <div class="col-sm-5">
                       <h5 class="text-danger"> <input type="checkbox" name="ubah_foto" value="true" >Ceklis jika ingin merubah Foto</h4>
                    <input type="file" class="form-control" name="fotostaff" id="fotostaff">
                </div>
              </div>
                  
                <div class="form-group form-group=sm">
                    <center><button type="reset" align="right" class="btn btn-danger">Reset</button>
                    <input type="submit" align="right" class="btn btn-success"  value="Simpan" name="edit"></center>
                </div>
                
                </form>