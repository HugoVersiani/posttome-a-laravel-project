<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Post to me!</title>
</head>

<body>
    <section>
        <nav id="mainNav">
            <div class="logo">
                <a href="/posttome/index.html"><img src="{{asset('images/logotipo.png')}}" alt="Logotipo da posttome" width="110"></a>
            </div>
            <ul class="nav">
                <li>
                    <div class="linha"><a href="#">Ler cartas públicas</a></div>
                </li>
                <li>
                    <div class="linha"><a href="/posttome/index.html#write">Escrever uma carta</a></div>
                </li>
                <button><a href="/posttome/register.html">entrar</a></button>
            </ul>
            <button id="btn-mobile">
                <span id="hamburguer">
                </span>
            </button>
        </nav>
        <div class="main-div">
            <div>
                <div class="div-texto">
                    <blockquote class="blockquote1">
                        <h1>"Um favor ao meu autoconhecimento":</h1>
                        <p>"Eu adoro a experiência! Já me enviei 5 e-mails e sempre é uma surpresa. Acabo me esquecendo e em um dia qualquer recebo um e-mail escrito pelo meu eu do passado. Torna-se um processo reflexivo e profundo. É um singelo favor para
                            o meu autoconhecimento todos os anos."</p>
                        <span>-Huki Malhius, membro desde 2021</span>
                    </blockquote>
                    <div class="info">
                        <span>Mais de 105120 de <br> cartas foram enviadas em 2025</span>
                        <div class="linha1"></div>
                        <div class="ads"><span style="color: grey">Ads</span></div>
                    </div>
                </div>
            </div>
            <div id="write" class="form">
            <form action="/" method="post">
                <h3>Escreva para o seu eu do futuro:</h3>
                <textarea class="form-control" id="inputMessage" placeholder="Querido eu do futuro, " style="height: 12rem">Querido eu do futuro, </textarea>
                <h3>Receber em:</h3>
                <ul class="time-receive data">
                    <li class="bttn ayr">
                        <input type="radio" id="ayr">
                        <label for="ayr">1 ano</label>
                    </li>
                    <li class="bttn thryrs">
                        <input type="radio" id="thryrs">
                        <label for="thryrs">3 anos</label>
                    </li>
                    <li class="bttn fvyrs">
                        <input type="radio" id="fvyrs">
                        <label for="fvyrs">5 anos</label>
                    </li>
                    <li class="bttn persdate">
                        <label for="persdate">Escolher data: </label>
                        <input type="date" id="persdate" name="persdate">
                    </li>
                </ul>
                <br/>
                <h3>Sua carta será:</h3>
                <ul class="time-receive data">
                    <li class="bttn ayr">
                        <input type="radio" id="pub_anon">
                        <label for="pub_anon">Pública e anônima</label>
                    </li>
                    <li class="bttn thryrs">
                        <input type="radio" id="privt">
                        <label for="privt">Privada</label>
                    </li>
                </ul>
                <br/>
                <h3>Seu e-mail:</h3>
                <input class="form-control" id="inputEmail" type="email" placeholder="Seu e-mail aqui..." />
                <input type="submit" value="Enviar para o futuro " class="bttn-enviar">
            </form>
             </div>
        </div>

        <div id="preloader">
            <div class="inner">
                <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
                <div id="loader">
                    <div class="bolinha"></div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/preloader.js"></script>
    <script src="js/script.js"></script>
    
</body>

</html>