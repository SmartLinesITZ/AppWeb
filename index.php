<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="CSS/materialize.min.css">
    <link rel="stylesheet" href="CSS/sweetalert.css">
    <link rel="stylesheet" href="CSS/stylecss.css">
</head>
<body class="font-cover" id="login">
    <div class="container-login center-align">
        <div style="margin:15px 0;">
            <i class="material-icons large">account_circle</i>
            <p>Inicia sesión con tu cuenta</p>
        </div>
        <form action="controller/sesion/checkuser.php">
            <div class="input-field col s12">
                <input id="UserName" type="text" class="validate" name="usuario">
                <label for="UserName"><i class="material-icons">perm_identity</i>&nbsp;Usuario</label>
            </div>
            <div class="input-field col s12">
                <input id="Password" type="password" class="validate" name="password">
                <label for="Password"><i class="material-icons">lock</i>&nbsp;Contraseña</label>
            </div>
            <button class="waves-effect waves-teal btn-large amber accent-3">Ingresar &nbsp; <i class="material-icons"">send</i></button>
        </form>
        <div class="divider" style="margin: 20px 0;"></div>
        <a href="index.php">Regresar</a>
    </div>

    <script src="js/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    <script src="js/materialize.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
