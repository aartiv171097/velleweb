@extends('siteadmin.layouts.main')
@section('css')

<link href="{{ asset('dist/default/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

		
		<link href="{{ asset('dist/default/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		
		<link href="{{ asset('dist/default/assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

		<link rel="shortcut icon" href="{{ asset('dist/default/assets/demo/default/media/img/logo/favicon.ico')}}" />

@endsection
@section('content')
<!-- BEGIN: Subheader -->
{{-- <div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">{{ __('Product_Request')}} </h3>
        </div>       
    </div>
</div> --}}


<div class="m-subheader ">

<div class="m-content">
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                       <span >Campaign Details</span>
                    </h3>
                </div>
             </div>             
                                 
                    
        </div>
        <div class="m-portlet__body">
            <div class="table-responsive">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable"  id="m_table_1">
                    <thead>
                        <tr>
                                <th>Request ID</th>
                            <th>Name</th>
                            <th>Brand Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                 {{--  @php $i=1; @endphp--}}
                        @foreach($star as $row)
                    
                            
                            <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->brand_name}}</td>
                                        <td>{{ $row->email}}</td>
                                        <td>{{ $row->phone}}</td>
                                        <td>
                                         <div class="m-list-settings__item">
                                                <span class="m-list-settings__item-label"></span>
                                                    <span class="m-list-settings__item-control">
                                                       <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                                            <label>
                                                      <input type="checkbox" class="checkboxToggle" data-camp-id="{{ $row->id }}" {{ $row->status == 1 ? 'checked' : '' }} id="checkbox" name="checkbox[]">
                                                          <span>{{ $row->id }}</span>
                                                    </label>
                                                   </span>
                                                </span>
                                             </div>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.details',$row->id)}}"><button class="btn btn-primary">View Details</button></a></td>
                                        
                                       <td><a href="{{route('admin.campaign',encrypt($row->id))}}"><button class="btn btn-primary">Assign Campaign</button></a></td>
                            
                                </tr>


                           {{-- @php $i++ @endphp--}}
                        @endforeach 
                        
                                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>

    
@endsection
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>

<script src="{{ asset('theme/default/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{ asset('theme/default/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

		<script src="{{ asset('theme/default/assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

		<script src="{{ asset('theme/default/assets/demo/default/custom/crud/datatables/basic/basic.js')}}" type="text/javascript"></script>
<script>
  window.pageData = window.pageData || {};
                $(document).ready(function(){
                    $('input.checkboxToggle').on('change', function(e){                
                        console.log(e);
                        let camp_id = $(this).val();
                        $.ajax({
                            type: "POST",
                            url: "{{ url('api/ChangeStatusCampaign') }}",   
                            data :{
                                
                               'camp_id' : $(this).data('campId'),
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

//$(document).ready(function(){
//	$('input.checkboxToggle').on('change', function(e){                
//		console.log(e);
  //      var status = $(this).is(':checked') ? 1 : 0;
	//	$.ajax({
	//		type: "POST",
	//		url: "{{ url('api/ChangeStatusCampaign') }}",   
	//		data :{
      //          'camp_id' : $(this).data('campId'),
        //        'status' : status
		//	},
		//	success: function(response){
		//		console.log(response);
		//	},
		//	error: function(e){
		//		console.log(e);
		//	}
		//});
	
	//});
	
//});
    </script>
@endsection