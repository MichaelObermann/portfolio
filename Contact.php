<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact</title>
        <link rel="icon" type="image/png" href="../Portfolio/images/favicon-256.png">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/fontAwesome/css/fontawesome-all.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src='https://www.google.com/recaptcha/api.js'></script> <!-- CAPCHA -->
    </head>
    <body>
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
                        <a class="txtblanc"href="Projets.php">PROJETS</a>
                    </li>
                    <li>
                        <a class="navactive"href="Contact.php">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </section>
        <section class="container txtcentre divtop">
            <div class="col-lg-12">
                <h2 class="Saira txtnoir medium gras">CONTACTEZ-MOI</h2>
                <br>
                <p>Mon profil vous interesse ? Vous pouvez prendre contact avec moi via le formulaire ci-dessous, ou directement par mail.</p>
            </div>
            <hr>
            <br>
            <form class="needs-validation" action="formValidation.php" method='POST' novalidate>
                <div class="col-lg-12 justify">
                    <div class="form-row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nom" placeholder="Nom & Prénom *" pattern='^([A-zÀ-ž\s]){2,}' required>
                                <div class="invalid-feedback">
                                    Merci de renseigner votre nom.
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name='mail' placeholder="E-mail *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                <div class="invalid-feedback">
                                    Merci de renseigner une adresse mail valide.
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="telephone"placeholder="Téléphone *" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" required>
                                <div class="invalid-feedback">
                                    Merci de renseigner un numéro de téléphone.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group tailleBox">
                                <textarea class="form-control tailleBox" name="message" placeholder="Votre message *" required></textarea>
                                <div class="invalid-feedback">
                                    Merci de renseigner ce champ.
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="txtcentre">
                        <div class="g-recaptcha" data-sitekey="6LeekloUAAAAAG61VQqCCHzVthhdYSJq-GFikAEo"></div>
                    </div>
                    <br>
                    <div class="btn-toolbar centre">
                        <button class="btn btn-primary boutonEnvoyer" type="submit">Envoyer</button>
                    </div>
                </div>
            </form>
            <br>
            <hr>
            <br>
            <div class = "col-lg-12">
                <div class = "row centre">
                    <div class = "col-lg-4">
                        <i class = "fas fa-at fa-2x txtrose"></i>
                        <p>contact@michaelobermann.fr
                        </p>
                    </div>
                    <div class = "col-lg-4">
                        <i class = "fas fa-home fa-2x txtrose"></i>
                        <p>64 - Pyrénées Atlantiques
                    </div>
                </div>
            </div>
        </section>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict';
                window.addEventListener('load', function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>
