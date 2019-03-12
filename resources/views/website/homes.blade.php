@extends('layouts.main')
@section('content')
<section class="section-slider no-padding">
        <div class="banner-slider" id="banner-slider">                
            <div class="slider-item text-center" data-image="{{ asset('asset/images/slider-bg.jpg') }}" style="background-position:top">
                <div class="slider-text text-left">
                    <div class="container">
                        <div class="col-md-5 p-0">
                            <p class="f-22 mb-0 mt-5 pt-5 text-white text-uppercase title">Show Your Ad Inside the<br>Instagram Story of Influencers</p>
                            <img src="{{ asset('asset/images/p-line.png')}}" />
                            <p class="text-white mt-4 f-15">We find right  Influencers to show your<br>Content inside their personal story</p>
                        </div>
                        <div class="col-md-7 p-0 text-right">
                            <img src="{{ asset('asset/images/slider-img.png')}}" />
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    
     
    
    
    <section class="what-bg">
         <div class="container">
             <div class="row">
                <div class="col-md-12 text-center" style="line-height:16px">
                    <p class="section-shadow section-col mb-0 f-20 font-semi-bold">What we do?</p>
                    <img src="{{ asset('asset/images/section-line.png')}}" style="margin-left:-90px" />
                </div>
                
                <div class="col-md-6">
                    <div class="what-box" style="border-bottom-right-radius:0">
                        nulla ac est pellentesque, ut convallis purus semper.                    
                    </div>                
                </div>
                
                <div class="col-md-6">
                    <div class="what-box" style="border-bottom-left-radius:0">
                        nulla ac est pellentesque, ut convallis purus semper.                    
                    </div>                
                </div>
                
                <div class="col-md-6">
                    <div class="what-box" style="border-top-right-radius:0">
                        nulla ac est pellentesque, ut convallis purus semper.                    
                    </div>                
                </div>
                
                <div class="col-md-6">
                    <div class="what-box" style="border-top-left-radius:0">
                        nulla ac est pellentesque, ut convallis purus semper.                    
                    </div>                
                </div>
            
            </div>
         
         </div>
    </section>
    
    
    <section class="pb-0" style="margin-top:-100px">
         <div class="container">
             <div class="row">
                <div class="col-md-12 text-center" style="line-height:16px">
                    <p class="section-shadow section-col mb-0 f-20 font-semi-bold">Our success story</p>
                    <img src="{{ asset('asset/images/section-line.png')}}" style="margin-left:-140px" />
                </div> 
            </div>                 
         </div> 
         <div class="row m-0 position-rel">
            <img src="{{ asset('asset/images/story-bg.jpg')}}" />
            <div class="container">
                <div class="story-text">
                    <p class="section-col f-18 mb-5 font-semi-bold" style="line-height:25px">Lorem ipsum dolor sit amet,<br>Consectetur adipiscing elit.<br>Etiam facilisis ornare<br>magna, eu rhoncus justo venenatis id</p>
                    <p class="f-16 font-semi-bold"><img src="{{ asset('asset/images/imp.jpg')}}" /> Impressions</p>
                    <p class="f-16 font-semi-bold"><img src="{{ asset('asset/images/reach.jpg')}}" /> Reach</p>
                    <p class="f-16 font-semi-bold"><img src="{{ asset('asset/images/number.jpg')}}" /> Number of Influencers</p>
                    
                    
                </div>
            </div>                
        </div>
          
    </section>
    
 @endsection
    