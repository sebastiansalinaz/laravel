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

    
<section class="blogs" id="blogs">

      <h1 class="heading"> nuestras <span>recetas </span> </h1>

    <div class="box-container">

      <div class="box">
        <div class="image">
            <img src="images/blog-1.jpeg" alt="">
        </div>
            <div class="content">
               <a href="#" class="title">cafe delicioso y refrescante</a>
                 <span>by  Daniel García / 21 mayo, 2022</span>
                 <p>Nada más delicioso que disfrutar de una deliciosa tacita de café a cualquier hora, puedes estar en la oficina o en la casa.</p>
                 <a href="#" class="btn">leer mas</a>
            </div>
        </div>

     <div class="box">
        <div class="image">
            <img src="images/empandas.jpg" alt="">
        </div>
        <div class="content">
            <a href="#" class="title">empanadas de queso</a>
            <span>by Ferran Adriá Acosta / 09 agosto, 2022</span>
            <p>Un clásico de la cocina tradicional colombiana, empanadas de queso. Es una receta super fácil, rápida y quedan increíbles y muy jugosas!.</p>
            <a href="#" class="btn">leer mas</a>
        </div>
     </div>

     <div class="box">
        <div class="image">
            <img src="images/raspao.jpg" alt="">
        </div>
        <div class="content">
            <a href="#" class="title">cholado del valle del cauca</a>
            <span>by Joan Roca / 13 septiembre, 2022</span>
            <p>El Cholado es un cruce entre un postre helado, cóctel de frutas, y una bebida, y es popular en la región de El Valle de Colombia. </p>
            <a href="#" class="btn">leer mas</a>
        </div>
     </div>

     <div class="box">
        <div class="image">
            <img src="images/raspao.jpg" alt="">
        </div>
        <div class="content">
            <a href="#" class="title">cholado del valle del cauca</a>
            <span>by Joan Roca / 13 septiembre, 2022</span>
            <p>El Cholado es un cruce entre un postre helado, cóctel de frutas, y una bebida, y es popular en la región de El Valle de Colombia. </p>
            <a href="#" class="btn">leer mas</a>
        </div>
     </div>

     <div class="box">
        <div class="image">
            <img src="images/raspao.jpg" alt="">
        </div>
        <div class="content">
            <a href="#" class="title">cholado del valle del cauca</a>
            <span>by Joan Roca / 13 septiembre, 2022</span>
            <p>El Cholado es un cruce entre un postre helado, cóctel de frutas, y una bebida, y es popular en la región de El Valle de Colombia. </p>
            <a href="#" class="btn">leer mas</a>
        </div>
     </div>

     <div class="box">
        <div class="image">
            <img src="images/raspao.jpg" alt="">
        </div>
        <div class="content">
            <a href="#" class="title">cholado del valle del cauca</a>
            <span>by Joan Roca / 13 septiembre, 2022</span>
            <p>El Cholado es un cruce entre un postre helado, cóctel de frutas, y una bebida, y es popular en la región de El Valle de Colombia. </p>
            <a href="#" class="btn">leer mas</a>
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