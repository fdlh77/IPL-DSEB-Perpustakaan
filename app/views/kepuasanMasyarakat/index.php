<div id="page-wrapper">
<div class="row" id="contentInput" >
  <div class="col-lg-12">
    <h1>Index Kepuasan Masyarakat</h1>
      <ol class="breadcrumb">
        <li class="active"></li>
      </ol>
  </div>
</div>

  <style type="text/css">
    .box {
      padding: 30px 40px;
      border-radius: 10px;
    }
  </style>

<style type="text/css">
    .box {
      padding: 30px 40px;
      border-radius: 10px;
    }
  </style>

  <!----- Container ----->
  <div class="container">
    <div class="alert alert-warning" role="alert"> 
      Pilihlah salah satu kepuasan kalian dalam pelayanan yang telah diberikan! 
    </div>

    <div class="row">
      <div class="col-md-4"> 
        <div class="bg-info box text-white">
          <div class="row">
            <div class="col-md-12">
              <h5>MEMUASKAN</h5>
              <h2>[<?=$data['puas']?>]</h2>
              <h5>Orang</h5>
            </div>
            <div class="col-md-4">
              <a href="<?= BASE_URL ?>/kepuasanMasyarakat/pilih/puas" title="Jika anda merasa nyaman/puas dengan pelayanan yang sudah diberikan maka klik icon ini">
                <img src="img/memuaskan.png" style="width: 75px;">
              </a>
            </div>
          </div>
        </div>
      </div>

       <div class="col-md-4"> 
        <div class="bg-info box text-white">
          <div class="row">
            <div class="col-md-12">
              <h5>CUKUP</h5>
              <h2>[<?=$data['cukup']?>]</h2>
              <h5>Orang</h5>
            </div>
             <div class="col-md-4">
              <a href="<?= BASE_URL ?>/kepuasanMasyarakat/pilih/cukup" title="Jika anda merasa nyaman/cukup dengan pelayanan yang sudah diberikan maka klik icon ini">
                <img src="img/cukup.png" style="width: 75px;">
              </a>
            </div>
          </div>
        </div>
      </div>

       <div class="col-md-4"> 
        <div class="bg-info box text-white">
          <div class="row">
            <div class="col-md-12">
              <h5>KURANG MEMUASKAN</h5>
              <h2>[<?=$data['kurang']?>]</h2>
              <h5>Orang</h5>
            </div>
             <div class="col-md-4">
              <a href="<?= BASE_URL ?>/kepuasanMasyarakat/pilih/kurang" title="Jika anda merasa kurang nyamandengan pelayanan yang sudah diberikan maka klik icon ini">
                <img src="img/kurang.png" style="width: 75px;">
              </a>
          </div>
        </div>
      </div>
    </div>

  </div>