<div class="popup" pd-popup="suppliers-info">
    <div name="suppliers_info_popup" class="popup-inner-lg">
        <div class="modal-header">
            Suppliers Information <span name="S_I_MODE"></span>
            <a class="popup-close" pd-popup-close="suppliers-info" href="#"> </a>
        </div>
        <div class="modal-body">
            <span class="S_I_ADD_MODE">
              <div class="row-fluid">
                <div class="col-lg-10">
                    <div class="control-group col-lg-12">
                        <div class="controls">
                            <label> Supplier ID <span style="font-weight:bolder;color:red">*</span></label>
                            <input type="text" name="S_I_INPUT_ID" readonly="">
                        </div>
                    </div>
                    <div class="control-group col-lg-12">
                        <div class="controls">
                            <label> Supplier Name <span style="font-weight:bolder;color:red">*</span></label>
                            <input class="span8" type="text" name="S_I_INPUT_NAME">
                            <span>(Last Name, First Name MI)</span>
                        </div>
                    </div>
                    <span>Information Details</span>
                    <hr>
                    <div class="control-group col-lg-12">
                        <div class="controls">
                            <label> Address </label>
                            <textarea style="height: 100px; width: 550px" name="S_I_TEXTAREA_ADDRESS"></textarea>
                        </div>
                    </div>
                    <div class="control-group col-lg-5">
                        <div class="controls">
                            <label>Phone </label>
                            <input type="text" name="S_I_INPUT_PHONE">
                        </div>
                    </div>
                    <div class="control-group col-lg-5">
                        <div class="controls">
                            <label>TIN number </label>
                            <input type="text" name="S_I_INPUT_TIN_NUM">
                        </div>
                    </div>
                    <div class="control-group col-lg-5">
                        <div class="controls">
                            <label>Fax number </label>
                            <input type="text" name="S_I_INPUT_FAX_NUM">
                        </div>
                    </div>
                    <div class="control-group col-lg-6">
                        <div class="controls">
                            <label>Contact Name </label>
                            <input type="text" name="S_I_INPUT_CNT_NAME">
                        </div>
                    </div>
                    <div class="control-group col-lg-12">
                        <span>Settings</span>
                        <hr>
                        <div class="controls">
                            <label>Mode of Payment <span style="font-weight:bolder;color:red">*</span></label>
                            <select name="S_I_SELECT_MOP">
                            </select>
                        </div>
                    </div>
                    <div class="control-group col-lg-12">
                        <div class="controls">
                            <label>Sub-ledger <span style="font-weight:bolder;color:red">*</span></label>
                            <select name="S_I_SELECT_SUBLEDGER">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            </span>
            <span class="S_I_DELETE_MODE" style="display:none">
              <label>Are you sure you want to delete <span name="S_I_NAME_2beDeleted" style="color:red;font-weight: bold"></span> from Creditors?</label>
              <input type="text" value="" id="S_I_DELETE_ID" style="display: none">
            </span>
        </div>
        <div class="modal-footer">
           <span class="S_I_ADD_MODE">
            <button type="button" class="btn btn-primary m_close" onclick="SubmitS_I_FORM()">Save</button>
            <a pd-popup-close="suppliers-info" href="#" class="btn btn-danger m_close">Close</a>
          </span>
          <span class="S_I_DELETE_MODE" style="display:none">
            <a pd-popup-close="suppliers-info" href="#" class="btn btn-success m_close">Cancel</a>
            <button type="button" class="btn btn-danger m_close" onclick="DeleteS_I_FORM();">Delete</button>
          </span>
        </div>
    </div>
</div>