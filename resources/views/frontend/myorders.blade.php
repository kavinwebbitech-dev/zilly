@extends('frontend.layouts.app')

@section('content')
    <section class="tf-page-title">
        <div class="box-title text-center">
            <h4 class="title">My Orders</h4>
            <div class="breadcrumb-list">
                <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                <div class="breadcrumb-item dot"><span></span></div>
                <div class="breadcrumb-item current">My Orders</div>
            </div>
        </div>

    </section>
    <br><br>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "{{ session('success') }}"
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: "{{ session('error') }}"
            });
        </script>
    @endif

    <div class="container">
        @if ($orders->isEmpty())
            <div class="alert alert-info text-center">
                You have no orders yet.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle ">

                    {{-- TABLE HEAD --}}
                    <thead class="my-orders-table">
                        <tr>
                            <th style="width:60px;">S.No</th>
                            <th style="width:120px;">Order ID</th>
                            <th style="width:160px;">Date</th>
                            <th style="width:130px;">Status</th>
                            <th style="width:140px;">Total</th>
                            <th style="width:120px;">Items</th>
                            <th style="width:120px;">Action</th>
                        </tr>
                    </thead>

                    {{-- TABLE BODY --}}
                    <tbody>
                        @foreach ($orders as $key => $order)
                            {{-- PARENT ROW --}}
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->created_at->format('d M, Y') }}</td>

                                {{-- STATUS WITH COLOR --}}
                                <td>
                                    @php
                                        $statusClass = match ($order->status) {
                                            'pending' => 'bg-primary',
                                            'confirmed' => 'bg-info',
                                            'shipped' => 'bg-warning',
                                            'delivered' => 'bg-success',
                                            'canceled' => 'bg-danger',
                                            default => 'bg-secondary',
                                        };
                                    @endphp
                                    <span class="badge {{ $statusClass }}">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </td>

                                <td>${{ number_format($order->total, 2) }}</td>

                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary toggle-items"
                                        data-target="items-{{ $order->id }}">
                                        View items
                                    </button>
                                </td>
                                <td class="text-center">

                                    {{-- PENDING → Cancel --}}
                                    @if ($order->status === 'pending')
                                        <form action="{{ route('order.cancel', $order->id) }}" method="POST"
                                            class="d-inline cancel-order-form">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                title="Cancel Order">
                                                <i class="fa-solid fa-ban fs-6"></i>
                                            </button>
                                        </form>
                                    @endif
                                    <script>
                                        document.addEventListener('submit', function(e) {
                                            if (e.target.classList.contains('cancel-order-form')) {
                                                e.preventDefault();

                                                const form = e.target;

                                                Swal.fire({
                                                    title: 'Cancel Order?',
                                                    text: 'This action cannot be undone.',
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonColor: '#dc3545',
                                                    cancelButtonColor: '#6c757d',
                                                    confirmButtonText: 'Yes, cancel it'
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        form.submit(); // ✅ submit AFTER confirm
                                                    }
                                                });
                                            }
                                        });
                                    </script>


                                    @if ($order->status === 'delivered')
                                        <button type="button" class="btn btn-sm btn-outline-dark return-btn"
                                            data-order-id="{{ $order->id }}" title="Return Order">
                                            <i class="fa-solid fa-rotate-left fs-6"></i>
                                        </button>
                                    @endif
                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                                    <script>
                                        document.addEventListener('click', function(e) {
                                            const btn = e.target.closest('.return-btn');
                                            if (!btn) return;

                                            const orderId = btn.dataset.orderId;

                                            Swal.fire({
                                                title: 'Return Order?',
                                                text: 'Please provide a reason for returning this order.',
                                                icon: 'info',
                                                showCancelButton: true,
                                                confirmButtonText: 'Continue',
                                                cancelButtonText: 'Cancel'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    const modalEl = document.getElementById('returnModal' + orderId);
                                                    const modal = new bootstrap.Modal(modalEl);
                                                    modal.show(); // ✅ open modal AFTER popup
                                                }
                                            });
                                        });
                                    </script>


                                </td>


                            </tr>

                            {{-- CHILD ROW (ORDER ITEMS) --}}
                            <tr id="items-{{ $order->id }}" class="order-items-row d-none">
                                <td colspan="6">
                                    <table class="table table-sm table-bordered mb-0">
                                        <thead class="table-light my-orders-table">
                                            <tr>
                                                <th style="width:50px;">S.No</th>
                                                <th>Product</th>
                                                <th style="width:80px;">Qty</th>
                                                <th style="width:100px;">Price</th>
                                                <th style="width:120px;">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->orderItems as $i => $item)
                                                <tr>
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $item->product->name ?? 'Product removed' }}</td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>${{ number_format($item->price, 2) }}</td>
                                                    <td>
                                                        ${{ number_format($item->quantity * $item->price, 2) }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="4" class="text-end">Order Total</th>
                                                <th>
                                                    ${{ number_format($order->orderItems->sum(fn($i) => $i->quantity * $i->price), 2) }}
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </td>
                            </tr>
                            <div class="modal fade" id="returnModal{{ $order->id }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <form action="{{ route('order.return', $order->id) }}" method="POST">
                                            @csrf

                                            <div class="modal-header">
                                                <h5 class="modal-title">Return Order #{{ $order->id }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <label class="form-label">Return Reason / Remark</label>
                                                <textarea name="return_remark" class="form-control" rows="4" required placeholder="Enter reason for return..."></textarea>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm"
                                                    data-bs-dismiss="modal">
                                                    Cancel
                                                </button>
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Submit Return
                                                </button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>


    <style>
        /* MAIN TABLE BORDER */
        .my-orders-table {
            border: 1px solid #dee2e6;
            border-collapse: collapse;
            text-align: center !important;
            vertical-align: middle !important;

        }

        td {
            text-align: center !important;
            vertical-align: middle !important;
            border: 1px solid #dee2e6 !important;
        }

        /* CELL BORDERS */
        .my-orders-table th {
            background: #603917;
            color: #fff;
            text-align: center !important;
            vertical-align: middle !important;
        }

        .my-orders-table th,
        .my-orders-table td {
            border: 1px solid #dee2e6 !important;
            text-align: center !important;
            vertical-align: middle !important;
        }

        /* HEADER BORDER FIX */
        .my-orders-table thead th {
            border-color: #603917 !important;
            text-align: center !important;
            vertical-align: middle !important;
        }

        /* CHILD ROW CONTAINER */
        .order-items-row td {
            background: #f9f9f9;
            padding: 15px !important;
            border-top: 2px solid #dee2e6 !important;
            text-align: center !important;
            vertical-align: middle !important;
        }

        /* CHILD TABLE BORDER */
        .order-items-row table {
            border: 1px solid #dee2e6;

        }

        /* CHILD TABLE CELLS */
        .order-items-row table th,
        .order-items-row table td {
            border: 1px solid #dee2e6 !important;

        }

        /* ACTION BUTTON ALIGNMENT */
        .my-orders-table td:last-child {
            white-space: nowrap;
        }
    </style>


    {{-- TOGGLE SCRIPT --}}
    <script>
        document.querySelectorAll('.toggle-items').forEach(btn => {
            btn.addEventListener('click', function() {
                const row = document.getElementById(this.dataset.target);
                row.classList.toggle('d-none');
                this.textContent = row.classList.contains('d-none') ?
                    'View items' :
                    'Hide items';
            });
        });
    </script>
@endsection
