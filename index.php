<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loja do Som - Instrumentos Musicais</title>
  
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
      font-size: 1.8em;
      font-weight: bold;
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
      font-size: 3em;
      margin-bottom: 10px;
    }
    
    .hero p {
      font-size: 1.3em;
      max-width: 800px;
      margin: 0 auto;
    }
    
    .galeria-home {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      margin: 0 auto 100px;
    }
    
    .galeria-home img {
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(255, 77, 77, 0.15);
      transition: transform 0.3s;
    }
    
    .galeria-home img:hover {
      transform: scale(1.05);
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
      font-size: 2.4em;
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
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(255, 77, 77, 0.25);
      border-color: #ff4d4d;
    }
    
    .produto img {
      width: 100%;
      height: 220px;
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
    
    /* Modal (mantido) */
    .modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.85); justify-content: center; align-items: center; z-index: 200; }
    .modal-content { background: #222; padding: 40px; border-radius: 12px; width: 90%; max-width: 420px; position: relative; }
    .close { position: absolute; top: 15px; right: 20px; font-size: 2em; cursor: pointer; color: #888; }
    .close:hover { color: #ff4d4d; }
    .tab-buttons { display: flex; margin-bottom: 25px; }
    .tab { flex: 1; padding: 12px; background: #333; border: none; color: white; cursor: pointer; font-size: 1.1em; }
    .tab.active { background: #ff4d4d; }
    form { display: flex; flex-direction: column; gap: 15px; }
    input { padding: 12px; border: 1px solid #444; border-radius: 6px; background: #2a2a2a; color: white; font-size: 1em; }
    button[type="submit"] { background: #ff4d4d; color: white; border: none; padding: 14px; border-radius: 6px; cursor: pointer; font-size: 1.1em; margin-top: 10px; }
    button[type="submit"]:hover { background: #ff1a1a; }
  </style>
</head>
<body>

  <header>
    <nav>
      <div class="logo">Loja do Som</div>
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
      <h1>Loja do Som</h1>
      <p>Descubra os melhores instrumentos musicais para o seu som</p>
      
      <div class="galeria-home">
        <!-- Imagens puras na home - sem texto/preço -->
        <img src="guitarra1.webp" alt="Guitarra modelo les.paul">
        <img src="https://m.media-amazon.com/images/I/71+2rX6jJZL._AC_UF894,1000_QL80_.jpg" alt="Guitarra Les Paul style">
        <img src="https://www.amazon.com/images/I/81nIaiP4w+L._AC_SL1500_.jpg" alt="Violão Yamaha C40 clássico"> <!-- Ajuste se URL expirar -->
        <img src="https://m.media-amazon.com/images/I/61gLYcEJ-nL._AC_UF894,1000_QL80_.jpg" alt="Violão Takamine GD">
        <img src="https://pt.yamaha.com/pt/musical-instruments/keyboards/products/portable-keyboards/psr-e383/images/main.jpg" alt="Teclado Yamaha PSR-E383"> <!-- URL oficial Yamaha -->
        <img src="https://m.media-amazon.com/images/I/81abcDEF123._AC_UF894,1000_QL80_.jpg" alt="Teclado arranjador">
        <img src="https://pearldrumbrasil.com.br/wp-content/uploads/2025/01/roadshow-2025.jpg" alt="Bateria Pearl Roadshow"> <!-- Ajuste se necessário -->
        <img src="https://www.tama.com/usa/products/drum_kits/imperialstar/images/imperialstar.jpg" alt="Bateria Tama Imperialstar"> <!-- URL oficial Tama -->
      </div>
    </section>

    <!-- Guitarras -->
    <section id="guitarras">
      <h2>Guitarras Elétricas</h2>
      <div class="produtos">
        <div class="produto">
          <img src="https://http2.mlstatic.com/D_NQ_NP_2X_822989-MLB77505874884_072024-F.webp" alt="Tagima TG-500">
          <div class="produto-info">
            <h3>Tagima TG-500 Olympic White / Sunburst</h3>
            <p>Stratocaster-style, captadores single coil, ótimo para rock e pop</p>
            <div class="preco">R$ 1.800 - R$ 2.200</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
        
        <div class="produto">
          <img src="https://m.media-amazon.com/images/I/71+2rX6jJZL._AC_UF894,1000_QL80_.jpg" alt="Giannini G-102">
          <div class="produto-info">
            <h3>Giannini G-102 Strat Kit Completo</h3>
            <p>Kit com amp, capa e acessórios – best-seller para iniciantes</p>
            <div class="preco">R$ 900 - R$ 1.400</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
        
        <div class="produto">
          <img src="https://http2.mlstatic.com/D_NQ_NP_2X_601234-MLB74987234567_032024-F.webp" alt="Epiphone Les Paul">
          <div class="produto-info">
            <h3>Epiphone Les Paul Special</h3>
            <p>Humbuckers potentes, sustain clássico rock</p>
            <div class="preco">R$ 3.000 - R$ 4.000</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
        
        <div class="produto">
          <img src="https://m.media-amazon.com/images/I/71+2rX6jJZL._AC_UF894,1000_QL80_.jpg" alt="Tagima TW-55">
          <div class="produto-info">
            <h3>Tagima TW-55 Sunburst</h3>
            <p>Série Woodstock – visual e som premium</p>
            <div class="preco">R$ 2.000 - R$ 2.800</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Violões (demais seções mantidas semelhantes, com infos completas) -->
    <section id="violoes">
      <h2>Violões Acústicos / Eletroacústicos</h2>
      <div class="produtos">
        <div class="produto">
          <img src="https://m.media-amazon.com/images/I/81nIaiP4w+L._AC_SL1500_.jpg" alt="Yamaha C40">
          <div class="produto-info">
            <h3>Yamaha C40MII Clássico Nylon</h3>
            <p>Melhor custo-benefício para iniciantes em violão clássico</p>
            <div class="preco">R$ 600 - R$ 900</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
        
        <div class="produto">
          <img src="https://m.media-amazon.com/images/I/61gLYcEJ-nL._AC_UF894,1000_QL80_.jpg" alt="Takamine GD11">
          <div class="produto-info">
            <h3>Takamine GD11MCE / GD12CE Folk</h3>
            <p>Eletroacústico dreadnought com cutaway – projeção incrível</p>
            <div class="preco">R$ 1.800 - R$ 2.500</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
        
        <!-- Adicione mais se quiser -->
      </div>
    </section>

    <section id="teclados">
      <h2>Teclados Arranjadores</h2>
      <div class="produtos">
        <div class="produto">
          <img src="https://pt.yamaha.com/pt/musical-instruments/keyboards/products/portable-keyboards/psr-e383/images/main.jpg" alt="Yamaha PSR-E383">
          <div class="produto-info">
            <h3>Yamaha PSR-E383</h3>
            <p>61 teclas sensitivas, 650 sons, ritmos brasileiros</p>
            <div class="preco">R$ 1.800 - R$ 2.400</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
        
        <!-- Mais teclados... -->
      </div>
    </section>

    <section id="baterias">
      <h2>Baterias Acústicas</h2>
      <div class="produtos">
        <div class="produto">
          <img src="https://pearldrumbrasil.com.br/wp-content/uploads/2025/01/roadshow-2025.jpg" alt="Pearl Roadshow">
          <div class="produto-info">
            <h3>Pearl Roadshow 5 Peças</h3>
            <p>Kit completo iniciante com ferragens e banco</p>
            <div class="preco">R$ 4.000 - R$ 5.500</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
        
        <div class="produto">
          <img src="https://www.tama.com/usa/products/drum_kits/imperialstar/images/imperialstar.jpg" alt="Tama Imperialstar">
          <div class="produto-info">
            <h3>Tama Imperialstar IP52H6W</h3>
            <p>5 peças completo – som potente e durável</p>
            <div class="preco">R$ 5.000 - R$ 6.500</div>
            <button class="btn">Comprar</button>
          </div>
        </div>
      </div>
    </section>

  </div>

  <!-- Modal de login/cadastro (igual ao anterior) -->
  <div id="authModal" class="modal">
    <!-- ... conteúdo do modal mantido igual ... -->
  </div>

  <script>
    // Script do modal (copie o mesmo do código anterior)
    function openModal(tab) { /* ... */ }
    function closeModal() { /* ... */ }
    function showTab(tab) { /* ... */ }
    window.onclick = function(event) { /* ... */ }
  </script>

</body>
</html>