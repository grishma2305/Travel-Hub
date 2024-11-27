<?php
  include("header.php");
?>
 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Description</h1>
          </div>
        </div>
         <?php 
          if(isset($_SESSION['about_description_add_err']))
          {
           ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['about_description_add_err']; ?>
            </div>
            <?php
            unset($_SESSION['about_description_add_err']);
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
                <h3 class="card-title">Add Description</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm1" method="post" action="action/about_description_add.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripton</label>
                    <textarea id="summernote" name="description">
                       Place <em>some</em> <u>text</u> <strong>here</strong>
                    </textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Submit" name="about_description_add">
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