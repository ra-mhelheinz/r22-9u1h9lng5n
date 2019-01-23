<style type="text/css">

</style>       
      <div class="popup" pd-popup="assembled_item">
              <div class="popup-inner-lg">
                  <div class="modal-header">
                  Assembled Item
                  <a class="popup-close" pd-popup-close="assembled_item" href="#"> </a>
                  
                  </div>
                        <div class="modal-body">
                          <div class="row-fluid">
                          <button class="btn btn-primary"><i class="icon-plus"></i> Add Item</button>
                          <button class="btn btn-info"><i class="icon-pencil"></i> Update Item</button>
                          <button class="btn btn-danger"><i class="icon-remove"></i> Remove Item</button>
                          <button class="btn btn-success"><i class="icon-print"></i> Print Assembled Item</button>
                          <button class="btn btn-warning"><i class="icon-upload-alt"></i> Import</button>

                              <div class="widget-box" style="margin-top: 5px;">
                                <div class="widget-title">
                                  <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#ass_tab1"><i class="icon icon-user" ></i> Assembled Item Info</a></li>
                                    <li><a data-toggle="tab" href="#ass_tab2"><i class="icon icon-user" ></i> Copy Assembled Item By Branch</a></li>
                                    <li><a data-toggle="tab" href="#ass_tab3"><i class="icon icon-user" ></i> Import Assembled Item</a></li>
                                  </ul>
                                </div>
                                    <div class="widget-content tab-content">
                                      <div id="ass_tab1" class="tab-pane active" style="height:300px;overflow-y: auto;overflow-x: hidden;">
                                        <div class="container-fluid">
                                          <div class="col-lg-12">
                                            <div class="control-group span3">
                                              <label class="control-label">Item Code :</label>
                                              <div class="controls">
                                                <input type="text" class="span12" readonly />
                                              </div>
                                            </div>
                                              <div class="control-group span3">
                                                <label class="control-label">Branch :</label>
                                                <div class="controls">
                                                  <select class="span12">
                                                      <option>First option</option>
                                                      <option>Second option</option>
                                                      <option>Third option</option>
                                                    </select>
                                                </div>
                                              </div>
                                            <div class="control-group col-lg-5">
                                              <label class="control-label">Assembled Item</label>
                                              <div class="controls">
                                                <input type="text" class="span10 " readonly/>
                                                    <span class="btn add-on btn-primary" pd-popup-open="itm_search" href="#" style="margin-top: -10px;margin-right:2px;"><i class="icon-hdd"></i></span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-lg-12">
                                            <div class="control-group span3">
                                              <label class="control-label">Purchase Unit :</label>
                                              <div class="controls">
                                                <select class="span12" disabled>
                                                      <option>First option</option>
                                                      <option>Second option</option>
                                                      <option>Third option</option>
                                                    </select>
                                              </div>
                                            </div>
                                            <div class="control-group span3">
                                              <label class="control-label">Sales Unit :</label>
                                              <div class="controls">
                                                <select class="span12" disabled>
                                                      <option>First option</option>
                                                      <option>Second option</option>
                                                      <option>Third option</option>
                                                    </select>
                                              </div>
                                            </div>
                                            <div class="control-group span2">
                                              <label class="control-label">Regular Selling Price :</label>
                                              <div class="controls">
                                                <input type="text" class="span12" readonly />
                                              </div>
                                            </div>
                                            <div class="control-group span2">
                                              <label class="control-label">Unit Cost :</label>
                                              <div class="controls">
                                                <input type="text" class="span11" readonly />
                                              </div>
                                            </div>
                                          </div>

                                          <div class="col-lg-11">
                                                     <div class="widget-box">
                                                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                                                          <h5>Item List</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                          <div class="table table-responsive" style="overflow-y:auto;">

                                                          <table id="mtable" class="table table-bordered data-table" >
                                                            <thead>
                                                              <tr>
                                                                <th></th>
                                                                <th>Quantity</th>
                                                                <th>Item Description</th>
                                                                <th>Part No.</th>
                                                                <th>Unit Cost</th>
                                                                <th>Unit</th>
                                                                <th>Line Amount</th>
                                                                <th>Item Code</th>
                                                                <th>Remarks</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr class="gradeX">
                                                              <td><input type="radio" /></td>
                                                                <td>0001</td>
                                                                <td class="center">---</td>
                                                                <td class="center">1</td>
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
                                                                <td class="center">2</td>
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
                                                                <td class="center">3</td>
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

                                      <div id="ass_tab2" class="tab-pane" style="height:300px;overflow-y: auto;overflow-x: hidden;">
                                        <div class="container-fluid">
                                          <div class="col-lg-12">
                                            <div class="control-group span6">
                                              <label class="control-label">Prefix Name :</label>
                                              <div class="controls">
                                                <input type="text" class="span12" />
                                              </div>
                                            </div>
                                              <div class="control-group span6">
                                                <label class="control-label">Additional SRP :</label>
                                                <div class="controls">
                                                <input type="text" class="span12"/>
                                                </div>
                                              </div>
                                          </div>
                                          
                                          <div class="col-lg-12">
                                                <div class="span6">
                                                    <div class="widget-box">
                                                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                                                          <h5></h5>
                                                        </div>
                                                        <div class="widget-content">
                                                          <div class="table table-responsive" style="overflow-y:auto;">

                                                          <table id="mtable" class="table table-bordered data-table" >
                                                            <thead>
                                                              <tr>
                                                                <th></th>
                                                                <th>Description</th>
                                                                <th>SRP</th>
                                                                <th>Code</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr class="gradeX">
                                                                <td><input type="radio" /></td>
                                                                <td>----</td>
                                                                <td class="center">---</td>
                                                                <td class="center">1</td>
                                                              </tr>
                                                              <tr class="gradeX">
                                                                <td><input type="radio" /></td>
                                                                <td>----</td>
                                                                <td class="center">---</td>
                                                                <td class="center">1</td>
                                                              </tr>
                                                              <tr class="gradeX">
                                                                <td><input type="radio" /></td>
                                                                <td>----</td>
                                                                <td class="center">---</td>
                                                                <td class="center">1</td>
                                                              </tr>
                                                              

                                                            </tbody>
                                                            </table>
                                                          </div>
                                                          </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="span6">
                                                    <div class="widget-box">
                                                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                                                          <h5></h5>
                                                        </div>
                                                        <div class="widget-content">
                                                          <div class="table table-responsive" style="overflow-y:auto;">

                                                          <table id="mtable" class="table table-bordered data-table" >
                                                            <thead>
                                                              <tr>
                                                                <th></th>
                                                                <th>Description</th>
                                                                <th>SRP</th>
                                                                <th>Code</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr class="gradeX">
                                                                <td><input type="radio" /></td>
                                                                <td>----</td>
                                                                <td class="center">---</td>
                                                                <td class="center">1</td>
                                                              </tr>
                                                              <tr class="gradeX">
                                                                <td><input type="radio" /></td>
                                                                <td>----</td>
                                                                <td class="center">---</td>
                                                                <td class="center">1</td>
                                                              </tr>
                                                              <tr class="gradeX">
                                                                <td><input type="radio" /></td>
                                                                <td>----</td>
                                                                <td class="center">---</td>
                                                                <td class="center">1</td>
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

                                      <div id="ass_tab3" class="tab-pane" style="height:300px;overflow-y: auto;overflow-x: hidden;">
                                        <div class="container-fluid">
                                          <div class="col-lg-12">
                                            <div class="control-group span6">
                                              <label class="control-label">Branch :</label>
                                              <div class="controls">
                                                <select class="span12">
                                                      <option>First option</option>
                                                      <option>Second option</option>
                                                      <option>Third option</option>
                                                    </select>
                                              </div>
                                            </div>
                                              <div class="control-group span6">
                                                <label class="control-label">Item To Upload:</label>
                                                <div class="controls">
                                                <input type="file" class="span12"/>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-12">
                                            <div class="progress progress-striped active">
                                             <div class="bar" style="width: 100%;"></div>
                                            </div>
                                          </div>
                                          
                                        </div>
                                      </div>

                                    </div>

                              </div>

                           
                            </div>
                          </div>


                  <div class="modal-footer">
                    <button class="btn btn-primary m_close">Save</button>
                    <a pd-popup-close="assembled_item" href="#" class="btn btn-danger m_close">Close</a>
                  </div>
                      
              </div>
          </div>
</script>
        