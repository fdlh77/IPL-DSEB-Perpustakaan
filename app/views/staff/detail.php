<div id="page-wrapper">

<div class="row" id="contentInput" >
          <div class="col-lg-12">
            <h1>Staff</h1>
            <ol class="breadcrumb">
              <li class="active"> Master Data</li>
              <li class="active">Staff</li>
              <li class="active"> Detail Staff</li>
            </ol>
          </div>
      </div>
      </div>
      <div class="container">
        <div class="row row-table">
          <div class="col-md-3 col-table">
          <div class="panel panel-info">
            <div class="panel-heading" style="align:center;">
              Foto
            </div>
            <div class="panel-body">
               <?php echo"<img src='".BASE_URL."/assets/foto/staff/".$data['staff']['foto']."' float='right' width='200' height='250'>";?>
              <div></div>

         </div>
       </div>
     </div>
      
          <div class="container">
        <div class="row row-table">
          <div class="col-md-5 col-table">
          <div class="panel panel-info">
					<div class="panel-heading">
            Detail Staff
					</div>
					<div class="panel-body">
          
       
              <table class="table table-hover" >
          <tr >
           
            <td>NIP</td>
            <td> : </td>
            <td><?php echo $data['staff']['nip']?></td>
          </tr>
          <tr>
            <td>Nama Staff </td>
            <td> : </td>
            <td><?php echo $data['staff']['nama']?></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td><?php echo $data['staff']['jenis_kelamin']?></td>
          </tr>
          <tr>
            <tr>
            <td>Tempat, Tanggal lahir</td>
            <td> : </td>
            <td><?php echo $data['staff']['tempat_lahir'].", ". $data['staff']['tgl_lahir']?></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td> : </td>
            <td><?php echo $data['staff']['alamat']?></td>
          </tr>
           <td>Nomor Telpon</td>
            <td> : </td>
            <td><?php echo $data['staff']['no_tlp']?></td>
          </tr>
            <td>Jabatan</td>
            <td> : </td>
            <td><?php echo $data['staff']['jabatan']?></td>
          </tr>
             
        </table>
       

     </div>
     </div>
     </div>