<div id="page-wrapper">
<div class="row" id="contentInput" >
          <div class="col-lg-12">
            <h1>PENGEMBALIAN BUKU</h1>
            <ol class="breadcrumb">
              <li class="active">PENGEMBALIAN BUKU</li>
            </ol>
          </div>
      </div>
       <div class="panel panel-info">
          <div class="panel-heading-none">
          </div>
          <div class="panel-body">
          <form method="POST" action="" id="cariKK">
          <div class="form-group form-group-sm">
                 
                <div class="form-group form-group-sm">
                   
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="txtcari" id="txtcari" placeholder="silahkan cari berdasarakan No Permohonan atau NIK atau Nama Penduduk">
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
                  <th>NO PENGEMBALIAN BUKU</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Jenis Permohonan</th>
                  <th>Tanggal Permohonan</th>

                  <th>Nomor KK</th>
                  <th>Tanggal Cetak</th>
                  <th>Tanggal Pengambilan</th>
                   <th>Nama Pengambil</th>
                  <th>Status</th>
                 <th><a href="<?=  BASE_URL?>/Kk/create" type="button" align="right" class="btn btn-success">Tambah Data</a></th>
                </tr>
 <?php
     if(!ISSET($_POST['cari'])){
        $no= 1;

          foreach($data['kembaliBuku'] as $row) {
      ?>
                <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td><?php echo $row['no_permohonankk']; ?></td>
                  <td><?php echo $row['nik']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['alamat']." RT.".$row['rt']." RW.".$row['rw']." Kelurahan ".$row['kelurahan']." Kecamatan Lengkong Kota Bandung"; ?></td>
                  <td><?php echo $row['jenisPermohonan']; ?></td>
                  <td><?php echo $row['tglPermohonan']; ?></td>
                  <td><?php echo $row['nomor_kk']; ?></td>
                  <td><?php echo $row['tgl_cetak']; ?></td>
                  <td><?php echo $row['tgl_pengambilan']; ?></td>
                  <td><?php echo $row['nama_pengambil']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                   <td colspan="2" style="text-align: center;">
                   <a   href="<?= BASE_URL ?>/kk/ambil/<?php echo $row['no_permohonankk'];?>" type="button" class="btn btn-warning"><i class="fa fa-edit"></i>Diambil</a>
                    </tr>
               
          <?php
          }
      }
       ?>  
                  
        <?php
       if(ISSET($_POST['cari'])){
         $no= 1;
           foreach($data['kembaliBuku'] as $r) {
        ?>
        
         <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td><?php echo $r['no_permohonankk']; ?></td>
                  <td><?php echo $r['nik']; ?></td>
                  <td><?php echo $r['nama']; ?></td>
                  <td><?php echo $r['alamat']." RT.".$r['rt']." RW.".$r['rw']." Kelurahan ".$r['kelurahan']." Kecamatan Lengkong Kota Bandung"; ?></td>
                  <td><?php echo $r['jenisPermohonan']; ?></td>
                  <td><?php echo $r['tglPermohonan']; ?></td>      
                  <td><?php echo $r['nomor_kk']; ?></td>
                  <td><?php echo $r['tgl_cetak']; ?></td>
                  <td><?php echo $r['tgl_pengambilan']; ?></td>
                  <td><?php echo $r['nama_pengambil']; ?></td>
                  <td><?php echo $r['status']; ?></td>
                   <td colspan="2" style="text-align: center;">
                   <a   href="<?= BASE_URL ?>/ktp/ambil/<?php echo $r['no_permohonanKtp'];?>" type="button" class="btn btn-warning "><i class="fa fa-edit"></i>Diambil</a>
                 </tr>
       <?php
       }
       ?>   
           </table>  
        </div> 
          <?php
    

  }


  ?>