@extends('front.master')
@section('body')
		
	<main role="main">
      <!-- Content -->
      <article>
        <header class="section" style="background: #152732">
          <div class="line">        
            <h1 class="margin-top-bottom-40 text-size-60 text-line-height-1" style="color: white">Information</h1>
            <p class="margin-bottom-0 text-size-16">For further information you can email or call us.</p>
          </div>  
        </header>
        <div class="section background-white"> 
          <div class="line margin-bottom-60">
            <div class="margin">

              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-envelope icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0 margin-bottom">
                    <h3 class="margin-bottom-0">E-mail</h3>
                    <p>contact@sampledomain.com<br>
                       office@sampledomain.com
                    </p>              
                  </div>
                </div>
              </div>

              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-phone icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0">
                    <h3 class="margin-bottom-0">Phone Numbers</h3>
                    <p><span class="text-primary">Infoline: 0800 4521 800 50</span>
                       Office: 0450 5896 625 16
                    </p>             
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="line">
            <div class="margin">
              <!-- Contact Form -->
              <div class="s-12 m-12 l-6">
                <h2 class="margin-bottom-10">Leave Message</h2>
                <form name="contactForm" class="customform" method="post">
                  <div class="line">
                    <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="email" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" />
                        <p class="email-error form-error">Please enter your e-mail.</p>
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="name" class="name" placeholder="Your name" title="Your name" type="text" />
                        <p class="name-error form-error">Please enter your name.</p>
                      </div>
                    </div>
                  </div>
                  <div class="s-12"> 
                    <input name="subject" class="subject" placeholder="Subject" title="Subject" type="text" />
                    <p class="subject-error form-error">Please enter the subject.</p>
                  </div>
                  <div class="s-12">
                    <textarea name="message" class="required message" placeholder="Your message" rows="3"></textarea>
                    <p class="message-error form-error">Please enter your message.</p>
                  </div>
                  <div class="s-12"><button class="s-12 submit-form button background-primary" type="submit">Submit Button</button></div>
                </form>
              </div>

            </div>    
          </div>  
        </div> 
      </article>

      <!-- Section 5 -->
      <section class="section background-white text-center">
        <div class="line">
          <h2 class="text-size-50  text-m-size-40 text-center">Sponsor</h2>
          <hr class="break-small background-primary break-center">
          <div class="carousel-default owl-carousel carousel-wide-arrows">
            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="{{asset('admin/img/avatar-6.jpg')}}" alt="" style="border-radius: 50%;">
                <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <p class="h1 text-size-16">Scott Star / CEO / Company</p>
              </div>
            </div>
            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="{{asset('admin/img/avatar-6.jpg')}}" alt="" style="border-radius: 50%;">
                <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <p class="h1 text-size-16">Mark Stoner / Web Developer / Company</h5>
              </div>
            </div>
            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="{{asset('admin/img/avatar-6.jpg')}}" alt="" style="border-radius: 50%;">
                <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <p class="h1 text-size-16">Jane Naismith / Web Designer / Company</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection