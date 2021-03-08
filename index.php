<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireframe en HTML</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!--contenedor de todo el contenido-->
    <div class="container">
    <!-- cabezera del contenido-->

    <!-- nav en php-->
    <?php include 'header.php';?>
    
    <!-- seccion de noticias-->
    <section class="flex-grid">
        <div class="grid-seccion-noticias">
            <div >
                <article class="articulo-grid-1 articulo">
                    <h2>Lorem ipsum dolor sit amet consectetur</h2>
                    <div class="boton-ver-mas">Ver más...</div>
                </article>
            </div>
            <div class="articulo-grid-2 articulo">
                <article>
                    <h2>Lorem ipsum dolor sit amet consectetur</h2>
                    <div class="boton-ver-mas">Ver más...</div>
                </article>
            </div>
            <div class="articulo-grid-3 articulo">
                <article>
                    <h2>Lorem ipsum dolor sit amet consectetur</h2>
                    <div class="boton-ver-mas">Ver más...</div>
                </article>
            </div>
        </div>
    </section>
    <!-- Seccion de oficial de contenido-->
    <div class="flex-main-section">
        <main class="blog-principal">
            <div class="image-main"></div>
            <div class="margen-texto-del-blog">
            <h2>Lorem ipsum dolor sit amet consectetur</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus id, magni amet animi maiores saepe ipsa, doloremque et dolor consequatur placeat. Natus a optio nihil illum, numquam id impedit ab nisi, assumenda provident quidem molestiae consequatur! Minus perferendis repellendus corporis rem quod quia quidem alias omnis sequi sunt, nostrum iste?</p>
            </div>
            <div class="boton-ver-mas">Ver más...</div>
            
        </main>
        
    </div>
    <!-- footer php-->
    <?php include 'footer.php';?>
    
    </div>

<!-- scripts añadidos al website-->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>