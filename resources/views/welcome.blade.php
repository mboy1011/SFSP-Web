<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/icon/favicon-32x32.png">
    <title>SFSP</title>
    <!-- MCSS Offline -->
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper green">
            <a href="#" class="brand-logo center"><img src="./assets/img/LOGO.png" alt="" srcset="" height="63px" width="63px"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/login">Login <i class="material-icons medium left">power_settings_new</i></a></li>
            </ul>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="/login">Login <i class="material-icons medium left">power_settings_new</i></a></li>
        </ul>
    </nav>
</header>
<main>
    <div class="container">
        
    </div>
</main>
<footer class="page-footer green">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
            <h5 class="white-text">Gingoog City Colleges</h5>
            <p class="grey-text text-lighten-4">Barangay 24 - A, Purok 5, Gingoog City, 9014.</p>
            </div>
            <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Social Media</h5>
            <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
            </ul>
            </div>
        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        © 2020 United Faculty
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
        </div>
</footer>
    <!-- MCSS Offline -->
    <script src="./assets/js/materialize-css.min.js"></script>
    <script src="./assets/js/axios.min.js"></script>
    <script type="text/javascript" charset="utf-8">
        M.AutoInit();
    </script>
</body>
</html>