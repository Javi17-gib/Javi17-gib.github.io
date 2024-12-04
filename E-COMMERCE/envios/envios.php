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


            <!--title section-->

            <!--title section-->

            <!--data-->
            <div class="row px-4">
                <div class="row">
                    <div class="row justify-content-center">
                        <h2>Envios Realizados</h2>
                        <img style="width: 1000px; height: 460px;" src="../img/envios.png" alt="">
                    </div>
                    <div class="col-6 mt-4">
                        <div class="card" style="height: 400px;">
                            <div class="card-header">
                                MEXICO
                            </div>

                            <div class="card-body" style="width: 380px">
                                <canvas id="CHARTCATEGORIA1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="card" style="height: 400px;">
                            <div class="card-header">
                                ESTADOS UNIDOS
                            </div>

                            <div class="card-body" style="width: 380px">
                                <canvas id="CHARTCATEGORIA2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="card" style="height: 400px;">
                            <div class="card-header">
                                CANADA
                            </div>

                            <div class="card-body" style="width: 380px">
                                <canvas id="CHARTCATEGORIA3"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="card" style="height: 400px;">
                            <div class="card-header">
                                DESTO DEL MUNDO
                            </div>

                            <div class="card-body" style="width: 380px">
                                <canvas id="CHARTCATEGORIA4"></canvas>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>










        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../JS/envios.js"></script>
</body>

</html>