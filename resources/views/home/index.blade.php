<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Senakitch</title>
    <link rel="icon" href="{{ asset('/img/senaa.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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

    

</header>



<section class="home" id="home">

    <div class="content">
        <h3>conoce acerca  </h3>
        <h3>de nosotros</h3>
        <p>averigua todos los productos y recetas</p>
        <p>que el sena tiene para ofrecerte.</p>
        <a href="#" class="btn">adquierelo ya!</a>
    </div>

</section>



<section class="about" id="about">

    <h1 class="heading"> <span>acerca</span> de </h1>

    <div class="row">

        <div class="image">
            <img src="images/academia.jpg" alt="">
        </div>

        <div class="content">
            <h3>que hace que senakitch sea especial?</h3>
            <p>debes saber que ademas de mostrar gran variedades de productos el sena cuenta con grandiosos  aprendices de desarrollo y cocina que hace posible que disfrutes de nuestra web</p>
            <p>lo que nos hace especial es que trabajando en equipo podemos llegar a lograr grandes cosas y romper barreras</p>
            <a href="#" class="btn">Aprende más</a>
        </div>

    </div>

</section>


<section class="contact" id="contact">

    <h1 class="heading"> <span>tu</span> contacto </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63778.38370428024!2d-76.6349534824848!3d2.4574702446796857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e300311c028d47d%3A0x880bd67f0987a54e!2zUG9wYXnDoW4sIENhdWNh!5e0!3m2!1ses-419!2sco!4v1668640132821!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="">
            <h3>contactanos</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="nombre">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="numero">
            </div>
            <input type="submit" value="contacta ahora" class="btn">
        </form>

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