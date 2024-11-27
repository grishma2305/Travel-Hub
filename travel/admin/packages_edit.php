<?php
  include("../connection/connection.php");
  include("header.php");

  $sql = "select * from packages where id = '".$_GET['id']."' ";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>
 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tour Packages</h1>
          </div>
        </div>
        <?php
        if(isset($_SESSION['packages_edit_err']))
          {
           ?>
            <div class="alert alert-warning" role="alert">
              <?php echo $_SESSION['packages_edit_err']; ?>
            </div>
            <?php
            unset($_SESSION['packages_edit_err']);
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
                <h3 class="card-title">Edit Package</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm1" method="post" action="action/packages_edit.php" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="package_image" class="form-control" id="exampleInputEmail1" placeholder="Choose File">
                    <img src="../package_image/<?php  echo $row['package_image']; ?>" width="300" height="100">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="package_title" class="form-control" id="exampleInputPassword1" placeholder="Enter Title" value="<?php echo $row['package_title']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                    <textarea id="summernote" name="package_content">
                      <?php echo $row['package_content']; ?>
                    </textarea>
                  </div>
                </div>
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Package Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="tour_image" class="form-control" id="exampleInputEmail1" placeholder="Choose File">
                    <img src="../package_image/<?php  echo $row['tour_image']; ?>" width="300" height="100">                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="tour_title" class="form-control" id="exampleInputPassword1" placeholder="Enter Title" value="<?php echo $row['tour_title']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                     <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Enter Title" value="<?php echo $row['price']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Days</label>
                    <input type="text" name="days" class="form-control" id="exampleInputPassword1" placeholder="Enter Price" value="<?php echo $row['days']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Highlight Content</label>
                    <textarea id="summernote1" name="highlight_content">
                      <?php echo $row['highlight_content']; ?>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Highlight Image</label>
                    <input type="file" name="highlight_image" class="form-control" id="exampleInputEmail1" placeholder="Choose File">
                    <img src="../package_image/<?php  echo $row['highlight_image']; ?>" width="300" height="100">                                        
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Journey Details</label>
                    <textarea id="summernote2" name="journey_detail">
                      <?php echo $row['journey_detail']; ?>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Includes</label>
                    <input type="text" name="includes" class="form-control" id="exampleInputPassword1" placeholder="Enter Includes" value="<?php echo $row['includes']; ?>">
                  </div>


                </div>
                

                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Submit" name="packages_edit">
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