@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'curriculum?return='.$return, 'class'=>'form-horizontal form-material validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
				
					<button name="apply" class="tips btn btn-sm btn-primary   "  title="{{ __('core.btn_back') }}" > {{ __('core.sb_apply') }} </button>
					<button name="save" class="tips btn btn-sm btn-warning"  id="saved-button" title="{{ __('core.btn_back') }}" > {{ __('core.sb_save') }} </button> 
				
			</div>
			<div class="col-md-6 text-right " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-secondary  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
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
		
	<div class="row"><div class="col-md-12">
						<fieldset><legend> Curriculum</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Curri Name" class=" control-label col-md-4 text-left"> Curri Name </label>
										<div class="col-md-6">
										  <input  type='text' name='curri_name' id='curri_name' value='{{ $row['curri_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Curri Id" class=" control-label col-md-4 text-left"> Curri Id </label>
										<div class="col-md-6">
										  <input  type='text' name='curri_id' id='curri_id' value='{{ $row['curri_id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Dura Year" class=" control-label col-md-4 text-left"> Dura Year </label>
										<div class="col-md-6">
										  <input  type='text' name='dura_year' id='dura_year' value='{{ $row['dura_year'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Dura Month" class=" control-label col-md-4 text-left"> Dura Month </label>
										<div class="col-md-6">
										  <input  type='text' name='dura_month' id='dura_month' value='{{ $row['dura_month'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Dura Day" class=" control-label col-md-4 text-left"> Dura Day </label>
										<div class="col-md-6">
										  <input  type='text' name='dura_day' id='dura_day' value='{{ $row['dura_day'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div></div>
	
		</div>
		
		<input type="hidden" name="action_task" value="save" />
		
		
		</div>
	</div>		


	{!! Form::close() !!}
	
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 	
		 	 

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