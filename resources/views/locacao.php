<html>
<head>
<link href="/css/app.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Alocação de Espaço</title>
</head>
<body>
    <body>
    <div class="container">
        <h1>Listagem de produtos</h1>
        <table class="table table-striped table-bordered table-hover">
            <?php foreach ($locacao as $l): ?>
                <tr>
                    <td><?= $l->nome ?></td>
                    <td><?= $l->situacao ?></td>
                    <td>
                        <a href="/alocacao/mostra/<?= $l->id ?>">
                            <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>
                    <td>
                        <a href="/alocacao/formulario/<?= $l->id ?>">
                            <span class="glyphicon glyphicon-plus"></span>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
        </div>
</html>