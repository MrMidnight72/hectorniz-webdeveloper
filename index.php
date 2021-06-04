<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hector S. Niz - Fullstack Developer</title>
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu"><i class="fa fa-bars"></i></label>
        <nav class="menu">
            <ul>
                <li><a href="#page-top">Inicio</a></li>
                <li><a href="#about-me">Sobre Mí</a></li>
                <li><a href="#my-work">Mis Trabajos</a></li>
                <li><a href="#contact">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <section id="page-top">
        <div class="main">
            <img src="img/bg-image.jpg" alt="background" class="bg">
            <p class="hola">Hola, soy <span style="color: var(--c1);">Hector S. Niz</span></p>
            <div class="slider">
                <ul>
                    <li>HTML</li>
                    <li>CSS3</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>Java</li>
                    <li>Python</li>
                </ul>
            </div>
            <button class="get-started" onclick="location.href='#about-me'">¡Comenzar!</button>
        </div>
    </section>
    <div class="box"></div>
    <section id="about-me" class="container">
        <h1>Sobre Mí</h1>
        <div class="info">
            <p>¡Hola! Mi nombre es Héctor, soy de Buenos Aires, Argentina. Soy estudiante de la carrera Desarrollo de Software en la <b>Universidad Provincial de Ezeiza</b> y actualmente estoy estudiando más sobre el <b>Desarrollo Web Fullstack</b>. <br> Aunque me dedico principalmente al ámbito computacional, en mi tiempo libre me dedico a ver Slashers de los 80's, leer cómics y dibujar. Este último es uno de mis más grandes hobbies, y actualmente estoy trabajando en un cómic de <i>Space Opera</i> al puro estilo <b>Star Wars</b>. <br>Los cómics que me gusta leer son, ademas del tan conocido género superheroico, las novelas gráficas de ciencia ficción y de terror. También me gusta leer los libros de H.P. Lovecraft y Stephen King.</p>
        </div>
        <hr>
        <h2>Mis Habilidades</h2>
        <div class="skills">
            <p class="lang">HTML</p> <p class="percent">70%</p>
            <div class="border" style="height:24px;">
                <div class="value" style="height:24px;width:70%"></div>
            </div>
            <p class="lang">CSS</p> <p class="percent">40%</p>
            <div class="border" style="height:24px;">
                <div class="value" style="height:24px;width:40%"></div>
            </div>
            <p class="lang">JAVASCRIPT</p> <p class="percent">30%</p>
            <div class="border" style="height:24px;">
                <div class="value" style="height:24px;width:30%"></div>
            </div>
            <p class="lang">PHP</p> <p class="percent">40%</p>
            <div class="border" style="height:24px;">
                <div class="value" style="height:24px;width:40%"></div>
            </div>
            <p class="lang">JAVA</p> <p class="percent">50%</p>
            <div class="border" style="height:24px;">
                <div class="value" style="height:24px;width:50%"></div>
            </div>
            <p class="lang">PYTHON</p> <p class="percent">40%</p>
            <div class="border" style="height:24px;">
                <div class="value" style="height:24px;width:40%"></div>
            </div>
        </div>
    </section>
    <section id="my-work" class="container">
        <div class="txt">
            <h1>Mis Trabajos</h1>
            <p>¡Aquí encontraras algunos de mis trabajos!</p>
        </div>
        <div class="work1"> 
            <a href="#"> 
                <img src="img/e-commerce.jpg" alt="e-commerce" class="img">
                <p>app e-commerce</p>
            </a>
        </div>
        <div class="work2"> 
            <a href="#"> 
                <img src="img/portfolioweb.png" alt="portfolio" class="img">
                <p>portfolio web</p>
            </a>
        </div>
        <div class="work3"> 
            <a href="#"> 
                <img src="img/responsive-web-design.jpg" alt="responsive" class="img">
                <p>responsive web</p>
            </a>
        </div>
    </section>
    <section id="contact" class="container">
        <h1>Contáctame</h1>
        <div class="redes">
            <p>Si quieres estar en contacto conmigo escríbeme y yo te responderé al correo electrónico lo más pronto posible.</p>
        </div>
        <hr>
        <div class="form">
            <form action="form.php" method="post" class="form_contact">
                <input type="text" class="name entry " name="nombre" placeholder="Tu nombre" required/>
                <br>
                <input type="text" class="email entry" name="correo" placeholder="Email" required/>
                <br>
                <textarea class="message entry" placeholder="mensaje" required></textarea> 
                <button class="submit entry" onclick="location.href='#contact'">Enviar</button>
            </form>
        </div>
    </section>
    <footer>
        <p>Copyright &copy; Todos los derechos reservados.</p>
    </footer>
</body>
</html>