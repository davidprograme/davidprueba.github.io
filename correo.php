<?php
if(isset($_POST["Submit_mensaje"])){
    if(!empty($_POST["correo_electronico"]) && !empty($_POST["msg"])){
        $email = $_POST["correo_electronico"];
        $msg = $_POST["msg"];

        $header = "From: venturadavid475@gmail.com" . "r/n/";
        $header.= "Reply-To: venturadavid475@gmail.com" . "r/n/";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = @mail($email,$msg,$header);
        if($mail){
            echo "!Gracias Por tu Comentario!.";
        }
    }else{
        echo "Por favor llenar los datos.";
    }
}
?>