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
<title>Add Employee</title>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
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
                <a class="nav-link" href="homepage_m.php">
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
                <a class="collapse-item" href="seach_m.php">ตรวจสอบผู้ลงทะเบียน</a>
                <a class="collapse-item" href="searchfn_m.php">ดูผลการลงทะเบียน</a>
                </div>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="register.php">
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
 
 <!-- Content -->
<center>
<div style="margin-top:90">
<h3>เพิ่มพนักงาน</h3>
</div>

<div class="w-50 p-3">
  <div class="form-group">
    <label for="exampleFormControlInput1">ชื่อ-นามสกุล</label>
    <input type="text" class="form-control" id="name" placeholder="ชื่อ-สกุล" >
    <input type="hidden" value="<?php $d=mktime(11, 14, 54, 8, 12, 2014); echo date("Y-m-d h:i:sa", $d); ?>" id="time_in"  >
  </div>
  <div class="form-group">
  <div class="row">
    <div class="col">
      <label for="exampleFormControlInput1">ชื่อผู้ใช้</label>
      <input type="text" class="form-control" id="username" placeholder="ชื่อผู้ใช้">
    </div>
    <div class="col">
      <label for="exampleFormControlInput1">รหัสผ่าน</label>
      <input type="text" class="form-control" id="password" placeholder="รหัสผ่าน">
    </div>
  </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">เบอร์โทรศัพท์</label>
    <input type="text" class="form-control" id="phone" placeholder="เบอร์โทรศัพท์" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">เพศ</label>
    <select class="form-control" id="gender" >
    <option value="">เพศ</option>
    <option value="ชาย">ชาย</option>
    <option value="หญิง">หญิง</option>
      </select>
  </div>
  
  <div class="form-group">
  <label for="exampleFormControlSelect1">ตำแหน่ง</label>
    <select class="form-control" id="position" >
      <option value="">ตำแหน่ง</option>
      <option value="พนักงาน">พนักงาน</option>
      <option value="ผู้จัดการ">ผู้จัดการ</option>
    </select>
  </div>
  <div class="form-group">
  <button type="submit" id="submitt" class="btn btn-primary">เพิ่ม</button>
  </div>
</div>

<div id="show"></div>

</center>

   
</body>
</html>

<script>
$(document).ready(function () {
$("#submitt").click(() => {
  var fullname = $('#name').val();
  var user = $('#username').val();
  var pass = $('#password').val();
  var gender = $('#gender').val();
  var po = $('#position').val();
  var time_in = $('#time_in').val();
  var phone = $('#phone').val();
  if(fullname == '' || user == '' || pass == '' || gender == '' || po == '' || phone == ''){
    $('#show').html('<p style="color:red">All Field Are Require</p>');
  }
  else {
    $.ajax({
      method: "POST",
      url: "addemserver.php",
      data: {
        fullname: fullname,
        user: user,
        pass: pass,
        gender: gender,
        po: po,
        time_in : time_in,
        phone : phone
      },
      success: function (data) {
        $('#show').html(data);
      }
    });
    // swal('เพิ่มพนักงานสำเร็จ'); 

  }
});
});
</script>
