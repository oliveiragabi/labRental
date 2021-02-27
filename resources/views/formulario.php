<html>
<head>
<link href="/css/app.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Alocação de Espaço</title>
</head>
<body>
    <div class="container">
        <h1>Nova Alocação</h1>
        <form action="/alocacao/adiciona">
        <label>Entre com a data desejada: </label>
        <input class="form-control datepicker" type="date" name="data">
        <br>
        <table class="table table-striped table-bordered table-hover">
                <tr>
                    <td>M1 <input name="m1" class="checkbox" type="checkbox"></td>
                    <td>M2 <input name="m2" class="checkbox" type="checkbox"></td>
                    <td>M3 <input name="m3" class="checkbox" type="checkbox"></td>
                    <td>M4 <input name="m4" class="checkbox" type="checkbox"></td>
                    <td>M5 <input name="m5" class="checkbox" type="checkbox"></td>
                    <td>M6 <input name="m6" class="checkbox" type="checkbox"></td>
                </tr>
                <tr>
                    <td>V1 <input name="v1" class="checkbox" type="checkbox"></td>
                    <td>V2 <input name="v2" class="checkbox" type="checkbox"></td>
                    <td>V3 <input name="v3" class="checkbox" type="checkbox"></td>
                    <td>V4 <input name="v4" class="checkbox" type="checkbox"></td>
                    <td>V5 <input name="v5" class="checkbox" type="checkbox"></td>
                    <td>V6 <input name="v6" class="checkbox" type="checkbox"></td>
                </tr>
                <tr>
                    <td>N1 <input name="n1" class="checkbox" type="checkbox"></td>
                    <td>N2 <input name="n2" class="checkbox" type="checkbox"></td>
                    <td>N3 <input name="n3" class="checkbox" type="checkbox"></td>
                    <td>N4 <input name="n4" class="checkbox" type="checkbox"></td>
                    <td>N5 <input name="n5" class="checkbox" type="checkbox"></td>
                </tr>
        </table>
        <button>Alocar</button>
        </form>
        </div>
    </body>
</html>