<?php
    /*Conexión con la base de datos*/
    $link= mysqli_connect("localhost", "root", "", "sprint5");
    mysqli_set_charset($link, 'utf8');

    /*Declaramos inicio de sesión para poder usar variables de sesión*/
    session_start();
    $ocu = $_POST['oculto'];
    /*Cuando el valor de "oculto"(input tipo hidden) sea 1*/
    switch($ocu){
        case 1:
            login($link);
        break;
    }

    /*Función del login: comprobamos si la combinación del email y la contraseña introducidas, coinciden con alguna de nuestra base de datos*/
    function login($link){
        $sql="SELECT * FROM users WHERE email='$_POST[email]'";
        $r_sql=mysqli_query($link,$sql);
        $num_sql=mysqli_num_rows($r_sql);
        if($num_sql==1){
            $arr=mysqli_fetch_array($r_sql);
            if(password_verify($_POST['pass'],$arr['password'])){
                $_SESSION['id']=$arr['email'];
                $_SESSION['type']=$arr['type'];
                
                header('location:sprint5.php');
            }
                
            else{
                echo '<script>Error muy loco</script>';
            }
        }
            
        else{
            echo '<script>Error muy loco</script>';
        }
    };
        
    /*Cuando el valor del "oculto" sea 2, hacemos la función de registro, insertando los datos en nuestra base de datos*/
    if($ocu == 2){
        $email  =$_POST['emailRegister'];
        $pass =$_POST['passRegister'];
        $hash=password_hash($pass,PASSWORD_DEFAULT);
        $nuevo ="INSERT INTO users (email, password, type) VALUES ('$email','$hash', 'u')";
        mysqli_query($link, $nuevo);

        header("location:sprint5.php");
    }

    /*Cuando el valor del "oculto" sea 3, hacemos la función de cerrar sesión, "destruyendo" la función de session_start*/    
    if($ocu == 3){
        session_destroy();

        header('location: sprint5.php');
    }
?> 