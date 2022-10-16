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
    <link rel="stylesheet" href="<?= css_path('/about-me.css'); ?>" />
    <title>José A. (DevJesus)</title>
  </head>

 

  <body>
    <header>
      <h1 class="logo">
        <span class="developer">DEV</span>JESUS <span class="dot">•</span>
      </h1>
      <ul class="nav">
        <li class="navlink"><a href="<?= route('/') ?>">Início</a></li>
        <li class="navlink"><a href="<?= route('/about-me') ?>">Sobre mim</a></li>
        <li class="navlink"><a href="#">Blog</a></li>
        <li class="navlink"><a href="#">Projetos</a></li>
        <li class="navlink"><a href="#">Contato</a></li>
      </ul>
      <div class="burger">
        <i class="fas fa-bars"></i>
      </div>
    </header>

    <main>
      <div class="devjesus-hero">
        <h1>JOSÉ AUGUSTO L. GONÇALVES DE JESUS</h1>
        <p>
          Sou desenvolvedor de software há 6 anos e já atuei com várias
          linguagens de programação para diversas finalidades.
        </p>
        <p>
          Atualmente o <strong>PHP (🐘)</strong> é minha linguagem preferida e
          desenvolvi um framework próprio para o desenvolvimento de minhas
          aplicações.
        </p>

        <a href="./resume.pdf" download class="devjesus-button">DOWNLOAD CURRÍCULO</a>
      </div>

      <div class="skills">
        <h2>Habilidades técnicas</h2>

        <div class="skill-bars">
          <div class="bar">
            <div class="info">
              <span>HTML</span>
            </div>
            <div class="progress-line html">
              <span></span>
            </div>
          </div>
        </div>

        <div class="skill-bars">
          <div class="bar">
            <div class="info">
              <span>CSS</span>
            </div>
            <div class="progress-line css">
              <span></span>
            </div>
          </div>
        </div>

        <div class="skill-bars">
          <div class="bar">
            <div class="info">
              <span>JAVASCRIPT</span>
            </div>
            <div class="progress-line js-vanilla">
              <span></span>
            </div>
          </div>
        </div>

        <div class="skill-bars">
          <div class="bar">
            <div class="info">
              <span>PHP</span>
            </div>
            <div class="progress-line php">
              <span></span>
            </div>
          </div>
        </div>

        <div class="skill-bars">
          <div class="bar">
            <div class="info">
              <span>VERSIONAMENTO</span>
            </div>
            <div class="progress-line git">
              <span></span>
            </div>
          </div>
        </div>

        <div class="skill-bars">
          <div class="bar">
            <div class="info">
              <span>BANCO DE DADOS RELACIONAL</span>
            </div>
            <div class="progress-line db-relational">
              <span></span>
            </div>
          </div>
        </div>

        <div class="skill-bars">
          <div class="bar">
            <div class="info">
              <span>VUEJS</span>
            </div>
            <div class="progress-line vuejs">
              <span></span>
            </div>
          </div>
        </div>

        <div class="skill-bars">
          <div class="bar">
            <div class="info">
              <span>REACT</span>
            </div>
            <div class="progress-line reactjs">
              <span></span>
            </div>
          </div>
        </div>

        <div class="skill-bars">
          <div class="bar">
            <div class="info">
              <span>CODEIGNITER</span>
            </div>
            <div class="progress-line codeigniter">
              <span></span>
            </div>
          </div>
        </div>

        <div class="skill-bars">
          <div class="bar">
            <div class="info">
              <span>LARAVEL</span>
            </div>
            <div class="progress-line laravel">
              <span></span>
            </div>
          </div>
        </div>
      </div>

      <section class="experiences">
        <h2>Experências Profissionais</h2>

        <div>
          <p>
            <span class="position-and-company">Helpdesk - ALX Soluções</span>
            Experiência rápida no início de carreira afim de obter conhecimentos
            de T.I. <br />
            Instalação de periféricos e manutenção preventiva e corretiva para
            Windows 7.
          </p>

          <p>
            <span class="position-and-company"
              >Monitor - Fatec Guaratinguetá</span
            >
            Durante a faculdade tive o prazer de ser o monitor das disciplinas:
            Programação Orientada a Objetos, Programação em Scripts (C#) e
            Linguagem de programação (Java). <br />
            Pude participar como parte da banca de avaliadores dos projetos
            interdisciplinares por 2 vezes afim de orientar os discentes em
            melhorias em seus projetos.
          </p>

          <p>
            <span class="position-and-company"
              >Analista Desenvolvedor - Liax Tecnologia da Informação</span
            >
            Durante o período pude aprender sobre REST API's e SPA's. Trabalhei
            com o consumo de API construída em CSHARP com a utilização do
            Javascript no front-end com o framework Angular.
          </p>

          <p>
            <span class="position-and-company">Docente - Novotec (CPS)</span>
            Como docente no projeto NOVOTEC do Centro Paula Souza fui
            responsável pelo curso de montagem e manutenção de
            microcomputadores, sendo assim, passando pela história da tecnologia
            da informação até a parte prática.
          </p>

          <p>
            <span class="position-and-company"
              >Desenvolvedor Web - Orions Sites e Host</span
            >
            Durante o período retornei à linguagem PHP, mas desta vez utilizando
            o melhor e maior framework PHP, o Laravel! Com ele obtive as
            chanches de criar vários projetos desde landing pages, sistemas de
            gerenciamento de páginas e também um sistema interativo para escolha
            de produtos infantis.
          </p>
          <p>
            <span class="position-and-company"
              >Desenvolvedor Jr. - Amsted Maxion/Greenbrier Maxion</span
            >
            No atual cargo exerço atividades de sustenção de sistemas legados
            com PHP 5 e também no desenvolvimento de novas aplicações com o PHP
            8. Criei um framework próprio para a companhia baseado Laravel com
            funcionalidades de validação de formulário, persistência de dados em
            formulários, toast de mensagens, upload de arquivos, proteção contra
            CSRF, sistema de roteamento e outros.
          </p>
        </div>
      </section>
    </main>
    <script src="<?= js_path('/navbar.js') ?>"></script>
  </body>
</html>
