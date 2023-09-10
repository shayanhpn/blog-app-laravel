$(document).ready(function(){
    $('.login-alert').fadeOut(5000);
})

$('#reload-captcha').click(function() {

    $.get('/reload-captcha', function(data) {
      $('#captcha-image').attr('src', data);
    });
  
  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })


