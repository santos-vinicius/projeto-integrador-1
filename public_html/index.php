<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/style.css">
  <title>TEAssist</title>
</head>

<body>

<div class="cor-fundo">
  <main class="container-main">
    <span class="project-name"> Projeto Integrador</span>
      <?php
include './template/header.php';
?>
        <div class="banner">
          <div class="banner-text">
            <h1>
              <span>Facilite a Rotina!</span><br>
                    Conheça o aplicativo que melhora a rotina da criança com TEA.
            </h1>
            <p>
              Simplifique a vida de seu filho e promova uma rotina mais previsível e tranquila com nossa plataforma inovadora.
              Nosso aplicativo permite uma colaboração eficaz entre pais e equipe escolar, fornecendo ferramentas
              para estabelecer e manter rotinas de tarefas específicas para crianças com Transtorno do Espectro Autista (TEA)
            </p>
            <a href="#aplicativo">Ver Mais</a>
          </div>
            <img src="./src/images/Cadastrar.jpg" alt="banner image">
        </div>
    </main>
  </div>
  <div class="container" id="sobre">
    <section class="about-tea">
      <div class="align-image">
        <h2>Sobre o TEA</h2>

        <img src="./src/images/sobretea.png" alt="puzzle image">
      </div>
        <p>
          O <span>Transtorno do Espectro Autista (TEA)</span> é uma condição caracterizado pela alteração das funções do neurodesenvolvimento do indivíduo, interferindo na capacidade de comunicação, linguagem, interação social e comportamento. É heterogênea, possuindo níveis variados de gravidade e expressão de sintomas como por exemplo epilepsia, dificuldade de aprendizagem ou distúrbios de sono.
        </p>
    </section>
    <section class="about-teassist">
       <div class="align-itens" id="aplicativo">
          <h2>O TEAssist</h2>

          <p> O aplicativo tem como objetivo de proporcionar um ambiente que viabilize o estabelecimento de rotinas de tarefas para o dia a dia da criança com TEA através de um trabalho conjunto dos pais com a equipe de apoio escolar. Levando em consideração que indivíduos com TEA apresentam dificuldade no processamento de estímulos de mudança e acontecimentos imprevisíveis, uma das funcionalidades do aplicativo é criação de eventos que registram atividades atípicas à rotina e que podem ocasionar comportamentos aversivos. </p>

            <a href="#"><i class="fa-brands fa-github"></i>  Documentação </a>


        </div>
        <img src="./src/images/logo_main.svg" alt="app logo">
    </section>

    <section class="services">

        <h2>Serviços/Objetivos</h2>
      <div class="align-itens">
        <div class="card-service">
          <img src="./src/images/brain.svg" alt="foto do card de serviços">
          <p>Mapeamento de</p>
          <p>comportamentos</p>
        </div>

        <div class="card-service">
          <img src="./src/images/calendar.svg" alt="foto do card de serviços">
          <p>Registro de Rotina </p>
          <p>de Eventos</p>
        </div>

        <div class="card-service">
          <img src="./src/images/puzzle.svg" alt="foto do card de serviços">
          <p>Tratamento</p>
          <p>Mulltidisciplinar</p>
        </div>

        <div class="card-service">
          <img src="./src/images/talk.svg" alt="foto do card de serviços">
          <p>Comunicação</p>
          <p>entre Cuidadores</p>
        </div>
      </div>
    </section>

    <section class="project" id="vermais">
      <h2>Acompanhe o Projeto</h2>
      <div class="align-itens">
        <img src="./src/images/acompanheproject.png" alt="Foto do Projeto">
        <div class="text-project">
          <p>O <span>TEAssist</span> está sendo desenvolvido através da disciplina de Projeto Integrador  do CST <span>Análise e Desenvolvimento de Sistemas na  Fatec Ferraz de Vasconcelos.</span> Você pode acompanhar as etapas do projeto através do GitHub, onde está disponivel todo o código deste site, das próximas etapas
          do aplicativo e também a documentação técnica do projeto.</p>
          <p >Que tal deixar uma estrela no repositório e acompanhar nossa jornada?</p>

          <a href="https://github.com/santos-vinicius/projeto-integrador-1"><i class="fa-solid fa-star"></i> Apoie o Projeto</a>
        </div>
      </div>
    </section>
  </div>
  <?php include './template/footer.php';?>
  <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>