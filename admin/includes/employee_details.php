<!-- Add -->
<div class="modal fade" id="view_employee_details">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Employee Details</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">

                <?php
                $emp_id = $_GET['empid'];
                $query = mysqli_query($conn, "SELECT * FROM employees WHERE employee_id='$emp_id'");

						while($row=mysqli_fetch_array($query)) {
				?>
          		  
              <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">Firstname</label>
                  	<div class="col-sm-9">
                    	<?php echo $row['firstname'];?>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="lastname" class="col-sm-3 control-label">Lastname</label>

                  	<div class="col-sm-9">
                    <?php echo $row['lastname'];?>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="address" class="col-sm-3 control-label">Address</label>
                  	<div class="col-sm-9">
                    <?php echo $row['address'];?>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="datepicker_add" class="col-sm-3 control-label">Birthday</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
                      <?php echo $row['birthdate'];?>
                      </div>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contacts</label>

                    <div class="col-sm-9">
                    <?php echo $row['contact_info'];?>
                    </div>
                </div>
              
                <div class="form-group">
                    <label for="deductions" class="col-sm-3 control-label">Deductions</label>

                    <div class="col-sm-9">
                    <?php echo $row['deductions'];?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender</label>

                    <div class="col-sm-9"> 
                    <?php echo $row['gender'];?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Position</label>

                    <div class="col-sm-9">
                    <?php echo $row['position'];?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="schedule" class="col-sm-3 control-label">Schedule</label>

                    <div class="col-sm-9">
                    <?php echo $row['schedule'];
                        }
                    ?>
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
