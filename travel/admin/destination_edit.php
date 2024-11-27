<?php
  include("../connection/connection.php");
  include("header.php");

  $sql = "select * from destination where id = '".$_GET['id']."'";
  
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);

?>
 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Destination</h1>
            <span id="errmsg"></span>            
            <span id="errpicmsg"></span>
            <span id="errpricemsg"></span> 
          </div>
        </div>
         <?php
           if(isset($_SESSION['destination_edit_err']))
          {
            ?>
            <div class="alert alert-warning" role="alert">
              <?php echo $_SESSION['destination_edit_err']; ?>
            </div>
            <?php
            unset($_SESSION['destination_edit_err']);
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
                <h3 class="card-title">Edit Destination</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm1" action="action/destination_edit.php" method="post" enctype="multipart/form-data">

                 <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="file" class="form-control" id="profphoto" placeholder="Choose File">
                     <img src="../destination_image/<?php  echo $row['image']; ?>" width="300" height="100">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" class="form-control" id="titleInput" placeholder="Enter Title" value="<?php echo $row['title'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripton</label>
                    <textarea id="summernote" name="description">
                       <?php echo $row['description'];?>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price" value="<?php echo $row['price'];?>">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="button" class="btn btn-primary submit" value="Submit" name="destination_edit">
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
        //alert("empty");
        $("#errpicmsg").html("File can not be empty.");        
        return false;
      }
      else
      {
        var ext = $('#profphoto').val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['png','jpg','jpeg']) == -1)
        {
          //alert("invalid");
          $("#errpicmsg").html("File is invalid.");                  
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

      var newVal = $("#price").val();
      var regexp = /^(0|[1-9]+[0-9]*)$/;

        if (!regexp.test(newVal)) {
          $("#errpricemsg").html("Enter valid price.");
          return false;
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