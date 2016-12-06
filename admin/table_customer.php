
				<div class="panel panel-default">
					  <div class="panel-heading">
						<a href="?mlebu=cus" class="btn btn-xs btn-default pull-right " > <i class="glyphicon glyphicon-plus"></i> ADD 
						</a>
						<h3 class="panel-title">Table Customer</h3>
						
					  </div>
					  <div class="table-responsive">
					<table class="table table-striped">
						<thead class="table_head">
							<tr class="success">
								<th>ID Customer</th>
								<th>IMEI</th>
								<th>Nama</th>
								<th>Nomor hp</th>
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody class="table_body">
							<?php
									$query = mysql_query("SELECT * FROM customer");
									//echo $query;
									while ($record = mysql_fetch_array($query)) {
							?>
							
							<tr >
								<td><?php echo $record['id_customer']; ?></td>
								<td><?php echo $record['id_hp']; ?></td>
								<td><?php echo $record['nama_customer']; ?></td>
								<td><?php echo $record['nomor_hp']; ?></td>
								<td>
								<a href="?mlebu=upcus&id=<?php
								echo $record['id_customer']
								?>" class="btn btn-xs btn-success">Update</a>
								<a href="?mlebu=delcus&id=<?php
								echo $record['id_customer']
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
