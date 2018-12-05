$(function() {
  $('#AddNewPage').submit(function(event) {
    $(".loader").show();
    event.preventDefault();
    var formEl = $(this);
    var submitButton = $('button[type=submit]', formEl);
    $.ajax({
      type: 'POST',
       url: formEl.prop('action'),
       accept: {
        javascript: 'application/javascript'
       },
      data: formEl.serialize(),
       beforeSend: function() {
        submitButton.prop('disabled', 'disabled');
       }
      }).done(function(data) {
        
        setTimeout(function() 
        {
         //submitButton.prop('disabled', false);
         $(".loader").hide();
         
      }, 2000);
      
    });
  });

  // bind 'myForm' and provide a simple callback function
  $("#page_title").keyup(function(event) {
      var stt = $(this).val();
          str = stt.replace(/\s+/g, '-').toLowerCase();
          $("#page_slug").val(str);
          $("#page_slug_lebel").text(str);
            
   });

});


