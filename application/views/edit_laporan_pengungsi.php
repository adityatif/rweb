<center>
		<h3>Edit Laporan</h3>
	</center>
	<?php foreach($lapor_pengungsi as $tampil){ ?>


	<form action="<?php echo base_url(). 'lapor/edit_data_laporan_pengungsi'; ?>" method="post">
		
		<!-- <input type="hidden" name="id" value="<?php echo $tampil->id ?>" ><br>
		Nis <input type="text" name="nis" value="<?php echo $tampil->nis ?>" ><br>
		Nama <input type="text" name="nama" value="<?php echo $tampil->nama ?>" ><br><br> -->

		


		

	<input type="text" name="id" value="<?php echo $tampil->id ?>" hidden><br><br>
	Nama	<input type="text" name="nama" value="<?php echo $tampil->nama ?>"><br><br>
	Email <input type="text" name="email" value="<?php echo $tampil->email ?>"><br><br>
	No. Hp <input type="text" name="no_hp" value="<?php echo $tampil->no_hp ?>"><br><br>
	Status <input type="radio" name="status" value="disetujui"> Disetujui<input type="radio" name="status" value="ditolak">Ditolak<br><br>
	Laporan <input type="text" name="laporan" value="<?php echo $tampil->laporan ?>"><br><br>
	
	<button class="button btn-success" type="reset">Reset</button>

		<button type="submit">Simpan</button>

	</form>	
	<?php } ?>

