
<div class="container">
	<div class="row">
		
		<div class="col-md-9 ">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="?mlebu=mimin" class="btn btn-xs btn-success pull-right " > <i class="glyphicon glyphicon-plus"></i>  ADD </a>
					<h3 class="panel-title">Table Admin</h3>
				</div>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead class="table_head">
						<tr class="success">
							<th>id admin</th>
							<th>user name</th>
							<th>password</th>
							<th>action</th>
						</tr>
						</thead>
					<tbody class="table_body">
						<?php
							$query = mysql_query("select * from admin");
							//echo $query;
							while ($record = mysql_fetch_array($query)) {
							?>
						
						<tr >
							<td class="table_link"><a  href="?mlebu=upmimin&id=<?php echo $record['id_admin']; ?>"/> <?php echo $record['id_admin']; ?></td>
							<td><?php echo $record['username']; ?></td>
							<td><?php echo $record['password']; ?></td>
						
							<td>
							<a href="?mlebu=upmimin&id=<?php
							echo $record['id_admin']
							?>" class="btn btn-xs btn-success">Update</a>
							<a href="?mlebu=delmimin&id=<?php
							echo $record['id_admin']
							?>" class="btn btn-xs btn-danger" onClick="return confirm('apakah yakin ingin menghapusnya?')">Delete</a>
							</td>
						</tr>

						<?php
							}
						?>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
