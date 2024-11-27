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
            <h1>Tour Booking</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
        <?php 
          if(isset($_SESSION['tour_booking_err']))
          {
           ?>
            <div class="alert alert-warning" role="alert">
              <?php echo $_SESSION['tour_booking_err']; ?>
            </div>
            <?php
            unset($_SESSION['tour_booking_err']);
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
                <h3 class="card-title">Tour Booking Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Destination</th>
                    <th>Check In</th>
                    <th>Persons</th>
                    <th>Budget</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Requirements</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $sql = "select * from tour_booking";
                      $result = mysqli_query($conn,$sql);

                      if(mysqli_num_rows($result) >0 ){
                         while($row = mysqli_fetch_assoc($result)){
                           ?>
                            <tr>
                              <td><?php  echo $row['destination']; ?></td>
                              <td><?php  echo $row['check_in']; ?></td>
                              <td><?php echo $row['persons']; ?></td>
                              <td><?php echo $row['budget']; ?></td>
                              <td><?php  echo $row['name']; ?></td>
                              <td><?php  echo $row['email']; ?></td>
                              <td><?php  echo $row['phone']; ?></td>
                              <td><?php  echo $row['country']; ?></td>
                              <td><?php  echo $row['city']; ?></td>
                              <td><?php  echo $row['requirements']; ?></td>
                              <td></td>
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