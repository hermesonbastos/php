<?php

// direcionar logs ao rodar o servidor "php -S localhost:8000 2>arquivo.php"
// direcionar conteúdo do post para o arquivo de logs
error_log(print_r($_POST, true));

$errors = [];

if(empty($_POST["name"])) {
  $errors['name'] = "Nome obrigatório";
}

if(empty($_POST["email"])) {
  $errors["email"] = "Email obrigatório";
}

if(empty($_POST["date"])) {
}

echo json_encode(['success' => true, 'errors' => $errors]);
exit;