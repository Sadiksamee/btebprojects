<?php

class FormHelpers {


	public static function render( $id ) 
	{
		$rows = \DB::table('tb_forms')->where('formID',$id)->get();
		if(count($rows) >=1)
		{
			$row = $rows[0];
			$config = json_decode($row->configuration,true);
			
			$form = [] ;

			foreach($config as $key=>$par)
			{
				$par = array_merge(['field' => $key] , $par) ;
				$par = array_merge($par , self::param( $par['param']));
				unset($par['param']);
				$form[$key] = [ 'title'=> $par['title'] , 'form' => self::__input( $par['type'] , '' , $par)];
			}
			$data = array(
				'form_builder_id' 	=> $row->formID ,
				'preview'			=>$form
			);
			return view('sximo.form.preview', $data );
		} else {
			return 'Form does not exists !';
		}
	}

	public static function param( $arguments ){

		$params = array();
		$args = array();
		if($arguments !='') {
			$params = explode("|", $arguments);
			foreach($params as $param)
			{
				$item = explode("=",$param);
				if(isset($item[0]) && isset($item[1]))
				{
					$args[$item[0]] = $item[1];	
				}
				
			}
		}	

		return  $args ;
					
	}

    static function  __input( $type , $value , $param )
    {
	    $validation = '' ;
	    if($param['validation'] !='');
	    	$validation = 'required="true"';
        switch ($type)
        {
            default:
            case 'text':            
            	$form = '<input type="text" name="'.$param['field'].'" value="'. $value .'" class="input-sm form-control" '.$validation.' />';
            	break;
            case 'text':            
            	$form = '<input type="text" name="'.$param['field'].'" value="'. $value .'" class="input-sm form-control CrudEngineColor" '.$validation.' />';
            	break;            	
            case 'password':            
            	$form = '
            	<label> Type Password (*) <small><i> Leave blank if no changes </i></small></label>
            	<input type="password" name="'.$param['field'].'" value="" class="input-sm form-control"  />
            	<label> Confirm Password </label>
            	<input type="password" name="confirm_'.$param['field'].'" value="" class="input-sm form-control"  />
            	';
            	break;

            case 'text':            
            	$form = '<input type="text" name="'.$param['field'].'" value="'. $value .'" class="input-sm form-control" '.$validation.' />';
            	break;
            case 'timestamp': 
            	$form = '<input type="text" name="'.$param['field'].'" value="'. $value .'" class="input-sm form-control CrudEngineDateTime"  '.$validation.'/>';
            	break;
            case 'date': 
            	$form = '
            	<div class="input-group"  style="width:250px !important" >				  
				  <input type="text" class="form-control input-sm CrudEngineDate" name="'.$param['field'].'" value="'. $value .'" '.$validation.'  width="150"/>
				  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar"></i></span>
				</div>

            	';
            	break;  
            case 'time': 
            	$form = '
            	<div class="input-group"  style="width:250px !important" >				  
				  <input type="text" class="form-control input-sm CrudEngineTime" name="'.$param['field'].'" value="'. $value .'" '.$validation.'  width="150"/>
				  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-clock-o"></i></span>
				</div>
				';
            	break;  
            case 'year': 
            	$form = '
            	<div class="input-group"  style="width:250px !important" >				  
				  <input type="text" class="form-control input-sm CrudEngineYear" name="'.$param['field'].'" value="'. $value .'" '.$validation.'  width="150"/>
				  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar-check-o"></i></span>
				</div>
				';
            	break;            	          	          		
            case 'datetime': 
            	$form = '
            	<div class="input-group"  style="width:250px !important" >				  
				  <input type="text" class="form-control input-sm CrudEngineDateTime" name="'.$param['field'].'" value="'. $value .'" '.$validation.'  width="150"/>
				  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar-o"></i></span>
				</div>
				';
            	break;
            case 'editor':
            	$form = '<textarea name="'.$param['field'].'" class=" input-sm form-control CrudEngineEditor" '.$validation.'>'. $value .'</textarea>'; 
            	break;
            case 'textarea':
            	$form = '<textarea name="'.$param['field'].'" class=" input-sm form-control" '.$validation.'>'. $value .'</textarea>'; 
            	break;
            case 'radio':
            	$form ='';
            	$options =array(); 
            	if(isset($param['options']))
            	{
            		$options = explode(',',$param['options']);		
            	}            	         	
            	foreach($options as $opt)
            	{
            		$f = $opt ; $v = $opt ;
            		if (strpos($opt, ':') !== false) {
					    $opt = explode(":",$opt);
					    $f = $opt[0] ; $v = $opt[1];
					} 
            		$checked = ($value == $f ? 'checked' : '');
            		$form .= '<div class="radio"> 
            					<input '.$validation.' type="radio" name="'.$param['field'].'" value="'.$f.'" '.$checked.' > 
            					<label>  '. ucwords($v) .' </label>
            				  </div>  ';	
            	}            	
            	break;
            case 'checkbox':
            	$form ='';
            	$options = explode(',',str_replace("'","",$param['lenght']));
            	$value = explode(',', $value);
            	foreach($options as $opt)
            	{
            		$checked = (in_array($opt , $value ) ? 'checked' : '');
            		$form .= '<label class="checkbox-inline"> <input type="checkbox" '.$validation.' name="'.$param['field'].'[]" value="'.$opt.'" '.$checked.' > </label> '. ucwords($opt) .' ';	
            	}            	
            	break;

            case 'select'; 
            
        		/* End Sximo Bridge */
            	$is_multiple = (isset($param['multiple']) && $param['multiple'] == true ? 'true' : 'false');
            	$value = ($is_multiple =='true' ? explode(',', $value) : $value );
				$mark =''; $is_m ='';
            	$select = '<option value=""> -- Select --</option>';
            	if(isset($param['options']))
            	{
            		$options = explode(',',$param['options']);	
            		foreach($options as $opt)
            		{
            			$opt = explode(":",$opt);
            			$f = $opt[0] ; $v = $opt[1] ;
            			$selected = ($value == $f ? 'selected' : '');
            			if($is_multiple =='true' )
            				$selected = (in_array($f , $value) ? 'selected' : '');
            
						$select .= '<option value="'.$f.'" '.$selected.'>'.$v.'</option>';	
            		}	
            	} 
            	// This is for lookup options
            	if (isset($param['lookup']) )
            	{
	            	$fields = explode(":",$param['lookup']);				
					if(count($fields)>=2)
					{
						$field_table  =  str_replace('-',',',$fields[2]);
						$field_toShow =  explode("-",$fields[2]);
						//echo " SELECT ".$field_table." FROM ".$fields[0]."  "; exit;
						$Q = \DB::select(" SELECT * FROM ".$fields[0]." ");							
						foreach($Q as $row)
						{
							
							$sub_val = '';
							foreach($field_toShow as $fld)
							{
								$sub_val .= $row->{$fld}.' '; 
							}	
							//$sub_val .= substr($value,0,($value-2)
							$selected = ($value == $row->{$fields[1]} ? 'selected' : '');
							if($is_multiple =='true' )
								$selected = (in_array($row->{$fields[1]} , $value) ? 'selected' : '');

							$select .= '<option value="'.$row->{$fields[1]}.'" '.$selected.'>'.$sub_val.'</option>';	
						}						
					}
				}	
				if($is_multiple =='true' )
				{
					$mark = '[]';
					$is_m = 'multiple';
				}			
            	$form = '<select name="'.$param['field']. $mark .'" '.$is_m.' '.$validation.' class="input-sm form-control" >'.$select.'</select>';
            	break;
            case 'upload'; 
            case 'image'; 
            case 'file';  

            	

            	if(isset($param['upload_type']))
            		$type = $param['upload_type'] ;
            	
            	$path = (isset($param['path']) ? $param['path'] : '/uploads/');
				$files = '';
				$values = explode(",",$value);
				$i = 0;
				if(count($values) && $value !='')
				{
					foreach($values as $file) {
						if($type =='image'):
							$show = '<img src="'. asset( $param['path'] . $file ) .'" style="width:100px;" />';
						else :
							$show =  '<i class="fa fa-file"></i><br />'. $file ;
						endif;

						if(file_exists('.'.$path.'/'.$file) && $path !=''){
							$files .= '
							<li id="cr-'.$i.'" class="">							
								<a href="'. asset($param['path'] . $file) .'" target="_blank" >'. $show .'</a> 
								<span class=" removeMultiFiles" rel="#cr-'. $i.'" url="'.$param['path']. $file .'">
								<i class="fa fa-times  btn btn-xs btn-danger"></i></span>
								<input type="hidden" name="curr'.$param['field'].'[]" value="'. $file .'"/>
							</li>';
						}	
						++$i;
					}
				}
				$is_multiple = (isset($param['multiple']) && $param['multiple'] == true ? 'true' : 'false');
            	if(isset($param['image_multiple']) && $param['image_multiple'] =='1')
            	{
            		$is_multiple = 'true' ;	
            	}

            	if($is_multiple =='true')
	            {

				$form = '
					<a href="javascript:void(0)" class="btn btn-xs btn-primary pull-right" onclick="appendFormFiles(\''.$param['field'].'\')"><i class="fa fa-plus"></i></a>
					<div class="'.$param['field'].'Upl">	
					 	<input  type=\'file\' name=\''.$param['field'].'[]\'  />			
					</div>';
				} else {
					$form = '<input type="file" name="'.$param['field'].'" ><br />';
				}

				$form .= '
				<ul class="uploadedLists " >
					'.$files.'	
				</ul>
				';

					
				                 
            	
            	break; 	           	
        }
        return $form;
    
    }		



	public static function  validateForm( $forms )
	{
		$rules = array();
		foreach($forms as $form)
		{
			if($form['required']== '' || $form['required'] !='0')
			{
				$rules[$form['field']] = 'required';
			} elseif ($form['required'] == 'alpa'){
				$rules[$form['field']] = 'required|alpa';
			} elseif ($form['required'] == 'alpa_num'){
				$rules[$form['field']] = 'required|alpa_num';					
			} elseif ($form['required'] == 'alpa_dash'){
				$rules[$form['field']]='required|alpa_dash';																
			} elseif ($form['required'] == 'email'){
				$rules[$form['field']] ='required|email';
			} elseif ($form['required'] == 'numeric'){
				$rules[$form['field']] = 'required|numeric';		
			} elseif ($form['required'] == 'date'){
				$rules[$form['field']]='required|date';
			} else if($form['required'] == 'url'){
				$rules[$form['field']] = 'required|active_url';
			} else {
	
				if( $form['type'] =='file')
				{
					if(!is_null(Input::file($form['field'])))
					{

						if($form['option']['upload_type'] =='image')
						{
							$rules[$form['field']] = 'mimes:jpg,jpeg,png,gif,bmp';
						} else {
							if($form['option']['image_multiple'] != '1')
							{
								$rules[$form['field']] = 'mimes:zip,csv,xls,doc,docx,xlsx';
							} 
							
						}						
					}

				}

			}										
		}	
		return $rules ;
	}	

	static public function validatePost( $request ,  $str )
	{	
		
		$data = array();
		foreach($str as $f){
			$field = $f['field'];
			// Update for V5.1.5 issue on Autofilled createOn and updatedOn fields
			if($field == 'createdOn') $data['createdOn'] = date('Y-m-d H:i:s');
            if($field == 'updatedOn') $data['updatedOn'] = date('Y-m-d H:i:s');
			if($f['view'] ==1) 
			{
				if($f['type'] =='textarea_editor' || $f['type'] =='textarea')
				{
					// Handle Text Editor 
					$content = (isset($_POST[$field]) ? $_POST[$field] : '');
					 $data[$field] = $content;
				} else {
					// Handle text Input
					if(isset($_POST[$field]))
					{
						$data[$field] = $_POST[$field];				
					}
					// Handle FILE OR IMAGE Upload 
					if($f['type'] =='file')
					{	
						$files ='';	
						if($f['option']['upload_type'] =='file')
						{

							if(isset($f['option']['image_multiple']) && $f['option']['image_multiple'] ==1)
							{								
								if(isset($_POST['curr'.$field]))
								{
									$curr =  '';
									for($i=0; $i<count($_POST['curr'.$field]);$i++)
									{
										$files .= $_POST['curr'.$field][$i].',';
									}
								}	

								if(!is_null(Input::file($field)))
								{

									$destinationPath = '.'. $f['option']['path_to_upload']; 	
									foreach($_FILES[$field]['tmp_name'] as $key => $tmp_name ){
									 	$file_name = $_FILES[$field]['name'][$key];
										$file_tmp =$_FILES[$field]['tmp_name'][$key];
										if($file_name !='')
										{
											move_uploaded_file($file_tmp,$destinationPath.'/'.$file_name);
											$files .= $file_name.',';

										}
										
									}
									
									if($files !='')	$files = substr($files,0,strlen($files)-1);	
								}	
								$data[$field] = $files;													

							} else {
							
								if(!is_null(Input::file($field)))
								{								

									$file = Input::file($field); 
								 	$destinationPath = '.'. $f['option']['path_to_upload']; 
									$filename = $file->getClientOriginalName();
									$extension =$file->getClientOriginalExtension(); //if you need extension of the file
									$rand = rand(1000,100000000);
									$newfilename = strtotime(date('Y-m-d H:i:s')).'-'.$rand.'.'.$extension;
									$uploadSuccess = $file->move($destinationPath, $newfilename);
									if( $uploadSuccess ) {
									   $data[$field] = $newfilename;
									}
								}	 
							}	

						} else {

							if(!is_null(Input::file($field)))
							{

								$file = Input::file($field); 
							 	$destinationPath = '.'. $f['option']['path_to_upload']; 
								$filename = $file->getClientOriginalName();
								$extension =$file->getClientOriginalExtension(); //if you need extension of the file
								$rand = rand(1000,100000000);
								$newfilename = strtotime(date('Y-m-d H:i:s')).'-'.$rand.'.'.$extension;


								$uploadSuccess = $file->move($destinationPath, $newfilename);


								 if($f['option']['resize_width'] != '0' && $f['option']['resize_width'] !='')
								 {
								 	if( $f['option']['resize_height'] ==0 )
									{
										$f['option']['resize_height']	= $f['option']['resize_width'];
									}
								 	$orgFile = $destinationPath.'/'.$newfilename;
									 \SiteHelpers::cropImage($f['option']['resize_width'] , $f['option']['resize_height'] , $orgFile ,  $extension,	 $orgFile)	;						 
								 }
								 
								if( $uploadSuccess ) {
								   $data[$field] = $newfilename;
								} 


							} else {
								unset($data[$field]);
							}	

						}

					}	

					// Handle Checkbox input 
					if($f['type'] =='checkbox')
					{
						if(isset($_POST[$field]))
						{
							$data[$field] = implode(",",$_POST[$field]);
						} else {
							$data[$field] = '0';	
						}
					}
					// Handle Date 				
					if($f['type'] =='date')
					{
						$data[$field] = date("Y-m-d",strtotime($request->input($field)));
					}

					// Handle Date 				
					if($f['type'] =='date_time')
					{
						$data[$field] = date("Y-m-d H:i:s",strtotime($request->input($field)));
					}

					
					// if post is seelct multiple						
					if($f['type'] =='select')
					{
						if( isset($f['option']['select_multiple']) &&  $f['option']['select_multiple'] ==1 )
						{
							$multival = (is_array($_POST[$field]) ? implode(",",$_POST[$field]) :  $_POST[$field]); 
							$data[$field] = $multival;
						} else {
							$data[$field] = $_POST[$field];
						}	
					}									
					
				}	 						

			}	
		}
		

		/* Added for Compatibility laravel 5.2 */
		$values = array();
		foreach($data as $key=>$val)
		{
			if($val !='') $values[$key] = $val;
		}			
		return $values;
	}


	public static function javascriptForms( $forms  )
	{
		$f = '';
		foreach($forms as $form){
			if($form['view'] != 0)
			{			
				if(preg_match('/(select)/',$form['type'])) 
				{
					if($form['option']['opt_type'] == 'external') 
					{
						$table 	=  $form['option']['lookup_table'] ;
						$val 	=  $form['option']['lookup_value'];
						$key 	=  $form['option']['lookup_key'];
						$lookey = '';
						if($form['option']['is_dependency']) $lookey .= $form['option']['lookup_dependency_key'] ;
						$f .= self::createPreCombo( $form['field'] , $table , $key , $val , $lookey  );
							
					}
									
				}
				
			}	
		
		}
		return $f;	
	
	}
	
	public static function createPreCombo( $field , $table , $key ,  $val ,$lookey = null)
	{


		
		$parent = null;
		$parent_field = null;
		if($lookey != null)  
		{	
			$parent = " parent: '#".$lookey."',";
			$parent_field =  "&parent={$lookey}:";
		}	
		$pre_jCombo = "
		\$(\"#{$field}\").jCombo(\"{!! url('post/comboselect?filter={$table}:{$key}:{$val}') !!}$parent_field\",
		{ ".$parent." selected_value : '' });
		";	
		return $pre_jCombo;
	}	 

	 	
}