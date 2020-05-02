@extends('admin.master')
@section('body')
<?php
    $arr = array($report);
    $reportJson = json_encode($arr);

?>
<div id="presPrint" class="container" style="margin: 14px 0; padding: 13px 64px;">
    <div class="prescript overflow-auto" >
        <div style="padding: 3px 45px;">
          <div class="text-right">
              <button id="printPrescription" class="btn btn-sm btn-danger"><i class="fa fa-print"></i> Print</button>

              <form action="/pdf_diag" method="get">
                <input type="hidden" name="arr" value="{{$reportJson}}">
                <button id="printPrescription" class="btn btn-sm btn-danger">
                <i class="fa fa-file-pdf-o">
                </i> Export as PDF</i>
                </button>
              </form>
          </div>
          <div id="printArea">

            <header>
                <div class="row">
                    <div class="col">
                            <h1 style="text-align: center;color: #bb414d;">COVID-19 Diagnosis Lab Report</h1>

                    </div>
                </div>
                <br><br>
            </header>
            <br><br>
            <div><h4 style="float: right;">Date : {{$report['Date']}}</h4></div>
            <main>

                <div class="row contacts">
                    <div class="col prescript-to">
                        <div>Patient Name : <b>{{$report['Patient Name']}}</b></div>
                        <div>Address : {{$report['Address']}}</div>
                        <div>Age : {{$report['Age']}}</div>
                        <div>Sex : {{$report['Sex']}}</div>
                        <div>Phone : {{$report['Contact No']}}</div>
                    </div>
                </div>
        <div class="row pb-5 p-5">
          <div class="col-md-12">
            <p class="font-weight-bold mb-4">Result:</p>
            <p class="mb-1"><b>{{$report['Diagnosis Result']}}</b></p>
            <p  class="mb-1">Nb.This report is diagnosis by <b>AI Based COVID-19 Diagnosis System</b> with 90% accuracy.</p>

          </div>
        </div>
                <br /><br /><br /><br /><br /><br /><br /><br />
                <hr style="padding: 1px 0;background: #585961; border: none;">
                <div class="text-left">
                    <div>Diagnosis By <b>AI Based COVID-19 Diagnosis System</b></div>
                </div>
                <div style="float:right;margin: -25px 0;">
                    <div>Isseud by Hospital name.</div>
                </div>
            </main>
            </div>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
@endsection()
