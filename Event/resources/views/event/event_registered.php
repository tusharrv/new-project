

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                   
                    <table border="2" align="center">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Department</th>
								<th>Student ID</th>
							
							</tr>
						</thead>
						<tbody>
						<?php foreach ($registered_users as $user) {?>
							<tr>
								<td><?php echo $user->name; ?></td>
								<td><?php echo $user->email; ?></td>
								<td><?php echo $user->dept; ?></td>
								<td><?php echo $user->id; ?></td>
								
							</tr>
                            <?php } ?>
					
						</tbody>
					</table>
                </div>
				
            </div>
        </div>
    </div>
</div>

