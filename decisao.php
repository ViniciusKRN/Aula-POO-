<?php
 //quero aumentar o Estoque
class produto
{
    public $profuto
    public $estoque
    public $preco
}
 function aumentarEstoque (int $valor) {
     $this->$estoque += $valor;
    if(is_numeric($valor)){
        echo "não é numérico"
    }
    if ($valor > 0 && $valor < 500) {
    $atualEstoque += $valor;
    } elseif ($valor > 500) {
        echo "valor ta muito alto";
    } else echo "valor não da certo"
}

//diminuir estoque
function diminuirEstoque (int $valor) {
    $this->$estoque -= $valor;
    if(is_numeric($valor)) {
        echo "não é numérico"
    }
    if ($valor > 0 && $valor < 200) {
        $atualEstoque -= $valor;
     elseif ($valor > 200) {
            echo "valor é muito alto"}
    if ($valor < 0) { echo "valor é muito alto";}
        }
    }
}
//reajustar Estoque
function reajustarPreco ($percentual)
{
    $this->estoque += $preco += ($percentual*100)/$this->preco;
    if(is_numeric($valor)) {
        echo "não é numérico"
    }
    if ($percentual > 0 && $percentual < 550) {
        $atualEstoque += $valor;    
    } elseif ($valor > 550) {
        echo "valor muito alto";
      else {
          echo "valor invalido";
      } elseif ($percentual > 80) {
          echo "valor muito alto"
      } elseif {
          echo "valor baixo";
      }
    }
}




//AND só é verdade se os 3 critérios forem verdadeiros = só é verdadeiro se os 2 forem verdadeiros
//Verdadeiro && verdadeiro = verdadeiro
//Verdade && falso = falso
//Falso && veridadeiro = falso
//Falso && falso = falso

// || é verdade se 1 critério for verdadeiro, o resultado vai ser verdadeiro

//Verdadeiro || verdadeiro = verdadeiro
//Verdadeiro || falso = verdadeiro
//Falso || verdadeiro = verdadeiro
//Falso || falso = falso

//NOT

//!verdadeiro = falso
//!falso = verdadeiro
