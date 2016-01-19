<?php
$dbh = new PDO('mysql:host=localhost;dbname=test','root', '');
foreach($_POST['chk'] as $selected){
    echo $selected."</br>";
}
?>