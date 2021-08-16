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









if (isset($_POST['msgs'])){

  
    
       $accounts= $_POST['accountz'];
       $message = $_POST['message'];

       if (empty($message)) {
           $msg = "All Fields are required";
       }
    
    
         $msgid ='cabcdg19etsfjhdshdsh35678gwyjerehuhb/>()[]{}|\dTSGSAWQUJHDCSMNBVCBNRTPZXMCBVN1234567890';
                $msgid = str_shuffle($msgid);
                 $msgid= substr($msgid,0, 10);
    
    
         $sql = "INSERT INTO messageadmin (account, message, msgid) VALUES ('$accounts','$message','$msgid')";
    
          if(mysqli_query($link, $sql)){
    
       
            $msg= "Your message was successfully sent!";
        } else {
            $msg= "Cannot send message!";
        }
    }
    
    
    
    if(isset($_POST['delete'])){
	
        $msgid = $_POST['msgid'];
        
    $sql = "DELETE FROM messageadmin WHERE msgid='$msgid'";
    
    if (mysqli_query($link, $sql)) {
        $msg = "Message deleted successfully!";
    } else {
        $msg = "Message not deleted! ";
    }
    }



 


?>
<style>
    ::placeholder{
        font-size:30px !important;
    }
</style>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5"><h4>Conatct Bank Customer Support Team</h4></div>
            <div class="col-12 text-center">
                                           
                                            
            <form action="message.php" method="post">



<?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>


    

    


    <input type="hidden" name="accountz" value="<?php echo $acctno;?>" class="form-control" />

    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12">
                <label class="login2 pull-right pull-right-pro" style="font-size:30px">Message</label>
            </div>
            <div class="col-lg-12">
                <textarea  name="message" placeholder="Type enter your message"  class="form-control" style="width:100%"></textarea>
            </div>
        </div>
    </div>
    
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3">
                
            </div>
            <div class="col-lg-12">
                <input type="submit" name="msgs" value="Send Message"  class="btn btn-info" />
            </div>
        </div>
    </div>

    <br><br>


    <div class="col-md-12 mt-5">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Message History</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <tr class="info">
                        <th>Account</th>
                        <th>Message</th>
                        <th>Admin-Response</th>
                        <th style="display:none;"></th>

                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        <?php 
                                $sql= "SELECT * FROM messageadmin WHERE account='$acctno'";
                                $result = mysqli_query($link,$sql);
                                if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){  
                                if(isset($row['astatus'])  && $row['astatus']==1){
                                $msg = 'Administrator replied &nbsp;&nbsp;<i style="background-color:green;color:#fff; font-size:20px;" class="fa  fa-check" ></i>';

                                }else{
                                $msg = 'Waiting for response! &nbsp;&nbsp;<i class="fa  fa-envelope" style=" font-size:20px;color:red"></i>';
                                }
                        ?>
                        <tr class="primary">
                        <form action="message.php" method="post">
                        <td><?php echo $row['account'];?></td>

                        <td id="account">  <?php echo $row['message'];?>
                        </td>
                        <td id="account"> <?php echo $row['reply'];?>
                        </td>
                        <td style="display:none;"><input type="hidden" name="msgid" value="<?php echo $row['msgid'];?>"> </td>

                                
                        <td><?php echo $msg;?></td>

                        <td><?php echo $row['date'];?></td>




                        <td><button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> Delete</span></button></td>
                        </form>
                        </tr>

                        <?php
                        }
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>







</div>
<!-- /top tiles -->

</div>





   

        </div>
    </div>
</form>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php";?>