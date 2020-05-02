@extends('front.master')
@section('body')
<main role="main" style="margin: 71px 0;">

<section class="pricing-area pt-100 pb-100" id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h2>Bangladesh coronavirus status</h2>
					</div>
				</div>
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
					<h2>{{$bdstatus[1]}}</h2>
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
					<h2>{{$bdstatus[3]}}</h2>
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
					<h2>{{$bdstatus[5]}}</h2>
				  </div>

			   </div>
			   </div>
			   
			   
            </div>
		</div>
	  </section>

      




	<section class="pricing-area pt-100 pb-100" id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h2>World's coronavirus status</h2>
					</div>
				</div>
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