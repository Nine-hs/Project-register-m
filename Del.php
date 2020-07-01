<?php
include('Model.php');
if(isset($_POST['removeuser'])){
    $id = $_POST['removeuser'];
      $sql = "DELETE FROM employee WHERE EM_ID='$id'";
      $query = mysqli_query($con,$sql);	
      if($query) {
        echo "YES";
     } else {
        echo "NO";
     }
}

//json type







               
       