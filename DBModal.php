
<?php
 include('Model.php');
if(isset($_POST['eiei'])){
    $id = $_POST['eiei'];

  $query = "SELECT * FROM employee WHERE EM_ID = '".$id."' ";
  $result=mysqli_query($con,$query);
  $rq=mysqli_fetch_array($result)or die (mysqli_error());
  echo json_encode($rq);
}

  ?>




