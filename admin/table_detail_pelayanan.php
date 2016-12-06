<div class="panel panel-default">
	  <div class="panel-heading">
		<a href="?mlebu=dp" class="btn btn-xs btn-default pull-right " " > <i class="glyphicon glyphicon-plus"></i> ADD 
		</a>
		<h3 class="panel-title">Table Detail Pelayanan</h3>
		
	  </div>
	  <div class="table-responsive">
				<table class="table table-striped">
					<thead class="table_head">
						<tr class="success">
							<th>ID Pelayanan</th>
							<th>IMEI</th>
							<th>Nama Pelanggan</th>
							<th>ID CS</th>
							<th>Nama Teknisi</th>
							<th>Harga</th>
							<th>Status</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody class="table_body">
						<?php
								$query = mysql_query("SELECT * FROM `detail_pelayanan` dp join pelayanan p on dp.id_pelayanan = p.id_pelayanan join customer c on dp.id_customer = c.id_customer join teknisi t on p.id_teknisi = t.id_teknisi order by dp.id_pelayanan");
								//echo $query;
								while ($record = mysql_fetch_array($query)) {
						?>
						
						<tr >
							<td><?php echo $record['id_pelayanan']; ?></td>
							<td><?php echo $record['id_hp']; ?></td>
							<td><?php echo $record['nama_customer']; ?></td>
							<td><?php echo $record['id_cs']; ?></td>
							<td><?php echo $record['nama_teknisi']; ?></td>
							<td><?php echo $record['harga']; ?></td>
							<td><?php echo $record['status_perbaikan']; ?></td>
							<td>
							<a href="?mlebu=updp&id=<?php
							echo $record['id_pelayanan']
							?>" class="btn btn-xs btn-success">Update</a>
							<a href="?mlebu=deldp&id=<?php
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
				