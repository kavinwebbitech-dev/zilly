@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid py-2">
        <h3 class="mb-4">Dashboard</h3>

        <div class="row g-4 justify-content-center">

            <!-- Categories -->
            <div class="col-12 col-sm-6 col-md-4 col-lg custom-card">
                <a href="{{ route('admin.categories.index') }}" class="text-decoration-none">
                    <div class="card text-center p-4 shadow-sm hover-shadow rounded-3 border-0 bg-primary text-white">
                        <i class="fas fa-list fa-2x mb-2"></i>
                        <h6 class="mb-1">Categories</h6>
                        <h2 class="fw-bold count" data-target="{{ $categoryCount }}">0</h2>
                    </div>
                </a>
            </div>

            <!-- Brands -->
            <div class="col-12 col-sm-6 col-md-4 col-lg custom-card">
                <a href="{{ route('admin.brands.index') }}" class="text-decoration-none">
                    <div class="card text-center p-4 shadow-sm hover-shadow rounded-3 border-0 bg-success text-white">
                        <i class="fas fa-tags fa-2x mb-2"></i>
                        <h6 class="mb-1">Brands</h6>
                        <h2 class="fw-bold count" data-target="{{ $brandCount }}">0</h2>
                    </div>
                </a>
            </div>

            <!-- Products -->
            <div class="col-12 col-sm-6 col-md-4 col-lg custom-card">
                <a href="{{ route('admin.products.index') }}" class="text-decoration-none">
                    <div class="card text-center p-4 shadow-sm hover-shadow rounded-3 border-0 bg-warning text-white">
                        <i class="fas fa-boxes fa-2x mb-2"></i>
                        <h6 class="mb-1">Products</h6>
                        <h2 class="fw-bold count" data-target="{{ $productCount }}">0</h2>
                    </div>
                </a>
            </div>

            <!-- Orders -->
            <div class="col-12 col-sm-6 col-md-4 col-lg custom-card">
                <a href="{{ route('admin.orders.index') }}" class="text-decoration-none">
                    <div class="card text-center p-4 shadow-sm hover-shadow rounded-3 border-0 bg-info text-white">
                        <i class="fas fa-shopping-cart fa-2x mb-2"></i>
                        <h6 class="mb-1">Orders</h6>
                        <h2 class="fw-bold count" data-target="{{ $orderCount }}">0</h2>
                    </div>
                </a>
            </div>

            <!-- Coupons -->
            <div class="col-12 col-sm-6 col-md-4 col-lg custom-card">
                <a href="{{ route('admin.coupons.index') }}" class="text-decoration-none">
                    <div class="card text-center p-4 shadow-sm hover-shadow rounded-3 border-0 bg-danger text-white">
                        <i class="fas fa-ticket-alt fa-2x mb-2"></i>
                        <h6 class="mb-1">Coupons</h6>
                        <h2 class="fw-bold count" data-target="{{ $couponCount }}">0</h2>
                    </div>
                </a>
            </div>

        </div>

        @push('styles')
            <style>
                /* Custom width for large screens: 4 cards per row */
                @media (min-width: 992px) {
                    .custom-card {
                        flex: 0 0 23%;
                        /* slightly less than 25% to account for gutter */
                        max-width: 23%;
                    }
                }

                .hover-shadow:hover {
                    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
                    transform: translateY(-4px);
                    transition: all 0.3s ease;
                }
            </style>
        @endpush



        <hr class="my-4">

        <!-- Recent Entries Section -->
        <div class="row mt-4">
            <div class="col-md-6">
                <h5>Recent Products</h5>
                <ul class="list-group shadow-sm rounded-3">
                    @foreach ($recentProducts as $product)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $product->name }}
                            <span class="text-muted">{{ $product->created_at->format('d M Y') }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-6">
                <h5>Recent Orders</h5>
                <ul class="list-group shadow-sm rounded-3">
                    @foreach ($recentOrders as $order)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Order #{{ $order->id }} - {{ $order->status }}
                            <span class="text-muted">{{ $order->created_at->format('d M Y') }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <h5>Recent Categories</h5>
                <ul class="list-group shadow-sm rounded-3">
                    @foreach ($recentCategories as $category)
                        <li class="list-group-item">{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h5>Recent Brands</h5>
                <ul class="list-group shadow-sm rounded-3">
                    @foreach ($recentBrands as $brand)
                        <li class="list-group-item">{{ $brand->name }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h5>Recent Coupons</h5>
                <ul class="list-group shadow-sm rounded-3">
                    @foreach ($recentCoupons as $coupon)
                        <li class="list-group-item">{{ $coupon->code }} - {{ $coupon->discount }}%</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .hover-shadow:hover {
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
            transform: translateY(-4px);
            transition: all 0.3s ease;
        }

        .count {
            transition: all 1s ease-in-out;
        }

        /* Optional: Card animation on page load */
        .card {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Animated count numbers
        const counters = document.querySelectorAll('.count');
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / 50; // speed
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 20);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    </script>
@endpush
