@extends('layouts.master')

<!-- @section('css')
@endsection

@section('breadcrumb')
             
							
@endsection -->

@section('content')
              
    <!--== Slider Area Start ==-->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-2 bread">Our Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>



    <!-- <h3 class="m-5 text-center" id="hfia"><i>COMING SOON...</i></h3> -->


						<!-- <p>Harvest Fire International Assembly is a flourishing church in Nigeria with headquaters in Oyo, Oyo state of Nigeria, having branches in Nigeria. </p> -->

     <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{url('blog_details/')}}" class="block-20" style="background-image: url('images/img/img9.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<span class="day">30</span>
            			<span class="mos">August</span>
            			<span class="yr">2020</span>
              	</div>
              	<div class="desc p-4">
                <h3 class="heading mt-2"><a href="#"> All you want to know about Bible</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{url('blog_details/')}}" class="block-20" style="background-image: url('images/img/img10.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<span class="day">22</span>
            			<span class="mos">May</span>
            			<span class="yr">2020</span>
              	</div>
              	<div class="desc p-4">
                <h3 class="heading mt-2"><a href="#"> All you want to know about Bible</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="{{url('blog_details/')}}" class="block-20" style="background-image: url('images/img/img15.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<span class="day">14</span>
            			<span class="mos">May</span>
            			<span class="yr">2020</span>
              	</div>
              	<div class="desc p-4">
                <h3 class="heading mt-2"><a href="#"> All you want to know about Bible</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{url('blog_details/')}}" class="block-20" style="background-image: url('images/img/img14.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<span class="day">18</span>
            			<span class="mos">January</span>
            			<span class="yr">2019</span>
              	</div>
              	<div class="desc p-4">
                <h3 class="heading mt-2"><a href="#"> All you want to know about Bible</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{url('blog_details/')}}" class="block-20" style="background-image: url('images/img/img13.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<span class="day">15</span>
            			<span class="mos">January</span>
            			<span class="yr">2019</span>
              	</div>
              	<div class="desc p-4">
                <h3 class="heading mt-2"><a href="#"> All you want to know about Bible</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="{{url('blog_details/')}}" class="block-20" style="background-image: url('images/img/img7.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<span class="day">14</span>
            			<span class="mos">January</span>
            			<span class="yr">2019</span>
              	</div>
              	<div class="desc p-4">
	                <h3 class="heading mt-2"><a href="#">All you want to know about Bible</a></h3>
	                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li> 
                <!-- <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li> -->
                 <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- <section class="ftco-section ftco-section-parallax bg-secondary ftco-no-pb">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white heading-section-no-line ftco-animate">
              <h2>Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

        
    <!-- End Main Body -->

@endsection

@section('script')
	
@endsection