<!DOCTYPE html>
<html>
<head>
<title>Formulário de Contato</title>
</head>
    <body>
        <h2>Contato</h2>
            <p>Preencha o formulário abaixo para falar com nossa equipe de atendimento.</p>
                <form action="pagina4.php" method="">
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome aqui..." required><br>
                        <label for="email">E-mail:</label><br>
                        <input type="email" id="email" name="email" placeholder="Digite seu email aqui..." required><br>
                            <label for="tel">Telefone:</label><br>
                            <input type="tel" id="assunto" name="assunto" placeholder="Telefone (opicional)"><br>
                                <label for="mensagem">Mensagem:</label><br>
                                <textarea id="mensagem" name="mensagem" rows="4" cols="50" placeholder="Digite sua mensagem aqui..."></textarea><br>
                                    <input type="submit" value="Enviar">
</form>
    <style>
        body{
                background-image: url('img04.webp');
            }
            form { 
                    font: normal 30px arial , helvetica, sans-serif;
                    position: absolute;
                    top:60%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    text-align: center;
                    color: white;
                }
                h2{
                    font: normal 50px arial black, helvetica, sans-serif;
                    position: absolute;
                    top: 16%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    text-align: center;
                    color: white;
                }
                a{
                    font: normal 35px arial , helvetica, sans-serif;
                    position: absolute;
                    top: 97%;
                    left: 15%;
                    transform: translate(-50%, -50%);
                    text-align: center;
                    color: white;
                    text-decoration: none
                    
                }
                p {
                    font: normal 145x arial , helvetica, sans-serif;
                    position: absolute;
                    top:27%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    text-align: center;
                    color: white;
                }
</style>
</style>
<a href="index.php"><strong>Home</strong></a>
</body>
</html>