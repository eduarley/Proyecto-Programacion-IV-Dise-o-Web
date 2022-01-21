<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arley CarWash | Contacto</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--link rel="stylesheet" href="css/bootstrap-theme.css"-->
    <link rel="stylesheet" href="css/estilos.css">



    <!--para el slider"-->

    <link rel="stylesheet" href="css/flexslider.css">



</head>

<body>
    <header>
        <div class="container">
            <div class="marca">
                <h1>PHP</h1>
                <a href="index.html"><img src="img/Arley lavacar logo con resplandor.png" alt="Logo"></a>
                <span id="texto">
                    <h1><span class="resaltado">Arley</span> CarWash</h1>
                </span>




                <nav id="nav_principal">
                    <ul class="menu">
                        <li><a href="index.html">Inicio | </a></li>
                        <li><a href="">Servicios | </a>
                            <ul class="submenu">
                                <li> <a href="">Servicio 1</a></li>
                                <li> <a href="">Servicio 2</a></li>
                                <li> <a href="">Servicio 3</a></li>
                            </ul>
                        </li>

                        <li><a href="">Nosotros | </a>
                            <ul class="submenu">
                                <li><a href="">Historia</a></li>
                                <li><a href="ubicacion.html">Ubicación</a></li>

                            </ul>
                        </li>

                        <li><a href="">Proyectos |</a></li>
                        <li class="actual"><a href="">Contacto</a></li>

                    </ul>
                </nav>


            </div>













        </div>



        <div class="menu_bar">
            <a href="#" class="boton"><img src="" alt="icono_menu">Menú</a>
        </div>

        <nav id="menu_lateral">
            <ul class="menu">
                <li><a href="index.html">Inicio</a></li>
                <li> <a href="">Servicios</a></li>
                <li><a href="">Historia</a></li>
                <li><a href="">Nosotros</a></li>
                <li><a href="">Proyectos</a></li>
                <li class="actual"><a href="">Contacto</a></li>

            </ul>
        </nav>


    </header>






  

 
        






    <main class="padding_superior">
        <div class="contenedor-form">






            <form method="post" action="#" class="formulario">
                <h2>Contáctanos</h2>
                <input type="email" placeholder="Correo Electrónico*" name="email" required>
                <input type="text" placeholder="Nombre completo*" name="name" required>
                <input type="date" name="user_date" id="user_date"/>
                <!--input class="btn" style="background-color:  #D25420 " type="button" value="Calcular edad" onclick="javascript:calcularEdad();" /-->
                <div id="result"></div>              




                <div class="wrapFormulario">
                        
                        <form action="" class="formularioSeleccion">
                            <div class="radio">
                                <h4>Género</h4>
                                <input type="radio" name="Género" id="hombre"  required>
                                <label for="hombre">Hombre</label>
                                <input type="radio" name="Género" id="mujer"  required>
                                <label for="mujer">Mujer</label>
                            </div>
            
            
            
                            <div class="checkboxes">
                                <h4>Grado Académico</h4>
                                <input type="checkbox" name="checkbox" id="checkbox1"  required>
                                <label for="checkbox1">Escuela</label>
                                <input type="checkbox" name="checkbox" id="checkbox2"  required>
                                <label for="checkbox2">Colegio</label>
                                <input type="checkbox" name="checkbox" id="checkbox3"  required>
                                <label for="checkbox3">Universidad</label>
                            </div>
                        </form>
                    
                </div>
             

                <div class="formulario">
                        <textarea name="msg" id="" cols="30" rows="10" placeholder="Mensaje..."></textarea>
                        <input name="enviar" type="submit" value="Enviar correo">
                        
                        
                        <?php
                        include("php/correo.php");
                        ?>
                </div>
                

            </form>

            



        </div>

    </main>





    <footer>
        <div class="container">
            <h3>Arleys Web Design&copy</h3>
        </div>
    </footer>





    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.js"></script>


    <script src="js/jquery.flexslider.js"></script>
    <script src="js/mainParaSlider.js"></script>


    <script src="js/menuLateral.js"></script>



    <script src="js/calcularFecha.js"></script>
</body>

</html>