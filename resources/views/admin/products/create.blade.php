@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <h4 class="mb-3">Add Product</h4>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Category</label>
                    <select name="category_id" class="form-select" required>
                        <option value="">-- Select Category --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Brand</label>
                    <select name="brand_id" class="form-select" required>
                        <option value="">-- Select Brand --</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">
                                {{ $brand->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                </div>
                <!-- Original Price -->
                <div class="col-md-4 mb-3">
                    <label class="form-label">Original Price</label>
                    <input type="number" step="0.01" id="originalPrice" name="original_price" class="form-control"
                        value="{{ old('original_price') }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" step="0.01" id="price" name="price" class="form-control"
                        value="{{ old('price') }}" required>
                </div>
                <!-- Discount (%) -->
                <div class="col-md-4 mb-3">
                    <label class="form-label">Discount (%)</label>
                    <input type="number" step="0.01" id="discountPercent" name="discount_percent" class="form-control"
                        value="{{ old('discount_percent') }}">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Product Detail</label>
                    <textarea name="short_description" class="form-control" rows="5">{{ old('short_description') }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">Care Instructions</label>
                    <textarea name="care_instructions" class="form-control" rows="5">{{ old('care_instructions') }}</textarea>
                </div>

                <div class="d-flex gap-5 align-items-center">

                    <!-- STATUS -->
                    <div class="form-check mt-2">
                        <input type="checkbox" name="status" value="1" class="form-check-input"
                            {{ old('status', $product->status ?? 0) == 1 ? 'checked' : '' }}>
                        <label class="form-check-label">Active</label>
                    </div>

                    <!-- TODAY PICK -->
                    <div class="form-check mt-2">
                        <input type="checkbox" name="today_pick" value="1" class="form-check-input"
                            {{ old('today_pick', $product->today_pick ?? 0) == 1 ? 'checked' : '' }}>
                        <label class="form-check-label">Today's pick show</label>
                    </div>

                </div>
                <div class="col-md-12 mt-3">
                    <label class="form-label">Product Image angle Details</label>
                    <input type="file" name="image_details[]" class="form-control" multiple accept="image/*">
                </div>  
                <div class="col-md-12 mt-3">
                    <label class="form-label">Product Images</label>
                    <input type="file" name="product_images[]" class="form-control" multiple accept="image/*">
                </div>

            </div>

            <button type="submit" class="btn btn-primary mt-3">
                Save Product
            </button>

            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary mt-3">
                Back
            </a>

        </form>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const priceInput = document.getElementById('price');
            const originalPriceInput = document.getElementById('originalPrice');
            const discountInput = document.getElementById('discountPercent');
            const discountBadge = document.getElementById('discountBadge');

            // Calculate price from discount
            function updatePriceFromDiscount() {
                const original = parseFloat(originalPriceInput.value) || 0;
                let discount = parseFloat(discountInput.value) || 0;

                if (original > 0) {
                    // Ensure discount is between 0 and 100
                    if (discount < 0) discount = 0;
                    if (discount > 100) discount = 100;

                    const price = original - (original * discount / 100);
                    priceInput.value = price.toFixed(2);
                    discountInput.value = discount.toFixed(2);
                    discountBadge.textContent = discount.toFixed(2) + '% off';
                } else {
                    priceInput.value = '';
                    discountInput.value = '';
                    discountBadge.textContent = '0% off';
                }
            }

            // Calculate discount from price
            function updateDiscountFromPrice() {
                const original = parseFloat(originalPriceInput.value) || 0;
                let price = parseFloat(priceInput.value) || 0;

                if (original > 0) {
                    let discount = ((original - price) / original) * 100;

                    // Keep discount between 0 and 100
                    if (discount < 0) discount = 0;
                    if (discount > 100) discount = 100;

                    discountInput.value = discount.toFixed(2);
                    discountBadge.textContent = discount.toFixed(2) + '% off';
                } else {
                    discountInput.value = 0;
                    discountBadge.textContent = '0% off';
                }
            }

            function updateAll() {
                const original = parseFloat(originalPriceInput.value) || 0;

                if (original > 0) {
                    if (document.activeElement === discountInput) {
                        updatePriceFromDiscount();
                    } else {
                        updateDiscountFromPrice();
                    }
                } else {
                    priceInput.value = '';
                    discountInput.value = '';
                    discountBadge.textContent = '0% off';
                }
            }

            priceInput.addEventListener('input', updateAll);
            discountInput.addEventListener('input', updateAll);
            originalPriceInput.addEventListener('input', updateAll);

            // Initialize on page load
            updateAll();
        });
    </script>


@endsection
