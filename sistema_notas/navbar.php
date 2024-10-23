<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema Notas</a>
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
        <?php if($pg_atual == 'cadastroTurma'): ?>
          <a class="nav-link active" aria-current="page" href="#">Cadastro Turma</a>
        <?php else: ?>
          <a class="nav-link" href="cadastrarTurma.php">Cadastro Turma</a>
        <?php endif; ?>
          
        </li>

        <li class="nav-item">
        <?php if($pg_atual == 'cadastrarAluno'): ?>
          <a class="nav-link active" aria-current="page" href="#">Cadastrar Aluno</a>
        <?php else: ?>
          <a class="nav-link" href="cadastrarAluno.php">Cadastrar Aluno</a>
        <?php endif; ?>
          
        </li>

        <li class="nav-item">
        <?php if($pg_atual == 'cadastrarNota'): ?>
          <a class="nav-link active" aria-current="page" href="#">Cadastrar Notas</a>
        <?php else: ?>
          <a class="nav-link" href="cadastrarNota.php">Cadastrar Notas</a>
        <?php endif; ?>
          
        </li>

        <li class="nav-item">
        <?php if($pg_atual == 'mostraTurma'): ?>
          <a class="nav-link active" aria-current="page" href="#">Turmas</a>
        <?php else: ?>
          <a class="nav-link" href="mostraTurma.php">Turmas</a>
        <?php endif; ?>
          
        </li>

        <li class="nav-item">
        <?php if($pg_atual == 'mostraAluno'): ?>
          <a class="nav-link active" aria-current="page" href="#">Alunos</a>
        <?php else: ?>
          <a class="nav-link" href="mostraAluno.php">Alunos</a>
        <?php endif; ?>
          
        </li>

        <li class="nav-item">
        <?php if($pg_atual == 'mostraNota'): ?>
          <a class="nav-link active" aria-current="page" href="#">Notas</a>
        <?php else: ?>
          <a class="nav-link" href="mostraNota.php">Notas</a>
        <?php endif; ?>
          
        </li>
      </ul>
    </div>
  </div>
</nav>