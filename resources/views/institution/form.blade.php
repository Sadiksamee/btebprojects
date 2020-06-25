@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'institution?return='.$return, 'class'=>'form-horizontal form-material validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> Institution</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Inst Name" class=" control-label col-md-4 text-left"> Inst Name </label>
										<div class="col-md-6">
										  <input  type='text' name='inst_name' id='inst_name' value='{{ $row['inst_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Affiliation Date" class=" control-label col-md-4 text-left"> Affiliation Date </label>
										<div class="col-md-6">
										  <input  type='text' name='affiliation_date' id='affiliation_date' value='{{ $row['affiliation_date'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Inst Address" class=" control-label col-md-4 text-left"> Inst Address </label>
										<div class="col-md-6">
										  <input  type='text' name='inst_address' id='inst_address' value='{{ $row['inst_address'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Division Id" class=" control-label col-md-4 text-left"> Division Id </label>
										<div class="col-md-6">
										  <input  type='text' name='division_id' id='division_id' value='{{ $row['division_id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="District Id" class=" control-label col-md-4 text-left"> District Id </label>
										<div class="col-md-6">
										  <input  type='text' name='district_id' id='district_id' value='{{ $row['district_id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Upozilla Id" class=" control-label col-md-4 text-left"> Upozilla Id </label>
										<div class="col-md-6">
										  <input  type='text' name='upozilla_id' id='upozilla_id' value='{{ $row['upozilla_id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Post Office Id" class=" control-label col-md-4 text-left"> Post Office Id </label>
										<div class="col-md-6">
										  <input  type='text' name='post_office_id' id='post_office_id' value='{{ $row['post_office_id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Entry Date" class=" control-label col-md-4 text-left"> Entry Date </label>
										<div class="col-md-6">
										  <input  type='text' name='entry_date' id='entry_date' value='{{ $row['entry_date'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Inst Aprrove Date" class=" control-label col-md-4 text-left"> Inst Aprrove Date </label>
										<div class="col-md-6">
										  <input  type='text' name='Inst_aprrove_date' id='Inst_aprrove_date' value='{{ $row['Inst_aprrove_date'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Inst Esta Memorabilia No" class=" control-label col-md-4 text-left"> Inst Esta Memorabilia No </label>
										<div class="col-md-6">
										  <input  type='text' name='Inst_esta_memorabilia_no' id='Inst_esta_memorabilia_no' value='{{ $row['Inst_esta_memorabilia_no'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Inst Govt" class=" control-label col-md-4 text-left"> Inst Govt </label>
										<div class="col-md-6">
										  <input  type='text' name='Inst_govt' id='Inst_govt' value='{{ $row['Inst_govt'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Inst Rent" class=" control-label col-md-4 text-left"> Inst Rent </label>
										<div class="col-md-6">
										  <input  type='text' name='Inst_rent' id='Inst_rent' value='{{ $row['Inst_rent'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="G Status" class=" control-label col-md-4 text-left"> G Status </label>
										<div class="col-md-6">
										  <input  type='text' name='g_status' id='g_status' value='{{ $row['g_status'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Ena Status" class=" control-label col-md-4 text-left"> Ena Status </label>
										<div class="col-md-6">
										  <input  type='text' name='ena_status' id='ena_status' value='{{ $row['ena_status'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Old Inst Name" class=" control-label col-md-4 text-left"> Old Inst Name </label>
										<div class="col-md-6">
										  <input  type='text' name='Old_inst_name' id='Old_inst_name' value='{{ $row['Old_inst_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Eiin" class=" control-label col-md-4 text-left"> Eiin </label>
										<div class="col-md-6">
										  <input  type='text' name='eiin' id='eiin' value='{{ $row['eiin'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Email" class=" control-label col-md-4 text-left"> Email </label>
										<div class="col-md-6">
										  <input  type='text' name='email' id='email' value='{{ $row['email'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mobile No" class=" control-label col-md-4 text-left"> Mobile No </label>
										<div class="col-md-6">
										  <input  type='text' name='mobile_no' id='mobile_no' value='{{ $row['mobile_no'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Memo No" class=" control-label col-md-4 text-left"> Memo No </label>
										<div class="col-md-6">
										  <input  type='text' name='Memo_no' id='Memo_no' value='{{ $row['Memo_no'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mpo" class=" control-label col-md-4 text-left"> Mpo </label>
										<div class="col-md-6">
										  <input  type='text' name='Mpo' id='Mpo' value='{{ $row['Mpo'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Ratings" class=" control-label col-md-4 text-left"> Ratings </label>
										<div class="col-md-6">
										  <input  type='text' name='ratings' id='ratings' value='{{ $row['ratings'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Inst Esta Appli Date" class=" control-label col-md-4 text-left"> Inst Esta Appli Date </label>
										<div class="col-md-6">
										  <input  type='text' name='Inst_esta_appli_date' id='Inst_esta_appli_date' value='{{ $row['Inst_esta_appli_date'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Inst Esta Memorabilia" class=" control-label col-md-4 text-left"> Inst Esta Memorabilia </label>
										<div class="col-md-6">
										  <input  type='text' name='Inst_esta_memorabilia' id='Inst_esta_memorabilia' value='{{ $row['Inst_esta_memorabilia'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Inst Teaching Approve Date" class=" control-label col-md-4 text-left"> Inst Teaching Approve Date </label>
										<div class="col-md-6">
										  <input  type='text' name='Inst_teaching_approve_date' id='Inst_teaching_approve_date' value='{{ $row['Inst_teaching_approve_date'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Inst Songjukto" class=" control-label col-md-4 text-left"> Inst Songjukto </label>
										<div class="col-md-6">
										  <input  type='text' name='Inst_songjukto' id='Inst_songjukto' value='{{ $row['Inst_songjukto'] }}' 
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