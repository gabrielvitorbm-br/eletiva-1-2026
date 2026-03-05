<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>menor numero</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>menor numero</h1>
<form method="post">
<div class="mb-3">
              <label for="valor1" class="form-label">informe o primeiro numero</label>
              <input type="number" id="1valor" name="1valor" class="form-control" required="">
            </div><div class="mb-3">
              <label for="2valor" class="form-label">infome o segundo valor</label>
              <input type="number" id="2valor" name="2valor" class="form-control" required="">
            </div><div class="mb-3">
              <label for="3valor" class="form-label">infome o terceiro valor</label>
              <input type="number" id="3valor" name="3valor" class="form-control" required="">
            </div><div class="mb-3">
              <label for="4valor" class="form-label">informe o quarto valor</label>
              <input type="number" id="4valor" name="4valor" class="form-control" required="">
            </div><div class="mb-3">
              <label for="quinto" class="form-label">informe o quinto valor</label>
              <input type="number" id="5valor" name="5valor" class="form-control" required="">
            </div><div class="mb-3">
              <label for="6 valor" class="form-label">informe o sexto valor</label>
              <input type="number" id="6valor" name="6valor" class="form-control" required="">
            </div><div class="mb-3">
              <label for="7valor" class="form-label">informe o setimo valor</label>
              <input type="number" id="7valor" name="7valor" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $valores=
      [
        $valor1 = $_POST["1valor"],
        $valor2 = $_POST["2valor"],
        $valor3 = $_POST["3valor"],
        $valor4 = $_POST["4valor"],
        $valor5 = $_POST["5valor"],
        $valor6 = $_POST["6valor"],
        $valor7 = $_POST["7valor"]
      ];
      $menorvalo = min($valores);
      $posicao = array_search($menorvalo, $valores) + 1;
      echo "<p>O menor valor é $menorvalo que esta na posição $posicao</p>";

    }

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>