<!DOCTYPE html>
<pre>
<?php 
  //var_dump($page->template);
   $pageinfo = $page->translate();
  //var_dump($pageinfo->page_description);
 ?>
</pre>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>OTA Admin - Page Content Editor</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/keditor/sample/plugins/bootstrap-3.3.6/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/keditor/sample/plugins/font-awesome-4.5.0/css/font-awesome.min.css')}}" />
        <!-- Start of KEditor styles -->
        <script type="text/javascript"> var asset_url = "{{ asset('/')}}"; </script>
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/keditor/dist/css/keditor.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/keditor/dist/css/keditor-components.min.css')}}" />
        <!-- End of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/keditor/sample/plugins/code-prettify/src/prettify.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/keditor/sample/css/examples.css')}}" />
        <link rel="stylesheet" href="{{ asset('backend/assets/css/loader.css') }}" rel="stylesheet" />
    <script type="text/javascript">
      var ajax_url = "{{route('admin.pages.update')}}";
      var page_id  = "{{$page->id}}";
      var token   =  "{{ csrf_token() }}";
    </script>
    </head>
    <body>
     <div class="loader">
        <div class="loader08"></div>
     </div>
        <!--<div class="action">
            <button class="button">Update</button>
            <button class="button">View</button>
            <button class="button">Red</button>
        </div> -->
        <div data-keditor="html" style="border:1px;">
           @if($pageinfo->page_description)
            <div id="content-area" >
             {{$pageinfo->page_description}}
             </div>
            @else
              @if($page->template =='custom')         
               <div id="content-area">
                 <section><div class="row"><div class="col-md-12" data-type="container-content"><section data-type="component-text">New content</section></div></div></section>
               </div>   
               @else
                         
              @endif
            @endif  
             
        </div>
        <script type="text/javascript" src="{{ asset('backend/keditor/sample/plugins/jquery-1.11.3/jquery-1.11.3.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('backend/keditor/sample/plugins/bootstrap-3.3.6/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('backend/keditor/sample/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('backend/keditor/sample/plugins/jquery.nicescroll-3.6.6/jquery.nicescroll.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('backend/keditor/sample/plugins/ckeditor-4.5.6/ckeditor.js')}}"></script>
        <script type="text/javascript" src="{{ asset('backend/keditor/sample/plugins/ckeditor-4.5.6/adapters/jquery.js')}}"></script>
        <script type="text/javascript" src="{{ asset('backend/keditor/sample/plugins/formBuilder-2.5.3/form-builder.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('backend/keditor/sample/plugins/formBuilder-2.5.3/form-render.min.js')}}"></script>
        <!-- Start of KEditor scripts -->
        <script type="text/javascript" src="{{ asset('backend/keditor/dist/js/keditor.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('backend/keditor/dist/js/keditor-components.min.js')}}"></script>
        <!-- End of KEditor scripts -->
        <script type="text/javascript" src="{{ asset('backend/keditor/sample/plugins/code-prettify/src/prettify.js')}}"></script>
        <script type="text/javascript" src="{{ asset('backend/keditor/sample/plugins/js-beautify-1.7.5/js/lib/beautify.js')}}"></script>
        <script type="text/javascript" src="{{ asset('backend/keditor/sample/plugins/js-beautify-1.7.5/js/lib/beautify-html.js')}}"></script>
  
        <script type="text/javascript" src="{{ asset('backend/assets/js/keditor.js')}}" data-keditor="script"></script>
        <style type="text/css">
        .keditor-content-area {
          background-color: #f0f0f0;
          border: 1px solied #000;
         }
    
        </style>

    </body>
</html>
