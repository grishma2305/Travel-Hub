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
        <!-- slider -->
        <div class="slider">
            <div class="owl-carousel owl-one owl-theme">
<!-- SLIDER PHP -->
                <?php 
                    $sql = "select * from slider where status=1";
                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) >0 ){
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <!-- item -->
                            <div class="item">
                                <div class="slider-img">
                                    <img src="slider_image/<?php  echo $row['image']; ?>" alt=""></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="slider-captions">
                                                <h1 class="slider-title"><?php  echo $row['title'];?></h1>
                                            </div>
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
<!-- /SLIDER PHP -->
            </div>
        </div>
        <!-- /.slider -->
        <!-- enguiry-form -->
        <div class="bg-default enquiry-form ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <!-- form -->
                        <form>
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-3 col-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="select"></label>
                                        <div class="select">
                                            <select id="select" name="city" class="form-control">
                                                <option value="">Where you want to go</option>
                                                <option value="">Singapore</option>
                                                <option value="">Thailand</option>
                                                <option value="">Vietnam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-3 col-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="datepicker"></label>
                                        <div class="input-group">
                                            <input id="datepicker" name="datepicker" type="text" placeholder="Date" class="form-control" required>
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-3 col-12">
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
                                <div class="col-xl-3 col-lg-12 col-md-6 col-sm-3 col-12">
                                    <button type="submit" name="singlebutton" class="btn btn-primary btn-lg">Enquiry Now</button>
                                </div>
                            </div>
                        </form>
                        <!-- /.form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.enguiry-form -->
        <!-- tour-service -->
        <div class="space-medium">
            <div class="container">
<!-- PACKAGES PHP-->
                <?php 
                    $sql = "select * from packages where status=1 order by id desc limit 3";
                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) >0 ){
                        $i=0;                      
                        while($row = mysqli_fetch_array($result)){
                            if($i==1){
                                ?>
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                                        <div class="tour-block">
                                            <div class="tour-content">
                                                <h2 class="mb30"><a href="#" class="title"><?php  echo $row['package_title'];?></a></h2>
                                                <p class="mb30"><?php  echo $row['package_content'];?></p>
                                                <a href="#" class="btn-link">Go For <?php  echo $row['package_title'];?><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                                        <div class="tour-img">
                                            <a href="#" class="imghover"> <img src="package_image/<?php  echo $row['package_image']; ?>" alt="" class="img-fluid"></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            else{
                            ?>
                                <div class="row">
                        
                                    <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb20;">
                                        <div class="tour-img">
                                            <a href="#" class="imghover"> <img src="package_image/<?php  echo $row['package_image']; ?>" alt="" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40;">
                                        <div class="tour-block">
                                            <div class="tour-content">
                                                <h2 class="mb30"><a href="#" class="title"><?php  echo $row['package_title'];?></a></h2>
                                                <p class="mb30"><?php  echo $row['package_content'];?></p>
                                                <a href="#" class="btn-link">Go For <?php  echo $row['package_title'];?><i class="fa fa-angle-right"></i></a>
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
<!-- /PACKAGES PHP-->
            </div>
        </div>
        <!-- /.tour-service -->
        <!-- destination-section -->
        <div class="space-medium">
            <div class="container-fluid">
                <div class="row">
                    <!-- section-title -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="section-title">
                            <h2>Top Destinations</h2>
                        </div>
                    </div>
                    <!-- /.section-title -->
                </div>
                <div class="row">
<!-- DESTINATION PHP -->
                    <?php 
                    $sql = "select * from destination where status=1 order by id desc limit 4 ";
                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) >0 ){
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 nopl nopr">
                        <!-- destination-section -->
                        <div class="destination-block">
                            <div class="desti-img">
                                <img src="destination_image/<?php  echo $row['image']; ?>">
                                <a href="#" class="desti-title"><?php echo $row['title']; ?></a>
                                <div class="overlay">
                                </div>
                                <div class="text">
                                    <h3 class="mb20 text-white"><?php echo $row['title']; ?></h3>
                                    <?php echo $row['description']; ?>
                                    <p class="price">$<?php echo $row['price']; ?></p>
                                    <a href="#" class="btn-link">Go For <?php echo $row['title']; ?> <i class="fa fa-angle-right"></i></a></div>
                            </div>
                        </div>
                        <!-- /.destination-section -->
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
        <!-- /.destination-section -->
        <!-- about-section -->
        <div class="space-medium">
            <div class="container">
                <!-- about-head -->
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb60">
                        <div class="">
                            <h2>We are <br> Travel Agency</h2>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 offset-md-1 col-md-8 col-sm-12 col-12 mb60">
                        <div class="">
                            <p class="lead">Pellentesque luctus felis non nibh masus consectetuis sed nisl eniull lentesque euismod eronon ntesque tortor molestie egurabitur lorem ien elementumelitac eleifue nisl fringilla nisia tris.</p>
                        </div>
                    </div>
                </div>
                <!-- /.about-head -->
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
        <!-- service-section -->
        <div class="space-medium service-wrapper" style="">
            <div class="container">
                <!-- service-head -->
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb60">
                        <div class="">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 offset-md-1 col-md-8 col-sm-12 col-12 mb60">
                        <div class="">
                            <p class="lead">Suctus felis non nibh maximus consectetuis sed nisl eniullase pellentesque euismod eronon ntesque tortor molestieege.</p>
                        </div>
                    </div>
                </div>
                <!-- /.service-head -->
                <div class="row">
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopr">
                        <div class="service-block border-bottom border-right">
                            <div class="service-img"><img src="images/hotel_1.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Hotel Reservation</h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl nopr">
                        <div class="service-block border-bottom border-right">
                            <div class="service-img"><img src="images/disability.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Staff Transportation Services </h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl">
                        <div class="service-block border-bottom">
                            <div class="service-img"><img src="images/airplane.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Air Ticketing Services</h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopr">
                        <div class="service-block border-right">
                            <div class="service-img"><img src="images/passport.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Passport and Visa Assistance </h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl nopr">
                        <div class="service-block  border-right">
                            <div class="service-img"><img src="images/car_wash.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Car Rental Services </h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl">
                        <div class="service-block service-right-border service-bottom-border">
                            <div class="service-img"><img src="images/car.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Car on Call</h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                </div>
            </div>
        </div>
        <!-- /.service-section -->
        <!-- testimonial-section -->
        <div class="space-medium bg-light">
            <div class="container">
                <div class="row">
                    <!-- testimonial-head -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb60">
                        <div class="testimonial-head">
                            <div class="quote-icon">
                                <img src="images/left_quote.png" alt="">
                            </div>
                            <h2 class="mb40">What Our Customers Say About Our Tours</h2>
                            <a href="#" class="btn-link">Read All Reviews <i class="fa fa-angle-right"></i></a>
                        </div>
                        <h4 class="card-title" style="background-color: bisque">Add Review</h4>

                        <?php
                            if(isset($_SESSION['review']))
                            { 
                            ?>
                            <div class="alert alert-warning" role="alert">
                                <?php echo $_SESSION['review']; ?>
                            </div>
                            <?php
                            unset($_SESSION['review']);
                            }
                        ?>

                        <form action="admin/action/review.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" type="text" placeholder="Your Name" class="form-control" name="name" required>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Image</label>
                                        <input id="file" type="file" placeholder="Your Image" class="form-control" name="file" required>
                                    </div>
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label" for="textarea">Review</label>
                                        <textarea class="form-control" id="review" rows="4" placeholder="Your Review" name="review"></textarea>
                                    </div>
                                </div>
                                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                    <input type="submit" name="review_add" class="btn btn-primary submit" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.testimonial-head -->
                    <div class="col-xl-6 col-lg-6 offset-md-1 col-md-6 col-sm-12 col-12 mb60">
                        <div class="testimonial-carousel">
                            <div class="owl-carousel owl-theme testimonial-owl">
                                <!-- testimonial-item -->
                                <div class="item">
                                    <div class="testimonial-block">
                                        <div class="testimonial-content">
                                            <p class="testimonial-text">“Nam aclorem atsem vulputate euismodulla nonlacinia augueauriset venenatis maurised consequat quis exa plarliquam”</p>
                                            <span class="testi-meta"><strong>- Sarah Arnold</strong> (Our Tourist)</span>
                                            <div class="testi-arrow"></div>
                                        </div>
                                        <div class="testi-img">
                                            <img src="images/testi_img_1.jpg" alt="" class="rounded-circle">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.testimonial-item -->
                                <!-- testimonial-item -->
                                <div class="item">
                                    <div class="testimonial-block">
                                        <div class="testimonial-content">
                                            <p class="testimonial-text">“Proin dictum justo at finibus consectetur Proin odio odio molestie qui commodo sit amet euismod dictum ligula”</p>
                                            <span class="testi-meta"><strong>- Maria Young</strong> (Our Tourist)</span>
                                            <div class="testi-arrow"></div>
                                        </div>
                                        <div class="testi-img">
                                            <img src="images/testi_img_2.jpg" alt="" class="rounded-circle">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.testimonial-item -->
                                <!-- testimonial-item -->
                                <div class="item">
                                    <div class="testimonial-block">
                                        <div class="testimonial-content">
                                            <p class="testimonial-text">“Crasin leo arcuiquamnec elementum erossed tincidunt dolroin tristiquecongue Inaex pharetra euismod duieget”</p>
                                            <span class="testi-meta"><strong>- Helena Lehoux</strong> (Our Tourist)</span>
                                            <div class="testi-arrow"></div>
                                        </div>
                                        <div class="testi-img">
                                            <img src="images/testi_img_3.jpg" alt="" class="rounded-circle">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.testimonial-item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial-section -->
        <!-- /.client-section -->
        <div class="space-small">
            <div class="container">
                <div class="row">
                    <!-- client-logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                        <div class="client-logo">
                            <a href="#"><img src="images/dummy_logo_1.png" alt=""></a>
                        </div>
                    </div>
                    <!-- /.client-logo -->
                    <!-- client-logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                        <div class="client-logo">
                            <a href="#"> <img src="images/dummy_logo_2.png" alt=""></a>
                        </div>
                    </div>
                    <!-- /.client-logo -->
                    <!-- client-logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                        <div class="client-logo">
                            <a href="#">  <img src="images/dummy_logo_3.png" alt=""></a>
                        </div>
                    </div>
                    <!-- /.client-logo -->
                    <!-- client-logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                        <div class="client-logo">
                            <a href="#"><img src="images/dummy_logo_4.png" alt=""></a>
                        </div>
                    </div>
                    <!-- /.client-logo -->
                    <!-- client-logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                        <div class="client-logo">
                            <a href="#"> <img src="images/dummy_logo_2.png" alt=""></a>
                        </div>
                    </div>
                    <!-- /.client-logo -->
                    <!-- client-logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                        <div class="client-logo">
                            <a href="#">  <img src="images/dummy_logo_1.png" alt=""></a>
                        </div>
                    </div>
                    <!-- /.client-logo -->
                </div>
            </div>
        </div>
        <!-- /.client-section -->
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
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/multiple-carousel.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/date.js"></script>
        <script src="js/return-to-top.js"></script>
    </div>
</body>


</html>