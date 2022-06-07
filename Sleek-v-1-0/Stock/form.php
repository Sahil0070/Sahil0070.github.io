<!-- add/edit form modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add/Edit Stock<i class="fa fa-user-circle-o" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addform" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Category Name:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
              </div>
              <!-- <input type="text" class="form-control" id="category" name="category" required="required"> -->
              <select class="form-control" id="category" name="category" required="required">
                <!-- <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="opel">Opel</option>
              <option value="audi">Audi</option> -->
              </select>

            </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sub-Category Name:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
              </div>
              <!-- <input type="text" class="form-control" id="category" name="category" required="required"> -->
              <select class="form-control" id="subcat" name="subcat" required="required">
                <!-- <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="opel">Opel</option>
              <option value="audi">Audi</option> -->
              </select>

            </div>
          </div>
          <!-- </div> -->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Product Name:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
              </div>
              <!-- <input type="text" class="form-control" id="category" name="category" required="required"> -->
              <select class="form-control" id="proname" name="proname" required="required">
                <!-- <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="opel">Opel</option>
              <option value="audi">Audi</option> -->
              </select>

            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Quentity:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
              </div>
              <input type="number" class="form-control" id="stockqty" name="stockqty" required="required">
            </div>
          </div>
          <!-- <div class="form-group">
            <label for="message-text" class="col-form-label">Phone:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
            </div>
            <input type="phone" class="form-control" id="phone" name="phone" required="required" maxLength="10" minLength="10">
          </div>
          </div> -->
          <!-- <div class="form-group">
          <label for="message-text" class="col-form-label">Photo:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
            </div>
            <div class="custom-file">
            <input type="file" class="custom-file-input" name="photo" id="userphoto" >
            <label class="custom-file-label" for="userphoto">Choose file</label>
            </div>
            </div>

          </div>
         -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" id="addButton">Submit</button>
          <input type="hidden" name="action" value="addsubcat">
          <input type="hidden" name="todayDate" id="todayDate">
          <input type="hidden" name="stockid" id="stockid" value="">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- add/edit form modal end -->