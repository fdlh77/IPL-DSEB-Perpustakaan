<div id="page-wrapper">
<div class="row" id="contentInput" >
  <div class="col-lg-12">
    <h1>Hasil Pengaduan Penduduk</h1>
      <ol class="breadcrumb">
        <li class="active"></li>
      </ol>
  </div>
</div>

<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal Pengaduan</th>
        <th>No Telepon</th>
        <th>Nama</th>
        <th>Pengaduan</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
          $no = 1;

          foreach($data as $d) {
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $d['tgl_pengaduan']; ?></td>
              <td><?php echo $d['no_telpon']; ?></td>
              <td><?php echo $d['nama']; ?></td>
              <td><?php echo $d['pengaduan']; ?></td>
            </tr>
          <?php 
        } 
        ?>
    </tbody>
</table>