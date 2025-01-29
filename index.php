<!DOCTYPE html>
<html lang="es" ng-app="metalixxApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metalixx - Tienda Online</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Smile.png" type="image/x-icon"> <!-- Reemplaza 'icono.ico' con la ruta real de tu ícono -->
    <style>
        header {
            background-image: url('banner.jfif'); /* Reemplaza 'ruta/a/tu/imagen.jpg' con la ruta real de tu imagen */
            background-size: cover;
            background-position: center;
            color: white; /* Cambia el color del texto si es necesario para que sea legible */
            text-align: center; /* Alinea el texto al centro */
            padding: 70px 0; /* Espacio interno superior e inferior */
        }

        header h1 {
            font-size: 70px; /* Tamaño de fuente */
            font-family: 'Monospace', sans-serif;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente */
            display: flex;
            justify-content: center;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }

        nav ul li a:hover {
            background-color: #111;
        }

        /* Estilo para los botones de productos */
        .productos-container {
            text-align: center; /* Centra los botones */
        }

        .producto-btn {
        display: inline-block;
        margin: 20px;
        padding: 80px 80px; /* Aumenta el padding para hacer el botón más grande */
        border: none;
        border-radius: 15;
        font-size: 20px; /* Ajusta el tamaño del texto */
        cursor: pointer;
        transition: background-color 0.3s; /* Quita el redondeo para hacerlo cuadrado */
        background: rgb(255,27,0);
        background: linear-gradient(0deg, rgba(255,27,0,1) 0%, rgba(251,75,2,1) 100%)/
        
    }

    .producto-btn:hover {
  color: #f0094a;
  background: transparent;
   box-shadow:none;
}
.producto-btn:before,
.producto-btn:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #f0094a;
  box-shadow:
   -1px -1px 5px 0px #fff,
   7px 7px 20px 0px #0003,
   4px 4px 5px 0px #0002;
  transition:400ms ease all;
}
.producto-btn:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
.float{
    position: relative;
}
.producto-btn:hover:before,
.producto-btn:hover:after{
  width:100%;
  transition:800ms ease all;
}

        /* Estilo para las imágenes de los botones */
        .producto-img {
            width: 100px; /* Ancho de la imagen */
            height: auto; /* Altura automática para mantener la proporción */
            margin-right: 10px; /* Espacio entre la imagen y el texto del botón */
            vertical-align: middle; /* Alinea verticalmente la imagen */
        }

        /* Estilo para el área de "Conócenos" */
        .conocenos {
            background-color: #f0f0f0; /* Color de fondo */
            padding: 50px 20px; /* Espaciado interno */
            text-align: center; /* Alinea el texto al centro */
            margin-top: 20px; /* Espacio superior */
        }

        .conocenos h2, .conocenos h3 {
            margin: 0 auto; /* Centra horizontalmente */
            max-width: 800px; /* Establece un ancho máximo para el texto */
        }

        .llaveros-barra {
            background-color: #111; /* Color de fondo de la barra */
            color: white; /* Color del texto */
            padding: 20px 0; /* Espaciado interno */
            text-align: center; /* Alinea el texto al centro */
        }

        /* Estilos para el carrusel */
        .carousel {
            width: 100%;
            overflow: hidden;
            position: relative;
            height: 400px; /* Ajusta la altura según tus necesidades */
        }
        
        .carousel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        
        /* Estilos para los controles */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border: none;
            z-index: 2;
        }
        
        .prev {
            left: 0;
        }
        
        .next {
            right: 0;
        }
    </style>
</head>
<body ng-controller="MainController">
    <header>

    </header>
    <nav>
    <ul>
        <li><a href="#/home">Inicio</a></li>
        <li><a href="#productos">Productos</a></li>
        <li><a href="Contacto.html">Contacto</a></li>
    </ul>
</nav>

    <br>
    <br>

    <div class="carousel">
        <img src="llavero.jpg" alt="Imagen 1">
        <img src="pines.jpg" alt="Imagen 2">
        <img src="stickers.jpg" alt="Imagen 3">
    </div>

    <!-- Área de "Conócenos" -->
    <div class="conocenos">
        <h2>Conócenos</h2>
        <br>
        <center><h3>Bienvenido a Metalixx! Nuestra amplia colección de stickers y pins
             estan diseñados para agregar un toque único a tu estilo
            y personalidad. Diseños llamativos y coloridos de nuestros
             creativos artistas seguramente encuentras algo
            que capte tu atención. Ya sea que estés buscando decorar 
            tu laptop, mochila o ropa, nuestros stickers y
            pins metálicos de alta calidad son la manera perfecta
             de hacer una declaración audaz y destacar entre la
            multitud.</h3></center>
            <br>
    <!-- Aquí puedes agregar la imagen -->
    <img src="Smile.png" alt="Descripción de la imagen">
</div>

    <br>
    <br>
    <br>

    <!-- Barra de "Llaveros" -->
    <div id= "productos" class="llaveros-barra">
        <h2>L L A V E R O S</h2>
    </div>
    <br>
    <br>
    <!-- Botones de productos en dos filas -->
    <div class="productos-container">
    <button class="producto-btn" onclick="window.location.href='llavero1_info.html'">
        <img src="llaveron.png" class="producto-img-full"> 
    </button>
    <button class="producto-btn" onclick="window.location.href='llavero2_info.html'">
        <img src="llaveron2.png" class="producto-img-full"> 
    </button>
    <button class="producto-btn" onclick="window.location.href='llavero3_info.html'">
        <img src="llaveron3.png" class="producto-img-full"> 
    </button>
    <button class="producto-btn" onclick="window.location.href='llavero4_info.html'">
        <img src="llaveron4.png" class="producto-img-full"> 
    </div>
    <br>
    <br>

<!-- Barra de "Llaveros" -->
<div class="llaveros-barra">
        <h2>C A M I S A S</h2>
    </div>
    <br>
    <br>
    <!-- Botones de productos en dos filas -->
    <div class="productos-container">
    <button class="producto-btn" onclick="window.location.href='camison1_info.html'">
        <img src="camisonF.png" class="producto-img-full"> 
    <button class="producto-btn" onclick="window.location.href='camison2_info.html'">
        <img src="camison1.png" class="producto-img-full"> 
    </button>
    <button class="producto-btn" onclick="window.location.href='camison3_info.html'">
        <img src="Camison2.png" class="producto-img-full"> 
    </button>
    <button class="producto-btn" onclick="window.location.href='camison4_info.html'">
        <img src="Camison3.png" class="producto-img-full"> 
    </button>
    <br>
    <br>

    <!-- Barra de "Llaveros" -->
    <div class="llaveros-barra">
        <h2>P I N E S</h2>
    </div>
    <br>
    <br>

    <div class="productos-container">
    <button class="producto-btn" onclick="window.location.href='pin1_info.html'">
        <img src="pin1.png" class="producto-img-full"> 
    </button>
    <button class="producto-btn" onclick="window.location.href='pin2_info.html'">
        <img src="pin2.png" class="producto-img-full"> 
    </button>
    <button class="producto-btn" onclick="window.location.href='pin3_info.html'">
        <img src="pin3.png" class="producto-img-full"> 
    </button>
    <button class="producto-btn" onclick="window.location.href='pin4_info.html'">
        <img src="pin4.png" class="producto-img-full">
    </button>

    <br>
    <br>

 <!-- Barra de "Llaveros" -->
 <div class="llaveros-barra">
        <h2>S T I C K E R S</h2>
 </div>
    <br>
    <br>

    <button class="producto-btn" onclick="window.location.href='stick1_info.html'">
        <img src="stk1.png" class="producto-img-full">
    </button>
    <button class="producto-btn" onclick="window.location.href='stick2_info.html'">
        <img src="stk2.png" class="producto-img-full"> 
    </button>
    <button class="producto-btn" onclick="window.location.href='stick3_info.html'">
        <img src="stk3.png" class="producto-img-full"> 
    </button>
    <button class="producto-btn" onclick="window.location.href='stick4_info.html'">
        <img src="stk4.png" class="producto-img-full">
    </button>

    <br>
    <br>

    <div class="llaveros-barra">
        <h2>Contactanos</h2>
        <center><h3>
        </h3></center>
    </div>
    <br>
    <br>
    <br>
    <br>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Metalixx - Todos los derechos reservados</p>
        <p onclick="window.location.href='AvisoSeguridad.html'">Aviso de seguridad</p>
    </footer>

    <script>
        // JavaScript para el carrusel
        let index = 0;
        const slides = document.querySelectorAll('.carousel img');
        
        function showSlide() {
            slides.forEach(slide => slide.style.opacity = 0);
            slides[index].style.opacity = 1;
        }
        
        function nextSlide() {
            index = (index + 1) % slides.length;
            showSlide();
        }
        
        function prevSlide() {
            index = (index - 1 + slides.length) % slides.length;
            showSlide();
        }
        
        setInterval(nextSlide, 3000);
    </script>
</body>
</html>