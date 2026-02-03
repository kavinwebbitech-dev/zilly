<h3>Order Canceled</h3>

<table class="table table-bordered w-50 mx-auto" style="background-color: #ffe6e6; color: #b71c1c; text-align: center;">
    <thead style="background-color: #f44336; color: #fff;">
        <tr>
            <th>Order ID</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ ucfirst($order->status) }}</td>
        </tr>
    </tbody>
</table>
