<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Catwash - Solusi kendaraaan bersih Anda!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href=<?php echo base_url("assets/css/bootstrap.css" )?> rel="stylesheet" />
  <link href=<?php echo base_url("assets/css/bootstrap-responsive.css" )?> rel="stylesheet" />
  <link href=<?php echo base_url("assets/css/fancybox/jquery.fancybox.css")?> rel="stylesheet">
  <link href=<?php echo base_url("assets/css/jcarousel.css" )?> rel="stylesheet" />
  <link href=<?php echo base_url("assets/css/flexslider.css" )?> rel="stylesheet" />
  <link href=<?php echo base_url("assets/css/style.css" )?> rel="stylesheet" />
  <!-- Theme skin -->
  <link href=<?php echo base_url("assets/skins/default.css" )?> rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href=<?php echo base_url("ico/apple-touch-icon-144-precomposed.png")?> />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href=<?php echo base_url("ico/apple-touch-icon-114-precomposed.png")?> />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href=<?php echo base_url("ico/apple-touch-icon-72-precomposed.png")?> />
  <link rel="apple-touch-icon-precomposed" href=<?php echo base_url("ico/apple-touch-icon-57-precomposed.png")?> />
  <link rel="shortcut icon" href=<?php echo base_url("ico/favicon.png")?> />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <style>
  a, a:hover, a:focus, a:active, footer a.text-link:hover, strike, footer ul.link-list li a:hover, .post-meta span a:hover, footer a.text-link, ul.meta-post li a:hover, ul.cat li a:hover, ul.recent li h6 a:hover, ul.portfolio-categ li.active a, ul.portfolio-categ li.active a:hover, ul.portfolio-categ li a:hover, ul.related-post li h4 a:hover, span.highlight, article .post-heading h3 a:hover, .navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > li > a:hover, .navbar .nav > li > a:focus, .navbar .nav > .active > a:focus, .validation {
    color: #0066FB;}
	a.btn.btn-theme{
	background-color:#0066FB;
	border:#0066FB;
	}
	div.nivo-caption{
	border:#0066FB;
	}
	.hidden-top {
    background: #0066FB;
}
#header-hidden-link a.toggle-link, #header-hidden-link a.top-link {
    background: #0066FB;
}
.modal.styled .modal-header {
    background-color: #0066FB;
}
[class^="icon-"].active, [class*=" icon-"].active {

    background-color: #0066FB;

}
  </style>
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office: Jalan Semarang 5 Malang</li>
              <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
			
			  <?php if(!$this->session->userdata('email_sesi')){?>
			  <ul>
                <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
              </ul>
			  <?php } else {echo $this->session->userdata('email_sesi');?>
			  <a href="http://localhost/catwash/home/logout">Logout</a>
			  <?php } ?>
              
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Buat <strong>Akun</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="post" action="http://localhost/catwash/home/register">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="text" name="email"required id="inputEmail" placeholder="Email">
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputEmail">Nama Lengkap</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" name="nama" required placeholder="Nama lengkap">
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputEmail">Alamat</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" name="alamat" required placeholder="Alamat">
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputEmail">Tanggal Lahir</label>
                    <div class="controls">
                      <input type="date" id="inputEmail" required name="tanggal_lahir" placeholder="Tanggal lahir">
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputEmail">Jenis Kelamin</label>
                    <div class="controls">
                      <select name="gender" required>
					  <option>--gender--</option>
					  <option value="Pria">Pria</option>
					  <option value="Wanita">Wanita</option>
                      </select>
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputEmail">Nomor HP</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" required placeholder="Nomor HP" name="no_hp">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input type="password" required id="inputSignupPassword" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Konfirmasi Password</label>
                    <div class="controls">
                      <input type="password" required id="inputSignupPassword2" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">DAFTAR</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Sign in Modal -->
			
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Masuk ke <strong>Akun Anda</strong></h4>
              </div>
              <div class="modal-body">
			  <form method="post" accept-charset="utf-8" action="http://localhost/catwash/home/login">
                  <div class="control-group">
                    <label class="control-label" for="inputText">E-mail</label>
                    <div class="controls">
                      <input type="text" id="inputText" required name="email" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" name="password"required id="inputSigninPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <input type="submit" class="btn" name="login" value="Sign In" >
                    </div>
				</form>
                    <p class="aligncenter margintop20">
                      Lupa Password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="localhost/catwash/"><big><b>C A T W A S H - CARWASH</b></big></a>
              <h1>Solusi kendaraan bersih Anda</h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown ">
                      <a href="http://localhost/catwash/">Home <i></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#">Feedback<i ></i></a>
                      <ul class="dropdown-menu">
                        
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="http://localhost/catwash/home/chat">Chat<i ></i></a>
                      
                    </li>
                    <li class="dropdown">
                      <a href="http://localhost/catwash/home/faq">FAQ<i ></i></a>
                    </li>
					<!--
                    <li class="dropdown">
                      <a href="#">Blog <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                        <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                        <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                      </ul>
                    </li>
					-->
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src=<?php echo base_url("assets/js/jquery.js")?> ></script>
  <script src=<?php echo base_url("assets/js/jquery.easing.1.3.js")?> ></script>
  <script src=<?php echo base_url("assets/js/bootstrap.js")?> ></script>
  <script src=<?php echo base_url("assets/js/jcarousel/jquery.jcarousel.min.js")?> ></script>
  <script src=<?php echo base_url("assets/js/jquery.fancybox.pack.js")?> ></script>
  <script src=<?php echo base_url("assets/js/jquery.fancybox-media.js")?> ></script>
  <script src=<?php echo base_url("assets/js/google-code-prettify/prettify.js")?> ></script>
  <script src=<?php echo base_url("assets/js/portfolio/jquery.quicksand.js")?> ></script>
  <script src=<?php echo base_url("assets/js/portfolio/setting.js")?> ></script>
  <script src=<?php echo base_url("assets/js/jquery.flexslider.js")?> ></script>
  <script src=<?php echo base_url("assets/js/jquery.nivo.slider.js")?> ></script>
  <script src=<?php echo base_url("assets/js/modernizr.custom.js")?> ></script>
  <script src=<?php echo base_url("assets/js/jquery.ba-cond.min.js")?> ></script>
  <script src=<?php echo base_url("assets/js/jquery.slitslider.js")?> ></script>
  <script src=<?php echo base_url("assets/js/animate.js")?> ></script>

  <!-- Template Custom JavaScript File -->
  <script src=<?php echo base_url("assets/js/custom.js")?> ></script>

</body>
</html>
