<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/OnPoint_PAO.png" type="image/x-icon">
    <!-- Font Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Biblioteca de Icons - Linear Icons -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Título -->
    <title>OnPoint - Home</title>q
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/OnPoint_PAO.png" alt="">
        </div>
        <div class="nav-bar">
            <ul>
                <li class="item">HOME</li>
                <li class="dropdown">
                    <button onclick="menuDrop()" class="dropbtn">MERCADO</button>
                    <div id="dropdown" class="dropdown-content">
                    <a href="../login/index.html">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                    </div>
                </li>
                <li class="item">CONTATO</li>
                <li class="item">SOBRE NÓS</li>
            </ul>
        </div>
        <div class="action">
            <ul>
                <li class="item">CADASTRE-SE</li>
                <li class="item">LOGIN</li>
            </ul>
        </div>
        <div class="menu-bars">
            <svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        </div>
    </header>
    <main>
        <div class="container-cadastro">
            <div class="nomeCard fontLow">
                C A D A S T R E - S E
                <hr color="#8C52FF" width="70%">
            </div>
            <form class="formCadastro" action="" method="post">
                <div class="container-input-cadastro">
                    <label for="nomeUsuario">Nome de Usuário</label><br>
                    <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome de Usuário" required>
                </div>
                <div class="container-input-cadastro">
                    <label for="email">E-mail:</label><br>
                    <input type="email" name="email" id="email" placeholder="you@example.com" required>
                </div>
                <div class="container-input-cadastro">
                    <label for="senha">Senha:</label><br>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    <span class="lnr lnr-eye cadastro-icon"></span>
                </div>
                <div class="container-input-cadastro">
                    <label for="confSenha">Confirme a senha:</label><br>
                    <input type="password" name="ConfSenha" id="confSenha" placeholder="Confirma senha" required>
                </div>
                <div class="container-radios">
                    <label>É para sua empresa ou para você?</label><br>
                    <div class="container-input-cadastro radios">
                        <div class="itemRadio">
                            <div class="label">
                                <input type="radio" name="userItem" id="userItem">
                            </div>
                            <div class="label">Para mim</div>
                        </div>
                        <div class="itemRadio">
                            <div class="label">
                                <input type="radio" name="userItem" id="userItem">
                            </div>
                            <div class="label">Para minha empresa</div>
                        </div>
                    </div>
                </div>
                <div class="container-input button-alinha-cadastro">
                    <button type="submit" name="entrar" id="entrar">ENTRAR</button>
                    <a class="aItems" href="#">Já possui uma conta?</a>
                </div>
            </form>
        </div>
    </main>
    <footer>
        
    </footer>
    <script src="../scripts/script.js"></script>
</body>
</html>