<?php session_start(); ?>
<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema SAM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <?php if(!isset($_SESSION['tipo_login'])): ?>
            <li class="nav-item">
            <?php if($pg_atual == 'login'): ?>
            <a class="nav-link active" aria-current="page" href="#">Login</a>
            <?php else: ?>
            <a class="nav-link" href="login.php">Login</a>
            <?php endif; ?>
            </li>
        <?php endif; ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastros de Usuario
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cadastroMedico.php">Cadastro de Médico</a></li>
            <li><a class="dropdown-item" href="cadastroEnfermeiro.php">Cadastro de Enfermeiro</a></li>
          </ul>
        </li>

        <?php if(isset($_SESSION['tipo_login']) && $_SESSION['tipo_login'] == "medico"): ?>

        <li class="nav-item">
        <?php if($pg_atual == 'paciente'): ?>
          <a class="nav-link active" aria-current="page" href="#">Cadastrar Paciente</a>
        <?php else: ?>
          <a class="nav-link" href="cadastroPaciente.php">Cadastrar Paciente</a>
        <?php endif; ?>
          
        </li>

        <li class="nav-item">
        <?php if($pg_atual == 'receita'): ?>
          <a class="nav-link active" aria-current="page" href="#">Cadastrar Receita</a>
        <?php else: ?>
          <a class="nav-link" href="cadastroReceita.php">Cadastrar Receita</a>
        <?php endif; ?>
          
        </li>

        <li class="nav-item">
        <?php if($pg_atual == 'mostraPaciente'): ?>
          <a class="nav-link active" aria-current="page" href="#">Pacientes</a>
        <?php else: ?>
          <a class="nav-link" href="mostraPaciente.php">Pacientes</a>
        <?php endif; ?>
          
        </li>

        <?php endif; ?>

        <?php if(isset($_SESSION['tipo_login']) && $_SESSION['tipo_login'] == "enfermeiro"): ?>
            
        <li class="nav-item">
        <?php if($pg_atual == 'mostraReceita'): ?>
          <a class="nav-link active" aria-current="page" href="#">Receitas</a>
        <?php else: ?>
          <a class="nav-link" href="mostraReceita.php">Receitas</a>
        <?php endif; ?>
          
        </li>
        <?php endif; ?>

        <?php if(isset($_SESSION['tipo_login'])): ?>
            <li class="nav-item">
            <?php if($pg_atual == 'sair'): ?>
            <a class="nav-link active" aria-current="page" href="#">Sair</a>
            <?php else: ?>
            <a class="nav-link" href="sair.php">Sair</a>
            <?php endif; ?>
            </li>
        <?php endif; ?>
        
      </ul>
    </div>
  </div>
</nav>