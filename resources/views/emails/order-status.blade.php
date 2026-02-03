<h2 style="font-family: Arial, sans-serif; color: #333;">Hello {{ $order->firstname }} 👋</h2>

<p style="font-family: Arial, sans-serif; color: #555; font-size: 16px;">
    Your order <strong>{{ $order->id }}</strong> status has been updated:
</p>

<table style="width: 80%; margin: 20px auto; border-collapse: collapse; font-family: Arial, sans-serif; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden;">
    <thead>
        <tr style="background-color: #343a40; color: #fff; text-align: center;">
            <th style="padding: 12px 15px;">Order ID</th>
            <th style="padding: 12px 15px;">Customer</th>
            <th style="padding: 12px 15px;">Status</th>
            <th style="padding: 12px 15px;">Message</th>
        </tr>
    </thead>
    <tbody>
        <tr style="
            @if($order->status === 'confirmed') background-color: #d1e7dd; color: #0f5132;
            @elseif($order->status === 'shipped') background-color: #cff4fc; color: #055160;
            @elseif($order->status === 'delivered') background-color: #e2e3e5; color: #41464b;
            @elseif($order->status === 'returned') background-color: #fff3cd; color: #856404;
            @elseif($order->status === 'canceled') background-color: #f8d7da; color: #842029;
            @endif
            text-align: center;
        ">
            <td style="padding: 12px 15px;">{{ $order->id }}</td>
            <td style="padding: 12px 15px;">{{ $order->firstname }} {{ $order->lastname }}</td>
            <td style="padding: 12px 15px;">{{ ucfirst($order->status) }}</td>
            <td style="padding: 12px 15px; font-weight: 500;">
                @if($order->status === 'confirmed')
                    ✅ Your order has been confirmed.
                @elseif($order->status === 'shipped')
                    🚚 Your order is on the way!
                @elseif($order->status === 'delivered')
                    📦 Your order has been delivered successfully.
                @elseif($order->status === 'returned')
                    ↩️ Your order has been returned to the warehouse.
                @elseif($order->status === 'canceled')
                    ❌ Your order has been canceled.
                @endif
            </td>
        </tr>
    </tbody>
</table>

<p style="text-align: center; font-family: Arial, sans-serif; color: #555; font-size: 16px; margin-top: 25px;">
    Thank you for shopping with us ❤️
</p>
