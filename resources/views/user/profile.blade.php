@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }}  <small> {{ $pageNote }} </small> </h2></div>

<div class="card">
	<div class="card-body">
	<div class="row">
		<div class="col-md-8">



<ul class="nav nav-tabs form-tab" >
  <li class="nav-item"><a href="#info" data-toggle="tab" class="nav-link active"> {{ Lang::get('core.personalinfo') }} </a></li>
  <li class="nav-item"><a href="#pass" data-toggle="tab" class="nav-link">{{ Lang::get('core.changepassword') }} </a></li>
</ul>	

<div class="tab-content pt-5">
  <div class="tab-pane active m-t" id="info">
	{!! Form::open(array('url'=>'user/saveprofile/', 'class'=>'form-horizontal form-material validated' ,'files' => true)) !!}  
	  <div class="form-group row">
		<label for="ipt" class=" control-label col-md-4"> Username </label>
		<div class="col-md-8">
		<input name="username" type="text" id="username" disabled="disabled" class="form-control input-sm" required  value="{{ $info->username }}" />  
		 </div> 
	  </div>  
	  <div class="form-group row">
		<label for="ipt" class=" control-label col-md-4">{{ Lang::get('core.email') }} </label>
		<div class="col-md-8">
		<input name="email" type="text" id="email"  class="form-control input-sm" value="{{ $info->email }}" /> 
		 </div> 
	  </div> 	  
  
	  <div class="form-group row">
		<label for="ipt" class=" control-label col-md-4">{{ Lang::get('core.firstname') }} </label>
		<div class="col-md-8">
		<input name="first_name" type="text" id="first_name" class="form-control input-sm" required value="{{ $info->first_name }}" /> 
		 </div> 
	  </div>  
	  
	  <div class="form-group row">
		<label for="ipt" class=" control-label col-md-4">{{ Lang::get('core.lastname') }} </label>
		<div class="col-md-8">
		<input name="last_name" type="text" id="last_name" class="form-control input-sm" required value="{{ $info->last_name }}" />  
		 </div> 
	  </div>    

	  <div class="form-group row  " >
		<label for="ipt" class=" control-label col-md-4 "> Avatar </label>
		<div class="col-md-8">
			


            <div class="custom-file fileUpload mb-3">
              <input type="file" class="custom-file-input upload" id="avatar" name="avatar"  accept="image/x-png,image/gif,image/jpeg" >
              <label class="custom-file-label form-control" for="customFile">Choose file</label>
            </div>


            <p> Image Dimension 80 x 80 px  </p>
	            <div class="avatar-preview preview-upload">
	            <?php if( file_exists( './uploads/users/'.$info->avatar) && $info->avatar !='') { ?>
	            <img src="{{  url('uploads/users').'/'.$info->avatar }} " border="0" width="60" class="avatar" />
	            <?php  } else { ?> 
	            <img alt="" src="http://www.gravatar.com/avatar/{{ md5($info->email) }}" width="60" class="avatar" />
	            <?php } ?>
	        </div>
		
		 </div> 
	  </div>  

	  <div class="form-group row">
		<label for="ipt" class=" control-label col-md-4">&nbsp;</label>
		<div class="col-md-8">
			<button class="btn btn-success" type="submit"> {{ Lang::get('core.sb_savechanges') }}</button>
		 </div> 
	  </div> 	
	
	{!! Form::close() !!}	
  </div>

  <div class="tab-pane  m-t" id="pass">
	{!! Form::open(array('url'=>'user/savepassword/', 'class'=>'form-horizontal form-material')) !!}    
	  
	  <div class="form-group row">
		<label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.newpassword') }} </label>
		<div class="col-md-8">
		<input name="password" type="password" id="password" class="form-control input-sm" value="" /> 
		 </div> 
	  </div>  
	  
	  <div class="form-group row">
		<label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.conewpassword') }}  </label>
		<div class="col-md-8">
		<input name="password_confirmation" type="password" id="password_confirmation" class="form-control input-sm" value="" />  
		 </div> 
	  </div>    
	 
	
	  <div class="form-group row">
		<label for="ipt" class=" control-label col-md-4">&nbsp;</label>
		<div class="col-md-8">
			<button class="btn btn-danger" type="submit"> {{ Lang::get('core.sb_savechanges') }} </button>
		 </div> 
	  </div>   
	{!! Form::close() !!}	
  	

  	</div>
  		</div>
	</div>
</div></div>

@endsection