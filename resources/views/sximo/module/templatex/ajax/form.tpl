<div class="form-ajax-box">
{!! Form::open(array('url'=>'{class}?return='.$return, 'class'=>'form-{form_display} form-material validated','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> '{class}FormAjax')) !!}

	<div class="toolbar-nav">	
		<div class="row">	
			<div class="col-sm-6 ">	
				<button type="submit" class="btn btn-sm  " name="apply">{{ Lang::get('core.sb_apply') }} </button>
				<button type="submit" class="btn btn-sm  " name="save">  {{ Lang::get('core.sb_save') }} </button>
			</div>	
			<div class="col-md-6 text-right">
				<a href="javascript://ajax" onclick="ajaxViewClose('#{{ $pageModule }}')" class="tips btn btn-sm  " title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a>				
			</div>
					
		</div>
	</div>	
		<div class="card">
			<div class="card-body">

	
	{form_entry}									
	{masterdetailform}					
	<input type="hidden" name="action_task" value="save" />

	</div>
	

</div>		
{!! Form::close() !!}
</div>

<style type="text/css">
	.modal-body .form-ajax-box {
		margin: -15px;
	}
</style>
@include('sximo.module.template.ajax.formjavascript')
<script type="text/javascript">
$(document).ready(function() { 
	 
	{masterdetailjs}
	{form_javascript} 	
	{form_wizard} 
	
	var form = $('#{class}FormAjax'); 
	form.parsley();
	form.submit(function(){
		
		if(form.parsley().isValid()){			
			var options = { 
				dataType:      'json', 
				beforeSubmit :  function() {
				},
				success		:   function(data) {

					if(data.status == 'success')
					{
						ajaxViewClose('#{{ $pageModule }}');
						ajaxFilter('#{{ $pageModule }}','{{ $pageUrl }}/data');
						notyMessage(data.message);	
						$('#sximo-modal').modal('hide');	
					} else {
						notyMessageError(data.message);	
						return false;
					}	

				}  
			}  
			$(this).ajaxSubmit(options); 
			return false;
						
		} else {
			return false;
		}		
	
	});

});

</script>		 