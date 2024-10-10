<div class="col-lg-4" id="cart-summary">
<h4 class="text-center">My Order/s</h4>
    <div id="cart-items"></div>
    <div class="bg-light p-3 rounded shadow-sm">
      
        <p class="text-center">Total: <strong id="cart-total">₱0.00</strong></p>
        <div class="d-grid gap-2">
            <button class="btn btn-success">Checkout</button>
        </div>
    </div>
</div>

<script>
// Array to hold cart items
let cart = [];

// Function to add items to the cart
function addToCart(item) {
    const cartItem = cart.find(i => i.id === item.id);
    if (cartItem) {
        cartItem.quantity++;
    } else {
        cart.push({...item, quantity: 1});
    }
    updateCartSummary();
}

// Function to update the cart summary
function updateCartSummary() {
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotalElement = document.getElementById('cart-total');
    cartItemsContainer.innerHTML = ''; // Clear previous items

    let total = 0;
    
    cart.forEach(item => {
        const itemTotal = item.price * item.quantity;
        total += itemTotal;

        const cartItemHTML = `
            <div class="cart-item d-flex justify-content-between align-items-center mb-2">
                <img src="${item.img}" alt="${item.name}" class="img-thumbnail" style="width: 50px;">
                <div>${item.name}</div>
                <div>
                    <button class="btn btn-sm btn-secondary" onclick="changeQuantity(${item.id}, -1)">-</button>
                    <span class="mx-2">${item.quantity}</span>
                    <button class="btn btn-sm btn-secondary" onclick="changeQuantity(${item.id}, 1)">+</button>
                    <button class="btn btn-sm btn-danger" onclick="removeFromCart(${item.id})">Remove</button>
                </div>
                <div>₱${itemTotal.toFixed(2)}</div> <!-- Changed to peso -->
            </div>
        `;
        cartItemsContainer.innerHTML += cartItemHTML;
    });

    cartTotalElement.innerText = `₱${total.toFixed(2)}`; // Changed to peso
}

// Function to change the quantity of items in the cart
function changeQuantity(id, change) {
    const cartItem = cart.find(i => i.id === id);
    if (cartItem) {
        cartItem.quantity += change;

        // Remove item from cart if quantity is 0
        if (cartItem.quantity <= 0) {
            cart = cart.filter(i => i.id !== id);
        }
    }
    updateCartSummary();
}

// Function to remove an item from the cart
function removeFromCart(id) {
    cart = cart.filter(i => i.id !== id);
    updateCartSummary();
}

// Event listeners for add to cart buttons
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        const id = parseInt(this.getAttribute('data-id'));
        let item = {};

        switch (id) {
            case 1:
                item = { id: 1, name: 'Burger', price: 200, img: 'img/burger.jpg' };
                break;
            case 2:
                item = { id: 2, name: 'Pizza', price: 300, img: 'img/pizza.jpg' };
                break;
            case 3:
                item = { id: 3, name: 'Samosa', price: 250, img: 'img/samosa.jpg' };
                break;
            case 4:
                item = { id: 4, name: 'Drinks', price: 150, img: 'img/drinks.jpg' };
                break;
            case 5:
                item = { id: 5, name: 'Desserts', price: 100, img: 'img/dessert.jpg' };
                break;
            case 6:
                item = { id: 6, name: 'Sausage', price: 50, img: 'img/sausage.jpg' };
                break;
        }

        addToCart(item);
    });
});
</script>
