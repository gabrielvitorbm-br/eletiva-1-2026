<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Informe uma palavra </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Informe uma palavra </h1>
<form method="post">
<div class="mb-3">
              <label for="palavra" class="form-label">informe uma palavra</label>
              <input type="text" id="palavra" name="palavra" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){
      $palavra = $_POST["palavra"];
      
    /*preg_match_all('/[A-Z]/', $palavra, $maiusculas);
    preg_match_all('/[a-z]/', $palavra, $minusculas);

    $txt_maiusculas = implode(", ", $maiusculas[0]);
    $txt_minusculas = implode(", ", $minusculas[0]);

    echo "<p>as letras maiusculas são: $txt_maiusculas</p>";
    echo "<p>as letras mainusculas são: $txt_minusculas</p>";*/
    echo mb_strtoupper($palavra);
    echo "<p></p>";
    echo mb_strtolower($palavra);
}


?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>