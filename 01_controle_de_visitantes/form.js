$(function() {
  $('#create_guest').on('submit', function (event) {
    event.preventDefault()

    var formData = $(this).serialize();

    clearAllErrors();

    $.ajax({
      type: 'POST',
      url: 'process_form_data.php',
      data: formData,
      success: function(response) {
        console.log(response)
        if(!handleFormResponse(response)) showSuccess();
      },
      error: function(xhr, status, error) {
        console.log(error);
      }
    });
    
  })

  function clearAllErrors() {
    setError('name', '');
    setError('email', '');
    setError('date', '');
  }

  function setError(field, message) {
    $(`#${field}-error`).html(message);
  }

  function showSuccess() {
    $('#form').addClass('hidden');
    $('#form').removeClass('center-content form-guest');
    $('#success-message').removeClass('hidden');
  }
  
  function handleFormResponse(response) {
    try {
      if(response.errors) {
        Object.entries(response.errors).forEach(([field, message]) => {
          setError(field, message);
        });
      }
    } catch (e) {
      console.error('Erro ao processar resposta:', e);
    }

    return !Object.entries(response.errors) > 0;
  }

})