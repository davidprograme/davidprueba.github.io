<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOVA | Restaurantes. </title>
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
    <link rel="stylesheet" href="style.css">
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
                    <li class="cate"><a class="link_ayuda" href="https://www.youtube.com/watch?v=lddNz-XC7uc">Ayuda</a></li>
                    <li class="cate"><a class="link_ayuda" href="index.php" style="text-decoration: underline;">Nova</a></li>
                    <li class="cate"><a class="link_ayuda" href="https://www.youtube.com/watch?v=lddNz-XC7uc">Asesoría</li></a>
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
        right: -0px;
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
                     <li class="li_menu"><a href="#">Quiénes somos</a></li>
                     <li class="li_menu"><a href="#">Qué hacemos</a></li>
                     <li class="li_menu"><a href="#">Servicio al cliente</a></li>
                     <li class="li_menu"><a href="Cuenta_Usuario/CUENTA_USUARIO.php">Cuenta</a></li>
                     <li class="li_menu"><a href="comida.php">Restaurantes</a></li>
                     <li class="li_menu"><a href="servicios.php">Servicios</a></li>
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
    height: auto 300px;
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
 
    <!--- Sección de servicios --->
    <section class="section_restaurantes">
        <h1 class="titulo_restaurantes">Restaurantes.</h1>
        <div class="div_restaurantes">
            <div class="div_tipos_restaurantes">
                <ul class="ul_tipos_restaurantes">
    
                    <!--- Comida Asada/Parrilla --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Asada_Parrilla.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Comida Asada/Parrilla.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEh3TzupG9JPgtdyVvHUKwBdADgqsQHQeZ8Xl1LeZpQ6Q2dallcs2mXTZn0sTbce3zI-afOXNdarcGFdeiGhVC0b-S6S22gghbH6ssdf6ehZt0lruyCLCPaNAGzC9wKGBudh5-NPXYPtROh_ZHOL5ifZY0_l3TjQoWbpUd8Rj-w1z-kZ5tuoAE_MGvTSz1E" 
                                alt="Comida Asada/Parrilla">
                            </div>
                        </a>
                    </li>
    
                    <!--- Comida Italiana --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Italiana.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Comida Italiana.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEirwY4FtA_DywAFhLU3JrlE5fr-bCc4db-Fevn2x2oQXw90LHPnnPOk3mYW3p1cB2yMxMDYMmWpOde3z5lKDVJlTeZSm4yI5ll5TTsgSmDPrhVObAw-6ZXmpU3Q9xhzC_llLhZgz8W8nfwwj97EabK63F9bkCZpN2Cm_LWrxLNcupTZVu_rzIii4_J12cM" 
                                alt="Comida Italiana">
                            </div>
                        </a>
                    </li>
    
                   <!--- Comida Mexicana --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Mexicana.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Comida Mexicana.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEjLzZwuOKOEZ57fxTAR2f5piAx1L0ePEuVS6mOJNAsMLVNe5uB6wynh7OzTprNuQAHtqSIINMaoGSXf6v8YMOrL8s0DLjbvDqDNcUtySKHYgDEbX8R8F0txlgsL0VwWQHsMWWsnpuIHRTHRwEYpqqWX7-8XetB1et3FSOiopv8rEP6ZPzBMnQgnXAHOvtw" 
                                alt="Comida Mexicana">
                            </div>
                        </a>
                    </li>
    
                   <!--- Comida China --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_China.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Comida China.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEgVHcshtrIvmUH8lYw3DBD753UsGNGG21k6aTnC_sjdlJGqlNCZZXgvzZHKnoXpBi07_tKExtKvFcp7YMMDAGVXmS5C73e46UyIEyR9LCSdaFkuaKMHgLnd2cnLf4pp5ZILfGLYLzfrd9JhgvzFZJZyqDGIQze2qLfl1V5-Jcx4DAmk7dncirXgumOGiGM" 
                                alt="Comida China">
                            </div>
                        </a>
                    </li>
    
                    <!--- Comida Coreana --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Coreana.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Comida Coreana.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEg7BMygjflYc_nz6YvUbjhaVR9fXQbVaGoMNzvh9OBJzIKzkwd85MvWMTJvYdDR5TY9wudCRMfGGWU3yVDDVYEtteIWDiCV2_V3_QLEFnnLmjDUnoc6DZKuAUhZjcesGrO6EZTTAnCSy-pTaUlnqJG8abZskSMaCC9Hems1G6WDUY4fSeHRdyAppRjDvSs" 
                                alt="Comida Coreana">
                            </div>
                        </a>
                    </li>
    
                    <!--- Comida Típica Guatemalteca --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Tipica.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Comida Típica Guatemalteca.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEhbCE-bI5z_JVFdg0dckyaKQEJQ-cymQr_ydJkMNIW59dnhXl_vVjWYzGEo9hWTzDIzrvGvKggPiqpJzGzlb0IU_llTpnDg0Bs2Lkup74yZe-4rkEPJJZFIIxV8V0VIlqQsPvGh19GTxwXEDLPC_bm1YnMuMa6MrpYkEHkLbYi5feQGq2otXYuFrZ09MgE" 
                                alt="Comida Típica Guatemalteca">
                            </div>
                        </a>
                    </li>
    
                    <!--- Buffets --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Buffets.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Buffets.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEgz5F5RaAbxz5kOu0Ox73k0GlHy7vLpA4zUdBcaxFpAjxregAuEGXv7DfOR4iaxhhWx3niw7UNpOyjkG0c4chL0Yor1KxCb0qKpKZF3cczKRMNoaIlMOeESlcpYzRibaYY6boY0JdEe0UQ6fwlz3PmA3PaYLEZCtAZ8ehHcB_AoI-VZWICKrvU6EdbnIIs" 
                                alt="Buffets">
                            </div>
                        </a>
                    </li>
    
                    <!--- Mariscos --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Mariscos.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Mariscos.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEgNqxZQBUQX85KIsIpygBxCYqnf9kUQ2ihJVojno1N95IDVhB_Vat61WM2o4AR5ZcLSmqOWOcAUaed8HGgnmZGyVAbG7kJD0v9AQI0PNY-auheKmUEtvC5SGO4Inbw0Aa6b0GADplV6YLHKNA-R2R056gOHrYKKtoFWlre2AI4DPKBtRxNkedoAv6DfYW4" 
                                alt="Mariscos">
                            </div>
                        </a>
                    </li>
    
                    <!--- Cafeterías --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Cafeteria.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Cafeterías.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEjp3qab70D_E7wMjbm275XW8-6UBF5BlHSXUHZt8ji3NHkwcE5SS31SiEtTuZPe5nhb9AbI2xgUb7hUU6hh3eOsx2u6SXgKNxKk4cHRPbyTU8LO6q3ZixVZQPwAJVQws3QZaAkRI5ZtSFAiCjvVSL_Z8FAZfemRZ2IpZUENwGF3TYmR64wfnVbfvG93qsE" 
                                alt="Cafeterías">
                            </div>
                        </a>
                    </li>
    
                    <!--- Panaderías --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Panaderia.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Panaderías.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEi7Vy3rwxSGiKwXMd0TVA8FejPsaBgOU9pQkqM4csbXqeVp6y4QSCRhjtYBEubSTlHY9reiZ_wv3op3ythzLnya3WiwjFEbbe8CxQGUyRwnDVNroJlW8ZA59eMC7TSBEHh8U-p4XzD_GZhPC279v418O0YZzAlHCujWnxVzznwkVxSVEjbLgFYAUYKMreI" 
                                alt="Panaderías">
                            </div>
                        </a>
                    </li>
    
                    <!--- Bar --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Bar.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Bar.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEhesn_IzKRiIlAdj236ivOuTgKJv40xRW4ICbZCHGcfp-7ffZMFWD-gio1xZKuVRUpm0YsYhvmue10yEXWuPWYkn6WiaAsLZ4w2clG8e2G6XTNrg9MYvACyzrAb43TaVOGt4i7tXajbpNwhhX7UMYvzHzbMmYQ5yNHcIsOJ3-g53nenyBZzjY6pazy2e0Q" 
                                alt="Bar">
                            </div>
                        </a>
                    </li>
    
                    <!--- Pizza --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Pizza.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Pizza.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEhXcFe0io1A6pSl6UE9axNrGrcVpq_7yl71WZ6X2tuWeg5oMV_Asif-XoZYRJxLw36jwYfnTK9-TwYQNjTl3ilgZ7mjrdfuF4TsXjRL1QUdTX-FHy_uSwA4ad9Xz2IoIRXaqJu2J85r-66xUU06y_i0_XHahmbC5SmS8ijwV0A_ju_UViCBOYDq0BT-jfU" 
                                alt="Pizza">
                            </div>
                        </a>
                    </li>
    
                    <!--- Hamburguesas --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Hamburguesa.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Hamburguesas.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEhyYEMpi69Cn3cR13Vwws1dvy8hoKmqN2_IuMPKgitpPzlyewDGEqgzhzUQZtKrPMCwoIumMoAX01kqEIaG0RCmSeEer63TlVvHd1fI2Pynl49RN7KcMe6CqPdDhfHWc8rNxkScJmoq2X5jq7q6kRX3xiuQbH8m-9NSrX9BRwBfIiT8_6GlQi7EiyNzmbA" 
                                alt="Hamburguesas">
                            </div>
                        </a>
                    </li>
    
                    <!--- Heladerías --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Heladeria.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Heladerías.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEiQ575yCXTIhrD8rOCz4goy6bXTajRHafhr-Ns6AuDiUvlxaYNPC8ZC27cwiNimDgPBCvsTb6Ej20akNfN_mOLsnF2Y1sy58F8ZYbUPk4NOztGSDKSGr1tJuHDVQC8CbS-tpw3R6yN_hoiEal9u-nKw2YxdC2kKokm4ZoSBXaREOHc3t34AHCL8fOBn71Q" 
                                alt="Heladerías">
                            </div>
                        </a>
                    </li>

                    <!--- Dulcerías --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Dulcerias.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Dulcerías.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEjCnl4hg3T96jvtuda9FSikoqCh0tHVfqn2laZrzPuinU6xPWtzXSa3pPJaxgd3QQxFACgBfYyjbuamMn1dqi1i0gCHfuBFaa4wKTW-mQKzayKUG8UA4X0kcqYfaf2BU3yWwU2WhlhzlBU8QUkzX8mpF0rPK3Dcxz_Un5jQ1cG9jn8_0RvOztQlYTCxmyU" 
                                alt="Dulcerías">
                            </div>
                        </a>
                    </li>
    
                    <!--- Comida P/Eventos --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Eventos.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Comida P/Eventos.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEhbQuYsa_VxS0oCcb3fb1JGOZdfjqFSubMYqEONfiYQ81zleORXRudJ0llYLRONJkw-97hc9ppI98nOO7LGb-SdTdujagQsRnTTdU2fFoXCWerY_4HrN6uhXIX3KmNHQlexXX-ScTEdOs879RSVjeDRDHwaeYpMnwkqQJK60kWjnbIfvldXcreU31fnonQ" 
                                alt="Comida P/Eventos">
                            </div>
                        </a>
                    </li>
    
                    <!--- Comida Rápida --->
                    <li class="li_restaurantes">
                        <a href="s_cpagi/C_Rapida.php" class="a_restaurantes">
                            <div class="div_resta"><label class="label_restaurantes">Comida Rápida.</label>
                                <img class="img_resta" 
                                src="https://blogger.googleusercontent.com/img/a/AVvXsEi-E-yg6ui7iU0igStoT2LCenJfHUTfotnKt_BhDSVrrje0Uz1OgiGUgMUMvsp8p-9eU7KBhlcKiqRaBKLxqtin9B8yVn4yiKipbCjIrQ6pJuo7cuv3AgYOuZMeArEw3uhUQWsyLcMfOwhIw9Wrfs-JoQ_QIehF2LHw1Jv31hdifd3s6wNR3_2wZ4P0-Aw" 
                                alt="Comida Rápida">
                            </div>
                        </a>
                    </li>
    
                </ul>
            </div>
        </div>
    </section>
    <style>
        .section_restaurantes{
            margin: 0px auto;
            display: block;
            width: 90%;
        }
        .titulo_restaurantes{
            display: flex;
            justify-content: center;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            font-size: 25px;
            margin: 0;
            text-decoration:underline;
        }
        .div_restaurantes{
            margin: 30px auto;
            width: 100%;
            height: 100%;
            display: flex;
        }
        .div_tipos_restaurantes{
            width: 100%;
            height: 100%;
            display: flex;
            margin: auto;
            justify-content: center;
            align-items: center;
        }
        .ul_tipos_restaurantes{
            width: 100%;
            height: 100%;
            display: inline;
            margin: -10px auto;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 10px;
        }
        .li_restaurantes{
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            text-align: center;
            width: 80%;
            padding: 5px;
        }
        .a_restaurantes{
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            font-size: 15px;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        .div_resta{
            display: flex;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            margin: auto;
            border: 1px solid transparent;
            padding: 9px;
            border-radius: 60px;
            background: linear-gradient(to right, #6A1B9A, #BA68C8);
        }
        .label_restaurantes{
            color: white;
            margin: auto;
            display: flex;
            width: 80%;
            text-align: center;
            justify-content: center;
        }
        .img_resta{
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            margin: auto;
            justify-content: end;
            align-items: end;
            text-align: end;
        }
    </style>

    <!--- Pie de página --->
    <section class="section_pie_pagina">
        <div class="div_pie_pagina">
    
            <div class="div_opciones_usuario_Pie">
                <div class="div_ul_opciones">
                    <ul class="ul_opciones">
                        <li class="li_opciones">Términos y condiciones</li>
                        <li class="li_opciones">Acerca de nosotros</li>
                        <li class="li_opciones">Política de privacidad</li>
                        <li class="li_opciones">¿Quiénes somos?</li>
                        <li class="li_opciones">Misión y Visión</li>
                        <li class="li_opciones">Mas sobre NOVA</li>
                    </ul>
                </div>
            </div>
    
            <div class="div_redes_sociales">
                <div class="div_redes">
                    <ul class="ul_redes_sociales">
                        <li class="li_redessociales"><img class="img_redes" src="https://blogger.googleusercontent.com/img/a/AVvXsEhbmL_5Hj950SuWb2F9i5XxD0ZZu2XVTgS0dvE7FRrTRK5Aet6a9svWF_aR8PWebtRTsqKYB2rdpX3yT1Tc45pnIOeAWrnEDbjVx1cBVGx-guTNmbag79QJ7Tn5PLs2IrK4OOlYQfO6x4MctxN-BsNp-NfB77jUC0vGk5GKLAMvOaql94H5k60DgIX6vI8"></li>
                        <li class="li_redessociales"><img class="img_redes" src="https://www.pngkit.com/png/full/488-4883158_subscribe-to-our-mailing-list-icono-de-instagram.png"></li>
                    </ul>
                </div>
            </div>
    
            <div class="div_opinion_cliente">
                <div class="div_opinion">
                    <div class="div_correo_enviar">
                        <input class="input_correo" type="text" placeholder="Correo electrónico">
                        <button class="button_enviar" type="submit">Enviar</button> 
                    </div>
                    <div class="div_comentario">
                        <textarea class="comentario" placeholder="Nos importa tu opinión."></textarea>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <style>
    .section_pie_pagina{
        margin: 200px -3%;
        width: 110%;
        height: 400px;
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
    .div_opinion_cliente{
        display: flex;
        margin: 230px auto;
        height: 150px;
        padding: 5px;
        width: 80%;
    }
    .div_opinion{
        display: inline;
        width: 100%;
        height: 100%;
    }
    .div_correo_enviar{
       width: 100%;
       display: flex;
       padding: 5px;
       margin: 10px auto;
    }
    .input_correo{
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        font-size: 14px;
        width: 70%;
        border-radius: 10px;
        border: none;
        padding: 5px;
        outline: none;
    }
    .button_enviar{
        padding: 5px;
        margin: auto 10px;
        border-radius: 10px;
        border: none;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        font-size: 14px;
        outline: none;
    }
    .div_comentario{
        width: 90%;
        height: 100px;
    }
    .comentario{
        width: 100%;
        height: 100%;
        border-radius: 10px;
        border: none;
        padding: 5px;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        font-size: 14px;
        outline: none;
    }
    </style>
    
    
    
    
    
<!------------ JAVASCRIPT -------------->
<script>
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
    





<style>
    /*------------------------------------
 



/*------------------------------------------------------------------------------------------------------------------------
--------------------------------------------- MODO PEQUEÑO (RESPOSIVE ----------------------------------------------------
--------------------------------------------------------*

@media screen and (max-width : 500px){

    
    body{
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
            width: 97%;
            height: 700px;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        
        
    .informacion_header{
            align-items: center;
            justify-content: center;
            text-align: center;
            margin:  auto;
            width: auto;
            border: solid 1px transparent;
        }
        /*----------------------------------------------AYUDA AL CLIENTE ---------------------------------------------------------------*
        
    .ayuda_redessociales{
            background: #E5E8E8;
            height: 32px;
            width: 110%;
            margin: -8px -9px;
        }
        
    .partes{
            text-align: center;
            margin: 0px -78px;
            float: left;
            display: inline;
        }
    .cate{
            width: 120px;
            color: black;
            font-size: 15px;
            font-family: 'Hind', sans-serif;
            cursor: default;	
            list-style: none;
            display: inline-block;
            margin: 6px;
            color: black;
            text-align: center;
            align-items: center;
            justify-content: center;
        }
        
    
        
        .link_ayuda{
            text-decoration: none;
            color: black;
        }
        
        
        .informacion_redessociales{
            align-items: center;
            margin: 0 auto;
            width: 1350px;
            border: solid 1px transparent;
        }
        
        
        
        /*--------------------- ENCABEZADO DE PÁGINA ---------------------------*
        .enca_pag{
            background: transparent;
            width: auto;
            height: 10%;
            margin: 5px -5px;
            padding: 3px;
            justify-content: center;
            text-align: center;
            align-items: center;
        }
        
        
        
        .find-all{
            width: 90px;
            height: 85px;
            border: solid 1px transparent;
            margin-left: 10px;
            margin-top: 10px;
        }
        .logotipo_empresa{
            width: 100%;
            height: 120%;
            margin-left: 20px;
            margin-top: 0px;
            cursor: pointer;
            display: none;
        }
        
        
        
        
        
        
        
        .Nuevo_usuario{
            margin-top: -80px;
            height: 45px;
            margin-left: 10px;
            width: 43px;
        }
        
        
        .imagen-icono-usuario{
            width: 35px;
            height: 39px;
            background-color: transparent;
            font-family: 'Hind', sans-serif;
            font-size: 19px;
            cursor: pointer;
            margin-left: 0px;
        }
        
        
        
        
        
        
        
        
        
        .buscar{
            margin-top: -80px;
            margin-left: 65px;   
            position: absolute;
            padding: 5px;
        }
        .buscar .input_buscar{
            width: 180px;
            height: 30px;
            padding: 0 20px;
            font-size: 13px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            outline: none;
            border: 1px solid;
            border-top-color: gray;
            border-right-color: gray;
            border-left-color: gray;
            border-bottom-color: gray; 
            border-radius: 15px;
            transition: all 2s ease;
        }
        .btn{
            position: absolute;
            top: 3px;
            right: 3px;
            background: transparent;
            width: 30px;
            height: 30px;
            line-height: 35px;
            text-align: center;
            color: black;
            font-size: 15px;
            border-radius: 50%;
            cursor: pointer;
            border: transparent 1px solid;
        }
        .buscar:hover .input_buscar{
            width: 180px;
            border-radius: 15px;
            border-bottom-color: gray; 
        }
        
        
        
        
        
        
        
        
        
        
        header {
            display: flex;
            align-items: center;
            position: absolute;
            justify-content: space-between;
            margin-top: -317px;
            margin-left: 305px;
            border: none;
            width: auto;
            border-radius: 6px;
            background: transparent;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }
        
        .li_menu{
            color: #ecececec;
                font-size: 14px;
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
        }
        
        .abrir-menu,
        .cerrar-menu {
            display: none;   
        }
        .select_idioma{
            width: 80px;
            height: 23px;
            border-radius: 8px;
            text-align: center;
            border: solid 1px #21618C;
            background: #21618C;
            color: white;
            outline: none;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            font-size: 10px;
        }
        
        option{
            font-weight: bold;
            font-size: 10px;
        }
        
            .abrir-menu,
            .cerrar-menu {
                display: block;
                border: 0;
                font-size: 33px;
                background-color: transparent;
                cursor: pointer;
            }
        
            .abrir-menu {
                color: black;
            }
        
            .cerrar-menu {
                color: white;
            }
        
            .nav {
                margin-top: 290px;
                width: 180px;
                height: 260px;
                opacity: 0;
                border-radius: 5%;
                visibility: hidden;
                display: flex;
                flex-direction: column;
                align-items: end;
                gap: 0rem;
                position: relative;
                top: -35px;
                right: 195px;
                bottom: 0;
                background-color: #00527b;
                padding: 1rem;
                z-index: 1;
                transition: 1.5s;
            }
        
            .nav.visible {
                opacity: 1;
                visibility: visible;
            }
            
            .nav-list {
                flex-direction: column;
                align-items: end;
            }
        
            .nav-list li a {
                color: #ecececec;
                font-size: 14px;
                transition: 1s;
            }
            .li_menu:hover{
                background-color: #016394;
                width: 150px;
                text-align: end;
                transition: 1s;
                border-radius: 7px;
            }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        .noticias{
            margin: -55px 780px;
            width: 400px;
            height: 30px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            text-decoration: none;
            display: none;
        }
        
        a{
            text-decoration: none;
        }
        .a_noticias{
            font-size: 18px;
            color: black;
            transition: 1s;
            padding: 3px;
        }
        .a_noticias:hover{
            background-color: #ECF0F1;
            border-radius: 10px;
        }
        
        
        
        
        
        
        .acerca_nosotros{
            margin: 25px 890px;
            width: 400px;
            height: 30px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            display: none;
        }
        .a_acerca{
            font-size: 18px;
            color: black;
            transition: 1s;
            padding: 3px;
        }
        .a_acerca:hover{
            background-color: #ECF0F1;
            border-radius: 10px;
        }
        













        
/*--------------------- COMIDA ---------------------------*


.opciones_servicios{
    align-items: center;
    margin: 0 auto;
    margin-left: 2%;
    width: 100%;
    border: solid 1px transparent;
 }

 
.titulo_servicios{
    display: flex;
   font-size: 20px;
   font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    display: grid;
    margin: 40px 0px;
    height: 80px;
}



/*-- COMIDA PIZZA --*
.comida_rapida{
    margin: -35px 0%;
    width: 150px;
    height: 45px;
    border: 1px solid transparent;
    border-radius: 45px;
    background: linear-gradient(to right, #6A1B9A, #BA68C8);
    cursor: pointer;
}

.img-comida_pizza{
    display: none;
    width: 40px;
    height: 40px;
    border-radius: 30px;
    margin-top: -40px;
    margin-left: 180px;
}
.label_comidarapida{
    display: flex;
    margin-top: 8px;
    width: 20px;
    margin-left: 45px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
}





/*-- COMIDA ASADA --*
.comida_asada{
    margin: -46px 50%;
    width: 150px;
    height: 45px;
    border: 1px solid transparent;
    border-radius: 45px;
    background: linear-gradient(to right, #6A1B9A, #BA68C8);
    cursor: pointer;
 }
 
 .img-comida_asada{
     display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -40px;
     margin-left: 180px;
 }
 .label_comidaasada{
    display: flex;
    margin-top: 8px;
    width: 20px;
    margin-left: 25px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
 }





/*-- COMIDA ITALIANA --*
 .comida_italiana{
    margin: 70px 0%;
   width: 150px;
   height: 45px;
   border: 1px solid transparent;
   border-radius: 45px;
   background: linear-gradient(to right, #6A1B9A, #BA68C8);
   cursor: pointer;
 }
 
 .img-comida_italiana{
     display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -40px;
     margin-left: 180px;
 }
 .label_comidaitaliana{
    display: flex;
    margin-top: 8px;
    width: 20px;
    margin-left: 45px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
 }





/*-- COMIDA MEXICANA --*
.comida_mexicana{
    margin: -116px 50%;
    width: 150px;
    height: 45px;
    border: 1px solid transparent;
    border-radius: 45px;
    background: linear-gradient(to right, #6A1B9A, #BA68C8);
    cursor: pointer;
 }
 
 .img-comida_mexicana{
     display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -40px;
     margin-left: 180px;
 }
 .label_comidamexicana{
    display: flex;
    margin-top: 8px;
    width: 20px;
    margin-left: 40px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
 }

/*-- COMIDA CHINA --*
 .comida_china{
    margin: 140px 0%;
   width: 150px;
   height: 45px;
   border: 1px solid transparent;
   border-radius: 45px;
   background: linear-gradient(to right, #6A1B9A, #BA68C8);
   cursor: pointer;
 }
 
 .img-comida_china{
     display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -40px;
     margin-left: 180px;
 }
 .label_comidachina{
    display: flex;
    margin-top: 8px;
    width: 20px;
    margin-left: 45px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
 }




/*-- COMIDA COREANA --*
 .comida_coreana{
    margin: -186px 50%;
    width: 150px;
    height: 45px;
    border: 1px solid transparent;
    border-radius: 45px;
    background: linear-gradient(to right, #6A1B9A, #BA68C8);
    cursor: pointer;
 }
 
 .img-comida_coreana{
     display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -40px;
     margin-left: 180px;
 }
 .label_comidacoreana{
    display: flex;
    margin-top: 8px;
    width: 20px;
    margin-left: 45px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
 }




/*--  COMEDOR  --*
 .comedor{
    margin: 210px 0%;
   width: 150px;
   height: 45px;
   border: 1px solid transparent;
   border-radius: 45px;
   background: linear-gradient(to right, #6A1B9A, #BA68C8);
   cursor: pointer;
 }
 
 .img-comedor{
     display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -40px;
     margin-left: 180px;
 }
 .label_comedor{
    display: flex;
    margin-top: 8px;
    width: 20px;
    margin-left: 45px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;

 }

 
 /*-- BUFFET --*
 .buffet{
    margin: -256px 50%;
    width: 150px;
    height: 45px;
    border: 1px solid transparent;
    border-radius: 45px;
    background: linear-gradient(to right, #6A1B9A, #BA68C8);
    cursor: pointer;
 }
 
 .img-comida_buffet{
     display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -31px;
     margin-left: 180px;
 }
 .label_buffet{
    display: flex;
    margin-top: 15px;
    width: 20px;
    margin-left: 50px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
 }


/*-- MARISCOS --*
.comida_mar{
    margin: 280px 0%;
   width: 150px;
   height: 45px;
   border: 1px solid transparent;
   border-radius: 45px;
   background: linear-gradient(to right, #6A1B9A, #BA68C8);
   cursor: pointer;
 }
 
 .img-comida_mar{
     display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -31px;
     margin-left: 180px;
 }
 .label_comidamar{
    display: flex;
    margin-top: 15px;
    width: 20px;
    margin-left: 40px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
 }






/*--  COMIDA PARA EVENTOS  --*
.comida_evento{
    margin: -326px 50%;
    width: 150px;
    height: 45px;
    border: 1px solid transparent;
    border-radius: 45px;
    background: linear-gradient(to right, #6A1B9A, #BA68C8);
    cursor: pointer;
 }
 
 .img-comida_evento{
     display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -40px;
     margin-left: 180px;
 }
 .label_evento{
    display: flex;
    margin-top: 8px;
    width: 20px;
    margin-left: 40px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
 }




 

/*-- CAFETERIA --*
.cafeteria{
    margin: 350px 0%;
   width: 150px;
   height: 45px;
   border: 1px solid transparent;
   border-radius: 45px;
   background: linear-gradient(to right, #6A1B9A, #BA68C8);
   cursor: pointer;
 }
 
 .img-cafeteria{
    display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -31px;
     margin-left: 180px;
 }
 .label_cafeteria{
    display: flex;
    margin-top: 15px;
    width: 20px;
    margin-left: 40px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
 }





 /*-- PANADERIA --*
.panaderia{
    margin: -396px 50%;
    width: 150px;
    height: 45px;
    border: 1px solid transparent;
    border-radius: 45px;
    background: linear-gradient(to right, #6A1B9A, #BA68C8);
    cursor: pointer;
 }
 
 .img-panaderia{
     display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -31px;
     margin-left: 180px;
 }
 .label_panaderia{
    display: flex;
    margin-top: 15px;
    width: 20px;
    margin-left: 35px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
 }




 /*-- BAR --*
.bar{
    margin: 420px 0%;
    width: 150px;
    height: 45px;
    border: 1px solid transparent;
    border-radius: 45px;
    background: linear-gradient(to right, #6A1B9A, #BA68C8);
    cursor: pointer;

 }
 
 .img-bar{
     display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -31px;
     margin-left: 180px;
 }
 .label_bar{
    display: flex;
    margin-top: 15px;
    width: 20px;
    margin-left: 60px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
 }



 /*-- CAFETERIA --*
.pizza{
    margin: -466px 50%;
    width: 150px;
    height: 45px;
    border: 1px solid transparent;
    border-radius: 45px;
    background: linear-gradient(to right, #6A1B9A, #BA68C8);
    cursor: pointer;
 }
 
 .img-pizza{
    display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -31px;
     margin-left: 180px;
 }
 .label_pizza{
    display: flex;
    margin-top: 15px;
    width: 20px;
    margin-left: 55px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
 }





 /*-- PANADERIA --*
.hamburguesa{
    margin: 490px 0%;
    width: 150px;
    height: 45px;
    border: 1px solid transparent;
    border-radius: 45px;
    background: linear-gradient(to right, #6A1B9A, #BA68C8);
    cursor: pointer;
 }
 
 .img-hamburguesa{
     display: none;
     width: 40px;
     height: 40px;
     border-radius: 30px;
     margin-top: -31px;
     margin-left: 180px;
 }
 .label_hamburguesa{
    display: flex;
    margin-top: 15px;
    width: 20px;
    margin-left: 20px;
    color: white;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    cursor: pointer;
    line-height: 15px;
 }

        
        
        
        
        
        
        



        

 /*--------------------------------- PIE DE PAGINA --------------------------------------------*

 .fnal-pagina{
    background: #057ab4;
    width: auto;
    height: 100%;
    margin: -200px -10px;
    padding: 1px;
    font-family: 'Montserrat', sans-serif;
    padding: 15px;
}

.section_footer{
    align-items: center;
    margin:10px auto;
    width: auto;
    border: solid 1px transparent;
    display: flex;
}

.redes_sociales_div{
    display: flex;
    margin: 300px 10px;
}

.redes_sociales{
    display: inline-block;
    margin: -250px -20px;
}

.red_social{
    list-style: none;
    height: 40px;
    width: 25px;
}

.icono_social{
    width: 25px;
}




.lista_opciones_pie{
    margin-top: -350px;
    margin-left: 20px;
    text-align: start;
}

.listaopciones{
    display: inline-block;
    list-style: none;
    width: 200px;
    height: 20px;
    margin-top: 0px;
    margin-left: 20px;
}

.lista{
    display: inline-block;
	margin: 6px;
    cursor: default;
    list-style: none;
    font-family: 'Montserrat', sans-serif;
}

h3{
    cursor: pointer;
    color: white;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    margin: 3px 0;
}

.enlace_pie_pagina{
    font-family: 'Montserrat', sans-serif;
    text-decoration: none;
}





.opinion-cliente{
    width: 200px;
    margin-top: 200px;
    margin-left: 20%;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: absolute;
    display: flex;
}

.label-opinion{
    color: white;
    font-weight: bold;
    font-size: 14px;
}
.boton-enviar{
    margin-left: auto;
    justify-content: center;
    align-items: center;
    text-align: center;
    border: none;
    border-radius: 4px;
    color: white;
    width: 70px;
    height: 21px;
    background-color: #0a4871;
    cursor: pointer;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    font-size: 14px;
}

.boton-enviar:hover {filter: opacity(.9);}


.input_email_opinion{
    border-radius: 5px;
    font-size: 14px;
    border: none;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    outline: none;
    width: 270px;
    margin: 10px auto;
}

.texttarea-opinion{
    width: 300px;
    height: 100px;
    border-radius: 5px;
    font-size: 14px;
    margin-top: 5px;
    resize: none;
    border: none;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    outline: none;
}

}

*/
</style>
</body> 
</html>