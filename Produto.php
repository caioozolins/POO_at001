<?php
class produto{
    public $descricao;
    public $estoque;
    public $preco;
    
    public function aumentarestoque($valor){
        $this->estoque += $valor; 
    }
    public function diminuirestoque($valor){
        $this->estoque -= $valor;
    }
    public function reajustarpreco($percentual){
        $this->preco += ($percentual*100)/$this->preco;
    }
}
$produto = new produto;
$produto->descricao = "produto do Caio";
$produto->estoque = 20;
$produto->preco = 100;

echo "O $produto->descricao tem $produto->estoque em estoque com o preço unitário de R$$produto->preco,00.<br>\n";
echo "O estoque do $produto->descricao é $produto->estoque <br>\n";
echo "O preço do $produto->descricao é R$$produto->preco,00 <br>\n";

echo "<br>";

$produto->aumentarestoque(10);
$produto->diminuirestoque(5);
$produto->reajustarpreco(50);

echo "O $produto->descricao tem $produto->estoque em estoque com o preço unitário de R$$produto->preco,00.<br>\n";
echo "O estoque do $produto->descricao é $produto->estoque <br>\n";
echo "O preço do $produto->descricao é R$$produto->preco,00 <br>\n";