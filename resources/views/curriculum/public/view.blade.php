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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Curri Name', (isset($fields['curri_name']['language'])? $fields['curri_name']['language'] : array())) }}</td>
						<td>{{ $row->curri_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Curri Id', (isset($fields['curri_id']['language'])? $fields['curri_id']['language'] : array())) }}</td>
						<td>{{ $row->curri_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Dura Year', (isset($fields['dura_year']['language'])? $fields['dura_year']['language'] : array())) }}</td>
						<td>{{ $row->dura_year}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Dura Month', (isset($fields['dura_month']['language'])? $fields['dura_month']['language'] : array())) }}</td>
						<td>{{ $row->dura_month}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Dura Day', (isset($fields['dura_day']['language'])? $fields['dura_day']['language'] : array())) }}</td>
						<td>{{ $row->dura_day}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	