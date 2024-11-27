<?php
    include("connection/connection.php");
    include("header.php");
?>

<style type="text/css">
    img.img-fluid {
    min-width: 350px;
    min-height: 369px;
}
</style>
    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title">Tour Packages</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
        <!-- tour-service -->
        <div class="content">
            <div class="container">
<!-- TOUR PACKAGES PHP -->
                <?php 
                    $sql = "select * from packages where status=1";
                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) >0 ){
                        $i=0;                      
                        while($row = mysqli_fetch_array($result)){
                        if($i%2==0){
                            ?>
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                                <div class="tour-block">
                                    <div class="tour-content">
                                        <h2 class="mb30"><a href="tour-single.php?id=<?php echo $row['id'];?>" class="title"><?php  echo $row['package_title'];?></a></h2>
                                        <p class="mb30"><?php  echo $row['package_content'];?></p>
                                        <a href="tour-single.php?id=<?php echo $row['id'];?>" class="btn-link">Go For <?php  echo $row['package_title'];?><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                                <div class="tour-img">
                                    <a href="tour-single.php?id=<?php echo $row['id'];?>" class="imghover"> <img src="package_image/<?php  echo $row['package_image']; ?>" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    else{ 
                    ?>
                    <div class="row ">
                        <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                            <div class="tour-img">
                                <a href="tour-single.php?id=<?php echo $row['id'];?>" class="imghover"> <img src="package_image/<?php  echo $row['package_image']; ?>" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                            <div class="tour-block">
                                <div class="tour-content">
                                    <h2 class="mb30"><a href="tour-single.php?id=<?php echo $row['id'];?>" class="title"><?php  echo $row['package_title'];?></a></h2>
                                    <p class="mb30"><?php  echo $row['package_content'];?></p>
                                    <a href="tour-single.php?id=<?php echo $row['id'];?>" class="btn-link">Go For <?php  echo $row['package_title'];?><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                                  
                    ?>
                    <?php 
                    $i++;
                    } 
                }?>
<!-- TOUR PACKAGES PHP -->
            </div>
        </div>
         <!-- /.tour-service -->
         <div class="newsletter-wrapper newsletter-overlay" style="background:url(images/newsletter_wrapper.jpg) no-repeat;">
            <div class="container">
                <div class="row">
                     <div class="col-xl-7 col-lg-7 offset-md-5 col-md-6 col-sm-12 col-12">
                        <div class="newsletter-block">
                          <h1 class="newsletter-title">Join The Newsletter</h1>
                        <p class="mb30">Subscribe the newsletter and get update for discounts on tours.</p>
                           <form>
                            <div class="input-group add-on">
                                <input class="form-control" placeholder="email address here" type="text">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary newsletter-btn" type="submit">subscribe</button>
                                </div>
                            </div>
                        </form>

                        </div>

                     </div>

                </div>
            </div>
             


         </div>


    <!-- footer -->
      <div class="footer">
    <div class="container">
      
            <div class="row ">
                 <!-- footer-logo -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                    <div class="ft-img"><img src="images/ft_logo.png" alt=""></div>
                   
                </div>
                <!-- /.footer-logo -->
                <!-- footer-links -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">
                    <div class="footer-widget ">
                        <h3 class="footer-title ">Quick Links</h3>
                        <ul class="angle list-none">
                            <li><a href="# ">Home</a></li>
                                <li><a href="# ">Tour</a></li>
                                <li><a href="# ">Blog</a></li>
                                <li><a href="# ">Customer Reviews</a></li>
                                  <li><a href="# ">Contact</a></li>


                        </ul>
                    </div>
                </div>
                <!-- /.footer-links -->
                <!-- footer-tours -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">
                    <div class="footer-widget ">
                        <h3 class="footer-title ">Tour Packages</h3>
                        <ul class="angle list-none">
                            <li><a href="# ">International Tour</a>
                                <li><a href="# ">Domestic Tour</a></li>
                                <li><a href="# ">Adventure Tour</a></li>
                                <li><a href="# ">Business Tour</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-Tours -->
               
                <!-- footer-post -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 ">
                    <div class="footer-widget">
                        <h3 class="footer-title">Contact Info</h3>
                        <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-map-marker"></i></span> <span class="ft-contact-text">3927 Birch StreetEl Paso, TX 79930 </span></div>
                        <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-phone "></i></span> <span class="ft-contact-text">+180-123-4567</span></div>
                        <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-envelope "></i></span> <span class="ft-contact-text">info@travel.com</span></div>
                       <div class="social-icon "> <a href="# " class="btn-social-icon "><i class="fa fa-facebook "></i></a> <a href="# " class="btn-social-icon "><i class="fa fa-twitter "></i></a> <a href="# " class="btn-social-icon "><i class="fa fa-linkedin "></i></a> <a href="# " class="btn-social-icon "><i class="fa fa-google-plus "></i></a> </div>
                    </div>
                </div>
                <!-- /.footer-post -->
            </div>
            <!-- tiny-footer -->
        </div>
        <div class="tiny-footer ">
            <div class="container ">
                <div class="row ">                   
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                    </div>
                </div>
                <!-- /. tiny-footer -->
            </div>
        </div>
    </div>
    <!-- /.footer -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form>
                            <div class="search-form">
                                <input type="text" class="form-control" placeholder="Find here">
                                 <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">close</span>
                            </button>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
          <!-- /.Modal -->
           <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
     <script src="js/return-to-top.js"></script>
   
</div>
</body>


</html>