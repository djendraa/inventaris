<!-- page content -->
<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
   <br />
   <form action="<?php echo base_url('Purchase/insertData'); ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="purchase">Purchase <span class="required">*</span>
         </label>
         <div class="col-md-6 col-sm-6 ">
            <input type="text" id="purchase" name="purchase" required="required" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))">
         </div>
      </div>

      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="orders">Orders Type <span class="required">*</span>
         </label>
			<div class="col-md-6 col-sm-6 ">
				<select class="select2_single form-control" tabindex="-1" required="required" id="orders" name="orders">
					<option></option>
                  <?php foreach ($orders as $a) :?>
                     <option value="<?php echo $a->id ?>"><?php echo $a->orders ?></option>
                  <?php endforeach ;?>
				</select>
				</div>
		</div>

      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="store">Store / Link <span class="required">*</span>
         </label>
         <div class="col-md-6 col-sm-6 ">
            <input type="text" id="store" name="store" required="required" class="form-control" >
         </div>
      </div>

      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="item">Item <span class="required">*</span>
         </label>
			<div class="col-md-6 col-sm-6 ">
				<select class="select2_single form-control" tabindex="-1" required="required" id="item" name="item">
					<option></option>
                  <?php foreach ($item as $a) :?>
                     <option value="<?php echo $a->id ?>"><?php echo $a->item ?></option>
                  <?php endforeach ;?>
				</select>
				</div>
		</div>

      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="price">Price <span class="required">*</span>
         </label>
         <div class="col-md-6 col-sm-6 ">
            <input type="text" id="price" name="price" required="required" class="form-control" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))">
         </div>
      </div>

      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="qty">Qty <span class="required">*</span>
         </label>
         <div class="col-md-6 col-sm-6 ">
            <input type="text" id="qty" name="qty" required="required" class="form-control" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))">
         </div>
      </div>

      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="requests">Requests <span class="required">*</span>
         </label>
			<div class="col-md-6 col-sm-6 ">
				<select class="select2_single form-control" tabindex="-1" required="required" id="requests" name="requests">
					<option></option>
                  <?php foreach ($requests as $a) :?>
                     <option value="<?php echo $a->id ?>"><?php echo $a->requests ?></option>
                  <?php endforeach ;?>
				</select>
				</div>
		</div>

      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="status">Status Requests <span class="required">*</span>
         </label>
			<div class="col-md-6 col-sm-6 ">
				<select class="select2_single form-control" tabindex="-1" required="required" id="status" name="status">
					<option></option>
                  <?php foreach ($statusreq as $a) :?>
                     <option value="<?php echo $a->id ?>"><?php echo $a->statusrequests ?></option>
                  <?php endforeach ;?>
				</select>
				</div>
		</div>

      <div class="modal-footer"></div>
      <div class="item form-group">
         <div class="col-md-7 col-sm-7 offset-md-4">
            <button class="btn btn-success" type="submit">Submit</button>
            <button class="btn btn-primary" type="close" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </form>
</div>
<!-- /page content -->

