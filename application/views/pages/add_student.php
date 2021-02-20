	<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Registration Form</h2>
					</div>
					
					<div class="box-content">
						
						<form class="form-horizontal" action="<?php base_url();?>save_student" method="post" enctype="multipart/form-data">
							<fieldset>

							  <div class="control-group">
								<label class="control-label" for="studentName">Student Name</label>
								<div class="controls">
									<input type="text" id="studentName" name="student_name" >
									<h5 class="text-danger"><?php echo form_error('student_name');?></h5>
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="studentPhone">Phone Number</label>
								<div class="controls">
									<input type="text" id="studentPhone" name="student_phone" >
									<h5 class="text-danger"><?php echo form_error('student_phone');?></h5>
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="studentRoll">Student Roll</label>
								<div class="controls">
									<input type="text" id="studentRoll" name="student_roll" >
									<h5 class="text-danger"><?php echo form_error('student_roll');?></h5>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">File Upload</label>
								<div class="controls">
								  <input type="file" name="image" >
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Add Student</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						</form>
					</div>
				</div><!--/span-->