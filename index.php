<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mister'tif, votre coiffeur pour homme avec plus de 30 ans d'experience!">
    <!--Métadescrition-->
    <meta property="og:title" content="Coiffeur Mister'Tif" />
    <!--opengraph-->
    <meta property="og:type" content="Le savoir-faire d'un coiffeur pour hommes" />
    <!--opengraph-->
    <meta property="og:url" content="https://mister-tif.netlify.app/" />
    <!--opengraph-->
    <meta property="og:image" content="https://mister-tif.netlify.app/src/opengraphimg.png" />
    <!--opengraph-->
    <link rel="canonical" href="https://mister-tif.netlify.app/" />
    <!--balise canonical-->
    <link rel="icon" type="image/png" href="src/favicon.png" />
    <!--flavicon-->
    <title>Mister'Tif</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Barlow+Semi+Condensed&display=swap"
        rel="stylesheet">

    <!-- <script src="slider.min.js"></script>-->
</head>

<body>
    <div class="navbar">
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active"><img src="src/logonavbar.png" alt="logo du coiffeur"></a>
            <a href="#about">A propos</a>
            <a href="#services">Services</a>
            <a href="#gallery">Gallerie</a>
            <a href="#contact">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>

        </div>

        <div class="address">
            <a href="https://www.google.com/maps/place/Mister'tif/@46.5983749,-1.4530011,15z/data=!4m5!3m4!1s0x0:0x945ad014a11e713d!8m2!3d46.5983749!4d-1.4530011"
                rel="noopener" target="_blank">
                <p>Mister'tif <br>35 rue Grand Rue<br> 85430 Aubigny Les Clouzeaux</p>
            </a>


        </div>

    </div>



    <div class="slide" id="home">
        <header id=header>

            <div class="sub-header">
                <h1>COIFFEUR BARBIER <br> <a href="tel:0251406325" title="lien pour téléphoner">Prendre
                        rendez-vous</a>
                </h1>
                <div class="godown">
                    <a href="#about" title="flèche pour descendre"></a>
                </div>
            </div>
        </header>


        <section id="about">

            <div class="subsection">

                <img src="src/about.png" alt=" des instruments de coiffure">


                <div class="description">

                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis impedit voluptas
                        voluptatibus
                        optio? Deleniti odit harum velit ullam voluptatem, cupiditate exercitationem accusamus sit
                        voluptas
                        est error et rem aperiam commodi mollitia, molestiae accusantium consequatur excepturi molestias
                        adipisci numquam ducimus! Fuga nemo dolor in maxime velit alias repellat tempore qui earum, eius
                        voluptate et ducimus temporibus repellendus porro sequi illum tenetur quidem pariatur. Impedit
                        ut
                        dolore v . </p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate, iste nisi, nulla officiis,
                        corrupti ad assumenda harum veniam atque vel inventore ipsa possimus. Autem incidunt, distinctio
                        enim nam nemo ratione omniso</p>

                </div>
                <div class="h2">
                    <h2>Mon Histoire</h2>
                </div>


            </div>

        </section>







        <section id="services">

            <h2>SERVICES</h2>
            <div class="prices-list">
                <div class="price">
                    <p>Coupe Signature</p>
                    <p>25€</p>
                </div>

                <div class="price">
                    <p>Coupe Simple</p>
                    <p>20€</p>
                </div>

                <div class="price">
                    <p>Rasage Barbe</p>
                    <p>15€</p>
                </div>
                <div class="price">
                    <p>Entretien Barbe</p>
                    <p>15€</p>
                </div>
                <div class="price">
                    <p>Coupe et rasage</p>
                    <p>30€</p>
                </div>
                <div class="price">
                    <p>Massage cuire chevelu</p>
                    <p>20€</p>
                </div>
                <div class="price">
                    <p>Entretien sourcilles</p>
                    <p>10€</p>
                </div>

            </div>

            <a href="tel:0251406325" title="lien pour téléphoner">Prendre
                rendez-vous</a>
        </section>


        <section id="gallery">

            <h2>PHOTOS</h2>

            <div class="gallery-container">
                <div class="gallery-item" data-index="1">
                    <img src="src/lightbox1big.png" alt="un homme se faisant raser">
                </div>
                <div class="gallery-item" data-index="2">
                    <img src="src/lightbox2big.png" alt="des outils de coiffure">
                </div>
                <div class="gallery-item" data-index="3">
                    <img src="src/lightbox3big.png" alt="un hommme se faisant cou^per les cheveux">
                </div>
                <div class="gallery-item" data-index="4">
                    <img src="src/lightbox4big.png" alt="un blaireau de rasage ">
                </div>
                <div class="gallery-item" data-index="5">
                    <img src="src/lightbox5big.png" alt="un homme se faisant laver les cheveux">
                </div>
                <div class="gallery-item" data-index="6">
                    <img src="src/lightbox6big.png" alt="une personne désinfectant un siège de coiffure">
                </div>

            </div>

        </section>


        <section id="contact">

            <h2>CONTACT</h2>


            <form id="contact-form">
                <div class="name-email">
                    <div class="name">
                        <label for="firstname">

                        </label>
                        <input type="text" id="firstname" name="firstname" placeholder="Votre nom"
                            title="Votre nom">
                        <p class="alert"></p>
                    </div>
                    <div class="email">
                        <label for="email" class="email">

                        </label>
                        <input type="email" id="email" name="email"  placeholder="Votre email"
                            title="Votre email">
                        <p class="alert"></p>
                    </div>
                </div>
                <label for="subject">

                </label>
                <input type="text" id="subject" name="subject"  placeholder="Ce sera à quel sujet ?"
                    title="Ce sera à quel sujet">
                    <p class="alert"></p>

                    <textarea class="area" id="message" title="saisissez votre message"  name="message"
                     placeholder="Merci de saisir votre question"></textarea>
                <p class="alert"></p>

                <input type="submit" value="Envoyer">

                <p class="sendalert" id="sendalert"></p>

            </form>
            <a href="https://www.google.com/maps/place/Mister'tif/@46.5983749,-1.4530011,15z/data=!4m5!3m4!1s0x0:0x945ad014a11e713d!8m2!3d46.5983749!4d-1.4530011"
                rel="noopener" target="_blank" title="lien vers googlemap">Me trouver</a>
        </section>



    </div>

                
    <footer>
        <div class="subfooter">
            <div>
                <p>Copyrigh    t &copy;<span id="year"></span> <br>Mister'tif injected with
                    <a href="#" target="_blank" class="text-dark">Web M design </a> <br>

                    <a href="mentions.html" target="_blank" class="text-dark">Mentions légales</a></p>
            </div>
            <iframe width="540" height="305" src="https://296c1827.sibforms.com/serve/MUIEAJr6LugQVj7oImiJEpFAEoOOnCSCG-CcY1IpaSKlm8jZgXaqO3YY0hKXF-TGBEGEziyeDgA9BSahNXRFXmJTSsrx0IY1xT2elhJSi9IjkAojPPGaTDXDOLmHo7ICq_tEBSkaX4vNRjhNwM0HUaDOITpMH7PEtoejA14kkllgyRpWWa8fIQFTWs5mLctsbv0NxGObs4xIMdO9" frameborder="0" scrolling="auto" allowfullscreen style="display: block;margin-left: auto;margin-right: auto;max-width: 100%;"></iframe>
            <div class="socialnetworks">

                <a href="#"><i class="fab fa-facebook-f" title="lien vers facebook"></i></a>
                <a href="#"><i class="fab fa-instagram" title="lien vers instagram"></i></a>

            </div>
        </div>

    </footer>


    <!-- SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="./js/script.js"></script>

    <script>
        // init vertical silder
        // var mySlider = slider('.slide');

        //topnav
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }

        }
        //Lightbox
        const galleryItem = document.getElementsByClassName("gallery-item");
        const lightBoxContainer = document.createElement("div");
        const lightBoxContent = document.createElement("div");
        const lightBoxImg = document.createElement("img");
        const lightBoxPrev = document.createElement("div");
        const lightBoxNext = document.createElement("div");

        lightBoxContainer.classList.add("lightbox");
        lightBoxContent.classList.add("lightbox-content");
        lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
        lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

        lightBoxContainer.appendChild(lightBoxContent);
        lightBoxContent.appendChild(lightBoxImg);
        lightBoxContent.appendChild(lightBoxPrev);
        lightBoxContent.appendChild(lightBoxNext);

        document.body.appendChild(lightBoxContainer);

        let index = 1;

        function showLightBox(n) {
            if (n > galleryItem.length) {
                index = 1;
            } else if (n < 1) {
                index = galleryItem.length;
            }
            let imageLocation = galleryItem[index - 1].children[0].getAttribute("src");
            lightBoxImg.setAttribute("src", imageLocation);
        }

        function currentImage() {
            lightBoxContainer.style.display = "block";

            let imageIndex = parseInt(this.getAttribute("data-index"));
            showLightBox(index = imageIndex);
        }
        for (let i = 0; i < galleryItem.length; i++) {
            galleryItem[i].addEventListener("click", currentImage);
        }

        function slideImage(n) {
            showLightBox(index += n);
        }

        function prevImage() {
            slideImage(-1);
        }

        function nextImage() {
            slideImage(1);
        }
        lightBoxPrev.addEventListener("click", prevImage);
        lightBoxNext.addEventListener("click", nextImage);

        function closeLightBox() {
            if (this === event.target) {
                lightBoxContainer.style.display = "none";
            }
        }
        lightBoxContainer.addEventListener("click", closeLightBox);


        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());
    </script>
</body>

</html>