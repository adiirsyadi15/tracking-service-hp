<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Data Customer Service</h3>
		</div>
		<div class="panel-body">
		<?php
		//$query = mysql_query("select * from detail_pelayanan dp join pelayanan p on dp.id_pelayanan = p.id_pelayanan join customer c on dp.id_customer = c.id_customer where c.id_hp = '".$_GET['id_hp']."'");
		//$query = mysql_query("select * from detail_pelayanan dp join pelayanan p on dp.id_pelayanan = p.id_pelayanan join customer c on dp.id_customer = c.id_customer join sparepart s on dp.id_sparepart = s.id_sparepart join teknisi t on p.id_teknisi = t.id_teknisi where c.id_hp = '".$_GET['id_hp']."'");
		//echo $query;
		$querytampil = mysql_query("select * from customer_service where id_cs='".$_GET['id']."'");
								
		while ($record = mysql_fetch_array($querytampil)) {
		/*
		echo "<pre>";
			print_r($record);
		echo "</pre>";
		*/
		?>
			<div class="col-md-4">
			<?php
				if($record['foto'] == NULL){
				echo "<img src='../images/default.png' alt='' class='img-thumbnail'/>";
				
				
			?>
				
				
				<?php
				}else{
				?>
				<img src="../images/<?php echo $record['foto']?>" alt="..." class="img-thumbnail">
				
				
				<?php
				}
				?>
			</div>
			<div class="col-md-8">
				
				<table class="table table-condensed">
					<tbody class="table_body">
						<tr>
							<td><label class="hasil-judul">ID Customer Service</label></td>
							<td><label class="hasil-isi"><?php echo $record['id_cs']; ?></label></td>
						</tr>
						<tr>
							<td><label class="hasil-judul">Nama Customer Service</label></td>
							<td><label class="hasil-isi"><?php echo $record['nama_cs']; ?></label></td>
						</tr>
						
						<tr>
							<td><label class="hasil-judul">Password</label></td>
							<td><label class="hasil-isi"><?php echo $record['password_cs']; ?></label></td>
						</tr><tr>
							<td><label class="hasil-judul">Alamat</label></td>
							<td><label class="hasil-isi"><?php echo $record['alamat']; ?></label></td>
						</tr>
						<tr>
							<td><label class="hasil-judul">Jenis Kelamin</label></td>
							<td><label class="hasil-isi"><?php echo $record['jk']; ?></label></td>
						</tr>
						<tr>
							<td><label class="hasil-judul">Nomor HP</label></td>
							<td><label class="hasil-isi"><?php echo $record['nomor_hp']; ?></label></td>
						</tr>
						<tr>
							<td><label class="hasil-judul">Status</label></td>
							<td><label class="hasil-isi"><?php echo $record['status']; ?></label></td>
						</tr>
					</tbody>
				</table>
				
				
			</div>
		</div>	
</div>

<?php
	}
?>