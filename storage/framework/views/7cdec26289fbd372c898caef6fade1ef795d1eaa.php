<?php /* C:\wamp64\www\laraginga\resources\views/home.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<!--text au centre de lecrant-->
<header class="home2">
    <div class="row">
        <div class="offset-md-3 col-md-6 text-center center2">
            <h1 class="display-4 text-white text-center">Mon Compte</h1>
            <p class="lead text-white text-center">
                <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
                <?php endif; ?>

                Réservez votre séance futsal !
            </p>
        </div>
    </div>

    </div>
</header>
<!--fin text au centre de lecrant-->

<!--carousel-->
<div class="row">
    <div class="col-4"></div>
    <div id="carouselExampleControls" class="carousel slide col-4" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/terrin.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/terrin2.JPG" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/terrin3.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/terrin4.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/terrin5.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/terrin6.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="col-4"></div>
</div>
<!--fincarousel-->


<!--boutton-->
<div class="row mt-5">
    <div class="col-5"></div>
    <button type="button" class="btn btn-info btn-lg col-2" data-toggle="modal"
        data-target="#myModal">Réservation</button>
    <div class="col-5"></div>
</div>

<!-- Modal -->
<div class="modal fade " id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Quand voulez vous réserver :</h4>
                <button id="bouton_inscription" type="button" class="close" data-dismiss="modal"> <span>&times;</span>
                </button>
            </div>

            <div class="row m-3">
                <div class="btn-group  col-4">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true">
                        Salles
                    </button>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="" onclick="choixsalle1()" id="salle1">Salle 1</a>
                        <a class="dropdown-item" href="" onclick="choixsalle2()" id="salle2">Salle 2</a>
                        <a class="dropdown-item" href="" onclick="choixsalle3()" id="salle3">Salle 3</a>
                        <a class="dropdown-item" href="" onclick="choixsalle4()" id="salle4">Salle 4</a>
                        <a class="dropdown-item" href="" onclick="choixsalle5()" id="salle5">Salle 5</a>
                        <a class="dropdown-item" href="" onclick="choixsalle6()" id="salle6">Salle 6</a>

                    </div>
                </div>
                
                <div class="btn-group  col-4">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true">
                        Dates
                    </button>
                    <div class="dropdown-menu">
                        <input class="text-center" type="date" name="date" id="date" placeholder="Ex. 01/01/2019" />
                        <button type="button" onclick="affichagedate()" class="btn btn-danger col-12 mt-1"
                            aria-haspopup="true" aria-expanded="true">
                            Valider
                        </button>
                    </div>
                    <script>
                        function affichagedate() {
                            var machin = document.getElementById("date").value;
                            alert("la date entrée est : " + machin);
                        }
                    </script>
                </div>
                <div class="btn-group  col-4">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Heures
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Heure de début</a>
                        <input class="text-center" type="heure" name="time" id="time" placeholder="Ex.: 08h30" />

                        <a class="dropdown-item" href="#">Durée</a>
                        <input class="text-center" type="text" name="duration" id="duration" placeholder="Ex.: 01h00" />

                        <button type="button" onclick="affichagetemps()" class="btn btn-danger col-12 mt-1"
                            aria-haspopup="true" aria-expanded="true">
                            Valider
                        </button>
                    </div>
                    <script>
                        function affichagetemps() {
                            var machin = document.getElementById("time").value;
                            var truc = document.getElementById("duration").value;
                            alert("l'heure entrée est: " + machin);
                            alert("et pour une durée de: " + truc);
                        }
                    </script>
                </div>
            </div>

        </div>
    </div>
</div>
<!--finbouton-->

<!--footer-->
<footer class="footer mt-5">
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


    <div class=" row bg-gra-03">
        <!--nav bar footer-->
        <div class="ml-5 mt-3 col-md-12">
            <ul class="nav ">
                <li class="nav-item">
                    <p class="text-white">Réalisée par:Bilal INCADOU, Eglantine PARSERAMIN, Stéphane FOK YIN, Georgine
                        HOARAU.</p>
                </li>
            </ul>
        </div>
        <!--fin nav bar menu-->


</footer>
<!--finfooter-->



<form action="Fichier php"> salle:<br> <input type="text" name="salle" id="formulaire_batard_salle" value=""><br>
    date:<br>
    <input type="date" name="date" id="formulaire_batard_date" value=""> Heure de début:<br>
    <input type="time" name="duration" id="formulaire_batard_heure_debut" value=""> Durée:<br>
    <input type="time" name="date" id="formulaire_batard_duree" value=""> <br><br>
    <input type="submit" value="Submit">
</form>


<script>


function choixsalle1() {

var salle1 = document.getElementById("salle1").innerHTML;
console.log(salle1);
document.getElementById("formulaire_batard_salle").value=salle1;

}
function choixsalle2() {

var salle1 = document.getElementById("salle2").innerHTML;
console.log(salle1);
document.getElementById("formulaire_batard_salle").value=salle2;

}
function choixsalle3() {

var salle1 = document.getElementById("salle3").innerHTML;
console.log(salle1);
document.getElementById("formulaire_batard_salle").value=salle3;

}
function choixsalle4() {

var salle1 = document.getElementById("salle4").innerHTML;
console.log(salle1);
document.getElementById("formulaire_batard_salle").value=salle4;

}
function choixsalle5() {

var salle1 = document.getElementById("salle5").innerHTML;
console.log(salle1);
document.getElementById("formulaire_batard_salle").value=salle5;

}
function choixsalle6() {

var salle1 = document.getElementById("salle6").innerHTML;
console.log(salle1);
document.getElementById("formulaire_batard_salle").value=salle6;

}
    
/* var salle2 = document.getElementById("salle2").innerHTML;
        console.log(salle2);
        document.getElementById("formulaire_batard_salle").value=salle2;
        
        var salle3 = document.getElementById("salle3").innerHTML;
        console.log(salle3);
        document.getElementById("formulaire_batard_salle").value=salle3;
        
        var salle4 = document.getElementById("salle4").innerHTML;
        console.log(salle4);
        document.getElementById("formulaire_batard_salle").value=salle4;
        
        var salle5 = document.getElementById("salle5").innerHTML;
        console.log(salle5);
        document.getElementById("formulaire_batard_salle").value=salle5;
        
        var salle6 = document.getElementById("salle6").innerHTML;
        console.log(salle6);
        document.getElementById("formulaire_batard_salle").value=salle6;*/

</script>
</body >
</html >
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>