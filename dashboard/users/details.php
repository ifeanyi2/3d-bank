<?php
session_start();
include '../config/database.php';
include '../config/config.php';
$msg = ''; 

  
$user_id = $_SESSION['uid'];
$acctno = $_SESSION['acctno'];

$balance_sql = "SELECT *   FROM tbl_users WHERE id = $user_id AND acctno = $acctno";
$result = mysqli_query($link,$balance_sql);
$row = mysqli_fetch_assoc($result);


if(isset($row['status']) && $row['status']== 0){

header('location:../admin/pages/error.php');
}else{
}


include "header.php";









if(isset($_POST['transfer'])){

  
    if($row['active'] != 1){
  
  $msg = 'Local Transfer is not activated on this account contact account manager !';
  
  }else{
  
  
  
    if($row['balance'] < $_POST['amount']){
  
      $msg = 'Insufficient Account Balance!';
      
      }else{
  
  
   if(isset($row['acone']) && $row['acone']== 1){
  
  
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['bname'] = $_POST['bname'];
    $_SESSION['bbn'] = $_POST['bbn'];
    $_SESSION['bv'] = $_POST['toption'];
    $_SESSION['swift'] = $_POST['swift'];
    $_SESSION['amount'] = $_POST['amount'];
    $_SESSION['comments'] = $_POST['details'];
    $_SESSION['tacctno ']= $_POST['tacctno'];
    $_SESSION['toption'] = $_POST['toption'];
    $_SESSION['description'] = $_POST['description'] ;
  
    echo '<script type="text/javascript">
    window.location.href ="imf.php" ;
    </script>';
    
  }
  
  if(isset($row['actwo']) && $row['actwo']== 1){
  
  
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['bname'] = $_POST['bname'];
    $_SESSION['bbn'] = $_POST['bbn'];
    $_SESSION['bv'] = $_POST['toption'];
    $_SESSION['swift'] = $_POST['swift'];
    $_SESSION['amount'] = $_POST['amount'];
    $_SESSION['comments'] = $_POST['details'];
    $_SESSION['tacctno ']= $_POST['tacctno'];
    $_SESSION['toption'] = $_POST['toption'];
    $_SESSION['description'] = $_POST['description'] ;
  
    echo '<script type="text/javascript">
    window.location.href ="OTP.php?Token&otps=true" ;
    </script>';
    
  }
      }
  }
  }  










 


?>
<style>
    input{
        padding:20px;
        text-align:center;
        margin:10px
    }
    label{
        font-size:20px;
    }
</style>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Customer Account Information</h4>
                  <?php if($msg != "") echo "<p class='card-category'> $msg </p>";  ?>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>" readonly="true">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control" name="lname" value="<?php echo $row['lname'];?>" readonly="true">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control"  name="email"  maxlength="160" value="<?php echo $row['email'];?>" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control" readonly="true" name="address" value="<?php echo $row['address'];?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone Number</label>
                          <input type="text" class="form-control" readonly="true" name="phone" value="<?php echo $row['phone'];?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">State</label>
                          <input type="text" class="form-control" readonly="true" name="state" value="<?php echo $row['state'];?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Zipcode</label>
                          <input type="text" class="form-control" name="zipcode" readonly="true" value="<?php echo $row['zipcode'];?>">
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile" style="height:260px">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="uploads/<?php echo $row['pics'];?>" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray"><?php echo $row['fname']. ' ' . $row['lname'] ?></h6>
                  <h4 class="card-title"><?php echo $row['acctno']; ?></h4>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>












<?php require "footer.php";?>