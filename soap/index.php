 <!DOCTYPE html>
<html>
<head>
    <title>Calculadora </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
    <style>
        .contenedorCalculadora{
            margin: auto;
            background-color: #D5DBDB;
            width: 60%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 55px 0 25px;
            text-align: center;
            flex-direction: column;
        }
        .contenedor{
            background-color: white;
            width: 70%;
            padding: 20px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        }
        h1{
            margin-bottom: 20px;
        }
        h2{
            background-color: #D2B4DE;
        }
        button{
            margin: 10px;
            border-radius: 25px;
        }
        .buttonResultado{
            display: flex;
            justify-content: center;
            flex-direction: column;

        }
        label{
            font-size: 24px;
        }

    </style>
<body>
   <div class="contenedorCalculadora">
    <h1>Ingeniería web y de servicios</h1>
    <div class="contenedor">
        <h2>Calculadora</h2>
            <input type="text" class="form-control mb-2" id="num1" placeholder="Digite valor 1">
            <input type="text" class="form-control mb-2" id="num2" placeholder="Digite valor 2">
            <div class="btn-group buttonResultado" role="group" aria-label="Operaciones">
                <div>
                    <button class="btn btn-primary" style="background-color: #C0392B; border: none;" onclick="sumar()">Suma ➕</button>
                    <button class="btn btn-primary" style="background-color: #2E86C1; border: none;" onclick="restar()">Resta ➖</button>
                    <button class="btn btn-primary" style="background-color: #D35400; border: none;" onclick="multiplicar()">Multiplicación ✖️</button>
                    <button class="btn btn-primary" style="background-color: #7D3C98; border: none;" onclick="dividir()">División ➗</button>
                    
                </div>
                <div>
                    <label for="" id="result"></label>
                </div>
              
        </div>
   </div>

    
    <script>
        function calcular(operacion) {
            var num1 = $('#num1').val();
            var num2 = $('#num2').val();

            if (num1 == "" && num2 == ""){
                window.alert("Debes de ingresar un valor");
            }else{
                $.ajax({
                type: "POST",
                url: "cliente.php", 
                data: {
                    num1: num1,
                    num2: num2,
                    operacion: operacion
                },
                    success: function(result) {
                        $('#result').html("El resultado es: " + result);
                    }
                });
            }
        }

        function sumar() {
            calcular("sumar");
        }
        
        function restar() {
            calcular("restar");
        }
        
        function multiplicar() {
            calcular("multiplicar");
        }
        
        function dividir() {
            calcular("dividir");
        }
        
    </script>
</body>
</html>
