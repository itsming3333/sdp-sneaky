<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="LogoSneaky.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Shop</title>
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
    .icon-brow{
        color: #cfcfcf;
    }
    .harga-produk{
        color: #02075d;
        font-weight: bold;
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 23px;
    }
    .stok-produk{
        color: #1821a1;
        font-weight: bold;
        font-family: 'Roboto Condensed', sans-serif;
    }
    .input-field input:focus{
        color: #000 !important;
    }
    .input-field input:focus {
        border-bottom: 1px solid #cfcfcf !important;
        box-shadow: 0 1px 0 0 #cfcfcf !important;
    }
    .tabs .indicator{
        background-color: #cfcfc4;
    }
    .tabs .tab a:focus, .tabs .tab a:focus.active{
        background: transparent;
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
            $('.tabs').tabs();      
        });
    </script>
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
    <!-- isi detail shop -->
    <div class="container" style="max-width: 1920px; width: 80%;">
        <div class="row">
            <div class="col s12" style="background-color: #e0e0e0;">
                <h3>Nama Produk Disini</h3>
            </div>
        </div>
        <div class="row">
            <div class="col s12 product-view">
                <div class="row">
                    <div class="col s6" style="margin-top: 200px;">
                        <img src="SwiperFoto/download.jpg" alt="">
                    </div>
                    <div class="col s6">
                        <div class="row">
                            <div class="col s6" style="margin-top: 5px;">
                                <span class="harga-produk">IDR 1,799,000</span>
                            </div>
                            <div class="col s6" style="margin-top: 10px;">
                                Avaibility : <span class="stok-produk">(kondisi di database)</span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col s12">
                                <span class="size">
                                    SIZE: <span class="size-pilih"> * </span> <!-- ini ukuran dari kotak dibawah -->
                                </span>
                            </div>
                        </div>
                        <div class="row"> <!-- ini ukuran dari data base -->
                            <div class="col s12">
                                <a class="waves-effect waves-light btn-small grey lighten-2" style="color: black; font-weight: bold;">13</a>
                                <a class="waves-effect waves-light btn-small grey lighten-2" style="color: black; font-weight: bold;">12</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="icon_prefix" type="number" class="validate " style="text-align: center;" min="0">
                            </div>
                            <div class="col s4">
                                <a class="waves-effect waves-light btn grey lighten-2 proceed" style="margin-top: 20px;">Add To Cart</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col s12">
                                <span class="tulisan">ini isi kategorinya</span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col s12">
                                <span class="tulisan">Brand : </span><!-- image logo brand -->
                                <br>
                                <span class="tulisan">Product Code : </span><!-- database produk code -->
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col s6">
                                <i class="fa fa-star"></i><span class="tulisan">Add To Wishlist</span>
                            </div>
                            <div class="col s6">
                                <span class="tulisan">Share this Product &nbsp</span><i class="fa fa-facebook"></i>&nbsp&nbsp<i class="fa fa-instagram"></i>&nbsp&nbsp<i class="fa fa-twitter"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s8">
                    <ul class="tabs">
                        <li class="tab col s4"><a href="#test1" style="color:#02075d;font-weight: bold;">Product Description</a></li>
                        <li class="tab col s4"><a href="#test2" style="color:#02075d;font-weight: bold;">Size & Fit</a></li>
                        <li class="tab col s4"><a href="#test3" style="color:#02075d;font-weight: bold;">Riview</a></li>
                      </ul>
                </div>
                <!-- ini data database -->
                <div id="test1" class="col s12">Test 1</div>
                <div id="test2" class="col s12">Test 2</div>
                <div id="test3" class="col s12">Test 3</div>
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