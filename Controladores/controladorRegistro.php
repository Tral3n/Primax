<?php

session_start();
$_SESSION['mensaje'] = " ";

if($_POST['formulario'] == 'registro'){


<<<<<<< HEAD
    $name = trim($_POST['nombre']);
=======
    $email = trim($_POST['email']);
>>>>>>> teo
    $user = trim($_POST['user_name']);
    $pass = trim($_POST['password']);
    

<<<<<<< HEAD
    if (empty($name) or empty($user) or empty($pass)) {
=======
    if (empty($email) or empty($user) or empty($pass)) {
>>>>>>> teo
        
        
        if (isset($_SESSION['mensaje'])) {
            
<<<<<<< HEAD
            $_SESSION['mensaje'] = "Debes ingresar los datos para el registro";
=======
            $_SESSION['mensaje'] = "Debes ingresar los datos obligatorios para el registro";
>>>>>>> teo
            header('Location:../Registro.php');
            

        }
        

    }else {
        if (!empty($_POST["user_name"]) and !empty($_POST["password"])) {

            $con = mysqli_connect(
                "us-cdbr-east-04.cleardb.com",
                "be638dfe02bc87",
                "18c8a290",
                "heroku_f7036baf347b6a5"
            ) or die("No se conecto.");

<<<<<<< HEAD
            

            $sql = "INSERT INTO login_user VALUES('','$name', '$user', '$pass')";
=======
            $consulta = "SELECT * FROM login_user WHERE email='$email'";
            $resultado = mysqli_query($con, $consulta);

            if (mysqli_num_rows($resultado) > 0) {
                $_SESSION['mensaje'] = 
                "
                    <div class='center'>
                    <div class='alert-danger '>
                    El correo ya esta registrado, porfavor inicie Sesion
                    </div>
                    </div>";
            header('Location:../Registro.php');
            }else{

            $sql = "INSERT INTO login_user VALUES('','$email', '$user', '$pass')";
>>>>>>> teo
                echo $sql;
            if ($con->query($sql) === TRUE) {
                $_SESSION['mensaje']= "Usuario Registrado Correctamente";
                    header("Location:../index.php");
            } else {
            echo "Error: " . $sql . "<br>" . $con->error;
            }
<<<<<<< HEAD

=======
        }
>>>>>>> teo

            
    }
}
}
?>
