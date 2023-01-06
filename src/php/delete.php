<?php

$id = $_GET["id"] ?? 0;

if ($id) {
    $db->query("DELETE FROM usuarios WHERE id = '$id';");
}

header("Location: .");
exit();
