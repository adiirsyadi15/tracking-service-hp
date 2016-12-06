<div class="container">
	<div class="row">
		<div class="col-md-9 ">
			<div class="panel panel-default">
				  <div class="panel-heading">
					<a href="?mlebu=ply" class="btn btn-xs btn-success pull-right " > <i class="glyphicon glyphicon-plus"></i> ADD 
					</a>
					<h3 class="panel-title">Table Pelayanan</h3>
					
				  </div>
				  <div class="table-responsive">
					<table class="table table-striped">
						<thead class="table_head">
							<tr class="success">
								<th>ID Pelayanan</th>
								<th>Tanggal masuk</th>
								<th>Tanggal selesai</th>
								<th>ID Customer Service</th>
								<th>Nama teknisi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody class="table_body">
							<?php
								$query = mysql_query("SELECT * FROM pelayanan p join teknisi t on p.id_teknisi = t.id_teknisi ORDER BY `p`.`id_pelayanan` ASC");
									//echo $query;
								while ($record = mysql_fetch_array($query)) {
								?>
							
							<tr >
								<td><?php echo $record['id_pelayanan']; ?></td>
								<td><?php echo $record['tanggal_masuk']; ?></td>
								<td><?php echo $record['tanggal_selesai']; ?></td>
								<td><?php echo $record['id_cs']; ?></td>
								<td><?php echo $record['nama_teknisi']; ?></td>
								<td>
								<a href="?mlebu=upply&id=<?php
								echo $record['id_pelayanan']
								?>" class="btn btn-xs btn-success">Update</a>
								<a href="?mlebu=delply&id=<?php
								echo $record['id_pelayanan']
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