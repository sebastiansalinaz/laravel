<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/img/senaa.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Document</title>
</head>
<body>


<header class="header">

    <a href="#" class="logo">
        <img src="/img/Logo-sena-blanco-sin-fondo.png" alt="">
        
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

    

</header>


<section class="review" id="review">

    <h1 class="heading"> su <span>opinion</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Que meloooo, ojala pudieran haber mas paginas asi tan buenas, ojala las demas paginas puedan tomar ejemplo de paginas asi como estas.</p>
            <img src="images/anuel.jpg" class="user" alt="">
            <h3>la dobleAA</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>que buena web, puedo encontrar todo lo que busco tanto en recetas como en productos pero creo que le falta algo, aun pueden mejorar sigan asi que bendicion.</p>
            <img src="images/descarga.jpg" class="user" alt="">
            <h3>juan cruz</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>esta muy buena la pagina trae muy buenas cosas pero le faltan algunos cambios y optimizarla pero de resto todo bello todo bonito.</p>
            <img src="images/fuicioso.jpg" class="user" alt="">
            <h3>fabian alberto</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>esta muy buena la pagina trae muy buenas cosas pero le faltan algunos cambios y optimizarla pero de resto todo bello todo bonito.</p>
            <img src="images/fuicioso.jpg" class="user" alt="">
            <h3>fabian alberto</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>esta muy buena la pagina trae muy buenas cosas pero le faltan algunos cambios y optimizarla pero de resto todo bello todo bonito.</p>
            <img src="images/fuicioso.jpg" class="user" alt="">
            <h3>fabian alberto</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>esta muy buena la pagina trae muy buenas cosas pero le faltan algunos cambios y optimizarla pero de resto todo bello todo bonito.</p>
            <img src="images/fuicioso.jpg" class="user" alt="">
            <h3>fabian alberto</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>esta muy buena la pagina trae muy buenas cosas pero le faltan algunos cambios y optimizarla pero de resto todo bello todo bonito.</p>
            <img src="images/fuicioso.jpg" class="user" alt="">
            <h3>fabian alberto</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>esta muy buena la pagina trae muy buenas cosas pero le faltan algunos cambios y optimizarla pero de resto todo bello todo bonito.</p>
            <img src="images/fuicioso.jpg" class="user" alt="">
            <h3>fabian alberto</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
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