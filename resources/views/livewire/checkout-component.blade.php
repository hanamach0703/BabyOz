<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>Check Out Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- check out section -->
<div class="checkout-section mt-100 mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-accordion-wrap">
                    <div class="accordion" id="accordionExample">
                      <div class="card single-accordion">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Form Order
                            </button>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="billing-address-form">
                                <form action="index.html">
                                    <p>
                                        <input type="text" name="fullname" placeholder="Full Name" wire:model="fullname">
                                        @error('fullname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p>
                                        <input type="email" name="email" placeholder="Email Addreas" wire:model="email">
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p>
                                        <input type="number" name="phone" placeholder="Phone Number" wire:model="phone">
                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p>
                                        <input type="text" name="address" placeholder="Address" wire:model="address">
                                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p>
                                        <input type="text" name="country" placeholder="Country" wire:model="country">
                                        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p>
                                        <input type="text" name="province" placeholder="Province" wire:model="province">
                                        @error('province') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p>
                                        <input type="text" name="city" placeholder="City" wire:model="city">
                                        @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p>
                                        <input type="number" name="zipcode" placeholder="Zip Code" wire:model="zipcode">
                                        @error('zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p><textarea name="saysomething" cols="30" rows="10" placeholder="Say Something" wire:model="saysomething"></textarea></p>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card single-accordion">
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">
                            {{-- <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Shipping Address
                            </button> --}}
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="billing-address-form">
                                <form action="index.html">
                                    <p>
                                        <input type="text" placeholder="Full Name">
                                    </p>
                                    <p>
                                        <input type="email" placeholder="Email Addreas">
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p>
                                        <input type="email" placeholder="Phone Number"></p>
                                    <p>
                                        <input type="text" placeholder="Address"></p>
                                    <p>
                                        <input type="tel" placeholder="Country"></p>
                                    <p>
                                        <input type="email" placeholder="State/Province"></p>
                                    <p>
                                        <input type="email" placeholder="City"></p>
                                    <p>
                                        <input type="email" placeholder="Zip Code"></p>
                                    <p>
                                        <textarea name="bill" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea></p>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="order-details-wrap">
                    <table class="order-details">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Subtotal</th>
                            </tr>
                            <tbody>
                                @foreach (Cart::content() as $item)
                                    <tr>
                                        <td>{{ $item->model->name }}</td>
                                        <td>Rp. {{ $item->subtotal }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </thead>
                        <thead>
                            <tr>
                                <th>Your order Details</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody class="checkout-details">
                            <tr>
                                <td>Total</td>
                                <td>Rp. {{ Cart::subtotal() }}</td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td>Rp. {{ Cart::tax() }}</td>
                            </tr>
                            <tr>
                                <td>Grand Total</td>
                                <td>Rp. {{ Cart::total() }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table class="order-details">
                        <thead>
                            <tr>
                                <th>Payment Method</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="order-details-body">
                            <tr>
                                <td><img src="{{ asset('assets/img/ovo.png') }}" alt=""></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('assets/img/GoPay.png') }}" alt=""></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('assets/img/mandiri.png') }}" alt=""></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('assets/img/bni.png') }}" alt=""></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('assets/img/bca.jpg') }}" alt=""></td>
                                <td><input type="checkbox"></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('thankyou') }}" class="boxed-btn">Place Order</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end check out section -->
