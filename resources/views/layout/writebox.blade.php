<div id="write" class="form">
    <form action="/" method="post">
        <h3>Escreva para o seu eu do futuro:</h3>
        <textarea class="form-control" id="inputMessage" placeholder="Querido eu do futuro, " style="height: 12rem">Querido eu do futuro, </textarea>
        <h3>Receber em:</h3>
        <ul class="time-receive data">
            <li class="bttn ayr">
                <input name="tempo" type="radio" id="ayr">
                <label for="ayr">1 ano</label>
            </li>
            <li class="bttn thryrs">
                <input name="tempo" type="radio" id="thryrs">
                <label for="thryrs">3 anos</label>
            </li>
            <li class="bttn fvyrs">
                <input name="tempo" type="radio" id="fvyrs">
                <label for="fvyrs">5 anos</label>
            </li>
            <li class="bttn persdate">
                <input name="tempo" type="radio" id="custom">
                <label for="persdate">Escolher data: </label>
                <input name="tempo" type="date" id="persdate" name="persdate">
            </li>
        </ul>
        <br/>
        <h3>Sua carta será:</h3>
        <ul class="time-receive data">
            <li class="bttn ayr">
                <input name="letter" type="radio" id="pub_anon">
                <label for="pub_anon">Pública e anônima</label>
            </li>
            <li class="bttn thryrs">
                <input name="letter" type="radio" id="privt">
                <label for="privt">Privada</label>
            </li>
        </ul>
        <br/>
        <h3>Seu e-mail:</h3>
        <input class="form-control" id="inputEmail" type="email" placeholder="Seu e-mail aqui..." />
        <input type="submit" value="Enviar para o futuro " class="bttn-enviar">
    </form>
     </div>