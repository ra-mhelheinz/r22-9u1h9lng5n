          <div class="popup" pd-popup="sales_item">
              <div class="popup-inner">
                  <div class="modal-header">
                  Enter Sales Item to Return
                  <a class="popup-close" pd-popup-close="sales_item" href="#"> </a>
                  
                  </div>
                        <div class="modal-body" >

                                <div class="row-fluid" style="overflow:hidden;">
                                  <div class="span12">
                                        <div class="col-lg-12">
                                                  <div class="control-group col-lg-12">
                                                    <label class="control-label">Line No.</label>
                                                    <div class="controls">
                                                      <input class="span4" type="text" value="" class="span12" disabled>
                                                    </div>
                                                  </div>
                                                  <div class="control-group col-lg-5">
                                                    <label class="control-label">Item Code</label>
                                                    <div class="controls">
                                                      <input type="text" value="" class="span8" disabled>
                                                    </div>
                                                  </div>
                                                  <div class="control-group col-lg-5">
                                                    <label class="control-label">Part Number</label>
                                                    <div class="controls">
                                                      <input type="text" value="" class="span12" disabled>
                                                    </div>
                                                  </div>
                                        </div>
                                        <div class="col-lg-12">
                                              <div class="control-group col-lg-12">
                                                <label class="control-label">Item Description</label>
                                                <div class="controls ad">
                                                  <input type="text" class="span10" readonly/>
                                                      <span class="btn add-on btn-primary" pd-popup-open="itm_search" href="#" style="margin-top: -10px;"><i class=" icon-hdd"></i></span>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-lg-11" style="margin-left: 14px">
                                          <div class="widget-box">
                                            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                                            <h5>Invoice List</h5>
                                            </div>
                                              <div class="table table-responsive">
                                                <div class="widget-content nopadding">
                                                  <table class="table table-bordered data-table">
                                                    <thead>
                                                      <tr> 
                                                        <th>Reference#</th>
                                                        <th>SO #</th>
                                                        <th>QTY</th>
                                                        <th>Price</th>
                                                        <th>Disc %</th>
                                                        <th>Disc Amt</th>
                                                        <th>Line AMT</th>
                                                        <th>Clerk</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr class="gradeX">
                                                      <td><input type="checkbox" /></td>
                                                        <td>2017</td>
                                                        <td>0001</td>
                                                        <td>101</td>
                                                        <td>Clifford Catubig</td>
                                                        <td>Clifford Catubig</td>
                                                        <td class="center">---</td>
                                                        <td class="center">2017-12-05</td>
                                                      </tr>
                                                      <tr class="gradeX">
                                                      <td><input type="checkbox" /></td>
                                                        <td>2017</td>
                                                        <td>0001</td>
                                                        <td>101</td>
                                                        <td>Clifford Catubig</td>
                                                        <td>Clifford Catubig</td>
                                                        <td class="center">---</td>
                                                        <td class="center">2017-12-05</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                                  <div class="control-group col-lg-3">
                                                    <label class="control-label">Ref No.</label>
                                                    <div class="controls">
                                                      <input type="text" value="" class="span12" disabled>
                                                    </div>
                                                  </div>
                                                  <div class="control-group col-lg-3">
                                                    <label class="control-label">Quantity</label>
                                                    <div class="controls">
                                                      <input type="text" value="" class="span12" style="float: right;" disabled placeholder="0.00">
                                                    </div>
                                                  </div>
                                                  <div class="control-group col-lg-3">
                                                    <label class="control-label">Unit</label>
                                                      <div class="controls">
                                                        <select class="span12">
                                                          <option>First option</option>
                                                          <option>Second option</option>
                                                        </select>
                                                      </div>
                                                  </div>
                                                  <div class="control-group col-lg-5">
                                                    <label class="control-label">Price</label>
                                                    <div class="controls">
                                                      <input type="text" value="" class="span12" style="float: right;" disabled placeholder="0.00">
                                                    </div>
                                                  </div>
                                                  <div class="control-group col-lg-5">
                                                    <label class="control-label">Line Amount</label>
                                                    <div class="controls">
                                                      <input type="text" value="" class="span12" style="float: right;" disabled placeholder="0.00">
                                                    </div>
                                                  </div>
                                                  <div class="control-group col-lg-4">
                                                    <label class="control-label">Sales Clerk</label>
                                                      <div class="controls">
                                                        <select class="span12">
                                                          <option>First option</option>
                                                          <option>Second option</option>
                                                        </select>
                                                      </div>
                                                  </div>

                                        </div>
                                  </div>
                                </div>


                        </div>

                  <div class="modal-footer">
                    <button class="btn btn-primary m_close">Save</button>
                    <a pd-popup-close="sales_item" href="#" class="btn btn-danger m_close">Close</a>
                  </div>
                      
              </div>
          </div>

@include('itm_search')