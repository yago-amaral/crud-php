<?php

$id = $_GET["id"];
$result = $db->query("SELECT id, nome, email FROM usuarios WHERE id = $id;");
$record = $result->fetch();

if (!$record) {
    header("Location: .");
    exit();
}

?>

<form method="POST" action=".">
    <p>
        <label for="id">ID:</label>
        <input type="text" name="id" id="id" readonly value="<?=$record["id"]?>">
    </p>
    <p>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?=$record["nome"]?>" required autocomplete="off">
    </p>
    <p>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="<?=$record["email"]?>" required autocomplete="off">
    </p>

    <button type="submit" name="update-form-submitted" value="yes">Atualizar</button>
</form>