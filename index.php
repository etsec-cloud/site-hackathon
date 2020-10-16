<?php require_once 'inc/traitementForCo.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Plantsters | Plant to win</title>
    <link href="style.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="./assets/font-awesome/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link href="assets/fonts/Gilroy-ExtraBold.otf" rel="stylesheet" />
    <link href="assets/fonts/Gilroy-Light.otf" rel="stylesheet" />
  </head>
  <body>
    <!-- NAVBAR -->
    <nav
      class="navbar navbar-expand-lg navbar-light sticky-top bgColorGreen"
      id="navbar"
    >
      <a class="navbar-brand" href="#">
        <img src="assets/imgs/plantsters.png" height="20" alt="" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ml-auto">
          <li>
            <a class="nav-item nav-link active" href="#section2">Notre Jeu</a>
          </li>
          <li>
            <a class="nav-item nav-link active" href="#section4"
              >Nos Packs Starter</a
            >
          </li>
          <li>
            <a class="nav-item nav-link active" href="#section5"
              >Notre Equipes
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- FIN NAVBAR -->

    <!-- 1 ECRAN -->
    <div class="flexContainerRow padding30 bgGreen" id="section1">
      <form action="" method="post" class="form">
        <div class="colForm">
          <label for="email">Entrez votre mail pour avoir des infos: </label>
          <input type="email" name="email" id="email" required />
          <button type="submit" class="btn">Envoyer</button>
          <?php
						echo "<div class='error'>$error</div>";
						echo "<div class='reussir'>$reussir</div>"
						?>
        </div>
      </form>
      <div>
        <h1 class="title">Plantsters</h1>
        <p class="text">
          Plant to win<br />Un jeu mobile connecté au monde réel
        </p>
      </div>

      <img class="image" src="./assets/imgs/plante.jpg" />
    </div>
    <!-- Fin 1 ECRAN -->
    <!-- 2 ECRAN -->
    <div class="flexContainerRow" id="section2">
      <img class="image" src="assets/imgs/app.jpg" />
      <div class="textEcran2">
        <h1 class="title">Notre jeu</h1>
        <p class="text">
          Climats, natures, espèces... Notre monde se transformait en un
          <span class="colorGreen">désert brulant</span> où les déchets, la
          surexploitation et les catastrophes naturelles se multipliaient pour
          faire reigner leur ordre.<br />
          Une ère de chaos s'annonçait sans que personne ne pouvait rien y
          faire... Jusqu'au jour où des créatures se mirent à apparaitre dans
          les 4 coins du mondes afin d'aider les Hommes à remédier à leurs
          différents problèmes.
        </p>
      </div>
    </div>
    <div class="flexContainerRow" id="section2">
      <div class="textEcran2">
        <p class="text">
          Ces créatures grandissaient au fur et à mesure que les humains
          s'occupaient de leur environnement ce qui leur value le nom de
          PLANTSTER !
        </p>
      </div>
      <img class="image" src="assets/imgs/citrouille.jpg" />
    </div>
    <!-- Fin 2 ECRAN -->
    <!-- 3 ECRAN -->
    <div class="flexContainerCol" id="section3">
      <img class="image2" src="assets/imgs/banniere.png" />
      <p class="text">
        La science prouva que plus ses créatures étaient fortes, plus elles
        ralentissaient la propagation de problèmes environnementaux. Les
        Plantsters firent donc un deal avec les Hommes, en échange de leurs
        actions pour l'environnement ils deviendraient plus fort et aideraient
        les humains à résoudre leurs problèmes ! Tous ceux qui acceptèrent ce
        deal se firent appelés les HERBORISTS et aujourd'hui ils œuvrent pour
        changer le destin de leur planète par des actions plus responsables.
      </p>
    </div>
    <!-- Fin 3 ECRAN -->

    <!-- 4 ECRAN -->
    <div class="flexContainerRow" id="section4">
      <img class="image" src="assets/imgs/sachet.jpg" />
      <div class="textEcran2">
        <h1 class="title">Pack starter</h1>
        <p class="text">
          La science prouva que plus ses créatures étaient fortes, plus elles
          ralentissaient la propagation de problèmes environnementaux. Les
          Plantsters firent donc un deal avec les Hommes, en échange de leurs
          actions pour l'environnement ils deviendraient plus fort et aideraient
          les humains à résoudre leurs problèmes ! Tous ceux qui acceptèrent ce
          deal se firent appelés les HERBORISTS et aujourd'hui ils œuvrent pour
          changer le destin de leur planète par des actions plus responsables.
        </p>
      </div>
    </div>
    <!-- Fin 4 ECRAN -->

    <!-- 5 ECRAN -->
    <div class="flexContainerRow flex-column " id="section1">
      <div class="flexContainerCol">
        <h1 class="title">Notre Equipes</h1>

        <div class="flexContainerRow tofooter">
          <div class="row pl-5 w-75">
            <div class="col">
              <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-ride="carousel"
              >
                <div class="carousel-inner ">
                  <div class="carousel-item active">
                    <img
                      class="d-block w-100"
                      src="assets/imgs/aurelien.png"
                      alt="First slide"
                    />
                  </div>

                  <div class="carousel-item">
                    <img
                      class="d-block w-100"
                      src="assets/imgs/ambre.png"
                      alt="Second slide"
                    />
                  </div>

                  <div class="carousel-item">
                    <img
                      class="d-block w-100"
                      src="assets/imgs/Etienne.jpeg"
                      alt="Third slide"
                    />
                  </div>

                  <div class="carousel-item">
                    <img
                      class="d-block w-100"
                      src="assets/imgs/ryad.jpg"
                      alt="Fourth slide"
                    />
                  </div>

                  <div class="carousel-item">
                    <img
                      class="d-block w-100"
                      src="assets/imgs/Domitille.jpg"
                      alt="Fifth slide"
                    />
                  </div>

                  <div class="carousel-item">
                    <img
                      class="d-block w-100"
                      src="assets/imgs/julien.png"
                      alt="Sixth slide"
                    />
                  </div>
                </div>

                <a
                  class="carousel-control-prev"
                  href="#carouselExampleIndicators"
                  role="button"
                  data-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a
                  class="carousel-control-next"
                  href="#carouselExampleIndicators"
                  role="button"
                  data-slide="next"
                >
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col">
              <div class="description-ekip">
                <h1>Marvin Mensah</h1>
                <h2>Poste</h2>
                <p class="mb-5">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit
                  praesentium in aperiam. Sint temporibus est incidunt
                  distinctio, labore totam voluptates ex consequatur nesciunt
                  pariatur. Laudantium magnam praesentium quos vitae repre
                  henderit.
                </p>

                <div class="profil-container" id="profilContainer">
                  <img class="active" src="assets/imgs/aurelien.png" />
                  <img src="assets/imgs/ambre.png" />
                  <img src="assets/imgs/Etienne.jpeg" />
                  <img src="assets/imgs/ryad.jpg" />
                  <img src="assets/imgs/Domitille.jpg" />
                  <img src="assets/imgs/julien.png" />
                  <img src="assets/imgs/paul.jpeg" />
                  <img src="assets/imgs/alexandre.jpg" />
                  <img src="assets/imgs/marvin.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Fin 5 ECRAN -->
    <!-- Footer -->
    <div class="flexRow">
      <div class="d-flex">
        <div class="gauche">
          <a href="#"
            ><img src="assets/imgs/logo.png" width="40" height="40" alt=""
          /></a>
          <a href="#">
            <p>Politique de confidentialité</p>
          </a>
          <a href="#">
            <p>Mentions légales</p>
          </a>
        </div>
        <div class="droit">
          <a class="item">
            <p>Support</p>
          </a>
          <a class="item">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a class="item">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </body>

  <script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"
  ></script>

  <script src="script.js"></script>
</html>
