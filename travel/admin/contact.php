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
            <h1>Contact</h1>
          </div>
        </div>
         <?php 
          if(isset($_SESSION['contact_err']))
          {
           ?>
            <div class="alert alert-warning" role="alert">
              <?php echo $_SESSION['contact_err']; ?>
            </div>
            <?php
            unset($_SESSION['contact_err']);
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
                <h3 class="card-title">Contact Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Messages</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $sql = "select * from contact";
                      $result = mysqli_query($conn,$sql);

                      if(mysqli_num_rows($result) >0 ){
                         while($row = mysqli_fetch_assoc($result)){
                           ?>
                  <tr>
                    <td><?php  echo $row['name']; ?></td>
                    <td><?php  echo $row['email']; ?></td>
                    <td><?php  echo $row['phone']; ?></td>
                    <td><?php  echo $row['subject']; ?></td>
                    <td><?php  echo $row['messages']; ?></td>
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

<?php
  include("footer.php");
?>