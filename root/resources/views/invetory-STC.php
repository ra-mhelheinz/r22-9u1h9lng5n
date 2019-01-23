<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="invetory-STC.php" class="current">Stock Transaction Card</a> </div>
    <h1>Stock Transaction Card</h1> 
    <div class="user-menu">
    </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-search"></i> </span>
            <h5>Select Item</h5>
          </div>
          <div class="widget-content">
          <div class="col-lg-12">
                      <div class="control-group col-lg-3">
                        <label class="control-label">Item Code</label>
                        <div class="controls">
                          <input type="text" class="span12" placeholder="Item Code" />
                        </div>
                      </div>
                      <div class="control-group col-lg-3">
                        <label class="control-label">Part no.</label>
                        <div class="controls">
                          <input type="text" class="span12" placeholder="Part Number" />
                        </div>
                      </div>
          </div>

          <div class="col-lg-12">
                      <div class="control-group col-lg-4">
                        <label class="control-label">item Description</label>
                        <div class="controls">
                          <input type="text" class="span12" placeholder="Description" />
                        </div>
                      </div>
                      <div class="control-group col-lg-2">
                          <button class="btn btn-info span12" pd-popup-open="itm_search" href="#" style="height:55px;"><i class="icon-list"></i> Select item</button>
                      </div>
                      <div class="control-group col-lg-4">
                        <label class="control-label">item Quantity Current Balances</label>
                        <div class="controls">
                          <input type="text" class="span12" placeholder="0.00" disabled />
                        </div>
                      </div>
          </div>

&nbsp;
        </div>
    </div>
  </div>

<div>

</div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Purchase Order List</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Trans._Date</th>
                  <th>Part_No.</th>
                  <th>Trans._Type</th>
                  <th>Supplier</th>
                  <th>Location</th>
                  <th>Reference</th>
                  <th>PO|SO_#</th>
                  <th>Unit</th>
                  <th>Qty._In</th>
                  <th>Qty._Out</th>
                  <th>Price</th>
                  <th>FCP</th>
                  <th>Item_Description</th>
                  <th>Supp._Code</th>
                  <th>Item_Code</th>
                  <th>Cht._Code</th>
                  <th>Cost_Center</th>
                  <th>Unit_ID</th>
                  <th>Loc._ID</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                </tr>
                
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<?php
include 'itm_search.php';
require_once("includes/footer.php");
?>
