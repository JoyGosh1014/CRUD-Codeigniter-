<div class="box-content">
	<table class="table table-striped table-bordered bootstrap-datatable datatable text-center">
		<thead>
			<tr>
				<th>Student ID</th>
				<th>Student Name</th>
				<th>Student Phone</th>
				<th>Image</th>
				<th>Student Roll</th>
				<th>Actions</th>
			</tr>
		</thead>   
		<tbody>
			<?php foreach ($show_student_info as $v_student) { ?>
				<tr>
				<td class="text-center"><?php echo $v_student->student_id; ?></td>
				<td class="text-center"><?php echo $v_student->student_name; ?></td>
				<td class="text-center"><?php echo $v_student->student_phone; ?></td>
				<td class="text-center"><img src="<?php echo $v_student->image; ?>" height="80px" width="80px" ></td>
				<td class="text-center"><?php echo $v_student->student_roll; ?></td>
				<td class="text-center"><a class="btn btn-info" href="<?php echo base_url();?>edit-student/<?php echo $v_student->student_id;?>"><i class="halflings-icon white edit"></i></a>
				<a class="btn btn-danger" id="delete" href="<?php echo base_url();?>delete-student/<?php echo $v_student->student_id;?>"><i class="halflings-icon white trash" ></i></a>
				</td>
			</tr>
			<?php } ?>
			
		</tbody>
	</table>
</div>