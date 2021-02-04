<!DOCTYPE html>
<html lang="en">
<style>
    /* Three columns side by side */
    
    .column {
        float: left;
        width: 20%;
        margin-bottom: 16px;
        padding: 0 8px;
    }
    /* Display the columns below each other instead of side by side on small screens */
     @media screen and (max-width: 1903px) {
        .column {
            width: 45%;
            border-radius: 50%;
            display: block;
            margin: auto;
            margin-bottom: 20px;
        }
        .mobile {
            font-size: 10px;
        }
        .d-block {
            font-size: 10px;
        }
    }
    @media screen and (max-width: 800px) {
        .column {
            width: 85%;
            border-radius: 50%;
            display: block;
            margin: auto;
            margin-bottom: 20px;
        }
        .mobile {
            font-size: 10px;
        }
        .d-block {
            font-size: 10px;
        }
    }
    /* Add some shadows to create a card effect */
    
    .card {
        box-shadow: 40px 40px 8px 0 rgba(0, 0, 0, 0.2);
    }
    /* Some left and right padding inside the container */
    
    .container {
        padding: 0 16px;
    }
    /* Clear floats */
    
    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }
    
    .title {
        color: grey;
    }
    
    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }
    
    .card:hover {
        transition: 0.9s;
        transform: scale(1.03);
    }
    .form:hover{
         transition: 0.6s;
         transform: scale(1.03);
    }
    .button:hover {
        background-color: #555;
    }
    /* form */
    
    input[type=text],[type=email],
    select,
    textarea {
        width: 80%;
        padding: 12px;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 9px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 12px;
        resize: vertical;
    }
    select{
        width:40%;
    }
    input[type=text]:hover{
        
         transition: 0.3s;
         transform: scale(1.03);
    }
    input[type=email]:hover{
        
         transition: 0.3s;
         transform: scale(1.03);
    }
    select:hover{
        
         transition: 0.3s;
         transform: scale(1.03);
    }
  textarea:hover{
        
         transition: 0.3s;
         transform: scale(1.03);
    }
    
    
    input[type=submit] {
        background-color: #4CAF50;
        color: rgb(0, 0, 0);
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 400px;
    }
    
    input[type=submit]:hover {
        background-color: green;
    }
    
    .form {
        border-radius: 5px;
        background-color: #000000;
        padding: 20px;
    }
     @media screen and (max-width: 650px) {
         input[type=submit] {
        background-color: #4CAF50;
        color: rgb(0, 0, 0);
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 200px;
        }
    /* form */
</style>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Epicode - Transforming Epic ideas!</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top" style="width:75%;">Epicode</a>
            

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <h5 class="mobile"><a class="mobile" href="#page-top">Transforming Epic ideas!</a></h5>
    </nav>
    <!-- Masthead-->

    <header class="masthead">
        <div class="container h-100">

            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h2 class="text-uppercase text-white font-weight-bold">Epicode</h2>
                    <h3 class="mobile" style="color: whitesmoke;" href="#page-top">Transforming Epic Ideas! </h3>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">Here at Epicode, we can help you to design a Website, Mobile Application, Software Development, E-commerce Website and Application ,Logo Design, Ad Creation and many more things!</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary"id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">We've got what you need!</h2>
                    <hr class="divider light my-4" />
                    <p class="text-50 mb-4" style="color: #121416;">Epicode has everything you need to get your new Idea up and running in no time! </p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-0">At Your Service</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-laptop-code" style="font-size: 60px; color:#f4623a; margin-bottom: 25px;"></i>
                        <h3 class="h4 mb-2">Website <br>Development <br> </h3>
                        <p class="text-muted mb-0">lets's give a new way to expands your business and ideas!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-check-circle" style="font-size: 60px; color:#f4623a; margin-bottom: 25px;"></i>
                        <h3 class="h4 mb-2">Software <br>Development</h3>
                        <p class="text-muted mb-0">finding difficulties in Managing your business ? Epicode can help you to design a Software that full-fill your need.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-mobile" style="font-size: 60px; color:#f4623a; margin-bottom: 25px;"></i>
                        <h3 class="h4 mb-2">Mobile Application Development</h3>
                        <p class="text-muted mb-0"> We build Mobile application for different platforms. We provide custom solutions to businesses, corporate and personal users.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fab fa-adversal" style="font-size: 60px; color:#f4623a; margin-bottom: 25px;"></i>
                        <h3 class="h4 mb-2">Logo and Advertisement  </h3>
                        <p class="text-muted mb-0">we provide Logo creation and advertisement</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-shopping-cart" style="font-size: 60px; color:#f4623a; margin-bottom: 30px;"></i>
                        <h3 class="h4 mb-2" >E-commerce  </h3>
                        <p class="text-muted mb-0" style="margin-top:  30px">Epicode can build a website and mobile application for your business to sell your product and services online. </p>
                    </div>

                </div>
                
                
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-edit" style="font-size: 60px; color:#f4623a; margin-bottom: 25px;"></i>
                        <h3 class="h4 mb-2">Academic Content Writing </h3>
                        <p class="text-muted mb-0">We provide quality academic content writing for IT filed, research report,University Projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-primary" id="team" >
        <h2 class="text-white mt-0" style="text-align: center;">Meet The Team</h2>
        <hr class="divider light my-4" />
        <div class="row" style="background :#f4623a;  margin-right: 0;  margin-left: 0;">

            <div class="column">
                <div class="card" style="border-radius: 20px;">
                    <img src="assets/img/team/UTSAV.jpg" alt="UTSAV" style="width:100%;height: 400px;border-radius: 20px 20px  0 0;">
                    <div class="container">
                        <h2 style="text-align: center;">Utsav Patel</h2>
                        <p style="text-align: center;" class="title"> Founder</p>
                        <p style="text-align: center;">Back-End web Developer in PHP &amp; MySQLi</p>
                        <p style="text-align: center;">Master of Information Technology <br><a href="https://www.jcub.edu.au/">(Jems cook University)</a> </p>
                        <p style="text-align: center;">utsavpatel@epicode.com</p>
                        <p style="text-align: center;"><a href="mailto:utsavpatel@epicode.com"><button class="button">Contact</button></a></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card" style="border-radius: 20px;">
                    <img src="assets/img/team/urjit.jpg" alt="urjitshah" style="width:100%;height: 400px; border-radius: 20px 20px  0 0;">
                    <div class="container ">
                        <h2 style="text-align: center; ">Urjit Shah</h2>
                        <p style="text-align: center; " class="title ">Managing Director</p>
                        <p style="text-align: center; "> Full stack Developer in React JS.</p>
                        <p style="text-align: center;"> Master of Science (IT) <br> <a href="https://www.daiict.ac.in/">(DAIICT)</a></p>
                        <p style="text-align: center; ">urjitshah@epicode.com</p>
                        <p style="text-align: center; "><a href="mailto:urjitshah@epicode.com "><button class="button ">Contact</button></a></p>
                    </div>
                </div>
            </div>

            <div class="column ">
                <div class="card " style="border-radius: 20px;">
                    <img src="assets/img/team/pragnesh.jpg " alt="Pragnesh Thakkar " style="width:100%;height: 400px;border-radius: 20px 20px  0 0;">
                    <div class="container ">
                        <h2 style="text-align: center;">Pragnesh Thakkar</h2>
                        <p style="text-align: center; " class="title ">Team Member</p>
                        <p style="text-align: center; "> Android Developer </p>
                        <p style="text-align: center;"> Computer Programmer <br> <a href="https://www.algonquincollege.com/">(Algonquin College)</a></p>
                        <p style="text-align: center; ">pragneshthakker@epicode.com</p>
                        <p style="text-align: center; "><a href="mailto:pragneshthakker@epicode.com "><button class="button ">Contact</button></a></p>
                    </div>
                </div>
            </div>
            <div class="column ">
                <div class="card " style="border-radius: 20px;">
                    <img src="assets/img/team/jigar.jpg " alt="John " style="width:100%; height: 400px;border-radius: 20px 20px  0 0;  ">
                    <div class="container ">
                        <h2 style="text-align: center;">Jigar Ramani</h2>
                        <p style="text-align: center; " class="title ">Team Member</p>
                        <p style="text-align: center; ">Django &amp; Python</p>
                        <p style="text-align: center;"> Master of computer Application <br> <a href="https://www.gtu.ac.in/">(GTU)</a></p>
                        <p style="text-align: center; ">Jigar.r@epicode.com</p>
                        <p style="text-align: center; "><a href="mailto:Jigar.r@epicode.com "><button class="button ">Contact</button></a></p>
                    </div>
                </div>
            </div>
            <div class="column ">
                <div class="card " style="border-radius: 20px;">
                    <img src="assets/img/team/rushi.jpg " alt="John " style="width:100%; height: 400px; border-radius: 20px 20px  0 0;">
                    <div class="container ">
                        <h2 style="text-align: center;">Rushi Patel</h2>
                        <p style="text-align: center; " class="title ">Team Member</p>
                        <p style="text-align: center; "> Software Tester</p>
                        <p style="text-align: center;"> Master of Computer Application <br> <a href="http://jgcolleges.org/">(JGCCA)</a></p>
                        <p style="text-align: center; ">rushipatel@epicode.com</p>
                        <p style="text-align: center; "><a href="mailto:rushipatel@epicode.com "><button class="button ">Contact</button></a></p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Portfolio-->
    <section class="page-section" id="portfolio">
        <div>
            <h2 class="text-center mt-0">Portfolio</h2>
            <hr class="divider my-4" />
            <div class="container-fluid p-0 ">
                <div class="row no-gutters ">
                    <div class="col-lg-4 col-sm-6 ">
                        <a class="portfolio-box " href="assets/img/portfolio/SOL.png ">
                            <img class="img-fluid " src="assets/img/portfolio/SOL.png " alt=" " />
                            <div class="portfolio-box-caption ">
                                <div class="project-category text-white-50 ">Software Developer</div>
                                <div class="project-name ">Epicode</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 ">
                        <a class="portfolio-box " href="assets/img/Screenshot (27).png ">
                            <img class="img-fluid " src="assets/img/Screenshot (27).png " alt=" " />
                            <div class="portfolio-box-caption ">
                                <div class="project-category text-white-50 ">Web site</div>
                                <div class="project-name ">Lockyer Labour solution </div>
                            </div>
                        </a>
                    </div>



                    <div class="col-lg-4 col-sm-6 ">
                        <a class="portfolio-box " href="assets/img/portfolio/HIRE.png ">
                            <img class="img-fluid " src="assets/img/portfolio/HIRE.png " alt=" " />
                            <div class="portfolio-box-caption p-3 ">
                                <div class="project-category text-white-50 ">Mobile Application</div>
                                <div class="project-name ">Epicode</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action-->
    
    <?php
    
    if(isset($_GET['error']))
    {
        $msg = "please fill all the details before submiting the form";
        echo '<div class="alert alert-danger>'.$msg.'</div>';
    }
    
    ?>
    <section class="page-section  text-white " style="background-color:  #f4623a" id="contact">
        <div class="container text-center ">
            <h2 class="mb-4 ">Share your ideas with us! Lucky one get free selected services.</h2>
            <div class="form" style=" border-radius: 30px; box-shadow: 40px 40px 8px 0 rgba(0, 0, 0, 0.5);">
                <h3> Contact Us</h3>
                <?php
                if (isset($_GET['error'])) {
                    $msg = "*Please fill all the details before submiting the form";
                    echo '<div style="color:red">' . $msg . '</div>';
                }
                if (isset($_GET['service'])) {
                    $msg = "*Please select the service";
                    echo '<div style="color:red">' . $msg . '</div>';
                }
              
                 if (isset($_GET['country'])) {
                    $msg = "*Please select the country";
                    echo '<div style="color:red">' . $msg . '</div>';
                }
                if (isset($_GET['success'])) {
                    $msg = "*E-mail has been sent.";
                    echo '<div style="color:green">' . $msg . '</div>';
                }
                
                ?>

                
                <form action="action.php" method="post">

                    <input type="text" id="fname" name="firstname" placeholder="Your First name">


                    <input type="text" id="lname" name="lastname" placeholder="Your last name">

                    <input type="email" id="email" name="email" placeholder="Your E-mail">

                    <input type="text" id="mobile" name="mobile" placeholder="Your mobile">
                    <select id="country" name="country" >
                        <option  style="display:none"> Countries </option>
                        <option value="australia">Australia</option>
                        <option value="India">India</option>
                        <option value="canada">Canada</option>

                    </select>

                    <select id="service" name="service" style="margin-top: 12px;" >
                        <option  style="display:none">Service</option>
                        <option value="webiste">Website</option>
                        <option value="mobile app">Mobile app</option>
                        <option value="software">Software</option>
                        <option value="other">other</option>

                    </select>


                    <input id="subject" type="text" name="subject" placeholder="Write something.." style="margin-top: 12px;">

                    <input type="submit" value="Submit" name="submit" >
                </form>
            </div>


            <div style="width: 100%;">
                <hr class="dashed" style="border-top: 3px dashed #bbb;">

                <h1> OR </h1>
            </div>
            <a class="btn btn-light btn-xl " href="mailto:info@epicode.com  "> Enquire now</a>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section " style="background-color:white">
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-lg-8 text-center ">
                    <h2 class="mt-0 ">Let's Get In Touch!</h2>
                    <hr class="divider my-4 " />
                    <p class="text-muted mb-5 ">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row" style="text-align:  center; width: 100%;">
                <div class="column" style="width: 33.33%;">
                    <i class="fas fa-phone-alt" style="font-size: 60px; color:#f4623a; margin-bottom: 25px;"></i>
                    <div class="mobile">India </div>
                    <div class="mobile"><a href="tel:+918511861506">+91 8511 861 506</a> </div>
                </div>
                <div class="column" style="text-align:  center; width: 33.33%;">
                    <i class="fas fa-envelope" style="font-size: 60px; color:#f4623a; margin-bottom: 25px;"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                    <a class="d-block" href="mailto:info@epicode.com ">info@epicode.com</a>
                </div>

                <div class="column" style="text-align:  center; width: 33.33%;">
                    <i class="fas fa-phone" style="font-size: 60px; color:#f4623a; margin-bottom: 25px;"></i>
                    <div class="mobile">Australia </div>
                    <div class="mobile"> <a href="tel:+61432469656">+61 432 469 656</a></div>
                </div>

            </div>
        </div>

    </section>
    <!-- Footer-->
    <footer class="bg-light py-5 ">
        <div class="container ">
            <div class="small text-center text-muted ">Copyright © 2021 - Epicode </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js "></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js "></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js "></script>
</body>

</html>