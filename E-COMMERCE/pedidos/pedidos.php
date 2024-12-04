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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
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
                        <h2>Pedidos</h2>
                    </div>
                    <br>
                    <br>
                    <div class="col-6 p-4">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Usuario 1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Productos</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Phones</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>SPEAKER´S</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>LAPTOS</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Usuario 2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Productos</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>SPEAKER´S</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>GAMES</td>
                                                    <td>8</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>LAPTOS</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>SMART WATCHS</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Usuario 3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Productos</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Phones</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>SPEAKER´S</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>GAMES</td>
                                                    <td>4</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>SMART WATCHS</td>
                                                    <td>8</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 p-4">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        Usuario 4
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Productos</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>SPEAKER´S</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>GAMES</td>
                                                    <td>12</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>LAPTOS</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Usuario 5
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Productos</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Phones</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>SPEAKER´S</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>GAMES</td>
                                                    <td>12</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>LAPTOS</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>SMART WATCHS</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Usuario 6
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Productos</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Phones</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>SPEAKER´S</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>GAMES</td>
                                                    <td>22</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 p-4">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="true"
                                        aria-controls="collapseSeven">
                                        Usuario 7
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Productos</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Phones</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>


                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>SMART WATCHS</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseocho" aria-expanded="false"
                                        aria-controls="collapseocho">
                                        Usuario 8
                                    </button>
                                </h2>
                                <div id="collapseocho" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Productos</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Phones</td>
                                                    <td>6</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>GAMES</td>
                                                    <td>38</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>SMART WATCHS</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsenueve" aria-expanded="false"
                                        aria-controls="collapsenueve">
                                        Usuario 9
                                    </button>
                                </h2>
                                <div id="collapsenueve" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Productos</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Phones</td>
                                                    <td>12</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>SPEAKER´S</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>GAMES</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>LAPTOS</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>SMART WATCHS</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 p-4">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                        Usuario 10
                                    </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Productos</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Phones</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>SPEAKER´S</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>LAPTOS</td>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEleven" aria-expanded="false"
                                        aria-controls="collapseEleven">
                                        Usuario 11
                                    </button>
                                </h2>
                                <div id="collapseEleven" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Productos</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Phones</td>
                                                    <td>8</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>SPEAKER´S</td>
                                                    <td>3</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>



                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseDoce" aria-expanded="false"
                                        aria-controls="collapseDoce">
                                        Usuario 12
                                    </button>
                                </h2>
                                <div id="collapseDoce" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Productos</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Phones</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>SPEAKER´S</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>GAMES</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>LAPTOS</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>SMART WATCHS</td>
                                                    <td>2</td>
                                                    <td>
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                    </div>
                    <div class="col-6 p-4">
                       
                    </div>

                </div>
            </div>









        </section>
    </main>
</body>

</html>