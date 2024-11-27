<?php
    include("connection/connection.php");
    include ("header.php");
?>
        <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-caption">
                            <h1 class="page-title">Tour Booking</h1>
                        </div>
                    </div>
                </div>
                <?php 
                    if(isset($_SESSION['tour_booking']))
                    {
                    ?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $_SESSION['tour_booking']; ?>
                    </div>
                    <?php
                    unset($_SESSION['tour_booking']);
                    }
                ?>
            </div>
        </div>
        <!-- /.page-header-->
        <!-- tour-booking -->
        <div class="content">
            <div class="container">
                <div class="row ">
                    <!-- footer-logo -->
                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12 mb30">
                        <div class="tour-booking-form">
                            <form action="admin/action/tour_booking.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <h4 class="tour-form-title">Your Travel Plan Detail</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="select">Destination</label>
                                            <div class="select">
                                                <select id="select" name="destination" class="form-control">
                                                    <option value="">Where you want to go</option>
<!-- DESTINATION PHP -->
                                                    <?php 
                                                        $sql = "select * from destination where status=1";
                                                        $result = mysqli_query($conn,$sql);

                                                        if(mysqli_num_rows($result) >0 ){
                                                            while($row = mysqli_fetch_assoc($result)){
                                                            ?>
                       
                                                    <option value="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></option>
                                                    <?php   
                                                        }
                                                    }
                                                    else{
                                                        echo "No Record Found";
                                                    }
                                                    ?>
<!-- /DESTINATION PHP -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="datepicker">Check in</label>
                                            <div class="input-group">
                                                <input id="datepicker" name="check_in" type="text" placeholder="Date" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="persons">Number of Persons:</label>
                                            <input type="text" name="persons" id="persons" class="form-control" placeholder="Number Of Persons" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="select">Budgets</label>
                                            <input type="text" name="budget" id="select" class="form-control" placeholder="Budget" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                                        <h4 class="tour-form-title">Your Travel Plan Detail</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="name">Name</label>
                                            <input id="name" type="text" placeholder="First Name" class="form-control" required name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="email"> Email</label>
                                            <input id="email" type="text" placeholder="xxxx@xxxx.xxx" class="form-control" required name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="phone"> Phone</label>
                                            <input id="phone" type="text" placeholder="(222) 222-2222" class="form-control" required name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="country">Country</label>
                                            <input id="country" type="text" placeholder="India" class="form-control" required name="country">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city">City</label>
                                            <input id="city" type="text" placeholder="Ahmedabad" class="form-control" required name="city">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="requirements">Describe Your Travel Requirements</label>
                                            <textarea class="form-control" id="textarea" rows="4" placeholder="Write Your Requirements" name="requirements"></textarea>
                                        </div>
                                    </div>
                                
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <input type="submit" name="tour_booking" class="btn btn-primary" value="Send Enquiry">
                                    </div>
                                </div>
                                </form>
                        </div>
                        
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12 ">
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
                        <div class="widget-default">
                            <div class="question-icon"><img src="images/question_icon.png" alt=""></div>
                            <h3 class="widget-default-title">Have You Any Question?</h3>
                            <p>Here is an important list of questions to help to solve your queries. </p>
                            <a href="#" class="btn btn-primary btn-block">Frequently Ask Question</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.tour-booking -->
           <!-- newsletter-section -->
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
          <!-- /.newsletter-section -->
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
        <script src="js/jquery-ui.js"></script>
        <script src="js/date.js"></script>
         <script src="js/return-to-top.js"></script>
        
    </div>
</body>
</html>