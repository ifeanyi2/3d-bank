<?php
session_start();
include '../config/database.php';
include '../config/config.php';
$msg = ''; 

  
$user_id = $_SESSION['uid'];
$acctno = $_SESSION['acctno'];

$balance_sql = "SELECT acctno,cardt,card,utype,active,pics,status,inbalance,balance,acone,actwo,acthree,fname,lname,email,phone,gender   FROM tbl_users WHERE id = $user_id AND acctno = $acctno";
$result = mysqli_query($link,$balance_sql);
$row = mysqli_fetch_assoc($result);


if(isset($row['status']) && $row['status']== 0){

header('location:../admin/pages/error.php');
}else{
}


include "header.php";









if(isset($_POST['transfer'])){

  

    
     $image = $_FILES['image']['name'];
	$target = "md/".basename($image);
   $account = $_POST['account'];
    $email = $_POST['email'];
  $cid = substr(str_shuffle("0JHGGSGJHS123456HHDHYDJH789"), 0, 10);
  

   $sql = "INSERT INTO md (email, account, cheque, cid) VALUES ('$email','$account','$image','$cid')";
   
   if(mysqli_query($link, $sql)){
       
       move_uploaded_file($_FILES['image']['tmp_name'], $target);
      
           $msg =  "Cheque deposited successfully wait for approval!";

}else{
    
     $msg =  "Unable to deposit!";
}

}






 


?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 col-md-6">
                <a href="payment.php" class="btn btn-primary"><i class="fa fa-refresh"></i> History</a>
            </div>
            <div class="col-12 col-lg-3 col-md-6">
                <a href="local.php" class="btn btn-warning"><i class="fa fa-exchange"></i> Domestic Transfer</a>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mb-5">
                <a href="international.php" class="btn btn-success"> International Transfer</a>
            </div>
            <div class="col-12 col-lg-12 col-md-12 mt-5">
                <form action="md.php" method="post"  enctype="multipart/form-data">



                        <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>


                        


                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="login2 pull-right pull-right-pro">Upload Cheque</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" name="image"  />
                                    </div>
                                </div>
                            </div>


                            

                        <input type="hidden" name="email" value="<?php echo $row['email']?>" />

                            <input type="hidden" name="account" value="<?php echo $acctno?>" />
                        <input type="hidden" name="swift" value="4521369875" />
                        <input type="hidden" name="description" value="" />

                        
                        

                            <div class="form-group-inner">
                                <div class="login-btn-inner">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <div class="login-horizental cancel-wp pull-left">
                                                
                                                <button class="btn btn-sm btn-primary login-submit-cs" name="transfer" type="submit">Deposit-Cheque</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </form>
            </div>

        </div>
    </div>
</div>



<?php require "footer.php"?>