<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>HOLY LIBRARY</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= BASE_URL ?>/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?= BASE_URL ?>/assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/font-awesome/css/font-awesome.min.css">
     <!-- JavaScript -->
    <script src="<?= BASE_URL ?>/assets/js/jquery.js"></script>
    <script src="<?= BASE_URL ?>/assets/js/bootstrap.js"></script>
    <script src="<?= BASE_URL ?>/assets/js/highcharts.js"></script>
   <script src="<?= BASE_URL ?>/assets/js/highcharts-3d.js"></script>
    <style type="text/css">
      .kotak{
        width:400px;
        height:400px;
        background-color: black;
      }

      .print {
        display: none;
      }

      @media print
      {    
          .no-print, .no-print *
          {
              display: none !important;
          }

          .print {
            display: block !important;
          }
      }
    </style>
  </head>

  <body>
<?php
        if($_SESSION['level']=="admin"){
      ?>
    <div id="wrapper">
      
      <!-- Sidebar -->
      <nav class="navbar no-print navbar-fixed-top" style="background-color:#B0C4DE;" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="kotak"></span>
         <img src="<?= BASE_URL ?>/assets/logo/logo.png"style="float:left; width:40px; height: 40px; margin: 4px 5px 4px 20px;">
          <a class="navbar-brand" href="">HOLY LIBRARY</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav" style="background-color:#DCDCDC">
            
           
            
            <li><a href="<?= BASE_URL ?>/home"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-large"></span> DAFTAR <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?= BASE_URL ?>/peminjam">DATA PEMINJAM</a></li>
                <li><a href="<?= BASE_URL ?>/staff">DATA STAFF</a></li>
                
              </ul>          
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tasks"></span> BAGIAN PELAYANAN<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?= BASE_URL ?>/PinjamanBuku">PEMINJAMAN BUKU</a></li>
                <li><a href="<?= BASE_URL ?>/kembaliBuku">PENGEMBALIAN BUKU</a></li>
              </ul>          
            </li>
                
              </ul>          
            </li>
          </ul>
           </ul>       
          
          </ul>
           </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
        
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['userid'];?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a onclick="return confirm('Anda Yakin akan keluar?')" href="logout" type="button" class="btn btn-danger btn-xs"><i class="fa fa-power-off"></i> Log Out</a></li
                
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      <?php
    }else if($_SESSION['level']=="Bagian Pelayanan"){
      ?>
      <div id="wrapper">
        <!-- Sidebar -->
      <nav class="navbar  navbar-fixed-top no-print" style="background-color:#B0C4DE;" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="kotak"></span>
         <img src="<?= BASE_URL ?>/assets/logo/logo.png"style="float:left; width:40px; height: 40px; margin: 4px 5px 4px 20px;">
          <a class="navbar-brand" href="">HOLY LIBRARY</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav" style="background-color:#DCDCDC">
            
           
            
            <li><a href="<?= BASE_URL ?>/home"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-large"></span> DAFTAR <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?= BASE_URL ?>/peminjam">Peminjam</a></li>
                
                
              </ul>          
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tasks"></span> BAGIAN PELAYANAN<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?= BASE_URL ?>/pinjamBuku">PEMINJAMAN BUKU</a></li>
                <li><a href="<?= BASE_URL ?>/kembaliBuku">PENGEMBALIAN BUKU</a></li>   
              </ul>          
            </li>
              
                    
         
          </ul>
           </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
        
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['userid'];?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a onclick="return confirm('Anda Yakin akan keluar?')" href="logout" type="button" class="btn btn-danger btn-xs"><i class="fa fa-power-off"></i> Log Out</a></li
                
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
     <?php
    }else if($_SESSION['level']=="Kasi Pelayanan"){
      ?>
      <div id="wrapper">
        <!-- Sidebar -->
      <nav class="navbar  navbar-fixed-top no-print" style="background-color:#B0C4DE;" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="kotak"></span>
         <img src="<?= BASE_URL ?>/assets/logo/logo.png"style="float:left; width:40px; height: 40px; margin: 4px 5px 4px 20px;">
          <a class="navbar-brand" href="">HOLY LIBRARY</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav" style="background-color:#DCDCDC">
            
           
            
            <li><a href="<?= BASE_URL ?>/home"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
             
              
       
          </ul>
           </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
        
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['userid'];?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a onclick="return confirm('Anda Yakin akan keluar?')" href="logout" type="button" class="btn btn-danger btn-xs"><i class="fa fa-power-off"></i> Log Out</a></li
                
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

    <?php
  }

 
    ?>