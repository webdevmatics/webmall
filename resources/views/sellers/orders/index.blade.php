@extends('layouts.seller')


@section('content')

    <h4>Orders</h4>

    <table class="table">
        <thead>
            <tr>
                <th>Order number</th>
                <th>Status</th>
                <th>Item count</th>
                <th>Shipping Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $subOrder)
                <tr>
                    <td scope="row">
                        {{$subOrder->order->order_number}}
                    </td>
                    <td>
                        {{$subOrder->status}}

                        @if($subOrder->status != 'completed')

                            <a href=" {{route('seller.order.delivered', $subOrder)}} " class="btn btn-primary btn-sm">mark as delivered</button>
                        @endif
                    </td>

                    <td>
                        {{$subOrder->item_count}}
                    </td>

                    <td>
                       {!! $subOrder->order->shipping_address !!}
                    </td>

                    <td>
                        <a name="" id="" class="btn btn-primary btn-sm" href="{{route('seller.orders.show', $subOrder)}}" role="button">View</a>
                    </td>
                </tr>
            @empty

            @endforelse


        </tbody>
    </table>


@endsection

