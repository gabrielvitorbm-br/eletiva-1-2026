<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digite uma frase</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Digite uma frase</h1>
<form method="post">
<div class="mb-3">
              <label for="frase" class="form-label">Escreva um frase</label>
              <textarea id="frase" name="frase" class="form-control" rows="4" required=""></textarea>
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $frase = $_POST["frase"];
        $total = str_word_count($frase);

        $palavra = explode(" ", $frase);

        usort($palavra,function($a,$b){
            
            return mb_strlen($b) - mb_strlen($a);

    });
    
    $maior = $palavra[0];

    echo "<p>a quantidade de palavras é : $total, e a maior palavra é $maior</p>";



    }

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>