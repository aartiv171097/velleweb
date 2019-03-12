@extends('siteadmin.layouts.main')
@section('css')
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
                       <span >Users Details</span>
                    </h3>
                </div>
             </div>             
                                 
                    
        </div>
        <div class="m-portlet__body">
            <div class="table-responsive">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable">
                    <thead>
                        <tr>
                            <th>S. No </th>
                            <th>image</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>Instagram</th>
                            <th>AIPS</th>
                            <th>AIPP</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @php $i=1; @endphp
                        @foreach($user as $row)
                    
                            
                            <tr>
                                    <td>{{ $i }}</td>
                                    <td style="text-align: center;">@if($row->image)
                                        <img style="width:100px; border-radius:20%; height: 50px;" src="{{ asset('images/user_images'.'/'. $row->image) }}"><br>{{$row->name}}
                                        @else
                                        <img style="width:100px; border-radius:20%;" src="{{ asset('images/user.png') }}"><br>
                                        <span >{{$row->name}}</span>
                                        @endif
                                    </td>

                                        <td>{{ $row->email}}</td>
                                        <td>{{ $row->phone}}</td>
                                        <td>
                                            <a href="{{ $row->link }}" target="_blank">
                                                <img style="width:100px; border-radius:20%; " src="{{ asset('images/instagram.png') }}">
                                            </a>
                                        </td>
                                        
                                        <td>{{ $row->aips}}</td>
                                        <td>{{ $row->aipp}}</td>
                                        <td>
                                            <div class="m-list-settings__item">
                                                <span class="m-list-settings__item-label"></span>
                                                    <span class="m-list-settings__item-control">
                                                       <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                                            <label>
                                                      <input type="checkbox" class="checkboxToggle" data-user-id="{{ $row->id }}" {{ $row->status == 1 ? 'checked' : '' }} id="checkbox" name="checkbox[]">
                                                          <span>{{ $i }}</span>
                                                    </label>
                                                   </span>
                                                </span>
                                             </div>
                                         </td>

                                

                            
                                </tr>

                            @php $i++ @endphp
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
<script src="{{ asset('dist/default/assets/demo/default/custom/crud/datatables/basic/basic.js')}}" type="text/javascript"></script>
		<script>
                window.pageData = window.pageData || {};
                $(document).ready(function(){
                    $('input.checkboxToggle').on('change', function(e){                
                        console.log(e);
                        let user_id = $(this).val();
                        $.ajax({
                            type: "POST",
                            url: "{{ url('api/ChangeStatusUser') }}",   
                            data :{
                                
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