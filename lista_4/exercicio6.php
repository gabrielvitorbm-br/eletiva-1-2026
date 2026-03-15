<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>arredondar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>arredondar</h1>
<form method="post">
<div class="mb-3">
              <label for="numero" class="form-label">escreva um numero flutuante com "." no lugar de ","</label>
              <input type="number" id="numero" name="numero" class="form-control" step="any" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $numero = $_POST["numero"];
        $baixo = floor($numero);
        $cima = ceil($numero);
        $normal = round($numero);

        echo "<p> O numero arredondado para cima é: $cima e para baixo é: $baixo o normal é: $normal </p>";

    }


?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>