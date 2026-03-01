<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Calculando o montante com juros composto</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Calculando o montante com juros composto</h1>
<form method="post">
<div class="mb-3">
              <label for="capital" class="form-label">Informe a capital com "." no lugar de ","</label>
              <input type="number" id="capital" name="capital" class="form-control" step="0.01" required="">
            </div><div class="mb-3">
              <label for="juros" class="form-label">Informe a taxa de juros com "." no lugar de ","</label>
              <input type="number" id="juros" name="juros" class="form-control"  step="0.01"required="">
            </div><div class="mb-3">
              <label for="periodo" class="form-label">Informe o periodo</label>
              <input type="number" id="periodo" name="periodo" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $capital = $_POST["capital"];
        $juros = $_POST["juros"];
        $periodo = $_POST["periodo"];
        $juroscomposto = $capital * (1+($juros/100)) ** $periodo;

        echo "O resultado vai ser: $juroscomposto";
    }

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>