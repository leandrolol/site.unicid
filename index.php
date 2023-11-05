<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
</head>
    <body>
        <style>
            body {
                background-image: url('pagina1.jpg');   
                
                font: normal 30px arial, helvetica, sans-serif;
                }
            h1 { 
                        position: absolute;
                        top: 38%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        text-align: center;
                        color: #fff;
                }
            h2 { 
                        position: absolute;
                        top: 75%;
                        left: 20%;
                        transform: translate(-50%, -50%);
                        text-align: center;
                        color: #fff;
                        font: normal 28px arial, helvetica, sans-serif;
                }
            form {
                position: absolute;
                top: 60%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align:center ;
                
                }
            footer p {
                    position: absolute;
                        top: 96%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        text-align: center;
                        color: #fff;
                        font: normal 14px arial, helvetica, sans-serif;
                }
                a{
                    font: normal 35px arial black, helvetica, sans-serif;
                    position: absolute;
                    top: 5.5%;
                    left: 60%;
                    transform: translate(-50%, -50%);
                    text-align: center;
                    color: red;
                    text-decoration: none;
                }
                p{
                    font: normal 35px arial black, helvetica, sans-serif;
                    position: absolute;
                    top: 1%;
                    left: 40%;
                    transform: translate(-50%, -50%);
                    text-align: center;
                    color: red;
                    text-decoration: none;
                }
</style>
    <h1>Veja a seguir as melhores 5 séries em alta de 2023 por gênero  </h1>
        <h2>Temos as Top 5 de:<br><br>Terror<br>Romance<br>Ação<br>Comédia<br>Suspense<br></h2>
            <form action="pagina2.php" method="get">
                <input type="text" name="name" value="">
                <input type="submit" value="Buscar">
</form>
</body>
    <a href="pagina5.php">Quem Somos</a>
        <p><a href="pagina3.php">Contato</a></p>
            <div class="rodape">
            <footer>
                <p>
                    &copy; Ranking de Séries - Todos os direitos reservados 2023
</p>
</footer>
</div>
</html>