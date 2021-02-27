<head>
<link href="/css/app.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Alocação de Espaço</title>
</head>
<body>
    <div class="container">
        <h1>Detalhes da Locação: <?= $l->nome ?> </h1>
        <ul>
            <li>
                <b>Situação:</b> <?= $l->situacao ?>
            </li>
        </ul>
    </div>
</body>
</html>
