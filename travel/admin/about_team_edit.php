<?php
  include("../connection/connection.php");
  include("header.php");

  $sql = "select * from about_team where id = '".$_GET['id']."' ";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>
 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Team</h1>
          </div>
        </div>
        <?php
         if(isset($_SESSION['about_team_edit_err']))
          {
           ?>
            <div class="alert alert-warning" role="alert">
              <?php echo $_SESSION['about_team_edit_err']; ?>
            </div>
            <?php
            unset($_SESSION['about_team_edit_err']);
          }
        ?>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Team</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm1" method="post" action="action/about_team_edit.php" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Choose File">
                    <img src="../about_team_image/<?php  echo $row['image']; ?>" width="300" height="100">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Name" value="<?php echo $row['name']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Position</label>
                    <input type="text" name="position" class="form-control" id="exampleInputPassword1" placeholder="Enter Position" value="<?php echo $row['position']; ?>">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Submit" name="about_team_edit">
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php
  include("footer.php");
?>