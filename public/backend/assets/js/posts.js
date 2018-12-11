$(function() {
  $('#AddNewPost').submit(function(event) {
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
        var obj = jQuery.parseJSON(data);
        alert(obj.id);
        setTimeout(function() 
        {
          var url = base_url+'admin/posts/edit/'+obj.lang+'/'+obj.id;
           $(".loader").hide();
           window.location.href = url;
         
        }, 2000);
      
    });
  });

  // bind 'myForm' and provide a simple callback function
  $("#post_title").keyup(function(event) {
      var stt = $(this).val();
          str = stt.replace(/\s+/g, '-').toLowerCase();
          $("#post_slug").val(str);
          $("#post_slug_lebel").text(str);
            
   });

});


