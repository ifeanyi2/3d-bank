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









if (isset($_POST['apply'])){

  
    $date= $_POST['date'];
       $name= $_POST['name'];
       $amount = $_POST['amount'];
       $duration= $_POST['duration'];
       $reason= $_POST['reason'];
       $account= $_POST['account'];
       $email= $_POST['email'];
    
       $loanid ='cabcdg19etsfjhdshdsh35678gwyjerehuhb/>()[]{}|\dTSGSAWQUJHDCSMNBVCBNRTPZXMCBVN1234567890';
        $loanid = str_shuffle($loanid);
         $loanid= substr($loanid,0, 10);
        
    
         $sql = "INSERT INTO loan (account, date, name, amount, duration,reason,loanid,email) VALUES ('$account','$date','$name','$amount','$duration','$reason','$loanid','$email')";
    
          if(mysqli_query($link, $sql)){
    
       
            $msg= "Your loan application was successfully sent, wait for response!";
        } else {
            $msg= "Cannot apply!";
        }
    }
    
    
  


 


?>
<div class="content">
    <div class="container">
        <h3>Loan Application</h3>
        <div class="row">
            <div class="col-12">
                <a href="sloan.php" class="btn btn-success">Loan Status</a>
            </div>
            <div class="col-12 mt-5">
            <form action="loan.php" method="post">



                <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>


                    

                    


                <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">From</label>
                            </div>
                            <div class="col-lg-6">
                                <select type="text" name="" class="form-control" />
                                <option value="<?php echo $_SESSION['acctno'] ?>">

                <?php echo $_SESSION['acctno']; ?> 
                </option>
                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="account" value="<?php echo $row['acctno'];?>" class="form-control" />
                    
                    
                    <input type="hidden" name="email" value="<?php echo $row['email'];?>" class="form-control" />

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
                                <label class="login2 pull-right pull-right-pro">Full Name</label>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="name"  maxlength="160" value=""  placeholder="Enter full  Name "/>
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
                                <label class="login2 pull-right pull-right-pro">Loan Duration</label>
                            </div>
                            <div class="col-lg-6">
                                <select type="text" name="duration"  class="form-control" />
                                <option>1week</option>
                                <option>2weeks</option>
                                <option>1month</option>
                                <option>3months</option>
                                <option>1year</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="login2 pull-right pull-right-pro">Reason For Loan</label>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="reason" class="form-control" />
                            </div>
                        </div>
                    </div>


                

                    <div class="form-group-inner">
                        <div class="login-btn-inner">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <div class="login-horizental cancel-wp pull-left">
                                        
                                        <button class="btn btn-sm btn-primary login-submit-cs" name="apply" type="submit">Apply</button>
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

<?php require "footer.php";?>