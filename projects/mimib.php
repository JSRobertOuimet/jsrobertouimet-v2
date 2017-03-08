<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>mimiB</title>

  <!--Main stylesheet-->
  <link rel="stylesheet" href="/css/main.css">
</head>

<body>

  <div class="frame">

    <!--Main header-->
    <header class="bit-1">

      <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/navbar.php"; include_once($path); ?>

      <div class="project-jumbotron lazy" data-original="/assets/img/mimib/mimib-logo-on-image.jpg"></div>

    </header>

    <!--Main Content-->
    <main>

      <!--Project-->
      <article>
        <header>
          <h1 class="title-big">mimiB</h1>
          <h2 class="title-small">Project Details</h2>
        </header>

        <section>

          <div class="bit-2">
            
            <p>
              <span class="bold">Client</span><br>
              Micheline Beaulieu
            </p>

            <p>
              <span class="bold">Industry</span><br>
              Fashion
            </p>

          </div>

          <div class="bit-2">
            
            <p>
              <span class="bold">Deliverables</span><br>
              - New visual identity<br>
              - Business card, price tags, signage<br>
            </p>

            <p>
              <span class="bold">Color Palette</span><br>
              <span class="color-swatch mimib-rose"></span>
              <span class="color-swatch mimib-yellow"></span>
              <span class="color-swatch mimib-green"></span>
            </p>

            <p>
              <span class="bold">Fonts</span><br>
              <a href="http://www.fontfabric.com/canter-free-font/" target="_blank" class="link">Canter&nbsp;&rarr;</a><br>
              <a href="https://www.myfonts.com/fonts/urw/futura/" target="_blank" class="link">Futura&nbsp;&rarr;</a><br>
              <a href="https://www.fonts.com/font/itc/itc-american-typewriter" target="_blank" class="link">ITC American Typewriter&trade;&nbsp;&rarr;</a><br>
              <a href="https://fonts.google.com/specimen/Lobster" target="_blank" class="link">Lobster&nbsp;&rarr;</a>
            </p>

          </div>

          </section>

          <section>

            <div class="bit-1 mg-t">
              <div class="img-1-1 lazy" data-original="/assets/svg/mimib-logo-white.svg"></div>
            </div>

            <div class="bit-3">
              <div class="img-1-1 lazy" data-original="/assets/svg/mimib-logo-rose.svg"></div>
            </div>

            <div class="bit-3">
              <div class="img-1-1 lazy" data-original="/assets/svg/mimib-logo-yellow.svg"></div>
            </div>

            <div class="bit-3">
              <div class="img-1-1 lazy" data-original="/assets/svg/mimib-logo-green.svg"></div>
            </div>

            <div class="bit-1">
            
              <div class="bit-2">
                <div class="img-1-1 lazy" data-original="/assets/img/mimib/mimib-photo-2.jpg"></div>
              </div>

              <div class="bit-2">
                <div class="img-1-1 lazy" data-original="/assets/img/mimib/mimib-photo-3.jpg"></div>
              </div>
            
            </div>

            <div class="bit-3">
              <div class="img-1-1 lazy" data-original="/assets/img/mimib/mimib-photo-4.jpg"></div>
            </div>

            <div class="bit-3">
              <div class="img-1-1 lazy" data-original="/assets/img/mimib/mimib-photo-5.jpg"></div>
            </div>

            <div class="bit-3">
              <div class="img-1-1 mg-b lazy" data-original="/assets/img/mimib/mimib-photo-6.jpg"></div>
            </div>

            <p class="bit-2 no-mg">
              <span class="bold">Tags</span><br>
              <span class="tag">2015</span>
              <span class="tag">branding</span>
              <span class="tag">diy</span>
              <span class="tag">fashion</span>
              <span class="tag">multimedia</span>
              <span class="tag">ottawa</span>
              <span class="tag">print</span>
              <span class="tag">rose</span>
              <span class="tag">sewing</span>
            </p>

          </section>

          <!--Needs to be dynamic-->
          <footer class="bit-1 other-projects">
            <p class="bit-1 no-mg">
              <a href="/work.php" class="btn">other work&nbsp;&nbsp;<span class="icon">&rarr;</span></a>
            </p>
          </footer>

      </article>

    </main>
    
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php"; include_once($path); ?>
  
  </div>

  <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/scripts.php"; include_once($path); ?>

</body>

</html>