
<div class="container">
	<div class="row">
		<div class="col-md-9 ">
		<div class="panel panel-default">
			  <div class="panel-heading">
				<a href="?mlebu=hape" class="btn btn-xs btn-default pull-right " > <i class="glyphicon glyphicon-plus"></i> ADD 
				</a>
				<h3 class="panel-title">Table HP</h3>
				
			  </div>
			  <div class="table-responsive">
						<table class="table table-striped">
							<thead class="table_head">
								<tr class="success">
									<th>IMEI</th>
									<th>MEREK</th>
									<th>TIPE</th>
									<th>KETERANGAN</th>
									<th>STATUS</th>
									<th>ACTION</th>
								</tr>
							</thead>
							<tbody class="table_body">
								<?php
										$query = mysql_query("SELECT * FROM hp");
										//echo $query;
										while ($record = mysql_fetch_array($query)) {
								?>
								
								<tr >
									<td><?php echo $record['imei']; ?></td>
									<td><?php echo $record['merek']; ?></td>
									<td><?php echo $record['tipe_hp']; ?></td>
									<td><?php echo $record['keterangan']; ?></td>
									<td><?php echo $record['status']; ?></td>
									<td>
									<a href="?mlebu=uphape&id=<?php
									echo $record['imei']
									?>" class="btn btn-xs btn-success">Update</a>
									<a href="?mlebu=delhape&id=<?php
									echo $record['imei']
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
