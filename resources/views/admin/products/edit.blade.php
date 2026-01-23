@extends('admin.layouts.app')

@section('content')
    <style>
        .image-box {
            position: relative;
            width: 50%;
            /* control image container size */
        }

        .product-image {
            width: 100%;
            border-radius: 6px;
            transition: 0.3s ease;
        }

        /* Hide delete button */
        .image-delete-btn {
            position: absolute;
            top: 6px;
            right: 6px;
            opacity: 0;
            transform: scale(0.8);
            transition: 0.25s ease;
            box-shadow: 0 0 0 rgba(0, 0, 0, 0);
        }



        /* Hover effects */
        .image-box:hover::after {
            opacity: 1;
        }

        .image-box:hover .image-delete-btn {
            opacity: 1;
            transform: scale(1);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.35);
        }

        .image-box:hover .product-image {
            transform: scale(1.02);
        }
    </style>
    <div class="container-fluid">

        <h4 class="mb-3">Edit Product</h4>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Category</label>
                    <select name="category_id" class="form-select" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
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
                            <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                {{ $brand->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}"
                        required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" step="0.01" name="price" class="form-control"
                        value="{{ old('price', $product->price) }}" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Original Price</label>
                    <input type="number" step="0.01" name="original_price" class="form-control"
                        value="{{ old('original_price', $product->original_price) }}">
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Discount (%)</label>
                    <input type="number" name="discount_percent" class="form-control"
                        value="{{ old('discount_percent', $product->discount_percent) }}">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Short Description</label>
                    <textarea name="short_description" class="form-control" rows="3">{{ old('short_description', $product->short_description) }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">Color & Size Variants</label>

                    <div id="colorSizeWrapper">

                        @foreach ($product->color_size ?? [] as $index => $variant)
                            <div class="row g-2 align-items-center mb-2 color-size-row">
                                <div class="col-md-5">
                                    <select name="color_size[{{ $index }}][color]" class="form-select" required>
                                        <option value="">Select Color</option>
                                        @foreach (['red', 'blue', 'black', 'white'] as $color)
                                            <option value="{{ $color }}"
                                                {{ ($variant['color'] ?? '') === $color ? 'selected' : '' }}>
                                                {{ ucfirst($color) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-5">
                                    <select name="color_size[{{ $index }}][size]" class="form-select" required>
                                        <option value="">Select Size</option>
                                        @foreach (['S', 'M', 'L', 'XL'] as $size)
                                            <option value="{{ $size }}"
                                                {{ ($variant['size'] ?? '') === $size ? 'selected' : '' }}>
                                                {{ $size }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <button type="button" class="btn btn-danger removeRow">×</button>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <button type="button" class="btn btn-sm btn-primary mt-2" id="addMore">
                        + 
                    </button>
                </div>
                @push('scripts')
                    <script>
                        let index = {{ count($product->color_size ?? []) }};

                        document.getElementById('addMore').addEventListener('click', function() {
                            const wrapper = document.getElementById('colorSizeWrapper');

                            const row = `
        <div class="row g-2 align-items-center mb-2 color-size-row">
            <div class="col-md-5">
                <select name="color_size[${index}][color]" class="form-select" required>
                    <option value="">Select Color</option>
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="black">Black</option>
                    <option value="white">White</option>
                </select>
            </div>

            <div class="col-md-5">
                <select name="color_size[${index}][size]" class="form-select" required>
                    <option value="">Select Size</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </div>

            <div class="col-md-2">
                <button type="button" class="btn btn-danger removeRow">×</button>
            </div>
        </div>
    `;

                            wrapper.insertAdjacentHTML('beforeend', row);
                            index++;
                        });

                        document.addEventListener('click', function(e) {
                            if (e.target.classList.contains('removeRow')) {
                                e.target.closest('.color-size-row').remove();
                            }
                        });
                    </script>
                @endpush



                <div class="form-check mt-2">
                    <input type="checkbox" name="status" value="1" class="form-check-input" checked>
                    <label class="form-check-label">Active</label>
                </div>


            </div>
            <div class="row mb-3">
                <div class="mb-3">
                    <label class="form-label">Add More Images</label>
                    <input type="file" name="product_images[]" class="form-control" multiple accept="image/*">
                </div>
                @foreach ($product->images as $img)
                    <div class="col-md-3">
                        <div class="image-box">
                            <img src="{{ asset('storage/' . $img->image) }}" class="product-image" alt="Product Image">
                            <button type="button" class="image-delete-btn btn btn-danger btn-sm delete-image"
                                data-id="{{ $img->id }}">X</button>
                        </div>

                    </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">
                Update Product
            </button>

            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                Back
            </a>

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @push('scripts')
        <script>
            $(document).on('click', '.delete-image', function() {

                if (!confirm('Are you sure you want to delete this image?')) {
                    return;
                }

                let imageId = $(this).data('id');
                let button = $(this);

                $.ajax({
                    url: "{{ url('admin/products/images') }}/" + imageId,
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function() {
                        button.closest('.col-md-3').remove();
                    },
                    success: function(response) {
                        button.closest('.col-md-3').fadeOut(300, function() {
                            $(this).remove();
                        });
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        alert('Failed to delete image');
                    }
                });
            });
        </script>
    @endpush


@endsection
