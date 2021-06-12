<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">DataTables User</h6></div>
		<div class="card-body"><div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><!--untuk membuat tabel-->
				<thead>
					<tr><th>No</th><!--berfungsi untuk membuat judul kolom-->
						<th>Username</th>
						<th>Nama</th>
						<th>Grup</th>
						<th></th></tr>
				</thead>
				<tfoot>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Grup</th>
						<th></th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					$no = 1;
					foreach ($user as $baris) { //berfungsi untuk melakukan perulangan
						?>
					<tr><td><?php echo $no++; ?></td> <!--berfungsi untuk memberikan nomer-->
						<td><?php echo $baris->username; ?></td> <!--berfungsi untuk memnggil data dari field username-->
						<td><?php echo $baris->nama; ?></td><!--berfungsi untuk memnggil data dari field nama-->
						<td><?php echo $baris->grup; ?></td><!--berfungsi untuk memnggil data dari field grup-->
					</tr>
					<?php } ?>
				</tbody>
			</table>	
			<a href="<?php echo base_url('Mahasiswa/tambah')?>" class="btn btn-success btn-icon-split"><!--berfungsi untuk mberpindah ke tampilan tambah_mahasiswa-->
			<span class="text">Tambah Data</span></a>		
		</div>
	</div>
	</div>
</div>
