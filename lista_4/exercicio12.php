<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerador de Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> 
<div class="container py-3">
    <h1>Gerador de Senha</h1>
    
    <form method="post">
        <p>Clique no botão abaixo para criar uma senha segura de 8 caracteres.</p>
        <button type="submit" name="gerar" class="btn btn-primary">Gerar Senha</button>
    </form>

    <div class="mt-4">
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $letras= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $senha = '';
            
            
            for ($i = 0; $i < 8; $i++) {
                $adcionar = random_int(0, strlen($letras) - 1);
                
                $senha .= $letras[$adcionar];
            }

            echo "<p>Sua senha gerada é:$senha</p>";
            
        }
    ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>