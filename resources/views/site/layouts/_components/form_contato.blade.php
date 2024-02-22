<form action={{ route('site.contato') }} method="POST">
    @csrf
    <input name="nome" type="text" placeholder="Nome">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" >
    <br>
    <input name="email" type="text" placeholder="E-mail" >
    <br>
    <select name="motivo_contato" >
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" >Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" >ENVIAR</button>
</form>

<div style="position:absolute, top:0px, left:0px, width:100%; background: red">
    <pre>
        {{print_r($errors)}}
    </pre>
</div>
