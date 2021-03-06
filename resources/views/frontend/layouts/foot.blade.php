<script src="{{ asset('frontend/js/jquery.js') }}"></script> 
<!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --> 
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script> 
<!--<script type="text/javascript" src="js/stellarnav.min.js"></script> --> 
<script type="text/javascript" src="{{ asset('frontend/js/webslidemenu.js') }}"></script> 
<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script> 
<script src="{{ asset('frontend/js/wow.js') }}"></script> 
<script src="{{ asset('frontend/js/theme.js') }}"></script> 
<script src="{{ asset('frontend/js/t-datepicker.js') }}"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/froala_editor.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/align.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/code_beautifier.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/code_view.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/colors.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/draggable.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/emoticons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/font_size.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/font_family.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/image.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/file.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/image_manager.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/line_breaker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/link.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/lists.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/paragraph_format.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/paragraph_style.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/video.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/table.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/url.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/entities.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/char_counter.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/inline_style.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/save.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/fullscreen.min.js') }}"></script>
<!-- Gallery Load More and top script Script--> 
 @yield('script')
<script>   
 $(function () {
    $(".experience_box_load").slice(0, 6).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".experience_box_load:hidden").slice(0, 2).slideDown();
        if ($(".experience_box_load:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $(".navigation_sec").animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});
  $(function(){
    $('.editor').froalaEditor({
      enter: $.FroalaEditor.ENTER_P,
      initOnClick: false
    })
  });
    
    </script>
    
    <script>
    
$(function () {
    $(".inspiration_box_load").slice(0, 6).show();
    $("#loadMore_insp").on('click', function (e) {
        e.preventDefault();
        $(".inspiration_box_load:hidden").slice(0, 2).slideDown();
        if ($(".inspiration_box_load:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $(".navigation_sec").animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});
    
    </script>

<!-- sript for mobile search --> 
<script>
$(document).ready(function(){
    $("#search_toggle_open").click(function(){
        $("#mobile_search_area_toggle").toggle(300);
                $(".navigation_sec").addClass("nav_toggle_bg");
    });
        $("#wsnavtoggle").click(function(){
        $("#mobile_search_area_toggle").hide(300);
                $(".navigation_sec").removeClass("nav_toggle_bg");
    }); 
    
        $("#search_toggle_open").click(function(){
            
    });
    
});
</script> 
<!--<script>
 $(document).ready(function(){
    $('.t-datepicker').tDatePicker({
    });
  });
</script>--> 
<script type="text/javascript">
        
    </script> 
<!-- stiky_menu --> 

<script>
       wow = new WOW(
       {
       animateClass: 'animated',
       offset:       200
       }
       );
       wow.init();
  </script> 
<script>
//script to create sticky header 
jQuery(function(){
    createSticky(jQuery("#sticky-wrap"));
});

function createSticky(sticky) {
    if (typeof sticky != "undefined") {

        var pos = sticky.offset().top ,
            win = jQuery(window);

        win.on("scroll", function() {

            if( win.scrollTop() > pos ) {
                sticky.addClass("stickyhead");
            } else {
                sticky.removeClass("stickyhead");
            }           
        });         
    }
}
</script> 
<script>
/*$('#banner_carousel').carousel({
  interval: 7000,
  pause: false
})  */



$(document).ready(function() {
  //carousel options
  $('#banner_carousel').carousel({
        pause: true, 
    interval: 19000,
  });
});
</script> 
<script>
//IMAGE CAROUSEL
var cd = $('#collect1, #collect2, #collect3');
cd.owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    items:1,
    autoplay: 2000,
    smartSpeed: 1000,
});
</script> 
<script>
//TESTIMONIALS
var cd = $('#testiMonial');
cd.owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    items:1,
    autoplay: true,
    smartSpeed: 1000,
});
</script> 

<!-- range datepicker --> 
<script>
 $(document).ready(function(){
    // Call global the function
    $('.t-datepicker').tDatePicker({
      // options here
    });
  });
</script> 

<!-- adult_quntitt_button --> 
<script>
$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });
    
}); 
</script> 
<!-- adult_quntitt_button --> 
<script>
$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity_mobile').val());
        
        // If is not undefined
            
            $('#quantity_mobile').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity_mobile').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity_mobile').val(quantity - 1);
            }
    });
    
}); 
</script> 