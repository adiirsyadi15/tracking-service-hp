
<div class="container">
	<div class="row">
		<div class="col-md-9 ">
			<div class="panel panel-default">
				  <div class="panel-heading">
					<a href="?mlebu=tk" class="btn btn-xs btn-default pull-right " > <i class="glyphicon glyphicon-plus"></i> ADD 
					</a>
					<h3 class="panel-title">Table Teknisi</h3>
					
				  </div>
				  <div class="table-responsive">
					<table class="table table-striped">
						<thead class="table_head">
							<tr class="success">
								<th>ID </th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Jenis Kelamin</th>
								<th>Nomor Hp</th>
								<th>Satus</th>
								<th>action</th>
							</tr>
						</thead>
						<tbody class="table_body">
							<?php
								$query = mysql_query("select * from teknisi");
								while ($record = mysql_fetch_array($query)) {
								?>
							
							<tr >
								<td><?php echo $record['id_teknisi']; ?></td>
								<td><?php echo $record['nama_teknisi']; ?></td>
								<td><?php echo $record['alamat']; ?></td>
								<td><?php echo $record['jk_teknisi']; ?></td>
								<td><?php echo $record['nomor_hp_teknisi']; ?></td>
								<td><?php echo $record['status']; ?></td>
							
								<td>
								<a href="?mlebu=uptk&id=<?php
								echo $record['id_teknisi']
								?>" class="btn btn-xs btn-success">Update</a>
								<a href="?mlebu=deltk&id=<?php
								echo $record['id_teknisi']
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