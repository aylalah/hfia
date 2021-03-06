@extends('layouts.master')

<!-- @section('css')
@endsection

@section('breadcrumb')
             
							
@endsection -->

@section('content')
              
    <!--== Slider Area Start ==-->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/convention.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-2 bread">Upcoming Events</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Events <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<div class="event-wrap d-md-flex ftco-animate">
	          	<div class="img"style="background-image: url(images/convention.jpg);"></div>
	          	<div class="text pl-md-5">
	          		<h2 class="mb-3"><a href="#">Harvest Fire Int'l Convention</a></h2>
	          		<div class="meta">
		  						<p>
			  						<span><i class="icon-calendar mr-2"></i> <i class="text-muted">4th - 8th Nov, 2020 - 5pm daily</i></span>
			  						<span><i class="icon-my_location mr-2"></i> <a href="#">Harvest Fire Int'l Assembly</a></span>
			  						<span><i class="icon-location_city mr-2"></i>  22/24 Salvation Road, Araromi, Oyo, Oyo State</span>
		  						</p>
		  					</div>
		  					<p><a href="#" class="btn btn-primary" data-toggle="modal"
                  data-backdrop="false" data-target="#e">Read more</a></p>
	          	</div>
            </div>
                <div class="modal fade text-left mt-5" id="e" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
                  aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h3 class="modal-title" id="myModalLabel35"> CONVENTION</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form>
                              <div class="modal-body img" style="background-image:  linear-gradient(rgba(0,0,0,0.9), rgba(0,0,0,0.2)), url(images/convention.jpg);">
                                <p style="color:white"> <b>Harvest Fire Int'l Convention</b>is our annual Anniversary celebration which comes up on the first week of the moth of November. This year, it will hold for 5 days starting from the 4th of November through the 8th of November, themed <b>"DIVINE SETTLEMENT"</b>. The Bishop will be ministering along side with Bishop Jide Orire and Rev (Dr) Matthew Anyanwu. The services commences by 5pm everyday and 8am on the last day(8th Nov.). Come and be blessed!</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn grey btn-outline-danger" data-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-outline-primary">Save changes</button> --}}
                              </div>
                            </form>
                          </div>
                        </div>
                </div>
	          <div class="event-wrap d-md-flex ftco-animate">
	          	<div class="text pl-md-5">
	          		<h2 class="mb-3"><a href="#">...</a></h2>
	          		<div class="meta">
		  						<p>
			  						<span><i class="icon-calendar mr-2"></i> <i class="text-muted">To be updated</i></span>
			  						<span><i class="icon-my_location mr-2"></i> <a href="#">Harvest Fire Int'l Assembly</a></span>
			  						<span><i class="icon-location_city mr-2"></i>  22/24 Salvation Road, Araromi, Oyo, Oyo State</span>
		  						</p>
		  					</div>
		  					<p><a href="#" class="btn btn-primary">Read more</a></p>
	          	</div>
	          	<div class="img"style="background-image: url(images/img/img9.jpg);"></div>
	          </div>

	          <div class="event-wrap d-md-flex ftco-animate">
	          	<div class="img"style="background-image: url(images/img/img12.jpg);"></div>
	          	<div class="text pl-md-5">
	          		<h2 class="mb-3"><a href="#">...</a></h2>
	          		<div class="meta">
		  						<p>
			  						<span><i class="icon-calendar mr-2"></i> <i class="text-muted">To be updated</i></span>
			  						<span><i class="icon-my_location mr-2"></i> <a href="#">Harvest Fire Int'l Assembly</a></span>
			  						<span><i class="icon-location_city mr-2"></i>  22/24 Salvation Road, Araromi, Oyo, Oyo State</span>
		  						</p>
		  					</div>
		  					<p><a href="#" class="btn btn-primary">Read more</a></p>
	          	</div>
	          </div>

	          <div class="event-wrap d-md-flex ftco-animate">
	          	
	          	<div class="text pl-md-5">
	          		<h2 class="mb-3"><a href="#">...</a></h2>
	          		<div class="meta">
		  						<p>
			  						<span><i class="icon-calendar mr-2"></i> <i class="text-muted">To be updated</i></span>
			  						<span><i class="icon-my_location mr-2"></i> <a href="#">Harvest Fire Int'l Assembly</a></span>
			  						<span><i class="icon-location_city mr-2"></i>  22/24 Salvation Road, Araromi, Oyo, Oyo State</span>
		  						</p>
		  					</div>
		  					<p><a href="#" class="btn btn-primary">Read more</a></p>
	          	</div>
	          	<div class="img"style="background-image: url(images/img/img3.jpg);"></div>
	          </div>

	          <!-- <div class="event-wrap d-md-flex ftco-animate">
	          	<div class="img"style="background-image: url(images/event-5.jpg);"></div>
	          	<div class="text pl-md-5">
	          		<h2 class="mb-3"><a href="#">...</a></h2>
	          		<div class="meta">
		  						<p>
			  						<span><i class="icon-calendar mr-2"></i> <i class="text-muted">To be updated</i></span>
			  						<span><i class="icon-my_location mr-2"></i> <a href="#">Harvest Fire Int'l Assembly</a></span>
			  						<span><i class="icon-location_city mr-2"></i>  22/24 Salvation Road, Araromi, Oyo, Oyo State</span>
		  						</p>
		  					</div>
		  					<p><a href="#" class="btn btn-primary">Read more</a></p>
	          	</div>
	          </div>

	          <div class="event-wrap d-md-flex ftco-animate">
	          	
	          	<div class="text pl-md-5">
	          		<h2 class="mb-3"><a href="#">...</a></h2>
	          		<div class="meta">
		  						<p>
			  						<span><i class="icon-calendar mr-2"></i> <i class="text-muted">To be updated</i></span>
			  						<span><i class="icon-my_location mr-2"></i> <a href="#">Harvest Fire Int'l Assembly</a></span>
			  						<span><i class="icon-location_city mr-2"></i>  22/24 Salvation Road, Araromi, Oyo, Oyo State</span>
		  						</p>
		  					</div>
		  					<p><a href="#" class="btn btn-primary">Read more</a></p>
	          	</div>
	          	<div class="img"style="background-image: url(images/event-6.jpg);"></div>
	          </div>

          </div>  -->
          <!-- .col-md-8 -->
          <!--<div class="col-lg-4 sidebar ftco-animate">-->
          <!--  <div class="sidebar-box">-->
          <!--    <form action="#" class="search-form">-->
          <!--      <div class="form-group">-->
          <!--        <span class="icon icon-search"></span>-->
          <!--        <input type="text" class="form-control" placeholder="Type a keyword and hit enter">-->
          <!--      </div>-->
          <!--    </form>-->
          <!--  </div>-->
          <!--  <div class="sidebar-box ftco-animate">-->
          <!--    <div class="categories">-->
          <!--      <h3>Categories</h3>-->
          <!--      <li><a href="#">Church <span class="ion-ios-arrow-forward"></span></a></li>-->
          <!--      <li><a href="#">Counseling <span class="ion-ios-arrow-forward"></span></a></li>-->
          <!--      <li><a href="#">Wedding <span class="ion-ios-arrow-forward"></span></a></li>-->
          <!--      <li><a href="#">Fellowship <span class="ion-ios-arrow-forward"></span></a></li>-->
          <!--      <li><a href="#">Beliefs <span class="ion-ios-arrow-forward"></span></a></li>-->
          <!--      <li><a href="#">Bible Study <span class="ion-ios-arrow-forward"></span></a></li>-->
          <!--    </div>-->
          <!--  </div>-->

            <!-- <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> January 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> January 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> January 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div> -->
            </div>

            <!--<div class="sidebar-box ftco-animate">-->
            <!--  <h3>Tag Cloud</h3>-->
            <!--  <div class="tagcloud">-->
            <!--    <a href="#" class="tag-cloud-link">dish</a>-->
            <!--    <a href="#" class="tag-cloud-link">menu</a>-->
            <!--    <a href="#" class="tag-cloud-link">food</a>-->
            <!--    <a href="#" class="tag-cloud-link">sweet</a>-->
            <!--    <a href="#" class="tag-cloud-link">tasty</a>-->
            <!--    <a href="#" class="tag-cloud-link">delicious</a>-->
            <!--    <a href="#" class="tag-cloud-link">desserts</a>-->
            <!--    <a href="#" class="tag-cloud-link">drinks</a>-->
            <!--  </div>-->
            <!--</div>-->

            <!--<div class="sidebar-box ftco-animate">-->
            <!--  <h3>Paragraph</h3>-->
            <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>-->
            <!--</div>-->
          </div>

        </div>
      </div>
    </section> <!-- .section -->


    <!--<section class="ftco-section ftco-section-parallax bg-secondary ftco-no-pb">-->
    <!--  <div class="parallax-img d-flex align-items-center">-->
    <!--    <div class="container">-->
    <!--      <div class="row d-flex justify-content-center">-->
    <!--        <div class="col-md-7 text-center heading-section heading-section-white heading-section-no-line ftco-animate">-->
    <!--          <h2>Newsletter</h2>-->
    <!--          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>-->
    <!--          <div class="row d-flex justify-content-center mt-4 mb-4">-->
    <!--            <div class="col-md-8">-->
    <!--              <form action="#" class="subscribe-form">-->
    <!--                <div class="form-group d-flex">-->
    <!--                  <input type="text" class="form-control" placeholder="Enter email address">-->
    <!--                  <input type="submit" value="Subscribe" class="submit px-3">-->
    <!--                </div>-->
    <!--              </form>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
        
    <!-- End Main Body -->

@endsection

@section('script')
	
@endsection