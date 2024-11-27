<?php
  include("header.php");
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
          if(isset($_SESSION['destination_add_err']))
          {
           ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['destination_add_err']; ?>
            </div>
            <?php
            unset($_SESSION['destination_add_err']);
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
                <h3 class="card-title">Add Destination</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm1" action="action/destination_add.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" id="profphoto" placeholder="Choose File">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" class="form-control" id="titleInput" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripton</label>
                    <textarea id="summernote" name="description">
                       Place <em>some</em> <u>text</u> <strong>here</strong>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="button" name="destination_add" value="Submit" class="btn btn-primary submit">
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

<!-- <script type="text/javascript">

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

    if (err >=1 ) {
      alert("Can not Submit");
    }
    else{
      $('#quickForm1').submit();
      //alert("submit");
    }

});

</script> -->

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