@extends('layouts.aboutmain')
@section('content')
 
<section class="section-slider no-padding">
    <div class="banner-slider" id="banner-slider">                
        <div class="slider-item text-center" data-image="{{ asset('assets/images/slider-bg.jpg')}}" style="background-position:top">
            <div class="slider-text text-left">
                <div class="container">
                    <div class="col-md-5 p-0 mt-5 pt-5">
                        <p class="f-22 mb-0 mt-5 pt-5 text-white text-uppercase title"><strong>Contact Us</strong></p>
                        <img src="{{ asset('asset/images/p-line.png')}}">
                        <p class="text-white mt-4 f-15">If you'd like to hoin BrandCer, find out more or see exactly how we could make your life easier, we'd love to hear from you.<br>
                            <img src="{{ asset('assets/images/contact.png')}}" style="margin-left:-25px" />
                        </p>
                    </div>
                    <div class="col-md-7 p-0 text-right">
                        <img src="{{ asset('assets/images/contact-img.png')}}" class="mt-5" />
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>


 
 
 
@endsection