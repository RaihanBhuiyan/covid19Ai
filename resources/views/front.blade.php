<!-- @extends('front.master')
@section('body')
<div class="row">
  <div class="col-sm-12 flex-column d-flex stretch-card">
    <div class="row">
      <div class="col-lg-3 d-flex grid-margin stretch-card">
        <div class="card bg-success">
          <div class="card-body text-white">
            <h3 class="font-weight-bold mb-3">Bangladesh</h3>

            <p class="pb-0 mb-0">Coronavirus Status</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 d-flex grid-margin stretch-card">
        <div class="card sale-diffrence-border">
          <div class="card-body">
            <h2 class="text-dark mb-2 font-weight-bold">{{$bdstatus[1]}}</h2>
            <h4 class="card-title mb-2">Total Affected</h4>
            <small class="text-muted">APRIL 2019</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 d-flex grid-margin stretch-card">
        <div class="card sale-visit-statistics-border">
          <div class="card-body">
            <h2 class="text-dark mb-2 font-weight-bold">{{$bdstatus[3]}}</h2>
            <h4 class="card-title mb-2">Deaths</h4>
            <small class="text-muted">APRIL 2019</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 d-flex grid-margin stretch-card">
        <div class="card sale-visit-statistics-border">
          <div class="card-body">
            <h2 class="text-dark mb-2 font-weight-bold">{{$bdstatus[5]}}</h2>
            <h4 class="card-title mb-2">Recobered</h4>
            <small class="text-muted">APRIL 2019</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-12 flex-column d-flex stretch-card">
    <div class="row">
      <div class="col-lg-3 d-flex grid-margin stretch-card">
        <div class="card bg-primary">
          <div class="card-body text-white">
            <h3 class="font-weight-bold mb-3">World Wide</h3>
            <p class="pb-0 mb-0">Coronavirus Status</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 d-flex grid-margin stretch-card">
        <div class="card sale-diffrence-border">
          <div class="card-body">
            <h2 class="text-dark mb-2 font-weight-bold">{{$Worldstatus['cases']}}</h2>
            <h4 class="card-title mb-2">Total Affected</h4>
            <small class="text-muted">APRIL 2019</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 d-flex grid-margin stretch-card">
        <div class="card sale-visit-statistics-border">
          <div class="card-body">
            <h2 class="text-dark mb-2 font-weight-bold">{{$Worldstatus['deaths']}}</h2>
            <h4 class="card-title mb-2">Total Deaths</h4>
            <small class="text-muted">APRIL 2019</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 d-flex grid-margin stretch-card">
        <div class="card sale-visit-statistics-border">
          <div class="card-body">
            <h2 class="text-dark mb-2 font-weight-bold">{{$Worldstatus['recovered']}}</h2>
            <h4 class="card-title mb-2">Recovered</h4>
            <small class="text-muted">APRIL 2019</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="">
    <div class="row">
      <div class="col-md-12 col-sm-6">
            <nav class="navbar-info bg-info text-center" style="padding: 4px 0;color: white;">
              <strong>Specific Country's Coronavirus Status</strong>
            </nav>
      </div>
    </div>
</div>

<div class="row">
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
@endsection
 -->