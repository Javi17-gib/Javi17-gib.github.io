<header class="pt-4">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a href="" class="navbar-brand">Mi Dashboard</a>

                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="navbar-item mx-4">
                                <button type="button" class="btn btn-ligth position-relative">
                                    <i class="bi bi-bell-fill"></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </button>
                            </li>
                            <li class="navbar-item dropdown mx-1">
                                <img style="width: 40px; height: 40px; border-radius: 50%;" src="../img/descarga.jpg"
                                    alt="">

                            </li>
                            <li class="navbar-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" id="userDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"> 
                                    <?php  echo $user_data['NOMBRE'];  ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <li>
                                        <a href="" class="dropdown-item"> <i
                                                class="bi bi-person-fill"></i>&nbsp;&nbsp;&nbsp;Perfil</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a href="../LOGIN/login.php" class="dropdown-item"> <i
                                                class="bi bi-box-arrow-in-left"></i>&nbsp;&nbsp;&nbsp;Cerrar Sesion</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>