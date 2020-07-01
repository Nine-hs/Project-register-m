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
        <title>ตรวจสอบผู้ลงทะเบียน</title>
        <link href="includes/style.css" rel="stylesheet" type="text/css">
        <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
             <!-- Ajax && Modal -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
                <a class="nav-link"  href="homepage_em.php">
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

            <!-- content -->
            
            <table align="center" class="tb">
                <tr>
                    <td colspan="2">
                    <h2 align="center">ประเมินผล</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="text"  class="form-control" id="valuefn" placeholder="Search">
                    </td>
                    <td>
                    <button type="submit" id="searchfn" class="btn btn-primary searchfn">Submit</button>
                    </td>
                </tr>
            </table>
            <hr width="99%">
           <center>
            <div id="show" style="margin-top:3%"></div>
            </center>
           
    </body>
</html>

<script>
$(document).ready(function () {

$("#searchfn").click(() => {

  var value = $('#valuefn').val();
   $.ajax({
    method: "POST",
    url: "comment_server.php",
    data: {
      value : value
    },
    success: function (data) {
      $('#show').html(data);
    }
  });
 
});

});

</script>
