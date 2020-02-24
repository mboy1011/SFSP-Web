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
<header></header>
<main>
    <div class="container">
        <form action="/add_student" method="POST" enctype="multipart/form-data">
        <a href="/" class="rigth waves-effect waves-green btn-flat">Back<i class="material-icons left green-text">arrow_back</i></a>
            <div class="row">
                <img class="responsive-img" src="./assets/img/logo.jpg" width="110px" height="110px">
                <p class="flow-text">School Faculty & Staff Portal</p>
                <div class="input-field col s12 l6">
                    <input type="text" id="uname" class="validate" name="uname" required>
                    <label for="uname">Username</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l6">
                    <input type="password" id="passwd" class="validate" name="passwd" required>
                    <label for="passwd">Password</label>
                </div>
            </div>
            <div><button type="submit" class="btn large green" name="submit">Login <i class="material-icons right">send</i></button></div>
            <div class="row"></div>
        </form>
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