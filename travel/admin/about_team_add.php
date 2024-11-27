<?php
  include("header.php");
?>
 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Team</h1>
            <span id="errpicmsg"></span>
            <span id="errmsg"></span>   
            <span id="errpositionmsg"></span>         
          </div>
        </div>
         <?php 
          if(isset($_SESSION['about_team_add_err']))
          {
           ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['about_team_add_err']; ?>
            </div>
            <?php
            unset($_SESSION['about_team_add_err']);
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
                <h3 class="card-title">Add Team</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm1" method="post" action="action/about_team_add.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="file" class="form-control" id="profphoto" placeholder="Choose File">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="teamname" class="form-control" id="nameInput" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Position</label>
                    <input type="text" name="position" class="form-control" id="positionInput" placeholder="Enter Position">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="button" class="btn btn-primary submit" name="about_team_add" value="Submit">
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
    $('.submit').click(function(){

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

      var nameReg = /^[A-Za-z]+$/;

      var name = $('#nameInput').val();

      if($('#nameInput').val() == ''){
        $("#errmsg").html("Enter name.");
        return false;
      }
      else
      {
        if(!nameReg.test(name)){
          $("#errmsg").html("Enter a valid name.");
          return false;
        }
      }

      var positionReg = /^[A-Za-z]+$/;

      var position = $('#positionInput').val();

      if($('#positionInput').val() == ''){
        $("#errpositionmsg").html("Enter position.");
        return false;
      }
      else
      {
        if(!positionReg.test(position)){
          $("#errpositionmsg").html("Enter a valid position.");
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