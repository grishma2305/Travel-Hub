<?php
    include("connection/connection.php");
    include("header.php");
?>

<style type="text/css">
    img.img-fluid {
    min-width: 359px;
    min-height: 410px;
}
</style>
        <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-caption">
                            <h1 class="page-title">About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.page-header-->
        <!-- about -->
        <div class="content">
            <div class="container">
                <div class="row">
<!-- ABOUT DESCRIPTION PHP -->
                    <?php 
                    $sql = "select * from about_description where status=1";
                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) >0 ){
                        while($row = mysqli_fetch_assoc($result)){
                        ?>                    
                    <div class="col-xl-10 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12  mb60">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="">
                                    <p><?php echo $row['description'];?></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <?php   
                        }
                    }
                    else{
                        echo "No Record Found";
                    }
                ?>
<!--/ ABOUT DESCRIPTION PHP -->

                </div>
            </div>
            <!-- about-section -->
            <div class="container">
                <div class="row">
                    <!-- feature-section -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                        <div class="well-block">
                            <!-- feature-left -->
                            <div class="feature-left">
                                <div class="feature-icon"><img src="images/calendar.png" alt=""></div>
                                <div class="feature-content">
                                    <h4>Everything’s on Schedule</h4>
                                    <p>Cras porttitor tortor erateget accumsan is feltumsit.</p>
                                </div>
                            </div>
                            <!-- /.feature-left -->
                            <!-- feature-left -->
                            <div class="feature-left">
                                <div class="feature-icon"><img src="images/adventure.png" alt=""></div>
                                <div class="feature-content">
                                    <h4>Destination Variety</h4>
                                    <p>Pellentesque imperdiet esmpus finibusse euismunc.</p>
                                </div>
                            </div>
                            <!-- /.feature-left -->
                            <!-- feature-left -->
                            <div class="feature-left">
                                <div class="feature-icon"><img src="images/hotel.png" alt=""></div>
                                <div class="feature-content">
                                    <h4>Comfortable Housing</h4>
                                    <p>Vestiulum sodales tempudin one erlctus iedate. </p>
                                </div>
                            </div>
                            <!-- /.feature-left -->
                        </div>
                    </div>
                    <!-- /.feature-section -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                        <div class="well-block">
                            <div class="counter-block">
                                <h1 class="counter-numbers">689+</h1>
                                <div class="counter-content">
                                    <h4>Tours</h4>
                                    <p>Cras porttitor tortor erateget taccumsan.</p>
                                </div>
                            </div>
                            <div class="counter-block">
                                <h1 class="counter-numbers">320+</h1>
                                <div class="counter-content">
                                    <h4>Destinations</h4>
                                    <p>Pellentesque luctus felisnon nib its consecteuis.</p>
                                </div>
                            </div>
                            <div class="counter-block">
                                <h1 class="counter-numbers">60+</h1>
                                <div class="counter-content">
                                    <h4>Countries</h4>
                                    <p>Sed gravida eleequenec fringilla dolonteger.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.about-section -->
        <!-- about carousel -->
        <div class="space-small">
            <div class="about-carousel">
                <div class="owl-carousel owl-about-gallery owl-theme">
<!-- ABOUT IMAGES PHP -->
                    <?php 
                    $sql = "select * from about_images where status=1";
                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) >0 ){
                        while($row = mysqli_fetch_assoc($result)){
                        ?>   
                    <!-- about-item -->
                    <div class="item">
                        <div class="about-img">
                            <img src="about_image/<?php  echo $row['image']; ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                    <?php   
                        }
                    }
                    else{
                        echo "No Record Found";
                    }
                ?>
<!-- /ABOUT IMAGES PHP -->
                </div>
            </div>
        </div>
        <!-- /.about carousel -->
        <!-- team-section -->
        <div class="space-medium">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb60">
                        <div class="">
                            <h2>Our Amazing Team</h2>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 mb60">
                        <div class="">
                            <p class="lead">Suctus felis non nibh maximus consectetuis sed nisl eniullase pellentesque es felis non nibh maximus nisl enintesque toestieege.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
<!-- ABOUT TEAM PHP -->
                    <?php 
                    $sql = "select * from about_team where status=1 order by id desc limit 4";
                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) >0 ){
                        while($row = mysqli_fetch_assoc($result)){
                        ?>    
                    <!-- team-member -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 ">
                        <div class="team-block">
                            <div class="team-img">
                                <a href="#" class="imghover">
                                    <img src="about_team_image/<?php  echo $row['image']; ?>" alt="">
                                </a>
                            </div>
                            <div class="team-content">
                                <h4 class="team-title"><?php  echo $row['name']; ?></h4>
                                <p class="team-meta"><?php  echo $row['position']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.team-member -->
                    <?php   
                        }
                    }
                    else{
                        echo "No Record Found";
                    }
                ?>
<!-- /ABOUT TEAM PHP -->
                </div>
            </div>
        </div>
        <!-- /.team-section -->
        <!-- certificate-section -->
        <div class="space-medium bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-title">
                            <h2>Awards & Certification</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- awards -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb60">
                        <div class="awards-block">
                            <div class="awards-img"><img src="images/certificate_1.png" alt=""></div>
                            <div class="awards-content">
                                <h4 class="awards-title">Certified travel Service-Quality System</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /.awards -->
                    <!-- awards -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb60">
                        <div class="awards-block">
                            <div class="awards-img"><img src="images/certificate_2.png" alt=""></div>
                            <div class="awards-content">
                                <h4 class="awards-title">Authorized By Tourist
                                    Board</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /.awards -->
                    <!-- awards -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb60">
                        <div class="awards-block">
                            <div class="awards-img"><img src="images/certificate_3.png" alt=""></div>
                            <div class="awards-content">
                                <h4 class="awards-title">Member of the Travel Industry Association</h4>    
                            </div>
                        </div>
                    </div>
                    <!-- /.awards -->
                </div>
                <div class="row">
                    <div class="col-xl-10 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12 text-center">
                        <p>Quality and trust are the backbone of our business, along with our other core values. dignissim ipsumodio scelerisque felis egetese ore euismodivamus blandit vehicula suorbi dstieqcondimentum tincidunt dui vitae.Egeteuismod quis neqemporodn porta digssim ipsumodio scelerisque felis eget euismod purus quamat antenrcunec utdui idpurus elementum rutrum et rutrum sapamus.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.certificate-section -->
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
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                             <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                    </div>
                    <!-- /. tiny-footer -->
                </div>
            </div>
        </div>
        <!-- /.footer -->
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/multiple-carousel.js"></script>
        <script src="js/return-to-top.js"></script>
    </div>
</body>


</html>