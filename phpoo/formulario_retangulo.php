<!DOCTYPE html>
<html>
<head>
    <title>Formulario do Carro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="altura">Altura:</label>
                <input type="text" class="form-control" id="altura" name="altura" required>
            </div>
            <div class="form-group">
                <label for="largura">Largura:</label>
                <input type="text" class="form-control" id="largura" name="largura" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
        include 'Retangulo.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $altura= $_POST["altura"];
            $largura= $_POST["largura"];

            $retangulo = new Retangulo ($altura, $largura);
            echo "</br> <p><strong>Area: </strong>".$retangulo->calcular_area() . "</p>";
            echo "</br> <p><strong>Perimetro: </strong>".$retangulo->calcular_perimetro() . "</p>";
        }
        ?>
 
    </div>
</body>
</html>
