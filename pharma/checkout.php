<!DOCTYPE html>
<html lang="en">

<head>
    <title>PharmaLyn &mdash; Checkout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="site-wrap">

        <!-- navbar  -->
        <div class="site-navbar py-2">

            <div class="search-wrap">
                <div class="container">
                    <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                    <!-- search feature -->
                    <form action="#" method="post">
                        <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                    </form>
                </div>
            </div>

            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <div class="site-logo">
                            <a href="index.php" class="js-logo-clone">PharmaLyn</a>
                        </div>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                        <nav class="site-navigation text-right text-md-center" role="navigation">
                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li><a href="index.php">Home</a></li>
                                <li class="active"><a href="shop.php">Store</a></li>
                                <li class="has-children">
                                    <a href="#">Services</a>
                                    <ul class="dropdown">
                                        <li><a href="shop.php">Store</a></li>
                                        <li><a href="#">Scan Prescription</a></li>
                                        <li><a href="#">Request Video Chat</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="login.php">Log In / Sign Up  </a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="icons">
                        <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                        <a href="cart.php" class="icons-btn d-inline-block bag">
                            <span class="icon-shopping-bag"></span>
                            <!-- subject to the items in the cart -->
                            <span class="number">2</span>
                        </a>
                        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
              class="icon-menu"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of navbar -->

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0">
                        <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">Checkout</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="bg-light rounded p-3">
                            <!-- insert login modal here -->
                            <p class="mb-0">Returning customer? <a href="#" class="d-inline-block">Click here</a> to login</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <h2 class="h3 mb-3 text-black">Billing Details</h2>
                        <div class="p-3 p-lg-5 border">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="fname" class="text-black">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fname" name="fname">
                                </div>
                                <div class="col-md-6">
                                    <label for="lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lname" name="lname">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="region" class="text-black">Region<span class="text-danger">*</span></label>
                                <select id="region" class="form-control">
                                    <option value="Accra">Greater Accra</option>
                                    <option value="Ashanti">Ashanti</option>
                                    <option value="Central">Central</option>
                                   
                                  </select>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="companyname" class="text-black">Company Name </label>
                                    <input type="text" class="form-control" id="companyname" name="companyname">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="address" class="text-black">Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Street address">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="country" class="text-black">Country <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="country" name="country">
                                </div>
                                <div class="col-md-6">
                                    <label for="postal_zip" class="text-black">Postal / Zip <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="postal_zip" name="postal_zip">
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <div class="col-md-6">
                                    <label for="email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="email_address" name="email_address">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="create_account" id="create_account"> Create an account?</label>
                                <div class="collapse" id="create_an_account">
                                    <div class="py-2">
                                        <p class="mb-3">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                        <div class="form-group">
                                            <label for="account_password" class="text-black">Account Password</label>
                                            <input type="email" class="form-control" id="account_password" name="account_password" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="order_notes" class="text-black">Order Notes</label>
                                <textarea name="order_notes" id="order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black">Your Order</h2>
                                <div class="p-3 p-lg-5 border">
                                    <table class="table site-block-order-table mb-5">
                                        <thead>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Bioderma <strong class="mx-2">x</strong> 1</td>
                                                <td>$55.00</td>
                                            </tr>
                                            <tr>
                                                <td>Ibuprofeen <strong class="mx-2">x</strong> 1</td>
                                                <td>$45.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                                                <td class="text-black">$350.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                                <td class="text-black font-weight-bold"><strong>$350.00</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="border mb-3">
                                        <div class="form-check">

                                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapse_momo" role="button" aria-expanded="false" aria-controls="collapse_momo">Mobile Payment</a></h3>

                                            <div class="collapse" id="collapse_momo">
                                                <div class="py-2 px-4">
                                                    <input class="form-check-input" type="radio" name="payment" id="momo" value="momo">
                                                    <label class="form-check-label" for="momo">
                                                MTN Momo
                                              </label>
                                                    <p class="mb-0">Make your payment directly into our mobile money account. Please use your Order ID as the payment reference. Your order won’t be shipped until the payment is confirmed.</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="border mb-5">
                                        <div class="form-check">

                                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapse_delivery" role="button" aria-expanded="false" aria-controls="collapse_delivery">Pay On Delivery</a></h3>

                                            <div class="collapse" id="collapse_delivery">
                                                <div class="py-2 px-4">
                                                    <input class="form-check-input" type="radio" name="payment" id="delivery" value="delivery">
                                                    <label class="form-check-label" for="delivery">
                                                Pay on delivery
                                              </label>
                                                    <p class="mb-0">Make payment upon delivery of item(s).</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary btn-lg btn-block" onclick="window.location='thankyou.php'">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </form> -->
            </div>
        </div>


        <!--when on this page user cannot proceed without signing  -->



        <!-- site ad -->
        <div class="site-section bg-secondary bg-image " style="background-image: url( 'images/bg_2.jpg'); ">
            <div class="container ">
                <div class="row align-items-stretch ">
                    <div class="col-lg-6 mb-5 mb-lg-0 ">
                        <a class="banner-1 h-100 d-flex " style="background-image: url( 'images/bg_1.jpg'); ">
                            <div class="banner-1-inner align-self-center ">
                                <h2>PharmaLyn Products</h2>
                                <p>Our products are sourced from trusted brands and we can vouch for the quality of every product we serve to our clients.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0 ">
                        <a class="banner-1 h-100 d-flex " style="background-image: url( 'images/avatars/doctor4.jpg'); ">
                            <div class="banner-1-inner align-self-center ">
                                <h2>Rated by Experts</h2>
                                <p>Awarded "Best Pharmacy Award" 2016, 2017, 2018 and 2019 by the Pharmaceutical Association of Ghana
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of ad -->

        <!-- footer -->
        <footer class="site-footer ">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 ">

                        <div class="block-7 ">
                            <h3 class="footer-heading mb-4 ">About Us</h3>
                            <p>Best Pharmacy in Ghana</p>
                        </div>

                    </div>
                    <div class="col-lg-3 mx-auto mb-5 mb-lg-0 ">
                        <h3 class="footer-heading mb-4 ">Quick Links</h3>
                        <ul class="list-unstyled ">
                            <li><a href="shop.php ">Store</a></li>
                            <li>
                                <a href="login.php">log in / sign up</a>
                            </li>
                            <li><a href="# ">Request Video Chat</a></li>
                        </ul>
                    </div>

                    <div class="col-md-6 col-lg-3 ">
                        <div class="block-5 mb-5 ">
                            <h3 class="footer-heading mb-4 ">Contact Info</h3>
                            <ul class="list-unstyled ">
                                <li class="address ">233 Avenue, Oxford Street, Osu, Accra. </li>
                                <li class="phone "><a href="tel:// ">+233 24 444 444</a></li>
                                <li class="email ">info@pharmalyn.shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 text-center ">
                    <div class="col-md-12 ">
                        <p>
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | PharmaLyn
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>