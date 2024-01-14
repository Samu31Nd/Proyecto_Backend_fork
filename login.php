<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    
</head>
<body>

    <!-- main div -->
    <div class = "d-flex justify-content-center align-items-center __centered">
        <form class="p-3 rounded shadow __regist-form"
        action="auth.php" method="post">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center col-sm-6 text-center">
                    <img src="/secure-login-system/ipn-logo-small.png" width="100px"  id="logo-image" alt="logo-ipn" style="padding-bottom: 30px;"> 
                </div>
                <div class="col-sm-6">
                    <h1 class="text-center pb-5 display-4">Registro al evento</h1>
                    <p>
                        Se les hace una coordial invitación al evento de distinciones <br>
                        Si has sido invitado al evento, ingresa tu CURP.
                    </p>
                    <?php if( isset($_GET['error']) ) { ?>
                    <div class="alert alert-danger" role="alert">
                        Ingresa una CURP válida o registrada en el sistema.
                    </div>
                    <?php } ?>
                    <div class="mb-3">
                        <label for="exampleInputCurp1" class="form-label">CURP</label>
                        <input type="text"
                                name="curp"
                                class="form-control" 
                                id="inputCurp" minlength=18 maxlength=18>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
            </div>
        </div>
    </form>
    </div>

</body>
</html>