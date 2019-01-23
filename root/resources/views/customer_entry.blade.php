<div class="popup" pd-popup="customer_entry">
    <div name="customer_entry_popup" class="popup-inner-xl" style="height: auto">
        <div class="modal-header">
            Customer Entry <span name="C_E_MODE"></span>
            <a pd-popup-close="customer_entry" href="#" class="popup-close"> </a>
        </div>
        <div class="modal-body">
            <span class="C_E_ADD_MODE">
              <div class="row-fluid">
                <div class="span8">
                    <div class="widget-box" style="margin-top: 5px;">
                        <div class="widget-title">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#p_info"><i class="icon icon-user" ></i> Personal Info</a></li>
                                <li style="display: none"><a data-toggle="tab" href="#w_info"><i class="icon icon-user" ></i> Work Info</a></li>
                            </ul>
                        </div>
                        <div class="widget-content tab-content">
                            <form id="C_E_FORM" data-parsley-validate>
                                @csrf
                                <div id="p_info" class="tab-pane active" style="max-height:330px;overflow-y: auto;overflow-x: hidden;">
                                    <div class="container-fluid">
                                        <div class="span3" style="text-align: center;">
                                            <img src="{{ asset('rss_img/rss_user.png') }}" style="border: 2px solid;border-color:#5c5c5c;" />
                                        </div>
                                        <div class="span9">
                                            <div class="container-fluid" style="margin-left:-15px;">
                                                <div class="col-lg-12">
                                                    <div class="control-group span8">
                                                        <label class="control-label" style="color:white">ID : <span style="font-weight:bolder">*</span></label>
            <div class="controls">
                <input type="text" class="span12" name="C_E_INPUT_ID" required="" readonly="">
            </div>
        </div>
        <div class="control-group span4">
            <label class="control-label" style="color:white">Type : <span style="font-weight:bolder">*</span></label>
            <div class="controls">
                <select class="span12" name="C_E_SELECT_type" style="width: 100%" required="">
                    <option value="">Select Type..</option>
                    <option value="Customer">Customer</option>
                    <option value="Financer">Financer</option>
                    <option value="Insurance">Insurance</option>
                    <option value="Prospect">Prospect</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-left:-15px;">
    <div class="col-lg-12">
        <div class="control-group span12">
            <label class="control-label" style="color:white">Name : <span style="font-weight:bolder">*</span></label>
            <div class="controls">
                <input type="text" class="span12" name="C_E_TEXT_NAME" / required="">
            </div>
        </div>
    </div>

</div>
</div>
<div class="container-fluid" style="margin-left:-10px;">
    <label for="" style="color:white">Information Details :</label>
    <hr>
    <div class="col-lg-12">
        <div class="control-group span12">
            <label class="control-label span12" style="margin-bottom: -5px;color:white">Address :</label>
            <div class="controls">
                <textarea class="textarea_editor span12" rows="2" name="C_E_TEXTAREA_ADD"></textarea>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-left:-10px;">
    <div class="col-lg-12">
        <div class="control-group span6">
            <label for="" class="control-label" style="color:white">Mobile Number : <span style="font-weight:bolder">*</span></label>
            <div class="controls">
                <input type="text" class="span12" name="C_E_TEXT_MOBILE_NUMBER" required="" />
            </div>
        </div>
        <div class="control-group span6">
            <label for="" class="control-label" style="color:white">Email Address : <span style="font-weight:bolder">*</span></label>
            <div class="controls">
                <input type="email" class="span12" name="C_E_EMAIL_EMAILADD" required="" />
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-left:-10px;">
    <div class="col-lg-12">
        <div class="control-group span6">
            <label for="" class="control-label" style="color:white">Phone : <span style="font-weight:bolder">*</span></label>
            <div class="controls">
                <input type="text" class="span12" name="C_E_TEXT_PHONE" required="" />
            </div>
        </div>
        <div class="control-group span6">
            <label for="" class="control-label" style="color:white">TIN Number :</label>
            <div class="controls">
                <input type="text" class="span12" name="C_E_TEXT_TIN" />
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-left:-10px;">
    <div class="col-lg-12">
        <div class="control-group span6">
            <label for="" class="control-label" style="color:white">Fax Number :</label>
            <div class="controls">
                <input type="text" class="span12" name="C_E_TEXT_FAX" />
            </div>
        </div>
        <div class="control-group span6">
            <label for="" class="control-label" style="color:white">Contact Person :</label>
            <div class="controls">
                <input type="text" class="span12" name="C_E_TEXT_CONTACT_PERSON" />
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-left:-10px;">
    <label for="" style="color:white">Settings :</label>
    <hr>
    <div class="col-lg-12">
        <div class="control-group span6">
            <label for="" class="control-label" style="color:white">Mode of Payment : <span style="font-weight:bolder">*</span></label>
            <div class="controls">
                <select name="C_E_SELECT_MOP" id="" style="width:100%" class="span12"></select>
            </div>
        </div>
        <div class="control-group span6">
            <label for="" class="control-label" style="color:white">Credit Limit :</label>
            <div class="controls">
                <input type="text" class="span12" name="C_E_TEXT_CREDIT_LIMIT" placeholder="0.00" />
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-left:-10px;">
    <div class="col-lg-12">
        <div class="control-group span6">
            <label for="" class="control-label" style="color:white">Sub-Ledger : <span style="font-weight:bolder">*</span></label>
            <div class="controls">
                <select name="C_E_SELECT_SUBLEDGER" id="" style="width: 100%" class="span12">
                </select>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-left:-10px;">
    <label for="" style="color:white">Other :</label>
    <hr>
    <div class="col-lg-12">
        <div class="control-group span12">
            <label for="" class="control-label" style="color:white">Remarks :</label>
            <div class="controls">
                <textarea name="C_E_TEXTAREA_RMKS" type="text" class="span12" rows="3"></textarea>
            </div>
        </div>
    </div>
</div>
</form>
</div>
</div>
<div id="w_info" class="tab-pane" style="height:320px;overflow-y: auto;overflow-x: hidden;">
    <div class="container-fluid" style="margin-left:-10px">
        <div class="col-lg-12">
            <div class="control-group span4">
                <label class="control-label" style="color:white">Employer/Business name :</label>
                <div class="controls">
                    <input type="text" class="span12" />
                </div>
            </div>
            <div class="control-group span4">
                <label class="control-label" style="color:white">Business Address :</label>
                <div class="controls">
                    <textarea class="textarea_editor span12" rows="2"></textarea>
                </div>
            </div>
            <div class="control-group span4">
                <label class="control-label" style="color:white">Nature Of Business :</label>
                <div class="controls">
                    <input type="text" class="span12" />
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="control-group span6">
                <label class="control-label" style="color:white">Position/Title :</label>
                <div class="controls">
                    <input type="text" class="span12" />
                </div>
            </div>
            <div class="control-group span3">
                <label class="control-label" style="color:white">Gross Monthly Income :</label>
                <div class="controls">
                    <input type="text" class="span12" />
                </div>
            </div>
            <div class="control-group span3">
                <label class="control-label" style="color:white">Years With Company :</label>
                <div class="controls">
                    <input type="text" class="span12" />
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="control-group span3">
                <label class="control-label" style="color:white">Landline :</label>
                <div class="controls">
                    <input type="text" class="span12" />
                </div>
            </div>
            <div class="control-group span3">
                <label class="control-label" style="color:white">FAX :</label>
                <div class="controls">
                    <input type="text" class="span12" />
                </div>
            </div>
            <div class="control-group span3">
                <label class="control-label" style="color:white">Mobile:</label>
                <div class="controls">
                    <input type="text" class="span12" />
                </div>
            </div>
            <div class="control-group span3">
                <label class="control-label" style="color:white">Facebook :</label>
                <div class="controls">
                    <input type="text" class="span12" />
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="span4">
    <div class="widget-box" style="margin-top: 5px;">
        <div class="widget-content">
            <div class="widget-box" style="margin-top: 5px;">
                <div class="widget-title"> <span class="icon"> <i class="icon-search"></i> </span>
                    <h5>Filter By</h5>
                </div>
                <div class="widget-content">
                    <div class="container-fluid" style="margin-left:-10px">
                        <div class="col-lg-12">
                            <div class="control-group span6">
                                <label class="control-label" style="color:white">Date From :</label>
                                <div class="controls">
                                    <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                                </div>
                            </div>
                            <div class="control-group span6">
                                <label class="control-label" style="color:white">Date To :</label>
                                <div class="controls">
                                    <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span12">
                                <label class="control-label" style="color:white">Status</label>
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
            <div class="widget-box" style="margin-top: 5px;">
                <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
                    <h5>Activity History</h5>
                </div>
                <div class="widget-content" style="max-height:80px;overflow: auto;">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</span>
<span class="C_E_DELETE_MODE" style="display:none">
  <label>Are you sure you want to delete <span name="C_E_NAME_2beDeleted" style="color:red;font-weight: bold"></span> from Debtors?</label>
  <input type="text" value="" id="C_E_DELETE_ID" style="display: none">
</span>
</div>
<div class="modal-footer">
    <span class="C_E_ADD_MODE">
      <button type="button" class="btn btn-primary m_close" onclick="SubmitC_E_FORM()">Save</button>
      <a pd-popup-close="customer_entry" href="#" class="btn btn-danger m_close">Close</a>
    </span>
    <span class="C_E_DELETE_MODE" style="display:none">
      <a pd-popup-close="customer_entry" href="#" class="btn btn-success m_close">Cancel</a>
      <button type="button" class="btn btn-danger m_close" onclick="DeleteC_E_FORM();">Delete</button>
    </span>
</div>
</div>