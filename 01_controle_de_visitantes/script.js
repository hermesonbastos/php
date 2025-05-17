$(function() {
  $('#create_guest').on('submit', function (event) {
    event.preventDefault()

    var formData = $(this).serialize();

    $.ajax({
      type: 'POST',
      url: 'process_data.php',
      data: formData,
      success: function(response) {
        const errors = JSON.parse(response.errors);

        if(errors) {
          if(errors.email) {
            $('#email_error').html(errors)
          }
        }
      },
      error: function(xhr, status, error) {
        $('#response').html('Erro ao processar solicitação!');
      }
    });
    
  })
})