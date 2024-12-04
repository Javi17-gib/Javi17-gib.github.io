<?php session_start();
if (!isset ($_SESSION['user_data'])){
    header('Location: ../LOGIN/login.php');
}
$user_data = $_SESSION ['user_data'];
?>
<!DOCTYPE html>
<html lang="en">

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
        <?php include "../layouds/aside.php"?>
    <!--End sidebar-->

    <!--Main Content-->
    <main class="flex-grow-1">
    <?php include "../layouds/header.php" ?>

        <section class="comtainer mt-4 p-4">
            <h4>Bienvenido de nuevo</h4>
            <!--STAT-->
            <div class="row">
                <div class="col-3">
                    <div class="card" style="height: 100px;">
                        <div class="card-body">
                            <label for="">
                                <i class="bi bi-cash-coin" style="color: rgb(0, 0, 0);"></i>
                                TOTAL DE INGRESOS MENSUALES
                            </label>
                            <H5 class="h4 text-center">$456,000.00</H5>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="height: 100px;">
                        <div class="card-body">
                            <label for="">
                                <i class="bi bi-person-circle" style="color: rgb(0, 0, 0);"></i>
                                USUARIOS ACTIVOS
                            </label>
                            <H5 class="h4 text-center">18,498</H5>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="height: 100px;">
                        <div class="card-body">
                            <label for="">
                                <i class="bi bi-cash-coin" style="color: rgb(0, 0, 0);"></i>
                                USUARIOS POR PAGAR (CREDITO)
                            </label>
                            <H5 class="h4 text-center">456</H5>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="height: 100px;">
                        <div class="card-body">
                            <label for="">
                                <i class="bi bi-bag-check-fill" style="color: rgb(0, 0, 0);"></i>
                                TOTAL VENTAS MENSUALES
                            </label>
                            <H5 class="h4 text-center">$250,000.00</H5>
                        </div>
                    </div>
                </div>
            </div>
            <!--STAT-->

            <!--CHARTS-->
            <div class="row mt-4">
                <div class="col-6">
                    <div class="card" style="height: 300px;">
                        <div class="card-header">
                            INGRESOS POR MES
                        </div>

                        <div class="card-body">
                            <canvas id="CHARTINGRESOS"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card" style="height: 300px;">
                        <div class="card-header">
                            POR CATEGORIA
                        </div>

                        <div class="card-body" style="width: 280px">
                            <canvas id="CHARTCATEGORIAS"></canvas>
                        </div>
                    </div>
                </div>
                
            </div>

            <!--CHARTS-->





        </section>

    </main>
    <!--Main Content-->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../JS/SCRIP.JS"></script>
</body>

</html>