<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<script>
function envia() {
    var nome = document.getElementById('nome').value;
    var especialidade = document.getElementById('especialidade').value;
    var CRM = document.getElementById('CRM').value;
    var usuario = document.getElementById('usuario').value;
    var senha = document.getElementById('senha').value;

    // Construindo a URL com os parâmetros
    var url = 'salvaMedico.php?nome=' + nome + '&especialidade=' + especialidade + '&CRM=' + CRM + '&usuario=' + usuario + '&senha=' + senha;

    fetch(url)
	.then(response => response.json())
	.then(data => {
	   if(data.r == 1){
        document.getElementById('saida').innerHTML = '<div class="alert alert-danger" role="alert"> Erro ao Cadastrar <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
       }else{
        document.getElementById('saida').innerHTML = '<div class="alert alert-success" role="alert"> Cadastro realizado com sucesso <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
       }
	});
}
</script>
<body>
    <?php 
        $pg_atual = "";
        include 'navbar.php';
    ?>    
    <div class="container mt-5">
        <div id="saida"></div>
        <h2>Cadastro Médico</h2>
            <div class="form-floating mb-3">
                <input type="text" name="nome" id="nome" placeholder="nome" class="form-control" required>
                <label for="nome">Nome</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="especialidade" id="especialidade" placeholder="especialidade" class="form-control" required>
                <label for="especialidade">Especialidade</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="CRM" id="CRM" placeholder="CRM" class="form-control" required>
                <label for="CRM">CRM</label>
            </div>
            <div class="row mb-3">
                <div class="form-floating col">
                    <input type="text" name="usuario" id="usuario" placeholder="usuario" class="form-control" required>
                    <label for="usuario">Usuario</label>
                </div>
                <div class="form-floating col">
                    <input type="password" name="senha" id="senha" placeholder="senha" class="form-control" required>
                    <label for="senha">Senha</label>
                </div>
            </div>
        <div class="d-grid gap-2 col-6 mx-auto">
                <input type="button" value="Cadastrar" class="btn btn-lg btn-success" onclick='envia()'>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>