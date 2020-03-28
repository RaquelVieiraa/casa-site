<input type="hidden" name="user_id" value="{{ Auth::id() }}">
<div class="input-field">
    <label for="assunto">Assunto</label>
    <input type="text" name="assunto" value="{{ isset($registro->nome) ? $registro->nome : '' }}" placeholder="Digite aqui o assunto da sugestão">
</div>
<div class="input-field">
    <label for="mensagem">Mensagem</label>
    <textarea type="text" name="mensagem" placeholder="Descreva aqui sua sugestão">{{ isset($registro->descricao) ? $registro->descricao : '' }}</textarea>
</div>
<div class="input-field">
    <label for="email">Email</label>
    <input type="text" name="email" value="{{ isset($registro->email) ? $registro->email : '' }}" placeholder="Digite aqui o seu email">
</div>
<div class="input-field">
    <label for="telefone">Celular/whatsapp</label>
    <input type="text" name="telefone" value="{{ isset($registro->telefone) ? $registro->telefone : '' }}" placeholder="Digite aqui o seu número do celular">
</div>
