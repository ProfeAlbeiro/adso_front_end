<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Anexsoft</title>
        
        <meta charset="utf-8" />
        
        <link rel="stylesheet" href="assets/css/bootstrap.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	</head>
    <body>
        
    <div class="container">
        <nav class="navbar navbar-default ">
  <div class="container-fluid">


	<form id="frm-login" name="forminiciosesion" method="post" action="?c=Login&a=LogIn">

		<H1> LOGIN </H1>
		<div class="form-group">
		<label> Introduzca su usuario: </label>
		<input title="Faltan datos" class="form-control" type="text" name="nombreUsuario" required="">
		
		</div>

		<div class="form-group">
		<label> Introduzca contraseña: </label>
		<input class="form-control" type="password" name="passwordUsuario" required="">
		</div>
		
		<input class="btn btn-lg btn-success btn-block btn-signin" type="submit" value="Calcular"/>
	</form>
</body>
</html>



    <script type="text/javascript">
    function datos(input) {  
        if (input.validity.patternMismatch){  
            input.setCustomValidity("Debe ingresar al menos 3 LETRAS");  
        }  
        else {  
            input.setCustomValidity("");  
        }                 
    }  </script>