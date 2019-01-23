
      <div class="popup" pd-popup="service_brand_info">
              <div class="popup-inner">
                <form method="POST" action = "{{url('master-file/inventory/brand')}}">
                  {{ csrf_field() }}
                  <div class="modal-header">
                  Brand Information
                  <a class="popup-close" pd-popup-close="service_brand_info" href="#"> </a>
                  </div>
                        <div class="modal-body">
                          <div class="row-fluid">
                                    <div class="col-lg-10">
                                      <div class="control-group col-lg-12">
                                        <div class="controls">
                                          <label> Code </label>
                                            <input class="span3" type="text" name="brand_code" required>
                                        </div>
                                      </div>
                                      <div class="control-group col-lg-12">
                                        <div class="controls">
                                            <label> Brand Name </label>
                                              <input class="span7" type="text" name="brand_name" required>
                                        </div>
                                      </div>
                                    </div>
                          </div>
                        </div>
                        

                  <div class="modal-footer">
                    <button class="btn btn-primary m_close">Save</button>
                    <a pd-popup-close="service_brand_info" href="#" class="btn btn-danger m_close">Close</a>
                  </div>
                </form>
                 </div>     
              
          </div>