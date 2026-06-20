<?php
if(isset($_GET['numero'])) {
    echo $_GET['numero'] * 2;
} else {
    echo "O dado não foi recebido.";
}
?>