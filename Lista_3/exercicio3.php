<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ondem crescente </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Ondem crescente </h1>
<form method="post">
<div class="mb-3">
              <label for="valor1" class="form-label">valor 1</label>
              <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor2" class="form-label">valor 2</label>
              <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $n1 = $_POST["valor1"];
        $n2 = $_POST["valor2"];

        if($n1 == $n2)
            echo "Os numeros são iguais : $n1";
        elseif($n1 < $n2)
            echo " Ordem crescente: $n1 , $n2";
        else
            echo "Ordem crescente: $n2, $n1";
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>