<?php session_start();
if (!isset ($_SESSION['user_data'])){
    header('Location: ../LOGIN/login.php');
}
$user_data = $_SESSION ['user_data'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
</head>
<body class="d-flex">
        <!--sidebar-->
        <?php include "../layouds/aside.php" ?>
        <!--End sidebar-->

        <main class="flex-grow-1">
        <?php include "../layouds/header.php" ?>
            
            <section class="container mt-4 p-4">

    
                <div class="row px-4">
                    <div class="row">
                        <div class="row">
                            <h2>Comentarios</h2>
                        </div>
                    <br>
                    <br>
                    <div class="col-6 p-4">
                        <div class="card text-center">
                        <div class="card-header">
                          Usuario 1
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">IPHONE 15 PRO MAX</h5>
                          <p class="card-text">"¡Excelente equipo! La cámara es una locura, y la batería dura todo el día sin problemas. 
                            Llegó súper rápido y bien empacado. 100% recomendado para los que buscan lo mejor en celulares."</p>
                          <a href="#" class="btn btn-primary">Leer mas</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            Hace dos dias
                        </div>
                      </div> 
                    </div>

                    <div class="col-6 p-4">
                        <div class="card text-center">
                        <div class="card-header">
                          Usuario 2
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">SMART WATCHS</h5>
                          <p class="card-text">"El reloj está increíble, tiene muchas funciones útiles como medir los pasos y el ritmo cardíaco. Además, es muy fácil de usar. Perfecto para el gimnasio o el trabajo. ¡Muy contento con la compra!"</p>
                          <a href="#" class="btn btn-primary">Leer mas</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            Hace dos dias
                        </div>
                      </div> 
                    </div>

                    <div class="col-6 p-4">
                        <div class="card text-center">
                        <div class="card-header">
                          Usuario 3
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">CONTROL PS 5</h5>
                          <p class="card-text">"Todo perfecto con el control. Se siente súper cómodo y los gatillos adaptativos son una maravilla. Es original y funciona sin problema. Llegó antes de lo esperado. Muy recomendable."</p>
                          <a href="#" class="btn btn-primary">Leer mas</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            Hace dos dias
                        </div>
                      </div> 
                    </div>

                    <div class="col-6 p-4">
                        <div class="card text-center">
                        <div class="card-header">
                          Usuario 4
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">CONTROL XBOX </h5>
                          <p class="card-text">"Funciona de maravilla, se conecta rápido y tiene un agarre cómodo. Ideal para largas horas de juego. El color está padrísimo, y llegó en excelentes condiciones. ¡Un 10 de 10!"</p>
                          <a href="#" class="btn btn-primary">Leer mas</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            Hace dos dias
                        </div>
                      </div> 
                    </div>

                    <div class="col-6 p-4">
                        <div class="card text-center">
                        <div class="card-header">
                          Usuario 5
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">SPEAKER´S</h5>
                          <p class="card-text">"El sonido es súper claro y potente, no distorsiona ni al volumen más alto. Ideal para fiestas o para escuchar música en casa. Es justo lo que esperaba. ¡Excelente producto!"</p>
                          <a href="#" class="btn btn-primary">Leer mas</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            Hace dos dias
                        </div>
                      </div> 
                    </div>

                    <div class="col-6 p-4">
                        <div class="card text-center">
                        <div class="card-header">
                          Usuario 6
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">GAME CALL OF DUTY</h5>
                          <p class="card-text">"¡Juego original y súper entretenido! La calidad gráfica es impresionante, y llegó sellado. Si te gustan los shooters, este es el mejor. Lo recomiendo sin dudar."</p>
                          <a href="#" class="btn btn-primary">Leer mas</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            Hace dos dias
                        </div>
                      </div> 
                    </div>

                    <div class="col-6 p-4">
                        <div class="card text-center">
                        <div class="card-header">
                          Usuario 6
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">GAME WARZONE</h5>
                          <p class="card-text">"Todo excelente, el juego es súper adictivo y corre sin problemas en mi consola. Llegó rápido y con el empaque original. Perfecto para pasar horas de diversión con amigos."</p>
                          <a href="#" class="btn btn-primary">Leer mas</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            Hace dos dias
                        </div>
                      </div> 
                    </div>

                    <div class="col-6 p-4">
                        <div class="card text-center">
                        <div class="card-header">
                          Usuario 7
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">LAPTOP HP</h5>
                          <p class="card-text">"La laptop es increíble, súper rápida y perfecta para trabajar y estudiar. La pantalla tiene excelente calidad, y la batería dura bastante. Muy buena relación calidad-precio. ¡Encantado con la compra!"</p>
                          <a href="#" class="btn btn-primary">Leer mas</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            Hace dos dias
                        </div>
                      </div> 
                    </div>

                    <div class="col-12 p-4">
                        <div class="card text-center">
                        <div class="card-header">
                          Usuario 9
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">IPHONE 16 PRO MAX</h5>
                          <p class="card-text">"¡El mejor iPhone que he tenido! La cámara es brutal y la pantalla se ve espectacular. El Face ID es rapidísimo, y la batería dura muchísimo. Vale cada peso invertido. ¡10/10 recomendado!"</p>
                          <a href="#" class="btn btn-primary">Leer mas</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            Hace dos dias
                        </div>
                      </div> 
                    </div>
            
                </div>
              </div>
    
               
    
    
    
    
    
    
    
            </section>
        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../JS/SCRIP.JS"></script>
</body>
</html>