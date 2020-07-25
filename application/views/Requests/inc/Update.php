<!-- page content -->
<div class="modal fade" id="UpdateModal<?php echo $d->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Item</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
   <br />
   <form action="<?php echo base_url('Requests/updateData'); ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="requests">Requests <span class="required">*</span>
         </label>
         <div class="col-md-6 col-sm-6 ">
            <input type="text" id="requests" name="requests" required="required" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" value="<?php echo $d->requests ?>">
         </div>
      </div>

      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="item">Item Name <span class="required">*</span>
         </label>
			<div class="col-md-6 col-sm-6 ">
				<select class="select2_single form-control" tabindex="-1" required="required" id="item" name="item">
					<!-- <option></option> -->
                  <?php foreach ($item as $a) :?>
                     <?php if($a->id == $d->item_id){ ?>
                     <option value="<?php echo $a->id ?>"><?php echo $a->item ?></option>
                     <?php }; ?>
                  <?php endforeach ;?>

                  <?php foreach ($item as $a) :?>
                     <?php if($a->id != $d->item_id){ ?>
                     <option value="<?php echo $a->id ?>"><?php echo $a->item ?></option>
                     <?php }; ?>
                  <?php endforeach ;?> 
				</select>
				</div>
		</div>

      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="qty">Qty <span class="required">*</span>
         </label>
         <div class="col-md-6 col-sm-6 ">
            <input type="text" id="qty" name="qty" required="required" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) || (event.charCode >= 48 && event.charCode <= 57))" value="<?php echo $d->qty ?>">
         </div>
      </div>

      <div class="item form-group">
         <label class="col-form-label col-md-3 col-sm-3 label-align" for="support">Support Name <span class="required">*</span>
         </label>
			<div class="col-md-6 col-sm-6 ">
				<select class="select2_single form-control" tabindex="-1" required="required" id="support" name="support">
					<!-- <option></option> -->
                  <?php foreach ($support as $a) :?>
                     <?php if($a->id == $d->support_id){ ?>
                     <option value="<?php echo $a->id ?>"><?php echo $a->support ?></option>
                     <?php }; ?>
                  <?php endforeach ;?>

                  <?php foreach ($support as $a) :?>
                     <?php if($a->id != $d->support_id){ ?>
                     <option value="<?php echo $a->id ?>"><?php echo $a->support ?></option>
                     <?php }; ?>
                  <?php endforeach ;?> 
				</select>
				</div>
		</div>
      
      <input type="hidden" class="form-control" id="id" name="requestsID" value="<?php echo $d->id ?>">
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

