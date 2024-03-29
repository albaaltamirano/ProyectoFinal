
<?php include("../conexion.php");
$adopcion = "SELECT * FROM nueva WHERE id ";

?>
<!DOCTYPE html>
<html lang="en" ng-app>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css" />
    <link rel="stylesheet" type="text/css" href="../style/mediaquery.css" />
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <script src=”https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js”></script>
    <script defer src="../script.js"></script>
    <title>Proyecto Rescata</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Libre+Baskerville:wght@400;700&family=Red+Hat+Mono:wght@400;500&display=swap"
        rel="stylesheet">


</head>

<body>
    <!--encabezado + logo-->
    <header>
        <section class="section-logo">
            <div class="logo-maps">
              <svg class="maps" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path
                  d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg>
              <span> Ataliva, Santa Fe, Argentina</span>
            </div>
            <div class="header-logo">
              <img class="logo" src="../Assets/Logo/logo.png " alt="Logo de Proyecto Rescata">
            </div>
            <!-- lista -->
        
            <div class="redes-sociales">
              <a class="redes" href="https://www.facebook.com/profile.php?id=100079421228396" rel="" title="Pagina de Facebook" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook"
                  viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></a>
              <a class="redes" href="https://www.instagram.com/proyectorescata/" rel="" title="Pagina de Instagram" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></a>
            </div>
        </section>

    <nav class="navbar">
        <div class="toggle">
            <i class="fas fa-bars" onclick="mobile()"></i>
      </div>
        <ul class="navbar-list" id="idMobile">
            <li class=""><a href="/index.html">Home</a></li>
          <li><a href="#">Quienes Somos<i class=""></i></a>
            <ul>
              <li> <a href="/quienessomos/refugio.html"> Nosotros</a></li>
              <li> <a href="/quienessomos/ubicacion.html"> Ubicación </a></li>
              <li> <a href="/quienessomos/rescates.html"> Finales felices </a></li>
    
            </ul>
          </li>
          <li class=""><a href="/ayudanos.html">Como ayudar <i class="desplegable"></i></a>
          </li>
          <li class=""><a href="#"> Adopciones <i class=""></i></a>
            <ul>
              <li> <a href="/adopciones/requisitos.html"> Requisitos </a></li>
              <li> <a href="/adopciones/adopcion.php"> En adopción </a></li>
            </ul>
          </li>
          <li><a href="#">Contactos</a>
            <ul>
              <li> <a href="/contacto/contacto.html"> Contactanos</a></li>
              <li> <a href="/contacto/veterinarios.html"> Veterinarias </a></li>
              
    
            </ul></li>
          <li><a href="/castraciones.html">Castraciones</a></li>
    
        </ul>
      </nav>
    </header>

    <section class="bloque-adopcion">
        <div class="title">
            <h1>¿Estás listo para adoptar?</h1>
        </div>
    </section>
    <section class="section-adopcion">
        
            <p>Adoptar a un perro o gato implica tomar una gran decisión y responsabilidad. Debes tener en cuenta que el
                perro requiere tiempo, por lo tanto es importante que tengas claridad sobre la disponibilidad que tengas
                de este. Él no solo necesita compañía, sino actividad física diaria.

                De igual forma, requiere paciencia y compromiso en el proceso de educación, así como dinero mensual para
                cubrir los costos asociados a su alimentación, atención veterinaria y todos los cuidados que requiere
                durante un período de tiempo que puede ser de 15 años ó más. Adoptar un animal de compañía puede ser
                gratificante, pero solo si estas completamente seguro y convencido de todo lo que implicara para ti
                adoptar un compañero.</p>
            

</section>

    <section class="container-adopcion">
            <div class="container-adopcion bloque">
                <div class="texto">
                    <h3>Adultos</h3>
                    <p>Nuestra experiencia nos ha demostrado que un perro adulto es más fácil de educar, se adaptan a
                        órdenes básicas, si no las tienen adquiridas de antes, se amolda perfectamente a la vida con sus
                        nuevos dueños, a sus hábitos y reglas. La gran mayoría siguen siendo muy juguetones y no
                        demandan toda tu atención 24 horas, son más tranquilos y calmados que un cachorro. Sabemos
                        perfectamente su estatura, tamaño definitivo y carácter. </p>
                </div>
            
            <div class="container-adopcion bloque imagen">

                <img src="../Assets/Adopciones/adulto.jpg" alt="">

            </div>
            </div>
    

    <div class="container-adopcion bloque">
        <div class="container-adopcion bloque imagen">
            <img src="../Assets/Adopciones/cachorro.jpg" alt="">
        </div>
          <div class="texto">
            <h3>Cachorros</h3>
            <p> Son muy tiernos y hermosos. Podemos disfrutar de sus etapas de crecimiento y desarrollo hasta
                convertirse en adultos; pero todo esto requiere de mucho esfuerzo, ya que como son bebés hasta el año,
                comen varias veces al día, orinan y defecan en todas partes, lloran, mastican objetos de la casa. Por
                esta razón, es muy importante tener claro que debemos tener tiempo, mucha paciencia, disciplina y
                dedicación para que podamos educarlos de una manera correcta.</p>

        </div>
    </div>
    
    
</section>
    <section class="card">
        <h2> ¿Estás buscando un nuevo amigo?</h2>
        <h4> Todos ellos están en busca de un nuevo hogar</h4>
        <article class="card-ficha" id="dani">
            <img src="../Assets/Adopciones/DaniMalon.jpg" alt="DaniMalon" title="DaniMalón" style="cursor:pointer"
                onclick="onClick(this)" class="w3-hover-opacity">
            <!--modal
           -->
            <div class="card-txt">
                <h3>Dani Malón</h3>
                <p>DaniMalón tiene un carácter extraordinariamente amable. Es de tamaño grande. Está sano, se lleva bien por perros y gatos, no tiene problemas para relacionarse con demás animales. Adoptalo, es tranquilo y amoroso.
                </p>
                <div class="button-adopta">
                    <button name="redirect" class="button" onClick="redirect()">
                        ¡Contactanos y adoptá!
                    </button>
                </div>
            </div>

           <button class="open-sub-menu" onclick="submenuToggle('btnOne')">Más info</button> 
            
            <div class="card-inf" id="btnOne">
               <ul>
               <?php $resultado = mysqli_query ($conexion,$adopcion);
          if($resultado){
            while($row = $resultado -> fetch_array()){
              $id = $row['Id'];
              $nombre = $row['Nombre'];
              $raza = $row['Raza'];
              $genero = $row['Genero'];
              $tamaño = $row['Tamaño'];
              $vacunas = $row['Vacunas'];
            
            }
          }?>
                      
                    <li><img src="../Assets/Logo/raza.png"><?php echo $raza;?>   </li> 
                    <li><img src="../Assets/Logo/sex.png"><?php echo $sexo;?> </li>
                    <li><img src="../Assets/Logo/tamaño.png"> <?php echo $tamaño;?></li>
                    <li><img src="../Assets/Logo/vacunas.png"> <?php echo $vacunas;?> </li>
                    
                </ul>
            </div>
            </div>
        </article>
        <article class="card-ficha" id="mandi">
            <img src="../Assets/Adopciones//Mandi.jpg" alt="Mandi" title="Mandi" style="cursor:pointer"
                onclick="onClick(this)" class="w3-hover-opacity">
            <div class="card-txt">
                <h3>Mandi</h3>
                <p>Es tímida, pero encantadora, la encontraron sola y abandonada, tenia mucha hambre y buscaba a la gente.  Tiene un buen carácter, va muy bien de la correa, es dócil, le gusta jugar, y a la vez es tranquilita. </p>
                <div class="button-adopta">
                    <button name="redirect" class="button" onClick="redirect()">
                        ¡Contactanos y adoptá!
                    </button>
                </div>
            </div>
            <button class="open-sub-menu" onclick="submenuToggle('btnDos')">Más info</button>
            <div class="card-inf" id="btnDos">
                <ul>
                    <li><img src="../Assets/Logo/raza.png"> Mestizo  </li>
                    <li><img src="../Assets/Logo/sex.png"> Hembra</li>
                    <li><img src="../Assets/Logo/tamaño.png"> Mediana </li>
                    <li><img src="../Assets/Logo/vacunas.png"> Completas </li>
                </ul>
            </div>
          </div>
  
        </article>
         <article class="card-ficha" id="roberto">
            <img src="../Assets/Adopciones/Roberto.jpg" alt="Anita" title="Roberto" style="cursor:pointer"
                onclick="onClick(this)" class="w3-hover-opacity">
            <div class="card-txt">
                <h3>Roberto</h3>
                <p>Roberto fue un descarte galgero, como se le lastimo una de sus patitas decidieron que no les servia más, él  tiene un carácter amable. Es de tamaño grande. Está sano, a excepción de su patita, se lleva muy bien con perros y gatos. Adoptalo, es tranquilo y amoroso.</p>
                <div class="button-adopta">
                    <button name="redirect" class="button" onClick="redirect()">
                        ¡Contactanos y adoptá!
                    </button>
                </div>
            </div>
            <button class="open-sub-menu" onclick="submenuToggle('btnTres')">Más info</button>
            <div class="card-inf" id="btnTres">
                <ul>
                
                    <li><img src="../Assets/Logo/raza.png"> Galgo </li>
                    <li><img src="../Assets/Logo/sex.png"> Macho  </li>
                    <li><img src="../Assets/Logo/tamaño.png">Mediano</li>
                    <li><img src="../Assets/Logo/vacunas.png"> Completas</li>
                    
                </ul>
            </div>
          </div>
        </article>
        <article class="card-ficha" id="negro">
            <img src="../Assets/Adopciones/Negro.jpg" alt="Negro" title="negro" style="cursor:pointer"
                onclick="onClick(this)" class="w3-hover-opacity">
            <div class="card-txt">
                <h3>Negro</h3>
                <p>Negro fue encontrado junto con su hermanito en un camino rural, a su hermanito lo adoptaron, quedó solo él, es cachorro y muy juguetón. Buscamos familia responsable para Negro.
                </p>
                <div class="button-adopta">
                    <button name="redirect" class="button" onClick="redirect()">
                        ¡Contactanos y adoptá!
                    </button>
                </div>
            </div>
            <button class="open-sub-menu" onclick="submenuToggle('btnCuatro')">Más info</button>
            <div class="card-inf" id="btnCuatro">
                <ul>
                    <li><img src="../Assets/Logo/raza.png"> Mestizo </li>
                    <li><img src="../Assets/Logo/sex.png"> Macho  </li>
                    <li><img src="../Assets/Logo/tamaño.png"> Pequeño </li>
                    <li><img src="../Assets/Logo/vacunas.png"> Completas</li>
                </ul>
            </div>
            
          </div>
        </article>
        <article class="card-ficha" id="pancho">
            <img src="../Assets/Adopciones/Pancho.jpg" alt="Pancho" title="Pancho" style="cursor:pointer"
                onclick="onClick(this)" class="w3-hover-opacity">
            <div class="card-txt">
                <h3>Pancho</h3>
                <p>NO sabemos de donde ha venido, si se ha perdido, si lo han abandonado. La policía la recogió, y lo trajeron. Es dulce, tranquilo, convive muy bien con otros perros. se deja llevar de la correa. Ayudanos a encontrarle una familia! </p>
                <div class="button-adopta">
                    <button name="redirect" class="button" onClick="redirect()">
                        ¡Contactanos y adoptá!
                    </button>
                </div>
            </div>
            <button class="open-sub-menu" onclick="submenuToggle('btnCinco')">Más info</button>
            <div class="card-inf" id="btnCinco">
                <ul>
                    <li><img src="../Assets/Logo/raza.png"> Mestizo  </li>
                    <li><img src="../Assets/Logo/sex.png"> Macho</li>
                    <li><img src="../Assets/Logo/tamaño.png"> Grande </li>
                    <li><img src="../Assets/Logo/vacunas.png"> Completas </li>
                </ul>
            </div>
           
          </div>

        </article>
        
      <article class="card-ficha" id="barbi">
        <img src="../Assets/Adopciones/Barbi.jpg" alt="Barbi" title="Barbi" style="cursor:pointer"
            onclick="onClick(this)" class="w3-hover-opacity">
        <div class="card-txt">
            <h3>Barbi</h3>
            <p>Brabi fue encontrada abandonada en un camino rural junto a su hermanita Mariposa, tiene aproximadamente cuatro meses, se lleva bien con personas y demás animales. Es jugutona y muy dosil. Si estas interesado escribinos!</p>
            <div class="button-adopta">
                <button name="redirect" class="button" onClick="redirect()">
                    ¡Contactanos y adoptá!
                </button>
            </div>
        </div>
        <button class="open-sub-menu" onclick="submenuToggle('btnSeis')">Más info</button>
        <div class="card-inf" id="btnSeis">
            <ul>
                <li><img src="../Assets/Logo/raza.png"> Mestizo  </li>
                <li><img src="../Assets/Logo/sex.png"> Hembra</li>
                <li><img src="../Assets/Logo/tamaño.png"> Chico </li>
                <li><img src="../Assets/Logo/vacunas.png"> Completas </li>
            </ul>
        </div>
        
      </div>
      </article>
        <article class="card-ficha" id="mariposa">
          <img src="../Assets/Adopciones/Mariposa.jpg" alt="Mariposa" title="Mariposa" style="cursor:pointer"
              onclick="onClick(this)" class="w3-hover-opacity">
          <div class="card-txt">
              <h3>Mariposa</h3>
              <p>Mariposa fue encontrada abandonada en un camino rural junto a su hermanita Barbi, tiene aproximadamente cuatro meses, se lleva bien con personas y demás animales. Es jugutona y muy dosil. Si estas interesado escribinos!</p>
              <div class="button-adopta">
                  <button name="redirect" class="button" onClick="redirect()">
                      ¡Contactanos y adoptá!
                  </button>
              </div>
          </div>
          <button class="open-sub-menu" onclick="submenuToggle('btnSiete')">Más info</button>
          <div class="card-inf" id="btnSiete">
              <ul>
                  <li><img src="../Assets/Logo/raza.png"> Mestizo  </li>
                  <li><img src="../Assets/Logo/sex.png"> Hembra</li>
                  <li><img src="../Assets/Logo/tamaño.png"> Chico </li>
                  <li><img src="../Assets/Logo/vacunas.png"> Completas </li>
              </ul>
          </div>
          
        </div>

    </article>
    <article class="card-ficha" id="caru">
      <img src="../Assets/Adopciones/Cartu.jpg" alt="Caru" title="Cartu" style="cursor:pointer"
          onclick="onClick(this)" class="w3-hover-opacity">
      <div class="card-txt">
          <h3>Caru</h3>
          <p>A Caru lo dejaron esta ultima semana al costado de la ruta, con los peligros que eso implica, actualemente está en un hogar temporario hasta su recuperación, en caso de no encontrar familia pronto va a ingresar al refugio, es muy chiquitia y muy amorosa</p>
          <div class="button-adopta">
              <button name="redirect" class="button" onClick="redirect()" >
                  ¡Contactanos y adoptá!
              </button>
          </div>
      </div>
      <button class="open-sub-menu" onclick="submenuToggle('btnOcho')">Más info</button>
      <div class="card-inf" id="btnOcho">
          <ul>
              <li><img src="../Assets/Logo/raza.png"> Mestizo  </li>
              <li><img src="../Assets/Logo/sex.png"> Macho</li>
              <li><img src="../Assets/Logo/tamaño.png"> Chico </li>
              <li><img src="../Assets/Logo/vacunas.png"> Completas </li>
          </ul>
      </div>

</article>


        <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
            <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
            <div class="w3-modal-content w3-animate-zoom">
                <img id="img01" style="width:100%">
            </div>
            </article>


    </section>



    <hr>
    <!-- WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=543493461833" rel="" title="WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon-w" viewBox="0 0 16 16">
            <path
                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
        </svg>
    </a>

    <footer>
    <div class="footer-contacto">
        <div class="footer-contacto form">
          <h3> ¡Escríbenos!</h3>
          <form class="contacto" id="FormId">
            <label class="contacto-label" for="nombre" placeholder="Ingrese su nombre"> Nombre </label>
            <input class="contacto-input" type="text" name="nombre" id="nombre" required pattern="[a-zA-Z\s]+" title="El nombre debe ser alpha"> 
            <br>
            <label class="contacto-label" for="email" placeholder="su email"> Email </label>
            <input class="contacto-input" type="email" name="email" id="email" required title="El formato es inválido">
            <br>
            <label class="contacto-label" for="telefono" placeholder="Su teléfono"> Teléfono</label>
            <input class="contacto-input" type="text" name="telefono" id="telefono"required title="No es un teléfono válido" pattern="^[\+\d]+">
            <br>
            <textarea id="mensaje" class="contacto-mensaje" rows="6" cols="40" placeholder="Ingrese su mensaje" required></textarea>
            <br>
            <input class="bottom" type="submit" value="Enviar"/>
          </form>
        </div>
        <div class="errorMessages"></div>

        <div class="footer-contacto inf">
          <h3>Contacto</h3>
          <div class="footer-contacto txt">
            <ul>
              <li><svg class="maps" xmlns="http://www.w3.org/2000/svg" width="31" height="31" fill="currentColor"
                  class="bi bi-geo-alt" viewBox="0 0 16 16">
                  <path
                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>Avenida 25 de Mayo </li>
              <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                  class="bi bi-telephone" viewBox="0 0 16 16">
                  <path
                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg> 3493-522897 </li>
              <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                  class="bi bi-envelope-at" viewBox="0 0 16 16">
                  <path
                    d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                  <path
                    d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                </svg> proyectorescata@hotmail.com </li>

            </ul>
          </div>
        </div>

        <div class="footer-contacto map">
          <h3>Ubicacion</h3>
          <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
            <script>(function () {
                var setting = { "height": 400, "width": 300, "zoom": 17, "queryString": "Avenida 9 de Julio 260, Ataliva, Santa Fe, Argentina", "place_id": "EjRBdmVuaWRhIDkgZGUgSnVsaW8gMjYwLCBBdGFsaXZhLCBTYW50YSBGZSwgQXJnZW50aW5hIjESLwoUChIJHRRzOSZRNZQRXyu9FwS94WUQhAIqFAoSCYtEuXQmUTWUEYapItRfmDPN", "satellite": false, "centerCoord": [-30.99889983923732, -61.432299935516994], "cid": "0x9bf55adfcfe65108", "lang": "es", "cityUrl": "/argentina/sunchales-258613", "cityAnchorText": "Mapa de Sunchales, South Argentina, Argentina", "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3", "embed_id": "920467" };
                var d = document;
                var s = d.createElement('script');
                s.src = 'https://1map.com/js/script-for-user.js?embed_id=920467';
                s.async = true;
                s.onload = function (e) {
                  window.OneMap.initMap(setting)
                };
                var to = d.getElementsByTagName('script')[0];
                to.parentNode.insertBefore(s, to);
              })();</script><a href="https://1map.com/es/map-embed"></a>
          </div>
        </div>
        <div class="elementor">
          <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(10, 25, 47, 1)" offset="0%"></stop><stop stop-color="rgba(10, 25, 47, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,0L240,70L480,30L720,70L960,40L1200,70L1440,0L1680,0L1920,0L2160,50L2400,20L2640,90L2880,50L3120,20L3360,80L3600,30L3840,40L4080,20L4320,20L4560,10L4800,60L5040,80L5280,40L5520,90L5760,0L5760,100L5520,100L5280,100L5040,100L4800,100L4560,100L4320,100L4080,100L3840,100L3600,100L3360,100L3120,100L2880,100L2640,100L2400,100L2160,100L1920,100L1680,100L1440,100L1200,100L960,100L720,100L480,100L240,100L0,100Z"></path></svg>
        </div>
      </div>

      
      <div class="footer-final">
        <div class="footer-logo">
          <p><strong>¡ Siguenos en redes sociales !</strong></p>
          <div class="footer-logo-redes">
            <a class="footer-redes" href="https://www.facebook.com/profile.php?id=100079421228396" rel=""
              title="Pagina de Facebook">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-facebook"
                viewBox="0 0 16 16">
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
              </svg></a>
            <a class="footer-redes" href="https://www.instagram.com/proyectorescata/" rel=""
              title="Pagina de Instagram">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-instagram"
                viewBox="0 0 16 16">
                <path
                  d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
              </svg></a>
          </div>
        </div>
    


        <p> Copyright © 2023 Proyecto Rescata. Todos los derechos reservados. </p>

      </div>


    </footer>
      </body>
      
      </html>