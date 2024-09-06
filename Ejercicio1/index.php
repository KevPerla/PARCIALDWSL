<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contador de Palabras</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Contador de Palabras</h1>
        <form method="POST" class="mt-4">
            <div class="form-group">
                <label for="frase">Ingrese una frase:</label>
                <input type="text" name="frase" class="form-control" id="frase" placeholder="Escriba aquí su frase" value="<?php echo isset($_POST['frase']) ? $_POST['frase'] : ''; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Contar Palabras</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $frase = $_POST['frase'];
            $contador = str_word_count($frase);
            echo "<div class='alert alert-success mt-4'>La frase contiene <strong>$contador</strong> palabras.</div>";
        }
        ?>
    </div>
</body>
</html>
