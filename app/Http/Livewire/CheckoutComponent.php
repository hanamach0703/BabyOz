<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;


class CheckoutComponent extends Component
{
    public $fullname;
    public $email;
    public $phone;
    public $address;
    public $country;
    public $province;
    public $city;
    public $zipcode;
    public $saysomething;
    public $payment;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'fullname' => 'required',
            'email' => 'required | email',
            'phone' => 'required | numeric',
            'address' => 'required',
            'country' => 'required',
            'province' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'saysomething' => 'required',
            'payment' => 'required'
        ]);
    }

    public function placeOrder()
    {
        $this->valideate([
            'fullname' => 'required',
            'email' => 'required | email',
            'phone' => 'required | numeric',
            'address' => 'required',
            'country' => 'required',
            'province' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'saysomething' => 'required',
            'payment' => 'required'
        ]);

        $order = new Order();
        $order->user_id = Auth::user();
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->shipping = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];
        $order->fullname = $this->fullname;
        $order->email = $this->email;
        $order->phone = $this->phone;
        $order->address = $this->address; 
        $order->country = $this->country;
        $order->province = $this->province;
        $order->city = $this->city;
        $order->zipcode = $this->zipcode;
        $order->saysomething = $this->saysomething;
        $order->save();

        foreach(Cart::instance('cart')->content() as $item)
        {
            $orderDetail = new OrderDetail();
            $orderDetail->product_id = $item->id;
            $orderDetail->order_id = $order->id;
            $orderDetail->price = $item->price;
            $orderDetail->quantity = $item->qty;
            $orderDetail->save();
        }

        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->order_id = $order->id;
        $transaction->payment = $this->payment;
        $transaction->save();

        Cart::instance('cart')->destroy();
        session()->forget('checkout');
    }

    public function render()
    {
        return view('livewire.checkout-component')
        ->layout('layouts.base', ['title' => 'Checkout']);
    }
}
