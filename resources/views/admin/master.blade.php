<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AI-based COVID-19 Diagnosis System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <link rel="stylesheet" href="{{asset('admin/css/style.default.css')}}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
    
    <link rel="shortcut icon" href="{{asset('admin/img/favicon1.ico')}}">

    <link href="{{asset('admin/prescription/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/jquery-confirm.min.css')}}">


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
    .my-custom-scrollbar {
        position: relative;
        height: 200px;
        overflow: auto;
        }
        .table-wrapper-scroll-y {
        display: block;
        }
      .error_form{color:#b34403}

      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 180px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }

      /* Modal Content */
      .modal-content {
        background-color: #292929;
        margin: auto;
        padding: 20px;
        border: 1px solid #292929;
        width: 34%;
        align-items: center;
      }
      .modal-content p{color:#e8dddd}
      
    </style>

  </head>
  <body>
<div>

    @include('admin.includes.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.includes.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content" id="app">

            @yield('body')

            @include('admin.includes.footer')

        </div>
    </div>
</div>




    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/front.js')}}"></script>
    <script src="{{asset('admin/js/dataTables.min.js')}}"></script>
    <script src="{{asset('admin/js/dataTable.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery-confirm.min.js')}}"></script>

    <script>

    // form validation
    $(function() {

        $("#name_error_message").hide();
        $("#contact_error_message").hide();
        $("#age_error_message").hide();
        $("#address_error_message").hide();


        var error_name = false;
        var error_contact = false;
        var error_age = false;
        var error_address = false;
        var error_file = false;

          $("#name").focusout(function() {
            check_name();
          });

          $("#contact").focusout(function() {
            check_contact();
          });

          $("#age").focusout(function() {
            check_age();
          });

          $("#address").focusout(function() {
            check_address();
          });

          $("#image").focusout(function() {
            check_image();
          });

          function check_name() {
              var username_length = $("#name").val().length;
              if(username_length < 5 || username_length > 20) {
                $("#name_error_message").html("Should be between 5-20 characters");
                $("#name_error_message").show();
                error_name = true;
              } 
              else 
              {
                $("#name_error_message").hide();
              }
          }

          function check_contact() {
              var pattern = new RegExp(/([1-9][0-9]*)|0/);
              var contact_length = $("#contact").val().length;
              if(pattern.test($("#contact").val()) && contact_length == 11) 
              {
                $("#contact_error_message").hide();
              } 
              else 
              {
                  $("#contact_error_message").html("Contact should be number & 11 digits");
                  $("#contact_error_message").show();
                  error_contact = true;
              }

          }

          function check_age() {
              var age_length = $("#age").val().length;
              if($("#age").val()== 0 ||age_length < 1 || age_length > 2) 
              {
                $("#age_error_message").html("Age should be valid.");
                $("#age_error_message").show();
                error_age = true;
              } 
              else 
              {
                $("#age_error_message").hide();
              }
          }

          function check_address() {
              var address_length = $("#address").val().length;
              if(address_length < 5 || address_length > 50) {
                $("#address_error_message").html("Should be between 5-50 characters");
                $("#address_error_message").show();
                error_address = true;
              } else {
              $("#address_error_message").hide();
              }
          }


          $("#patientFrom").submit(function() {
            error_name = false;
            error_contact = false;
            error_age = false;
            error_address = false;
 

            check_name();
            check_contact();
            check_age();
            check_address();

            

            if(error_name == false && error_contact == false && error_age == false && error_address == false )
            {
                return true; 
            } 
            else 
            {
                return false;
            }

            

          })
      });

      //end form validation

    </script>

    <script>
      $(function() {

          var pattern = new RegExp(/([1-9][0-9]*)|0/);

                var fup = document.getElementById('image');
                var fileName = $("#image").val();
                var ext = fileName.substring(fileName.lastIndexOf('.') + 1);


          patientFrom.addEventListener('input',()=>
          {
            if(
                $("#name").val().length > 5 && $("#name").val().length < 20
              && pattern.test($("#contact").val()) && $("#contact").val().length == 11
              &&  $("#age").val().length > 1 
              &&  $("#age").val().length <3 
              &&  $("#age").val() != 0
              &&  $("#address").val().length > 4 &&  $("#address").val().length < 50
              && fup.value != ''

              )
            {
              $('#save').removeAttr('disabled');
            }
            else
            {
              $('#save').attr('disabled','disabled');
            }
          })
      });
    </script>

    <script>

    $(function () {
        $("#printPrescription").click(function () {
            var contents = $("#printArea").html();
            var frame1 = $('<iframe />');
            frame1[0].name = "frame1";
            frame1.css({ "position": "absolute", "top": "-1000000px" });
            $("body").append(frame1);
            var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
            frameDoc.document.open();
            //Create a new HTML document.
            frameDoc.document.write('<html><head><title>Printed</title>');
            frameDoc.document.write('</head><body>');
            //Append the external CSS file.
            frameDoc.document.write('<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">');
            frameDoc.document.write('<link rel="stylesheet" href="{{asset('admin/prescription/style.css')}}" />');
            //Append the DIV contents.
            frameDoc.document.write(contents);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                frame1.remove();
            }, 500);
        });
        });

    </script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );

    </script>

    <script>
        var loader = document.getElementById("loader");
        var btn = document.getElementById("save");
        btn.onclick = function() {
          loader.style.display = "block";
        }
    </script>
  </body>
</html>
