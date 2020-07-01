<?php
include('Model.php');

if(isset($_POST['value1'])){
    $sql = "UPDATE meetingtb SET comment_id='".$_POST['value1']."' WHERE mt_id LIKE '%".$_POST['nid']."%'";
    $query = mysqli_query($con,$sql);
    if($query){
        echo '<div class="alert alert-success w-50" role="alert">
            Done.
             </div>';
    }else{
        echo '<div class="alert alert-danger w-50" role="alert">
            Error
             </div>';
    }
}

?>