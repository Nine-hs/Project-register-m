<?php
           
            include('Model.php');
            session_start();
            if(!isset($_SESSION['EM_POSITION']) == "ผู้จัดการ"){
                header('location:homepage_m.php');
            }
            include('checkstatus.php');
         
           
        ?>
        <html>
        <head>
        <title></title>
        
        <style>
        .tb .colright{
            
            padding:5px;
        }
        #backButton {
		border-radius: 4px;
		padding: 8px;
		border: none;
		font-size: 16px;
		background-color: #2eacd1;
		color: white;
		position: absolute;
		top: 10px;
		right: 10px;
		cursor: pointer;
	    }
        .invisible {
            display: none;
        }
        .colbelow{
            padding:10px;
        }
        .card-o{
            width:100%;
        }
        .ct{
            margin-top:5%;
           /* background-color:black;*/
        }
        .compo{
            display:inline-block;
            margin:20px;
        }
        .ct2{
            background-color:black;
        }
        
        </style>
            <link href="css/sb-admin-2.min.css" rel="stylesheet">
            <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript" src="script_js/fetch.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>
            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>
            <script src="script_js/fetch.js"></script>

        </head>
        <body>
                <!-- Header -->
            <div id="wrapper">
                <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <img src="IMG/logo.gif" style="height:90; width:190;" alt="">
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="homepage_em.php">
                <i class="fas fa-home"></i>
                <span>หน้าหลัก</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="far fa-registered"></i>
                <span>ลงทะเบียน</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">ลงทะเบียน:</h6>
                <a class="collapse-item" href="regis.php">ลงทะเบียนเข้าร่วมประชุม</a>
                <a class="collapse-item" href="comment.php">ประเมินผลหลังลงทะเบียน</a>
                </div>
            </div>
            </li>
          
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                        <?php echo $_SESSION['EM_POSITION']; ?>
                        </span>
                        </a>
                       
                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="logout.php" role="button"  aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                        Logout
                        </span>
                        </a>
                       
                    </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
            </a>
 
        
            <center>
            <div id="carouselExampleIndicators" class="carousel slide w-50  p-3 " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="IMG/BTG_ShareholderPartnership.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="IMG/Minority-Shareholder-Rights.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="IMG/Shareholder info.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
            </center>
           
    </body>

    </html>
 