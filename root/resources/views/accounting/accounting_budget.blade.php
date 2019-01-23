@extends('layout')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Master File</a> <a href="masterfile-accounting_account_group.php" class="current">Budget</a> </div>
    <h1>Budget</h1> 
    <div class="user-menu">
    </div>
  </div>
  
  <div class="container-fluid">
    <div>
      <button class="btn btn-primary" pd-popup-open="small" href="#"><i class="icon-plus"></i> Add New</button>
      <button class="btn btn-info"><i class="icon-pencil"></i> Update</button>
      <button class="btn btn-info"><i class="icon-print"></i> Print List</button>
      <button class="btn btn-danger"><i class="icon-remove"></i> Delete</button>
    </div>
    
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>LBP Form No.1: Budget of Expenditures and Sources of Financing</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <col width="35%">
              <col>
              <col width="5%">
              <thead>
                <tr>
                  <th rowspan="2">Particulars <br>1</th>
                  <th rowspan="2">Account Code <br>2</th>
                  <th rowspan="2">Income Classification <br>3</th>
                  <th rowspan="2">Past Year <br>(Actual) <br>4</th>
                  <th colspan="3">Current Year Appropriation</th>
                  <th rowspan="2">Proposed Amount <br>(Proposed) <br>8</th>
                </tr>
                <tr>
                  <th rowspan="2">First Semester <br>(Actual) <br>5</th>
                  <th rowspan="2">Second Semester <br>(Estimated) <br>6</th>
                  <th rowspan="2">Total <br>7</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<8;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>LBP Form No.2: Programmed Appropiration and Obligation By Object of Expenditure</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <col width="35%">
              <col>
              <col width="5%">
              <thead>
                <tr>
                  <th rowspan="2">Object of Expenditure <br>1</th>
                  <th rowspan="2">Account Code <br>2</th>
                  <th rowspan="2">Past Year <br>(Actual) <br>3</th>
                  <th colspan="3">Current Year Appropriation</th>
                  <th rowspan="2">Proposed Amount <br>(Proposed) <br>7</th>
                </tr>
                <tr>
                  <th rowspan="2">First Semester <br>(Actual) <br>4</th>
                  <th rowspan="2">Second Semester <br>(Actual) <br>5</th>
                  <th rowspan="2">Total <br>6</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<7;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>LBP Form No.2a: Programmed Appropriation and Obligation for Special Purpose Appropriations</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th rowspan="2">AIP Reference Code <br>1</th>
                  <th rowspan="2">Sector <br>2</th>
                  <th rowspan="2">Program/Project/Activity <br>3</th>
                  <th rowspan="3">Past Year (Actual) <br>4</th>
                  <th colspan="2">Current Year</th>
                  <th rowspan="2">Budget Year <br>(Proposed) <br>7</th>
                </tr>
                <tr>
                  <th rowspan="2">Actual <br>5</th>
                  <th rowspan="2">Estimate <br>6</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<7;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>LBP Form No.3: Personnel Schedule CY _____</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th colspan="2">Item Number</th>
                  <th rowspan="3">Position Title <br>3</th>
                  <th rowspan="3">Name of Incumbent <br>4</th>
                  <th colspan="2">Current Year Authorized</th>
                  <th colspan="2">Budget Year Proposed</th>
                  <th rowspan="3">Increase/Decrease <br>9</th>
                </tr>
                <tr>
                  <th rowspan="2">Old <br>1</th>
                  <th rowspan="2">New <br>2</th>
                  <th colspan="2">Rate/Annum</th>
                  <th colspan="2">Rate/Annum</th>
                </tr>
                <tr>
                  <th>SG/Step <br>5</th>
                  <th>Amount <br>6</th>
                  <th>SG/Step <br>7</th>
                  <th>Amount <br>8</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<9;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>LBP Form No.4: Mandate, Vision/Mission, Major Final Outpu, Performance Indicators and Targets CY _____</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th rowspan="2">AIR Reference Code <br>1</th>
                  <th rowspan="2">Program/Project/Activity Description <br>2</th>
                  <th rowspan="2">Major Final Output <br>3</th>
                  <th rowspan="2">Performance/Output Indicator <br>4</th>
                  <th rowspan="2">Target for the Budget Year <br>5</th>
                  <th colspan="4">Proposed Budget for the Budget Year</th>
                </tr>
                <tr>
                  <th>PS <br>6</th>
                  <th>MOOE <br>7</th>
                  <th>CO <br>8</th>
                  <th>Total <br>9</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<9;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>LBP Form No.5: Statement of Indebtedness</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th rowspan="3">Creditor <br>1</th>
                  <th rowspan="3">Date Contracted <br>2</th>
                  <th rowspan="3">Term <br>3</th>
                  <th rowspan="3">Principal Amount <br>4</th>
                  <th rowspan="3">Purpose <br>5</th>
                  <th colspan="3" rowspan="2">Previous Payment Made</th>
                  <th colspan="3">Amount Due</th>
                  <th rowspan="2">Balance of the Principal</th>
                </tr>
                <tr>
                  <th colspan="3">(Budget Year)</th>
                </tr>
                <tr>
                  <th>Principal <br>6</th>
                  <th>Interest <br>7</th>
                  <th>Total <br>8</th>
                  <th>Principal <br>9</th>
                  <th>Interest <br>10</th>
                  <th>Total <br>11</th>
                  <th>12</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<12;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>LBP Form No.6: Statement of Statutory and Contractual Obligations and Budgetary Requirements CY ____</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Description <br>1</th>
                  <th>Amount <br>2</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<2;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>LBP Form No.7: Statement of Fund Allocation by Sector CY ____</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Particulars <br>1</th>
                  <th>Account Code <br>2</th>
                  <th>General Public Services <br>3</th>
                  <th>Social Services <br>4</th>
                  <th>Economic Services <br>5</th>
                  <th>Other Services <br>6</th>
                  <th>Total <br>7</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<7;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>LBP Form No.8: Statment of Funding Sources (Supplemental Budget) FY ____</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Particulars <br>(1)</th>
                  <th>Account Classification <br>(2)</th>
                  <th>Amounts <br>(3)</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<3;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>LBP Form No.9: Statement of Supplemental Appropriation CY ____</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Implementing Office <br>(1)</th>
                  <th>Particular/Purpose <br>(2)</th>
                  <th>AIP Code <br>(3)</th>
                  <th>Object of Expenditure <br>(4)</th>
                  <th>Account Code <br>(5)</th>
                  <th>Amount <br>(6)</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<6;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Part 1. Receipts Program</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Receipts</th>
                  <th>Income Classification</th>
                  <th>Past Year <br>(Actual)</th>
                  <th>Current Year Receipts <br>(Actual and Estimate)</th>
                  <th>Budget Year Receipts</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<5;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <h5>Part 2. Expenditure Program</h5>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon">1. </span>
            <h5>Proposed New Appropriations by Program Activity and Project</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th rowspan="2">AIP <br>Reference <br>Code</th>
                  <th rowspan="2">PPA</th>
                  <th rowspan="2">Major Final <br>Output</th>
                  <th rowspan="2">Performance <br>Indicator</th>
                  <th rowspan="2">Target</th>
                  <th colspan="4">Proposed Budget</th>
                </tr>
                <tr>
                  <th>PS</th>
                  <th>Mode</th>
                  <th>CO</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<9;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon">2. </span>
            <h5>Proposed New Appropriations, by Object Expenditures</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <col width="40%">
              <thead>
                <tr>
                  <th>Object of Expenditure</th>
                  <th>Account Code</th>
                  <th>Past Year <br>Expenditures <br>(Actual)</th>
                  <th>Current Year <br>Expenditures <br>(Actual and Estimate)</th>
                  <th>Budget Year <br>Expenditures <br>(Proposed)</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<5;$i++)
                  <td></td>
                  @endfor
                </tr>
                <tr>
                  <th>Total Personal Services</th>
                  @for($i=0;$i<4;$i++)
                  <th></th>
                  @endfor
                </tr>
                <tr class="gradeX">
                  @for($i=0;$i<5;$i++)
                  <td></td>
                  @endfor
                </tr>
                <tr class="gradeX">
                  <th>Total Mode</th>
                  @for($i=0;$i<4;$i++)
                  <th></th>
                  @endfor
                </tr>
                <tr class="gradeX">
                  @for($i=0;$i<5;$i++)
                  <td></td>
                  @endfor
                </tr>
                <tr class="gradeX">
                  <th>Total Property Plant & Equipment</th>
                  @for($i=0;$i<4;$i++)
                  <th></th>
                  @endfor
                </tr>
                <tr class="gradeX">
                  <th>Total Appropriations</th>
                  @for($i=0;$i<4;$i++)
                  <th></th>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon">3</span>
            <h5>Proposed New Appropriations, by Object Expenditures</h5>
          </div>
          {{-- 3.1 --}}
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span><span class="icon">1.</span>
            <h5>LOCAL DISASTER RISK REDUCTION AND MANAGEMENT FUND</h5>
          </div>
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span><span class="icon"><i class="icon-th"></i></span>
            <span class="icon">a.</span><h5>Proposed New Appropriations</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <col width="40%">
              <thead>
                <tr>
                  <th>Object of Expenditure</th>
                  <th>Account Code</th>
                  <th>Past Year <br>Expenditures <br>(Actual)</th>
                  <th>Current Year <br>Expenditures <br>(Actual and Estimate)</th>
                  <th>Budget Year <br>Expenditures <br>(Proposed)</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<5;$i++)
                  <td></td>
                  @endfor
                </tr>
                <tr class="gradeX">
                  <th>Total Appropriations</th>
                  @for($i=0;$i<4;$i++)
                  <th></th>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
          {{-- 3.2 --}}
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span><span class="icon">2.</span>
            <h5>APPROPRIATIONS FOR LOCAL ECONOMIC ENTERPRISES</h5>
          </div>
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span><span class="icon"><i class="icon-th"></i></span>
            <span class="icon">a.</span><h5>Proposed New Appropriations</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <col width="40%">
              <thead>
                <tr>
                  <th>Object of Expenditure</th>
                  <th>Account Code</th>
                  <th>Past Year <br>Expenditures <br>(Actual)</th>
                  <th>Current Year <br>Expenditures <br>(Actual and Estimate)</th>
                  <th>Budget Year <br>Expenditures <br>(Proposed)</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<5;$i++)
                  <td></td>
                  @endfor
                </tr>
                <tr class="gradeX">
                  <th>Total Appropriations</th>
                  @for($i=0;$i<4;$i++)
                  <th></th>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
          {{-- 3.3 --}}
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span><span class="icon">3.</span>
            <h5>APPROPRIATIONS FOR DEVELOPMENT PROGRAMS AND PROJECTS</h5>
          </div>
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span><span class="icon"><i class="icon-th"></i></span>
            <span class="icon">a.</span><h5>Proposed New Appropriations</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <col width="40%">
              <thead>
                <tr>
                  <th>Object of Expenditure</th>
                  <th>Account Code</th>
                  <th>Budget Year <br>(Estimate)</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<3;$i++)
                  <td></td>
                  @endfor
                </tr>
                <tr class="gradeX">
                  <th>Total Appropriations</th>
                  @for($i=0;$i<2;$i++)
                  <th></th>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
          {{-- 3.4 --}}
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span><span class="icon">4.</span>
            <h5>OTHER SPECIAL PURPOSE APPROPRIATIONS</h5>
          </div>
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span><span class="icon"><i class="icon-th"></i></span>
            <span class="icon">a.</span><h5>Proposed New Appropriations</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <col width="40%">
              <thead>
                <tr>
                  <th>Object of Expenditure</th>
                  <th>Account Code</th>
                  <th>Budget Year <br>(Estimate)</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<3;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

        <h5>Part 3. GENERAL PROVISIONS</h5>
        <p>Refer to photos LBP - Part 3.jpg</p>

        <h5>Part 4. SUMMARY OF THE FY ____ PROPOSED NEW APPROPRIATIONS</h5>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon">1. </span>
            <h5>Proposed New Appropriations, by Object Expenses and Sector</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  @for($i=0;$i<9;$i++)
                  <td></td>
                  @endfor
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>

      <div>
    </div>      
  </div>
</div>
@stop