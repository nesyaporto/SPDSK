<?php
include("koneksi.php")
?>
    <title>Data Site Riau Daratan</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
    
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="ceklogin.php" method="post">
              <h1>Login Form</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required />
              </div>
              <div>
              <button type='submit' class="btn btn-default submit" >Log in</button>
               
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Belum Punya Akun ?
                  <a href="register.php" > Buat Akun </a>
                </p>
                <p class="change_link"><a href="forgot.php" >Forgot Password</a>
                </p>
                <div>
                  <h><i class="fa fa-paw"></i>Themes by Gentelella Alela!</h>
                </div>
                </div>
            </form>
            <h> <?php echo "PT. TELKOM WITEL RIDAR Copyright © " . (int)date('Y')  ?></h>
            <p>
            <?php echo "Nesya - Politeknik Caltex Riau"  ?>
          </section>
        </div>

              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
