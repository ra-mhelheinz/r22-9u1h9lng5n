<div class="popup" pd-popup="supplier_search">
    <div class="popup-inner-lg">
        <div class="modal-header">
            Supplier Search
            <a class="popup-close" pd-popup-close="supplier_search" href="#"> </a>
        </div>
        <div class="modal-body">
            <div class="row-fluid">
                <button class="btn btn-primary" pd-popup-open="supplier_entry" href="#"><i class="icon-plus"></i> Add New</button>
                <button class="btn btn-info"><i class="icon-pencil"></i> Update</button>
                <button class="btn btn-danger"><i class="icon-remove"></i> Delete Record</button>
                <button class="btn btn-success"><i class="icon-print"></i> (Re)Print</button>
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                        <h5>Supplier List</h5>
                    </div>
                    <div class="widget-content">
                        <div class="table table-responsive" style="overflow-y:auto;">
                            <table id="mtable" class="table table-bordered data-table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
                                        <th>Supplier</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Fax</th>
                                        <th>TIN</th>
                                        <th>Contact Name(ICOE)</th>
                                        <th>Credit Limit</th>
                                        <th>Subledger</th>
                                        <th>Payment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX">
                                        <td>
                                            <input type="radio" />
                                        </td>
                                        <td>0001</td>
                                        <td class="center">---</td>
                                        <td class="center">1</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>
                                            <input type="radio" />
                                        </td>
                                        <td>0001</td>
                                        <td class="center">---</td>
                                        <td class="center">1</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>
                                            <input type="radio" />
                                        </td>
                                        <td>0001</td>
                                        <td class="center">---</td>
                                        <td class="center">1</td>
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
        <div class="modal-footer">
            <button class="btn btn-primary m_close">Save</button>
            <a pd-popup-close="supplier_search" href="#" class="btn btn-danger m_close">Close</a>
        </div>
    </div>
</div>