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
    var leito = document.getElementById('leito').value;

    // Construindo a URL com os parâmetros
    var url = 'salvaPaciente.php?nome=' + nome + '&leito=' + leito;

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
        //session_start();
        //echo $_SESSION['nome'];
        $pg_atual = "paciente";
        include 'navbar.php';
    ?>
    <div class="container mt-5">
        <div id="saida"></div>
        <h2>Cadastro Paciente</h2>
            <div class="form-floating mb-3">
                <input type="text" name="nome" id="nome" placeholder="nome" class="form-control" required>
                <label for="nome">Nome</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="leito" id="leito" placeholder="leito" class="form-control" required>
                <label for="leito">Leito</label>
            </div> 
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="button" value="Cadastrar" class="btn btn-lg btn-success" onclick='envia()'>
            </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>