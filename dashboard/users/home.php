<?php
session_start();
include '../config/database.php';
include '../config/config.php';


  
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





 


?>
<style>
    table, tr, td{
        padding:30px;
        text-align:center;
    }
</style>


        <div class="content">
            <div class="container-fluid">
            <h3> Welcome Back <?php echo $row['fname']. ' ' . $row['lname'] ?></h3>
            <h5>Account Number: <strong><?php echo $row['acctno']; ?></strong></h5>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header card-header-warning">
                            <h4 class="card-title">Account Details</h4>
                            <p class="card-category"></p>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-warning">
                                    <th>Account Name</th>
                                    <th>Account Type</th>
                                    <th>Account Number</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><strong><?php echo $row['fname']. ' ' . $row['lname'] ?></strong></td>
                                        <td><strong><?php echo $row['utype']; ?></strong></td>
                                        <td><strong><?php echo $row['acctno']; ?></strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card"  style="height:180px; text-align: center">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Account Balance</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body table-responsive">
                                <h2><?php echo  $currency.' '.number_format($row['balance'], 2);?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                    
                   
                    <div class="sparkline12-graph">
                        <div id="pwd-container1">
                            <div class="form-group">



  
                <div class="clearfix offers not-refused-offers">
                
                    <div id="offer-galojan" style="background-image: url(&#39;/public/images/default-banner.png&#39;);" class="offer loan-offer loan-offer-approved">
                    <div class="offer-actions">
                            <a class="offer-action" href="" data-ga-event="pre-approved-loan" data-ga-action="start">
                                <object type="nested/links">
                                <span class="offer-text"><h3><p>You have logged in from IP: <?php echo $_SERVER['REMOTE_ADDR']; ?> You log in at: <?php echo date("h:i A d M Y"); ?></p>
                                </h3></span>
                                </object>
                            </a>
                        
                        </div>
                </div>
                <div class="col-md-12">
                <?php
                    $user_id = $_SESSION['uid'];
                    $acctno = $_SESSION['acctno'];

                    $balance_sql = "SELECT acctno,cardt,card,utype,active,pics,status,inbalance,balance,acone,actwo,acthree,fname,lname,email,phone,gender   FROM tbl_users WHERE id = $user_id AND acctno = $acctno";
                    $result = mysqli_query($link,$balance_sql);
                    $row = mysqli_fetch_assoc($result);


                ?>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Account Details</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Account
                        </th>
                        <th>
                          Limit
                        </th>
                        <th>
                          Account Type
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          <?php echo $row['acctno'];?>
                          </td>
                          <td>
                          <?php echo $currency.'50,000';?>
                          </td>
                          <td>
                          <?php echo $row['utype']?>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <?php echo $row['card']?>
                          </td>
                          <td>
                          <?php echo $currency.'100,000';?> 
                          </td>
                          <td>
                          <?php echo $row['cardt']?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>




        </div>

        <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">All Transfer & Transaction</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                            Account
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                          Reference No.
                        </th>
                        <th>
                          Date
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Debit
                        </th>
                        <th>
                          Credit
                        </th>
                      </thead>
                                <?php


                                $user = $_SESSION['utype'];
                                $acctno = $_SESSION['acctno'];
                                if (!isset($acctno) && $acctno <= 0) {
                                    header('Location: index.php');
                                }

                                $sql = "SELECT * FROM tbl_transaction WHERE account = $acctno 
                                        ORDER BY id DESC LIMIT 10";
                                $result = mysqli_query($link, $sql);



                                ?> 
                                    <tbody>
                                        <tr>
                                        <?php

                                            if(mysqli_num_rows($result) > 0){
                                                while($row = mysqli_fetch_assoc($result)){

                                        ?>
          <td nowrap="" class="account" id="account-10034">
          <?php echo $_SESSION['acctno'] ?>
          </td>
        
        
        <td><?php echo $_SESSION['fname'];  ?></td>
        <td style="text-transform: lowercase">
      <?php echo $row['tx_no']; ?>
        </td>
        <td class="right"><?php echo $row['date']; ?></td>
        <td class="right"><?php echo $row['comments']; ?></td>
        <td class="right" style="text-transform: lowercase"><span style="color:red"><?php echo $row['tx_type'] == "debit" ? $currency . "&nbsp;" . number_format($row['amount'], 2) 
		: ""; ?></span></td>
		<td class="right" style="text-transform: lowercase"><span style="color:green"><?php echo $row['tx_type'] == "credit" ? $currency . "&nbsp;" . number_format($row['amount'], 2) 
		: ""; ?></span></td>
        </tr>
      <?php
} // end while
}//if
else {
?>
  <tr> 
   <td colspan="6" align="right">You have no transaction history yet, seems that you haven't done any transaction yet.</td>
  </tr>
<?php 
}//else
	$user_id = $_SESSION['uid'];
	$acctno = $_SESSION['acctno'];
	  
	$balance_sql = "SELECT balance FROM tbl_users WHERE id = $user_id AND acctno = $acctno";
	$result = mysqli_query($link, $balance_sql);
if(mysqli_num_rows($result) > 0){
  $row = mysqli_fetch_assoc($result);
}
	
?>
                                        </tr>
                                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Notifications</h3>
            </div>
                <?php
                    $sql = "SELECT * FROM news ";
                    $result = mysqli_query($link, $sql);
                    if(mysqli_num_rows($result) > 0){
                    while( $row = mysqli_fetch_assoc($result)){


                ?>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <h4 class="card-title"> Bank Notifications</h4>
                  <div class="alert alert-info">
                    <span><?php echo $row['message']; ?></span>
                  </div>
              </div>
            </div>
            <?php 
                }
            }
            ?>
          </div>
        </div>
      </div>
                          

<?php require "footer.php";?>






