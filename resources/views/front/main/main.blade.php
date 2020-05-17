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
	            	<div class="statistic-block block" style="padding: 4px 0px;background: #f7f7f7;">
	            		<h3 class="text-center">Today's Status</h3>
	                  <div class="progress-details d-flex align-items-end justify-content-between" style="margin: 0 40px;">

	                  	<div class="col-md-6 text-center">
	                  		<p>New Cases</p>
	                  		<h4><i class="icon-sli-people icon2x text-warning"></i></h4>
	                  		<h3>{{$bdstatus[9]}}</h3>
	                  	</div>
	                  	<div class="col-md-6 text-center">
	                  		<p>New Deaths</p>
	                  		<h4><i class="icon-sli-user-unfollow icon2x text-danger"></i></h4>
	                  		<h3>{{$bdstatus[11]}}</h3>
	                  	</div>
	                  </div>
	                </div>
	            </div>

	        <div class="col-xl-4 col-sm-12">
	                <div class="statistic-block block" style="padding: 17px 0px;background: #f7f7f7;">
	                  <div class="progress-details d-flex align-items-end justify-content-between" style="margin: 0 40px;">
	                    <div class="title" style="margin: 27px 0;">
	                      <div class="icon"><i class="icon-chart icon3x text-success"></i></div><strong>Recovered Rate</strong>
	                    </div>
	                    <div class="circlechart" data-percentage="<?php echo number_format($recovered_rate ,2) ; ?>">
	                    	OF TOTAL CASES
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
		                    OF TOTAL CASES
		                </div>
	                  </div>
	                </div>
	            </div>

	        </div>
	    </div>
     </section>
<!-- Bd daily new cases -->
	<section class="pricing-area pt-100 pb-100" id="pricing">
		<div class="container">
			<div class="row"> 
               <div class="col-xl-6 col-md-6 col-sm-12">
               		<canvas id="daily_cases" height="150"></canvas>
               </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
               		<canvas id="daily_deaths" height="150"></canvas>
               </div>
            </div>
        </div>
    </section>



<!-- Bangladesh status -->
<section class="pricing-area pt-100 pb-100" id="pricing">
		<div class="container">
			<div class="row"> 
               <div class="col-xl-3">
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

			   <div class="col-xl-3">
					<div class="single-price">
					  <div class="price-title">
						<h4>Total Recovered</h4>
					  </div>
					  
					  <div class="text-success price-title">
						<h4><i class="icon-sli-user-following icon3x text-success"></i></h4>
					  </div>
					  
					  <div class=" center">
						<h2>{{$bdstatus[12]}}</h2>
					  </div>

				   </div>
			   </div>
			   
               <div class="col-xl-3">
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

			  <div class="col-xl-3">
				<div class="single-price">
				  <div class="price-title">
					<h4>Total Tests</h4>
				  </div>
				  
				  <div class="text-success price-title">
					<h4><i class="icon-sli-user-follow icon3x text-info"></i></h4>
				  </div>
				  
				  <div class=" center">
					<h2>{{$bdstatus[17]}}</h2>
				  </div>

			   </div>
			   </div> 
			   
			   
            </div>
		</div>
	  </section>

      



<!-- World wide status -->
	<section class="pricing-area pt-100 pb-3" id="pricing">
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
					<h4>Total Recovered</h4>
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



            <!-- Section 1 -->
      <section class="section-small-padding background-white text-center"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-12 margin-m-bottom">
              <div class="">
                
        			  <div class="table-wrapper-scroll-y my-custom-scrollbar" style="height: 351px">
					        <table class="table  table-striped mb-0" >
					          <thead>
					            <tr>
					              <!-- <th scope="col">#</th> -->

					              <th scope="col" width="10%">Location</th>
					              <th scope="col">Total Cases</th>
					              <th scope="col">Today Cases</th>
					              <th scope="col">Deaths</th>
					              <th scope="col">Today Deaths</th>
					              <th scope="col">Recovered</th>
					              <th scope="col">Active</th>
					              <th scope="col">Critical</th>
					              <th scope="col">Total Test</th>
					            </tr>
					          </thead>
					          <tbody style="height: 50px">
					            <!-- @php($i=1) -->
					            @foreach($countryStatus as $singleContry)
					            <tr>
					              <!-- <th scope="row">{{$i++}}</th> -->

					              <td>
					              	<div>
					              		<img src="{{$singleContry['countryInfo']['flag']}}" style="height: 20px; width: 30px">
					              	</div>
					              	<div style="margin: -23px 40px;">
					              		{{$singleContry['country']}}</td>
					              	</div>
					              	
					              <td>{{$singleContry['cases']}}</td>
					              <td>{{$singleContry['todayCases']}}</td>
					              <td>{{$singleContry['deaths']}}</td>
					              <td>{{$singleContry['todayDeaths']}}</td>
					              <td>{{$singleContry['recovered']}}</td>
					              <td>{{$singleContry['active']}}</td>
					              <td>{{$singleContry['critical']}}</td>
					              <td>{{$singleContry['tests']}}</td>
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
    <script src="{{asset('front/js/chart.js')}}"></script>
        <script type="text/javascript">
        //Bd daily new cases
	      var ctx = document.getElementById('daily_cases').getContext('2d');
	      var chart = new Chart(ctx, {
	          // The type of chart we want to create
	          type: 'line',
	          // The data for our dataset
	          data: {
	              labels: <?php echo json_encode($statisticsDate); ?>,
	              datasets: [{
	                  label: 'Daily Total Cases',
	                  backgroundColor: 'rgba(54, 162, 235, 0.2)',
	                  borderColor: 'rgba(54, 162, 235, 1)',

	                  data: <?php echo json_encode($dailyBdCases); ?>
	              }]
	          },
	          // Configuration options go here
	          options: 
	          {
	          	legend: 
	          	{
			       display: false,
			    },
			    title: 
			    {
		            display: true,
		            text: 'Daily Total Cases'
			    }
	          }
	      });

	      //Bd daily new deaths
	      var ctx = document.getElementById('daily_deaths').getContext('2d');
	      var chart = new Chart(ctx, {
	          // The type of chart we want to create
	          type: 'line',
	          // The data for our dataset
	          data: {
	              labels: <?php echo json_encode($statisticsDate); ?>,
	              datasets: [{
	                  label: 'Daily Total Deaths',
	                  backgroundColor: 'rgba(240, 96, 96, 0.53)',
	                  borderColor: 'rgba(237, 59, 59, 0.63)',

	                  data: <?php echo json_encode($dailyBdDeath); ?>
	              }]
	          },
	          // Configuration options go here
	          options: 
	          {
	          	legend: 
	          	{
			       display: false,
			    },
			    title: 
			    {
		            display: true,
		            text: 'Daily Total Deaths'
			    }
	          }
	      });

    </script>

@endsection