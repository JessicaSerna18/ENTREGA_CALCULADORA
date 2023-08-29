<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    $cliente = new SoapClient(null, array(
        'location' => "http://localhost/soap/server.php",
        'uri' => "http://localhost/soap"
    ));

    $resultado = $cliente->__soapCall($operacion, array($num1, $num2));

    echo $resultado;
}
?>
