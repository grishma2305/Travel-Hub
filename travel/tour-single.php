
<?php
    include("connection/connection.php");
    include("header.php");
?>
<style type="text/css">
    button.owl-thumb-item img {
    width: 165px;
    height: 100px;
}
</style>
        <!-- page-header -->
        <div class="tour-pageheader">
            <div class="container">
<!-- [PACKAGES PHP] -->
                <?php 
                    $sql = "select * from packages where id = '".$_GET['id']."' ";
                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) >0 ){
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="tour-caption">
                                    <h1 class="text-white tour-title"><?php  echo $row['package_title'];?></h1>
                                    <p class="tour-caption-text text-white"><strong class="tour-rate">$<?php  echo $row['price'];?></strong><?php  echo $row['days'];?> Days</p>
                                    <a href="tour-booking.php" class="btn btn-primary mb10">Book Your Tour</a>
                                    <a href="#" class="btn btn-white mb10">view map</a>
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
            </div>
        </div>
        <!-- /.page-header-->
       
        <div class="content">
            <div class="container">
                <?php 
                    $sql = "select * from packages where id = '".$_GET['id']."' ";
                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) >0 ){
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                        <div class="highlights-section mb60">
                            <h3>Highlights</h3>
                            <p><?php  echo $row['highlight_content'];?></p>
                            <h4 class="mb30"><?php  echo $row['package_title'];?> Highlights</h4>
                            <div class="slide-thumb-gallery">
                                <div class="owl-carousel" data-slider-id="1">
                                    <div><img src="package_image/<?php  echo $row['package_image']; ?>" alt="" class="img-fluid"></div>
                                </div>
                                <div class="owl-thumbs" data-slider-id="1">
                                    <button class="owl-thumb-item"><img src="package_image/<?php  echo $row['tour_image']; ?>" alt="" class="img-fluid"></button>
                                    <button class="owl-thumb-item"><img src="package_image/<?php  echo $row['package_image']; ?>" alt="" class="img-fluid"></button>
                                </div>
                            </div>
                        </div>
                        <div class="journey-section mb60">
                            <h3 class="mb30">Journey</h3>
                            <div class="well-bg-block">
                                <h4 class="journey-day-title"><?php  echo $row['journey_detail'];?></h4>
                            </div>                            
                        </div>
                        <div class="included-section mb60">
                            <h3 class="mb30">What's Included</h3>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <p><?php  echo $row['includes'];?></p>                                    
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">                                    
                                </div>
                            </div>
                        </div>
                        <div class="reviews-section mb60">
                            <h3 class="mb40">Customer Reviews</h3>
                            <div class="review-block">
                                <div class="review-img"><img src="images/user_img_1.jpg" alt="" class="rounded-circle"></div>
                                <div class="review-content">
                                    <h5 class="title-bold d-inline">Jennifer Wirtz</h5>
                                    <div class="star-rating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                    <p>Vivamus velit ligula tempus id dui apretium imperdiet liguorbi sit amet pharetra leo. Integer tempus enim vel placerat consectetu ecenascula.</p>
                                </div>
                            </div>
                            <div class="review-block">
                                <div class="review-img"><img src="images/user_img_2.jpg" alt="" class="rounded-circle"></div>
                                <div class="review-content">
                                    <h5 class="title-bold d-inline">Maria Hershberger</h5>
                                    <div class="star-rating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                    <p>Eempus id dui apretium imperdiet ligorbi sitamet pharetra leonteger tempus enimvel placerat consectaecenas vehicula.</p>
                                </div>
                            </div>
                            <div class="review-block">
                                <div class="review-img"><img src="images/user_img_3.jpg" alt="" class="rounded-circle"></div>
                                <div class="review-content">
                                    <h5 class="title-bold d-inline">Della Betty</h5>
                                    <div class="star-rating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                    <p>Nullam orci exegestaset finibus amolestie ut nisuspendisse mollisleo sedcongue iaculis eratneque consectetur nisiquis feugia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="video-section">
                            <h3 class="mb30">Video</h3>
                            <div class="video-block">
                            <div class="video-img">
                                <img src="images/video_img.jpg" alt="">
                                <a href="#" class="video-btn">
                                    <img src="images/play_btn.png" alt="">
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                        <div class="widget-primary support-list">
                            <div class="widget-primary-title">
                                <h3>Why Book With Us?</h3>
                            </div>
                            <ul class="arrow list-none">
                                <li>24X7 service and support</li>
                                <li>Totally complaint in all aspects</li>
                                <li>Dedicated, trustworthy team</li>
                                <li>Professional happy services</li>
                            </ul>
                        </div>
                        <!-- enguiry-form -->
                        <!-- form -->
                        <div class="widget-form">
                            <h3 class="text-white mb30"> Book Your Tour</h3>
                            <form>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="select"></label>
                                            <div class="select">
                                                <select id="select" name="select" class="form-control">
                                                    <option value="">Where you want to go</option>
                                                    <option value="">Singapore</option>
                                                    <option value="">Thailand</option>
                                                    <option value="">Vietnam</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="control-label sr-only" for="datepicker"></label>
                                                <div class="input-group">
                                                    <input id="datepicker" name="datepicker" type="text" placeholder="Date" class="form-control" required>
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="select"></label>
                                            <div class="select">
                                                <select id="select" name="select" class="form-control">
                                                    <option value="">Number of Peoples</option>
                                                    <option value="">6</option>
                                                    <option value="">10</option>
                                                    <option value="">25</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button type="submit" name="singlebutton" class="btn btn-primary">Enquiry Now</button>
                                    </div>
                                </div>
                            </form>
                            <!-- /.form -->
                        </div>
                        <!-- /.enguiry-form -->
                        <div id="contact-map" class="widget-map"></div>
                    </div>
                </div>
                <?php   
                        }
                    }
                    else{
                        echo "No Record Found";
                    }
                ?>
<!-- /PACKAGES PHP -->
            </div>
        </div>
   
    <div class="bg-light similar-package">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-title">
                        <h2>Similar Packages</h2>
                    </div>
                </div>
            </div>
            <div class="row">
<!-- DESTINATIONS PHP -->
                <?php 
                        $sql = "select * from destination order by id desc limit 3";
                        $result = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result) >0 ){
                            while($row = mysqli_fetch_assoc($result)){
                            ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                   <div class="destination-block">
                            <div class="desti-img">
                                <img src="destination_image/<?php  echo $row['image']; ?>" alt="">
                                <a href="#" class="desti-title"><?php echo $row['title']; ?></a>
                                <div class="overlay">
                                </div>
                                <div class="text">
                                    <h3 class="mb20 text-white"><?php echo $row['title']; ?></h3>
                                    <p><?php echo $row['description']; ?></p>
                                    <p class="price">$<?php echo $row['price']; ?></p>
                                    <a href="#" class="btn-link">Go for <?php echo $row['title']; ?> <i class="fa fa-angle-right"></i></a></div>
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
<!-- /DESTINATION PHP -->
            </div>
        </div>
    </div>
    <!-- newsletter -->
    <div class="newsletter-wrapper newsletter-overlay" style="background: url(images/newsletter_wrapper.jpg) no-repeat;">
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
    <!-- /.newsletter -->
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
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-8 col-8">
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
    <!-- owl-thumb JavaScript -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl.carousel2.thumbs.min.js"></script>
    <script src="js/thumb.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/date.js"></script>
    <script src="js/return-to-top.js"></script>
     
   
    <script>
    function initMap() {
        var uluru = {
            lat: 23.094197,
            lng: 72.558148
        };
        var map = new google.maps.Map(document.getElementById('contact-map'), {
            zoom: 14,
            center: uluru,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'images/map_marker.png'

        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZib4Lvp0g1L8eskVBFJ0SEbnENB6cJ-g&amp;callback=initMap">
    </script>
    </div>
</body>


</html>