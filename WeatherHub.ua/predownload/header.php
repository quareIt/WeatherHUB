<?php
session_start();
?>


<header class="p-3 text-dark bg-light">
    <div class="container ">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end">

            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <?php
            if (isset($_SESSION['userToken'])) {
                echo '
                            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">';
                if ($_SESSION['userToken']['roleId'] == 1) {
                    echo  '<li><a href="/Controller/area/admin/AdminController.php" class="nav-link px-2 text-secondary">Адмін</a></li>';
                }
                echo '
                                <li><a href="/Controller/Home/WeatherController.php" class="nav-link px-2 text-secondary">Погода</a></li>
                                <li><a href="/Controller/Home/ProfileController.php" class="nav-link px-2 text-dark">Профіль</a></li>
                                <li><a href="/Controller/Home/SearchController.php" class="nav-link px-2 text-dark">Пошук</a></li>
                                <li><a href="/Controller/Home/FriendsController.php" class="nav-link px-2 text-dark">Друзі</a></li>
                                <li><a href="/Controller/Home/FavoriteController.php" class="nav-link px-2 text-dark">Одяг</a></li>
                            </ul>
                            <form method="get" action="/Controller/Home/WeatherController.php" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                                <input type="search" class="form-control form-control-dark text-bg-dark" name="cityName" placeholder="Введіть місто..." aria-label="Search">
                            </form>
                            <div class="text-end">
                                <form method="get" action="/controller/auth/LogoutController.php">
                                    <button type="submit" class="btn btn-dark">Вийти</button>
                                </form>
                            </div>
                            ';
            } else {
                echo '
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/Controller/Home/WeatherController.php" class="nav-link px-2 text-secondary">Погода</a></li>
                </ul>
                <div class="text-end">
                <div class="d-flex align-items-center ">
                    <form method="get" action="/Controller/Home/WeatherController.php" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control form-control-dark text-bg-dark" name="cityName" placeholder="Введіть місто..." aria-label="Search">
                    </form>
                    <form method="get" action="/View/auth/Login.php" class="d-inline mx-2">
                        <button type="submit" class="btn btn-outline-dark ">Вхід</button>
                    </form>
                    
                    <form method="get" action="/View/auth/Registration.php" class="d-inline mx-2">
                        <button type="submit" class="btn btn-dark ">Реєстрація</button>
                    </form>
                    </div>
            </div>
                ';
            }
            ?>
        </div>
    </div>
</header>
<hr class="md-5">