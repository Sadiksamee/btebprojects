@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2></div>

<div class="toolbar-nav">
	<div class="row">
		<div class="col-md-6 ">
			@if($access['is_add'] ==1)
	   		<a href="{{ url('institution/'.$id.'/edit?return='.$return) }}" class="tips btn btn-default btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif
			<a href="{{ url('institution?return='.$return) }}" class="tips btn btn-default  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
		</div>
		<div class="col-md-6 text-right">			
	   		<a href="{{ ($prevnext['prev'] != '' ? url('institution/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-default  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('institution/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-default btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
		</div>	

		
		
	</div>
</div>
<div class="card">		
	<div class="card-body">

	<div class="table-responsive">
		<table class="table  table-bordered " >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Inst Name', (isset($fields['inst_name']['language'])? $fields['inst_name']['language'] : array())) }}</td>
						<td>{{ $row->inst_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Affiliation Date', (isset($fields['affiliation_date']['language'])? $fields['affiliation_date']['language'] : array())) }}</td>
						<td>{{ $row->affiliation_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Inst Address', (isset($fields['inst_address']['language'])? $fields['inst_address']['language'] : array())) }}</td>
						<td>{{ $row->inst_address}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Division Id', (isset($fields['division_id']['language'])? $fields['division_id']['language'] : array())) }}</td>
						<td>{{ $row->division_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('District Id', (isset($fields['district_id']['language'])? $fields['district_id']['language'] : array())) }}</td>
						<td>{{ $row->district_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Upozilla Id', (isset($fields['upozilla_id']['language'])? $fields['upozilla_id']['language'] : array())) }}</td>
						<td>{{ $row->upozilla_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Post Office Id', (isset($fields['post_office_id']['language'])? $fields['post_office_id']['language'] : array())) }}</td>
						<td>{{ $row->post_office_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Entry Date', (isset($fields['entry_date']['language'])? $fields['entry_date']['language'] : array())) }}</td>
						<td>{{ $row->entry_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Inst Aprrove Date', (isset($fields['Inst_aprrove_date']['language'])? $fields['Inst_aprrove_date']['language'] : array())) }}</td>
						<td>{{ $row->Inst_aprrove_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Inst Esta Memorabilia No', (isset($fields['Inst_esta_memorabilia_no']['language'])? $fields['Inst_esta_memorabilia_no']['language'] : array())) }}</td>
						<td>{{ $row->Inst_esta_memorabilia_no}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Inst Govt', (isset($fields['Inst_govt']['language'])? $fields['Inst_govt']['language'] : array())) }}</td>
						<td>{{ $row->Inst_govt}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Inst Rent', (isset($fields['Inst_rent']['language'])? $fields['Inst_rent']['language'] : array())) }}</td>
						<td>{{ $row->Inst_rent}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('G Status', (isset($fields['g_status']['language'])? $fields['g_status']['language'] : array())) }}</td>
						<td>{{ $row->g_status}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Ena Status', (isset($fields['ena_status']['language'])? $fields['ena_status']['language'] : array())) }}</td>
						<td>{{ $row->ena_status}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Old Inst Name', (isset($fields['Old_inst_name']['language'])? $fields['Old_inst_name']['language'] : array())) }}</td>
						<td>{{ $row->Old_inst_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Eiin', (isset($fields['eiin']['language'])? $fields['eiin']['language'] : array())) }}</td>
						<td>{{ $row->eiin}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mobile No', (isset($fields['mobile_no']['language'])? $fields['mobile_no']['language'] : array())) }}</td>
						<td>{{ $row->mobile_no}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Memo No', (isset($fields['Memo_no']['language'])? $fields['Memo_no']['language'] : array())) }}</td>
						<td>{{ $row->Memo_no}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mpo', (isset($fields['Mpo']['language'])? $fields['Mpo']['language'] : array())) }}</td>
						<td>{{ $row->Mpo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Ratings', (isset($fields['ratings']['language'])? $fields['ratings']['language'] : array())) }}</td>
						<td>{{ $row->ratings}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Inst Esta Appli Date', (isset($fields['Inst_esta_appli_date']['language'])? $fields['Inst_esta_appli_date']['language'] : array())) }}</td>
						<td>{{ $row->Inst_esta_appli_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Inst Esta Memorabilia', (isset($fields['Inst_esta_memorabilia']['language'])? $fields['Inst_esta_memorabilia']['language'] : array())) }}</td>
						<td>{{ $row->Inst_esta_memorabilia}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Inst Teaching Approve Date', (isset($fields['Inst_teaching_approve_date']['language'])? $fields['Inst_teaching_approve_date']['language'] : array())) }}</td>
						<td>{{ $row->Inst_teaching_approve_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Inst Songjukto', (isset($fields['Inst_songjukto']['language'])? $fields['Inst_songjukto']['language'] : array())) }}</td>
						<td>{{ $row->Inst_songjukto}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 	

	</div>
	</div>	

</div>
@stop
