@extends('layout')
@section('main')
<body>
<a href="{{'cart'}}">Cart</a>
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>


	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.jpg);">
        <div class="auto-container">
            <h1>Shop Detail</h1>
			<div class="text">What We Actually Do?</div>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
				<li>Shop Detail</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->

	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

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

                                    @foreach($products as $product)

                                    <div class="info-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="details-header">
                                            <h4>{{$product->name}}</h4>
                                            <div class="rating">
												<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                            </div>
                                            <a class="reviews" href="#">( 3 Customer Reviews )</a>
                                            <div class="item-price">{{ $product->price  }}<span class="discount">$35.00</span>
                                            </div>
                                        </div>

                                        <div class="text"> {{$product->des}}</div>
                                        <div class="other-options clearfix">
                                            <div class="item-quantity"><input class="quantity-spinner" type="text" value="1" name="quantity"></div>
                                            <a href="{{ route('addtocart' , $product->id )  }}"  class="theme-btn btn-style-one add-to-cart" ><span class="txt">Add To Cart</span></a>
                                            <div class="cart-option">
                                                <a href="#"><span class="fa fa-share-alt"></span></a>
                                                <a href="fs"><span class="fa fa-heart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session ('success') }}
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                            <!--Basic Details-->

                            <!--Product Info Tabs-->
                            <div class="product-info-tabs">
                                <!--Product Tabs-->
                                <div class="prod-tabs tabs-box">

                                    <!--Tab Btns-->
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-details" class="tab-btn active-btn">Descripton</li>
                                        <li data-tab="#prod-reviews" class="tab-btn">Review (3)</li>
                                    </ul>

                                    <!--Tabs Container-->
                                    <div class="tabs-content">

                                        <!--Tab / Active Tab-->
                                        <div class="tab active-tab" id="prod-details">
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                            </div>
                                        </div>

                                        <!--Tab-->
                                        <div class="tab" id="prod-reviews">
                                            <h2 class="title">3 Reviews For <span class="theme_color">Patient Ninja</span></h2>
                                            <!--Reviews Container-->
                                            <div class="comments-area style-two">
                                                <!--Comment Box-->
                                                <div class="comment-box">
                                                    <div class="comment">
                                                        <div class="author-thumb"><img src="images/resource/author-1.jpg" alt=""></div>
                                                        <div class="comment-inner">
                                                            <div class="comment-info clearfix">James Koster <span>June 7’2013:</span></div>
                                                            <div class="rating">
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star light"></span>
                                                            </div>
                                                            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</div>
                                                        </div>
                                                    </div>
                                                </div>

                                              <!--Comment Box-->
                                                <div class="comment-box reply-comment">
                                                    <div class="comment">
                                                        <div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
                                                        <div class="comment-inner">
                                                            <div class="comment-info clearfix">Cobus Besten <span>June 7’2013:</span></div>
                                                            <div class="rating">
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                            </div>
                                                            <div class="text">Lorem Ipsum is simply dummy text of the printing </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Comment Box-->
                                                <div class="comment-box">
                                                    <div class="comment">
                                                        <div class="author-thumb"><img src="images/resource/author-3.jpg" alt=""></div>
                                                        <div class="comment-inner">
                                                            <div class="comment-info clearfix">Magnus <span>June 7’2013:</span></div>
                                                            <div class="rating">
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                            </div>
                                                            <div class="text">Lorem Ipsum is simply dummy text of the printing </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Comment Form -->
                                            <div class="shop-comment-form">
                                                <h2>ADD A REVIEW</h2>
                                                <div class="mail-text"><span class="theme_color">Your email address will not be published.</span> Required fields are marked*</div>
                                                <div class="rating-box">
                                                    <div class="text"> Your Rating:</div>
                                                    <div class="rating">
                                                        <a href="#"><span class="fa fa-star"></span></a>&ensp;
														<a href="#"><span class="fa fa-star"></span><span class="fa fa-star"></span></a>&ensp;
														<a href="#"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></a>&ensp;
														<a href="#"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></a>&ensp;
														<a href="#"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></a>
                                                    </div>
                                                </div>
                                                <form method="post" action="contact.html">
                                                    <div class="form-group">
                                                        <label>Your Review*</label>
                                                        <textarea name="message" placeholder=""></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="username" placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" name="number" placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">SUBMIT</span></button>
                                                    </div>

                                                </form>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--End Product Info Tabs-->
						</div>
					</div>

					<div class="related-products">
						<div class="sec-title">
							<h2>Related Products</h2>
							<div class="separator"></div>
						</div>

						<div class="row clearfix">

							<!--Shop Item-->
							<div class="product-block col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<img src="images/resource/products/1.jpg" alt="" />
										<ul class="options clearfix">
											<li><a href="shop-single.html">Quick View</a></li>
											<li><a href="shop-single.html"><span class="icon flaticon-shopping-cart"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<div class="content">
											<h3><a href="shop-single.html">Chair One</a></h3>
											<div class="price">$42.00</div>
										</div>
									</div>
								</div>
							</div>

							<!--Shop Item-->
							<div class="product-block col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<img src="images/resource/products/1.jpg" alt="" />
										<ul class="options clearfix">
											<li><a href="shop-single.html">Quick View</a></li>
											<li><a href="shop-single.html"><span class="icon flaticon-shopping-cart"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<div class="content">
											<h3><a href="shop-single.html">Chair One</a></h3>
											<div class="price">$42.00</div>
										</div>
									</div>
								</div>
							</div>

							<!--Shop Item-->
							<div class="product-block col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<img src="images/resource/products/1.jpg" alt="" />
										<ul class="options clearfix">
											<li><a href="shop-single.html">Quick View</a></li>
											<li><a href="shop-single.html"><span class="icon flaticon-shopping-cart"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<div class="content">
											<h3><a href="shop-single.html">Chair One</a></h3>
											<div class="price">$42.00</div>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">

                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <div class="sidebar-title">
                                <h3>Product Search</h3>
                            </div>
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search ..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h3>Categories</h3>
                            </div>
                            <ul class="archive-list">
                                <li>
                                    <a href="#" class="clearfix">
                                        <span class="pull-left">Woman Shoes</span>
                                        <span class="pull-right">(8)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <span class="pull-left">Men Shirts</span>
                                        <span class="pull-right">(3)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <span class="pull-left">Accesories</span>
                                        <span class="pull-right">(5)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <span class="pull-left">Designer Polos</span>
                                        <span class="pull-right">(2)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <span class="pull-left">Modern Jeans</span>
                                        <span class="pull-right">(1)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Price Filters -->
                        <div class="sidebar-widget price-filters rangeslider-widget">
                            <div class="sidebar-title">
                                <h3>Price Filter</h3>
                            </div>
                            <div class="range-slider-one clearfix">
                                <div class="price-range-slider"></div>
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <a href="#" class="theme-btn btn-style-two btn-rounded"><span class="txt">Filter</span></a>
                                    </div>
                                    <div class="pull-right range">
                                        <div class="title">Price:</div>
                                        <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Top Related Posts -->
                        <div class="sidebar-widget related-posts">
                            <div class="sidebar-title">
                                <h3>Featured product</h3>
                            </div>
                            <!-- Post Thumb  -->
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="shop-single.html">
                                        <img src="images/resource/products/prod-thumb-1.jpg" alt="">
                                    </a>
                                </figure>
                                <h4><a href="shop-single.html">Flying Ninja</a></h4>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half-o light"></span>
                                </div>
                                <div class="price"><span class="discount">$35.00</span>$9.00</div>
                            </div>

                            <!-- Post Thumb  -->
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="shop-single.html">
                                        <img src="images/resource/products/prod-thumb-2.jpg" alt="">
                                    </a>
                                </figure>
                                <h4><a href="shop-single.html">Woo Logo</a></h4>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half-o light"></span>
                                </div>
                                <div class="price"><span class="discount">$35.00</span>$30.00</div>
                            </div>

                            <!-- Post Thumb  -->
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="shop-single.html">
                                        <img src="images/resource/products/prod-thumb-3.jpg" alt="">
                                    </a>
                                </figure>
                                <h4><a href="shop-single.html">Patient Ninja</a></h4>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half-o light"></span>
                                </div>
                                <div class="price"><span class="discount">$35.00</span>$30.00</div>
                            </div>

                            <!-- Post Thumb  -->
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="shop-single.html">
                                        <img src="images/resource/products/prod-thumb-1.jpg" alt="">
                                    </a>
                                </figure>
                                <h4><a href="shop-single.html">Happy Ninja</a></h4>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half-o light"></span>
                                </div>
                                <div class="price"><span class="discount">$35.00</span>$30.00</div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sierbar Container -->
@endsection

</body>
</html>
