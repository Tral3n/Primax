<?php

session_start();
$_SESSION['mensaje'] = " ";


if($_POST['formulario'] == 'index'){



    $user = trim($_POST['user_name']);
    $pass = trim($_POST['password']);
    

    if (empty($user) or empty($pass)) {
        
        if (isset($_SESSION['mensaje'])) {
            
<<<<<<< HEAD
            $_SESSION['mensaje']= "Debes ingresar el usuario y el password, ";
=======
            $_SESSION['mensaje']= "
           <div class='center'>
            <div class='alert-danger '>
           
            Debes ingresar el usuario y el password 
            </div>
            </div>
             "
            ;
>>>>>>> teo
            header('Location:../index.php');
            

        }




    } else{

        if (!empty($_POST["user_name"]) and !empty($_POST["password"])) {

            $con = mysqli_connect(
                "us-cdbr-east-04.cleardb.com",
                "be638dfe02bc87",
                "18c8a290",
                "heroku_f7036baf347b6a5"
            ) or die("No se conecto.");

            $resultado_sql = mysqli_query(
                $con,
<<<<<<< HEAD
                "SELECT id,nombre FROM login_user WHERE user_name='" . $user. "'
=======
                "SELECT id,email FROM login_user WHERE user_name='" . $user. "'
>>>>>>> teo
                 AND pass= '" . $pass . "'"
            );

            $registro = mysqli_fetch_array($resultado_sql);

            if (is_array($registro)) {


                $_SESSION['id_session'] = $registro['id']."1000";
<<<<<<< HEAD
                $_SESSION['nombre_usuario'] = $registro['nombre'];
=======
                $_SESSION['nombre_usuario'] = $registro['email'];
>>>>>>> teo
                $_SESSION['mascota'] = "cocodrilo";

        
                header("Location:../Menu.php");
            } else {

                if (isset($_SESSION['mensaje'])) {
<<<<<<< HEAD

                    $_SESSION['mensaje']= "Corregir usuario o password, son invalidos";
=======
                      
                    $_SESSION['mensaje']= "
                    <div class='center'>
                    <div class='alert-danger '>
                    El usuario o password no son validos
                    </div>
                    </div>";
                    
>>>>>>> teo
                    header("Location:../index.php");
                    
                }
            }


    }


    }

}






?>