<?php
    include("connection/connection.php");
    include("header.php");
?>

<style type="text/css">
    .row.box {
    margin-top: 134px;
}
</style>
        <!-- page-header -->
        <div class="contact-pageheader">
        </div>
        <!-- /.page-header-->
        <!-- contact-section -->
        <div class="container">
            <div class="row">
                <?php
                    if(isset($_SESSION['contact']))
                    { 
                    ?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $_SESSION['contact']; ?>
                    </div>
                    <?php
                    unset($_SESSION['contact']);
                    }
                ?>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="contact-wrapper">
                        <div class="row box">
                            <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12">
                                <div class="section-title">
                                    <h2>We're here for you all day, everyday!</h2>
                                    <p>If you have any questions or comments please complete the form below.We'd love to hear from you!</p>
                                </div>
                                <div class="contact-block">
                                    <!-- contact-form -->
                                    <form action="admin/action/contact.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Name</label>
                                                    <input id="name" type="text" placeholder="Your Name" class="form-control" name="name" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="email"> Email</label>
                                                    <input id="email" type="text" placeholder="Your Email Address" class="form-control" name="email" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="phone"> Phone</label>
                                                    <input id="phone" type="text" placeholder="Your Contact Number" class="form-control" name="phone" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="subject">Subject </label>
                                                    <input id="subject" type="text" placeholder="Your Subject" class="form-control" name="subject" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="textarea">Messages</label>
                                                    <textarea class="form-control" id="textarea" rows="4" placeholder="Your Messages" name="messages"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                                <input type="submit" name="contact" class="btn btn-primary" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                    <!-- contact-form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact-info -->
        <div class="space-small">
            <div class="container">
                <div class="row ">
                    <!-- contact -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-12 mb20">
                        <div class="contact-info">
                            <h4 class="contact-info-title">Head Office Location</h4>
                            <div class="contact-info-content">
                                <i class="fa fa-map-marker contact-info-icon"></i>
                                <p>2166 Matthews Street Arlington Heights, United State 60005</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.contact -->
                    <!-- contact -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-12 mb20">
                        <div class="contact-info">
                            <h4 class="contact-info-title">Call Us</h4>
                            <div class="contact-info-content">
                                <i class="fa fa-phone contact-info-icon"></i>
                                <p><strong>+180-123-4567
                                    <br> +180-123-8910</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.contact -->
                    <!-- contact -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-12 mb20 ">
                        <div class="contact-info">
                            <h4 class="contact-info-title">Email Us</h4>
                            <div class="contact-info-content">
                                <i class="fa fa-envelope contact-info-icon"></i>
                                <p><strong>info@travel.com<br> support@travelair.com</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.contact -->
                </div>
            </div>
        </div>
        <!-- /.contact-info -->
        <!-- /.contact-section -->
        <!-- newsletter -->
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
         <script src="js/return-to-top.js"></script>
    </div>
</body>


</html>