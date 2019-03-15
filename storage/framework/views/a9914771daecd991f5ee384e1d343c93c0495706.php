<?php /* C:\wamp64\www\laraginga\resources\views/layout.blade.php */ ?>
<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraGinga</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">




    <!--formulaire inscription-->
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/main.css" rel="stylesheet" media="all">


    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>
    <script src="../js/toto.js"></script>
    <!-- Main JS-->
    <script src="../js/global.js"></script>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</head>

<body>



    <?php echo $__env->yieldContent('contenu'); ?>




    <!--footer-->
    <footer class="footer">
        <div class="row">
            <div class="offset-md-3 col-md-6 text-center">
                <h1 class="display-4 text-white text-center">Nous contacter</h1>
                <p class="lead text-white text-center">

                    LaraGinga
                    <br />
                    14 Rue de la
                    Guadeloupe ZAC FOUCHEROLLES 97495 SAINTE-CLOTILDE
                    <br />
                    Tel: (+262) XX XX XX
                    <br />
                    LaraGinga
                    contact@LaraGinga.com
                </p>
            </div>

        </div>

        </div>
        <div class=" row bg-gra-03">
            <!--nav bar footer-->
            <div class="ml-5 mt-3 col-md-12">
                <ul class="nav ">
                    <li class="nav-item">
                        <p class="text-white">Réalisée par:Bilal INCADOU, Eglantine PARSERAMIN, Stéphane FOK YIN,
                            Georgine HOARAU.</p>
                    </li>
                </ul>
            </div>
            <!--fin nav bar menu-->

        </div>
    </footer>
</body>

</html>