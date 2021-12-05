<main>
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>Cart</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- cart -->
    <div class="cart-section mt-100 mb-100">
        <div class="container">
            @if (Session::has('success_message'))
                <div class="alert alert-success">
                    <strong>Success</strong> {{ Session::get('success_message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cart-table-wrap">
                        @if (Cart::count() > 0)
                            <table class="cart-table">
                                <thead class="cart-table-head">
                                    <tr class="table-head-row">
                                        <th class="product-remove"></th>
                                        <th class="product-image">Product Image</th>
                                        <th class="product-name">Name</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-total">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::content() as $item)
                                        <tr class="table-body-row">
                                            <td class="product-remove"><a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')"><i class="far fa-window-close"></i></a></td>
                                            <td class="product-image"><img src="{{ asset('assets/img/products') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}"></td>
                                            <td class="product-name">{{ $item->model->name }}</td>
                                            <td class="product-price">Rp. {{ $item->model->regular_price }}</td>
                                            <td class="product-quantity">
                                                <form>
                                                    @csrf
                                                    <a class="btn btn-decrease" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"><b>-</b></a>
                                                    <input type="number" value="{{ $item->qty }}">
                                                    <a class="btn btn-increase" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"><b>+</b></a>
                                                </form>
                                            </td>
                                            <td class="product-total">Rp. {{ $item->subtotal }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No item in cart</p>
                        @endif
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="total-section">
                        <table class="total-table">
                            <thead class="total-table-head">
                                <tr class="table-total-row">
                                    <th>Total</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="total-data">
                                    <td><strong>Total</strong></td>
                                    <td>Rp. {{ Cart::subtotal() }}</td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>Shipping</strong></td>
                                    <td>Rp. {{ Cart::tax() }}</td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>Grand Total</strong></td>
                                    <td>Rp. {{ Cart::total() }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="cart-buttons">
                            <a href="#" class="boxed-btn black" wire:click.prevent="checkout">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cart -->
</main>
