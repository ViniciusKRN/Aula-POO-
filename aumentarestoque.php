<?php

class produto
{
    public $produto
    public $estoque
    public $preco
}


public function aumentarEstoque ($valor)
{
    $this->estoque += $valor;
}


public function diminuirEstoque ($valor)
{
    $this-> estoque -= $valor;
}


public function reajustarPreco ($percentual)
{
    $valorReajuste = $this->preco*($percentual/100)
    $this->preco += ($percentual / 100);
}


// instanciando a classe produto
$pc = new Produto();
$pc->descricao = "celeron";
$pc->estoque = 1;
$pc->preco = 500;

$pc->aumentarEstoque(10);
$pc->diminuirEstoque(5);
$pc->reajustarPreco(50);


echo "temos $pc->descricao com apenas $pc->estoque restanto de unidade no valor de $pc->preco.";