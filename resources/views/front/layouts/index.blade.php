@extends('front.master')
@section('content')
        <section class="slider-two-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 offset-lg-3">
                        <div class="slider-two-slide">
                            @foreach ($sliders as $sliders )
                            <div class="single-slide" style=" background: url('{{asset($sliders->background_image)}}') no-repeat center / cover;">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-lg-5 d-none d-lg-block">
                                        <div class="banner-image">
                                            <img src="{{asset($sliders->banner)}}" alt="banner">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 ">
                                       <div class="banner-content">
                                            <h1>{{$sliders->heading1}}</h1>
                                            <h2>{{$sliders->heading2}}</h2>
                                            <p>{{$sliders->title}}</p>
                                            <a href="#" class="banner-btn">Shop Now</a>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider two area end here  -->
        <!-- Product Categories area start here  -->
        <section class="brands-area brands-v2 ">
            <div class="container">
                <div class="section-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-section">
                                <h2 class="section-title">Our Brands</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-lsit brand-slide">

                                @foreach ($brands as $x )
                                    
                               
                                <div class="single-barnd d-flex justify-content-center align-items-center">
                                    <a href="#">
                                        <figure class="barnd-thumbnail">
                                            <img src="{{asset($x->image)}}" alt="brand" />
                                        </figure>
                                    </a>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Categories area end here  -->
        <!-- Product Categories area start here  -->
        <section class="Product-categories-v2  mt-50">
            <div class="container">
                <div class="section-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-section">
                                <h2 class="section-title">Top Product Categories</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="categories-lsit categories-slide">
                                
                                @foreach ($info['top_category'] as $category)
                                <div class="single-categories">
                                    <a href="#">
                                        <figure class="categories-thumbnail">
                                            <img src="{{asset($category->image)}}" alt="categories" />
                                            <div class="overlay-content"><span class="categories-title">{{$category->name}}</span></div>
                                        </figure>
                                    </a>
                                    <span class="categories-name">{{$category->name}}</span>
                                    <a href="#" class="arrow-btn"><i class="fas fa-arrow-right"></i></a>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Categories area end here  -->
        <!-- offer area start here  -->
        <section class="offer-area mt-50">
            <div class="container">
                <div class="row">
                                       
                    @if($discounts)
                    
                        <div class="col-lg-6 col-md-6">
                            <div class="offer-big-banner">
                                <a href="#">
                                    <img class="banner-image" src="{{asset($discounts->bigoffer_image)}}" alt="offer images" />
                                </a>
                            </div>
                        </div>
                       
                    <div class="col-lg-6 col-md-6">
                        <div class="offer-small-banner mb-30">
                            <a href="#">
                                <img class="banner-image" src="{{asset($discounts->small_offer_top_image)}}" alt="offer images" />
                            </a>
                        </div>
                    
                        <div class="offer-small-banner">
                            <a href="#">
                                <img class="banner-image" src="{{asset($discounts->small_offer_bottom_image)}}" alt="offer images" />
                            </a>
                        </div>
                    </div>

                    @endif

                </div>
            </div>
        </section>
        <!-- offer area end here  -->
        <!-- Featured Product area start here  -->
        <section class="featured-product featured-two-v2 mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-wrap">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="top-section">
                                        <h2 class="section-title">Featured Product</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-slide">
                                <div class="featured-list m-b-30">
                                    <div class="row">
                                  
                                        
                                    @foreach (  $info['featured_product'] as $product)
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="grid-single-poduct text-center">
                                                <div class="product-front">
                                                    <figure class="product-thumbnail ">
                                                        <img src="{{asset($product->image1)}}" alt="product"  />
                                                        <span class="off bg-color">{{$product->discount}}</span>
                                                      
                                                        @if($product->new_product) <span class="new">new</span> @endif
                                                    </figure>
                                                    <div class="product-info bg-white">
                                                        <h2 class="product-title">{{$product->name}}</h2>
                                                        <ul class="product-review">
                                                            <li> <i class="fas fa-star"></i> </li>
                                                            <li> <i class="fas fa-star"></i> </li>
                                                            <li> <i class="fas fa-star"></i> </li>
                                                            <li> <i class="fas fa-star"></i> </li>
                                                            <li> <i class="far fa-star"></i> </li>
                                                        </ul>
                                                        <h3 class="price">{{$product->price}}</h3>
                                                    </div>
                                                </div>
                                                <div class="product-back">
                                                    <figure class="product-thumbnail ">
                                                        <a href="single-shop.html"><img src="{{asset($product->image1)}}" alt="product"  /></a>
                                                    </figure>
                                                    <div class="product-meta">
                                                        <ul>
                                                            <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                            <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                        </ul>
                                                    </div>

                                                    <a class="add-cart" href="{{route('addCart',$product->id)}}"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Product area start here  -->
        <!-- Trendy Fashion area start here  -->
        <section class="trend-fashion-area mt-50">
            <div class="container">
                <div class="trend-slide">
                    @foreach ($trends as $trends )
                    <div class="single-trend">
                        <div class="trend-image">
                            <a href="#"><img src="{{asset($trends->trend_fashion_image)}}" alt="trend" /></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Trendy Fashion area end here  -->
        <!-- Best Selling Products start here   -->
        <section class="best-selling-product home-two-selling-v2 mt-50">
            <div class="container">
                <div class="section-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-section">
                                <h2 class="section-title">Best Selling Products</h2>
                            </div>
                        </div>
                    </div>
                    <div class="best-selling-products-slide m-b-30">
                        <div class="grid-single-poduct text-center">
                            <div class="product-front">
                                <figure class="product-thumbnail style-two">
                                    <img src="{{asset('front/images/product/25.png')}}" alt="product"  />
                                    <span class="off bg-color bg-color">-20%</span>
                                    <span class="new">new</span>
                                </figure>
                                <div class="product-info bg-white">
                                    <h2 class="product-title">Man Suit Set</h2>
                                    <ul class="product-review">
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="far fa-star"></i> </li>
                                    </ul>
                                    <h3 class="price">$225.00</h3>
                                </div>
                            </div>
                            <div class="product-back">
                                <figure class="product-thumbnail style-two">
                                    <a href="single-shop.html"><img src="{{asset('front/images/product/25.png')}}" alt="product"  /></a>
                                </figure>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                    </ul>
                                </div>
                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="grid-single-poduct text-center">
                            <div class="product-front">
                                <figure class="product-thumbnail style-two">
                                    <img src="{{asset('front/images/product/26.png')}}" alt="product"  />
                                    <span class="off bg-color bg-color">-20%</span>
                                    <span class="new">new</span>
                                </figure>
                                <div class="product-info bg-white">
                                    <h2 class="product-title">Man Suit Set</h2>
                                    <ul class="product-review">
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="far fa-star"></i> </li>
                                    </ul>
                                    <h3 class="price">$225.00</h3>
                                </div>
                            </div>
                            <div class="product-back">
                                <figure class="product-thumbnail style-two">
                                    <a href="single-shop.html"><img src="{{asset('front/images/product/26.png')}}" alt="product"  /></a>
                                </figure>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                    </ul>
                                </div>
                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="grid-single-poduct text-center">
                            <div class="product-front">
                                <figure class="product-thumbnail style-two">
                                    <img src="{{asset('front/images/product/27.png')}}" alt="product"  />
                                    <span class="off bg-color bg-color">-20%</span>
                                    <span class="new">new</span>
                                </figure>
                                <div class="product-info bg-white">
                                    <h2 class="product-title">Man Suit Set</h2>
                                    <ul class="product-review">
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="far fa-star"></i> </li>
                                    </ul>
                                    <h3 class="price">$225.00</h3>
                                </div>
                            </div>
                            <div class="product-back">
                                <figure class="product-thumbnail style-two">
                                    <a href="single-shop.html"><img src="{{asset('front/images/product/27.png')}}" alt="product"  /></a>
                                </figure>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                    </ul>
                                </div>
                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="grid-single-poduct text-center">
                            <div class="product-front">
                                <figure class="product-thumbnail style-two">
                                    <img src="{{asset('front/images/product/28.png')}}" alt="product"  />
                                    <span class="off bg-color bg-color">-20%</span>
                                    <span class="new">new</span>
                                </figure>
                                <div class="product-info bg-white">
                                    <h2 class="product-title">Man Suit Set</h2>
                                    <ul class="product-review">
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="far fa-star"></i> </li>
                                    </ul>
                                    <h3 class="price">$225.00</h3>
                                </div>
                            </div>
                            <div class="product-back">
                                <figure class="product-thumbnail style-two">
                                    <a href="single-shop.html"><img src="{{asset('front/images/product/28.png')}}" alt="product"  /></a>
                                </figure>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                    </ul>
                                </div>
                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="grid-single-poduct text-center">
                            <div class="product-front">
                                <figure class="product-thumbnail style-two">
                                    <img src="{{asset('front/images/product/7.png')}}" alt="product"  />
                                    <span class="off bg-color bg-color">-20%</span>
                                    <span class="new">new</span>
                                </figure>
                                <div class="product-info bg-white">
                                    <h2 class="product-title">Man Suit Set</h2>
                                    <ul class="product-review">
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="far fa-star"></i> </li>
                                    </ul>
                                    <h3 class="price">$225.00</h3>
                                </div>
                            </div>
                            <div class="product-back">
                                <figure class="product-thumbnail style-two">
                                    <a href="single-shop.html"><img src="{{asset('front/images/product/7.png')}}" alt="product"  /></a>
                                </figure>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                    </ul>
                                </div>
                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="grid-single-poduct text-center">
                            <div class="product-front">
                                <figure class="product-thumbnail style-two">
                                    <img src="{{asset('front/images/product/8.png')}}" alt="product"  />
                                    <span class="off bg-color bg-color">-20%</span>
                                    <span class="new">new</span>
                                </figure>
                                <div class="product-info bg-white">
                                    <h2 class="product-title">Man Suit Set</h2>
                                    <ul class="product-review">
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="fas fa-star"></i> </li>
                                        <li> <i class="far fa-star"></i> </li>
                                    </ul>
                                    <h3 class="price">$225.00</h3>
                                </div>
                            </div>
                            <div class="product-back">
                                <figure class="product-thumbnail style-two">
                                    <a href="single-shop.html"><img src="{{asset('front/images/product/8.png')}}" alt="product"  /></a>
                                </figure>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                    </ul>
                                </div>
                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Best Selling Products end here   -->
        <section class="larg-banner-area mt-50">
            <div class="container">
                <div class="large-banner-info">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-6">
                            <div class="larg-banner-img">
                                <img class="banner-img" src="{{asset('front/images/banner/man-cap-image.jpg')}}" alt="banner" />
                                <div class="round-image">
                                    <img src="{{asset('front/images/banner/cap.png')}}" alt="banner" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="larg-banner-content">
                                <div class="banner-content-wrap">
                                    <h2>Stylish Cap For Man</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet hendrerit fusce fermentum quis aliquet dui senectus. Sit.</p>
                                    <a class="banner-btn" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- New Arrivals area start here  -->
        <section class="new-arrivals-area home-two-aravel mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-wrap">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="top-section">
                                        <h2 class="section-title">New Arrivals</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="arrivals-slide-two m-b-30">
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail style-two">
                                                    <img src="{{asset('front/images/product/29.png')}}" alt="product"  />
                                                    <span class="off bg-color bg-color">-20%</span>
                                                    <span class="new">new</span>
                                                </figure>
                                                <div class="product-info bg-white">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail style-two">
                                                    <a href="single-shop.html"><img src="{{asset('front/images/product/29.png')}}" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail style-two">
                                                    <img src="{{asset('front/images/product/30.png')}}" alt="product"  />
                                                    <span class="off bg-color bg-color">-20%</span>
                                                    <span class="new">new</span>
                                                </figure>
                                                <div class="product-info bg-white">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail style-two">
                                                    <a href="single-shop.html"><img src="{{asset('front/images/product/30.png')}}" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail style-two">
                                                    <img src="{{asset('front/images/product/31.png')}}" alt="product"  />
                                                    <span class="off bg-color bg-color">-20%</span>
                                                    <span class="new">new</span>
                                                </figure>
                                                <div class="product-info bg-white">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail style-two">
                                                    <a href="single-shop.html"><img src="{{asset('front/images/product/31.png')}}" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail style-two">
                                                    <img src="{{asset('front/images/product/32.png')}}" alt="product"  />
                                                    <span class="off bg-color bg-color">-20%</span>
                                                    <span class="new">new</span>
                                                </figure>
                                                <div class="product-info bg-white">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail style-two">
                                                    <a href="single-shop.html"><img src="{{asset('front/images/product/32.png')}}" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail style-two">
                                                    <img src="{{asset('front/images/product/25.png')}}" alt="product"  />
                                                    <span class="off bg-color bg-color">-20%</span>
                                                    <span class="new">new</span>
                                                </figure>
                                                <div class="product-info bg-white">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail style-two">
                                                    <a href="single-shop.html"><img src="{{asset('front/images/product/25.png')}}" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail style-two">
                                                    <img src="{{asset('front/images/product/25.png')}}" alt="product"  />
                                                    <span class="off bg-color bg-color">-20%</span>
                                                    <span class="new">new</span>
                                                </figure>
                                                <div class="product-info bg-white">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail style-two">
                                                    <a href="single-shop.html"><img src="{{asset('front/images/product/25.png')}}" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- New Arrivals area end here  -->
        <!-- blog area start here  -->
        <section class="blog-area home-two-blog mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-wrap">
                            <div class="top-section">
                                <h2 class="section-title">Our Latest Blog</h2>
                            </div>
                            <div class="blog-list blog-slide m-b-30">
                                <article  class="single-post">
                                    <div class="post-thumbnail">
                                        <a href="single-blog.html">
                                            <img src="{{asset('front/images/blog/1.jpg')}}" alt="blog" />
                                        </a>
                                        <span class="blog-date">15 Sep, 20</span>
                                    </div>
                                    <div class="post-info">
                                        <ul class="post-meta">
                                            <li class="author">
                                                <a href="#"><i class="far fa-user"></i>John Doe</a>
                                            </li>
                                            <li class="comments">
                                                <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                            </li>
                                        </ul>
                                        <h2 class="post-title">
                                            <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                        </h2>
                                        <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                        <a href="single-blog.html" class="post-btn">
                                            Read More <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </article>
                                <article  class="single-post">
                                    <div class="post-thumbnail">
                                        <a href="single-blog.html">
                                            <img src="{{asset('front/images/blog/2.jpg')}}" alt="blog" />
                                        </a>
                                        <span class="blog-date">15 Sep, 20</span>
                                    </div>
                                    <div class="post-info">
                                        <ul class="post-meta">
                                            <li class="author">
                                                <a href="#"><i class="far fa-user"></i>John Doe</a>
                                            </li>
                                            <li class="comments">
                                                <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                            </li>
                                        </ul>
                                        <h2 class="post-title">
                                            <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                        </h2>
                                        <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                        <a href="single-blog.html" class="post-btn">
                                            Read More <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </article>
                                <article  class="single-post">
                                    <div class="post-thumbnail">
                                        <a href="single-blog.html">
                                            <img src="{{asset('front/images/blog/3.jpg')}}" alt="blog" />
                                        </a>
                                        <span class="blog-date">15 Sep, 20</span>
                                    </div>
                                    <div class="post-info">
                                        <ul class="post-meta">
                                            <li class="author">
                                                <a href="#"><i class="far fa-user"></i>John Doe</a>
                                            </li>
                                            <li class="comments">
                                                <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                            </li>
                                        </ul>
                                        <h2 class="post-title">
                                            <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                        </h2>
                                        <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                        <a href="single-blog.html" class="post-btn">
                                            Read More <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </article>
                                <article  class="single-post">
                                    <div class="post-thumbnail">
                                        <a href="single-blog.html">
                                            <img src="{{asset('front/images/blog/4.jpg')}}" alt="blog" />
                                        </a>
                                        <span class="blog-date">15 Sep, 20</span>
                                    </div>
                                    <div class="post-info">
                                        <ul class="post-meta">
                                            <li class="author">
                                                <a href="#"><i class="far fa-user"></i>John Doe</a>
                                            </li>
                                            <li class="comments">
                                                <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                            </li>
                                        </ul>
                                        <h2 class="post-title">
                                            <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                        </h2>
                                        <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                        <a href="single-blog.html" class="post-btn">
                                            Read More <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection