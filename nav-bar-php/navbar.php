<?php
  $paginaAtual = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">MeuSite</a>

    <!-- Botão hamburguer para telas pequenas -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu que colapsa -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link <?php if ($paginaAtual == 'index.php') echo 'active'; ?>" href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($paginaAtual == 'sobre.php') echo 'active'; ?>" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($paginaAtual == 'contato.php') echo 'active'; ?>" href="contato.php">Contato</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php if (in_array($paginaAtual, ['servico1.php', 'servico2.php', 'servico3.php'])) echo 'active'; ?>"
             href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
            Serviços
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Serviço 1</a></li>
            <li><a class="dropdown-item" href="#">Serviço 2</a></li>
            <li><a class="dropdown-item" href="#">Serviço 3</a></li>
          </ul>
        </li>
      </ul>
    </div>  </div>
</nav>
