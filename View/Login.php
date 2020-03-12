<!DOCTYPE html>
<html lang="en">
<head>  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Login</legend>
        <form action="../Controller/LoginController.php">
        <table>
        <tr>
            <td class='material-icons'><label for="senha">format_bold
</label></td>

                <td><input id='nome' name='nome' type="text"></td>

            </tr>
            <tr>
            <td class='material-icons'><label for="senha">dialpad</label></td>

            <td><input id='senha' name='senha' type="password"></td>


            </tr>
        
        </table>
        <button type='submit'>Entrar</button>
        <a href="Cadastro.php">Não tenho cadastro!</a>

        </form>
        
    </fieldset>
</body>
</html>