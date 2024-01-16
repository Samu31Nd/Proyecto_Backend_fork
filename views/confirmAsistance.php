<?php 
  session_start();
  if (isset($_SESSION['user_curp'])) { 
?>

<?php include './templates/header.php'; ?>

<body>
    
    <div class = "d-flex justify-content-center align-items-center __centered">
        <div class="p-3 rounded shadow __regist-form">
            <h1 class="text-center display-6"> BIENVENIDO <br> <?=$_SESSION['user_name']?> <?=$_SESSION['user_last_name']?></h1> <br>
            <p>
                Has sido invitado a la ceremonia de distinciones al mérito Instituto Politécnico Nacional del año 2024, con el fin de otorgar
                premios a la comunidad por ser personas sobresalientes y competentes que enorgullecen a la comunidad politécnica. <br> <br>
                La presente invitación es para otorgarte un reconocimiento de <b> <?=$_SESSION['user_prize']?> </b>. <br>
                
                *INSERTAR LOS DEMÁS DATOS* <br><br>
            </p>

            <h3 class="text-center">
                ¿Confirmar asistencia?<br><br>
            </h2>
            <div class="row g-2 justify-content-center">
                <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Aceptar invitación</button>
                </div>
                <div class="col-auto">
                <button type="submit" class="btn btn-danger mb-3">Rechazar invitación</button>
                </div>
            </div>
        

            <div class="justify-content-center">
                <a href="logout.php" class="btn btn-warning">LOGOUT</a>
            </div>
        </div>   
    </div>

</body>
</html>

<?php 
}  else {
   header("Location: login.php");
}
 ?>