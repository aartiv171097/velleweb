@extends('siteadmin.layouts.main')
@section('css')

<link href="{{ asset('dist/default/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

		
		<link href="{{ asset('dist/default/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		
		<link href="{{ asset('dist/default/assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

		<link rel="shortcut icon" href="{{ asset('dist/default/assets/demo/default/media/img/logo/favicon.ico')}}" />

@endsection
@section('content')
<div class="m-content">
						
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
										Assign Campaign
										</h3>
									</div>
								</div>
								
							</div>
							<div class="m-portlet__body">

								<!--begin: Datatable -->
								<table class="table table-striped- table-bordered table-hover table-checkable">
									<thead>
										<tr>
											
                                            <th>Id </th>
                                             <th>Image</th>
                                            <th>name</th> 
                                            <th>email</th>
                                            <th>email_verified_at</th>
										
										</tr>
									</thead>
									<tbody>
                                    @php $i=1; @endphp
                                    @foreach($star as $row)
										<tr>
                                        <td><div class="m-list-settings__item">
									<span class="m-list-settings__item-label"></span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" {{ $row->AssignCampaign->where('campaign_id', $compId)->count() > 0 ? 'checked' : '' }} class="checkboxToggle" data-user-id="{{ $row->id }}" id="checkbox" name="checkbox[]">
												<span>{{ $i }}</span>
											</label>
										</span>
									</span>
								</div></td>
                                        
                                        <td><img style="width:80px; border-radius:50%;" src="{{ asset('images/user_images'.'/'. $row->image) }}"></td>
                                        <td>{{$row->name}}</td>
                                        <td>{{ $row->email}}</td>
                                        <td>{{ $row->status==0 ? 'Not Verified' : 'Verified'}}</td>
										<td nowrap></td>
										
                                        </tr>
                                        @php $i++ @endphp
                                        @endforeach 
									</tbody>
								</table>
							</div>
						</div>

						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
    
@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>

<script src="{{ asset('dist/default/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dist/default/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

		<script src="{{ asset('dist/default/assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

		<script src="{{ asset('dist/default/assets/demo/default/custom/crud/datatables/basic/basic.js')}}" type="text/javascript"></script>
		
		<script>
window.pageData = window.pageData || {};
window.pageData.compId =  '{{ $compId }}';

$(document).ready(function(){
	$('input.checkboxToggle').on('change', function(e){                
		console.log(e);
		$.ajax({
			type: "POST",
			url: "{{ url('api/AddCampaign') }}",   
			data :{
				'campaign_id': window.pageData.compId,
				'user_id' : $(this).data('userId'),
			},
			success: function(response){
				console.log(response);
			},
			error: function(e){
				console.log(e);
			}
		});
	
	});
	
});

</script>

@endsection