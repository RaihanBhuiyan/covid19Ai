@extends('front.master')
@section('body')
<?php
 
 $recovered_rate = $bdstatus[12]*100/$bdstatus[8];
 $death_rate = $bdstatus[10]*100/$bdstatus[8];


?>
<main role="main" style="margin: 71px 0;">
<br>
     <section class="pricing-area pt-100 pb-5" id="pricing">
     	<div class="container">
     		<div class="row">
				<span style="margin: 0 15px;">
					<img class="XnmoPc" aria-hidden="true"><img id="dimg_3" src="{{asset('front/img/bd-flag.png')}}" class="rISBZc" style=" height: 50px;width: 50px" />
				</span>
				<span style="margin: 12px 0;"><span>Bangladesh </span></span>
				<span style="margin: 12px 14px;"><span id="dateTime"></span></span>
			</div>
	      <div class="row">

	        <div class="col-xl-4 col-sm-12">
	                <div class="statistic-block block" style="padding: 17px 0px;background: #f7f7f7;">
	                  <div class="progress-details d-flex align-items-end justify-content-between" style="margin: 0 40px;">
	                    <div class="title" style="margin: 27px 0;">
	                      <div class="icon"><i class="icon-chart icon3x text-success"></i></div><strong>Recovered Rate</strong>
	                    </div>
	                    <div class="circlechart" data-percentage="<?php echo number_format($recovered_rate ,2) ; ?>">
	                    	Recovered Rate
	                	</div>
	                  </div>
	                </div>
	            </div>
	          <div class="col-xl-4 col-sm-12">
	                <div class="statistic-block block" style="padding: 17px 0px;background: #f7f7f7;">
	                  <div class="progress-details d-flex align-items-end justify-content-between" style="margin: 0 40px;">
	                    <div class="title" style="margin: 27px 0;">
	                      <div class="icon"><i class="icon-sli-chart icon3x text-danger"></i></div><strong>Fatality Rate</strong>
	                    </div>
		                <div class="circlechart" data-percentage="<?php echo number_format($death_rate ,2) ; ?>">
		                    Fatality Rate
		                </div>
	                  </div>
	                </div>
	            </div>
	            <div class="col-xl-4 col-sm-12">
	            	<div class="statistic-block block" style="padding: 4px 0px;background: #f7f7f7;">
	            		<h3 class="text-center">Today's Status</h3>
	                  <div class="progress-details d-flex align-items-end justify-content-between" style="margin: 0 40px;">

	                  	<div class="col-md-6 text-center">
	                  		<p>Cases</p>
	                  		<h4><i class="icon-sli-people icon2x text-warning"></i></h4>
	                  		<h3>{{$bdstatus[9]}}</h3>
	                  	</div>
	                  	<div class="col-md-6 text-center">
	                  		<p>Deaths</p>
	                  		<h4><i class="icon-sli-user-unfollow icon2x text-danger"></i></h4>
	                  		<h3>{{$bdstatus[11]}}</h3>
	                  	</div>
	                  </div>
	                </div>
	            </div>
	        </div>
	    </div>
     </section>

	<section class="pricing-area pt-100 pb-100" id="pricing">
		<div class="container">
			<div class="row"> 
               <div class="col-xl-12">
               		<canvas id="myChart" height="80"></canvas>
               </div>
            </div>
        </div>
    </section>

<section class="pricing-area pt-100 pb-100" id="pricing">
		<div class="container">
			<div class="row"> 
               <div class="col-xl-4">
				<div class="single-price">
				  <div class="price-title">
					<h4>Total Cases</h4>
				  </div>
				  
				  <div class="text-success price-title">
					<h4><i class="icon-sli-people icon3x text-warning"></i></h4>
				  </div>
				  
				  <div class=" center">
					<h2>{{$bdstatus[8]}}</h2>
				  </div>

			   </div>
			   </div>

			   <div class="col-xl-4">
					<div class="single-price">
					  <div class="price-title">
						<h4>Recovered</h4>
					  </div>
					  
					  <div class="text-success price-title">
						<h4><i class="icon-sli-user-following icon3x text-success"></i></h4>
					  </div>
					  
					  <div class=" center">
						<h2>{{$bdstatus[12]}}</h2>
					  </div>

				   </div>
			   </div>
			   
               <div class="col-xl-4">
				<div class="single-price">
				  <div class="price-title">
					<h4>Total Deaths</h4>
				  </div>
				  
				  <div class="text-success price-title">
					<h4><i class="icon-sli-user-unfollow icon3x text-danger"></i></h4>
				  </div>
				  
				  <div class=" center">
					<h2>{{$bdstatus[10]}}</h2>
				  </div>

			   </div>
			   </div> 
			   
			   
            </div>
		</div>
	  </section>

      




	<section class="pricing-area pt-100 pb-100" id="pricing">
		<div class="container">
			<br>
			<div class="row">
				<br><br><br>
				<span style="margin: 0 15px;">
					<img class="XnmoPc" aria-hidden="true"><img id="dimg_3" src="{{asset('front/img/world.png')}}" class="rISBZc" style=" height: 50px;width: 50px" />
				</span>
				<span style="margin: 12px 0;"><span>Worldwide</span></span>
				
			</div>

			<div class="row"> 
               <div class="col-xl-4">
				<div class="single-price">
				  <div class="price-title">
					<h4>Total Cases</h4>
				  </div>
				  
				  <div class="text-success price-title">
					<h4><i class="icon-sli-people icon3x text-warning"></i></h4>
				  </div>
				  
				  <div class=" center">
					<h2>{{$Worldstatus['cases']}}</h2>
				  </div>

			   </div>
			   </div>

			  <div class="col-xl-4">
				<div class="single-price">
				  <div class="price-title">
					<h4>Recovered</h4>
				  </div>
				  
				  <div class="text-success price-title">
					<h4><i class="icon-sli-user-following icon3x text-success"></i></h4>
				  </div>
				  
				  <div class=" center">
					<h2>{{$Worldstatus['recovered']}}</h2>
				  </div>

			   </div>
			   </div>
			   
               <div class="col-xl-4">
				<div class="single-price">
				  <div class="price-title">
					<h4>Total Deaths</h4>
				  </div>
				  
				  <div class="text-success price-title">
					<h4><i class="icon-sli-user-unfollow icon3x text-danger"></i></h4>
				  </div>
				  
				  <div class=" center">
					<h2>{{$Worldstatus['deaths']}}</h2>
				  </div>

			   </div>
			   </div>
			   
            </div>
		</div>
	  </section>



      <hr class="break margin-top-bottom-0">

            <!-- Section 1 -->
      <section class="section-small-padding background-white text-center"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-12 margin-m-bottom">
              <div class="padding-2x block-bordered">
              	<h2 class="text-size-40  text-m-size-30 text-center">Specific Country's Coronavirus Status</h2>
                
        			  <div class="table-wrapper-scroll-y my-custom-scrollbar container">
					          <table class="table table-bordered table-striped mb-0">
					          <thead>
					            <tr>
					              <th scope="col">#</th>
					              <th scope="col">Image</th>
					              <th scope="col">Country</th>
					              <th scope="col">Cases</th>
					              <th scope="col">Today Cases</th>
					              <th scope="col">Deaths</th>
					              <th scope="col">Today Deaths</th>
					              <th scope="col">Recovered</th>
					              <th scope="col">Active</th>
					              <th scope="col">Critical</th>
					            </tr>
					          </thead>
					          <tbody>
					            @php($i=1)
					            @foreach($countryStatus as $singleContry)
					            <tr>
					              <th scope="row">{{$i++}}</th>
					              <td><img src="{{$singleContry['countryInfo']['flag']}}" style="height: 30px; width: 40px"></td>
					              <td>{{$singleContry['country']}}</td>
					              <td>{{$singleContry['cases']}}</td>
					              <td>{{$singleContry['todayCases']}}</td>
					              <td>{{$singleContry['deaths']}}</td>
					              <td>{{$singleContry['todayDeaths']}}</td>
					              <td>{{$singleContry['recovered']}}</td>
					              <td>{{$singleContry['active']}}</td>
					              <td>{{$singleContry['critical']}}</td>
					            </tr>
					            @endforeach

					          </tbody>
					          </table>
					    </div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 4 -->
    

      
    </main>

@endsection