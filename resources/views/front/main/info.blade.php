@extends('front.master')
@section('body')
		
	<main role="main">
      <!-- Content -->
      <article>
        <header class="section" style="background: #111923">
          <div class="line">        
            <h1 class="margin-top-bottom-40 text-size-60 text-line-height-1" style="color: white">Information</h1>
            <p class="margin-bottom-0 text-size-16">For further information you can email or call us.</p>
          </div>  
        </header>
      </article>

      <section class="section background-white">
           <div class="line" >

              <div class="s-12 m-12 l-4 ">
                <div class="padding-2x block-bordered border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-envelope icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0 margin-bottom">
                    <h3 class="margin-bottom-0">E-mail</h3>
                    <p>info.covid19@madebybangladesh.com<br>
                       office@sampledomain.com
                    </p>              
                  </div>
                </div>
              </div>


          </div>
      </section>

      <!-- Section 5 -->
      <section class="section background-white text-center">
        <div class="line">
          <h2 class="text-size-50  text-m-size-40 text-center">Cloud Sponsor</h2>
          <hr class="break-small background-primary break-center">
          <div class="carousel-default owl-carousel carousel-wide-arrows">
            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="{{asset('admin/img/avatar-6.jpg')}}" alt="" style="border-radius: 50%;">
                <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <p class="h1 text-size-16">Scott Star / CEO / Company</p>
              </div>
            </div>
            
          </div>
        </div>
      </section>
    </main>

@endsection