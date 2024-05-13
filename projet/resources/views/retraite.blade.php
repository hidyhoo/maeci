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
    }

    .entry-content p {
      margin-bottom: 1.5rem; /* Increased space between lines */
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
  <div class="page-header">
    <div class="container">
      <h1 class="entry-title">RESTAURATION</h1>
    </div>
  </div>

  <div id="content" class="site-content">
    <div id="content-inside" class="container right-sidebar">
      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
          <article id="post-3363" class="post-3363 page type-page status-publish hentry">
            <header class="entry-header"></header>
            <div class="entry-content">
              <p>Cette prestation, en cours d’étude, consiste à souscrire ses adhérents actifs au régime de retraite complémentaire, via une contribution symbolique afin qu’ils bénéficient à la retraite d’une pension complémentaire.</p>
             
              
            </div>
          </article>
        </main>
      </div>
    </div>
  </div>

  <span class="elementor-divider-separator"></span>

  <footer class="page-footer">
   @include('footer')
  </footer>
</body>

</html>
