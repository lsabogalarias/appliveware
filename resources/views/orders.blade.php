@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Órdenes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Order Ref</th>
                    <th>Customer Name</th>
                    <th>Total Qty</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->order_ref }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->orderLines->sum('qty') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
