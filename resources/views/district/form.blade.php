@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'district?return='.$return, 'class'=>'form-horizontal form-material validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> District</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Division Id" class=" control-label col-md-4 text-left"> Division Id </label>
										<div class="col-md-6">
										  <select name='division_id' rows='5' id='division_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Name" class=" control-label col-md-4 text-left"> Name </label>
										<div class="col-md-6">
										  <input  type='text' name='name' id='name' value='{{ $row['name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Bn Name" class=" control-label col-md-4 text-left"> Bn Name </label>
										<div class="col-md-6">
										  <input  type='text' name='bn_name' id='bn_name' value='{{ $row['bn_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Lat" class=" control-label col-md-4 text-left"> Lat </label>
										<div class="col-md-6">
										  <input  type='text' name='lat' id='lat' value='{{ $row['lat'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Lon" class=" control-label col-md-4 text-left"> Lon </label>
										<div class="col-md-6">
										  <input  type='text' name='lon' id='lon' value='{{ $row['lon'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Url" class=" control-label col-md-4 text-left"> Url </label>
										<div class="col-md-6">
										  <input  type='text' name='url' id='url' value='{{ $row['url'] }}' 
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
		
		
		
		$("#division_id").jCombo("{!! url('district/comboselect?filter=divisions:id:id') !!}",
		{  selected_value : '{{ $row["division_id"] }}' });
		 	
		 	 

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