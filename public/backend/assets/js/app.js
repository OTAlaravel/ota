$(function() {
  $("#sitelang").change(function(event) {
     //$(".loader").show();
      var lang =this.value;
      //alert(lang);
      var values = {
                  "_token": token,
                  'locale': lang
          };
       $.ajax({
          type: 'POST',
           url:base_url+'admin/setlang' ,
           data: values,
          }).done(function(data) {
            setTimeout(function() 
            {
             $('#lang_code').val(lang);
             $(".loader").hide();
             location.reload();
          }, 2000);  
      });
   });
});

 window.onload= function(){
  setTimeout(
    function() 
     {
         $(".loader").hide();
       }, 2000);   
   }