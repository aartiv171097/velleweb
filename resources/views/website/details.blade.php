@extends('layouts.capsmain')
@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
        <div class="row">
         
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
                                      <tr>
                                          <td><img src="{{ asset('asset/images/profile-pic.png')}}" width="30" class="img-border-radius mr-4" /> Hitesh Chauhan</td>
                                          <td>Active</td>
                                          <td>4 Feb, 2019</td>
                                          <td>Download <i class="fa fa-download ml-3"></i></td>
                                      </tr>
                                      <tr class="finished">
                                          <td><img src="{{ asset('asset/images/profile-pic.png')}}" width="30" class="img-border-radius mr-4" /> Hitesh Chauhan</td>
                                          <td>Finished</td>
                                          <td>4 Feb, 2019</td>
                                          <td>Download <i class="fa fa-download ml-3"></i></td>
                                      </tr>
                                      <tr class="finished">
                                          <td><img src="{{ asset('asset/images/profile-pic.png')}}" width="30" class="img-border-radius mr-4" /> Hitesh Chauhan</td>
                                          <td>Finished</td>
                                          <td>4 Feb, 2019</td>
                                          <td>Download <i class="fa fa-download ml-3"></i></td>
                                      </tr>
                                      <tr>
                                          <td><img src="{{ asset('asset/images/profile-pic.png')}}" width="30" class="img-border-radius mr-4" /> Hitesh Chauhan</td>
                                          <td>Active</td>
                                          <td>4 Feb, 2019</td>
                                          <td>Download <i class="fa fa-download ml-3"></i></td>
                                      </tr>
                                      <tr>
                                          <td><img src="{{ asset('asset/images/profile-pic.png')}}" width="30" class="img-border-radius mr-4" /> Hitesh Chauhan</td>
                                          <td>Active</td>
                                          <td>4 Feb, 2019</td>
                                          <td>Download <i class="fa fa-download ml-3"></i></td>
                                      </tr>
                                      <tr>
                                          <td><img src="{{ asset('asset/images/profile-pic.png')}}" width="30" class="img-border-radius mr-4" /> Hitesh Chauhan</td>
                                          <td>Active</td>
                                          <td>4 Feb, 2019</td>
                                          <td>Download <i class="fa fa-download ml-3"></i></td>
                                      </tr>
                                  
                                  </tbody>
                                  
                               </table>
                              
                           </div>
                           
                           
                           
                    
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
      
       
      
      
      
       
      