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
            <form action='load-regis.php' method='post'>
            <h1>Buat Akun</h1>
              <div>
                <input type="hidden" class="form-control" name="id" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Name" name="name" required />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="user" required />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="pass" required />
              </div>
              <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align"><span
                          class="#">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <select name="level" class="select2_single form-control" required>
                          <option value="">[Level User]</option>
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                          </select>
                        </div>
                      </div>


              <div>
                <button type='submit' class="btn btn-default submit" >Submit</button>
               
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Sudah Punya Akun ?
                  <a href="index.php" > Masuk </a>
                </p>

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
