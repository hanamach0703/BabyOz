<main>
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li data-filter="*">All</li>
                            <li data-filter=".cottonpad">Cotton pad</li>
                            <li data-filter=".diaper">Diaper</li>
                            <li data-filter=".masker">Masker</li>
                            <li data-filter=".minipad">Minipad</li>
                            <li data-filter=".menstrualpad">Menstrual pad</li>
                            <li data-filter=".wetbag">Wet bag</li>
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
                                <a href="{{ route('product.details', ['slug' => $product->slug]) }}"><img src="{{ asset('assets/img/products') }}/{{ $product->image }}" alt="{{ $product->name }}"></a>
                            </div>
                            <h3>{{ $product->name }}</h3>
                            <p class="product-price">Rp. {{ $product->regular_price }}</p>
                            <a href="#" class="cart-btn" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        {{-- {{ $products->links() }} --}}
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- end products -->
</main>
