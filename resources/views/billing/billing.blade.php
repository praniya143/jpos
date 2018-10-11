@extends('header')	
@section('content')
	<div class="tablewide">
            <div class="tablehead six">
                <div>Product ID</div>
                <div>Product Name</div>
                <div class="right">Type</div>
                <div class="right">Weight</div>
                <div>Sale Type</div>
                <div class="right">Value</div>
            </div>
            <div class="tablecontent six">
                <div data-title="Product ID">Jill</div>
                <div data-title="Product Name">Smith</div>
                <div data-title="Type" class="right">50</div>
                <div data-title="Weight" class="right">Jill</div>
                <div data-title="Sale Type">Smith</div>
                <div data-title="Value" class="right">50</div>
            </div>
        </div>
        <div class="totalcalc">
            <div>
                <div class="totalcalctwoside">
                    <div>
                        <div class="totaltext">SUB total</div>
                        <div class="totaltext">Tax (%)</div>
                        <div class="totaltext">Net total</div>
                    </div>
                    <div>
                        <div class="totalnumber">12,345</div>
                        <div class="totalnumber">345</div>
                        <div class="totalnumber blue">12,690</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btngroup">
            <a href="#" class="btn secondary wide openpop">Cash</a>
            <a href="#" class="btn tertiary wide openpop">Card</a>
            <a href="#" class="btn tertiary wide openpop">Savings</a>
	</div>

<div class="popbg">
       <div class="popflex">
           <div>
               <div class="calctotal">
                   <a href="#" class="closebtn grey closepop">X</a>
                   <div class="totalpart active">
                       <div class="nettotalshow">
                            <span class="titletxtb">Net Total</span>
                            <b>12,690.00</b>
                       </div>
                       <div class="nettotalshow">
                            <span class="titletxtb">Received Amount</span>
                       </div>
                       <div class="inputget">
                            <input type="number" />
                            <span class="closebtn clear">X</span>
                        </div>
                        <button class="btn tertiary wide nextbtn">Done</button>
                   </div>
                   <div class="totalpart">
                        <div class="nettotalshow">
                             <span class="titletxtb">Net Total</span>
                             <b>12,690.00</b>
                        </div>
                        <div class="nettotalshow">
                             <span class="titletxtb">Received Amount</span>
                        </div>
                        <div class="inputget">
                             <input type="number" value="13000.00" readonly />
                         </div>
                         <div class="nettotalshow">
                            <span class="titletxtb">Balance Amount</span>
                        </div>
                        <div class="inputget">
                            <input type="number" value="310.00" readonly />
                        </div>
                         <button class="btn tertiary wide nextbtn">Close</button>
                    </div>
               </div>
           </div>
       </div>
   </div>

@endsection
