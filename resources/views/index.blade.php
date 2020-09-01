@extends('layouts.master')

<!-- @section('css')
@endsection

@section('breadcrumb')
             
							
@endsection -->

@section('content')
              
    <!--== Slider Area Start ==-->
    <div class="hero-wrap js-fullheight " style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.2)),url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	<h1 class="mb-0" style="font-family:arial; font-weight:bold; line-height:70px"><span style=" margin-bottom:-60px;">Welcome</span> <br /><span style="color:#fff; background:#000; border-radius:50%; font-size: 10px;padding:5px; width:30px; text-align:center; margin:auto; line-height:25px;">TO</span><br /> <span style="margin-top:-85px; font-size:40px;"> Family of God Charismatic Ministries Worldwide (Inc.)</span></h1>
          	<h3 class="subheading mb-4 pb-1">Where the Holy Spirit is real</h3>
          	<p><a id="button" href="#" class="btn btn-primary py-3 px-4">New here!</a> <a id="button" href="https://solid9.streamupsolutions.com/proxy/jtwagjwn?mp=/;type=mp3"  target="_blank" class="btn btn-white py-3 px-4"><span class="icon-play-circle"></span> Live Stream</a></p>
            <div class="mouse">
							<a href="#" class="mouse-icon">
								<div class="mouse-wheel mb"><span class="ion-ios-arrow-down"></span></div>
							</a>
						</div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-intro py-5" style="background-image: url(images/img/img6.jpg);">
    	<div id="up" class="overlay"></div>
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col-md-6 ftco-animate">
    				<h2 class="subheading"><span class="icon-calendar"></span> Upcoming Events</h2>
    				<h2><a href="#">"Global Youth Deliverance Crusade" <br/>
    				<b>NO MORE LIMITS</b> <br/>&mdash; Bishop Gift Chuks Nnaji <br/> <span style="font-size:16px; margin-left:10px">Church Cathedral</span> </a></h2>
						<p><a href="{{url('events/')}}" class="btn btn-primary px-4 py-2">View upcoming events</a></p>
    			</div>
    			<div id="up2" class="col-md-6 pl-md-5 ftco-animate">
    				<!-- <div id="timer" class="d-flex mb-3">
						  <div class="time" id="days"></div>
						  <div class="time pl-4" id="hours"></div>
						  <div class="time pl-4" id="minutes"></div>
						  <div class="time pl-4" id="seconds"></div>
						</div> -->
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-daily-verse bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 daily-verse text-center p-5">
    				<span class="flaticon-bible"></span>
    				<h3 class="ftco-animate" style="font-size:18px">"And it shall come to pass in the last days, that the mountain of the LORD's house shall be established in the top of the mountains, and shall be exalted above the hills; and all nations shall flow unto it. And many people shall go and say, Come ye, and let us go up to the mountain of the LORD, to the house of the God of Jacob; and he will teach us of his ways, and we will walk in his paths: for out of Zion shall go forth the law, and the word of the LORD from Jerusalem."</h3>
    				<h4 class="h5 mt-4 font-weight-bold ftco-animate">&mdash; Isaiah 2 : 2-3 KJV</h4>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <h2 class="mb-2"><span class="px-4">Our Services</span></h2>
            <!-- <span class="subheading">Church Services</span> -->
          </div>
        </div>
    		<div class="row">
    			<div class="col-lg-6">
    				<div id="service" style="height:200px" class="d-flex services ftco-animate text-lg-right">
	            <div id="icon"><div class="icon order-lg-last d-flex align-items-center justify-content-center"><span id="icon" class="flaticon-praying"></span></div></div>
	            <div id="service-note" class="media-body pr-lg-5">
	              <h3 class="heading mb-3">Supernatural Life Service</h3>
	              <p style="font-size:">The God we serve is a supernatural being and he expects us to operate from that realm. Fellowship with us every Sunday learn more about the supernatural life of Christ. Holds every <b>Sundays</b> by <b>8:30am</b>.</p>
	            </div>
	          </div>
	          <div id="service" style="height:200px" class="d-flex services ftco-animate text-lg-right">
	            <div id="icon"><div class="icon order-lg-last d-flex align-items-center justify-content-center"><span id="icon" class="flaticon-church"></span></div></div>
	            <div id="service-note" class="media-body pr-lg-5">
	              <h3 class="heading mb-3">Hannah and Esthers</h3>
	              <p style="font-size:">A multidenominational arm of women's ministry. Where the singles and expectant mothers gather to seek God's face for their specific needs.  Holds every <b>Tuesdays</b> by <b>6pm</b>.</p>
	            </div>
	          </div>
	          <div id="service" style="height:200px" class="d-flex services ftco-animate text-lg-right">
	            <div id="icon"><div class="icon order-lg-last d-flex align-items-center justify-content-center"><span id="icon" class="flaticon-bible"></span></div></div>
	            <div id="service-note" class="media-body pr-lg-5">
	              <h3 class="heading mb-3" style="font-size">Word, Miracle and Communion Service</h3>
	              <p>Faith comes by hearing and hearing by the word of God. Ignite your faith as you learn about and practice scriptural principles.  Holds every <b>Thursdays</b> by <b>6pm</b>.</p>
	            </div>
	          </div>
    			</div>

    			<div class="col-lg-6">
    				<div id="service" style="height:200px" class="d-flex services ftco-animate text-lg-left">
	            <div id="icon"><div class="icon d-flex align-items-center justify-content-center"><span id="icon" class="flaticon-social-care"></span></div></div>
	            <div id="service-note" class="media-body pl-lg-5">
	              <h3 class="heading mb-3">Family Communion</h3>
	              <p style="font-size">God operates with families because the devil fights hard to separate families. Experience family healing, revival and reunion in family communion.  Holds every <b>Second Sundays</b> of every month by <b>6pm</b> in ur various homes.</p>
	            </div>
	          </div>
	          <div id="service" style="height:200px" class="d-flex services ftco-animate text-lg-left">
	            <div id="icon"><div class="icon d-flex align-items-center justify-content-center"><span id="icon" class="flaticon-rings"></span></div></div>
	            <div id="service-note" class="media-body pl-lg-5">
	              <h3 class="heading mb-3">Atmosphere for Signs & Wonders </h3>
	              <p style="font-size">An interdenominational impartation and anointing service.  Holds every <b>Last Sundays</b> of every month by <b>6pm</b>.</p>
	            </div>
	          </div>
	          <div id="service" style="height:200px" class="d-flex services ftco-animate text-lg-left">
	            <div id="icon"><div  class="icon d-flex align-items-center justify-content-center"><span id="icon" class="flaticon-promotion"></span></div></div>
	            <div id="service-note" class="media-body pl-lg-5">
	              <h3 class="heading mb-3">Youth Church</h3>
	              <p>Join the teenagers and adult youth as they pant after God. They are the God chasers. Firebrands are the adult youth on fire for God.  Holds on <b>Sundays</b> by <b>11:30am</b>.</p>
	            </div>
	          </div>
    			</div>
    		</div>
    	</div>
    </section>
<!-- 
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section heading-section-light ftco-animate">
            <h2 class="mb-2"><span class="px-4">Sermon for Week</span></h2>
            <span class="subheading">Experience God's Presence</span>
          </div>
        </div>
    		<div class="row d-flex sermon-wrap">
  				<div class="col-md-6 d-flex align-items-stretch ftco-animate">
  					<div class="img" style="background-image: url(images/sermon-1.jpg);"></div>
  				</div>
  				<div class="col-md-6 py-4 text ftco-animate">
  					<h2 class="mb-4"><a href="sermon.html">Lord is Sufficient for all of our needs</a></h2>
  					<div class="meta">
  						<p>
	  						<span>Sermon from: <a href="#" class="ptr">Bishop Gift Chuks Nnaji</a></span>
	  						<span>Categories: <a href="#">God</a>, <a href="#">Pray</a></span>
	  						<span><a href="#">On Sunday 13 Jan, 2020</a></span>
  						</p>
  					</div>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p class="mt-4 btn-customize">
							<a href="https://vimeo.com/45830194" class="btn btn-primary px-4 py-3 mr-md-2 popup-vimeo"><span class="icon-play"></span> Watch Sermons</a> <a href="#" class="btn btn-black px-4 py-3 ml-lg-2"><span class="icon-download"></span> Download Sermons</a>
						</p>
  				</div>
    		</div>
    	</div>
    </section> -->



  <!--  <section class="ftco-section bg-light">-->
     
  <!--      <div class="row justify-content-center mb-5 pb-3">-->
  <!--        <div class="col-md-12 text-center heading-section heading-section-light ftco-animate">-->
  <!--          <h2 class="mb-2"><span class="px-4">Church Gallery</span></h2>-->
  <!--          <span class="subheading">Our Gallery</span>-->
  <!--        </div>-->
  <!--      </div>-->
		<!--	<div class="container">-->
		<!--		<div class="row">-->
		<!--			<div class="col-lg-12">-->
		<!--				<div class="row no-gutters">-->
		<!--					<div class="col-md-3 ftco-animate">-->
		<!--						<a href="images/gallery/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery/image_1.jpg);">-->
		<!--							<div class="icon mb-4 d-flex align-items-center justify-content-center">-->
		<!--    						<span class="icon-instagram"></span>-->
		<!--    					</div>-->
		<!--						</a>-->
		<!--					</div>-->
		<!--					<div class="col-md-3 ftco-animate">-->
		<!--						<a href="images/gallery/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery/image_2.jpg);">-->
		<!--							<div class="icon mb-4 d-flex align-items-center justify-content-center">-->
		<!--    						<span class="icon-instagram"></span>-->
		<!--    					</div>-->
		<!--						</a>-->
		<!--					</div>-->
		<!--					<div class="col-md-3 ftco-animate">-->
		<!--						<a href="images/gallery/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery/image_3.jpg);">-->
		<!--							<div class="icon mb-4 d-flex align-items-center justify-content-center">-->
		<!--    						<span class="icon-instagram"></span>-->
		<!--    					</div>-->
		<!--						</a>-->
		<!--					</div>-->
		<!--					<div class="col-md-3 ftco-animate">-->
		<!--						<a href="images/gallery/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery/image_4.jpg);">-->
		<!--							<div class="icon mb-4 d-flex align-items-center justify-content-center">-->
		<!--    						<span class="icon-instagram"></span>-->
		<!--    					</div>-->
		<!--						</a>-->
		<!--					</div>-->
  <!--                          <div class="col-md-3 ftco-animate">-->
		<!--						<a href="images/gallery/image_5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery/image_5.jpg);">-->
		<!--							<div class="icon mb-4 d-flex align-items-center justify-content-center">-->
		<!--    						<span class="icon-instagram"></span>-->
		<!--    					</div>-->
		<!--						</a>-->
		<!--					</div>-->
		<!--					<div class="col-md-3 ftco-animate">-->
		<!--						<a href="images/gallery/image_6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery/image_6.jpg);">-->
		<!--							<div class="icon mb-4 d-flex align-items-center justify-content-center">-->
		<!--    						<span class="icon-instagram"></span>-->
		<!--    					</div>-->
		<!--						</a>-->
		<!--					</div>-->
		<!--					<div class="col-md-3 ftco-animate">-->
		<!--						<a href="images/gallery/image_7.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery/image_7.jpg);">-->
		<!--							<div class="icon mb-4 d-flex align-items-center justify-content-center">-->
		<!--    						<span class="icon-instagram"></span>-->
		<!--    					</div>-->
		<!--						</a>-->
		<!--					</div>-->
		<!--					<div class="col-md-3 ftco-animate">-->
		<!--						<a href="images/gallery/image_8.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery/image_8.jpg);">-->
		<!--							<div class="icon mb-4 d-flex align-items-center justify-content-center">-->
		<!--    						<span class="icon-instagram"></span>-->
		<!--    					</div>-->
		<!--						</a>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--			</div>-->
					<!-- <div class="col-lg-6 d-flex align-items-stretch">
		<!--				<div id="map"></div>-->
		<!--			</div> -->-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</section>-->


    <section class="ftco-section testimony-section" style="background-image: url(images/bg_3.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-2">Our Ministers</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="width:30%;background-image: url(images/bishop.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                        <h2 class="name" style="font-size:25px;">Bishop Gift Chuks Nnaji</h2>
                    <span class="position">Presiding Bishop</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="width:30%;background-image: url(images/logo2.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                      <h3 class="name" style="font-size:25px;">Rev Mrs Glory Nnaji</h3>
                    <span class="position">Vice-President</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="width:30%;background-image: url(images/logo2.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                      <p class="name" style="font-size:25px;">Rev. James Emmanuel</p>
                    <span class="position">Administrator</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="width:30%;background-image: url(images/logo2.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="name" style="font-size:25px;">Rev. Bola Olufayo</p>
                    <span class="position">Church Affairs</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-8 py-5">
    				<div class="heading-section heading-section-no-line ftco-animate mb-5">
	            <h2 class="mb-2">Upcoming Events</h2>
	            <span class="subheading">Experience God's Presence</span>
	          </div>
	          <div class="event-wrap d-md-flex ftco-animate">
	          	<div class="img"style="background-image: url(images/sermon-1.jpg);"></div>
	          	<div class="text pl-md-5">
	          		<h2 class="mb-3"><a href="sermons.html">Know Jesus Christ Better Through Lines</a></h2>
	          		<div class="meta">
		  						<p>
			  						<span><i class="icon-calendar mr-2"></i> Monday, 8:00 Am - Tuesday, 8:00 Pm</span>
			  						<span><i class="icon-my_location mr-2"></i> <a href="#">Spring Church</a></span>
			  						<span><i class="icon-location_city mr-2"></i> 203 Fake St. Mountain View, San Francisco, California, USA</span>
		  						</p>
		  					</div>
		  					<p><a href="sermons.html" class="btn btn-primary">Read more</a></p>
	          	</div>
	          </div>
	          <div class="event-wrap d-md-flex ftco-animate">
	          	<div class="img"style="background-image: url(images/sermon-2.jpg);"></div>
	          	<div class="text pl-md-5">
	          		<h2 class="mb-3"><a href="sermons.html">Know Jesus Christ Better Through Lines</a></h2>
	          		<div class="meta">
		  						<p>
			  						<span><i class="icon-calendar mr-2"></i> Monday, 8:00 Am - Tuesday, 8:00 Pm</span>
			  						<span><i class="icon-my_location mr-2"></i> <a href="#">Spring Church</a></span>
			  						<span><i class="icon-location_city mr-2"></i> 203 Fake St. Mountain View, San Francisco, California, USA</span>
		  						</p>
		  					</div>
		  					<p><a href="sermons.html" class="btn btn-primary">Read more</a></p>
	          	</div>
	          </div>

    			</div>
    			<div class="col-lg-4 d-flex align-items-stretch">
    				<div class="subsermon p-5">
    					<h2 class="heading mb-5 ftco-animate">Recent Sermons</h2>
    					<div class="sermon-wrap mb-4 ftco-animate">
	    					<a href="sermons.html" class="img mb-3" style="background-image: url(images/event-1.jpg);"></a>
	    					<div class="text">
	    						<h2 class="mb-4"><a href="sermon.html">Lord is Sufficient for all of our needs</a></h2>
			  					<div class="meta">
			  						<p>
				  						<span>Sermon from: <a href="#" class="ptr">Felix Gonner</a></span>
				  						<span>Categories: <a href="#">God</a>, <a href="#">Pray</a></span>
				  						<span><a href="#">On Sunday 13 Jan, 2019</a></span>
			  						</p>
			  					</div>
									<p class="mt-4">
										<a href="https://vimeo.com/45830194" class="btn-custom  p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch Sermons</a>
									</p>
									<p class="mt-4">
										<a href="#" class="btn-custom  p-2 text-center"><span class="icon-download"></span> Download Sermons</a>
									</p>
	    					</div>
    					</div>
    					<a href="sermons.html" class="sermon-wrap sermon-wrap-2 d-flex align-items-start py-3 ftco-animate">
    						<div class="icon">
	    						<span class="icon-play"></span>
    						</div>
    						<div class="desc">
	    						<h3>Fruit of the Spirit</h3>
	    						<span class="time">20:30 mins</span>
    						</div>
    					</a>
    					<a href="sermons.html" class="sermon-wrap sermon-wrap-2 d-flex align-items-start py-3 ftco-animate">
    						<div class="icon">
	    						<span class="icon-play"></span>
    						</div>
    						<div class="desc">
	    						<h3>Fruit of the Spirit</h3>
	    						<span class="time">20:30 mins</span>
    						</div>
    					</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section heading-section-light ftco-animate">
            <h2 class="mb-2"><span class="px-4">Recent Blog</span></h2>
            <span class="subheading">Our Blog</span>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{url('blog_details/')}}" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<span class="day">18</span>
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
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{url('blog_details/')}}" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<span class="day">15</span>
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
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="{{url('blog_details/')}}" class="block-20" style="background-image: url('images/image_3.jpg');">
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
      </div>
    </section> -->

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