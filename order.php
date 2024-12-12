<?php
require './classes/orderBook.php';
use classes\orderBook;
$book=new orderBook();
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
            />
        <title>Order Page</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

        <link rel="stylesheet" href="assets/css/order.css" />
        <link rel="stylesheet" href="assets/css/footer.css" />
        <script src="assets/js/order.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    </head>
    <body style="background: url('assets/img/12.jpg'); background-size: cover">
        <div class="row register-form">
            <div class="col-md-8 offset-md-2">
                <form class="custom-form"  method="POST">
                    <h1>Order Form</h1>
                    <div class="row form-group">
                        <div class="col-sm-4 col-xxl-4 label-column">
                            <label class="col-form-label" for="dropdown-input-field"
                                   >Book Name</label
                            >
                        </div>
                        <div class="col-sm-4 input-column">
                            <div class="mb-3"><select class="form-select col-lg-8" id="book" name="plan" onchange="selectid()">
                                        <optgroup label="Select book">
                                            <?php
                                            $rs=$book->getOrderBook();
                                            $id=0;
                                            foreach ($rs as $books){
                                                
                                           
                                                ?>
                                                <option value="<?php echo $books['book_price']; ?>"><?php echo $books['title']; ?></option>
                                                <?php
                                           }
                                            ?>
                                        </optgroup>
                                    </select></div>
                           
                        </div>
                    </div>
                    <?php 
                    
                    ?>
                    <div class="row form-group">
                        <div class="col-sm-4 label-column cl-quantity">
                            <label class="col-form-label" for="name-input-field "
                                   >Quantity</label
                            >
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" id="quantity" type="number" min="0" name="quantity" onchange="selectid()" required=""/>
                        </div>
                    </div>
                   
                    <div class="row form-group">
                        <div class="col-sm-4 label-column cl-price">
                            <label class="col-form-label" for="email-input-field"
                                   >Price</label
                            >
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" id="total" type="text" name="price" value="" readonly="" required=""/>
                        </div>
                    </div>
                    <input  value="Order Now" name="submit" class="btn btn-light submit-button" onclick="alert()"/>
                    <input type="submit" value="submit" hidden="" />
                    
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/order.js"></script>
        
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
