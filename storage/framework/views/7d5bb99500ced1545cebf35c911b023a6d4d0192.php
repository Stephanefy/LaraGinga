<?php /* /home/simplon/Bureau/laraginga/resources/views/welcome.blade.php */ ?>
<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laraginga</title>
    <!--
        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles 
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

-->


    

    <?php $__env->startSection('contenu'); ?>

    <!--navebare-->
    <div class=" row bg-gra-03">


        <!--logo et Nom du site -->
        <div class="col-md-1 ml-5">
            <img src="../images/logo.png" width="45" height="45" alt="">
        </div>
        <div class="col-md-4 ">
            <h2 class="text-white">LaraGinga</h2>
        </div>
        <!--fin logo et Nom du site -->

        <!--nav bar menu-->
        <div class="col-md-6">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/login">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/register">Inscription</a>
                </li>
            </ul>
        </div>
        <!--fin nav bar menu-->

    </div>
    <!--fin navebare-->

    <!--text au centre de lecrant-->
    <header class="home">
        <div class="row">
            <div class="offset-md-3 col-md-6 text-center center">
                <h1 class="display-4 text-white text-center">A PROPOS DE NOUS</h1>
                <p class="lead text-white text-center">
                    Nous sommes une entreprise de foot en salle qui louons des salles aux particuliers pour une durée
                    déterminée.
                    Le paiement se fait à la fin de la session de jeu.
                    C’est la raison pour laquelle nous souhaitons booster cette activité grâce à une application web
                    faciliter la gestion des réservations.
                </p>
            </div>
        </div>

        </div>
    </header>
    <!--fin text au centre de lecrant-->

    <!--titre-->
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h1 class="display-9  text-center ">Nos Salles</h1>
        </div>
    </div>
    <!--fin titre-->

    <!--carte salle-->
    <!--ligne1-->
    <div class="row mt-5 ">
        <div class="card-body offset-1 mr-5 col-3 ">
            <div class="">
                <img src="../images/terrin.jpg" class="card-img-top" alt="Salle1">
                <h5 class="card-title text-center mt-5">Salle1</h5>
            </div>
        </div>
        <div class="card-body mr-5 col-3 ">
            <div class="">
                <img src="../images/terrin2.JPG" class="card-img-top" alt="Salle2">
                <h5 class="card-title text-center mt-5">Salle2</h5>
            </div>
        </div>
        <div class="card-body mr-5 col-3 ">
            <div class="">
                <img src="../images/terrin3.jpeg" class="card-img-top" alt="Salle3">
                <h5 class="card-title text-center mt-5">Salle3</h5>
            </div>
        </div>
    </div>
    <!--fin ligne1-->

    <!--ligne2-->
    <div class="row mt-5 ">
        <div class="card-body offset-1 mr-5 col-3 ">
            <div class="">
                <img src="../images/terrin4.jpeg" class="card-img-top" alt="Salle4">
                <h5 class="card-title text-center mt-5">Salle4</h5>
            </div>
        </div>
        <div class="card-body mr-5 col-3 ">
            <div class="">
                <img src="../images/terrin5.jpeg" class="card-img-top" alt="Salle5">
                <h5 class="card-title text-center mt-5">Salle5</h5>
            </div>
        </div>
        <div class="card-body mr-5 col-3 ">
            <div class="">
                <img src="../images/terrin6.jpeg" class="card-img-top" alt="Salle6">
                <h5 class="card-title text-center mt-5">Salle6</h5>
            </div>
        </div>
    </div>
    <!--fin ligne2-->

    <!--fin carte salle-->

    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>