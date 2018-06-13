<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projets</title>
        <link rel="icon" type="image/png" href="../Portfolio/images/favicon-256.png">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/fontAwesome/css/fontawesome-all.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section id="sectionMenu">
            <nav>
                <ul>
                    <li class='navHome'>
                        <a href="index.php">
                            <i class="fas fa-home fa-2x txtblanc"></i>
                        </a>
                    </li>
                    <li>
                        <a class="txtblanc"href="MonParcours.php">PARCOURS</a>
                    </li>
                    <li>
                        <a class="txtblanc"href="presentationCESI.php">CESI</a>
                    </li>
                    <li>
                        <a class="navactive"href="Projets.php">PROJETS</a>
                    </li>
                    <li>
                        <a class="txtblanc"href="Contact.php">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </section>
        <section class="container txtcentre divtop">
            <div class="col-lg-12">
                <h2 class="Saira txtnoir medium gras">PROJETS</h2>
                <br>
                <p>Dans le cadre de ma formation au CESI j'ai réalisé plusieurs projets, et vous invite à les découvrir :</p>
            </div>
            <hr>
            <br>
            <!--On place une row directement dans une autre div container ou col pour annuler son padding natuel via bootstrap qui décale tout...-->
            <div class="col-lg-12"> 
                <div class="row">
                    <div class="col-md-6 col-lg-4 div-image-projets">
                        <a class="imgContainer" href="pdf/Projet SAS - Michael OBERMANN GMSI 2016.pdf" target="_blank"> <!--balise <a> pour href-->
                            <i class="fas fa-balance-scale fa-border fa-8x imgProjets"></i>
                            <div class='effet3DHover'>
                                <div class="textHover">
                                    <h3>Projet SAS</h3>
                                    <br>
                                    Projet en autonomie sur la legislation informatique en entreprise
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 div-image-projets">
                        <a class="imgContainer" href="pdf/Projet Start.pdf" target="_blank">
                            <i class="fas fa-desktop fa-border fa-8x imgProjets"></i>
                            <div class='effet3DHover'>
                                <div class="textHover">
                                    <h3>Projet START</h3>
                                    <br>
                                    Mise en place d'un réseau physique et d'un parc informatique, sans serveurs
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 div-image-projets">
                        <a class="imgContainer" href="pdf/Projet EVOLUTION GMSI 16 - BALDY Jean Marc & OBERMANN Michael.pdf" target="_blank">
                            <i class="fas fa-server fa-border fa-8x imgProjets"></i>
                            <div class='effet3DHover'>
                                <div class="textHover">
                                    <h3>Projet EVOLUTION</h3>
                                    <br>
                                    Mise en place d'une infrastructure et maquettage
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 div-image-projets">
                        <a class="imgContainer" href="pdf/Cas H partie 1 - Michael OBERMANN GMSI 16.pdf" target="_blank">
                            <i class="fas fa-project-diagram fa-border fa-8x imgProjets"></i>
                            <div class='effet3DHover'>
                                <div class="textHover">
                                    <h3>Projet CAS H - partie 1</h3>
                                    <br>
                                    Redaction d'un cahier des charges
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 div-image-projets">
                        <a class="imgContainer" href="pdf/Cas H partie 2 - GMSI 16 - OBERMANN, GARRIDO, BREUIL.pdf" target="_blank">
                            <i class="fas fa-tasks fa-border fa-8x imgProjets"></i>
                            <div class='effet3DHover'>
                                <div class="textHover">
                                    <h3>Projet CAS H - partie 2</h3>
                                    <br>
                                    Réponse à un cahier des charges
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 div-image-projets">
                        <a class="imgContainer" href="https://github.com/MichaelObermann/portfolio" target="_blank">
                            <i class="fas fa-code fa-border fa-8x imgProjets"></i>
                            <div class='effet3DHover'>
                                <div class="textHover">
                                    <h3>Projet PORTFOLIO</h3>
                                    <br>
                                    <p>Code du site portfolio</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>