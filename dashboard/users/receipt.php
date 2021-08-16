<?php



session_start();
include '../config/database.php';
include '../config/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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


   $date = date("Y/m/d");
            $bname = $_SESSION['bname'];
            $bbn = $_SESSION['bbn'];
            $bv = $_SESSION['bv'];
            $swift = $_SESSION['swift'];
            $amount =  $_SESSION['amount'];
            $comments = $_SESSION['comments'] ;
            $tacctno = $_SESSION['tacctno '];
            $toption = $_SESSION['toption'];
            $desc = $_SESSION['description'] ;
               $tokens =  $_SESSION['token'];

?>
<style>
    .list-unstyled>li{
        margin:20px;
        padding:10px;
        font-size:18px;
    }
</style>




</head>
<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12"><h2>Receipts</h2></div>
                <div class="col-12">
                    <div class="content">
                        <div class="container-fluid">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h3 class="card-title">Transfer Successful</h3>
                            
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                    <h4 class="card-title"><a href="local.php"><button type="button" class="btn btn-success">New Transfer</button></a></h4>
                                    <div class="alert alert-info">
                                        <span>
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
                                                        <b>Details</b>
                                                    </div>
                                                </div>

                                                <div>
                                                    <ul class="list-unstyled  spaced">
                                                    

                                                        <li>
                                                            <i class="ace-icon fa fa-caret-right green"></i> Date: <?php echo  $date;?>
                                                        </li>

                                                        <li>
                                                            <i class="ace-icon fa fa-caret-right green"></i> Amount: <?php echo  $amount;?>
                                                        </li>


                                                        <li>
                                                            <i class="ace-icon fa fa-caret-right green"></i>
                                                            Account Number: <?php echo  $tacctno;?>
                                                        </li>
                                                        
                                                        <li>
                                                            <i class="ace-icon fa fa-caret-right green"></i>
                                                            Account Name: <?php echo  $bname;?>
                                                        </li>
                                                        
                                                        <li>
                                                            <i class="ace-icon fa fa-caret-right green"></i>
                                                            Transfer Status: Success
                                                        </li>
                                                    </ul>
                                                    <div class="space-6"></div>
                                                    <div class="well">
                                                        Thank you for choosing <?php echo  $name;?>.
                            We believe you will be satisfied by our services.
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
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