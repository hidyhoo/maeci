@include('header')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        html {
            font-family: sans-serif;
            line-height: 1.15;
            text-size-adjust: 100%;
            margin: 0px;
            padding: 0px;
            height: 100%;
            box-sizing: border-box;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            font-size: 16px;
}

body {
    box-sizing: inherit;
            font-weight: 400;
            margin: 0px;
            padding: 0px;
            background: rgb(255, 255, 255);
            background-color: rgb(255, 255, 255);
            height: 100%;
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
            font-size: 0.875rem;
            line-height: 1.7;
            color: rgb(119, 119, 119);
}

.page-header {
    padding: 30px 0;
    border-top: 1px solid rgb(233, 233, 233);
    background: rgb(248, 249, 249);
    border-bottom: 1px solid rgb(233, 233, 233);
    box-sizing: border-box;
}

.container {
    max-width: 1140px;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    box-sizing: border-box;
}

.entry-title {
    font-size: 24px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: rgb(51, 51, 51);
    margin: 0;
    box-sizing: border-box;
}

.content {
    padding: 20px;
    box-sizing: border-box;
}

.content section {
    position: relative;
    box-sizing: border-box;
}

.content .row {
    max-width: 1200px;
    display: flex;
    margin-right: auto;
    margin-left: auto;
    position: relative;
    box-sizing: border-box;
}

.content .column {
    width: 100%;
    position: center;
    min-height: 1px;
    display: flex;
    box-sizing: border-box;
}

.content .text-widget {
    padding: 40px;
            text-align: justify;
            box-sizing: border-box;
}
.content .text-widget span {
            font-size: 14pt;
            display: inline-block;
            margin-bottom: 0.9375rem;
        }
        .content .text-widget ul {
            padding-left: 20px;
            list-style: disc;
        }

        .content .text-widget li {
            margin: 8px 0;
        }

.content .text-widget > p {
    word-break: break-word;
    overflow-wrap: break-word;
    margin-bottom: 15px;
    margin-top: 0px;
    box-sizing: border-box;
}

    </style>
</head>
<body>
    

    <div class="page-header">

        <div class="container">
            <h1 class="entry-title">SANTÉ</h1>
        </div>
    </div>
    <div class="content">
        <section>
            <div class="row">
                <div class="column">
                    <div class="text-widget">
                        <p>Soucieuse de contribuer, au mieux, à la préservation de la santé de ses adhérents, la Fondation s’emploie activement en vue d’offrir une prestation irréprochable en matière sanitaire. Comme elle vise, principalement, à améliorer les conditions, la qualité et le niveau des soins médicaux.</p>
                        <p><strong>A – Une Assurance Maladie Complémentaire</strong> a été mise en place, englobant une batterie d’avantages, dont on citera, entre autres :</p>
                        <ul>
                            <li>Les antécédents de maladie prises en charge sans conditions préalables et de manière irrévocable ;</li>
                            <li>Plafond de remboursement soit : 1 million de DHS par personne, par maladie et par an ;</li>
                            <li>Taux de remboursement 100% du Ticket modérateur ;</li>
                            <li>Séjour en hôpital ou en clinique ou toutes structures médicalisées en chambre individualisée avec une prise en charge des honoraires chirurgiens et/ou médecins traitants. Accouchement et soins post-opératoires y compris de rééducation fonctionnelle sont insérés dans cette prestation avec produits pharmaceutiques, même s’ils ne sont pas pris en charge par le régime de base.</li>
                        </ul>
                        <p><strong>B – Assistance Transport Sanitaire</strong> : l’objectif premier de cette prestation est d’assurer aux adhérents, à tout moment, en cas d’urgence une assistance médicale et le transport sanitaire avec le bouquet d’avantages suivants :</p>
                        <ul>
                            <li>Un numéro d’urgence est mis à la disposition des adhérents de la FM6AE et l’assistance médicale est fournie via une plateforme de médecins ;</li>
                            <li>Sans limite d’âge et sans délai 24 H/24H et 7J/7J avec dépôt de la garantie exigée pour l’admission dans un établissement hospitalier à hauteur de 50.000 DH (l’adhérent est pris en charge immédiatement) ;</li>
                            <li>Transport sanitaire et interurbain au Maroc et à l’étranger avec possibilité d’évacuation sanitaire et hébergement à l’étranger ;</li>
                            <li>Transport funéraire au Maroc et à l’étranger ;</li>
                            <li>Assistance funéraire avec une participation aux frais mortuaires ;</li>
                            <li>Assistance technique.</li>
                        </ul>
                        <p><strong>C –</strong> La Fondation a signé des conventions avec des institutions et établissements dans le secteur de la santé au Maroc, pharmacies comprises.</p>
                        <p><strong>D –</strong> La FM6AE compte organiser des campagnes préventives et d’aide au suivi des maladies chroniques.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
        <div>
                        <footer>@include('footer')</footer>
        </div>
</body>
</html>
