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
            <form action='load-forgot.php' method='post'>
          
            <h1>Forgot Password</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="New Password" name="pass1" required />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Confirm Password" name="pass2" required />
              </div>
            
              <div>
                <button type='submit' value='reset' name='btnReset' class="btn btn-default submit" >Change Password</button>
               
              </div>

              <div class="clearfix"></div>

              <div class="separator">
               
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i>Data Site Riau Daratan</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
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
