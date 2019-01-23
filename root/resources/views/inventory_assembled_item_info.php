
      <div class="popup" pd-popup="inventory_assembled_item_info">
              <div class="popup-inner-lg">
                  <div class="modal-header">
                  Assembled Item
                  <a class="popup-close" pd-popup-close="inventory_assembled_item" href="#"> </a>
                  </div>
                        <div class="modal-body">
                          <div class="row-fluid">
                                    <div class="col-lg-10">
                                      <div class="control-group col-lg-5">
                                        <div class="controls">
                                          <label> Item Code </label>
                                            <input class="span12" type="text" name="">
                                        </div>
                                      </div>
                                      <div class="control-group col-lg-5">
                                        <div class="controls">
                                            <label> Branch </label>
                                              <input class="span12" type="text" name="">
                                        </div>
                                      </div>
                                      <div class="control-group col-lg-12">
                                        <div class="controls">
                                            <label> Assembled Item </label>
                                              <input class="span10" type="text" name="">
                                              <button pd-popup-open="itm_search" class="btn btn-success" style="margin-top: -10px">Menu</button>
                                        </div>
                                      </div>
                                      <div class="control-group col-lg-5">
                                        <div class="controls">
                                            <label> Purchase Unit </label>
                                              <input class="span12" type="text" name="">
                                        </div>
                                      </div>
                                      <div class="control-group col-lg-5">
                                        <div class="controls">
                                            <label> Regular Selling Price </label>
                                              <input class="span12" type="text" name="">
                                        </div>
                                      </div>
                                      <div class="control-group col-lg-5">
                                        <div class="controls">
                                            <label> Sales Unit </label>
                                              <input class="span12" type="text" name="">
                                        </div>
                                      </div>
                                      <div class="control-group col-lg-5">
                                        <div class="controls">
                                            <label> Unit Cost </label>
                                              <input class="span12" type="text" name="">
                                        </div>
                                      </div>
                                    
                                    
                                      <div class="widget-box" style="margin-left: 14px">
                                        <div class="widget-title">
                                          <h5>Item List</h5>
                                        </div>
                                        <div class="widget-content">
                                          <div class="table table-responsive" style="overflow-y:auto;">
                                          <table id="mtable" class="table table-bordered" >
                                            <thead>
                                              <tr>
                                                <th>Date</th>
                                                <th>Supplier</th>
                                                <th>Cost AMT</th>
                                                <th>Reference</th>
                                                <th>Type</th>
                                                <th>Part No/Car Plate</th>
                                                <th>User ID</th>
                                                <th>SUP Code</th>
                                            </thead>
                                            <tbody>
                                              <tr class="gradeX">
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
                                        </div>
                                      </div>
                                    </div>
                          </div>
                        </div>
                        

                  <div class="modal-footer">
                    <div style="float: left">
                      <button class="btn btn-info"><i class="icon-refresh"></i> Assembled Item</button>
                      <button class="btn btn-info"><i class="icon-print"></i> Copy Assembled Item by Branch</button>
                      <button class="btn btn-info"><i class="icon-refresh"></i> Import Assembled Item</button>
                    </div>
                    <button class="btn btn-primary m_close">Copy and Save</button>
                    <a pd-popup-close="outlet_info" href="#" class="btn btn-danger m_close">Close</a>
                  </div>
                 </div>     
              
          </div>