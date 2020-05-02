@extends('admin.master')
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/base/jquery-ui.css" rel="stylesheet" />
@section('body')


    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Start Diagnosis</h2>
      </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>

      </ul>
    </div>

    <section class="no-padding-top">
        <div class="container-fluid">
              <div class="row">

                <div class="col-lg-12">
                      <div class="block">

        <form id="patientFrom" action="{{route('save_patient')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
          @csrf

          <!-- <div class="form-group">
            <label>Date</label>
            <input type="text" name="date" id="tbDate" class="form-control">
            @if ($errors->has('date'))
            <span class="error">{{ $errors->first('date') }}</span>
            @endif
          </div> -->

            <input type="hidden" value="<?php echo date("d-m-Y");?>" name="date">

            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" id="name" placeholder="Type Name Here..." class="form-control">
              <span class="error_form" id="name_error_message"></span>
              @if ($errors->has('name'))
              <span class="error">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label>Contact</label>
              <input type="text" id="contact" name="contact" placeholder="Contact..." class="form-control">
              <span class="error_form" id="contact_error_message"></span>
            </div>
            <div class="form-group">
              <label>Age</label>
              <input type="number" min="1" id="age" name="age" placeholder="Age..." class="form-control">
              <span class="error_form" id="age_error_message"></span>
            </div>

            <!-- <div class="form-group">
              <label>Sex</label>
              <input type="text" name="sex" placeholder="type Male or Female" class="form-control">
              @if ($errors->has('sex'))
              <span class="error">{{ $errors->first('sex') }}</span>
              @endif
            </div> -->
            <div class="form-group">
              <label>Sex</label>
              <select name="sex" class="form-control">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
              </select>
              @if ($errors->has('sex'))
              <span class="error">{{ $errors->first('sex') }}</span>
              @endif
            </div>
              <!-- <div class="form-group">
                <div class="radio" style="padding: 0 0 0 0">
                  <label for="radioCustom1">Sex    :  </label>
                    <input id="radio" type="radio" value="0" name="sex" class="radio-template">    Male
                    <input id="radio" type="radio" value="1" name="sex" class="radio-template">   Female
                    @if ($errors->has('sex'))
                    <span class="error">{{ $errors->first('sex') }}</span>
                    @endif
                </div>
              </div> -->

            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" id="address" name="address"></textarea>
              <span class="error_form" id="address_error_message"></span>
            </div>
            <div class="form-group">
              <label style="color:white">Please upload X-ray or CT scan  radiography image.</label>
              <input type="file" id="image" name="image" class="" onchange="return Checkfiles()">

               @if ($errors->has('image'))
               <span class="error">{{ $errors->first('image') }}</span>
               @endif
            </div>
            <span class="error_form" id="file_error_message"></span>
            <div class="text-right">
              <input type="submit" name="btn" class="btn btn-primary" value="Start Diagnosis" id="save" onclick="Loader()"/>
            <div>
          </div>

      </form>
      </div>
    </div>
    </div>
  </div>
</section>

@endsection
