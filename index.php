!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lenny's Blues Shop - Instrumentos Musicais Raros</title>
  <style>
    body {
      background-color: #0f0f0f;
      color: #e0e0e0;
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background: linear-gradient(to bottom, #2d0000, #1a1a1a);
      padding: 15px 0;
      position: sticky;
      top: 0;
      z-index: 100;
    }
    nav {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
    }
    .logo {
      color: #ff4d4d;
      font-size: 1.9em;
      font-weight: bold;
      font-family: 'Courier New', Courier, monospace;
    }
    .nav-links a {
      color: #e0e0e0;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
    }
    .nav-links a:hover {
      color: #ff4d4d;
    }
    .auth-buttons button {
      background: #ff4d4d;
      color: white;
      border: none;
      padding: 8px 16px;
      margin-left: 10px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }
    .auth-buttons button:hover {
      background: #ff1a1a;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 30px 20px;
    }
    .hero {
      text-align: center;
      margin: 40px 0 80px;
    }
    .hero h1 {
      color: #ff9999;
      font-size: 3.8em;
      margin-bottom: 10px;
      text-shadow: 0 0 15px #ff4d4d;
    }
    .hero p {
      font-size: 1.4em;
      max-width: 800px;
      margin: 0 auto;
    }
    .galeria-home {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      margin: 40px auto 100px;
    }
    .galeria-home img {
      width: 100%;
      height: 320px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(255, 77, 77, 0.2);
      transition: transform 0.4s, box-shadow 0.4s;
    }
    .galeria-home img:hover {
      transform: scale(1.08);
      box-shadow: 0 12px 35px rgba(255, 77, 77, 0.4);
    }
    section {
      margin: 100px 0;
      padding: 40px 0;
      border-top: 1px solid #333;
    }
    section h2 {
      color: #ff9999;
      text-align: center;
      margin-bottom: 50px;
      font-size: 2.6em;
    }
    .produtos {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }
    .produto {
      background: #1e1e1e;
      border: 1px solid #333;
      border-radius: 12px;
      overflow: hidden;
      transition: all 0.3s;
      text-align: center;
    }
    .produto:hover {
      transform: translateY(-12px);
      box-shadow: 0 15px 35px rgba(255, 77, 77, 0.3);
      border-color: #ff4d4d;
    }
    .produto img {
      width: 100%;
      height: 240px;
      object-fit: cover;
    }
    .produto-info {
      padding: 20px 15px;
    }
    .produto h3 {
      color: #ff9999;
      margin: 10px 0 8px;
      font-size: 1.3em;
    }
    .preco {
      color: #00ff88;
      font-size: 1.6em;
      font-weight: bold;
      margin: 12px 0;
    }
    .btn {
      background: #ff4d4d;
      color: white;
      border: none;
      padding: 12px 24px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1.1em;
    }
    .btn:hover {
      background: #ff1a1a;
    }
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.85);
      justify-content: center;
      align-items: center;
      z-index: 200;
    }
    .modal-content {
      background: #222;
      padding: 40px;
      border-radius: 12px;
      width: 90%;
      max-width: 420px;
      position: relative;
    }
    .close {
      position: absolute;
      top: 15px;
      right: 20px;
      font-size: 2em;
      cursor: pointer;
      color: #888;
    }
    .close:hover {
      color: #ff4d4d;
    }
    .tab-buttons {
      display: flex;
      margin-bottom: 25px;
    }
    .tab {
      flex: 1;
      padding: 12px;
      background: #333;
      border: none;
      color: white;
      cursor: pointer;
      font-size: 1.1em;
    }
    .tab.active {
      background: #ff4d4d;
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    input {
      padding: 12px;
      border: 1px solid #444;
      border-radius: 6px;
      background: #2a2a2a;
      color: white;
      font-size: 1em;
    }
    button[type="submit"] {
      background: #ff4d4d;
      color: white;
      border: none;
      padding: 14px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1.1em;
      margin-top: 10px;
    }
    button[type="submit"]:hover {
      background: #ff1a1a;
    }
    footer {
      background: #1a1a1a;
      padding: 40px 20px;
      text-align: center;
      border-top: 1px solid #333;
      margin-top: 100px;
    }
    .marcas-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 30px;
      max-width: 1000px;
      margin: 0 auto 40px;
    }
    .marca-item {
      background: #222;
      padding: 20px;
      border-radius: 10px;
      border: 1px solid #444;
      transition: all 0.3s;
    }
    .marca-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(255, 77, 77, 0.2);
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <div class="logo">Lenny's Blues Shop</div>
      <div class="nav-links">
        <a href="#home">Home</a>
        <a href="#guitarras">Guitarras</a>
        <a href="#violoes">Violões</a>
        <a href="#teclados">Teclados</a>
        <a href="#baterias">Baterias</a>
      </div>
      <div class="auth-buttons">
        <button onclick="openModal('login')">Entrar</button>
        <button onclick="openModal('cadastro')">Cadastrar</button>
      </div>
    </nav>
  </header>

  <div class="container">
    <section id="home" class="hero">
      <h1>Lenny's Blues Shop</h1>
      <p>Instrumentos com alma blues, timbres raros e vibe SRV – direto do seu setup pra você</p>
      <div class="galeria-home">
        <img src="batera.vermelha.jpg" alt="Bateria PDP vermelha completa">
        <img src="teclado.2.jpg" alt="Nord Stage 2 vermelho em quarto">
        <img src="guitarra.vermelha.jpg" alt="Fender Stratocaster vermelha flame">
        <img src="violão.1.jpg" alt="Gibson archtop com inlay floral">
        <img src="guitarra.lespaul.jpg" alt="Les Paul vermelha sobre Marshall">
        <img src="teclado.1.jpg" alt="Nord C2D teclado vintage">
        <img src="batera preta.jpg" alt="Close-up de bateria Evans heads">
        <img src="guitarra.devo.jpg" alt="Les Paul gold e black com Marshall stack">
        <img src="violão.3.jpg" alt="Taylor cutaway com acabamento premium">
      </div>
    </section>

    <section id="guitarras">
      <h2>Guitarras Elétricas Raras</h2>
      <div class="produtos">
        <div class="produto">
          <img src="guitarra.marrom.jpg" alt="Fender Strat bronze sparkle">
          <div class="produto-info">
            <h3>Fender Stratocaster Bronze Relic</h3>
            <p>Acabamento sparkle único, vibe vintage rock</p>
            <div class="preco">R$ 5.000 - R$ 8.000</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
        <div class="produto">
          <img src="guitarra.V.jpg" alt="Kramer NITE FLY V">
          <div class="produto-info">
            <h3>Kramer NITE FYL V</h3>
            <p>Top flame intenso, perfeita pro blues texano</p>
            <div class="preco">R$ 4.200 - R$ 6.500</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
        <div class="produto">
          <img src="guitarra.branca.jpg" alt="Fender Jazzmaster branca">">
          <div class="produto-info">
            <h3>Fender Jzzmaster branca</h3>
            <p>Com humbuckers potentes e vibe stage</p>
            <div class="preco">R$ 7.000 - R$ 11.000</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
      </div>
    </section>

    <section id="violoes">
      <h2>Violões Exóticos e High-End</h2>
      <div class="produtos">
        <div class="produto">
          <img src="violão.2.jpg" alt="Gibson violão acústico">">
          <div class="produto-info">
            <h3>Gibson violão acústico clássico</h3>
            <p>Detalhes artesanais, som rico e raro</p>
            <div class="preco">R$ 6.500 - R$ 10.000</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
        <div class="produto">
          <img src="violão.4.jpg" alt="Taylor e Gibson acústicos">
          <div class="produto-info">
            <h3>Taylor / Gibson Cutaway Premium</h3>
            <p>Acabamento premium, projeção incrível</p>
            <div class="preco">R$ 5.000 - R$ 9.000</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
      </div>
    </section>

    <section id="teclados">
      <h2>Teclados Profissionais</h2>
      <div class="produtos">
        <div class="produto">
          <img src="teclado.3.jpg" alt="Nord Stage 2 vermelho">
          <div class="produto-info">
            <h3>Nord Stage 2 Exótico Preto</h3>
            <p>Setup completo, sons lendários e versátil</p>
            <div class="preco">R$ 10.000 - R$ 15.000</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
        <div class="produto">
          <img src="teclado.4.jpg" alt="Nord C2D">
          <div class="produto-info">
            <h3>Nord C2D Branco Style</h3>
            <p>Teclas weighted, emulação clássica</p>
            <div class="preco">R$ 8.000 - R$ 12.000</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
      </div>
    </section>

    <section id="baterias">
      <h2>Baterias Chamativas e Custom</h2>
      <div class="produtos">
        <div class="produto">
          <img src="batera verde.jpg" alt="Bateria PDP Verde">
          <div class="produto-info">
            <h3>PDP Roadhouse Verde Completa</h3>
            <p>Kit full com acabamento flamejante</p>
            <div class="preco">R$ 4.500 - R$ 7.000</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
        <div class="produto">
          <img src="batera branca.jpg" alt="Close-up bateria Evans">
          <div class="produto-info">
            <h3>Bateria Custom Branca com Evans</h3>
            <p>Heads premium, som punchy e visual dark</p>
            <div class="preco">R$ 5.500 - R$ 8.500</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Modal de Login/Cadastro -->
  <div id="authModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <div class="tab-buttons">
        <button class="tab active" onclick="showTab('login')">Login</button>
        <button class="tab" onclick="showTab('cadastro')">Cadastro</button>
      </div>
      <form id="loginForm" style="display: block;">
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Senha" required>
        <button type="submit">Entrar</button>
      </form>
      <form id="cadastroForm" style="display: none;">
        <input type="text" placeholder="Nome completo" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Senha" required>
        <input type="password" placeholder="Confirmar senha" required>
        <button type="submit">Cadastrar</button>
      </form>
    </div>
  </div>

  <!-- Marcas Patrocinadas / Parceiras -->
  <footer>
    <div class="container">
      <h2 style="color: #ff9999; font-size: 2.2em; margin-bottom: 30px;">Marcas Patrocinadas / Parceiras</h2>
      <p style="font-size: 1.2em; margin-bottom: 40px;">Trabalhamos com as melhores marcas do mundo para entregar timbres lendários e qualidade premium.</p>
      
      <div class="marcas-grid">
        <div class="marca-item">
          <h3 style="color: #ff4d4d; margin: 0; font-size: 1.4em;">Fender</h3>
          <p style="font-size: 0.9em; color: #aaa;">Strats icônicas e blues texano puro</p>
        </div>
        <div class="marca-item">
          <h3 style="color: #ff4d4d; margin: 0; font-size: 1.4em;">Gibson</h3>
          <p style="font-size: 0.9em; color: #aaa;">Les Pauls lendárias e sustain eterno</p>
        </div>
        <div class="marca-item">
          <h3 style="color: #ff4d4d; margin: 0; font-size: 1.4em;">Yamaha</h3>
          <p style="font-size: 0.9em; color: #aaa;">Teclados e violões de alta qualidade</p>
        </div>
        <div class="marca-item">
          <h3 style="color: #ff4d4d; margin: 0; font-size: 1.4em;">Nord</h3>
          <p style="font-size: 0.9em; color: #aaa;">Teclados profissionais premium</p>
        </div>
        <div class="marca-item">
          <h3 style="color: #ff4d4d; margin: 0; font-size: 1.4em;">Ibanez</h3>
          <p style="font-size: 0.9em; color: #aaa;">Guitarras versáteis e modernas</p>
        </div>
        <div class="marca-item">
          <h3 style="color: #ff4d4d; margin: 0; font-size: 1.4em;">Pearl / Tama</h3>
          <p style="font-size: 0.9em; color: #aaa;">Baterias potentes e duráveis</p>
        </div>
        <div class="marca-item">
          <h3 style="color: #ff4d4d; margin: 0; font-size: 1.4em;">Taylor</h3>
          <p style="font-size: 0.9em; color: #aaa;">Violões high-end com projeção incrível</p>
        </div>
        <div class="marca-item">
          <h3 style="color: #ff4d4d; margin: 0; font-size: 1.4em;">Tagima</h3>
          <p style="font-size: 0.9em; color: #aaa;">Qualidade brasileira acessível</p>
        </div>
      </div>
      
      <p style="margin-top: 50px; font-size: 0.9em; color: #888;">Lenny's Blues Shop © 2026 - Todos os direitos reservados</p>
    </div>
  </footer>

  <script>
    function openModal(tab) {
      document.getElementById('authModal').style.display = 'flex';
      showTab(tab);
    }

    function closeModal() {
      document.getElementById('authModal').style.display = 'none';
    }

    function showTab(tab) {
      document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
      event.target.classList.add('active');

      document.getElementById('loginForm').style.display = tab === 'login' ? 'block' : 'none';
      document.getElementById('cadastroForm').style.display = tab === 'cadastro' ? 'block' : 'none';
    }

    window.onclick = function(event) {
      if (event.target === document.getElementById('authModal')) {
        closeModal();
      }
    }
  </script>
</body>
  <!-- Nova seção de Contato - mais moderna e convidativa -->
  <section id="contato" style="padding: 100px 20px 80px; background: linear-gradient(to bottom, #0f0f0f, #1a0000);">
    <div class="container">
      <h2 style="text-align: center; color: #ff9999; font-size: 3em; margin-bottom: 20px; text-shadow: 0 0 15px #ff4d4d;">
        Entre em Contato
      </h2>
      <p style="text-align: center; font-size: 1.3em; max-width: 700px; margin: 0 auto 60px; color: #ccc;">
        Tem dúvida sobre algum instrumento raro? Quer reservar uma peça especial ou agendar uma visita ao showroom?<br>
        <strong>Fale com a gente agora mesmo!</strong>
      </p>
      <!-- Dentro da <section id="contato">, após o texto introdutório ou no lugar dos cards -->
      <div class="form-container" style="max-width: 700px; margin: 60px auto 0; background: #222; padding: 50px 40px; border-radius: 16px; border: 1px solid #444; box-shadow: 0 12px 40px rgba(255, 77, 77, 0.12);">
        <h3 style="text-align: center; color: #ff9999; font-size: 2.2em; margin-bottom: 40px; text-shadow: 0 0 12px rgba(255, 77, 77, 0.3);">
          Envie sua mensagem
        </h3>

        <form id="contactForm" action="https://formsubmit.co/contato@lennysbluesshop.com.br" method="POST" style="display: flex; flex-direction: column; gap: 24px;">

          <!-- Campo Nome -->
          <div>
            <label for="name" style="display: block; margin-bottom: 8px; color: #ff9999; font-weight: bold; font-size: 1.1em;">Nome completo</label>
            <input type="text" id="name" name="name" placeholder="Seu nome" required 
                   style="width: 100%; padding: 16px; border: 1px solid #444; border-radius: 8px; background: #2a2a2a; color: white; font-size: 1.05em; transition: all 0.3s;">
          </div>

          <!-- Campo Email -->
          <div>
            <label for="email" style="display: block; margin-bottom: 8px; color: #ff9999; font-weight: bold; font-size: 1.1em;">E-mail</label>
            <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required 
                   style="width: 100%; padding: 16px; border: 1px solid #444; border-radius: 8px; background: #2a2a2a; color: white; font-size: 1.05em; transition: all 0.3s;">
          </div>

          <!-- Campo Telefone / WhatsApp (opcional mas útil para vendas) -->
          <div>
            <label for="phone" style="display: block; margin-bottom: 8px; color: #ff9999; font-weight: bold; font-size: 1.1em;">WhatsApp / Telefone</label>
            <input type="tel" id="phone" name="phone" placeholder="(41) 99999-9999" 
                   style="width: 100%; padding: 16px; border: 1px solid #444; border-radius: 8px; background: #2a2a2a; color: white; font-size: 1.05em; transition: all 0.3s;">
          </div>

          <!-- Campo Assunto -->
          <div>
            <label for="subject" style="display: block; margin-bottom: 8px; color: #ff9999; font-weight: bold; font-size: 1.1em;">Assunto</label>
            <input type="text" id="subject" name="subject" placeholder="Ex: Interesse na Stratocaster Bronze Relic" required 
                   style="width: 100%; padding: 16px; border: 1px solid #444; border-radius: 8px; background: #2a2a2a; color: white; font-size: 1.05em; transition: all 0.3s;">
          </div>

          <!-- Campo Mensagem -->
          <div>
            <label for="message" style="display: block; margin-bottom: 8px; color: #ff9999; font-weight: bold; font-size: 1.1em;">Mensagem</label>
            <textarea id="message" name="message" rows="6" placeholder="Conte mais sobre o que você precisa... (modelo do instrumento, orçamento, etc.)" required 
                      style="width: 100%; padding: 16px; border: 1px solid #444; border-radius: 8px; background: #2a2a2a; color: white; font-size: 1.05em; resize: vertical; min-height: 140px; transition: all 0.3s;"></textarea>
          </div>

          <!-- Botão Enviar -->
          <button type="submit" 
                  style="background: #ff4d4d; color: white; border: none; padding: 18px; border-radius: 8px; font-size: 1.3em; font-weight: bold; cursor: pointer; margin-top: 20px; transition: all 0.3s;">
            Enviar Mensagem
          </button>

          <!-- Mensagem de sucesso/erro (opcional, via JS) -->
          <div id="formMessage" style="text-align: center; margin-top: 20px; font-size: 1.1em; min-height: 24px;"></div>

          <!-- Campos ocultos para FormSubmit (anti-spam básico) -->
          <input type="hidden" name="_subject" value="Nova mensagem do site Lenny's Blues Shop">
          <input type="hidden" name="_next" value="https://seusite.com/obrigado.html"> <!-- página de agradecimento opcional -->
          <input type="hidden" name="_captcha" value="false">
        </form>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; max-width: 1100px; margin: 2rem auto;">

        <!-- WhatsApp -->
        <div style="background: #1e1e1e; border: 1px solid #333; border-radius: 16px; padding: 40px 30px; text-align: center; transition: all 0.4s; box-shadow: 0 8px 25px rgba(0,0,0,0.5);">
          <div style="font-size: 4.5em; margin-bottom: 20px; color: #25D366;">📱</div>
          <h3 style="color: #ff9999; font-size: 1.6em; margin-bottom: 15px;">WhatsApp</h3>
          <a href="https://wa.me/5541999999999?text=Olá!%20Vi%20um%20instrumento%20no%20site%20Lenny's%20Blues%20Shop..." 
             target="_blank" 
             style="display: inline-block; background: #25D366; color: white; padding: 14px 30px; border-radius: 50px; font-size: 1.2em; font-weight: bold; text-decoration: none; transition: all 0.3s;">
            (41) 9 9999-9999
          </a>
          <p style="margin-top: 15px; color: #aaa; font-size: 1.05em;">
            Resposta rápida • Seg–Sex 9h às 19h
          </p>
        </div>

        <!-- E-mail -->
        <div style="background: #1e1e1e; border: 1px solid #333; border-radius: 16px; padding: 40px 30px; text-align: center; transition: all 0.4s; box-shadow: 0 8px 25px rgba(0,0,0,0.5);">
          <div style="font-size: 4.5em; margin-bottom: 20px; color: #ff4d4d;">✉️</div>
          <h3 style="color: #ff9999; font-size: 1.6em; margin-bottom: 15px;">E-mail</h3>
          <a href="mailto:lennysblues@shop.com.br?subject=Contato%20via%20site%20-%20Lenny's%20Blues%20Shop" 
             style="color: #ff9999; font-size: 1.3em; font-weight: bold; text-decoration: none;">
            lennysblues@shop.com.br
          </a>
          <p style="margin-top: 15px; color: #aaa; font-size: 1.05em;">
            Retornamos em até 24h úteis
          </p>
        </div>

        <!-- Endereço -->
        <div style="background: #1e1e1e; border: 1px solid #333; border-radius: 16px; padding: 40px 30px; text-align: center; transition: all 0.4s; box-shadow: 0 8px 25px rgba(0,0,0,0.5);">
          <div style="font-size: 4.5em; margin-bottom: 20px; color: #ff4d4d;">📍</div>
          <h3 style="color: #ff9999; font-size: 1.6em; margin-bottom: 15px;">Showroom</h3>
          <p style="font-size: 1.15em; line-height: 1.6;">
            Rua das Cordas Elétricas, 777 – Batel<br>
            CASCAVEL / PR – CEP 80420-060<br>
            <span style="color: #aaa; font-size: 0.95em;">(Visita somente com agendamento prévio)</span>
          </p>
        </div>

      </div>

      <!-- Redes sociais -->
      <div style="text-align: center; margin: 70px 0 30px;">
        <h3 style="color: #ff9999; font-size: 1.8em; margin-bottom: 25px;">Siga a gente nas redes</h3>
        <div style="display: flex; justify-content: center; gap: 35px; flex-wrap: wrap;">
          <a href="https://instagram.com/lennysbluesshop" target="_blank" style="color: #ff4d4d; font-size: 3.2em; transition: all 0.3s;">Instagram</a>
          <a href="https://facebook.com/lennysbluesshop" target="_blank" style="color: #ff4d4d; font-size: 3.2em; transition: all 0.3s;">Facebook</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Botão flutuante WhatsApp (muito usado em sites de venda no Brasil) -->
  <a href="https://wa.me/5541999999999?text=Olá!%20Vi%20o%20site%20e%20gostaria%20de%20saber%20mais%20sobre..." 
     target="_blank" 
     style="position: fixed; bottom: 25px; right: 25px; background: #25D366; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2.8em; box-shadow: 0 8px 25px rgba(0,0,0,0.6); z-index: 999; transition: all 0.3s; text-decoration: none;">
    <span>💬</span>
  </a>

  <!-- Footer aprimorado -->
  <footer style="background: #0d0d0d; padding: 60px 20px 40px; border-top: 1px solid #333;">
    <div class="container" style="text-align: center;">
      

      <!-- Sua grid de marcas aqui (mantida igual ao original) -->

      <div style="margin-top: 70px; font-size: 1.1em; color: #aaa;">
        <p><strong>Lenny's Blues Shop</strong> – Cascavel/PR</p>
        <p style="margin: 12px 0;">
          WhatsApp: <a href="https://wa.me/5541999999999" style="color: #ff4d4d;">(41) 9 9999-9999</a><br>
          E-mail: <a href="mailto:lennysblues@shop.com.br" style="color: #ff4d4d;">lennysblues@shop.com.br</a>
        </p>
        <p style="margin-top: 30px; font-size: 0.95em; color: #777;">
          Lenny's Blues Shop © 2026 – Todos os direitos reservados
        </p>
      </div>
    </div>
  </footer>
  </div>
</html>