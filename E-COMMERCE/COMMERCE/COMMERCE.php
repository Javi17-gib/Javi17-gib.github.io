<?php  
include "../admin/php/conexion.php";
$sql = "select * from PRODUCTOS";
$res = $conexion -> query($sql) or die($conexion-> error);
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="COMMERCE.CSS">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
</head>
<body>
    <header>
        <div class="nav container">
            <a href="#" class="logo"><i class="ri-store-3-line"></i class="i">E-COMMERCE</a>
                <ul class="listanav">
                    <li><a href="../INDEX/INDEX.HTML">Inicio</a></li>
                    <li><a href="#">Ubicacion</a></li>
                    <li><a href="COMMERCE.php" class="activo">Tienda</a></li>
                    <li><a href="#">Contactanos</a></li>
                </ul>
                <div class="nav-derecha">
                    <a href="../LOGIN/login.php" class="nav-btn">Log In</a>
                    <i class="ri-moon-fill bx-moon" id="darkmode"></i>
                </div>
            <i class="bi bi-cart-fill" id="cart-icon"></i> 
            
            <div class="cart">
                <h2 class="cart-title">Tu Carrito</h2>
                <div class="cart-content"></div>
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">$0.00</div>
                </div>
                <button type="button" class="btn-buy">Comprar Ahora</button>
                <i class="bi bi-x" id="cart-close"></i>
            </div>
        </div>
    </header>

    <section class="shop container">
        <h2 class="section-title">Nuestros Productos</h2>
        <div class="shop-content">

            <!-- Producto -->
            <div class="product-box">
                
                <img src="../fotos/control ps5.jpeg" alt="Producto" class="product-img">
                <h2 class="product-title">Control Play Station 5</h2>
                <span class="product-price">$1,200.00</span>
                <i class="bi bi-bag-check-fill add-cart"></i>
            </div>
            <div class="product-box">
                <img src="../fotos/control xbox.jpeg" alt="Producto" class="product-img">
                <h2 class="product-title">Control Xbox One Series S</h2>
                <span class="product-price">$1,800.00</span>
                <i class="bi bi-bag-check-fill add-cart"></i>
            </div>
            <div class="product-box">
                <img src="../fotos/iphone.jpeg" alt="Producto" class="product-img">
                <h2 class="product-title">Iphone 12 Pro Max</h2>
                <span class="product-price">$12,000.00</span>
                <i class="bi bi-bag-check-fill add-cart"></i>
            </div>
            <div class="product-box">
                <img src="../fotos/1.webp" alt="Producto" class="product-img">
                <h2 class="product-title">Smart Watchs Colmi P8max </h2>
                <span class="product-price">$550.00</span>
                <i class="bi bi-bag-check-fill add-cart"></i>
            </div>
            <div class="product-box">
                <img src="../fotos/6.webp" alt="Producto" class="product-img">
                <h2 class="product-title">VideoJuego Mario Kart 8 Deluxe Nintendo Switch</h2>
                <span class="product-price">$915.00</span>
                <i class="bi bi-bag-check-fill add-cart"></i>
            </div>
            <div class="product-box">
                <img src="../fotos/4.webp" alt="Producto" class="product-img">
                <h2 class="product-title">Samsung Galaxy S24 Ultra</h2>
                <span class="product-price">$20,979.00</span>
                <i class="bi bi-bag-check-fill add-cart"></i>
            </div>
            <div class="product-box">
                <img src="../fotos/3.webp" alt="Producto" class="product-img">
                <h2 class="product-title">Auriculares Bluetooth Inalámbricos Soundcore Life Q30</h2>
                <span class="product-price">$850.00</span>
                <i class="bi bi-bag-check-fill add-cart"></i>
            </div>
            <div class="product-box">
                <img src="../fotos/JBL.webp" alt="Producto" class="product-img">
                <h2 class="product-title">Bocina JBL Charge 5 JBLCHARGE5 portátil con bluetooth waterproof blue</h2>
                <span class="product-price">$2,399.00</span>
                <i class="bi bi-bag-check-fill add-cart"></i>
            </div>
            <div class="product-box">
                <img src="../fotos/10.webp" alt="Producto" class="product-img">
                <h2 class="product-title">Consola Sony Playstation 5 Pro <br>Digital</h2>
                <span class="product-price">$19,299.00</span>
                <i class="bi bi-bag-check-fill add-cart"></i>
            </div>
            <div class="product-box">
                <img src="../fotos/11.webp" alt="Producto" class="product-img">
                <h2 class="product-title">Ea Sports Fc 25 Xbox One Series X Físico</h2>
                <span class="product-price">$999.00</span>
                <i class="bi bi-bag-check-fill add-cart"></i>
            </div>
            <div class="product-box">
                <img src="../fotos/9.webp" alt="Producto" class="product-img">
                <h2 class="product-title">Consola Switch</h2>
                <span class="product-price">$7,399.00</span>
                <i class="bi bi-bag-check-fill add-cart"></i>
            </div>
            <div class="product-box">
                <img src="../fotos/8.webp" alt="Producto" class="product-img">
                <h2 class="product-title">Consola Xbox Series S</h2>
                <span class="product-price">$7,000.00</span>
                <i class="bi bi-bag-check-fill add-cart"></i>
            </div>
            
        </div>
        
    </section>

    <script src="../JS/com.js"></script>
</body>
</html>