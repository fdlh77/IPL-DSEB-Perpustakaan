<div id="page-wrapper">
<div class="row" id="contentInput" >
          <div class="col-lg-12">
            <h1>DAFTAR PEMINJAM</h1>
            <ol class="breadcrumb">
              <li class="active"> Master Data</li>
              <li class="active"> Peminjam</li>
            </ol>
          </div>
      </div>
       <div class="panel panel-info">
          <div class="panel-heading-none">
          </div>
          <div class="panel-body">
          <form method="POST" action="" id="cariPenduduk">
          <div class="form-group form-group-sm">
                 
                <div class="form-group form-group-sm">
                   
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="txtcari" id="txtcari" placeholder="Silahkan Cari Berdasarakan No. Telepon atau Nama Penduduk">
                </div>
         
         
                    <input type="submit" align="right" class="btn btn-success"  value="Cari" name="cari" id="cari">
                    
                </div>
              </div>
</div>
</form>
 </div>
          

            <div class="table-responsive-sm">
              <table class="table table-bordered table-hover table-striped">
                <tr>
                  <th>NO</th>
                  <th>No. Telepon</th>
                  <th>Nama</th>
                  <th>Tempat, Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Foto</th>
                 <th><a href="<?= BASE_URL ?>/daftarPeminjam/create" type="button" align="right" class="btn btn-success">Tambah Data</a></th>
                </tr>
 <?php
      if(!ISSET($_POST['txtcari'])){
        $no= 1;
          foreach($data['daftarPeminjam'] as $row){
        
      ?>
                <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td><?php echo $row['nomorTlp']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['tempatLahir'].", ".$row['tanggalLahir']; ?></td>
                  <td><?php echo $row['jenisKelamin']; ?></td>
                  <td><?php echo $row['alamat']." RT.".$row['rt']." RW.".$row['rw']." Kelurahan ".$row['kelurahan']." Kecamatan Lengkong Kota Bandung"; ?></td>
                 
                  <?php echo"<td><img src='".BASE_URL."/assets/foto/peminjam/".$row['foto']."' width='50' height='50'></td>";?>
  
                   <td colspan="2" style="text-align: center;">
                   <a   href="<?= BASE_URL ?>/daftarPeminjam/edit/<?php echo $row['id_peminjam'];?>" type="button" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>Edit</a>
                     <a   href="<?= BASE_URL ?>/daftarPeminjam/detail/<?php echo $row['id_peminjam'];?>" type="button" class="btn btn-warning btn-xs">Detail</a>
                      
                    <a onclick="return confirm('Anda Yakin akan menghapus data?')" href="<?= BASE_URL ?>/daftarPeminjam/hapus/<?php echo $row['id_peminjam'];?>" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Hapus</a>
                    </td>
                </tr>
               
          <?php
          }
      }
       ?>  
                  
        <?php
       if(ISSET($_POST['txtcari'])){
         $no= 1;
           foreach($data['daftarPeminjam'] as $r){
        ?>
        
         <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td><?php echo $r['nik']; ?></td>
                  <td><?php echo $r['nama']; ?></td>
                 <td><?php echo $r['tempatLahir'].", ".$r['tanggalLahir']; ?></td>
                  <td><?php echo $r['jenisKelamin']; ?></td>
                  <td><?php echo $r['alamat']." RT.".$r['rt']." RW.".$r['rw']." Kelurahan ".$r['kelurahan']." Kecamatan Lengkong Kota Bandung"; ?></td>
                
                   <?php echo"<td><img src='".BASE_URL."/assets/foto/peminjam/".$r['foto']."' width='50' height='50'></td>";?>
  
                   <td colspan="2" style="text-align: center;">
                   <a   href="<?= BASE_URL ?>/daftarPeminjam/edit/<?php echo $r['id_peminjam'];?>" type="button" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>Edit</a>
                     <a   href="<?= BASE_URL ?>/daftarPeminjam/detail/<?php echo $r['id_peminjam'];?>" type="button" class="btn btn-warning btn-xs">Detail</a>
                      
                    <a onclick="return confirm('Anda Yakin akan menghapus data?')" href="<?= BASE_URL ?>/daftarPeminjam/hapus/<?php echo $r['id_peminjam'];?>" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Hapus</a>
                    </td>
                </tr>
       <?php
       }
       ?>   
           </table>  
        </div> 
          <?php
    

  }


  ?>