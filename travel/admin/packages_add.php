<?php
  include("header.php");
?>
 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tour Packages</h1>
            <span id="errpicmsg"></span>
            <span id="errmsg"></span> 
            <span id="errpackpicmsg"></span>
            <span id="errpactitmsg"></span>  
            <span id="errpacpricemsg"></span> 
            <span id="errpacdaysmsg"></span>
            <span id="errhighpicmsg"></span>                     
          </div>
        </div>
         <?php 
          if(isset($_SESSION['packages_add_err']))
          {
           ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['packages_add_err']; ?>
            </div>
            <?php
            unset($_SESSION['packages_add_err']);
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
                <h3 class="card-title">Add Package</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm1" method="post" action="action/packages_add.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="package_image" class="form-control" id="profphoto" placeholder="Choose File">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="package_title" class="form-control" id="titleInput" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                    <textarea id="summernote" name="package_content">
                       Place <em>some</em> <u>text</u> <strong>here</strong>
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
                    <input type="file" name="tour_image" class="form-control" id="pacphoto" placeholder="Choose File">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="tour_title" class="form-control" id="packtitleInput" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                     <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Days</label>
                    <input type="text" name="days" class="form-control" id="days" placeholder="Enter Days">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Highlight Content</label>
                    <textarea id="summernote1" name="highlight_content">
                       Place <em>some</em> <u>text</u> <strong>here</strong>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Highlight Image</label>
                    <input type="file" name="highlight_image" class="form-control" id="highphoto" placeholder="Choose File">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Journey Details</label>
                    <textarea id="summernote2" name="journey_detail">
                       Place <em>some</em> <u>text</u> <strong>here</strong>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Includes</label>
                    <input type="text" name="includes" class="form-control" id="exampleInputPassword1" placeholder="Enter Includes">
                  </div>
                </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="button" class="btn btn-primary submit" value="Submit" name="packages_add">
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
        $("#errpicmsg").html("Image file can not be empty.");        
        return false;
      }
      else
      {
        var ext = $('#profphoto').val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['png','jpg','jpeg']) == -1)
        {
          $("#errpicmsg").html("Image file is invalid.");                  
          return false;
        }
      }

      var titleReg = /^[A-Za-z]+$/;

      var title = $('#titleInput').val();

      if($('#titleInput').val() == ''){
        $("#errmsg").html("Enter title.");
        return false;
      }
      else
      {
        if(!titleReg.test(title)){
          $("#errmsg").html("Enter a valid title.");
          return false;
        }
      }

      if($('#pacphoto').val() == '')
      {
        $("#errpackpicmsg").html("Package Detail Image file can not be empty.");        
        return false;
      }
      else
      {
        var ext = $('#pacphoto').val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['png','jpg','jpeg']) == -1)
        {
          $("#errpackpicmsg").html("Package Detail Image file is invalid.");                  
          return false;
        }
      }

      var titleReg = /^[A-Za-z]+$/;

      var title = $('#packtitleInput').val();

      if($('#packtitleInput').val() == ''){
        $("#errpactitmsg").html("Enter package detail title.");
        return false;
      }
      else
      {
        if(!titleReg.test(title)){
          $("#errpactitmsg").html("Enter a valid package detail title.");
          return false;
        }
      }

      var newVal = $("#price").val();
      var regexp = /^(0|[1-9]+[0-9]*)$/;

        if (!regexp.test(newVal)) {
          $("#errpacpricemsg").html("Enter valid price.");
          return false;
        }

      var newVal = $("#days").val();
      var regexp = /^(0|[1-9]+[0-9]*)$/;

        if (!regexp.test(newVal)) {
          $("#errpacdaysmsg").html("Enter valid days.");
          return false;
        } 

      if($('#highphoto').val() == '')
      {
        $("#errhighpicmsg").html("Highlight Image file can not be empty.");        
        return false;
      }
      else
      {
        var ext = $('#highphoto').val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['png','jpg','jpeg']) == -1)
        {
          $("#errhighpicmsg").html("Highlight Image file is invalid.");                  
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