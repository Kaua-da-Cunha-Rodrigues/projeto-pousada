<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/reset.css">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/responsivo.css">
    <title>Página do Quarto</title>
</head>
<body>
    <?php 
        $img = $_GET['img'];
    ?>
    <header id="cabecalho">
        <div class="informacoes-empresa">
            <img src="src/img/logo3.png" alt="Logo Empresa" class="foto-header">
            <h1>Caminho da Praia</h1>
            <div id="centralizar-header">

            </div>
        </div>
    </header>
    <nav>   
            <a href="index.html">Home</a>
            <a href="index.html#quartos">Quartos</a>
            <a href="index.html#eventos">Eventos</a>
            <a href="index.html#galeria">Galeria</a>
            <a href="index.html#localizacao">Localização</a>
            <a href="index.html#rodape">Contatos</a>    
    </nav>
    <main>
         <section id="quarto">
            <article>
                <div class="conteudo-quarto">
                    <img src="src/img/<?php 
                        if($img == 1){
                            echo 'foto-quarto1.jpg';
                        }elseif($img == 2){
                            echo 'foto-quarto2.png';
                        }elseif($img == 3){
                            echo 'foto-quarto3.jpg';
                        }elseif($img == 4){
                            echo 'foto-quarto4.jpg';
                        }elseif($img == 5){
                            echo 'foto-quarto5.jfif';
                        }elseif($img == 6){
                            echo 'foto-quarto6.jpg';
                        }elseif($img == 7){
                            echo 'foto-quarto7.jfif';
                        }elseif($img == 8){
                            echo 'foto-quarto8.jpg';
                        }
                    ?>" alt="Imagem do Quarto">
                    <p id="descricao">
                        Você merece ter um bom descanso depois de um ano de muito trabalho. Por isso, nós indicamos a você que está de ferias por nossa cidade . Nós temos quartos com TV, frigobar, e ar condicionado.

                        Você que visita nossa ilha, de ferias ou a passeio, hospede-se em nossa pousada. Atendimento de primeira. Quartos e suítes com o máximo de conforto, privacidade e tranquilidade.
                        
                        Escolha perfeita para quem procura um cantinho para relaxar e curtir o clima praiano de Angra dos Reis. Privilegiadamente localizada bem na costeira do mar, a pousada tem por toda parte uma vista deslumbrante, para completar ainda mais a paisagem, tem um lindo deck com piscina de borda infinita, espreguiçadeiras, e redes espalhadas para quem quiser descansar e se deslumbrar com o cenário.


                        A pousada possui uma localização excelente, uma equipe fenomenal. Possuem passeios saindo da própria pousada, ou seja, você encontra tudo em apenas um local.


                    </p>
                    <div class="detalhes-quarto">
                        <form action="back/login/gravar.php" method="post">
                            <p>Nome</p>
                            <input type="text" name="nome">
                            <p>Email</p>
                            <input type="text" name="email">
                            <p>Telefone</p>
                            <input type="number" name="tel">
                            <p>Check-in</p>
                            <input type="date" name="data">
                            <p>Check-out</p>
                            <input type="date" name="data2">
                            <p> Informe o seu sexo:</p>
                            <div class="sexualidade">
                                <p>Masculino</p><input type="radio" name="sexo" value="m">
                            </div> 
                            <div class="sexualidade">
                                <p>Feminino</p><input type="radio" name="sexo" value="f">
                            </div> 
                            <div class="sexualidade">
                                <p>Prefiro não declarar</p><input type="radio" name="sexo" value="naodeclarado"> 
                            </div>
                            <p>Escolha o tipo de acomodação:</p>
                            <select name="quartos" id="quartos">
                            <option value="#">Selecione</option>
                            <option value="Suite">Suite</option>
                            <option value="Quarto Duplo Standard">Quarto Duplo Standard</option>
                            <option value="Suite de Luxo">Suite de luxo</option>
                            </select>
                            <input type="submit" value="Reservar">
                        </form>
                    </div>
                </div>
            </article>
         </section>
         <section id="comentarios">
            <article>
                
            </article>
         </section>
    </main>
    <footer id="rodape" class="rodape-quarto">
        <div class="endereco-e-afins">
            <p>R. Getúlio Vargas - Vila do Abraão, Angra dos Reis - RJ</p>
        </div>
        <div class="contatos">
            <p>Email: caminhodapraia@gmail.com</p>
            <p>Whatsapp: (24) 99999-9999</p>
            <p>Telefone: 24 3377-2020</p>
            <button id="botao-admin"><a href="back/login/login.php">Login</a></button>
        </div>
    </footer>   
</body>
</html>