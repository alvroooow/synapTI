<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site com Slide e Seções</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">
      <img src="assets/img/logo.png" alt="Logo">
    </div>
    <ul class="nav-links">
      <li><a href="#01">Home</a></li>
      <li><a href="#services">Serviços</a></li>
      <li><a href="#sobre">Sobre</a></li>
      <li><a href="#contato">Contato</a></li>
    </ul>
  </nav>

  <!-- Slide pequeno -->
   <section id ="01"
  <div class="slideshow-container">
    <div class="slide">
      <img src="assets/img/slide.jpg" alt="Slide 1">
      <div class="slide-text">SUPORTE T.I PARA EMPRESAS</div>
      <!-- Botão Fale com um especialista dentro do slide -->
       
      <a href="https://wa.me/5511999999999?text=Gostaria%20de%20falar%20com%20um%20especialista%20sobre%20suporte%20TI." class="contact-button">FALE COM UM ESPECIALISTA</a>
    </div>
  </div>
</section>
  <section class="services" id="services">
  <h2>Serviços Oferecidos</h2>
  <h5>Suporte de TI Níveis 1, 2 e 3 na Região do Vale do Paraiba.</h5>
  <div class="service-cards">
    <div class="card">
      <i class="fa-solid fa-sitemap"></i> <!-- Ícone de Infraestrutura Basica -->
      <h3>Infraestrutura Básica</h3>
      <p>Configuração de redes, servidores e dispositivos para garantir a conectividade e o funcionamento da empresa.</p>
    </div>

    <div class="card">
      <i class="fa-solid fa-phone-volume"></i> <!-- Ícone de Help -->
      <h3>Suporte HelpDesk</h3> 
      <p>Atendimento técnico para resolver problemas de hardware, software e treinamento de colaboradores.</p>
    </div>

    <div class="card">
      <i class="fa-brands fa-uncharted"></i> <!-- Ícone de Software -->
      <h3>Gestão de Software</h3>
      <p> Instalação, configuração e gerenciamento de ferramentas e sistemas essenciais para as operações.</p>
    </div>


    <div class="card">
    <i class="fa-solid fa-shield"></i> <!-- Ícone de Segurança da Informação -->
      <h3>Segurança da Informação</h3>
      <p>Implementação de antivírus, backups e firewalls para proteger dados e prevenir ataques cibernéticos.</p>
    </div>

    <div class="card">
      <i class="fas fa-cloud"></i> <!-- Ícone de Nuvem -->
      <h3>Suporte à Nuvem</h3>
      <p> Configuração de armazenamento e serviços em nuvem, como Google Drive, OneDrive e servidores.</p>
    </div>

    <div class="card">
    <i class="fa-solid fa-laptop-code"></i> <!-- Ícone de Programação -->
      <h3>Desenvolvimento Web</h3>
      <p>Criação e suporte para sites, hospedagem e desenvolvimento de soluções personalizadas.</p>
    </div>
    <div class="card">
    <i class="fa-solid fa-screwdriver-wrench"></i> <!-- Ícone de Manutenção -->
      <h3>Manutenção Preventiva</h3>
      <p>Monitoramento contínuo e atualizações para evitar falhas e melhorar o desempenho.</p>
    </div>
    <div class="card">
    <i class="fa-solid fa-stairs"></i> <!-- Ícone de Escabilidade -->
      <h3>Escalabilidade</h3>
      <p>Planejamento e implementação de tecnologias para o crescimento da empresa.</p>
    </div>
  </div>
</section>


<!-- Sobre a Empresa -->
<section id="sobre" class="sobre">
  <div class="sobre-container">
    <div class="sobre-text">
      <h2>Sobre a Empresa</h2>
      <p>
        A <strong>SynapTI</strong> é uma empresa em ascensão, focada em oferecer soluções tecnológicas de alta qualidade para empresas que buscam inovação e eficiência. Atuamos com suporte técnico, soluções em nuvem, segurança digital e consultoria em TI, ajudando nossos clientes a otimizar suas operações e alcançar melhores resultados. Nosso compromisso é transformar desafios em oportunidades, conectando tecnologia às necessidades do mercado.
      </p>
      <p>
      Valorizamos a confiança, excelência no atendimento e a busca constante por inovação para crescer junto com nossos parceiros e clientes. Acreditamos que a tecnologia é a chave para impulsionar negócios e criar um futuro mais conectado e eficiente. Na SynapTI, a sua evolução é a nossa prioridade.
      </p>
    </div>
    <div class="sobre-imagem">
      <img src="assets/img/slide.jpg" alt="Imagem sobre a empresa" />
    </div>
  </div>
</section>

 <!-- SEÇÃO DE CONTATO --->
<section id="contato" class="contato">
  <div class="container">
    <h2>Entre em Contato</h2>
    <p>Tem alguma dúvida? Estamos aqui para ajudar! Preencha o formulário abaixo e entraremos em contato em breve.</p>
    
    <form action="enviar_formulario.php" method="POST" class="form-contato">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required placeholder="Seu nome">
      </div>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required placeholder="Seu e-mail">
      </div>

      <div class="form-group">
        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem" rows="5" required placeholder="Sua mensagem"></textarea>
      </div>

      <button type="submit" class="btn-enviar">Enviar</button>
    </form>
  </div>
</section>


  <!-- Rodapé -->
  <footer>
  <div class="footer-container">
    <div class="footer-info">
      <h4> <p> EM BREVE </p>
      <p> EM BREVE </p>
      <p> EM BREVE </p>
      <p> EM BREVE </p> </h4>
    </div>
    <div class="footer-social">
      <h4>Redes sociais</h4>
      <br>
      <a href="https://www.linkedin.com" target="_blank">
        <i class="fab fa-linkedin"></i> LinkedIn
      </a>
      <br>
      <a href="https://www.instagram.com" target="_blank">
        <i class="fab fa-instagram"></i> Instagram
      </a>
    </div>
    <div class="footer-solutions">
      <h4>Soluções em TI</h4>
      <br>
      <ul>
        <li><a href="#">Suporte de TI</a></li>
        <li><a href="#">Solução em Nuvem</a></li>
        <li><a href="#">Help Desk TI</a></li>
        <li><a href="#">Segurança da Informação</a></li>
        <li><a href="#">Backup</a></li>
        <li><a href="#">Gestão em TI</a></li>
        <li><a href="#">Empresa de TI</a></li>
        <li><a href="#">Migração de e-mail</a></li>
        <li><a href="#">Migração para nuvem</a></li>
        <li><a href="#">Contratos TI</a></li>
      </ul>
    </div>
  </div>
</footer>


</body>
</html>
