<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Calculando juros simples</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Calculando juros simples</h1>
<form method="post">
<div class="mb-3">
              <label for="capital" class="form-label">insira o capital com "." no lugar de ","</label>
              <input type="number" id="capital" name="capital" class="form-control" step="0.01" required="">
            </div><div class="mb-3">
              <label for="juros" class="form-label">taxa de juros em %  com "." no lugar de ","</label>
              <input type="number" id="juros" name="juros" class="form-control"  step="0.01"required="">
            </div><div class="mb-3">
              <label for="periodo" class="form-label">informe o periodo</label>
              <input type="number" id="periodo" name="periodo" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $capital = $_POST["capital"];
        $juros = $_POST["juros"];
        $periodo = $_POST["periodo"];
        $jurossimples = $capital * ($juros/100) * $periodo;
        $resultado = $jurossimples + $capital;

        echo "a taxa de juros vai ser $jurossimples e o total que vai ter no total é   $resultado";
    }

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>