<?php
$conn = mysqli_connect('localhost','root','','order_db') or die('connection failed');
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];
    
    $insert = mysqli_query($conn, "INSERT INTO order_form (name, email, number, date)
    VALUES('$name','$email', '$number', '$date')") or die('query failed');
    
    if($insert){
        $message = 'order  made successfully!';
    }
    else{
        $message = 'order failed';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>The Beans</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./Old.css">
</head>
<body>
    <!--header section starts-->
    <header>
        <a href="#" class="logo"><i class="fas-fa-untensils"></i>The Beans</a>
        <nav class="navbar">
            <a class="active"  href = "#home">Home</a>
            <a href = "#dishes">Dishes</a>
            <a href = "#about">About us</a>
            <a href = "#menu">Menu</a>
            <a href = "#review">Reviews</a>
            <a href = "#order">Order</a>
        </nav>
        <div class = "icons">
            <i class ="fas fa-bars" id="menu-bars"></i>
            <i class ="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

    </header>
    <!--header section ends-->

    <!--search form -->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

   <section class ="home" id="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide slide">
                <div class="content">
                    <span>The Beans cafe</span>
                    <p>Rise & Shine, It's Coffee Time.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
                <div class="image">
                    <img src=".\im16.png" alt="">
                </div>

            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span>Speciality of our coffee</span>
                    <h3>Coffee</h3>
                    <p>From classic lattes to flavor combinations, our specialty drinks are sure to satisfy your cravings.</p>
                    <a href="#" class="btn">Order now</a>
                </div>
                <div class="image">
                    <img src=".\im10.png" alt="">
                </div>

            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span>Speciality of our desserts</span>
                    <h3>Desserts</h3>
                    <p>Our freshly made desserts are the perfect complement to your coffee or tea.</p>
                    <a href="#" class="btn">Order now</a>
                </div>
                <div class="image">
                    <img src=".\im9.png" alt="">
                </div>

            </div>
        
        </div>
        <div class="swiper-pagination"></div>

    </div>
   </section> 
   
   <section class="dishes" id="dishes">
    <h3 class ="sub-heading"> our dishes</h3>
    <h1 class ="heading">Popular dishes</h1>
    <div class = "box-container">
        <div class ="box">
           <a href="#" class="fas fa-heart"></a>
           <a href="#" class="fas fa-eye"></a>
           <img src = ".\im2.jpg" alt = "">
           <h3>Iced Coffee</h3>
           <div class = "stars">
             <i class = "fas fa-star"></i>
             <i class = "fas fa-star"></i>
             <i class = "fas fa-star"></i>
             <i class = "fas fa-star"></i>
             <i class = "fas fa-star-half-alt"></i>
        </div>
        <span>Rs.450.00</span>
        <a href="#" class="btn">add to cart</a>
     </div>

 <div class = "box-container">
    <div class ="box">
       <a href="#" class="fas fa-heart"></a>
       <a href="#" class="fas fa-eye"></a>
       <img src = ".\im1.jpg" alt = "">
       <h3>Iced Americano</h3>
       <div class = "stars">
         <i class = "fas fa-star"></i>
         <i class = "fas fa-star"></i>
         <i class = "fas fa-star"></i>
         <i class = "fas fa-star"></i>
         <i class = "fas fa-star-half-alt"></i>
    </div>
    <span>Rs.250.00</span>
    <a href="#" class="btn">add to cart</a>
 </div>

 <div class = "box-container">
    <div class ="box">
       <a href="#" class="fas fa-heart"></a>
       <a href="#" class="fas fa-eye"></a>
       <img src = ".\im6.jpg" alt = "">
       <h3>Creme Brulee</h3>
       <div class = "stars">
         <i class = "fas fa-star"></i>
         <i class = "fas fa-star"></i>
         <i class = "fas fa-star"></i>
         <i class = "fas fa-star"></i>
         <i class = "fas fa-star-half-alt"></i>
    </div>
    <span>Rs.300.00</span>
    <a href="#" class="btn">add to cart</a>
  </div>
 </div>

 </section>
   </section>
 <!--about section starts-->  
 <section class="about" id="about">
 <h3 class="sub-heading">about us</h3>
 <h1 class="heading">why choose us?</h1>
 <div class="row">
    <div class="image">
        <img src=".\us.jpg" alt="">
    </div>
    <div class="content">
        <h3>THE WORLD OF COFFEE</h3>
        <p>The Beans Cafe is a charming coffee shop known for its exceptional quality coffee and cozy atmosphere. Located in the heart of the city, The Beans Cafe offers a wide variety of carefully selected beans from different regions around the world. Their skilled baristas expertly craft each cup of coffee, ensuring a rich and flavorful experience for every customer.</p>
        <div class="icons-container">
            <div class ="icons">
                <i class="fas fa-shipping-fast"></i>
                <span>free delivery</span>
            </div>
           
            <div class ="icons">
                <i class="fas fa-dollar-sign"></i>
                <span>easy payments</span>
            </div>

            <div class ="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 service</span>
            </div>
    </div>
        <a href="#" class="btn">learn more</a>
    </div>
 </div>
 </section> 
 <!--about section starts-->
 <section class="menu" id="menu">
    <h3 class="sub-heading">our menu</h3>
    <h1 class="heading">Today's special</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src = ".\im1.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Iced Americano</h3>
                <p>A cool and invigorating beverage with a strong espresso flavor and a hint of bitterness.</p>
                <a href ="#" class="btn">add to cart</a>
                <span class= "price">Rs.250.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src = ".\im2.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Iced Coffee</h3>
                <p>A refreshing and chilled coffee drink that provides a cool caffeine boost on a hot day.</p>
                <a href ="#" class="btn">add to cart</a>
                <span class= "price">Rs.450.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src = ".\im7.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Latte</h3>
                <p>A comforting and creamy coffee beverage with a smooth espresso base.</p>
                <a href ="#" class="btn">add to cart</a>
                <span class= "price">Rs.350.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src = ".\im8.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Chocalate Cake</h3>
                <p>A rich and indulgent dessert with layers of moist chocolate cake and luscious chocolate frosting.</p>
                <a href ="#" class="btn">add to cart</a>
                <span class= "price">Rs.500.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src = ".\im5.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Croissant</h3>
                <p>A buttery and flaky pastry that is perfect for a breakfast treat or a light snack.</p>
                <a href ="#" class="btn">add to cart</a>
                <span class= "price">Rs.150.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src = ".\im6.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Creme Brulee</h3>
                <p>A decadent and creamy dessert with a perfectly caramelized sugar crust</p>
                <a href ="#" class="btn">add to cart</a>
                <span class= "price">Rs.300.00</span>
            </div>
        </div>
    </div>

 </section>
 <!--about section ends-->

 <!--review section starts-->
 <section class="review" id="review">
    <h3 class="sub-heading">customer's review</h3>
    <h1 class="heading">what they say</h1>
 <div class="review-slider">
    <div class="swiper-wrapper">

     <div class="slide">
        <i class="fas fa-quote-right"></i> 
        <div class="user">
            <img src=".\im11.png" alt="">
            <div class="user-info">
                <h3>Chathurika Lakshani</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>    
                </div>
            </div>
            <p>I recently tried the lattes at Beans Cafe, and I must say they were exceptional. The baristas really know their craft and created 
                the perfect balance of rich espresso and creamy milk. The lattes were beautifully presented with latte art on top, adding an extra 
                touch of elegance. The flavor was smooth and robust, leaving a pleasant aftertaste. The atmosphere of the cafe itself was cozy and inviting, 
                making it the perfect place to enjoy a delicious latte. I highly recommend trying the lattes at Beans Cafe if you're a coffee lover!</p>
        </div>

        <div class="slide">
        <i class="fas fa-quote-right"></i> 
        <div class="user">
            <img src=".\im12.png" alt="">
            <div class="user-info">
                <h3>Anura Fernando</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>    
                </div>
            </div>
            <p>Beans Cafe is not only great for coffee, but their cakes are also a delightful treat. I've tried a variety of their cakes, 
                from classic chocolate to fruity options, and they have never disappointed. The cakes are moist, flavorful, and beautifully decorated. 
                Each slice is a work of art, and the attention to detail is evident. Whether you're celebrating a special occasion or simply indulging in a sweet treat,
                 Beans Cafe's cakes are a must-try. Pair it with a cup of their coffee, and you have the perfect combination for a satisfying dessert experience.</p>
        </div>

        <div class="slide">
        <i class="fas fa-quote-right"></i> 
        <div class="user">
            <img src=".\im13.png" alt="">
            <div class="user-info">
                <h3>Pushpa Dharshani</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>    
                </div>
            </div>
            <p>Beans Cafe knows how to make a fantastic Americano. I'm a fan of strong coffee, and their Americanos hit the mark perfectly. 
                The espresso shots were expertly pulled, resulting in a bold and invigorating cup of coffee. The Americanos had a rich aroma and a 
                full-bodied flavor that kept me coming back for more. The staff was friendly and knowledgeable, always willing to offer recommendations 
                and answer any questions about their coffee. If you're in need of a pick-me-up, I highly recommend grabbing an Americano from Beans Cafe.</p>
        </div>
    </div>

 </section>
 <!--review section ends-->

 <!--order section starts-->
 <section class="order" id="order">
    
    <h3 class="sub-heading">Order now</h3>
    <h1 class="heading">free and fast</h1>

    
     

       <!-- <div class="inputBox">
            <div class="input">
                <span>Your name</span>
                <input type="text" placeholder="Enter your name">
            </div>
            <div class="input">
                <span>Your name</span>
                <input type="number" placeholder="Enter your number">
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Your order</span>
                <input type="text" placeholder="Enter food name">
            </div>
            <div class="input">
                <span>Additional food</span>
                <input type="test" placeholder="extra with food">
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>how much</span>
                <input type="number" placeholder="How many Orders">
            </div>
            <div class="input">
                <span>Date and Time</span>
                <input type="datetime-local">
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Your address</span>
                <textarea name="" placeholder="enter your address"  id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
                <span>Your message</span>
                <textarea name="" placeholder="enter your message"  id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <input type="submit" value="order now" class="link-btn">

    </form>

 </section>-->

 <!--order section ends-->

<!-- Order section starts-->
<section class = "contact" id="contact">
    <h1 class = "heading">make order</h1>
    <form action = "index.php" method="post">
        <?php
           if(isset($message)){
             echo '<p class="message">' .$message. '</p>';
           
         }
        ?>
        <span>your name:</span>
        <input type="text" name="name" placeholder = "enter your name" class="box" required>
        <span>your email:</span>
        <input type="email" name="email" placeholder = "enter your email" class="box" required>
        <span>your number:</span>
        <input type="number" name="number" placeholder = "enter your number" class="box">
        <span>Order:</span>
        <input type="datetime-local" name="date" class="box" required>
        <input type="submit" value="make order" name="submit" class="link-btn">
    </form>
 </section>

<!-- Order section ends-->


 <!--footer section starts-->
 <section class="footer">
    <div class="box-container">
    <div class="box">
        <h3>Locations</h3>
        <a href="#">Colombo 5</a>
        <a href="#">Kaduwela</a>
    </div>

    <div class="box">
        <h3>Quick links</h3>
        <a href="#">Home</a>
        <a href="#">Dishes</a>
        <a href="#">About</a>
        <a href="#">Menu</a>
        <a href="#">Reviews</a>
        <a href="#">Orders</a>
    </div>


    <div class="box">
        <h3>Contact info</h3>
        <a href="#">071-7345678</a>
        <a href="#">No 23/A Bans Str,Colombo 05, Sri Lanka</a>
        <a href="#">No 444, Walivita ,Kaduwela, Sri Lanka</a>
        <a href="#">thebeans@gmail.com</a>
    </div>



    <div class="box">
        <h3>Follow us</h3>
        <a href="#">Instagram</a>
        <a href="#">facebook</a>
        <a href="#">Whatsapp</a>
        <a href="#">Tik tok</a>
    </div>
</div>
    <div class="credit"> copyright @2023 by<span>adminthebeans</span></div>

  </section>
 <!--footer section ends-->

 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
 <script src="./Old.js"></script>
</body>
</html>
