<?php
require "../models/usuario.php";
require "../config/database.php";
require "../controlers/controllerUsuario.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./views/style.css">
</head>
<body>
 
    <header>
        <nav class="container">
           
            <div class="logo-box">
                <a href="./index.php">
                    <img src="./imgs/icone.png" alt="Logo" class="logo">
                </a>
            </div>
         
            <div class="parent-link">
                <a href="#" class="social-links">Sobre</a>
                <a href="#" class="social-links">Projetos</a>
                <a href="#" class="social-links">Experiência</a>
                <a href="#" class="social-links">Contato</a>
            </div>
           
            <div class="social-icons">
                <a href="#" class="social-icon"><img src="./imgs/ig_icone.png" alt="Instagram"></a>
                <a href="#" class="social-icon"><img src="./imgs/Twitter-Logo.png" alt="Twitter"></a>
                <a href="#" class="social-icon"><img src="./imgs/github.png" alt="GitHub"></a>
            </div>
        </nav>
    </header>
 
 
   
    <div class="form">
        <form action="#" class="sub-form">
            <div class="upper-form">
                <h2>Formulario de Login</h2>
 
             
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="Nome" required><br>
 
               
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="Senha" required><br>
 
               
                <a href="home.php" class="custom-link">Login</a>
            </div>
 
         
            <a href="index.php" class="voltar">Voltar</a>
 
         
            <div class="button-form">
                <p>Você não tem conta? <a href="cadastro.php" class="Cadastrar-se">Cadastrar-se</a></p>
               
            </div>
        </form>
    </div>    
    <footer>
    <div class="footer-container">
        <div class="footer-links">
            <h3>Links Rápidos</h3>
            <ul>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Experiência</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
       
        <div class="footer-social">
            <h3>Redes Sociais</h3>
            <ul>
                <li><a href="https://www.instagram.com" target="_blank">
                    <img src="./imgs/ig_icone.png" alt="Instagram" class="social-icon">
                </a></li>
                <li><a href="https://twitter.com" target="_blank">
                    <img src="./imgs/Twitter-Logo.png" alt="Twitter" class="social-icon">
                </a></li>
                <li><a href="https://github.com" target="_blank">
                    <img src="./imgs/github.png" alt="GitHub" class="social-icon">
                </a></li>
            </ul>
        </div>
       
        <div class="footer-contact">
            <h3>Contato</h3>
            <p>Email: <a href="mailto:contato@dominio.com">Higuinha@gmail.com</a></p>
            <p>Telefone: (67) 56311-8969</p>
        </div>
    </div>
   
    <div class="footer-bottom">
        <p>&copy; 2024 Biblioteca141. Todos os direitos reservados.</p>
    </div>
</footer>
       
</body>
</html>
 