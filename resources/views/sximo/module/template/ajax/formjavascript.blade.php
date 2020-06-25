<script>
$(document).ready(function() { 
	$('.editor').summernote();
	
	$('.tips').tooltip();	
	$(".select2").select2({ width:"98%"});	
	$('.date').bootstrapMaterialDatePicker({ format: 'YYYY-MM-DD'});
    $('.datetime').bootstrapMaterialDatePicker({ format:  'YYYY-MM-DD HH:mm'});		
	$('.removeMultiFiles').on('click',function(){
			var file =  $(this).attr('url') ;
			var removeUrl = '{{ url( $pageModule."/removefiles?file=")}}'+ file;
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});
	$('a.addC').relCopy({});

		$('.upload').change(function() {

		var id = $(this).attr('name');

		var files = $(this).prop('files');
		$(this).parent().closest('.fileUpload .title').html(files[0].name)
		console.log(files[0].name)
		const fr = new FileReader()
		fr.readAsDataURL(files[0])
		fr.addEventListener('load', () => {
		 	$('.'+id+'-preview').html('<img src="'+fr.result+'" width="120" />')
		}) 
 		
	  	
	})
	$('.form-tab a').on('click', function (e) {
	  	e.preventDefault()
	  	$(this).tab('show')
	})	
})	
</script>
