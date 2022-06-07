<!-- add/edit form modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add/Edit Sub Category <i class="fa fa-user-circle-o" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addform" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sub-Category Name:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
              </div>
              <!-- <input type="text" class="form-control" id="category" name="category" required="required"> -->
              <select class="form-control" id="subcategory" name="subcategory" required="required">
                <!-- <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="opel">Opel</option>
              <option value="audi">Audi</option> -->
              </select>

            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Product Name:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" id="pname" name="pname" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Price:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
              </div>
              <input type="number" class="form-control" id="price" name="price" required="required" min=1 max=100000>
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Discount percenteage:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
              </div>
              <input type="number" class="form-control" id="discount" name="discount" required="required" min=1 max=100>
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Discount price:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
              </div>
              <input type="number" class="form-control" id="discount_price" name="discount_price" required="required" readonly>
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description :</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" id="description" name="description" required="required">
            </div>
          </div>
          <div class="form-group">
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
          <input type="hidden" name="prodid" id="prodid" value="">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- add/edit form modal end -->