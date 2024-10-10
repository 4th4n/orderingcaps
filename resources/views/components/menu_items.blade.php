<div class="container">
    <div class="row menu-items">
        <div class="col-md-4 item-card">
            <div class="card shadow-sm rounded">
                <img src=" {{ asset('img/burger.jpg') }}" class="card-img-top rounded-top" alt="Burger">
                <div class="card-body text-center">
                    <h5 class="card-title font-weight-bold text-uppercase">Burger</h5>
                    <p class="card-text text-muted">150</p>
                    <p class="rating">Rating: <span class="text-warning">4.4 ★</span></p>
                    <button class="btn btn-primary add-to-cart px-4 py-2" data-id="1">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4 item-card">
            <div class="card shadow-sm rounded">
                <img src=" {{ asset('img/pizza.jpg') }}" class="card-img-top rounded-top" alt="Pizza">
                <div class="card-body text-center">
                    <h5 class="card-title font-weight-bold text-uppercase">Pizza</h5>
                    <p class="card-text text-muted">₱200</p>
                    <p class="rating">Rating: <span class="text-warning">4.8 ★</span></p>
                    <button class="btn btn-primary add-to-cart px-4 py-2" data-id="2">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4 item-card">
            <div class="card shadow-sm rounded">
                <img src="{{ asset('img/samosa.jpg') }}" class="card-img-top rounded-top" alt="Samosa">
                <div class="card-body text-center">
                    <h5 class="card-title font-weight-bold text-uppercase">Samosa</h5>
                    <p class="card-text text-muted">₱150</p>
                    <p class="rating">Rating: <span class="text-warning">4.5 ★</span></p>
                    <button class="btn btn-primary add-to-cart px-4 py-2" data-id="3">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row menu-items">
        <div class="col-md-4 item-card">
            <div class="card shadow-sm rounded">
                <img src=" {{ asset('img/drinks.jpg') }}" class="card-img-top rounded-top" alt="Drinks">
                <div class="card-body text-center">
                    <h5 class="card-title font-weight-bold text-uppercase">Drinks</h5>
                    <p class="card-text text-muted">₱130</p>
                    <p class="rating">Rating: <span class="text-warning">4.6 ★</span></p>
                    <button class="btn btn-primary add-to-cart px-4 py-2" data-id="4">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4 item-card">
            <div class="card shadow-sm rounded">
                <img src="{{ asset('img/dessert.jpg') }}" class="card-img-top rounded-top" alt="Desserts">
                <div class="card-body text-center">
                    <h5 class="card-title font-weight-bold text-uppercase">Desserts</h5>
                    <p class="card-text text-muted">₱120</p>
                    <p class="rating">Rating: <span class="text-warning">4.9 ★</span></p>
                    <button class="btn btn-primary add-to-cart px-4 py-2" data-id="5">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4 item-card">
            <div class="card shadow-sm rounded">
                <img src="{{ asset('img/sausage.jpg') }}" class="card-img-top rounded-top" alt="Sausage">
                <div class="card-body text-center">
                    <h5 class="card-title font-weight-bold text-uppercase">Sausage</h5>
                    <p class="card-text text-muted">₱100</p>
                    <p class="rating">Rating: <span class="text-warning">4.7 ★</span></p>
                    <button class="btn btn-primary add-to-cart px-4 py-2" data-id="6">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif


    <!-- Repeat the row structure for more items as needed -->
</div>
