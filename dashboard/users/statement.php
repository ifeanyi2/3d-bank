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
  <link rel="stylesheet" type="text/css" href="files/scripts/statement-print.css" media="print">

<script src="files/scripts/Statement.js.download"></script>


<script>
      function removeFieldErrorsFromGlobal(context){
        var globalErrors = $('#global-alerts-container .alert-error', context);
        $('form .hasError:visible [name], form .error:visible [name]', context).each(function() {
          globalErrors.filter("[data-key='" + this.name + "']").remove();
        });
        globalErrors.show();
      }

      
      
        $(function() {
          setTimeout(function(){
            removeFieldErrorsFromGlobal($('body'));
          }, 100);
        });
      
    </script>


<div id="page-alerts-container">
  
  </div>
  </span>
          
  
          
  
  
  
  
  
  
    <link rel="stylesheet" type="text/css" href="../files/scripts/statement-print.css" media="print">
  
    <script src="../files/scripts/Statement.js.download"></script>
  
    <script>
      var statement;
      $(function() {
        statement = new Statement({
          authenticityToken: 'a2364dc6b48ba16699e696e422d6729ff23be41e',
          startDate: '01.01.2012',
          endDate: '31.03.2019',
          isAdvancedFilterUsed: false,
          multipleAccountsSelected: false,
          bulkPrintLimit: 5,
          bulkPDFLimit: 3,
          textDelete: 'Delete',
          textOfflineDelete: 'Delete offline statement?'
        });
        statement.init();
      });
    </script>
  
    <script>
    function messageIfNoTransactionsEligibleForRewardFound() {
      if ($('input[name="filter.rewardPrograms"]:checked').length > 0) {
        $('#no-transactions').text('No eligible for reward transactions found during set period');
      }
    }
  
    $(function () {
      $('.reward.ELIGIBLE').on('click', function () {
        var transactionId = $(this).data('transaction-id'),
            accountId = $(this).data('account-id'),
            date = $(this).data('date'),
            loyaltyProgram = $(this).data('loyalty-program');
  
        var data = {
          transactionId: transactionId,
          accountId: accountId,
          date: date,
          authenticityToken: 'a2364dc6b48ba16699e696e422d6729ff23be41e'
        };
  
        $.post('/loyaltyprogram/' + loyaltyProgram + '/rewards/preview', data).success(function (data) {
          $('#default-dialog').html(data).modal();
        }).fail(function (error) {
          alert(href + ' failed with ' + error)
        });
      });
  
      messageIfNoTransactionsEligibleForRewardFound();
    });
  </script>
  
    <div class="submenu-body" id="statement-page">
  
      
  
     
      
  
  <script>
    function updateCurrencyByAccount(selectedCurrencyField) {
      var symbol = selectedCurrencyField.attr('currency');
      var prevCode = $('input[name="payment.currency"]').val();
      var code = selectedCurrencyField.attr('currency-code');
  
      $('form #currency').text(symbol);
      $('form input[name="payment.currency"]').val(code);
  
      if (prevCode !== code)
        $('form input[name="payment.currency"]').trigger('change');
    }
  </script>
  
  
  
    <script>
      $(function() {
        $('select[name="accountId"]').on('change', function() {
          
            updateCurrencyByAccount($(this).find('option:selected'));
          
          $.noop();
        })
      });
    </script>
    



    <div class="breadcome-area mg-t-40 mg-b-30">
    <div class="container" style="width:100%">

    <div class="table-responsive">
                 
            
            




            <?php

$user_id = $_SESSION['uid'];
 $acctno = $_SESSION['acctno'];

$sql = "SELECT * FROM tbl_transaction WHERE account = $acctno 
   ";
$result = mysqli_query($link,$sql);

?> 

<div class="content mt-5 text-center">
  <div class="container">
      <div class="row text-center">
        <div class="col-12"><h3>Statement Of Account</h3></div>
        <div class="row">
          <div class="col-12">Account Name: <?php echo $row['fname'].'  '.$row['lname']; ?></div>
          <div class="col-12">Account Number: <?php echo $row['acctno'];?></div>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-lg-3">
          <div class="form-actions">
            <button onclick="window.print()" class="btn btn-primary btn-query">Print</button>
        
            <div id="statement-export" class="btn-group">
              <a class="btn" h href="#" onclick="HTMLtoPDF()">
                Export Pdf
                <span><i class="far fa-file-pdf"></i></span>
              </a>
            </div>                                                    
        </div>
      </div>
      <div class="col-md-12">
        <div id="HTMLtoPDF">
            <div class="card">
            <?php 
              $user_id = $_SESSION['uid'];
              $acctno = $_SESSION['acctno'];
              
              $balance_sql = "SELECT balance FROM tbl_users WHERE id = $user_id AND acctno = $acctno";
              $result1 = mysqli_query($link, $balance_sql);
                    if(mysqli_num_rows($result1) > 0){
                      $row = mysqli_fetch_assoc($result1);
                    }
            ?>
              <div class="card-header card-header-primary">
                <h4 class="card-title "> Account Statement for <?php echo $_SESSION['fname'];  ?></h4>
                <p class="card-category"> Account Balance  <?php echo $currency . number_format($row['balance']); ?></p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      
                      <th class="{sorter: &#39;date&#39;} header headerSortUp" style="min-width: 35px;" data-column="time">Date</th>
                      <th class="{sorter: &#39;date&#39;} header" style="min-width: 200px;">Reference N0#</th>
                      <th class="{sorter: &#39;text&#39;} header" width="45%" data-column="description">Description</th>
                      <th class="right amount {sorter: &#39;amount&#39;} header" data-column="amount">Debit</th>
                      <th class="right amount {sorter: &#39;amount&#39;} header" data-column="amount">Credit</th>
                    </thead>
                    <tbody>
                    <?php
                          
                          $user = $_SESSION['fname'];
                          $acctno = $_SESSION['acctno'];
                          if (!isset($acctno) && $acctno <= 0) {
                            header('Location: index.php');
                          }
                          
                          $sql = "SELECT * FROM tbl_transaction WHERE account = $acctno 
                              ORDER BY id DESC LIMIT 20";
                          $result1 = mysqli_query($link, $sql);
                          if(mysqli_num_rows($result1) > 0){
                            while($row = mysqli_fetch_assoc($result1)){
                          
                    ?> 
                    <tr class="transaction-row tx-debit">
    
                      <td>
                      <?php echo $row['date']; ?>
                      </td>

                    

                    
                        <td>
                      <?php echo $row['tx_no']; ?>
                        </td>
                      

                      <td>
                      <?php echo $row['comments']; ?>
                      
                      </td>
                      
                      <td class="right amount negative">
                      -<?php echo $row['tx_type'] == "debit" ? $currency . "&nbsp;" . number_format($row['amount'], 2) : ""; ?>
                        </td>
                        <td class="right amount positive">
                        +<?php echo $row['tx_type'] == "credit" ? $currency . "&nbsp;" . number_format($row['amount'], 2) : ""; ?>
                          
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
                      }//else
                        $user_id = $_SESSION['uid'];
                        $acctno = $_SESSION['acctno'];
                          
                        $balance_sql = "SELECT balance FROM tbl_users WHERE id = $user_id AND acctno = $acctno";
                        $result1 = mysqli_query($link, $balance_sql);
                        $row = mysqli_fetch_assoc($result1);
                      ?>
                      </tbody>
                      
                        <tbody>
                          
                      <?php 
                          $user_id = $_SESSION['uid'];
                          $acctno = $_SESSION['acctno'];
                          
                          $balance_sql = "SELECT balance FROM tbl_users WHERE id = $user_id AND acctno = $acctno";
                          $result1 = mysqli_query($link, $balance_sql);
                        $row = mysqli_fetch_assoc($result1);
                          ?>
                            <tr id="closing-balance-row">
                              <th class="right" colspan="4">Available Balance: </th>
                              <th class="right amount">$ <?php echo number_format($row['balance']); ?></th>
                              
                            </tr>
                          
                        </tbody>
                      
                      </table>
  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
  </div>
</div>

  
  <script>
    $(function() {
      $('.reward-badge').tooltip();
    });
  </script>
    
  
    <div id="transaction-details-dialog" class="hidden modal fade" tabindex="-1"></div>
  
  
  
          
  
    <div class="bottom-cms-content">
      
      
        <div class="cms-content"></div>
      



 <script src="js/js/jspdf.js"></script>
	<script src="js/js/jquery-2.1.3.js"></script>
	<script src="js/js/pdfFromHTML.js"></script>

               
            </div>
        </div>
    </div>
</div>

<?php require "footer.php"?>
