// Image preiew Jquery Ajax
$(document).ready(function(){
	$('#remove').hide();
	$(document).on('change','#photo',function(){
		readURL(this);
		$('#remove').show();
	});

	$(document).on('click','#remove', function(event){
		event.preventDefault();
		 $('#uploadForm').find('input:file').val('');
		 $('#preview').attr('src', 'assets/image/preview.png');
		 $('#remove').hide();
	});
})

function readURL(input) {
  if(input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#preview').attr('src', e.target.result);
      $('#preview').hide();
      $('#preview').fadeIn(650);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
// End image preview Jquery Ajax


$(document).ready(function(){
	$(document).on('submit','#uploadForm', function(event){
		event.preventDefault();
		$.ajax({
			url: 'controller.php',
			method: 'POST',
			data: new FormData(this),
			contentType: false,
			processData: false,
			cache: false,
			success:function(response){
				$('#msg').html(response);
				$('#uploadForm').find('input:file').val('');
				$('#preview').attr('src', 'assets/image/preview.png');
				$('#remove').hide();
			}
		});
	});
});



