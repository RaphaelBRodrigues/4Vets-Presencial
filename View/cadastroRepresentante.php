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
        <legend>Cadastro</legend>
        <form method='post' action="../Controller/cadastroRepresentanteController.php">
        <table>
        <tr>
            <td class=''><label for="nome">Nome
</label></td>

                <td><input id='nome' name='nome' type="text"></td>

            </tr>
            <tr>
            <td class=''><label for="senha">Senha</label></td>

            <td><input id='senha' name='senha' type="password"></td>


            </tr>
            <tr>
            <td class=''><label for="email">Email</label></td>

            <td><input id='email' name='email' type="email"></td>


            </tr>
            <tr>
            <td class=''><label for="tel">Telefone</label></td>

            <td><input id='tel' name='tel' type="number"></td>

            <tr>
                <td>
                <select name="marca" id="marca">
    <option value="1">Marca 1</option>
    <option value="2">Marca 2</option>
    <option value="3">Marca 3</option>
    <option value="4">Marca 4</option>
    <option value="5">Marca 5</option>
    </select>
                </td>
            </tr>
  
            
        
        </table>
        <button type='submit'>Entrar</button>

        </form>
        
    </fieldset>
</body>
</html>