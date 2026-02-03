<div style="font-family: Arial, sans-serif; background:#f5f7fb; padding:20px 0;">

    <!-- OUTER WRAPPER -->
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td>

                <!-- CENTERED CONTAINER -->
                <table cellpadding="0" cellspacing="0"
                    style="
                        width:600px;
                        max-width:600px;
                        margin:0 auto;
                        background:#ffffff;
                        border-radius:10px;
                        overflow:hidden;
                    ">

                    <!-- TITLE -->
                    <tr>
                        <td style="padding:20px; text-align:center;">
                            <h2 style="margin:0; color:#2c3e50;">
                                🚀 New Order Received
                            </h2>
                        </td>
                    </tr>

                    <!-- ORDER DETAILS -->
                    <tr>
                        <td style="padding:0 20px 20px;">
                            <table width="100%" cellpadding="10" cellspacing="0"
                                style="border-collapse:collapse;">
                                
                                <tr style="background:#ff6b6b; color:#ffffff;">
                                    <th colspan="2" style="text-align:left;">Order Details</th>
                                </tr>

                                <tr>
                                    <td style="background:#f9f9f9;"><strong>Order ID</strong></td>
                                    <td>{{ $order->id }}</td>
                                </tr>

                                <tr>
                                    <td style="background:#f9f9f9;"><strong>Customer</strong></td>
                                    <td>{{ $order->firstname }} {{ $order->lastname }}</td>
                                </tr>

                                <tr>
                                    <td style="background:#f9f9f9;"><strong>Phone</strong></td>
                                    <td>{{ $order->phone }}</td>
                                </tr>

                                <tr>
                                    <td style="background:#f9f9f9;"><strong>Total Amount</strong></td>
                                    <td style="color:#16a34a; font-weight:bold;">
                                        ₹{{ number_format($order->total, 2) }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- ITEMS -->
                    <tr>
                        <td style="padding:0 20px 20px;">
                            <table width="100%" cellpadding="10" cellspacing="0"
                                style="border-collapse:collapse;">
                                
                                <tr style="background:#1e90ff; color:#ffffff;">
                                    <th style="text-align:left;">Product</th>
                                    <th style="text-align:center;">Qty</th>
                                </tr>

                                @foreach ($order->orderItems as $item)
                                <tr style="border-bottom:1px solid #eeeeee;">
                                    <td>{{ $item->product->name }}</td>
                                    <td style="text-align:center; font-weight:bold;">
                                        {{ $item->quantity }}
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>

                </table>
                <!-- END CENTERED CONTAINER -->

            </td>
        </tr>
    </table>
</div>
