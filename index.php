<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova | Descubre nuevos lugares. </title>
    <link rel="icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj5eOFfP8dltazb7DjeSH-jrMiEyN25DnokqVCpLwNn9nwOnCF8lcAThV8gdODhm77SZ5hEZOCKpQyLyRKAv_KbmlSyH6lSf7zSgY7E5SyJSh6Yh1XrPhV7yZUt50-7IFbhKjT7PCYBgWlEHIKYO3k1X6uil0EuVDaErUTnrfNA8iHPK2bS1w9gvel_19A/s320/NOVA2.png">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Hind&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
    body{
        width: 98%;
        height: 0;
        padding: 0px;
        overflow-x: hidden;
        padding-left: 0;
        margin: auto;
    }
</style>

<!--- Encabezado de página --->
<section class="section_encabezado_pagina">
    <div class="div_encabezado">
        <div class="div_encabezadodos">
            <ul class="partes">
                <li class="cate"><a class="link_ayuda" href="ayuda.php">Ayuda</a></li>
                <li class="cate"><a class="link_ayuda" href="index.php" style="text-decoration: underline;">Nova</a></li>
                <li class="cate"><a class="link_ayuda" href="contacto_opinion.php">Contacto</li></a>
            </ul>
        </div>
    </div>
</section>
<style>
  .section_encabezado_pagina{
    padding: 0;
    width: 100%;
    height: 27px;
    display: flex;
    margin: auto;
    position: relative;
    bottom: 8px;
  }  
  .div_encabezado{
    width: 100%;
    height: 100%;
    margin: auto;
    display: block;
    text-align: center;
    justify-content: center;
    align-items: center;
  }
  .div_encabezadodos{
    width: 100%;
    height: 100%;
    display: inline;
    margin: 0;
    text-align: center;
    justify-content: center;
  }
  .partes{
    display: flex;
    margin: 5px  0px;
    text-align: center;
    width: 100%;
  }
  .cate{
    display: flex;
    margin: 0;
    width: 28%;
    text-align: center;
    justify-content: center;
    list-style: none;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    font-weight: bold;
  }
  .link_ayuda{
    color: black;
    text-decoration: none;
  }
</style>

<!--- Sección de presentación y menú --->
<section class="section_opciones_usuario">
    <div class="div_opciones_usuario">

        <div class="div_logotipo_nova">
            <a href="index.php">
                <img class="img_nova" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhu6-FIoGOKZYJ5wcouII9UBoRfctM-IGZ_boq7NfJ-XG7Z-3D6Z9EWQZ2VlszxjDmtDN2H-quPAKRxofksFi4Adh1u0scyHJSwc2wK5zLYbJkA60dakdTwRoCEwSlikyMEkD5GX72ITYQ0WyBsowu8xyycH0D02tQRkQECgVAY-vahAhAYx2KaDkRowtE/s320/NOVA.png">
            </a>
        </div>

        <div class="div_nuevo_usuario">
            <a href="Cuenta_Usuario/CUENTA_USUARIO.php">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg0Ic3jWxWQPi0DsTOTxQYJEy0beygYsVhsPrMbDddE6sJNQ5bjuAIO5-G6Wzc0SKKhwaDAxW12AmL8unGHt8-nrpi6CUvigVWrYfppbChczeoekWnts_CYqApxseZhU7fzPRtD4KCUefqqOjSJnauFGQx-vNdWwvhvDAt0MHawOpoHIWkz_66BMCvzOaY/s320/Imagen2.png"
                 alt="Cuenta" class="imagen-icono-usuario">
            </a>
        </div>
        
        <div class="header_menu">
            <header>
                <button id="abrir" class="abrir-menu"><img class="menu_img" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhl80yFfOYypRKcCmvReEEPMLOubk9GxER96u-la8NUyBYlh-XRLd6Tkou8VmnzpgnZWzBEfkO3-Y_DprksFbs8yawp7ObPJ2LXpamWs-xwvKa9viWCUJ9RfVDcF2WkgWNLXX6vcnRzLvIyAtVwpRoC4qks9x69kD5kyVKJMG9NlvMn-cMnwZ7HuxQ8Q8k/s320/men.png">
                </button>
             <nav class="nav" id="nav">
                 <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
                 <ul class="nav-list">
            
                     <li class="li_menu">Idioma
                        <select class="select_idioma">
                            <option selected>Español</option>
                            <option>Inglés</option>
                        </select></li>
                    <li class="li_menu"><a href="informacion.php">Información NOVA</a></li>
                     <li class="li_menu"><a href="Cuenta_Usuario/CUENTA_USUARIO.php">Cuenta</a></li>
                     <li class="li_menu"><a href="comida.php">Restaurantes</a></li>
                     <li class="li_menu"><a href="servicios.php">Servicios</a></li>
                     <li class="li_menu"><a href="contacto_opinion.php">Contacto</a></li>
                     <li class="li_menu"><a href="ayuda.php">Ayuda</a></li>
                 </ul>
             </nav>
            </header>
            </div>

            <div id="ctn-icon-search">
                <i class="fas fa-search" id="icon-search"></i>
            </div>
        <div class="buscar">
            <div class="buscar_div">
            <div id="ctn-bars-search">
                <input class="input_buscar" type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
            </div>
        
            <ul id="box-search">

                <?php
                    require_once "s_cpagi/bdd.php";
                    $sql = "SELECT * FROM usuario_nuevo_nova";
                    $resultado = mysqli_query($con, $sql);
                    if(mysqli_num_rows($resultado) > 0){
                        while($fila = mysqli_fetch_assoc($resultado)){
                        $id = $fila['id'];
                        $nombre_empre = $fila['nombre_empre'];
                        $direccion_depa = $fila['direccion_depa'];
                        $departamento = $fila['departamento'];
                        echo '<li><a href="busqueda.php/?Resultado_Búsqueda&&nombre_empre='.$nombre_empre.'"><i class="fas fa-search"></i>'.$nombre_empre.'
                        <br><label class="label_direccion">'.$departamento.', '.$direccion_depa.'</label></a></li>';
                        }
                    }else{
                        echo "<div class='div_else'>Hay Problemas.</div>";
                    }
                    mysqli_close($con);
                ?>
                
            </ul>
        
            <div id="cover-ctn-search"></div>


            <div id="icon-menu">
                 <i></i>
            </div>

            </div>
        </div>

    </div>
</section>

<style>
     /*-- Logotipo Nova --*/
    .section_opciones_usuario{
        position: relative;
        width: 100%;
        height: 100px;
        display: flex;
    }
    .div_opciones_usuario{
        display: inline;
        margin: 0;
        width: 100%;
        height: 100%;
        padding: 2px;
    }
    .div_logotipo_nova{
        width: 25%;
        height: 57%;
        padding: 0px;
        margin: 0;
        display: flex;
    }
    .img_nova{
        width: 100%;
        height: 100%;
    }

    /*-- Botón Usuario Nova --*/
    .div_nuevo_usuario{
        margin-top: -42px;
        height: 45px;
        margin-left: 78%;
        width: 43px;
        position: relative;
        display: flex;
    }
    .imagen-icono-usuario{
        width: 23px;
        height: 23px;
        background-color: transparent;
        font-family: 'Hind', sans-serif;
        font-size: 19px;
        cursor: pointer;
        margin-left: 0px;
    }

    /*-- Botón Menú --*/
    .header_menu{
        display: flex;
        position: relative;
        margin-top: -365px;
        margin-left: 88%;
    }
    header {
        display: flex;
        align-items: center;
        position: relative;
        justify-content: space-between;
        border-radius: 6px;
        background: transparent;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        font-size: 14px;
    }
    .li_menu{
        color: #ecececec;
        font-size: 14px;
        text-align: start;
    }
    .nav-list {
        margin-top: 10px;
        list-style-type: none;
        display: flex;
        gap: 1rem;
    }
    .nav-list li a {
        text-decoration: none;
        color: #1c1c1c;
        transition: 1.5s;
        text-align: start;
    }
    .abrir-menu,
    .cerrar-menu {
        display: none;   
    }
    .select_idioma{
        width: 75px;
        height: 23px;
        border-radius: 8px;
        text-align: start;
        border: none;
        background: #21618C;
        color: white;
        outline: none;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        font-size: 14px;
    }
    option{
        font-weight: bold;
        outline: none;
        font-size: 14px;
    }
    .abrir-menu,
    .cerrar-menu {
        display: block;
        border: 0;
        font-size: 40px;
        background-color: transparent;
        cursor: pointer;
    }
    .abrir-menu {
        color: black;
    }
    .menu_img{
        width: 25px;
        height: 15px;
    }
    .cerrar-menu {
        color: white;
    }
    .nav {
        margin-top: 350px;
        width: 170px;
        height: 300px;
        opacity: 0;
        border-radius: 5%;
        visibility: hidden;
        display: flex;
        flex-direction: column;
        align-items: end;
        gap: 0rem;
        position: relative;
        top: -40px;
        right: 165px;
        bottom: 0;
        background-color: #00527b;
        padding: 0;
        z-index: 1;
        transition: 1.5s;
        transition: .5s;
        text-align: start;
        font-size: 14px;
    }
    .nav.visible {
        opacity: 1;
        visibility: visible;
    }
    .nav-list {
        flex-direction: column;
        align-items: center;
        width: 90%;
    }
    .nav-list li a {
        color: #ecececec;
        font-size: 14px;
        transition: 1s;
        text-align: start;
    }  
   


    /*sistema de filtrado*/

    [value="TODOS"]:checked ~ .posts .post[data-category]{
    display: block;
    }

    /*Buscador de contenido*/
    #ctn-icon-search{
    height: auto;
    width: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: -330px 67%;
    }
    #ctn-icon-search i{
    font-size: 20px;
    color: black;
    cursor: pointer;
    transition: all 300ms;
    width: 100%;
    }
    #ctn-icon-search i:hover{
    color: rgb(32, 31, 31);
    }
    .buscar{
    padding: 0;
    width: 90%;
    justify-content: center;
    align-items: center;
    display: block;
    margin: 0;
    }
    .buscar_dos{
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
    display: block;
    justify-content: center;
    align-items: center;
    }
    #ctn-bars-search{
    position: absolute;
    top: -100px;
    width: 99%;
    background: transparent;
    padding: 0;
    z-index: 9;
    transition: all 600ms;
    margin: 10px 0;
    justify-content: center;
    align-items: center;
    display: flex;
    }
    #ctn-bars-search input{
    display: block;
    width: 100%;
    margin: auto;
    height: 30px;
    padding: 0 10px;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    outline: none;
    border: 1px solid;
    border-top-color: gray;
    border-right-color: gray;
    border-left-color: gray;
    border-bottom-color: gray; 
    border-radius: 10px;
    }
    #box-search{
    position: absolute;
    height: 320px;
    top: 50px;
    left: auto;
    transform: translateX(0%);
    width: 99%;
    padding: 0;
    background: white;
    z-index: 8;
    overflow: hidden;
    display: none;
    border-radius: 10px;
    list-style: none;
    text-align: start;
    }
    #box-search li a{
    display: block;
    width: 100%;
    color: #777777;
    padding: 12px 20px;
    list-style: none;
    text-decoration: none;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    }
    #box-search li a:hover{
    background: #f3f3f3;
    }
    #box-search li a i{
    margin-right: 10px;
    color: #777777;
    }
    #cover-ctn-search{
    width: 99%;
    height: 200%;
    position: fixed;
    left: 0;
    background: rgba(0,0,0,0.1);
    z-index: 7;
    display: none;
    }
    .label_direccion{
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    word-wrap: break-word;
    }
</style>
<!-- JAVASCRIPT DEL BUSCADOR -->
<script>
    document.getElementById("icon-menu").addEventListener("click", mostrar_menu);
    function mostrar_menu(){
    document.getElementById("move-content").classList.toggle('move-container-all');
    document.getElementById("show-menu").classList.toggle('show-lateral');
    }
    //Ejecutando funciones
    document.getElementById("icon-search").addEventListener("click", mostrar_buscador);
    document.getElementById("cover-ctn-search").addEventListener("click", ocultar_buscador);
    //Declarando variables
    bars_search =       document.getElementById("ctn-bars-search");
    cover_ctn_search =  document.getElementById("cover-ctn-search");
    inputSearch =       document.getElementById("inputSearch");
    box_search =        document.getElementById("box-search");
    //Funcion para mostrar el buscador
    function mostrar_buscador(){
    bars_search.style.top = "10px";
    cover_ctn_search.style.display = "block";
    inputSearch.focus();
    if (inputSearch.value === ""){
        box_search.style.display = "none";
    }
    }
    //Funcion para ocultar el buscador
    function ocultar_buscador(){
    bars_search.style.top = "-100px";
    cover_ctn_search.style.display = "none";
    inputSearch.value = "";
    box_search.style.display = "none";
    }
    //Creando filtrado de busqueda
    document.getElementById("inputSearch").addEventListener("keyup", buscador_interno);
    function buscador_interno(){
    filter = inputSearch.value.toUpperCase();
    li = box_search.getElementsByTagName("li");
    //Recorriendo elementos a filtrar mediante los "li"
    for (i = 0; i < li.length; i++){
        a = li[i].getElementsByTagName("a")[0];
        textValue = a.textContent || a.innerText;
        if(textValue.toUpperCase().indexOf(filter) > -1){
            li[i].style.display = "";
            box_search.style.display = "block";
            if (inputSearch.value === ""){
                box_search.style.display = "none";
            }
        }else{
            li[i].style.display = "none";
        }
    }
    }
</script>

<!--- Slider publicidad de empresas --->
<section class="publicidad_dela_empresa">
    <div class="container-carousel">
        <div class="carruseles" id="slider">
            <section class="slider-section">
                <h1 class="titulo_restaurante">Nova : Guatemala</h1>
                <h2 class="info_empresa">«Still Loving You» es una canción de la banda alemana de hard rock y heavy metal Scorpions, publicada como sencillo en 1984 e incluida como la pista final de su álbum Love at First Sting (1984). Debido a un problema entre el productor Dieter Dierks y los músicos, su grabación, al igual que las demás
                </h2>
                <img src="https://newsinamerica.com/pdcc/wp-content/uploads/2022/04/picoteo.jpeg" class="imagen_slader">
            </section>

            <section class="slider-section">
                <h1 class="titulo_restaurante">dos : Miraflores</h1>
                <h2 class="info_empresa">«Still Loving You» es una canción de la banda alemana de hard rock y heavy metal Scorpions, publicada como sencillo en 1984 e incluida como la pista final de su álbum Love at First Sting (1984). Debido a un problema entre el productor Dieter Dierks y los músicos, su grabación, al igual que las demás
                </h2>
                <img src="https://haciendareal.net/wp-content/uploads/2021/05/area-bar-majadas-scaled.jpg" class="imagen_slader">
            </section>

            <section class="slider-section">
                <h1 class="titulo_restaurante">tres : Miraflores</h1>
                <h2 class="info_empresa">«Still Loving You» es una canción de la banda alemana de hard rock y heavy metal Scorpions, publicada como sencillo en 1984 e incluida como la pista final de su álbum Love at First Sting (1984). Debido a un problema entre el productor Dieter Dierks y los músicos, su grabación, al igual que las demás
                </h2>
                <img src="https://saulemendez.com/wp-content/uploads/2018/02/MG_6709.jpg" class="imagen_slader">
            </section>

            <section class="slider-section">
                <h1 class="titulo_restaurante">cuatro : Miraflores</h1>
                <h2 class="info_empresa">Diversos lingüistas han expuesto cómo diferenciar los tipos de texto. Una de las prpone que la clasificación de los textos no es absoluta, y distingue los siguientes tipos: descriptivo, narrativo, argumentativo, expositivo y dialogado.</h2>
                <img src="https://www.guatemala.com/fotos/201707/PF-CHANGS1-885x500.jpg" class="imagen_slader">
            </section>

            <section class="slider-section">
                <h1 class="titulo_restaurante">cinco : Miraflores</h1>
                <h2 class="info_empresa">Diversos lingüistas han expuesto cómo diferenciar los tipos de texto. Una de las prpone que la clasificación de los textos no es absoluta, y distingue los siguientes tipos: descriptivo, narrativo, argumentativo, expositivo y dialogado.</h2>
                <img src="https://www.guatemala.com/fotos/201706/Don-Porfirio-885x500.jpg" class="imagen_slader">
            </section>

            <section class="slider-section">
                <h1 class="titulo_restaurante">seis : Miraflores</h1>
                <h2 class="info_empresa">Diversos lingüistas han expuesto cómo diferenciar los tipos de texto. Una de las prpone que la clasificación de los textos no es absoluta, y distingue los siguientes tipos: descriptivo, narrativo, argumentativo, expositivo y dialogado.</h2>
                <img src="https://www.guatemala.com/fotos/201708/Karma-885x500.jpg" class="imagen_slader">
            </section>

            <section class="slider-section">
                <h1 class="titulo_restaurante">siete : Miraflores</h1>
                <h2 class="info_empresa">Diversos lingüistas han expuesto cómo diferenciar los tipos de texto. Una de las prpone que la clasificación de los textos no es absoluta, y distingue los siguientes tipos: descriptivo, narrativo, argumentativo, expositivo y dialogado.</h2>
                <img src="https://win.gt/wp-content/uploads/2021/04/Astro-Terrazas-guatemala.jpg" class="imagen_slader">
            </section>

            <section class="slider-section">
                <h1 class="titulo_restaurante">ocho : Miraflores</h1>
                <h2 class="info_empresa">Diversos lingüistas han expuesto cómo diferenciar los tipos de texto. Una de las prpone que la clasificación de los textos no es absoluta, y distingue los siguientes tipos: descriptivo, narrativo, argumentativo, expositivo y dialogado.</h2>
                <img src="https://okdiario.com/coolthelifestyle/img/2022/02/10/bakan-restaurante-mexcano-madrid-elle-5-1638198781.jpeg"
                class="imagen_slader">
                </section>

            <section class="slider-section">
                <h1 class="titulo_restaurante">nueve : Miraflores</h1>
                <h2 class="info_empresa">Diversos lingüistas han expuesto cómo diferenciar los tipos de texto. Una de las prpone que la clasificación de los textos no es absoluta, y distingue los siguientes tipos: descriptivo, narrativo, argumentativo, expositivo y dialogado.</h2>
                <img src="https://images.ecestaticos.com/AKhGxRFhMPH3tOjrJ8f_-EJqs6c=/24x15:1200x640/1440x810/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F38f%2F003%2Fda2%2F38f003da2ac6d6db041fecc1559c0d89.jpg"
                class="imagen_slader">
            </section>

            <section class="slider-section">
                <h1 class="titulo_restaurante">diez : Miraflores</h1>
                <h2 class="info_empresa">Diversos lingüistas han expuesto cómo diferenciar los tipos de texto. Una de las prpone que la clasificación de los textos no es absoluta, y distingue los siguientes tipos: descriptivo, narrativo, argumentativo, expositivo y dialogado.</h2>
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/10/d7/00/7d/pf-chang-s-guatemala.jpg" class="imagen_slader">
            </section>
           
        </div>
        <div class="btn-left"><i class='bx bx-chevron-left'></i></div>
        <div class="btn-right"><i class='bx bx-chevron-right'></i></div>
    </div>
</section>
<style>
    .publicidad_dela_empresa{
        background: transparent;
        width: 100%;
        height: 500px;
        margin: 0px 0px;
        padding: 0px;
        text-align: center;
        justify-content: center;
        display: flex;
        align-items: center;
        background-color:  #042941eb;
        border-radius: 10px;
        padding-bottom: 30px;
    }
    .titulo_restaurante{
        position: relative;
        font-size: 25px;
        margin: 50px auto;
        font-family: 'Montserrat', sans-serif;
        color: white;
        width: 90%;
        font-weight: bold;
    }
    .info_empresa{
        margin: 0px 20px;
        font-family: 'Montserrat', sans-serif;
        color: white;
        width: 88%;
        font-size: 14px;
        text-align: justify;
    }
    .container-carousel {
        transition: 1s;
        position: relative;
        margin-top: 0;
        width: 100%;
        height: 530px;
        background-color: transparent;
        overflow: hidden;
        border-radius: 0px;
        padding-bottom: 10px;
    }
    .carruseles {
        width: 1000%;
        height: 600px;
        display: flex;
        padding-bottom: 10px;
    }
    .slider-section {
        width: calc(100% / 10);
        height: 100%;
    }
    .slider-section img {
        width: 80%;
        height: 40%;
        border-radius: 15px;
        object-fit: fill;
        margin-left: 10%;
        display: flex;
        margin-top: 40px;
    }
    .imagen_slader{
        margin: 5% 100%;
        display: flex;
        box-shadow: 0 1px 15px 2px rgba(0, 0, 0, 0.481);
    }
    .btn-left,
    .btn-right {
        display: flex;
        position: absolute;
        top: 12%;
        font-size: 2.5rem;
        background-color: transparent;
        border-radius: 50%;
        padding: 5px;
        font-weight: 600;
        cursor: pointer;
        color: white;
        transform: translate(0,-50%);
        transition: .5s ease;
        user-select: none;
    }
    .btn-left:hover,
    .btn-right:hover {
        background-color: rgb(31, 31, 31);
        color: #fff;
    }
    .btn-left {
        left: 0px;
    }
    .btn-right {
        right: 0px;
    }
  
</style>

<!--- Botones de servicio y Restaurantes --->
<section class="section_opciones_servicios">
    <div class="div_titulo_servicios">
        <h1 class="titulo_servicios">Encuentra nuevas experiencias.</h1>
    </div>

    <div class="div_button_servicios">
        <a class="a_titulo_servicios" href="servicios.php">
            <div class="div_titulo_servicios_boton">
                <h1 class="texto_button_servicios">Servicios</h1>
            </div>
                <img class="img_servicios" src="https://retos-directivos.eae.es/wp-content/uploads/2020/12/admin-ajax-1.jpeg">
        </a>
    </div>

    <div class="div_button_restaurantes">
        <a class="a_titulo_restaurantes" href="comida.php">
            <div class="div_titulo_restaurantes_boton">
                <h1 class="texto_button_restaurantes">Restaurantes</h1>
            </div>
            <img class="img_restaurantes" src="https://nuevafarma.es/wp-content/uploads/2018/04/comida-variada.jpg">
        </a>
    </div>
</section>
<style>
    .section_opciones_servicios{
        width: 95%;
        height: 800px;
        margin: 80px auto;
    }
    .div_titulo_servicios{
        margin: 0 auto;
        text-align: center;
        width: 100%;
    }
    .titulo_servicios{
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        font-size: 22px;
    }
    .div_button_servicios{
        width: 100%;
        margin: 0 auto;
        display: flex;
        height: 45%;
        cursor: pointer;
    }
    .a_titulo_servicios{
        text-decoration: none;
    }
    .div_titulo_servicios_boton{
        height: 100%;
        width: 100%;
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
    }
    .texto_button_servicios{
        display: flex;
        font-size: 45px;
        color: white;
        text-decoration: none;
        z-index: 1;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        font-size: 35px;
    }
    .img_servicios{
        display: flex;
        margin: -360px auto;
        width: 100%;
        height: 100%;
        filter: opacity(.5) drop-shadow(0 0 0 rgb(156, 156, 156));
        border-radius: 20px;
    }

    .div_button_restaurantes{
        width: 100%;
        margin: 30px  auto;
        display: flex;
        height: 45%;
        cursor: pointer;
    }
    .a_titulo_restaurantes{
        text-decoration: none;
    }
    .div_titulo_restaurantes_boton{
        height: 100%;
        width: 100%;
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        margin: auto;
    }
    .texto_button_restaurantes{
        display: flex;
        font-size: 45px;
        color: white;
        text-decoration: none;
        z-index: 1;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        font-size: 35px;
    }
    .img_restaurantes{
        display: flex;
        margin: -360px auto;
        width: 100%;
        height: 100%;
        filter: opacity(.5) drop-shadow(0 0 0 rgb(156, 156, 156));
        border-radius: 20px;
    }
</style>
    
<!--- Noticias de NOVA --->
<section class="section_noticias_nova">
    <div class="div_noticias_nova">
        <div class="div_titulo_noticias">
            <h1 class="titulo_h1">Noticias Nova.</h1>
        </div>

        <div class="div_dos_noticias_nova">

            <div class="noticia_nova">
                <div class="titulonoticia">
                    <h2 class="h2_noticia">Nova Company dfadfasdfa vvdfadfasdborder: 1px solid black</h2>
                </div>
                <div class="imagennoticia">
                    <img class="img_noticia_nova" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhu6-FIoGOKZYJ5wcouII9UBoRfctM-IGZ_boq7NfJ-XG7Z-3D6Z9EWQZ2VlszxjDmtDN2H-quPAKRxofksFi4Adh1u0scyHJSwc2wK5zLYbJkA60dakdTwRoCEwSlikyMEkD5GX72ITYQ0WyBsowu8xyycH0D02tQRkQECgVAY-vahAhAYx2KaDkRowtE/s320/NOVA.png">
                </div>
                <div class="informacionnoticia">
                    <h3 class="h3_informacion">Nova Company salio recientemente y ha crecido exponencialmente, pues ha ayudado en la busqueda
                        de mini-empresas.
                    </h3>
                </div>
            </div>

            <div class="noticia_nova">
                <div class="titulonoticia">
                    <h2 class="h2_noticia">Nova Company</h2>
                </div>
                <div class="imagennoticia">
                    <img class="img_noticia_nova" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhu6-FIoGOKZYJ5wcouII9UBoRfctM-IGZ_boq7NfJ-XG7Z-3D6Z9EWQZ2VlszxjDmtDN2H-quPAKRxofksFi4Adh1u0scyHJSwc2wK5zLYbJkA60dakdTwRoCEwSlikyMEkD5GX72ITYQ0WyBsowu8xyycH0D02tQRkQECgVAY-vahAhAYx2KaDkRowtE/s320/NOVA.png">
                </div>
                <div class="informacionnoticia">
                    <h3 class="h3_informacion">Nova Company salio recientemente y ha crecido exponencialmente, pues ha ayudado en la busqueda
                        de mini-empresas.
                    </h3>
                </div>
            </div>

            <div class="noticia_nova">
                <div class="titulonoticia">
                    <h2 class="h2_noticia">Nova Company</h2>
                </div>
                <div class="imagennoticia">
                    <img class="img_noticia_nova" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhu6-FIoGOKZYJ5wcouII9UBoRfctM-IGZ_boq7NfJ-XG7Z-3D6Z9EWQZ2VlszxjDmtDN2H-quPAKRxofksFi4Adh1u0scyHJSwc2wK5zLYbJkA60dakdTwRoCEwSlikyMEkD5GX72ITYQ0WyBsowu8xyycH0D02tQRkQECgVAY-vahAhAYx2KaDkRowtE/s320/NOVA.png">
                </div>
                <div class="informacionnoticia">
                    <h3 class="h3_informacion">Nova Company salio recientemente y ha crecido exponencialmente, pues ha ayudado en la busqueda
                        de mini-empresas.
                    </h3>
                </div>
            </div>

            <div class="noticia_nova">
                <div class="titulonoticia">
                    <h2 class="h2_noticia">Nova Company</h2>
                </div>
                <div class="imagennoticia">
                    <img class="img_noticia_nova" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhu6-FIoGOKZYJ5wcouII9UBoRfctM-IGZ_boq7NfJ-XG7Z-3D6Z9EWQZ2VlszxjDmtDN2H-quPAKRxofksFi4Adh1u0scyHJSwc2wK5zLYbJkA60dakdTwRoCEwSlikyMEkD5GX72ITYQ0WyBsowu8xyycH0D02tQRkQECgVAY-vahAhAYx2KaDkRowtE/s320/NOVA.png">
                </div>
                <div class="informacionnoticia">
                    <h3 class="h3_informacion">Nova Company salio recientemente y ha crecido exponencialmente, pues ha ayudado en la busqueda
                        de mini-empresas.
                    </h3>
                </div>
            </div>

        </div>
    </div>
</section>
<style>
    .section_noticias_nova{
    margin: 100px auto;
    display: flex;
    width: 95%;
    }
    .div_noticias_nova{
    display: block;
    width: 100%;
    margin: auto;
    }
    .div_titulo_noticias{
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    height: 50px;
    width: 100%;
    text-decoration: none;
    }
    .titulo_h1{
    display: flex;
    width: 100%;
    text-align: center;
    justify-content: center;
    align-items: center;
    margin: auto;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    font-size: 22px;
    }
    .div_dos_noticias_nova{
    margin: 20px auto;
    display: inline;
    width: 100%;
    height: 100%;
    }
    .noticia_nova{
    display: block;
    margin: 20px auto;
    width: 100%;
    height: auto;
    border-radius: 40px;
    background-color: rgba(210, 210, 210, 0.173);
    padding-bottom: 20px;
    padding: 0;
    }
    .titulonoticia{
    display: flex;
    width: 100%;
    text-align: center;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    height: 50px;
    text-decoration: none;
    list-style: none;
    }
    .h2_noticia{
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    font-size: 20px;
    width: 90%;
    }
    .imagennoticia{
    margin: 5px auto;
    padding-top: 10px;
    display: flex;
    width: 30%;
    }
    .img_noticia_nova{
    width: 100%;
    }
    .informacionnoticia{
    margin: auto;
    width: 90%;
    padding-bottom: 10px;
    }    
    .h3_informacion{
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    font-size: 15px;
    width: 94%;
    text-align: center;
    }
</style>

<!--- Pie de página --->
<section class="section_pie_pagina">
    <div class="div_pie_pagina">

        <div class="div_opciones_usuario_Pie">
            <div class="div_ul_opciones">
                <ul class="ul_opciones">
                    <li class="li_opciones"><a class="a_pie" href="informacion.php#acerca_nosotros">Acerca de nosotros</a></li>
                    <li class="li_opciones"><a class="a_pie" href="informacion.php#mision_vision">Misión y visión</a></li>
                    <li class="li_opciones"><a class="a_pie" href="informacion.php#sobre_nova">Mas sobre NOVA</a></li>
                    
                    <li class="li_opciones"><a class="a_pie" href="condicionesuso.php">Condiciones de uso</a></li>
                    <li class="li_opciones"><a class="a_pie" href="condicionesuso.php">Política de privacidad</a></li>
                </ul>
            </div>
        </div>

        <div class="div_redes_sociales">
            <div class="div_redes">
                <ul class="ul_redes_sociales">
                    <li class="li_redessociales"><img class="img_redes" src="https://blogger.googleusercontent.com/img/a/AVvXsEhbmL_5Hj950SuWb2F9i5XxD0ZZu2XVTgS0dvE7FRrTRK5Aet6a9svWF_aR8PWebtRTsqKYB2rdpX3yT1Tc45pnIOeAWrnEDbjVx1cBVGx-guTNmbag79QJ7Tn5PLs2IrK4OOlYQfO6x4MctxN-BsNp-NfB77jUC0vGk5GKLAMvOaql94H5k60DgIX6vI8"></li>
                    <li class="li_redessociales"><img class="img_redes" src="https://blogger.googleusercontent.com/img/a/AVvXsEiV53EGCKqx9IdPHqZhL3pjvp7gGFWTZhn0q8Pej96Ejbqb-8eIwheqqcTQ0oGDZc36ECNFKS7ecNyz_IZZ8qyN_k6I2zzhL9gjzWgzQm2S1xCzMQdpLKWgt0ZJfRxcCfjcAz6VRwOsp7BwEOgNM2Xgv9QP7tNmk202-TP1WzRnQU6D9Dc3O8O0U9fxxUU"></li>
                </ul>
            </div>
        </div>

    </div>
</section>
<style>
    .section_pie_pagina{
    margin: 200px -3%;
    width: 110%;
    height: 200px;
    padding-bottom: 40px;
    background-color: #21618C;
    display: flex;
    }
    .div_pie_pagina{
    width: 100%;
    display: inline;
    }
    .div_opciones_usuario_Pie{
    width: 60%;
    height: 200px;
    padding: 5px;
    display: flex;
    position: relative;
    }
    .div_ul_opciones{
    display: flex;
    width: 100%;
    height: 100%;
    margin: 0;
    }
    .ul_opciones{
    display: inline-block;
    width: 100%;
    height: 100%;
    margin: 0;
    }
    .li_opciones{
    display: flex;
    margin: 10px 0px;
    color: white;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    font-size: 14px;
    }
    .a_pie{
        text-decoration: none;
        color: white;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    font-size: 15px;
    }
    .div_redes_sociales{
    margin: -210px 70%;
    display: flex;
    height: 200px;
    padding: 5px;
    position: relative;
    width: 20%;
    }
    .div_redes{
    display: flex;
    margin: -20px 0;
    width: 100%;
    }
    .ul_redes_sociales{
    display: block;
    margin: 0px 0;
    }
    .li_redessociales{
    display: flex;
    margin: 30px 0;
    list-style: none;
    }
    .img_redes{
    width: 20px;
    height: 20px;
    }    
</style>

<!------------ JAVASCRIPT -------------->
<script>
    const btnLeft = document.querySelector(".btn-left"),
    btnRight = document.querySelector(".btn-right"),
    slider = document.querySelector("#slider"),
    sliderSection = document.querySelectorAll(".slider-section");
    btnLeft.addEventListener("click", e => moveToLeft())
    btnRight.addEventListener("click", e => moveToRight())
    setInterval(() => {
    moveToRight()
    }, 3500);
    let operacion = 0,
    counter = 0,
    widthImg = 100 / sliderSection.length;
    function moveToRight() {
    if (counter >= sliderSection.length-1) {
        counter = 0;
        operacion = 0;
        slider.style.transform = `translate(-${operacion}%)`;
        slider.style.transition = "none";
        return;
    } 
    counter++;
    operacion = operacion + widthImg;
    slider.style.transform = `translate(-${operacion}%)`;
    slider.style.transition = "all ease .6s"
    }  
    function moveToLeft() {
    counter--;
    if (counter < 0 ) {
        counter = sliderSection.length-1;
        operacion = widthImg * (sliderSection.length-1)
        slider.style.transform = `translate(-${operacion}%)`;
        slider.style.transition = "none";
        return;
    } 
    operacion = operacion - widthImg;
    slider.style.transform = `translate(-${operacion}%)`;
    slider.style.transition = "all ease .6s"
    }   
    const nav = document.querySelector("#nav");
    const abrir = document.querySelector("#abrir");
    const cerrar = document.querySelector("#cerrar");
    abrir.addEventListener("click", () => {
    nav.classList.add("visible");
    })
    cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
    })
</script>
</body> 
</html>