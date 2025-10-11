<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/paginas.ico" type="image/x-icon">
    <title>Além das Pág.</title>

    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Sacramento&family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Miniver&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styleprincipal.css">

</head>

<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="site_livros.php">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="dicas-de-livros.php">Dicas</a></li>


  

                    <li class="nav-item"><a class="nav-link" href="resenhas.php">Criar Resenha</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="generos/romance.php">Romance</a></li>
                            <li><a class="dropdown-item" href="generos/suspense.php">Suspense</a></li>
                            <li><a class="dropdown-item" href="generos/poesia.php">Poesia</a></li>
                            <li><a class="dropdown-item" href="generos/fantasia.php">Fantasia</a></li>
                            <li><a class="dropdown-item" href="generos/ficientifica.php">Ficção Científica</a></li>
                            <li><a class="dropdown-item" href="generos/biografia.php">Biografia</a></li>
                            <li><a class="dropdown-item" href="generos/autoajuda.php">Autoajuda</a></li>
                            <li><a class="dropdown-item" href="generos/aventura.php">Aventura</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="add_Livro.php">Adicionar Livro</a></li>
                    <li class="nav-item"><a class="nav-link" href="func_livros.php">Livros Cadastrados</a></li>
                    <li class="nav-item"><a class="nav-link" href="Func_Res.php">Resenhas</a></li>
                          <!-- Dropdown do Quiz -->
                    <li class="nav-item">
                        <a class="nav-link -toggle" href="quiz.php">
                            Quiz
                        </a>
                        <ul class="dropdown-menu p-3" style="width: 600px;">
                            <li>
                                <iframe 
                                    src="https://quiz-de-g-nero--averagegrass2866494.on.websim.ai/?v=17" 
                                    width="100%" 
                                    height="500" 
                                    style="border:none;">
                                </iframe>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- Campo de busca + perfil -->
                <div class="d-flex align-items-center">
                    <form class="d-flex me-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>

                    <?php if (!empty($nomeExibicao)): ?>
                        <div class="hero position-relative">
                            <img src="data:image/jpeg;base64,<?= base64_encode($fotoPerfil) ?>" class="user-pic" onclick="toggleMenu()" title="Perfil">

                            <div class="sub-menu-wrap" id="subMenu">
                                <div class="sub-menu">
                                    <div class="user-info">
                                        <img src="data:image/jpeg;base64,<?= base64_encode($fotoPerfil) ?>" class="user-pic">
                                        <h3><?= htmlspecialchars($nomeExibicao) ?></h3>
                                    </div>
                                    <hr>

                                    <a href="../siteprincipal/perfil/view_Perfil.php" class="sub-menu-link">
                                    <i class="fas fa-user-circle"></i>
                                    <p>Perfil</p>
                                    <span>›</span>
                                </a>

                                <a href="../siteprincipal/perfil/config_Perfil.php" class="sub-menu-link">
                                    <i class="fas fa-cog"></i>
                                    <p>Configurações</p>
                                    <span>›</span>
                                </a>

                                <a href="../siteprincipal/perfil/ajuda_Inicio.php" class="sub-menu-link">
                                    <i class="fas fa-question-circle"></i>
                                    <p>Ajuda</p>
                                    <span>›</span>
                                </a>

                                <a href="minha_Lista.php" class="sub-menu-link">
                                    <i class="fas fa-bookmark"></i>
                                    <p>Minhas Listas</p>
                                    <span>›</span>
                                </a>

                                <a href="../siteprincipal/perfil/logoutperfil.php" class="sub-menu-link">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <p>Sair</p>
                                    <span>›</span>
                                </a>
        

                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <a href="../login.php" class="btn btn-outline-secondary ms-2" title="Fazer Login">
                            <i class="fas fa-sign-in-alt"></i> Entrar
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <header>
        <h1>Além das Páginas</h1>
    </header>

    <main>
        <section>
            <h2>Bem-vindo ao seu novo refúgio literário</h2>
            <br>
            <p>Olá, leitoras e leitores.</p>
            <p>Você acaba de cruzar a fronteira entre o real e o imaginário. Este espaço não é apenas sobre livros — é sobre experiências. Aqui, as histórias não se leem apenas com os olhos, mas se vivem com a alma.

              Cada clique é um passo rumo ao seu próprio universo literário.</p>
        </section>

        <section class="literary-terms">
  <h1>Você já ouviu falar em...</h1>

  <div class="container">
    <div class="card" onclick="toggleCard(this)">
      <h3>Ressaca literária</h3>
      <p class="significado">
        É aquele sentimento de vazio que aparece depois de terminar um livro muito marcante. Você se envolve tanto 
      com a história, os personagens e o universo narrativo, que sente que nada mais vai superar aquilo. Por isso, 
      é difícil começar outra leitura logo em seguida. Pode durar dias ou até semanas. Durante a ressaca, 
      leitores geralmente ficam pensando no enredo, revivendo cenas ou relendo trechos favoritos. 
      É um sinal de que o livro realmente impactou você. Embora incômoda, é uma experiência quase universal entre 
      leitores assíduos. Um bom livro pode curar essa fase.
      </p>
    </div>

    <div class="card" onclick="toggleCard(this)">
      <h3>Plot twist</h3>
      <p class="significado">
        É uma reviravolta inesperada no enredo, geralmente no momento em que o leitor menos espera. Esse recurso 
      é usado para surpreender, chocar ou mudar totalmente a direção da história. Pode revelar que um personagem
       era vilão, que algo visto como verdade era mentira ou que tudo foi um sonho, por exemplo. Um bom plot twist
        muda a perspectiva do leitor sobre tudo que leu até ali. Para funcionar bem, ele precisa fazer sentido 
        dentro da narrativa e não parecer forçado. Um plot twist bem construído pode transformar um livro comum
         em inesquecível.
      </p>
    </div>

    <div class="card" onclick="toggleCard(this)">
      <h3>Prólogo</h3>
      <p class="significado">
        O prólogo é a introdução da história, uma parte inicial que ocorre antes do evento principal do livro. 
      Ele pode servir para apresentar um contexto importante, uma cena do passado, ou até um mistério que será 
      desenvolvido depois. Nem toda história tem prólogo, mas quando tem, ele ajuda a preparar o leitor para o que 
      virá, estabelecendo o tom ou o cenário. Muitas vezes, o prólogo funciona para criar curiosidade e prender o 
      interesse logo no começo da leitura.
      </p>
    </div>
    <div class="card" onclick="toggleCard(this)">
      <h3>Epílogo</h3>
      <p class="significado">
        É uma reviravolta inesperada no enredo, geralmente no momento em que o leitor menos espera. Esse recurso 
      é usado para surpreender, chocar ou mudar totalmente a direção da história. Pode revelar que um personagem
       era vilão, que algo visto como verdade era mentira ou que tudo foi um sonho, por exemplo. Um bom plot twist
        muda a perspectiva do leitor sobre tudo que leu até ali. Para funcionar bem, ele precisa fazer sentido 
        dentro da narrativa e não parecer forçado. Um plot twist bem construído pode transformar um livro comum
         em inesquecível.
      </p>
    </div>
    <div class="card" onclick="toggleCard(this)">
      <h3>Antagonista</h3>
      <p class="significado">
        É uma reviravolta inesperada no enredo, geralmente no momento em que o leitor menos espera. Esse recurso 
      é usado para surpreender, chocar ou mudar totalmente a direção da história. Pode revelar que um personagem
       era vilão, que algo visto como verdade era mentira ou que tudo foi um sonho, por exemplo. Um bom plot twist
        muda a perspectiva do leitor sobre tudo que leu até ali. Para funcionar bem, ele precisa fazer sentido 
        dentro da narrativa e não parecer forçado. Um plot twist bem construído pode transformar um livro comum
         em inesquecível.
      </p>
    </div>
    <div class="card" onclick="toggleCard(this)">
      <h3>Enemies to Lovers</h3>
      <p class="significado">
        É uma reviravolta inesperada no enredo, geralmente no momento em que o leitor menos espera. Esse recurso 
      é usado para surpreender, chocar ou mudar totalmente a direção da história. Pode revelar que um personagem
       era vilão, que algo visto como verdade era mentira ou que tudo foi um sonho, por exemplo. Um bom plot twist
        muda a perspectiva do leitor sobre tudo que leu até ali. Para funcionar bem, ele precisa fazer sentido 
        dentro da narrativa e não parecer forçado. Um plot twist bem construído pode transformar um livro comum
         em inesquecível.
      </p>
    </div>
  </div>

  <!-- Link para o JS externo -->
  <script src="script.js"></script>
    </main>

    <footer>
        <p>&copy; 2025 Além Das Páginas</p>
    </footer>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>