<!DOCTYPE html>
<html class="no-js" lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <title>Surfside Media</title>

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/theme/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
</head>

<body>
<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li>
                                <a class="language-dropdown-active" href="#"> <i class="fi-rs-world')}}"></i> English <i
                                        class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li><a href="#"><img src="{{asset('assets/imgs/theme/flag-fr.png')}}" alt="">Français</a>
                                    </li>
                                    <li><a href="#"><img src="{{asset('assets/imgs/theme/flag-dt.png')}}" alt="">Deutsch</a>
                                    </li>
                                    <li><a href="#"><img src="{{asset('assets/imgs/theme/flag-ru.png')}}" alt="">Pусский</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Get great devices up to 50% off <a href="shop.html">View details</a></li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today <a href="shop.html">Shop now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        @auth()
                            <ul>
                                <li><i class="fi-rs-key"></i> {{Auth::user()->name}} /
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <a href="{{route('logout')}}"
                                           onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                    </form>
                                </li>
                            </ul>
                        @else

                            <ul>
                                <li><i class="fi-rs-key"></i><a href="{{route('login')}}">Log In </a> / <a
                                        href="{{route('register')}}">Sign Up</a></li>
                            </ul>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="/"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                </div>
                <div class="header-right">
                    @livewire('header-search-component')
                    <div class="header-action-right">
                        <div class="header-action-2">
                            @livewire('wishlist-component')
                            @livewire('cart-icon-component')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.html"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categori-button-active" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-large">
                            <ul>
                                <li class="has-children">
                                    <a href="shop.html"><i class="surfsidemedia-font-dress"></i>Women's Clothing</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Hot & Trending</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Dresses</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Blouses
                                                                    & Shirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Hoodies
                                                                    & Sweatshirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Women's
                                                                    Sets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suits
                                                                    & Blazers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Bodysuits</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Tanks
                                                                    & Camis</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Coats
                                                                    & Jackets</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Bottoms</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Leggings</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Skirts</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Shorts</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Jeans</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Pants
                                                                    & Capris</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Bikini
                                                                    Sets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Swimwear</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="{{asset('assets/imgs/banner/menu-banner-2.jpg')}}"
                                                         alt="menu_banner1">
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="header-banner2">
                                                    <img src="{{asset('assets/imgs/banner/menu-banner-3.jpg')}}"
                                                         alt="menu_banner2">
                                                    <div class="banne_info">
                                                        <h6>15% Off</h6>
                                                        <h4>Hot Deals</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-children">
                                    <a href="shop.html"><i class="surfsidemedia-font-tshirt"></i>Men's Clothing</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Jackets & Coats</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Down
                                                                    Jackets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Jackets</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Parkas</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Faux
                                                                    Leather Coats</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Trench</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wool
                                                                    & Blends</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Vests
                                                                    & Waistcoats</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Leather
                                                                    Coats</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Suits & Blazers</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Blazers</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suit
                                                                    Jackets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suit
                                                                    Pants</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suits</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Vests</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Tailor-made
                                                                    Suits</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="{{asset('assets/imgs/banner/menu-banner-4.jpg')}}"
                                                         alt="menu_banner1">
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-children">
                                    <a href="shop.html"><i class="surfsidemedia-font-smartphone"></i> Cellphones</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Hot & Trending</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Cellphones</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">iPhones</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Refurbished
                                                                    Phones</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Mobile
                                                                    Phone</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Mobile
                                                                    Phone Parts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Phone
                                                                    Bags & Cases</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Communication
                                                                    Equipments</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Walkie
                                                                    Talkie</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Accessories</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Screen
                                                                    Protectors</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wire
                                                                    Chargers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wireless
                                                                    Chargers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Car
                                                                    Chargers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Power
                                                                    Bank</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Armbands</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Dust
                                                                    Plug</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Signal
                                                                    Boosters</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="{{asset('assets/imgs/banner/menu-banner-5.jpg')}}"
                                                         alt="menu_banner1">
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="header-banner2">
                                                    <img src="{{asset('assets/imgs/banner/menu-banner-6.jpg')}}"
                                                         alt="menu_banner2">
                                                    <div class="banne_info">
                                                        <h6>15% Off</h6>
                                                        <h4>Hot Deals</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer & Office</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer Electronics</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-diamond"></i>Jewelry & Accessories</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother & Kids</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a></li>
                                <li>
                                    <ul class="more_slide_open" style="display: none;">
                                        <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Beauty, Health</a>
                                        </li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Bags and Shoes</a>
                                        </li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-diamond"></i>Consumer
                                                Electronics</a></li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Automobiles &
                                                Motorcycles</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="more_categories">Show more...</div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                <li><a class="active" href="/">Home </a></li>
                                {{--                                <li><a href="about.html">About</a></li>--}}
                                <li><a href="{{route('shop')}}">Shop</a></li>
                                {{--                                <li><a href="contact.html">Contact</a></li>--}}
                                @auth()
                                    <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                        @if(Auth::user()->utype == 'ADM')
                                            <ul class="sub-menu">
                                                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                                <li><a href="{{route('admin.product')}}">Products</a></li>
                                                <li><a href="{{route('admin.categories')}}">Categories</a></li>
                                                <li><a href="{{route('articles.index')}}">Articles</a></li>
                                                <li><a href="{{route('images.index')}}">images</a></li>
                                                <li><a href="{{route('admin.home.slider')}}">manage Slider</a></li>
                                                <li><a href="{{route('admin.home.setting')}}">Setting</a></li>
                                            </ul>
                                        @else
                                            <ul class="sub-menu">
                                                <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>

                                            </ul>

                                        @endif
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="hotline d-none d-lg-block">
                    <p><i class="fi-rs-smartphone"></i><span>Toll Free</span></p>
                </div>
                <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.php">
                                <img alt="Surfside Media" src="{{asset('assets/imgs/theme/icons/icon-heart.svg')}}">
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="cart.html">
                                <img alt="Surfside Media" src="{{asset('assets/imgs/theme/icons/icon-cart.svg')}}">
                                <span class="pro-count white">2</span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="product-details.html"><img alt="Surfside Media"
                                                                                src="{{asset('assets/imgs/shop/thumbnail-3.jpg')}}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                                            <h3><span>1 × </span>$800.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="product-details.html"><img alt="Surfside Media"
                                                                                src="{{asset('assets/imgs/shop/thumbnail-4.jpg')}}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="product-details.html">Macbook Pro 2022</a></h4>
                                            <h3><span>1 × </span>$3500.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$383.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="cart.html">View cart</a>
                                        <a href="shop-checkout.php">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="index.html"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Search for items…">
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <div class="main-categori-wrap mobile-header-border">
                    <a class="categori-button-active-2" href="#">
                        <span class="fi-rs-apps"></span> Browse Categories
                    </a>
                    <div class="categori-dropdown-wrap categori-dropdown-active-small">
                        <ul>
                            <li><a href="shop.html"><i class="surfsidemedia-font-dress"></i>Women's Clothing</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-tshirt"></i>Men's Clothing</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-smartphone"></i> Cellphones</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer & Office</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer Electronics</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother & Kids</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a></li>
                        </ul>
                    </div>
                </div>
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="index.html">Home</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="shop.html">shop</a>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Our
                                Collections</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Women's
                                        Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Dresses</a></li>
                                        <li><a href="product-details.html">Blouses & Shirts</a></li>
                                        <li><a href="product-details.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="product-details.html">Women's Sets</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Men's
                                        Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Jackets</a></li>
                                        <li><a href="product-details.html">Casual Faux Leather</a></li>
                                        <li><a href="product-details.html">Genuine Leather</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Technology</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Gaming Laptops</a></li>
                                        <li><a href="product-details.html">Ultraslim Laptops</a></li>
                                        <li><a href="product-details.html">Tablets</a></li>
                                        <li><a href="product-details.html">Laptop Accessories</a></li>
                                        <li><a href="product-details.html">Tablet Accessories</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="blog.html">Blog</a>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                            <ul class="dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a href="contact.html"> Our location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="login.html">Log In </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="register.html">Sign Up</a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="#">(+1) 0000-000-000 </a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
            </div>
        </div>
    </div>
</div>

<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span> All Articles</span>
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">All images</div>
                                    <div class="col-md-6">
                                        <div class="col-md-6">
{{--                                            <a href="{{route('images.create')}}" class="btn btn-success float-end">add new articles</a>--}}

                                            <button type="button" class="btn-primary button x-small " data-toggle="modal" data-target="#exampleModal">
                                                اضافة صور
                                            </button>
                                        </div>                          </div>
                                </div>

                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>image</th>
                                        <th>article</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i=0;
                                    @endphp
                                    @foreach($images as $image)
                                        <tr>
                                            <td>{{++$i}}</td>

                                            <td><img src="{{asset('assets/uploads/articles')}}/{{$image->image}}" alt="{{$image->title}}" width="65"></td>

                                            <td>{{$image->article->title}}</td>
                                            <td>
                                                {{--                                   <a href="{{route('articles.edit',[$article->id])}}" class="btn btn-secondary">Edit</a>--}}
                                                {{--                                                <a href="#" class="btn btn-danger" onclick="deleteConfirmation({{$category->id}})" style="margin-left:20px; ">Delete</a>--}}
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                        data-target="#edit{{ $image->id }}"
                                                        title="edit">ُEdit</button>

                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#delete{{ $image->id }}"
                                                        title="deleted">Delete</button>
                                            </td>
                                        </tr>

                                        <!-- edit_modal_Grade -->
                                        <div class="modal fade" id="edit{{ $image->id }}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                            id="exampleModalLabel">
                                                            edit Articles
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- edit_form -->
                                                        <form action="{{ route('images.update', 'test') }}" method="post">
                                                            {{ method_field('patch') }}
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col">
{{--                                                                    <embed src="{{ URL::asset('assets/uploads/articles/'.$image->image) }}"   height="150px" width="100px"><br><br>--}}

                                                                    <div class="form-group">
                                                                        <label for="image">المرفقات : <span class="text-danger">*</span></label>
                                                                        <input type="file" value="{{$image->image}}"  name="image">
                                                                    </div>
                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{$image->id}}">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="inputName"
                                                                           class="control-label">articles</label>
                                                                    <select name="article_id" class="custom-select">
                                                                        <!--placeholder-->
                                                                        <option
                                                                            value="{{$image->article->id}}">
                                                                            {{$image->article->title}}
                                                                        </option>
                                                                        @foreach ($articles as $article)
                                                                            <option value="{{ $article->id }}"> {{ $article->title }}

                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div><br>

                                                            <br><br>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">close</button>
                                                                <button type="submit"
                                                                        class="btn btn-success">submit</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

{{--                                        <!-- delete_modal_Grade -->--}}
{{--                                        <div class="modal fade" id="delete{{ $article->id }}" tabindex="-1" role="dialog"--}}
{{--                                             aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                                            <div class="modal-dialog" role="document">--}}
{{--                                                <div class="modal-content">--}}
{{--                                                    <div class="modal-header">--}}
{{--                                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"--}}
{{--                                                            id="exampleModalLabel">--}}
{{--                                                            deleted Articles--}}
{{--                                                        </h5>--}}
{{--                                                        <button type="button" class="close" data-dismiss="modal"--}}
{{--                                                                aria-label="Close">--}}
{{--                                                            <span aria-hidden="true">&times;</span>--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="modal-body">--}}
{{--                                                        <form action="{{ route('articles.destroy', 'test') }}"--}}
{{--                                                              method="post">--}}
{{--                                                            {{ method_field('Delete') }}--}}
{{--                                                            @csrf--}}
{{--                                                            can you deleted Articles ?--}}
{{--                                                            <input id="id" type="hidden" name="id" class="form-control"--}}
{{--                                                                   value="{{ $article->id }}">--}}
{{--                                                            <div class="modal-footer">--}}
{{--                                                                <button type="button" class="btn btn-secondary"--}}
{{--                                                                        data-dismiss="modal">close</button>--}}
{{--                                                                <button type="submit"--}}
{{--                                                                        class="btn btn-success">submit</button>--}}
{{--                                                            </div>--}}
{{--                                                        </form>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}




                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                                add new images
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form class=" row mb-30" action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="repeater">
                                                        <div data-repeater-list="List_Classes">
                                                            <div data-repeater-item>
                                                                <div class="row">

                                                                    <div class="col">
                                                                        <label for="Name"
                                                                               class="mr-sm-2">images
                                                                            :</label>
                                                                        <input type="file" accept="application/pdf/jpg/png" name="image" required>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="inputName"
                                                                   class="control-label">articles</label>
                                                            <select name="article_id" class="custom-select">
                                                                <!--placeholder-->
                                                                <option value="" selected
                                                                        disabled>articles
                                                                </option>
                                                                @foreach ($articles as $article)
                                                                    <option value="{{ $article->id }}"> {{ $article->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">الغاء</button>
                                                            <button type="submit"
                                                                    class="btn btn-success">تأكيد</button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>


                                    </div>

                                </div>

                            </div>



                        </div>


                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


{{--<div class="modal" id="deleteConfirmation">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-body pb-30 pt-30">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12 text-center">--}}
{{--                        <h4 class="pb-3">Are you sure want to delete record?</h4>--}}
{{--                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">Cancel</button>--}}
{{--                        <button type="button" class="btn btn-danger" onclick="deleteCategory()">Delete</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<section class="section-padding footer-mid">
    <div class="container pt-15 pb-20">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="widget-about font-md mb-md-5 mb-lg-0">
                    <div class="logo logo-width-1 wow fadeIn animated">
                        <a href="index.html"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                    </div>
                    <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                    <p class="wow fadeIn animated">
                        <strong>Address: </strong>562 Wellington Road
                    </p>
                    <p class="wow fadeIn animated">
                        <strong>Phone: </strong>+1 0000-000-000
                    </p>
                    <p class="wow fadeIn animated">
                        <strong>Email: </strong>contact@surfsidemedia.in
                    </p>
                    <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                    <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                        <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                        <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                        <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                        <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                        <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3">
                <h5 class="widget-title wow fadeIn animated">About</h5>
                <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-2  col-md-3">
                <h5 class="widget-title wow fadeIn animated">My Account</h5>
                <ul class="footer-list wow fadeIn animated">
                    <li><a href="my-account.html">My Account</a></li>
                    <li><a href="#">View Cart</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="#">Track My Order</a></li>
                    <li><a href="#">Order</a></li>
                </ul>
            </div>

        </div>
    </div>
</section>
<div class="container pb-20 wow fadeIn animated mob-center">
    <div class="row">
        <div class="col-12 mb-20">
            <div class="footer-bottom"></div>
        </div>
        <div class="col-lg-6">
            <p class="float-md-left font-sm text-muted mb-0">
                <a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-conditions.html">Terms &
                    Conditions</a>
            </p>
        </div>
        <div class="col-lg-6">
            <p class="text-lg-end text-start font-sm text-muted mb-0">
                &copy; <strong class="text-brand">SurfsideMedia</strong> All rights reserved
            </p>
        </div>
    </div>
</div>
</footer>
<!-- Vendor JS-->

<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/slick.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.syotimer.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/wow.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/plugins/select2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>
<script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/images-loaded.js')}}"></script>
<script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
<script src="{{asset('assets/js/plugins/scrollup.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.vticker-min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.theia.sticky.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.elevatezoom.js')}}"></script>
<!-- Template  JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/shop.js')}}"></script>
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@stack('scripts')
</body>

</html>
