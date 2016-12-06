

<div class="container">
	<div class="row">
		<div class="col-md-9 ">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="?mlebu=sp" class="btn btn-xs btn-success pull-right " > <i class="glyphicon glyphicon-plus"></i>  ADD </a>
					<h3 class="panel-title">Table Sparepart</h3>
				</div>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead class="table_head">
						<tr class="success">
							<th>id sparepart</th>
							<th>Nama</th>
							<th>Seri</th>
							<th>Harga</th>
							<th>action</th>
						</tr>
						</thead>
					<tbody class="table_body">
						<?php
							$query = mysql_query("select * from sparepart");
							//echo $query;
							while ($record = mysql_fetch_array($query)) {
							?>
						
						<tr >
							<td><?php echo $record['id_sparepart']; ?></td>
							<td><?php echo $record['nama']; ?></td>
							<td><?php echo $record['seri']; ?></td>
							<td><?php echo $record['harga']; ?></td>
							 <td>
							<a href="?mlebu=upsp&id=<?php
							echo $record['id_sparepart']
							?>" class="btn btn-xs btn-success">Update</a>
							<a href="?mlebu=delsp&id=<?php
							echo $record['id_sparepart']
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
