    <?php
    include "editar_usuario/cod_editar.php";
    include "editar_usuario/conexion.php";  
    session_start();
    error_reporting(0);
    if(empty($_SESSION['correo_contacto'])){
    header("location: ../Iniciar_sesion/inicio_sesion.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova | Tu Empresa: <?php echo $_SESSION['nombre_empre']; ?></title>
    <link rel="icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj5eOFfP8dltazb7DjeSH-jrMiEyN25DnokqVCpLwNn9nwOnCF8lcAThV8gdODhm77SZ5hEZOCKpQyLyRKAv_KbmlSyH6lSf7zSgY7E5SyJSh6Yh1XrPhV7yZUt50-7IFbhKjT7PCYBgWlEHIKYO3k1X6uil0EuVDaErUTnrfNA8iHPK2bS1w9gvel_19A/s320/NOVA2.png">
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
                    <li class="cate"><a class="link_ayuda" href="../index.php" style="text-decoration: underline;">Nova</a></li>
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

<!--- Datos del usuario --->
    <section class="section_datos_personales">
        <div class="div_datos_personaless">

        <div class="div_datoss">
            <div class="div_titulo">
                <h1 class="Nombre_empresa"><a class="a_empre" href="CUENTA_USUARIO.php"><?php echo $_SESSION['nombre_empre'];?></a></h1>
            </div>
            <div class="div_datos_personales">
            <div class="div_datos">
                <div class="div_titulo_datos">
                    <h1 class="titulo_datos">Datos personales</h1>
                </div>
                <div class="lista_datos">
                    <ul class="ul_datos_personales">
                        <li class="li_datos">Correo: <?php echo $_SESSION['correo_contacto'];?></li>
                        <li class="li_datos">Teléfono: <?php echo $_SESSION['tel_contacto'];?></li>
                        <li class="li_datos">Dirección: <?php echo $_SESSION['direccion_depa'];?></li>
                        <li class="li_datos">Departamento: <?php echo $_SESSION['departamento'];?></li>
                        <li class="li_datos">Contraseña: <?php echo $_SESSION['pas'];?></li>
                    </ul>
                </div>
            </div>
            <div class="div_servicios">
                <div class="div_titulo_servicios">
                    <h1 class="titulo_servicios">Tu Servicio</h1>
                </div>
                <div class="lista_servicios">
                    <ul class="ul_servicios">
                        <li class="li_servicios">Servicio o Comida: <?php echo $_SESSION['checkbox'];?></li>
                    </ul>
                </div>
            </div>
            <div class="div_comentario">
                <div class="div_titulo_comentario">
                    <h1 class="titulo_comentario">Tu Comentario</h1>
                </div>
                <div class="lista_comentario">
                    <ul class="ul_comentario">
                        <li class="li_comentario">Comentario: <?php error_reporting(0); echo $_SESSION['comentario'];?></li>
                    </ul>
                </div>
            </div>
            <div class="div_boton">
                <a class="a_button" style="text-decoration: none;" href="editar_usuario/editar.php?=<?php 
                            echo $_SESSION['correo_contacto']?>">
                    <button type="submit" class="button_editar_usuario" name="editar_usuariio">Editar Datos</button>
                </a>
            </div>
            </div>
        </div>
<style>
    .section_datos_personales{
    margin: 0;
    display: flex;
    padding-bottom: 50px;
    width: 99%;
    }
    .div_datos_personaless{
    margin: 20px auto;
    display: block;
    width: 100%;
    }
    .div_datoss{
    width: 100%;
    margin: auto;
    display: block;
    }
    .div_titulo{
    margin: auto;
    display: block;
    text-align: center;
    justify-self: center;
    align-items: center;
    padding: 0;
    width: 100%;
    }
    .Nombre_empresa{
    display: flex;
    text-align: center;
    margin: auto;
    justify-content: center;
    align-items: center;
    color: black;
    text-decoration: none;
    height: auto;
    word-wrap: break-word;
    }
    .a_empre{
    text-decoration: none;
    color: black;
    font-family: 'Montserrat', sans-serif;
    font-size: 28px;
    font-weight: bold;
    }
    .div_datos_personales{
    border: none;
    border-top: 1px solid gray;
    margin: 40px auto;
    display: block;
    width: 90%;
    padding: 0;
    }
    .div_datos{
    display: block;
    margin: auto;
    }
    .div_titulo_datos{
    width: 100%;
    display: flex;
    margin: 20px auto;
    text-align: center;
    justify-content: center;
    align-items: center;
    }
    .titulo_datos{
    color: black;
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    font-weight: bold;
    text-decoration: underline;
    word-wrap: break-word;
    }
    .lista_datos{
    padding: 0;
    width: 90%;
    display: flex;
    word-wrap: break-word;
    margin: auto;
    }
    .ul_datos_personales{
    display: block;
    list-style: none;
    padding: 0;
    width: 100%;
    margin: 0 auto;
    }
    .li_datos{
    color: black;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    font-weight: bold;
    margin: 10px auto;
    }




    .div_servicios{
    display: block;
    margin: 50px auto;
    }
    .div_titulo_servicios{
    width: 100%;
    display: flex;
    margin: 20px auto;
    text-align: center;
    justify-content: center;
    align-items: center;
    }
    .titulo_servicios{
    color: black;
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    font-weight: bold;
    text-decoration: underline;
    word-wrap: break-word;
    }
    .lista_servicios{
    padding: 0;
    width: 90%;
    display: flex;
    word-wrap: break-word;
    margin: auto;
    }
    .ul_servicios{
    display: block;
    list-style: none;
    padding: 0;
    width: 100%;
    margin: 0 auto;
    }
    .li_servicios{
    color: black;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    font-weight: bold;
    margin: 0px auto;
    }



    .div_comentario{
    display: block;
    margin: 50px auto;
    }
    .div_titulo_comentario{
    width: 100%;
    display: flex;
    margin: 20px auto;
    text-align: center;
    justify-content: center;
    align-items: center;
    }
    .titulo_comentario{
    color: black;
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    font-weight: bold;
    text-decoration: underline;
    word-wrap: break-word;
    }   
    .lista_comentario{
    padding: 0;
    width: 90%;
    display: flex;
    word-wrap: break-word;
    margin: auto;
    }
    .ul_comentario{
    display: block;
    list-style: none;
    padding: 0;
    width: 100%;
    margin: 0 auto;
    }
    .li_comentario{
    color: black;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    font-weight: bold;
    margin: 0px auto;
    text-align: justify;
    }
    .div_boton{
    display: flex;
    margin: auto;
    text-align: center;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 40px;
    }
    .a_button{
    width: 50%;
    margin: auto;
    height: 100%;
    }
    .button_editar_usuario{
    height: 30px;
    padding: 0px;
    width: 100%;
    height: 100%;
    background: #76448A;
    color: white;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    justify-content: center;
    align-items: center;
    outline: none;
    border: 1px solid white;
    border-radius: 20px;
    }
</style>


            <?php
                $correo_contacto = $_SESSION['correo_contacto'];
                $sql = $conexion->query("SELECT * FROM usuario_nuevo_nova WHERE correo_contacto = '$correo_contacto'");
                while($datos=$sql->fetch_object()){
            ?>
        <div class="div_imagenes">
                <div class="div_titulo_imagenes">
                    <h1 class="titulo_imagenes">Tus Imágenes</h1>
                </div>
                <div class="lista_imagenes">
                    <ul class="ul_imagenes">
                        <li class="li_imagenes">
                            <a class="link_img" href="editar_usuario/editarimguno.php?=<?php 
                            echo $_SESSION['correo_contacto']?>"><img class="imagenes" src="editar_usuario/imagen/<?= $datos->imagenu ?>">
                            <span class="span_img">Editar</span></a>
                        </li>
                        <li class="li_imagenes">
                            <a class="link_img" href="editar_usuario/editarimgdos.php?=<?php 
                            echo $_SESSION['correo_contacto']?>"><img class="imagenes" src="editar_usuario/imagen/<?= $datos->imagend ?>">
                            <span class="span_img">Editar</span></a>
                        </li>
                        <li class="li_imagenes">
                            <a class="link_img" href="editar_usuario/editarimgtres.php?=<?php 
                            echo $_SESSION['correo_contacto']?>"
                            ><img class="imagenes" src="editar_usuario/imagen/<?= $datos->imagent ?>">
                            <span class="span_img">Editar</span></a>
                        </li>
                    </ul>
                </div>
        </div>
            <?php
                }
                $_SESSION['imagenu'] = $datos->imagenu;
                $_SESSION['imagend'] = $datos->imagend;
                $_SESSION['imagent'] = $datos->imagent;
            ?>
<style>
    .div_imagenes{
    border: none;
    border-top: 1px solid gray;
    margin: 80px auto;
    display: block;
    width: 90%;
    padding: 0;
    }
    .div_titulo_imagenes{
    width: 100%;
    display: flex;
    margin: 20px auto;
    text-align: center;
    justify-content: center;
    align-items: center;
    padding: 0;
    }
    .titulo_imagenes{
    color: black;
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    font-weight: bold;
    text-decoration: underline;
    word-wrap: break-word;
    width: 100%;
    }
    .lista_imagenes{
    width: 100%;
    display: flex;
    margin: auto;
    padding: 0;
    }
    .ul_imagenes{
    display: block;
    width: 100%;
    height: 100%;
    margin: 10px 0;
    padding: 0;
    }
    .li_imagenes{
    width: 45%;
    height: 100%;
    margin: 10px 10px;
    display: flex;
    padding: 0;
    }
    .link_img{
    display: flex;
    margin: auto;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: black;
    width: 100%;
    height: 100px;
    }
    .imagenes{
    width: 100%;
    height: 100%;
    display: flex;
    margin: 0;
    
    }
    .span_img{
    display: flex;
    margin: 40px 50px;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%;
    padding: 0;
    position: absolute;
    }   
</style>


        <div class="div_bandeja">
                <div class="div_b_mensaje">
                    <div class="div_titulo_bandeja">
                        <h1 class="titulo_bandeja">Notificaciones de Nova</h1>
                    </div>
                </div>
        </div>
<style>
    .div_bandeja{
    border: none;
    border-top: 1px solid gray;
    margin: 80px auto;
    display: block;
    width: 90%;
    padding: 0;
    }
    .div_b_mensaje{
    width: 100%;
    height: 700px;
    display: block;
    margin: 40px auto;
    border: 1px solid gray;
    border-radius: 20px;
    }
    .div_titulo_bandeja{
    width: 100%;
    display: flex;
    margin: 20px auto;
    text-align: center;
    justify-content: center;
    align-items: center;
    padding: 0;
    }
    .titulo_bandeja{
    color: black;
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    font-weight: bold;
    text-decoration: underline;
    word-wrap: break-word;
    width: 100%;
    }
</style>

        </div>
    </section>




    <section class="section_button_salir">
       <a class="link_salir_sesion" href="salir_sesion.php">Cerrar Sesión</a>
       <a class="link_salir_sesion" href="eliminar_cuenta.php?correo=<?php echo $_SESSION['correo_contacto']?>">Eliminar Cuenta</a>
    </section>
    </section>
<style>
    .section_button_salir{
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        height: 100px;
    }
    .link_salir_sesion{
        margin: 0 30px;
        color: black;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: bold;
    }
</style>

<!--------------------- AYUDA AL CLIENTE ------------------------

    <section class="informacion_redessociales">
    <ul class="partes">
        <li class="cate"><a class="link_ayuda" href="https://www.youtube.com/watch?v=lddNz-XC7uc">Ayuda</a></li>
        <li class="cate"><a class="link_ayuda" href="../index.html" style="text-decoration: underline;">Inicio</a></li>
        <li class="cate"><a class="link_ayuda" href="https://www.youtube.com/watch?v=lddNz-XC7uc">Asesoría Privada</li></a>
    </ul>
</section>
    </section>
    
    <div class="find-all">           
        <a href="../index.html"><img class="logotipo_empresa" 
   src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhu6-FIoGOKZYJ5wcouII9UBoRfctM-IGZ_boq7NfJ-XG7Z-3D6Z9EWQZ2VlszxjDmtDN2H-quPAKRxofksFi4Adh1u0scyHJSwc2wK5zLYbJkA60dakdTwRoCEwSlikyMEkD5GX72ITYQ0WyBsowu8xyycH0D02tQRkQECgVAY-vahAhAYx2KaDkRowtE/s320/NOVA.png">
        </a>
      
    </div>


<!--- DATOS USUARIO -

    <section class="section_usuario">



    <div class='nombre_empresa'>
        <a href="CUENTA_USUARIO.php">
    <?php
    echo $_SESSION['nombre_empre'];
    ?>  
    </a>
    </div>

   
<!---------- SECCION DATOS DEL USUARIO ----------
<!-- DATOS PERSONALES DEL USUARIO --
<section class="section_datos_usuario">
    <div class="div_title_datos_personales"><h1 class="title_datos_personales">Datos Personales</h1></div>

    <div class="div_datos_personales">
        <h2 class="h2_title_datos"> Correo: <?php echo $_SESSION['correo_contacto'];?> </h2>
        <h2 class="h2_title_datos"> Teléfono: <?php echo $_SESSION['tel_contacto'];?> </h2>
        <h2 class="h2_title_datos"> Dirección: <?php echo $_SESSION['direccion_depa'];?> </h2>
        <h2 class="h2_title_datos"> Departamento: <?php echo $_SESSION['departamento'];?> </h2>
        <h2 class="h2_title_datos"> Contraseña: <?php echo $_SESSION['pas'];?></h2>
    </div>

    <div class="div_title_metodopago"><h1 class="title_metodo_pago">Tus Servicios</h1></div>

    <div class="div_metodo_pago">
    <h2 class="h2_title_datos"> Servicio o Comida:  <?php echo $_SESSION['checkbox'];?> </h2>
    </div>

    </div>

<!-- COMENTARIO DE LA EMPRESA --
<div class="div_container_comentario">
<div class="div_title_comentario"><h1 class="title_comentario">Tu comentario de tu empresa.</h1></div>
<div class="div_comentario">
<h2 class="h2_title_datos">Tu Comentario:  <?php error_reporting(0); echo $_SESSION['comentario'];?> </h2>
      <a style="text-decoration: none;" href="editar_usuario/editar.php?=<?php echo $_SESSION['correo_contacto']?>">
        <button type="submit" class="button_editar_usuario" name="editar_usuariio">Editar Usuario</button>
      </a>

</div>
</div>




<!-- IMÁGENES DEL USUARIO --
<div class="div_title_imagenes"><h1 class="title_imagenes">Imágenes (3)</h1></div>

<div class="div_imagenes">
    <ul class="lista_imagenes">

<?php
 $correo_contacto = $_SESSION['correo_contacto'];
 $sql = $conexion->query("SELECT * FROM usuario_nuevo_nova WHERE correo_contacto = '$correo_contacto'");
while($datos=$sql->fetch_object()){
?>
        <li class="imagenes_li"><a class="link_img" href="editar_usuario/editarimguno.php?=<?php echo $_SESSION['correo_contacto']?>"><img class="imagenes" src="editar_usuario/imagen/<?= $datos->imagenu ?>"><span class="span_img">
            Editar</span></a></li>

        <li class="imagenes_li"><a class="link_img" href="editar_usuario/editarimgdos.php?=<?php echo $_SESSION['correo_contacto']?>"><img class="imagenes" src="editar_usuario/imagen/<?= $datos->imagend ?>"><span class="span_img">
            Editar</span></a></li>

        <li class="imagenes_li"><a class="link_img" href="editar_usuario/editarimgtres.php?=<?php echo $_SESSION['correo_contacto']?>"><img class="imagenes" src="editar_usuario/imagen/<?= $datos->imagent ?>"><span class="span_img">
            Editar</span></a></li>

    </ul>

<?php
}
$_SESSION['imagenu'] = $datos->imagenu;
$_SESSION['imagend'] = $datos->imagend;
$_SESSION['imagent'] = $datos->imagent;
?>
    
</section>





<!---------- SECCION MENSAJES DE CLIENTES -----------
<section class="section_mensajes_clientes">
    <div class="title_div_mensajes"><h1 class="title_mensajes_h1">Bandeja de Mensajes</h1></div>
</section>
   




<!---- SECCION CERRAR SESION ----
    <section class="section_button_salir">
       <a class="link_salir_sesion" href="salir_sesion.php">Cerrar Sesión</a>
       <a class="link_salir_sesion" href="eliminar_cuenta.php?correo=<?php echo $_SESSION['correo_contacto']?>">Eliminar Cuenta</a>
    </section>
    </section>



    <style>
    @import url('https://fonts.googleapis.com/css2?family=Hind&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
body{
    font-family: 'Montserrat', sans-serif;
    overflow-x: hidden;
    width: 100%;
    height: auto;
    text-align: center;
}
/*----------------------------------------------AYUDA AL CLIENTE ---------------------------------------------------------------*/
.ayuda_redessociales{
    background: #E5E8E8;
    height: 32px;
    width: 110%;
    margin: -8px -9px;
}
.partes{
    text-align: center;
    margin: -2px -140px;
    float: left;
    display: inline;
}
.cate{
    width: 450px;
    color: black;
    font-size: 18px;
    font-family: 'Hind', sans-serif;
    cursor: default;	
    list-style: none;
    display: inline-block;
	margin: 6px;
    color: black;
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
.find-all{
    width: 90px;
    height: 85px;
    border: solid 1px transparent;
    margin-left: 17.5px;
    margin-top: 16.5px;
}
.logotipo_empresa{
    width: 100%;
    height: 120%;
    margin-left: 20px;
    margin-top: 0px;
    cursor: pointer;
}
/*-- NOMBRE DE LA EMPRESA --*/
.section_usuario{
    padding: 5px;
    margin: 0px auto;
    justify-content: center;
    align-items: center;
    display: inline-block;
}
.nombre_empresa{
    font-size: 30px;
    font-weight: bold;
}
/*-------- SECCION DE DATOS USUARIO ---------*/
.section_datos_usuario{
    margin: 100px 5px;
    border: 1px solid rgb(185, 185, 185);
    border-radius: 20px;
    width: 500px;
    height: 1100px;
    display: block;
}
/*-- DATOS USUARIO --*/
.div_title_datos_personales{
    margin: 10px auto;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.title_datos_personales{
    font-size: 23px;
    text-decoration: underline;
}
.div_datos_personales{
    margin: 0px 20px;
    text-align: start;
}
.h2_title_datos{
    font-size: 17px;
}
/*-- CHECKBOX --*/
.div_title_metodopago{
    margin: 60px auto;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.title_metodo_pago{
    font-size: 23px;
    text-decoration: underline;
    margin: -10px auto;
}
.div_metodo_pago{
    margin: -20px 20px;
    text-align: start;
}
.h2_title_metodo_pago{
    font-size: 17px;
}
/*-- COMENTARIO DEL USUARIO  --*/
.div_container_comentario{
    margin: 60px auto;
}
.div_title_comentario{
    margin: 0px auto;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.title_comentario{
    font-size: 23px;
    text-decoration: underline;
}

.div_comentario{
    margin: 0px 20px;
    text-align: start;
    width: 90%;
    word-wrap: break-word;
}

.button_editar_usuario{
    margin: 50px auto;
    display: flex;
    padding: 2px;
    width: 150px;
    height: 40px;
    text-align: center;
    justify-content: center;
    align-items: center;
    background: linear-gradient(to right, #6A1B9A, #BA68C8);
    color: white;
    font-family: 'Hind', sans-serif;
    font-size: 15px;
    border: 1px solid white;
    border-radius: 20px;
    transition: 1s;
    cursor: pointer;
    position: relative;
}
.button_editar_usuario:hover{
    background: linear-gradient(to right, #55167B, #9553A0);
    transition: 1s;
}
/*-- IMÁGENES DEL USUARIO --*/
.div_title_imagenes{
    margin: 50px auto;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.title_imagenes{
    font-size: 23px;
    text-decoration: underline;
}
.div_imagenes{
    margin: 0px 20px;
    text-align: start;
}
.lista_imagenes{
    display: flex;
    margin: -50px -65px;
    height: 100%;
    width: 50%;
}
.imagenes_li{
    display: inline;
    margin: auto 50px;
    width: 35%;
    margin-left: 30px;
}
.imagenes{
    width: 120px;
    height:  120px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-left:auto;
}
.link_img{
    text-decoration: none;
    font-weight: bold;
    color: black;
    text-align: center;
    margin: auto;
    display: inline-block;
}
/*---------- MENSAJES RECIBIDOS POR CLIENTES ------------*/
.section_mensajes_clientes{
    margin: -1202px 520px;
    border: 1px solid rgb(185, 185, 185);
    border-radius: 20px;
    width: 58%;
    height: 1100px;
    display: flex;
}

.title_div_mensajes{
    margin: 10px auto;
    display: flex;
    text-align: center;
}
.title_mensajes_h1{
    font-size: 23px;
    text-decoration: underline;
}
/*------- BOTON CERRAR SESION --------*/
.section_button_salir{
    margin-top: 1400px;
    display: flex;
    margin-left: auto;
    text-align: center;
    align-items: center;
    justify-content: center;
    padding: 5px;
    position: relative;
}
.link_salir_sesion{
    color: black;
    font-size: 20px;
    font-weight: bold;
    border: solid 1px white;
    padding: 10px;
    border-radius: 20px;
    margin: 0 150px;
}
/*------------------------------------------------------------------------------------------------------------------------
--------------------------------------------- MODO PEQUEÑO (RESPOSIVE ----------------------------------------------------
--------------------------------------------------------*/
@media screen and (max-width : 500px){   
body{
        font-family: 'Montserrat', sans-serif;
        overflow-x: hidden;
        width: 100%;
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
    /*----------------------------------------------AYUDA AL CLIENTE ---------------------------------------------------------------*/
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
        /*--------------------- ENCABEZADO DE PÁGINA ---------------------------*/
.find-all{
            width: 90px;
            height: 85px;
            border: solid 1px transparent;
           margin: 0px 300px;
           display: none;
}
.logotipo_empresa{
            width: 100%;
            height: 120%;
            margin: auto;
            cursor: pointer;
}
/*-- NOMBRE DE LA EMPRESA --*/
.section_usuario{
    padding: 5px;
    margin: 60px auto;
    display: inline;
}
.nombre_empresa{
    margin: 40px auto;
    font-size: 20px;
    font-weight: bold;
}
/*-------- SECCION DE DATOS USUARIO ---------*/
.section_datos_usuario{
    margin: 50px auto;
    border: 1px solid rgb(185, 185, 185);
    border-radius: 20px;
    width: 90%;
    height: 1600px;
    display: block;
}
/*-- DATOS USUARIO --*/
.div_title_datos_personales{
    margin: 10px auto;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.title_datos_personales{
    font-size: 23px;
    text-decoration: underline;
}
.div_datos_personales{
    margin: 0px 20px;
    text-align: start;
}
.h2_title_datos{
    font-size: 17px;
}
/*-- CHECKBOX --*/
.div_title_metodopago{
    margin: 60px auto;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.title_metodo_pago{
    font-size: 23px;
    text-decoration: underline;
    margin: -10px auto;
}
.div_metodo_pago{
    margin: -20px 20px;
    text-align: start;
}
.h2_title_metodo_pago{
    font-size: 17px;
}
/*-- COMENTARIO DEL USUARIO  --*/
.div_container_comentario{
    margin: 60px auto;
}
.div_title_comentario{
    margin: 0px auto;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.title_comentario{
    font-size: 23px;
    text-decoration: underline;
}

.div_comentario{
    margin: 0px 20px;
    text-align: start;
    width: 90%;
    word-wrap: break-word;
}

.button_editar_usuario{
    margin: 50px auto;
    display: flex;
    padding: 2px;
    width: 170px;
    height: 50px;
    text-align: center;
    justify-content: center;
    align-items: center;
    background: linear-gradient(to right, #6A1B9A, #BA68C8);
    color: white;
    font-family: 'Hind', sans-serif;
    font-size: 20px;
    border: 1px solid white;
    border-radius: 20px;
    transition: 1s;
    cursor: pointer;
    position: relative;
}
.button_editar_usuario:hover{
    background: linear-gradient(to right, #55167B, #9553A0);
    transition: 1s;
}
/*-- IMÁGENES DEL USUARIO --*/
.div_title_imagenes{
    margin: 50px auto;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.title_imagenes{
    font-size: 23px;
    text-decoration: underline;
}
.div_imagenes{
    margin: 0px 20px;
    text-align: start;
}
.lista_imagenes{
    display: inline-block;
    margin: -50px 30px;
    height: 100%;
    width: 50%;
}
.imagenes_li{
    display: inline-block;
    margin: 17px 0px;
    width: 35%;
    margin-left: 30px;
}
.imagenes{
    width: 120px;
    height:  120px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-left:auto;
}
.link_img{
    text-decoration: none;
    font-weight: bold;
    color: black;
    text-align: center;
    margin: auto;
    display: inline-block;
}
/*---------- MENSAJES RECIBIDOS POR CLIENTES ------------*/
.section_mensajes_clientes{
    margin: 20px auto;
    border: 1px solid rgb(185, 185, 185);
    border-radius: 20px;
    width: 90%;
    height: 1100px;
    display: flex;
}

.title_div_mensajes{
    margin: 10px auto;
    display: flex;
    text-align: center;
}
.title_mensajes_h1{
    font-size: 23px;
    text-decoration: underline;
}
/*------- BOTON CERRAR SESION --------*/
.section_button_salir{
    margin-top: 100px;
    display: flex;
    margin-left: auto;
    text-align: center;
    align-items: center;
    justify-content: center;
    padding: 5px;
    position: relative;
}
.link_salir_sesion{
    color: black;
    font-size: 20px;
    font-weight: bold;
    border: solid 1px white;
    padding: 10px;
    border-radius: 20px;
    margin: 0 50px;
}
}
</style>
--->


</body>
</html>