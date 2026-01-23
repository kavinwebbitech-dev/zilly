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

                <div class="col-md-4 mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}"
                        required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Original Price</label>
                    <input type="number" step="0.01" name="original_price" class="form-control"
                        value="{{ old('original_price') }}">
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Discount (%)</label>
                    <input type="number" name="discount_percent" class="form-control"
                        value="{{ old('discount_percent') }}">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Short Description</label>
                    <textarea name="short_description" class="form-control" rows="3">{{ old('short_description') }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">Color & Size</label>

                    <div id="colorSizeWrapper">

                        {{-- Default one row --}}
                        <div class="row g-2 mb-2 color-size-row">
                            <div class="col-md-5">
                                <select name="color_size[0][color]" class="form-select" required>
                                    <option value="">-- Color --</option>
                                    <option value="red">Red</option>
                                    <option value="blue">Blue</option>
                                    <option value="black">Black</option>
                                    <option value="white">White</option>
                                </select>
                            </div>

                            <div class="col-md-5">
                                <select name="color_size[0][size]" class="form-select" required>
                                    <option value="">-- Size --</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <button type="button" class="btn btn-danger removeRow">X</button>
                            </div>
                        </div>

                    </div>

                    <button type="button" class="btn btn-secondary mt-2" id="addRow">
                        + 
                    </button>
                </div>
                <script>
                    let rowIndex = 1;

                    document.getElementById('addRow').addEventListener('click', function() {
                        const wrapper = document.getElementById('colorSizeWrapper');

                        const row = document.createElement('div');
                        row.classList.add('row', 'g-2', 'mb-2', 'color-size-row');

                        row.innerHTML = `
        <div class="col-md-5">
            <select name="color_size[${rowIndex}][color]" class="form-select" required>
                <option value="">-- Color --</option>
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="black">Black</option>
                <option value="white">White</option>
            </select>
        </div>

        <div class="col-md-5">
            <select name="color_size[${rowIndex}][size]" class="form-select" required>
                <option value="">-- Size --</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
        </div>

        <div class="col-md-2">
            <button type="button" class="btn btn-danger removeRow">X</button>
        </div>
    `;

                        wrapper.appendChild(row);
                        rowIndex++;
                    });

                    document.addEventListener('click', function(e) {
                        if (e.target.classList.contains('removeRow')) {
                            e.target.closest('.color-size-row').remove();
                        }
                    });
                </script>


                <div class="form-check mt-2">
                    <input type="checkbox" name="status" value="1" class="form-check-input" checked>
                    <label class="form-check-label">Active</label>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Product Images</label>
                    <input type="file" name="product_images[]" class="form-control" multiple accept="image/*">
                </div>

            </div>

            <button type="submit" class="btn btn-primary">
                Save Product
            </button>

            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                Back
            </a>

        </form>

    </div>
@endsection
