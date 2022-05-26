<?php
$link = mysqli_connect('localhost', 'a0670959_redred', 'red');
mysqli_select_db($link,'a0670959_red');

$tableName = $_POST['table'];
$fieldName = $_POST['field'];
$value = $_POST['value'];
$id = $_POST['id'];

$query = "UPDATE red SET $fieldName = '$value' WHERE id = $id";
$result = mysqli_query($link,$query);
?>