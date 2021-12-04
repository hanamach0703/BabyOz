<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-filters">
                    <ul>
                        <li data-filter="*">All</li>
                        <li data-filter=".strawberry">Strawberry</li>
                        <li data-filter=".berry">Berry</li>
                        <li data-filter=".lemon">Lemon</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- products -->
<div class="product-section mt-100 mb-100">
    <div class="container">

        <div class="row product-lists">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="{{ asset('assets/img/products') }}/{{ $product->image }}" alt="{{ $product->name }}"></a>
                        </div>
                        <h3>{{ $product->name }}</h3>
                        <p class="product-price">Rp. {{ $product->regular_price }}</p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pagination-wrap">
                    {{ $products->links() }}
                    {{-- <ul>
                        <li><a href="#">Prev</a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul> --}}
                </div> 
            </div>
        </div>
    </div>
</div>
<!-- end products -->
