<link rel="stylesheet" href="style.css">
<?php
class Calculator {
    private $numero1;
    private $numero2;

    public function setNumbers($numero1, $numero2) {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    public function somar() {
        return $this->numero1 + $this->numero2;
    }

    public function subtrair() {
        return $this->numero1 - $this->numero2;
    }

    public function multiplicar() {
        return $this->numero1 * $this->numero2;
    }

    public function dividir() {
        if ($this->numero1 != 0) {
            return $this->numero1 / $this->numero2;
        } else {
            return "Erro: Divisão por zero";
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operation'];

    
    $calculador = new Calculator();
    $calculador->setNumbers($numero1, $numero2);

  
    switch ($operacao) {
        case 'adicao':
            echo "Resultado da Adição: " . $calculador->somar();
            break;
        case 'subtracao':
            echo "Resultado da Subtração: " . $calculador->subtrair();
            break;
        case 'multiplicacao':
            echo "Resultado da Multiplicação: " . $calculador->multiplicar();
            break;
        case 'divisao':
            echo "Resultado da Divisão: " . $calculador->dividir();
            break;
        default:
            echo "Operação inválida";
    }
}




?>