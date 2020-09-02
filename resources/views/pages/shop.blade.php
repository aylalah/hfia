@extends('layouts.master')

<!-- @section('css')
@endsection

@section('breadcrumb')
             
							
@endsection -->

@section('content')
            
    <!--== Slider Area Start ==-->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/book.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-2 bread">Shop</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Shop <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <!-- <h3 class="m-5 text-center" id="hfia"> Books written by the Bishop</h3> -->

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <h2 class="mb-2"><span class="px-4">Books</span></h2>
            <span class="subheading">Experience God's Presence</span>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4">
        		<div class="sermon-wrap sermon-wrap-2 mb-4 ftco-animate">
    					<a href="#" class="img" style="background-image: url(images/book.jpg);"></a>
    					<div class="text p-4 bg-light text-center">
    						<h2 class="mb-3"><a href="#">Overcoming Spirits of Infirmities</a></h2>
		  					<div class="meta">
		  						<p>
			  						<span class="mr-2">Written By <a href="#" class="ptr">Bishop Gift Chuks Nnaji</a></span>
			  						<span class="mr-2">Categories: <span style="color:#FD9504"> Healing, Miracles</span></span><br/>
			  						<span><a href="#">2020</a></span>
		  						</p>
		  					</div>
								<p class="">
									<a href="{{url('contact/#form')}}" class="btn-custom p-2 text-center"><span class="icon-download"></span> Buy Book</a>
								</p>
    					</div>
  					</div>
        	</div>
        	<div class="col-md-4">
        		<div class="sermon-wrap sermon-wrap-2 mb-4 ftco-animate">
    					<a href="{{url('contact/')}}" class="img" style="background-image: url(images/book2.jpeg);"></a>
    					<div class="text p-4 bg-light text-center">
    						<h2 class="mb-3"><a href="{{url('contact/')}}">Overcoming Water Spirit on Assignment</a></h2>
		  					<div class="meta">
		  						<p>
			  						<span class="mr-2">Written By <a href="#" class="ptr">Bishop Gift Chuks Nnaji</a></span>
			  						<span class="mr-2">Categories: <span style="color:#FD9504"> Healing, Deliverance</span></span><br/>
			  						<span><a href="#">2020</a></span>
		  						</p>
		  					</div>
								<p class="">
									<a href="{{url('contact/#form')}}" class="btn-custom p-2 text-center"><span class="icon-download"></span> Buy Book</a>
								</p>
    					</div>
  					</div>
        	</div>
        	<div class="col-md-4">
        		<div class="sermon-wrap sermon-wrap-2 mb-4 ftco-animate">
    					<a href="#" class="img" style="background-image: url(images/book3.jpeg);"></a>
    					<div class="text p-4 bg-light text-center">
    						<h2 class="mb-3"><a href="#">Deeper Walk in the Spirit</a></h2><br/>
		  					<div class="meta">
		  						<p>
			  						<span class="mr-2">Written By <a href="#" class="ptr">Bishop Gift Chuks Nnaji</a></span>
			  						<span class="mr-2">Categories: <span style="color:#FD9504"> Teaching, Holy Spirit</span></span><br/>
			  						<span><a href="#">2020</a></span>
		  						</p>
		  					</div>
								<p class="">
									<a href="{{url('contact/#form')}}" class="btn-custom p-2 text-center"><span class="icon-download"></span> Buy Book</a>
								</p>
    					</div>
  					</div>
        	</div>
        	<div class="col-md-4">
        		<div class="sermon-wrap sermon-wrap-2 mb-4 ftco-animate">
    					<a href="#" class="img" style="background-image: url(images/book4.jpeg);"></a>
    					<div class="text p-4 bg-light text-center">
    						<h2 class="mb-3"><a href="#">Beauty of Holiness</a></h2><br/>
		  					<div class="meta">
		  						<p>
			  						<span class="mr-2">Written By <a href="#" class="ptr">Bishop Gift Chuks Nnaji</a></span>
			  						<span class="mr-2">Categories: <span style="color:#FD9504"> Teaching, Holiness</span></span><br/>
			  						<span><a href="#">2020</a></span>
		  						</p>
		  					</div>
								<p class="">
									<a href="{{url('contact/#form')}}" class="btn-custom p-2 text-center"><span class="icon-download"></span> Buy Book</a>
								</p>
    					</div>
  					</div>
        	</div>
        	<div class="col-md-4">
        		<div class="sermon-wrap sermon-wrap-2 mb-4 ftco-animate">
    					<a href="#" class="img" style="background-image: url(images/book5.jpeg);"></a>
    					<div class="text p-4 bg-light text-center">
    						<h2 class="mb-3"><a href="#">Men of Valour</a></h2><br/>
		  					<div class="meta">
		  						<p>
			  						<span class="mr-2">Written By <a href="#" class="ptr">Bishop Gift Chuks Nnaji</a></span>
			  						<span class="mr-2">Categories: <span style="color:#FD9504"> Teaching</span></span><br/>
			  						<span><a href="#">2020</a></span>
		  						</p>
		  					</div>
								<p class="">
									<a href="{{url('contact/#form')}}" class="btn-custom p-2 text-center"><span class="icon-download"></span> Buy Book</a>
								</p>
    					</div>
  					</div>
        	</div>
        </div>

        <!-- <div id="form" style="padding:20px"></div> -->

        <!-- <div class="col-lg-4 sidebar ftco-animate m-auto">
             <form action="#" class="bg-light p-5 contact-form text-center" >
              <div class="form-group">
                <input type="text" class="form-control" placeholder="...">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="...">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="...">
              </div>
              <div class="form-group">
                <input type="submit" value="Pay" class="btn btn-primary py-3 px-5">
              </div>
            </form>
           </div> -->
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


      
    



    <!-- <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="#" class="block-20" style="background-image: url('images/book.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<span class="day">30</span>
            			<span class="mos">August</span>
            			<span class="yr">2020</span>
              	</div>
              	<div class="desc p-4">
	                <h3 class="heading mt-2"><a href="#">Overcoming Spirits of Infirmities</a></h3>
	                <p>The book "OvercomingSpirits of Infirmities" is Holy Spirit inspired to bring Healing Miracle to the impossibly sick. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="#" class="block-20" style="background-image: url('images/book2.jpeg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<span class="day">22</span>
            			<span class="mos">May</span>
            			<span class="yr">2020</span>
              	</div>
              	<div class="desc p-4">
	                <h3 class="heading mt-2"><a href="#">Overcoming Water Spirit on Assignment</a></h3>
	                <p>Water Spirirts, also known as Marine or Mermaud Spirirts, are demonic forces with ther spiritual habitation as water.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="#" class="block-20" style="background-image: url('images/book3.jpeg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<span class="day">14</span>
            			<span class="mos">May</span>
            			<span class="yr">2020</span>
              	</div>
              	<div class="desc p-4">
	                <h3 class="heading mt-2"><a href="#">Deeper Walk in the Spirit</a></h3>
	                <p>God desires you live, walk and operate at the Godhead level. This can only be possible if you learn to live, walk and be led by Holy Spirit.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="#" class="block-20" style="background-image: url('images/book4.jpeg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<span class="day">18</span>
            			<span class="mos">January</span>
            			<span class="yr">2019</span>
              	</div>
              	<div class="desc p-4">
	                <h3 class="heading mt-2"><a href="#">Beauty of Holiness</a></h3>
	                <p>Holiness is a subject that is very much dreaded by many, though they have had a genuine salvation encounter with the Lord Jesus Christ.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="#" class="block-20" style="background-image: url('images/book5.jpeg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<span class="day">15</span>
            			<span class="mos">January</span>
            			<span class="yr">2019</span>
              	</div>
              	<div class="desc p-4">
	                <h3 class="heading mt-2"><a href="#">Men of Valour</a></h3>
	                <p>"Men of Valour " is about men fully equipped with the know-how to divine strategies for calming storms of life.</p>
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
                <li class="active"><span>1</span></li> -->
                <!-- <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li> -->  
                <!-- <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> -->



    @endsection

@section('script')
	
@endsection