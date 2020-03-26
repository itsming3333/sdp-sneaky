<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Home</title>
    <!-- materialize -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- swiper  -->
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <!-- navbar -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/swiper.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/cart.css')}}">
    <script src="https://kit.fontawesome.com/c39198c184.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('a[href="#search"]').on('click', function(event) {                    
                $('#search').addClass('open');
                $('#search > form > input[type="search"]').focus();
            });            
            $('#search, #search button.close').on('click keyup', function(event) {
                if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                    $(this).removeClass('open');
                }
            });            
        });
    </script>
    <style>
    .swiper-container {
        width: 100%;
        height: 75%;
    }
    .swiper2{
        width: 100%;
        height: 30%;
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .desc{
        font-family: 'Roboto Condensed', sans-serif;  
        font-size: 16px;
        text-align: justify;
        color: #404d4d;
    }
    .juduldesc{
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        color: #404d4d;
    }
    </style>
</head>
<body>
    <div id="search"> 
        <form role="search" id="searchform" action="/search" method="get">
            <input value="" name="q" type="search" placeholder="Type to search"/>
        </form>
    </div>
    <div class='menu'>
        <span class='toggle'>
            <i></i>
            <i></i>
            <i></i>
        </span>
        <div class='menuContent'>
            <ul>
            <li>Home</li>
            <li><a href="#search" style="text-decoration: none; color: black;">Search</a></li>
            <li>Login</li>
            <li>Contact</li>
            <li>About us</li>
            </ul>
        </div>
    </div>
    <div class="swiper-container swiper1">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url({{asset('assets/images/SwiperFoto/1.jpeg')}})"></div>
            <div class="swiper-slide" style="background-image:url({{asset('assets/images/SwiperFoto/2.jpeg')}})"></div>
            <div class="swiper-slide" style="background-image:url({{asset('assets/images/SwiperFoto/3.jpeg')}})"></div>
            <div class="swiper-slide" style="background-image:url({{asset('assets/images/SwiperFoto/4.jpeg')}})"></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button"></div>
        <div class="swiper-button-prev swiper-button"></div>
    </div>
    <!-- isi -->
    <h2 style="text-align:center;font-family: 'Roboto Condensed', sans-serif;font-weight: bolder;"> Latest </h2>
    <div class="swiper-container swiper2">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="{{asset('assets/images/SwiperFoto/download.jpg')}}" alt=""><br><span>Air Jordan</span></div>
          <div class="swiper-slide"><img src="{{asset('assets/images/SwiperFoto/download.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/images/SwiperFoto/download.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/images/SwiperFoto/download.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/images/SwiperFoto/download.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/images/SwiperFoto/download.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/images/SwiperFoto/download.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/images/SwiperFoto/download.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/images/SwiperFoto/download.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('assets/images/SwiperFoto/download.jpg')}}" alt=""></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <div class="container" style="margin-top: 3%;">
        <div class="row">
            <div class="col s12">
                <hr>
                <center><span class="juduldesc"> OUR DAILY DOSE: ORIGINALS SNEAKERS SHOES ONLINE STORE </span></center>
                <p class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non perspiciatis necessitatibus quas saepe molestiae nemo laboriosam esse ut aliquam, perferendis sit consectetur voluptates explicabo porro natus, molestias quaerat provident. Nihil.</p>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <hr>
                <center><span class="juduldesc"> JUAL SEPATU SNEAKERS ONLINE ORIGINALS TERLENGKAP </span></center>
                <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sed, voluptatum laudantium mollitia illum optio, tempore obcaecati alias ad a porro sapiente dicta numquam voluptatibus? Quos quisquam reprehenderit possimus! Deleniti.</p>    
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="footer">
                <div class="row">
                    <div class="col s3">
                        <img src="{{asset('assets/images/LogoSneaky.png')}}" alt="logo" srcset="">
                    </div>
                    <div class="col s3 offset-s1 kaki1">
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms & Condition</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col s4 offset-s1 kaki2">
                        <h4 style="font-family: 'Roboto Condensed', sans-serif;">FOLLOW US.</h4>
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f fa-3x"></i><span style="margin-left:25px;"> SneakyIndonesia </span></a></li>
                            <li><a href=""><i class="fab fa-twitter fa-3x"></i><span style="margin-left:6px;"> @SneakyIndones </span></a></li>
                            <li><a href=""><i class="fab fa-instagram fa-3x" aria-hidden="true"></i><span style="margin-left:11px;"> Sneaky_Indonesia </span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <p class="copyright col s12">© 2020 Sneaky. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        $('.toggle').on('click', function() {
            $('.menu').toggleClass('active');
        });
    </script>
    <script type="text/javascript" src="{{asset('assets/js/swiper.min.js')}}"></script>
    <script>
        var swiper = new Swiper('.swiper1', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
    </script>
    <script>
        var swipers = new Swiper('.swiper2', {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
        });
      </script>
</body>
</html>