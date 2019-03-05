@extends('layouts.mainbrands')
@section('content')
<section class="section-slider no-padding">
    <div class="brand-slide">                
        <div class="container">
            <div class="col-md-6 p-0">
                <div class="brand-text-bg mt-5">
                    <p class="f-22 mb-0 text-white text-uppercase">BrandCer for Brands!</p>
                    <img src="{{ asset('assets/images/p-line.png')}}" />
                    <p class="mt-4 f-13" style="color:#00d8ff">If you are a brand, write to us at<br>example@gmail.com - and let us create<br>amazing, customised campaigns for you with<br>India’s largest community of online influencers!</p>
                </div>
            </div> 
        </div>
    </div>
</section>


 


<section>
     <div class="container">
         <div class="row">
            <div class="col-md-12 text-center" style="line-height:16px">
                <p class="section-shadow section-col mb-0 f-20 font-semi-bold">How Does It Work?</p>
                <img src="{{ asset('assets/images/section-line.png')}}" style="margin-left:-90px" />
            </div>
            
            <div class="col-md-12 mt-5 pt-3">
                <div class="row mb-4">
                    <div class="col-md-1 col-md-offset-2">
                        <img src="{{ asset('assets/images/h1.png')}}" />
                    </div>
                    <div class="col-md-8">
                        <p class="f-14 brd-txt">Share a brief background of your brand, the type of Influencers you are looking to work with and your main goal for the campaign at example@gmail.com</p>
                    </div>
                </div>
                
                <div class="row mb-4">
                    <div class="col-md-1 col-md-offset-2">
                        <img src="{{ asset('assets/images/h2.png')}}" />
                    </div>
                    <div class="col-md-8">
                        <p class="f-14 brd-txt mt-4">Based on the brief you will receive the list of influencers and their respective quotes</p>
                    </div>
                </div>
                
                <div class="row mb-4">
                    <div class="col-md-1 col-md-offset-2">
                        <img src="{{ asset('assets/images/h3.png')}}" />
                    </div>
                    <div class="col-md-8">
                        <p class="f-14 brd-txt mt-4">Select Influencers you would like to work with, based on your marketing budget</p>
                    </div>
                </div>
                
                <div class="row mb-4">
                    <div class="col-md-1 col-md-offset-2">
                        <img src="{{ asset('assets/images/h4.png')}}" />
                    </div>
                    <div class="col-md-8">
                        <p class="f-14 brd-txt mt-4">Get coverage from Influencers on their social media handles</p>
                    </div>
                </div>
            </div>
        
        </div>
     
     </div>
</section>


 <section class="client-bg">
     <div class="container">
         <div class="text-center" style="line-height:16px">
            <p class="section-shadow section-col mb-0 f-20 font-semi-bold">Brands We've Worked With</p>
            <img src="{{ asset('assets/images/section-line.png')}}" style="margin-left:-240px" />
        </div>
        
        
         <div class="owl-single mt-5">
            <div class="row">
                <div class="col-md-12">
                    <ul class="client-list">
                        <li><img src="{{ asset('assets/images/c1.png') }}" /></li>
                        <li><img src="{{ asset('assets/images/c2.png') }}" /></li>
                        <li><img src="{{ asset('assets/images/c3.png') }}" /></li>
                        <li><img src="{{ asset('assets/images/c4.png') }}" /></li>
                        <li><img src="{{ asset('assets/images/c5.png') }}" /></li>
                    </ul>
                </div>                  
            </div>
             <div class="row">
                <div class="col-md-12">
                    <ul class="client-list">
                        <li><img src="{{ asset('assets/images/c1.png') }}" /></li>
                        <li><img src="{{ asset('assets/images/c2.png') }}" /></li>
                        <li><img src="{{ asset('assets/images/c3.png') }}" /></li>
                        <li><img src="{{ asset('assets/images/c4.png') }}" /></li>
                        <li><img src="{{ asset('assets/images/c5.png') }}" /></li>
                    </ul>
                </div>                  
            </div>
        </div>
     
     </div>
</section>

   

@endsection


