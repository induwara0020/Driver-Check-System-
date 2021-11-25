<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <style>

   body{
     background-image: url('<?php echo validate_image($_settings->info('cover')) ?>');
     background-size:cover;
     background-repeat:no-repeat;
   }
 </style>
<body class="hold-transition login-page ">
  <script>
    start_loader()
  </script>
  <h1 class="text-center pb-4 mb-4 text-light"><?php echo $_settings->info('name') ?> </h1>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="a">
    <div class="card-body" style="width:100%">
      <form id="login-frm" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col">
            <!--<a href="<?php echo base_url ?>">Go to Portal</a>
          </div>
          <!-- .col -->
          <div class="col text-center">
            <button type="submit" class="btn btn-primary btn-flat btn-lg">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <div >
      
      </div>
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<p style="position: absolute;
  bottom: 10px;
  width: 50%;
  border: 3px;
  padding-left: 130px ; 
  color: #fff">Group 10 ©</p>

<p style="position: absolute;
  bottom: -4px;
  width: 50%;
  border: 3px;
  padding-left: 91px ; 
  color: #fff">FOR A SAFER SRI LANKA</p>
  
<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>