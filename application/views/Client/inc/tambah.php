<!-- page content -->
<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
   <br />
   <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
         </label>
         <div class="col-md-6 col-sm-6 ">
            <input type="text" id="name" name="name" required="required" class="form-control ">
         </div>
      </div>

      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Address <span class="required">*</span>
         </label>
         <div class="col-md-6 col-sm-6 ">
            <input type="text" id="address" name="address" required="required" class="form-control">
         </div>
      </div>

      <div class="item form-group">
         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Contact <span class="required">*</span>
         </label>
         <div class="col-md-6 col-sm-6 ">
            <input id="middle-name" class="form-control" type="text" name="middle-name">
         </div>
      </div>

      <div class="modal-footer"></div>
      <div class="item form-group">
         <div class="col-md-7 col-sm-7 offset-md-4">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
         </div>
      </div>
   </form>
</div>
<!-- /page content -->

