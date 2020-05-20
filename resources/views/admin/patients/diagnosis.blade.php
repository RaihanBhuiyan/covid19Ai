@extends('admin.master')
@section('body')
    <!-- loader -->
    <div id="loader" class="modal">
      <div class="modal-content ">
        <img src="{{asset('admin/img/loader5.gif')}}" style="width: 171px;height: 124px;">
        <p>Please wait a moment</p>
        <p>Analyzing radiography in progress</p>
      </div>
    </div>
    <!-- end loader -->

    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Start Diagnosis</h2>
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

        <form id="patientFrom" action="{{route('save_patient')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
          @csrf
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

            <div class="form-group">
              <label>Sex</label>
              <select name="sex" id="sex" class="form-control">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
              </select>
              @if ($errors->has('sex'))
              <span class="error">{{ $errors->first('sex') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" id="address" name="address"></textarea>
              <span class="error_form" id="address_error_message"></span>
            </div>
            <div class="form-group">
              <label style="color:white">Please upload X-ray or CT scan  radiography image.</label>
              <input type="file" id="image" name="image" accept=".png, .jpg, .jpeg"  >

               @if ($errors->has('image'))
               <span class="error">{{ $errors->first('image') }}</span>
               @endif
            </div>
            <span class="error_form" id="file_error_message"></span>


              


            <div class="text-right">
              <input type="submit" name="btn"  class="btn btn-primary" value="Start Diagnosis" id="save"   disabled="disabled" />
            <div>
          </div>

      </form>
      </div>
    </div>
    </div>
  </div>
</section>

@endsection
