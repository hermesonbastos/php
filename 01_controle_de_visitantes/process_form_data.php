<?php

// direcionar logs ao rodar o servidor "php -S localhost:8000 2>arquivo.php"
// direcionar conteúdo do post para o arquivo de logs
error_log(print_r($_POST, true));

function validateRequiredFields(array $fields, array $data): array {
  $errors = [];
  foreach ($fields as $field => $message) {
    if(empty($data[$field])) {
      $errors[$field] = $message;
    }
  }
  return $errors;
}

$requiredFields = [
  'name' => 'Nome obrigatório',
  'email' => 'Email obrigatório',
  'date' => 'Data obrigatória',
];

$errors = validateRequiredFields($requiredFields, $_POST);

$response = [
  'sucess' => empty($errors),
  'errors' => $errors
];


header('Content-Type: application/json');
echo json_encode($response);
exit;