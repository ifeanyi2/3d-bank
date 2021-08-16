<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Password Recovery</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
  <!-- build:css({.tmp,app}) styles/app.min.css -->
  <link rel="stylesheet" href="styles/webfont.css">
  <link rel="stylesheet" href="styles/climacons-font.css">
  <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="styles/font-awesome.css">
  <link rel="stylesheet" href="styles/card.css">
  <link rel="stylesheet" href="styles/sli.css">
  <link rel="stylesheet" href="styles/animate.css">
  <link rel="stylesheet" href="styles/app.css">
  <link rel="stylesheet" href="styles/app.skins.css">
  <!-- endbuild -->
</head>

<body class="page-loading">
  <!-- page loading spinner -->
  <div class="pageload">
    <div class="pageload-inner">
      <div class="sk-rotating-plane"></div>
    </div>
  </div>
  <!-- /page loading spinner -->
  <div class="app forgot-password usersession">
    <div class="session-wrapper">
      <div class="page-height row-equal align-middle">
        <div class="column">
          <div class="card bg-white no-border">
		  <br/>
	  <center><img src="logo.png" width="190px" height="63px" /></center>
            <div class="card-block">
              <form role="form" class="form-layout" action="">
                <div class="text-center m-b">
                  <h4 class="text-uppercase">Reset Password</h4>
                </div>
                <div class="form-inputs">
                  <label class="text-uppercase">Your email address</label>
                  <input type="email" class="form-control input-lg" placeholder="Email address" autofocus required>
                </div>
                <button class="btn btn-danger btn-lg btn-block" type="submit">Reset Password</button>
              </form>
            </div>
            <a href="index.php" class="bottom-link">Login instead.</a>
          </div>
        </div>
      </div>
    </div>
    <!-- bottom footer -->
    <footer class="session-footer">
      <nav class="footer-right">
        <ul class="nav">
         
          <li>
            <a href="javascript:;" class="scroll-up">
              <i class="fa fa-angle-up"></i>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="footer-left hidden-xs">
        <ul class="nav">
          <li>
            <a href="javascript:;">Help</a>
          </li>
        </ul>
      </nav>
    </footer>
    <!-- /bottom footer -->
  </div>
  <!-- build:js({.tmp,app}) scripts/app.min.js -->
  <script src="scripts/helpers/modernizr.js"></script>
  <script src="vendor/jquery/dist/jquery.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
  <script src="vendor/fastclick/lib/fastclick.js"></script>
  <script src="vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
  <script src="scripts/helpers/smartresize.js"></script>
  <script src="scripts/constants.js"></script>
  <script src="scripts/main.js"></script>
  <!-- endbuild -->
</body>

</html>