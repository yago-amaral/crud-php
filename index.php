<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
    <div class="header">
        <h1>
            <a href="." class="home-link">
                <strong>C</strong><sub>reate</sub>
                <strong>R</strong><sub>ead</sub>
                <strong>U</strong><sub>pdate</sub>
                <strong>D</strong><sub>elete</sub>
            </a>
            
        </h1>
    </div>
    <div class="content">
        <?php
            require_once "./src/php/conn.php";

            $insertRequired = $_POST["insert-form-submitted"] ?? false;
            $updateRequired = $_POST["update-form-submitted"] ?? false;
            if ($insertRequired) {
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $db->query("INSERT INTO usuarios (nome, email) values ('$nome', '$email');");
            }

            if ($updateRequired) {
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $id = $_POST["id"];
                $db->query("UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = $id;");
            }

            $op = $_GET["op"] ?? "";
            switch ($op) {
                case "insert":
                case "update":
                case "delete":
                    require_once "./src/php/". $_GET["op"] .".php";
                    break;
                default:
                    require_once "./src/php/select.php";
            }
        ?>
    </div>
</body>
</html>