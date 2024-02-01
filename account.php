<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trendy Threads Boutique</title>
    <link rel="stylesheet" href="css/styleXX.css">
    <link rel="stylesheet" href="account.css">
    <link rel="stylesheet" href="cart.css">
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
    </div>
    <header>
<section class="my-5 py-5">
    <div class="row container mx-auto">
        <div class="text-center mt-3 pt-5 col-lg col-md-12 col-sm-12">
            
           
            <div class="account-info">
                <h3 class="font-weight-bold">Account info</h3>
                <hr class="mx-auto">
                <p>Name <span>John</span></p>
                <p>Email <span>john@gmail.com</span></p>
                <p><a href="" id="orders-btn">Your orders</a></p>
                <p><a href=""id="logout-btn"></a>Logout</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <form action=""id="account-form">
                <h3>Change Password</h3>
                <hr class="mx-auto">
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control"id="account-password"name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for=""> Confirm Password</label>
                    <input type="password" class="form-control"id="account-password-confirm"name="confirm password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Change Password" class="btn" id="change-pass-btn">
                </div>
            </form>
        </div>
    </div>
</section>
<section class="cart container my-5 py-5">
    <div class="container mt-5">
      <h2 class="font-weight-bolde text-center">Your Orders</h2>
      <hr class="mx-auto">
    </div>
    <table class="mt-5 pt-5">
      <tr>
          <th>Product</th>
          <th>Date</th>
         
      </tr>
      <tr>
          <td>
             <div class="product-info">
                <img src="img/1706256220img12.jpg" alt="">
                <div>
                    <p class="mt-3">GREEN HOODIE</p>
                </div>
             </div> 
          </td>
          <td>
             <span>2036-5-8</span> 
          </td>
         
      </tr>
      
  </table>
    
   
   </section>
</header>







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
  
  
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
      <script src="script.js"></script>
    </body>
  </html>
  