<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
{{--    <meta name="keywords" content="bootstrap, bootstrap4" />--}}

    <!-- Bootstrap CSS -->
{{--    <link href="css-com/bootstrap.min.css" rel="stylesheet">--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
{{--    <link href="css-com/tiny-slider.css" rel="stylesheet">--}}
{{--    <link href="css-com/style.css" rel="stylesheet">--}}
    <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
    <style>
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #e2e2e2;
            font-family: Arial, sans-serif;
            font-size: 18px;
            color: #333333;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .navbar-toggler {
            border: none;
            background-color: transparent;
        }

        .navbar-toggler-icon {
            color: #333333;
        }

        .custom-navbar-nav {
            list-style-type: none;
            padding-left: 0;
        }

        .custom-navbar-nav li {
            margin-left: 1rem;
        }

        .custom-navbar-nav li a {
            font-size: 1rem;
            font-weight: 400;
            color: #333333;
            text-decoration: none;
        }

        .custom-navbar-nav li a.active {
            color: #000000;
        }

        .custom-navbar-cta {
            list-style-type: none;
            padding-left: 0;
        }

        .custom-navbar-cta li {
            margin-left: 1rem;
        }

        .custom-navbar-cta li a {
            font-size: 1rem;
            font-weight: 400;
            color: #333333;
            text-decoration: none;
        }

        .custom-navbar-cta li a img {
            width: 20px;
            height: 20px;
        }

    </style>
</head>

<body>


<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="index.html">Furni<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>

</nav>
<!-- End Header/Navigation -->

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">

                <div class="intro-excerpt">
                    <h1>Shop</h1>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->



<div class="untree_co-section product-section before-footer-section" >
    <div class="container">
        <div class="row">


        <!--Content Side-->
        <div class="content-side col-lg-9 col-md-12 col-sm-12">
            <div class="shop-single">
                <div class="product-details">

                    <!--Basic Details-->
                    <div class="basic-details">
                        <div class="row clearfix">
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <figure class="image-box">
                                    <a href="images/resource/products/10.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/resource/products/10.jpg" alt=""></a>
                                </figure>
                            </div>

                                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="details-header">
                                        <div class="image">
                                            @if($product->image)
                                                <img src="{{asset('Dashboard/img/products/'.$product->image->filename)}}"
                                                     height="150px" width="150px" alt="">

                                            @else
                                                <img src="{{asset('Dashboard/img/doctor_default.png')}}" height="150px"
                                                     width="150px" alt="">
                                            @endif
                                        </div>
                                        <h4>{{ $product ['name'] }}</h4>
                                        <div class="rating">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div>
                                        <a class="reviews" href="#">( 3 Customer Reviews )</a>
                                        <div class="item-price">{{ $product ['price'] }}<span class="discount">${{ $product ['price'] }}</span>
                                        </div>
                                    </div>
                                    @if(session('message'))
                                        <div>
                                            {{ session('message')  }}
                                        </div>
                                    @endif

                                    <div class="text"> {{$product->des}}</div>
                                    <div class="other-options clearfix">
{{--                                        <div class="item-quantity"><input class="quantity-spinner" type="text" value="1" name="quantity"></div>--}}
{{--                                        <a href=""  class="theme-btn btn-style-one add-to-cart" ><span class="txt">Add To Cart</span></a>--}}
                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                            <form action="" method="post" class="formAddToCart">
                                                @csrf
                                                <input type="hidden" name="id_product" value="{{$product -> id}}">
                                                <a class="add-to-cart" href="{{route('cart.store')}}" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>Add to cart</span></a>
                                            </form>

                                            <a class="removeFromWishlist addToWishlist  wishlistProd_22" href="#" data-product-id="{{$product -> id}}">
                                                <i class="fa fa-heart"></i>
                                                <span>remove to Wishlist</span>
                                            </a>
                                            <a href="#" class="quick-view hidden-sm-down" data-product-id="{{$product -> id}}">
                                                <i class="fa fa-search"></i><span> Quick view</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </div>

                                        <div class="cart-option">
                                            <a href="#"><span class="fa fa-share-alt"></span></a>
                                            <a href="fs"><span class="fa fa-heart"></span></a>
                                        </div>
                                    </div>
                                </div>


                        </div>
                    </div>
                    <!--Basic Details-->
                </div>
            </div>
        </div>





                </div>
            </div>
        </div>

@include('front.includes.not-logged')
@include('front.includes.alert')
@section('scripts')
    <script>

        $(document).on('click', '.quick-view', function () {
            $('.quickview-modal-product-details-' + $(this).attr('data-product-id')).css("display", "block");
        });
        $(document).on('click', '.close', function () {
            $('.quickview-modal-product-details-' + $(this).attr('data-product-id')).css("display", "none");
            $('.not-loggedin-modal').css("display", "none");
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.removeFromWishlist', function (e) {
            e.preventDefault();

            @guest()
            $('.not-loggedin-modal').css('display','block');
            @endguest


            $.ajax({
                type: 'delete',
                url: "{{Route('cart.destroy' , $product->id )}}",
                data: {
                    'productId': $(this).attr('data-product-id'),
                },
                success: function (data) {
                    location.reload();
                }
            });
        });
    </script>

@stop

</body>

</html>

