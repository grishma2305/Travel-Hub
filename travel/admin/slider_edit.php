<?php
  include("../connection/connection.php");
  include("header.php");

  $sql = "select * from slider where id = '".$_GET['id']."'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);

?>
 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider</h1>
            <span id="errmsg"></span>
            <span id="errpicmsg"></span> 
          </div>
        </div>
          <?php
           if(isset($_SESSION['slider_edit_err']))
          {
            ?>
            <div class="alert alert-warning" role="alert">
              <?php echo $_SESSION['slider_edit_err']; ?>
            </div>
            <?php
            unset($_SESSION['slider_edit_err']);
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
                <h3 class="card-title">Edit Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm1" action="action/slider_edit.php" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" id="profphoto">
                    <img src="../slider_image/<?php  echo $row['image']; ?>" width="300" height="100">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" class="form-control" id="titleInput" value="<?php echo $row['title'];?>">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="button" class="btn btn-primary submit" value="Submit" name="slider_edit">
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
  $('.submit').click(function(){
  //alert("hii");

  var err=0;
  var titleReg = /^[A-Za-z]+$/;

    var title = $('#titleInput').val();

    if(title==""){
      err++;
      $("#errmsg").html("Enter title.");
    }
    else if(!titleReg.test(title)){
       err++;
      $("#errmsg").html("Enter a valid title.");
    }

    var imageExtensions = ["png", "xbm", "dib", "jxl", "jpeg", "svgz", "jpg"];

    var file = document.getElementById("profphoto").value;
    var extention = file.slice(file.lastIndexOf('.') + 1);
    var isValid = false;

    for (const iterator of imageExtensions) {
        if (extention == iterator) {
            isValid = true;
            break;
        }
    }

    if (!isValid) {
      err++;
      $("#errpicmsg").html("File is invalid or empty.");
    }


    if (err >=1 ) {
      alert("Can not Submit");
    }
    else{
      $('#quickForm1').submit();
      //alert("submit");
    }

});
</script>

<?php
  include("footer.php");
?>