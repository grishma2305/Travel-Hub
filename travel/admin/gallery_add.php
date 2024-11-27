<?php
  include("header.php");
?>
 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery</h1>
            <span id="errpicmsg"></span>
          </div>
        </div>
         <?php 
          if(isset($_SESSION['gallery_add_err']))
          {
           ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['gallery_add_err']; ?>
            </div>
            <?php
            unset($_SESSION['gallery_add_err']);
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
                <h3 class="card-title">Add Gallery</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm1" method="post" action="action/gallery_add.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="file" class="form-control" id="profphoto" placeholder="Choose File">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="button" class="btn btn-primary submit" value="Submit" name="gallery_add">
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

<script type="text/javascript">
  $(document).ready(function(){
    $(".submit").click(function(){

      var ret = true;

      if($('#profphoto').val() == '')
      {
        $("#errpicmsg").html("File can not be empty.");        
        return false;
      }
      else
      {
        var ext = $('#profphoto').val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['png','jpg','jpeg']) == -1)
        {
          $("#errpicmsg").html("File is invalid.");                  
          return false;
        }
      }

      if(ret == true){   
        $("#quickForm1").submit(); // Submit the form
      }

    });
  });
</script>

<?php
  include("footer.php");
?>