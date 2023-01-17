<div id="page-wrapper">

<div class="row" id="contentInput" >
          <div class="col-lg-12">
            <h1>Peminjam</h1>
            <ol class="breadcrumb">
              <li class="active"> Master Data</li>
              <li class="active"> Peminjam</li>
              <li class="active"> Detail Penduduk</li>
            </ol>
          </div>
      </div>
      </div>
      <div class="container">
        <div class="row row-table">
          <div class="col-md-3 col-table">
          <div class="panel panel-info">
            <div class="panel-heading" style="align:center;">
              
            </div>
            <div class="panel-body">
               <?php echo"<img src='".BASE_URL."/assets/foto/peminjam/".$data['peminjam']['foto']."' float='right' width='200' height='250'>";?>
              <div></div>

         </div>
       </div>
     </div>
      
          <div class="container">
        <div class="row row-table">
          <div class="col-md-4 col-table">
          <div class="panel panel-info">
					<div class="panel-heading ">
            Data Pribadi Peminjam
					</div>
					<div class="panel-body">
          
       
              <table class="table table-striped" >
          <tr >
           
            <td>NIK</td>
            <td> : </td>
            <td><?php echo $data['peminjam']['nik']?></td>
          </tr>
            <td>Nama Peminjam </td>
            <td> : </td>
            <td><?php echo $data['peminjam']['nama']?></td>
          </tr>
          <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td> : </td>
            <td><?php echo $data['peminjam']['tempatLahir']?> , <?php echo $data['peminjam']['tanggalLahir']?> </td>
          </tr>
          <tr>
            <td>Jenis Kelamin </td>
            <td> : </td>
            <td><?php echo $data['peminjam']['jenisKelamin']?></td>
          </tr>
          <tr>
            <td>Alamat </td>
            <td> : </td>
            <td><?php echo $data['peminjam']['alamat']." RT.".$data['peminjam']['rt']." RW.".$data['peminjam']['rw']." Kelurahan ".$data['peminjam']['kelurahan']." Kecamatan Lengkong Kota Bandung" ?></td>
          </tr>
             
        </table>

     </div>
     </div>
     </div>

          <div class="container">
        <div class="row row-table">
          <div class="col-md-4 col-table">
          <div class="panel panel-info">
          <div class="panel-heading-none">
            
          </div>
          <div class="panel-body">
          
       
              <table class="table table-striped" >
          <tr >
            <td>Agama</td>
            <td> : </td>
            <td><?php echo $data['peminjam']['agama']?></td>
          </tr>
          <tr >
            <td>Pendidikan</td>
            <td> : </td>
            <td><?php echo $data['peminjam']['pendidikan']?></td>
          </tr>
          <tr >
            <td>Pekerjaan</td>
            <td> : </td>
            <td><?php echo $data['peminjam']['pekerjaan']?></td>
          </tr>
          <tr >
            <td>Status Perkawinan</td>
            <td> : </td>
            <td><?php echo $data['peminjam']['statusPerkawinan']?></td>
          </tr>
           <td>Golongan Darah</td>
            <td> : </td>
            <td><?php echo $data['peminjam']['golDarah']?></td>
          </tr>
          <tr >
            <td>Nomor Telphone</td>
            <td> : </td>
            <td><?php echo $data['peminjam']['nomorTlp']?></td>
          </tr>
       

     </div>
     </div>
     </div>