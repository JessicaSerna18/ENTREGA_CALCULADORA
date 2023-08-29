<?php
class Calculadora {
    public function sumar($num1, $num2) {
        return $num1 + $num2;
    }

    public function restar($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }

    public function dividir($num1, $num2) {
            return $num1 / $num2;
    }
    
}

$server = new SoapServer('calculadora.wsdl', array('uri' => "http://localhost/soap/server.php"));
$server->setClass("Calculadora");
$server->handle();
?>
