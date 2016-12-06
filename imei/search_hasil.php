<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Data Tracking</h3>
		</div>
		<div class="panel-body">
		<?php
		//$query = mysql_query("select * from detail_pelayanan dp join pelayanan p on dp.id_pelayanan = p.id_pelayanan join customer c on dp.id_customer = c.id_customer where c.id_hp = '".$_GET['id_hp']."'");
		$query = mysql_query("select * from detail_pelayanan dp join pelayanan p on dp.id_pelayanan = p.id_pelayanan join customer c on dp.id_customer = c.id_customer join sparepart s on dp.id_sparepart = s.id_sparepart join teknisi t on p.id_teknisi = t.id_teknisi where c.id_hp = '".$_GET['id_hp']."'");
		//echo $query;
		while ($record = mysql_fetch_array($query)) {
		?>
			<div class="col-md-6">
			
				<img src="../images/iphone_4.png" alt="..." class="img-thumbnail">
			</div>
				<div class="col-md-6">
				
				<table class="table table-condensed">
					<tbody class="table_body">
						<tr>
							<td><label class="hasil-judul">IMEI</label></td>
							<td><label class="hasil-isi"><?php echo $record['id_hp']; ?></label></td>
						</tr>
						<tr>
							<td><label class="hasil-judul">Nama Pemilik</label></td>
							<td><label class="hasil-isi"><?php echo $record['nama_customer']; ?></label></td>
						</tr>
						<tr>
							<td><label class="hasil-judul">Nama Teknisi</label></td>
							<td><label class="hasil-isi"><?php echo $record['nama_teknisi']; ?></label></td>
						</tr>
						<tr>
							<td><label class="hasil-judul">Sparepart yang di ganti</label></td>
							<td><label class="hasil-isi"><?php echo $record['nama']; ?></label></td>
						</tr><tr>
							<td><label class="hasil-judul">Tanggal Masuk</label></td>
							<td><label class="hasil-isi"><?php echo $record['tanggal_masuk']; ?></label></td>
						</tr>
						<tr>
							<td><label class="hasil-judul">Status</label></td>
							<td><label class="hasil-isi"><?php echo $record['status_perbaikan']; ?></label></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
				
				
			</div>
		</div>	
</div>

