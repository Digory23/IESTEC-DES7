<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiantes Nacionales Postgrado</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../css/form css/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../js/vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/form css/styleform.css">
    <link rel="stylesheet" href="../css/prueba.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/nav.css">

    
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
                    <h2>Estudiantes Nacionales de Postgrado</h2>
                    <p>Asegúrese de verificar que su información sea correcta y que TODOS LOS CAMPOS sean válidos.</p>
                    

                    <form method="POST" class="register-form" id="register-form">
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
                                    <label for="id" class="required">Cédula/Identificación</label>
                                    <input type="text" name="ID" id="ID" />
                                </div>

                                <div class="form-select">
                                        <div class="label-flex">
                                            <label for="sexo">Sexo</label>
                                        </div>
                                        <div class="select-list">
                                            <select name="opcion" id="opcion"><!--OJO-->
                                                <option disabled selected hidden value="selecsex" >Seleccionar sexo</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>
                                    </div>

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
                               <!-- <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Payment Mode</label>
                                        <a href="#" class="form-link">Payment Detail</a>
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cash" checked>
                                            <label for="cash">Cash</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cheque">
                                            <label for="cheque">Cheque</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand">
                                            <label for="demand">Demand Draf</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>-->
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
                        <!--<div class="donate-us">
                            <label>Donate us</label>
                            <div class="price_slider ui-slider ui-slider-horizontal">
                                <div id="slider-margin"></div>
                                <span class="donate-value" id="value-lower"></span>
                            </div>
                        </div>-->
                        <div class="form-submit">
                            <input type="submit" value="Cena y Pago" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
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