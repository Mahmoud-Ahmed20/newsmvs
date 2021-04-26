<?php require("header.php")?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"> 
          <a href="Regester"> 
              <span class="btn btn-success col fileinput-button">
                        <i class="fas fa-plus"></i>
                        <span>Add</span>
                      </span>
                      </a>
                  </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Update</th>
                      <th>Delete</th>

                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($data as $u):?>
                    <tr>
                      <td><?= $u->id?></td>
                      <td><?= $u->name?></td>
                      <td><?= $u->email?></td>

                      <td><a href="update/<?=$u->id?>" class="btn btn-default">update</a></td>
                      <td>
                      <a href="delete/<?=$u->id?>" class="btn btn-danger">delete</a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>



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

