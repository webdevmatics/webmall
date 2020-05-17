<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MallCart extends Component
{
    public $cartItems = [];

    public $listeners = ['cartUpdated' => 'onCartUpdated'];


    public function mount()
    {
        $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();
//        dd($this->cartItems);
    }

    public function onCartUpdated()
    {
        $this->mount();
    }

    public function render()
    {
        return view('livewire.mall-cart');
    }
}
