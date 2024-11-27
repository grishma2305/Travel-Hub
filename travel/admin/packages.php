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
            <h1>Tour Packages</h1>
          </div>
          <div class="col-sm-6">
            <a href="packages_add.php"><button class="btn btn-success add">Add Package</button></a>
          </div>
        </div>
        <?php 
          if(isset($_SESSION['packages_add']))
          {
           ?>
            <div class="alert alert-warning" role="alert">
              <?php echo $_SESSION['packages_add']; ?>
            </div>
            <?php
            unset($_SESSION['packages_add']);
          }
          if(isset($_SESSION['packages_edit']))
          {
           ?>
            <div class="alert alert-warning" role="alert">
              <?php echo $_SESSION['packages_edit']; ?>
            </div>
            <?php
            unset($_SESSION['packages_edit']);
          }
          if(isset($_SESSION['packages_delete']))
          {
           ?>
            <div class="alert alert-warning" role="alert">
              <?php echo $_SESSION['packages_delete']; ?>
            </div>
            <?php
            unset($_SESSION['packages_delete']);
          }
          if(isset($_SESSION['packages_delete_err']))
          {
           ?>
            <div class="alert alert-warning" role="alert">
              <?php echo $_SESSION['packages_delete_err']; ?>
            </div>
            <?php
            unset($_SESSION['packages_delete_err']);
          }
        ?>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tour Packages Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $sql = "select * from packages";
                      $result = mysqli_query($conn,$sql);

                      if(mysqli_num_rows($result) >0 ){
                         while($row = mysqli_fetch_assoc($result)){
                           ?>
                            <tr>
                              <td>
                                <img src="../package_image/<?php  echo $row['package_image']; ?>" width="300" height="100">
                              </td>
                              <td><?php  echo $row['package_title']; ?></td>
                              <td><?php echo $row['package_content']; ?></td>
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
                              <td>
                                <a href="packages_edit.php?id=<?php  echo $row['id']; ?>"><button class="btn btn-success">Edit</button></a>
                                <a href="action/packages_delete.php?id=<?php  echo $row['id']; ?>"><button class="btn btn-danger">Delete</button></a>
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

  $.ajax({
    url : "action/packages_ajax.php",
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