<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(3);
        return view('livewire.home-component', ['products' => $products])
        ->layout('layouts.base', ['title' => 'Home']);
    }
}
