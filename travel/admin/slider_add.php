<?php
  include("header.php");
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
          if(isset($_SESSION['slider_add_err']))
          {
            ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['slider_add_err']; ?>
            </div>
            <?php
            unset($_SESSION['slider_add_err']);
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
                <h3 class="card-title">Add Slider</h3>
<!--                 <span id="errmsg"></span>
 -->              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm1" action="action/slider_add.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="file" class="form-control" placeholder="Choose File" id="profphoto">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter Slider Title" id="titleInput">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="button" class="btn btn-primary submit" value="Submit" name="slider_add">
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
//   $(document).ready(function(){

// $('.submit').click(function(){
//     validateForm(); 
// });

// function validateForm(){

//     var titleReg = /^[A-Za-z]+$/;

//     var title = $('#titleInput').val();

//     if(title==""){
//       $("#errmsg").html("Enter title");
//     }
//     else if(!titleReg.test(title)){
//       alert("Enter a valid title");
//     }

    
// event.preventDefault();
// var photo=$("#profphoto")[0].files; 
// var photo_pattern = /\.(?:jpeg|jpg|png)$/


    // if (!photo_pattern.test(photo)) { 
    //     if ($("#profphoto").val() =='') {
    //       alert("if1");
    //         $("#error_photo").text("Photo can not be empty");
    //         $("#profphoto").focus();
    //         return;
    //     }else{
    //       alert("else1");
    //         $("#error_photo").text("Upload format is not correct");
    //         $( "#profphoto" ).focus();
    //         return;
    //     }
    // }else { 
    //   alert("else222");
    //   $("#error_photo").text("");
    // }

    // if($("#profphoto").val() ==''){
    //   alert("empty");
    // }
    // else{
    //  if( ){
    //   alert("not matched");
    //   }
    //   else{
    //     alert("matched");
    //   }
    // }



    // var inputVal = new Array(title);

    // var inputMessage = new Array("title");

     //$('.error').hide();

        //if(inputVal[0] == ""){
            //$('#titleLabel').after('<span class="error"> Please enter your ' + inputMessage[0] + '</span>');
            //alert("error");
        // } 
        // else if(!titleReg.test(title)){
        //    // $('#titleLabel').after('<span class="error"> Letters only</span>');
        //     alert("Error2222");
        // }




// }   

// });


// $("#profphoto").change(function () {
//     var fileExtension = ['jpeg', 'jpg', 'png', 'bmp'];

//       if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
          //$("#errpicmsg").html("Enter valid format.");
         // alert("Only formats are allowed : "+fileExtension.join(', '));
    //   }
    //   else {
    //     alert("matched");
    //   }
    // });
</script>

<script type="text/javascript">

//  $("#profphoto").change(function () {
//     var fileExtension = ['jpeg', 'jpg', 'png', 'bmp'];

//       if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
//           $("#errpicmsg").html("Enter valid format.");
//          //alert("Only formats are allowed : "+fileExtension.join(', '));
//       }
//       else {
//         alert("matched");
//       }
//     });

//  $(document).ready(function(){

// $('.submit').click(function(){
//     validateForm(); 
// });

// function validateForm(){

//     var titleReg = /^[A-Za-z]+$/;

//     var title = $('#titleInput').val();

//     if(title==""){
//       $("#errmsg").html("Enter title");
//     }
//     else if(!titleReg.test(title)){
//       $("#errmsg").html("Enter a valid title");
//       //alert("Enter a valid title");
//     }
//   }   

//  });


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