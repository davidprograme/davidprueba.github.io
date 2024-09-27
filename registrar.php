<?php
session_start();
include "con_db.php";
#CODIGO PARA PHP 
if(isset($_POST['crear_cuenta'])){
  if(strlen($_POST['nombre_empre']) >=1 && strlen($_POST['tel_contacto']) >=1  && strlen($_POST['correo_contacto']) >=1
  && strlen($_POST['pas']) >=1 ){
    if(!empty($_POST['terminoscondiciones'])){

    $nombre_empre = $_POST['nombre_empre'] ?? '';
    $direccion_depa = $_POST['direccion_depa'];
    $departamento = $_POST['departamento'];
    $tel_contacto = $_POST['tel_contacto'];
    $correo_contacto = $_POST['correo_contacto'];
    $pas = $_POST['pas'];
    $terminoscondiciones = $_POST['terminoscondiciones'];
    $fechareg = date("d/m/y") ;

    $_SESSION['nombre_empre'] = $_POST['nombre_empre'];
    $_SESSION['direccion_depa'] = $_POST['direccion_depa'];
    $_SESSION['departamento'] = $_POST['departamento'];
    $_SESSION['tel_contacto'] = $_POST['tel_contacto'];
    $_SESSION['correo_contacto'] = $_POST['correo_contacto'];
    $_SESSION['pas'] = $_POST['pas'];
    $_SESSION['comentario'] = $_POST['comentario'];
   
    
    $respuesta = saveUser([
      "nombre_empre"=>$nombre_empre,
      "direccion_depa"=>$direccion_depa,
      "departamento"=>$departamento,
      "tel_contacto"=>$tel_contacto,
      "pas"=>$pas,
      "correo_contacto"=>$correo_contacto,
      "terminoscondiciones"=>$terminoscondiciones,
      "fechareg"=>$fechareg
    ]);
 
    header("location: Op_servicios/Opciones.php/?nombre_empre=$nombre_empre&&direccion_depa=$direccion_depa&&departamento=$departamento&&tel_contacto=$tel_contacto&&correo_contacto=$correo_contacto&&pas=$pas");
  }
  }
  echo "<div class='alerta_inicio'>Completa los campos</div>";
}
#FUNCIONES PHP
function saveUser(array $datos){
  try{
    $Conex = new Conexion;
    $MiConexion = $Conex->getConection();

    $Conex->pps = $MiConexion->prepare(
      "INSERT INTO usuario_nuevo_nova(nombre_empre,direccion_depa,departamento,tel_contacto,correo_contacto,pas,terminoscondiciones,fechareg) 
      VALUES(:nombre_empre,:direccion_depa,:departamento,:tel_contacto,:correo_contacto,:pas,:terminoscondiciones,:fechareg)"
    );
  
    $Conex->pps->bindParam(":nombre_empre",$datos['nombre_empre']); 
    $Conex->pps->bindParam(":direccion_depa",$datos['direccion_depa']);
    $Conex->pps->bindParam(":departamento",$datos['departamento']); 
    $Conex->pps->bindParam(":tel_contacto",$datos['tel_contacto']);
    $Conex->pps->bindParam(":correo_contacto",$datos['correo_contacto']); 
    $Conex->pps->bindParam(":pas",$datos['pas']);
    $Conex->pps->bindParam(":terminoscondiciones",$datos['terminoscondiciones']);
    $Conex->pps->bindParam(":fechareg",$datos['fechareg']);
  
    return $Conex->pps->execute(); /// 1 | 0
  } catch (\Throwable $th) {
    echo $th->getMessage();
  }finally
  {
    $Conex->closeDataBase();
  }
  }


?>