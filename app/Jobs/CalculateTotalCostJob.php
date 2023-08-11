<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;
use Illuminate\Support\Facades\Log;

class CalculateTotalCostJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $totalCost = Order::with('orderLines.product')->get()
            ->sum(function ($order) {
                return $order->orderLines->sum(function ($line) {
                    return $line->qty * $line->product->cost;
                });
            });

        // Puedes almacenar el resultado en una base de datos o realizar cualquier otra acción aquí

        Log::info('Total cost calculated: ' . $totalCost);
    
    }
}
