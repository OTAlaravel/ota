 (function ($) {
    $(function () {
        initModalSource();
        initModalContent();
        initToolbar();
    });

    function initToolbar() {
        var toolbar = $('<div class="toolbar"></div>');
        var btnViewSource = $('<button type="button" class="view-source"><i class="fa fa-code"></i> View source</button>');
        var btnViewContent = $('<button type="button" class="view-content"><i class="fa fa-file-text-o"></i> Get content</button>');
        var btnViewSave = $('<button type="button" class="save-data"><i class="fa fa-file-text-o"></i> Update </button>');
        var btnViewPreview = $('<button type="button" class="view-preview"><i class="fa fa-eye"></i> Pre View</button>');

        toolbar.appendTo(document.body);
        //toolbar.append(btnViewSource);
        //toolbar.append(btnViewContent);
        toolbar.append(btnViewSave);
        toolbar.append(btnViewPreview);

        btnViewSource.on('click', function () {
            $('#modal-source').modal('show');
        });

        btnViewContent.on('click', function () {
            var modal = $('#modal-content');
            modal.find('.content-html').html(
                beautifyHtml(
                    $('#editor').keditor('getContent')
                )
            );

            modal.modal('show');
        });

        btnViewSave.on('click', function () {
           	 $(".loader").show();
             var Content = $('#content-area').keditor('getContent');
             alert(Content);
             var values = {
             			"_token": token,
            			'page_content': Content,
           				 'id': page_id
    			};
             $.ajax({
				    type: 'post',
				    url: ajax_url,
				    data: values,
				    success: function () {
				             alert('form was submitted');
				              setTimeout(function() 
						       {
					            $(".loader").hide();
						  	}, 2000);
				       }
				     });
           });

      btnViewPreview.on('click', function () {
           	 $(".loader").show();
            var modal = $('#modal-content');
            setTimeout(function() 
		     {
			     
			      modal.modal('show');
			      modal.find('.content-html').html(
	                 $('#content-area').keditor('getContent')
	              );
	              $(".loader").hide();
		  	}, 2000); 
        });
    }

    function initModalContent() {
        var modal = $(
            '<div id="modal-content" class="modal fade" tabindex="-1">' +
            '    <div class="modal-dialog style="width:100%">' +
            '        <div class="modal-content">' +
            '            <div class="modal-header">' +
            '                <button type="button" class="close" data-dismiss="modal">&times;</button>' +
            '                <h4 class="modal-title">Content</h4>' +
            '            </div>' +
            '            <div class="modal-body">' +
            '                <pre class="prettyprint lang-html content-html"></pre>' +
            '            </div>' +
            '            <div class="modal-footer">' +
            '                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>' +
            '            </div>' +
            '        </div>' +
            '    </div>' +
            '</div>'
        );

        modal.appendTo(document.body);
    }

    function initModalSource() {
        var modal = $(
            '<div id="modal-source" class="modal fade" tabindex="-1">' +
            '    <div class="modal-dialog modal-lg">' +
            '        <div class="modal-content">' +
            '            <div class="modal-header">' +
            '                <button type="button" class="close" data-dismiss="modal">&times;</button>' +
            '                <h4 class="modal-title">Source</h4>' +
            '            </div>' +
            '            <div class="modal-body">' +
            '                <ul class="nav nav-tabs">' +
            '                    <li class="active"><a href="#source-html" data-toggle="tab"><i class="fa fa-html5"></i> HTML</a></li>' +
            '                    <li ><a href="#source-js" data-toggle="tab"><i class="fa fa-code"></i> JavaScript</a></li>' +
            '                </ul>' +
            '                <div class="tab-content">' +
            '                    <div class="tab-pane active" id="source-html">' +
            '                        <pre class="prettyprint lang-html source-html"></pre>' +
            '                    </div>' +
            '                    <div class="tab-pane" id="source-js">' +
            '                        <pre class="prettyprint lang-js source-js"></pre>' +
            '                    </div>' +
            '                </div>' +
            '            </div>' +
            '            <div class="modal-footer">' +
            '                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>' +
            '            </div>' +
            '        </div>' +
            '    </div>' +
            '</div>'
        );

        var htmlCode = $('[data-keditor="html"]').html();
        var htmlInclude = $('<div />').html($('[data-keditor="html-include"]').clone()).html();
        htmlInclude = htmlInclude.replace('data-keditor="html-include"', '');
        modal.find('.source-html').html(beautifyHtml(htmlCode + htmlInclude));

        var jsCode = $('[data-keditor="script"]').html();
        modal.find('.source-js').html(beautifyJs(jsCode));

        modal.appendTo(document.body);
    }

    function beautifyHtml(htmlCode) {
        htmlCode = html_beautify(htmlCode, {
            'indent_size': '4',
            'indent_char': ' ',
            'space_after_anon_function': true,
            'end_with_newline': true
        });
        htmlCode = htmlCode.replace(/</g, '&lt;').replace(/>/g, '&gt;');

        return PR.prettyPrintOne(htmlCode, 'lang-html');
    }

    function beautifyJs(jsCode) {
        jsCode = js_beautify(jsCode, {
            'indent_size': '4',
            'indent_char': ' ',
            'space_after_anon_function': true,
            'end_with_newline': true
        });

        return PR.prettyPrintOne(jsCode, 'lang-js');
    }

})(jQuery);


 $(function () {
      $('#content-area').keditor();
   });
//$('#target2').keditor('getContent', true);

 window.onload= function(){
 setTimeout(function() 
	{
	   	 $(".loader").hide();
	  	}, 2000);   
	}