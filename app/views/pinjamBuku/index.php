<div id="page-wrapper">
  <div class="row" id="contentInput" >
    <div class="col-lg-12">
      <h1>PEMINJAMAN BUKU</h1>
        <ol class="breadcrumb">
          <li class="active">PEMINJAMAN BUKU</li>
        </ol>
   </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading-none">
  </div>
  <div class="panel-body">
    <form method="POST" action="" id="cariEKTP">
    <div class="form-group form-group-sm"> 
      <div class="form-group form-group-sm">
        <div class="col-sm-6">
          <input type="text" class="form-control" name="txtcari" id="txtcari" placeholder="silahkan cari berdasarakan No. Peminjaman atau NIK atau Nama Peminjam">
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
      <th>NO.</th>
      <th>NO. PEMINJAMAN E-KTP</th>
      <th>NIK</th>
      <th>Nama</th>
      <th>Tempat,Tanggal Lahir</th>
      <th>Alamat</th>
      <th>Jenis Permohonan</th>
      <th>Tanggal Penyerahan Berkas</th>
      <th>Tanggal Rekam</th>
      <th>Foto</th>
      <th>Tanggal Pengambilan</th>
      <th>Status</th>
      <th><a href="<?= BASE_URL ?>/pinjamBuku/create" type="button" align="right" class="btn btn-success">Tambah Data</a></th>
    </tr>
 <?php
     if(!ISSET($_POST['cari'])){
        $no= 1;
          foreach($data['pinjamBuku'] as $row) {
      ?>
                <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td><?php echo $row['no_peminjamanBuku']; ?></td>
                  <td><?php echo $row['nik']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['tempatLahir'].", ".$row['tanggalLahir']; ?></td>
                  <td><?php echo $row['alamat']." RT.".$row['rt']." RW.".$row['rw']." Kelurahan ".$row['kelurahan']." Kecamatan Lengkong Kota Bandung"; ?></td>
                  <td><?php echo $row['jenisPermohonan']; ?></td>
                  <td><?php echo $row['tgl_penyerahanBerkas']; ?></td>
                  <td><?php echo $row['tglRekam']; ?></td>
                  
                   <?php echo"<td><img src='".BASE_URL."/assets/foto/penduduk/".$row['foto']."' width='50' height='50'></td>";?>
                    <td><?php echo $row['tgl_pengambilan']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                   <td colspan="2" style="text-align: center;">
                   <a   href="<?= BASE_URL ?>/pinjamBuku/ambil/<?php echo $row['no_peminjamanBuku'];?>" type="button" class="btn btn-warning"><i class="fa fa-edit"></i>Diambil</a>

                    </tr>
               
          <?php
          }
      }
       ?>  
                  
        <?php
       if(ISSET($_POST['cari'])){
          $no= 1;
           foreach($data['pinjamBuku'] as $r) {
        ?>
        
         <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td><?php echo $r['no_peminjamanBuku']; ?></td>
                  <td><?php echo $r['nik']; ?></td>
                  <td><?php echo $r['nama']; ?></td>
                  <td><?php echo $r['tempatLahir'].", ".$r['tanggalLahir']; ?></td>
                  <td><?php echo $r['alamat']." RT.".$r['rt']." RW.".$r['rw']." Kelurahan ".$r['kelurahan']." Kecamatan Lengkong Kota Bandung"; ?></td>
                  <td><?php echo $r['jenisPermohonan']; ?></td>
                  <td><?php echo $r['tgl_penyerahanBerkas']; ?></td>
                  <td><?php echo $r['tglRekam']; ?></td>
                  
                   <?php echo"<td><img src='assets/foto/penduduk/".$r['foto']."' width='50' height='50'></td>";?>
                    <td><?php echo $r['tgl_pengambilan']; ?></td>
                    <td><?php echo $r['status']; ?></td>
                   <td colspan="2" style="text-align: center;">
                   <a   href="<?= BASE_URL ?>/pinjamBuku/ambil/<?php echo $r['no_peminjamanBuku'];?>" type="button" class="btn btn-warning "><i class="fa fa-edit"></i>Diambil</a>
                  </tr>
       <?php
       }
      }
       ?>   
           </table>  
        </div> 