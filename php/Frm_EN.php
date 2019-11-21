<?php 
    $titulo= $_GET['titulo'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo ?></title>

    <link href="../img/utp.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Font Icon -->
    <link rel="stylesheet" href="../css/form css/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../js/vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/form css/styleform.css">
    <link rel="stylesheet" href="../css/prueba.css">
    

</head>


<body>
    
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <div class="signup-img-content">
                    </div>
                </div>
            
                <div class="signup-form">
                    <h1>Inscripción y pago</h1>
                    <h2> <?php echo $titulo ?></h2>
                    <p>Asegúrese de verificar que su información sea correcta y que TODOS LOS CAMPOS sean válidos.</p>
                    

                    <form action="../inserts/insertar_EPregrado.php" method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Nombre(s)</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Apellido(s)</label>
                                    <input type="text" name="last_name" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="id" class="required">Identificación (Cédula)</label>
                                    <input type="text" name="ID" id="ID" />
                                </div>

                                <div class="form-select">
                                        <div class="label-flex">
                                            <label for="sexo">Sexo</label>
                                        </div>
                                        <div class="select-list">
                                            <select name="opcion" id="opcion">
                                                <option disabled selected hidden value="selecsex" >Seleccionar sexo</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>
                                    </div>

                                    <select name="sexo" id="sexo">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Otro">Otro</option>
                                    </select>

                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Teléfono</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>
                               
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="Miembro">¿Miembro IEEE? 15% Descuento</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="opcion1" id="opcion1">
                                            <option disabled selected hidden value="Selecc">Seleccionar</option>
                                            <option value="Miempro_Estudiantil">Miembro Estudiantil</option>
                                            <option value="Miembro_Profesional">Miembro Profesional</option>
                                            <option value="Sociedad_Afiliada">Sociedad Afiliada</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-input">
                                        <label for="provincia">Provincia</label>
                                        <input type="text" name="provincia" id="provincia" />
                                    </div>

                                <div class="form-input">
                                    <label for="ciudad">Ciudad</label>
                                    <input type="text" name="ciudad" id="ciudad" />
                                </div>
                                <div class="form-input">
                                    <label for="institucion">Institución/Entidad/Universidad</label>
                                    <input type="text" name="institucion" id="institucion" />
                                </div>
                                <div class="form-input">
                                    <label for="departamento">Unidad/Departamento/Facultad</label>
                                    <input type="text" name="departamento" id="departamento" />
                                </div>
                            </div>
                        </div> 

                        <h1>Cena de Clausura</h1>
                            <div class="form-select">
                                <div class="label-flex">
                                            <label for="Cena">Cena</label>
                                </div>
                                    <div class="select-list">
                                        <select name="opcion4" id="opcion4"><!--OJO-->
                                            <option disabled selected hidden value="selecena" >Seleccionar opción</option>
                                            <option value="Solo">Si, asistiré a la cena de clausura solo. (+10.00 USD)</option>
                                            <option value="Duo">Si, asistiré a la cena de clausura con un acompañante. (+60.00 USD)</option>
                                            <option value="No">No asistiré a la cena de clausura.</option>
                                        </select>
                                    </div>
                                </div>
                        <h1>Áreas de intéres</h1>
                        <div class= "CHKB">   
                        <label><input type="checkbox" name="interes_selec[]" value="Agroindustria">Agroindustria</label>
                        </div>
                        <div class= "CHKB">
                        <label><input type="checkbox" name="interes_selec[]" value="Ciencias_Basicas">Ciencias Básicas</label>
                        </div>
                        <div class= "CHKB">
                        <label><input type="checkbox" name="interes_selec[]" value="Economía_Sociedad" >Economía y Sociedad</label>
                        </div>
                        <div class= "CHKB">
                        <label><input type="checkbox" name="interes_selec[]" value="Educación_Ingeniería" >Educación en Ingeniería</label>
                        </div>
                        <div class= "CHKB">
                        <label><input type="checkbox" name="interes_selec[]" value="Energía_Ambiente" >Energía y Ambiente</label>
                        </div>
                        <div class= "CHKB">
                        <label><input type="checkbox" name="interes_selec[]" value="Gestión_Empresarial" >Gestión Empresarial</label>
                        </div>
                        <div class= "CHKB">
                        <label><input type="checkbox" name="interes_selec[]" value="Infraestrucutra" >Infraestrucutra</label>
                        </div>
                        <div class= "CHKB">
                        <label><input type="checkbox" name="interes_selec[]" value="Logística_Transporte" >Logística y Transporte</label>
                        </div>
                        <div class= "CHKB">
                        <label><input type="checkbox" name="interes_selec[]" value="Robótica" >Robótica</label>
                        </div>
                        <div class= "CHKB">
                        <label><input type="checkbox" name="interes_selec[]" value="TIC" >TIC</label>
                        </div>
                        <div class= "CHKB">
                        <label><input type="checkbox" name="interes_selec[]" value="Tecnologías_Emergentes" >Tecnologías Emergentes</label>
                        </div>
                        <div class= "CHKB">
                        <label><input type="checkbox" name="interes_selec[]" value="Otros" >Otros</label>
                        </div><br>

                        <h1>Opciones de pago</h1>
                        <div class= "RBTN">
                        <label><input type="radio" name="pago" value="PayPal" ><img class="img-responsive" src="../img/paypal.png" alt="paypal" width="200" height="400"></label>
                        </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Inscribirme y Pagar" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Volver" class="submit" id="reset" name="reset" />
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="../js/vendor/jquery/jquery.min.js"></script>
    <script src="../js/vendor/nouislider/nouislider.min.js"></script>
    <script src="../js/vendor/wnumb/wNumb.js"></script>
    <script src="../js/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../js/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="../js/main-form.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>