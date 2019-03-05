@extends('layouts.capsmain')
@section('content')
<section class="content pb-0">
      <div class="row">
        <section class="col-md-9 col-md-offset-1 pt-5 pb-0">
              <div class="bg-white box-style">
              		  
                     
                     <div class="profile-form-box pt-5">
                     	 <table class="table comp-tab">
                         	<thead>
                            	<tr>
                                	<th>Brand</th>
                                    <th>Status</th>
                                	<th>Date</th>
                                    <th>Details</th>
                                </tr>                            
                            </thead>
                            <tbody>
                            @foreach(Auth::user()->AssignCampaign as $key =>$value)
                            <tr>
                                <td>{{ $value->Campaign->brand_name }}</td>
                                <td>{{ $value->Campaign->phone }}</td>
                                <td>{{date('d-m-Y', strtotime($value->Campaign->created_at)) }}</td>
                                <td> <a href="{{ route('show', $value->id) }}"><button class="btn btn-primary">View Campaign</button></a>
                                  </td>
                                
                            </tr>
                            @endforeach
                           
                            </tbody>
                            
                         </table>
                        
                     </div>
                     
                     
                     
              
              </div>
        </section>
        
        
          
        
      </div>
      
       
      
    </section>
 @endsection   
 @section('js')
 <script>
  window.somethingMadeChange=false;
  (function(){
    $(window).on("beforeunload", function() {
      if(window.somethingMadeChange){
        return confirm("Do you really want to close?"); 
      }
    });
    $(document).on('change keyup', 'input, select, textarea',function(){
      window.somethingMadeChange = true;
    });
  }());
  </script>
 @endsection  
       
      
      
      
       