<?php
        if($_SESSION['level']=="admin"){
      ?>
<div id="page-wrapper">
  <div class="row" id="contentInput" >
          <div class="col-lg-12">
            <h1>HOMEPAGE<small> <?php echo $_SESSION['level'];?> </small></h1>
            <ol class="breadcrumb">
              <h5 class="text-warning"><?php $hari=date('l, d / M / Y'); echo $hari;?></h5>
             <h5 class="text-info">SELAMAT DATANG <?php  echo $_SESSION['userid'];?> </h5>
            </ol>
          </div>
      </div>
   
       <div class="container">
        <div class="row row-table">
          <div class="col-sm-3 col-table">
          <div class="panel panel-primary">
            <div class="panel-heading" style="align:center;">
               <span class="kotak"></span>
         <img src="<?= BASE_URL ?>/assets/logo/pinjam.png"style="float:left; width:180px; height: 60px; margin: 1px 20px 10px 20px;">
              <!--<h5 style="text-align:center ">E-KTP</h5>-->
              <br><br><br>
            </div>
            <div class="panel-body">
              <h6>MELAYANI PEMINJAMAN BUKU</h6>
            </div>
      <div class="panel-footer">
           <a href="<?= BASE_URL ?>/PinjamanBuku" class="btn btn-primary btn-md">PILIH</a>
        <div>
      </div>
    </div>
  </div>
</div>



<div class="container">
        <div class="row row-table">
          <div class="col-sm-3 col-table">
          <div class="panel panel-primary" >
            <div class="panel-heading" style="align:center;">
              <span class="kotak"></span>
         <img src="<?= BASE_URL ?>/assets/logo/kembali.png"style="float:left; width:180px; height: 60px; margin: 1px 20px 10px 20px;"><br><br><br>
            </div>
            <div class="panel-body">
              <h6>MELAYANI PENGEMBALIAN BUKU</h6>
            </div>
      <div class="panel-footer">
           <a href="<?= BASE_URL ?>/kembalikan" class="btn btn-primary btn-md" >PILIH</a>
        <div>
      </div>
    </div>
  </div>
</div>

<div class="container">
        <div class="row row-table">
          <div class="col-sm-3 col-table">
          <div class="panel panel-primary" >
            <div class="panel-heading" style="align:center;">
              <span class="kotak"></span>
         <img src="<?= BASE_URL ?>/assets/logo/buku.png"style="float:left; width:180px; height: 60px; margin: 1px 20px 10px 20px;"><br><br><br>
            </div>
            <div class="panel-body">
              <h6>DAFTAR BUKU</h6>
            </div>
      <div class="panel-footer">
           <a href="<?= BASE_URL ?>/kembaliBuku" class="btn btn-primary btn-md" >PILIH</a>
        <div>
      </div>
    </div>
  </div>
</div>
    
    <?php
  }

 
    ?>