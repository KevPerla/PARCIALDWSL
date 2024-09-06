<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Calculadora</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Calculadora</h1>
        <form method="POST" class="mt-4">
            <div class="form-group">
                <label for="numero1">Ingrese el primer número:</label>
                <input type="number" name="numero1" class="form-control" id="numero1" value="<?php echo isset($_POST['numero1']) ? $_POST['numero1'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="numero2">Ingrese el segundo número:</label>
                <input type="number" name="numero2" class="form-control" id="numero2" value="<?php echo isset($_POST['numero2']) ? $_POST['numero2'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="operacion">Seleccione la operación:</label>
                <select name="operacion" id="operacion" class="form-control">
                    <option value="suma" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'suma') ? 'selected' : ''; ?>>Suma</option>
                    <option value="resta" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'resta') ? 'selected' : ''; ?>>Resta</option>
                    <option value="multiplicacion" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'multiplicacion') ? 'selected' : ''; ?>>Multiplicación</option>
                    <option value="division" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'division') ? 'selected' : ''; ?>>División</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operacion = $_POST['operacion'];

            switch ($operacion) {
                case "suma":
                    $resultado = $numero1 + $numero2;
                    break;
                case "resta":
                    $resultado = $numero1 - $numero2;
                    break;
                case "multiplicacion":
                    $resultado = $numero1 * $numero2;
                    break;
                case "division":
                    if ($numero2 != 0) {
                        $resultado = $numero1 / $numero2;
                    } else {
                        $resultado = "Error: División por cero no permitida";
                    }
                    break;
                default:
                    $resultado = "Operación no válida";
            }

            echo "<div class='alert alert-success mt-4'>El resultado de la $operacion es: <strong>$resultado</strong></div>";
        }
        ?>
    </div>
</body>
</html>
