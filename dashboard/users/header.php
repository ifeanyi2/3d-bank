
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?php echo $title;?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>
        
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <style>
        .goog-te-combo{
            background:#0D4F8B;
            color: #fff;
            padding: 10px;
            border:1px solid #0D4F8B;
            border-radius: 8px;
        }
    </style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="assets/img/sidebar-1.jpg">
      <div class="logo"><img src="uploads/<?php echo $row['pics'];?>" style="border-radius:10%;margin:20px;" alt="" width="200" height="100" />
        
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./home.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="details.php">
              <i class="material-icons">person</i>
              <p>Account</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="cpin.php">
              <i class="material-icons">person</i>
              <p>Change Pin</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="message.php">
              <i class="material-icons">Message</i>
              <p>Messages</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="contact.php">
              <i class="material-icons">Message</i>
              <p>Contact Administrator</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="statement.php">
              <i class="material-icons">Message</i>
              <p>Account Statment</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="local.php">
              <i class="material-icons">library_books</i>
              <p>Payments</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="card.php">
              <i class="material-icons">bubble_chart</i>
              <p>Cards</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="loan.php">
              <i class="material-icons">location_ons</i>
              <p>Loans</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="cpassword.php">
              <i class="material-icons">notifications</i>
              <p>Change Password</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="logout.php">
              <i class="material-icons">notifications</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="details.php">Profile</a>
                  <a class="dropdown-item" href="home.php">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->













