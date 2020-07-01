
<?php
    include('Model.php');
 
 

    if(isset($_POST['fullname'])){
      /*echo $_POST['fullname'];
      echo $_POST['user'];
      echo $_POST['pass'];
      echo $_POST['gender'];
      echo $_POST['po'];
      echo $_POST['time_in'];*/
      $id = 'em'.rand(10,500);
   $query = "INSERT INTO employee(id,em_name,username,pass,phone,gender,position,time_start)
   VALUES('".$id."','".$_POST['fullname']."','".$_POST['user']."','".$_POST['pass']."','".$_POST['phone']."','".$_POST['gender']."','".$_POST['po']."','".$_POST['time_in']."')";
   $result = mysqli_query($con,$query);
   if($result){
      echo "<h4 style='color:green'>Done</h4>";
   }
   else{
     echo "<h4 style='color:red'>Error</h4>";
   }
    }





?>





