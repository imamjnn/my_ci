var base_url = window.location.protocol + "//" + window.location.host + "/";

$('#images').change(function(){
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
            }else{
            	$('#imagePreview').attr('src', response.message);
            	$('#preview').val(response.message);
            }
        }
    });
});