<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"></div>
    <h1>Auto Loan Application</h1> 
    <div class="user-menu">
    </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-search"></i> </span>
            <h5>Filter By</h5>
          </div>
          <div class="widget-content">
          <div class="col-lg-12">
                      <div class="control-group col-lg-4">
                        <label class="control-label">Trans. Date</label>
                        <div class="controls">
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5">
                          <input type="text" value="TO" class="span2 dateto" style="border-width: 0px; text-align: center; background:#fff;" disabled>
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5">
                        </div>
                      </div>
                      <div class="control-group col-lg-6">
                        <label class="control-label">Status Type</label>
                        <div class="controls">
                          <select class="span8">
                            <option>First option</option>
                            <option>Second option</option>
                            <option>Third option</option>
                            <option>Fourth option</option>
                            <option>Fifth option</option>
                            <option>Sixth option</option>
                            <option>Seventh option</option>
                            <option>Eighth option</option>
                          </select>
                        </div>
                      </div>
          </div>
          <div class="col-lg-12">

                      <div class="control-group col-lg-4">
                        <label class="control-label">Branch Name</label>
                        <div class="controls">
                          <select class="span12">
                            <option>First option</option>
                            <option>Second option</option>
                            <option>Third option</option>
                            <option>Fourth option</option>
                            <option>Fifth option</option>
                            <option>Sixth option</option>
                            <option>Seventh option</option>
                            <option>Eighth option</option>
                          </select>
                        </div>
                      </div>

                      <div class="control-group col-lg-4">
                        <label class="control-label">Customer</label>
                        <div class="controls">
                          <input type="text" class="span12" placeholder="Customer Name" />
                        </div>
                      </div>

                      <div class="control-group col-lg-2">
                          <button class="btn btn-info span12" style="height:55px;"><i class="icon-refresh"></i> Refresh</button>
                      </div>

          </div>
&nbsp;
        </div>
    </div>
  </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>Auto Loan Application Information</h5>
          </div>
      <form>
        
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
require_once("includes/footer.php");
?>
