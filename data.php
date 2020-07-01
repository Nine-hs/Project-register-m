<?php include('Model.php'); 

    $q="SELECT * FROM customer";
    $result = mysqli_query($con,$q);
    $row = mysqli_num_rows($result);

    echo $row;
?>