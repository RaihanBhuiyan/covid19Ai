
<div id="presPrint" class="container">
    <div class="prescript overflow-auto" >
        <div style="min-width: 600px; padding: 3px 45px;">
          <div id="printArea">

            <header>
                <div class="row">
                    <div class="col">
                            <h1 style="text-align: center;color: #bb414d;">COVID-19 Diagnosis Lab Report</h1>

                    </div>
                </div>
                <br>
            </header>
			<hr style="padding: 1px 0;background: #5967af; border: none;">
			<div><h3 style="float: right;">Date : {{$keyData['Date']}}</h3></div>
            <main>

                <div class="row contacts">
                    <div class="col prescript-to" style="margin: 38px 0;">
                        <div>Patient Name : <b>{{$keyData['Patient_Name']}}</b></div>
                        <div>Address : {{$keyData['Address']}}</div>
                        <div>Age : {{$keyData['Age']}}</div>
                        <div>Sex : {{$keyData['Sex']}}</div>
                        <div>Phone : {{$keyData['Contact_No']}}</div>
                    </div>
                </div>
        <div class="result" style="margin: 76px 74px;">
          <div class="col-md-12">
            <p class="font-weight-bold mb-4"><b>Result:</b></p>
            <p class="mb-1"><b>{{$keyData['Diagnosis_Result']}}</b></p>
            <p  class="mb-1">Nb.This report is diagnosis by <b>AI Based COVID-19 Diagnosis System</b> with 90% accuracy.</p>

          </div>
        </div>
				<br /><br /><br /><br /><br /><br /><br /><br />
				<hr style="padding: 1px 0;background: #585961; border: none;">
                <div class="text-left">
                    <div>Diagnosis By <b>AI Based COVID-19 Diagnosis System</b></div>
                </div>
                <div style="float:right;margin: -20px 0;">
                    <div>Isseud by Hospital name.</div>
                </div>
            </main>
            </div>
        </div>

    </div>
</div>
