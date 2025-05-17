<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Visitantes</title>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <link rel="stylesheet" href="styles.css">
  <script src="script.js"></script>
</head>
<body>
  <h1>Olá visitante, realize seu cadastro aqui:</h1>
  <div>
    <form id="create_guest" method="POST" action="process_data.php">
      <div id="inputs">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name">
        <span id="name-error"></span>

        <label for="email">Email:</label>
        <input id="email-error" type="email" id="email" name="email">

        <label for="date">Data da Visita</label>
        <input type="date" id="date" name="date">
        <span id="date-error"></span>

        <button id="submit">Cadastrar</button>
      </div>
    </form>
  </div>
</body>
</html>