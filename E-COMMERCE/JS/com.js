// Elementos del DOM
const cartIcon = document.querySelector("#cart-icon");
const cart = document.querySelector(".cart");
const cartClose = document.querySelector("#cart-close");
const shopContent = document.querySelector(".shop-content");
const cartContent = document.querySelector(".cart-content");
const totalPriceElement = document.querySelector(".total-price");
const buyButton = document.querySelector(".btn-buy");

// Variables del carrito
let cartItems = [];

// Mostrar el carrito
cartIcon.addEventListener("click", () => {
    cart.classList.add("active");
});

// Cerrar el carrito
cartClose.addEventListener("click", () => {
    cart.classList.remove("active");
});

// Actualizar el carrito
const updateCart = () => {
    cartContent.innerHTML = ""; // Limpiar contenido actual
    let totalPrice = 0;

    cartItems.forEach((item, index) => {
        const cartBox = document.createElement("div");
        cartBox.classList.add("cart-box");

        cartBox.innerHTML = `
            <img src="${item.img}" alt="${item.title}" class="cart-img">
            <div class="detail-box">
                <div class="cart-product-title">${item.title}</div>
                <div class="cart-price">$${item.price.toFixed(2)}</div>
                <input type="number" value="${item.quantity}" class="cart-quantity" min="1" data-index="${index}">
            </div>
            <i class="bi bi-trash-fill cart-remove" data-index="${index}"></i>
        `;

        cartContent.appendChild(cartBox);
        totalPrice += item.price * item.quantity;
    });

    totalPriceElement.textContent = `$${totalPrice.toFixed(2)}`;

    // Añadir eventos a los botones de eliminar
    const removeButtons = document.querySelectorAll(".cart-remove");
    removeButtons.forEach(button => {
        button.addEventListener("click", removeItem);
    });

    // Añadir eventos para actualizar la cantidad
    const quantityInputs = document.querySelectorAll(".cart-quantity");
    quantityInputs.forEach(input => {
        input.addEventListener("change", updateQuantity);
    });
};

// Agregar producto al carrito
shopContent.addEventListener("click", (e) => {
    if (e.target.classList.contains("add-cart")) {
        const productBox = e.target.closest(".product-box");
        const title = productBox.querySelector(".product-title").textContent;
        const price = parseFloat(productBox.querySelector(".product-price").textContent.replace("$", "").replace(",", ""));
        const img = productBox.querySelector(".product-img").src;

        // Verificar si el producto ya está en el carrito
        const existingItem = cartItems.find(item => item.title === title);
        if (existingItem) {
            existingItem.quantity++;
        } else {
            cartItems.push({ title, price, img, quantity: 1 });
        }

        updateCart();
    }
});

// Eliminar producto del carrito
const removeItem = (e) => {
    const index = e.target.getAttribute("data-index");
    cartItems.splice(index, 1); // Eliminar el producto del array
    updateCart();
};

// Actualizar cantidad
const updateQuantity = (e) => {
    const index = e.target.getAttribute("data-index");
    const newQuantity = parseInt(e.target.value);
    if (newQuantity > 0) {
        cartItems[index].quantity = newQuantity; // Actualizar cantidad
    } else {
        cartItems.splice(index, 1); // Eliminar si la cantidad es 0
    }
    updateCart();
};

// Comprar productos
buyButton.addEventListener("click", () => {
    if (cartItems.length > 0) {
        alert("¡Gracias por tu compra!");
        cartItems = [];
        updateCart();
    } else {
        alert("El carrito está vacío.");
    }
});


let darkmode =document.querySelector('#darkmode');

darkmode.onclick = () => {
    if(darkmode.classList.contains('ri-moon-fill')){
        darkmode.classList.replace('ri-moon-fill', 'ri-sun-line');
        document.body.classList.add('color');
    }else{
        darkmode.classList.replace('ri-sun-line', 'ri-moon-fill');
        document.body.classList.remove('color');
    }
}