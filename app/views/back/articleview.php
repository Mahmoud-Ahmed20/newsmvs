<?php require("header.php")?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Article Page</h1>
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
          <a href="AddAtricle">
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
        <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Img</th>
                      <th>Title</th>
                      <th>User_id</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($data as $a):?>
                      <tr>
                      <td><?= $a->id?> </td>
                      <td><?= $a->name?> </td>
                      <td><img src=" <?= DESIGN;?>/img/<?= $a->img?>" width="100px" height="100px" alt=""></td>  
                      <td><?= $a->title?></td>  
                      <td><?= $a->user_Id?></td>  
                      <td><a href="Update/<?= $a->id?>" class="btn btn-default">update</a></td>
                      <td><a href="DeleteAtricle/<?= $a->id?>" class="btn btn-danger">delete</a></td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>

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

