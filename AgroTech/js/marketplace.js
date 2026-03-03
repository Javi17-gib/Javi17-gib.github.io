let cart = [];
let discount = 0;

function toggleCart(){
document.getElementById("cart").classList.toggle("active");
document.getElementById("cartOverlay").classList.toggle("active");
}

function addToCart(name, price, image="https://via.placeholder.com/70"){
let existing = cart.find(item => item.name === name);

if(existing){
existing.quantity++;
}else{
cart.push({name, price, image, quantity:1});
}

updateCart();
toggleCart();
}

function updateCart(){
let cartItems = document.getElementById("cart-items");
cartItems.innerHTML = "";
let subtotal = 0;

cart.forEach((item,index)=>{
subtotal += item.price * item.quantity;

cartItems.innerHTML += `
<li class="cart-item">
<img src="${item.image}">
<div class="cart-item-info">
<div class="cart-item-title">${item.name}</div>
<div class="cart-item-price">$${item.price} MXN</div>
<div class="quantity-controls">
<button onclick="changeQty(${index}, -1)">−</button>
<span>${item.quantity}</span>
<button onclick="changeQty(${index}, 1)">+</button>
</div>
<button class="remove-btn" onclick="removeItem(${index})">Eliminar</button>
</div>
</li>
`;
});

let shipping = subtotal > 2000 ? 0 : 150;
let total = subtotal + shipping - discount;

document.getElementById("subtotal").innerText = subtotal;
document.getElementById("shipping").innerText = shipping;
document.getElementById("discount").innerText = discount;
document.getElementById("cart-total").innerText = total;
document.getElementById("cart-count").innerText = cart.length;
}

function changeQty(index, change){
cart[index].quantity += change;
if(cart[index].quantity <= 0){
cart.splice(index,1);
}
updateCart();
}

function removeItem(index){
cart.splice(index,1);
updateCart();
}

function applyCoupon(){
let code = document.getElementById("couponInput").value;

if(code === "AGRO10"){
discount = 200;
}else{
discount = 0;
alert("Cupón inválido");
}

updateCart();
}