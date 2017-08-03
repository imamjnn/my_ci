tinymce.init({
  	selector: 'textarea',
  	height: 400,
  	menubar: false,
  	plugins: [
    	'advlist autolink lists link image charmap print preview anchor',
    	'searchreplace visualblocks code fullscreen',
    	'insertdatetime media table contextmenu paste code'
  	],
  	toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  	content_css: [
    	'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    	'//www.tinymce.com/css/codepen.min.css'],

    image_title: true, 
    file_browser_callback: function(cb, value, meta) {
    	var input = document.createElement('input');
	    input.setAttribute('type', 'file');
	    input.setAttribute('accept', 'image/*');
	    input.setAttribute('id', 'images');
	    
	    // Note: In modern browsers input[type="file"] is functional without 
	    // even adding it to the DOM, but that might not be the case in some older
	    // or quirky browsers like IE, so you might want to add it to the DOM
	    // just in case, and visually hide it. And do not forget do remove it
	    // once you do not need it anymore.

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
		            	$('#mess').html(response.message);
		                $('#mess').show();
		            }else{
		            	$('#imagePreview').attr('src', response.message);
		            	$('#preview').val(response.message);
		                $('#mess').hide();
		                cb({ title: response.message});
		            }
		        }
		    });
	    };
	    
	    input.click();
	}
});