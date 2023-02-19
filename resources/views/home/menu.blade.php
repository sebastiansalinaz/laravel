<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/img/senaa.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Senakitch</title>
</head>
<body>
    
<header class="header">

  <a href="#" class="logo">
    <img src="img/Logo-sena-blanco-sin-fondo.png" alt="">
    
  </a>

    <nav class="navbar">
        <a href="<?php echo e(route('home')); ?>">inicio</a>
        <a href="">acerca de</a>
        <a href="<?php echo e(route('menu')); ?>">menu</a>
        <a href="<?php echo e(route('productos')); ?>">productos</a>
        <a href="<?php echo e(route('opiniones')); ?>">opiniones</a>
        <a href="">contacto</a>
        <a href="<?php echo e(route('recetas')); ?>">Recetas</a>
  </nav>

<div class="icons">
    <div class="fas fa-search" id="search-btn"></div>
    <div class="fas fa-shopping-cart" id="cart-btn"></div>
    <div class="fas fa-bars" id="menu-btn"></div>
</div>

<div class="search-form">
    <input type="search" id="search-box" placeholder="que estas buscando...">
    <label for="search-box" class="fas fa-search"></label>
</div>



</header><br>



<section class="menu" id="menu">

    <h1 class="heading"> nuestro <span>menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/sirloin.png" alt="">
            <h3>sirloin con salsa de chiplote</h3>
            <div class="price">$14,900 <span>21,000</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/tomate..png" alt="">
            <h3>tomate acordeon</h3>
            <div class="price">$16,300 <span>17,300</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/menu-3.png" alt="">
            <h3>cafe soluble de colombia</h3>
            <div class="price">$8,000 <span>13,900</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/rollo.png" alt="">
            <h3>rollo de carne relleno de jamon y queso</h3>
            <div class="price">$18,000 <span>20,900</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/pastel.png" alt="">
            <h3>Pastel con buttercream de chocolate</h3>
            <div class="price">$32,000 <span>46,100</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/picada.png" alt="">
            <h3>picada de colombia</h3>
            <div class="price">$15,900 <span>21,000</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

    </div>

</section>


<section class="footer">

    <div class="share">
        <a href="https://www.facebook.com/SENA" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/SENAComunica" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/senacomunica/" class="fab fa-instagram"></a>
        <a href="https://co.linkedin.com/school/servicio-nacional-de-aprendizaje-sena-/" class="fab fa-linkedin"></a>
        <a href="https://co.pinterest.com/senacomunica/" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#home">inicio</a>
        <a href="#about">acerca de</a>
        <a href="#menu">menu</a>
        <a href="#products">productos</a>
        <a href="#review">opiniones</a>
        <a href="#contact">contacto</a>
        <a href="#blogs">recetas</a>
    </div>

    <div class="credit">creado por <span>Senakitch</span> | Todos los derechos reservados</div>

</section>

<script src="{{ asset('js/script.js') }}"></script>
 



</body>
</html>