@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'subject?return='.$return, 'class'=>'form-horizontal form-material validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> Subject</legend>
				{!! Form::hidden('id', $row['id']) !!}					
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
										<label for="Trade Id" class=" control-label col-md-4 text-left"> Trade Id </label>
										<div class="col-md-6">
										  <input  type='text' name='trade_id' id='trade_id' value='{{ $row['trade_id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Semester Id" class=" control-label col-md-4 text-left"> Semester Id </label>
										<div class="col-md-6">
										  <input  type='text' name='semester_id' id='semester_id' value='{{ $row['semester_id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sub Name" class=" control-label col-md-4 text-left"> Sub Name </label>
										<div class="col-md-6">
										  <input  type='text' name='sub_name' id='sub_name' value='{{ $row['sub_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sub Code" class=" control-label col-md-4 text-left"> Sub Code </label>
										<div class="col-md-6">
										  <input  type='text' name='sub_code' id='sub_code' value='{{ $row['sub_code'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sub Type" class=" control-label col-md-4 text-left"> Sub Type </label>
										<div class="col-md-6">
										  <input  type='text' name='sub_type' id='sub_type' value='{{ $row['sub_type'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Credit Hour" class=" control-label col-md-4 text-left"> Credit Hour </label>
										<div class="col-md-6">
										  <input  type='text' name='credit_hour' id='credit_hour' value='{{ $row['credit_hour'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="F M Cont Theo" class=" control-label col-md-4 text-left"> F M Cont Theo </label>
										<div class="col-md-6">
										  <input  type='text' name='f_m_cont_theo' id='f_m_cont_theo' value='{{ $row['f_m_cont_theo'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="F M Cont Prac" class=" control-label col-md-4 text-left"> F M Cont Prac </label>
										<div class="col-md-6">
										  <input  type='text' name='f_m_cont_prac' id='f_m_cont_prac' value='{{ $row['f_m_cont_prac'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="F M Fina Theo" class=" control-label col-md-4 text-left"> F M Fina Theo </label>
										<div class="col-md-6">
										  <input  type='text' name='f_m_fina_theo' id='f_m_fina_theo' value='{{ $row['f_m_fina_theo'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="F M Fina Prac" class=" control-label col-md-4 text-left"> F M Fina Prac </label>
										<div class="col-md-6">
										  <input  type='text' name='f_m_fina_prac' id='f_m_fina_prac' value='{{ $row['f_m_fina_prac'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Term" class=" control-label col-md-4 text-left"> Term </label>
										<div class="col-md-6">
										  <input  type='text' name='term' id='term' value='{{ $row['term'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Col Map" class=" control-label col-md-4 text-left"> Col Map </label>
										<div class="col-md-6">
										  <input  type='text' name='col_map' id='col_map' value='{{ $row['col_map'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Pass Per" class=" control-label col-md-4 text-left"> Pass Per </label>
										<div class="col-md-6">
										  <input  type='text' name='pass_per' id='pass_per' value='{{ $row['pass_per'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Ix Per" class=" control-label col-md-4 text-left"> Ix Per </label>
										<div class="col-md-6">
										  <input  type='text' name='Ix_per' id='Ix_per' value='{{ $row['Ix_per'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cont Per" class=" control-label col-md-4 text-left"> Cont Per </label>
										<div class="col-md-6">
										  <input  type='text' name='cont_per' id='cont_per' value='{{ $row['cont_per'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Final Per" class=" control-label col-md-4 text-left"> Final Per </label>
										<div class="col-md-6">
										  <input  type='text' name='final_per' id='final_per' value='{{ $row['final_per'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Fullmark" class=" control-label col-md-4 text-left"> Fullmark </label>
										<div class="col-md-6">
										  <input  type='text' name='fullmark' id='fullmark' value='{{ $row['fullmark'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sl No" class=" control-label col-md-4 text-left"> Sl No </label>
										<div class="col-md-6">
										  <input  type='text' name='sl_no' id='sl_no' value='{{ $row['sl_no'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sub Name Trans" class=" control-label col-md-4 text-left"> Sub Name Trans </label>
										<div class="col-md-6">
										  <input  type='text' name='sub_name_trans' id='sub_name_trans' value='{{ $row['sub_name_trans'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nine Full" class=" control-label col-md-4 text-left"> Nine Full </label>
										<div class="col-md-6">
										  <input  type='text' name='nine_full' id='nine_full' value='{{ $row['nine_full'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Ten Full" class=" control-label col-md-4 text-left"> Ten Full </label>
										<div class="col-md-6">
										  <input  type='text' name='ten_full' id='ten_full' value='{{ $row['ten_full'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sub Name Kh" class=" control-label col-md-4 text-left"> Sub Name Kh </label>
										<div class="col-md-6">
										  <input  type='text' name='sub_name_kh' id='sub_name_kh' value='{{ $row['sub_name_kh'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sub Code Kh" class=" control-label col-md-4 text-left"> Sub Code Kh </label>
										<div class="col-md-6">
										  <input  type='text' name='sub_code_kh' id='sub_code_kh' value='{{ $row['sub_code_kh'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Ub Name Jahid" class=" control-label col-md-4 text-left"> Ub Name Jahid </label>
										<div class="col-md-6">
										  <input  type='text' name='ub_name_jahid' id='ub_name_jahid' value='{{ $row['ub_name_jahid'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sub Code Jahid" class=" control-label col-md-4 text-left"> Sub Code Jahid </label>
										<div class="col-md-6">
										  <input  type='text' name='sub_code_jahid' id='sub_code_jahid' value='{{ $row['sub_code_jahid'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sub Name Bk" class=" control-label col-md-4 text-left"> Sub Name Bk </label>
										<div class="col-md-6">
										  <input  type='text' name='sub_name_bk' id='sub_name_bk' value='{{ $row['sub_name_bk'] }}' 
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