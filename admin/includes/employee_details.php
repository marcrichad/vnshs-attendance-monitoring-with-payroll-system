<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Employee Details</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
          		  
              <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">Firstname</label>
                  	<div class="col-sm-9">
                    	<?php echo $  ['firstname'];?>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="lastname" class="col-sm-3 control-label">Lastname</label>

                  	<div class="col-sm-9">
                    <?php echo $  ['lastname'];?>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="address" class="col-sm-3 control-label">Address</label>
                  	<div class="col-sm-9">
                    <?php echo $  ['address'];?>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="datepicker_add" class="col-sm-3 control-label">Birthday</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
                      <?php echo $  ['birthdate'];?>
                      </div>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contacts</label>

                    <div class="col-sm-9">
                    <?php echo $  ['contact_info'];?>
                    </div>
                </div>
              
                <div class="form-group">
                    <label for="deductions" class="col-sm-3 control-label">Deductions</label>

                    <div class="col-sm-9">
                    <?php echo $  ['deductions'];?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender</label>

                    <div class="col-sm-9"> 
                    <?php echo $  ['gender'];?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Position</label>

                    <div class="col-sm-9">
                    <?php echo $  ['position'];?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="schedule" class="col-sm-3 control-label">Schedule</label>

                    <div class="col-sm-9">
                    <?php echo $  ['schedule'];?>
                    </div>
                </div>
                
          	  </div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	</form>
          	</div>
        </div>
    </div>
</div>