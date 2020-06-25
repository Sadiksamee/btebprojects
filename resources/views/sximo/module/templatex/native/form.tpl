@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'{class}?return='.$return, 'class'=>'form-{form_display} form-material validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
				<div class="submitted-button">
					<button name="apply" class="tips btn btn-sm   "  title="{{ __('core.btn_back') }}" > {{ __('core.sb_apply') }} </button>
					<button name="save" class="tips btn btn-sm "  id="saved-button" title="{{ __('core.btn_back') }}" > {{ __('core.sb_save') }} </button> 
				</div>	
			</div>
			<div class="col-md-6 text-right " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn   btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
			</div>
		</div>
	</div>	


	<div class="card">
		<div class="card-body">
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>		
		
	{form_entry}
	
		</div>
		{masterdetailform}
		<input type="hidden" name="action_task" value="save" />
		
		
		</div>
	</div>		


	{!! Form::close() !!}
	
   <script type="text/javascript">
	$(document).ready(function() { 
		
		{masterdetailjs}
		{form_javascript} 	
		{form_wizard} 	 

		$('.removeMultiFiles').on('click',function(){
			var file =  $(this).attr('url') ;
			var removeUrl = '{{ url( $pageModule."/removefiles?file=")}}'+ file;
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});
	});
	</script>		 
@stop