<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/style.css">
  <link rel="stylesheet" href="./src/sobre.css">
  <title>TEAssist</title>
</head>

<body>

<div class="cor-fundo">
  <main class="container-main">
    <span class="project-name"> Projeto Integrador</span>
      <?php
include './template/header.php';
?>
        <div class="banner-dcode">
          <div class="banner-text-dcode">
            <h1>
              <span>Descrição da Empresa</span><br>
              <p>inovação através da compreensão.🦕</p>
            </h1>
            <p>
            D-Code é uma empresa de tecnologia, dedicada a impulsionar a inovação e a
            excelência tecnológica através da criação de softwares modernos e personalizados,
            estamos sempre pensando em soluções novas e otimizadas a fim de atender às necessidades
            dos nossos clientes.
            </p>
            <a href="#equipe">Ver Equipe</a>
          </div>
            <img src="./src/images/v1.svg" alt="banner company image">
        </div>
    </main>
  </div>
    <div class="container">
        <section class="team-dcode" id="equipe">
            <h2>Nossa Equipe</h2>
            <div class="align-card-team-dcode">
                <div class="card-team">
                    <img class="image-perfil" src="./src/images/ryan.jpg" alt="foto do card de serviços">
                    <div class="info-team">
                      <img class="icon-tea" src="./src/images/logo_header.svg" alt="">
                      <div class="about">
                        <p>Ryan Souza</p>
                        <p class="function">Front-End</p>
                      </div>
                      <div class="social-media">
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                      </div>
                    </div>
                </div>

                <div class="card-team">
                    <img class="image-perfil" src="./src/images/vinicius.jpg" alt="foto do card de serviços">
                    <div class="info-team">
                      <img class="icon-tea" src="./src/images/logo_header.svg" alt="">
                      <div class="about">
                        <p>Vinicius Santos</p>
                        <p class="function">Frontend/UI Designer</p>
                      </div>
                      <div class="social-media">
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                      </div>
                    </div>
                </div>

                <div class="card-team">
                    <img class="image-perfil" src="./src/images/levi.jpg" alt="foto do card de serviços">
                    <div class="info-team">
                      <img class="icon-tea" src="./src/images/logo_header.svg" alt="">
                      <div class="about">
                        <p>Levi Nicola</p>
                        <p class="function">Back-End</p>
                      </div>
                      <div class="social-media">
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                      </div>
                    </div>
                </div>

                <div class="card-team">
                    <img class="image-perfil" src="./src/images/richard.jpg" alt="foto do card de serviços">
                    <div class="info-team">
                      <img class="icon-tea" src="./src/images/logo_header.svg" alt="">
                      <div class="about">
                        <p>Richard Alexsander</p>
                        <p class="function">Front-End</p>
                      </div>
                      <div class="social-media">
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                      </div>
                    </div>
                </div>

                <div class="card-team">
                    <img class="image-perfil" src="./src/images/leo.png" alt="foto do card de serviços">
                    <div class="info-team">
                      <img class="icon-tea" src="./src/images/logo_header.svg" alt="">
                      <div class="about">
                        <p>Leonardo Lima</p>
                        <p class="function">Back-End</p>
                      </div>
                      <div class="social-media">
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                      </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  <?php include './template/footer.php';?>
  <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>