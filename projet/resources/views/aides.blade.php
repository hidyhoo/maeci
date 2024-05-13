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
      background: rgb(255, 255, 255);
      background-color: rgb(255, 255, 255);
      height: 100%;
      font-family: "Open Sans", Helvetica, Arial, sans-serif;
      font-size: 0.9375rem; /* Increased font size */
      line-height: 1.7;
      color: rgb(119, 119, 119);
    }

    .page-header {
      padding: 30px 0;
      border-top: 1px solid #e9e9e9;
      background: #f8f9f9;
      border-bottom: 1px solid #e9e9e9;
    }

    .container {
      position: relative;
      margin: 0 auto;
      padding: 0 15px;
      width: 1140px;
      max-width: 100%;
    }

    .entry-title {
      margin: 10px 0;
      color: #333;
      font-size: 32px; /* Increased font size */
      font-weight: 600;
      text-transform: uppercase;
      font-family: "comforta_regular";
    }

    .entry-content {
  margin-top: 60px;
  padding-bottom: 20px; /* Adding margin at the bottom */
  margin-bottom: 20px; /* Added margin */
  overflow: auto; /* Adding overflow auto to enable scrolling if content exceeds */
  height: auto; /* Ensuring the div expands to fit content */
}
    .entry-content p {
      margin-bottom: 1.5rem; /* Increased space between lines */
    }


    /* .page-footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 100px; /* Adjust height based on footer content */
      background-color: #333;
      color: #fff;
      
    } */
  </style>
</head>

<body>
  <div class="page-header">
    <div class="container">
      <h1 class="entry-title">AIDES EXCEPTIONNELLES</h1>
    </div>
  </div>

  <div id="content" class="site-content">
    <div id="content-inside" class="container right-sidebar">
      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
          <article id="post-3363" class="post-3363 page type-page status-publish hentry">
            <header class="entry-header"></header>
            <div class="entry-content">
              <p>La Fondation ne se limite pas à assurer des prestations ordinaires et conventionnelles mais, au-delà, elle accorde des aides exceptionnelles dans des circonstances exceptionnelles dans l’objectif d’être toujours aux côtés des adhérents dans les moments difficiles.</p>
              <p>Dans ce cadre, le pèlerinage étant en tête des demandes, la Fondation octroie une aide financière comme contribution aux lourdes charges à ce rituel religieux, et aide éventuellement les pèlerins dans la préparation des dossiers du voyage.</p>
              <p>Et à l’avènement de chaque Aïd Al Adha, elle octroie une aide en vue de couvrir partiellement les charges de cette occasion sacrée.   </p>
              <p>Une autre aide exceptionnelle concerne, cette fois-ci, les adhérents ayant des enfants à besoins spécifiques notamment l’autisme, la trisomie 21 et la paraplégie, qui nécessitent une longue période de soins et des charges matérielles conséquentes. Ils reçoivent annuellement une aide de 15.000DH et sont remboursés à hauteur de 80% des frais de l’Aide à la Vie Scolaire et des kits techniques. </p>
              <p>Une assistance administrative aux veuve(f)s est, aussi, fournie dans l’accomplissement des procédures auprès des administrations (MEF/TM, MGPAP, CMR).</p>
             
            </div>
          </article>
        </main>
      </div>
    </div>
  </div>
  @include('footer')
  <!-- <footer class="page-footer">
   @include('footer')
  </footer> -->
</body>

</html>
