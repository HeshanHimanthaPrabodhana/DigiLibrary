<!DOCTYPE html>
<html
    data-bs-theme="light"
    lang="en"
    style="margin-top: -101px; padding-top: 21px"
    >
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
            />
        <title>Registration Form ibrary</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
            />
        <link rel="stylesheet" href="assets/css/registration.css" />
        <link rel="stylesheet" href="assets/css/footer.css" />
       
        <link rel="stylesheet" href="assets/css/header.css" />
       
    </head>
    
   
  
    
    <body style="background: url('assets/img/5.jpg'); background-size: cover">
         <header style="margin-top: 80px">
  <!--        header start-->
            <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3" >
                <div class="container" style="background-color:black">
                    <a class="navbar-brand d-flex align-items-center" href="#" >
                        <img src="assets/img/logo.jpeg" alt="Logo" style="height: 50px;width: 50px">
                        <span style="color: orange;font-weight: bold;font-size: 25px">UWU Digital Library</span>
                    </a>
                    <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5">
                        <span class="visually-hidden">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navcol-5">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link " style="font-weight: bold" href="#">COLLECTIONS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PUBLICATION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">DOWNLOAD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ABOUT US</a>
                            </li>
                        </ul>
                        <a class="btn btn-primary ms-md-2" style="background-color: orange;border: orange" role="button" href="#">LOGIN</a>
                    </div>
                </div>
            </nav>
           
            <!--        header end-->
             </header>
        <section
            class="clean-block clean-form dark h-100"
            style="padding-top: 0px; background: transparent"
            >
            <div class="container">
                <div class="block-heading-1">
                    <h2 class="fs-1 text-light h2-reg">Registration Form</h2>
                    <p></p>
                </div>
                <form
                    action="registrationprocess.php"
                    method="POST"
                    enctype="multipart/form-data"
                    role="form"
                    class="form-bg"
                    >

                    <div class="form-group mb-3">
                        <label class="form-label fw-bold text-light">First Name</label
                        ><input
                            class="form-control"
                            type="text"
                            placeholder="First Name"
                            name="firstname"
                            required=""
                            />
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label fw-bold text-light">Last Name</label
                        ><input
                            class="form-control"
                            type="text"
                            placeholder="Last Name"
                            name="lastname"
                            required=""
                            />
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label fw-bold text-light">User Name</label
                        ><input
                            class="form-control"
                            type="text"
                            placeholder="User Name"
                            name="username"
                            required=""
                            />
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label fw-bold text-light">Password</label
                        ><input
                            class="form-control"
                            type="password"
                            id="formum2"
                            placeholder="Password"
                            name="password"
                            />
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label fw-bold text-light">Email</label
                        ><input
                            class="form-control"
                            type="tel"
                            placeholder="Email"
                            name="email"
                            required=""
                            />

                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label fw-bold text-light">Phone No</label
                        ><input
                            class="form-control"
                            type="text"
                            placeholder="Phone No"
                            name="phoneno"
                            required=""
                            />
                    </div>



                    <div class="form-group mb-3">
                        <label class="form-label fw-bold text-light"
                               >Date of Birth</label
                        ><input
                            class="form-control"
                            type="date"
                            placeholder="DD/MM/YYYY"
                            name="dob"
                            required=""
                            />
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label fw-bold text-light"
                               >Age</label
                        ><input
                            class="form-control"
                            type="text"
                            placeholder="Age"
                            name="age"
                            required=""
                            />
                    </div>
                    <label class="form-label fw-bold text-light label-gender"
                           >Type</label
                    ><button class="btn btn-dark btn-sm" type="button">
                        <input type="radio" name="usertype" value="undergraduate/staff"/>
                        Undergraduate/Staff</button>
                    <div class="btn-group" role="group"></div>
                    <button class="btn btn-dark btn-sm" type="button">
                        <input type="radio" name="usertype" value="other"/>
                        Other</button>
                    <hr class="hr-s" />
                    <div class="form-group mb-3">
                        <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == 1) {
                                echo "<label style='color:red'>Fill out fields</label>";
                            }


                            if ($_GET['error'] == 2) {
                                echo "<label style='color:red'>Please enter valid email</label>";
                            }
                        }
                        ?>

                        <button

                            class="btn btn-primary d-block w-100 regi-button"
                            type="submit" style="color: orange"
                            >

                            <i class="fas fa-save"></i>&nbsp;REGISTER
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://geodata.solutions/includes/countrystate.js"></script>
       
        <!--Footer-->
<footer>
    <div class="row footer-container">
        <div class="foot">
            <img src ="assets/img/logo.jpeg" class="logo">
             <p>...Welcome to UWU University Library...</p>
        </div>

        <div class="foot">
            <h3>Office <div class="underline"><span></span></div></h3>
            <p>ITPL Road</p>
            <p>Whitefield, Sri Lanka</p>
            <p> Kamburupitya.Matara,Sri Lanka</p>
            <p class="email-id">ggheshanhimantha@gmail.com</p>
            <h4>+94 - 0713139439</h4>
        </div>

        <div class="foot">
            <h3>Links <div class="underline"><span></span></div></h3>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>
        
        <div class="foot">
                <h3>Newsletter <div class="underline"><span></span></div></h3>
                <form class="subscription-form">
                    <i class="fa-thin fa-envelopes"></i>
                    <input type="email" placeholder="Enter your email id" required>
                    <button type="submit"><i class="fa-solid fa-circle-arrow-right"></i></button>

                </form>
                <div class="icons">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                </div>
                 

        </div>
    </div>
    <hr>
    <p class="copyright">@Copyright 2023-UWU Digital Library.All right reserved.</p>
</footer>
    </body>
</html>
