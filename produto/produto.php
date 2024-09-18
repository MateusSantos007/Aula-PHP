<?php

class Produto {
    public $nome;
    public $descricao;
    public $valor;
    public $imagem;

    // Construtor para inicializar os atributos
    public function __construct($nome, $descricao, $valor, $imagem) {
	$this->nome = $nome;
	$this->descricao = $descricao;
	$valor = (float) $valor; // "5.3" -> 5.3
	$this->valor = $valor;
	$this->imagem = $imagem;
    }

    // Método para exibir as informações do produto
    public function exibirInformacoes() {
        ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $this->imagem; ?>" class="card-img-top" alt="..." style="height: 200;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $this->nome; ?></h5>
                <p class="card-text"><?php echo $this->descricao; ?></p>
                <a href="#" class="btn btn-outline-success"><?php echo "R$ ".number_format($this->valor,2,",",".") ?></a>
            </div>
        </div>
        <?php
    }
} 

?>