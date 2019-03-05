@extends('admin.layouts.main')
@section('content')

<div class="content-wrapper">
        <div class="container-fluid">
        <div class="row">
         
        <section class="content pb-0">
            <div class="row">
              <section class="col-md-4 col-md-offset-4">
                    <p class="border-bottom-black pb-3 mt-5 f-16 mb-5 font-semi-bold text-center text-black"><img src="{{ asset('asset/images/insta.png')}}" /> Connect to instadram account</p>
              
                  <div class="clearfix"></div>
                    <p class="text-center text-black f-14 mt-5 mb-2 text-dark-grey">Avg. numnber of impression per story</p>
              
                    <div class="bg-white box-style p-2 mt-4 mb-3">
                         <input type="text" class="form-control social-input" placeholder="E.g. 10,000" /> <span class="f-13 pull-right mr-3" style="margin-top:7px">Not verified</span>
                       <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    <p class="text-center text-black f-14 mt-5 mb-2 text-dark-grey">Avg. top 4 location as per story video</p>
              
                    <div class="bg-white box-style p-2 mt-4 mb-3">
                         <input type="text" class="form-control social-input" placeholder="E.g. Mumbai, Delhi, Noida" /> <span class="f-13 pull-right mr-3" style="margin-top:7px">Not verified</span>
                       <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    <p class="text-center text-black f-14 mt-5 mb-2 text-dark-grey">Select category</p>
              
                    <div class="bg-white box-style p-2 mt-4">
                         <select class="form-control social-input" style="width:100%"><option>Select your category</option></select>
                       <div class="clearfix"></div>
                    </div>
                      
              </section>
              
              
              <div class="col-md-12 text-center">
                  <button class="btn btn-primary">Save Changes</button>
                  <button class="btn btn-danger">Cancel</button>
              </div>
              
                
              
            </div>
            
             
            
          </section>
        
            
          </div>
        </div>
        
        
        </div>
         
        
           
        
        
        
        
      
       
      <div id="share-barcode" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content box-shadow-none">
            <div class="modal-header no-border">
              <button type="button" class="close" data-dismiss="modal"><img src="{{ asset('asset/img/close-pop.png')}}" /></button>
            </div>
            <div class="modal-body text-center">
              <p class="pop-barcode no-margin"><img src="{{ asset('asset/img/pop-barcaode.jpg')}}" /></p>
                <h3 class="text-white">Share On</h3>
              <ul class="social-barcode no-padding">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>
              <div class="col-md-8 col-md-offset-2"><input type="text" class="form-control" style="background: none; color: #fff; ont-size: 13px" value="https://www.instagram.com/?hl=en" /></div>
              <br><br>
                <h5 class="text-white"><a href="#">Copy the Link</a></h5>
            </div>
          </div>
      
        </div>
      </div>
      
    @endsection  
       
      
      