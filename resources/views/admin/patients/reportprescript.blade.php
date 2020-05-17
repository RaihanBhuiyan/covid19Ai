@extends('admin.master')
@section('body')
<div id="presPrint" class="container" style="margin: 14px 0; padding: 13px 64px;">
    <div class="prescript overflow-auto" >
        <div style=" padding: 3px 45px;">
          <div class="text-right">
              <button id="printPrescription" class="btn btn-sm btn-danger"><i class="fa fa-print"></i> Print</button>
              <a href="{{route('pdf',[$key])}}" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf-o"></i> Export as PDF</a>
          </div>
          <div id="printArea">

            <header>
                <div class="row">
                    <div class="col">
                            <br><br>
                            <h1 style="text-align: center;color: #bb414d;">COVID-19 Diagnosis Lab Report</h1>
                    </div>
                </div>
                <br><br>
            </header>
            <hr style="border: 1px solid #3989c6">
            <br><br>
            <div><h4 style="float: right;">Date : {{$keyData['Date']}}</h4></div>
            <main>

                <div class="row contacts">
                    <div class="col prescript-to">
                        <div>Patient Name : <b>{{$keyData['Patient_Name']}}</b></div>
                        <div>Address : {{$keyData['Address']}}</div>
                        <div>Age : {{$keyData['Age']}}</div>
                        <div>Sex : {{$keyData['Sex']}}</div>
                        <div>Phone : {{$keyData['Contact_No']}}</div>
                    </div>

                </div>
                <br><br>
        <div class="row pb-5 p-5">
          <div class="col-md-12">
            <p class="font-weight-bold mb-4">Result : </p>
            <p class="mb-1"><b>{{$keyData['Diagnosis_Result']}}</b></p>
            <p  class="mb-1">Nb. This report is diagnosis by <b>AI-based COVID-19 Diagnosis System</b> with 90% accuracy .</p>

          </div>
        </div>
                <br /><br /><br /><br /><br /><br /><br /><br />
                <hr style="border: 1px solid #3989c6">
                <div class="text-left">
                    <div>Diagnosis By <b>AI-based COVID-19 Diagnosis System</b></div>
                </div>
                <div style="float:right;margin: -25px 0;">
                    <div>Isseud by {{$Organization}}.</div>

                </div>

            </main>
            </div>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
@endsection()
