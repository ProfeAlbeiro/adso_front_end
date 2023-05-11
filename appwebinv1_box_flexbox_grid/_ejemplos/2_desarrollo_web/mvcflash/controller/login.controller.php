<?php

require_once 'model/login.php';
session_start();


class LoginController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new LoginU();
    }

    
    public function Index(){
        
        require_once 'view/login/login.php';
        
    }
    
    public function LogIn(){

        $log = new LoginU();

        $log->nombreUsuario = $_REQUEST['nombreUsuario'];
        $log->passwordUsuario = $_REQUEST['passwordUsuario'];

        //var_dump($log);

        if(!empty($_REQUEST['nombreUsuario']) && !empty($_REQUEST['passwordUsuario'])) {

             $log = $this->model->ValidarUsuario($_REQUEST['nombreUsuario'],$_REQUEST['passwordUsuario']);
             //var_dump($log);
             if ($log->nombreUsuario != null and $log->passwordUsuario !=null) {
                
                 //Se establece un dato y se guarda en una variable de sesion
                $_SESSION['usuarioSesion'] = $log->nombreUsuario; 
                //Se redirecciona a la vista que se desee
                
                //header('location: ?c=Alumno'); 

                header('Refresh: 2; URL=?c=Alumno');

                echo '<p class="alert alert-success agileits" role="alert">Bienvenido</p>';
                

/*                echo "<script>
                                alert('Bienvenido');
                                window.location= '?c=Alumno'
                    </script>";*/
                
                }
                else
                {   
                    //En caso contrario se redirecciona nuevamente al index  y se destruye la sesion 
                   header('Refresh: 2; URL=?c=Login');

                    echo '<p class="alert alert-success agileits" role="alert">Datos de Acceso incorrectos</p>';
                    session_destroy();  
                }
        }
        else {
            
           header('Refresh: 2; URL=?c=Login');

                    echo '<p class="alert alert-success agileits" role="alert">Datos de Acceso incorrectos</p>';
            session_destroy();  
               
        }
        
        
}        
        
    
    public function Logout()
    {
        // delete the session of the user
        $_SESSION = array();
        session_destroy();
        // return a little feeedback message
        header('Refresh: 5; URL=?c=Login');

                echo '<p>La sesión se cerrará</p>';
                

    
        
    }
}