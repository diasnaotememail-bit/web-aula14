<?php
if(isset($_POST['numero'])) {
    echo $_POST['numero'] * 4;
} else {
    echo "O dado não foi recebido.";
}
?>