<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
        $pg_atual = "cadastroNota";
        include 'navbar.php';
        include 'conexao.php';

        $comandoSQL = 'SELECT turmas.id as id_turma, alunos.id as id_aluno,alunos.nome as nome_aluno,turmas.nome as nome_turma FROM alunos INNER JOIN turmas ON (turmas.id = alunos.id_turma) ORDER BY turmas.nome';

        $comando = $conexao->prepare($comandoSQL);

        $resultado = $comando->execute();
    ?>
    <div class="container mt-5">
        <h2>Cadastrar Nota</h2>
        <form action="salvarNota.php">
            <div class="form-floating mb-3">
                <input type="number" name="valor" id="valor" placeholder="nota" class="form-control" min="0" max="10" step="0.01" required>
                <label for="valor">Nota</label>
            </div>
            <div class="form-floating mb-3">
                <select name="id_aluno" id="id_aluno" class="form-select" required>
                    <?php
                        while($linha = $comando->fetch()){
                            echo '<option value ='.$linha['id_aluno'].'>'.$linha['nome_aluno'].' - '.$linha['nome_turma'].'</option>';
                        } 
                    ?>
                </select>
                <label for="id_Aluno">Aluno</label>
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-success">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>
</html>