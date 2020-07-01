<link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<?php
include('Model.php');

    if(isset($_POST['value'])){
       // $sql = "SELECT * FROM ";
       $value = $_POST['value'];
       $query = "SELECT mt_id,purchs_id,company,share_unit,shareholder_name,cus_name,idt_number,country,phone,nationality_card,statuss 
       FROM meetingtb INNER JOIN purchase ON meetingtb.purchs_id=purchase.purch_id INNER JOIN customer ON purchase.cus_id=customer.cus_id 
       INNER JOIN shareholder_detail ON customer.shareholder_id=shareholder_detail.share_id INNER JOIN countb 
       ON customer.nationality_id=countb.country_id INNER JOIN statustb ON meetingtb.status_id=statustb.status_id
       WHERE cus_name LIKE '%".$value."%' OR idt_number LIKE '%".$value."%' OR purch_id LIKE '%".$value."%' OR mt_id LIKE '%".$value."%' ";
       $result = mysqli_query($con,$query);
       $rs=mysqli_fetch_array($result);


       $mtid = $rs['mt_id']; 
       $img = $rs['nationality_card'];
       $purid  = $rs['purchs_id'];
       $com = $rs['company'];
       $share_unit = $rs['share_unit'];
       $share_name = $rs['shareholder_name'];
       $cusname = $rs['cus_name'];
       $idt = $rs['idt_number'];
       $country = $rs['country'];
       $phone = $rs['phone'];
       $status = $rs['statuss'];
    


?>
<center>
<div class="card" style="width:700; margin-top:3% ">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="inputEmail4" align="center">หมายเลขลงทะเบียน : <?php echo $mtid; ?> </label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="inputEmail4" align="center">เลขทะเบียนการซื้อหุ้น : <?php echo $purid; ?></label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="inputEmail4" >บริษัท : </label>
                <input type="text" class="form-control" id="" value="<?php echo $com; ?>" readonly placeholder="-">
                <input type="hidden"  id="nid" value="<?php echo $mtid; ?>" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">ประเภทผู้ถือหุ้น : </label>
                <input type="text" class="form-control" id="inputEmail4" value="<?php echo $share_name; ?>" readonly placeholder="-">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">ชื่อผู้ถือหุ้น : </label>
                <input type="text" class="form-control" id="inputPassword4" value="<?php echo $cusname; ?>" readonly placeholder="-">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">เลขบัตรประชาชน / นิติบุคคล</label>
                <input type="text" class="form-control" id="inputEmail4" value="<?php echo $idt; ?>" readonly placeholder="-">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">สัญชาติ</label>
                <input type="text" class="form-control" id="inputPassword4" value="<?php echo $country; ?>" readonly placeholder="-">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">เบอร์โทรศัพท์</label>
                <input type="text" class="form-control" id="inputEmail4" value="<?php echo $phone; ?>" readonly placeholder="-">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">สถานะ</label>
                <input type="text" class="form-control" id="inputPassword4" value="<?php echo $status; ?>" readonly placeholder="-">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <?php echo '<img src="image/'.$img.'" class="img-thumbnail imagecus mw-100 mh-100" />';  ?>
                </div>
            </div>
           
                <div class="form-group ">
                <hr width="100%"></hr>
                </div>
                <label for="inputPassword4">แบบประเมินความพึงพอใจ</label><br>
                <div class="alert alert-secondary" role="alert">
            <table width="100%" border="0" height="50px">
            <tr >
            <td align="center">
           
            <label class="btn btn-secondary active">
              <input type="radio"  name="com1" value="1"  /> ดี
            </label>
            <label class="btn btn-secondary">
              <input type="radio"  name="com1" value="2" /> พอใช้
            </label>
            <label class="btn btn-secondary">
              <input type="radio" name="com1" value="3" /> แย่
            </label>
            
            </td>
            </tr>
            </table>
            </div>
            <button type="submit" id="comment" class="btn btn-primary searchfn">ประเมินผล</button>

            
           
</div> 

<div id="show"></div>       
  </div>
</div>

</center>

<?php 

    }

    ?>

    <script>
    $(document).ready(function () {

$("#comment").click(()=>{
  var check = $("[type='radio']:checked").val();
  var id= $('#nid').val();
   $.ajax({
    method: "POST",
    url: "comment2.php",
    data: {
      value1 : check,
      nid : id
    },
    success: function (data) {
      $('#show').html(data);
    }
  });
 
});

});
    </script>