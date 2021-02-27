<html>
    <head>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Cadastro</title>
    </head>
    <body>
        <h1>Cadastro</h1>

        <form action='/usuario/adicionar'>
            <label>Nome:</label>
            <input name='nome' id='nome' type='text'>
            <br><br>
            <label>Email:</label>
            <input name='email' id='email' type='text'>
            <br> <br>
            <label>Senha:</label>
            <input name='senha' id='senha' type='password'>
            <br> <br>
            <button type='submit'>Entrar</button>
        </form>
    </body>

</html>