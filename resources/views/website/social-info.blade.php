@extends('layouts.capsmain')
@section('css')
<<style>


.container-fluid{
  margin-left: -97px;
}
#btn
{
  padding-top:10px;
}
.col-md-offset-4 {
   
    margin-top: -87px;
}
wrapper {
   
    margin-top: -27px;
}
</style>
@endsection

@section('content')


<div class="content-wrapper">
        <div class="container-fluid">
        <div class="row">
         
        <section class="content pb-0">
            <div class="row">
            <form method="POST" action="{{ route('social-info.update' , Auth::user())}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('put')}}
              @php 
                $user = Auth::user();
                
              @endphp
              <section class="col-md-5 col-md-offset-4">
                             
                  <div class="clearfix" style="margin:40px;"></div>
                  <p class="text-center text-black f-14 mt-5 mb-2 text-dark-grey">Add Your Instagram Profile Link </p>
              
                    <div class="bg-white box-style p-2 mt-4 mb-3">
                         <input type="text" class="form-control " name="link" value="{{ $user->link }}"  /> 
                        </div>
                        <div class="clearfix"></div> 
                    <p class="text-center text-black f-14 mt-5 mb-2 text-dark-grey">Avg. numnber of impression per story</p>
              
                    <div class="bg-white box-style p-2 mt-4 mb-3">
                         <input type="text" class="form-control " name="aips" value="{{ $user->aips }}" placeholder="E.g. 10,000" /> 
                        </div>
                         <div class="clearfix"></div>
                   
                    <div class="clearfix"></div>
                    <p class="text-center text-black f-14 mt-4 mb-2 text-dark-grey">Avg. numnber of impression per Post</p>
              
                    <div class="bg-white box-style p-2 mt-4 mb-3">
                    <input type="text" class="form-control  " name="aipp" value="{{ $user->aipp }}" placeholder="E.g. 10,000" /> 
                       <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    
                    
                    <p class="text-center text-black f-14 mt-5 mb-2 text-dark-grey">Select category</p>
                    <div class="bg-white box-style p-2 mt-4">
                    <select name="category" class="form-control sign-up mt-0">
                       
                        <option >Select Category</option>
                        <option {{  $user->category == "Fashion & Style" ? 'selected' : '' }} value="Fashion & Style">Fashion & Style</option>
                        <option {{  $user->category == "Travel Blogger" ? 'selected' : '' }} value="Travel Blogger">Travel Blogger</option>
                        <option {{  $user->category == "Health & Fitness" ? 'selected' : '' }} value="Health & Fitness">Health & Fitness</option>
                        <option {{  $user->category == "Comedy" ? 'selected' : '' }} value="Comedy">Comedy</option>
                        <option {{  $user->category == "Technology" ? 'selected' : '' }} value="Technology">Technology</option>
                        <option {{  $user->category == "Arts & Crafts" ? 'selected' : '' }} value="Arts & Crafts">Arts & Crafts</option>
                        <option {{  $user->category == "Photography" ? 'selected' : '' }} value="Photography">Photography</option>

                    </select>
                       <div class="clearfix"></div>
                    </div>
                    <div id="btn">
                    <div  class="col-md-6">
                  <button class="btn btn-primary">Save Changes</button>
                 </div>
                <div class="col-md-6">
                  <button class="btn btn-danger">Cancel</button>
             </div>
              </div>
              </div>
                      
              </section>
              
              
             
              
                
              
            </div>
            
             
            
          </section>
        
          </form>   
          </div>
        </div>
        
        
        </div>
         
        
           
             
      
      
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
          
       
      
      