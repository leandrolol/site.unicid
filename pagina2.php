*<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ranking</title>
</head>
    <body>
        <style>
            body{
                background-image: url('img03.png');
            }
                h1 { 
                    font: normal 40px arial black, helvetica, sans-serif;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    text-align: center;
                    color: #faf0e6
                }
            p{
                    font: normal 35px arial, helvetica, sans-serif;
                    position: absolute;
                    top: 90%;
                    left: 91%;
                    transform: translate(-50%, -50%);
                    text-align: center;
                    color: #fff;
                    text-decoration: none;
                }
            a{
                font: normal 35px arial, helvetica, sans-serif;
                position: absolute;
                top: 95%;
                left: 11%;
                transform: translate(-50%, -50%);
                text-align: center;
                color: #fff;
                text-decoration: none;
                }
            img{
                
                position: absolute;
                top: 155%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
</style>
    <?php
        $time = $_GET['name'];
            switch ($time) {
                case 'Terror':
                    echo "<h1>1° The Changeling - Sombras de Nova York <br>
                            2º O Gabinete de Curiosidades de Guillermo del Toro<br>
                            3º Origem<br>
                            4º Gêmeas - Mórbida Semelhança<br>
                            5º What We Do In The Shadows</h1>";
                    break;
                case 'Romance':
                    echo "<h1>1° Rainha Charlotte: Uma História Bridgerton<br>
                            2º Sorriso Real<br>
                            3º Além do Guarda-Roupa<br>
                            4º Intensivão de Amor<br>
                            5º Vejo você na proxima vida</h1>";
                    break;
                case 'Ação':
                    echo "<h1>1° A Batalha dos 100 <br>
                            2º O Agente Noturno<br>
                            3º Diamantes Brutos<br>
                            4º A Diplomata<br>
                            5º Caleidoscópio</h1>";
                    break;
                case 'Comédia':
                    echo "<h1>1° Brooklyn Nine-Nine<br>
                            2º The Big Show Show<br>
                            3º O Método Kominsky<br>
                            4º Fuller House<br>
                            5º Amor Ocasional</h1>";
                    break;
                case  'Suspense':
                    echo "<h1>1° Amor e Morte<br>
                            2º Depois da Cabana<br>
                            3º Entre Estranhos<br>
                            4º Operação Lioness<br>
                            5º DNA do crime</h1>";
                    break;
                    default:
                echo "<h1>Infelizmente o gênero escolhido não se encontra no Top 5 das melhores séries</h1>";
                    break;
                }
?> 
    <p><a href="pagina3.php"><strong>Contato</strong></a></p>
        <a href="index.php"><strong>Home</strong></a>
</body>
</html>