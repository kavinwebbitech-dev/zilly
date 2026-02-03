<div style="font-family: Arial, sans-serif; background:#f4f6fb; padding:20px;">

    <table width="100%" cellpadding="0" cellspacing="0" style="max-width:600px; margin:auto; background:#ffffff; border-radius:8px; overflow:hidden;">
        
        <!-- HEADER -->
        <tr style="background:#4f46e5;">
            <td style="padding:20px; color:#ffffff; text-align:center;">
                <h2 style="margin:0;">Thank You for Your Order 🎉</h2>
            </td>
        </tr>

        <!-- GREETING -->
        <tr>
            <td style="padding:20px; color:#333;">
                <p style="font-size:16px; margin:0 0 10px;">
                    Hi <strong>{{ $order->firstname }}</strong>,
                </p>
                <p style="margin:0;">
                    We’ve received your order successfully. Below are your order details 👇
                </p>
            </td>
        </tr>

        <!-- ORDER DETAILS -->
        <tr>
            <td style="padding:0 20px 20px;">
                <table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse;">
                    <tr style="background:#eef2ff;">
                        <td><strong>Order ID</strong></td>
                        <td>{{ $order->id }}</td>
                    </tr>
                    <tr>
                        <td style="background:#fafafa;"><strong>Payment Method</strong></td>
                        <td>Cash on Delivery</td>
                    </tr>
                    <tr>
                        <td style="background:#fafafa;"><strong>Total Amount</strong></td>
                        <td style="color:#16a34a; font-weight:bold;">
                            ₹{{ number_format($order->total, 2) }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- ITEMS HEADER -->
        <tr>
            <td style="padding:0 20px;">
                <h4 style="margin-bottom:10px; color:#1e293b;">Order Items</h4>
            </td>
        </tr>

        <!-- ITEMS TABLE -->
        <tr>
            <td style="padding:0 20px 20px;">
                <table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse;">
                    <tr style="background:#22c55e; color:#ffffff;">
                        <th align="left">Product</th>
                        <th align="center">Qty</th>
                        <th align="right">Subtotal</th>
                    </tr>

                    @foreach ($order->orderItems as $item)
                    <tr style="border-bottom:1px solid #eeeeee;">
                        <td>{{ $item->product->name }}</td>
                        <td align="center">{{ $item->quantity }}</td>
                        <td align="right">
                            ₹{{ number_format($item->subtotal, 2) }}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </td>
        </tr>

        <!-- FOOTER -->
        <tr>
            <td style="padding:20px; background:#f8fafc; color:#555;">
                <p style="margin:0 0 10px;">
                    🚚 We will contact you soon regarding delivery.
                </p>
                <p style="margin:0;">
                    Thanks & regards,<br>
                    <strong>{{ config('app.name') }}</strong>
                </p>
            </td>
        </tr>

    </table>

</div>
