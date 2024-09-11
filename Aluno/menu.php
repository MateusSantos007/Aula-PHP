<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aluno</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <?php if($pg_atual == 'home'): ?>
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        <?php else: ?>
          <a class="nav-link" href="#">Home</a>
        <?php endif; ?>
        </li>
        <li class="nav-item">
        <?php if($pg_atual == 'cadastrar'): ?>
          <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
        <?php else: ?>
          <a class="nav-link" href="formulario.php">Cadastrar</a>
        <?php endif; ?>
          
        </li>
        <li class="nav-item">
        <?php if($pg_atual == 'mostrar'): ?>
          <a class="nav-link active" aria-current="page" href="#">Mostrar</a>
        <?php else: ?>
          <a class="nav-link" href="mostra.php">Mostrar</a>
        <?php endif; ?>
          
        </li>
        <li class="nav-item">
        <?php if($pg_atual == 'idade'): ?>
          <a class="nav-link active" aria-current="page" href="#">Idade</a>
        <?php else: ?>
          <a class="nav-link" href="mostra_idade.php">Idade</a>
        <?php endif; ?>
          
        </li>
        <li class="nav-item">
        <?php if($pg_atual == 'sair'): ?>
          <a class="nav-link active" aria-current="page" href="#">Sair</a>
        <?php else: ?>
          <a class="nav-link" href="sair.php">Sair</a>
        <?php endif; ?>
          
        </li>
      </ul>
    </div>
  </div>
</nav>