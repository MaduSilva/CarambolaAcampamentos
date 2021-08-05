<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login CampFriend</title>
    <link rel="shortcut icon" href="./img/logo">
    <link rel="stylesheet" href="style/style.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <div class="login-page">
        <div class="form" method="post">
            <img class="logo-login" src="./img/logo" alt="Logo CampFriend">
          <form class="login-form">
            <input type="text" id="user" placeholder="Usuário"/>
            <input type="password" id="senha" placeholder="Senha"/>
            <button type="submit" onclick="return loginauth();">Logar</button>
            <br/>
           <a href="#">Cadastre-se</a></p>
          </form>
        </div>
      </div>
</body>
</html>