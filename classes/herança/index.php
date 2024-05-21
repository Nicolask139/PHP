<?php

class Pessoa {
    //definindo variaveis
    public $nome;
    public $idade;
}
?>

<?php

//Outra classe que herdara Pessoa
class Programador extends Pessoa {

}

$pessoa = new Pessoa();
$pessoa->nome = "Murilo";
$pessoa->idade = "20";

echo "Nome:" . $pessoa->nome . "<br>";
echo "Idade:" . $pessoa->idade . "<br>";


//Alterar o valor de Pessoa
$pessoa->nome="Carlos";
$pessoa->idade="21";

echo "Nome:" . $pessoa->nome . "<br>";
echo "Idade:" . $pessoa->idade . "<br>";

//instanciando objetos da classe Programador

$programador = new Programador();
$programador->nome = "Juliano";
$programador->idade = "20";

echo "Nome:" . $programador->nome . "<br>";
echo "Idade:" . $programador->idade . "<br>";
?>

