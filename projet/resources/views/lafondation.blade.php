@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <style>
        html {
            font-family: sans-serif;
            line-height: 1.15;
            text-size-adjust: 100%;
            margin: 0;
            padding: 0;
            height: 100%;
            box-sizing: border-box;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            font-size: 16px;
        }

        body {
            box-sizing: inherit;
            font-weight: 400;
            margin: 0;
            padding: 0;
            background: #fff;
            height: 100%;
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
            font-size: 0.875rem;
            line-height: 1.7;
            color: #777;
        }

        .page-header {
            padding: 30px 0;
            border-top: 1px solid #e9e9e9;
            background: #f8f9f9;
            border-bottom: 1px solid #e9e9e9;
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
            color: #333;
            margin-top: 0;
            margin-bottom: 0;
            box-sizing: border-box;
        }

        .content {
            padding: 20px;
            box-sizing: border-box;
        }

        .content section {
            --widgets-spacing: 20px 20px;
            --swiper-theme-color: #000;
            --swiper-navigation-size: 44px;
            --swiper-pagination-bullet-size: 6px;
            --swiper-pagination-bullet-horizontal-gap: 6px;
            position: relative;
            box-sizing: border-box;
        }

        .content .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
            box-sizing: border-box;
        }

        .content .column {
            flex: 0 0 50%;
            max-width: 50%;
            padding-right: 15px;
            padding-left: 15px;
            box-sizing: border-box;
        }

        .content .text-widget,
        .content .image-widget {
            padding: 10px;
            box-sizing: border-box;
        }

        .content .text-widget > p {
            margin-bottom: 15px;
            margin-top: 0;
            box-sizing: border-box;
            
        }

        .content .button-widget {
            padding: 10px;
            box-sizing: border-box;
        }

        .content .button-widget a {
            fill: #e4c96e;
            color: #e4c96e;
            display: inline-block;
            line-height: 15px;
            background-color: #69727d;
            font-size: 15px;
            padding: 12px 24px;
            border-radius: 3px;
            text-align: center;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: none;
            outline: none;
            touch-action: manipulation;
        }

        .content .button-widget a span {
            display: flex;
            justify-content: center;
            box-sizing: border-box;
        }

        .content .button-widget a span:last-child {
            margin-right: 18px;
        }

        footer {
            margin: 0;
            padding: 0;
            border: none;
        }
                .content .text-widget > p {
                    margin-left: 10px; 
        }
                .content .image-widget {
                    margin-right: 10px;
        }
                .content .image-widget img {
                width: 60%; /* Adjust the width as needed */
                height: auto;
                display: block;
                margin-left: auto;
                margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="page-header">
        <div class="container">
            <h1 class="entry-title">LA FONDATION</h1>
        </div> 
    </div>
    <div class="content">
        <div>
            <section>
                <div class="row">
                    <div class="column">
                        <div class="text-widget">
                            <p>La Fondation a été créée par la Loi n° 12.16 portant création et organisation de la Fondation Mohammed VI de Promotion des Œuvres Sociales des Fonctionnaires et Agents du Ministère des Affaires Etrangères et de la Coopération Internationale, promulguée par Dahir n° du …/…../…. .</p>
                            <p>Le siège de la Fondation est établi à Rabat.</p>
                            <p>Elle a pour objectif de créer, développer et gérer des projets visant à réaliser des actions sociales au profit des fonctionnaires et agents appartenant aux services du Ministère des Affaires Etrangères et de la Coopération Internationale et, le cas échéant, au profit des Fonctionnaires des établissements qui en relèvent, ainsi qu’à créer et développer des infrastructures sociales à leur profit, et au profit de leurs conjoints, de leurs enfants et de leurs ayants droit.</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="image-widget">
                            <img src="https://maeci.ma/wp/wp-content/uploads/2022/12/2021-03-25-1-640x400.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <div class="column">
                        <div class="button-widget">
                            <a href="https://maeci.ma/wp/wp-content/uploads/2023/05/Pages-12.16-BO_6749_Ar-Creation-Fondation-2.pdf" target="_blank">Textes de Loi</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <footer>@include('footer')</footer>
</body>
</html>
