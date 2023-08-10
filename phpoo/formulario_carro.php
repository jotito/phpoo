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
                <label for="Marca">Marca:</label>
                <input type="text" class="form-control" id="Marca" name="Marca" required>
            </div>
            <div class="form-group">
                <label for="Modelo">Modelo:</label>
                <input type="text" class="form-control" id="Modelo" name="Modelo" required>
            </div>
            <div class="form-group">
                <label for="Ano">Ano:</label>
                <input type="date" class="form-control" id="Ano" name="Ano" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
        include 'carro.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $marca= $_POST["Marca"];
            $modelo= $_POST["Modelo"];
            $ano = $_POST["Ano"];

            $carro = new Carro ($marca, $modelo, $ano);
            echo "</br> <p><strong>Marca: </strong>".$carro->get_marca() . "</p>";
            echo "</br> <p><strong>Modelo: </strong>".$carro->get_modelo() . "</p>";
            echo "</br> <p><strong>Ano: </strong>".$carro->get_ano() . "</p>";
        }
        ?>
 
    </div>
</body>
</html>
