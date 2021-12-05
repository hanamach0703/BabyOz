<!-- home page slider -->
<div class="homepage-slider">
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-1">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Health & Hygienists</p>
                            <h1>Environmentally Friendly</h1>
                            <div class="hero-btns">
                                <a href="shop.html" class="boxed-btn">Product Collection</a>
                                <a href="contact.html" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Healthy Everyday</p>
                            <h1>100% Organic Collection</h1>
                            <div class="hero-btns">
                                <a href="shop.html" class="boxed-btn">Visit Shop</a>
                                <a href="contact.html" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-right">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Mega Sale Going On!</p>
                            <h1>Get December Discount</h1>
                            <div class="hero-btns">
                                <a href="shop.html" class="boxed-btn">Visit Shop</a>
                                <a href="contact.html" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end home page slider -->

<!-- Weekly Best -->
<div class="product-section mt-100 mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">	
                    <h3><span class="orange-text">Weekly</span> Best</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src=" {{ asset('assets/img/products') }}/{{ $product->image }}" alt="{{ $product->name }}"></a>
                        </div>
                        <h3>{{ $product->name }}</h3>
                        <p class="product-price">Rp. {{ $product->regular_price }}</p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end weekly best -->

<!-- New In -->
<div class="product-section mt-100 mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">	
                    <h3><span class="orange-text">New</span> In</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src=" {{ asset('assets/img/products')}}/{{ $product->image }}" alt="{{ $product->name }}"></a>
                        </div>
                        <h3>{{ $product->name }}</h3>
                        <p class="product-price">Rp. {{ $product->regular_price }}</p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end New In -->

<!-- advertisement section -->
<div class="abt-section mt-100 mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="abt-bg">
                    <a href="" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="abt-text">
                    <p class="top-sub">Since Year 2021</p>
                    <h2>We are <span class="orange-text">Baby Oz</span></h2>
                    <p>
                        Baby Oz Indonesia started a business on the basis of sensitivity to our environmental conditions which are getting worse with the amount of plastic waste that cannot be recycled. 
                        In addition, we recognize that not all skins of babies and adults have the same sensitivity. 
                        Some skins are very sensitive to chemicals and plastics. Therefore, we create a variety of reusable products for all ages, such as cloth diaper, menstrual pad, breastpad, cottonpad, adult diaper, etc.
                    </p>
                    <p>Baby Oz Indonesia's commitment is to always maintain quality and continue to support the plastic waste-free Indonesia movement.</p>
                    <a href="about.html" class="boxed-btn mt-4">Know more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end advertisement section -->