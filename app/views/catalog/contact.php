<?php $this->view("catalog/header",$data); ?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="<?=ASSETS?>catalog/img/hero.jpg"></div>

    <div class="container-fluid tm-mt-60">
        <div class="row tm-mb-50">
         <!--    <div class="col-lg-4 col-12 mb-5">
            <h2 class="tm-text-primary mb-5">Contact Page</h2>
                <form id="contact-form" action="" method="POST" class="tm-contact-form mx-auto">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-0" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="contact-select" name="inquiry">
                            <option value="-">Subject</option>
                            <option value="sales">Sales &amp; Marketing</option>
                            <option value="creative">Creative Design</option>
                            <option value="uiux">UI / UX</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" required=></textarea>
                    </div>

                    <div class="form-group tm-text-right">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>  
             
            </div>

            --> 
            <div class="col-lg-4 col-12 mb-5">
                <div class="tm-address-col">
                    <h2 class="tm-text-primary mb-5">Our Address</h2>
                    <p class="tm-mb-50">North South University Bashundhara, Dhaka-1229, Bangladesh   </p>
                    
                    
                    <ul class="tm-contacts">
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-envelope"></i>
                                Email: registrar@northsouth.edu
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-phone"></i>
                                Tel: +880-2-55668200 | Fax: +880-2-55668202
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-globe"></i>
                                URL: https://www.northsouth.edu/
                            </a>
                        </li>
                    </ul>
                </div>                
            </div>
            <div class="col-lg-4 col-12">
                <h2 class="tm-text-primary mb-5">Our Location</h2>
                <!-- Map -->
                <div class="mapouter mb-4">
                    <div class="gmap-canvas">
                        
                            <iframe src="https://maps.google.com/maps?q=North%20South%20University,%20Dhaka,%20Bangladesh&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


                    </div>
                </div>               
            </div>
        </div>
        <div class="row tm-mb-74 tm-people-row">
            <div class="col-lg-4 col-12 mb-5">
                <img src="<?=ASSETS?>catalog/img/tanvir.jpeg" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4">Tanvir Mehtab</h2>
                <h3 class="tm-text-secondary h5 mb-4">Team Leader</h3>
            <!--<p class="mb-4">
                    Mauris ante tellus, feugiat nec metus non, bibendum semper velit. Praesent laoreet urna id tristique fermentum. Morbi venenatis dui quis diam mollis pellentesque.
                </p>
            -->
                <ul class="tm-social pl-0 mb-0">
                    <li><a href="https://www.facebook.com/tanvir.mehtab?mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a></li>
                    <!--<li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>-->
                    <li><a href="https://www.linkedin.com/in/tanvir-mehtab-2336b42b9/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-12 mb-5">
                <img src="<?=ASSETS?>catalog/img/person4.jpeg" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4">Sarwar Uddin</h2>
                <h3 class="tm-text-secondary h5 mb-4">Backend Developer</h3>
            <!--
                <p class="mb-4">
                    Sed faucibus nec velit finibus accumsan. Sed varius augue et leo pharetra, in varius lacus eleifend. Quisque ut eleifend lacus.
                </p>
            -->
                <ul class="tm-social pl-0 mb-0">
                    <li><a href="https://www.facebook.com/profile.php?id=100079870281461&mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a></li>
                    <!--<li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>-->
                    <li><a href="https://www.linkedin.com/in/sarwar-uddin-58a248237/"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        <!--
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                <img src="<?=ASSETS?>catalog/img/tanvir.jpeg" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4">Johnny Brief</h2>
                <h3 class="tm-text-secondary h5 mb-4">Accounting Executive</h3>
                <p class="mb-4">
                    Sed faucibus nec velit finibus accumsan. Sed varius augue et leo pharetra, in varius lacus eleifend. Quisque ut eleifend lacus.
                </p>
                <ul class="tm-social pl-0 mb-0">
                    <li><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                <img src="<?=ASSETS?>catalog/img/person4.jpeg" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4">George Nelson</h2>
                <h3 class="tm-text-secondary h5 mb-4">Creative Art Director #C69</h3>
                <p class="mb-4">
                    Nunc convallis facilisis congue. Curabitur gravida rutrum justo sed pulvinar. Pellentesque ac ante in erat bibendum dignissim.
                </p>
                <ul class="tm-social pl-0 mb-0">
                    <li><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        -->
        </div>
    </div> <!-- container-fluid, tm-container-content -->

<?php $this->view("catalog/footer"); ?>
 
