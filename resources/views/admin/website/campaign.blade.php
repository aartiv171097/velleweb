@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
        <div class="row">
         
        <section class="content pb-0">
            <div class="row">
              <section class="col-md-12">
                    <div class="bg-white text-center" style="margin-top:100px;">
                             <p class="profile-setting"><img src="{{ asset('asset/images/profile-pic.png')}}" class="img-border-radius" /></p>
                           
                           <p class="f-14 normal-line-height text-black font-semi-bold">To receive CAMPAIGN,<br>complete your social info</p>
                           
                            
                           
                           
                           
                    
                    </div>
              </section>
              
              
                
              
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
       
      
      
      
       