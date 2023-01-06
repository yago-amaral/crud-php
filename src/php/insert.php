<form method="POST" action=".">
    <h2>Novo registro</h2>
    <p>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required autocomplete="off">
    </p>
    <p>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required autocomplete="off">
    </p>

    <button type="submit" name="insert-form-submitted" value="yes">Inserir</button>
</form>