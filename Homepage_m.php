        <?php
           
            include('Model.php');
            session_start();
            if(!isset($_SESSION['EM_POSITION']) == "พนักงาน"){
                header('location:homepage_em.php');
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
            display:flex;
            margin:20px;
        }
        .ct2{
            background-color:black;
        }
        .inline{
            display:flex;
        }
        
        </style>
         <link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
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
                <a class="nav-link" href="homepage_m.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
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
                <i class="fas fa-fw fa-cog"></i>
                <span>พนักงาน</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">การจัดการพนักงาน:</h6>
                <a class="collapse-item" href="addemployee.php">เพิ่มพนักงาน</a>
                <a class="collapse-item" href="index.php">ค้นหาพนักงาน</a>
                </div>
            </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>ตรวจสอบต่างๆ</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">ตรวจสอบ:</h6>
                <a class="collapse-item" href="search_m.php">ตรวจสอบผู้ลงทะเบียน</a>
                <a class="collapse-item" href="searchfn_m.php">ดูผลการลงทะเบียน</a>
                </div>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="realtime.php">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>สรุปยอดเข้าร่วมประชุม</span></a>
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
            <?php
                $query1 = "SELECT * FROM customer ";
                $result = mysqli_query($con,$query1);
                $rs = mysqli_num_rows($result);

                $query2 = "SELECT * FROM meetingtb ";
                $result2 = mysqli_query($con,$query2);
                $rs2 = mysqli_num_rows($result2);

            ?>

            <!-- content-->

            <div class="container ct">
            <div class="row">
                <div class="col-8">
                    <div class="card text-center">
                        <div class="card-header">
                            Today
                        </div>
                        <div class="card-body inline">
                            <div class="card compo" style="width: 18rem;">
                                <div class="card-body">
                                <div class="card-body">
                                    <div class="number1"><h1><div id="n"></div></h1></div>
                                    <h5>ยังไม่ลงทะเบียน</h5>
                                </div>
                                </div>
                            </div>
                            <div class="card compo" style="width: 18rem;">
                                <div class="card-body">
                                <div class="card-body">
                                    <div class="number1"><h1><div id="n2"></div></h1></div>
                                    <h5>ลงทะเบียนแล้ว</h5>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                    </div>
                    <hr width="700">
                </div>
                <div class="col-4">
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title" align="center">สถานะ</h5>
                            <h1 align="center"> 
                            <?php 
                           
                           
                            if($rs2 == $rs){
                               echo "ครบจำนวนแล้ว"; 
                            }
                            else{
                                echo "ยังไม่ครบจำนวน";
                            }
                            ?>
                             </h1>
                        </div>
                    </div>
                </div>
            </div>
            </div>


            <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h1 class="card-title" align="center"><div id="good"></div></h1>
                            <p class="card-text" align="center">พอใจ</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h1 class="card-title" align="center"><div id="soso"></div></h1>
                            <p class="card-text" align="center">เฉยๆ</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h1 class="card-title" align="center"><div id="bad"></div></h1>
                            <p class="card-text" align="center">ไม่พอใจ</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
           

           
    </body>

    </html>
 