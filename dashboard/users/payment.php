<?php
session_start();
include '../config/database.php';
include '../config/config.php';


  
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
        </div>
        <div class="row">
        <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Transactions</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Date
                        </th>
                        <th></th>
                        <th>
                          Transaction ID
                        </th>
                        <th>
                          Details
                        </th>
                        <th>
                          Amount
                        </th>
                        <th>
                          Status
                        </th>
                      </thead>
                      <?php

                          $user_id = $_SESSION['uid'];
                          $acctno = $_SESSION['acctno'];

                          $sql = "SELECT * FROM tbl_transaction WHERE account = $acctno 
                            ";
                          $result = mysqli_query($link,$sql);

                        ?> 
                      <tbody>
                        <?php
                          if(mysqli_num_rows($result) > 0) { //if
                          while($row = mysqli_fetch_assoc($result)) {

                        ?>
                        <tr class="transaction-row nondefined" id="payment-10215" data-payment-id="10215">
                          <td><?php echo $row['date']; ?></td>
                          <td class="avatar">
                            <img class="DomesticPayment" >
                          </td>
                          <td>
                              <?php echo $row['tx_no']; ?>
                            </a>
                          </td>
                          <td>
                            <div id="comment-10215" class="muted comment-in-history"></div>
                            
                            <?php echo $row['description']; ?>
                          </td>
                          <td class="right amount">
                            
                            
                              <span class="amount-value">+<?php echo $row['tx_type'] == "credit" ? "$&nbsp;" . number_format($row['amount'], 2) : ""; ?><br>
                                -<?php echo $row['tx_type'] == "debit" ? "$&nbsp;" . number_format($row['amount'], 2) : ""; ?></span>
                              
                            
                          </td>
                          <td class="right payment-status deferred">Completed</td>
                          
                            <td class="favorite-action">
                              
                                <a class="remove-favorite post"  title="Remove from favorites" data-post-confirmation="Really remove from favorites?">★</a>
                              
                              
                            </td>
                          
                          
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
                        }//else{
                          $user_id = $_SESSION['uid'];
                          $acctno = $_SESSION['acctno'];
                            
                          $balance_sql = "SELECT balance FROM tbl_users WHERE id = $user_id AND acctno = $acctno";
                          $result = mysqli_query($link,$balance_sql);
                          $row = mysqli_fetch_assoc($result);
                        ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>


<?php require "footer.php"?>
