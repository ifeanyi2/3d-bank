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
  
  
   $date = $_SESSION['date'] = $_POST['date'];
   $bname = $_SESSION['bname'] = $_POST['bname'];
   $bbn =  $_SESSION['bbn'] = $_POST['bbn'];
   $toption = $_SESSION['bv'] = $_POST['toption'];
   $swift =  $_SESSION['swift'] = $_POST['swift'];
   $amount = $_SESSION['amount'] = $_POST['amount'];
   $comments = $_SESSION['comments'] = $_POST['details'];
   $tacctno = $_SESSION['tacctno ']= $_POST['tacctno'];
    $toption = $_SESSION['toption'] = $_POST['toption'];
    $desc = $_SESSION['description'] = $_POST['description'] ;

    if (empty($bname) || empty($amount) || empty($tacctno) || empty($bbn)) {
        echo "<script>alert('All Fields Are Required!!')</script>";
       

    }else {
        if (!empty($bname) && !empty($amount)) {
            echo '<script type="text/javascript">
            window.location.href ="im.php" ;
            </script>';
        }
    }
  

    
  }
      }
  }
  }  

?>
<div class="content">
    <div class="container text-center">
        <div class="row">
            <div class="col-12 col-lg-3 col-md-6">
                <a href="payment.php" class="btn btn-primary"><i class="fa fa-refresh"></i> History</a>
            </div>
            <div class="col-12 col-lg-3 col-md-6">
            <a href="local.php" class="btn btn-warning"><i class="fa fa-exchange"></i> Domestic Transfer</a>
            </div>
            <div class="col-12 col-lg-3 col-md-6">
            <a href="international.php" class="btn btn-success"> International Transfer</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
            <div class="row">
                <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                            <form action="local.php" method="post">



                                            <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>


                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">From</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <select type="text" name="" class="form-control" />
                                                            <option value="<?php echo $_SESSION['acctno'] ?>">
	 
        <?php echo $_SESSION['acctno'] ?> &nbsp;| &nbsp;$<?php echo number_format($row['balance']); ?>
        </option>
</select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Date</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="date" value="<?php echo date("m-d-y");?>" readonly="true" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>


   <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Routing Number</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control"   maxlength="160" value=""  placeholder="routing number"/>
                                                        </div>
                                                    </div>
                                                </div>


   <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Swift Code</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control" name="bname"  maxlength="160" value=""  placeholder="Swift code"/>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Beneciary</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control" name="bname"  maxlength="160" value=""  placeholder="Beneficiary's Name or Organization Name"/>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Amount</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="amount" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Beneficiary Account</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text"  name="tacctno" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>


                                              




                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Beneficiary Bank Name</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input name="bbn" type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>





                                                <input type="hidden" name="toption" value="IT" />
<input type="hidden" name="swift" value="4521369875" />
<input type="hidden" name="description" value="" />

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Details</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <textarea name="details" type="text" class="form-control" placeholder="Narration" >
</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                               

                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="login-horizental cancel-wp">
                                                                    
                                                                    <button class="btn btn-sm btn-primary login-submit-cs" name="transfer" type="submit">Transfer</button>
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
                  
               
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
</div>






<?php require "footer.php"?>