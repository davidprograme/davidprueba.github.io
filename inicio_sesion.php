<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj5eOFfP8dltazb7DjeSH-jrMiEyN25DnokqVCpLwNn9nwOnCF8lcAThV8gdODhm77SZ5hEZOCKpQyLyRKAv_KbmlSyH6lSf7zSgY7E5SyJSh6Yh1XrPhV7yZUt50-7IFbhKjT7PCYBgWlEHIKYO3k1X6uil0EuVDaErUTnrfNA8iHPK2bS1w9gvel_19A/s320/NOVA2.png">
    <title>Inicia tu Sesión | Nova</title>
</head>
<body>
<style>
    body{
        width: auto;
        background: linear-gradient(to right, #1A237E, #0D47A1, #1A237E);
        height: 0;
    }
</style>


<!--- CARTA PARA INICIAR SESIÓN --->
<section class="section_carta">
    <div class="div_carta">

        <div class="div_logo">
            <a href="../index.php">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEie9W-MfeTko-RJ3hkSdwjx6Be0XeNCbLOwglZ7mIUzKly52PXY8xfZtbeiPhqzbOLesB6IlZfsQJIYvMl0ie4mHooPwzff4Jf-L6M0Wf71AskhUxm3xpXVYnXSGBsyJRHGKUU5IAjbG6fjFQ1G7FbfViC0oPTM_4ImoWRyCTAC9rHI6CkvNT6kdR2GPNI/s320/kkk.png"
                class="logotipo">
            </a>
        </div>

        <div class="div_crear_sesion">
            <div class="div_titulo">
                <h1 class="titulo">Bienvenido</h1>
            </div>

            <div class="div_title">
                <?php
                include "codigoiniciar.php";
                ?>
            </div>

            <div class="div_input">
                <form method="post" autocomplete="off">
                    <input class="input_correo" type="email" name="correo_contacto" placeholder="Correo @">
                    <input class="input_correo" type="password" name="pas" placeholder="Contraseña" id="password">
                    <label>
                    <button type="button" name="wf" onclick="mostrar()" value="Mostrar Contraseña" class="button_mostrar">
                        <img class="img_mostrar" src="https://images.vexels.com/media/users/3/140160/isolated/preview/2d4e09879b6f017f74ffaee0b0011c0a-icono-de-ojo.png">
                    </button>
                    </label>

                    <button type="submit"  class="button_enviar" name="iniciar_sesion">Iniciar Sesión</button>
                </form>
            </div>

            <div class="div_link">
                <ul class="ul_link">
                    <li class="li_link"><a href="Recu_contra/correo_recu_contraseña.php">¿Olvidaste tu contraseña?</a></li>
                    <li class="li_link"><a href="../Crear_cuenta/crear_sesion.php">¿No tienes cuenta? Qué esperas.</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Hind&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
    .section_carta{
        width: 99%;
        padding: 0px;
        display: flex;
    }
    .div_carta{
        display: block;
        width: 100%;
        height: 10%;
    }
    .div_logo{
        margin: 0;
        width: 30%;
    }
    .logotipo{
        width: 100%;
    }
    .div_crear_sesion{
        background-color: #0D47A1;
        border-radius: 40px;
        margin: 30px auto;
        padding: 0px;
        width: 100%;
        height: 100%;
        padding-bottom: 40px;
    }
    .div_titulo{
        text-align: center;
        justify-self: center;
        align-items: center;
        border: 1px solid transparent;
        border-bottom: 2px solid white;
        height: 70px;
        width: 80%;
        margin: auto;
    }
    .titulo{
        font-family: 'Montserrat', sans-serif;
        color: white;
        font-size: 32px;
        font-weight: bold;
    }
    .div_title{
        justify-content: center;
        display: flex;
        width: 80%;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        color: white;
        margin: 5px 7%;
        background-color: #1A237E;
        border-radius: 15px;
        text-align: center;
        align-items: center;
        position: absolute;
    }
    .div_input{
        width: 90%;
        margin: 40px auto;
        display: block;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .input_correo{
        padding: 5px;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        color: black;
        font-size: 16px;
        border-radius: 15px;
        border: none;
        outline: none;
        margin: 20px auto;
        width: 80%;
        height: 25px;
        display: inline;
        position: relative;
    }
    .button_mostrar{
        width: 40px;
        background-color: transparent;
        outline: none;
        border: none;
        position: relative;
        display: flex;
        margin: -53px 77%;
    }
    .img_mostrar{
        width: 100%;
        height: 100%;
    }
    .button_enviar{
        margin: 100px auto;
        padding: 10px;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        color: white;
        font-size: 16px;
        background: #2c6ac7;
        border-radius: 20px;
        border: 1px solid white;
        width: 70%;
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
    }
    .div_link{
        display: flex;
        margin: 10px auto;
        width: 90%;
        position: relative;
    }
    .ul_link{
        margin: -30px auto;
        display: block;
        padding: 0;
    }
    .li_link{
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        margin: 10px auto;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        color: white;
        font-size: 14px;
    }
    a{
        color: white;
        text-decoration: none;
    }

</style>







<style>
    /*-- CONTAINER INICIO SESION --*
body{
    width: auto;
    background: linear-gradient(to right, #1A237E, #0D47A1, #1A237E);
    justify-content: center;
    align-items: center;
    display: block;
    text-align: center;
    font-family: 'Montserrat', sans-serif;
}

.logitipo_empresa{
    width: 40%;
    height: 19%;
    padding: 5px;
    margin: 10px 0;
}
.logotipo{
    margin: auto;
    width: 100%;
}





/*-- CONTAINER INICIO SESION --*
.inicio_sesion{
    margin: 20px auto;
    width: 90%;
    height: 100%;
    padding: 0;
}
.div_inicio_sesion{
    width: 100%;
    margin: auto;
    padding: 5px;
    border-radius: 20px;
    background-color: #0D47A1;
    height: 100%;
    padding-bottom: 30px;
}

.div_title{
    height: 50px;
    margin: 0% auto;
    border-top: none;
    border-right: none;
    border-left: none;
    width: 80%;
    padding: 5px;
}

.title_sesion{
    color: white;
    font-size: 36px;
}



/*-- INICIO SESION --*

.div_container{
    display: inline-block;
    background-color: transparent;
    backdrop-filter: blur(1px);
    opacity: 0.90;
    width: 90%;
    height: 100%;
    padding-top: 15px;
    padding: 1px;
    margin: 20px auto;
    border: 1px solid black;
    border-top: 2px solid white;
    border-bottom: none;
    border-left: none;
    border-right: none;
}

.formulario{
    margin: 10px auto;
    
}
.input_correo, .input_contraseña{
    padding: 5px;
    font-size: 16px;
    width: 85%;
    height: 25px;
    margin: 15px auto;
    border-radius: 15px;
    outline: none;
    border: 1px solid gray;
    border-left: 1px;
    border-top: none;
    border-right: none;
    border-width: none;
    color: black;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
}



.button_mostrar{
    width: 20px;
    height: 25px;
    margin: -47px 80%;
    display: flex;
    background: transparent;
    border: none;
    position: relative;
}

.img_mostrar{
    width: 25px;
    height: auto;
    cursor: pointer;
}


.button_enviar{
    margin: 120px auto;
    padding: 5px;
    border-radius: 20px;
    border: 1px solid white;
    outline: none;
    cursor: pointer;
    width: 200px;
    height: 40px;
    background: #2c6ac7;
    color: white;
    font-size: 17px;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.button_enviar:hover{
    background: #3c75cb;
}

.links{
    margin: -50px auto;
}

.link{
    display: block;
    color: white;
    margin: 10px auto;
    text-decoration: none;
    width: auto;
    font-weight: bold;
}

.alerta_alerta{
    color: white;
    display: flex;
    position: relative;
    padding: 5px;
    background-color: #1A237E;
    border-radius: 15px;
    margin: 12px auto;
    text-align: center;
    justify-content: center;
    align-items: center;
}
 CONTAINER INICIO SESION --*/
</style>

<script type="text/javascript">
    function mostrar(){
        var tipo = document.getElementById("password");
        if(tipo.type == 'password'){
            tipo.type = 'text';
        }else{
            tipo.type = 'password'
        }
    }
</script>



</body>
</html>