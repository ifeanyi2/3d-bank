<?php
 session_start();
if(isset($_SESSION['uid'])){
 
 
  include '../../config/database.php';
  include '../../config/config.php';
  include 'users_query.php';
  include 'header.php';
  $msg = "";

}
else{

    header("location:../pages");
}



?>
  
 
 
 
 
 
 <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo $name?></h1>
          </div>






          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total User Accounts</h4>
                  </div>
                  <div class="card-body">
                  <?php echo $totalu;?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4> Active Accounts</h4>
                  </div>
                  <div class="card-body">
                  <?php echo $total2;?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Inactive Accounts</h4>
                  </div>
                  <div class="card-body">
                  <?php echo $total;?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4> Debit Transactions</h4>
                  </div>
                  <div class="card-body">
                 $<?php echo $debit;?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4> Credit Transactions</h4>
                  </div>
                  <div class="card-body">
                  $<?php echo $credit;?>
                  </div>
                </div>
              </div>
            </div>
          </div>




            </div>
          </div>
        </section>
      </div>
