<?php

namespace App\Http\Livewire;

use Livewire\Component;

class JoinUsComponent extends Component
{
    public function render()
    {
        return view('livewire.join-us-component')
        ->layout('layouts.base', ['title' => 'Join Us']);
    }
}
