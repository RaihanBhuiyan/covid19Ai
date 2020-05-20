@extends('front.master')
@section('body')
		
	<main role="main">
      <!-- Content -->
      <article>
        <header class="section" style="background: #111923">
          <div class="line">        
            <h1 class="margin-top-bottom-40 text-size-60 text-line-height-1" style="color: white">Information</h1>
            <p class="margin-bottom-5 text-size-16" align="justify">
              From the mindset of social responsibility we are introducing AI(Artificial Intelligence) based solution for screening radiography images to detect COVID-19 free of cost to help to accelerate treatment of patients in Bangladesh at this critical situation. Any Hospitals or Health Organizations of Bangladesh can use this AI-based solution for screening radiography images. This is a cheapest, fastest and effective screening method for detecting COVID-19 cases. This system will help hospital’s concerned to take preliminary decisions about patients and accelerate treatment of those who need it the most.
            </p>
            <p class="margin-bottom-5 text-size-16" align="justify">
              <b style="color: #fff">Background </b>: The COVID-19 pandemic continues to have a devastating effect on the health and well-being of the global population. A critical step in the fight against COVID-19 is effective screening of infected patients, with one of the key screening approaches being radiology examination using chest radiography. It was found in early studies that patients present abnormalities in chest radiography images that are characteristic of those infected with COVID-19.
            </p>
            <p class="margin-bottom-5 text-size-16" align="justify">
              <b style="color: #fff">How It Works </b>: Motivated by the radiology examination AI-based COVID-19 Diagnosis System is design and developed for screening chest radiography images. This system making decisions based on relevant information from the chest radiography images within few seconds with COVID-19 Positive Machine Learning Predictive Value 97.9% and Sensitivity 94.0%
            </p>
            <p class="margin-bottom-0 text-size-16" align="justify">
              <b style="color: #fff">How To Use </b>: This diagnosis facility is only for Hospitals and Health Care Organizations not for personal use. Interested Hospitals or Health Care Organizations can feel free to contact us by mentioned email address below to learn how to use this facility. For use this system concerned person of Hospitals or Health Care Organizations must have to complete registration process with valid information.   
            </p>
            <br>
            <p class="margin-bottom-0 text-size-16">
              <b style="color: #fff">If you are new user,then register here </b>
              <div class="text-center" style="padding-top: 10px">
                <a class="btn btn-lg btn-dark btn-block btn-login text-uppercase font-weight-bold mb-2" class="small" href="{{url('registration')}}">Register</a>
              </div>
            </p>
          </div>  
        </header>
      </article>

      <section class="section background-white">
           <div class="line" >

              <div class="s-12 m-12 l-4 ">
                <div class="padding-2x block-bordered border-radius">
                  <div class="float-left hide-s" style="margin: -19px 0;">
                    <i class="icon-sli-envelope icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0" style=" margin: -8px 0;">
                    <h3 class="margin-bottom-0">E-mail</h3>
                    <p>info.covid19@madebybangladesh.com</p>
                  </div>
                  <br>
                  <h4 align="justify" style="margin: -20px 0;">Please mail us with valid Health Care Organization name, address and contact number of concerned person for use this COVID-19 screening facility</h4>
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
              <div class="s-12 m-12 l-12 center ">
                <img class="image-testimonial-small" src="{{asset('front/img/Atom_origin.png')}}" alt="" style="height: 100px">
                <h2 style="    margin-left: 147px;font-size: 18px;margin-top: -29px; margin-bottom: 35px;">Where imagination and technology meet</h2>
                <p class="h1 margin-bottom text-size-20" align="justify">
                  Atom AP Limited is an ISO 9001 certified and a CMMI Level 3 software development Japan-Bangladesh joint venture company, which has offices in Bangladesh, Malaysia and Japan. We have been serving the start-up community for over three decades. We treat our clients as our partner and we are always ready to do anything to make them successful. Quality, communication and on-time-delivery are our core business strengths with a talented multicultural team and a large offshore team. Our specialties lay in very cost effective rapid prototyping, full-cycle software development, testing/QA, sustaining/maintaining and supporting existing software and infrastructure, Mobile application development, Premium Cloud Services, Artificial Intelligence, IoT, Bi and Big Data  
                </p>
              </div>
            </div>
            
          </div>
        </div>
      </section>
    </main>

@endsection