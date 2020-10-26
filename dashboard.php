<?php
    require('db/DAOUsuario.php');

    $res = listarUsuarios();
?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body class="blue accent-4">
        <div class="container">
        <h1 class="white-text">Usuários</h1>

        <table border="1">
            <tr>
                <th class="white-text">Alterar</th>
                <th class="white-text"><i class="small material-icons">insert_chart</i> Código</th>
                <th class="white-text"><i class="small material-icons">account_circle</i> Nome</th>
                <th class="white-text"><i class="small material-icons">email</i> E-mail</th>
                <th class="white-text">Apagar</th>
            </tr>
<?php while($linha = mysqli_fetch_assoc($res)) { ?>
            <tr>
                <td><a class="waves-effect waves-light btn href="AlterarUsuario.php?codigo=<?= $linha['codigo'] ?> "><i class="material-icons left">add_circle_outline</i>Alterar</button></td>
                <td class="white-text"><?= $linha['codigo'] ?></td>
                <td class="white-text"><?= $linha['nome'] ?></td>
                <td class="white-text"><?= $linha['email'] ?></td>
                <td><a class="waves-effect waves-light btn href="ExcluirUsuario.php?codigo=<?= $linha['codigo'] ?> "><i class="material-icons left">delete</i>Excluir</button></td>

            </tr>
<?php } ?>
        </table>   


        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

        </div>
    </body>
    </html>