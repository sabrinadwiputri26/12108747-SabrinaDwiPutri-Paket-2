<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Home Page</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

<div class="header-1">

    <a href="#" class="logo"> <i class="fas fa-utensils"></i> Allfood </a>

    <h3 class="call"> <i class="fas fa-phone"></i> call now : +123-456-7890 </h3>

</div>

<div class="header-2">

    <div id="menu" class="fas fa-hamburger"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#chef">chef</a></li>
            <li><a href="#speciality">speciality</a></li>

        </ul>
    </nav>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-pinterest"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-twitter"></a>
    </div>

</div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h1>welcome <span>Allfood</span> lovers</h1>
    <p>Allfood Sebagai Minimarket yang mempunyai banyak gerai di Indonesia meluncurkan Website untuk kemudahan dan kenyamanan konsumen dalam berbelanja berbagai makanan.</p>
    <a href="/login"><button class="btn">Login</button></a>
</div>

<div class="shape"></div>

</section>

<!-- home section ends -->

<!-- chef section starts  -->

<section class="chef" id="chef">

<h1 class="heading"> <span> expert chefs </span> </h1>

<div class="box-container">

    <div class="box">
        <img src="{{asset('assets/img/chef1.jpg')}}" alt="">
        <div class="info">
            <h3>arnold wuf</h3>
            <span>head chef</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('assets/img/chef2.jpg')}}" alt="">
        <div class="info">
            <h3>john deo</h3>
            <span>head chef</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('assets/img/chef3.jpg')}}" alt="">
        <div class="info">
            <h3>fahru pian</h3>
            <span>head chef</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('assets/img/chef4.jpg')}}" alt="">
        <div class="info">
            <h3>heri bian</h3>
            <span>head chef</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

</div>

</section>

<!-- chef section ends -->

<!-- speciality section starts  -->

<section class="speciality" id="speciality">

<h1 class="heading"> <span> our speciality </span> </h1>

<div class="box-container">

    <div class="box">
        <img src="{{asset('assets/img/img1.jpg')}}" alt="">
        <div class="info">
            <h3>tasty hamburger</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('assets/img/img2.jpg')}}" alt="">
        <div class="info">
            <h3>fresh bearkfast</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('assets/img/img3.jpg')}}" alt="">
        <div class="info">
            <h3>veg sandwich</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>



</div>

<div class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <h3>fast delivery</h3>
        <p>Fast package delivery can now be done via Paxel Sameday Delivery, with only a flat shipping costs, packages can be sent quickly and safely.</p>
    </div>

    <div class="icons">
        <i class="fas fa-tags"></i>
        <h3>heavy discounts</h3>
        <p>Happy hour discounts are old hat for bar owners: Lowering prices on food and drink is a staple for bringing in the after-work crowd</p>
    </div>

    <div class="icons">
        <i class="fas fa-hand-holding-usd"></i>
        <h3>money returns</h3>
        <p>A return, also known as a financial return, in its simplest terms, is the money made or lost on an investment over some period of time. </p>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <h3>24 x 7 support</h3>
        <p>What does 24/7 support mean? 24/7 customer support means customers can get help and find answers to questions as soon as they come up—24/7.</p>
    </div>

</div>

</section>

<!-- speciality section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <h1>newsletter</h1>
    <p>subscribe for latest updates</p>    
    <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
    </form>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer">

    <img src="images/shape-top.png" alt="">

    <div class="box-container">

        <div class="box">
            <h3 class="heading"> <span>why choose us?</span> </h3>
            <p>Aplikasi layanan pesan antar makanan online no 1 di Indonesia dengan ratusan ribu restoran terdaftar. Pesan makanan online 24 jam, delivery order sekarang!</p>
        </div>

        <div class="box">
            <h3 class="heading"> <span>locations</span> </h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">france</a>
            <a href="#">russia</a>
        </div>

        <div class="box">
            <h3 class="heading"> <span>quick links</span> </h3>
            <a href="#">home</a>
            <a href="#">chef</a>
            <a href="#">speciality</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3 class="heading"> <span>contact us</span> </h3>
            <p> <i class="fas fa-map-marker-alt"></i> mumbai, india 400104 </p>
            <p> <i class="fas fa-envelope"></i> xyx@gmail.com </p>
            <p> <i class="fas fa-globe"></i> www.yourwebsite.com </p>
        </div>

    </div>

<h1 class="credit"> created by <span>sabrina dpu</span> | all rights reserved! </h1>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>


</body>
</html>