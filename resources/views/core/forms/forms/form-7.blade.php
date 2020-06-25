{!! Form::open(array('url'=>'home/proccess/7', 'id'=>'formconfiguration','class'=>'form-vertical form-material' ,'files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
@if(Session::has('message'))	  
		{!! Session::get('message') !!}
@endif	
	
<ul class="parsley-error-list">
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>

<div class="form-group  " >
					<label for="ipt" class="  "> Contact Id  </label>
				<input  type='text' name='contact_id' id='contact_id' value='{{ $row['contact_id'] }}' 
						required     class='form-control form-control-sm ' />
		</div>

		<div class="form-group  " >
					<label for="ipt" class="  "> Surname  </label>
				<input  type='text' name='surname' id='surname' value='{{ $row['surname'] }}' 
						required     class='form-control form-control-sm ' />
		</div>

		<div class="form-group  " >
					<label for="ipt" class="  "> Job Title  </label>
				<input  type='text' name='job_title' id='job_title' value='{{ $row['job_title'] }}' 
						required     class='form-control form-control-sm ' />
		</div>

		<div class="form-group  " >
					<label for="ipt" class="  "> Photo  </label>
				<input  type='text' name='photo' id='photo' value='{{ $row['photo'] }}' 
						required     class='form-control form-control-sm ' />
		</div>

		<div class="form-group  " >
					<label for="ipt" class="  "> Phone  </label>
				<input  type='text' name='phone' id='phone' value='{{ $row['phone'] }}' 
						required     class='form-control form-control-sm ' />
		</div>

		<div class="form-group  " >
					<label for="ipt" class="  "> CreatedOn  </label>
				
					{!! Form::text('createdOn', $row['createdOn'],array('class'=>'form-control form-control-sm datetime')) !!}
				
		</div>

		<div class="form-group  " >
					<label for="ipt" class="  "> UpdatedOn  </label>
				
					{!! Form::text('updatedOn', $row['updatedOn'],array('class'=>'form-control form-control-sm datetime')) !!}
				
		</div>

		
		<div class="form-group row  " >					
				<button type="submit" name="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Submit </button>
		</div>

{!! Form::close() !!}


<script type="text/javascript">
	$(document).ready(function(){
	});

	
</script>