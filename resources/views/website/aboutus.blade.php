@extends('layouts.aboutmain')
@section('content')
<section class="section-slider no-padding">
    <div class="banner-slider" id="banner-slider">                
        <div class="slider-item text-center" data-image="{{ asset('assets/images/slider-bg.jpg')}}" style="background-position:top">
            <div class="slider-text text-left">
                <div class="container">
                    <div class="col-md-5 p-0">
                        <p class="f-22 mb-0 mt-5 pt-5 text-white text-uppercase title"><strong>Our Mission And Story</strong></p>
                        <img src="{{ asset('asset/images/p-line.png')}}">
                        <p class="text-white mt-4 f-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis turpis sollicitudin, viverra nisi vitae, faucibus libero. Sed quis tellus sapien.Maecenas at enim ligula. Pellentesque sodales, metus vitae cursus consequat, libero neque feugiat urna, dignissim tristique mi ipsum eget tellus. Nullam eu leo ac augue fringilla aliquet eget sit amet felis.</p>
                    </div>
                    <div class="col-md-7 p-0 text-right">
                        <img src="{{ asset('assets/images/about-img.png')}}" />
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<section class="bg-white">
     <div class="container">
         <div class="row">
            <div class="col-md-12 text-center" style="line-height:16px">
                <p class=" text-theme mb-0 f-25 text-uppercase">Want to know more or get involved?</p>
                <img src="{{ asset('assets/images/get-in-touch.jpg')}}"  />
            </div>
             
        
        </div>
     
     </div>
</section>


 

   
@endsection