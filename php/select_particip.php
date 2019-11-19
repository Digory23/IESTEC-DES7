<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tipo de Participante</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link href="../img/utp.png" rel="icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/select css/others.css">
	<link rel="stylesheet" type="text/css" href="../css/select css/stylesel.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="container-login100" style="background-image: url('../img/bg.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">

			<form action="control_formulario.php" class="login100-form validate-form" method="POST" class="register-form" id="register-form">
				<span class="login100-form-title p-b-37">
					Seleccione el tipo de participante
				</span>

						<div class="custom-select">
							<select name="select_part" ><!--OJO-->
								<option selected="selected" disabled hidden >Seleccionar</option>
								<option value="Est_NPre">Estudiante Nacional Pregrado</option>
								<option value="Est_NPost">Estudiante Nacional Postgrado</option>
								<option value="Est_Int">Estudiante Internacional</option>
								<option value="Est_Art">Estudiante con Artículo</option>
								<option value="Pro_Art">Profesional con Artículo</option>
								<option value="Pro_Nac">Profesional Nacional</option>
								<option value="Par_Int">Participante Internacional</option>
							</select>
				</div>

				<div class="container-login100-form-btn">
					<input type="submit" value="Siguiente" class="login100-form-btn"/>
				</div>

				<div class="text-center">
					<a href="../index.html" class="txt2 hov1">Regresar</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	</body>
</html>