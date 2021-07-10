<?php
include_once('../app/config/config.php');
session_start();
if(isset($_POST['btn_login'])){  
    $num_cuenta = $_POST['num_cuenta'];
    $contra = $_POST['contra'];
    $res = $con->prepare("SELECT num_cuenta, contra FROM usuarios WHERE num_cuenta = :num_cuenta AND contra = :contra AND estatus = 'A'");
        $res->bindParam(":num_cuenta", $num_cuenta, PDO::PARAM_STR);
        $res->bindParam(":contra", $contra, PDO::PARAM_STR);       
        if($res->execute()){
            $res->setFetchMode(PDO::FETCH_ASSOC);
            $query = $res->fetchAll();
            foreach($query as $row) {  //Sacar variable pass
                $num_cuenta_query = $row['num_cuenta'];
                $contra_query = $row['contra'];
            }
        }

    if($res->execute()){
        if (!empty($res) && !empty($num_cuenta_query) && !empty($contra_query))  {
            if ($num_cuenta === $num_cuenta_query && $contra === $contra_query) {
                $exito = "<script> swal({
                    title: '¡BIENVENIDO!',
                    text: 'Iniciando Sesión',
                    type: 'success',
                  })
                  .then((willOUT) => {
                    if (willOUT) {
                          window.location.href = '../users/', {
                          icon: 'success',
                        }
                      }
                });</script>";
                $_SESSION['cuenta'] = $num_cuenta;
            } 
        } else{
            $exito = "<script> swal({
                title: '¡ERROR!',
                text: 'No. Cuenta o Contraseña incorrectos',
                type: 'error',
              });</script>";
        }
    } else {
        print $con->errorInfo();
    }
    $con = null;
}
if(isset($_POST['btn_cerrar'])){
    if (isset($_SESSION['cuenta'])){  
        session_destroy();
        header('Location:'.$URL.'/login/login.php');
    } 
}  
?>