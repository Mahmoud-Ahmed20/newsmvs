<?php require("header.php")?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="card" >
    <div class="card-body register-card-body" style='margin: auto'>
      <p class="login-box-msg">Register a new membership</p>

      <form action="GETRegesterAdmin" method="post">
        <div class="input-group mb-3 "style ='width: 122%'>
          <input type="text" class="form-control" name="name" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3"style ='width: 122%'>
          <input type="email" class="form-control"  name="email"placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3" style ='width: 122%'>
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" style='width: 140%'>Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
</div>   


        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <?php require("footar.php")?>

