<nav id="mainNav">
    <div class="logo">
        <a href="<?= url('/') ?>"><img src="{{asset('images/logotipo.png')}}" alt="Logotipo da posttome" width="110"></a>
    </div>
    <ul class="nav">
        <li>
            <div class="linha"><a href="<?= url('/cartas-publicas') ?>">Ler cartas públicas</a></div>
        </li>
        <li>
            <div class="linha"><a href="<?= url('/escrever') ?>">Escrever uma carta</a></div>
        </li>
        <button><a href="/login">entrar</a></button>
    </ul>
    <button id="btn-mobile">
        <span id="hamburguer">
        </span>
    </button>
</nav>