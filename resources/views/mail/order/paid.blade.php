@component('mail::message')
# Invoice Paid

Thanks for the purchase

Here is your receipt

<table class="table">
    <thead>
        <tr>
            <th>Product name</th>
            <th>quantity</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->items as $item)
        <tr>
            <td scope="row">{{ $item->name }}</td>
            <td>{{ $item->pivot->quantity }}</td>
            <td>{{ $item->pivot->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

Total : {{$order->grand_total}}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
