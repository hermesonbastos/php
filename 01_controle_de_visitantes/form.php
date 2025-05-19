<!DOCTYPE html>
<html lang="pt-BR" class="poppins-regular">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Visitantes</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="fonts.css">
  <script src="form.js"></script>
</head>
<body>
  <div id="form" class="form-guest center-content">
    <h1>Olá visitante, agende sua visita aqui:</h1>
    <form id="create_guest" class="form-guest__form" method="POST" action="process_form_data.php">
      <div class="form-guest__inputs">
        
        <div class="form-guest__input">
          <label class="form-guest__label" for="name">Nome:</label>
          <input class="form-guest__field" type="text" id="name" name="name">
          <span id="name-error" class="form-guest__error"></span>
        </div>
        
        <div class="form-guest__input">
          <label class="form-guest__label" for="email">Email:</label>
          <input class="form-guest__field" type="email" id="email" name="email">
          <span id="email-error" class="form-guest__error"></span>
        </div>
        
        <div class="form-guest__input">
          <label class="form-guest__label" for="date">Data da Visita</label>
          <input class="form-guest__field" type="date" id="date" name="date">
          <span id="date-error" class="form-guest__error"></span>
        </div>
        
        <button class="form-guest__button" id="submit">Cadastrar</button>
      </div>
    </form>
  </div>
  <div id="success-message" class="center-content hidden">
    <h1>Agendamento realizado com sucesso!</h1>
    <i class="fa-solid fa-check-double"></i>
  </div>
  </div>
</body>
</html>