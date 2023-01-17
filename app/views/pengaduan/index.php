<div id="page-wrapper">
<div class="row" id="contentInput" >
  <div class="col-lg-12">
    <h1>Pengaduan Penduduk</h1>
      <ol class="breadcrumb">
        <li class="active"></li>
      </ol>
  </div>
</div>

<form action="<?= BASE_URL ?>/pengaduan/insert" method="POST">
  
<div class="form-group">
    <label>Tanggal Pengaduan</label>
    <input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= date('Y-m-d'); ?>">
</div>

<div class="form-group">
    <label>No Telpon</label>
    <input type="text" name="no_telpon" class="form-control">
</div>

<div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control">
</div>

<div class="form-group">
    <label>Pengaduan</label>
    <textarea name="pengaduan" class="form-control" required></textarea>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">SIMPAN</button>
</div>

<div class="form-group">
    <a href="<?= BASE_URL ?>/pengaduan/show">Lihat Pengaduan</a>
</div>