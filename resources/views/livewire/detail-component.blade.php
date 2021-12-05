<main>
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>See more Details</p>
                        <h1>Single Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single product -->
    <div class="single-product mt-100 mb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="{{ asset('assets/img/products') }}/{{ $product->image }}" alt="{{ $product->name }}">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-content">
                        <h3>{{ $product->name }}</h3>
                        <p class="single-product-pricing">Rp. {{ $product->regular_price }}</p>
                        <p>{{ $product->short_description }}</p>
                        <div class="single-product-form">
                            <form>
                                @csrf
                                <input type="number" placeholder="1">
                            </form>
                            <a href="#" class="cart-btn" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single product -->

    <!-- more products -->
    <div class="more-products mt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">	
                        <h3><span class="orange-text">Detail</span> Products</h3>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </div>
    <!-- end more products -->

    <!-- single article section -->
    <div class="mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-article-section">
                        <div class="single-article-text">								
                            <h2>{{ $product->name }}</h2>
                            <p>{{ $product->description }}</p>
                        </div>

                        <div class="comments-list-wrap">
                            <h3 class="comment-count-title">Review</h3>
                            <div class="comment-list">
                                <div class="single-comment-body">
                                    <div class="comment-user-avater">
                                        <img src="{{ asset('assets/img/avaters/avatar1.png') }}" alt="">
                                    </div>
                                    <div class="comment-text-body">
                                        <h4>Jenny Joe <span class="comment-date"></h4>
                                        <p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.</p>
                                    </div>
                                </div>
                                <div class="single-comment-body">
                                    <div class="comment-user-avater">
                                        <img src="{{ asset('assets/img/avaters/avatar2.png') }}" alt="">
                                    </div>
                                    <div class="comment-text-body">
                                        <h4>Addy Aoe <span class="comment-date"></h4>
                                        <p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.</p>
                                    </div>
                                </div>
                                <div class="single-comment-body">
                                    <div class="comment-user-avater">
                                        <img src="{{ asset('assets/img/avaters/avatar3.png') }}" alt="">
                                    </div>
                                    <div class="comment-text-body">
                                        <h4>Addy Aoe <span class="comment-date"></h4>
                                        <p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single article section -->
</main>
