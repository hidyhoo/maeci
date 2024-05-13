<div class="my-header">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.my-header-div1{
    width:30%;
    float:left;
}
.my-header-div2{
    width:70%;
    float:right;
}
.my-header-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 90px;
    background-color: black;
    padding: 10px;
}
#my-header-brand-logo {
    height: 100%;
    transition: transform 0.3s;
    margin-left: 60px;
}
#my-header-brand-logo:hover {
    transform: scale(0.9);
    filter: grayscale(100%);
}
.my-header-menu-container {
    margin-left: 20px;
}
.my-header-menu {
    list-style-type: none;
    display: inline-flex;
    align-items: center;
}
.my-header-menu li {
    position: relative;
    justify-content: space-between;
    padding-top: 20px;
    margin-left:0px ;
}
.my-header-menu li a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 14px;
    transition: color 0.3s;
    padding: 10px;
    justify-content: space-between;
    font-family: 'Comfortaa', cursive;
}
.my-header-menu li:not(:last-child) {
    margin-right: 30px;
}

.my-header-menu li:hover {
    background-color: #333;
}
.my-header-menu li:hover > a {
    color: darkred;
}
.my-header-dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: white;
    border: 1px solid lightgrey;
    padding: 0;
    margin-top: 10px;
    min-width: 200px;
    z-index: 1;
    color: grey;
}
.my-header-menu li:hover .my-header-dropdown {
    display: block;
}
.my-header-dropdown li {
    display: block;
    padding: 10px;
}
.my-header-dropdown li a {
    color: grey;
    font-size: 12px;
}
.my-header-dropdown li:hover {
    background-color: #f2f2f2;
}
.my-header-dropdown li:hover > a {
    color: darkred;
}
.my-header-div2 {
    margin-left: auto;
}
        </style>
    </head>
    <body>
        <div class="my-header-container">
            <div class="my-header-div1">
                <a href="/welcome">
                    <img id="my-header-brand-logo" src="images/site-b.jpg" alt="site-branding">
                </a>
            </div>
            <div class="my-header-div2">
                <ul class="my-header-menu">
                    <li><a href="/">ACCUEIL</a></li>
                    <li>
                        <a href="/fondation">FONDATION</a>
                        <ul class="my-header-dropdown">
                            <li><a href="/datesInstitutionnelles">DATES INSTITUTIONNELLES</a></li>
                            <li><a href="/datelancementpresta">DATES DES LANCEMENTS DE PRESTATION</a></li>
                            <li><a href="/gouvernance">GOUVERNANCE</a></li>
                            <li><a href="/principalesrealisations">PRINCIPALES RÉALISATIONS</a></li>
                        </ul>
                    </li>
                    <li><a href="/actualités">ACTUALITÉS</a></li>
                    <li>
                        <a href="#">MISSIONS & VALEURS</a>
                        <ul class="my-header-dropdown">
                            <li><a href="/missions">MISSIONS</a></li>
                            <li><a href="/valeurs">VALEURS</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">ADHÉSION</a>
                        <ul class="my-header-dropdown">
                            <li><a href="/login">SE CONNECTER</a></li>
                            <li><a href="/signup">DEMANDE D'ADHÉSION</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">PRESTATIONS</a>
                        <ul class="my-header-dropdown">
                            <li><a href="/santé">SANTÉ</a></li>
                            <li><a href="/logement">LOGEMENT</a></li>
                            <li><a href="/ed">ÉDUCATION-FORMATION</a></li>
                            <li><a href="/transport">TRANSPORT</a></li>
                            <li><a href="/restauration">RESTAURATION</a></li>
                            <li><a href="/retraite">RETRAITE COMPLÉMENTAIRE</a></li>
                            <li><a href="/culture">CULTURE, ESTIVAGE ET LOISIRS</a></li>
                            <li><a href="/aides">AIDES EXCEPTIONNELLES</a></li>
                            <li><a href="/produits">PRODUITS DIVERS</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">AVIS & ANNONCES</a>
                        <ul class="my-header-dropdown">
                            <li><a href="/offresEmploi">OFFRES D'EMPLOIS</a></li>
                            <li><a href="/Appelmanifest">APPEL À MANIFESTATION D'INTÉRÊT</a></li>
                            <li><a href="/appelsoffres">APPELS D'OFFRES</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </body>
    </html>
</div>
