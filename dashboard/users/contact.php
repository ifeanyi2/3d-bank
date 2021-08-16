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










if (isset($_POST['contact'])){

  
   
       $name= $_POST['name'];
       $email = $_POST['email'];
       $account= $_POST['account'];
       $complain= $_POST['complain'];
      
    
    
    
         $sql = "INSERT INTO contact (name, email, account,complain) VALUES ('$name','$email','$account','$complain')";
    
          if(mysqli_query($link, $sql)){
    
       
            $msg= "Your complain was successfully sent, wait for response!";
        } else {
            $msg= "Cannot send!";
        }
    }
    
    







 


?>

<div class="content">
    <div class="conatainer">
        <div class="row text-center">
                <div class="col-12"><h3>Contact Account Manager</h3></div>
                <div class="col-12">
                <form action="contact.php" method="post">



<?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>


    

    


    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3">
                <label class="login2 pull-right pull-right-pro">Full Name</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="name"  maxlength="160" value=""  placeholder="Enter Full Name"/>
            </div>
        </div>
    </div>


    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3">
                <label class="login2 pull-right pull-right-pro">Email</label>
            </div>
            <div class="col-lg-9">
                <input type="text" name="email" class="form-control" />
            </div>
        </div>
    </div>


    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3">
                <label class="login2 pull-right pull-right-pro">Account</label>
            </div>
            <div class="col-lg-9">
                <input type="text"  name="account" class="form-control" />
            </div>
        </div>
    </div>




    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3">
                <label class="login2 pull-right pull-right-pro">Comment</label>
            </div>
            <div class="col-lg-9">
                <textarea   name="complain" class="form-control" placeholder="Type your complain here" >
</textarea>
            </div>
        </div>
    </div>

    
    <div class="form-group-inner">
        <div class="login-btn-inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-horizental cancel-wp ">
                        
                        <button class="btn btn-sm btn-primary" name="contact" type="submit">Submit</button>
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
