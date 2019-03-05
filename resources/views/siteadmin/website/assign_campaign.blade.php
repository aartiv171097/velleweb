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
										Assign Campaign User
										</h3>
									</div>
								</div>
								
							</div>
							<div class="m-portlet__body">

								<!--begin: Datatable -->
								<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
									<thead>
										<tr>
											
                                            <th>User Id </th>
											 <th>Campaign Id</th>
											 <th>Action</th>
                                            
										
										</tr>
									</thead>
									<tbody>
                                    
										<tr>
                                        
                                        <td></td>
                                        <td></td>
                                        <td></td>
										<td nowrap></td>
										
                                        </tr>
                                        
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
		


@endsection