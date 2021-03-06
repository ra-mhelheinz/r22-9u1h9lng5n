<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="masterfile-accounting_debtors.php" class="current">Journal List TEST</a> </div>
        <h1>Journal</h1>
        <div class="user-menu">
        </div>
    </div>

    <div class="container-fluid">
        <div>
            <button class="btn btn-primary" pd-popup-open="customer_search" href="#"><i class="icon-plus"></i> Add New</button>
            <button class="btn btn-info"><i class="icon-pencil"></i> Update</button>
            <button class="btn btn-danger"><i class="icon-remove"></i> Delete</button>
        </div>

        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Journal List</h5>
            </div>
            <div class="widget-content nopadding">
                <form>
                    <div class="table table-responsive" style="overflow-y:auto;">

                        <table id="mtable" class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Journal_Description</th>
                                    <th>Journal_Type</th>
                                    <th>Next_Ref._No.</th>
                                    <th>Check_by</th>
                                    <th>Noted_by</th>
                                    <th>Approved_by</th>
                                    <th>j_type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="gradeX">
                                    <td>0001</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>0001</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>0001</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                    <td class="center">---</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>0001</td>
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
        <div>
            <button class="btn btn-info"><i class="icon-print"></i> Print List</button>
        </div>

        <div class="popup" pd-popup="small">
            <div class="popup-inner">
                <div class="modal-header">
                    Journal List
                    <a class="popup-close" pd-popup-close="small" href="#"> </a>

                </div>
                <div class="modal-body" style="height: 300px">
                    <div class="row-fluid">
                        <div class="col-lg-10">
                            <div class="control-group col-lg-12">
                                <div class="controls">
                                    <label> Journal ID </label>
                                    <input type="text" name="">
                                </div>
                            </div>
                            <div class="control-group col-lg-12">
                                <div class="controls">
                                    <label>Name </label>
                                    <input class="span8" type="text" name="">
                                </div>
                            </div>
                            <div class="control-group col-lg-12">
                                <div class="controls">
                                    <label> Journal Type </label>
                                    <select>
                                        <option>First Option</option>
                                        <option>Second Option</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group col-lg-5">
                                <div class="controls">
                                    <label>Next Ref. No. </label>
                                    <input type="text" name="">
                                </div>
                            </div>
                            <div class="control-group col-lg-5">
                                <div class="controls">
                                    <label>Check Writting </label>
                                    <input type="text" name="">
                                </div>
                            </div>
                            <div class="control-group col-lg-5">
                                <div class="controls">
                                    <label>Reviewed By. </label>
                                    <input type="text" name="">
                                </div>
                            </div>
                            <div class="control-group col-lg-5">
                                <div class="controls">
                                    <label>Noted By. </label>
                                    <input type="text" name="">
                                </div>
                            </div>
                            <div class="control-group col-lg-5">
                                <div class="controls">
                                    <label>Approved By. </label>
                                    <input type="text" name="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a pd-popup-close="small" href="#" class="btn btn-danger m_close"><i class="icon-remove"></i> back</a>
                    <button class="btn btn-primary"><i class="icon-save"></i> Save</button>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>