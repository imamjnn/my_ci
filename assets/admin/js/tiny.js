tinymce.init({
  	selector: '.tinymce',
  	height: 500,
  	menubar: false,
  	plugins: [
    	'advlist autolink lists link image charmap print preview anchor',
    	'searchreplace visualblocks code fullscreen',
    	'insertdatetime media table contextmenu paste code codesample'
  	],
    codesample_languages: [
        {text: 'HTML/XML', value: 'markup'},
        {text: 'JavaScript', value: 'javascript'},
        {text: 'CSS', value: 'css'},
        {text: 'PHP', value: 'php'},
        {text: 'Ruby', value: 'ruby'},
        {text: 'Python', value: 'python'},
        {text: 'Java', value: 'java'},
        {text: 'C', value: 'c'},
        {text: 'C#', value: 'csharp'},
        {text: 'C++', value: 'cpp'}
    ],
  	toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | link image media | codesample code | fullscreen',
  	content_css: '/assets/admin/css/tiny.css',

    image_caption: true,
    image_prepend_url: false,
    image_title: false,
    image_dimensions: false,

    media_dimensions: false,

    file_picker_types: 'image',
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
