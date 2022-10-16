<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    />
    <link rel="stylesheet" href="<?= css_path('/shared/home.css') ?>" />
    <title>José A. (DevJesus)</title>
  </head>
  <body>
    <header>
      <h1 class="logo">
        <span class="developer">DEV</span>JESUS <span class="dot">•</span>
      </h1>
      <ul class="nav">
        <li class="navlink"><a href="<?= route('/') ?>">Início</a></li>
        <li class="navlink"><a href="<?= route('about-me') ?>">Sobre mim</a></li>
        <li class="navlink"><a href="#">Blog</a></li>
        <li class="navlink"><a href="#">Projetos</a></li>
        <li class="navlink"><a href="#">Contato</a></li>
      </ul>
      <div class="burger">
        <i class="fas fa-bars"></i>
      </div>
    </header>

    <main>
      <div class="hero" id="hero">
        <h2 class="devjesus-author">José Augusto Lima G. de Jesus</h2>
        <hr />
        <p class="devjesus-resume">
          <strong>Desenvolvedor de software</strong> há 6 anos,
          <strong>ex-docente</strong> do projeto NOVOTEC do Centro Paula Souza e
          <strong>entusiasta</strong> sobre comportamentos humanos 🧠
        </p>

        <blockquote>
          O sucesso é ir de fracasso em fracasso sem perder o entusiasmo
        </blockquote>
        <cite>Winston Churchill</cite>

        <!-- Scroll Down -->
        <div class="wrapper">
          <button type="button" class="scroll_down" id="scroll_down">
            <i class="fas fa-angle-double-right"></i>
          </button>
        </div>
      </div>      
    </main>
    <script src="<?= js_path('/navbar.js') ?>"></script>
  </body>
</html>
