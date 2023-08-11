<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class OrderList extends Component
{
    public function render()
    {
        $orders = Order::with('orderLines')->get();

        return view('livewire.order-list', [
            'orders' => $orders,
        ]);
    }
}
