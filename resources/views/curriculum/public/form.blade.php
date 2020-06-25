

		 {!! Form::open(array('url'=>'curriculum', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
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

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
