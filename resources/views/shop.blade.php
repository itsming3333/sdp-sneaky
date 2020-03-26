<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="LogoSneaky.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/c39198c184.js" crossorigin="anonymous"></script>
    <style>
    .swiper-container {
        width: 98%;
        height: 25%;
    }
    .tulisan{
        color: grey;
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 20px;
    }
    .tulisan-h4{
        font-family: 'Roboto Condensed', sans-serif;  
        text-align: justify;
        color: #404d4d;
    }
    .tulisan-angka{
        color: grey;
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 18px;
    }
    #popup{
        z-index:99;
        margin-top: -50px;
    }
    </style>
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
            $('#box,#popup').mouseenter(function(){
                $('#popup').show();
            });
            $('#box,#popup').mouseleave(function(){
                $('#popup').hide();
            });
            $('.tabs').tabs();
            $('.dropdown-trigger').dropdown();      
        });
    </script>
</head>
<body>
    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="#!">Name</a></li>
        <li><a href="#!">Price</a></li>
    </ul>
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
    <!-- isi shop -->
    <div class="container" style="max-width: 1920px; width: 80%;">
        <div class="row">
            <div class="col s12" style="background-color: #e0e0e0;">
                <h3>Shop Display</h3>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <div class="row">
                    <div class="col s12">
                        <h4 class="tulisan-h4">Category</h4>
                        <hr>
                        <a href="" class="tulisan">MEN</a> <br>
                        <a href="" class="tulisan">WOMEN</a> <br>
                        <a href="" class="tulisan">KIDS</a> <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <h4 class="tulisan-h4">BRAND</h4>
                        <hr>
                        <a href="" class="tulisan">Adidas</a> <br>
                        <a href="" class="tulisan">Bata</a><br>
                        <a href="" class="tulisan">KW</a><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <h4 class="tulisan-h4">SIZE</h4>
                        <hr>
                        <a class="waves-effect waves-light btn-small grey lighten-2" style="color: black; font-weight: bold;">13</a>
                    </div>
                </div>
            </div>
            <div class="col s8 offset-s1">
                <div class="row">
                    <div class="col s3">
                        <span class="tulisan">
                            <a class='dropdown-trigger btn grey lighten-2' href='#' data-target='dropdown1' style="color: black;margin-top: 20px;">SORT BY</a>
                        </span>
                    </div>
                    <div class="col s3 offset-s6" style="margin-top: 20px;">
                        <a href="" class="tulisan-angka">1</a>
                        <a href="" class="tulisan-angka">2</a>
                        <a href="" class="tulisan-angka">3</a>
                        <a href="" class="tulisan-angka">4</a>
                        <a href="" class="tulisan-angka">5</a>
                    </div>
                </div>
                <hr style="margin-top: -5px;">
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="col s4">
                                <div class="row" id="box">
                                    <img src="{{asset('assets/images/SwiperFoto/download.jpg')}}" alt="">
                                    <center>
                                        <div id="popup">
                                            <a class="waves-effect waves-light btn indigo" style="width: 170px;">SHOP NOW</a> <a class="waves-effect waves-light btn indigo" style="width: 70px;"><i class="material-icons">star</i></a>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dibawah ini footer -->
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
                        <h4 style="font-family: 'Roboto Condensed', sans-serif;">FOLLOW US.</h3>
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
                    <p class="copyright col s12">© 2020 Sneaky . All Rights Reserved.</p>
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
</body>
</html>