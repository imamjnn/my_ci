tinymce.init({
  	selector: 'textarea',
  	height: 400,
  	menubar: false,
  	plugins: [
    	'advlist autolink lists link image charmap print preview anchor',
    	'searchreplace visualblocks code fullscreen',
    	'insertdatetime media table contextmenu paste code'
  	],
  	toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | link image | fullscreen',
  	content_css: [
    	'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    	'//www.tinymce.com/css/codepen.min.css'],

    file_picker_types: 'image',
    image_title: true,
    file_picker_callback: function(cb, value, meta) {
      	var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.setAttribute('id', 'images');


	      input.onchange = function() {
	      var file = this.files[0];
		    var form = new FormData();
		    form.append('userfile', file);
    		    $.ajax({
    		        url : base_url+'media/uploadFile',
    		        type: "POST",
    		        dataType: "JSON",
    		        cache: false,
    		        contentType: false,
    		        processData: false,
    		        data : form,
    		        success: function(response){
    		            if(response.status == false){
    		            	   console.log('error upload');
    		            }else{
    		                cb(response.message, { title: file.name });
    		            }
    		        }
    		    });
	      };
	      input.click();
  	}
});
