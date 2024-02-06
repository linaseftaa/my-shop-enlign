<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trendy Threads Boutique</title>
    <link rel="stylesheet" href="css/styleXX.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"/>
</head>
<body>
    <div class="header">
        <a href="#" id="logo">shopMe <span>.</span></a>
        <nav class="navbar">
        <a href="ingo.php">Home</a>
        <a href="clothes.php">clothes</a>
        <a href="#">Blog</a>
       <a href="#">Contact</a>
        </nav>
        <div class="icons">
            <div class="fas fa-bars" id="menu-bar"></div>
            <div class="fas fa-shopping-cart" id="shop-cart"></div>
            <div class="fas fa-search" id="search-bar"></div>
           <a href="login.php" id="form-open"><div class="fas fa-user"id="form-open" id='login-form'onclick="document.getElementById('login-page').style.display='block'" style="width:auto;"></div></a> 
        </div>

        <div class="search-box">
            <input type="search" placeholder="search here">
        </div>
        <!-- shoping cart -->

        <div class="shopping-cart">
            <div class="shopping-box">
                <i class="fas fa-times"></i>
                <img src="img/shirt1.png" alt="">
                <div class="shop-content">
                    <h3>online shopping</h3>
                    <span class="quantity">1</span>
                    <span class="multiply">*</span>
                    <span class="multiply">$3.00</span>
                </div>
            </div>
            <div class="shopping-box">
                <i class="fas fa-times"></i>
                <img src="img/shirt1.png" alt="">
                <div class="shop-content">
                    <h3>online shopping</h3>
                    <span class="quantity">1</span>
                    <span class="multiply">*</span>
                    <span class="multiply">$3.00</span>
                </div>
            </div>
            <div class="shopping-box">
                <i class="fas fa-times"></i>
                <img src="img/shirt1.png" alt="">
                <div class="shop-content">
                    <h3>online shopping</h3>
                    <span class="quantity">1</span>
                    <span class="multiply">*</span>
                    <span class="multiply">$3.00</span>
                </div>
            </div>
        </div>

        <!-- shoping cart ended  -->

    </div>
<br> <br><br><br><br><br><br><br>
<section class="form-group checkout-small-element">
<div class="mx-auto container">
   
<form id='checkout' class='checkout-form' method="POST" action="register.php">
    <h2 class="form-weight-bold">Check Out</h2>
<div class="form-group checkout-small-element">
		     <input type='text'class='input-field' id=""name="firstname" placeholder='First Name' required>
		     <input type='text'class='input-field'name="lastname" placeholder='Last Name ' required>
		     <input type='email'class='input-field'name="email" placeholder='entre your Email ' required>
		     <input type='tel'class='input-field'id="checkout-phone"name="phone" placeholder='Enter your phone number' required>
		     <input type='text'class='input-field'id="chekout-city"name="city" placeholder='Confirm your city'  required>
             </div>
             <div class="form-group checkout-large-element">
             <input type='text'class='input-field'id="chekout-address"name="address" placeholder='Confirm your addresss'  required>
             </div>
		     
            <div class="form-group checkout-btn-container">
                    <input type='submit'class='submit-btn' id="checkout-btn" value="Checkout">
                    </div>
                   
	         </form>
             </div>

             </section>











<br> 
<!--
    <footer class="section__container footer__container">
      <div class="footer__col">
        <h4 class="footer__heading">CONTACT INFO</h4>
        <p>
          <i class="ri-map-pin-2-fill"></i> 123, London Bridge Street, London
        </p>
        <p><i class="ri-mail-fill"></i> support@monsa.com</p>
        <p><i class="ri-phone-fill"></i> (+213) 3456 6789</p>
      </div>
      <div class="footer__col">
        <h4 class="footer__heading">COMPANY</h4>
        <p>Home</p>
        <p>About Us</p>
        <p>Work With Us</p>
        <p>Our Blog</p>
        <p>Terms & Conditions</p>
      </div>
      <div class="footer__col">
        <h4 class="footer__heading">USEFUL LINK</h4>
        <p>Help</p>
        <p>Track My Order</p>
        <p>Men</p>
        <p>Women</p>
        <p>Shoes</p>
      </div>
      <div class="footer__col">
        <h4 class="footer__heading">Our Social Network</h4>
        <p>If you have any seggestions or inquiries, contact us througt our social Network
          shown below
        </p>
        <div class="social-link">
          <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
          <a href="#" class="twitter"><i class="fa-brands fa-facebook"></i></a>
          <a href="#" class="twitter"><i class="fa-brands fa-google-plus"></i></a>
          <a href="#" class="twitter"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" class="twitter"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>
    </footer>

    <hr />

    <div class="section__container footer__bar">
      <div class="copyright">
        Copyright © Trendy Threads Boutique. All rights reserved.
      </div>
      <div class="footer__form">
        <form>
          <input type="text" placeholder="ENTER YOUR EMAIL" />
          <button class="btn" type="submit">SUBSCRIBE</button>
        </form>
      </div>
    </div>

-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>



   
    

