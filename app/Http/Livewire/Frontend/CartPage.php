<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Cart;
use Illuminate\Http\Request;

class CartPage extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
    }

    public function removeItem($rowId, Request $request)
    {
        Cart::remove($rowId);
        $request->session()->flash('status', 'Item removed from cart successful!');
    }

    public function destroyAll(Request $request)
    {
        Cart::destroy();
        $request->session()->flash('status', 'Item removed from cart successful!');
    }

    public function render()
    {
        return view('livewire.frontend.cart-page')->layout('layouts.base');
    }
}
