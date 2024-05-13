@include('header')

<!DOCTYPE html>
<html>

<head>
  <title>Page Title</title>
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
      box-sizing: inherit;
      padding: 30px 0px;
      border-top: 1px solid rgb(233, 233, 233);
      background: rgb(248, 249, 249);
      border-bottom: 1px solid rgb(233, 233, 233);
    }

    .container {
      box-sizing: inherit;
      position: relative;
      margin-left: auto;
      margin-right: auto;
      padding-right: 15px;
      padding-left: 15px;
      width: 1140px;
      max-width: 100%;
    }

    .entry-title {
      box-sizing: inherit;
      margin: 0.67em 0px;
      clear: both;
      margin-top: 0px;
      color: rgb(51, 51, 51);
      line-height: 1.3;
      word-break: break-word;
      overflow-wrap: break-word;
      margin-bottom: 0px;
      font-size: 24px;
      font-weight: 600;
      letter-spacing: 1px;
      text-transform: uppercase;
      font-family: "comforta_regular";
    }
    .page-footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 100px; /* Adjust height based on footer content */
      background-color: #333;
      color: #fff;
      
    }
  </style>
</head>

<body>
  <div class="page-header" style="box-sizing: inherit; padding: 30px 0px; border-top: 1px solid rgb(233, 233, 233); background: rgb(248, 249, 249); border-bottom: 1px solid rgb(233, 233, 233);">
    <div class="container" style="box-sizing: inherit; position: relative; margin-left: auto; margin-right: auto; padding-right: 15px; padding-left: 15px; width: 1140px; max-width: 100%;">
      <h1 class="entry-title" style="box-sizing: inherit; margin: 0.67em 0px; clear: both; margin-top: 0px; color: rgb(51, 51, 51); line-height: 1.3; word-break: break-word; overflow-wrap: break-word; margin-bottom: 0px; font-size: 24px; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; font-family: 'comforta_regular';">
        CULTURE, ESTIVAGE ET LOISIRS
      </h1>
    </div>
  </div>

  <div id="content" class="site-content" style="box-sizing: inherit; border-top: 1px solid rgb(233, 233, 233); margin-top: -1px;">
    <div id="content-inside" class="container right-sidebar" style="box-sizing: inherit; position: relative; margin-left: auto; margin-right: auto; padding-right: 15px; padding-left: 15px; width: 1140px; max-width: 100%;">
      <div id="primary" class="content-area" style="box-sizing: inherit; float: left; border-right: 1px solid rgb(233, 233, 233); padding-right: 39px; width: 100%; padding-bottom: 40px; padding-top: 40px;">
        <main id="main" class="site-main" role="main" style="box-sizing: inherit; display: block;">
          <article id="post-3363" class="post-3363 page type-page status-publish hentry" style="box-sizing: inherit; display: block;">
            <header class="entry-header" style="box-sizing: inherit; display: block;"></header>
            <div class="entry-content" style="box-sizing: inherit; counter-reset: footnotes 0; margin-bottom: 30px;">
              <p style="box-sizing: inherit; margin-bottom: 0.9375rem; margin-top: 0px; word-break: break-word; overflow-wrap: break-word; text-align: justify;"><span style="box-sizing: inherit; font-family: comforta_regular;">Pour garder la flamme de la culture illuminée, chez ses adhérents, la Fondation déploie un effort considérable en vue de leur assurer une vie culturelle riche, variée et dense par l’organisation d’évènements et manifestations à caractères culturel et artistique.</span></p>
              <p style="box-sizing: inherit; margin-bottom: 0.9375rem; margin-top: 0px; word-break: break-word; overflow-wrap: break-word; text-align: justify;"><span style="box-sizing: inherit; font-family: comforta_regular;">Elle n’omet pas non plus l’estivage et les loisirs, dont les bienfaits sont incontestables pour la détente, la quiétude et la relaxation des adhérents après les longs moments de labeur. </span></p>
              <p style="box-sizing: inherit; margin-bottom: 0.9375rem; margin-top: 0px; word-break: break-word; overflow-wrap: break-word; text-align: justify;"><span style="box-sizing: inherit; font-family: comforta_regular;">Dans ce cadre, une panoplie de conventions avec des Clubs, des Hôtels et des Centres d’Estivage dans diverses villes du Royaume sont en cours d’étude et leur signature est imminente. </span></p>
              <p style="box-sizing: inherit; margin-bottom: 0.9375rem; margin-top: 0px; word-break: break-word; overflow-wrap: break-word; text-align: justify;"><span style="box-sizing: inherit; font-family: comforta_regular;">Aussi, la Fondation compte construire son propre Club qui sera aménagé et équipé de toutes les installations qui offrent et favorisent un climat de détente. Comme il contribuera à cimenter, davantage, les relations amicales entre les adhérents et raffermir l’esprit de corps. Des manifestations et activités en lien avec la culture et le sport sont à prévoir.</span></p>
            </div>
          </article>
        </main>
      </div>
    </div>
  </div>
  <footer class="page-footer">
   @include('footer')
  </footer>
</body>

</html>
