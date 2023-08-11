<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Jobs\CalculateTotalCostJob;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderLines')->get();
        
        return view('orders', compact('orders'));
    }

    public function calculateTotalCost()
    {
        $totalCost = Order::with('orderLines.product')->get()
            ->sum(function ($order) {
                return $order->orderLines->sum(function ($line) {
                    return $line->qty * $line->product->cost;
                });
            });

        return response()->json(['total_cost' => $totalCost]);
    }

    public function dispatchCalculateTotalCostJob()
    {        
        CalculateTotalCostJob::dispatch()->onQueue('default');
        return response()->json(['message' => 'Calculation job dispatched']);
    }
}
