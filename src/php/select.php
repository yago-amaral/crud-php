<?php
    require_once "./src/php/conn.php";

    $resultString = "";
    $result = $db->query("SELECT nome, email, id FROM usuarios;");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    if ($rows):
?>
<table>
    <tr>
        <th>Usuário</th>
        <th>E-mail</th>
        <th colspan="2">Ações</th>
    </tr>
<?php
        foreach ($rows as $row) {
            $resultString .= "<tr>";
            foreach ($row as $column => $value) {
                if ($column == "id") {
                    $resultString .= "
                        <td>
                            <a href=\"?op=update&id=$value\">Editar</a>
                        </td>
                    ";
                    $resultString .= "
                        <td>
                            <a href=\"?op=delete&id=$value\">Deletar</a>
                        </td>
                    ";
                } else {
                    $resultString .= "<td>$value</td>";
                }
            }
            $resultString .= "</tr>";
        }
        echo $resultString;
?>
</table>

<?php
    else:
?>
<h3>Nenhum dado encontrado</h3>
<?php
    endif;
?>

<footer>
    <a href="?op=insert" class="footer-link">
        <strong>Inserir novo registro</strong>
    </a>
</footer>