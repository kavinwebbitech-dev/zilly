<style>
    /* Prevent background scroll */
.skeleton {
    height: 300px;
    border-radius: 12px;
    background: linear-gradient(
        90deg,
        #f0f0f0 25%,
        #e0e0e0 37%,
        #f0f0f0 63%
    );
    background-size: 400% 100%;
    animation: shimmer 1.4s ease infinite;
}

@keyframes shimmer {
    0% { background-position: 100% 0 }
    100% { background-position: -100% 0 }
}


    </style>

<div class="modal fade" id="search" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content d-flex flex-column">

            <!-- HEADER -->
            <div class="header p-3 border-bottom d-flex justify-content-end flex-shrink-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- BODY -->
            <div class="modal-body overflow-auto">

                <!-- STICKY SEARCH -->
                <div class="sticky-top bg-white border-bottom top-0">
                    <div class="container">
                        <div class="row justify-content-center p-3">
                            <div class="col-lg-8 text-center">
                                <h4 class="mb-3">What are you looking for?</h4>
                                <div class="input-group input-group-lg shadow-sm">
                                    <input type="text" id="searchInput" class="form-control"
                                        placeholder="Search products..." autocomplete="off">
                                    <button class="btn btn-dark" id="searchBtn">
                                        <i class="icon icon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RESULTS -->
                <div class="container py-5">
                    <div class="row g-4" id="searchResults"></div>
                </div>

            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {

        const BASE_URL = "{{ url('/') }}"; // Set the base URL dynamically
        const searchInput = document.getElementById('searchInput');
        const searchBtn = document.getElementById('searchBtn');
        const resultsBox = document.getElementById('searchResults');
        let debounceTimer;

        function renderProducts(products) {
            resultsBox.innerHTML = '';

            if (!products.length) {
                resultsBox.innerHTML = `<p class="text-center text-muted w-100">No products found.</p>`;
                return;
            }

            products.forEach(product => {
                // Use base URL for images
                let img = `${BASE_URL}/asset/images/no-image.png`; // default image
                if (product.images && product.images.length > 0 && product.images[0].image) {
                    img = `${BASE_URL}/storage/${product.images[0].image}`; // match Blade storage path
                }

                resultsBox.innerHTML += `
                <div class="col-6 col-md-3">
                    <div class="card h-100 text-center shadow-sm border-0">
                        <a href="${BASE_URL}/product-details/${product.id}">
                            <img src="${img}" class="card-img-top" alt="${product.name}">
                        </a>
                        <div class="card-body">
                            <a href="${BASE_URL}/product-details/${product.id}" class="fw-medium d-block text-decoration-none text-dark">
                                ${product.name}
                            </a>
                            <div class="d-flex gap-3">
                                <div class="fw-bold mt-1">
                                    ₹${Number(product.price).toFixed(2)}
                                </div>

                                <div class="fw-bold mt-1 text-decoration-line-through text-muted">
                                    ₹${Number(product.original_price).toFixed(2)}
                                </div>

                                <div class="fw-bold mt-1 text-success">
                                    ${Number(product.discount_percent)}%
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                `;
            });
        }

        function performSearch() {
            const query = searchInput.value.trim();

            if (query.length < 2) {
                resultsBox.innerHTML = '';
                return;
            }

            fetch(`{{ route('products.search') }}?query=${encodeURIComponent(query)}`)
                .then(res => res.json())
                .then(renderProducts)
                .catch(err => console.error(err));
        }

        // Live search with debounce
        searchInput.addEventListener('keyup', () => {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(performSearch, 300);
        });

        // Button click triggers search
        searchBtn.addEventListener('click', performSearch);

    });
</script>
