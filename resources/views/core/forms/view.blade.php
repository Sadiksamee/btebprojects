@extends('layouts.app')

@section('content')
<section class="page-header row">
	<h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
	
</section>
	<div class="toolbar-nav">		
		<div class="row">
		<div class="col-md-6" >
			@if($access['is_add'] ==1)
	   		<a href="{{ url('core/forms/'.$id.'/edit?return='.$return) }}" class="tips btn btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif
			<a href="{{ url('core/forms?return='.$return) }}" class="tips btn btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
		</div>
	</div>
	</div>
<div class="card">
	<div class="card-body">


		
		

		<div  style="background: #e9e9e9; min-height: 600px; border: solid 1px #ddd;padding: 20px; margin: auto;" > 			
				<div class="col-md-2"></div>
				<div class="col-md-8" style=" border:solid 1px #ddd; background: #fff;" id="formConfig">
					<div style="padding: 20px;"> 
					
					 @include('core.forms.forms.form-'.$row->formID)
					</div>
				</div>
				<div class="col-md-2"></div>
		</div>		 
	
	
	</div>
</div>	

	
</div>
	  
@stop