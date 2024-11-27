<?php
  include("../connection/connection.php");
  include("header.php");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Review</h1>
          </div>
         <!--  <div class="col-sm-6">
            <a href="adddestination_form.php"><button class="btn btn-success add">Add Destination</button></a>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Review Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Description</th>
                    <th>User Name</th>
                    <th>User Image</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                      $sql = "select * from review";
                      $result = mysqli_query($conn,$sql);

                      if(mysqli_num_rows($result) >0 ){
                         while($row = mysqli_fetch_assoc($result)){
                           ?>
                  <tr>
                    <td>Trident</td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>
                       <?php 
                          if($row['status']==0){ 
                          ?>
                          <a href="#" onclick="status(this.id);" id="<?php echo $row['id'];?>">Inactive</a>
                          <?php
                          }
                          else{
                          ?>
                          <a href="#" onclick="status(this.id);" id="<?php echo $row['id'];?>">Active</a>
                          <?php
                          }
                        ?>
                    </td>
                  </tr>
                  <?php   
                         }
                      }
                      else{
                        echo "No Record Found";
                      }
                    ?>
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<script type="text/javascript">
  function status(val) {
alert(val);
  $.ajax({
    url : "action/review_ajax.php",
    type : "post",
    data : { id: val},
    success : function(result){
      if(result=='success'){
        location.reload();
      }
    }
  })
}
</script>

<?php
  include("footer.php");
?>