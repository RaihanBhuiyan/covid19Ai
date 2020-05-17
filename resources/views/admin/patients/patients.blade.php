@extends('admin.master')

@section('body')
<!-- Page Header-->
    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Patient List</h2>
      </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"></li>
      </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
              <div class="row">

                <div class="col-lg-12">
                      <div class="block">
                            <div class="title">
                              <strong>
                                <h3 class="text-secondary">Total Patients : <?php echo count($myData); ?></h3>
                              </strong>

                            </div>
                            <div class="table-responsive">
                                  <table id="example" class="table table-striped">
                                      <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Contact</th>
                                            <th class="text-center">Age</th>
                                            <th class="text-center">Sex</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Report</th>
                                            <th class="text-center">View</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @php($i=1)
                                        @foreach($myData as $key=> $data)
                                            <tr>
                                              <th scope="row" width="2%">{{$i++}}</th>
                                              <td class="text-center" width="15%">{{$data['Date']}}</td>
                                              <td class="text-center" width="10%">{{$data['Patient_Name']}}</td>
                                              <td class="text-center">{{$data['Contact_No']}}</td>
                                              <td class="text-center" width="5%">{{$data['Age']}}</td>
                                              <td class="text-center">{{$data['Sex']}}</td>
                                              <td class="text-center">{{$data['Address']}}</td>
                                              <td class="text-center" width="20%">{{$data['Diagnosis_Result']}}</td>

                                              <td class="text-center">
                                                  <a href="{{route('patient_report',[$key])}}" class="btn btn-sm btn-dark">
                                                    <span><i class="fas fa-file-medical"></i></span>
                                                  </a>
                                              </td>
                                            </tr>
                                            @endforeach
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                            <th>No.</th>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Contact</th>
                                            <th class="text-center">Age</th>
                                            <th class="text-center">Sex</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Report</th>
                                            <th class="text-center">View</th>
                                          </tr>
                                      </tfoot>
                                  </table>

                            </div>
                      </div>
                </div>
              </div>
        </div>


    </section>


@endsection
