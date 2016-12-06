
<div class="container">
	<div class="row">
		
		<div class="col-md-9 ">
			<div class="panel panel-default">
				  <div class="panel-heading">
					<a href="?mlebu=cs" class="btn btn-xs btn-default pull-right " > <i class="glyphicon glyphicon-plus"></i> ADD 
					</a>
					<h3 class="panel-title">Table Customer Service</h3>
					
				  </div>
				  <div class="table-responsive">
							<table class="table table-striped">
								<thead class="table_head">
									<tr class="success">
										<th>ID Customer Service</th>
										<th>Nama</th>
										<th>Password</th>
										<th>Alamat</th>
										<th>Jenis Kelamin</th>
										<th>Nomor HP</th>
										<th>Status</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody class="table_body">
									<?php
											$query = mysql_query("SELECT * FROM customer_service");
											//echo $query;
											while ($record = mysql_fetch_array($query)) {
									?>
									
									<tr >
										<td><?php echo $record['id_cs']; ?></td>
										<td class="table_link"><a  href="?mlebu=tampilcs&id=<?php echo $record['id_cs']; ?>"/><?php echo $record['nama_cs']; ?></td>
										<td><?php echo $record['password_cs']; ?></td>
										<td><?php echo $record['alamat']; ?></td>
										<td><?php echo $record['jk']; ?></td>
										<td><?php echo $record['nomor_hp']; ?></td>
										<td><?php echo $record['status']; ?></td>
										<td>
										<a href="?mlebu=upcs&id=<?php
										echo $record['id_cs']
										?>" class="btn btn-xs btn-success">Update</a>
										<a href="?mlebu=delcs&id=<?php
										echo $record['id_cs']
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
