<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Curri Id', (isset($fields['curri_id']['language'])? $fields['curri_id']['language'] : array())) }}</td>
						<td>{{ $row->curri_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Trade Id', (isset($fields['trade_id']['language'])? $fields['trade_id']['language'] : array())) }}</td>
						<td>{{ $row->trade_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Semester Id', (isset($fields['semester_id']['language'])? $fields['semester_id']['language'] : array())) }}</td>
						<td>{{ $row->semester_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sub Name', (isset($fields['sub_name']['language'])? $fields['sub_name']['language'] : array())) }}</td>
						<td>{{ $row->sub_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sub Code', (isset($fields['sub_code']['language'])? $fields['sub_code']['language'] : array())) }}</td>
						<td>{{ $row->sub_code}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sub Type', (isset($fields['sub_type']['language'])? $fields['sub_type']['language'] : array())) }}</td>
						<td>{{ $row->sub_type}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Credit Hour', (isset($fields['credit_hour']['language'])? $fields['credit_hour']['language'] : array())) }}</td>
						<td>{{ $row->credit_hour}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('F M Cont Theo', (isset($fields['f_m_cont_theo']['language'])? $fields['f_m_cont_theo']['language'] : array())) }}</td>
						<td>{{ $row->f_m_cont_theo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('F M Cont Prac', (isset($fields['f_m_cont_prac']['language'])? $fields['f_m_cont_prac']['language'] : array())) }}</td>
						<td>{{ $row->f_m_cont_prac}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('F M Fina Theo', (isset($fields['f_m_fina_theo']['language'])? $fields['f_m_fina_theo']['language'] : array())) }}</td>
						<td>{{ $row->f_m_fina_theo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('F M Fina Prac', (isset($fields['f_m_fina_prac']['language'])? $fields['f_m_fina_prac']['language'] : array())) }}</td>
						<td>{{ $row->f_m_fina_prac}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Term', (isset($fields['term']['language'])? $fields['term']['language'] : array())) }}</td>
						<td>{{ $row->term}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Col Map', (isset($fields['col_map']['language'])? $fields['col_map']['language'] : array())) }}</td>
						<td>{{ $row->col_map}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pass Per', (isset($fields['pass_per']['language'])? $fields['pass_per']['language'] : array())) }}</td>
						<td>{{ $row->pass_per}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Ix Per', (isset($fields['Ix_per']['language'])? $fields['Ix_per']['language'] : array())) }}</td>
						<td>{{ $row->Ix_per}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cont Per', (isset($fields['cont_per']['language'])? $fields['cont_per']['language'] : array())) }}</td>
						<td>{{ $row->cont_per}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Final Per', (isset($fields['final_per']['language'])? $fields['final_per']['language'] : array())) }}</td>
						<td>{{ $row->final_per}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Fullmark', (isset($fields['fullmark']['language'])? $fields['fullmark']['language'] : array())) }}</td>
						<td>{{ $row->fullmark}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sl No', (isset($fields['sl_no']['language'])? $fields['sl_no']['language'] : array())) }}</td>
						<td>{{ $row->sl_no}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sub Name Trans', (isset($fields['sub_name_trans']['language'])? $fields['sub_name_trans']['language'] : array())) }}</td>
						<td>{{ $row->sub_name_trans}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nine Full', (isset($fields['nine_full']['language'])? $fields['nine_full']['language'] : array())) }}</td>
						<td>{{ $row->nine_full}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Ten Full', (isset($fields['ten_full']['language'])? $fields['ten_full']['language'] : array())) }}</td>
						<td>{{ $row->ten_full}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sub Name Kh', (isset($fields['sub_name_kh']['language'])? $fields['sub_name_kh']['language'] : array())) }}</td>
						<td>{{ $row->sub_name_kh}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sub Code Kh', (isset($fields['sub_code_kh']['language'])? $fields['sub_code_kh']['language'] : array())) }}</td>
						<td>{{ $row->sub_code_kh}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Ub Name Jahid', (isset($fields['ub_name_jahid']['language'])? $fields['ub_name_jahid']['language'] : array())) }}</td>
						<td>{{ $row->ub_name_jahid}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sub Code Jahid', (isset($fields['sub_code_jahid']['language'])? $fields['sub_code_jahid']['language'] : array())) }}</td>
						<td>{{ $row->sub_code_jahid}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sub Name Bk', (isset($fields['sub_name_bk']['language'])? $fields['sub_name_bk']['language'] : array())) }}</td>
						<td>{{ $row->sub_name_bk}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	